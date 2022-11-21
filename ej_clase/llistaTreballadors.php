<?php

require_once 'treballador.php';
require_once 'treballador_infor.php';
require_once 'repartidor.php';
require_once 'gerents.php';

$llistaTreballadors = array(0 => new Treballador('Daniel','Calle los calvos','24/6/2022',10000,0.20),
1 => new Treballador('Marcelo','Calle Barcelona','14/3/2022',19000,0.15),
    2 => new Treballador('Paco','Calle los paquiñus','15/3/2020',70000,0.25)
);

$llistaInformatics = array(0 => new Informatic('Manuel','Calle 1','2/6/2019',90000,0.20,'Laptop'),
1 => new Informatic('Sergi','Calle Catalunya','14/3/2012',11000,0.15,'Surface'),
    2 => new Informatic('Paco','Calle los paquiñus','15/3/2020',15000,0.25,'Ordenador sobremesa')
);

$llistaRepartidors = array(0 => new Repartidor('David','Calle 1','2/6/2019',11000,0.20,'Samsung S21'),
1 => new Repartidor('Javier','Calle Catalunya','14/3/2012',19000,0.15,'Iphone 14 PRO MAX'),
    2 => new Repartidor('Catasus','Calle los autistas','15/3/2000',17000,0.25,'Samsung Note 10+')
);

$llistaGerents = array(0 => new Gerents('Anttoñito','Calle 2','2/6/2019',31000,0.10,50,'Direc. General'),
1 => new Gerents('Joan','Calle España','14/3/2010',19500,0.15,65,'Encargado Produccion'),
    2 => new Gerents('Pedro','Calle Paco','15/3/1990',17500,0.15,300,'Jefe Handling')
);

?>