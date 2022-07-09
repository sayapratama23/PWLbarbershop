
<?php require_once("cart.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
           
            margin: auto;
            padding: 10px;
        }
        /* h4 {
            text-align: center;
            font-family: 'Francois One', sans-serif;
            
        } */

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

      /* div > img {
      box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
      -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
      -moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
      margin: 10px;
      padding: 28px;
      border-radius: 20px; 
      display: flex;
    } */
     
    div > h3 {
       padding-top: 20px;
       margin-left: 35px;
       padding-left: 55px;
       font-size: 1rem;
       padding-bottom: 10px;
        
      }

    .btn-danger, .btn-success {
        
        margin-bottom: 50px;
        padding-right: 40px;
        padding-left: 40px;
        font-size: 15px; 
        color: black;      
      }
	  .card {
		margin: 20px;
		justify-content: center;
		text-align: center;
		color: black;
		background-color: #F2F2F2;
		width: 75%;
		padding: 20px;
	  }
    
</style>
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
                    <h4 class="text">MOZALUCKY</h4>
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
                    <a href="images.php" class="nav-item nav-link"><i class="bi bi-images me-2"></i>Galeri</a>
                    <a href="store.php" class="nav-item nav-link active"><i class="bi bi-shop me-2"></i></i>Mozalucky store</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->
		 <!-- Content Start -->
		 <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
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


		<div class="card" style="padding: 100px;">
		<div class="card-body">
			<p class="card-text">Silahkan catat atau screenshot info di bawah ini..</p>
			<?php
			if($_POST['finish']){
				// session_destroy();
				echo 'Terima kasih anda sudah berbelanja di Mozalucky Barbershop.';
				echo '<p>Total biaya untuk pembelian Produk adalah Rp. '.$_POST['total'].',- dan biaya bisa di kirimkan melalui Rekening Bank BRI dengan nomor rekening 123-456-7891-23 atas nama Mozalucky Barbershop.</p>';
				echo '<p>Barang akan kami kirim ke alamat di bawah ini:</p>';
				echo '<p>Nama : '.$_POST['nm_usr'].'<br>';
                echo 'Email : '.$_POST['email_usr'].'<br>';
                echo 'Alamat Lengkap : '.$_POST['almt_usr'].'<br>';
                echo 'Kode Pos : '.$_POST['kp_usr'].'<br>';
                echo 'Kabupaten : '.$_POST['kota_usr'].'<br>';
                echo 'No Telepon : '.$_POST['tlp'].'<br>';
                echo 'Total Belanja : Rp. '.$_POST['total'].',-</p>';
			}else{
				header("Location: member/store.php");
			}
			?>
		</div>
		</div>
                 
                
				



<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/jquery-1.8.2.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/flexslider.js"></script>
	<script src="js/carousel.js"></script>
	<script src="js/jquery.cslider.js"></script>
	<script src="js/slider.js"></script>
	<script def src="js/custom.js"></script>
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
	<script src="jquery.validate.js"></script>
    <script>
    $(document).ready(function(){
        $("#formku").validate();
    });
    </script> 
    
    <style type="text/css">
    label.error {
        color: red;
        padding-left: .5em;
    }
    </style>
<!-- end: Java Script -->

</body>
</html>