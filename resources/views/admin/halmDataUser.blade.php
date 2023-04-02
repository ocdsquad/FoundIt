<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <!-- Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,700;0,800;1,300&family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,700;0,800;1,300&family=Poppins:wght@500&display=swap" rel="stylesheet">
    <title>Halaman Data User</title>
</head>
<body class="bg-background">
        <!-- Header -->
        <header class="bg-white">
            <div class="mx-10 flex justify-between">
                <!-- Kiri -->
                <div class="w-1/3 flex justify-between items-center">
                    <img src="../img/LogoFoundIT.png" alt="logo" class="w-1/4 scale-75">
                    
                    <div class="w-2/3 flex ml-16">
                        <p class=" text-sm font-pop cursor-pointer">+ Tambah Data User</p>
    
                    </div>
                </div>
    
                <div class="w-2/3 flex justify-between">
                    <!-- Tengah -->
                    <div class="flex items-center w-2/3">
                        <form class="relative w-2/3 mx-auto">
                            <input type="text" placeholder="Cari User"
                                class="w-full p-2 border border-[#D4D4D4] rounded-lg text-xs placeholder-black font-pop focus:outline-[#8D9EFF] transition-all duration-150 ease-in-out" />
            
                            <span class="absolute top-1/2 right-3 -translate-y-1/2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                </svg>
                            </span>
                        </form>
                    </div>
    
                    <!-- Kanan -->
                    <div class="w-1/3 flex items-center justify-end">
                        <div class=" w-36 h-8 flex items-center border border-purple rounded-2xl">
                            <div class="flex mx-auto ">
                                <img src="../img/profile.jpeg" alt="" class="w-5 rounded-full items-center">
                                <p class="ml-3 text-xs font-pop">Admin Foundit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

    <!-- Tabel Data User -->
    <section class=" w-full my-8 px-5 bg-white ">
        <div class="container py-2">
            <div>
                <!-- Caption -->
                <div class="mx-5">
                    <h1 class="mt-2 font-pop font-bold text-lg">Data User</h1>
                    <p class="font-pop text-xs">Data User Mahasiswa / Mahasiswi Telkom University</p>
                </div>

                <!-- Tabel -->
                <table class="w-full mt-2">
                    <thead class="w-full font-pop text-xs bg-[#D4D4D4]">
                        <tr class="h-8">
                            <th class="w-11 border">ID User</th>
                            <th class="border">NIM</th>
                            <th class="border">Nama Mahasiswa</th>
                            <th class="border">Jurusan</th>
                            <th class="border">No Telepon</th>
                            <th class="border">Identitas</th>
                            <th class="border">Aksi</th>
                        </tr>
                    </thead>

                    <tbody class="text-xs font-pop">
                        <tr>
                            <td class="border text-center">1</td>
                            <td class="border text-center">1301198076</td>
                            <td class="border text-center">Ahmad Alfarel</td>
                            <td class="border text-center">S1 Informatika
                            </td>
                            <td class="border text-center">082110998765</td>
                            <td class="border">
                                <img src="../img/barangHilang.png" alt="KTM" width="120" class="py-4 mx-auto
                                ">
                            </td>

                            <td class="border py-2">
                                <a href="ubahDataMahasiswa.html">
                                    <button class="block mx-auto px-4 py-1 text-white bg-[#1D4ED8] rounded-lg shadow-md hover:opacity-80 transition-all ease-in-out duration-500">Ubah</button>
                                </a>
                                <button class="block mx-auto my-1 px-3 py-1  text-white bg-[#ff0000] rounded-md shadow-lg hover:opacity-60 transition-all ease-in-out duration-500">Hapus</button>
                            </td>
                        </tr>
                    </tbody>
                </table>

               <div class="flex">
                    <div class="mx-auto py-8 font-pop text-sm">
                        <a href="" class="text-lg text-[#D4D4D4]">&laquo;</a>
                        <a href="" class="border border-[#D4D4D4] rounded-md px-2 py-1">1</a>
                        <a href="" class="text-white border border-[#D4D4D4] bg-[#1D4ED8] rounded-md px-2 py-1">2</a>
                        <a href="" class="border border-[#D4D4D4] rounded-md  px-2 py-1">3</a>
                        <a href="" class="border border-[#D4D4D4] rounded-md  px-2 py-1">4</a>
                        <a href="" class="border border-[#D4D4D4] rounded-md  px-2 py-1">5</a>
                        <a href="" class="text-lg text-[#D4D4D4]">&raquo;</a>
                    </div>
               </div>
            </div>
        </div>
    </section>
</body>
</html>