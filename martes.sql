-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-05-2025 a las 22:05:39
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `martes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artistas`
--

CREATE TABLE `artistas` (
  `id` int(8) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `bio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `artistas`
--

INSERT INTO `artistas` (`id`, `nombre`, `bio`) VALUES
(1, 'Giacomo Balla', '<div class=\"artist-card\">\r\n        <div class=\"artist-image\">\r\n          <img src=\"img/artistas/gi.png\" alt=\"Giacomo Balla\">\r\n        </div>\r\n        <div class=\"artist-info\">\r\n          <h3>Giacomo Balla (1871–1958)</h3>\r\n          <p>Fue un pintor y diseñador italiano que jugó un rol esencial en el desarrollo del Futurismo. \r\n          Exploró el uso del color y la forma para representar el movimiento, la luz y la velocidad. \r\n          Fue coautor del Manifiesto de los Pintores Futuristas y creó obras vibrantes y abstractas que reflejan la energía del siglo XX.\r\n          Más adelante, también aplicó los principios futuristas al diseño de objetos, moda y espacios.</p>\r\n        </div>\r\n      </div>'),
(2, 'Umberto Boccioni', '  <div class=\"artist-card\">\r\n        <div class=\"artist-image\">\r\n          <img src=\"img/artistas/um.png\" alt=\"Umberto Boccioni\">\r\n        </div>\r\n        <div class=\"artist-info\">\r\n          <h3>Umberto Boccioni (1882–1916)</h3>\r\n          <p>Fue un pintor y escultor italiano, figura clave del Futurismo. Se unió al movimiento en 1910 y ayudó a definir su estilo visual, \r\n          centrado en el movimiento, la energía y la modernidad. Sus obras más famosas, como Formas únicas de continuidad en el espacio,\r\n          buscaban representar la velocidad y el dinamismo del mundo moderno. Aunque murió joven durante la Primera Guerra Mundial, \r\n          dejó una gran influencia en el arte contemporáneo.</p>\r\n        </div>\r\n      </div>'),
(3, 'Filippo Tommaso Marinetti', '    <div class=\"artists-row\">\r\n      <div class=\"artist-card\">\r\n        <div class=\"artist-image\">\r\n          <img src=\"img/artistas/fi.png\" alt=\"Filippo Tommaso Marinetti\">\r\n        </div>\r\n        <div class=\"artist-info\">\r\n          <h3>Filippo Tommaso Marinetti (1876–1944)</h3>\r\n          <p>Fue un poeta, dramaturgo y editor italiano, conocido por ser el fundador del movimiento futurista. \r\n          En 1909 publicó el Manifiesto Futurista en el diario francés Le Figaro, donde propuso una ruptura total con el pasado y exaltó la velocidad,\r\n          la tecnología, la juventud y la violencia como símbolos de una nueva era.\r\n          Marinetti promovió una estética revolucionaria que celebraba los autos, las máquinas y la guerra como formas de renovación cultural. \r\n          Su estilo provocador y radical influyó no solo en la literatura, sino también en la pintura, la escultura, el diseño y la política.</p>\r\n        </div>\r\n      </div>\r\n    </div>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `id` int(5) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `asunto` text NOT NULL,
  `mensaje` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`id`, `nombre`, `email`, `asunto`, `mensaje`) VALUES
(2, 'Jorge', 'Jorge@gmail.com', '', 'hola'),
(3, 'Jorge', 'Jorge@gmail.com', '', 'hola'),
(4, 'Pepe', 'pepe@outlook.com', '', 'soy daltonico y esta todo verde'),
(5, 'Pepe', 'pepe@outlook.com', 'Contacto desde el sitio', 'soy daltonico y esta todo verde'),
(6, 'Marcos', 'marcos@hotmail.com', 'Contacto desde el sitio', 'No me gusta la font , cambiala'),
(7, 'Marcos', 'arcor@hotmail.com', '', 'No me gusta la font , cambialas'),
(8, 'Pepe', 'pepe@outlook.com', 'Contacto desde el sitio', 'Nombre: Pepe Email: pepe@outlook.com Asunto: Contacto desde el sitio Mensaje: hola'),
(9, 'Pepe', 'pepe@outlook.com', 'Contacto desde el sitio', 'Nombre: Pepe Email: pepe@outlook.com Asunto: Contacto desde el sitio Mensaje: hola'),
(10, 'Ruiseñor', 'ruin@gmail.com', 'Contacto desde el sitio', 'From: Ruiseñor<ruin@chaufa.com>'),
(11, 'Ruiseñora', 'ruina@chaufa.com', 'Contacto desde el sitio', 'Nombre: Ruiseñora Email: ruina@chaufa.com Asunto: Contacto desde el sitio Mensaje: funciona o no funciona?'),
(12, 'Ruiseñora', 'ruina@chaufa.com', 'Contacto desde el sitio', 'Nombre: Ruiseñora Email: ruina@chaufa.com Asunto: Contacto desde el sitio Mensaje: funciona o no funciona?'),
(13, 'Jose', 'jose@chaufa.com', 'Contacto desde el sitio', ' Mensaje: funciona o no funciona?'),
(14, 'Joseju', 'joseju@chaufa.com', 'Contacto desde el sitio', 'funciona o no funciona?'),
(15, 'Josejuo', 'josejuo@chaufa.com', '', 'funciona o no funciona?'),
(16, 'Josejuo', 'josejuo@chaufa.com', 'Cosas tecnicas', 'funciona o no funciona?'),
(17, 'Maria', 'maria@outlook.com', 'Sugerencia', 'hola buen dia'),
(18, 'Juana', 'juana@outlook.com', 'Sugerencias', 'hola buen dias'),
(19, 'Quique', 'quique@outlook.com', 'No funca', 'hola');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `artistas`
--
ALTER TABLE `artistas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `artistas`
--
ALTER TABLE `artistas`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
