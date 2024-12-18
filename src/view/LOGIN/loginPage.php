<?php
include "../../controller/user.php";

$user = new User();

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["login"])) {
    $identifier = trim($_POST["email"]);
    $kataSandi = $_POST["password"];
    $noHP = trim($_POST["phone"]);

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email tidak valid.";
    } elseif (strlen($kataSandi) < 8) {
        echo "Kata sandi harus minimal 8 karakter.";
    } else {
        if ($user->loginUser($identifier, $kataSandi)) {
            echo "Berhasil Login";
        } else {
            echo "Gagal Login";
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
    <img src="/assets/Union.png" class="absolute top-20 right-0 w-[573px]" alt="">

    <!-- greeting -->
    <div class="flex flex-col pt-20 pb-10 lg:pt-80 p-4 lg:p-8">
        <h3 class="font-nunito font-extrabold text-2xl z-10 lg:text-4xl text-[#ff9028] text-right lg:text-center">Selamat Datang!</h3>
        <p class="font-nunito font-medium text-xs z-10 lg:text-base text-[#828282] text-right lg:text-center">Nikmati kemudahan, transparansi, dan
            pelayanan terbaik untuk kemajuan desa kita bersama.</p>
    </div>

    <!-- form login -->
    <form class="bg-white p-8 w-96 lg:w-1/2 xl:w-1/3 mx-auto lg:mt-32" method="post">
        <!-- Email -->
        <div class="mt-8">
            <label for="email" class="block font-nunito font-medium text-[#828282]">Email / No. Whatsapp</label>
            <input type="email" id="email" name="email"
                class="w-full border-b-2 border-[#ff9028] focus:outline-none focus:border-[#ff9028]">
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

        <!-- Forgot Password -->
        <div class="mt-8">
            <label for="forgot" class="block font-nunito font-medium text-[#ff9028] text-right">Lupa Kata Sandi?</label>
        </div>

        <!-- Masuk -->
        <button type="submit"
            value="login"
            class="mt-8 w-full rounded-full bg-[#ff9028] text-white font-nunito font-extrabold py-2">Masuk</button>

        <!-- Daftar -->
        <div class="mt-8 mb-52 text-center">
            <p class="font-nunito font-medium text-[#828282]">Belum mempunyai akun? <a href="./daftarPage.php"
                    class="text-[#ff9028]">Buat Akun</a></p>
        </div>
    </form>

</body>

</html>