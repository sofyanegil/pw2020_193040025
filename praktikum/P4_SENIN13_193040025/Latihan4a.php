<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Latihan 4a</title>
</head>

<body style="font-family:arial;">
    <table style="border: 1px solid black;
                  margin: auto;
                  font-size : 20px;
                  padding : 5px 20px 20px;">
        <tr>
            <td>
                <?php
                $kata = ["ada", "abel", "men", "pung", "nilai"];
                echo "Array $kata[0]lah suatu vari$kata[1] yang dapat $kata[2]am$kata[3] banyak $kata[4]";
                ?>
            </td>
        </tr>
    </table>
    <form>
        <br>
        <a href="index.php" class="btn btn-danger text-light mt-3 ml-2">Kembali</a>
    </form>
</body>

</html>