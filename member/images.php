<?php
session_start(); // Start session nya
// Kita cek apakah user sudah login atau belum
// Cek nya dengan cara cek apakah terdapat session username atau tidak
if( ! isset($_SESSION['username'])){ // Jika tidak ada session username berarti dia belum login
  header("location: login.php"); // Kita Redirect ke halaman index.php karena belum login
}
?>

<head>
  <title>Member Area</title>
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Template Stylesheet -->
    <link href="style.css" rel="stylesheet">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Francois+One&family=Josefin+Sans:wght@300&display=swap');
        * {margin: 0; padding: 0}
        #wrapper {
            width: 900px;
            margin: auto;
            padding: 10px;
        }
        h4 {
            text-align: center;
            font-family: 'Francois One', sans-serif;
            
        }

        .text {
            position: relative;
            display: inline-block;
            font-size: 25px;
            text-transform: uppercase;
            color: black;
            text-shadow: 3px 3px 0px #D7DACC, 8px 8px 0px rgba(0, 0, 0, 0.1);
        }
        h5 {
            font-size: 14px;
        }
    @font-face {
        font-family: 'BebasNeue';
        src: url(galeri/fonts/BebasNeue-Regular.woff) format('woff');

    }
    h2 {
        font: 18px/36px 'BebasNeue', 'Arial Narrow', arial, sans-serif;
        font-size: 72px;
        text-align: center;
        text-shadow: 1px 1px 1px;
        padding-top: 40px;
        margin-bottom: 40px; 
        color: black;
        
    }
    .container {
        width: 650px; 
        background-color: white;
        margin: auto;
        padding: 30px;
        border-radius: 25px;
        box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
        -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
        -moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
        margin-bottom: 30px;
        border: solid black 2px;
           
    }
    

    .gallery li {
        width: 120px;
        height: 120px;
        overflow: hidden;
        list-style-type: none;
        float: left;
        margin-right: 10px;
        position: relative;
        border: 2px solid black;
        
    }

    .gallery li,
    .gallery li img,
    .gallery li span {
        border-radius: 50%;

    }

    .gallery li a:hover span {
        opacity: 1;
    }

    .clear {
        clear: both;
    }


    .overlay {
        width: 0;
        height: 0;
        overflow: hidden;
        position: fixed;
        top: 0;
        left: 0;        
        background-color: rgba(0,0,0,0);
        z-index: 9999;
        transition: .8s;
        text-align: center;
        padding: 100px 0;
    }

    .overlay:target {
        width: auto;
        height: auto;
        bottom: 0;
        right: 0;
        background-color: rgba(0,0,0,.7);
    }

    .overlay img {
        max-height: 100%;
        box-shadow: 2px 2px 7px rgba(0,0,0,.5)
    }

    .overlay:target img {
        animation: zoomdanfade 1s;
    }

    .overlay .close {
        position: absolute;
        top: 50px;
        left: 50%;
        margin-left: -26px;
        color: white;
        text-decoration: none;
        background-color: black;
        border: 1px solid white;
        line-height: 14px;
        padding: 5px;
        opacity: 0;
    }

    .overlay:target .close {
        animation: slidedownfade .5s .5s forwards;
    }


    @keyframes zoomdanfade {
        0% {
            transform: scale(0);
            opacity: 0;
        }

        100%{
            transform: scale(1);
            opacity: 1;
        }
    }


    @keyframes slidedownfade {
        0% {
            opacity: 0;
            margin-top: -20px;
        }

        100% {
            opacity: 1;
            margin-top: 0;
        }
    }

    div > img {
      width: 500px;
      height: 100%;
      box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
      -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
      -moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
      margin: 10px;
      padding: 5px;
      border-radius: 20px;  
      /* justify-content: center; */
    }

   
    
    @media screen and (max-width: 780px) {
    /* .galerry > img-fluid {
        width: auto;
        float: none;
    } */
    
    h2 {
        font-size: 15vw;
        text-align: center;
    }
    
    div > img {
        width: 100%;
        
    }
}

