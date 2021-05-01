<?php
    echo "Ajedrez";
    echo "<br>";
    $fila= 4;//Variable de control
    for($vertical= 1; $vertical<=$fila; $vertical++)//For para las filas
    {
        for($horizontal=1; $horizontal< $fila; $horizontal++)//For para las columnas
        {
            echo "<img src='negro.jpg' width= 100><img src='blanco.jpg' width=100>";
        }
        echo "<img src='negro.jpg' width= 100>";
        echo "<br>";
        if($vertical<$fila)//if por ser un número impar
        {
            for($horizontal=1; $horizontal< $fila; $horizontal++)//For para las columnas
            {
                echo "<img src='blanco.jpg' width=100><img src= 'negro.jpg' width=100>";
            }
            echo "<img src= 'blanco.jpg' width=100>";
        }
        echo "<br>";//Salto de fila
    }
?>