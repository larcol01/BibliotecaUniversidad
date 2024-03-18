<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    </head>
    <body>
        <h1>Login</h1>
        <hr>
        <form name="form" action="" method="POST" enctype="multipart/form-data">
                Nombre socio:
            <input type="text" name="usuario" value=""/> 
            <br>
            <br>
                Numero socio:
            <input type="text" name="numero" value=""/> 
            <br>
            <br>
            
                Contraseña:
            <input type="password" name="contrasena" value="" />
            <br>
            <br>
            <input type="submit" value="Enviar" name="enviar"/>
            
            <br>
            <br>
            <hr>
            <p>¿No tienes cuenta?</p>
            <a href="registro.php"><input type="button" value="Registro" name="registro" /></a>
            
            
            
            
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
