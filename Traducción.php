<?php
    if($_GET["traducir"]=="1")
    {   
        echo "<h3>El texto a traducir es:</h3><br>";
        $cadena=$_GET["texto"];
        echo $cadena;
        $long=strlen($cadena);
        echo "<br><h3>Su traducción es:</h3><br>";
        if(ord($cadena)== "46" || ord($cadena)== "45")
        {
            echo "La traducción no fue exitosa, intente con otra palabra.";
        }
        else
        {
            $minuscula= strtolower($cadena);
            for($i=0; $i<$long;$i++)
            {
                $letra= substr($minuscula, $i);
                switch(ord($letra))
                {
                    case '97':
                        echo ".-&nbsp";
                        break;
                    case '98':
                        echo "-...&nbsp";
                        break;
                    case '99':
                        echo "-.-.&nbsp";
                        break;
                    case '100':
                        echo "-..&nbsp";
                        break;
                    case '101':
                        echo ".&nbsp";
                        break;
                    case '102':
                        echo "..-.&nbsp";
                        break;
                    case '103':
                        echo "--.&nbsp";
                        break;
                    case '104':
                        echo "....&nbsp";
                        break;
                    case '105':
                        echo "..&nbsp";
                        break;
                    case '106':
                        echo ".---&nbsp";
                        break;
                    case '107':
                        echo "-.-&nbsp";
                        break;
                    case '108':
                        echo ".-..&nbsp";
                        break;
                    case '109':
                        echo "--&nbsp";
                        break;
                    case '110':
                        echo "-.&nbsp";
                        break;
                    case '111':
                        echo"---&nbsp";
                        break;
                    case '112':
                        echo ".--.&nbsp";
                        break;
                    case '113':
                        echo "--.-&nbsp";
                        break;
                    case '114':
                        echo ".-.&nbsp";
                        break;
                    case '115':
                        echo "...&nbsp";
                        break;
                    case '116':
                        echo "-&nbsp";
                        break;
                    case '117':
                        echo "..-&nbsp";
                        break;
                    case '118':
                        echo "...-&nbsp";
                        break;
                    case '119':
                        echo ".--&nbsp";
                        break;
                    case '120':
                        echo "-..-&nbsp";
                        break;
                    case '121':
                        echo "-.--&nbsp";
                        break;
                    case '122':
                        echo "--..&nbsp";
                        break;
                    case '32':
                    echo "&nbsp&nbsp&nbsp";
                        break;
                    case '33':
                        echo "--..--&nbsp";
                        break;
                    case '46':
                        echo ".-.-.-&nbsp";
                        break;
                    case '44':
                        echo "-.-.--&nbsp";
                        break;
                    case '63':
                        echo "..--..&nbsp";
                        break;
                    case '34':
                        echo ".-..-.&nbsp";
                        break;
                }
            }
        }
    }
?>