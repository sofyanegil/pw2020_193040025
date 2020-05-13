<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('Data Berhasil ditambahkan!');
            document.location.href='admin.php';
          </script>";
  } else {
    echo "<script>
            alert('Data Gagal ditambahkan!');
            document.location.href='admin.php';
          </script>";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <title>Tambah Data Entraigh.co Store</title>
</head>

<body class="mt-5 bg-light">
  <form action="" method="post">
    <div class="container bg-light">
      <div class="row sm-12">
        <div class="card-deck justify-content-center" style="width: 26rem;margin:auto;">
          <div class="card container">
            <div class="card-header text-center">
              <img src="../assets/img/icon/tambah.png" alt=""> <br>
              <h3> Form Tambah Data</h3>
            </div>
            <div class="form-group row">
              <label for="colFormLabel" class="col-sm-4 col-form-label">Merk</label>
              <div class="col sm-12">
                <input type="text" name="merk" id="merk" required class="form-control" placeholder="Merk apparel">
              </div>
            </div>
            <div class="form-group row">
              <label for="colFormLabel" class="col-sm-4 col-form-label">Nama Artikel</label>
              <div class="col sm-12">
                <input type="text" name="nama_artikel" id="nama_artikel" required class="form-control" placeholder="Nama Apparel">
              </div>
            </div>
            <div class="form-group row">
              <label for="colFormLabel" class="col-sm-4 col-form-label">Size</label>
              <div class="col sm-12">
                <input type="text" name="size" id="size" required class="form-control" placeholder="Size">
              </div>
            </div>
            <div class="form-group row">
              <label for="colFormLabel" class="col-sm-4 col-form-label">Stok</label>
              <div class="col sm-12">
                <input type="number" name="stok" id="stok" required class="form-control" placeholder="Stock">
              </div>
            </div>
            <div class="form-group row">
              <label for="colFormLabel" class="col-sm-4 col-form-label">Harga</label>
              <div class="col sm-12">
                <input type="number" name="harga" id="harga" required class="form-control" placeholder="Harga">
              </div>
            </div>
            <div class="form-group row">
              <label for="colFormLabel" class="col-sm-4 col-form-label">Display</label>
              <div class="col sm-12">
                <input type="number" name="display" id="display" required class="form-control" placeholder="Display">
              </div>
            </div>
            <button type="submit" name="tambah" class="btn btn-success">Tambah Data!</button>
            <a href="admin.php" class="btn btn-danger">Kembali</a>
          </div>
        </div>
      </div>
    </div>
  </form>

</body>

</html>