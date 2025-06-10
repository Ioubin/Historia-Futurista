-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-06-2025 a las 21:56:42
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
-- RELACIONES PARA LA TABLA `artistas`:
--

--
-- Volcado de datos para la tabla `artistas`
--

INSERT INTO `artistas` (`id`, `nombre`, `bio`) VALUES
(1, 'Giacomo Balla', '<div class=\"artist-card\">\r\n        <div class=\"artist-image\">\r\n          <img src=\"img/artistas/gi.png\" alt=\"Giacomo Balla\">\r\n        </div>\r\n        <div class=\"artist-info\">\r\n          <h3>Giacomo Balla (1871–1958)</h3>\r\n          <p>Fue un pintor y diseñador italiano que jugó un rol esencial en el desarrollo del Futurismo. \r\n          Exploró el uso del color y la forma para representar el movimiento, la luz y la velocidad. \r\n          Fue coautor del Manifiesto de los Pintores Futuristas y creó obras vibrantes y abstractas que reflejan la energía del siglo XX.\r\n          Más adelante, también aplicó los principios futuristas al diseño de objetos, moda y espacios.</p>\r\n        </div>\r\n      </div>'),
(2, 'Umberto Boccioni', '  <div class=\"artist-card\">\r\n        <div class=\"artist-image\">\r\n          <img src=\"img/artistas/um.png\" alt=\"Umberto Boccioni\">\r\n        </div>\r\n        <div class=\"artist-info\">\r\n          <h3>Umberto Boccioni (1882–1916)</h3>\r\n          <p>Fue un pintor y escultor italiano, figura clave del Futurismo. Se unió al movimiento en 1910 y ayudó a definir su estilo visual, \r\n          centrado en el movimiento, la energía y la modernidad. Sus obras más famosas, como Formas únicas de continuidad en el espacio,\r\n          buscaban representar la velocidad y el dinamismo del mundo moderno. Aunque murió joven durante la Primera Guerra Mundial, \r\n          dejó una gran influencia en el arte contemporáneo.</p>\r\n        </div>\r\n      </div>'),
(3, 'Filippo Tommaso Marinetti', '    <div class=\"artists-row\">\r\n      <div class=\"artist-card\">\r\n        <div class=\"artist-image\">\r\n          <img src=\"img/artistas/fi.png\" alt=\"Filippo Tommaso Marinetti\">\r\n        </div>\r\n        <div class=\"artist-info\">\r\n          <h3>Filippo Tommaso Marinetti (1876–1944)</h3>\r\n          <p>Fue un poeta, dramaturgo y editor italiano, conocido por ser el fundador del movimiento futurista. \r\n          En 1909 publicó el Manifiesto Futurista en el diario francés Le Figaro, donde propuso una ruptura total con el pasado y exaltó la velocidad,\r\n          la tecnología, la juventud y la violencia como símbolos de una nueva era.\r\n          Marinetti promovió una estética revolucionaria que celebraba los autos, las máquinas y la guerra como formas de renovación cultural. \r\n          Su estilo provocador y radical influyó no solo en la literatura, sino también en la pintura, la escultura, el diseño y la política.</p>\r\n        </div>\r\n      </div>\r\n    </div>'),
(4, 'Konstantin Yuon', '    <div class=\"artists-row\">\r\n      <div class=\"artist-card\">\r\n        <div class=\"artist-image\">\r\n          <img src=\"img/artistas/ko.png\" alt=\"Konstantin Yuon\">\r\n        </div>\r\n        <div class=\"artist-info\">\r\n          <h3>Konstantin Yuon (1875–1958)</h3>\r\n          <p>Fue un pintor, escenógrafo y pedagogo ruso, conocido por su estilo que combinó el simbolismo, \r\n            el impresionismo y más tarde el realismo socialista. Konstantín Yuon capturó en sus obras la espiritualidad del paisaje ruso y la vida cotidiana, \r\n            con un enfoque lírico y colorido. Fundó una escuela de arte en Moscú y fue una figura influyente en la formación de jóvenes artistas soviéticos. \r\n            Su obra refleja una transición entre la Rusia zarista y la era soviética, manteniendo siempre una fuerte conexión con la tradición cultural rusa.\r\n          </p>\r\n        </div>\r\n      </div>\r\n    </div>'),
(5, 'Christopher Richard Wynne Nevinson', '    <div class=\"artist-card\">\r\n      <div class=\"artist-image\">\r\n        <img src=\"img/artistas/nev.jpeg\" alt=\"Christopher Richard Wynne Nevinson\">\r\n      </div>\r\n      <div class=\"artist-info\">\r\n        <h3>Christopher Richard Wynne Nevinson (1889–1946)</h3>\r\n        <p>Fue un pintor y grabador británico, conocido por su participación en el movimiento futurista y por sus representaciones impactantes de la Primera Guerra Mundial. Christopher Richard Wynne Nevinson se formó en el Slade School of Fine Art y,\r\n           tras viajar a Italia, se vinculó con los futuristas,\r\n            adoptando su estética de líneas dinámicas y exaltación de la modernidad. \r\n            A través de un estilo que fusionaba el futurismo con el cubismo, \r\n            Nevinson capturó la velocidad, \r\n            la maquinaria y la deshumanización de la guerra moderna. \r\n            Su obra, a la vez vanguardista y crítica,\r\n             lo convirtió en una figura destacada del arte británico de principios del siglo\r\n              XX. Aunque más tarde se distanció del futurismo, su etapa futurista dejó una \r\n              huella significativa en la pintura de guerra y en las vanguardias europeas.\r\n        </p>\r\n      </div>\r\n    </div>\r\n');

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
-- RELACIONES PARA LA TABLA `contactos`:
--

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(5) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `usuario` varchar(12) NOT NULL,
  `password` varchar(255) NOT NULL,
  `newsletter` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- RELACIONES PARA LA TABLA `usuarios`:
