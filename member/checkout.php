<?php
session_start();

//koneksi ke database
include 'koneksi.php';

if(empty($_SESSION["keranjang"]) OR !isset($_SESSION["keranjang"])){
  echo "<script>alert('Keranjang kosong, silahkan pilih produk!');</script>";
  echo "<script>location='store.php';</script>";
}

if( ! isset($_SESSION['username']))
{ // Jika tidak ada session username berarti dia belum login
  echo "<script>alert('Silahkan Login');</script>";
  echo "<script>location='login.php';</script>";
  // Kita Redirect ke halaman index.php karena belum login
}
// echo "<pre>";
// print_r($_SESSION['keranjang']);
// echo "</pre>";
?>


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
    <link rel="stylesheet" href="admin/assets/css/bootstrap.css">
  <script src="admin/assets/js/jquery.min.js"></script>
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

      /* div > img {
      box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
      -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
      -moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
      margin: 10px;
      padding: 28px;
      border-radius: 20px; 
      display: flex;
    } */
     
  

</style>
<body style="min-height: 1000px;">
<div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
       
        <!-- Spinner End -->
        <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->

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
                    <a href="images.php" class="nav-item nav-link"><i class="bi bi-images me-2"></i>Galeri</a>
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
                <form action="pencarian.php" method="get" class="navbar-form navbar-right">
                <input type="text" class="form-control" name="keyword" placeholder="cari...">
                
              </form>       
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






  <div class="container col-md-12">
    
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>No</th>
          <th>Produk</th>
          <th>Harga</th>
          <th>Jumlah</th>
          <th>Subharga</th>
        </tr>
      </thead>
      <tbody>
				<?php $no=1; ?>
				<?php $totalberat = 0; ?>
				<?php $totalbelanja = 0; ?>
        <?php foreach($_SESSION['keranjang'] as $id_produk => $jumlah): ?>
        <!-- Menampilkan produk yang sedang duperulangkan berdasarkan id_produk -->
        <?php
        $ambil = $con->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
        $pecah = $ambil->fetch_assoc();
        $subharga = $pecah['harga_produk'] * $jumlah;
        // Subberat diperoleh dari berat produk x jumlah
        $subberat = $pecah['berat_produk'] * $jumlah;
        $totalberat+=$subberat;

        // echo "<pre>";
        // print_r($pecah);
        // echo "</pre>";
        ?>
        <tr>
					<td><?= $no++; ?></td>
          <td><?= $pecah['nama_produk']; ?></td>
          <td>Rp. <?= number_format($pecah['harga_produk']); ?>,-</td>
          <td><?= $jumlah; ?></td>
          <td>Rp. <?= number_format($subharga); ?>,-</td>
				</tr>
				<?php $totalbelanja += $subharga; ?>
        <?php endforeach; ?>
			</tbody>
			<tfoot>
				<tr>
					<th colspan="4">Total Belanja</th>
					<th>Rp. <?= number_format($totalbelanja); ?>,-</th>
				</tr>
			</tfoot>
    </table>
    
    <form action="" method="post">
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<input type="text" readonly value="<?= $_SESSION['nama']; ?>" class="form-control">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<input type="text" readonly value="<?= $_SESSION['email']; ?>" class="form-control">
					</div>
				</div>
      </div>
      <div class="form-group mt-4 mb-3">
       
        <textarea name="alamat_pengiriman" cols="30" rows="3" class="form-control" placeholder="Masukkan alamat lengkap pengiriman (termasuk no hp)"></textarea>
      </div>

      <!-- source code dari rajaongkir -->
      <div class="row">
        <div class="col-md-3 mb-3">
          <div class="form-group">
            <label for="">Provinsi</label>
            <select name="nama_provinsi" id="" class="form-control">
              <!-- Menggunakan javascript -->
            </select>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="">Distrik</label>
            <select name="nama_distrik" id="" class="form-control">

            </select>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="">Ekspedisi</label>
            <select name="nama_ekspedisi" id="" class="form-control">
              
            </select>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="">Paket</label>
            <select name="nama_paket" id="" class="form-control">
              
            </select>
          </div>
        </div>
      </div>

      <input type="text" name="total_berat" value="<?= $totalberat; ?>" style = "margin-bottom: 10px;">
      <input type="text" name="provinsi">
      <input type="text" name="distrik">
      <input type="text" name="tipe"><br>
      <input type="text" name="kodepos">
      <input type="text" name="ekspedisi">
      <input type="text" name="paket">
      <input type="text" name="ongkir">
      <input type="text" name="estimasi">
  
      <div class="form-group" style="margin-top: 10px;">
        <button class="btn btn-primary" name="checkout">Checkout</button>
      </div>
    </form>

    <?php
    if(isset($_POST["checkout"])){
      $id_pelanggan = $_SESSION["pelanggan"]["id_pelanggan"];
      $tanggal_pembelian = date('Y-m-d');
      $alamat_pengiriman = $_POST['alamat_pengiriman'];
    
      $totalberat = $_POST['total_berat'];
      $provinsi = $_POST['provinsi'];
      $distrik = $_POST['distrik'];
      $tipe = $_POST['tipe'];
      $kodepos = $_POST['kodepos'];
      $ekspedisi = $_POST['ekspedisi'];
      $paket = $_POST['paket'];
      $ongkir = $_POST['ongkir'];
      $estimasi = $_POST['estimasi'];
    
      $total_pembelian = $totalbelanja + $ongkir;
    
      // Menyimpan data ke tabel pembelian
      $con->query("INSERT INTO pembelian(id_pelanggan, tanggal_pembelian, total_pembelian, alamat_pengiriman, totalberat, provinsi, distrik, tipe, kodepos, ekspedisi, paket, ongkir, estimasi) VALUES('$email', '$tanggal_pembelian', '$total_pembelian', '$alamat_pengiriman', '$totalberat', '$provinsi', '$distrik', '$tipe', '$kodepos', '$ekspedisi', '$paket', '$ongkir', '$estimasi')");

      // Mendapatkan id_pembelian yang baru terjadi
      $id_pemebelian_barusan = $koneksi->insert_id;

      foreach($_SESSION["keranjang"] as $id_produk => $jumlah){

        // Mendapatkan data produk berdasarkan id_produk
        $ambil = $con->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
        $perproduk = $ambil->fetch_assoc();
        
        $nama = $perproduk['nama_produk'];
        $harga = $perproduk['harga_produk'];
        $berat = $perproduk['berat_produk'];
        $subberat = $perproduk['berat_produk']*$jumlah;
        $subharga = $perproduk['harga_produk']*$jumlah;

        $con->query("INSERT INTO pembelian_produk(id_pembelian, id_produk, nama, harga, berat, subberat, subharga, jumlah) VALUES('$id_pemebelian_barusan', '$id_produk', '$nama', '$harga', '$berat', '$subberat', '$subharga', '$jumlah')");

        // Update stok
        $con->query("UPDATE produk SET stok_produk=stok_produk - $jumlah WHERE id_produk='$id_produk'");
      }

      // Mengosongkan keranjang belanja
      unset($_SESSION["keranjang"]);

      // Tampilan dialihkan ke halaman nota dari pembelian barusan
      echo "<script>alert('Pembelian sukses');</script>";
      echo "<script>location='nota.php?id=$id_pemebelian_barusan';</script>";
    }
    
    ?>

  </div>


