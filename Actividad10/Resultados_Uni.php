<?php
   echo 
   "<table border='1'>
        <thead>
            <tr>
                <th colspan='6'><h1>Solicitud de ingreso a la universidad</h1></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan='2'>$_GET[Apellidopaterno]</td>
                <td colspan='2'>$_GET[Apellidomaterno]</td>
                <td colspan='2'>$_GET[Nombre]</td>
            </tr>
            <tr>
                <td colspan='2'><h4><u><strong>Apellido paterno</strong></u></h4></td>
                <td colspan='2'><h4><u><strong>Apellido materno</strong></u></h4></td>
                <td colspan='2'><h4><u><strong>Nombre(s)</strong></u></h4></td>
            </tr>
            <tr>
                <td colspan='2'><h4><u><strong>Sexo:</strong></u></h4></td>
                <td colspan='2'>$_GET[sexo]</td>
                <td><h4><u><strong>Edad:</strong></u></h4></td>
                <td>$_GET[edad]</td>
            </tr>
            <tr>
                <td colspan='4'>$_GET[correo]</td>
                <td>$_GET[telefono]</td>
                <td>$_GET[celular]</td>
            </tr>
            <tr>
                <td colspan='4'><u><strong>Correo electrónico</strong></u><h4></h4></td>
                <td><h4><u><strong>Teléfono</strong></u></h4></td>
                <td><h4><u><strong>Celular</strong></u></h4></td>
            </tr>
            <tr>
                <td colspan='2'><h4><u><strong>Escuela de procedencia:</strong></u></h4></td>
                <td colspan='2'>$_GET[escuela]</td>
                <td><h4><u><strong>Promedio:</strong></u></h4></td>
                <td>$_GET[promedio]></td>
            </tr>
            <tr>
                <td colspan='4'><u><strong>Primera opción</strong></u><h4></h4></td>
                <td colspan='2'>$_GET[opción1]</td>
            </tr>
            <tr>
                <td colspan='4'><u><strong>Segundaa opción</strong></u><h4></h4></td>
                <td colspan='2'>$_GET[opción2]</td>
            </tr>
        </tbody>
    </table>";
?>