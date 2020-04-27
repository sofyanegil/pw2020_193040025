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
    <link rel="stylesheet" href="../css/detail.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 5c</title>
</head>

<body>
    <div class="container">
        <table border="1" width="80%" cellpadding="5" cellspacing='0'>
            <tr>
                <td rowspan="4">
                    <div class="bg_display">
                        <img src="../assets/img/<?= $apparel['display']; ?>" alt="">
                    </div>
                </td>
                <td class="merk">
                    <p><?= $apparel['merk']; ?></p>
                </td>
                <td rowspan="4">
                    <div class="bg_size_guide">
                        <img src="../assets/img/<?= $apparel['size_guide']; ?>" alt="">
                    </div>
                </td>
            </tr>
            <tr>
                <td class="nama_artikel">
                    <p><?= $apparel['nama_artikel']; ?></p>
                </td>
            </tr>
            <tr>
                <td class="harga">
                    <p>Rp. <?= $apparel['harga']; ?></p>
                </td>
            </tr>
            <tr>
                <td class="stok">
                    <p><?= $apparel['stok']; ?> Pcs</p>
                </td>
            </tr>
            <tr>
                <td colspan="4" align="center">
                    <a href="../index.php"><button>Kembali</button></a>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>