<script>
    $(document).ready(function(){
      $.ajax({
        type: 'post',
        url: 'dataprovinsi.php',
        success: function(hasil_provinsi){
          $("select[name=nama_provinsi]").html(hasil_provinsi);
        }
      });

      $("select[name=nama_provinsi]").on("change", function(){
        // Ambil id_provinsi ynag dipilih (dari atribut pribadi)
        var id_provinsi_terpilih = $("option:selected", this).attr("id_provinsi");
        $.ajax({
          type: 'post',
          url: 'datadistrik.php',
          data: 'id_provinsi='+id_provinsi_terpilih,
          success:function(hasil_distrik){
            $("select[name=nama_distrik]").html(hasil_distrik);
          }
        })
      });

      $.ajax({
        type: 'post',
        url: 'jasaekspedisi.php',
        success: function(hasil_ekspedisi){
          $("select[name=nama_ekspedisi]").html(hasil_ekspedisi);
        }
      });

      $("select[name=nama_ekspedisi]").on("change", function(){
        // Mendapatkan data ongkos kirim

        // Mendapatkan ekspedisi yang dipilih
        var ekspedisi_terpilih = $("select[name=nama_ekspedisi]").val();
        // Mendapatkan id_distrik yang dipilih
        var distrik_terpilih = $("option:selected", "select[name=nama_distrik]").attr("id_distrik");
        // Mendapatkan toatal berat dari inputan
        $total_berat = $("input[name=total_berat]").val();
        $.ajax({
          type: 'post',
          url: 'datapaket.php',
          data: 'ekspedisi='+ekspedisi_terpilih+'&distrik='+distrik_terpilih+'&berat='+$total_berat,
          success: function(hasil_paket){
            // console.log(hasil_paket);
            $("select[name=nama_paket]").html(hasil_paket);

            // Meletakkan nama ekspedisi terpilih di input ekspedisi
            $("input[name=ekspedisi]").val(ekspedisi_terpilih);
          }
        })
      });

      $("select[name=nama_distrik]").on("change", function(){
        var prov = $("option:selected", this).attr('nama_provinsi');
        var dist = $("option:selected", this).attr('nama_distrik');
        var tipe = $("option:selected", this).attr('tipe_distrik');
        var kodepos = $("option:selected", this).attr('kodepos');
        
        $("input[name=provinsi]").val(prov);
        $("input[name=distrik]").val(dist);
        $("input[name=tipe]").val(tipe);
        $("input[name=kodepos]").val(kodepos);
      });

      $("select[name=nama_paket]").on("change", function(){
        var paket = $("option:selected", this).attr("paket");
        var ongkir = $("option:selected", this).attr("ongkir");
        var etd = $("option:selected", this).attr("etd");

        $("input[name=paket]").val(paket);
        $("input[name=ongkir]").val(ongkir);
        $("input[name=estimasi]").val(etd);
      })
    });
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

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>