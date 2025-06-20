<?php
session_start();

if(isset($_SESSION['nombre']) and isset($_SESSION['apellido'])) {
    $welcome_message = "Bienvenido " . $_SESSION['nombre'] . " " . $_SESSION['apellido'];
    $show_content = true;
} else {
    $welcome_message = "Contenido Sensible";
    $show_content = false;
}
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
<link rel="stylesheet" href="css/lightbox.min.css">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
    <style>
        .login-message {
            max-width: 600px;
            margin: 2rem auto;
            padding: 2rem;
            background: #28231e;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
            text-align: center;
            color: white;
        }
        .login-message h2 {
            color: #f0b932;
            margin-bottom: 1rem;
        }
        .login-message p {
            margin-bottom: 1.5rem;
            font-size: 1.2rem;
        }
        .login-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
        }
        .login-buttons a {
            background: #f0b932;
            color: #28231e;
            padding: 0.8rem 1.5rem;
            border-radius: 5px;
            text-decoration: none;
            font-size: 1.1rem;
            transition: background 0.3s ease;
        }
        .login-buttons a:hover {
            background: #a4abaf;
        }
        .user-info {
    position: absolute;
    top: 24px;
    right: 10px;
    display: flex;
    flex-direction: column;
    gap: 0.3rem;
    z-index: 10;
    align-items: center;
        }
        .user-info .welcome-message {
            color: #f0b932;
            background: transparent;
            font-size: 1.1rem;
            margin: 0;
            padding: 0.5rem 1rem;
            border-radius: 5px;
        }
        .user-info .logout-link a {
            background: transparent;
            color: #f0b932;
            border: 2px solid #f0b932;
            border-radius: 5px;
            padding: 0.5rem 1.2rem;
            text-decoration: none;
            font-size: 1.1rem;
            transition: background 0.3s, color 0.3s;
            margin-left: 0;
        }
        .user-info .logout-link a:hover {
            background: #a4abaf;
            color: #28231e;
        }
    </style>
    </head>
<body>
  <header>
    <div class="logo">
       <a href="index.html"><img src="img/logo.png"></a>
    </div>
    <?php if($show_content): ?>
    <div class="user-info">
        <span class="welcome-message"><?php echo $welcome_message; ?></span>
        <span class="logout-link"><a href="salir.php">Cerrar sesión</a></span>
    </div>
    <?php endif; ?>
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
                  </div>
            <div class="boton">
              <a href="tienda.php">Tienda</a>
          </div>
      </nav>
  </header>

    <?php if(!$show_content): ?>
        <div class="login-message">
            <h2>Contenido Sensible</h2>
            <p>Esta sección es solo para usuarios registrados. Por favor inicia sesión o regístrate para acceder al contenido.</p>
            <div class="login-buttons">
                <a href="login.php">Iniciar Sesión</a>
                <a href="registro.html">Registrarse</a>
            </div>
        </div>
    <?php endif; ?>

    <?php if($show_content): ?>
    <div class="h2">   
        <h2> El futurismo en la segunda guerra mundial </h2>
    </div>
  <section class="content-section">
       <div class="fila">
        <div class="arte">
                     <a href="img/obras/para_g.png" data-lightbox="fotos" title="Tullio Crali Italia, 1939:
                     Antes de que se abra el paracaídas, 141 x 151 cm , Oleo,Casa Cavazzini, Udine (Italia)">
    <img src="img/obras/para.png">
</a>
</div>
<div class="arte">
    <a href="img/obras/muso_g.png" data-lightbox="fotos" title="Renato Bertelli Italia 1933  
    Perfil continuo. Busto de Mussolini , 34,4 x 17,3 x 27,6 ,Escultura en madera , Museo de Arte Moderno, Rovereto (Italia)">
      <img src="img/obras/muso.png">
</a>
 </div>
<div class="arte">
              <a href="img/obras/ferra_g.png" data-lightbox="fotos" title=" Arista Desconocido Italia 1941
              Ruedas fervientes almas fervientes , Propaganda Facista sobre la Guerra de Etiopia , Estampilla de correo ">
              <img src="img/obras/ferra.png">
</a>
</div>
<div class="arte">
              <a href="img/obras/bomb_g.png" data-lightbox="fotos" title="Tullio Crali Italia 1932
              Bombardeo aéreo 80x56 cm , Oleo , Palazzo Aeronautica de Roma">
<img src="img/obras/bomb.png">
</a>
</div>
</section>   

<div class="text-content">
<p>Durante la Segunda Guerra Mundial, el Futurismo vivió su última etapa activa, profundamente influenciada por el contexto político y social del momento. Para entonces, el movimiento ya se encontraba muy vinculado al régimen fascista italiano, relación que se había consolidado en las décadas anteriores gracias al entusiasmo de <em>Filippo Tommaso Marinetti</em> por las ideas nacionalistas, expansionistas y belicistas de <em>Benito Mussolini</em>.</p>

<p>Marinetti consideraba la guerra como una forma de purificación social y una oportunidad para el renacimiento de la nación italiana, ideas que coincidían con los principios del fascismo. Esto llevó a que el Futurismo se convirtiera en una herramienta útil para la propaganda del régimen, que valoraba la exaltación de la fuerza, la velocidad, la tecnología y el heroísmo, todos elementos presentes desde el origen del movimiento.</p>
  
<p>Durante la guerra, el arte futurista fue utilizado en carteles, publicaciones y diseño gráfico para promover el esfuerzo bélico, fomentar el nacionalismo y representar al soldado moderno como un símbolo del poder mecánico y el avance tecnológico. Sin embargo, este vínculo con la dictadura también generó rechazo en el mundo artístico internacional, que pasó a considerar al Futurismo como un movimiento comprometido con una ideología autoritaria.</p>
  
<p>Tras la muerte de Marinetti en 1944 y el colapso del régimen fascista en 1945, el Futurismo quedó asociado a una etapa oscura de la historia italiana. Su legado artístico, aunque innovador, fue eclipsado durante décadas por su conexión con la propaganda de guerra y la política totalitaria. No obstante, con el paso del tiempo, el Futurismo fue reevaluado por su importancia en la evolución de las vanguardias del siglo XX, separando sus logros estéticos de sus vínculos ideológicos.</p>
</div>
    <?php endif; ?>

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

            <script src="js/lightbox-plus-jquery.min.js"></script>
        
    </body>
    </html>
    
