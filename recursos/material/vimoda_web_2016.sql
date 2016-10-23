-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-10-2016 a las 22:40:56
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `vimoda_web_2016`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `campana`
--

CREATE TABLE `campana` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `descripcion` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci COMMENT='Campaña';

--
-- Volcado de datos para la tabla `campana`
--

INSERT INTO `campana` (`id`, `created_at`, `updated_at`, `descripcion`, `fecha_inicio`, `fecha_fin`) VALUES
(1, '2016-10-21 08:05:46', '0000-00-00 00:00:00', 'Primavera 2016', '2016-11-01', '2016-12-31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `descripcion` varchar(100) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `created_at`, `updated_at`, `descripcion`) VALUES
(1, '2016-10-21 08:04:50', '0000-00-00 00:00:00', 'Damas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `color`
--

CREATE TABLE `color` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `descripcion` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `codigo_hexa` varchar(6) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci COMMENT='Tabla de colores';

--
-- Volcado de datos para la tabla `color`
--

INSERT INTO `color` (`id`, `created_at`, `updated_at`, `descripcion`, `codigo_hexa`) VALUES
(1, '2016-10-21 08:01:41', '0000-00-00 00:00:00', 'AFRICA', 'E76564'),
(2, '2016-10-21 08:01:41', '0000-00-00 00:00:00', 'AMARILLO', 'E76564'),
(3, '2016-10-21 08:01:41', '0000-00-00 00:00:00', 'APACHE', 'E76564'),
(4, '2016-10-21 08:01:41', '0000-00-00 00:00:00', 'AZUL', 'E76564'),
(5, '2016-10-21 08:01:41', '0000-00-00 00:00:00', 'AZULINO', 'E76564'),
(6, '2016-10-21 08:01:41', '0000-00-00 00:00:00', 'BEIGE', 'E76564'),
(7, '2016-10-21 08:01:41', '0000-00-00 00:00:00', 'BLANCO', 'E76564'),
(8, '2016-10-21 08:01:41', '0000-00-00 00:00:00', 'CARAMELO', 'E76564'),
(9, '2016-10-21 08:01:41', '0000-00-00 00:00:00', 'CELESTE', 'E76564'),
(10, '2016-10-21 08:01:41', '0000-00-00 00:00:00', 'CHAROL NEGRO', 'E76564'),
(11, '2016-10-21 08:01:41', '0000-00-00 00:00:00', 'CHAROL ROSA', 'E76564'),
(12, '2016-10-21 08:01:41', '0000-00-00 00:00:00', 'COBRE', 'E76564'),
(13, '2016-10-21 08:01:41', '0000-00-00 00:00:00', 'HUESO', 'E76564'),
(14, '2016-10-21 08:01:41', '0000-00-00 00:00:00', 'MARRON', 'E76564'),
(15, '2016-10-21 08:01:41', '0000-00-00 00:00:00', 'MELON', 'E76564'),
(16, '2016-10-21 08:01:41', '0000-00-00 00:00:00', 'NATURAL', 'E76564'),
(17, '2016-10-21 08:01:41', '0000-00-00 00:00:00', 'NEGRO', 'E76564'),
(18, '2016-10-21 08:01:41', '0000-00-00 00:00:00', 'NEGRO ORO', 'E76564'),
(19, '2016-10-21 08:01:41', '0000-00-00 00:00:00', 'PALO ROSA', 'E76564'),
(20, '2016-10-21 08:01:41', '0000-00-00 00:00:00', 'PLATA', 'E76564'),
(21, '2016-10-21 08:01:41', '0000-00-00 00:00:00', 'PLOMO', 'E76564'),
(22, '2016-10-21 08:01:41', '0000-00-00 00:00:00', 'ROJO', 'E76564'),
(23, '2016-10-21 08:01:41', '0000-00-00 00:00:00', 'ROSA', 'E76564'),
(24, '2016-10-21 08:01:41', '0000-00-00 00:00:00', 'ROSADO', 'E76564'),
(25, '2016-10-21 08:01:41', '0000-00-00 00:00:00', 'TOFI', 'E76564'),
(26, '2016-10-21 08:01:41', '0000-00-00 00:00:00', 'VINO', 'E76564');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `descripcion` varchar(100) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id`, `created_at`, `updated_at`, `descripcion`) VALUES
(1, '2016-10-21 08:17:32', '0000-00-00 00:00:00', 'NATIVA'),
(2, '2016-10-21 08:17:32', '0000-00-00 00:00:00', 'VIMODA'),
(3, '2016-10-21 08:18:14', '0000-00-00 00:00:00', 'RAMARIN'),
(4, '2016-10-21 08:18:14', '0000-00-00 00:00:00', 'AZALEIA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `campana` int(11) NOT NULL,
  `categoria` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `marca` int(11) NOT NULL,
  `codigo` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `titulo` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `precio` float NOT NULL,
  `talla_min` tinyint(4) NOT NULL,
  `talla_max` tinyint(4) NOT NULL,
  `pagina` smallint(6) NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `created_at`, `updated_at`, `campana`, `categoria`, `tipo`, `marca`, `codigo`, `titulo`, `precio`, `talla_min`, `talla_max`, `pagina`, `estado`) VALUES
(1, '2016-10-21 08:30:19', '0000-00-00 00:00:00', 1, 1, 1, 1, 'LIN1821', 'SANDALIAS NATIVA', 115, 35, 39, 0, 1),
(2, '2016-10-21 08:30:19', '0000-00-00 00:00:00', 1, 1, 1, 1, 'LIN1826', 'SANDALIAS NATIVA', 115, 35, 39, 0, 1),
(3, '2016-10-21 08:30:19', '0000-00-00 00:00:00', 1, 1, 1, 1, 'LIN1823', 'SANDALIAS NATIVA', 115, 35, 39, 0, 1),
(4, '2016-10-21 08:30:19', '0000-00-00 00:00:00', 1, 1, 1, 1, 'LIN1825', 'SANDALIAS NATIVA', 115, 35, 39, 0, 1),
(5, '2016-10-21 08:30:19', '0000-00-00 00:00:00', 1, 1, 1, 1, 'LIN1824', 'SANDALIAS NATIVA', 115, 35, 39, 0, 1),
(6, '2016-10-21 08:30:19', '0000-00-00 00:00:00', 1, 1, 1, 1, 'LIN1827', 'SANDALIAS NATIVA', 115, 35, 39, 0, 1),
(7, '2016-10-21 08:30:19', '0000-00-00 00:00:00', 1, 1, 1, 1, 'LIN1829', 'SANDALIAS NATIVA', 104, 35, 39, 0, 1),
(8, '2016-10-21 08:30:19', '0000-00-00 00:00:00', 1, 1, 1, 1, 'LIN1828', 'SANDALIAS NATIVA', 104, 35, 39, 0, 1),
(9, '2016-10-21 08:30:19', '0000-00-00 00:00:00', 1, 1, 1, 2, 'KI815', 'SANDALIAS VIMODA', 140, 35, 39, 0, 1),
(10, '2016-10-21 08:30:19', '0000-00-00 00:00:00', 1, 1, 1, 2, 'KI824', 'SANDALIAS VIMODA', 150, 35, 39, 0, 1),
(11, '2016-10-21 08:30:19', '0000-00-00 00:00:00', 1, 1, 1, 2, 'AV753', 'SANDALIAS VIMODA', 155, 35, 39, 0, 1),
(12, '2016-10-21 08:30:19', '0000-00-00 00:00:00', 1, 1, 1, 2, 'AV749', 'SANDALIAS VIMODA', 155, 35, 39, 0, 1),
(13, '2016-10-21 08:30:19', '0000-00-00 00:00:00', 1, 1, 1, 2, 'ED131', 'SANDALIAS VIMODA', 165, 35, 39, 0, 1),
(14, '2016-10-21 08:30:19', '0000-00-00 00:00:00', 1, 1, 1, 2, 'ED129', 'SANDALIAS VIMODA', 165, 35, 39, 0, 1),
(15, '2016-10-21 08:30:19', '0000-00-00 00:00:00', 1, 1, 1, 2, 'KI801', 'SANDALIAS VIMODA', 150, 35, 39, 0, 1),
(16, '2016-10-21 08:30:19', '0000-00-00 00:00:00', 1, 1, 1, 2, 'KI855', 'SANDALIAS VIMODA', 150, 35, 39, 0, 1),
(17, '2016-10-21 08:30:19', '0000-00-00 00:00:00', 1, 1, 1, 2, 'ALM1122', 'SANDALIAS VIMODA', 154, 35, 39, 0, 1),
(18, '2016-10-21 08:30:19', '0000-00-00 00:00:00', 1, 1, 1, 2, 'KI804', 'SANDALIAS VIMODA', 150, 35, 39, 0, 1),
(19, '2016-10-21 08:30:19', '0000-00-00 00:00:00', 1, 1, 1, 2, 'AV745', 'SANDALIAS VIMODA', 145, 35, 39, 0, 1),
(20, '2016-10-21 08:30:19', '0000-00-00 00:00:00', 1, 1, 1, 2, 'ED126', 'SANDALIAS VIMODA', 150, 35, 39, 0, 1),
(21, '2016-10-21 08:30:19', '0000-00-00 00:00:00', 1, 1, 1, 3, '75253', 'SANDALIAS RAMARIM', 105, 33, 40, 0, 1),
(22, '2016-10-21 08:30:19', '0000-00-00 00:00:00', 1, 1, 1, 3, '75255', 'SANDALIAS RAMARIM', 114, 33, 40, 0, 1),
(23, '2016-10-21 08:30:19', '0000-00-00 00:00:00', 1, 1, 1, 3, '75254', 'SANDALIAS RAMARIM', 114, 33, 40, 0, 1),
(24, '2016-10-21 08:30:19', '0000-00-00 00:00:00', 1, 1, 1, 2, 'ED130', 'SANDALIAS VIMODA', 165, 35, 39, 0, 1),
(25, '2016-10-21 08:30:19', '0000-00-00 00:00:00', 1, 1, 1, 2, 'ED128', 'SANDALIAS VIMODA', 165, 35, 39, 0, 1),
(26, '2016-10-21 08:30:19', '0000-00-00 00:00:00', 1, 1, 1, 2, 'AV736', 'SANDALIAS VIMODA', 155, 35, 39, 0, 1),
(27, '2016-10-21 08:30:19', '0000-00-00 00:00:00', 1, 1, 1, 4, '447', 'SANDALIAS AZALEIA', 104, 34, 39, 0, 1),
(28, '2016-10-21 08:30:19', '0000-00-00 00:00:00', 1, 1, 1, 4, '106', 'SANDALIAS AZALEIA', 104, 34, 39, 0, 1),
(29, '2016-10-21 08:30:19', '0000-00-00 00:00:00', 1, 1, 1, 2, 'VA208', 'SANDALIAS VIMODA', 145, 35, 39, 0, 1),
(30, '2016-10-21 08:30:19', '0000-00-00 00:00:00', 1, 1, 1, 2, 'VA218', 'SANDALIAS VIMODA', 145, 35, 39, 0, 1),
(31, '2016-10-21 08:30:19', '0000-00-00 00:00:00', 1, 1, 1, 2, 'KI850', 'SANDALIAS VIMODA', 115, 35, 39, 0, 1),
(32, '2016-10-21 08:30:19', '0000-00-00 00:00:00', 1, 1, 1, 2, 'KI814', 'SANDALIAS VIMODA', 115, 35, 39, 0, 1),
(33, '2016-10-21 08:30:19', '0000-00-00 00:00:00', 1, 1, 1, 2, 'ED125', 'SANDALIAS VIMODA', 140, 35, 39, 0, 1),
(34, '2016-10-21 08:30:19', '0000-00-00 00:00:00', 1, 1, 1, 2, 'KI807', 'SANDALIAS VIMODA', 140, 35, 39, 0, 1),
(35, '2016-10-21 08:30:19', '0000-00-00 00:00:00', 1, 1, 1, 2, 'VA202', 'SANDALIAS VIMODA', 145, 35, 39, 0, 1),
(36, '2016-10-21 08:30:19', '0000-00-00 00:00:00', 1, 1, 1, 2, 'KI860', 'SANDALIAS VIMODA', 140, 35, 39, 0, 1),
(37, '2016-10-21 08:30:19', '0000-00-00 00:00:00', 1, 1, 1, 2, 'KI823', 'SANDALIAS VIMODA', 140, 35, 39, 0, 1),
(38, '2016-10-21 08:30:19', '0000-00-00 00:00:00', 1, 1, 1, 2, 'ALM1126', 'SANDALIAS VIMODA', 135, 35, 39, 0, 1),
(39, '2016-10-21 08:30:19', '0000-00-00 00:00:00', 1, 1, 1, 2, 'KI870', 'SANDALIAS VIMODA', 145, 35, 39, 0, 1),
(40, '2016-10-21 08:30:19', '0000-00-00 00:00:00', 1, 1, 1, 2, 'ALM1127', 'SANDALIAS VIMODA', 135, 35, 39, 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_producto`
--

CREATE TABLE `tipo_producto` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `descripcion` varchar(100) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tipo_producto`
--

INSERT INTO `tipo_producto` (`id`, `created_at`, `updated_at`, `descripcion`) VALUES
(1, '2016-10-21 08:08:27', '0000-00-00 00:00:00', 'Calzado');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `campana`
--
ALTER TABLE `campana`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `campana` (`campana`),
  ADD KEY `categoria` (`categoria`),
  ADD KEY `tipo` (`tipo`),
  ADD KEY `marca` (`marca`);

--
-- Indices de la tabla `tipo_producto`
--
ALTER TABLE `tipo_producto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `campana`
--
ALTER TABLE `campana`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `color`
--
ALTER TABLE `color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT de la tabla `tipo_producto`
--
ALTER TABLE `tipo_producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
