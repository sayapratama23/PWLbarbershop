<?php 
// berfungsi mengaktifkan session
session_start();
 
// berfungsi menghubungkan koneksi ke database
include 'koneksi.php';
 
// berfungsi menangkap data yang dikirim
$user = $_POST['username'];
$pass = md5($_POST['password']);
 
// berfungsi menyeleksi data user dengan username dan password yang sesuai
$sql = mysqli_query($con,"SELECT * FROM user WHERE username='$user' AND password='$pass'");
//berfungsi menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($sql);

// berfungsi mengecek apakah username dan password ada pada database
if($cek > 0){
	$data = mysqli_fetch_assoc($sql);

	// berfungsi mengecek jika user login sebagai admin
	if($data['level']=="admin"){
		// berfungsi membuat session
		$_SESSION['nama'] =  $data['nama'];
		$_SESSION['level'] = "admin";
		
		//berfungsi mengalihkan ke halaman admin
		header("location:admin/index.php");
	// berfungsi mengecek jika user login sebagai karyawan
	}else if($data['level']=="member"){
		// berfungsi membuat session
		$_SESSION['nama'] = $data['nama'];
		$_SESSION['level'] = "member";
		$_SESSION['email'] = $data['email'];
		
		// berfungsi mengalihkan ke halaman moderator
		header("location:member/member.php");

	}else{
		// berfungsi mengalihkan  ke halaman login kembali
		header("location:login.php?alert=gagal");
		
	}	
}else{
	header("location:login.php?alert=gagal");
}
?>