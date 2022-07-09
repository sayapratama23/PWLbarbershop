<?php include("koneksi.php"); ?>
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">  
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">  
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="footer.css">
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

h2 {
font-weight: 400;
font-size: 15px;
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
          <a class="nav-link" href="produk.php">Produk</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link" href="faq.php">FAQ</a>
        </li>
          </a>
        </li>
      </ul>
      
        
        <a class="btn btn-outline-warning me-2" href="login.php" role="button">Login</a>
        
     
    
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

<footer class="section bg-footer">  
     <div class="container">  
       <div class="row">  
         <div class="col-lg-3">  
           <div class="">  
             <h5 class="footer-heading text-uppercase text-white">Information</h5>  
             <ul class="list-unstyled footer-link mt-4">  
               <li><a href="">Pages</a></li>  
               <!-- <li><a href="">Our Team</a></li>   -->
               <!-- <li><a href="">Feuchers</a></li>   -->
               <li><a href="service.php">Pricing</a></li>  
             </ul>  
           </div>  
         </div>  
         <div class="col-lg-3">  
           <div class="">  
             <h5 class="footer-heading text-uppercase text-white">Ressources</h5>  
             <ul class="list-unstyled footer-link mt-4">  
               <!-- <li><a href="">Monitoring Grader </a></li>   -->
               <li><a href="https://www.tiktok.com/@mozaluckybarbershop?_d=secCgYIASAHKAESPgo85HC6W%2FzwXUfm7lpkT8t2noIrbROdY4lnGNi5YZoUQYKZik%2BXBWvX0ajBHSKxTkr0JkSFm%2BwdVe%2FYaJFBGgA%3D&_r=1&language=id&sec_uid=MS4wLjABAAAAKboRBDfNiefWrDKYdQsylTvIdDw1YNkbeUXH-VPi_JpQNyZnU17_0vd-cqxIUNJO&sec_user_id=MS4wLjABAAAAbqQWAd_g_jEpDXNeezbOhEZ_rao3xoRVEo2c3Z2l7pkudn-2CZifrsLKgZW3dQ4F&share_app_id=1180&share_author_id=6915229516315476993&share_link_id=8e16736f-d244-4835-a7a3-034a701a9108&source=h5_t&timestamp=1657334690&u_code=dkg32m95ggk38a&ug_btm=b9734%2Cb2878&ugbiz_name=Account&user_id=7006139786113057819&utm_campaign=client_share&utm_medium=android&utm_source=copy">Video </a></li>  
               <li><a href="terms.php">Term &amp; Service</a></li>  
               <!-- <li><a href="">Zeeko API</a></li>   -->
             </ul>  
           </div>  
         </div>  
         <div class="col-lg-2">  
           <div class="">  
             <h5 class="footer-heading text-uppercase text-white">Help</h5>  
             <ul class="list-unstyled footer-link mt-4">  
               <li><a href="daftar.php">Sign Up </a></li>  
               <li><a href="login.php">Login</a></li>  
               <!-- <li><a href="">Terms of Services</a></li>   -->
               <li><a href="privacy.php">Privacy Policy</a></li>  
             </ul>  
           </div>  
         </div>  
         <div class="col-lg-4">  
           <div class="">  
             <h5 class="footer-heading text-uppercase text-white">Contact Us</h5>  
             <p class="contact-info mt-4">Contact us if need help withanything</p>  
             <p class="contact-info">+62 822 3089 2356</p>  
             <div class="mt-5">  
               <ul class="list-inline">  
                 <li class="list-inline-item"><a href="#"><i class="fab facebook footer-social-icon fa-facebook-f"></i></i></a></li>  
                 <li class="list-inline-item"><a href="#"><i class="fab twitter footer-social-icon fa-twitter"></i></i></a></li>  

 

                 <li class="list-inline-item"><a href="#"><i class="fab google footer-social-icon fa-google"></i></i></a></li>  
                 <li class="list-inline-item"><a href="#"><i class="fab apple footer-social-icon fa-apple"></i></i></a></li>  
               </ul>  
             </div>  
           </div>  
         </div>  
       </div>  
     </div>  
     <div class="text-center mt-5">  
       <p class="footer-alt mb-0 f-14">2022 © Mozalucky Barbershop, All Rights Reserved</p>  
     </div>  
   </footer>  
  </body>
</html>