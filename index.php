<?php
require('conexion.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <title >OneProject</title>
</head>
<body>

<header>
    <div class="logo">OneProject</div>
    <nav class="nav-right">
        <a href="iniciar seccion.php" class="btn login">Iniciar sesión</a>
        <a href="nueva cuenta.php" class="btn register">Registrarse</a>
    </nav>
</header>

<section class="hero">
    <h1>Portal Web de Usuarios</h1>
    <p>Sistema completo con registro, inicio de sesión, base de datos y control de versiones colaborativo.</p>
</section>

<div class="d-flex flex-wrap gap-3 justify-content-center mt-4">

    <div class="card" style="width: 14rem;">
        <img src="img/raimy.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Raimy Martinez</h5>
            <p class="card-text">Trabajo con Github y todo los codigos en el repositorio.                
            </p>
        </div>
    </div>

    <div class="card" style="width: 14rem;">
        <img src="img/alexander.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Alexander Parraz</h5>
            <p class="card-text">Creo la página de “Bienvenido” después del login.</p>
           
        </div>
    </div>

    <div class="card" style="width: 14rem;">
        <img src="img/jerson.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Jefferson Acosta</h5>
            <p class="card-text">Creo la página de inicio (Home) con cards, header y footer.</p>
          
        </div>
    </div>

    <div class="card" style="width: 14rem;">
        <img src="img/yohalbe.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Yohalbe Pichardo</h5>
            <p class="card-text">Organizo el trabajo del equipo.
 
                Conecto el formulario a la base de datos.
            </p>
        </div>
    </div>

    <div class="card" style="width: 14rem;">
        <img src="img/josue.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Josue Morel</h5>
            <p class="card-text">Creo el inicio de sesión (login) y la verificación de usuario.</p>
            
        </div>
    </div>

</div>
<footer style="background: black; color:#fff; padding:20px 0; text-align:center; margin-top:40px;">
    <div style="max-width:900px; margin:auto;">
        <h3 style="margin-bottom:5px;">OneProject</h3>
        <p style="margin:0;">Tu mejor solución digital</p>
        <p style="margin-top:10px; font-size:14px; color:#aaa;">
            &copy; <?php echo date("Y"); ?> OneProject. Todos los derechos reservados.
        </p>
    </div>
</footer>


</body>
</html>
