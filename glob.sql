-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-09-2020 a las 04:14:07
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `glob`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `marca_id` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `modelo` varchar(150) COLLATE utf8mb4_bin NOT NULL,
  `precio` double NOT NULL,
  `cantidad` int(11) NOT NULL,
  `destacado` tinyint(1) NOT NULL,
  `puntuacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `marca_id`, `categoria_id`, `nombre`, `modelo`, `precio`, `cantidad`, `destacado`, `puntuacion`) VALUES
(2, 1, 1, 'Botin Adidas', 'Predator 19.4', 30, 1500, 0, 3),
(3, 2, 6, 'Guantes Nike', 'GK Spyne Pro', 30, 1000, 0, 5),
(4, 1, 3, 'Camiseta Adidas', 'Juventus \'20', 30, 1500, 0, 5),
(5, 2, 1, 'Botin Nike', 'Mercurial Superfly', 30, 100, 0, 5),
(6, 1, 2, 'Campera Adidas', 'Bayern Munich \'20', 30, 100, 0, 4),
(7, 2, 6, 'Canillera Nike', 'Mercurial Lite', 30, 1000, 0, 5),
(8, 2, 3, 'Camiseta Nike', 'Barcelona \'20', 30, 1000, 0, 5),
(9, 1, 6, 'Pelota Adidas', 'UCL Final \'20', 30, 1000, 0, 5),
(10, 1, 6, 'Guantes Adidas', 'BearBox Y', 30, 1000, 0, 5),
(11, 3, 1, 'Botas Boxeo Reebok', 'Master', 30, 1000, 0, 4),
(12, 1, 1, 'Calzado Adidas', 'Hockey Narma', 30, 30, 0, 4),
(13, 2, 2, 'Campera Nike', 'WindRunner', 30, 35, 0, 4),
(14, 1, 6, 'Pelota Adidas', 'Tsubasa League', 30, 1000, 1, 4),
(15, 1, 3, 'Camiseta Adidas', 'Manchester United \'20', 30, 30, 1, 5),
(16, 1, 6, 'Pelota Adidas', 'Unifornia \'20', 30, 70, 1, 4),
(17, 1, 6, 'Pelota Adidas', 'Argentum \'19', 30, 0, 1, 5),
(18, 1, 1, 'Botin Adidas', 'Nemeziz 19+', 30, 1000, 1, 4),
(19, 1, 6, 'Guantes Adidas', 'BearBox', 30, 40, 1, 4),
(20, 5, 6, 'Guantes Everlast', 'Classic', 30, 1000, 1, 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;