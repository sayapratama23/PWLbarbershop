<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "barbershop";

$con = mysqli_connect($host,$user,$pass,$db);

if (!$con) {
	die("Koneksi gagal:".mysqli_connect_error());
}
?>
