-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2021 a las 22:45:25
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_juegos_de_mesa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `nombre`) VALUES
(6, 'Estrategia'),
(7, 'TCG'),
(8, 'Rol'),
(9, 'Fillers'),
(10, 'Party'),
(27, 'Familiar'),
(45, 'Suspenso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id_comentario` int(11) NOT NULL,
  `mensaje` varchar(300) NOT NULL,
  `puntaje` int(5) NOT NULL,
  `fk_id_juego` int(11) NOT NULL,
  `fk_id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id_comentario`, `mensaje`, `puntaje`, `fk_id_juego`, `fk_id_usuario`) VALUES
(51, 'Muy greedy', 3, 1, 3),
(52, 'Cambie de opinion, esta re bueno', 5, 1, 3),
(53, 'Malisimo', 1, 1, 3),
(54, 'Buenisimo 10 puntos', 5, 3, 3),
(55, 'Malisimo', 2, 3, 3),
(56, 'Juanchi tiene este juego', 4, 3, 3),
(57, 'Meh', 3, 4, 3),
(58, 'Sims >', 2, 4, 3),
(59, 'Que bello es vivir', 5, 4, 3),
(60, 'Hilarante', 4, 17, 3),
(61, 'Barato', 4, 17, 3),
(62, 'Horrible', 1, 17, 3),
(63, '5mentarios', 3, 17, 3),
(64, 'El mejor juego que nunca jugue', 5, 20, 3),
(65, 'Malisimo', 1, 20, 3),
(66, 'Muy caro', 2, 20, 3),
(67, 'Mucho texto', 3, 20, 3),
(68, 'Prefiero jugar TFT', 3, 20, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegos`
--

CREATE TABLE `juegos` (
  `id_juego` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `precio` double NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `juegos`
--

INSERT INTO `juegos` (`id_juego`, `nombre`, `precio`, `descripcion`, `id_categoria`) VALUES
(1, 'Monopoly', 5500, 'Convertite en millonario', 27),
(3, 'Rising Sun', 24000, 'Ser el clan mas fuerte', 6),
(4, 'Life', 11000, 'Recrear la vida', 8),
(17, 'HDP', 2500, 'Para jugar con los panas', 7),
(20, 'Magic', 15000, 'Ser el mejor mago', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `rol` varchar(20) NOT NULL DEFAULT 'usuario',
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `rol`, `password`) VALUES
(2, 'ariel@hotmail.com', 'admin', '$2y$10$7D9z7EQkAaZCWaHkXl9wyOjyIInm2S9/h0Cmk1htjr4kxtYdARsAC'),
(3, 'matias@gmail.com', 'admin', '$2y$10$kjux6H6CrRGFqLdHU/83mex.LHAwPQbAl3a6MK2ItpfUPJBW14iHu'),
(4, 'arielito@hotmail.com', 'usuario', '$2y$10$lXoJEZtLxYgugW0ZlgYmuesEok7LMJMRahb9gvYVhXMQL3oBxLEZC'),
(5, 'pirula@gmail.com', 'usuario', '$2y$10$OnsN/0k9CJLpY/oYJil5.uRL6gqXCIgUgxHU394usf.X38tMGWBnm'),
(10, 'juanchi@gmail.com', 'usuario', '$2y$10$JVpbHTWUEudh0pUMT9Rgl.aljHLeB8n.bqpFJcjz60Iz0ZQpH8n6C');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `FK_id_juego` (`fk_id_juego`),
  ADD KEY `FK_id_usuario` (`fk_id_usuario`);

--
-- Indices de la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD PRIMARY KEY (`id_juego`),
  ADD KEY `FK_id_categoria` (`id_categoria`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT de la tabla `juegos`
--
ALTER TABLE `juegos`
  MODIFY `id_juego` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_2` FOREIGN KEY (`fk_id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comentarios_ibfk_3` FOREIGN KEY (`fk_id_juego`) REFERENCES `juegos` (`id_juego`) ON DELETE CASCADE;

--
-- Filtros para la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD CONSTRAINT `juegos_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
