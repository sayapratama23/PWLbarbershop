<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="login.css">
	<script src="https://kit.fontawesome.com/bb10be3136.js" crossorigin="anonymous"></script>
	<title>Login</title>
</head>
<body>
	
	<div class="container-fluid" style="width: 500px;">
	<div class="p-3 mb-2 bg-light text-dark"
	style="height: 300px;">
		<br>
		<h1 class="text-center"> L O G I N</h1>
		<hr>
		<form action="aksi.php" method="post">
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-prepend">
					<svg xmlns="http://www.w3.org/2000/svg" width="35" height="30" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
					<path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
					</svg>
					</div>

					<input type="text" name="username" class="form-control" placeholder="Masukkan Username Anda">
				</div>
			</div>
			<br>
			
			<div class="form-group">	
				<div class="input-group">
					<div class="input-group-prepend">
					<svg xmlns="http://www.w3.org/2000/svg" width="35" height="30" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
					<path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
					</svg>						
					</div>
					<input type="password" name="password" class="form-control" placeholder="Masukkan Pasword Anda">
				</div>
			</div>

			<br>
			<center>
			<td><input type="submit" class="btn btn-primary" value="LOGIN"></td>
			<td><input type="reset" class="btn btn-danger" value="RESET"></td>
			</center>
		</form>
	</div>
	</div>
</body>
</html>



<?php
	if(isset($_GET['alert'])){
		if($_GET['alert']=="gagal"){
			echo "<p>Maaf! Username & Password Salah.</p>";
		}else if($_GET['alert']=="belum_login"){
			echo "<p>Anda Harus Login Terlebih Dulu!</p>";
		}else if($_GET['alert']=="logout"){
			echo "<p>Anda Telah Logout!</p>";
		}
	}
	?>