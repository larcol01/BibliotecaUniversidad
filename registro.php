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
            
            
            <input type="radio" name="alumno" value="1">Alumno
            <br>
            <input type="radio" name="Alumno_doctorado/Proyecto_fin_de_carrera" value="2">Alumno doctorado / Proyecto fin de carrera
            <br>
            <input type="radio" name="profesor" value="3">Profesor
            <br>
            <input type="radio" name="autor" value="4">Autor
            <br>
           <br>
            
            <input type="submit" value="Registrar" name="enviar" /><br><br>
            <hr>
            <p>¿Ya te has registrado?</p>
            <a href="login.php"><input type="button" value="Volver a Login" name="cancelar" /></a>
            
            
        </form>
        <?php
            /*Aqui incluyo la conexion a la base de datos que esta creado en otro php separado */
            include './conexion.php';
            /*Aqui se obtiene la conexion de la base de datos utilizando la funcion getConexion() que he creado en otro php diferente*/
            $conexion  = getConnexion();
            /*Aqui compruebo si se ha enviado los datos del formulario del nuevo usuario, si es asi entra dentro*/
            if (isset($_POST['enviar']))
            {
                if ($_REQUEST['alumno'] == "1") {
                    $tipoAlumno = 1;
                    echo  $tipoAlumno;
                 } 
                 if($_REQUEST['Alumno_doctorado/Proyecto_fin_de_carrera'] == "2"){
                     $tipoAlumno = 2;
                    echo  $tipoAlumno;
                 }
                 if($_REQUEST['profesor'] == "3"){
                     $suma = 3;
                    echo  $tipoAlumno;
                 }
                 if($_REQUEST['autor'] == "4"){
                     $suma = 4;
                    echo  $tipoAlumno;
                 }
                 
                /*compruebo que los campos no esten vacios y si es asi hago un insert para introducir los datos correspondientes*/
                if(isset($_REQUEST['nombre']) && isset($_REQUEST['apellido']) && isset($_REQUEST['dni']) && isset($_REQUEST['contraena']) 
                    && isset($_REQUEST['email']) && isset($_REQUEST['telefono']) && isset($_REQUEST['alumno']) || isset($_REQUEST['Alumno_doctorado/Proyecto_fin_de_carrera']) 
                        || isset($_REQUEST['profesor']) || isset($_REQUEST['autor']) )
                {
                    $consulta = "insert into usuario(nombre, apellido, dni, contrasena, email, telefono, dni) "
                        . "VALUES ('" . $_REQUEST['nombre'] . "','" . $_REQUEST['apellido'] . "', '" . $_REQUEST['usuario'] 
                        . "','" . $_REQUEST['contrasena'] . "','" . $_REQUEST['email'] . "','" . $_REQUEST['telefono'] . "','" . $_REQUEST['dni'] . "')";


                    $consulta = mysqli_query($conexion, $consulta)
                            or die("Fallo en la consulta");
                }






            }
        
        
        
        
        
        
        
        
        ?>
    </body>
</html>
