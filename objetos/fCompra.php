<?php
//Incluimos los diferentes archivos .php que necesitemos en cada caso. 
require_once 'hamburguesa.php';
require_once 'entrantes.php';
require_once 'postres.php';
require_once 'bebidas.php';
require_once 'agregarProduc.php';
require_once 'pedido.php';

//Iniciamos la session de nuestra pagina
session_start();
require_once '../views/cabecera.php';
    
    if (isset($_POST['fCompra'])) {
    $pedidoUsuario = json_encode($_SESSION['compra']);
    setcookie("mispedidos", $pedidoUsuario, time() + (86400 * 30), "/");
    }
    
    session_destroy();
    header("Location: http://localhost/Proyectos/primerproyectobalboa/index.php");
    ?>