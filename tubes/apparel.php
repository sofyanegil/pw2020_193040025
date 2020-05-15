<?php
// menghubungkan dengan file php lainnya
require 'php/functions.php';
// melakukan querry
$apparel = query("SELECT * FROM apparel");

$apparel = query("SELECT * FROM apparel ORDER BY merk ASC");
if (isset($_POST['cari'])) {
  $apparel = cari($_POST['keyword']);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css/apparel.css">
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
        <input class="form-control mr-sm-2 keyword" type="text" name="keyword" size="30" autofocus placeholder="Masukan keyword yang anda cari" autocomplete="off" class="cari">
        <button type="submit" name="cari" class="btn btn-outline-success tombol-cari">Cari! </button>
      </form>
    </div>
  </nav>

  <h3 align="center">Daftar Local Apparel</h3>
  <div class="container bg-secondary mb-5">
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
            <div class="bungkus mr-2 mb-2">
              <div class="card-deck" style="width: 18rem; height: 24rem;">
                <div class="card bg-light kotak-apparel">
                  <div class="card-header justify-content-center">
                    <img class="justify-content-center" width="250px" height="250px" src="assets/img/<?= $a['display']; ?>" alt="">
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
  <footer class="bg-dark pb-3 justify-content-center text-center text-light">
    <h5 class="pt-2">2020 &copy; Copyright by <a href="" class="text-info">Sofyan Egi Lesmana - 193040025</a> </h5>
  </footer>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="js/script.js"></script>
</body>

</html>