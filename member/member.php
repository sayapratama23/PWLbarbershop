<?php include("koneksi.php"); ?>
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
        .btn-outline-primary, .btn-outline-danger {
            margin-right: 15px;
            padding-right: 25px;
            padding-left: 40px;
        }

        .card {
            margin-left: 10px;
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
                    <a href="member.php" class="nav-item nav-link active"><i class="bi bi-speedometer me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-laptop me-2"></i>Layanan Anda</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            
                            <a href="booking.php" class="dropdown-item ms-4">Booking</a>
                        </div>
                    </div>
                    <!-- <a href="tagihan.php" class="nav-item nav-link"><i class="bi bi-receipt me-2"></i>Tagihan</a> -->
                    <a href="images.php" class="nav-item nav-link "><i class="bi bi-images me-2"></i>Galeri</a>
                    <a href="store.php" class="nav-item nav-link"><i class="bi bi-shop me-2"></i></i>Mozalucky store</a>
                    <!-- <a href="daftar.php" class="nav-item nav-link"><i class="bi bi-shop me-2"></i></i>Konfirmasi</a>
                    <a href="login.php" class="nav-item nav-link"><i class="bi bi-shop me-2"></i></i>Login</a> -->
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

            <div class="card text-center col-md-11  mt-4">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="true" href="member.php">Tagihan Anda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="riwayat.php">Riwayat</a>
                </li>
                </ul>
            </div>
            <div class="card-body">
               
                <table class="table table-bordered mt-2">
			<thead>
				<tr>
					<th class="text-center">No</th>
					<th class="text-center">Tanggal</th>
					<th class="text-center">Status</th>
					<th class="text-center">Total</th>
					<th class="text-center">Opsi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no = 1;
				// Mendapatkan id_pelanggan yang login dari session
				$email = $_SESSION['email'];
				$ambil = $con->query("SELECT * FROM pembelian WHERE id_pelanggan='$email'");
				if($ambil->num_rows == 0):
				?>
				<tr>
					<td align="center" colspan="5">Tidak ada tagihan.. </td>
				</tr>
				<?php endif; ?>
				<?php
				while($pecah = $ambil->fetch_assoc()):
				?>
				<tr>
					<th class="text-center"><?= $no++; ?></th>
					<td align="center"><?= date("d F Y", strtotime($pecah['tanggal_pembelian'])); ?></td>
					<td align="center">
						<?= $pecah['status_pembelian']; ?><br>
						<?php if(!empty($pecah['resi_pengiriman'])): ?>
							Resi : <?= $pecah['resi_pengiriman']; ?>
						<?php endif; ?>
					</td>
					<td align="center">Rp. <?= number_format($pecah['total_pembelian']); ?>,-</td>
					<td align="center">
						<a href="nota.php?id=<?= $pecah['id_pembelian']; ?>" class="btn btn-info"><i class="bi bi-receipt me-2"></i>Nota</a>
						
						<?php if($pecah['status_pembelian'] == 'pending'): ?>
							<a href="pembayaran.php?id=<?= $pecah['id_pembelian']; ?>" class="btn btn-success"><i class="bi bi-wallet me-2"></i>Bayar Sekarang</a>
							<?php else: ?>
								<a href="lihat-pembayaran.php?id=<?= $pecah['id_pembelian']; ?>" class="btn btn-warning">Lihat Pembayaran</a>
						<?php endif; ?>
						
					</td>
				</tr>
				<?php endwhile; ?>
			</tbody>
    </table>

            </div>
            </div>

        
  </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
        <br>
    </div>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>