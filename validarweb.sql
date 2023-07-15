-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2021 a las 04:46:10
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `validandoweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_form`
--

CREATE TABLE `tabla_form` (
  `id` int(40) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `documento` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contraseña` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8_bin;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `tabla_usuario` (`id`, `nombre`,`documento`, `email`, `contraseña`) VALUES
(1, 'test', 'tes12', '312321'),
(2, 'juan', 'jan12', '31321');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tabla_usuario`
--
ALTER TABLE `tabla_usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tabla_usuario`
--
ALTER TABLE `tabla_usuario`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
