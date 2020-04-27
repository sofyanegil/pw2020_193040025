<?php
// menghubungkan dengan file php lainnya
require 'functions.php';

// melalukan query
$apparel = query("SELECT * FROM apparel");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="../css/admin.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Admin page</title>
</head>

<body>
  <table border="1" cellspacing="0" cellpadding="5">
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
    <?php $i = 1 ?>
    <?php foreach ($apparel as $a) : ?>
      <tr>
        <td class="no"><?= $i ?></td>
        <td class="opsi">
          <a href="" class="ubah"><button>Ubah</button></a>
          <a href="" class="hapus"><button>Hapus</button></a>
        </td>
        <td class="display"><img src="../assets/img/<?= $a['display']; ?>"></td>
        <td class="merk"><?= $a["merk"] ?></td>
        <td class="nama_artikel"><?= $a["nama_artikel"] ?></td>
        <td class="size_guide"><img src="../assets/img/<?= $a['size_guide']; ?>"></td>
        <td class="harga"><b>Rp. <?= $a["harga"] ?></b></td>
        <td class="stok"><b><?= $a["stok"] ?>Pcs</b></td>
      </tr>
      <?php $i++ ?>
    <?php endforeach; ?>
  </table>
</body>

</html>