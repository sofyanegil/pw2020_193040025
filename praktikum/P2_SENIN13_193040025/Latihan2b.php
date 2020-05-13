<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Latihan 2b</title>
</head>

<body>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th></th>
            <?php for ($i = 1; $i <= 5; $i++) : ?>
                <th>Kolom <?= $i; ?></th>
            <?php endfor; ?>
        </tr>

        <?php for ($j = 1; $j <= 5; $j++) : ?>
            <tr>
                <th>
                    Baris <?= $j; ?>
                </th>

                <?php for ($k = 1; $k <= 5; $k++) : ?>
                    <td>
                        Baris <?= $j; ?>,Kolom <?= $k; ?>
                    </td>
                <?php endfor; ?>

            </tr>
        <?php endfor; ?>
    </table>
    <br>
    <a href="index.php" class="btn btn-danger text-light mt-3 ml-2">Kembali</a>
</body>

</html>