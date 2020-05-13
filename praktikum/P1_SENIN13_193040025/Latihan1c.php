<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        .kotak {
            height: 100px;
            width: 100px;
            background-color: salmon;
            border-style: solid;
            border-radius: 50%;
            text-align: center;
            line-height: 100px;
            margin: 10px;
            float: left;
        }

        .clear {
            clear: both;
        }
    </style>
    <title>Latihan 1c</title>
</head>

<body>
    <?php
    $a = "A";
    $b = "B";
    $c = "C";
    echo "<div class='kotak'>$a</div>";
    echo "<div class='clear'></div>";

    echo "<div class='kotak'>$b</div>";
    echo "<div class='kotak'>$b</div>";
    echo "<div class='clear'></div>";

    echo "<div class='kotak'>$c</div>";
    echo "<div class='kotak'>$c</div>";
    echo "<div class='kotak'>$c</div>";
    echo "<div class='clear'></div>";
    ?>
    <br>
    <a href="index.php" class="btn btn-danger text-light mt-3 ml-2">Kembali</a>
</body>

</html>