</style>
<html>
<body>
  <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="https://www.instagram.com/mosalaki_barber/" class="navbar-brand mx-4 mb-3">
                <!-- <img src="image/logo.png" width="48">  -->
                <div id="wrapper"> 
                    <h4 class="text">M O Z A L U C K Y</h4>
                </div>
                </a>
                <div class="navbar-nav w-100">
                    <a href="member.php" class="nav-item nav-link"><i class="bi bi-speedometer me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-laptop me-2"></i>Layanan Anda</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            
                            <a href="booking.php" class="dropdown-item ms-4">Booking</a>
                        </div>
                    </div>
                    <!-- <a href="tagihan.php" class="nav-item nav-link"><i class="bi bi-receipt me-2"></i>Tagihan</a> -->
                    <a href="images.php" class="nav-item nav-link active"><i class="bi bi-images me-2"></i>Galeri</a>
                    <a href="store.php" class="nav-item nav-link"><i class="bi bi-shop me-2"></i></i>Mozalucky store</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>            
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="https://gravatar.com/avatar/3fbd8de90e52c0e00febefbf1c46631f" onclick="changePicture(this);" rel-id="725172" title="Change Picture" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"><tr>
                              <strong><h6 class="me-2">Hallo,</h6></strong> 
                              <strong><h6><?php echo $_SESSION['nama'] ?></h6></strong>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="logout.php" class="dropdown-item"><h5>Log Out</h5></a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">  
                        <h2>HAIRCUT</h2>                     
                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="container">
                    <ul class="gallery">
                        <li>
                            <a href="#gambar-1">
                            <img src="galeri/image/thumb/1.jpg" alt="gbr 1" width="130">
                            <span></span>
                            </a> 

                            <div class="overlay" id="gambar-1">
                                <a href="#" class="close">X Close</a>
                                <img src="galeri/image/thumb/1.jpg" alt="gbr 1">
                            </div>
                        </li>

                        <li>
                            <a href="#gambar-2">
                            <img src="galeri/image/thumb/2.jpg" alt="gbr 2" width="130">
                            <span></span>
                            </a>                        
                            <div class="overlay" id="gambar-2">
                                <a href="#" class="close">X Close</a>
                                <img src="galeri/image/thumb/2.jpg" alt="gbr 2">
                            </div>
                        </li>            

                        <li>
                            <a href="#gambar-3">
                            <img src="galeri/image/thumb/3.jpg" alt="gbr 3" width="130">
                            <span></span>
                            </a>                        
                            <div class="overlay" id="gambar-3">
                                <a href="#" class="close">X Close</a>
                                <img src="galeri/image/thumb/3.jpg" alt="gbr 3">
                            </div>
                        </li>
                            
                        <li>
                            <a href="#gambar-4">
                            <img src="galeri/image/thumb/4.jpg" alt="gbr 4" width="130">
                            <span></span>
                            </a>                        
                            <div class="overlay" id="gambar-4">
                                <a href="#" class="close">X Close</a>
                                <img src="galeri/image/thumb/4.jpg" alt="gbr 4">
                            </div>
                        </li>
                        <div class="clear"></div>
                    </ul>
                </div>
                
                <!-- list gambar -->
                <div class="gbr">
                <img src="image/a.jpeg" class="img-fluid" alt="">              
                <img src="image/b.jpeg" class="img-fluid" alt="">
                <!-- <img src="image/c.jpeg" class="img-fluid" alt=""> -->
                <img src="image/d.jpeg" class="img-fluid" alt="">
                <img src="image/h.jpg" class="img-fluid" alt="">
                <img src="image/f.jpg" class="img-fluid" alt="">
                <img src="image/g.jpg" class="img-fluid" alt="">
                </div>
        </div>


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
        <br>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>