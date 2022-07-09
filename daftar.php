<?php
//koneksi ke database
include 'koneksi.php';

// Jika tombol daftar ditekan
if(isset($_POST['daftar'])){
  // Mengambil isian nama, email, password, alamat, telepon
 
  $email = $_POST['email'];
  

  // Cek apakah email sudah digunakan atau belum
  $ambil = $con->query("SELECT * FROM pelanggan WHERE email_pelanggan='$email'");
  $yangcocok = $ambil->num_rows;
  if($yangcocok == 1){
    echo "<div class='alert alert-danger'>email sudah digunakan!</div>";
		echo "<meta http-equiv='refresh' content='1;url=daftar.php'>";
  }
  else{
    // Insert ke tabel pelanggan
    $con->query("INSERT INTO pelanggan(email_pelanggan) VALUES('$email')");
    echo "<div class='alert alert-success'>Sukses, Konfirmasi Telepon anda</div>";
		echo "<meta http-equiv='refresh' content='1;url=cek.php'>";
  }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cek E-mail</title>
  <link rel="stylesheet" href="admin/assets/css/bootstrap.css">
</head>
<body>

<!-- navbar -->
<?php include 'templates/navbar.php'; ?>


<section class="content">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-2">
        <div class="panel panel-default">
          
          <div class="panel-body">
            <form action="" method="post" class="form-horizontal">
              
              <div class="form-group">
                <label for="email" class="control-label col-md-3">Email</label>
                <div class="col-md-7">
                  <input type="email" class="form-control" name="email" required>
                </div>
              </div>
              
              <div class="form-group">
                <div class="col-md-7 col-md-offset-3">
                  <button class="btn btn-primary" name="daftar">Daftar</button>
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