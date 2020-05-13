<?php
// menghubungkan dengan file php lainnya
require 'php/functions.php';
// melakukan querry
$apparel = query("SELECT * FROM apparel");

if (isset($_POST['cari'])) {
  $keyword = $_POST['keyword'];
  $apparel = query(
    "SELECT * FROM apparel WHERE
          nama_artikel LIKE '%$keyword%' "
  );
} else {
  $apparel = query("SELECT * FROM apparel");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Entraight.co Store</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"> <img src="assets/img/logo.png" width="20px" alt=""> Entraight.co</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="php/login.php"> <img src="assets/img/icon/admin.png" alt=""> Admin <span class="sr-only">(current)</span></a>
      </ul>
      <form action="" method="POST" class="cari form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" name="keyword" size="30" autofocus placeholder="Masukan keyword yang anda cari" autocomplete="off" class="cari">
        <button type="submit" name="cari">Cari!</button>
      </form>
    </div>
  </nav>

  <h3 align="center">Daftar Local Apparel</h3>
  <div class="container bg-secondary mb-3">

    <div class="row justify-content-center">
      <?php if (empty($apparel)) : ?>
        <div class="card bg-">
          <div class="bungkus bg-light">
            <div class="container pb-5 pt-5 mb-5 mt-5 bg-light">
              <div class="card kotak-apparel pb-4 pt-4 mb-5 mt-5">
                <h1 align="center" style="color: red; ">Hasil <b></b>tidak ditemukan</h1>
              </div>
            </div>
          </div>
        <?php else : ?>
          <?php foreach ($apparel as $a) : ?>
            <div class="bungkus">
              <div class="card-deck" style="width: 18rem; height: 24rem;">
                <div class="card bg-light kotak-apparel">
                  <div class="card-header justify-content-center">
                    <img class="justify-content-center" src="assets/img/<?= $a['display']; ?>" alt="">
                  </div>
                  <div class="card-body">
                    <a href="php/detail.php?id=<?= $a['id'] ?>">
                      <button class="btn btn-warning btn-block text-light text-center mr-auto ">
                        <?= $a['merk']; ?> <br>
                      </button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        <?php endif; ?>
        </div>
    </div>

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
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>