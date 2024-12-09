<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../output.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap"
        rel="stylesheet" />
    <script>
        const notif = document.getElementById("inputNIK");
    </script>
    <title>Info Desa</title>
</head>

<body class="overflow-scroll">
    <div class="h-11 bg-white w-full"></div>
    <header
        class="flex bg-white w-full h-fit p-2 justify-center items-center">
        <button class="bg-transparent border-none absolute left-5">
            <svg
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <g id="ic:round-arrow-back">
                    <path
                        id="Vector"
                        d="M18.9999 11.0002H7.82992L12.7099 6.12016C13.0999 5.73016 13.0999 5.09016 12.7099 4.70016C12.6174 4.60746 12.5075 4.53391 12.3865 4.48373C12.2656 4.43354 12.1359 4.40771 12.0049 4.40771C11.874 4.40771 11.7443 4.43354 11.6233 4.48373C11.5023 4.53391 11.3924 4.60746 11.2999 4.70016L4.70992 11.2902C4.61722 11.3827 4.54367 11.4926 4.49349 11.6135C4.44331 11.7345 4.41748 11.8642 4.41748 11.9952C4.41748 12.1261 4.44331 12.2558 4.49349 12.3768C4.54367 12.4978 4.61722 12.6076 4.70992 12.7002L11.2999 19.2902C11.3925 19.3827 11.5024 19.4562 11.6234 19.5063C11.7443 19.5564 11.874 19.5822 12.0049 19.5822C12.1359 19.5822 12.2655 19.5564 12.3865 19.5063C12.5074 19.4562 12.6173 19.3827 12.7099 19.2902C12.8025 19.1976 12.8759 19.0877 12.9261 18.9667C12.9762 18.8457 13.0019 18.7161 13.0019 18.5852C13.0019 18.4542 12.9762 18.3246 12.9261 18.2036C12.8759 18.0827 12.8025 17.9727 12.7099 17.8802L7.82992 13.0002H18.9999C19.5499 13.0002 19.9999 12.5502 19.9999 12.0002C19.9999 11.4502 19.5499 11.0002 18.9999 11.0002Z"
                        fill="#828282" />
                </g>
            </svg>
        </button>
        <h6
            class="text-center font-nunito font-semibold text-lg text-grey1 w-full justify-center">
            Layanan Desa
        </h6>
    </header>
    <section class="flex flex-col items-center bg-black ">

        <div id="modal-wrapper" class="fixed z-10 inset-0">
            <!-- modal pop up -->
            <div class="h-screen flex items-end w-full bg-grey1 bg-opacity-50">
                <div class="h-[40%] flex flex-col justify-start items-center bg-white w-full rounded-t-3xl ">
                    <div class="w-[90%] justify-between items-center flex bg-grey1 py-4">
                        <h1 class="w-full font-nunito text-base tracking-tight font-semibold">
                            Pengajuan Surat
                        </h1>
                        <button class="">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="ion:close">
                                    <path id="Vector" d="M13.5909 12L18.0441 7.54687C18.2554 7.3359 18.3743 7.04961 18.3745 6.75099C18.3748 6.45237 18.2564 6.16587 18.0455 5.95453C17.8345 5.74319 17.5482 5.62431 17.2496 5.62404C16.951 5.62378 16.6645 5.74215 16.4531 5.95312L12 10.4062L7.54687 5.95312C7.33553 5.74178 7.04888 5.62305 6.75 5.62305C6.45111 5.62305 6.16447 5.74178 5.95312 5.95312C5.74178 6.16447 5.62305 6.45111 5.62305 6.75C5.62305 7.04888 5.74178 7.33553 5.95312 7.54687L10.4062 12L5.95312 16.4531C5.74178 16.6645 5.62305 16.9511 5.62305 17.25C5.62305 17.5489 5.74178 17.8355 5.95312 18.0469C6.16447 18.2582 6.45111 18.3769 6.75 18.3769C7.04888 18.3769 7.33553 18.2582 7.54687 18.0469L12 13.5937L16.4531 18.0469C16.6645 18.2582 16.9511 18.3769 17.25 18.3769C17.5489 18.3769 17.8355 18.2582 18.0469 18.0469C18.2582 17.8355 18.3769 17.5489 18.3769 17.25C18.3769 16.9511 18.2582 16.6645 18.0469 16.4531L13.5909 12Z" fill="#333333" />
                                </g>
                            </svg>
                        </button>

                    </div>


                </div>

            </div>
        </div>

        <div class=" flex w-[90%] h-fit mx-4 py-4 justify-center bg-primeSupSoft items-center space-x-10 rounded-lg mt-9">
            <h1 class="text-base font-nunito text-grey1 max-w-44 font-semibold">Akses 46 Jenis Surat dari Desa Dengan Mudah.</h1>
            <div class="bg-primeExtSoft p-4 rounded-lg ">
                <svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="ri:file-list-3-fill">
                        <path id="Vector" d="M43.5417 50.4166H11.4584C9.63501 50.4166 7.88633 49.6923 6.59702 48.4029C5.3077 47.1136 4.58337 45.3649 4.58337 43.5416V6.87492C4.58337 6.26713 4.82482 5.68424 5.25459 5.25447C5.68436 4.82469 6.26725 4.58325 6.87504 4.58325H38.9584C39.5662 4.58325 40.1491 4.82469 40.5788 5.25447C41.0086 5.68424 41.25 6.26713 41.25 6.87492V34.3749H50.4167V43.5416C50.4167 45.3649 49.6924 47.1136 48.4031 48.4029C47.1138 49.6923 45.3651 50.4166 43.5417 50.4166ZM41.25 38.9583V43.5416C41.25 44.1494 41.4915 44.7323 41.9213 45.162C42.351 45.5918 42.9339 45.8333 43.5417 45.8333C44.1495 45.8333 44.7324 45.5918 45.1622 45.162C45.5919 44.7323 45.8334 44.1494 45.8334 43.5416V38.9583H41.25ZM13.75 16.0416V20.6249H32.0834V16.0416H13.75ZM13.75 25.2083V29.7916H32.0834V25.2083H13.75ZM13.75 34.3749V38.9583H25.2084V34.3749H13.75Z" fill="#FC8210" />
                    </g>
                </svg>

            </div>
        </div>
        <div class="flex flex-col space-y-4 mt-6 w-[90%]">
            <div class="flex items-center space-x-2 w-full p-2 bg-white rounded-lg border border-[#e0e0e0]">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="uil:search">
                        <path id="Vector" d="M21.71 20.2899L18 16.6099C19.4401 14.8143 20.1375 12.5352 19.9488 10.2412C19.7601 7.94721 18.6997 5.81269 16.9855 4.27655C15.2714 2.74041 13.0338 1.91941 10.7329 1.98237C8.43207 2.04534 6.24275 2.98747 4.61517 4.61505C2.98759 6.24263 2.04546 8.43194 1.9825 10.7328C1.91954 13.0337 2.74053 15.2713 4.27667 16.9854C5.81281 18.6996 7.94733 19.76 10.2413 19.9487C12.5353 20.1374 14.8144 19.44 16.61 17.9999L20.29 21.6799C20.383 21.7736 20.4936 21.848 20.6154 21.8988C20.7373 21.9496 20.868 21.9757 21 21.9757C21.132 21.9757 21.2627 21.9496 21.3846 21.8988C21.5065 21.848 21.6171 21.7736 21.71 21.6799C21.8903 21.4934 21.991 21.2442 21.991 20.9849C21.991 20.7256 21.8903 20.4764 21.71 20.2899ZM11 17.9999C9.61556 17.9999 8.26218 17.5894 7.11103 16.8202C5.95989 16.051 5.06268 14.9578 4.53287 13.6787C4.00306 12.3996 3.86443 10.9921 4.13453 9.63427C4.40463 8.27641 5.07131 7.02912 6.05028 6.05016C7.02925 5.07119 8.27653 4.4045 9.63439 4.13441C10.9923 3.86431 12.3997 4.00293 13.6788 4.53275C14.9579 5.06256 16.0511 5.95977 16.8203 7.11091C17.5895 8.26206 18 9.61544 18 10.9999C18 12.8564 17.2625 14.6369 15.9498 15.9497C14.637 17.2624 12.8565 17.9999 11 17.9999Z" fill="#BDBDBD" />
                    </g>
                </svg>
                <input type="text"
                    placeholder="Cari surat"
                    class="text-sm font-medium font-nunito h-full p-1 w-[90%] text-grey1 focus:outline-none ">
            </div>
            <div class="w-full flex flex-col ">
                <h1 class="text-base font-semibold font-nunito my-2">Halaman 1</h1>
                <!-- wrapper nya -->
                <div class="flex flex-col space-y-4">
                    <!-- card nya -->
                    <div class="flex items-start justify-center h-fit w-full space-x-2">
                        <img src="" alt=""
                            class="w-20 h-[100px] bg-grey5 rounded-md">
                        <div class="flex flex-col">
                            <h1 class="font-nunito text-base font-semibold text-grey1">Surat Keterangan Tidak Mampu</h1>
                            <p class="font-nunito text-[10px] font-medium text-grey3">Surat keterangan tidak mampu yang dikeluarkan dari desa untuk warga tidak mampu.</p>
                            <div class="flex justify-between items-center mt-4">
                                <h1 class="text-xs text-primary font-nunito tracking-tight">Lihat Contoh Surat</h1>
                                <button class=" bg-primary rounded-lg font-nunito text-white text-xs font-semibold w-fit p-2 h-fit px-4">Ajukan Surat</button>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-start justify-center h-fit w-full space-x-2">
                        <img src="" alt=""
                            class="w-20 h-[100px] bg-grey5 rounded-md">
                        <div class="flex flex-col">
                            <h1 class="font-nunito text-base font-semibold text-grey1">Surat Keterangan Tidak Mampu</h1>
                            <p class="font-nunito text-[10px] font-medium text-grey3">Surat keterangan tidak mampu yang dikeluarkan dari desa untuk warga tidak mampu.</p>
                            <div class="flex justify-between items-center mt-4">
                                <h1 class="text-xs text-primary font-nunito tracking-tight">Lihat Contoh Surat</h1>
                                <button class=" bg-primary rounded-lg font-nunito text-white text-xs font-semibold w-fit p-2 h-fit px-4">Ajukan Surat</button>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-start justify-center h-fit w-full space-x-2">
                        <img src="" alt=""
                            class="w-20 h-[100px] bg-grey5 rounded-md">
                        <div class="flex flex-col">
                            <h1 class="font-nunito text-base font-semibold text-grey1">Surat Keterangan Tidak Mampu</h1>
                            <p class="font-nunito text-[10px] font-medium text-grey3">Surat keterangan tidak mampu yang dikeluarkan dari desa untuk warga tidak mampu.</p>
                            <div class="flex justify-between items-center mt-4">
                                <h1 class="text-xs text-primary font-nunito tracking-tight">Lihat Contoh Surat</h1>
                                <button class=" bg-primary rounded-lg font-nunito text-white text-xs font-semibold w-fit p-2 h-fit px-4">Ajukan Surat</button>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-start justify-center h-fit w-full space-x-2">
                        <img src="" alt=""
                            class="w-20 h-[100px] bg-grey5 rounded-md">
                        <div class="flex flex-col">
                            <h1 class="font-nunito text-base font-semibold text-grey1">Surat Keterangan Tidak Mampu</h1>
                            <p class="font-nunito text-[10px] font-medium text-grey3">Surat keterangan tidak mampu yang dikeluarkan dari desa untuk warga tidak mampu.</p>
                            <div class="flex justify-between items-center mt-4">
                                <h1 class="text-xs text-primary font-nunito tracking-tight">Lihat Contoh Surat</h1>
                                <button class=" bg-primary rounded-lg font-nunito text-white text-xs font-semibold w-fit p-2 h-fit px-4">Ajukan Surat</button>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-start justify-center h-fit w-full space-x-2">
                        <img src="" alt=""
                            class="w-20 h-[100px] bg-grey5 rounded-md">
                        <div class="flex flex-col">
                            <h1 class="font-nunito text-base font-semibold text-grey1">Surat Keterangan Tidak Mampu</h1>
                            <p class="font-nunito text-[10px] font-medium text-grey3">Surat keterangan tidak mampu yang dikeluarkan dari desa untuk warga tidak mampu.</p>
                            <div class="flex justify-between items-center mt-4">
                                <h1 class="text-xs text-primary font-nunito tracking-tight">Lihat Contoh Surat</h1>
                                <button class=" bg-primary rounded-lg font-nunito text-white text-xs font-semibold w-fit p-2 h-fit px-4">Ajukan Surat</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-between items-center w-full py-8">
                    <button class="flex justify-center items-center h-12 px-8 text-grey4 text-sm font-semibold  bg-white rounded-3xl border border-[#f2f2f2] font-nunito">Sebelumnya</button>
                    <button class="flex justify-center items-center h-12 px-8 text-primary text-sm font-semibold  bg-primeSupSoft rounded-3xl border border-[#f2f2f2] font-nunito">Selanjutnya</button>

                </div>
            </div>
        </div>
    </section>
</body>

</html>