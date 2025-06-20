<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Historia Futurista</title>
 <link rel="icon" type="image/x-icon" href="img/logo.png">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
    </head>
<body>
    <header>
      <div class="logo">
         <a href="index.html"><img src="img/logo.png"></a>
      </div>
        <div class="esco">
          <a href="#" id="icono"> <i class="fa fa-bars" style="color:black"; aria-hidden="true"></i> </a>
        </div>
        <nav id="navegador"> 
          <div class="boton">
               <a href="vanguardia.html">Vanguardia</a>
              </div>
          <div class="boton">
              <a href="linea de tiempo.html">Linea de Tiempo</a>
              </div>
          <div class="boton">
              <a href="artistas.html">Artistas</a>
              </div>
              <div class="boton">
                <a href="obras.html">Obras</a>
                </div>
                <div class="boton">
                  <a href="futu_ww2.php">Futurismo en la segunda guerra mundial</a>
                  </div>
                  <div class="boton">
                    <a href="contacto.html">Contacto</a>
                    </div>
        </nav>
    </header>


	<p>	Hola </p>
	<?php

if(isset($_SESSION['nombre']) and isset($_SESSION['apellido']) ){
	
echo "Hola! ";
echo $_SESSION['nombre']." ";
echo $_SESSION['apellido'];
echo "<p><img src='imagenes/cuadro.jpg' /></p>";
echo "<a href='salir.php'>Cerrar sesion</a>";

	
}else{
	echo "Solo usuarios registrados...";
	include("registro.php");
	include("login.html");
}
?>

    
    <footer>
      <div class="redes">
        <p>Contáctanos por nuesta pestaña de <a href="contacto.html" style="color:wheat";>Contacto</a> o envía un correo a contacto@HF.com</p>
        <p>Creado por Ignacio Oubiña</p>
        <p>Aviso legal</p>
        <a href="https:/www.facebook.com/" ; target="_blank">
          <i
            class="fa fa-facebook-official fa-2x fa-inverse"style="color:rgb(253, 253, 253)";
            aria-hidden="true"
          >
        </i>
        </a>
        <a href="https:/www.twitter.com/" ; target="_blank">
          <i class="fa fa-twitter fa-2x fa-inverse"style="color:rgb(253, 253, 253)"; aria-hidden="true"></i>
        </a>
        <a href="https:/www.youtube.com/" ; target="_blank">
          <i class="fa fa-youtube-play fa-2x fa-inverse" style="color:rgb(253, 253, 253)"; aria-hidden="true"></i>
        </a>
        <a href="https:/instagram.com/" ; target="_blank">
          <i class="fa fa-instagram fa-2x fa-inverse"; style="color:rgb(255, 255, 255)"; aria-hidden="true"></i>
        </a>
      </div>
   </footer>
    <script>
        document.getElementById('icono').addEventListener('click', function() {
            document.getElementById('navegador').classList.toggle('mostrarmenu');
        });
    </script>
    
</body>
</html>
