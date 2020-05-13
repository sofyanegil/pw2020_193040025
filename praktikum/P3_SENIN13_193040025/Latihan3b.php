<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>
        .bungkus {
            border: 1px solid black;
            box-shadow: 1px 1px 1px black;
            font-family: arial;
            width: 80%;
            margin: auto;
        }
    </style>
    <title>Latihan 3b</title>
</head>

<body>
    <?php
    $jawabanIsset = "Isset adalah =  Isset() digunakan untuk menyatakan variabel sudah diset atau tidak. Jika variabel sudah diset makan variabel akan mengembalikan nilai true, sebaliknya akan bernilai false (memesan tempat di memori). ";
    $jawabanEmpty = "Empty adalah = Empty pada PHP berfungsi sebagai penanda suatu kondisi. Contohnya yang sering kita temukan adalah dalam pengisian suatu data.  ";
    $GLOBALS['Issets'] = $jawabanIsset;
    $GLOBALS['Empty'] = $jawabanEmpty;

    function tulisan($style)
    {
        echo "<div class='$style'><p>$GLOBALS[Issets]</p><p>$GLOBALS[Empty]</p></div>";
    }
    echo tulisan("bungkus")
    ?>
    <br>
    <a href="index.php" class="btn btn-danger text-light mt-3 ml-2">Kembali</a>
</body>

</html>