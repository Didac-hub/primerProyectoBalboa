<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/full_estil.css">
    <script src="assets/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>

<?php require_once 'views/cabecera.php'?>
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="5000">
      <img src="img/inicio.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="5000">
      <img src="img/inicio2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="5000">
      <img src="img/inicio3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="margenes">
<div class="container-xxl row ms-3 mt-5">
  <div class="col-6 col-sm-6 mt-2">
      <img src="img\nach.jpg" width="650px" height="410px">
  </div>

  <div class="col-6 align-self-center">
      <img src="img\burgir.jpg" width="654px" height="436.36px">
  </div>

  
</div>
</div>

<div class="fondoOferta" width="1920px" height="600px">
<div class="row">
  <div class="col-3"></div>
    <div class="cajaOferta col-4 align-self-center" width="564px" height="436.36px">
      <h3 class="titOferta"> OFERTAS DE LA SEMANA </h3>
      <p class="text"> ¡En nuestros locales ofrecemos a todos nuestros clientes <br>
        ofertas semanales para que podáis venir a disfrutarlas solos o <br>
        en grupo! <br><br>
        ¡Con cuanta más gente vengas mejor sera el rato que paseis! </p>
      <div class="btOfer text-center" width="100%">
        <button class="botonOfer"> VER OFERTAS </button>
        </div>
    </div>

    <div class="fotoOferta col-2 align-self-cente" width="564px" height="436.36px">
        <img src="img\arit.jpg" width="564px" height="436.36px">
    </div>

    </div>

</div>
</body>
</html>

<?php
require_once 'views/footer.php';
?>