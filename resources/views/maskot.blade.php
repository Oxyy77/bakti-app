@extends('layouts.beranda')
@section('content')

<section id="introduce">

<div class="row">
    <div class="col-md-12 maskot-main">
        <img class="img-fluid maskot-header" src="img/maskot-header.svg" alt="">
    </div>
</div>

<div class="row mt-5">
    <div class="col-md-4 maskot-kolom d-flex justify-content-center">
        <img class="maskot" src="img/anan.svg" alt="">
    </div>
    <div class="col-md-4 maskot-kolom d-flex justify-content-center">
        <img class="maskot" src="img/ronand.svg" alt="">
    </div>
    <div class="col-md-4 d-flex maskot-kolom justify-content-center">
        <img class="maskot" src="img/tinan.svg" alt="">
    </div>
</div>
</section>

<section id="ronand">
    <div class="row ronand-main">
        <div class="col-md-3 ronand-fill1">
            <p>RONAND</p>
            <img class="maskot2" src="img/ronand2.svg" alt="">
        </div>
        <div class="col-md-5 ronand-fill2">
            <div class="row ronand-filo">Mahkota</div>
            <div class="row ronand-mean">Melambangkan kejayaan</div>
            <div class="row ronand-filo">Tanduk</div>
            <div class="row ronand-mean">Melambangkan ketangguhan dalam mengahadapi tantangan</div>
            <div class="row ronand-filo">Tangan Besi</div>
            <div class="row ronand-mean">Melambangkan kekuatan dan pertahanan dalam perjuangan</div>
            <div class="row ronand-filo">Sayap</div>
            <div class="row ronand-mean">Melambangkan kebebasan untuk terus berkembang dalam mencapai kejayaan</div>
        </div>
        <div class="col-md-4 ronand-fill3">
            <div class="row ronand-filo">Mata Kuning</div>
            <div class="row ronand-mean">Melambangkan kehangatan, kebahagiaan, ceria, harapan, serta energi yang positif dari mahasiswa Universitas Andalas</div>
            <div class="row ronand-filo">Logo Bakti</div>
            <div class="row ronand-mean">Identitas dari BAKTI Universitas Andalas</div>
            <div class="row ronand-filo">Warna Biru dan Putih</div>
            <div class="row ronand-mean">Amanah, dapat diandalkan dan suci dalam pikiran, perkataan dan tingkah laku</div>
        </div>
    </div>
    </div>
</section>

<section id="tinan" >
    <div class="row tinan-main">
        <div class="col-md-5 tinan-fill1">
            <div class="row tinan-filo">Pose Tangan</div>
            <div class="row tinan-mean">Kepalan tangan yang melambangkan perjuangan dan pergerakan mahasiswa seolah menyorakkan, Hidup Mahasiswa!!, Hidup Rakyat Indonesia!!.</div>
    
        </div>
        <div class="col-md-4 tinan-fill2">
            <div class="row tinan-filo">Kepala</div>
            <div class="row tinan-mean">Bentuk kepala menyerupai ciri khas dari gedung Universitas Andalas</div>
            <div class="row tinan-filo">Almamater</div>
            <div class="row tinan-mean">Melambangkan Kebanggaan terhadap almamater Universitas Andalas</div>
            
        </div>
        <div class="col-md-3 tinan-fill3">
            <p>TINAN</p>
            <img class="maskot2" src="img/tinan2.svg" alt="">
        </div>
    </div>
    </div>
</section>

<section id="anan">
    <div class="row ronand-main">
        <div class="col-md-3 anan-fill1">
            <p>ANAN</p>
            <img class="maskot2" src="img/anan2.svg" alt="">
        </div>
        <div class="col-md-5 anan-fill2">
            <div class="row anan-filo">Pose Menyilang Tangan</div>
            <div class="row anan-mean">Merupakan pose dari BAKTI dimana menyilangkan tangan berarti ketahanan diri sesuai dengan kostum silat yang dikenakan</div>
        </div>
        <div class="col-md-4 anan-fill3">
            <div class="row anan-filo">Kepala</div>
            <div class="row anan-mean">Merupakan replikasi atap rumah adat Minangkabau, yaitu Rumah Gadang</div>
            <div class="row anan-filo">Baju Silat Minang</div>
            <div class="row anan-mean">Melambangkan Ketahanan Diri</div>
        </div>
    </div>
    </div>
</section>

@endsection