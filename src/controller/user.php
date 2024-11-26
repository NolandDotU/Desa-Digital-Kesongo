<?php

class User
{

    public $host = "127.0.0.1";
    public $nama = "dbkesongo";
    public $user = "root";
    public $kata_sandi = "";
    public $db;

}

public function __construct(){
    $this->db = new PDO( "mysql:host=$this->host;dbname=$this->nama", $this->username, $this->kata_sandi);

}

public function new_user($email, $kata_sandi, $nama, $no_hp, $kota){
    $query = $this->db->prepare("INSERT INTO tbkesongo(email,kata_sandi,nama,no_hp,kota) VALUES(:email,:kata_sandi,:nama,:no_hp,:kota)");
    $query->bindParam(":email", $email);
    $query->bindParam(":kata_sandi", $kata_sandi);
    $query->bindParam(":nama", $nama);
    $query->bindParam("no_hp", $no_hp);
    $query->bindParam("kota", $kota);

    if( $query->execute()){
        return true;
    }
    else{
        return false;
    }


}

public function login($email, $kata_sandi){
    $query = $this->db->prepare("SELECT * FROM tbkesongo WHERE email = :email AND kata_sandi = :kata_sandi");
    $query->bindParam(":email", $email);
    $query->bindParam(":kata_sandi", $kata_sandi);

    if( $query->execute()){
        return true;
    }
    else{
        return false;
    }
}

?>