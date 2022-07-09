<?php

include("koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $hp = $_POST['hp'];
    $alamat = $_POST['alamat'];
    $tagihan = $_POST['tagihan'];

    // buat query
    $sql = "INSERT INTO pelanggan (nama, hp, alamat, tagihan) VALUE ('$nama', '$hp', '$alamat', '$tagihan')";
    $query = mysqli_query($con, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: list-pelanggan.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: form-daftar.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>