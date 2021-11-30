<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Formulario_Minecraft.css">
    <title>Registro</title>
</head>


<body>

    <div class="FondoForm">

        <h1>REGISTRO</h1>
        <form action="" method="POST">
            <input class="datos" type="text" name="Nombre" placeholder="Ingrese su nombre(s)">
            <input class="datos" type="text" name="ApellidoPaterno" placeholder="Ingrese su apellido paterno">
            <input class="datos" type="text" name="ApellidoMaterno" placeholder="Ingrese su apellido materno">
            <input class="datos" type="number" name="Matricula" placeholder="Ingrese su numero de matricula">
            <input class="datos" type="text" name="Grupo" placeholder="Ingrese su grupo (solamente grupo)">
            <input class="datos" type="email" name="Correo" placeholder="Ingrese su correo electronico">
            <input class="datos" type="text" name="Contraseña" placeholder="Ingrese su contraseña">
            <input class="datos" type="text" name="Comentario" placeholder="Ingrese algun comentario que nos ayude a mejorar :D">
            <button type="submit" name="boton">Enviar datos</button>
        </form>
    </div>

    <?php

    error_reporting(0);

    $con=mysqli_connect('localhost','root','','practica3') or die ('error en la conexion con el servidor');

    $sql="INSERT INTO minecraft VALUES(NULL,'".$_POST['Nombre']."','".$_POST['ApellidoPaterno']."','".$_POST['ApellidoMaterno']."','".$_POST['Matricula']."','".$_POST['Grupo']."','".$_POST['Correo']."','".$_POST['Contraseña']."','".$_POST['Comentario']."')";

    $resultado=mysqli_query($con,$sql) or die ('error en la query database');

    mysqli_close($con);
    ?>
    
</body>
</html>