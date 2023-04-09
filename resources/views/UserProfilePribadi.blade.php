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
        @vite('resources/css/app.css')
        <title>User Profile</title>
    </head>

    <body class="scroll-smooth">

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


        <!-- Header Mobile -->
        <header class="w-full fixed top-0 bg-white z-10 lg:hidden">
            <div class="container">

                <!-- Icon Panah & Judul Halaman -->
                <div class="flex items-center w-full pt-4">

                    <!-- Icon Panah -->
                    <div class="w-fit">
                        <a href="Home.html">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                                </svg>                                                                       
                        </a>
                    </div>

                    <!-- Judul Halaman -->
                    <h1 class="w-[90%] text-center text-xl font-poppins font-semibold"> User Profile </h1>

                </div>

            </div>
        </header>
        <!-- Header Mobile End -->


        <!-- Section Profile (Mobile) -->
        <section class="pt-20 lg:hidden">
            <div class="container">
                <div class="flex flex-col justify-center items-center w-full">

                    <!-- Image Container -->
                    <div class="w-[140px] h-[140px] mb-3 rounded-full overflow-hidden sm:w-[200px] sm:h-[200px]">
                        <img class="w-full h-full" src="../src/img/tim.png" alt="User Profile">
                    </div>

                    <!-- Nama -->
                    <h1 class="mb-1 text-lg font-poppins font-semibold sm:text-xl"> Reza Fakhreza </h1>

                    <!-- Prodi -->
                    <h2 class="mb-3 text-sm text-[#BDC1C2] font-poppins font-[500] sm:text-base"> S1 Informatika </h2>

                </div>
            </div>
        </section>
        <!-- Section Profile End -->


        <!-- Section Profile (Desktop) -->
        <section class="mb-10 pt-32 hidden lg:block">
            <div class="container">

                <div class="w-full h-[55vh] mx-auto rounded-[40px] bg-no-repeat bg-left-bottom bg-cover relative" style="background-image: url(../src/img/bgProfile.png);">

                    <!-- Profile Information -->
                    <div class="flex flex-col justify-center items-center w-full h-full">

                        <!-- Image Container -->
                        <div class="w-[160px] h-[160px] mb-3 rounded-full overflow-hidden xl:w-[200px] xl:h-[200px]">
                            <img class="w-full h-full" src="../src/img/tim.png" alt="User Profile">
                        </div>

                        <!-- Nama -->
                        <h1 class="mb-1 text-2xl text-white font-poppins font-semibold xl:text-3xl"> Selamat Datang, Reza Fakhreza !</h1>

                    </div>

                    <!-- Switch Post -->
                    <div class="flex justify-center items-center w-[350px] h-[70px] px-3 bg-white rounded-3xl shadow-switch-post absolute -bottom-18 left-1/2 -translate-x-1/2 -translate-y-1/2 z-[1]">

                        <!-- Lost Post & Found Post -->
                        <div class="flex items-center w-full h-full text-center relative z-[1]">

                            <!-- Lost Post -->
                            <div id="lost-post-desktop" class="w-1/2 text-white relative z-[3] transition-all duration-75 ease-in pointer-events-none cursor-pointer">
                                <p class="text-base  font-montserratAlt font-bold"> Lost Post </p>
                            </div>

                            <!-- Found Post -->
                            <div id="found-post-desktop" class="w-1/2 text-[#BDC1C2] relative z-[3] transition-all duration-75 ease-in cursor-pointer">
                                <p class="text-base font-montserratAlt font-bold"> Found Post </p>
                            </div>

                            <!-- Switcher Post -->
                            <div id="switcher-post-desktop" class="w-[50%] h-[55px] bg-[#8D72E1] text-center rounded-2xl absolute transition-all ease-in-out duration-700 z-[2]"></div>

                        </div>

                    </div>

                </div>
            </div>
        </section>
        <!-- Section Profile End -->


        <!-- Section Post -->
        <section class="pt-5 lg:pt-8">
            <div class="container">

                <!-- Post Switcher (Mobile) -->
                <div class="w-full h-[50px] px-3 rounded-[10px] shadow-post z-[1] sm:w-[95%] sm:mx-auto lg:hidden">

                    <!-- Container Lost & Found -->
                    <div class="flex items-center justify-between w-full h-full relative">

                        <!-- Lost Post -->
                        <div id="lost-post" class="w-1/2 z-[3] text-white pointer-events-none transition-all ease-in-out duration-700">
                            <p class="text-lg text-center font-poppins font-bold"> Lost Post </p>
                        </div>

                        <!-- Found Post -->
                        <div id="found-post" class="w-1/2 z-[3] text-[#BDC1C2] transition-all ease-in-out duration-700">
                            <p class="text-lg text-center font-poppins font-bold"> Found Post </p>
                        </div>

                        <!-- Switcher -->
                        <div id="switcher-post" class="w-1/2 h-[32px] bg-[#8D72E1] rounded-[9px] absolute z-[2] transition-all ease-in-out duration-700"></div>

                    </div>

                </div>

                <!-- Judul Post -->
                <div class="w-full px-3 hidden lg:block">

                    <!-- Judul -->
                    <p class="w-[50%] mb-5 text-2xl text-[#244CA5] font-montserratAlt font-bold"> Laporan Barang Reza Fakhreza </p>

                    <!-- Garis -->
                    <span class="block w-full h-[2px] bg-[#BDC1C2]"></span>
                    
                </div>

                <!-- Whole Post Container -->
                <div id="container-post" class="w-full transition-all ease-in-out duration-1000">

                    <!-- Lost Post Container -->
                    <div id="lost-post-barang" class="grid grid-cols-2 w-full mt-6 md:grid-cols-3 lg:grid-cols-4 2xl:grid-cols-5">
                        
                        <!-- Card -->
                        <div class="justify-self-center w-[95%] mb-8 bg-white rounded-xl shadow-barang relative overflow-hidden sm:w-[75%] md:w-[88%] xl:w-[75%] 2xl:w-[85%]">
                            
                            <!-- Image Container -->
                            <div class="w-full h-[130px]">  
                                <img class="w-full h-full" src="../src/img/dompetHitam.png" alt="Gambar Barang">
                            </div>
    
                            <!-- Deskripsi Kehilangan -->
                            <div class="w-full px-2 py-3">
    
                                <!-- Nama Barang -->
                                <h1 class="mb-2 text-base font-poppins font-semibold"> Dompet Cokelat </h1>
    
                                <!-- Location Barang -->
                                <div class="flex items-center w-full mb-[5px]">
                                    <span class="mr-1">
                                        <svg width="13" height="13" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.00016 0.833252C1.38766 0.833252 0.0834961 2.13742 0.0834961 3.74992C0.0834961 5.93742 3.00016 9.16659 3.00016 9.16659C3.00016 9.16659 5.91683 5.93742 5.91683 3.74992C5.91683 2.13742 4.61266 0.833252 3.00016 0.833252ZM3.00016 4.79159C2.7239 4.79159 2.45894 4.68184 2.26359 4.48649C2.06824 4.29114 1.9585 4.02619 1.9585 3.74992C1.9585 3.47365 2.06824 3.2087 2.26359 3.01335C2.45894 2.818 2.7239 2.70825 3.00016 2.70825C3.27643 2.70825 3.54138 2.818 3.73673 3.01335C3.93208 3.2087 4.04183 3.47365 4.04183 3.74992C4.04183 4.02619 3.93208 4.29114 3.73673 4.48649C3.54138 4.68184 3.27643 4.79159 3.00016 4.79159Z" fill="black"/>
                                            </svg>                                    
                                    </span> 
    
                                    <p class="text-xs font-poppins font-normal xl:text-sm 2xl:text-base"> Bank Mandiri Telkom </p>
                                </div>
    
                                <!-- Informasi Post -->
                                <div class="flex items-center w-full mb-6">
                                    <span class="mr-[5px]">
                                        <svg width="13" height="13" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.75 0.833415C3.75 0.603296 3.93655 0.416748 4.16667 0.416748H5.83333C6.06345 0.416748 6.25 0.603296 6.25 0.833415C6.25 1.06353 6.06345 1.25008 5.83333 1.25008H4.16667C3.93655 1.25008 3.75 1.06353 3.75 0.833415ZM7.92917 3.07925L8.22497 2.78344C8.39228 2.61613 8.40483 2.34572 8.23788 2.17805C8.07235 2.01182 7.80677 2.02665 7.64089 2.19252L7.34167 2.49175C6.67805 1.95772 5.8518 1.66662 5 1.66675C4.00544 1.66675 3.05161 2.06184 2.34835 2.7651C1.64509 3.46836 1.25 4.42219 1.25 5.41675C1.25 7.48758 2.925 9.16675 5 9.16675C5.70596 9.16713 6.39767 8.96809 6.99547 8.59256C7.59327 8.21704 8.07283 7.68029 8.37893 7.04414C8.68503 6.40799 8.80522 5.69832 8.72564 4.99685C8.64607 4.29539 8.36998 3.63067 7.92917 3.07925ZM5 8.33342C3.3875 8.33342 2.08333 7.02925 2.08333 5.41675C2.08333 3.80425 3.3875 2.50008 5 2.50008C6.6125 2.50008 7.91667 3.80425 7.91667 5.41675C7.91667 7.02925 6.6125 8.33342 5 8.33342Z" fill="black"/>
                                            <path d="M4.5835 3.74992C4.5835 3.5198 4.77004 3.33325 5.00016 3.33325V3.33325C5.23028 3.33325 5.41683 3.5198 5.41683 3.74992V5.41659C5.41683 5.6467 5.23028 5.83325 5.00016 5.83325V5.83325C4.77004 5.83325 4.5835 5.6467 4.5835 5.41659V3.74992Z" fill="black"/>
                                            </svg>
                                                                            
                                    </span>
    
                                    <p class="text-xs font-poppins font-normal xl:text-sm 2xl:text-base"> 1 hour ago </p>
                                </div>

                                <!-- Logo Sudah Diclaim -->
                                <div class="flex justify-end w-full">

                                    <div class="px-2 py-1 text-xs text-white text-center font-poppins font-semibold rounded-lg bg-[#8D9EFF] xl:px-3 xl:text-[13px]">
                                        <a href="#"> Sudah Diklaim </a>
                                    </div>

                                </div>
                            </div>
    
                        </div>
    
                        <!-- Card -->
                        <div class="justify-self-center w-[95%] mb-8 bg-white rounded-xl shadow-barang relative overflow-hidden sm:w-[75%] md:w-[88%] xl:w-[75%] 2xl:w-[85%]">
                            
                            <!-- Image Container -->
                            <div class="w-full h-[130px]">  
                                <img class="w-full h-full" src="../src/img/dompetHitam.png" alt="Gambar Barang">
                            </div>
    
                            <!-- Deskripsi Kehilangan -->
                            <div class="w-full px-2 py-3">
    
                                <!-- Nama Barang -->
                                <h1 class="mb-2 text-base font-poppins font-semibold"> Dompet Cokelat </h1>
    
                                <!-- Location Barang -->
                                <div class="flex items-center w-full mb-[5px]">
                                    <span class="mr-1">
                                        <svg width="13" height="13" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.00016 0.833252C1.38766 0.833252 0.0834961 2.13742 0.0834961 3.74992C0.0834961 5.93742 3.00016 9.16659 3.00016 9.16659C3.00016 9.16659 5.91683 5.93742 5.91683 3.74992C5.91683 2.13742 4.61266 0.833252 3.00016 0.833252ZM3.00016 4.79159C2.7239 4.79159 2.45894 4.68184 2.26359 4.48649C2.06824 4.29114 1.9585 4.02619 1.9585 3.74992C1.9585 3.47365 2.06824 3.2087 2.26359 3.01335C2.45894 2.818 2.7239 2.70825 3.00016 2.70825C3.27643 2.70825 3.54138 2.818 3.73673 3.01335C3.93208 3.2087 4.04183 3.47365 4.04183 3.74992C4.04183 4.02619 3.93208 4.29114 3.73673 4.48649C3.54138 4.68184 3.27643 4.79159 3.00016 4.79159Z" fill="black"/>
                                            </svg>                                    
                                    </span> 
    
                                    <p class="text-xs font-poppins font-normal xl:text-sm 2xl:text-base"> Bank Mandiri Telkom </p>
                                </div>
    
                                <!-- Informasi Post -->
                                <div class="flex items-center w-full mb-6">
                                    <span class="mr-[5px]">
                                        <svg width="13" height="13" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.75 0.833415C3.75 0.603296 3.93655 0.416748 4.16667 0.416748H5.83333C6.06345 0.416748 6.25 0.603296 6.25 0.833415C6.25 1.06353 6.06345 1.25008 5.83333 1.25008H4.16667C3.93655 1.25008 3.75 1.06353 3.75 0.833415ZM7.92917 3.07925L8.22497 2.78344C8.39228 2.61613 8.40483 2.34572 8.23788 2.17805C8.07235 2.01182 7.80677 2.02665 7.64089 2.19252L7.34167 2.49175C6.67805 1.95772 5.8518 1.66662 5 1.66675C4.00544 1.66675 3.05161 2.06184 2.34835 2.7651C1.64509 3.46836 1.25 4.42219 1.25 5.41675C1.25 7.48758 2.925 9.16675 5 9.16675C5.70596 9.16713 6.39767 8.96809 6.99547 8.59256C7.59327 8.21704 8.07283 7.68029 8.37893 7.04414C8.68503 6.40799 8.80522 5.69832 8.72564 4.99685C8.64607 4.29539 8.36998 3.63067 7.92917 3.07925ZM5 8.33342C3.3875 8.33342 2.08333 7.02925 2.08333 5.41675C2.08333 3.80425 3.3875 2.50008 5 2.50008C6.6125 2.50008 7.91667 3.80425 7.91667 5.41675C7.91667 7.02925 6.6125 8.33342 5 8.33342Z" fill="black"/>
                                            <path d="M4.5835 3.74992C4.5835 3.5198 4.77004 3.33325 5.00016 3.33325V3.33325C5.23028 3.33325 5.41683 3.5198 5.41683 3.74992V5.41659C5.41683 5.6467 5.23028 5.83325 5.00016 5.83325V5.83325C4.77004 5.83325 4.5835 5.6467 4.5835 5.41659V3.74992Z" fill="black"/>
                                            </svg>
                                                                            
                                    </span>
    
                                    <p class="text-xs font-poppins font-normal xl:text-sm 2xl:text-base"> 1 hour ago </p>
                                </div>

                                <!-- Logo Sudah Diclaim -->
                                <div class="flex justify-end w-full">

                                    <div class="px-2 py-1 text-xs text-white text-center font-poppins font-semibold rounded-lg bg-[#8D9EFF] xl:px-3 xl:text-[13px]">
                                        <a href="#"> Sudah Diklaim </a>
                                    </div>

                                </div>
                            </div>
    
                        </div>
    
                        <!-- Card -->
                        <div class="justify-self-center w-[95%] mb-8 bg-white rounded-xl shadow-barang relative overflow-hidden sm:w-[75%] md:w-[88%] xl:w-[75%] 2xl:w-[85%]">
                            
                            <!-- Image Container -->
                            <div class="w-full h-[130px]">  
                                <img class="w-full h-full" src="../src/img/dompetHitam.png" alt="Gambar Barang">
                            </div>
    
                            <!-- Deskripsi Kehilangan -->
                            <div class="w-full px-2 py-3">
    
                                <!-- Nama Barang -->
                                <h1 class="mb-2 text-base font-poppins font-semibold"> Dompet Cokelat </h1>
    
                                <!-- Location Barang -->
                                <div class="flex items-center w-full mb-[5px]">
                                    <span class="mr-1">
                                        <svg width="13" height="13" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.00016 0.833252C1.38766 0.833252 0.0834961 2.13742 0.0834961 3.74992C0.0834961 5.93742 3.00016 9.16659 3.00016 9.16659C3.00016 9.16659 5.91683 5.93742 5.91683 3.74992C5.91683 2.13742 4.61266 0.833252 3.00016 0.833252ZM3.00016 4.79159C2.7239 4.79159 2.45894 4.68184 2.26359 4.48649C2.06824 4.29114 1.9585 4.02619 1.9585 3.74992C1.9585 3.47365 2.06824 3.2087 2.26359 3.01335C2.45894 2.818 2.7239 2.70825 3.00016 2.70825C3.27643 2.70825 3.54138 2.818 3.73673 3.01335C3.93208 3.2087 4.04183 3.47365 4.04183 3.74992C4.04183 4.02619 3.93208 4.29114 3.73673 4.48649C3.54138 4.68184 3.27643 4.79159 3.00016 4.79159Z" fill="black"/>
                                            </svg>                                    
                                    </span> 
    
                                    <p class="text-xs font-poppins font-normal xl:text-sm 2xl:text-base"> Bank Mandiri Telkom </p>
                                </div>
    
                                <!-- Informasi Post -->
                                <div class="flex items-center w-full mb-6">
                                    <span class="mr-[5px]">
                                        <svg width="13" height="13" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.75 0.833415C3.75 0.603296 3.93655 0.416748 4.16667 0.416748H5.83333C6.06345 0.416748 6.25 0.603296 6.25 0.833415C6.25 1.06353 6.06345 1.25008 5.83333 1.25008H4.16667C3.93655 1.25008 3.75 1.06353 3.75 0.833415ZM7.92917 3.07925L8.22497 2.78344C8.39228 2.61613 8.40483 2.34572 8.23788 2.17805C8.07235 2.01182 7.80677 2.02665 7.64089 2.19252L7.34167 2.49175C6.67805 1.95772 5.8518 1.66662 5 1.66675C4.00544 1.66675 3.05161 2.06184 2.34835 2.7651C1.64509 3.46836 1.25 4.42219 1.25 5.41675C1.25 7.48758 2.925 9.16675 5 9.16675C5.70596 9.16713 6.39767 8.96809 6.99547 8.59256C7.59327 8.21704 8.07283 7.68029 8.37893 7.04414C8.68503 6.40799 8.80522 5.69832 8.72564 4.99685C8.64607 4.29539 8.36998 3.63067 7.92917 3.07925ZM5 8.33342C3.3875 8.33342 2.08333 7.02925 2.08333 5.41675C2.08333 3.80425 3.3875 2.50008 5 2.50008C6.6125 2.50008 7.91667 3.80425 7.91667 5.41675C7.91667 7.02925 6.6125 8.33342 5 8.33342Z" fill="black"/>
                                            <path d="M4.5835 3.74992C4.5835 3.5198 4.77004 3.33325 5.00016 3.33325V3.33325C5.23028 3.33325 5.41683 3.5198 5.41683 3.74992V5.41659C5.41683 5.6467 5.23028 5.83325 5.00016 5.83325V5.83325C4.77004 5.83325 4.5835 5.6467 4.5835 5.41659V3.74992Z" fill="black"/>
                                            </svg>
                                                                            
                                    </span>
    
                                    <p class="text-xs font-poppins font-normal xl:text-sm 2xl:text-base"> 1 hour ago </p>
                                </div>

                                <!-- Logo Sudah Diclaim -->
                                <div class="flex justify-end w-full">

                                    <div class="px-2 py-1 text-xs text-white text-center font-poppins font-semibold rounded-lg bg-[#8D9EFF] xl:px-3 xl:text-[13px]">
                                        <a href="#"> Sudah Diklaim </a>
                                    </div>

                                </div>

                            </div>
    
                        </div>
    
                        <!-- Card -->
                        <div class="justify-self-center w-[95%] mb-8 bg-white rounded-xl shadow-barang relative overflow-hidden sm:w-[75%] md:w-[88%] xl:w-[75%] 2xl:w-[85%]">
                            
                            <!-- Image Container -->
                            <div class="w-full h-[130px]">  
                                <img class="w-full h-full" src="../src/img/dompetHitam.png" alt="Gambar Barang">
                            </div>
    
                            <!-- Deskripsi Kehilangan -->
                            <div class="w-full px-2 py-3">
    
                                <!-- Nama Barang -->
                                <h1 class="mb-2 text-base font-poppins font-semibold"> Dompet Cokelat </h1>
    
                                <!-- Location Barang -->
                                <div class="flex items-center w-full mb-[5px]">
                                    <span class="mr-1">
                                        <svg width="13" height="13" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.00016 0.833252C1.38766 0.833252 0.0834961 2.13742 0.0834961 3.74992C0.0834961 5.93742 3.00016 9.16659 3.00016 9.16659C3.00016 9.16659 5.91683 5.93742 5.91683 3.74992C5.91683 2.13742 4.61266 0.833252 3.00016 0.833252ZM3.00016 4.79159C2.7239 4.79159 2.45894 4.68184 2.26359 4.48649C2.06824 4.29114 1.9585 4.02619 1.9585 3.74992C1.9585 3.47365 2.06824 3.2087 2.26359 3.01335C2.45894 2.818 2.7239 2.70825 3.00016 2.70825C3.27643 2.70825 3.54138 2.818 3.73673 3.01335C3.93208 3.2087 4.04183 3.47365 4.04183 3.74992C4.04183 4.02619 3.93208 4.29114 3.73673 4.48649C3.54138 4.68184 3.27643 4.79159 3.00016 4.79159Z" fill="black"/>
                                            </svg>                                    
                                    </span> 
    
                                    <p class="text-xs font-poppins font-normal xl:text-sm 2xl:text-base"> Bank Mandiri Telkom </p>
                                </div>
    
                                <!-- Informasi Post -->
                                <div class="flex items-center w-full mb-6">
                                    <span class="mr-[5px]">
                                        <svg width="13" height="13" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.75 0.833415C3.75 0.603296 3.93655 0.416748 4.16667 0.416748H5.83333C6.06345 0.416748 6.25 0.603296 6.25 0.833415C6.25 1.06353 6.06345 1.25008 5.83333 1.25008H4.16667C3.93655 1.25008 3.75 1.06353 3.75 0.833415ZM7.92917 3.07925L8.22497 2.78344C8.39228 2.61613 8.40483 2.34572 8.23788 2.17805C8.07235 2.01182 7.80677 2.02665 7.64089 2.19252L7.34167 2.49175C6.67805 1.95772 5.8518 1.66662 5 1.66675C4.00544 1.66675 3.05161 2.06184 2.34835 2.7651C1.64509 3.46836 1.25 4.42219 1.25 5.41675C1.25 7.48758 2.925 9.16675 5 9.16675C5.70596 9.16713 6.39767 8.96809 6.99547 8.59256C7.59327 8.21704 8.07283 7.68029 8.37893 7.04414C8.68503 6.40799 8.80522 5.69832 8.72564 4.99685C8.64607 4.29539 8.36998 3.63067 7.92917 3.07925ZM5 8.33342C3.3875 8.33342 2.08333 7.02925 2.08333 5.41675C2.08333 3.80425 3.3875 2.50008 5 2.50008C6.6125 2.50008 7.91667 3.80425 7.91667 5.41675C7.91667 7.02925 6.6125 8.33342 5 8.33342Z" fill="black"/>
                                            <path d="M4.5835 3.74992C4.5835 3.5198 4.77004 3.33325 5.00016 3.33325V3.33325C5.23028 3.33325 5.41683 3.5198 5.41683 3.74992V5.41659C5.41683 5.6467 5.23028 5.83325 5.00016 5.83325V5.83325C4.77004 5.83325 4.5835 5.6467 4.5835 5.41659V3.74992Z" fill="black"/>
                                            </svg>
                                                                            
                                    </span>
    
                                    <p class="text-xs font-poppins font-normal xl:text-sm 2xl:text-base"> 1 hour ago </p>
                                </div>

                                <!-- Logo Sudah Diclaim -->
                                <div class="flex justify-end w-full">

                                    <div class="px-2 py-1 text-xs text-white text-center font-poppins font-semibold rounded-lg bg-[#8D9EFF] xl:px-3 xl:text-[13px]">
                                        <a href="#"> Sudah Diklaim </a>
                                    </div>

                                </div>
                            </div>
    
                        </div>

                        <!-- Card -->
                        <div class="justify-self-center w-[95%] mb-8 bg-white rounded-xl shadow-barang relative overflow-hidden sm:w-[75%] md:w-[88%] xl:w-[75%] 2xl:w-[85%]">
                            
                            <!-- Image Container -->
                            <div class="w-full h-[130px]">  
                                <img class="w-full h-full" src="../src/img/dompetHitam.png" alt="Gambar Barang">
                            </div>
    
                            <!-- Deskripsi Kehilangan -->
                            <div class="w-full px-2 py-3">
    
                                <!-- Nama Barang -->
                                <h1 class="mb-2 text-base font-poppins font-semibold"> Dompet Cokelat </h1>
    
                                <!-- Location Barang -->
                                <div class="flex items-center w-full mb-[5px]">
                                    <span class="mr-1">
                                        <svg width="13" height="13" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.00016 0.833252C1.38766 0.833252 0.0834961 2.13742 0.0834961 3.74992C0.0834961 5.93742 3.00016 9.16659 3.00016 9.16659C3.00016 9.16659 5.91683 5.93742 5.91683 3.74992C5.91683 2.13742 4.61266 0.833252 3.00016 0.833252ZM3.00016 4.79159C2.7239 4.79159 2.45894 4.68184 2.26359 4.48649C2.06824 4.29114 1.9585 4.02619 1.9585 3.74992C1.9585 3.47365 2.06824 3.2087 2.26359 3.01335C2.45894 2.818 2.7239 2.70825 3.00016 2.70825C3.27643 2.70825 3.54138 2.818 3.73673 3.01335C3.93208 3.2087 4.04183 3.47365 4.04183 3.74992C4.04183 4.02619 3.93208 4.29114 3.73673 4.48649C3.54138 4.68184 3.27643 4.79159 3.00016 4.79159Z" fill="black"/>
                                            </svg>                                    
                                    </span> 
    
                                    <p class="text-xs font-poppins font-normal xl:text-sm 2xl:text-base"> Bank Mandiri Telkom </p>
                                </div>
    
                                <!-- Informasi Post -->
                                <div class="flex items-center w-full mb-6">
                                    <span class="mr-[5px]">
                                        <svg width="13" height="13" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.75 0.833415C3.75 0.603296 3.93655 0.416748 4.16667 0.416748H5.83333C6.06345 0.416748 6.25 0.603296 6.25 0.833415C6.25 1.06353 6.06345 1.25008 5.83333 1.25008H4.16667C3.93655 1.25008 3.75 1.06353 3.75 0.833415ZM7.92917 3.07925L8.22497 2.78344C8.39228 2.61613 8.40483 2.34572 8.23788 2.17805C8.07235 2.01182 7.80677 2.02665 7.64089 2.19252L7.34167 2.49175C6.67805 1.95772 5.8518 1.66662 5 1.66675C4.00544 1.66675 3.05161 2.06184 2.34835 2.7651C1.64509 3.46836 1.25 4.42219 1.25 5.41675C1.25 7.48758 2.925 9.16675 5 9.16675C5.70596 9.16713 6.39767 8.96809 6.99547 8.59256C7.59327 8.21704 8.07283 7.68029 8.37893 7.04414C8.68503 6.40799 8.80522 5.69832 8.72564 4.99685C8.64607 4.29539 8.36998 3.63067 7.92917 3.07925ZM5 8.33342C3.3875 8.33342 2.08333 7.02925 2.08333 5.41675C2.08333 3.80425 3.3875 2.50008 5 2.50008C6.6125 2.50008 7.91667 3.80425 7.91667 5.41675C7.91667 7.02925 6.6125 8.33342 5 8.33342Z" fill="black"/>
                                            <path d="M4.5835 3.74992C4.5835 3.5198 4.77004 3.33325 5.00016 3.33325V3.33325C5.23028 3.33325 5.41683 3.5198 5.41683 3.74992V5.41659C5.41683 5.6467 5.23028 5.83325 5.00016 5.83325V5.83325C4.77004 5.83325 4.5835 5.6467 4.5835 5.41659V3.74992Z" fill="black"/>
                                            </svg>
                                                                            
                                    </span>
    
                                    <p class="text-xs font-poppins font-normal xl:text-sm 2xl:text-base"> 1 hour ago </p>
                                </div>

                                <!-- Logo Sudah Diclaim -->
                                <div class="flex justify-end w-full">

                                    <div class="px-2 py-1 text-xs text-white text-center font-poppins font-semibold rounded-lg bg-[#8D9EFF] xl:px-3 xl:text-[13px]">
                                        <a href="#"> Sudah Diklaim </a>
                                    </div>

                                </div>
                            </div>
    
                        </div>
    
                    </div>
    
                    <!-- Found Post Container -->
                    <div id="found-post-barang" class="grid-cols-2 w-full mt-6 md:grid-cols-3 lg:grid-cols-4 2xl:grid-cols-5 hidden">
                        
                        <!-- Card -->
                        <div class="justify-self-center w-[95%] mb-8 bg-white rounded-xl shadow-barang relative overflow-hidden sm:w-[75%] md:w-[88%] xl:w-[75%] 2xl:w-[85%]">
                            
                            <!-- Image Container -->
                            <div class="w-full h-[130px]">  
                                <img class="w-full h-full" src="../src/img/dompetPutih.png" alt="Gambar Barang">
                            </div>
    
                            <!-- Deskripsi Kehilangan -->
                            <div class="w-full px-2 py-3">
    
                                <!-- Nama Barang -->
                                <h1 class="mb-2 text-base font-poppins font-semibold"> Dompet Cokelat </h1>
    
                                <!-- Location Barang -->
                                <div class="flex items-center w-full mb-[5px]">
                                    <span class="mr-1">
                                        <svg width="13" height="13" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.00016 0.833252C1.38766 0.833252 0.0834961 2.13742 0.0834961 3.74992C0.0834961 5.93742 3.00016 9.16659 3.00016 9.16659C3.00016 9.16659 5.91683 5.93742 5.91683 3.74992C5.91683 2.13742 4.61266 0.833252 3.00016 0.833252ZM3.00016 4.79159C2.7239 4.79159 2.45894 4.68184 2.26359 4.48649C2.06824 4.29114 1.9585 4.02619 1.9585 3.74992C1.9585 3.47365 2.06824 3.2087 2.26359 3.01335C2.45894 2.818 2.7239 2.70825 3.00016 2.70825C3.27643 2.70825 3.54138 2.818 3.73673 3.01335C3.93208 3.2087 4.04183 3.47365 4.04183 3.74992C4.04183 4.02619 3.93208 4.29114 3.73673 4.48649C3.54138 4.68184 3.27643 4.79159 3.00016 4.79159Z" fill="black"/>
                                            </svg>                                    
                                    </span> 
    
                                    <p class="text-xs font-poppins font-normal xl:text-sm 2xl:text-base"> Bank Mandiri Telkom </p>
                                </div>
    
                                <!-- Informasi Post -->
                                <div class="flex items-center w-full mb-6">
                                    <span class="mr-[5px]">
                                        <svg width="13" height="13" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.75 0.833415C3.75 0.603296 3.93655 0.416748 4.16667 0.416748H5.83333C6.06345 0.416748 6.25 0.603296 6.25 0.833415C6.25 1.06353 6.06345 1.25008 5.83333 1.25008H4.16667C3.93655 1.25008 3.75 1.06353 3.75 0.833415ZM7.92917 3.07925L8.22497 2.78344C8.39228 2.61613 8.40483 2.34572 8.23788 2.17805C8.07235 2.01182 7.80677 2.02665 7.64089 2.19252L7.34167 2.49175C6.67805 1.95772 5.8518 1.66662 5 1.66675C4.00544 1.66675 3.05161 2.06184 2.34835 2.7651C1.64509 3.46836 1.25 4.42219 1.25 5.41675C1.25 7.48758 2.925 9.16675 5 9.16675C5.70596 9.16713 6.39767 8.96809 6.99547 8.59256C7.59327 8.21704 8.07283 7.68029 8.37893 7.04414C8.68503 6.40799 8.80522 5.69832 8.72564 4.99685C8.64607 4.29539 8.36998 3.63067 7.92917 3.07925ZM5 8.33342C3.3875 8.33342 2.08333 7.02925 2.08333 5.41675C2.08333 3.80425 3.3875 2.50008 5 2.50008C6.6125 2.50008 7.91667 3.80425 7.91667 5.41675C7.91667 7.02925 6.6125 8.33342 5 8.33342Z" fill="black"/>
                                            <path d="M4.5835 3.74992C4.5835 3.5198 4.77004 3.33325 5.00016 3.33325V3.33325C5.23028 3.33325 5.41683 3.5198 5.41683 3.74992V5.41659C5.41683 5.6467 5.23028 5.83325 5.00016 5.83325V5.83325C4.77004 5.83325 4.5835 5.6467 4.5835 5.41659V3.74992Z" fill="black"/>
                                            </svg>
                                                                            
                                    </span>
    
                                    <p class="text-xs font-poppins font-normal xl:text-sm 2xl:text-base"> 1 hour ago </p>
                                </div>

                                <!-- Logo Sudah Diclaim -->
                                <div class="flex justify-end w-full">

                                    <div class="px-2 py-1 text-xs text-white text-center font-poppins font-semibold rounded-lg bg-[#8D9EFF] xl:px-3 xl:text-[13px]">
                                        <a href="#"> Sudah Diklaim </a>
                                    </div>

                                </div>
                            </div>
    
                        </div>
                        
                        <!-- Card -->
                        <div class="justify-self-center w-[95%] mb-8 bg-white rounded-xl shadow-barang relative overflow-hidden sm:w-[75%] md:w-[88%] xl:w-[75%] 2xl:w-[85%]">
                            
                            <!-- Image Container -->
                            <div class="w-full h-[130px]">  
                                <img class="w-full h-full" src="../src/img/dompetPutih.png" alt="Gambar Barang">
                            </div>
    
                            <!-- Deskripsi Kehilangan -->
                            <div class="w-full px-2 py-3">
    
                                <!-- Nama Barang -->
                                <h1 class="mb-2 text-base font-poppins font-semibold"> Dompet Cokelat </h1>
    
                                <!-- Location Barang -->
                                <div class="flex items-center w-full mb-[5px]">
                                    <span class="mr-1">
                                        <svg width="13" height="13" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.00016 0.833252C1.38766 0.833252 0.0834961 2.13742 0.0834961 3.74992C0.0834961 5.93742 3.00016 9.16659 3.00016 9.16659C3.00016 9.16659 5.91683 5.93742 5.91683 3.74992C5.91683 2.13742 4.61266 0.833252 3.00016 0.833252ZM3.00016 4.79159C2.7239 4.79159 2.45894 4.68184 2.26359 4.48649C2.06824 4.29114 1.9585 4.02619 1.9585 3.74992C1.9585 3.47365 2.06824 3.2087 2.26359 3.01335C2.45894 2.818 2.7239 2.70825 3.00016 2.70825C3.27643 2.70825 3.54138 2.818 3.73673 3.01335C3.93208 3.2087 4.04183 3.47365 4.04183 3.74992C4.04183 4.02619 3.93208 4.29114 3.73673 4.48649C3.54138 4.68184 3.27643 4.79159 3.00016 4.79159Z" fill="black"/>
                                            </svg>                                    
                                    </span> 
    
                                    <p class="text-xs font-poppins font-normal xl:text-sm 2xl:text-base"> Bank Mandiri Telkom </p>
                                </div>
    
                                <!-- Informasi Post -->
                                <div class="flex items-center w-full mb-6">
                                    <span class="mr-[5px]">
                                        <svg width="13" height="13" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.75 0.833415C3.75 0.603296 3.93655 0.416748 4.16667 0.416748H5.83333C6.06345 0.416748 6.25 0.603296 6.25 0.833415C6.25 1.06353 6.06345 1.25008 5.83333 1.25008H4.16667C3.93655 1.25008 3.75 1.06353 3.75 0.833415ZM7.92917 3.07925L8.22497 2.78344C8.39228 2.61613 8.40483 2.34572 8.23788 2.17805C8.07235 2.01182 7.80677 2.02665 7.64089 2.19252L7.34167 2.49175C6.67805 1.95772 5.8518 1.66662 5 1.66675C4.00544 1.66675 3.05161 2.06184 2.34835 2.7651C1.64509 3.46836 1.25 4.42219 1.25 5.41675C1.25 7.48758 2.925 9.16675 5 9.16675C5.70596 9.16713 6.39767 8.96809 6.99547 8.59256C7.59327 8.21704 8.07283 7.68029 8.37893 7.04414C8.68503 6.40799 8.80522 5.69832 8.72564 4.99685C8.64607 4.29539 8.36998 3.63067 7.92917 3.07925ZM5 8.33342C3.3875 8.33342 2.08333 7.02925 2.08333 5.41675C2.08333 3.80425 3.3875 2.50008 5 2.50008C6.6125 2.50008 7.91667 3.80425 7.91667 5.41675C7.91667 7.02925 6.6125 8.33342 5 8.33342Z" fill="black"/>
                                            <path d="M4.5835 3.74992C4.5835 3.5198 4.77004 3.33325 5.00016 3.33325V3.33325C5.23028 3.33325 5.41683 3.5198 5.41683 3.74992V5.41659C5.41683 5.6467 5.23028 5.83325 5.00016 5.83325V5.83325C4.77004 5.83325 4.5835 5.6467 4.5835 5.41659V3.74992Z" fill="black"/>
                                            </svg>
                                                                            
                                    </span>
    
                                    <p class="text-xs font-poppins font-normal xl:text-sm 2xl:text-base"> 1 hour ago </p>
                                </div>

                                <!-- Logo Sudah Diclaim -->
                                <div class="flex justify-end w-full">

                                    <div class="px-2 py-1 text-xs text-white text-center font-poppins font-semibold rounded-lg bg-[#8D9EFF] xl:px-3 xl:text-[13px]">
                                        <a href="#"> Sudah Diklaim </a>
                                    </div>

                                </div>
                            </div>
    
                        </div>

                        <!-- Card -->
                        <div class="justify-self-center w-[95%] mb-8 bg-white rounded-xl shadow-barang relative overflow-hidden sm:w-[75%] md:w-[88%] xl:w-[75%] 2xl:w-[85%]">
                            
                            <!-- Image Container -->
                            <div class="w-full h-[130px]">  
                                <img class="w-full h-full" src="../src/img/dompetPutih.png" alt="Gambar Barang">
                            </div>
    
                            <!-- Deskripsi Kehilangan -->
                            <div class="w-full px-2 py-3">
    
                                <!-- Nama Barang -->
                                <h1 class="mb-2 text-base font-poppins font-semibold"> Dompet Cokelat </h1>
    
                                <!-- Location Barang -->
                                <div class="flex items-center w-full mb-[5px]">
                                    <span class="mr-1">
                                        <svg width="13" height="13" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.00016 0.833252C1.38766 0.833252 0.0834961 2.13742 0.0834961 3.74992C0.0834961 5.93742 3.00016 9.16659 3.00016 9.16659C3.00016 9.16659 5.91683 5.93742 5.91683 3.74992C5.91683 2.13742 4.61266 0.833252 3.00016 0.833252ZM3.00016 4.79159C2.7239 4.79159 2.45894 4.68184 2.26359 4.48649C2.06824 4.29114 1.9585 4.02619 1.9585 3.74992C1.9585 3.47365 2.06824 3.2087 2.26359 3.01335C2.45894 2.818 2.7239 2.70825 3.00016 2.70825C3.27643 2.70825 3.54138 2.818 3.73673 3.01335C3.93208 3.2087 4.04183 3.47365 4.04183 3.74992C4.04183 4.02619 3.93208 4.29114 3.73673 4.48649C3.54138 4.68184 3.27643 4.79159 3.00016 4.79159Z" fill="black"/>
                                            </svg>                                    
                                    </span> 
    
                                    <p class="text-xs font-poppins font-normal xl:text-sm 2xl:text-base"> Bank Mandiri Telkom </p>
                                </div>
    
                                <!-- Informasi Post -->
                                <div class="flex items-center w-full mb-6">
                                    <span class="mr-[5px]">
                                        <svg width="13" height="13" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.75 0.833415C3.75 0.603296 3.93655 0.416748 4.16667 0.416748H5.83333C6.06345 0.416748 6.25 0.603296 6.25 0.833415C6.25 1.06353 6.06345 1.25008 5.83333 1.25008H4.16667C3.93655 1.25008 3.75 1.06353 3.75 0.833415ZM7.92917 3.07925L8.22497 2.78344C8.39228 2.61613 8.40483 2.34572 8.23788 2.17805C8.07235 2.01182 7.80677 2.02665 7.64089 2.19252L7.34167 2.49175C6.67805 1.95772 5.8518 1.66662 5 1.66675C4.00544 1.66675 3.05161 2.06184 2.34835 2.7651C1.64509 3.46836 1.25 4.42219 1.25 5.41675C1.25 7.48758 2.925 9.16675 5 9.16675C5.70596 9.16713 6.39767 8.96809 6.99547 8.59256C7.59327 8.21704 8.07283 7.68029 8.37893 7.04414C8.68503 6.40799 8.80522 5.69832 8.72564 4.99685C8.64607 4.29539 8.36998 3.63067 7.92917 3.07925ZM5 8.33342C3.3875 8.33342 2.08333 7.02925 2.08333 5.41675C2.08333 3.80425 3.3875 2.50008 5 2.50008C6.6125 2.50008 7.91667 3.80425 7.91667 5.41675C7.91667 7.02925 6.6125 8.33342 5 8.33342Z" fill="black"/>
                                            <path d="M4.5835 3.74992C4.5835 3.5198 4.77004 3.33325 5.00016 3.33325V3.33325C5.23028 3.33325 5.41683 3.5198 5.41683 3.74992V5.41659C5.41683 5.6467 5.23028 5.83325 5.00016 5.83325V5.83325C4.77004 5.83325 4.5835 5.6467 4.5835 5.41659V3.74992Z" fill="black"/>
                                            </svg>
                                                                            
                                    </span>
    
                                    <p class="text-xs font-poppins font-normal xl:text-sm 2xl:text-base"> 1 hour ago </p>
                                </div>

                                <!-- Logo Sudah Diclaim -->
                                <div class="flex justify-end w-full">

                                    <div class="px-2 py-1 text-xs text-white text-center font-poppins font-semibold rounded-lg bg-[#8D9EFF] xl:px-3 xl:text-[13px]">
                                        <a href="#"> Sudah Diklaim </a>
                                    </div>

                                </div>
                            </div>
    
                        </div>

                        <!-- Card -->
                        <div class="justify-self-center w-[95%] mb-8 bg-white rounded-xl shadow-barang relative overflow-hidden sm:w-[75%] md:w-[88%] xl:w-[75%] 2xl:w-[85%]">
                            
                            <!-- Image Container -->
                            <div class="w-full h-[130px]">  
                                <img class="w-full h-full" src="../src/img/dompetPutih.png" alt="Gambar Barang">
                            </div>
    
                            <!-- Deskripsi Kehilangan -->
                            <div class="w-full px-2 py-3">
    
                                <!-- Nama Barang -->
                                <h1 class="mb-2 text-base font-poppins font-semibold"> Dompet Cokelat </h1>
    
                                <!-- Location Barang -->
                                <div class="flex items-center w-full mb-[5px]">
                                    <span class="mr-1">
                                        <svg width="13" height="13" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.00016 0.833252C1.38766 0.833252 0.0834961 2.13742 0.0834961 3.74992C0.0834961 5.93742 3.00016 9.16659 3.00016 9.16659C3.00016 9.16659 5.91683 5.93742 5.91683 3.74992C5.91683 2.13742 4.61266 0.833252 3.00016 0.833252ZM3.00016 4.79159C2.7239 4.79159 2.45894 4.68184 2.26359 4.48649C2.06824 4.29114 1.9585 4.02619 1.9585 3.74992C1.9585 3.47365 2.06824 3.2087 2.26359 3.01335C2.45894 2.818 2.7239 2.70825 3.00016 2.70825C3.27643 2.70825 3.54138 2.818 3.73673 3.01335C3.93208 3.2087 4.04183 3.47365 4.04183 3.74992C4.04183 4.02619 3.93208 4.29114 3.73673 4.48649C3.54138 4.68184 3.27643 4.79159 3.00016 4.79159Z" fill="black"/>
                                            </svg>                                    
                                    </span> 
    
                                    <p class="text-xs font-poppins font-normal xl:text-sm 2xl:text-base"> Bank Mandiri Telkom </p>
                                </div>
    
                                <!-- Informasi Post -->
                                <div class="flex items-center w-full mb-6">
                                    <span class="mr-[5px]">
                                        <svg width="13" height="13" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.75 0.833415C3.75 0.603296 3.93655 0.416748 4.16667 0.416748H5.83333C6.06345 0.416748 6.25 0.603296 6.25 0.833415C6.25 1.06353 6.06345 1.25008 5.83333 1.25008H4.16667C3.93655 1.25008 3.75 1.06353 3.75 0.833415ZM7.92917 3.07925L8.22497 2.78344C8.39228 2.61613 8.40483 2.34572 8.23788 2.17805C8.07235 2.01182 7.80677 2.02665 7.64089 2.19252L7.34167 2.49175C6.67805 1.95772 5.8518 1.66662 5 1.66675C4.00544 1.66675 3.05161 2.06184 2.34835 2.7651C1.64509 3.46836 1.25 4.42219 1.25 5.41675C1.25 7.48758 2.925 9.16675 5 9.16675C5.70596 9.16713 6.39767 8.96809 6.99547 8.59256C7.59327 8.21704 8.07283 7.68029 8.37893 7.04414C8.68503 6.40799 8.80522 5.69832 8.72564 4.99685C8.64607 4.29539 8.36998 3.63067 7.92917 3.07925ZM5 8.33342C3.3875 8.33342 2.08333 7.02925 2.08333 5.41675C2.08333 3.80425 3.3875 2.50008 5 2.50008C6.6125 2.50008 7.91667 3.80425 7.91667 5.41675C7.91667 7.02925 6.6125 8.33342 5 8.33342Z" fill="black"/>
                                            <path d="M4.5835 3.74992C4.5835 3.5198 4.77004 3.33325 5.00016 3.33325V3.33325C5.23028 3.33325 5.41683 3.5198 5.41683 3.74992V5.41659C5.41683 5.6467 5.23028 5.83325 5.00016 5.83325V5.83325C4.77004 5.83325 4.5835 5.6467 4.5835 5.41659V3.74992Z" fill="black"/>
                                            </svg>
                                                                            
                                    </span>
    
                                    <p class="text-xs font-poppins font-normal xl:text-sm 2xl:text-base"> 1 hour ago </p>
                                </div>

                                <!-- Logo Sudah Diclaim -->
                                <div class="flex justify-end w-full">

                                    <div class="px-2 py-1 text-xs text-white text-center font-poppins font-semibold rounded-lg bg-[#8D9EFF] xl:px-3 xl:text-[13px]">
                                        <a href="#"> Sudah Diklaim </a>
                                    </div>

                                </div>
                            </div>
    
                        </div>

                        <!-- Card -->
                        <div class="justify-self-center w-[95%] mb-8 bg-white rounded-xl shadow-barang relative overflow-hidden sm:w-[75%] md:w-[88%] xl:w-[75%] 2xl:w-[85%]">
                            
                            <!-- Image Container -->
                            <div class="w-full h-[130px]">  
                                <img class="w-full h-full" src="../src/img/dompetPutih.png" alt="Gambar Barang">
                            </div>
    
                            <!-- Deskripsi Kehilangan -->
                            <div class="w-full px-2 py-3">
    
                                <!-- Nama Barang -->
                                <h1 class="mb-2 text-base font-poppins font-semibold"> Dompet Cokelat </h1>
    
                                <!-- Location Barang -->
                                <div class="flex items-center w-full mb-[5px]">
                                    <span class="mr-1">
                                        <svg width="13" height="13" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.00016 0.833252C1.38766 0.833252 0.0834961 2.13742 0.0834961 3.74992C0.0834961 5.93742 3.00016 9.16659 3.00016 9.16659C3.00016 9.16659 5.91683 5.93742 5.91683 3.74992C5.91683 2.13742 4.61266 0.833252 3.00016 0.833252ZM3.00016 4.79159C2.7239 4.79159 2.45894 4.68184 2.26359 4.48649C2.06824 4.29114 1.9585 4.02619 1.9585 3.74992C1.9585 3.47365 2.06824 3.2087 2.26359 3.01335C2.45894 2.818 2.7239 2.70825 3.00016 2.70825C3.27643 2.70825 3.54138 2.818 3.73673 3.01335C3.93208 3.2087 4.04183 3.47365 4.04183 3.74992C4.04183 4.02619 3.93208 4.29114 3.73673 4.48649C3.54138 4.68184 3.27643 4.79159 3.00016 4.79159Z" fill="black"/>
                                            </svg>                                    
                                    </span> 
    
                                    <p class="text-xs font-poppins font-normal xl:text-sm 2xl:text-base"> Bank Mandiri Telkom </p>
                                </div>
    
                                <!-- Informasi Post -->
                                <div class="flex items-center w-full mb-6">
                                    <span class="mr-[5px]">
                                        <svg width="13" height="13" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.75 0.833415C3.75 0.603296 3.93655 0.416748 4.16667 0.416748H5.83333C6.06345 0.416748 6.25 0.603296 6.25 0.833415C6.25 1.06353 6.06345 1.25008 5.83333 1.25008H4.16667C3.93655 1.25008 3.75 1.06353 3.75 0.833415ZM7.92917 3.07925L8.22497 2.78344C8.39228 2.61613 8.40483 2.34572 8.23788 2.17805C8.07235 2.01182 7.80677 2.02665 7.64089 2.19252L7.34167 2.49175C6.67805 1.95772 5.8518 1.66662 5 1.66675C4.00544 1.66675 3.05161 2.06184 2.34835 2.7651C1.64509 3.46836 1.25 4.42219 1.25 5.41675C1.25 7.48758 2.925 9.16675 5 9.16675C5.70596 9.16713 6.39767 8.96809 6.99547 8.59256C7.59327 8.21704 8.07283 7.68029 8.37893 7.04414C8.68503 6.40799 8.80522 5.69832 8.72564 4.99685C8.64607 4.29539 8.36998 3.63067 7.92917 3.07925ZM5 8.33342C3.3875 8.33342 2.08333 7.02925 2.08333 5.41675C2.08333 3.80425 3.3875 2.50008 5 2.50008C6.6125 2.50008 7.91667 3.80425 7.91667 5.41675C7.91667 7.02925 6.6125 8.33342 5 8.33342Z" fill="black"/>
                                            <path d="M4.5835 3.74992C4.5835 3.5198 4.77004 3.33325 5.00016 3.33325V3.33325C5.23028 3.33325 5.41683 3.5198 5.41683 3.74992V5.41659C5.41683 5.6467 5.23028 5.83325 5.00016 5.83325V5.83325C4.77004 5.83325 4.5835 5.6467 4.5835 5.41659V3.74992Z" fill="black"/>
                                            </svg>
                                                                            
                                    </span>
    
                                    <p class="text-xs font-poppins font-normal xl:text-sm 2xl:text-base"> 1 hour ago </p>
                                </div>

                                <!-- Logo Sudah Diclaim -->
                                <div class="flex justify-end w-full">

                                    <div class="px-2 py-1 text-xs text-white text-center font-poppins font-semibold rounded-lg bg-[#8D9EFF] xl:px-3 xl:text-[13px]">
                                        <a href="#"> Sudah Diklaim </a>
                                    </div>

                                </div>
                            </div>
    
                        </div>

                        <!-- Card -->
                        <div class="justify-self-center w-[95%] mb-8 bg-white rounded-xl shadow-barang relative overflow-hidden sm:w-[75%] md:w-[88%] xl:w-[75%] 2xl:w-[85%]">
                            
                            <!-- Image Container -->
                            <div class="w-full h-[130px]">  
                                <img class="w-full h-full" src="../src/img/dompetPutih.png" alt="Gambar Barang">
                            </div>
    
                            <!-- Deskripsi Kehilangan -->
                            <div class="w-full px-2 py-3">
    
                                <!-- Nama Barang -->
                                <h1 class="mb-2 text-base font-poppins font-semibold"> Dompet Cokelat </h1>
    
                                <!-- Location Barang -->
                                <div class="flex items-center w-full mb-[5px]">
                                    <span class="mr-1">
                                        <svg width="13" height="13" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.00016 0.833252C1.38766 0.833252 0.0834961 2.13742 0.0834961 3.74992C0.0834961 5.93742 3.00016 9.16659 3.00016 9.16659C3.00016 9.16659 5.91683 5.93742 5.91683 3.74992C5.91683 2.13742 4.61266 0.833252 3.00016 0.833252ZM3.00016 4.79159C2.7239 4.79159 2.45894 4.68184 2.26359 4.48649C2.06824 4.29114 1.9585 4.02619 1.9585 3.74992C1.9585 3.47365 2.06824 3.2087 2.26359 3.01335C2.45894 2.818 2.7239 2.70825 3.00016 2.70825C3.27643 2.70825 3.54138 2.818 3.73673 3.01335C3.93208 3.2087 4.04183 3.47365 4.04183 3.74992C4.04183 4.02619 3.93208 4.29114 3.73673 4.48649C3.54138 4.68184 3.27643 4.79159 3.00016 4.79159Z" fill="black"/>
                                            </svg>                                    
                                    </span> 
    
                                    <p class="text-xs font-poppins font-normal xl:text-sm 2xl:text-base"> Bank Mandiri Telkom </p>
                                </div>
    
                                <!-- Informasi Post -->
                                <div class="flex items-center w-full mb-6">
                                    <span class="mr-[5px]">
                                        <svg width="13" height="13" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.75 0.833415C3.75 0.603296 3.93655 0.416748 4.16667 0.416748H5.83333C6.06345 0.416748 6.25 0.603296 6.25 0.833415C6.25 1.06353 6.06345 1.25008 5.83333 1.25008H4.16667C3.93655 1.25008 3.75 1.06353 3.75 0.833415ZM7.92917 3.07925L8.22497 2.78344C8.39228 2.61613 8.40483 2.34572 8.23788 2.17805C8.07235 2.01182 7.80677 2.02665 7.64089 2.19252L7.34167 2.49175C6.67805 1.95772 5.8518 1.66662 5 1.66675C4.00544 1.66675 3.05161 2.06184 2.34835 2.7651C1.64509 3.46836 1.25 4.42219 1.25 5.41675C1.25 7.48758 2.925 9.16675 5 9.16675C5.70596 9.16713 6.39767 8.96809 6.99547 8.59256C7.59327 8.21704 8.07283 7.68029 8.37893 7.04414C8.68503 6.40799 8.80522 5.69832 8.72564 4.99685C8.64607 4.29539 8.36998 3.63067 7.92917 3.07925ZM5 8.33342C3.3875 8.33342 2.08333 7.02925 2.08333 5.41675C2.08333 3.80425 3.3875 2.50008 5 2.50008C6.6125 2.50008 7.91667 3.80425 7.91667 5.41675C7.91667 7.02925 6.6125 8.33342 5 8.33342Z" fill="black"/>
                                            <path d="M4.5835 3.74992C4.5835 3.5198 4.77004 3.33325 5.00016 3.33325V3.33325C5.23028 3.33325 5.41683 3.5198 5.41683 3.74992V5.41659C5.41683 5.6467 5.23028 5.83325 5.00016 5.83325V5.83325C4.77004 5.83325 4.5835 5.6467 4.5835 5.41659V3.74992Z" fill="black"/>
                                            </svg>
                                                                            
                                    </span>
    
                                    <p class="text-xs font-poppins font-normal xl:text-sm 2xl:text-base"> 1 hour ago </p>
                                </div>

                                <!-- Logo Sudah Diclaim -->
                                <div class="flex justify-end w-full">

                                    <div class="px-2 py-1 text-xs text-white text-center font-poppins font-semibold rounded-lg bg-[#8D9EFF] xl:px-3 xl:text-[13px]">
                                        <a href="#"> Sudah Diklaim </a>
                                    </div>

                                </div>
                            </div>
    
                        </div>
    
    
                    </div>
                </div>


            </div>
        </section>
        <!-- Section Post End -->


        <!-- Aside Section -->
        <section class="w-[90%] h-[60vh] mx-auto mt-80 mb-10 hidden lg:block relative">

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

        <script src="js/userProfile.js"></script>

    </body>

</html>