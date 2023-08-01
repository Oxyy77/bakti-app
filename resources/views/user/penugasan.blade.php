@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col welcome-content">
            <div class="row mt-5  text-center ">
                <div class="col-3 penugasan-header">Tugas
                </div>
                <div class="col-2 penugasan-header">Tanggal Pengumpulan</div>
                <div class="col-3 penugasan-header-status">Status</div>
                <div class="col-3 penugasan-header"></div>
            </div>

            <div class="card mt-3 penugasan-box">
                <div class="row penugasan-headers">
                    <div class="col-3 box-header">
                        Resume Talkshow
                    </div>
                    <div class="col-3 date-box">20 Agustus 2023, 23.59</div>
                    <div class="col-3 status-box">Belum Dikumpul</div>
                    <div class="col-2 ms-1">
                     <button onclick="showUploadBox()" class="button-upload" ><div class="btn btn-upload">Upload</div></button>   
                    </div>
                </div>
            </div>
            <div class="upload-tugas" style="display: none" id="uploadTugas">
                <h2>Upload Photo</h2>
                <div class="drag-option" ondrop="handleDrop(event)" ondragover="handleDragOver(event)">
                    <img class="icon-add" src="img/add-photo.svg" alt="">
                    {{-- <p>Drag and drop here</p>
                    <p>or</p> --}}
                    {{-- <p onclick="handleBrowse()"><strong>Browse</strong></p> --}}
                    <label class="custom-file-input-wrapper" for="foto">
                        Browse
                    </label>
                    <input class="text-center" type="file" name="foto" id="foto" >
                </div>
                <!-- File input for foto -->
                <button type="submit">Simpan</button>
                <img id="closeIcon" src="img/tutup.svg" alt="" onclick="closeUpdateTugas()">
            </div>
            <div id="overlay"></div>

            <div class="upload-tugas" style="display: none" id="uploadTugas2">
                <h2>Upload Tugas</h2>
                <div class="drag-option">
                    <input class="text-center" type="text" name="foto" id="foto" >
                </div>
                <!-- File input for foto -->
                <button type="submit">Simpan</button>
                <img id="closeIcon" src="img/tutup.svg" alt="" onclick="closeUpdateTugas2()">
            </div>
            
            
            <div class="col-12 penugasan-body">
                <div class="penugasan-body-content">
                    Tugas ditulis di double folio dengan format bla bla bla bla bla bla bla bla bla blabla bla bla bla bla bla bla bla bla blabla bla bla bla bla bla bla bla bla blabla bla bla bla bla
                </div>
            </div>

            <div class="card mt-3 penugasan-box">
                <div class="row penugasan-headers">
                    <div class="col-3 box-header">
                        Resume Talkshow
                    </div>
                    <div class="col-3 date-box">20 Agustus 2023, 23.59</div>
                    <div class="col-3 status-box">Belum Dikumpul</div>
                    <div class="col-2 ms-1">
                     <button onclick="showUploadBox()" class="button-upload" ><div class="btn btn-upload">Upload</div></button>   
                    </div>
                </div>
            </div>
            <div class="col-12 penugasan-body">
                <div class="penugasan-body-content">
                    Tugas ditulis di double folio dengan format bla bla bla bla bla bla bla bla bla blabla bla bla bla bla bla bla bla bla blabla bla bla bla bla bla bla bla bla blabla bla bla bla bla
                </div>
            </div>
            <div class="col-12 penugasan-body">
                <div class="penugasan-body-content">
                    Tugas ditulis di double folio dengan format bla bla bla bla bla bla bla bla bla blabla bla bla bla bla bla bla bla bla blabla bla bla bla bla bla bla bla bla blabla bla bla bla bla
                </div>
            </div>
            <div class="card mt-3 penugasan-box">
                <div class="row penugasan-headers">
                    <div class="col-3 box-header">
                        Resume Talkshow
                    </div>
                    <div class="col-3 date-box">20 Agustus 2023, 23.59</div>
                    <div class="col-3 status-box">Belum Dikumpul</div>
                    <div class="col-2 ms-1">
                     <button onclick="showUploadBox2()" class="button-upload" ><div class="btn btn-upload">Upload</div></button>   
                    </div>
                </div>
            </div>
            <div class="col-12 penugasan-body">
                <div class="penugasan-body-content">
                    Tugas ditulis di double folio dengan format bla bla bla bla bla bla bla bla bla blabla bla bla bla bla bla bla bla bla blabla bla bla bla bla bla bla bla bla blabla bla bla bla bla
                </div>
            </div>
            <div class="card mt-3 penugasan-box">
                <div class="row penugasan-headers">
                    <div class="col-3 box-header">
                        Resume Talkshow
                    </div>
                    <div class="col-3 date-box">20 Agustus 2023, 23.59</div>
                    <div class="col-3 status-box">Belum Dikumpul</div>
                    <div class="col-2 ms-1">
                     <button onclick="showUploadBox2()" class="button-upload" ><div class="btn btn-upload">Upload</div></button>   
                    </div>
                </div>
            </div>
            <div class="col-12 penugasan-body">
                <div class="penugasan-body-content">
                    Tugas ditulis di double folio dengan format bla bla bla bla bla bla bla bla bla blabla bla bla bla bla bla bla bla bla blabla bla bla bla bla bla bla bla bla blabla bla bla bla bla
                </div>
            </div>
            <div class="card mt-3 penugasan-box">
                <div class="row penugasan-headers">
                    <div class="col-3 box-header">
                        Resume Talkshow
                    </div>
                    <div class="col-3 date-box">20 Agustus 2023, 23.59</div>
                    <div class="col-3 status-box">Belum Dikumpul</div>
                    <div class="col-2 ms-1">
                     <button onclick="showUploadBox2()" class="button-upload" ><div class="btn btn-upload">Upload</div></button>   
                    </div>
                </div>
            </div>
            <div class="col-12 penugasan-body">
                <div class="penugasan-body-content">
                    Tugas ditulis di double folio dengan format bla bla bla bla bla bla bla bla bla blabla bla bla bla bla bla bla bla bla blabla bla bla bla bla bla bla bla bla blabla bla bla bla bla
                </div>
            </div>
        </div>
    </div>

@endsection

{{-- @include('partials.sidebar')
@include('partials.header') --}}




{{--
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="js/main.js" ></script>
  </body>
</html> --}}
