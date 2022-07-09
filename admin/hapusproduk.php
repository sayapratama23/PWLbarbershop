<?php

$ambil = $con->query("SELECT * FROM produk WHERE id_produk = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$fotoproduk = $pecah['foto_produk'];

if(file_exists("../foto_produk/$fotoproduk")){
  unlink("../foto_produk/$fotoproduk");
}

$con->query("DELETE FROM produk WHERE id_produk = '$_GET[id]'");

echo "<script>alert('Produk terhapus');</script>";
echo "<script>location='produk.php?halaman=produk';</script>";