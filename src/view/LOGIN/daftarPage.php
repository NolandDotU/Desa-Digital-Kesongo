<?php
include "../../controller/user.php";

$user = new User();

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["register"])) {
    $email = trim($_POST["email"]);
    $nama = trim($_POST["name"]);
    $kataSandi = $_POST["password"];
    $kota = $_POST["lokasi"];
    $noHP = trim($_POST["phone"]);

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email tidak valid.";
    } elseif ($user->cekUser($email)) {
        echo "Email sudah digunakan.";
    } elseif (strlen($kataSandi) < 8) {
        echo "Kata sandi harus minimal 8 karakter.";
    } elseif (empty($nama) || empty($kota) || empty($noHP)) {
        echo "Semua field harus diisi.";
    } else {
        if ($user->new_user($email, $kataSandi, $nama, $kota, $noHP)) {
            echo "Berhasil Mendaftar";
        } else {
            echo "Gagal Mendaftar";
        }
    }
}
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../output.css">

    <!-- font Nunito Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap"
        rel="stylesheet">

</head>

<body class="bg-[#fefefe]">
    <!-- logo -->
    <div class="flex justify-start lg:justify-center">
        <img src="/assets/logo.png" class="w-28 lg:w-40 pl-4 pt-14 z-10 lg:pl-0 lg:pt-20" alt="">
    </div>

    <!-- greeting -->
    <div class="flex flex-col pt-9 pb-14 lg:pt-80 p-4 lg:p-8">
        <h3 class="font-nunito font-extrabold text-2xl z-10 lg:text-4xl text-[#ff9028] text-right lg:text-center">
            Selamat Datang!</h3>
        <p class="font-nunito font-medium text-xs z-10 lg:text-base text-[#828282] text-right lg:text-center">Nikmati
            kemudahan, transparansi, dan
            pelayanan terbaik untuk kemajuan desa kita bersama.</p>
    </div>

    <!-- form login -->
    <form class="bg-white p-8 w-96 lg:w-1/2 xl:w-1/3 mx-auto lg:mt-32" method="post">
        <!-- Nama -->
        <div class="mt-8">
            <label for="name" class="block font-nunito font-medium text-[#828282]">Nama</label>
            <input type="name" id="name" name="name"
                class="w-full border-b-2 border-[#ff9028] focus:outline-none focus:border-[#ff9028]">
        </div>

        <!-- Email -->
        <div class="mt-8">
            <label for="email" class="block font-nunito font-medium text-[#828282]">Email</label>
            <input type="email" id="email" name="email" required
                class="w-full border-b-2 border-[#ff9028] focus:outline-none focus:border-[#ff9028]">
        </div>

        <!-- No. Telepon -->
        <div class="mt-8">
            <label for="phone" class="block font-nunito font-medium text-[#828282]">No. Telepon</label>
            <input type="number" id="phone" name="phone"
                class="w-full border-b-2 border-[#ff9028] focus:outline-none focus:border-[#ff9028]">
        </div>

        <!-- Pilih Lokasi Anda -->
        <div class="mt-8">
            <label for="lokasi" class="block font-nunito font-medium text-[#828282]">Kota</label>
            <select id="lokasi" name="lokasi"
                class="w-full border-b-2 border-[#ff9028] focus:outline-none focus:border-[#ff9028]">
                <option value="" disabled selected>Kota</option>
                <option value="lokasi1">Lokasi 1</option>
                <option value="lokasi2">Lokasi 2</option>
                <option value="lokasi3">Lokasi 3</option>
            </select>
        </div>

        <!-- Kata Sandi -->
        <div class="mt-8">
            <label for="password" class="block font-nunito font-medium text-[#828282]">Kata Sandi</label>
            <div class="relative">
                <input type="password" id="password" name="password"
                    class="w-full border-b-2 border-[#ff9028] focus:outline-none focus:border-[#ff9028]">
                <button type="button" class="absolute inset-y-0 right-3 flex items-center text-gray-400">
                    <!-- Hide Password -->
                    <img src="/assets/Eye Hide.png" class="w-6 h-6 mb-2" alt="">
                </button>
            </div>
        </div>

        <!-- Syarat dan Ketentuan -->
        <div class="mt-4 flex items-center gap-2">
            <input type="checkbox" class="-mt-5">
            <label for="forgot" class="block font-nunito text-xs leading-5 tracking-tight text-[#828282] text-left">Saya
                setuju dan telah membaca <span class="text-[#ff9028]">Syarat</span> dan <span
                    class="text-[#ff9028]">Ketentuan</span> dari pihak Desa Digital</label>
        </div>

        <!-- Daftar -->
        <button type="submit" name="register" 
            class="mt-7 m-2 w-full rounded-full bg-[#ff9028] text-white font-nunito font-semibold py-3">
            Buat Akun
        </button>

        <!-- Masuk -->
        <div class="mt-4 mb-20 text-center">
            <p class="text-xs font-nunito font-medium text-[#828282]">Sudah mempunyai akun? <a href="./loginPage.php"
                    class="text-[#ff9028]">Masuk</a></p>
        </div>
    </form>

</body>

</html>