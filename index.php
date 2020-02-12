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
        <h3>Simulador de ahorro programado</h3>
        <form action="" method="post">
            AHORRO DE:<input type="text" name="monto"placeholder="$500000">
            A UN PLAZO DE:<input type="text" name="plazo">
        <!--    TASA:<input type="text" name="tasa">-->
            <input type="submit" value="calcular">
            <br/>
            <br/>
            <br/>
            <div id="cuadro">


                <?php
                error_reporting(0);
                $monto = $_POST['monto'];
                $plazo = $_POST['plazo'];
                //  $aprox = $monto * $plazo;
                $tasa = 0.06;
                $monto = $_POST['monto'];

                $tasap = (pow((1 + $tasa), 1 / $plazo)) - 1;
                echo 'periodica:'.$tasap;
                // echo 'lll:' . $tasap * $monto * $plazo + $monto;
                //  $couta = ($monto * ((pow(($tasa / 100) + 1, $plazo) * ($tasa / 100)) / (pow(($tasa) + 1, $plazo) - 1)))or die("NO SE PUDO CALCULAR");
                //    echo '$' . number_format($aprox);

                echo '<br/>';
                echo '<br/>';
                // echo '';
                echo ' <table border=2 id="cuadro">';
                echo '<tr>';
                echo '<td> PLAZO</td>';
                echo '<td> MONTO MENSUAL</td>';
                echo '<td> INTERES MENSUAL</td>';

                echo '</tr>';

                for ($n = 1; $n <= $plazo; $n++) {
                    echo ' <tr>';

                    echo '<td>' . $n . ' meses </td>';
                    echo '<td>$ ' . number_format($monto) . '</td>';
                    echo '<td>$ ' . number_format($tasap * $monto * $plazo) . '</td>';


                    $total = $monto * $plazo;
                    //    $grantotal = $total * $tasap + $total;
                }
                echo '<tr>';
                echo '<td>TOTAl: </td>';
                $total = $monto * $plazo;
//            $grantotal = $total * $tasap + $total;
                echo '<td>$' . number_format($total) . '  </td>';
                echo '<td>$' . number_format($totalIn = ($tasap * $monto * $plazo) * $plazo) . '  </td>';
                echo '</tr>';
                echo '</table>';
                ?>
            </div>
            <?php
            echo '<center><h2>$' . number_format($totalIn + $total) . '</h2></center>';
            ?>
        </form>
    </center>
</body>
</html>
