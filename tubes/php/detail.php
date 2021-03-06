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
$apparel = query("SELECT * FROM apparel WHERE id = $id");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/png" href="../assets/img/logo.png">
    <link rel="stylesheet" href="../css/detdail.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail <?= $apparel['nama_artikel']; ?></title>
</head>

<body class="mt-5">
    <div class="container bg-light text-center px-lg-5">
        <h3>Detail <?= $apparel['nama_artikel']; ?></h3>
        <div class="row mx-lg-n5">
            <div class=" col py-3 px-lg-5 border bg-light">
                <div class="container">
                    <img src="../assets/img/<?= $apparel['display']; ?>" width="300px" alt="">
                </div>

            </div>
            <div class="col py-3 px-lg-5 border bg-light">
                <ul class="list-group mt-5">
                    <li class="list-group-item active"><?= $apparel['merk']; ?></li>
                    <li class="list-group-item"><?= $apparel['nama_artikel']; ?></li>
                    <li class="list-group-item">Rp.<?= $apparel['harga']; ?></li>
                    <li class="list-group-item"><?= $apparel['size']; ?></li>
                    <li class="list-group-item"><?= $apparel['stok']; ?> Pcs</li>
                    <li class="list-group-item"><a href="#" class="btn btn-outline-info">Beli <img src="../assets/img/icon/shop.png" alt=""></a></li>
                </ul>
            </div>
        </div>
        <a href="../apparel.php" class="btn btn-danger">Kembali</a>
    </div>

</body>

</html>