<?php
$apparel = [
    "Mohammad Salah",
    "Cristiano Ronaldo",
    "Lionel Messi",
    "Zlatan Ibrahimovic",
    "Neymar Jr"
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Latihan 4b</title>
</head>

<body style="font-family:arial;">
    <table style="border: 1px solid black;
                    margin: auto;
                    font-size : 20px;
                    padding : 5px 20px 20px;">
        <tr>
            <td>
                <?php
                echo "<p><b>Daftar pemain bola terkenal</b></p>";
                echo "<ol>";
                foreach ($apparel as $p) :
                    echo "<li>$p</li>";
                endforeach;
                array_push($apparel, "Luca Modric", "Sadio Mane");
                sort($apparel);
                echo "</ol>";
                echo "<p><b>Daftar pemain bola terkenal baru</b></p>";
                echo "<ol>";
                foreach ($apparel as $p) :
                    echo "<li>$p</li>";
                endforeach;
                echo "</ol>";
                ?>
            </td>
        </tr>
    </table>
    <a href="index.php" class="btn btn-danger text-light mt-3 ml-2">Kembali</a>
</body>

</html>