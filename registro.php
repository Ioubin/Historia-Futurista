<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registro</title>
</head>

<body>

<?php
    include("conectar.php");

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $usuario = $_POST['usuario'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Check if username already exists
    $check_user = mysqli_query($conexion, "SELECT usuario FROM usuarios WHERE usuario='$usuario'");
    if(mysqli_num_rows($check_user) > 0) {
        echo "El nombre de usuario ya existe. Por favor elija otro.";
        exit();
    }

    if ($_POST['newsletter'] === "") {
        $news="no";
    } else {
        $news="si";
    }

    $_SESSION['nombre'] = $nombre;

    $consulta = mysqli_query($conexion, "INSERT INTO usuarios (nombre, apellido, email, usuario, password, newsletter) VALUES('$nombre','$apellido','$email', '$usuario', '$password', '$news')");

    if($consulta) {
        header("Location:login.html");
    } else {
        echo "Error al registrar usuario. Por favor intente nuevamente.";
    }
?>    

</body>
</html>