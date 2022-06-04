<?php
session_start(); // Start session nya
// Kita cek apakah user sudah login atau belum
// Cek nya dengan cara cek apakah terdapat session username atau tidak
if(isset($_SESSION['username'])){ // Jika session username ada berarti dia sudah login
  header('location: member/member.php'); // Kita Redirect ke halaman welcome.php
}
?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="login.css">
	<script src="https://kit.fontawesome.com/bb10be3136.js" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
	<title>Login</title>
</head>
<style>
	body {
		background-color: white;
	}
	  h1 {
		  text-align: center;
		  font-family: 'Poppins', sans-serif;
		  
	  }
	  p {
		  text-align: center;
		  padding-bottom: 20px;
		  font-family: 'Poppins', sans-serif;
		  
	  }
	  h6 {
		  
		  margin-top: 20px;
		  font-family: 'Poppins', sans-serif;
		  font-size: 13px;
		  
	  }
	  .header h1 {
		font-style: normal;
		font-family: 'Poppins', sans-serif;
		font-weight: 600;
		font-size: 32px;
		line-height: 48px;
		/* identical to box height */
		color: #000000;
		padding-top: 50px;
	  }
	  .header p {
		  /* Welcome back! Please enter your details. */
		font-style: normal;
		font-family: 'Poppins', sans-serif;
		font-weight: 400;
		font-size: 14px;
		line-height: 21px;
		/* identical to box height */
		color: #737373;
		margin-bottom: 20px;
	  }
	  .input-group>.form-control, .input-group>.form-select {
		position: relative;
		font-family: 'Poppins', sans-serif;
		flex: 1 1 auto;
		width: 1%;
		min-width: 0;
		font-style: normal;
		font-weight: 400;
		font-size: 16px;
		line-height: 24px;
		/* identical to box height */
		color: #000000;
		margin-top: 20px 0;
	}
		.btn-primary {
		color: #fff;
		background-color: #0d6efd;
		border-color: #0d6efd;
		font-family: 'Poppins', sans-serif;
		}

		.form-group input {
		background: #FFFFFF;
		border: 1px solid #BCBCBC;
		box-sizing: border-box;
		border-radius: 8px;
		margin-bottom: 20px;
		font-family: 'Poppins', sans-serif;
		}

		.btn-primary {
		width: 100%;
		height: 42px;
		background: #000000;
		border-radius: 8px;
		color: white;
		border: none;
		font-family: 'Poppins', sans-serif;
		
		
		}
		.btn-danger {
		width: 100%;
		height: 42px;
		background: white;
		border: 1px solid #BCBCBC;
		box-sizing: border-box;
		border-radius: 8px;
		margin: 10px 0 20px 0;
		font-family: 'Poppins', sans-serif;
		color:black;
		
	  }
	  .span {
		font-style: normal;
		font-weight: 400;
		font-size: 14px;
		line-height: 21px;
		/* identical to box height */
		color: #737373;
		font-family: 'Poppins', sans-serif;
	  }
	  a {
		  
		  color: black;
		  
	  } 
	  
	  
</style>
<body>

<section class="login d-flex">
	
		<div class="login-left w-50 h-100">
			<div class="row justify-content-center align-items-center h-100">
				<div class="col-6">
	  				<div class="header">
					<h1>Login Page</h1>
					<p>Welcome back, please enter your details.</p>
					</div>
		
		<form action="aksi.php" method="post">
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-prepend">				
					</div>
					<input type="text" name="username" class="form-control" placeholder="Masukkan Username ">
				</div>
			</div>
			
			<div class="form-group">	
				<div class="input-group">
					<div class="input-group-prepend">										
					</div>
					<input type="password" name="password" class="form-control" placeholder="Masukkan Pasword">
				</div>
			</div>
	  		
			<td><input type="submit" class="btn btn-primary" value="Login"></td>
            <div class="text-center">
              <a href="google.php" class="btn btn-danger">
				  <img src="img/icon.png" alt="">
				  Signin With Google</a>
            </div>
			
						<div class="text-center">
						<span class="d-inline">kembali ke<a href="index.php" class="d-inline text-decoration-none"> <strong>Beranda</strong>  </a>
						</span>
						<?php
	if(isset($_GET['alert'])){
		if($_GET['alert']=="gagal"){
			echo "<h6>Maaf! Username & Password Salah.</h6>";
		}else if($_GET['alert']=="belum_login"){
			echo "<h6>Anda Harus Login Terlebih Dulu!</h6>";
		}else if($_GET['alert']=="logout"){
			echo "<h6>Anda Telah Logout!</h6>";
		}
	}
	?>
						</div>			
					</div>
				</div>
			</div>
		</form>
	</div>
	<div class="login-right w-50 h-100">
		<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
				<img src="img/3.jpg" class="d-block w-100 img-fluid" alt="...">
				<div class="carousel-caption d-none d-md-block">
					
				</div>
				</div>
				<div class="carousel-item">
				<img src="img/4.jpg" class="d-block w-100 img-fluid" alt="...">
				<div class="carousel-caption d-none d-md-block">
					
				</div>
				</div>
				<div class="carousel-item">
				<img src="img/5.jpg" class="d-block w-100 img-fluid" alt="...">
				<div class="carousel-caption d-none d-md-block">
					
				</div>
				</div>
				<div class="carousel-item">
				<img src="img/6.jpg" class="d-block w-100 img-fluid" alt="...">
				<div class="carousel-caption d-none d-md-block">
					
				</div>
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
		</div>		  
	  </section>
	  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	</div>

</body>
</html>



