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
<h3>Form Registrasi Akun</h3>
<form action="" method="POST">
  <table>
    <tr>
      <td><label for="username">username</label></td>
      <td>:</td>
      <td><input type="text" name="username" autocomplete="off" autofocus required></td>
    </tr>
    <tr>
      <td><label for="password">password</label></td>
      <td>:</td>
      <td><input type="password" name="password" required></td>
    </tr>
  </table>
  <button type="submit" name="register">REGISTER</button>
</form>