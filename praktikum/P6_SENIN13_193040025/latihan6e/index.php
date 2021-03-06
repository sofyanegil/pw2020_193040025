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
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        body {
            min-height: 500px;
        }

        .container {
            width: 40%;
            margin: 100px auto 150px;
            background-color: #dfe8e7;
            text-align: center;
        }

        h1 {
            background-color: #8cffee;
            margin: 0 auto;
            border-bottom: 2px solid red;
        }

        .container p a {
            background-color: #ffe08c;
            color: red;
            font-size: 25px;
            text-decoration: none;
            padding: auto;
            border-bottom: 1px solid black;
        }

        .container p a:hover {
            color: black;
            font-size: 26px;
            background-color: white;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 5c</title>
</head>

<body>
    <form action="" method="POST">
        <input type="text" name="keyword" size="30" autofocus placeholder="Masukan keyword yang anda cari" autocomplete="off">
        <button type="submit" name="cari">Cari!</button>
    </form>
    <div class="container">
        <h1>Entraight Store.co</h1>

        <?php if (empty($apparel)) : ?>
            <h1>Data tidak ditemukan</h1>
        <?php else : ?>
            <?php foreach ($apparel as $a) : ?>
                <p>
                    <a href="php/detail.php?id=<?= $a['id'] ?>">
                        <?= $a['nama_artikel'] ?>
                    </a>
                </p>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</body>

</html>