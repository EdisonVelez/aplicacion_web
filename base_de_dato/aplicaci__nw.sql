-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-12-2022 a las 23:01:57
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `aplicaciónw`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `id` int(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `nombre_R` varchar(255) NOT NULL,
  `teléfono` int(10) NOT NULL,
  `asunto` varchar(25) NOT NULL,
  `cuerpo_M` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`id`, `correo`, `nombre_R`, `teléfono`, `asunto`, `cuerpo_M`) VALUES
(1, 'evelez4893@utm.edu.ec', 'edison ', 980515415, 'pregunta ', 'f'),
(2, 'etvtlez4893@utm.edu.ec', 'teve', 926382235, 'pregunta ', 'todo meno el cuerpo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organización`
--

CREATE TABLE `organización` (
  `id` int(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `descripción` varchar(255) NOT NULL,
  `misión` varchar(255) NOT NULL,
  `visión` varchar(255) NOT NULL,
  `valores` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `organización`
--

INSERT INTO `organización` (`id`, `nombre`, `foto`, `descripción`, `misión`, `visión`, `valores`) VALUES
(1, 'casa de suvastas ', 'foto2.pj', 'prueva 3', 'tener una venta y compra de grandes productos', 'se me acavaron la ideas', 'aya vamos'),
(2, 'prueva 2', '1254.pjp', 'prueva de direccionamiento', 'terminar esto', 'se me acavaron la ideas', 'ayudad d'),
(3, 'prueva 3', 'pjp', 'prueba actualizacion', 'estoy que muero', 'prueva 2 act', 'ayudaaaaa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `id` int(255) NOT NULL,
  `nombres` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `cedula` int(10) NOT NULL,
  `telefono` int(10) NOT NULL,
  `dirección` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`id`, `nombres`, `apellidos`, `cedula`, `telefono`, `dirección`) VALUES
(1, 'edison gregorio', 'velez solorzano', 1314764893, 980515415, 'hola234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `código` int(15) NOT NULL,
  `descripción` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `código`, `descripción`, `foto`) VALUES
(3, 'motor v56', 8832, 'nuevo y con ts', 'null');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `organización`
--
ALTER TABLE `organización`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `organización`
--
ALTER TABLE `organización`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
