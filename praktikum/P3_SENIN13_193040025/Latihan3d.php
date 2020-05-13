<?php
function hitungDeterminan($a, $b, $c, $d)
{
    // baris code perhitungan determinan
    $determinan = (($a * $d) - ($b * $c));

    // menampilkan matriks
    echo "<table style = 'border-left: 1px solid black; border-right: 1px solid black;' cellspacing='5' cellpadding='5'>
            <tr>
                <td>$a</td>
                <td>$b</td>
            </tr>
            <tr>
                <td>$c</td>
                <td>$d</td>
            </tr>
            </table>";
    // menampilkan teks dibawah matriks
    echo " <b>Determinan dari matriks tersebut adalah $determinan </b>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>
        .bungkus {
            border: 1px solid black;
            width: 50%;
            margin: auto;
            padding: 5px;
        }
    </style>
    <title>Latihan 3d</title>
</head>

<body>

    <div class="bungkus">
        <?php hitungDeterminan(1, 2, 3, 4) ?>
        <!--Memanggil function hitungDeterminan -->
    </div>
    <br>
    <a href="index.php" class="btn btn-danger text-light mt-3 ml-2">Kembali</a>
</body>

</html>