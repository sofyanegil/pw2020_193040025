<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="image/png" href="assets/img/logo.png">
  <title>Entraight.co Store</title>

  <!-- css -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- font -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu:300i,800,700i&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light|Teko&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
</head>

<body class="mt-5 sm-12">
  <!-- navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark ">
    <div class="container">
      <a class="navbar-brand" href="apparel.php"> <img src="assets/img/logo.png" width="25" alt=""> Entraight.Co</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link active" href="#">
            <Entraight class="co"></Entraight> <span class="sr-only">(current)</span>
          </a>
          <a class="nav-item nav-link" href="php/admin.php"> <img src="assets/img/icon/admin.png" alt=""> Admin</a>
        </div>
      </div>
    </div>
  </nav>
  <!--akhir navbar  -->

  <!-- jumbotron -->
  <div class="jumbotron jumbotron-fluid text-center md scrollspy bg-light" id="#">
    <div class="container">
      <h1 class="display-4 "><span>Entraight.co</span> <br> Store<br>#BanggaBuatan <br> Indonesia<br>
      </h1>
      <a href="#local" class="btn btn-light">Check Now <img src="assets/img/icon/shop.png" alt=""> </a>
    </div>
  </div>
  <!-- akhir jumbotron -->
  <!-- isi -->
  <div class="container scrollspy  bg-secondary" id="local">
    <div class="row justify-content-center bg-secondary pt-5">
      <div class="bungkus mr-5">
        <div class="card-deck mb-5" style="width: 18rem;">
          <div class="card bg-light kotak-apparel">
            <div class="card-header justify-content-center">
              <img class="justify-content-center" width="250" src="assets/img/img1.png" alt="">
            </div>
            <div class="card-body">
              <a href="">
                <button class="btn btn-warning btn-block text-light text-center mr-auto ">
                  Reclays
                </button>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="bungkus mr-5">
        <div class="card-deck mb-5" style="width: 18rem;">
          <div class="card bg-light kotak-apparel">
            <div class="card-header justify-content-center">
              <img class="justify-content-center" width="250" src="assets/img/img7.png" alt="">
            </div>
            <div class="card-body">
              <a href="">
                <button class="btn btn-warning btn-block text-light text-center mr-auto ">
                  Pot Met Pops
                </button>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="bungkus">
        <div class="card-deck mb-5" style="width: 18rem;">
          <div class="card bg-light kotak-apparel">
            <div class="card-header justify-content-center">
              <img class="justify-content-center" width="250" src="assets/img/img5.png" alt="">
            </div>
            <div class="card-body">
              <a href="">
                <button class="btn btn-warning btn-block text-light text-center mr-auto ">
                  Tenue de Attire
                </button>
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="row justify-content-center mb-1 pb-1">
      <a href="apparel.php" class="btn btn-info" style="margin-top: -20px">Cek Semua Koleksi</a>
    </div>

  </div>
  <!-- footer -->
  <footer class="pt-3 pb-2">
    <div class="container text-center">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-sm-12">
          <p>&copy; 2020 Copyright<a href=""> Sofyan Egi Lesmana</a></p>
        </div>
      </div>
    </div>
  </footer>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="../assets/js/jquery-3.3.1.min.js"></script>
  <script src="..assets/js/popper.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
  <!--js materialize  -->
  <script src="../assets/js/materialize.min.js"></script>
  <script>
    const scroll = document.querySelectorAll('.scrollspy');
    M.ScrollSpy.init(scroll, {
      scrollOffset: 60
    });
    const materialbox = document.querySelectorAll('.materialboxed');
    M.Materialbox.init(materialbox);
  </script>

</body>

</html>