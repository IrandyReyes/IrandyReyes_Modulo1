<?php
    $vidas=9;
    $imagen = "<img src= 'Espacio.jpg' width= 30 height= 30>";

    //todo el formato del inicio 
    echo "<head>
            <meta charset=utf-8>
            <title>Batalla Espacial</title> 
            </head>";

        echo "<legend><h1>Batalla Espacial</h1></legend>
            <h2><strong>Vidas:</strong></h3>";
            for($vi=$vidas; $vi>0; $vi--)
            {
                echo "<img src='Nave.jpg' width= 20>";
            }

    //validamos X y Y
    $X=(isset($_POST["X"]) && $_POST["X"]!= "") ?$_POST["X"]: "Inválido";
    $Y=(isset($_POST["Y"]) && $_POST["Y"]!= "") ?$_POST["Y"]: "Inválido";
    $n1=(isset($_POST["o1"])) ?$_POST["o1"]: "Inválido1";
    $n2=(isset($_POST["o2"])) ?$_POST["o2"]: "Inválido2";
    $n3=(isset($_POST["o3"])) ?$_POST["o3"]: "Inválido3";
    /*if(isset($_POST["o1"]))
    {
        $n1=$_POST["o1"];
        echo "<br> $n1";
    }
     echo "<br>$n2"; echo "<br>$n3<br>";*/
    //concatenamos los valores de X y Y
    $arreglo= $Y." ".$X ;
    $cadena = $arreglo;
    $lineas = [     //funcion para darle valor e imprimir cada casilla
    "1 a" =>  "$imagen ",
    "1 b" =>  "$imagen ",
    "1 c" =>  "$imagen ",
    "1 d" =>  "$imagen ",
    "1 e" =>  "$imagen ",
    "1 f" =>  "$imagen ",
    "1 g" =>  "$imagen ",
    "1 h" =>  "$imagen ",
    "1 i" =>  "$imagen ",
    "1 j" =>  "$imagen ",
    "s 1" =>  "<br>",
    "2 a" =>  "$imagen ",
    "2 b" =>  "$imagen ",
    "2 c" =>  "$imagen ",
    "2 d" =>  "$imagen ",
    "2 e" =>  "$imagen ",
    "2 f" =>  "$imagen ",
    "2 g" =>  "$imagen ",
    "2 h" =>  "$imagen ",
    "2 i" =>  "$imagen ",
    "2 j" =>  "$imagen ",
    "s 2" =>  "<br>",
    "3 a" =>  "$imagen ",
    "3 b" =>  "$imagen ",
    "3 c" =>  "$imagen ",
    "3 d" =>  "$imagen ",
    "3 e" =>  "$imagen ",
    "3 f" =>  "$imagen ",
    "3 g" =>  "$imagen ",
    "3 h" =>  "$imagen ",
    "3 i" =>  "$imagen ",
    "3 j" =>  "$imagen ",
    "s 3" =>  "<br>",
    "4 a" =>  "$imagen ",
    "4 b" =>  "$imagen ",
    "4 c" =>  "$imagen ",
    "4 d" =>  "$imagen ",
    "4 e" =>  "$imagen ",
    "4 f" =>  "$imagen ",
    "4 g" =>  "$imagen ",
    "4 h" =>  "$imagen ",
    "4 i" =>  "$imagen ",
    "4 j" =>  "$imagen ",
    "s 4" =>  "<br>",
    "5 a" =>  "$imagen ",
    "5 b" =>  "$imagen ",
    "5 c" =>  "$imagen ",
    "5 d" =>  "$imagen ",
    "5 e" =>  "$imagen ",
    "5 f" =>  "$imagen ",
    "5 g" =>  "$imagen ",
    "5 h" =>  "$imagen ",
    "5 i" =>  "$imagen ",
    "5 j" =>  "$imagen ",
    "s 5" =>  "<br>",
    "6 a" =>  "$imagen ",
    "6 b" =>  "$imagen ",
    "6 c" =>  "$imagen ",
    "6 d" =>  "$imagen ",
    "6 e" =>  "$imagen ",
    "6 f" =>  "$imagen ",
    "6 g" =>  "$imagen ",
    "6 h" =>  "$imagen ",
    "6 i" =>  "$imagen ",
    "6 j" =>  "$imagen ",
    "s 6" =>  "<br>",
    "7 a" =>  "$imagen ",
    "7 b" =>  "$imagen ",
    "7 c" =>  "$imagen ",
    "7 d" =>  "$imagen ",
    "7 e" =>  "$imagen ",
    "7 f" =>  "$imagen ",
    "7 g" =>  "$imagen ",
    "7 h" =>  "$imagen ",
    "7 i" =>  "$imagen ",
    "7 j" =>  "$imagen ",
    "s 7" =>  "<br>",
    "8 a" =>  "$imagen ",
    "8 b" =>  "$imagen ",
    "8 c" =>  "$imagen ",
    "8 d" =>  "$imagen ",
    "8 e" =>  "$imagen ",
    "8 f" =>  "$imagen ",
    "8 g" =>  "$imagen ",
    "8 h" =>  "$imagen ",
    "8 i" =>  "$imagen ",
    "8 j" =>  "$imagen ",
    "s 8" =>  "<br>",
    "9 a" =>  "$imagen ",
    "9 b" =>  "$imagen ",
    "9 c" =>  "$imagen ",
    "9 d" =>  "$imagen ",
    "9 e" =>  "$imagen ",
    "9 f" =>  "$imagen ",
    "9 g" =>  "$imagen ",
    "9 h" =>  "$imagen ",
    "9 i" =>  "$imagen ",
    "9 j" =>  "$imagen ",
    "s 9" =>  "<br>",
    "10 a" =>  "$imagen ",
    "10 b" =>  "$imagen ",
    "10 c" =>  "$imagen ",
    "10 d" =>  "$imagen ",
    "10 e" =>  "$imagen ",
    "10 f" =>  "$imagen ",
    "10 g" =>  "$imagen ",
    "10 h" =>  "$imagen ",
    "10 i" =>  "$imagen ",
    "l0 j" =>  "$imagen ",
    "s1 0" =>  "<br>",
    ];
    function ovni()
    {
        $r= rand(1, 10); $l= rand("97", "106");
        $m= chr($l);
        $n= $r." ".$m ;
        return $n;
    }
    if($X== "Inválido" && $Y == "Inválido")
    {
        $n1= ovni(); $n2= ovni(); $n3= ovni();   
    }
    echo "<br> $n1"; echo "<br>$n2"; echo "<br>$n3<br>";
    //revisamos todas las casillas para poder cambiar su valor cuando disparan
    $u=0;
    foreach($lineas as $cord => $val)
    {
        //echo $cadena. "<br>";
        if($cadena == $cord && (($cadena == $n1) || ($cadena==$n2)||($cadena==$n3)))
        {
            $lineas[$cadena] = "<img src= 'ovni.jpg' width= 30 height= 30> ";
            echo "<h2>¡Has derribado a un ovni!</h2>";
        }
        else
        {
            if($u==0) 
            {
                $vidas-=1;
                $u=1;
            }
        }
    }
    echo $vidas;
        //imprime la tabla
        foreach($lineas as $cord => $val) 
        {
            echo $val;
        }
        echo "<br>";
        //imprime los imputs de x y y
        //var_dump($n1); var_dump($n2); var_dump($n3);
        echo "<form action= './Batalla naval.php' method= 'post'>
    <label for=Nguests class=col-md-2 col-form-label>Posición X(Letra):</label>
    <select name= X>
            <option value=a>A</option>
            <option value=b>B</option>
            <option value=c>C</option>
            <option value=d>D</option>
            <option value=e>E</option>
            <option value=f>F</option>
            <option value=g>G</option>
            <option value=h>H</option>
            <option value=i>I</option>
            <option value=j>J</option>
    </select>
    <input type=hidden name=o1 value='".$n1."'>
    <input type=hidden name=o2 value='".$n2."'>
    <input type=hidden name=o3 value='".$n3."'>
    <label for=Nguests class=col-md-2 col-form-label>Posición Y(Número):</label>
    <input type=number name=Y min= 1 max= 10 required>
    <input type=submit value=Disparar></form>";
?>