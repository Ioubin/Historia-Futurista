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
                  <a href="futu_ww2.html">Futurismo en la segunda guerra mundial</a>
                  </div>
                  <div class="boton">
                    <a href="contacto.html">Contacto</a>
                    </div>
        </nav>
    </header>

  <div class="h2">
    <h2>Los padres del Futurismo</h2> 
  </div>


<div class="form">
 
  <div class="form-group">
  <form action="resultados.php" method="post">
    <label>Buscar Artistas
    <input type="search" name="buscar" placeholder="Buscar..." />
    <input type="submit" value="Enviar">
    </label>
    </form>
  </div>
</div>

	<section>

    <h1 style= "padding: 10px;
    display: flex;
    justify-content: center;
     "> 
<?php

	include('conectar.php');

	$buscar = $_POST['buscar'];
  	echo "Su consulta: <em>".$buscar."</em><br>"; 

	$consulta = mysqli_query($conexion, "SELECT * FROM artistas WHERE nombre LIKE '%$buscar%'");
?>
</h1>

<article style="    width: 60%;
    margin: 0 auto;
    padding: 10px;
    justify-items: center;">

   <h2 style="padding: 10px">
	<p>Cantidad de Resultados:
	<?php
		$nros=mysqli_num_rows($consulta);
		echo $nros;
	?>
	</p>
    </h2> 
	<?php
		while($resultados=mysqli_fetch_array($consulta)) {
	?>
    <p>
    <?php	
			echo $resultados['bio'] . "";
	?>
    </p>
    <hr/>
    <?php
		}

		mysqli_free_result($consulta);
		mysqli_close($conexion);

	?>
</article>
</section>

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

    <script>
        document.getElementById('icono').addEventListener('click', function() {
            document.getElementById('navegador').classList.toggle('mostrarmenu');
        });
    </script>

    <script>
        let currentSlide = 0;
         
        function showSlide(index) {
          const slides = document.querySelectorAll('.slide');
          const totalSlides = slides.length;
         
          if (index >= totalSlides) {
            currentSlide = 0;
          } else if (index < 0) {
            currentSlide = totalSlides - 1;
          } else {
            currentSlide = index;
          }
         
          slides.forEach((slide, i) => {
            slide.style.display = i === currentSlide ? 'block' : 'none';
          });
        }
         
        function nextSlide() {
          showSlide(currentSlide + 1);
        }
         
        function prevSlide() {
          showSlide(currentSlide - 1);
        }
         
        // Cambia automáticamente de diapositiva cada 3 segundos (ajusta según tus necesidades)
        setInterval(nextSlide, 3000);
         
        // Muestra la primera diapositiva al cargar la página
        showSlide(currentSlide);  
        </script>
    
</body>
</html>
