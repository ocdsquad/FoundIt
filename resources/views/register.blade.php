<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="./css/style.css">

        <title> Register </title>
    </head>

    <body class="bg-[#B9E0FF]">
        
        <!-- Register -->
        <section class="py-5 lg:py-0 overflow-hidden">
            <div class="container">
                
                <!-- Container Flex Wrapper -->
                <div class="flex flex-wrap lg:h-screen">

                    <!-- Logo & Caption Container -->
                    <div class="self-center w-full mx-auto mb-5 sm:mb-8 lg:hidden">

                        <!-- Register Welcome Text -->
                        <div class="hidden mb-2 sm:block lg:hidden">                            
                            <p class="mb-2 font-montserrat font-extrabold text-xl text-center sm:text-3xl md:text-4xl"> Yuk, Buat Akunmu ! </p>
    
                            <p class= "font-poppins font-light text-center text-sm sm:text-base md:text-lg"> Buat akunmu dan coba cari barang <br> kamu disini ! </p>
                        </div>

                        <!-- Logo Image -->
                        <div class="w-[100%] mx-auto min-[480px]:w-[80%] md:w-[65%] md:pl-5 lg:hidden">
                            <img class="w-full" src="../src/img/registerSticker.png" alt="Logo Register">
                        </div>

                        <!-- Logo Foundit -->
                        <div class="hidden w-[10%]">
                            <img class="w-full" src="../src/img/logo.png" alt="Logo Foundit">
                        </div>

                    </div>

                    <!-- Form Register Container -->
                    <div class="self-center w-[95%] mx-auto min-[480px]:w-[85%] sm:w-[70%] sm:p-7 sm:bg-white sm:rounded-2xl md:w-[60%] lg:w-[45%] xl:w-[33%] relative">

                        <p class="mb-5 font-montserrat font-extrabold text-3xl sm:mb-7 sm:text-center lg:hidden"> Sign Up </p>

                        <!-- Register Welcome Text -->
                        <div class="hidden mb-2 lg:block">                            
                            <p class="mb-2 font-montserrat font-extrabold text-xl text-center sm:text-3xl"> Yuk, Buat Akunmu ! </p>
    
                            <p class= "font-poppins font-light text-center text-sm sm:text-base"> Buat akunmu dan coba cari barang <br> kamu disini ! </p>
                        </div>

                        <form class="w-full">

                            <!-- Nama Pengguna -->
                            <div class="w-full mb-2 sm:mb-5">
                                <label class="text-xs font-semibold sm:text-sm md:text-base" for="username"> Nama Pengguna </label>

                                <input class="w-full p-3 border border-[#8D9EFF] rounded-xl" type="text" id="username">
                            </div>

                            <!-- Email / No Telepon -->
                            <div class="w-full mb-2 sm:mb-5">
                                <label class="text-xs font-semibold sm:text-sm md:text-base" for="email"> Email / No.Telepon </label>

                                <input class="w-full p-3 border border-[#8D9EFF] rounded-xl" type="text" id="email">
                            </div>

                            <!-- Password -->
                            <div class="w-full mb-2">
                                <label class="text-xs font-semibold sm:text-sm md:text-base" for="password"> Kata Sandi </label>

                                <input class="w-full p-3 border border-[#8D9EFF] rounded-xl" type="text" id="password">
                            </div>

                            <p class="px-2 mb-4 text-[10px] text-center font-poppins font-medium min-[480px]:text-[11px]">Dengan mendaftar, saya menyetujui <span class="text-[#8D72E1]">Syarat dan Ketentuan</span> serta <span class="text-[#8D72E1]">Kebijakan Privasi</span>.</p>

                            <button class="w-full py-[14px] font-poppins font-semibold text-white bg-[#8D72E1] rounded-xl block md:text-lg"> MASUK </button>

                        </form>

                        <!-- To Login -->
                        <p class="mt-5 text-center text-sm font-poppins font-medium"> Sudah Punya Akun? <a href="Login.html" class="text-[#8D72E1]">Login Sekarang!</a> </p>

                        <!-- Image Background Kiri -->
                        <div class="hidden w-[200%] absolute -z-[1] bottom-12 -left-[300px] lg:block xl:w-[250%] xl:-left-[450px] 2xl:w-[230%] 2xl:-left-[450px]">
                            <img class="w-full" src="../src/img/registerKiri.png" alt="Background Image">
                        </div>

                        <!-- Image Background Kanan -->
                        <div class="hidden w-[120%] absolute -z-[1] bottom-12 -right-[360px] lg:block xl:w-[150%] xl:-right-[450px]  2xl:-right-[460px]">
                            <img class="w-full" src="../src/img/registerKanan.png" alt="Background Image">
                        </div>

                    </div>

                </div>

            </div>
        </section>

    </body>

</html>