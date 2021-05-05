<?php
    date_default_timezone_set("America/Mexico_City");
    $in=$_POST["send"];
    if($in=="Consultar")
    {   
        echo "<h2>Reloj Mundial</h2>";
        $p= (isset($_POST["hora"]) && $_POST["hora"]!= "") ?$_POST["hora"]: "Hora no especificada <br>";
        function recorre1($a)
        {
            $n= substr($a, -5, 2);
            $m= substr($a, 3, 2);
            return $n;
        }
        function recorre2($a)
        {
            $n= substr($a, 3, 2);
            return $n;
        }
        if((isset($_POST["pa1"]) && $_POST["pa1"]!= "") ?$_POST["pa1"]: "")
        {   
            $p1=recorre1($p);
            $p2= recorre2($p);
            date_default_timezone_set("America/Mexico_City");
            $A= mktime($p1, $p2);
            date_default_timezone_set("America/New_York");
            $b= date("H: i A", $A);
            echo "Hora en Nueva York: $b";
            echo "<br>";
        }
        if((isset($_POST["pa2"]) && $_POST["pa2"]!= "") ?$_POST["pa2"]: "")
        {
            $p3=recorre1($p);
            $p4= recorre2($p);
            date_default_timezone_set("America/Mexico_City");
            $C= mktime($p3, $p4);
            date_default_timezone_set("America/Sao_Paulo");
            $D= date("H: i A", $C);
            echo "Hora en Sao Paulo: $D";
        }
        if((isset($_POST["pa3"]) && $_POST["pa3"]!= "") ?$_POST["pa3"]: "")
        {
            $p5=recorre1($p);
            $p6= recorre2($p);
            date_default_timezone_set("America/Mexico_City");
            $E= mktime($p5, $p6);
            date_default_timezone_set("Europe/Madrid");
            $F= date("H: i A", $E);
            echo "Hora en Madrid: $F";
            echo "<br>";
        }
        if((isset($_POST["pa4"]) && $_POST["pa4"]!= "") ?$_POST["pa4"]: "")
        {
            $p7=recorre1($p);
            $p8= recorre2($p);
            date_default_timezone_set("America/Mexico_City");
            $G= mktime($p7, $p8);
            date_default_timezone_set("Europe/Paris");
            $H= date("H: i A", $G);
            echo "Hora en París: $H";
            echo "<br>";
        }
        if((isset($_POST["pa5"]) && $_POST["pa5"]!= "") ?$_POST["pa5"]: "")
        {
            $p9=recorre1($p);
            $p10= recorre2($p);
            date_default_timezone_set("America/Mexico_City");
            $I= mktime($p9, $p10);
            date_default_timezone_set("Europe/Rome");
            $J= date("H: i A", $I);
            echo "Hora en Roma: $J";
            echo "<br>";
        }
        if((isset($_POST["pa6"]) && $_POST["pa6"]!= "") ?$_POST["pa6"]: "")
        {
            $p11=recorre1($p);
            $p12= recorre2($p);
            date_default_timezone_set("America/Mexico_City");
            $K= mktime($p11, $p12);
            date_default_timezone_set("Europe/Athens");
            $L= date("H: i A", $K);
            echo "Hora en Atenas: $L";
            echo "<br>";
        }
        if((isset($_POST["pa7"]) && $_POST["pa7"]!= "") ?$_POST["pa7"]: "")
        {
            $p13=recorre1($p);
            $p14= recorre2($p);
            date_default_timezone_set("America/Mexico_City");
            $O= mktime($p13, $p14);
            date_default_timezone_set("Asia/Dubai");
            $P= date("H: i A", $O);
            echo "$P";
            echo "Hora en Beijing: $P";
            echo "<br>";
        }
        if((isset($_POST["pa8"]) && $_POST["pa8"]!= "") ?$_POST["pa8"]: "")
        {
            $p15=recorre1($p);
            $p16= recorre2($p);
            date_default_timezone_set("America/Mexico_City");
            $S= mktime($p15, $p16);
            date_default_timezone_set("Asia/Tokyo");
            $T= date("H: i A", $S);
            echo "Hora en Tokio: $T";
        }
    }
    if($in=="Calcular")
    {
        $z=(isset($_POST["Fecha"]) && $_POST["Fecha"]!= "") ?$_POST["Fecha"]: "";
        echo "<h2>Cumpleaños: $z</h2>";
        $n= substr($z, -10, 4);
        $m= substr($z, 5, 2);
        $o= substr($z, 8, 2);
        date_default_timezone_set("America/Mexico_City");
        $tiempo2= getdate(mktime(0,0,0,$m,$o,$n));
        $tiempo= getdate();
        foreach($tiempo as $key => $value)
        {
            if($key == "yday"&& $key!='0')
            {   
                $i=$value;
            }
        }
        foreach($tiempo2 as $key => $value)
        {
            if($key == "yday"&& $key!= '0')
            {
                $l= $value;
            }
        }
        if($l>$i)
        {
            $dias= $l-$i;
        }
        if($i>$l)
        {
            $dia= 365-$i;
            $dias= $dia+$l; 
        }
        if((isset($_POST["c1"]) && $_POST["c1"]!= "") ?$_POST["c1"]: "")
        {
            echo "Días: $dias";
            echo "<br>";
        }
        if((isset($_POST["c2"]) && $_POST["c2"]!= "") ?$_POST["c2"]: "")
        {
            $ho=$dias*24;
            echo "Horas: $ho";
            echo "<br>";
        }
        if((isset($_POST["c3"]) && $_POST["c3"]!= "") ?$_POST["c3"]: "")
        {
            $mi= ($dias*24)*60;
            echo "Minutos: $mi";
            echo "<br>";
        }
        if((isset($_POST["c4"]) && $_POST["c4"]!= "") ?$_POST["c4"]: "")
        {
            
        }
    }
?>