<?php
$a=0; $b=0; $c=0; $d=0;
$arreglo=["1"=>$_GET["1"],
          "2"=>$_GET["2"],
          "3"=>$_GET["3"],
          "4"=>$_GET["4"],
          "5"=>$_GET["5"],
          "6"=>$_GET["6"],
          "7"=>$_GET["7"],
          "8"=>$_GET["8"],
          "9"=>$_GET["9"],
          "10"=>$_GET["10"]];
  
foreach($arreglo as $llave=>$valor)//Discriminación y conteo de los resultados
{
    if($valor=="A")
    {
        $a+=1;
    }
    if($valor=="B")
    {
        $b+=1;
    }
    if($valor=="C")
    {
        $c+=1;
    }
    if($valor=="D")
    {
        $d+=1;
    }
}
if($a>$b&&$a>$c&&$a>$d)//33-54 checan si es mayor
{
    echo "<h4>¡Eres un taco al pastor!<h4>";
}
else
{
    if($b>$a&&$b>$c&&$b>$d)
    {
        echo "<h4>¡Eres un taco de suadero!<h4>";
    }
    else
    {
        if($c>$a&&$c>$b&&$c>$d)
        {
            echo "<h4>¡Eres un taco de barbacoa!<h4>";
        }
        else
        {
            if($d>$a&&$d>$b&&$d>$c)
            {
                echo "<h4>¡Eres un taco lagunero!<h4>";
            }
            else
            {
                if($a==$b&&($c!=$a&&$a!=$d)&&($a>$d&&($a>$c)))//Desde aquí son las combinaciones
                {
                    echo "<h4>¡Eres un taco campechano!<h4>";
                }
                else
                {
                    if($b==$c&&($b!=$d&&$b!=$a)&&($b>$a&&($b>$d)))
                    {
                        echo "<h4>¡Eres un taco de carnitas!<h4>";
                    }
                    else
                    {
                        if($c==$d&&($c!=$b&&$c!=$a)&&($c>$a&&($c>$b)))
                        {
                            echo "<h4>¡Eres un taco bell!<h4>";
                        }
                        else
                        {
                            if($a==$d&&($a!=$b&&$a!=$c)&&($a>$b&&($a>$c)))
                            {
                                echo "<h4>¡Eres un taco light!<h4>";
                            }
                            else
                            {
                                if($a==$c&&($a!=$b&&$a!=$d)&&($a>$b&&($a>$d)))
                                {
                                    echo "<h4>¡Eres un taco placero!<h4>";
                                }
                                else
                                {
                                    if($b==$d&&($b!=$a&&$b!=$c)&&($b>$a&&($b>$c)))
                                    {
                                        echo "<h4>¡Eres un taco de mixiote!<h4>";
                                    }
                                    else
                                    {
                                        echo "<h4>¡Eres un taco de sal<h4>";
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}
//Variables para llevar el control
/*echo "<br>";
echo $a."<br>";
echo $b."<br>";
echo $c."<br>";
echo $d."<br>";*/
?>