@extends('layouts.main')
@section('content')
<div class="overlay" style="display: none;" id="overlay"></div>
    <div class="row dashboard-main">

        <div class="col-6 kolom1">
            <div class="row">
                <div class="col mt-3 text-content ">
                    <img class="img-fluid profile-welcome" src="{{ $user->profile ? asset('storage/profiles/' . $user->profile->foto) : 'img/add-profile.svg' }}" alt="">
                    <div class="col mt-3 welcome-header">
                        {{--                        <h2>{{$user->name}}</h2>--}}
                        @php
                            $nameParts = explode(' ', $user->name);
                        @endphp

                        <h2>Hello {{ reset($nameParts) }}</h2>

                        <p>Selamat datang di BAKTI 2023</p>
                    </div>
                </div>
            </div>
            <div class="row dashboard-count">
                <div class="col countdown-content">
                    <h4><img class="img-fluid me-1" src="img/countdown.svg" alt=""> Countdown Bakti 2023</h4>
                    <div class="card countdown-box" style="width: 28rem; height:10rem; ">
                        <div class="card-body">
                            <div class="col kolom-count">
                                <div class="card countdown-fill" style="width: 5rem; height:5rem;"><p id="days">00</p> </div>
                                <h6 class="text-center label-count " >Hari</h6>
                            </div>
                            <div class="col kolom-count">
                                <div class="card countdown-fill" style="width: 5rem; height:5rem;"><p id="hours">00</p> </div>
                                <h6 class="text-center label-count">Jam</h6>
                            </div>
                            <div class="col kolom-count">
                                <div class="card countdown-fill" style="width: 5rem; height:5rem;"><p id="minutes">00</p></div>
                                <h6 class="text-center label-count">Menit</h6>
                            </div>
                            <div class="col kolom-count">
                                <div class="card countdown-fill" style="width: 5rem; height:5rem;"><p id="seconds">00</p></div>
                                <h6 class="text-center label-count">Detik</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col tugas-content">
                    <div class="row tugas-header">
                       <div><h4><img class="img-fluid me-3" src="img/task.svg" alt="">Tugas</h4></div> 
                      <div class=""><a href="/penugasan"> <p class="lihat-tugas" >Lihat</p></a> </div>  
                    </div>

                    <div class="card mb-4 tugas-box" style="width: 28rem; height:6rem">
                        <div class="row upload-tugas1">
                            <div class="col-6 ms-5 upload-teks ">
                                <div class="row">
                                    <div class="col upload-header">Resume Talkshow</div>
                                </div>
                                <div class="row">
                                    <div class="col deadline-upload">Terakhir dikumpul 16 Agustus 2023</div>
                                </div>
                            </div>
                            <div class="col-4 button-upload">
                               <button><div class="btn btn-upload">Upload</div></button> 
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4 tugas-box" style="width: 28rem; height:6rem">
                        <div class="row upload-tugas1">
                            <div class="col-6 ms-5 upload-teks ">
                                <div class="row">
                                    <div class="col upload-header">Resume Talkshow</div>
                                </div>
                                <div class="row">
                                    <div class="col deadline-upload">Terakhir dikumpul 16 Agustus 2023</div>
                                </div>
                            </div>
                            <div class="col-4 button-upload">
                               <button><div class="btn btn-upload">Upload</div></button> 
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4 tugas-box" style="width: 28rem; height:6rem">
                        <div class="row upload-tugas1">
                            <div class="col-6 ms-5 upload-teks ">
                                <div class="row">
                                    <div class="col upload-header">Resume Talkshow</div>
                                </div>
                                <div class="row">
                                    <div class="col deadline-upload">Terakhir dikumpul 16 Agustus 2023</div>
                                </div>
                            </div>
                            <div class="col-4 button-upload">
                               <button><div class="btn btn-upload">Upload</div></button> 
                            </div>
                        </div>
                    </div>
                    <div style="display: none" class="note-tugas">
                        <p class="note1" > <img src="img/note1.svg" alt="">  Belum Dikumpul</p>
                        <p class="note2" > <img src="img/note2.svg" alt="">  Terlambat</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 kolom2">
            <div class="row dashboard-unduh ">
                <div class="col d-flex kolom-unduh justify-content-center mt-3 mb-2">
                    <div class="d-grid mt-2 gap-2 col-6 download-content">
                        <button  class="btn btn-first btn-unduh " type="button"> <img class="me-2" src="img/document-download.svg" alt=""> Unduh ID Card</button>
                        <button class="btn btn-first btn-unduh" type="button"><img class="me-2" src="img/document-download.svg" alt=""> Buku Panduan</button>
                    </div>
                </div>
            </div>
            <div class="row kalender-main mb-4">
                <div class="col kalender-content">
                    <h4><img class="img-fluid me-3" src="img/kalender.svg" alt="">Kalender</h4>
                </div>
                <div class="row">
                    <div class="col">
                        {{-- <img src="img/kalender-frame.svg" alt=""> --}}
                        <div class="wrapper">
                            <header>      
                              <div class="icons">
                                <img id="prev" class="material-symbols-rounded" src="img/previous.svg" alt="Previous">
                                <p class="current-date"></p>
                                <img id="next" class="material-symbols-rounded" src="img/next.svg" alt="Next">
                              </div>
                            </header>
                            <div class="calendar">
                              <ul class="weeks">
                                <li>Sun</li>
                                <li>Mon</li>
                                <li>Tue</li>
                                <li>Wed</li>
                                <li>Thu</li>
                                <li>Fri</li>
                                <li>Sat</li>
                              </ul>
                              <ul class="days"></ul>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
            <div class="row kegiatan-main">
                <div class="col kegiatan-content">
                    <h4><img class="img-fluid me-3" src="img/kegiatan.svg" alt="">Kegiatan</h4>
                </div>
                <div class="row card-kegiatan">
                    <div class="col">
                        <div class="card kegiatan-box" style="width: 22rem; height:4rem;">
                            <div class="row">
                                <div class="col-4  date-kegiatan">
                                    <img class="img-fluid ms-4" src="img/tanggal-kegiatan.svg" alt="">
                                    <div class="ket-kegiatan ms-2 me-2">
                                        <div class="row">
                                            <div class="col">Agustus</div>
                                        </div>
                                        <div class="row">
                                            <div class="col">2023</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-1 ms-2">
                                    <img class="" src="img/line-kegiatan.svg" alt="">
                                </div>
                                <div class="col-6 kegiatan-header">
                                    <div class="row">
                                        <div class="col">Pembukaan BAKTI 2023</div> </div>
                                    <div class="row">
                                        <div class="col">Universitas Andalas</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card kegiatan-box" style="width: 22rem; height:4rem;">
                            <div class="row">
                                <div class="col-4  date-kegiatan">
                                    <img class="img-fluid ms-4" src="img/tanggal-kegiatan.svg" alt="">
                                    <div class="ket-kegiatan ms-2 me-2">
                                        <div class="row">
                                            <div class="col">Agustus</div>
                                        </div>
                                        <div class="row">
                                            <div class="col">2023</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-1 ms-2">
                                    <img class="" src="img/line-kegiatan.svg" alt="">
                                </div>
                                <div class="col-6 kegiatan-header">
                                    <div class="row">
                                        <div class="col">Pembukaan BAKTI 2023</div> </div>
                                    <div class="row">
                                        <div class="col">Universitas Andalas</div>
                                    </div>
                                </div>
                            </div></div>
                    </div>
                    <div class="col">
                        <div class="card kegiatan-box" style="width: 22rem; height:4rem;">
                            <div class="row">
                                <div class="col-4  date-kegiatan">
                                    <img class="img-fluid ms-4" src="img/tanggal-kegiatan.svg" alt="">
                                    <div class="ket-kegiatan ms-2 me-2">
                                        <div class="row">
                                            <div class="col">Agustus</div>
                                        </div>
                                        <div class="row">
                                            <div class="col">2023</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-1 ms-2">
                                    <img class="" src="img/line-kegiatan.svg" alt="">
                                </div>
                                <div class="col-6 kegiatan-header">
                                    <div class="row">
                                        <div class="col">Pembukaan BAKTI 2023</div> </div>
                                    <div class="row">
                                        <div class="col">Universitas Andalas</div>
                                    </div>
                                </div>
                            </div></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    </div>

    </div>

@endsection
