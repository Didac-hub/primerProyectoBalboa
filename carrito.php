<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/full_estil.css">
    <script src="assets/js/bootstrap.min.js"></script>
    <title>CARRITO</title>
</head>

<?php
include 'pedidos.php';
include 'objetos/productos.php';
session_start();
require_once 'views/cabecera.php';



if (isset($_POST['a0'])){
    $v1 = $_POST['entrante'];
}else if (isset($_POST['a1'])) {
    $v2 = $_POST['hamburguesa'];
}else if (isset($_POST['a1'])){
    $v3 = $_POST['postre'];
}else if (isset($_POST['a1'])){
    $v4 = $_POST['bebida'];
}

if (isset($_SESSION['start']) && (time() - $_SESSION['start'] > 30)) {
    session_unset(); 
    session_destroy(); 
    echo "session destroyed"; 
}else{
    $_SESSION['start'] = time();
}

if(isset($_POST['del'])){
    $pedidoS = $_SESSION["compra"];
    if($pedidoS->getCantidad() == 1){
        unset($_SESSION["compra"]);
        $_SESSION["compra"] = array_values($_SESSION["compra"]);
    }else{
        $pedidoS->setCantidad($pedidoS->getCantidad() - 1);
    }

}else if(isset($_POST['add'])){
    $pedidoS = $_SESSION["compra"];
    $pedidoS->setCantidad($pedidoSel->getCantidad() + 1);
}


require_once 'objetos/hamburguesa.php';
require_once 'objetos/entrantes.php';
require_once 'objetos/postres.php';
require_once 'objetos/productos.php';
require_once 'objetos/bebidas.php';
require_once 'objetos/agregarProduc.php';
?>
<div class="banner">
    <img src="img/inicio2.jpg" width="100%">
</div>

<div class="margenes">
    <div class="container-xxl">
    <div class="row ms-3 mt-4">
  <?php foreach ($_SESSION["compra"] as $pedido){ ?>
  
    <div class="col-6 col-sm-6 mb-4 text-center" style="background-image: url(img/<?=$pedido->getProductos()->getImagen()?>.png);">
    <h5 class="descPro"><?=$pedido->getProductos()->getNameProduct()?></h5>  
    <p class="descPro"><?=$pedido->getProductos()->getPrecioProducto()?></p>
    <button class="restar" name="del">-</button>
    <p class="descPro"><?=$pedido->getProductos()->getCantidad()?></p>
    <button class="sumar" name="add">+</button>
    <input type="hidden" name="pedido" value=<?=$pedido->getProductos()->getId();?>>
    </div>

  <?php }?>

        </div>
    </div>
</div>