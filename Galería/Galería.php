<?php
    if(isset($_FILES['pintura']))
    {
        if(pathinfo($_FILES['pintura']['name'], PATHINFO_EXTENSION)== 'jpg' ||pathinfo($_FILES['pintura']['name'], PATHINFO_EXTENSION)== 'png')
        {
            $Pintura=$_POST["obra"];
            $autor=(isset($_POST["autor"]) && $_POST["autor"]!= "") ?$_POST["autor"]: "Sin autor";
            $año=(isset($_POST["año"]) && $_POST["año"]!= "") ?$_POST["año"]: "Sin año";
            $exten=pathinfo($_FILES['pintura']['name'], PATHINFO_EXTENSION);
            $nombre= $Pintura."&".$autor."&".$año."&.".$exten;
            $imagen= $_FILES['pintura']['tmp_name'];
            if(file_exists('statics/'.$nombre)== false)
            {
                rename($imagen,'statics/'.$nombre);
                echo "<h2>Tu imagen se cargó correctamente en tu galería</h2>";
                echo "<br><br><form action=./Galería.php method=post><input type=submit value=Ver></form>";
            }
            else
            {
              echo "<h1>ESTE ARCHIVO YA EXISTE</h1>";  
              echo "<br><br><form action=./Galería.html method=post><input type=submit value=Agregar foto a la galería></form>";
            }
        }
        else
        {   

            $i= basename($_FILES['pintura']['name']);
            echo "<h1>El archivo $i no es válido</h1>";
            echo "<br><br><form action=./Galería.html method=post><input type=submit value=Agregar foto a la galería></form>";
        }
    }
    else
    {
        echo "<h2>IMAGENES EN GALERÍA DE ARTE<br><br>";
        $rut= "./statics";
        $carp= opendir($rut);
        $archivos= array();
        $si= true;
        while($si)
        {
            $archivo= readdir($carp);
            if($archivo != false)
            {
                if($archivo != "." && $archivo != "..")
                {
                    $ex= pathinfo($archivo, PATHINFO_EXTENSION);
                    if($ex== 'png' || $ex== 'jpg')
                    {
                        array_push($archivos, $archivo);
                    }
                }
            }
            else
            {
                $si= false;
            }
        }
        if($archivos!= false)
        {
            foreach($archivos as $key => $value)
            {
                $m=strlen($value);
                $u=stripos($value,"&");
                $nombre1= substr($value,-$m,$u);
                $s=$u+1;
                $v=stripos($value, "&", $s);
                $z= $v-$s;
                $autor2= substr($value,$s,$z);
                $n= strripos($value, "&");
                $o= $v+1;
                $j= $n-$o;
                $año1= substr($value,$o, $j);
                echo "<table border='1'>
                <tbody>
                    <tr>
                        <td><img src= './statics/".$value."' width= 150 height= 90><br><strong>NOMBRE DE LA PINTURA: </strong>$nombre1<br><strong>NOMBRE DEL PINTOR: </strong>$autor2<br><strong>AÑO EN QUE SE REALIZÓ: </strong>$año1</td>
                    </tr>
                </tbody>
                </table>";
            }
            closedir($carp);
            echo "<br><br><form action=./Galería.html method=post><input type=submit value=Agregar foto a la galería></form>";
        }
        else
        {
            echo "<h1>TU GALERÍA DE ARTE NO TIENE NINGUNA IMAGEN</h1>";
            echo "<br><br><form action=./Galería.html method=post><input type=submit value=Agregar foto a la galería></form>";
        }
    }
?>