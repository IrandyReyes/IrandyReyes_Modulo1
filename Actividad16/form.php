<?php
    session_start();
    $_SESSION['secion']= "seción";
    echo "<html lang=es dir=ltr>
    <head>
        <meta charset=utf-8>
        <title>Mi form</title>
    </head>
    <body>
        <form action='./index.php' method=post>
            <fieldset>
                <legend><h3>Formulario</h3></legend>
                Nombre(s): <input type=text name=Nombre required>
                <br><br>
                Apellidos: <input type=text name=Apellido required>
                <br><br>
                Grupo: <input type=text name=Grupo required>
                <br><br>
                Fecha de nacimiento:<input type=date name=Fecha require>
                <br><br>
                Correo electrónico: <input type=email name=correo required>
                <br><br>
                Contraseña: <input type=password name=contraseña required>
                <br><br>
                <input type=submit name= ini value=Enviar>
            </fieldset>
        </form>
    </body>
    </html>";
?>