--

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `email`, `usuario`, `password`, `newsletter`) VALUES
(1, 'Guido', 'Varela', 'mail@mail.com', 'utn', '1234', NULL),
(2, 'Guido', 'Varela', 'mail@mail.com', 'guido', '1234', 'si'),
(3, 'Jose', 'Velez', 'mail@mail.com', 'balaperdida', '1234', 'si'),
(4, 'Pepe', 'Lui', 'mail@mail.com', 'pepe', '1234', 'no'),
(5, 'Pedro', 'Campañiolli', 'pepe@gmail.com', 'Pepito', '202cb962ac59', 'si'),
(18, 'Jorge', 'Arturito', 'jorgear@gmail.com', 'Jorge', '5a0f035db329', 'si'),
(28, 'Esteban', 'Rolo', 'esteban@gmail.com', 'Este', '81dc9bdb52d0', 'si'),
(37, 'Tito', 'Gutierrez', 'tito@outlook.com', 'Tito', '81dc9bdb52d0', 'si'),
(38, 'Mario', 'Acuña', 'marito@hotmail.com', 'marito', '$2y$10$C5i0O', 'si'),
(40, 'Lola', 'Martina', 'lola@outlook.com', 'Lola', '$2y$10$a8Eg9', 'si'),
(43, '', '', '', 'koko', '$2y$10$LqfDT', 'si'),
(49, '', '', '', '', '$2y$10$T95aEPoCPFgSX30pDU8KLuKW8', 'si'),
(50, '', '', '', '', '$2y$10$7BOYuwV9PrV2pijTn.gLouG3X', 'si'),
(51, '', '', '', '', '$2y$10$hByApjPKtZC8djvHAok7kOYdd', 'si'),
(52, '', '', '', 'utn', '$2y$10$Npu51Rne1NOZ4O8ebrsdOeRTZ', 'si'),
(53, 'Nacho', 'Papa', 'nacho@gmail.com', 'Nacho', '$2y$10$M478hRFsjlqRSl9Vc6uV4ej92', 'si'),
(54, 'Juli', 'venegas', 'juli@hotmail.com', 'Juliana', '$2y$10$tL/TKXNJ9D5UP3qdygVQpuVAd', 'si'),
(55, 'Pepe', 'Ortiga', 'pepeor@gmail.com', 'Pepeito', '???R?M?\06??1>?U', 'si'),
(56, 'lOLA', 'pALOLA', 'VACA@GMAIL.COM', 'vACA', '???R?M?\06??1>?U', 'si'),
(57, 'Jorge', 'Gutierrez', 'jorge@hotmail.com', 'Guti', '81dc9bdb52d04dc20036dbd8313ed055', 'si'),
(58, 'Koko', 'Kokito', 'loco@gmail.com', 'Loco', '81dc9bdb52d04dc20036dbd8313ed055', ''),
(59, 'Nacho', 'Loco', 'nacho@gmail.com', 'Nacho', '81dc9bdb52d04dc20036dbd8313ed055', '');

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
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `artistas`
--
ALTER TABLE `artistas`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
