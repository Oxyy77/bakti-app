<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <title>BAKTI UNAND 2023 | {{$tittle}}</title> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/admin.css">
    <style>
      * {
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>

  
<div class="container-fluid">
  
    <div class="col-3 sidebar-column">
      @include('partials.sidebar-admin')
    </div>
    <div class="col-9 content-column">
      <div class="row tabel-absen">
        <div class="col absen-main ">
          <div class="row">   
             <div class="col-md-8 search-container">
             <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
             <img src="img/search.svg" alt="">
             </div>
             <div class="col-md-4">
              <select class="form-select pilih-kelompok" aria-label="Default select example">
                <option selected>Pilih Kelompok</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                <option value="4">Four</option>
                <option value="5">Five</option>
                <option value="6">Six</option>
              </select>
             </div>
          </div>
          <div class="row mt-5">
            <div class="col-md-10">
              <div class="row kuis-header">
                <div class="col-md-3">No Absen</div>
                <div class="col-md-3">NIM</div>
                <div class="col-md-3">Nama</div>
                <div class="col-md-3">Kelompok</div>
              </div>
            </div>
            <div class="col-md-2 kuis-header">
              <div class="row ">
                <div class="col-md-4">Detail</div>

              </div>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-md-10">
              <div class="row kuis-fill">
                <div class="col-md-3">1</div>
                <div class="col-md-3">2111512011</div>
                <div class="col-md-3">Ilham</div>
                <div class="col-md-3">AI</div>
              </div>
            </div>
            <div class="col-md-2 kuis-header">
              <div class="row ">
                <button type="button" class="btn btn-download-tugas">Lihat</button>
              </div>
            </div>
          </div>

</div>

      </div>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="js/main.js" ></script>
  </body>
</html>