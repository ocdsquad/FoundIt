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

        <title> Login </title>
    </head>

    <body class="bg-[#B9E0FF]">
    
        <!-- Login -->
        <section class="py-5 lg:py-0 overflow-hidden">
            <div class="container">

                <!-- Container Flex Wraper -->
                <div class="flex flex-wrap lg:h-screen">
                    
                    <!-- Logo & Caption Container -->
                    <div class="self-center w-[88%] mx-auto mb-5 lg:hidden">

                        <!-- Login Welcome text -->
                        <div class="hidden sm:block">                            
                            <p class="mb-2 font-montserrat font-extrabold text-xl text-center sm:text-3xl md:text-4xl"> Hello Again ! </p>
    
                            <p class= "font-poppins font-light text-center text-sm sm:text-base md:text-lg"> Hai, selamat datang kembali di Foundit! <br> Mau cari barang yang hilang ya ? </p>
                        </div>
                        
                        <!-- Logo Image -->
                        <div class="w-[90%] mx-auto min-[480px]:w-[75%] sm:w-[70%] md:w-[60%]">
                            <img class="w-full" src="../src/img/loginSticker.png" alt="Logo">
                        </div>

                        <!-- Caption -->
                        <p class="hidden mt-3 font-poppins font-bold text-sm text-center text-[#8D9EFF] sm:block"> Kehilangan barang pasti ya!? </p>

                    </div>

                    <!-- Form Login Container -->
                    <div class="self-center w-[88%] mx-auto sm:w-[70%] sm:p-7 sm:bg-white sm:rounded-2xl md:w-[55%] lg:w-[45%] xl:w-[33%] relative">
                        
                        <!-- Login Caption -->
                        <p class="mb-5 font-montserrat font-extrabold text-3xl sm:mb-7 sm:text-center lg:hidden"> Login </p>

                        <!-- Login Welcome text -->
                        <div class="hidden mb-10 text-center lg:block">                            
                            <p class="mb-2 font-montserrat font-extrabold text-4xl"> Hello Again ! </p>
    
                            <p class= "font-poppins font-light text-center text-lg"> Hai, selamat datang kembali di Foundit! <br> Mau cari barang yang hilang ya ? </p>
                        </div>

                        <!-- Form -->
                        <form class="w-full">

                            <!-- Email / No Telepon -->
                            <div class="w-full mb-5">
                                <label class="text-xs font-semibold sm:text-sm md:text-base" for="email"> Email / No.Telepon </label>

                                <input class="w-full p-3 border border-[#8D9EFF] rounded-xl" type="text" id="email">
                            </div>

                            <!-- Password -->
                            <div class="w-full">
                                <label class="text-xs font-semibold sm:text-sm md:text-base" for="password"> Kata Sandi </label>

                                <input class="w-full p-3 border border-[#8D9EFF] rounded-xl" type="text" id="password">

                                <p class="mt-2 font-poppins font-semibold text-[10px] text-right text-[#8D9EFF] sm:text-xs md:text-sm"> Lupa Password ? </p>
                            </div>

                            <button class="w-full mt-5 py-[14px] font-poppins font-semibold text-white bg-[#8D72E1] rounded-xl block md:text-lg"> MASUK </button>

                        </form>

                        <!-- To Register -->
                        <p class="mt-3 font-poppins font-bold text-[11px] text-center sm:text-xs md:text-sm "> Belum punya akun ? <a href="Register.html" class="text-[#8D72E1] cursor-pointer"> Daftar Sekarang </a> </p>

                        <!-- Logo Foundit -->
                        <div class="hidden w-[35%] mt-10 mx-auto lg:block">
                            <img class="w-full" src="../src/img/logo.png" alt="Logo Foundit">
                        </div>

                        <!-- Image Background Kiri -->
                        <div class="hidden w-[100%] bottom-20 -left-[350px] -z-[1] absolute lg:block xl:w-[125%] xl:-left-[460px] 2xl:-left-[530px]">
                            <img class="w-full" src="../src/img/loginKiri.png" alt="Background Image">
                        </div>

                        <!-- Image Background Kanan -->
                        <div class="hidden w-[100%] bottom-20 -right-[320px] -z-[1] absolute lg:block xl:w-[125%] xl:-right-[510px]">
                            <img class="w-full" src="../src/img/loginKanan.png" alt="Background Image">
                        </div>

                    </div>

                </div>


            </div>
        </section>
        <!-- Login End -->
        
    </body>
</html>