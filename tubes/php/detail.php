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
    <link rel="stylesheet" href="../css/detdail.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
</head>

<body class="mt-5">
    <div class="container bg-light text-center">
        <h3>Detail Produk</h3>
        <div class="row ">
            <div class="col-6">
                <div class="container">
                    <img src="../assets/img/<?= $apparel['display']; ?>" width="300px" alt="">
                </div>

            </div>
            <div class="col-6">
                <ul class="list-group">
                    <li class="list-group-item active"><?= $apparel['merk']; ?></li>
                    <li class="list-group-item"><?= $apparel['nama_artikel']; ?></li>
                    <li class="list-group-item">Rp.<?= $apparel['harga']; ?></li>
                    <li class="list-group-item"><?= $apparel['size']; ?></li>
                    <li class="list-group-item"><?= $apparel['stok']; ?> Pcs</li>
                </ul>
            </div>
        </div>
        <a href="../index.php" class="btn btn-danger">Kembali</a>
    </div>
</body>

</html>