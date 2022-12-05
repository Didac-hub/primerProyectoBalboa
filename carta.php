<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/full_estil.css">
    <script src="assets/js/bootstrap.min.js"></script>
    <title>CARTA</title>
</head>
<body>

<?php
//Incluimos los diferentes archivos .php que necesitemos en cada caso. 
include 'objetos/hamburguesa.php';
include 'objetos/entrantes.php';
include 'objetos/postres.php';
include 'objetos/bebidas.php';
include 'objetos/agregarProduc.php';
include 'objetos/pedido.php';

//Iniciamos la session de nuestra pagina
session_start();
include_once 'views/cabecera.php';

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
/*
  if(isset($_SESSION['compra'])){
  if(isset($_POST['entrante'])){
    $prodS = $entrantes[$_POST['entrante']];
    array_push($_SESSION['compra'],$prodS);
  }else if(isset($_POST['hamburguesa'])){
    $prodS = $hamburguesas[$_POST['hamburguesa']];
    array_push($_SESSION['compra'],$prodS);
  }else if(isset($_POST['postre'])){
    $prodS = $postres[$_POST['postre']]; 
    array_push($_SESSION['compra'],$prodS);   
  }else if(isset($_POST['bebida'])){
    $prodS = $bebidas[$_POST['bebida']];
    array_push($_SESSION['compra'],$prodS);
  }
  if(isset($prodS)){
      $pedido = new pedido($prodS);
      $_SESSION['compra'] = $pedido;
  }
}else{
  $_SESSION['compra'] = array();
}

*/
/*
En el apratado de SESSION debemos completar que en cada caso que se quiera generar cualquier tipo de session esta
revisará el esta de compra y en caso de que no exista ninguna la crea. Todo seguido irá revisando si es del 
apartado entrantes, hamburguesas, postres o bebidas para estos poder ser agregados posteriormente a pedido
*/
    if (isset($_SESSION['compra'])) {
        if (isset($_POST['entrante'])) {
            $prodS = $entrantes[$_POST['entrante']];
            if (isset($_SESSION['compra'][$_POST['entrante']])) {
                $_SESSION['compra'][$_POST['entrante']]->setCantidad($_SESSION['compra'][$_POST['entrante']]->getCantidad() + 1);
            }else{
                $_SESSION['compra'][$_POST['entrante']] = new pedido($prodS);
            }
        }else if (isset($_POST['hamburguesa'])) {
          $prodS = $hamburguesas[$_POST['hamburguesa']];
          if (isset($_SESSION['compra'][$_POST['hamburguesa']])) {
              $_SESSION['compra'][$_POST['hamburguesa']]->setCantidad($_SESSION['compra'][$_POST['hamburguesa']]->getCantidad() + 1);
          }else{
              $_SESSION['compra'][$_POST['hamburguesa']] = new pedido($prodS);
          }
        }else if (isset($_POST['postre'])) {
          $prodS = $postres[$_POST['postre']];
          if (isset($_SESSION['compra'][$_POST['postre']])) {
              $_SESSION['compra'][$_POST['postre']]->setCantidad($_SESSION['compra'][$_POST['postre']]->getCantidad() + 1);
          }else{
              $_SESSION['compra'][$_POST['postre']] = new pedido($prodS);
          }
        }else if (isset($_POST['bebida'])) {
          $prodS = $bebidas[$_POST['bebida']];
          if (isset($_SESSION['compra'][$_POST['bebida']])) {
              $_SESSION['compra'][$_POST['bebida']]->setCantidad($_SESSION['compra'][$_POST['bebida']]->getCantidad() + 1);
          }else{
                $_SESSION['compra'][$_POST['bebida']] = new pedido($prodS);
          }
        }

    } else {
        $_SESSION['compra'] = array();
    }




?>
      

<?php
?>

<!-- Mostramos el banner principal de nuestra página de carta de la web -->
<div class="banner">
    <img src="img\inicio3.jpg" width="100%">
</div>


