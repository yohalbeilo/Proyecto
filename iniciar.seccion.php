<?php
require('conexion.php');

$mensaje_error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $mysqli->real_escape_string($_POST['email']);
    $contrasena = $mysqli->real_escape_string($_POST['contrasena']);

    $sql = "SELECT * FROM registradas WHERE correo='$email' AND contrasena='$contrasena'";
    $resultado = $mysqli->query($sql);

    if ($resultado->num_rows > 0) {
        header("Location: bienvenida.php");
        exit();
    } else {
        $mensaje_error = "Cuenta no encontrada";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <script>
        function togglePassword() {
            var passwordField = document.getElementById("contrasena");
            var toggleIcon = document.getElementById("togglePassword");
            if (passwordField.type === "password") {
                passwordField.type = "text";
                toggleIcon.classList.remove("bi-eye");
                toggleIcon.classList.add("bi-eye-slash");
            } else {
                passwordField.type = "password";
                toggleIcon.classList.remove("bi-eye-slash");
                toggleIcon.classList.add("bi-eye");
            }
        }
    </script>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>
<body class="d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4 shadow" style="width: 350px;">
        <h3 class="text-center">Ingresar</h3>

        <form class="form-horizontal" method="POST" action="iniciar seccion.php" enctype="multipart/form-data" autocomplete="off">
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="email" required>
            </div>
            <div class="mb-3 position-relative">
                <label for="password" class="form-label">Contraseña</label>
                <div class="input-group">
                    <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="contraseña" required>
                    <button class="btn btn-outline-secondary" type="button" onclick="togglePassword()">
                        <i id="togglePassword" class="bi bi-eye"></i>
                    </button>
                </div>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
            </div>

            <!-- Enlace eliminado -->

            <div class="text-center mt-2">
                <a href="nueva cuenta.php" class="text-decoration-none">Crear cuenta</a>
            </div>
        </form>
    </div>
</body>
</html>
