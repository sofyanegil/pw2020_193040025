<?php
session_start();
require 'functions.php';
// cek cookie
if (isset($_COOKIE['usename']) && isset($_COOKIE['hash'])) {
  $username = $_COOKIE['username'];
  $hash = $_COOKIE['hash'];

  // ambil username berdasarkan id
  $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username' ");
  $row = mysqli_fetch_assoc($result);

  // cek cookie dan username
  if ($hash === hash('sha256', $row['id'], false)) {
    $_SESSION['username'] = $row['username'];
    header("Location: admin.php");
    exit;
  }
}
// melakukan pengecekan apakah user sudah melakukan login jika sudah redirect ke halaman admin
if (isset($_SESSION['username'])) {
  header("Location: admin.php");
  exit;
}

// Login
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username' ");
  // mencocokan USERNAME dan PASSWORD
  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = hash('sha256', $row['id'], false);
      // jika remember me dicentang
      if (isset($_POST['remember'])) {
        setcookie('username', $row['username'], time() + 60 * 60 * 24);
        $hash = hash('sha256', $row['id']);
        setcookie('hash', $hash, time() + 60 * 60 * 24);
      }

      if (hash('sha256', $row['id']) == $_SESSION['hash']) {
        header("Location: admin.php");
        die;
      }
      header("Location: ../index.php");
      die;
    }
  }
  $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    .bungkus {
      margin: auto;
    }
  </style>
  <title>Login</title>
</head>

<body class="mt-5 bg-success">
  <form action="" method="POST">
    <div class="container bg-success">
      <div class="row">
        <div class="card bungkus">

          <?php if (isset($error)) : ?>
            <div class="alert alert-danger mb-0 text-center" role="alert">
              Username atau Password salah
            </div>
          <?php endif; ?>
          <div class="bungkus">
            <div class="card-deck justify-content-center" style="width: 24rem;;">
              <div class="card bg-light ">
                <div class="card-header justify-content-center">
                  <h1 align="center"> <img src="../assets/img/icon/login.png" alt="" width="60"> <br> Login</h1>
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
                  <div class="remember form-group">
                    <input type="checkbox" name="remember">
                    <label for="remember"> Remember me</label>
                  </div>
                  <button type="submit" name="submit" class="btn btn-success">Login</button>
                  <div class="registrasi form-group">
                    <p>Belum punya akun ? Registrasi <a href="registrasi.php" class="btn btn-info">Disini</a></p>
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