<!-- Generamos las difentes secciones de la página CARTA -->
<div class="fondoCarta d-flex align-items-center justify-content-center" width="1920px" height="350px">
    <h3 class="text-center"> ENTRANTES </h3>
</div>

<div class="margenes">
<div class="container-xxl">
  <div class="row ms-3 mt-4">
  <?php 
  foreach ($entrantes as $entrante){ ?>
    <div class="imgCarta col-6 col-sm-6 mb-4 text-center" style="background-image: url(img/<?=$entrante->getImagen()?>.png);">
    <h5 class="descPro"><?=$entrante->getNameProduct()?></h5>  
    <p class="descPro"><?=$entrante->getDescrProduct()?></p>
    <p class="descPro"><?=$entrante->getPrecioProducto()?>€</p>
    <form action="carta.php" method="POST">
    <input type="hidden" name="entrante" value=<?=$entrante->getId();?>>
    <button class="botonCarta descPro" name="a0" type="submit">Añadir</button>
    </form>
    </div>

  <?php 
}
?>

</div>
</div>
</div>



<div class="fondoCarta d-flex align-items-center justify-content-center" width="1920px" height="350px">
    <h3 class="text-center"> HAMBURGUESAS </h3>
</div>

<div class="margenes">
<div class="container-xxl">
  <div class="row ms-3 mt-4">
  <?php 
  foreach ($hamburguesas as $hamburguesa){ ?>

    <div class="imgCarta col-6 col-sm-6 mb-4 text-center" style="background-image: url(img/<?=$hamburguesa->getImagen()?>.png);">
      <h5 class="descPro"><?=$hamburguesa->getNameProduct()?></h5>  
      <p class="descPro"><?=$hamburguesa->getDescrProduct()?></p>
      <p class="descPro"><?=$hamburguesa->getPrecioProducto()?>€</p>
      <form action="carta.php" method="POST">
        <input type="hidden" name="hamburguesa" value=<?=$hamburguesa->getId();?>>
        <button class="botonCarta descPro" type="submit">Añadir</button>

      </form>
    </div>

<?php 
  }
?>

  </div>
</div>
</div>



<div class="fondoCarta d-flex align-items-center justify-content-center" width="1920px" height="350px">
    <h3 class="text-center"> POSTRES </h3>
</div>

<div class="margenes">
<div class="container-xxl">
  <div class="row ms-3 mt-4">
  <?php 
  foreach ($postres as $postre){ ?>
  
    <div class="imgCarta col-6 col-sm-6 mb-4 text-center" style="background-image: url(img/<?=$postre->getImagen()?>.png);">
    <h5 class="descPro"><?=$postre->getNameProduct()?></h5>  
    <p class="descPro"><?=$postre->getDescrProduct()?></p>
    <p class="descPro"><?=$postre->getPrecioProducto()?>€</p>
    <form action="carta.php" method="POST">
    <input type="hidden" name="postre" value=<?=$postre->getId();?>>
    <button class="botonCarta descPro" type="submit">Añadir</button>
    </form>
    </div>

  <?php 
}
?>

  </div>
</div>
</div>
 




<div class="fondoCarta d-flex align-items-center justify-content-center" width="1920px" height="350px">
    <h3 class="text-center"> BEBIDAS </h3>
</div>

<div class="margenes">
<div class="container-xxl">
  <div class="row ms-3 mt-4">
  <?php foreach ($bebidas as $bebida){ ?>
  
    <div class="imgCarta col-lg-6 col-sm-12 mb-4 text-center" style="background-image: url(img/<?=$bebida->getImagen()?>.png);">
    <h5 class="descPro"><?=$bebida->getNameProduct()?></h5>  
    <p class="descPro"><?=$bebida->getDescrProduct()?></p>
    <p class="descPro"><?=$bebida->getPrecioProducto()?>€</p>
    <form action="carta.php" method="POST">
    <input type="hidden" name="bebida" value=<?=$bebida->getId();?>>
    <button class="botonCarta descPro" type="submit">Añadir</button>
    </form>
    </div>

  <?php }?>

  </div>
</div>
</div>
</body> 

<?php
include_once 'views/footer.php';
?>

</html>

