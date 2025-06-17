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
            right: 32px;
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            gap: 0.3rem;
            z-index: 10;
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

        /* Shopping Cart Styles */
        .cart-icon {
            color: #f0b932;
            font-size: 1.8rem;
            cursor: pointer;
            position: relative;
            margin-right: 1rem;
        }
        .cart-count {
            position: absolute;
            top: -8px;
            right: -8px;
            background: #ff0000;
            color: white;
            border-radius: 50%;
            padding: 0.2em 0.5em;
            font-size: 0.7em;
            font-weight: bold;
            line-height: 1;
        }
        .cart-overlay {
            display: none; /* Hidden by default */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }
        .cart-content {
            background: #28231e;
            color: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.5);
            width: 90%;
            max-width: 500px;
            position: relative;
        }
        .cart-content h3 {
            color: #f0b932;
            margin-bottom: 1.5rem;
            text-align: center;
            font-size: 1.8rem;
        }
        .cart-close-btn {
            position: absolute;
            top: 1rem;
            right: 1.5rem;
            background: none;
            border: none;
            color: #f0b932;
            font-size: 1.5rem;
            cursor: pointer;
        }
        .cart-items {
            list-style: none;
            padding: 0;
            margin-bottom: 1.5rem;
            max-height: 300px;
            overflow-y: auto;
        }
        .cart-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.8rem 0;
            border-bottom: 1px solid #444;
        }
        .cart-item:last-child {
            border-bottom: none;
        }
        .cart-item-info span {
            color: #f0b932;
            font-weight: bold;
        }
        /* New style for remove button */
        .cart-item-remove {
            background: none;
            border: none;
            color: #ff0000;
            font-size: 1.2rem;
            cursor: pointer;
            margin-left: 1rem;
        }
        .cart-total {
            text-align: right;
            font-size: 1.4rem;
            color: #f0b932;
            border-top: 2px solid #f0b932;
            padding-top: 1rem;
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
        <i class="fa fa-shopping-cart cart-icon" id="cart-icon"> <span class="cart-count">0</span></i>
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
                <div class="boton">
                    <a href="tienda.php">Tienda</a>
                </div>
      </nav>
  </header>

    <?php if(!$show_content): ?>
        <div class="login-message">
            <h2>Contenido Exclusivo</h2>
            <p>Esta sección es solo para usuarios registrados. Por favor inicia sesión o regístrate para acceder al contenido.</p>
            <div class="login-buttons">
                <a href="login.php">Iniciar Sesión</a>
                <a href="registro.html">Registrarse</a>
            </div>
        </div>
    <?php endif; ?>

    <?php if($show_content): ?>
    <div class="h2">   
        <h2>Tienda Futurista</h2>
    </div>
    <section class="content-section">
        <div class="store-grid">
            <div class="store-item" data-product-id="1" data-product-name="Póster Futurista" data-product-price="10.00">
                <img src="img/obras/para.png" alt="Póster Futurista" />
                <h3>Antes de que se abra el paracaídas-Tullio-1939</h3>
                <p class="price">$15.00</p>
                <button class="buy-btn">Comprar</button>
            </div>
            <div class="store-item" data-product-id="2" data-product-name="Libro de Arte" data-product-price="25.00">
                <img src="img/obras/gen.png" alt="Libro de Arte" />
                <h3>Gente del Futuro-Yuon-1929</h3>
                <p class="price">$25.00</p>
                <button class="buy-btn">Comprar</button>
            </div>
            <div class="store-item" data-product-id="3" data-product-name="Estampa Coleccionable" data-product-price="5.00">
                <img src="img/obras/luz.png" alt="Estampa Coleccionable" />
                <h3>Luz de Calle-Giacomo-1909</h3>
                <p class="price">$55.00</p>
                <button class="buy-btn">Comprar</button>
            </div>
            <div class="store-item" data-product-id="4" data-product-name="Cuadro Decorativo" data-product-price="40.00">
                <img src="img/obras/bomb.png" alt="Cuadro Decorativo" />
                <h3>Bombardeo Aéreo-Tullio-1932</h3>
                <p class="price">$40.00</p>
                <button class="buy-btn">Comprar</button>
            </div>
             <div class="store-item" data-product-id="5" data-product-name="Taza de Café Futurista" data-product-price="15.00">
                <img src="img/obras/cafe.png" alt="Taza de Café Futurista" />
                <h3>Disturbios en la Galería-Boccioni-1919</h3>
                <p class="price">$15.00</p>
                <button class="buy-btn">Comprar</button>
            </div>
            <div class="store-item" data-product-id="6" data-product-name="Avión de Juguete" data-product-price="30.00">
                <img src="img/obras/plane.png" alt="Avión de Juguete" />
                <h3>Nuevo Planeta-Yuon-1921</h3>
                <p class="price">$30.00</p>
                <button class="buy-btn">Comprar</button>
              </div>
              <div class="store-item" data-product-id="7" data-product-name="Textil Abstracto" data-product-price="20.00">
                  <img src="img/obras/tela.png" alt="Textil Abstracto" />
                  <h3>Trabajadores textiles-Deineka-1917</h3>
                  <p class="price">$20.00</p>
                  <button class="buy-btn">Comprar</button>
              </div>
              <div class="store-item" data-product-id="8" data-product-name="Coche Veloz" data-product-price="35.00">
                  <img src="img/obras/auto.png" alt="Coche Veloz" />
                  <h3>Velocidad del Automovi-Balla-1913</h3>
                  <p class="price">$35.00</p>
                  <button class="buy-btn">Comprar</button>
              </div>
              <div class="store-item" data-product-id="9" data-product-name="Almohada Futurista" data-product-price="18.00">
                 <img src="img/obras/alm.png" alt="Almohada Futurista" />
                 <h3>El alma de la ciudad sin alma-Nevinson-1920</h3>
                 <p class="price">$18.00</p>
                 <button class="buy-btn">Comprar</button>
             </div>
             <div class="store-item" data-product-id="10" data-product-name="Dinamismo Urbano" data-product-price="50.00">
                 <img src="img/obras/dinamismo.png" alt="Dinamismo Urbano" />
                 <h3>Dinamismo de perro con correa-Balla-1912</h3>
                 <p class="price">$50.00</p>
                 <button class="buy-btn">Comprar</button>
               </div>
               <div class="store-item" data-product-id="11" data-product-name="Ferrovia" data-product-price="22.00">
                   <img src="img/obras/ferra.png" alt="Ferrovia" />
                   <h3>Ruedas Fervientes-Desconocido-1941</h3>
                   <p class="price">$22.00</p>
                   <button class="buy-btn">Comprar</button>
               </div>
               <div class="store-item" data-product-id="12" data-product-name="Martillo del Futuro" data-product-price="12.00">
                   <img src="img/obras/mart.png" alt="Martillo del Futuro" />
                   <h3>Martillo Neumático-Epstein-1913</h3>
                   <p class="price">$12.00</p>
                   <button class="buy-btn">Comprar</button>
               </div>
        </div>
    </section>
    <style>
        .store-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
            justify-content: center;
            margin: 2rem 0;
        }
        .store-item {
            background: #28231e;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            padding: 1.5rem;
            text-align: center;
            width: 220px;
        }
        .store-item img {
            width: 100%;
            border-radius: 8px;
            margin-bottom: 1rem;
        }
        .store-item h3 {
            color: #f0b932;
            margin-bottom: 0.5rem;
            font-size: 1.2rem;
        }
        .store-item .price {
            color: #fff;
            font-size: 1.1rem;
            margin-bottom: 1rem;
        }
        .buy-btn {
            background: #f0b932;
            color: #28231e;
            border: none;
            border-radius: 5px;
            padding: 0.7rem 1.5rem;
            font-size: 1rem;
            cursor: pointer;
            font-family: 'Bebas Neue', sans-serif;
            transition: background 0.3s;
        }
        .buy-btn:hover {
            background: #a4abaf;
        }
    </style>
    <?php endif; ?>

    <!-- Shopping Cart Overlay -->
    <div class="cart-overlay" id="cart-overlay">
        <div class="cart-content">
            <button class="cart-close-btn" id="cart-close-btn">&times;</button>
            <h3>Tu Carrito</h3>
            <ul class="cart-items" id="cart-items"></ul>
            <div class="cart-total">Total: $<span id="cart-total">0.00</span></div>
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
        <script>
            // Shopping Cart Logic
            const cartIcon = document.getElementById('cart-icon');
            const cartCount = document.querySelector('.cart-count');
            const cartOverlay = document.getElementById('cart-overlay');
            const cartCloseBtn = document.getElementById('cart-close-btn');
            const cartItemsList = document.getElementById('cart-items');
            const cartTotalSpan = document.getElementById('cart-total');
            const buyButtons = document.querySelectorAll('.buy-btn');

            let cart = JSON.parse(localStorage.getItem('shoppingCart')) || [];

            function saveCart() {
                localStorage.setItem('shoppingCart', JSON.stringify(cart));
            }

            function renderCart() {
                cartItemsList.innerHTML = '';
                let total = 0;
                if (cart.length === 0) {
                    cartItemsList.innerHTML = '<li style="text-align: center; color: #aaa;">Tu carrito está vacío.</li>';
                }
                cart.forEach(item => {
                    const listItem = document.createElement('li');
                    listItem.classList.add('cart-item');
                    listItem.innerHTML = `
                        <div class="cart-item-info">
                            <span>${item.name}</span> x ${item.quantity}
                        </div>
                        <div class="cart-item-price">
                            $${(item.price * item.quantity).toFixed(2)}
                            <button class="cart-item-remove" data-product-id="${item.id}">&times;</button>
                        </div>
                    `;
                    cartItemsList.appendChild(listItem);
                    total += item.price * item.quantity;
                });
                cartTotalSpan.textContent = total.toFixed(2);
                updateCartCount();

                // Attach event listeners to new remove buttons
                document.querySelectorAll('.cart-item-remove').forEach(button => {
                    button.addEventListener('click', (event) => {
                        const productIdToRemove = event.target.dataset.productId;
                        removeFromCart(productIdToRemove);
                    });
                });
            }

            function updateCartCount() {
                const count = cart.reduce((sum, item) => sum + item.quantity, 0);
                cartCount.textContent = count;
                cartCount.style.display = count > 0 ? 'inline-block' : 'none';
            }

            function addToCart(productId, productName, productPrice) {
                const existingItem = cart.find(item => item.id === productId);
                if (existingItem) {
                    existingItem.quantity++;
                } else {
                    cart.push({ id: productId, name: productName, price: productPrice, quantity: 1 });
                }
                saveCart();
                renderCart();
            }

            function removeFromCart(productId) {
                const itemIndex = cart.findIndex(item => item.id === productId);
                if (itemIndex > -1) {
                    if (cart[itemIndex].quantity > 1) {
                        cart[itemIndex].quantity--;
                    } else {
                        cart.splice(itemIndex, 1);
                    }
                }
                saveCart();
                renderCart();
            }

            // Event Listeners
            cartIcon.addEventListener('click', () => {
                cartOverlay.style.display = 'flex';
                renderCart();
            });

            cartCloseBtn.addEventListener('click', () => {
                cartOverlay.style.display = 'none';
            });

            buyButtons.forEach(button => {
                button.addEventListener('click', (event) => {
                    const itemElement = event.target.closest('.store-item');
                    const productId = itemElement.dataset.productId;
                    const productName = itemElement.dataset.productName;
                    const productPrice = parseFloat(itemElement.dataset.productPrice);
                    addToCart(productId, productName, productPrice);
                });
            });

            // Initial render
            renderCart();
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
    
