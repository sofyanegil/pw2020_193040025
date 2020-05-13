<?php
require 'functions.php';

$id = $_GET['id'];
$apparel = query("SELECT * FROM apparel WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('Data Berhasil diubah!');
            document.location.href='admin.php';
          </script>";
  } else {
    echo "<script>
    alert('Data Gagal diubah!');
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
  <title>Ubah Data Entraigh.co Store</title>
</head>

<body>
  <table border="1" cellspacing="0" cellpadding="5">
    <form action="" method="post">

      <th colspan="3">
        <h3>Ubah Gudang Entraight.co Store</h3>
      </th>
      <input type="hidden" name="id" id="id" reuquired value="<?= $apparel['id']; ?>">
      <tr>
        <td>
          <label for="display">Display</label>
        </td>
        <td>
          :
        </td>
        <td>
          <input type="text" name="display" id="display" required value="<?= $apparel['display']; ?>">
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
          <input type="text" name="merk" id="merk" required value="<?= $apparel['merk']; ?>">
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
          <input type="text" name="nama_artikel" id="nama_artikel" required value="<?= $apparel['nama_artikel']; ?>">
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
          <input type="text" name="size_guide" id="size_guide" required value="<?= $apparel['size']; ?>">
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
          <input type="number" name="harga" id="harga" required value="<?= $apparel['harga']; ?>">
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
          <input type="number" name="stok" id="stok" required value="<?= $apparel['stok']; ?>">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <button type="submit" name="ubah">Ubah Data!</button>
          <button type="submit">
            <a href="../index.php" style="text-decoration: none; color: black;">Kembali</a>
          </button>
        </td>
      </tr>
    </form>
  </table>

</body>

</html>