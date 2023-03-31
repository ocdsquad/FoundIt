<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="./css/style.css" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700;800&family=Montserrat+Alternates:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Open+Sans:wght@300;400;500;600;700;800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <title> Detail Barang Hilang </title>
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


        <!-- Header -->
        <header class="w-full py-2 fixed bg-white z-10 sm:py-[10px] lg:hidden">
            <div class="container">
                <div class="flex w-full">
                    
                    <!-- Icon Panah -->
                    <div class="w-fit">
                        <a href="Home.html">
                            <svg width="25" height="20" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.5882 9.12331H4.81784L11.7076 2.36986C12.2583 1.83014 12.2583 0.944437 11.7076 0.404714C11.577 0.276421 11.4219 0.174638 11.2511 0.105192C11.0803 0.0357459 10.8972 0 10.7123 0C10.5274 0 10.3443 0.0357459 10.1735 0.105192C10.0027 0.174638 9.84756 0.276421 9.71695 0.404714L0.412886 9.52464C0.282003 9.65267 0.178165 9.80475 0.107317 9.97216C0.0364682 10.1396 0 10.319 0 10.5003C0 10.6815 0.0364682 10.861 0.107317 11.0284C0.178165 11.1958 0.282003 11.3479 0.412886 11.4759L9.71695 20.5959C9.84766 20.724 10.0028 20.8256 10.1736 20.895C10.3444 20.9643 10.5274 21 10.7123 21C10.8972 21 11.0802 20.9643 11.251 20.895C11.4218 20.8256 11.5769 20.724 11.7076 20.5959C11.8384 20.4677 11.942 20.3156 12.0128 20.1482C12.0835 19.9808 12.1199 19.8014 12.1199 19.6202C12.1199 19.439 12.0835 19.2596 12.0128 19.0922C11.942 18.9248 11.8384 18.7727 11.7076 18.6446L4.81784 11.8911H20.5882C21.3647 11.8911 22 11.2684 22 10.5072C22 9.74607 21.3647 9.12331 20.5882 9.12331Z" fill="#17282F"/>
                            </svg>                        
                        </a>
                    </div>

                    <!-- Judul Halaman -->
                    <div class="w-[95%]">
                        <p class="text-lg text-center font-poppins font-semibold sm:text-xl"> Barang Hilang </p>
                    </div>

                </div>
            </div>
        </header>
        <!-- Header End -->


        <!-- Container Section (Aktif Untuk Content Tablet & Desktop Viewport) -->
        <div class="flex-wrap justify-center items-center md:flex md:pt-20 lg:pt-[150px] xl:gap-10">

            <!-- Gambar Barang Section -->
            <section class="pt-14 sm:pt-20 md:w-1/2 md:pt-0 lg:w-[45%] 2xl:w-[35%]">
                <div class="container">
                    <div class="flex flex-wrap sm:flex-col-reverse">

                        <!-- Profile -->
                        <div class="flex justify-between w-full mb-3 sm:mb-0 sm:px-2">

                            <!-- User Profile -->
                            <div class="flex">
                                <!-- Icon Profile -->
                                <div class="w-8 h-8 mr-3 rounded-full overflow-hidden sm:w-10 sm:h-10">
                                    <img class="w-full h-full" src="../src/img/tim.png" alt="Profile">
                                </div>

                                <!-- Nama Profile -->
                                <div class="flex items-center">
                                    <p class="text-sm font-poppins sm:text-base">Reza Fakhreza</p>
                                </div>
                            </div>

                            <!-- Message Icon -->
                            <span class="msg-bubble transition-all ease-in-out duration-300 sm:hidden">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 sm:w-7 sm:h-7">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z" />
                                </svg>
                            </span>

                            <!-- Message Button (viewport sm ke atas) -->
                            <button class="items-center justify-center w-[43%] px-2 border border-[#8D72E1] rounded-xl hidden sm:flex">

                                <span class="mr-2">
                                    <svg class="w-5 h-5 text-[#4870C0]"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                                      </svg>
                                                           
                                </span>
                        
                                <h5 class="text-sm font-montserratAlt font-semibold">Chat Owner</h5>
                            </button>
                        </div>

                        <!-- Bagian Gambar -->
                        <div class="w-full h-[350px] rounded-t-[20px] overflow-hidden relative sm:rounded-[20px] sm:mb-5 lg:h-[400px] 2xl:h-[420px]">
                            
                            <!-- Image Barang -->
                            <img class="w-full h-full" src="../src/img/dompetHitam.png" alt="Gambar Barang">

                            <!-- Card Ungu Informasi Barang -->
                            <div class="flex justify-between items-center w-full rounded-t-[20px] bg-[#8D9EFF] absolute bottom-0 sm:hidden">

                                <!-- Nama Barang & Reward -->
                                <div class="pl-4 py-[6px]">
                                    <p class="mb-1 text-lg text-white font-montserratAlt font-bold"> Dompet Cokelat </p>

                                    <div class="flex items-center w-fit text-white">
                                        <span class="mr-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                                            </svg>  
                                        </span>

                                        <p class="text-xs font-poppins font-light"> Berhadiah </p>
                                    </div>

                                </div>

                                <p class="pr-2 text-xs text-white font-poppins font-light"> 28.12.2023, 11:47 PM </p>

                            </div>

                        </div>

                        <!-- Informasi Barang SM (viewport sm saja) -->
                        <div class="justify-between w-full mb-2 px-2 hidden sm:flex md:hidden">

                            <!-- Nama Barang -->
                            <h1 class="text-2xl font-montserratAlt font-bold"> Dompet Cokelat </h1>

                            <!-- Container Reward & Tanggal -->
                            <div class="flex items-center pt-2">

                                <!-- Reward -->
                                <div class="flex items-center mr-3 text-[#244CA5]">
                                    <span class="mr-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                                        </svg>  
                                    </span>

                                    <p class="text-sm font-poppins font-light"> Berhadiah </p>
                                </div>

                                <p class="text-sm text-[#244CA5] font-poppins font-light"> 28.12.2023, 11:47 PM </p>
                            </div>

                        </div>

                    </div>
            </section>
            <!-- Gambar Barang Section End -->


            <!-- Informasi Barang Hilang Section -->
            <section id="informasi-kehilangan" class="mt-4 sm:mt-8 md:w-1/2 md:mt-0 xl:w-[45%] 2xl:w-[40%]">
                <div class="container">
                    <div class="flex flex-wrap">

                        <!-- Informasi Barang MD (Viewport md ke atas) -->
                        <div class="justify-between w-full mb-2 pb-6 hidden border-b border-b-[#8D9EFF] md:block lg:mb-5">

                            <!-- Nama Barang -->
                            <h1 class="text-2xl font-montserratAlt font-bold lg:text-4xl"> Dompet Cokelat </h1>

                            <!-- Container Reward & Tanggal -->
                            <div class="flex items-center pt-2 lg:flex-row-reverse lg:justify-end lg:gap-2">

                                <!-- Reward -->
                                <div class="flex items-center mr-3 text-[#244CA5]">
                                    <span class="mr-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                                        </svg>  
                                    </span>

                                    <p class="text-sm font-poppins font-light"> Berhadiah </p>
                                </div>

                                <p class="text-sm text-[#244CA5] font-poppins font-light"> 28.12.2023, 11:47 PM </p>
                            </div>

                        </div>

                        <!-- Deskripsi Barang Hilang -->
                        <div class="w-full">
                            <h1 class="mb-2 text-lg font-montserratAlt font-semibold sm:text-xl lg:w-fit lg:pb-2 lg:border-b-2 lg:border-b-[#244CA5] lg:text-lg lg:text-[#244CA5]"> Deskripsi Barang </h1>

                            <p class="text-sm text-justify text-[#1D2A30] font-poppins font-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p>
                        </div>

                        <!-- Garis Pembatas -->
                        <div class="w-full my-6">
                            <span class="w-full h-[1px] bg-[#8D9EFF] block"></span>
                        </div>

                        <!-- Kronologi Barang Hilang -->
                        <div class="w-full mb-5">
                            <h1 class="mb-1 text-lg font-montserratAlt font-semibold sm:text-xl lg:w-fit lg:pb-2 lg:border-b-2 lg:border-b-[#244CA5] lg:text-lg lg:text-[#244CA5]"> Kronologi Kehilangan </h1>

                            <p class="text-sm text-justify text-[#1D2A30] font-poppins font-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p>
                        </div>

                    </div>
                </div>
            </section>
            <!-- Informasi Barang Hilang Section End -->

        </div>


        <!-- Aside Section -->
        <section class="w-[90%] h-[60vh] mx-auto mt-48 mb-10 hidden md:block relative">

            <!-- Card Ungu Cari Sekarang -->
            <div class="flex justify-around w-[70%] py-10 bg-gradient-to-r from-[#4870C0] to-[#a7b3fa] rounded-3xl absolute -top-7 left-1/2 -translate-x-1/2 -translate-y-1/2">

                <!-- Headline -->
                <div class="text-2xl text-white font-jost font-semibold lg:text-3xl">
                    <p> Kamu Kehilangan Barang ? </p>

                    <p> Coba Cari Di Foundit. </p>
                </div>

                <!-- Button -->
                <div class="self-center">
                    <button class="px-4 py-3 text-sm text-white font-poppins font-semibold bg-[#395EB4] rounded-[52px] lg:px-10 lg:py-4"> Cari Sekarang! </button>
                </div>

            </div>
            
            <!-- Isi Konten Aside -->
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
        

        <!-- Chat Owner -->
        <div class="chat-user flex items-center justify-center w-[90%] py-3 bg-[#B9E0FF] rounded-xl fixed -bottom-28 left-1/2 -translate-x-1/2 -translate-y-1/2 transition-all ease-in-out duration-300">

            <span class="mr-3">
                <svg class="w-8 h-8 text-[#4870C0]"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                  </svg>
                                       
            </span>
    
            <h5 class="text-lg font-montserratAlt font-bold">Chat Owner</h5>
        </div>
        <!-- Chat Owner -->
        

        <script>
            const msg_bubble = document.querySelector(".msg-bubble")
            const chat_user = document.querySelector(".chat-user")
            const section_informasi_kehilangan = document.getElementById("informasi-kehilangan")

            msg_bubble.addEventListener("click", () => {
                section_informasi_kehilangan.classList.toggle("mb-20")

                msg_bubble.classList.toggle("text-[#4870C0]")

                chat_user.classList.toggle("-bottom-28")
                chat_user.classList.toggle("-bottom-4")
            })
            
        </script>

    </body>

</html>