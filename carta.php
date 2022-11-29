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

<?php

session_start();

if(isset($_SESSION['compra'])){
    if(isset($_POST['entrante'])){
        $productoS = $entrantes[$_POST['entrante']];
    }else if(isset($_POST['hamburguesa'])){
        $productoS = $hamburguesa[$_POST['hamburguesa']];
    }else if(isset($_POST['postre'])){
        $productoS = $postre[$_POST['postre']];
        array_push($_SESSION['compra'],$productoS);
    }
}else{
    $_SESSION['compra'] = array();
}

require_once 'views/cabecera.php';
require_once 'objetos/hamburguesa.php';
require_once 'objetos/entrantes.php';
require_once 'objetos/postres.php';
require_once 'objetos/productos.php';
require_once 'objetos/agregarProduc.php';
?>

<div class="w3-container w3-padding-32">
    <table id="customers">
        <tr>
            <th></th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Tipo Producto</th>
        </tr>
        <?php
        

        foreach ($hamburguesas as $hamburguesa) {
            var_dump($hamburguesa);
            ?>
        <tr>
            <td></td>
            <td><?=$hamburguesa->getNameProduct()?></td>
            <td><?=$hamburguesa->getPrecioProducto()?></td>
            <td><?=$hamburguesa->getTipoProducto()?></td>
        </tr>
    <?php
        }
    ?>
    </table>
</div>