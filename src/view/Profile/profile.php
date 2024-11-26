<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../../output.css" />

  <!-- font Nunito Sans -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap"
    rel="stylesheet" />

  <!-- font Host Grotesk -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Host+Grotesk:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

  <title>Profile</title>
</head>

<body class="overflow-scroll">
  <div class="h-11 bg-primary w-full"></div>

  <!-- Nav -->
  <header
    class="flex bg-primary w-full justify-center items-center">
    <h6
      class="text-left font-nunito font-semibold text-lg pl-5 pb-2 textred text-white w-full justify-center">
      Profile
    </h6>

    <img src="/assets/uil_edit.png" class="pb-2 pr-5" alt="">
  </header>

  <!-- Profile & General -->
  <section>
    <div class="flex pl-[18px] pt-6 pb-6">
      <img src="/src/assets/sorry.jpg" class="w-14 h-14 object-cover rounded-full" alt="">
      <div class="pl-[18px]">
        <h6 class="font-nunito font-semibold text-lg text-[#333333] tracking-tight">Deandra Emilya</h6>
        <p class="text-sm font-medium font-nunito tracking-tight">yellowclaw@gmail.com</p>
      </div>
    </div>

    <!-- Saldo dan Poin  -->
    <div class="w-[339px] h-[68px] mx-auto bg-white rounded-xl shadow border border-[#f2f2f2]">
      <!-- saldo tabungan -->
      <div class="flex">
        <img src="/src/assets/WalletICon.svg" class="pl-[15px] pt-[19px] pb-[19px]" alt="">
        <div class="pl-[14px] pt-[18px]">
          <p class="text-[#828282] text-[10px] font-medium font-nunito tracking-tight">Saldo Tabungan</p>
          <h6 class="text-[#333333] text-sm font-semibold font-nunito tracking-tight">Rp 1.500.000</h6>
        </div>
        <img src="/src/assets/Vector 10.svg" class="pl-[31px] pt-[12px]" alt="">

        <!-- Poin Tabungan -->
        <img src="/src/assets/Star.svg" class="pl-[25px] pt-[20px] pb-[20px]" alt="">
        <div class="pl-[14px] pt-[18px]">
          <p class="text-[#828282] text-[10px] font-medium font-nunito tracking-tight">Poin Tabungan</p>
          <h6 class="text-[#333333] text-sm font-semibold font-nunito tracking-tight">150 <span class="text-[#828282] text-xs font-normal font-HK-Grostek tracking-tight">Poin</span></h6>
        </div>
      </div>
    </div>
  </section>

</body>

</html>