<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

// menghubungkan dengan file php lainnya
require 'functions.php';

// melalukan query
$apparel = query("SELECT * FROM apparel ORDER BY merk ASC");
if (isset($_POST['cari'])) {
  $apparel = cari($_POST['keyword']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="../css/admin.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin page</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="../index.php"> <img src="../assets/img/logo.png" width="20px" alt=""> Entraight.co</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class=" btn btn-danger text-light" href="logout.php"> <img src="assets/img/icon/admin.png" alt=""> Logout <span class="sr-only">(current)</span></a>
        </li>
      </ul>
      <a href="tambah.php" class="btn btn-dark mr-2"> <img src="../assets/img/icon/tambah.png" alt="" width="20"> Tambah Data</a>
      <form action="" method="POST" class="cari form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2 keyword" type="text" name="keyword" size="30" autofocus placeholder="Masukan keyword yang anda cari" autocomplete="off" class="cari">
        <button class="tombol cari" type="submit" name="cari">Cari!</button>
      </form>
    </div>
  </nav>

  <div class="container">
    <table border="1" cellspacing="0" cellpadding="5" class="table table-responsive">
      <tr class="thead">
        <th colspan="8">
          <h1>Gudang Entraight.co Store</h1>

        </th>
      </tr>
      <tr class="title_table">
        <th>NO</th>
        <th>OPSI</th>
        <th>DISPLAY</th>
        <th>MERK</th>
        <th>NAMA ARTIKEL</th>
        <th>SIZE GUIDE</th>
        <th>HARGA</th>
        <th>STOK</th>
      </tr>
      <?php if (empty($apparel)) : ?>
        <tr>
          <td colspan="8">
            <h1>Data tidak ditemukan</h1>
          </td>
        </tr>
      <?php else : ?>
        <?php $i = 1; ?>
        <?php foreach ($apparel as $a) : ?>
          <tr>
            <td class="no"><?= $i ?></td>
            <td class="opsi">
              <a class="btn btn-success mb-1" href="ubah.php?id=<?= $a['id'] ?>"><img src="../assets/img/icon/ubah.png" width="20" alt=""> Ubah</a>
              <a href=" hapus.php?id=<?= $a['id'] ?>" onclick="return confirm('Hapus Data??')" class="btn btn-danger"><img src="../assets/img/icon/hapus.png" width="20" alt="">Hapus</a>
            </td>
            <td class="display"><img src="../assets/img/<?= $a['display']; ?>"></td>
            <td class="merk"><?= $a["merk"] ?></td>
            <td class="nama_artikel"><?= $a["nama_artikel"] ?></td>
            <td class="size_guide"><?= $a['size']; ?></td>
            <td class="harga"><b>Rp. <?= $a["harga"] ?></b></td>
            <td class="stok"><b><?= $a["stok"] ?></b></td>
          </tr>
          <?php $i++ ?>
        <?php endforeach; ?>
      <?php endif; ?>
    </table>

  </div>

  <footer class="pt-3 ">
    <div class="container text-center">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-sm-12">
          <p>&copy; 2020 Copyright<a href=""> Sofyan Egi Lesmana</a></p>
        </div>
      </div>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>