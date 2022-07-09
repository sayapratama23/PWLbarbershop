<?php include("koneksi.php"); ?>
<?php
session_start(); // Start session nya
// Kita cek apakah user sudah login atau belum
// Cek nya dengan cara cek apakah terdapat session username atau tidak
if( ! isset($_SESSION['username'])){ // Jika tidak ada session username berarti dia belum login
  header("location: login.php"); // Kita Redirect ke halaman index.php karena belum login
}
?>
<?php require_once("cart.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Mozalucky store</title>
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
            width: 900px;
            margin: auto;
            padding: 10px;
        }
        h4 {
            /* text-align: center;
            font-family: 'Francois One', sans-serif; */
            
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
      
       margin-left: 35px;
       padding-left: 15px;
       padding-top: 15px;
	   font-size: 20px;
        
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
        padding: 15px;
        color: black;
      }
      .table {
        color: black;
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
                            <a href="#" class="dropdown-item"><h5>My Profile</h5></a>
                            <a href="#" class="dropdown-item"><h5>Settings</h5></a>
                            <a href="logout.php" class="dropdown-item"><h5>Log Out</h5></a>
                        </div>
                    </div>
                </div>
            </nav>
	
	<!--start: Wrapper-->
	
				
    <div class="card">
    <div class="card-body">
                    <table class="table table-bordered">	
					<th><center>Item</center></th>
					<th><center>Quantity</center></th>
					<th><center>Sub Total</center></th>
				</tr>
                    <?php
				//MENAMPILKAN DETAIL KERANJANG BELANJA//
                
    $total = 0;
    //mysql_select_db($database_conn, $conn);
    if (isset($_SESSION['items'])) {
        foreach ($_SESSION['items'] as $key => $val) {
            $produk = mysqli_query($con, "SELECT product_id, product_name, product_price FROM tb_product WHERE product_id = '$key'");
            $data = mysqli_fetch_array($produk);

            $jumlah_harga = $data['product_price'] * $val;
            $total += $jumlah_harga;
           
            ?>
                <tr>
                
                <td><center><?php echo $data['product_name']; ?></center></td>
                <td><center><?php echo number_format($val); ?> Pcs</center></td>
                <td><center>Rp. <?php echo number_format($jumlah_harga); ?></center></td>
                </tr>
                
					<?php
                    //mysql_free_result($query);			
						}
							//$total += $sub;
						}?>
                        <?php
				if($total == 0){ ?>
					<td colspan="4" align="center"><?php echo "Keranjang Kosong!"; ?></td>
				<?php } else { ?>
					
                        <td colspan="3"  align="right" style="font-size: 16px; padding-right: 70px;"><b><div>Total  : Rp. <?php echo number_format($total); ?>,-</div> </b></td>
					
			<?php	}
				?>
                </table> 
                <p><div align="right">
						<a href="detail.php" class="btn btn-outline-danger"><i class="bi bi-bookmark-check"></i> Details </a>
						</div></p>
            </div>
      		<!-- start: Row -->
            
      		<div class="row">
            <div class="col-l-5 sm-4">

                    <?php                  
					$query = mysqli_query($con, "SELECT * FROM tb_product WHERE product_id='$_GET[kd]'");
					$data  = mysqli_fetch_array($query);
					?>
            <div class="table-responsives">
                    <table class= "table table-bordered">
                    <tr>
                        <td rowspan="7"><img src="produk/<?php echo $data['product_image']; ?>"style="width: 220px; margin-top: 20px;" /></td>
                        </tr>
                        <tr>
                        <td colspan="4"><div class="title"><h5><?php echo $data['product_name']; ?></h5></div></td>
                        </tr>
                        <tr>
                        <td></td>
                        <td size="200"><h5>Harga</h5></td>
                        <td><h5>:</h5></td>
						<td><div><h5>Rp.<?php echo number_format($data['product_price'],2,",",".");?></h5></div></td>
                        </tr>
                        
                        
                        <tr>
                        <td></td>
                        <td ><h5>Deskripsi</h5></td>
                        <td><h5>:</h5></td>
                        <td><div><h5><?php echo $data['product_description']; ?></h5></div></td>
                        </tr>
                        <tr>
                        <td></td>
                        <td><div class="clear"> <a href="cart.php?act=add&amp;barang_id=<?php echo $data['product_id']; ?>&amp;ref=detailproduk.php?kd=<?php echo $data['product_id'];?>" class="btn btn-outline-success" ><i class="bi bi-cart-plus"></i> Add to chart</a></div></td>
                        
						
                        </tr>
     
                    </table>
                    </div>
                    </div>
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
<!-- end: Java Script -->
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