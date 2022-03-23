<?php 
session_start();
//berfungsi mengecek apakah user sudah login atau belum
if($_SESSION['level']==""){
	header("location:admin/index.php?alert=belum_login");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman admin - www.belejarwithib.my.id</title>
</head>
<body>
	<h1>Halaman Admin</h1>

	<p>Halo <b><?php echo $_SESSION['nama']; ?><br></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
	<a href="logout.php">logout</a>
</body>
</html>