<?php
    session_start();
    $ini =(isset($_POST["ini"]) && $_POST["ini"]!= "") ?$_POST["ini"]: "No ini";
    if($ini != "No ini"&& (isset($_SESSION['secion'])))
    {
       $n= $_POST['Nombre'];
       $a= $_POST['Apellido'];
       $nc= $n." ".$a;
       $c=$_POST['correo'];
       $f= $_POST['Fecha'];
       $_SESSION['nombre']= $nc;
       $_SESSION['fecha']= $f;
       $_SESSION['correo']= $c;
       $n2=$_SESSION['nombre'];
       $f2=$_SESSION['fecha'];
       $c2=$_SESSION['correo'];
       echo "<table border='1'>
       <thead>
           <tr>
               <th colspan='2'><h3>Información de inicio de sesión</h3></th>
           </tr>
        </thead>
        <tbody>
           <tr>
               <td>Nombre completo: </td>
               <td>$n2</td>
           </tr>
           <tr>
               <td>Fecha de nacimiento: </td>
               <td>$f2</td>
           </tr>
           <tr>
               <td>Correo electrónico: </td>
               <td>$c2</td>
           </tr>
        </tbody>
        </table>
        <br><br>
        <form action='./index.php' method=post>
            <input type=submit name= cierra value=Cerrar>
        </form>";
        $cierre =(isset($_POST["cierra"]) && $_POST["cierra"]!= "") ?$_POST["cierra"]: "abre";
        if($cierre== "Cerrar")
        {
            session_unset();
            session_destroy();
        }
    }
    elseif($ini != "No ini")
    {
       $n= $_POST['Nombre'];
       $a= $_POST['Apellido'];
       $nc= $n." ".$a;
       $c=$_POST['correo'];
       $f= $_POST['Fecha'];
       $_SESSION['nombre']= $nc;
       $_SESSION['fecha']= $f;
       $_SESSION['correo']= $c;
       header("location: ./index.php");
    }
    else
    {
        header("location: ./form.php");
    }
?>