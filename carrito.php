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
//Incluimos lso archivos .php que vasmo a usar en esta página
include 'objetos/hamburguesa.php';
include 'objetos/entrantes.php';
include 'objetos/postres.php';
include 'objetos/bebidas.php';
include 'objetos/agregarProduc.php';

//Iniciamos la session 
session_start();
include_once 'views/cabecera.php';
include 'objetos/pedido.php';


if (isset($_SESSION['start']) && (time() - $_SESSION['start'] > 30)) {
    session_unset(); 
    session_destroy(); 
    echo "session destroyed"; 
}else{
    $_SESSION['start'] = time();
}

//Realizamos las funcionalidades de agregar, restar y quitar productos y sus respectivas cantidasdes del carrito
if(isset($_POST['del'])){
    $prodS = $_SESSION['compra'];
    if($prodS->getCantidad() == 1){
        unset($_SESSION['compra']);
        $_SESSION['compra'] = array_values($_SESSION['compra']);
    }else{
        $prodS->setCantidad($prodS->getCantidad() - 1);
    }

}else if(isset($_POST['add'])){
    $prodS = $_SESSION['compra'];
    $prodS->setCantidad($prodS->getCantidad() + 1);
}

?>

<?php
    /*
    En caso de que un usuario desee finalizar su compra y le de al botón de Finalizar compra automaticamete 
    se guarda en una COOKIE el contenido de su úlrimo pedido por tal de poder revisarlo posteriormente
    */
    if(isset($_POST["accion"])){  

        if($_POST["accion"] == "finalizar"){
            $pedidoA = $_SESSION["compra"];
            setcookie("pedidoA",serialize($_SESSION["compra"]),time() + 120);
            session_unset(); 
            session_destroy();
            
            //Como ya se ha realizado la compra con lso productos que hay en el carrito se destruye la session
        }else{

            if(isset($_COOKIE["pedidoA"])){
                $pedidoA = unserialize($_COOKIE["pedidoA"]);
            }
        }
        
    }
    ?>



<!-- Mostramos el banner de la página principal-->
<div class="banner">
    <img src="img/inicio2.jpg" width="100%">
</div>

<div class="margenes">
    <div class="container-xxl">
    <div class="row ms-3 mt-4">
    <table id="pedido">
        <tr>
            <th>Foto</th>
            <th>Nombre Producto</th>
            <th></th>
            <th>Cantidad</th>
            <th></th>
            <th>Precio</th>
        </tr>
        <?php
        $pos = 0;
        foreach ($_SESSION['compra'] as $pedido){ 
            ?>

            <tr>
                <td><img src="img/<?=$pedido->getImagen()?>.png"></td>
                <td><?=$pedido->getNameProduct()?></td>
                <td><button class="resta" type="submit" name="del"> - </button>
                <td><?=$pedido->getCantidad()?></td>
                <button class="suma" type="submit" name="add"> + </button>
                <td><?=$pedido->getPrecioProducto()?></td>
                <td></td><td></td>
                <td>
                    <form action='carrito.php' method="post">>
                        <input type="hidden" name="pos" value=<?=$pos?>>
                        <td><button class="bet-button w3-black w3-section" type="submit" name="add"> + </button></td>
                        <td><button class="bet-button w3-black w3-section" type="submit" name="del"> - </button></td>   
                    </form>
                </td>
            </tr>
            
            <?php $pos++;
        } 
        ?>
        <form action="fCompra.php" method="POST">
            <button class="finCompra" type="submit">Finalizar compra</button><br><br>
            <input type="hidden" name="accion" value="finalizar">
        </form>

</html>




        