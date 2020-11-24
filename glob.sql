-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2020 a las 19:50:23
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

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
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `padre_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `padre_id`) VALUES
(1, 'Calzado', 0),
(2, 'Camperas', 10),
(3, 'Camisetas', 10),
(4, 'Short', 10),
(5, 'Buzos', 10),
(6, 'Accesorios', 0),
(8, 'Zapatillas', 1),
(9, 'Botines', 1),
(10, 'Indumentaria', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id`, `nombre`) VALUES
(1, 'Adidas'),
(2, 'Nike'),
(3, 'Reebok'),
(4, 'Topper'),
(5, 'Everlast');

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
  `puntuacion` int(11) NOT NULL,
  `sub_categoria` int(11) DEFAULT NULL,
  `Descripcion` varchar(500) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `marca_id`, `categoria_id`, `nombre`, `modelo`, `precio`, `cantidad`, `destacado`, `puntuacion`, `sub_categoria`, `Descripcion`) VALUES
(2, 1, 9, 'Botin Adidas', 'Predator 19.4', 4399, 1500, 0, 3, 1, ''),
(3, 2, 6, 'Guantes Nike', 'GK Spyne Pro', 3500, 1000, 0, 5, 6, 'Guantes De Arquero Nike Gk Match - Adulto\r\nEspuma de látex SmoothFoam en 2mm que proporciona un agarre y resistencia equilibrados.\r\nCorte flat que proporciona un ajuste holgado y una gran superficie de agarre.\r\nMuñequera abierta de PU con ajuste de velcro que permite una fácil colocación. Cinta de EVA de media vuelta con un punto de anclaje en velcro.'),
(4, 1, 3, 'Camiseta Adidas', 'Manchester United \'20', 4999, 1500, 0, 5, 10, ''),
(5, 4, 9, 'Botin Nike', 'Mercuriarl Superfly', 6500, 100, 0, 5, 1, 'La parte superior suave de los botines Nike Mercurial Superfly 7 Academy TF envuelve tu pie para un ajuste de segunda piel, mientras que la suela exterior de goma ayuda a sobrealimentar la tracción en el césped.\r\n\r\nAjuste de segunda piel\r\nUn forro cómodo y un collar Dynamic Fit trabajan juntos para envolver el pie y proporcionar un ajuste de segunda piel.\r\nTexturizado para el tacto\r\n'),
(6, 1, 2, 'Campera Adidas', 'Bayern Munich \'20', 7599, 100, 0, 4, 10, ''),
(7, 2, 6, 'Canillera Nike', 'Mercurial Lite', 2600, 1000, 0, 5, 6, ''),
(8, 2, 3, 'Camiseta Nike', 'Barcelona \'20', 5200, 1000, 0, 5, 10, ''),
(9, 1, 6, 'Pelota Adidas', 'UCL Final \'20', 3599, 1000, 0, 5, 6, ''),
(10, 1, 6, 'Guantes Adidas', 'BearBox Y', 2999, 1000, 0, 5, 6, ''),
(11, 3, 8, 'Botas Boxeo Reebok', 'Master', 9000, 1000, 0, 4, 1, 'Botas de boxeo Reebok, con ajuste aerodinámico y un agarre extraordinario. Hecho de material sintético y detalles de cuero.'),
(12, 1, 8, 'Calzado Adidas', 'Hockey Narma', 4850, 30, 0, 4, 1, ''),
(13, 2, 2, 'Campera Nike', 'WindRunner', 6999, 35, 0, 4, 10, ''),
(14, 1, 6, 'Pelota Adidas', 'Tsubasa League', 3400, 1000, 1, 4, 6, ''),
(15, 1, 3, 'Camiseta Adidas', 'Manchester United \'20', 7300, 30, 1, 5, 10, ''),
(16, 1, 6, 'Pelota Adidas', 'Unifornia \'20', 4000, 70, 1, 4, 6, ''),
(17, 1, 6, 'Pelota Adidas', 'Argentum \'19', 3800, 0, 1, 5, 6, ''),
(18, 1, 9, 'Botin Adidas', 'Nemeziz 19+', 6999, 1000, 1, 4, 1, ''),
(19, 1, 6, 'Guantes Adidas', 'BearBox', 3000, 40, 1, 4, 6, ''),
(20, 5, 6, 'Guantes Everlast', 'Classic', 3800, 1000, 1, 5, 6, 'Cuero sintético de alta calidad. Además de su excelente construcción, ofrece durabilidad y funcionalidad. Evercool asegura transpirabilidad y confort, mientras que su tecnología anti microbiano conserva la frescura, y extiende la vida de su equipamiento.\r\n\r\n- Thumblock: Mantiene el pulgar en la posición correcta y lo protege de lesiones\r\n- Doble costura: Asegura la durabilidad\r\n- Tira de ajuste y lazo en la muñeca: Proporciona un ajuste seguro y permite ponerlos y quitarlos rápidamente\r\n');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
