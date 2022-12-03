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
<body>

<?php

session_start();
require_once 'views/cabecera.php';

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
?>

<div class="margenes">
    <div class="container-xxl">
        <div class="pol">
            <h1>POLÍTICA DE PROTECCIÓN DE DATOS <br>DE CARÁCTER PERSONAL</h1><br><br>
        </div>
        <div class="polh2">
            <h2>¿QUÉ DATOS TRATAMOS Y DURANTE CUÁNTO TIEMPO?</h2><br>
        </div>
        <div class="poltxt">
            <p>
            FAT-FOOD tratará:<br><br>

            (I) Los datos de carácter personal facilitados con ocasión del registro, en general; 
            identificativos, características personales, y de contacto electrónico, en particular<br><br>

            (II) Los datos autorizados en caso de registro por medio del login de redes sociales<br><br>

            (III) Datos derivados de la relación comercial con FAT-FOOD, en general; los procedentes 
            del uso de los distintos servicios, aquellos que facilites en el proceso de reservas, compras y/o contratación, 
            datos para efectuar/ autorizar el pago y facturar los productos y servicios, en particular<br><br>

            (IV) Los resultantes de procesos informáticos (hábitos de navegación o uso del medio y/o entorno digital), 
            Dirección IP e información recopilada a través de cookies, etiquetas de píxel y otras tecnologías<br><br>

            (V) Aquellos que FAT-FOOD pueda inferir a partir de datos lícitamente obtenidos.<br><br>
            FAT-FOOD tratará y almacenará tus datos mientras seas usuario activo en el medio y/o entorno digital y cliente 
            FAT-FOOD, así como durante el plazo de prescripción de obligaciones legales, que pudieran nacer de posibles responsabilidades 
            vinculadas al tratamiento de los datos de cliente.<br><br>
            </p><br>
        </div>
    </div>
</div>

<div class="margenes">
    <div class="container-xxl">
        <div class="polh2">
            <h2>¿EN QUÉ CONSIENTE EL USUARIO CUANDO FACILITA <br>SUS DATOS?</h2><br>
        </div>
        <div class="poltxt">
            <p>
            FAT-FOOD tratará:<br><br>
            FAT-FOOD, propietaria del medio y/o entorno digital, almacenará los datos de carácter personal necesarios, enumerados en el apartado <br>
            precedente, con la finalidad de:<br><br>

            (I) Prestar el servicio que demandes como usuario/Cliente y que ofrece el medio y/o entorno digital, su mantenimiento y mejora, a base de <br>
            estudios, elaboración de perfiles, segmentaciones sobre tus datos y/o cruces con otros ficheros responsabilidad de FAT-FOOD.<br><br>

            (II) Ofrecer promociones ligadas a la condición de usuario/ Cliente, a través de medios de comunicación electrónica o no, referentes a productos o <br> 
            servicios del sector donde FAT-FOOD desarrolla su actividad (fidelización, alimentación, hogar, consumo, ocio, tiempo libre, turismo, entre otros) <br><br>
            Puedes autorizar el tratamiento de tus datos con fines promocionales y la recepción de este tipo de envíos, en el proceso de registro y oponerte <br> 
            en un momento posterior, siguiendo el procedimiento para el ejercicio de derechos descrito en el apartado 4.<br><br>

            (III) Facilitar el proceso de alta en el medio y/o entorno digital, a través de distintos canales. FAT-FOOD, para efectuar el registro podrá desarrollar un 
            proceso que permita aprovechar los datos ya existentes del Usuario/ Cliente en otros ficheros de FAT-FOODy que resulten útiles para efectuar el alta; en ese caso, se informará debidamente al Usuario/cliente, para obtener su consentimiento
            </p><br>
        </div>
    </div>
</div>


<div class="margenes">
    <div class="container-xxl">
        <div class="polh2">
            <h2>¿PUEDE EL USUARIO/CLIENTE OPONERSE A RECIBIR <br>
             COMUNICACIONES COMERCIALES O AL TRATAMIENTO <br> 
             CON FINES PROMOCIONALES?</h2><br><br>
        </div>
        <div class="poltxt">
            <p> Como Usuario/Cliente puedes oponerte en cualquier momento a recibir comunicaciones y al tratamiento de tus datos para fines comerciales <br>
            y promocionales, contactándonos a través de dpo@fatfood.com o haciendo clic en el enlace de baja de cada una de las comunicaciones que <br>
            recibas.
            </p><br>
           </div>
    </div>
</div>


<div class="margenes">
    <div class="container-xxl">
        <div class="polh2">
            <h2>¿LOS DATOS SON COMUNICADOS A TERCEROS?</h2><br>
        </div>
        <div class="poltxt">
            <p> A. Administración Pública, Juzgados y Tribunales<br><br>
                Si las autoridades gubernamentales, tales como los cuerpos de seguridad del estado, Jueces y/o Tribunales, solicitan o requieren información o si <br>
                es necesario presentarla para cumplir alguna Ley, FAT-FOOD comunicara a dichos terceros los datos que éstos formalmente soliciten.
            </p><br>
           </div>
    </div>
</div>


<div class="margenes">
    <div class="container-xxl">
        <div class="polh2">
            <h2>MEDIDAS DE SEGURIDAD Y CONFIDENCIALIDAD DE LA <br>
                INFORMACIÓN</h2><br><br>
        </div>
        <div class="poltxt">
            <p>
            FAT-FOOD ha adoptado las medidas oportunas de seguridad en sus instalaciones, sistemas y ficheros. Ha establecido todos los medios técnicos a su <br> 
            alcance para evitar la pérdida, mal uso, alteración, acceso no autorizado y robo de los datos que el cliente facilite, velando así por su integridad,<br> 
            disponibilidad y confidencialidad. 
            </p><br>
           </div>
    </div>
</div>


<div class="margenes">
    <div class="container-xxl">
        <div class="polh2">
            <h2>CAMBIOS EN LA POLÍTICA DE PRIVACIDAD </h2><br>
        </div>
        <div class="poltxt">
            <p>
            FAT-FOOD cumple escrupulosamente con las leyes aplicables a la protección de datos y la privacidad de los usuarios. Para ello, se reserva el<br> 
            derecho a modificar unilateralmente, en cualquier momento, las condiciones de la presente Política de Protección de datos de carácter personal,<br> 
            para adecuarla a cualquier cambio normativo o modificación del medio y/o entorno digital.
            </p><br><br><br>
           </div>
    </div>
</div>



</html>
<?php
include_once 'views/footer.php';
?>