<?php
//koneksi ke database
include 'koneksi.php';

// Jika tombol daftar ditekan
if(isset($_POST['daftar'])){
  // Mengambil isian nama, email, password, alamat, telepon

  $email = $_POST['email'];
  $telepon = $_POST['telepon'];

  // Cek apakah email sudah digunakan atau belum
  $ambil = $con->query("SELECT * FROM pelanggan WHERE email_pelanggan='$email'");
  $yangcocok = $ambil->num_rows;
  if($yangcocok == 1){
    echo "<div class='alert alert-danger'>Pendaftaran gagal, email sudah digunakan!</div>";
		echo "<meta http-equiv='refresh' content='1;url=daftar.php'>";
  }
  else{
    // Insert ke tabel pelanggan
    $con->query("INSERT INTO pelanggan(email_pelanggan, telepon_pelanggan) VALUES('$email', '$telepon')");
    echo "<div class='alert alert-success'>Konfirmasi Sukses</div>";
		echo "<meta http-equiv='refresh' content='1;url=login.php'>";
  }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Konfirmasi Data Pemesan</title>
  <link rel="stylesheet" href="admin/assets/css/bootstrap.css">
</head>
<body>

<!-- navbar -->
<?php include 'templates/navbar.php'; ?>


<section class="content">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"></h3>
          </div>
          <div class="panel-body">
            <form action="" method="post" class="form-horizontal">
              
              <div class="form-group">
                <label for="email" class="control-label col-md-3">Email</label>
                <div class="col-md-7">
                  <input type="email" class="form-control" name="email" required>
                </div>
              </div>
          
              <div class="form-group">
                <label for="telepon" class="control-label col-md-3">Telepon</label>
                <div class="col-md-7">
                  <input type="text" class="form-control" name="telepon" required>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-7 col-md-offset-3">
                  <button class="btn btn-primary" name="daftar">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  
</body>
</html>