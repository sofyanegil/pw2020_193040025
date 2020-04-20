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
    <title>Latihan 6c</title>
</head>

<body>
    <a href="php/admin.php"><button>Admin</button></a>

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
</body>

</html>