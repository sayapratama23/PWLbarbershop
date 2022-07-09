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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <title>Welcome to Mozalucky Barbershop</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">  
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">  
    <link rel="stylesheet" href="footer.css">   
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
.btn-outline-danger  {
        
        margin-bottom: 50px;
        padding-right: 15px;
        padding-left: 20px;
        font-size: 15px; 
        color: black;  
        margin-top: 10px;    
      }

    .btn-outline-success {
        margin-bottom: 50px;
        padding-right: 30px;
        padding-left: 20px;
        font-size: 15px; 
        margin-left: 20px;
        color: black; 
        margin-top: 10px;
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
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link" href="service.php">Service</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link active" href="produk.php">Produk</a>
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
  
    <div class="container">
                <h3 class="mt-4 mb-4 pt-4 text-center">Produk Terbaru</h3>
                <div class="row">
                <?php
                $ambil = $con->query("SELECT * FROM produk");
                while($perproduk = $ambil->fetch_assoc()):
                ?>
                <div class="col-md-3">
                    <div class="thumbnail">
                    <img src="foto_produk/<?= $perproduk['foto_produk']; ?>" style="width: 250px; height: 200px;  margin-top: 20px; margin-bottom: 20px;">
                    <div class="caption">
                        <strong><p align="center" style="font-size: 22px;"><?= $perproduk['nama_produk']; ?></p></strong>
                        <h5 class="text-center">Rp. <?= number_format($perproduk['harga_produk']); ?>,-</h5>
                        <a href="beli.php?id=<?= $perproduk['id_produk']; ?>" class="btn btn-outline-success"><i class="bi bi-cart-check me-1"></i>Cart</a>
                        <a href="detail.php?id=<?= $perproduk['id_produk']; ?>" class="btn btn-outline-danger">Detail<i class="bi bi-arrow-down-right-circle ms-2"></i></a>
                    </div>
                    </div>
                </div>
                <?php endwhile; ?>
                </div>
            </div>

    <footer class="section bg-footer">  
     <div class="container">  
       <div class="row">  
         <div class="col-lg-3">  
           <div class="">  
             <h5 class="footer-heading text-uppercase text-white">Information</h5>  
             <ul class="list-unstyled footer-link mt-4">  
               <li><a href="">Pages</a></li>  
               <li><a href="">Our Team</a></li>  
               <li><a href="">Feuchers</a></li>  
               <li><a href="">Pricing</a></li>  
             </ul>  
           </div>  
         </div>  
         <div class="col-lg-3">  
           <div class="">  
             <h5 class="footer-heading text-uppercase text-white">Ressources</h5>  
             <ul class="list-unstyled footer-link mt-4">  
               <li><a href="">Monitoring Grader </a></li>  
               <li><a href="">Video Tutorial</a></li>  
               <li><a href="">Term &amp; Service</a></li>  
               <li><a href="">Zeeko API</a></li>  
             </ul>  
           </div>  
         </div>  
         <div class="col-lg-2">  
           <div class="">  
             <h5 class="footer-heading text-uppercase text-white">Help</h5>  
             <ul class="list-unstyled footer-link mt-4">  
               <li><a href="">Sign Up </a></li>  
               <li><a href="">Login</a></li>  
               <li><a href="">Terms of Services</a></li>  
               <li><a href="">Privacy Policy</a></li>  
             </ul>  
           </div>  
         </div>  
         <div class="col-lg-4">  
           <div class="">  
             <h5 class="footer-heading text-uppercase text-white">Contact Us</h5>  
             <p class="contact-info mt-4">Contact us if need help withanything</p>  
             <p class="contact-info">+01 123-456-7890</p>  
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