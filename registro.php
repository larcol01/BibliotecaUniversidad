<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registro</title>
    </head>
    <body>
        
        <form name="form" action="" method="POST" enctype="multipart/form-data">
            <h1>Registro</h1>
            <hr>
            <h3>Introducir datos:</h3>
            <br>
            
            Nombre:
            <input type="text" name="nombre" value="" />
            <br>
            <br>
            
            Apellido:
            <input type="text" name="apellido" value="" />
            <br>
            <br>
            
            DNI/NIE:
            <input type="text" name="dni" pattern="[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKE]$" value=""/>
            <br>
            <br>
            
            Contraseña:
            <input type="password" name="contrasena" value=""/>
            <br>
            <br>
            
            Email:
            <input type="email" name="email" value=""/>
            <br>
            <br>
            
            Telefono:
            <input type="tel" id="telefono" name="telefono" pattern="[6789]\d{8}" placeholder="Ej. 612345678" required>
            <br>
            <br>
            
            <input type="submit" value="Registrar" name="enviar" /><br><br>
            <hr>
            <p>¿Ya te has registrado?</p>
            <a href="login.php"><input type="button" value="Volver a Login" name="cancelar" /></a>
            
            
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
