<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title></title>
    </head>
    <body>
    <center>
        <img src="media/logo.png" width="300" height="150">
        <br/>
        <br/>
         <h3>Simulador de ahorro programado</h3>
        <form action="" method="post">
            <table>
                <tr><td>Monto que deseas alcanzar:</td><td><input type="text" name="monto"></td></tr>
                <tr><td>Tiempo de:</td><td><input type="text" name="tiempo"></td></tr>
            </table>
            <br/>
            <input type="submit" value="CALCULAR">
        </form>
         <br>
       
        <div id="cuadro2">
            <?php
            error_reporting(0);
            $monto = $_POST['monto'];
            $plazo = $_POST['tiempo'];
            $calculo = $monto / $plazo;
            $tasa = 0.06;
            $tasap = (pow((1 + $tasa), 1 / $plazo)) - 1;
            //$couta = ($monto * ((pow(( $tasa ) + 1, $plazo) * ( $tasa)) / (pow(( $tasa ) + 1, $plazo) - 1)));


            echo '<table border="">';
            echo '<tr>';
            echo '<td>Tiempo</td>';
            echo '<td>Cuota</td>';
            echo '<td>Total intereses</td>';
            echo '<td>Total</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td>' . $plazo . 'meses</td>';
            echo '<td>$' . number_format($calculo) . '</td>';
            echo '<td>$' . number_format($int = $monto * $tasap) . '</td>';
            echo '<td>$' . number_format($calculo * $plazo + $int) . '</td>';
            /*   for ($n = 1; $n <= $plazo; $n++) {
              echo '<tr>';
              echo '<td>' . $n . '</td>';
              echo '<td>$' . number_format($calculo) . '</td>';
              echo '<td>$' . number_format($int = $monto * $tasap) . '</td>';
              echo '</tr>';
              } */
            //  echo '<td>TOTAL</td>';
            //  echo '<td>$' . number_format($cuo = $calculo * $plazo) . '</td>';
//            echo '<td>$' . number_format($inte = $int * $plazo) . '</td>';

            echo '</tr> ';
            echo '</table>';
            ?>
        </div>
        <?php
        //    echo '<h2>$' . number_format($calculo+ $int) . '</h2>';
        ?>
    </center>
</body>
</html>
