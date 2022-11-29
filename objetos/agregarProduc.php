<?php

require_once 'objetos/hamburguesa.php';
require_once 'objetos/entrantes.php';
require_once 'objetos/postres.php';
require_once 'objetos/productos.php';



$entrantes = array(new Entrantes(0, 'entrante', 'Nachos',10.95),
                        new Entrantes(1, 'entrante', 'Aritos de Cebolla',8.95),
                            new Entrantes(2, 'entrante', 'Tequeños',9.95));

$hamburguesas = array(new Hamburguesa(3, 'hamburguesa', 'La Magnifica',13.50),
                        new Hamburguesa(4, 'hamburguesa', 'Cheessy-Chiken',12.95),
                            new Hamburguesa(5, 'hamburguesa', 'La Grofuguesa',9.95),
                                new Hamburguesa(6, 'hamburguesa', 'La Popular',8.95),
                                    new Hamburguesa(7, 'hamburguesa', 'La Veggie',10.95));
                                    
$postres = array(new Postres(8, 'postre', 'Browniee',9.95),
                    new Postres(9, 'postre', 'Cookielleta',8.95),
                        new Postres(10, 'postre', 'Oreomlt',9.95));
?>

