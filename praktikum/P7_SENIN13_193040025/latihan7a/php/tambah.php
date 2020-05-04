<?php
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
  <title>Tambah Data Entraigh.co Store</title>
</head>

<body>
  <table border="1" cellspacing="0" cellpadding="5">
    <form action="" method="post">

      <th colspan="3">
        <h3>Gudang Entraight.co Store</h3>
      </th>
      <tr>
        <td>
          <label for="display">Display</label>
        </td>
        <td>
          :
        </td>
        <td>
          <input type="text" name="display" id="display" required>
        </td>
      </tr>
      <tr>
        <td>
          <label for="merk">Merk</label>
        </td>
        <td>
          :
        </td>
        <td>
          <input type="text" name="merk" id="merk" required>
        </td>
      </tr>
      <tr>
        <td>
          <label for="nama_artikel">Nama Artikel</label>
        </td>
        <td>
          :
        </td>
        <td>
          <input type="text" name="nama_artikel" id="nama_artikel" required>
        </td>
      </tr>
      <tr>
        <td>
          <label for="size_guide">Size Guide</label>
        </td>
        <td>
          :
        </td>
        <td>
          <input type="text" name="size_guide" id="size_guide" required>
        </td>
      </tr>
      <tr>
        <td>
          <label for="harga">Harga</label>
        </td>
        <td>
          :
        </td>
        <td>
          <input type="number" name="harga" id="harga" required>
        </td>
      </tr>
      <tr>
        <td>
          <label for="stok">Stok</label>
        </td>
        <td>
          :
        </td>
        <td>
          <input type="number" name="stok" id="stok" required>
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <button type="submit" name="tambah">Tambah Data!</button>
          <button type="submit">
            <a href="../index.php" style="text-decoration: none; color: black;">Kembali</a>
          </button>
        </td>
      </tr>
    </form>
  </table>

</body>

</html>