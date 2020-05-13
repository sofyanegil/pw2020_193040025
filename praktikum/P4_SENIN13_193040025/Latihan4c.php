<?php
$apparel = [
    "Mohammad Salah" => "Liverpool",
    "Cristiano Ronaldo" => "Juventus",
    "Lionel Messi" => "Barcelona",
    "Zlatan Ibrahimovic" => "Ac Milan",
    "Neymar Jr" => "Paris Saint Germain",
    "Luca Modric" => "Real Madrid",
    "Sadio Mane" => "Liverpool"
];
ksort($apparel);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Latihan 4c</title>
</head>

<body style="font-family:arial;">
    <table style="border: 1px solid black;
                  margin: auto;
                  font-size : 20px;
                  padding : 5px 20px 20px;">
        <tr>
            <td colspan="3"><b>Daftar pemain bola terkenal dan clubnya</b><br><br></td>
        </tr>
        <?php
        foreach ($apparel as $display => $klub) :
        ?>
            <tr>
                <td> <?php echo "<b>$display</b>" ?></td>
                <td><?php echo ":" ?></td>
                <td><?php echo "$klub" ?></td>
            <?php endforeach ?>
            </tr>
    </table>
    <a href="index.php" class="btn btn-danger text-light mt-3 ml-2">Kembali</a>
</body>

</html>