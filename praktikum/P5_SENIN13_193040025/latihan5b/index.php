<?php
    // menghubungkan dengan file php lainnya
    require 'php/functions.php';

    // melakukan querry
    $apparel = query("SELECT * FROM apparel")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 5b</title>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="5" width="90%">
            <tr bgcolor="#88f7f2">
            <td><button><a href="index.php" style="text-decoration:none;">BACK</a></button></td>
                <th colspan="6" ><h1>Entraight.co Store</h1></th>
            </tr>
       <tr class="title_table">
            <th>NO</th>
            <th>DISPLAY</th>
            <th>MERK</th>
            <th>NAMA ARTIKEL</th>
            <th>SIZE GUIDE</th>
            <th>HARGA</th>
            <th>STOK</th>
       </tr>
       <?php $i=1?>
       <?php foreach ($apparel as $a) : ?>
       <tr>
            <td class="no"><?= $i ?></td>
            <td class="display"><img src="assets/img/<?= $a['display']; ?>"></td>
            <td class="merk"><?= $a["merk"]?></td>
            <td class="nama_artikel"><?= $a["nama_artikel"]?></td>
            <td class="size_guide"><img src="assets/img/<?= $a['size_guide']; ?>"></td>
            <td class="harga"><b><?= $a["harga"]?></b></td>
            <td class="stok"><b><?= $a["stok"]?></b></td>
        </tr>
        <?php $i++ ?>
       <?php endforeach; ?>
    </table>                                              
</body>
</html>