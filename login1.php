<?php

session_start();

$error_message = '';
$show_error = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$usuario = $_POST['usuario'];
	$password = $_POST['password'];

	include("conectar.php");

	// First get the user's stored password
	$consulta = mysqli_query($conexion, "SELECT nombre, apellido, email, password FROM usuarios WHERE usuario='$usuario'");

	$resultado = mysqli_num_rows($consulta);

	if ($resultado != 0) {
		$respuesta = mysqli_fetch_array($consulta);
		$stored_password = $respuesta['password'];
		
		// Check if the stored password is hashed (starts with $2y$)
		if (strpos($stored_password, '$2y$') === 0) {
			// Password is hashed, use password_verify
			if (password_verify($password, $stored_password)) {
				$_SESSION['nombre'] = $respuesta['nombre'];
				$_SESSION['apellido'] = $respuesta['apellido'];
				header("Location: futu_ww2.php");
				exit();
			} else {
				$error_message = "Contraseña incorrecta";
				$show_error = true;
			}
		} else {
			// Password is plain text, compare directly
			if ($password === $stored_password) {
				$_SESSION['nombre'] = $respuesta['nombre'];
				$_SESSION['apellido'] = $respuesta['apellido'];
				header("Location: futu_ww2.php");
				exit();
			} else {
				$error_message = "Contraseña incorrecta";
				$show_error = true;
			}
		}
	} else {
		$error_message = "Usuario no encontrado";
		$show_error = true;
	}
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
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
    <style>
        .login-container {
            max-width: 400px;
            margin: 2rem auto;
            padding: 2rem;
            background: #28231e;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }
        .login-container h2 {
            color: #f0b932;
            text-align: center;
            margin-bottom: 1.5rem;
        }
        .login-form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        .login-form label {
            color: white;
            font-size: 1.2rem;
        }
        .login-form input[type="text"],
        .login-form input[type="password"] {
            width: 100%;
            padding: 0.8rem;
            border: 2px solid #f0b932;
            border-radius: 5px;
            background: #aa9687;
            color: white;
            font-family: "Bebas Neue", sans-serif;
            font-size: 1.1rem;
        }
        .login-form input[type="submit"] {
            background: #f0b932;
            color: #28231e;
            padding: 1rem;
            border: none;
            border-radius: 5px;
            font-family: "Bebas Neue", sans-serif;
            font-size: 1.2rem;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        .login-form input[type="submit"]:hover {
            background: #a4abaf;
        }
        .register-link {
            text-align: center;
            margin-top: 1rem;
        }
        .register-link a {
            color: #f0b932;
            text-decoration: none;
            font-size: 1.1rem;
        }
        .register-link a:hover {
            color: #a4abaf;
        }
        .error-message {
            background: rgba(255, 0, 0, 0.1);
            border: 1px solid #ff0000;
            color: #ff0000;
            padding: 1rem;
            border-radius: 5px;
            margin-bottom: 1rem;
            text-align: center;
            font-size: 1.1rem;
        }
    </style>
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

    <div class="login-container">
        <h2>Iniciar Sesión</h2>
        <?php if($show_error): ?>
            <div class="error-message">
                <?php echo $error_message; ?>
            </div>
        <?php endif; ?>
        <form action="login1.php" method="post" class="login-form">
            <label>Nombre de usuario
                <input name="usuario" type="text" required maxlength="12" value="<?php echo isset($_POST['usuario']) ? htmlspecialchars($_POST['usuario']) : ''; ?>" />
            </label>
            <label>Contraseña
                <input type="password" name="password" required maxlength="32" />
            </label>
            <input type="submit" value="Iniciar Sesión"/>
        </form>
        <div class="register-link">
            <a href="registro.html">¿No tienes cuenta? Regístrate aquí</a>
        </div>
    </div>
 
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
