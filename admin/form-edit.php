<?php

include("koneksi.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: index.php');
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

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <h1>Edit Data</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    
    
    <form action="proses-edit.php" method="POST">

        <fieldset>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukkan nama" value="<?php echo $pelanggan['nama'] ?>">
        </div>
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