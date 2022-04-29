<?php 
session_start();
//berfungsi mengecek apakah user sudah login atau belum
if($_SESSION['level']==""){
	header("location:admin/index.php?alert=belum_login");
}
?>



<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Galeri</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css"></script>
</head>
<style>
    @font-face {
        font-family: 'BebasNeue';
        src: url(galeri/fonts/BebasNeue-Regular.woff) format('woff');

    }
    h2 {
        font: 18px/36px 'BebasNeue', 'Arial Narrow', arial, sans-serif;
        font-size: 80px;
        text-align: center;
        text-shadow: 1px 1px 1px;
        margin-bottom: 40px 
        
    }
    .container {
        width: 650px; 
        background-color: #19282F;
        margin: auto;
        padding: 30px;
        border-radius: 5px;
        box-shadow: 0 0 3px 3px rgba(0,0,0,.3)
        
         
    }

    .gallery li {
        width: 120px;
        height: 120px;
        overflow: hidden;
        list-style-type: none;
        float: left;
        margin-right: 10px;
        
        position: relative;
        border: 5px solid #180A0A;
        
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

   
    
    

</style>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="https://www.instagram.com/mosalaki_barber/"><i class="fa fa-instagram fa-fw"></i>MOZALUCKY</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Doe</strong>
                                    <span class="pull-right text-muted">
                                        <em>Today</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since an kwilnw...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since the...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a href="index.php"><i class="fa fa-dashboard"></i> Beranda</a>
                    </li>
					          <li>
                        <a class="active-menu" href="galeri.php"><i class="fa fa-picture-o"></i> Galeri</a>
                    </li>
                    <li>
                        <a href="tab-panel.html"><i class="fa fa-money"></i> Pendapatan</a>
                    </li>
                    
                    <li>
                        <a href="table.html"><i class="fa fa-table"></i> List Pelanggan</a>
                    </li>
              
                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> Kelola Data<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="pelanggan.php">Kelola Data Pelanggan</a>
                            </li>
                            <li>
                                <a href="transaksi.php">Kelola Data Transaksi</a>
                            </li>
                            <li>
                                <a href="karyawan.php">Kelola Data Karyawan</a>
                                    <li>                                
                                </ul>

                            </li>
                        </ul>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Galeri <small>Mozalucky Barbershop</small>
                        </h1>
                        <h2>MOZALUCKY HAIRCUT</h2>
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
              
                
            <!-- /. PAGE INNER  -->
        </div>
        
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>


</body>

</html>	
	
	
