<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700;800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Open+Sans:wght@300;400;500;600;700;800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="./css/style.css">

        <title> Home </title>
    </head>

    <body>

        <!-- Desktop Navigation Bar -->
        <header class="w-full fixed bg-white shadow-kategori hidden lg:block z-10">
            <div class="container flex justify-between w-full ">

                <!-- Logo (Kiri) -->
                <div class="w-[8%] ">
                    <img class="w-full" src="../src/img/logoLain.png" alt="Logo Foundit">
                </div>

                <!-- Navigasi Halaman (Kanan) -->
                <div class="flex justify-around items-center w-[75%] ">
                    <a class="text-sm font-montserrat font-semibold xl:text-base" href="#"> About Us </a>

                    <a class="text-sm font-montserrat font-semibold xl:text-base" href="#"> Laporan </a>

                    <a class="text-sm font-montserrat font-semibold xl:text-base" href="#"> Chatting </a>

                    <a class="text-sm font-montserrat font-semibold xl:text-base" href="#"> Settings </a>

                    <form class="w-[35%] relative xl:w-[28%]">
                        <input id="search" name="search" class="w-full pl-12 py-2 text-xs font-poppins font-medium placeholder-[#244CA5] bg-white border border-[#244CA5] rounded-lg xl:text-sm" type="text" placeholder="Cari Barangmu Yang Hilang !">

                        <label for="search" class="absolute top-1/2 left-2 -translate-y-1/2">
                            <svg class="w-1 h-1 text-[#244CA5] md:w-7 md:h-7" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="10" cy="10" r="7" />  <line x1="21" y1="21" x2="15" y2="15" /></svg>
                        </label>
                    </form>
                </div>

                <!-- Profile and Notifications -->
                <div class="flex items-center w-[15%]">

                    <!-- Notifications -->
                    <span class="mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-[#244CA5]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0M3.124 7.5A8.969 8.969 0 015.292 3m13.416 0a8.969 8.969 0 012.168 4.5" />
                          </svg>
                    </span>

                    <!-- Profile User -->
                    <div class="w-10 h-10 mr-3 rounded-full overflow-hidden">
                        <img class="w-full h-full" src="../src/img/tim.png" alt="Profile Dummy">
                    </div>

                    <!-- Nama User -->
                    <p class="text-lg font-montserrat font-semibold"> Reza </p>

                </div>

            </div>
        </header>

        
        <!-- Section Atas (Header) -->
        <section class="h-[25vh] bg-[#8D9EFF] rounded-b-2xl relative lg:hidden">
            <div class="container">
                <div class="flex flex-wrap">

                    <!-- Menu, Logo, dan Profile -->
                    <header class="flex justify-between items-center w-[90%] absolute top-12 left-1/2 -translate-x-1/2 -transalate-y-1/2 md:w-[85%]">
                        
                        <!-- Menu Span -->
                        <div class="span-container flex flex-col justify-between w-8 h-6">
                            <span class="sp-1 w-[60%] h-1 rounded-xl bg-white transition-all ease-in-out duration-200"></span>
                            <span class="sp-2 w-[80%] h-1 rounded-xl bg-white transition-all ease-in-out duration-200"></span>
                            <span class="sp-3 w-[100%] h-1 rounded-xl bg-white"></span>
                        </div>

                        <!-- Foundit -->
                        <h1 class="text-2xl text-white font-montserrat font-extrabold"> Foundit. </h1>

                        <!-- Profile User -->
                        <div class="w-12 h-12 rounded-full overflow-hidden">
                            <img class="w-full h-full" src="../src/img/tim.png" alt="Profile Dummy">
                        </div>

                    </header>

                    <!-- Search Bar -->
                    <div class="w-[88%] absolute -bottom-10 left-1/2 -translate-x-1/2 -translate-y-1/2 sm:-bottom-11 md:w-[83%]">
                        <form class="w-full relative">
                            
                            <input id="search" name="search" class="w-full px-5 py-3 text-xs placeholder-black font-poppins font-extralight bg-white rounded-lg shadow-3xl sm:py-4 sm:text-sm" type="text" placeholder="Cari barang kamu yang hilang !">

                            <label for="search" class="p-1 bg-[#8D9EFF] rounded-lg absolute top-1/2 right-3 -translate-y-1/2 sm:p-1.5">
                                <svg class="w-6 h-6 text-white md:w-7 md:h-7"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="10" cy="10" r="7" />  <line x1="21" y1="21" x2="15" y2="15" /></svg>
                            </label>

                        </form>
                    </div>

                </div>
            </div>
        </section>
        <!-- Section Atas (Header) End -->


        <!-- Home Opening Section  -->
        <section class="pt-36 hidden lg:block">
            <div class="container">
                <div class="w-[95%] h-[90vh] mx-auto pt-8 rounded-[40px] bg-no-repeat bg-center bg-cover relative" style="background-image: url(../src/img/bgHome.png);">

                    <!-- Tagline Home -->
                    <div class="text-center relative z-[2]">
                    
                        <p class="mb-4 text-5xl text-white font-jost font-semibold"> Kamu Kehilangan Barang ? </p>

                        <p class="mb-8 text-5xl text-white font-jost font-semibold"> Coba Cari Di Foundit. </p>

                        <p class="mb-12 text-base text-white font-openSans font-semibold"> Kamu bisa mencari dan membuat laporan barangmu yang hilang ! </p>

                        <button class="px-12 py-3 text-lg text-white font-montserrat font-bold rounded-[38px] bg-[#8D9EFF]"> Buat Laporan Kehilangan </button>
                    
                    </div>

                    <!-- Sticker Home -->
                    <div class="w-[48%] absolute -bottom-[160px] left-1/2 -translate-x-1/2 -translate-y-1/2 z-[1] xl:w-[38%] 2xl:w-[36%]">
                        <img class="w-full z-[1]" src="../src/img/registerSticker.png" alt="Sticker Home">
                    </div>

                    <!-- Search Bar -->
                    <div class="w-[60%] absolute -bottom-12 left-1/2 -translate-x-1/2 -translate-y-1/2 z-[3]">
                        <form class="w-full relative">
                            
                            <input id="search" name="search" class="w-full px-5 py-3 text-base placeholder-black font-poppins font-extralight bg-white rounded-lg shadow-3xl xl:py-5 xl:px-7" type="text" placeholder="Cari barang kamu yang hilang !">

                            <label for="search" class="p-1 bg-[#8D9EFF] rounded-lg absolute top-1/2 right-3 -translate-y-1/2 sm:p-1.5">
                                <svg class="w-6 h-6 text-white md:w-7 md:h-7"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="10" cy="10" r="7" />  <line x1="21" y1="21" x2="15" y2="15" /></svg>
                            </label>

                        </form>
                    </div>

                </div>
            </div>
        </section>
        <!-- Home Opening Section End -->
        

        <!-- Kategori Barang Section -->
        <section class="mt-11 sm:mt-14 lg:mt-16">
            <div class="container">
                <div class="flex flex-wrap">

                    <!-- Judul Kategori Barang -->
                    <div class="w-full mb-3 lg:hidden">
                        <h1 class="text-lg text-[#1D2A30] font-poppins font-semibold md:text-xl"> Kategori Barang Hilang </h1>
                    </div>

                    <!-- Slider Kategori -->
                    <div class="flex w-full py-3 overflow-x-auto sm:justify-between sm:overflow-hidden lg:justify-around">

                        <!-- Elektronik -->
                        <div class="flex-shrink-0 flex flex-col justify-between w-[25%] h-[95px] mr-4 bg-[#8D72E1] rounded-xl shadow-kategori sm:w-[23%] sm:mr-0 sm:flex-row sm:items-center sm:justify-center lg:w-[20%] xl:w-[18%] xl:h-[110px]">

                            <div class="pl-2 pt-2 sm:pl-0 sm:pt-0">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-white lg:w-9 lg:h-9 xl:w-10 xl:h-10">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                                </svg>
                            </div>

                            <p class="pb-3 text-sm text-center text-white font-poppins font-semibold sm:pl-1 sm:pb-0 md:pl-3 md:text-base xl:text-lg"> Elektronik </p>
                        </div>

                        <!-- Kendaraan -->
                        <div class="flex-shrink-0 flex flex-col justify-between w-[25%] h-[95px] mr-4 bg-[#B9E0FF] rounded-xl shadow-kategori sm:w-[23%] sm:mr-0 sm:flex-row sm:items-center sm:justify-center lg:w-[20%] xl:w-[18%] xl:h-[110px]">

                            <div class="pl-2 pt-2 sm:pl-0 sm:pt-0">
                                <svg class="w-8 h-8 text-white lg:w-9 lg:h-9 xl:w-10 xl:h-10"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="7" cy="17" r="2" />  <circle cx="17" cy="17" r="2" />  <path d="M5 17h-2v-6l2-5h9l4 5h1a2 2 0 0 1 2 2v4h-2m-4 0h-6m-6 -6h15m-6 0v-5" /></svg>
                            </div>

                            <p class="pb-3 text-sm text-center text-white font-poppins font-semibold sm:pl-1 sm:pb-0 md:pl-3 md:text-base xl:text-lg"> Kendaraan </p>
                        </div>

                        <!-- Aksesoris -->
                        <div class="flex-shrink-0 flex flex-col justify-between w-[25%] h-[95px] mr-4 bg-[#8D9EFF] rounded-xl shadow-kategori sm:w-[23%] sm:mr-0 sm:flex-row sm:items-center sm:justify-center lg:w-[20%] xl:w-[18%] xl:h-[110px]">

                            <div class="pl-2 pt-2 sm:pl-0 sm:pt-0">
                                <svg class="w-8 h-8 text-white lg:w-9 lg:h-9 xl:w-10 xl:h-10"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <circle cx="12" cy="12" r="7" />  <polyline points="12 9 12 12 13.5 13.5" />  <path d="M16.51 17.35l-.35 3.83a2 2 0 0 1-2 1.82H9.83a2 2 0 0 1-2-1.82l-.35-3.83m.01-10.7l.35-3.83A2 2 0 0 1 9.83 1h4.35a2 2 0 0 1 2 1.82l.35 3.83" /></svg>
                            </div>

                            <p class="pb-3 text-sm text-center text-white font-poppins font-semibold sm:pl-1 sm:pb-0 md:pl-3 md:text-base xl:text-lg"> Aksesoris </p>
                        </div>

                        <!-- All Item -->
                        <div class="flex-shrink-0 flex flex-col justify-between w-[25%] h-[95px] mr-4 bg-[#244CA5] rounded-xl shadow-kategori sm:w-[23%] sm:mr-0 sm:flex-row sm:items-center sm:justify-center lg:w-[20%] xl:w-[18%] xl:h-[110px]">

                            <div class="pl-2 pt-2 sm:pl-0 sm:pt-0">
                                <svg class="w-8 h-8 text-white lg:w-9 lg:h-9 xl:w-10 xl:h-10"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <rect x="4" y="4" width="16" height="16" rx="2" />  <path d="M4 13h3l3 3h4l3 -3h3" /></svg>
                            </div>

                            <p class="pb-3 text-sm text-center text-white font-poppins font-semibold sm:pl-1 sm:pb-0 md:pl-3 md:text-base xl:text-lg"> All Item </p>
                        </div>

                    </div>

                </div>
            </div>
        </section>
        <!-- Kategori Barang Section End -->

        
        <!-- Garis Pembatas -->
        <div class="container mt-14 hidden lg:block">
            <span class="w-full h-[2px] bg-[#BDC1C2] rounded-lg block"></span>
        </div>


        <!-- Found Item Section -->
        <section class="mt-8 lg:mt-10">
            <div class="container">
                <div class="flex flex-wrap">

                    <!-- Judul Found Item -->
                    <div class="w-full mb-3">
                        <h1 class="text-lg text-[#1D2A30] font-poppins font-semibold md:text-xl lg:text-3xl"> Temuan Baru </h1>
                    </div>          
                    
                    <!-- Slider Found Item -->
                    <div class="flex gap-5 w-full py-3 overflow-x-auto lg:gap-6">

                        <!-- Card Found Item -->
                        <div class="flex-shrink-0 w-[45%] bg-white rounded-xl shadow-barang overflow-hidden sm:w-[35%] md:w-[28%] lg:w-[20%] xl:w-[18%]">

                            <!-- Image Container -->
                            <div class="w-full h-[130px] relative">  
                                <img class="w-full h-full" src="../src/img/dompetHitam.png" alt="Gambar Barang">
                            </div>

                            <!-- Deskripsi Kehilangan -->
                            <div class="w-full px-2 py-3">

                                <!-- Nama Barang -->
                                <h1 class="mb-2 text-base font-poppins font-semibold lg:text-lg"> Dompet Cokelat </h1>

                                <!-- Location Barang -->
                                <div class="flex items-center w-full mb-[5px]">
                                    <span class="mr-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[15px] h-[15px]">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                        </svg>
                                    </span> 

                                    <p class="text-xs font-poppins font-normal lg:text-sm"> Bank Mandiri Telkom </p>
                                </div>

                                <!-- Tanggal Barang -->
                                <div class="flex items-center w-full">
                                    <span class="mr-[5px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[15px] h-[15px]">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                        </svg>  
                                    </span>
    
                                    <p class="text-xs font-poppins font-normal lg:text-sm"> 29 / 03 / 2023 </p>
                                </div>
                            </div>

                        </div>

                        <!-- Card Found Item -->
                        <div class="flex-shrink-0 w-[45%] bg-white rounded-xl shadow-barang overflow-hidden sm:w-[35%] md:w-[28%] lg:w-[20%] xl:w-[18%]">

                            <!-- Image Container -->
                            <div class="w-full h-[130px] relative">  
                                <img class="w-full h-full" src="../src/img/dompetPutih.png" alt="Gambar Barang">
                            </div>

                            <!-- Deskripsi Kehilangan -->
                            <div class="w-full px-2 py-3">

                                <!-- Nama Barang -->
                                <h1 class="mb-2 text-base font-poppins font-semibold lg:text-lg"> Dompet Pink </h1>

                                <!-- Location Barang -->
                                <div class="flex items-center w-full mb-[5px]">
                                    <span class="mr-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[15px] h-[15px]">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                        </svg>
                                    </span> 

                                    <p class="text-xs font-poppins font-normal lg:text-sm"> Bank Mandiri Telkom </p>
                                </div>

                                <!-- Tanggal Barang -->
                                <div class="flex items-center w-full">
                                    <span class="mr-[5px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[15px] h-[15px]">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                        </svg>  
                                    </span>
    
                                    <p class="text-xs font-poppins font-normal lg:text-sm"> 29 / 03 / 2023 </p>
                                </div>
                            </div>

                        </div>

                        <!-- Card Found Item -->
                        <div class="flex-shrink-0 w-[45%] bg-white rounded-xl shadow-barang overflow-hidden sm:w-[35%] md:w-[28%] lg:w-[20%] xl:w-[18%]">

                            <!-- Image Container -->
                            <div class="w-full h-[130px] relative">  
                                <img class="w-full h-full" src="../src/img/dompetHitam.png" alt="Gambar Barang">
                            </div>

                            <!-- Deskripsi Kehilangan -->
                            <div class="w-full px-2 py-3">

                                <!-- Nama Barang -->
                                <h1 class="mb-2 text-base font-poppins font-semibold lg:text-lg"> Dompet Cokelat </h1>

                                <!-- Location Barang -->
                                <div class="flex items-center w-full mb-[5px]">
                                    <span class="mr-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[15px] h-[15px]">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                        </svg>
                                    </span> 

                                    <p class="text-xs font-poppins font-normal lg:text-sm"> Bank Mandiri Telkom </p>
                                </div>

                                <!-- Tanggal Barang -->
                                <div class="flex items-center w-full">
                                    <span class="mr-[5px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[15px] h-[15px]">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                        </svg>  
                                    </span>
    
                                    <p class="text-xs font-poppins font-normal lg:text-sm"> 29 / 03 / 2023 </p>
                                </div>
                            </div>

                        </div>

                        <!-- Card Found Item -->
                        <div class="flex-shrink-0 w-[45%] bg-white rounded-xl shadow-barang overflow-hidden sm:w-[35%] md:w-[28%] lg:w-[20%] xl:w-[18%]">

                            <!-- Image Container -->
                            <div class="w-full h-[130px] relative">  
                                <img class="w-full h-full" src="../src/img/dompetPutih.png" alt="Gambar Barang">
                            </div>

                            <!-- Deskripsi Kehilangan -->
                            <div class="w-full px-2 py-3">

                                <!-- Nama Barang -->
                                <h1 class="mb-2 text-base font-poppins font-semibold lg:text-lg"> Dompet Pink </h1>

                                <!-- Location Barang -->
                                <div class="flex items-center w-full mb-[5px]">
                                    <span class="mr-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[15px] h-[15px]">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                        </svg>
                                    </span> 

                                    <p class="text-xs font-poppins font-normal lg:text-sm"> Bank Mandiri Telkom </p>
                                </div>

                                <!-- Tanggal Barang -->
                                <div class="flex items-center w-full">
                                    <span class="mr-[5px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[15px] h-[15px]">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                        </svg>  
                                    </span>
    
                                    <p class="text-xs font-poppins font-normal lg:text-sm"> 29 / 03 / 2023 </p>
                                </div>
                            </div>

                        </div>

                        <!-- Card Found Item -->
                        <div class="flex-shrink-0 w-[45%] bg-white rounded-xl shadow-barang overflow-hidden sm:w-[35%] md:w-[28%] lg:w-[20%] xl:w-[18%]">

                            <!-- Image Container -->
                            <div class="w-full h-[130px] relative">  
                                <img class="w-full h-full" src="../src/img/dompetPutih.png" alt="Gambar Barang">
                            </div>

                            <!-- Deskripsi Kehilangan -->
                            <div class="w-full px-2 py-3">

                                <!-- Nama Barang -->
                                <h1 class="mb-2 text-base font-poppins font-semibold lg:text-lg"> Dompet Pink </h1>

                                <!-- Location Barang -->
                                <div class="flex items-center w-full mb-[5px]">
                                    <span class="mr-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[15px] h-[15px]">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                        </svg>
                                    </span> 

                                    <p class="text-xs font-poppins font-normal lg:text-sm"> Bank Mandiri Telkom </p>
                                </div>

                                <!-- Tanggal Barang -->
                                <div class="flex items-center w-full">
                                    <span class="mr-[5px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[15px] h-[15px]">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                        </svg>  
                                    </span>
    
                                    <p class="text-xs font-poppins font-normal lg:text-sm"> 29 / 03 / 2023 </p>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </section>
        <!-- Found Item Section End -->


        <!-- Garis Pembatas -->
        <div class="container mt-14 hidden lg:block">
            <span class="w-full h-[2px] bg-[#BDC1C2] rounded-lg block"></span>
        </div>


        <!-- Lost Item Section -->
        <section class="mt-8 pb-24 lg:mt-10 lg:pb-0">
            <div class="container">
                <div class="flex flex-wrap">

                    <!-- Judul Lost Item -->
                    <div class="w-full mb-3">
                        <h1 class="text-lg text-[#1D2A30] font-poppins font-semibold md:text-xl lg:text-3xl"> Baru Hilang </h1>
                    </div>          
                    
                    <!-- Slider Lost Item -->
                    <div class="flex gap-5 w-full py-3 overflow-x-auto lg:gap-7">

                        <!-- Card Lost Item -->
                        <div class="flex-shrink-0 w-[45%] bg-white rounded-xl shadow-barang overflow-hidden sm:w-[35%] md:w-[28%] lg:w-[20%] xl:w-[18%]">

                            <!-- Image Container -->
                            <div class="w-full h-[130px] relative">  
                                <img class="w-full h-full" src="../src/img/dompetHitam.png" alt="Gambar Barang">
                            </div>

                            <!-- Deskripsi Kehilangan -->
                            <div class="w-full p-2">

                                <!-- Nama Barang -->
                                <h1 class="mb-2 text-base font-poppins font-semibold lg:text-lg"> Dompet Cokelat </h1>

                                <!-- Tanggal Barang -->
                                <div class="flex items-center w-full mb-3">
                                    <span class="mr-[5px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[15px] h-[15px]">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                        </svg>  
                                    </span>
    
                                    <p class="text-xs font-poppins font-normal lg:text-sm"> 29 / 03 / 2023 </p>
                                </div>

                                <!-- Berhadiah / Tidak Berhadiah -->
                                <div class="flex justify-end items-center w-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                                    </svg>  
                                </div>
                            </div>

                        </div>

                        <!-- Card Lost Item -->
                        <div class="flex-shrink-0 w-[45%] bg-white rounded-xl shadow-barang overflow-hidden sm:w-[35%] md:w-[28%] lg:w-[20%] xl:w-[18%]">

                            <!-- Image Container -->
                            <div class="w-full h-[130px] relative">  
                                <img class="w-full h-full" src="../src/img/dompetPutih.png" alt="Gambar Barang">
                            </div>

                            <!-- Deskripsi Kehilangan -->
                            <div class="w-full p-2">

                                <!-- Nama Barang -->
                                <h1 class="mb-2 text-base font-poppins font-semibold lg:text-lg"> Dompet Pink </h1>

                                <!-- Tanggal Barang -->
                                <div class="flex items-center w-full">
                                    <span class="mr-[5px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[15px] h-[15px]">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                        </svg>  
                                    </span>
    
                                    <p class="text-xs font-poppins font-normal lg:text-sm"> 29 / 03 / 2023 </p>
                                </div>
                            </div>

                        </div>

                        <!-- Card Lost Item -->
                        <div class="flex-shrink-0 w-[45%] bg-white rounded-xl shadow-barang overflow-hidden sm:w-[35%] md:w-[28%] lg:w-[20%] xl:w-[18%]">

                            <!-- Image Container -->
                            <div class="w-full h-[130px] relative">  
                                <img class="w-full h-full" src="../src/img/dompetHitam.png" alt="Gambar Barang">
                            </div>

                            <!-- Deskripsi Kehilangan -->
                            <div class="w-full p-2">

                                <!-- Nama Barang -->
                                <h1 class="mb-2 text-base font-poppins font-semibold lg:text-lg"> Dompet Cokelat </h1>

                                <!-- Tanggal Barang -->
                                <div class="flex items-center w-full">
                                    <span class="mr-[5px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[15px] h-[15px]">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                        </svg>  
                                    </span>
    
                                    <p class="text-xs font-poppins font-normal lg:text-sm"> 29 / 03 / 2023 </p>
                                </div>

                                <!-- Berhadiah / Tidak Berhadiah -->
                                <div class="flex justify-end items-center w-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                                    </svg>  
                                </div>
                            </div>

                        </div>

                        <!-- Card Lost Item -->
                        <div class="flex-shrink-0 w-[45%] bg-white rounded-xl shadow-barang overflow-hidden sm:w-[35%] md:w-[28%] lg:w-[20%] xl:w-[18%]">

                            <!-- Image Container -->
                            <div class="w-full h-[130px] relative">  
                                <img class="w-full h-full" src="../src/img/dompetPutih.png" alt="Gambar Barang">
                            </div>

                            <!-- Deskripsi Kehilangan -->
                            <div class="w-full p-2">

                                <!-- Nama Barang -->
                                <h1 class="mb-2 text-base font-poppins font-semibold lg:text-lg"> Dompet Pink </h1>

                                <!-- Tanggal Barang -->
                                <div class="flex items-center w-full">
                                    <span class="mr-[5px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[15px] h-[15px]">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                        </svg>  
                                    </span>
    
                                    <p class="text-xs font-poppins font-normal lg:text-sm"> 29 / 03 / 2023 </p>
                                </div>
                            </div>

                        </div>

                        <!-- Card Lost Item -->
                        <div class="flex-shrink-0 w-[45%] bg-white rounded-xl shadow-barang overflow-hidden sm:w-[35%] md:w-[28%] lg:w-[20%] xl:w-[18%]">

                            <!-- Image Container -->
                            <div class="w-full h-[130px] relative">  
                                <img class="w-full h-full" src="../src/img/dompetPutih.png" alt="Gambar Barang">
                            </div>

                            <!-- Deskripsi Kehilangan -->
                            <div class="w-full p-2">

                                <!-- Nama Barang -->
                                <h1 class="mb-2 text-base font-poppins font-semibold lg:text-lg"> Dompet Pink </h1>

                                <!-- Tanggal Barang -->
                                <div class="flex items-center w-full">
                                    <span class="mr-[5px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[15px] h-[15px]">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                        </svg>  
                                    </span>
    
                                    <p class="text-xs font-poppins font-normal lg:text-sm"> 29 / 03 / 2023 </p>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </section>
        <!-- Lost Item Section End -->


        <!-- Garis Pembatas -->
        <div class="container mt-10 hidden lg:block">
            <span class="w-full h-[2px] bg-[#BDC1C2] rounded-lg block"></span>
        </div>


        <!-- Aside Section -->
        <section class="w-[90%] h-[60vh] mx-auto mt-48 mb-10 hidden lg:block relative">

            <!-- Container Cari Sekarang -->
            <div class="flex justify-around w-[70%] py-10 bg-gradient-to-r from-[#4870C0] to-[#a7b3fa] rounded-3xl absolute -top-7 left-1/2 -translate-x-1/2 -translate-y-1/2">

                <!-- Headline -->
                <div class="text-3xl text-white font-jost font-semibold">
                    <p> Kamu Kehilangan Barang ? </p>

                    <p> Coba Cari Di Foundit. </p>
                </div>

                <!-- Button -->
                <div class="self-center">
                    <button class="px-10 py-4 text-lg text-white bg-[#395EB4] rounded-[52px]"> Cari Sekarang! </button>
                </div>

            </div>
            

            <div class="container h-full bg-[#EEEEEE] rounded-3xl shadow-kategori">
                <div class="flex flex-wrap justify-center items-center h-full">

                    <!-- Kiri -->
                    <div class="w-[40%]">

                        <!-- Logo -->
                        <div class="w-[30%] mb-3">
                            <img class="w-full" src="../src/img/logoLain.png" alt="Logo Foundit">
                        </div>

                        <!-- Text Aside -->
                        <p class="mb-3 text-base text-justify font-openSans font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi accusamus iusto, quod distinctio cum officia omnis at exercitationem ut sunt.</p>

                        <!-- Media Sosial -->
                        <div class="flex gap-4 w-full">

                            <!-- Instagram -->
                            <span class="p-[6px] bg-[#231656] rounded-full">
                                <svg class="w-4 h-4 text-white"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <rect x="4" y="4" width="16" height="16" rx="4" />  <circle cx="12" cy="12" r="3" />  <line x1="16.5" y1="7.5" x2="16.5" y2="7.501" /></svg>
                            </span>

                            <!-- Facebook -->
                            <span class="p-[6px] bg-[#231656] rounded-full">
                                <svg class="w-4 h-4 text-white"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" /></svg>
                            </span>

                            <!-- Twitter -->
                            <span class="p-[6px] bg-[#231656] rounded-full">
                                <svg class="w-4 h-4 text-white"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z" /></svg>
                            </span>

                            <!-- Youtube -->
                            <span class="p-[6px] bg-[#231656] rounded-full">
                                <svg class="w-4 h-4 text-white"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z" />  <polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02" /></svg>
                            </span>
                        </div>

                    </div>

                    <!-- Garis tengah -->
                    <span class="w-[1px] h-[65%] mx-5 bg-[#17282F] block"></span>

                    <!-- Kanan -->
                    <div class="w-[40%]">

                        <!-- Menu Navigasi -->
                        <div class="w-full">

                            <!-- Judul Menu -->
                            <p class="mb-3 text-2xl text-[#3D3269] font-montserrat font-semibold"> Menu </p>

                            <!-- Navigasi -->
                            <div class="flex justify-between w-full text-base text-[#244CA5] font-medium">
                                <a href="#"> About us </a>
                                <a href="#"> Laporan </a>
                                <a href="#"> Chatting </a>
                                <a href="#"> Settings </a>
                            </div>

                            <!-- Garis -->
                            <span class="w-full h-[1px] my-10 bg-[#17282F] block"></span>

                            <p class="text-sm text-[#8D72E1] text-center font-poppins font-medium"> © 2022 Foundit. All rights reserved. </p>

                        </div>

                    </div>

                </div>
            </div>

        </section>
        <!-- Aside Section End -->


        <!-- Bottom Navigation -->
        <header class="bottom-nav w-[88%] py-[14px] bg-[#8D72E1] rounded-2xl fixed -bottom-32 left-1/2 -translate-x-1/2 -translate-y-1/2 transition-all ease-in-out duration-500 lg:hidden">
            <div class="w-full flex justify-between relative">

                <!-- Botom Navigasi Kiri -->
                <div class="flex w-[45%] justify-evenly">

                    <!-- Home -->
                    <button title="Home">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                            <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                    </button>
        
                    <!-- Produk -->
                    <button title="Product">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                            <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                        </svg>
                    </button>

                </div>

                <!-- Tombol tengah -->
                <div class="flex justify-center items-center p-2 bg-[#B9E0FF] rounded-2xl shadow-3xl absolute -top-3 left-1/2 -translate-x-1/2 -translate-y-1/2">
                    <button>
                        <svg class="h-9 w-9 text-white"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                        </svg>                          
                    </button>
                </div>

                <!-- Bottom Navigasi Kanan -->
                <div class="flex w-[45%] justify-evenly">

                    <!-- Pelatihan -->
                    <button title="Pelatihan">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                            <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                        </svg>
                    </button>
        
                    <!-- About Us -->
                    <button title="About Us">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                        </svg>
                    </button>

                </div>

            </div>
        </header>

        <script>
            
            const span_container = document.querySelector(".span-container")
            const span_line_1 = document.querySelector(".sp-1")
            const span_line_2 = document.querySelector(".sp-2")

            const btm_navigation = document.querySelector(".bottom-nav")

            span_container.addEventListener("click", () => {

                span_line_1.classList.toggle("w-[60%]")
                span_line_1.classList.toggle("w-[100%]")

                span_line_2.classList.toggle("w-[80%]")
                span_line_2.classList.toggle("w-[100%]")

                btm_navigation.classList.toggle("-bottom-32")
                btm_navigation.classList.toggle("-bottom-3")
                
            })

        </script>

    </body>

</html>