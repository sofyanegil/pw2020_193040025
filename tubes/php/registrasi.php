<?php
require 'functions.php';

if (isset($_POST['register'])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
              alert('Registrasi Berhasil');
              docucment.location.href = 'login.php';
          </script>";
  } else {
    echo "<script>
              alert('Registrasi Gagal');
          </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    .bungkus {
      margin: auto;
    }
  </style>
  <title>Registrasi</title>
</head>

<body class="mt-5 bg-info">
  <form action="" method="POST">
    <div class="container bg-info">
      <div class="row">
        <div class="card bungkus">
          <div class="bungkus">
            <div class="card-deck justify-content-center" style="width: 24rem;;">
              <div class="card bg-light ">
                <div class="card-header justify-content-center">
                  <h1 align="center"> <img src="../assets/img/icon/regis.png" alt="" width="60"> <br> Registrasi</h1>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <span> <img src="../assets/img/icon/login.png" alt=""></span>
                    <label for="exampleFormControlInput1">Username</label>
                    <input type="text" name="username" autocomplete="off" required autofocus class="form-control" placeholder="username">
                  </div>
                  <div class="form-group">
                    <span> <img src="../assets/img/icon/pw.png" alt=""></span>
                    <label for="exampleFormControlInput1">Password</label>
                    <input type="password" name="password" required class="form-control" placeholder="password">
                  </div>
                  <button type="submit" name="register" class="btn btn-warning">Registrasi</button>
                  <div class="registrasi form-group">
                    <p>Sudah punya akun ? Login <a href="login.php" class="btn btn-info"> Disini</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
  </form>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
</body>

</html>