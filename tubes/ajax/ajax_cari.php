<?php
require '../php/functions.php';
$apparel = cari($_GET['keyword']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- css -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <!-- font -->
  <title>Document</title>
</head>

<body>

  <div class="row justify-content-center pb-2">
    <?php if (empty($apparel)) : ?>
      
        <div class="bungkus bg-light">
         <div class="container pb-5 pt-5 mb-5 mt-5 bg-light">
            <div class="card kotak-apparel pb-4 pt-4 mb-5 mt-5">
              <h1 align="center" style="color: red; ">Hasil untuk:  <b><?= $_GET['keyword']; ?></b> tidak ditemukan</h1>
            </div>
          </div>
        </div>
        </div>
      <?php else : ?>
        <?php foreach ($apparel as $a) : ?>
          <div class="bungkus">
            <div class="card-deck" style="width: 18rem; height: 24rem;">
              <div class="card bg-light kotak-apparel">
                <div class="card-header justify-content-center">
                  <img class="justify-content-center" src="assets/img/<?= $a['display']; ?>" alt="">
                </div>
                <div class="card-body">
                  <a href="php/detail.php?id=<?= $a['id'] ?>">
                    <button class="btn btn-warning btn-block text-light text-center mr-auto ">
                      <?= $a['merk']; ?> <br>
                    </button>
                  </a>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
      </div>
  </div>
</body>

</html>