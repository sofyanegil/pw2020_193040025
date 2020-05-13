<?php
$apparel = [
    [
        "merk" => "Reclays",
        "display" => "img1.png",
        "nama" => "SAVE THE HUMAN – BLACK",
        "size" => "sg1.jpg",
        "harga" => "Rp. 135.000,00"
    ],
    [
        "merk" => "Rsch",
        "display" => "img2.png",
        "nama" => "SDT 86 SOFT GRAY",
        "size" => "sg2.jpg",
        "harga" => "Rp. 210.000,00"
    ],
    [
        "merk" => "Billionaires Project",
        "display" => "img3.png",
        "nama" => "EXPERIMENT 8.0 - SNEAKER TALES",
        "size" => "sg3.jfif",
        "harga" => "Rp. 375.000,00"
    ],
    [
        "merk" => "United Hart",
        "display" => "img4.png",
        "nama" => "EARTH",
        "size" => "sg4.jpg",
        "harga" => "Rp. 449.000,00"
    ],
    [
        "merk" => "Tenue de Attire",
        "display" => "img5.png",
        "nama" => "HOMME LIBRE",
        "size" => "sg5.jpg",
        "harga" => "Rp. 449.000,00"
    ],
    [
        "merk" => "Kamengski Stuff",
        "display" => "img6.png",
        "nama" => "KASUR SHIRT",
        "size" => "sg6.jpg",
        "harga" => "Rp. 280.000,00"
    ],
    [
        "merk" => "Pot Meets Pop",
        "display" => "img7.png",
        "nama" => "PIPES WASHED BLUE",
        "size" => "sg7.jpg",
        "harga" => "Rp. 560.000,00"
    ],
    [
        "merk" => "Old Blue Co",
        "display" => "img8.png",
        "nama" => "18 OZ OVER-SLUB SELVEDGE ATLANTIC",
        "size" => "sg8.jpg",
        "harga" => "Rp. 1.850.000,00"
    ],
    [
        "merk" => "Reclays",
        "display" => "img9.png",
        "nama" => "TORNESS CHINOS – GREY",
        "size" => "sg9.jpg",
        "harga" => "Rp. 295.000,00"
    ],
    [
        "merk" => "Moskav",
        "display" => "img10.png",
        "nama" => "ROVER GREEN CARGO PANT",
        "size" => "sg10.jpg",
        "harga" => "Rp. 255.000,00"
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
    <style>
        img {
            filter: grayscale(100%);
            opacity: 50%;
        }

        img:hover {
            filter: saturate(150%);
            opacity: 100%;
        }
    </style>
    <title>Tugas 2</title>
</head>

<body style="font-family:arial;
            background:linear-gradient(to right bottom, khaki, #8081ff, #a6ffb8, #dfff29);">
    <table style="margin: auto;
                  font-size : 20px;
                  text-align: center;
                  border : 5px dashed black;" border="1" cellspacing="0" cellpadding="5" width="90%">
        <tr bgcolor="#88f7f2">
            <td> <a href="index.php" class="btn btn-danger text-light mt-3 ml-2">Kembali</a>
            </td>
            <th colspan="5">
                <h1>Entraight.co Store</h1>
            </th>
        </tr>
        <tr bgcolor="#ace8bc">
            <th>NO</th>
            <th>DISPLAY</th>
            <th>MERK</th>
            <th>NAMA ARTIKEL</th>
            <th>SIZE GUIDE</th>
            <th>HARGA</th>
        </tr>
        <tr>
            <?php foreach ($apparel as $p) : ?>
                <td bgcolor="#ddf59a"><?php echo $no++ ?></td>
                <td bgcolor="#ffe1b0"><img src="img/<?= $p['display']; ?>" style="width: 350px;height:350px;"></td>
                <td bgcolor="#fcbfa9" style="color:#ffffff;font-weight:bold;"><?php echo $p["merk"] ?></td>
                <td bgcolor="#fac5e6" style="color:#946500;"><?php echo $p["nama"] ?></td>
                <td bgcolor="#ffffff"><img src="img/<?= $p['size']; ?>" style="width: 250px;height:250px;"></td>
                <td bgcolor="#f5f387" style="color:red;"><b><?php echo $p["harga"] ?></b></td>
        </tr>
    <?php endforeach ?>
    </table>
    <br>

</body>

</html>