<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> EJERCICIOS POO </title>
</head>
<body>
    <table border="1">
        <h2> Treballadors </h2>
        <tr>
            <td>Nom</td>
            <td>Data Inici</td>
            <td>Sou base</td>
            <td>Sou Net</td>
            <td>IRPF</td>
            <td>Increment sou</td>
            <td>Sou mensual actualitzat</td>
        </tr>
        <?php
        require_once 'llistaTreballadors.php';
        require_once 'calculaSou.php';

        foreach ($llistaTreballadors as $key => $value) {
            echo '<tr>';
            echo '<td>';
            echo $value->getNom();
            echo '</td>';
            echo '<td>';
            echo $value->getDatInc();
            echo '</td>';
            echo '<td>';
            echo $value->getSBase();
            echo '</td>';
            echo '<td>';
            echo $value->calculaSouMensualNet();
            echo '</td>';
            echo '<td>';
            echo $value->getIrpf();
            echo '</td>';
            echo '<td style="color:red">';
            if ($value->getSBase() < 17000) {
                echo $value->getSBase() + ($value->getSBase()* 0.1);
            }
            echo '</td>';
            echo '<td style="color:red">';
            echo $value->souMensualActualitzat();
            echo '</td>';
            echo '</tr>';
        }
        echo '<tr>';
        echo '<td> TOTAL:';
        echo '</td>';
        echo '<td>';
        echo '</td>';
        echo '<td>';
        echo calculaSou::calculaSumaSous($llistaTreballadors);
        echo '</td></tr>';

        ?>
        </table>

        <table border="1">
        <h2> Informatics </h2>
        <tr>
            <td>Nom</td>
            <td>Data Inici</td>
            <td>Sou base</td>
            <td>Sou Net</td>
            <td>IRPF</td>
            <td>Equip Informátic </td>
            <td>Increment sou</td>
            <td>Sou mensual actualitzat</td>
        </tr>
        <?php

        foreach ($llistaInformatics as $key => $value) {
            echo '<tr>';
            echo '<td>';
            echo $value->getNom();
            echo '</td>';
            echo '<td>';
            echo $value->getDatInc();
            echo '</td>';
            echo '<td>';
            echo $value->getSBase();
            echo '</td>';
            echo '<td>';
            echo $value->calculaSouMensualNet();
            echo '</td>';
            echo '<td>';
            echo $value->getIrpf();
            echo '</td>';
            echo '<td>';
            echo $value->getEInform();
            echo '</td>';
            echo '<td style="color:red">';
            if ($value->getSBase() < 17000) {
                echo $value->getSBase() + ($value->getSBase()* 0.1);
            }
            echo '</td>';
            echo '<td style="color:red">';
            echo $value->souMensualActualitzat();
            echo '</td>';
            echo '</tr>';
        }
            echo '<tr>';
            echo '<td> TOTAL:';
            echo '</td>';
            echo '<td>';
            echo '</td>';
            echo '<td>';
            echo calculaSou::calculaSumaSous($llistaInformatics);
            echo '</td></tr>';

        ?>
        </table>
        <table border="1">
        <h2> Repartidors </h2>
        <tr>
            <td>Nom</td>
            <td>Data Inici</td>
            <td>Sou base</td>
            <td>Sou Net</td>
            <td>IRPF</td>
            <td>Mobil </td>
            <td>Increment sou</td>
            <td>Sou mensual actualitzat</td>
        </tr>
        <?php

        foreach ($llistaRepartidors as $key => $value) {
            echo '<tr>';
            echo '<td>';
            echo $value->getNom();
            echo '</td>';
            echo '<td>';
            echo $value->getDatInc();
            echo '</td>';
            echo '<td>';
            echo $value->getSBase();
            echo '</td>';
            echo '<td>';
            echo $value->calculaSouMensualNet();
            echo '</td>';
            echo '<td>';
            echo $value->getIrpf();
            echo '</td>';
            echo '<td>';
            echo $value->getMobil();
            echo '</td>';
            echo '<td style="color:red">';
            if ($value->getSBase() < 17000) {
                echo $value->getSBase() + ($value->getSBase()* 0.1);
            }
            echo '</td>';
            echo '<td style="color:red">';
            echo $value->souMensualActualitzat();
            echo '</td>';
            echo '</tr>';
        }

            echo '<tr>';
            echo '<td> TOTAL:';
            echo '</td>';
            echo '<td>';
            echo '</td>';
            echo '<td>';
            echo calculaSou::calculaSumaSous($llistaRepartidors);
            echo '</td></tr>';

        ?>
        </table>

        <table border="1">
        <h2> Gerents </h2>
        <tr>
            <td>Nom</td>
            <td>Data Inici</td>
            <td>Sou base</td>
            <td>Sou Net</td>
            <td>IRPF</td>
            <td>Complement </td>
            <td>Carrec </td>
            <td>Increment sou</td>
            <td>Sou mensual actualitzat</td>
        </tr>
        <?php

        foreach ($llistaGerents as $key => $value) {
            echo '<tr>';
            echo '<td>';
            echo $value->getNom();
            echo '</td>';
            echo '<td>';
            echo $value->getDatInc();
            echo '</td>';
            echo '<td>';
            echo $value->getSBase();
            echo '</td>';
            echo '<td>';
            echo $value->calculaSouMensualNet();
            echo '</td>';
            echo '<td>';
            echo $value->getIrpf();
            echo '</td>';
            echo '<td>';
            echo $value->getComplement();
            echo '</td>';
            echo '<td>';
            echo $value->getCarrec();
            echo '</td>';
            echo '<td style="color:red">';
            if ($value->getSBase() < 17000) {
                echo $value->getSBase() + ($value->getSBase()* 0.1);
            }
            echo '</td>';
            echo '<td style="color:red">';
            echo $value->souMensualActualitzat();
            echo '</td>';
            echo '</tr>';
        }

            echo '<tr>';
            echo '<td> TOTAL:';
            echo '</td>';
            echo '<td>';
            echo '</td>';
            echo '<td>';
            echo calculaSou::calculaSumaSous($llistaGerents);
            echo '</td></tr>';

        ?>
        </table>



</body>


</html>