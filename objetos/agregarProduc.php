<?php
/*
Generamos varios arrays que contengan lso datos de todos los productos que nosotros
queremos agregar a nuestra páginas web. En este caso esta la ID, TipoProducto,
NombreProducto, PrecioProducto, DescripcionProducto
*/


$entrantes = array( 0 => new Entrantes(0, 'entrante', 'Nachos',10.95,'Nachos con carne, guacamole y queso cheddar','e0'),
                        1 => new Entrantes(1, 'entrante', 'Alitas de pollo',8.95,'Alitas de pollo cruientes hroneadas a fuego lento','e1'),
                            2 => new Entrantes(2, 'entrante', 'Tequeños',9.95,'Trozo de queso redetido forrado con una massa frita','e2'),
                                3 => new Entrantes(3, 'entrante', 'Aritos de cebolla',9.95,'Aritos de cebolla crujientes acompañados de una salsa barbacoa','e3'));

$hamburguesas = array( 0 => new Hamburguesa(0,'hamburguesa', 'La Magnifica',13.50,'Hamburguesa mas magnifica, con doble burger, doble bacon, doble queso y doble diversión','h0'),
                        1 => new Hamburguesa(1, 'hamburguesa', 'Cheessy-Chiken',12.95,'Hamburguesa mitica conocida pro todo el mundo hecha por queso cheddar y una rica hamburguesa de pollo','h1'),
                            2 => new Hamburguesa(2, 'hamburguesa', 'La Grofuguesa',9.95,'Hamburguesa disenada para los mayores amantes de lso gofres','h2'),
                                3 => new Hamburguesa(3, 'hamburguesa', 'La Popular',8.95,'Hamburguesa con bacon muchos queso y mas de 200 gr e carne de ternera','h3'));
                                    
$postres = array( 0=> new Postres(0, 'postre', 'Browniee',9.95,'Pastelito de browniee de choclate','p0'),
                    1 => new Postres(1, 'postre', 'Cookielleta',8.95,'Galleta cookie grane horneada a fuego lento durante 15min','p1'));



$bebidas = array( 0 => new Bebidas(0, 'bebida', 'Chocolate Pasion',9.95,'Batido de chocolate','b0'),
                    1 => new Bebidas(1, 'bebida', 'Milkshakes',8.95,'Batidos de leshe','b1'));
?>

