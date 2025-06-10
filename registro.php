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
    $password = md5($_POST['password']);


    $consulta = mysqli_query($conexion, "INSERT INTO usuarios (nombre, apellido, email, usuario, password, newsletter) VALUES('$nombre','$apellido','$email', '$usuario', '$password', '$news')");

    if($consulta) {
        header("Location:login.html");
    } else {
        echo "Error al registrar usuario. Por favor intente nuevamente.";
    }
?>    

</body>
</html>