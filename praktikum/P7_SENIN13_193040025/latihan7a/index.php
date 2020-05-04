<?php
// menghubungkan dengan file php lainnya
require 'php/functions.php';
// melakukan querry
$apparel = query("SELECT * FROM apparel");

if (isset($_POST['cari'])) {
    $keyword = $_POST['keyword'];
    $apparel = query(
        "SELECT * FROM apparel WHERE
          nama_artikel LIKE '%$keyword%' "
    );
} else {
    $apparel = query("SELECT * FROM apparel");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entraight.co Store</title>
</head>

<body>
    <a href="php/login.php">
        <button class="admin">Masuk ke halaman admin</button>
    </a>
    <div class="container">
        <h1>Entraight Store.co
            <form action="" method="POST" class="cari">
                <input type="text" name="keyword" size="30" autofocus placeholder="Masukan keyword yang anda cari" autocomplete="off" class="cari">
                <button type="submit" name="cari">Cari!</button>
            </form>
        </h1>

        <table border="1" width="100%">
            <?php if (empty($apparel)) : ?>
                <tr>
                    <td colspan="2">
                        <p>Data tidak ditemukan</p>
                    </td>
                </tr>

            <?php else : ?>
                <?php foreach ($apparel as $a) : ?>
                    <tr>
                        <td>
                            <a href="php/detail.php?id=<?= $a['id'] ?>">
                                <img src="assets/img/<?= $a['display']; ?>" alt="">
                            </a>
                            <p class="nama_artikel">
                                <?= $a['nama_artikel'] ?>
                            </p>

                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </table>


    </div>
</body>

</html>