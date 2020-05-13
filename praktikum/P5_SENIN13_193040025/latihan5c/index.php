<?php
// menghubungkan dengan file php lainnya
require 'php/functions.php';

// melakukan querry
$apparel = query("SELECT * FROM apparel")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
    <div class="container">
        <h1>Entraight Store.co</h1>
        <?php foreach ($apparel as $a) : ?>
            <p>
                <a href="php/detail.php?id=<?= $a['id'] ?>">
                    <?= $a['nama_artikel'] ?>
                </a>
            </p>

        <?php endforeach; ?>
    </div>
    <a href="../index.php" class="btn btn-danger text-light mt-3 ml-2">Kembali</a>
</body>

</html>