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
        @vite('resources/css/app.css')
        
        <title>Search Barang Hilang</title>
    </head>

    <body>

        <!-- Desktop Navigation Bar -->
        <header class="w-full py-2 fixed bg-white shadow-kategori rounded-lg hidden lg:block z-10">
            <div class="container flex justify-between w-full ">

                <!-- Logo (Kiri) -->
                <div class="w-[8%] ">
                    <img class="w-full" src="img/logoLain.png" alt="Logo Foundit">
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
                        <img class="w-full h-full" src="img/tim.png" alt="Profile Dummy">
                    </div>

                    <!-- Nama User -->
                    <p class="text-lg font-montserrat font-semibold"> Reza </p>

                </div>

            </div>
        </header>

    
        <!-- Header Mobile -->
        <header class="w-full fixed top-0 bg-white z-10 lg:hidden">
            <div class="container">

                <!-- Icon Panah, Search Bar & Filter -->
                <div class="flex items-center justify-between w-full pt-3">

                    <!-- Icon Panah -->
                    <div class="w-fit">
                        <a href="Home.html">
                            <svg class="w-9 h-9" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                            </svg>                                            
                        </a>
                    </div>

                    <!-- Search Bar -->
                    <form class="w-[75%] relative">
        
                        <input id="search" name="search" class="w-full px-5 py-3 text-sm placeholder-black font-poppins font-extralight bg-white rounded-lg shadow-3xl" type="text" placeholder="All item">

                        <label for="search" class="p-1 bg-[#8D9EFF] rounded-lg absolute top-1/2 right-3 -translate-y-1/2">
                            <svg class="w-5 h-5 text-white"  width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="10" cy="10" r="7" />  <line x1="21" y1="21" x2="15" y2="15" /></svg>
                        </label>
                    </form>

                    <!-- Filter -->
                    <div class="w-fit">
                        <span>
                            <svg class="w-9 h-9 text-[#8D72E1]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75" />
                              </svg>
                        </span>
                    </div>

                </div>

                <!-- Navigasi Barang Temuan & Barang Hilang -->
                <div class="flex justify-around w-full pt-5">

                    <!-- Barang Temuan -->
                    <div class="w-1/2">
                        <a href="SearchBarangTemu.html">
                            <h2 class="py-1 text-base text-center text-[#BDC1C2] font-montserrat font-semibold tracking-wide">Barang Temuan</h2>
                        </a>

                        <!-- Garis Bawah -->
                        <div class="w-full">
                            <span class="w-full h-[2px] bg-[#BDC1C2] block"></span>
                        </div>
                    </div>

                    <!-- Barang Hilang -->
                    <div class="w-1/2">
                        <a href="SearchBarangHilang.html">
                            <h2 class="py-1 text-base text-center text-[#8D72E1] font-montserrat font-semibold tracking-wide">Barang Hilang</h2>
                        </a>

                        <!-- Garis Bawah -->
                        <div class="w-full">
                            <span class="w-full h-[2px] bg-[#8D72E1] block"></span>
                        </div>
                    </div>

                </div>

            </div>
        </header>


        <!-- All Item Opening Section  -->
        <section class="pt-36 hidden lg:block">
            <div class="container">
                <div class="w-[96%] h-[60vh] mx-auto rounded-[40px] bg-no-repeat bg-left-bottom bg-cover relative" style="background-image: url(img/bgAllitem.png);">

                    <!-- All Item Opening -->
                    <div class="flex justify-center items-center w-full h-full">
                
                        <!-- Container Tagline, Search Bar, dan Dropdown -->
                        <div class="w-fit">

                            <!-- Tagline -->
                            <p class="mb-10 text-5xl text-white font-jost font-semibold"> Coba Cari Barang Kamu ! </p>

                            <!-- Search Bar & Dropdown -->
                            <div class="flex items-center">

                                <!-- Search Bar -->
                                <form class="w-[65%] mr-3 relative">
                    
                                    <input id="search" name="search" class="w-full px-5 py-3 text-sm placeholder-black font-poppins font-extralight bg-white rounded-lg shadow-3xl xl:text-base" type="text" placeholder="All item">
    
                                    <label for="search" class="p-1 bg-[#8D9EFF] rounded-lg absolute top-1/2 right-3 -translate-y-1/2">
                                        <svg class="w-5 h-5 text-white"  width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="10" cy="10" r="7" />  <line x1="21" y1="21" x2="15" y2="15" /></svg>
                                    </label>
                                </form>
                                
                                <!-- Dropdown -->
                                <div class="w-[35%] relative">

                                    <select name="jenis-barang" id="jenis-barang" class="w-full pl-2 py-3 rounded-xl text-sm text-white font-poppins font-medium bg-[#8D9EFF] focus:outline-none appearance-none cursor-pointer">

                                        <option class="text-sm text-black font-poppins font-medium bg-white" value="lostItem"> <a href="SearchBarangHilang.html"> Barang Hilang </a> </option>

                                        <option class="text-sm text-black font-poppins font-medium bg-white" value="foundItem"> <a href="SearchBarangTemu.html"> Barang Temu </a> </option>


                                    </select>

                                    <span class="pointer-events-none absolute top-1/2 right-3 -translate-y-1/2">
                                        <svg class="w-6 h-6 text-[#244CA5]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                          </svg>                                          
                                    </span>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </section>
        <!-- All Item Opening Section End -->


        <!-- Barang Hilang Section -->
        <section class="pt-32 pb-28 relative xl:pt-20">
            <div class="container">
                <div class="flex flex-wrap ">

                    <!-- Dropdown Filter Barang (viewport desktop) -->
                    <div class="justify-between w-full mb-10 px-3 hidden lg:flex">

                        <!-- Status, Jenis, dan Tanggal -->
                        <div class="flex justify-between w-[60%]">

                            <!-- Dropdown Status -->
                            <div class="w-[30%] relative">

                                <select name="jenis-barang" id="jenis-barang" class="w-full px-3 py-[7px] rounded-xl text-sm text-black font-poppins font-medium border border-[#8D72E1] focus:outline-none appearance-none cursor-pointer">

                                    <option disabled selected value="">Status Barang</option>

                                    <option class="text-sm text-black font-poppins font-medium bg-white" value="lostItem"> <a href="SearchBarangHilang.html"> Barang Hilang </a> </option>

                                    <option class="text-sm text-black font-poppins font-medium bg-white" value="foundItem"> <a href="SearchBarangTemu.html"> Barang Temu </a> </option>


                                </select>

                                <span class="pointer-events-none absolute top-1/2 right-3 -translate-y-1/2">
                                    <svg class="w-6 h-6 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>                                          
                                </span>

                            </div>

                            <!-- Dropdown Jenis -->
                            <div class="w-[30%] relative">

                                <select name="jenis-barang" id="jenis-barang" class="w-full px-3 py-[7px] rounded-xl text-sm text-black font-poppins font-medium border border-[#8D72E1] focus:outline-none appearance-none cursor-pointer">

                                    <option disabled selected value="">Jenis Barang</option>

                                    <option class="text-sm text-black font-poppins font-medium bg-white" value="lostItem"> <a href="SearchBarangHilang.html"> Barang Hilang </a> </option>

                                    <option class="text-sm text-black font-poppins font-medium bg-white" value="foundItem"> <a href="SearchBarangTemu.html"> Barang Temu </a> </option>


                                </select>

                                <span class="pointer-events-none absolute top-1/2 right-3 -translate-y-1/2">
                                    <svg class="w-6 h-6 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>                                          
                                </span>

                            </div>

                            <!-- Dropdown Tanggal -->
                            <div class="w-[30%] relative">

                                <input type="date" class="w-full px-3 py-[7px] rounded-xl text-sm text-black font-poppins font-medium border border-[#8D72E1] cursor-pointer">

                            </div>

                        </div>

                        <!-- Sort by -->
                        <div class="flex justify-end items-center w-[40%]">

                            <!-- Sort By -->
                            <div class="w-[30%] relative">

                                <select name="jenis-barang" id="jenis-barang" class="w-full px-3 py-[7px] rounded-xl text-sm text-black font-poppins font-medium border border-[#8D72E1] focus:outline-none appearance-none cursor-pointer">

                                    <option disabled selected value="">Sort By</option>

                                    <option class="text-sm text-black font-poppins font-medium bg-white" value="lostItem"> <a href="SearchBarangHilang.html"> Barang Hilang </a> </option>

                                    <option class="text-sm text-black font-poppins font-medium bg-white" value="foundItem"> <a href="SearchBarangTemu.html"> Barang Temu </a> </option>


                                </select>

                                <span class="pointer-events-none absolute top-1/2 right-3 -translate-y-1/2">
                                    <svg class="w-6 h-6 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>                                          
                                </span>

                            </div>

                        </div>

                    </div>

                    <!-- Item Card Container -->
                    <div class="grid grid-cols-2 w-full md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">
                        @foreach ($barangs as $barang)
                        @if ($barang->is_hilang == true)  
                        
                        <!-- Card -->
                        <div class="justify-self-center w-[95%] mb-8 bg-white rounded-xl shadow-barang relative overflow-hidden sm:w-[80%] md:w-[90%] xl:w-[90%]">
                            
                            <!-- Image Container -->
                            <div class="w-full h-[130px] relative">  
                                <img class="w-full h-full" src="img/dompetHitam.png" alt="Gambar Barang">
                            </div>

                            <!-- Label -->
                            <div class="px-5 bg-[#6C4AB6] absolute top-3 right-3">
                                <p class="text-white text-sm text-center font-light font-poppins">Hilang</p>
                            </div>

                            <!-- Deskripsi Kehilangan -->
                            <div class="w-full px-2 py-3">

                                <!-- Nama Barang -->
                                <h1 class="mb-2 text-base font-poppins font-semibold xl:text-lg 2xl:text-xl"> {{ $barang->nama }} </h1>

                                <!-- Tanggal Barang -->
                                <div class="flex items-center w-full mb-3">
                                    <span class="mr-[5px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[15px] h-[15px]">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                        </svg>  
                                    </span>

                                    <p class="text-xs font-poppins font-normal xl:text-sm 2xl:text-base"> {{ $barang->created_at }} </p>
                                </div>

                                <a href="/baranghilang/{{ $barang->id }}">Detail barang</a>

                                <!-- Reward / No Reward -->
                                <div class="flex justify-end items-center w-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                                    </svg>  
                                </div>

                            </div>
                        </div>
                        @endif
                        @endforeach

                    </div>
                        {{-- <!-- Card -->
                        <div class="justify-self-center w-[95%] mb-8 bg-white rounded-xl shadow-barang relative overflow-hidden sm:w-[80%] md:w-[90%] xl:w-[90%]">
                            
                            <!-- Image Container -->
                            <div class="w-full h-[130px] relative">  
                                <img class="w-full h-full" src="img/dompetHitam.png" alt="Gambar Barang">
                            </div>

                            <!-- Label -->
                            <div class="px-5 bg-[#6C4AB6] absolute top-3 right-3">
                                <p class="text-white text-sm text-center font-light font-poppins">Hilang</p>
                            </div>

                            <!-- Deskripsi Kehilangan -->
                            <div class="w-full px-2 py-3">

                                <!-- Nama Barang -->
                                <h1 class="mb-2 text-base font-poppins font-semibold xl:text-lg 2xl:text-xl"> Dompet Cokelat </h1>

                                <!-- Tanggal Barang -->
                                <div class="flex items-center w-full mb-3">
                                    <span class="mr-[5px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[15px] h-[15px]">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                        </svg>  
                                    </span>

                                    <p class="text-xs font-poppins font-normal xl:text-sm 2xl:text-base"> 29 / 03 / 2023 </p>
                                </div>

                                <!-- Reward / No Reward -->
                                <div class="flex justify-end items-center w-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                                    </svg>  
                                </div>

                            </div>

                        </div>

                        <!-- Card -->
                        <div class="justify-self-center w-[95%] mb-8 bg-white rounded-xl shadow-barang relative overflow-hidden sm:w-[80%] md:w-[90%] xl:w-[90%]">
                            
                            <!-- Image Container -->
                            <div class="w-full h-[130px] relative">  
                                <img class="w-full h-full" src="img/dompetHitam.png" alt="Gambar Barang">
                            </div>

                            <!-- Label -->
                            <div class="px-5 bg-[#6C4AB6] absolute top-3 right-3">
                                <p class="text-white text-sm text-center font-light font-poppins">Hilang</p>
                            </div>

                            <!-- Deskripsi Kehilangan -->
                            <div class="w-full px-2 py-3">

                                <!-- Nama Barang -->
                                <h1 class="mb-2 text-base font-poppins font-semibold xl:text-lg 2xl:text-xl"> Dompet Cokelat </h1>

                                <!-- Tanggal Barang -->
                                <div class="flex items-center w-full mb-3">
                                    <span class="mr-[5px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[15px] h-[15px]">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                        </svg>  
                                    </span>

                                    <p class="text-xs font-poppins font-normal xl:text-sm 2xl:text-base"> 29 / 03 / 2023 </p>
                                </div>

                                <!-- Reward / No Reward -->
                                <div class="flex justify-end items-center w-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                                    </svg>  
                                </div>

                            </div>

                        </div>

                        <!-- Card -->
                        <div class="justify-self-center w-[95%] mb-8 bg-white rounded-xl shadow-barang relative overflow-hidden sm:w-[80%] md:w-[90%] xl:w-[90%]">
                            
                            <!-- Image Container -->
                            <div class="w-full h-[130px] relative">  
                                <img class="w-full h-full" src="img/dompetHitam.png" alt="Gambar Barang">
                            </div>

                            <!-- Label -->
                            <div class="px-5 bg-[#6C4AB6] absolute top-3 right-3">
                                <p class="text-white text-sm text-center font-light font-poppins">Hilang</p>
                            </div>

                            <!-- Deskripsi Kehilangan -->
                            <div class="w-full px-2 py-3">

                                <!-- Nama Barang -->
                                <h1 class="mb-2 text-base font-poppins font-semibold xl:text-lg 2xl:text-xl"> Dompet Cokelat </h1>

                                <!-- Tanggal Barang -->
                                <div class="flex items-center w-full mb-3">
                                    <span class="mr-[5px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[15px] h-[15px]">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                        </svg>  
                                    </span>

                                    <p class="text-xs font-poppins font-normal xl:text-sm 2xl:text-base"> 29 / 03 / 2023 </p>
                                </div>

                                <!-- Reward / No Reward -->
                                <div class="flex justify-end items-center w-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                                    </svg>  
                                </div>

                            </div>

                        </div>

                        <!-- Card -->
                        <div class="justify-self-center w-[95%] mb-8 bg-white rounded-xl shadow-barang relative overflow-hidden sm:w-[80%] md:w-[90%] xl:w-[90%]">
                            
                            <!-- Image Container -->
                            <div class="w-full h-[130px] relative">  
                                <img class="w-full h-full" src="img/dompetHitam.png" alt="Gambar Barang">
                            </div>

                            <!-- Label -->
                            <div class="px-5 bg-[#6C4AB6] absolute top-3 right-3">
                                <p class="text-white text-sm text-center font-light font-poppins">Hilang</p>
                            </div>

                            <!-- Deskripsi Kehilangan -->
                            <div class="w-full px-2 py-3">

                                <!-- Nama Barang -->
                                <h1 class="mb-2 text-base font-poppins font-semibold xl:text-lg 2xl:text-xl"> Dompet Cokelat </h1>

                                <!-- Tanggal Barang -->
                                <div class="flex items-center w-full mb-3">
                                    <span class="mr-[5px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[15px] h-[15px]">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                        </svg>  
                                    </span>

                                    <p class="text-xs font-poppins font-normal xl:text-sm 2xl:text-base"> 29 / 03 / 2023 </p>
                                </div>

                                <!-- Reward / No Reward -->
                                <div class="flex justify-end items-center w-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                                    </svg>  
                                </div>

                            </div>

                        </div>

                        <!-- Card -->
                        <div class="justify-self-center w-[95%] mb-8 bg-white rounded-xl shadow-barang relative overflow-hidden sm:w-[80%] md:w-[90%] xl:w-[90%]">
                            
                            <!-- Image Container -->
                            <div class="w-full h-[130px] relative">  
                                <img class="w-full h-full" src="img/dompetHitam.png" alt="Gambar Barang">
                            </div>

                            <!-- Label -->
                            <div class="px-5 bg-[#6C4AB6] absolute top-3 right-3">
                                <p class="text-white text-sm text-center font-light font-poppins">Hilang</p>
                            </div>

                            <!-- Deskripsi Kehilangan -->
                            <div class="w-full px-2 py-3">

                                <!-- Nama Barang -->
                                <h1 class="mb-2 text-base font-poppins font-semibold xl:text-lg 2xl:text-xl"> Dompet Cokelat </h1>

                                <!-- Tanggal Barang -->
                                <div class="flex items-center w-full mb-3">
                                    <span class="mr-[5px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[15px] h-[15px]">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                        </svg>  
                                    </span>

                                    <p class="text-xs font-poppins font-normal xl:text-sm 2xl:text-base"> 29 / 03 / 2023 </p>
                                </div>

                                <!-- Reward / No Reward -->
                                <div class="flex justify-end items-center w-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                                    </svg>  
                                </div>

                            </div>

                        </div>

                        <!-- Card -->
                        <div class="justify-self-center w-[95%] mb-8 bg-white rounded-xl shadow-barang relative overflow-hidden sm:w-[80%] md:w-[90%] xl:w-[90%]">
                            
                            <!-- Image Container -->
                            <div class="w-full h-[130px] relative">  
                                <img class="w-full h-full" src="img/dompetHitam.png" alt="Gambar Barang">
                            </div>

                            <!-- Label -->
                            <div class="px-5 bg-[#6C4AB6] absolute top-3 right-3">
                                <p class="text-white text-sm text-center font-light font-poppins">Hilang</p>
                            </div>

                            <!-- Deskripsi Kehilangan -->
                            <div class="w-full px-2 py-3">

                                <!-- Nama Barang -->
                                <h1 class="mb-2 text-base font-poppins font-semibold xl:text-lg 2xl:text-xl"> Dompet Cokelat </h1>

                                <!-- Tanggal Barang -->
                                <div class="flex items-center w-full mb-3">
                                    <span class="mr-[5px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[15px] h-[15px]">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                        </svg>  
                                    </span>

                                    <p class="text-xs font-poppins font-normal xl:text-sm 2xl:text-base"> 29 / 03 / 2023 </p>
                                </div>

                                <!-- Reward / No Reward -->
                                <div class="flex justify-end items-center w-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                                    </svg>  
                                </div>

                            </div>

                        </div>

                        <!-- Card -->
                        <div class="justify-self-center w-[95%] mb-8 bg-white rounded-xl shadow-barang relative overflow-hidden sm:w-[80%] md:w-[90%] xl:w-[90%]">
                            
                            <!-- Image Container -->
                            <div class="w-full h-[130px] relative">  
                                <img class="w-full h-full" src="img/dompetHitam.png" alt="Gambar Barang">
                            </div>

                            <!-- Label -->
                            <div class="px-5 bg-[#6C4AB6] absolute top-3 right-3">
                                <p class="text-white text-sm text-center font-light font-poppins">Hilang</p>
                            </div>

                            <!-- Deskripsi Kehilangan -->
                            <div class="w-full px-2 py-3">

                                <!-- Nama Barang -->
                                <h1 class="mb-2 text-base font-poppins font-semibold xl:text-lg 2xl:text-xl"> Dompet Cokelat </h1>

                                <!-- Tanggal Barang -->
                                <div class="flex items-center w-full mb-3">
                                    <span class="mr-[5px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[15px] h-[15px]">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                        </svg>  
                                    </span>

                                    <p class="text-xs font-poppins font-normal xl:text-sm 2xl:text-base"> 29 / 03 / 2023 </p>
                                </div>

                                <!-- Reward / No Reward -->
                                <div class="flex justify-end items-center w-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                                    </svg>  
                                </div>

                            </div>

                        </div>

                        @foreach ($collection as $item)
                            
                        
                        <!-- Card -->
                        <div class="justify-self-center w-[95%] mb-8 bg-white rounded-xl shadow-barang relative overflow-hidden sm:w-[80%] md:w-[90%] xl:w-[90%]">
                            
                            <!-- Image Container -->
                            <div class="w-full h-[130px] relative">  
                                <img class="w-full h-full" src="img/dompetHitam.png" alt="Gambar Barang">
                            </div>

                            <!-- Label -->
                            <div class="px-5 bg-[#6C4AB6] absolute top-3 right-3">
                                <p class="text-white text-sm text-center font-light font-poppins">Hilang</p>
                            </div>

                            <!-- Deskripsi Kehilangan -->
                            <div class="w-full px-2 py-3">

                                <!-- Nama Barang -->
                                <h1 class="mb-2 text-base font-poppins font-semibold xl:text-lg 2xl:text-xl"> Dompet Cokelat </h1>

                                <!-- Tanggal Barang -->
                                <div class="flex items-center w-full mb-3">
                                    <span class="mr-[5px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[15px] h-[15px]">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                        </svg>  
                                    </span>

                                    <p class="text-xs font-poppins font-normal xl:text-sm 2xl:text-base"> 29 / 03 / 2023 </p>
                                </div>

                                <!-- Reward / No Reward -->
                                <div class="flex justify-end items-center w-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                                    </svg>  
                                </div>

                            </div>

                        </div>

                        <!-- Card -->
                        <div class="justify-self-center w-[95%] mb-8 bg-white rounded-xl shadow-barang relative overflow-hidden sm:w-[80%] md:w-[90%] xl:w-[90%]">
                            
                            <!-- Image Container -->
                            <div class="w-full h-[130px] relative">  
                                <img class="w-full h-full" src="img/dompetHitam.png" alt="Gambar Barang">
                            </div>

                            <!-- Label -->
                            <div class="px-5 bg-[#6C4AB6] absolute top-3 right-3">
                                <p class="text-white text-sm text-center font-light font-poppins">Hilang</p>
                            </div>

                            <!-- Deskripsi Kehilangan -->
                            <div class="w-full px-2 py-3">

                                <!-- Nama Barang -->
                                <h1 class="mb-2 text-base font-poppins font-semibold xl:text-lg 2xl:text-xl"> Dompet kuning </h1>

                                <!-- Tanggal Barang -->
                                <div class="flex items-center w-full mb-3">
                                    <span class="mr-[5px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[15px] h-[15px]">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                        </svg>  
                                    </span>

                                    <p class="text-xs font-poppins font-normal xl:text-sm 2xl:text-base"> 29 / 03 / 2023 </p>
                                </div>

                                <!-- Reward / No Reward -->
                                <div class="flex justify-end items-center w-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                                    </svg>  
                                </div>

                            </div>

                        </div> --}}

                    {{-- </div> --}}

                    <!-- Pagination -->
                    <div class="flex items-center justify-center gap-2 w-full mt-4 text-sm font-poppins font-bold lg:mt-16">

                        <!-- Arrow Kiri -->
                        <a href="" class="text-lg">
                            <svg class="w-3 h-3 text-[#1D2A30]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                            </svg>                              
                        </a>

                        <a href="" class="px-3 py-[4px] border rounded-lg text-white bg-[#8D9EFF]"> 1 </a>
                        <a href="" class="px-3 py-[4px] border rounded-lg"> 2 </a>
                        <a href="" class="px-3 py-[4px] border rounded-lg"> 3 </a>

                        <!-- Arrow Kanan -->
                        <a href="" class="text-lg">
                            <svg class="w-3 h-3 text-[#1D2A30]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                              </svg>                              
                        </a>

                    </div>

                </div>
            </div>
        </section>
        <!-- Barang Hilang Section End -->


        <!-- Aside Section -->
        <section class="w-[90%] h-[60vh] mx-auto mt-36 mb-10 hidden lg:block relative">

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
                            <img class="w-full" src="img/logoLain.png" alt="Logo Foundit">
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
        <header class="bottom-nav w-[88%] py-[14px] bg-[#8D72E1] rounded-2xl fixed -bottom-5 left-1/2 -translate-x-1/2 -translate-y-1/2 transition-all ease-in-out duration-500 lg:hidden">
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
    </body>
</html>

  