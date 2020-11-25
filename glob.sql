-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2020 a las 23:50:52
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
  `descripcion` varchar(500) COLLATE utf8mb4_bin NOT NULL,
  `informacion` varchar(500) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `marca_id`, `categoria_id`, `nombre`, `modelo`, `precio`, `cantidad`, `destacado`, `puntuacion`, `sub_categoria`, `descripcion`, `informacion`) VALUES
(2, 1, 9, 'Botin Adidas', 'Predator 19.4', 4399, 1500, 0, 3, 1, 'El exterior de corte medio ajustado ofrece una máxima sujeción y estabilidad sobre pasto sintético.\r\nEl relieve en impresión 3D en el antepié sin cordones ofrece agarre para que puedas golpear la pelota con más precisión.\r\nCorte clásico.\r\nEstructura sin cordones.\r\nExterior textil de corte medio.\r\nBotines para pasto sintético.\r\nZona de impacto con impresión 3D Demonscale.', 'Marca	Adidas\r\nModelo	FW9193\r\nTipo de suela	TF\r\nEdad	Adultos'),
(3, 2, 6, 'Guantes Nike', 'GK Spyne Pro', 3500, 1000, 0, 5, 6, 'Guantes De Arquero Nike Gk Match - Adulto\r\nEspuma de látex SmoothFoam en 2mm que proporciona un agarre y resistencia equilibrados.\r\nCorte flat que proporciona un ajuste holgado y una gran superficie de agarre.\r\nMuñequera abierta de PU con ajuste de velcro que permite una fácil colocación. Cinta de EVA de media vuelta con un punto de anclaje en velcro.', 'Marca	Nike\r\nLínea	Mercurial\r\nModelo	VAPOR GRIP 3 PROMO'),
(4, 1, 3, 'Camiseta Adidas', 'Manchester United \'20', 4999, 1500, 0, 5, 10, 'Descripcion:\r\nTalle: XL\r\nOBSERVACIONES:\r\n100% original todos nuestros productos\r\nLogo y escudo bordado\r\nmedidas aproximadas\r\n56 cm axila a axila 76 cm largo', 'Marca	Original\r\nEquipo	Manchester United\r\nTipo de ocasión	Partido\r\nVersión de la camiseta	Auténtica\r\nTemporada	2018\r\nEs para arquero	No\r\nNúmero de la camiseta	No tiene\r\nEdición especial de la camiseta	Premier League'),
(5, 4, 9, 'Botin Nike', 'Mercuriarl Superfly', 6500, 100, 0, 5, 1, 'La parte superior suave de los botines Nike Mercurial Superfly 7 Academy TF envuelve tu pie para un ajuste de segunda piel, mientras que la suela exterior de goma ayuda a sobrealimentar la tracción en el césped.\r\n\r\nAjuste de segunda piel\r\nUn forro cómodo y un collar Dynamic Fit trabajan juntos para envolver el pie y proporcionar un ajuste de segunda piel.\r\nTexturizado para el tacto\r\n', 'Marca	Nike\r\nModelo	Mercurial Superfly 7\r\nTipo de suela	goma\r\nEdad	Adultos'),
(6, 1, 2, 'Campera Adidas', 'Bayern Munich \'20', 7599, 100, 0, 4, 10, 'Corte clásico.\r\nCierre frontal con cordón de ajuste.\r\nTejido dobby 100 % poliéster reciclado.\r\nRompevientos con cierre y capucha para usar a diario.\r\nBolsillos frontales.\r\nPuños elásticos.\r\nDiseño con bloques de color.\r\nEste producto fue hecho con Primegreen, una serie de materiales reciclados de alto desempeño, sin usar poliéster virgen.\r\nColor del artículo: Royal Blue / Mgh Solid Grey / White.', 'Marca	Adidas\r\nLínea	Training\r\nModelo	GD5480'),
(7, 2, 6, 'Canillera Nike', 'Mercurial Lite', 2600, 1000, 0, 5, 6, 'Las mallas microperforadas permiten la perfecta sujeción y adaptación de la espinillera en la pierna por lo que podrás jugar al fútbol con la máxima comodidad y sin preocuparte de que se muevan mientras corres por el terreno de juego o si te hacen una pequeña falta. Estas mallas están confeccionadas con tecnología Dri-FIT que ayuda a una expulsión rápida del sudor. Las espinilleras presentan una forma asimétrica pensada para una adaptación ergonómica a la pierna del futbolista.', 'Marca	Nike\r\nModelo	sp2158-620'),
(8, 2, 3, 'Camiseta Nike', 'Barcelona \'20', 5200, 1000, 0, 5, 10, 'corte estándar, no adherente\r\nmangas raglán: brindan libertad durante el movimiento de los hombros\r\nemblemas bordados: insignia del club y logotipo del fabricante\r\nlogo de La Liga bordado en la manga derecha\r\nlogotipos del patrocinador presionados: Rakuten en el pecho y Beko en la manga izquierda\r\ntecnologías aplicadas: Dri-FIT\r\nmaterial: 100% poliéster', 'Marca	OFICIAL\r\nEquipo	Barcelona\r\nTipo de camiseta	Titular\r\nTipo de ocasión	Partido\r\nVersión de la camiseta	titular\r\nTemporada	2020-2021\r\nEs para arquero	No\r\nNúmero de la camiseta	10 MESSI\r\nEdición especial de la camiseta	TITULAR'),
(9, 1, 6, 'Pelota Adidas', 'UCL Final \'20', 3599, 1000, 0, 5, 6, 'Exterior con recubrimiento 100% TPU.\r\nResistente y suave al tacto.\r\nCámara de butilo.\r\nNro. 5.\r\nCosida a máquina.\r\nEstampados Uniforia.\r\nRequiere ser inflada.\r\nColor del artículo: Bright Cyan / Shock Pink / Black.\r\nNúmero de artículo: FH7355.', 'Marca	Adidas\r\nModelo	DY2519\r\nTamaño de la pelota	5'),
(10, 1, 6, 'Guantes Adidas', 'BearBox Y', 2999, 1000, 0, 5, 6, 'Defiende tu territorio en el terreno de juego. Saca las garras si es necesario. Estos guantes de arquero Predator 20 Training se han diseñado para convertirte en el dueño del área. Sus palmas acolchadas te brindan agarre y control en cada parada. Presentan un corte positivo y una correa para la muñeca que la envuelve por completo ofreciendo un ajuste perfecto.', 'Marca	Adidas\r\nLínea	Adidas\r\nModelo	Predator Training'),
(11, 3, 8, 'Botas Boxeo Reebok', 'Master', 9000, 1000, 0, 4, 1, 'Everlast y Michelin® colaboraron en el zapato de boxeo de copa baja\r\nDiseño híbrido para gimnasio y uso en el ring\r\nConstruido con suela técnica Michelin® para máxima tracción, flexibilidad y soporte\r\nEl innovador diseño de la banda de rodadura evita el deslizamiento y optimiza el movimiento de lado a lado\r\nLa parte superior de malla abierta mantiene los zapatos livianos y cómodos.\r\nMarca: ;Everlast\r\nLínea: Boxeo\r\nModelo: Elite PRO Michelin\r\nGénero: Hombre\r\nEstilo: Urbano\r\nMaterial del calzado: ', 'Marca	EVERLAST BOXEO\r\nModelo	ELITE PRO\r\nGénero	Hombre\r\n'),
(12, 1, 8, 'Calzado Adidas', 'Hockey Narma', 4850, 30, 0, 4, 1, 'Ajuste clásico\r\nExterior sintético con revestimientos sellados\r\nSuela de caucho con diseño de huella armónica. Forro interno textil\r\nMediasuela de EVA. Amortiguación de espuma en la punta\r\nEstructura parcial tipo media que sujeta el pie', 'Marca	Adidas\r\nModelo	Fabela Rise\r\nEdad	Adultos'),
(13, 2, 2, 'Campera Nike', 'WindRunner', 6999, 35, 0, 4, 10, 'NIKE / DIGITAL SPORT - TIENDA OFICIAL\r\nPRODUCTOS 100% ORIGINALES\r\n\r\n-NOMBRE: CAMPERA WINDRUNNER NSW\r\n-GÉNERO: HOMBRE\r\n-MARCA: nike\r\n-ARTÍCULO: AR2191100\r\n\r\nCampera para hombres Nike Windrunner NSW', 'Marca	Nike\r\nModelo	304-3378'),
(14, 1, 6, 'Pelota Adidas', 'Tsubasa League', 3400, 1000, 1, 4, 6, 'Exterior con recubrimiento 100% TPU.\r\nResistente y suave al tacto.\r\nCámara de butilo.\r\nNro. 5.\r\nCosida a máquina.\r\nEstampados Uniforia.\r\nRequiere ser inflada.', 'Marca	Adidas\r\nModelo	FS0390\r\nTamaño de la pelota	5'),
(15, 1, 3, 'Camiseta Adidas', 'Juventus \'20', 7300, 30, 1, 5, 10, 'CAMISETA DE JUVENTUS 2020\r\n\r\nMODELO: TITULAR\r\n\r\nTALLE: M\r\n\r\nMEDIDAS: 52cm de axila a axila por 73cm de largo\r\n\r\nMARCA: ADIDAS\r\n\r\nNUMERO: 9 LUKAKU', 'Marca	Adidas\r\nEquipo	JUVENTUS\r\nTipo de camiseta	Titular\r\nTipo de ocasión	Partido\r\nVersión de la camiseta	Auténtica\r\nTemporada	2018/2019\r\nEs para arquero	No\r\nNúmero de la camiseta	9\r\nEdición especial de la camiseta	PREMIER'),
(16, 1, 6, 'Pelota Adidas', 'Unifornia \'20', 4000, 70, 1, 4, 6, 'Exterior con recubrimiento 100% TPU.\r\nResistente y suave al tacto.\r\nCámara de butilo.\r\nNro. 5.\r\nCosida a máquina.\r\nEstampados Uniforia.\r\nRequiere ser inflada.', 'Marca	Adidas\r\nModelo	FH7355\r\nTamaño de la pelota	5'),
(17, 1, 6, 'Pelota Adidas', 'Argentum \'19', 3800, 0, 1, 5, 6, 'Exterior con recubrimiento 100% TPU.\r\nResistente y suave al tacto.\r\nCámara de butilo.\r\nNro. 5.\r\nCosida a máquina.\r\nEstampados Uniforia.\r\nRequiere ser inflada.', 'Marca	Adidas\r\nModelo	FH7355\r\nTamaño de la pelota	5'),
(18, 1, 9, 'Botin Adidas', 'Nemeziz 19+', 6999, 1000, 1, 4, 1, 'Sistema de atado de cordones\r\nExterior sintético suave\r\nSuela liviana de TPU. Configuración de tapones Agility\r\nColor del artículo: Tech Indigo / Signal Green / Glory Purple', 'Marca	Adidas\r\nModelo	Nemezis Messi 19.3\r\nTipo de suela	FG\r\nEdad	Adulto'),
(19, 1, 6, 'Guantes Adidas', 'BearBox', 3000, 40, 1, 4, 6, 'Tomá el control del arco e interceptá tiros veloces con estos guantes de arquero. Su palma de látex ofrece un agarre insuperable para que puedas mantener un contacto firme con la pelota. La banda elástica y la tira alrededor de la muñeca te ofrecen la estabilidad necesaria para alejar la pelota de la zona de peligro.', 'Marca	Adidas\r\nLínea	Predator\r\nModelo	FH7295'),
(20, 5, 6, 'Guantes Everlast', 'Classic', 3800, 1000, 1, 5, 6, 'Cuero sintético de alta calidad. Además de su excelente construcción, ofrece durabilidad y funcionalidad. Evercool asegura transpirabilidad y confort, mientras que su tecnología anti microbiano conserva la frescura, y extiende la vida de su equipamiento.\r\n\r\n- Thumblock: Mantiene el pulgar en la posición correcta y lo protege de lesiones\r\n- Doble costura: Asegura la durabilidad\r\n- Tira de ajuste y lazo en la muñeca: Proporciona un ajuste seguro y permite ponerlos y quitarlos rápidamente\r\n', 'Marca	Everlast\r\nLínea	TM GLV\r\nModelo	New Elite');

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
