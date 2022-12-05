<?php

require_once 'objetos/hamburguesa.php';
require_once 'objetos/entrantes.php';
require_once 'objetos/postres.php';
require_once 'objetos/productos.php';



$entrantes = array(new Entrantes(0, 'entrante', 'Nachos',10.95,'Nachos con carne y queso','e0'),
                        new Entrantes(1, 'entrante', 'Aritos de Cebolla',8.95,'Aritos de cebolla to bonitos','e1'),
                            new Entrantes(2, 'entrante', 'Tequeños',9.95,'Tequeñitos bonitos','e2'),
                                new Entrantes(3, 'entrante', 'Alitas de pollo',9.95,'alitas de poll','e3'));

$hamburguesas = array(new Hamburguesa(4, 'hamburguesa', 'La Magnifica',13.50,'Hamburguesa mas magnifica','h0'),
                        new Hamburguesa(5, 'hamburguesa', 'Cheessy-Chiken',12.95,'Hambueguresa queso pollo','h1'),
                            new Hamburguesa(6, 'hamburguesa', 'La Grofuguesa',9.95,'jajaj sisisi descripcion','h2'),
                                new Hamburguesa(7, 'hamburguesa', 'La Popular',8.95,'Hmaburguesa mas popular','h3'));
                                    
$postres = array(new Postres(8, 'postre', 'Browniee',9.95,'Postre mitico de EEUU','p0'),
                    new Postres(9, 'postre', 'Cookielleta',8.95,'Postre de galleta','p1'));



$bebidas = array(new Bebidas(10, 'bebida', 'Chocolate Pasion',9.95,'Batido de chocolate','b0'),
                    new Bebidas(11, 'bebida', 'Milkshakes',8.95,'Batidos de leshe','b1'));
?>

