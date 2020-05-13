<?php
// mengecek apakah ada id yang dikirimkan
// jika tidak maka akan dikembalikan kehalaman index.php
if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

require 'functions.php';

// mengambil id dari url
$id = $_GET['id'];

// melakukan query dengan parameter id yang diambil dari url
$apparel = query("SELECT * FROM apparel WHERE id = $id")[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 5c</title>
</head>

<body>
    <div class="container">
        <div class="bg_display">
            <img src="../assets/img/<?= $apparel['display']; ?>" alt="">
        </div>
        <div class="keterangan">
            <p class="merk"><?= $apparel['merk']; ?></p>
            <p class="nama_artikel"><?= $apparel['nama_artikel']; ?></p>
            <p class="harga"><?= $apparel['harga']; ?></p>
            <p class="stok"><?= $apparel['stok']; ?> pcs</p>
            <div class="bg_size_guide">
                <p class="size_guide"><?= $apparel['size']; ?></p>
            </div>
        </div>

        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
</body>

</html>