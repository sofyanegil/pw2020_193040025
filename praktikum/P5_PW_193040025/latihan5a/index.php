<?php
   //Melakukan koneksi ke database
   $conn = mysqli_connect("localhost", "root", "") or die("Koneksi ke DB gagal");
    //  Memilih database
    mysqli_select_db($conn, "tubes_193040025") or die("Database Salah!");  
    // query mengambil objek dari tabel dalam database
    $result = mysqli_query($conn, "SELECT * FROM apparel");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Latihan 5a</title>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="5" width="90%">
            <tr bgcolor="#88f7f2">
                <th colspan="7" ><h1>Entraight.co Store</h1></th>
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
       <?php while($row = mysqli_fetch_assoc($result)) : ?>
       <tr>
            <td class="no"><?= $i ?></td>
            <td class="display"><img src="assets/img/<?= $row['display']; ?>"></td>
            <td class="merk"><?= $row["merk"]?></td>
            <td class="nama_artikel"><?= $row["nama_artikel"]?></td>
            <td class="size_guide"><img src="assets/img/<?= $row['size_guide']; ?>"></td>
            <td class="harga"><b><?= $row["harga"]?></b></td>
            <td class="stok"><b><?= $row["stok"]?></b></td>
        </tr>
        <?php $i++ ?>
       <?php endwhile; ?>
    </table>                                              
</body>
</html>