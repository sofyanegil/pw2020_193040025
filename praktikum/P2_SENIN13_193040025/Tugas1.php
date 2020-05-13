<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        .kotak1 {
            height: 50px;
            width: 50px;
            background-color: skyblue;
            text-align: center;
            line-height: 50px;
            border: 2px solid black;
            float: left;
            margin: 1px;
        }

        .kotak2 {
            height: 50px;
            width: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            border: 2px solid black;
            float: left;
            margin: 1px;
        }

        .clear {
            clear: both;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1</title>
</head>

<body>

    <?php
    // menggunakan pengulangan dan pengkondisian untuk pewarnaan tiap kotak agar warnanya berbeda 
    for ($baris = 1; $baris <= 6; $baris++) {
        for ($kolom = 1; $kolom <= 6; $kolom++) {
            if (($baris % 2 == 0 && $kolom % 2 == 0) || ($baris % 2 == 1 && $kolom % 2 == 1)) {
                echo "<div class='kotak1'></div>";
            } else echo "<div class='kotak2'></div>";
        }
        echo "<div class=' clear'></div>";
    }
    ?>
    <br>
    <a href="index.php" class="btn btn-danger text-light mt-3 ml-2">Kembali</a>

</body>

</html>