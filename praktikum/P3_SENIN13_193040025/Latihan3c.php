<?php
function tumpukanBola($tumpukan)
{
    for ($baris = 0; $baris <= $tumpukan; $baris++) {
        for ($kolom = 1; $kolom <= $baris; $kolom++) {
            echo  "<div class='bola'>$baris</div>";
        }
        echo "<div class='clear'></div>";
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>
        .bola {
            text-align: center;
            color: black;
            border: 1px solid black;
            border-radius: 50%;
            background-color: salmon;
            width: 100px;
            height: 100px;
            line-height: 100px;
            float: left;
            margin: 5px;
        }

        .clear {
            clear: both;
        }

        .bungkus {
            border: 1px solid black;
        }
    </style>
    <title>Latihan 3c</title>
</head>

<body>
    <a href="index.php" class="btn btn-danger text-light mt-3 ml-2">Kembali</a>

    <?php echo tumpukanBola(5); ?>

</body>

</html>