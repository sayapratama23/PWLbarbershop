
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Welcome to Mozalucky Barbershop</title>
  </head>
    <style>
        .banner{
            height: 90vh;
            background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url('image/gb2.jpg');
            background-size: cover;
            background-position: center;
            
        }
        h1 {
          font-size: 40px;
          text-shadow: 1px 1px 1px;
          margin-top: -15px;
          margin-bottom: 10px;
        }

        h6 {
          border: solid;
          color: black;
          background-color: white;
          margin: auto;
          justify-content: center;
          font: 18px/36px 'BebasNeue', 'Arial Narrow', arial, sans-serif;
        }

        .banner-content{
            height: 100%;
            border: solid;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            font: 18px/36px 'BebasNeue', 'Arial Narrow', arial, sans-serif;          
        }

        .btn-warning{

        }


    *, *:before, *:after {
box-sizing: border-box;
}

body {
margin: 0;
display: grid;
}
header p {
padding: 50px;
text-align: center;
color: #bebebe;
text-transform: uppercase;
font-size: 65px;
font-weight: 700;
}
.footer {
display: flex;
flex-flow: row wrap;
padding: 50px;
color: #fff;
background-color: black;
padding-bottom: 15px;
}

.footer > * {
flex:  1 100%;
}

.l-footer {
margin-right: 1.25em;
margin-bottom: 2em;
}

h2 {
font-weight: 400;
font-size: 15px;
}

.footer ul {
list-style: none;
padding-left: 0;
}

.footer li {
line-height: 2em;
margin-right: 10px;
}

.footer a {
text-decoration: none;
}

.r-footer {
display: flex;
flex-flow: row wrap;
}

.r-footer > * {
flex: 1 50%;
margin-right: 1.25em;
}

.box a {
color: #999;

}

.h-box {
column-count: 2;
column-gap: 1.25em;
}

.b-footer {
text-align: center;
color: #999;
padding-top: 50px;
}

.l-footer p {
padding-right: 20%;
color: #999;
}   

@media screen and (min-width: 600px) {
.r-footer > * {
flex: 1;
}

.features {
flex-grow: 2;
}

.l-footer {
flex: 1 0px;
}

.r-footer {
flex: 2 0px;
}
}

    </style>


  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="https://www.instagram.com/mosalaki_barber/">
        <img src="image/logo.png" width="48">  MOZALUCKY BARBERSHOP
    </a>
        
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item mx-3">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link" href="service.php">Service</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link" href="faq.php">FAQ</a>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  
         <div class="container-fluid banner">
            <div class="container banner-content col-lg-6">
                <div class="text-center">
                    <h1><strong>
                        SELAMAT DATANG DI WEBSITE MOZALUCKY BARBERSHOP
                    </h1></strong>
                    <h6>
                    Rambut menjadi daya tarik identitas seseorang, konsultasikan style rambutmu, yuk langsung ke @mosalaki_barber. Kami berikan saran style rambut terbaik untuk kamu yang pastinya kekinian, dengan kualitas hasil dan pelayanan terbaik.
                   <h6> 
                        OPEN DAILY
                    10.00 - 22.00
                    </p>
                    </P>
                </div>
            </div>
            </div>
            <br>
            <center>
            
            <br>
            <img src="image/1.jpg" alt="" class="rounded-circle" width="300">
            <img src="image/2.jpg" alt="" class="rounded-circle" width="300">
            <img src="image/3.jpg" alt="" class="rounded-circle" width="300">
            <img src="image/4.jpg" alt="" class="rounded-circle" width="300">

            </center>
            <br>

           
            <br>
            
            <figure class="text-center">
  <blockquote class="blockquote">
    
  </blockquote>
  <figcaption class="blockquote-footer">
     <cite title="Source Title">adminganteng</cite>
  </figcaption>
</figure>
<br>
<h5 class="text-center"><span id="tanggalwaktu"></span></h5>
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
document.getElementById("tanggalwaktu").innerHTML = hariarray[hari]+" "+tanggal+" "+bulanarray[bulan]+" "+tahun+" Jam " + ((tw.getHours() < 10) ? "0" : "") + tw.getHours() + ":" + ((tw.getMinutes() < 10)? "0" : "") + tw.getMinutes() + (" WIB ");
</script>
<br>

<footer class="footer">
<div class="l-footer">
      <h1>
      <img src="image/logo.png" width="48" alt=""></h1>
      <p>
      Mozalucky Barbershop adalah sebuah perusahaan yang bergerak di bidang jasa dan beroperasi sejak 2018. lets explore your hair style with Mozalucky Barbershop.</p>
      </div>
      <ul class="r-footer">
      <li>
        <h2>
      Follow us</h2>
      <ul class="box">
      <li><a href="#"><i class="fab fa-facebook-f"></i>Facebook</a></li>
  	 	<li><a href="#"><i class="fab fa-twitter"></i>Twitter</a></li>
  	 	<li><a href="https://www.instagram.com/mosalaki_barber/"><i class="fab fa-instagram"></i>Instagram</a></li>
      </ul>
      </li>
      <li class="features">
        <h2>
      Information</h2>
      <ul class="box h-box">
      <li><a href="#">Blog</a></li>
      <li><a href="#">Pricing</a></li>
      <li><a href="#">Membership</a></li>
      <li><a href="#">Customer Service</a></li>
      </ul>
      </li>
      <li>
        <h2>
      Legal</h2>
      <ul class="box">
      <li><a href="#">Privacy Policy</a></li>
      <li><a href="#">Terms of Use</a></li>
      <li><a href="#">Contract</a></li>
      </ul>
      </li>
      </ul>
      <div class="b-footer">
      <p>
      All rights reserved by ©admin MozaluckyBarbershop </p>
      </div>
</footer>
  </body>
</html>