<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registro</title>
<link rel="stylesheet" href="estilos.css">
</head>

<body>

<?php
    // Enable error reporting for debugging
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    include("conectar.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        try {
            $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
            $apellido = mysqli_real_escape_string($conexion, $_POST['apellido']);
            $email = mysqli_real_escape_string($conexion, $_POST['email']);
            $usuario = mysqli_real_escape_string($conexion, $_POST['usuario']);
            $password = md5($_POST['password']);
            $news = isset($_POST['newsletter']) ? 'si' : 'no';

            if (empty($nombre) || empty($apellido) || empty($email) || empty($usuario) || empty($_POST['password'])) {
                throw new Exception("Todos los campos son obligatorios.");
            }

            $check_user = mysqli_query($conexion, "SELECT usuario FROM usuarios WHERE usuario = '$usuario'");
            if (!$check_user) {
                throw new Exception("Error checking username: " . mysqli_error($conexion));
            }
            if (mysqli_num_rows($check_user) > 0) {
                throw new Exception("El nombre de usuario ya existe. Por favor elija otro.");
            }

            $sql = "INSERT INTO usuarios (nombre, apellido, email, usuario, password, newsletter) VALUES('$nombre','$apellido','$email', '$usuario', '$password', '$news')";
            $consulta = mysqli_query($conexion, $sql);
            if (!$consulta) {
                throw new Exception("Error al registrar usuario: " . mysqli_error($conexion));
            }

            // Success: immediate redirect
            header("Location: login.php");
            exit();
        } catch (Exception $e) {
            echo "<div style='background: #f8d7da; padding: 10px; margin: 10px; border: 1px solid #f5c6cb;'>";
            echo "Error: " . $e->getMessage();
            echo "<br><a href='registro.html'>Volver al registro</a>";
            echo "</div>";
        }
    } else {
        header("Location: registro.html");
        exit();
    }
?>    

</body>
</html>