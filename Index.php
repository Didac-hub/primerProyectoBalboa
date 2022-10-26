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

<?php include 'views/cabecera.php'?>
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
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

<div class="entr" width="654px" height="436.36px">
    <img src="nachosInicio.png" width="654px" height="436.36px">
</div>

<div class="burgir" width="654px" height="436.36px">
    <img src="burgirInicio" width="654px" height="436.36px">
</div>

<div class="burgir" width="654px" height="436.77px">
    <img src="postreInicio" width="654px" height="436.77px">
</div>

<div class="burgir" width="654.64px" height="436.77px">
    <img src="bebidaInicio" width="654.64px" height="436.77px">
</div>

<div class="fondoOferta" width="1920px" height="521px">

    <div class="textOferta" width="564px" height="436.36px">
      <h3> OFERTAS DE LA SEMANA </h3>
      <p> ¡En nuestros locales ofrecemos a todos nuestros clientes ofertas semanales para que podáis venir 
        a disfrutarlas solos o en grupo! <br>
        ¡Con cuanta más gente vengas mejor sera el rato que paseis! </p>
      <button> VER OFERTAS </button>
    </div>

    <div class="fotoOfertas" width="564px" height="436.36px">
        <img src="aritos.png" width="564px" height="436.36px">
    </div>

</div>

</body>
</html>

<?php
include 'views/footer.php';
?>