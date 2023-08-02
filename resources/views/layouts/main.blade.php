<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BAKTI UNAND 2023</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/user.css">
    <link rel="stylesheet" href="css/responsive.css">

<style>
    .wrapper{
  width: 22rem;
  height: 19rem;
  background: var(--50, #FDF6FD);
  border-radius: 10px;
  box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
  position: relative;
}
.wrapper header{
  display: flex;
  align-items: center;
  padding: 25px 30px 10px;
  justify-content: center;
  width: 100%;
}
header .icons{
  display: flex;
  justify-content: space-between;
  width: 100%;
}

#prev,
#next{
    width: 8px;
    cursor: pointer
}

header .current-date{
  color: #6C2863;
font-family: Poppins;
font-size: 1rem;
font-style: normal;
font-weight: 700;
line-height: normal;    
}
.calendar{
  padding: 5px;
}

.calendar ul{
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  text-align: center;
  padding: 0
}
.calendar .days{
  margin-bottom: 20px;
}
.calendar li{
  color: #000;
  width: calc(100% / 7);
  font-size: 0.6rem;
}
.calendar .weeks li{
  font-weight: 500;
  cursor: default;
}
.calendar .days li{
  z-index: 1;
  cursor: pointer;
  position: relative;
  margin-top: 20px;
}
.days li.inactive{
  color: #aaa;
}
.days li.active{
  color: #fff;
}
.days li::before{
  position: absolute;
  content: "";
  left: 50%;
  top: 50%;
  height: 20px;
  width: 20px;
  z-index: -1;
  border-radius: 50%;
  transform: translate(-50%, -50%);
}
.days li.active::before{
  background: #6C2863;
}
.days li:not(.active):hover::before{
  background: #f2f2f2;
}
</style>
    
</head>
<body>

<div class="container-fluid">

    <div class="col-3 sidebar-column">

        @include('partials.sidebar')


    </div>
    <div class="col-9 content-column">

        @include('partials.header')
        {{-- @include('partials.header') --}}
        @yield('content')


    </div>

    <div id="confirmation-dialog" class="row confirmation-dialog">
        <div class="col dialog-content">
            <div class="row">
                <p>Yakin anda untuk keluar dari akun ini?</p>
                <div class="line-logout"></div>
            </div>
            <form method="POST" action="{{ route('logout') }}">
                <div class=" row dialog-buttons">
                    @csrf
                    <div class="col-5  d-flex justify-content-center "><button class="btn-confirm">Iya</button></div>
                    <div class="col-5 d-flex justify-content-center"><button type="button" class="btn-cancel" onclick="closeDialog()">Tidak</button></div>
                </div>
            </form>
        </div>
    </div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="js/main.js" ></script>
<script src="js/kalender.js" ></script>
<script>
 document.addEventListener("DOMContentLoaded", function() {
    var burgerIcon = document.querySelector(".burger");
    var sidebar = document.getElementById("sidebar-main");
    var overlay = document.getElementById("overlay");

    burgerIcon.addEventListener("click", function() {
        // Toggle the sidebar when the burger icon is clicked
        if (sidebar.style.display === "none") {
            sidebar.style.display = "block";
            overlay.style.display = "block";
            document.body.style.overflow = "hidden"; // Tambahkan kode ini untuk mengatur overflow menjadi "hidden"
        } else {
            sidebar.style.display = "none";
            overlay.style.display = "none";
            document.body.style.overflow = "auto"; // Tambahkan kode ini untuk mengatur overflow menjadi "auto" kembali
        }
    });
});


</script>
</body>
</html>
