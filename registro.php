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
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f4f4f4;
                text-align: center;
            }
            form {
                margin: 20px auto;
                width: 300px;
                background-color: #fff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            h1 {
                margin-top: 0;
            }
            hr {
                margin-top: 20px;
                border: 0;
                border-top: 1px solid #d9bbbb;
            }
            p {
                margin-top: 20px;
            }
            a {
                text-decoration: none;
            }
            input[type="text"],
            input[type="password"],
            input[type="email"],
            input[type="tel"],
            input[type="submit"],
            input[type="button"] {
                width: calc(100% - 20px);
                padding: 10px;
                margin-bottom: 10px;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }
            input[type="submit"] {
                background-color: #4CAF50;
                color: white;
                border: none;
                cursor: pointer;
            }
            input[type="submit"]:hover {
                background-color: #45a049;
            }
            input[type="button"] {
                padding: 10px 20px;
                background-color: #008CBA;
                color: white;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }
            input[type="button"]:hover {
                background-color: #005f75;
            }
        </style>
       
        <?php
         /* Inlcuimos la conexion a la BD */
        include 'conexion.php';

        // Obtenemos la conexión utilizando la función getConn() (definida en el php de conexion a la BD)
        $conexion =  getConnexion();
        if (isset($_POST['enviar']))
        {
                /*compruebo que los campos no esten vacios y si es asi hago un insert para introducir los datos correspondientes*/
                if(isset($_REQUEST['id']) && isset($_REQUEST['nombre']) && isset($_REQUEST['apellido1'])&& isset($_REQUEST['apellido2']) && isset($_REQUEST['nombre']) && isset($_REQUEST['contrasena']) 
                    && isset($_REQUEST['email']) && isset($_REQUEST['telefono']) && isset($_REQUEST['dni'])  )
                {
                  mysqli_query($conexion, "INSERT INTO usuario(id_usuario,	nombre,	apellido1,apellido2,nombre_usuario,contraseña,email,telefono,dni) "
                        . "VALUES ('" . $_REQUEST['id'] . "','" . $_REQUEST['nombre'] . "','" . $_REQUEST['apellido1']  . "','" . $_REQUEST['apellido2'] . "','" . $_REQUEST['nombre']
                             . "','" . $_REQUEST['contrasena'] . "','" . $_REQUEST['email'] . "','" . $_REQUEST['telefono'] . "','" . $_REQUEST['dni'] . "')")
                          or die("Problemas en el select" . mysqli_error($conexion));

                print "Se ha creado el usuario";
            } 
             
        }




            
        
        
        
        
        
        
        
        
        ?>
        <form name="form" action="" method="POST" enctype="multipart/form-data">
            <h1>Registro</h1>
            <hr>
            <h3>Introducir datos:</h3>
            <br>
            id:
             <input type="text" name="id" value="" />
            <br>
            <br>
            Nombre:
            <input type="text" name="nombre" value="" />
            <br>
            <br>
            
            Apellido1:
            <input type="text" name="apellido1" value="" />
            <br>
            <br>
             Apellido2:
            <input type="text" name="apellido2" value="" />
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
    </body>
</html>
