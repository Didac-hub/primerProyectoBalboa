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
require_once 'objetos/hamburguesa.php';
require_once 'objetos/entrantes.php';
require_once 'objetos/postres.php';
require_once 'objetos/bebidas.php';
require_once 'objetos/agregarProduc.php';
require_once 'objetos/pedido.php';

//Iniciamos la session 
session_start();
include_once 'views/cabecera.php';
if (!isset($_SESSION['compra'])) {
    $_SESSION['compra'] = array();
    }


/*
if (isset($_SESSION['start']) && (time() - $_SESSION['start'] > 30)) {
    session_unset(); 
    session_destroy(); 
}else{
    $_SESSION['start'] = time();
}
*/

//Realizamos las funcionalidades de agregar, restar y quitar productos y sus respectivas cantidades del carrito
if(isset($_POST['del'])){
    $prodS = $_SESSION['compra'];
    if($prodS[$_POST['pos']]->getCantidad() == 1){
        unset($_SESSION['compra'][$_POST['pos']]);
        $_SESSION['compra'] = array_values($_SESSION['compra']);
    }else{
        $prodS[$_POST['pos']]->setCantidad($prodS[$_POST['pos']]->getCantidad() - 1);
    }

}else if(isset($_POST['add'])){
    $prodS = $_SESSION['compra'];
    $prodS[$_POST['pos']]->setCantidad($prodS[$_POST['pos']]->getCantidad() + 1);
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
        <?php
        if (count($_SESSION['compra']) == 0) {
            echo "No tienes ningún producto en la cesta";
        }else{
        ?>

    <div class="row ms-3 mt-4">
    <table id="pedido">
        <tr>
            <th></th>
            <th>Nombre Producto</th>
            <th>Cantidad</th>
            <th>Precio</th>
        </tr>
        <?php
        $pos = 0;
        
        foreach ($_SESSION['compra'] as $pedido){ 
            
            ?>

            <tr>
                <td><img src="img/<?=$pedido->getProducto()->getImagen()?>.png" width="250px"></td>
                <td><?=$pedido->getProducto()->getNameProduct()?></td>
                <form method="POST">
                <input type="hidden" name="pos" value=<?=$pos?>>
                <td><button class="resta" type="submit" name="del"> - </button> 
                <?=$pedido->getCantidad()?>
                <button class="suma" type="submit" name="add"> + </button></td>
                </form>
                <td><?=$pedido->getProducto()->getPrecioProducto()?></td>
                <td></td><td></td>
                <td>
                </td>
            </tr>
            
            <?php $pos++;
        } 
        ?>
    </table>
    <form action="carta.php" method="POST">
        <button class="cancelarCompra" type="submit">Cancelar </button>
    </form>
    
        <form action="http://localhost/Proyectos/primerproyectobalboa/objetos/fCompra.php" method="POST">
            <button class="finCompra" name="fCompra" type="submit">Finalizar compra</button><br><br>
            <input type="hidden" name="accion" value="finalizar">
        </form>
        </div>
    </div>
        </div>
        <?php
        }?>

</html>




        