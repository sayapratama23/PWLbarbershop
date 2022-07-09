<?php include("koneksi.php"); ?>
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
    <title>Kelola data</title>
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

            
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a href="index.php"><i class="fa fa-dashboard"></i> Beranda</a>
                    </li>
					 <li>
                        <a href="galeri.php"><i class="fa fa-picture-o"></i> Galeri</a>
                    </li>
                    <li>
                        <a href="tab-panel.html"><i class="fa fa-money"></i> Pendapatan</a>
                    </li>
                    
                    <li>
                        <a href="list-pelanggan.php"><i class="fa fa-table"></i> List Pelanggan</a>
                    </li>
              
                    <li>
                        <a class="active-menu" href="#"><i class="fa fa-sitemap"></i> Kelola Data<span class="fa arrow"></span></a>
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
                            Kelola Data Pelanggan <small>Mozalucky Barbershop</small>
                        </h1>
                    </div>
                </div>
                <!-- /. ROW  -->

                    <div class="col-md-9 col-sm-12 col-xs-12">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                List Pelanggan
                            </div> 
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <!-- <tr>
                                            <th>Nama</th>
                                            <th>Handphone</th>
                                            <th>Alamat</th>
                                            <th>Tagihan</th>
                                            <th>Aksi</th>
                                            </tr> -->
                                        </thead>
                                        <tbody>
                                        <ul>
                                            <li><a href="form-daftar.php">Input data</a></li>
                                            <li><a href="list-pelanggan.php">List pelanggan</a></li>
                                        </ul>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /. ROW  -->
				
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
	
	
