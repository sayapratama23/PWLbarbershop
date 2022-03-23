<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Welcome to Mozalucky Barbershop</title>
  </head>
    <style>
        .banner{
            height: 90vh;
            background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url('image/gb2.jpg');
            background-size: cover;
            background-position: center;
        }

        .banner-content{
            height: 100%;
            border: solid;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>


  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="https://www.instagram.com/mosalaki_barber/">
        <img src="image/logo.png" width="48">  MOZALUCKY BARBERSHOP
    </a>
        
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item mx-3">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link" href="service.php">Service</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link" href="staff.php">Staff</a>
        </li>
          </a>
        </li>
      </ul>
      <form class="d-flex">
        
        <a class="btn btn-outline-warning" href="login.php" role="button">Login</a>
      </form>
    </div>
  </div>
</nav>  
  
         <div class="container-fluid banner">
            <div class="container banner-content col-lg-6">
                <div class="text-center">
                    <p class="fs-1">
                        SELAMAT DATANG DI WEBSITE MOZALUCKY BARBERSHOP
                    </p>
                    <p class="d-none d-sm-block">
                    Rambut menjadi daya tarik identitas seseorang, konsultasikan style rambutmu, yuk langsung ke @mosalaki_barber. Kami berikan saran style rambut terbaik untuk kamu yang pastinya kekinian, dengan kualitas hasil dan pelayanan terbaik.
                   <P class="fs-4"> 
                        OPEN DAILY
                    10.00 - 22.00
                    </p>
                    </P>
                </div>
            </div>
            <br>
            <center>
            <h3 class="text-dark">M O Z A L U C K Y - B A R B E R S H O P</h3>
            <br>
            <img src="image/1.jpg" alt="" class="rounded-circle" width="300">
            <img src="image/2.jpg" alt="" class="rounded-circle" width="300">
            <img src="image/3.jpg" alt="" class="rounded-circle" width="300">
            <img src="image/4.jpg" alt="" class="rounded-circle" width="300">

            </center>
            <br>
            <figure class="text-center">
  <blockquote class="blockquote">
    <p>Lokasi : Jalan Pisang Candi No 73 Malang</p>
  </blockquote>
  <figcaption class="blockquote-footer">
     <cite title="Source Title">adminganteng</cite>
  </figcaption>
</figure>
<br>
<p class="text-center">Tanggal/Waktu: <span id="tanggalwaktu"></span></p>
<script>
var tw = new Date();
if (tw.getTimezoneOffset() == 0) (a=tw.getTime() + ( 7 *60*60*1000))
else (a=tw.getTime());
tw.setTime(a);
var tahun= tw.getFullYear ();
var hari= tw.getDay ();
var bulan= tw.getMonth ();
var tanggal= tw.getDate ();
var hariarray=new Array("Minggu,","Senin,","Selasa,","Rabu,","Kamis,","Jum'at,","Sabtu,");
var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember");
document.getElementById("tanggalwaktu").innerHTML = hariarray[hari]+" "+tanggal+" "+bulanarray[bulan]+" "+tahun+" Jam " + ((tw.getHours() < 10) ? "0" : "") + tw.getHours() + ":" + ((tw.getMinutes() < 10)? "0" : "") + tw.getMinutes() + (" W.I.B ");
</script>
<br>
        </div>

  </body>
</html>