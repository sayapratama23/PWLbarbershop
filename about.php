<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>About</title>
    <script src="http://maps.googleapis.com/maps/api/js"></script>

    <script>
        // fungsi initialize untuk mempersiapkan peta
        function initialize() {
        var propertiPeta = {
            center:new google.maps.LatLng(-8.5830695,116.3202515),
            zoom:9,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        
        var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
        }

        // event jendela di-load  
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </head>
    <style>
        body{
          height: 90vh;
          background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.4)), url('admin/galeri/image/full/an.jpg');
          background-position: center top;
          background-size: cover;
        }
        /* .container {
          
          padding-top: 25px;
          padding-bottom: 30px;
          width : 700px;
          font-family: "Courier New", Courier, monospace;
          position: relative;
          display: flex;
          justify-content: space-between;
          margin-top: 20px;
          margin-bottom: 25px;
          
          
        } */

        /* .container .card {
        position: relative;
      } */

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
    <a class="navbar-brand" href="index.php">
        <img src="image/logo.png" width="48">  MOZALUCKY BARBERSHOP
    </a>
        
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item mx-3">
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link active" href="about.php">About</a>
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
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.227765406002!2d112.60610471432845!3d-7.9753959817163675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78829a80cd3feb%3A0x88673c2e07a69788!2sJl.%20Pisang%20Candi%20Barat%20No.73%2C%20Pisang%20Candi%2C%20Kec.%20Sukun%2C%20Kota%20Malang%2C%20Jawa%20Timur%2065146!5e0!3m2!1sid!2sid!4v1649743057096!5m2!1sid!2sid" width="100%" height="450px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


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