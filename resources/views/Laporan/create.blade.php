<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" 
    crossorigin="anonymous">

</head>
<body>

<div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Laporan Barang</h1>
</div>

<div class="d-flex justify-content-center">
    <form action="/Laporan" method="post" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="nama" name="nama" autofocus>
        </div>
        {{-- <div class="mb-3">
            <label for="slug" class="form-label">Slug</label> --}}
            <input type="hidden" class="form-control" id="slug" name="slug" autofocus>
        {{-- </div> --}}
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <input type="text" class="form-control" id="deskripsi" name="deskripsi">

        </div>
        <div class="mb-3">
            <label for="kronologi" class="form-label">Kronologi</label>
            <input type="text" class="form-control" id="kronologi" name="kronologi">
            </select>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Post Image</label>
            <img class="img-preview img-fluid mb-3 col-sm-5">
            <input class="form-control" type="file" id="image" name="image">
        </div>
        
        <label for="image" class="form-label">Jenis Barang</label>
        <br>
        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="is_hilang" id="hilang" value="1" autocomplete="off">
            <label class="btn btn-outline-primary" for="hilang">hilang</label>
          
            <input type="radio" class="btn-check" name="is_hilang" id="temuan" value="0" autocomplete="off">
            <label class="btn btn-outline-primary" for="temuan">temuan</label>
        </div>
        <br>
        <br>

        <div class="mb-3" >
            <label for="lokasi" class="form-label">Lokasi</label>
            <input type="text" class="form-control hidden" id="lokasi" name="lokasi">
        </select>
        </div>
        
    
        <label for="image" class="form-label">Apakah ada hadiahnya?</label>
        <br>
        <div class="btn-group" role="group" aria-label="Basic radio toggle button group" id="hadiah">
            <input type="radio" class="btn-check" name="is_hadiah" id="ya_hadiah" value="1" autocomplete="off">
            <label class="btn btn-outline-primary" for="ya_hadiah">Yup, Beri hadiah</label>
          
            <input type="radio" class="btn-check" name="is_hadiah" id="tidak_hadiah" value="0" autocomplete="off">
            <label class="btn btn-outline-primary" for="tidak_hadiah">Maaf, belum ada</label>
        </div>
        <br>

        <br>            
        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
</div>

<script>
    const nama = document.querySelector('#nama')
    const slug = document.querySelector('#slug')

    nama.addEventListener('change', function(){
        fetch('/Laporan/create/checkSlug?nama=' + nama.value)
          .then(response => response.json())
          .then(data =>slug.value = data.slug)
    });

    
    const temu = document.querySelector('#temuan')
    const hilang = document.querySelector('#hilang')
    const lokasi = document.querySelector('#lokasi')
    const hadiah = document.querySelector('#hadiah')

    temu.addEventListener('click', function(){
        lokasi.classList.remove('hidden')
    })





</script>
    
</body>
</html>