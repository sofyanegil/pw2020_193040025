<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .lingkaran {
            height: 50px;
            width: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            border-radius: 50%;
            border: 2px solid black;
            float: left;
            margin: 5px;
        }

        .clear {
            clear: both;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Latihan 2c</title>
</head>

<body>

    <?php

    for ($i = 1; $i <= 3; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "<div class='lingkaran'>$i</div>";
        }
        echo "<div class=' clear'></div>";
    }


    ?>
    <br>
    <a href="index.php" class="btn btn-danger text-light mt-3 ml-2">Kembali</a>
</body>

</html>