<?php

require 'conexion.php';

$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
$apellido = isset($_POST['apellido']) ? $_POST['apellido'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$contrasena = isset($_POST['contrasena']) ? $_POST['contrasena'] : '';


$sql = "INSERT INTO registradas (nombre, apellido, correo, contrasena)
VALUES ('$nombre','$apellido','$email','$contrasena')";
$resultado = $mysqli->query($sql)

?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<div class="row" style="text-align:center">
    <div class="row">
        <?php if($resultado) { ?>
        <h3>Cuenta creada con exito</h3>
        <?php } else { ?>
        <h3>Error al crear cuenta</h3>
        <?php } ?>
    </div>
</div>
</div>

<a href="index.php" class="btn btn-primary">Regresar</a>

    
</body>
</head>