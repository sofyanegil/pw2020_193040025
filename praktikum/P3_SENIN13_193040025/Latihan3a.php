<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>
        .tulisan {
            font-family: arial;
            font-size: 28px;
            color: #8c782d;
            text-align: center;
            font-weight: bold;
            font-style: italic;

        }

        .bungkus {
            border: 1px solid black;
            box-shadow: 1px 1px 10px grey;
            width: 50%;
            margin: auto;
        }
    </style>
    <title>Latihan 3a</title>
</head>

<body>
    <?php

    function gantiStyle($tulisan, $style1, $style2)
    {
        echo "<div class='$style1'> <p class='$style2'>$tulisan</p></div>";
    }

    echo gantiStyle("Selamat datang di praktikum PW 2020", "tulisan", "bungkus");

    ?>
    <br>
    <a href="index.php" class="btn btn-danger text-light mt-3 ml-2">Kembali</a>
</body>

</html>