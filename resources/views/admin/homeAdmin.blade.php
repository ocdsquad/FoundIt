<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="/dist/output.css" rel="stylesheet">
    <!-- Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,700;0,800;1,300&family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,700;0,800;1,300&family=Poppins:wght@500&display=swap" rel="stylesheet">
    <title>Home Admin</title>
</head>
<body class="bg-background">
        <!-- Header -->
        <header class="bg-[#19376D]">
            <div class="px-8 flex w-full justify-between">
                <!-- Kiri -->
                <div class="flex items-center">
                    <img src="img/logoLain.png" alt="logo" class="w-1/4 scale-75">
                    <h1 class="text-lg text-white font-montserrat font-bold uppercase">Selamat Datang Admin</h1>
                </div>

                <!-- Kanan -->
                <div class="flex items-center  relative">
                    <!-- Admin -->
                    <div id="icon-profile" class="w-36 h-8 flex items-center border border-purple bg-white rounded-2xl cursor-pointer">
                        <div class="flex mx-auto ">
                            <img src="img/profileDummy.png" alt="" class="w-5 rounded-full items-center">
                            <p class="ml-3 text-xs font-pop" id = "overlay">Admin Foundit.</p>
                        </div>
                    </div>

                    <!-- Modal Dropdown -->
                    <div id="modal-dropdown" class="absolute -right-3 top-[60px] max-w-[250px] p-3 bg-[#B9E0FF] rounded-lg shadow-2xl transition-all ease-in-out duration-300 hidden">
                            <ul class="flex flex-col">
                                <li class="w-full mb-1 px-2 py-1 rounded-md hover:bg-purple hover:bg-opacity-30"><a href="login.html" class="text-mons text-sm font-semibold  cursor-pointer">Logout</a></li>
                                 
                                 <li class="w-full mb-1 px-2 py-1 rounded-md hover:bg-purple hover:bg-opacity-30"><a href="halmDataUser.html" class="text-mons text-sm font-semibold cursor-pointer
                                    ">Data User</a></li>

                                <li class="w-full mb-1 px-2 py-1 rounded-md hover:bg-purple hover:bg-opacity-30"><a href="halmBarangNemu.html" class="text-mons text-sm font-semibold cursor-pointer
                                        ">Data Barang Temu</a></li>

                                <li class="w-full mb-1 px-2 py-1 rounded-md hover:bg-purple hover:bg-opacity-30"><a href="halmBarangHilang.html" class="text-mons text-sm font-semibold cursor-pointer
                                            ">Data Barang Hilang</a></li>
                        
                            </ul>
                    </div>
                </div>
            </div>
        </header>

        <!-- Tabel Data Registrasi User -->
    <section class=" w-full my-8 px-5 py-2 bg-white ">
        <div class="container">
            <div>
                <!-- Caption -->
                <div class="mx-5">
                    <h1 class="mt-2 py-2 font-pop font-bold text-lg ">Data Registrasi User</h1>
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
                        @foreach ($users as $user)
                            <tr>
                                <td class="border text-center">{{ $user -> id }}</td>
                                <td class="border text-center">1301198076</td>
                                <td class="border text-center">Ahmad Alfarel</td>
                                <td class="border text-center">S1 Informatika</td>
                                <td class="px-2 border text-center">
                                    {{ $user -> email }}
                                </td>

                                <td class="border">
                                    <img src="img/profileDummy.png" alt="KTM" width="120" class="py-4 mx-auto
                                    ">
                                </td>

                                <td class="border py-2">
                                    <button class="block mx-auto px-3 py-1 text-white bg-[#1D4ED8] rounded-lg shadow-md hover:opacity-80 transition-all ease-in-out duration-500">Terima</button>
                                    <button class="block mx-auto my-1 px-4 py-1  text-white bg-[#ff0000] rounded-md shadow-lg hover:opacity-60 transition-all ease-in-out duration-500">Tolak</button>
                                </td>
                            </tr>
                        @endforeach
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

    <script>
        let iconProfile = document.getElementById('icon-profile')
        let modalMenu = document.getElementById('modal-dropdown')

        iconProfile.addEventListener('click', function () {
            modalMenu.classList.remove('hidden')
        })
    </script>

</body>
</html>