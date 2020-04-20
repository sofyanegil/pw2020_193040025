<?php
// menghubungkan dengan file php lainnya
require 'functions.php';

// melalukan query
$apparel = query("SELECT * FROM apparel ORDER BY merk ASC");

if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $apparel = query(
    "SELECT * FROM apparel WHERE
        display LIKE '%$keyword%' OR
        merk LIKE '%$keyword%' OR
        nama_artikel LIKE '%$keyword%' OR
        size_guide LIKE '%$keyword%' OR
        harga LIKE '%$keyword%' OR
        stok LIKE '%$keyword%' 
        "
  );
} else {
  $apparel = query("SELECT * FROM apparel");
}
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
  <div class="add">
    <a href="tambah.php" class="tambah">Tambah Data</a>
  </div>
  <br>
  <form action="" method="get">
    <input type="text" name="keyword" size="30" autofocus placeholder="Masukan keyword yang anda cari" autocomplete="off">
    <button type="submit" name="cari">Cari!</button>
  </form>
  <br>
  <a href="../index.php"><button>Kembali ke INDEX</button></a>
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
            <a class="ubah" href="ubah.php?id=<?= $a['id'] ?>"><button>Ubah</button></a>
            <a href=" hapus.php?id=<?= $a['id'] ?>" onclick="return confirm('Hapus Data??')" class="hapus"><button>Hapus</button></a>
          </td>
          <td class="display"><img src="../assets/img/<?= $a['display']; ?>"></td>
          <td class="merk"><?= $a["merk"] ?></td>
          <td class="nama_artikel"><?= $a["nama_artikel"] ?></td>
          <td class="size_guide"><img src="../assets/img/<?= $a['size_guide']; ?>"></td>
          <td class="harga"><b>Rp. <?= $a["harga"] ?></b></td>
          <td class="stok"><b><?= $a["stok"] ?></b></td>
        </tr>
        <?php $i++ ?>
      <?php endforeach; ?>
    <?php endif; ?>
  </table>
</body>

</html>