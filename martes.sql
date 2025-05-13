-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-05-2025 a las 21:40:26
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
(10, 'Ruiseñor', 'ruin@chaufa.com', 'Contacto desde el sitio', 'From: Ruiseñor<ruin@chaufa.com>'),
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
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
