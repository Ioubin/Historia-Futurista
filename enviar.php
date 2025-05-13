<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Enviar</title>
</head>

<body>
<?php

//se arma el array POST
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$asunto=$_POST['asunto'];
$mensaje=$_POST["mensaje"];

$destino="mail@mail.com,mail2@mail.com";
$asunto="".$asunto;
$mensaje="".$mensaje;

$header="From: ".$nombre."<".$email.">";

include "conectar.php";


// $consulta=mysqli_query($conexion, "INSERT INTO contactos VALUES ('','$nombre','$email','$localidad','$comentario')");

$consulta = mysqli_query($conexion, "INSERT INTO contactos (nombre,email,asunto,mensaje)VALUES ( '$nombre','$email','$asunto','$mensaje')") or die(mysqli_error($conexion));

?>
</body>
</html>	
