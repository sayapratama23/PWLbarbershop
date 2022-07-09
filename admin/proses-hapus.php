<?php 
	
	include 'koneksi.php';

	if(isset($_GET['idk'])){
		$delete = mysqli_query($con, "DELETE FROM tb_product WHERE product_id = '".$_GET['idk']."' ");
		echo '<script>window.location="produk.php"</script>';
	}

	if(isset($_GET['idp'])){
		$produk = mysqli_query($con, "SELECT product_image FROM tb_product WHERE product_id = '".$_GET['idp']."' ");
		$p = mysqli_fetch_object($produk);

		unlink('./produk/'.$p->product_image);

		$delete = mysqli_query($con, "DELETE FROM tb_product WHERE product_id = '".$_GET['idp']."' ");
		echo '<script>window.location="produk.php"</script>';
	}

?>