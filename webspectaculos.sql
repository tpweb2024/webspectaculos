-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-09-2024 a las 00:14:30
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `webspectaculos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE `evento` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `evento`
--

INSERT INTO `evento` (`id`, `nombre`, `descripcion`, `fecha`, `tipo`) VALUES
(1, 'Rápidos y furiosos', 'Descripción de la película\r\nDescripción de la película\r\nDescripción de la película\r\n', '2024-09-15', 4),
(2, 'Cirque du Soleil', 'Descripción del espectáculo\r\nDescripción del espectáculo\r\nDescripción del espectáculo\r\n', '2024-09-16', 6),
(3, 'Soda Stereo - Me verás volver', 'Descripción del recital\r\nDescripción del recital\r\nDescripción del recital\r\n', '2024-09-17', 2),
(4, 'Genesis - Live in Rome 2007', 'Descripción del recital\r\nDescripción del recital\r\nDescripción del recital\r\n', '2024-09-18', 2),
(7, 'La Vigornia - Gira el yunke rebelde', 'Descripción del concierto\r\nDescripción del concierto\r\nDescripción del concierto\r\n', '2024-09-19', 1),
(8, 'fUZZ - Gira & Gira temporada 2024', 'Descripción del concierto\r\nDescripción del concierto\r\nDescripción del concierto\r\n', '2024-09-21', 1),
(9, 'Hasta el último hombre', 'Descripción de la película\r\nDescripción de la película\r\nDescripción de la película\r\n', '2024-09-23', 4),
(10, 'Daktari Camp', 'Descripción del circo\r\nDescripción del circo\r\nDescripción del circo\r\n', '2024-09-24', 6),
(11, 'Mamma mía!', 'Descripción del musical\r\nDescripción del musical\r\nDescripción del musical\r\n', '2024-09-24', 5),
(12, 'Moulin Rouge', 'Descripción del musical\r\nDescripción del musical\r\nDescripción del musical\r\nDescripción del musical\r\n', '2024-09-19', 5),
(13, 'No me peguen, soy Giordano', 'Descripción de la obra de teatro\r\nDescripción de la obra de teatro\r\nDescripción de la obra de teatro\r\n', '2024-09-26', 3),
(14, 'El jorobado de Notre Dame', 'Descripción de la obra de teatro\r\nDescripción de la obra de teatro\r\nDescripción de la obra de teatro\r\nDescripción de la obra de teatro\r\n', '2024-09-27', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoevento`
--

CREATE TABLE `tipoevento` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipoevento`
--

INSERT INTO `tipoevento` (`id`, `nombre`) VALUES
(4, 'Cine'),
(6, 'Circo'),
(1, 'Concierto'),
(5, 'Musical'),
(3, 'Obra de teatro'),
(2, 'Recital'),
(7, 'Títeres y marionetas');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pornombre` (`nombre`),
  ADD KEY `porfecha` (`fecha`),
  ADD KEY `portipo` (`tipo`);

--
-- Indices de la tabla `tipoevento`
--
ALTER TABLE `tipoevento`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pornombre` (`nombre`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `evento`
--
ALTER TABLE `evento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `tipoevento`
--
ALTER TABLE `tipoevento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `evento`
--
ALTER TABLE `evento`
  ADD CONSTRAINT `evento_ibfk_1` FOREIGN KEY (`tipo`) REFERENCES `tipoevento` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
