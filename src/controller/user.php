<?php
class User
{
    private $host = "localhost:3307";
    private $nama = "dbkesongo";
    private $user = "root";
    private $kata_sandi = "";
    private $db;

    public function __construct()
    {
        try {
            $this->db = new PDO("mysql:host=$this->host;dbname=$this->nama", $this->user, $this->kata_sandi);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Koneksi database gagal: " . $e->getMessage());
        }
    }

    public function new_user($email, $kata_sandi, $nama, $kota, $no_hp)
    {
        $hashed_password = password_hash($kata_sandi, PASSWORD_BCRYPT); // Enkripsi kata sandi
        $query = $this->db->prepare("INSERT INTO tb_user (email, kata_sandi, nama, no_hp, kota) 
                                 VALUES (:email, :kata_sandi, :nama, :no_hp, :kota)");
        $query->bindParam(":email", $email);
        $query->bindParam(":kata_sandi", $hashed_password);
        $query->bindParam(":nama", $nama);
        $query->bindParam(":no_hp", $no_hp);
        $query->bindParam(":kota", $kota);

        return $query->execute();
    }

    public function cekUser($email)
    {
        $query = $this->db->prepare("SELECT * FROM tb_user WHERE email = :email");
        $query->bindParam(":email", $email);
        $query->execute();

        return $query->rowCount() > 0;
    }
    public function loginUser($identifier, $kata_sandi)
    {
        $query = $this->db->prepare("SELECT * FROM tb_user WHERE email = :identifier OR no_hp = :identifier");
        $query->bindParam(":identifier", $identifier);
        $query->execute();

        if ($query->rowCount() > 0) {
            $user = $query->fetch(PDO::FETCH_ASSOC);

            if (password_verify($kata_sandi, $user['kata_sandi'])) {
                return [
                    'status' => true,
                    'message' => 'Login berhasil',
                    'data' => $user
                ];
            } else {
                return [
                    'status' => false,
                    'message' => 'Kata sandi salah'
                ];
            }
        } else {
            return [
                'status' => false,
                'message' => 'Email atau nomor telepon tidak terdaftar'
            ];
        }
    }
}
