<?php

require_once 'objetos/hamburguesa.php';
require_once 'objetos/entrantes.php';
require_once 'objetos/postres.php';


$entrantes = array( 0 => new Entrantes(0, 'entrante', 'Nachos','10,95'),
                        1 =>    new Entrantes(0, 'entrante', 'Aritos de Cebolla','8,95'),
                            2=>     new Entrantes(0, 'entrante', 'Tequeños','9,95'));

$entrantes = array( 0 => new Hamburguesa(0, 'hamburguesa', 'La Magnifica','13,50'),
                        1 =>    new Hamburguesa(0, 'hamburguesa', 'Cheessy-Chiken','12,95'),
                            2 =>     new Hamburguesa(0, 'hamburguesa', 'La Grofuguesa','9,95'),
                                3 =>    new Hamburguesa(0, 'hamburguesa', 'La Popular','8,95'),
                                    5 =>    new Hamburguesa(0, 'hamburguesa', 'La Veggie','10,95'));
                                    
$postres = array( 0 => new Postres(0, 'postre', 'Browniee','9,95'),
                    1 =>    new Postres(0, 'postre', 'Cookielleta','8,95'),
                        2=>     new Postres(0, 'postre', 'Oreomlt','9,95'));
?>

