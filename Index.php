<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/full_estil.css">
    <script src="assets/js/bootstrap.min.js"></script>
    <title>INICIO</title>
</head>
<body>

<?php
//Incluimos los diferentes archivos .php que necesitemos en cada caso. 
include 'config/database.php';
include 'objetos/hamburguesa.php';
include 'objetos/entrantes.php';
include 'objetos/postres.php';
include 'objetos/bebidas.php';
include 'objetos/agregarProduc.php';
include 'objetos/pedido.php';

//DataBase::connect();

//Iniciamos la session de nuestra pagina
session_start();
include_once 'views/cabecera.php';

if (!isset($_SESSION['compra'])) {
  $_SESSION['compra'] = array();
  }

if (isset($_SESSION['start']) && (time() - $_SESSION['start'] > 30)) {
  session_unset(); 
  session_destroy(); 
  echo "session destroyed"; 
}else{
  $_SESSION['start'] = time();


  if(isset($productoS)){
      $pedido = new pedido($productoS);
      array_push($_SESSION['compra'], $pedido);
}
}
?>
<!-- Creamos un carousel con fotos para poder mostrarlas por pantalla con un minimo de intervalo de tiempo entre ellas -->
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
<!-- Creamos lso diferentes apartados que tendrá la página. En este caso generamos las primeras secciones-->
<div class="margenes">
<div class="container-xxl">
  <div class="row ms-3 mt-4">
  <div class="col-lg-6 col-sm-12 mt-2 mr-2">
      <a href="carta.php"><img id="nachIndex" src="img\nach.jpg" width="100%" height="100%"></a>
  </div>

  <div class="col-lg-6 col-sm-12 mt-2">
      <a href="carta.php"><img id="hambIndex" src="img\burgir.jpg" width="100%" height="100%"></a>
  </div>
</div>

</div>
<div class="container-xxl">
  <div class="row ms-3 mt-3 mb-4">
  <div class="col-sm-6 mt-2 mr-2 mb-2">
  <a href="carta.php"><img id="posIndex"src="img\pos.png" width="100%" height="100%"></a>
  </div>

  <div class="col-sm-6 mt-2 mb-2">
  <a href="carta.php"><img id="bebIndex" src="img\beb.jpg" width="100%" height="100%"></a>
  </div>
</div>

</div>
</div>

<!-- Generamos la seción de oferta para nuestra página web -->
<div class="fondoOferta" width="1920px" height="600px">
<div class="row">
  <div class="col-3"></div>
    <div class="cajaOferta col-4 align-self-center" width="560px" height="430px">
      <h3 class="titOferta"> OFERTAS DE LA SEMANA </h3>
      <p class="text"> ¡En nuestros locales ofrecemos a todos nuestros clientes <br>
        ofertas semanales para que podáis venir a disfrutarlas solos o <br>
        en grupo! <br><br>
        ¡Con cuanta más gente vengas mejor sera el rato que paseis! </p>
      <div class="btOfer text-center" width="100%">
        <button class="botonOfer"> VER OFERTAS </button>
        </div>
    </div>

    <div class="fotoOferta col-lg-2 col-sm-12 mb-4 mt-4">
        <img class="img-fluid" src="img\arit.jpg" width="564px" height="436.36px">
    </div>

    </div>

</div>
</body>
</html>

<!-- Agregamos el footer al final de la página al igual que la cabecera para que nos aparezca en todas las paginas-->
<?php
include_once 'views/footer.php';
?>