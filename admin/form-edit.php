<?php

include("koneksi.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-pelanggan.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM pelanggan WHERE id=$id";
$query = mysqli_query($db, $sql);
$pelanggan = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit data</title>
</head>

<body>
    <header>
        <h3>Edit Data Pelanggan</h3>
    </header>

    <form action="proses-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $pelanggan['id'] ?>" />

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="Masukkan nama" value="<?php echo $pelanggan['nama'] ?>" />
        </p>
        <p>
            <label for="hp">Handphone: </label>
            <input type="text" name="hp" placeholder="Masukkan no handphone" value="<?php echo $pelanggan['hp'] ?>" />
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat"><?php echo $pelanggan['alamat'] ?></textarea>
        </p>
        <p>
            <label for="tagihan">Tagihan: </label>
            <input type="text" name="tagihan" placeholder="Masukkan tagihan" value="<?php echo $pelanggan['tagihan'] ?>" />
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>