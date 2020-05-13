<?php
$apparel = [
    [
        "display" => "Mohammad Salah",
        "merk" => "Liverpool",
        "nama" => "90",
        "size" => "103",
        "harga" => "8"
    ],
    [
        "display" => "Cristiano Ronaldo",
        "merk" => "Juventus",
        "nama" => "100",
        "size" => "76",
        "harga" => "30"
    ],
    [
        "display" => "Lionel Messi",
        "merk" => "Barcelona",
        "nama" => "120",
        "size" => "80",
        "harga" => "12"
    ],
    [
        "display" => "Zlatan Ibrahimovic",
        "merk" => "Ac Milan",
        "nama" => "100",
        "size" => "10",
        "harga" => "12"
    ],
    [
        "display" => "Neymar Jr",
        "merk" => "Paris Saint Germain",
        "nama" => "109",
        "size" => "56",
        "harga" => "15"
    ],
    [
        "display" => "Luca Modric",
        "merk" => "Real Madrid",
        "nama" => "87",
        "size" => "12",
        "harga" => "48"
    ],
    [
        "display" => "Sadio Mane",
        "merk" => "Liverpool",
        "nama" => "63",
        "size" => "30",
        "harga" => "70"
    ],
];
sort($apparel);
$no = 1;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Latihan 4d</title>
</head>

<body style="font-family:arial;">
    <table style="margin: auto;
                  font-size : 20px;" border="1" cellspacing="0" cellpadding="5">
        <tr align="left">
            <th>NO</th>
            <th>NAMA</th>
            <th>CLUB</th>
            <th>MAIN</th>
            <th>GOL</th>
            <th>ASSIST</th>
        </tr>
        <tr>
            <?php foreach ($apparel as $p) : ?>
                <td><?php echo $no++ ?></td>
                <td><?php echo $p["display"] ?></td>
                <td><?php echo $p["merk"] ?></td>
                <td><?php echo $p["nama"] ?></td>
                <td><?php echo $p["size"] ?></td>
                <td><?php echo $p["harga"] ?></td>
        </tr>
    <?php endforeach ?>
    <tr>
        <td>#</td>
        <td colspan="2" align="center"><b>Jumlah</b></td>
        <?php
        $nama = 0;
        foreach ($apparel as $p) {
            $nama += $p["nama"];
        }
        ?>
        <td> <?php echo $nama ?></td>
        <?php
        $size = 0;
        foreach ($apparel as $p) {
            $size += $p["size"];
        }
        ?>
        <td> <?php echo $size ?></td>
        <?php
        $harga = 0;
        foreach ($apparel as $p) {
            $harga += $p["harga"];
        }
        ?>
        <td> <?php echo $harga ?></td>
    </tr>
    </table>
    <br>
    <a href="index.php" class="btn btn-danger text-light mt-3 ml-2">Kembali</a>
</body>

</html>