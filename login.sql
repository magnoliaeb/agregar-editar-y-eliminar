-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-11-2017 a las 21:34:49
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nueva_red`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  `sexo` char(1) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `rol` tinyint(1) NOT NULL,
  `usuario` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id_usuario`, `nombre`, `apellido`, `fecha`, `sexo`, `password`, `foto`, `estado`, `rol`, `usuario`) VALUES
(1, 'JUAN', 'PEREZ', '2017-11-01', '0', 'aaaaa1', 'user1_128x128.jpg', 1, 0, 'juan'),
(2, 'MARIAN', 'RODRIGUEZ', '2017-11-03', '1', 'aaaaa1', 'user7_128x128.jpg', 1, 0, 'marian'),
(3, 'ANA MARIA', 'GOMEZ', '2017-11-08', '1', 'aaaaa1', 'user7_128x128.jpg', 0, 0, 'ana'),
(4, 'LAURA', 'LOPEZ', '2017-11-16', '0', 'aaaaa1', 'user4_128x128.jpg', 1, 0, 'laura'),
(5, 'ANA MARIA', 'PEREZ', '2017-11-13', '0', 'aaaaa1', 'user5_128x128.jpg', 1, 0, 'maria'),
(6, 'PEDRO', 'LEON', '2017-11-25', '0', 'aaaaa1', 'user8_128x128.jpg', 1, 0, 'pedro'),
(53, 'CARMEN', 'LANDER', '2017-11-27', '1', 'aaaaa1', 'user7_128x128.jpg', 1, 1, 'carmen'),
(54, 'PABLO', 'MIGUEL', '2017-11-06', '0', 'pabloperez123', 'usuario.png', 1, 0, 'pablo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
