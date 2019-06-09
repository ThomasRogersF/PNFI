-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-05-2019 a las 23:46:13
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ano`
--

CREATE TABLE `ano` (
  `ano` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `ano`
--

INSERT INTO `ano` (`ano`) VALUES
(1),
(2),
(3),
(4),
(5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bloque_hora`
--

CREATE TABLE `bloque_hora` (
  `id_bloque` int(2) NOT NULL,
  `hora_inicio` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `hora_fin` varchar(7) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `bloque_hora`
--

INSERT INTO `bloque_hora` (`id_bloque`, `hora_inicio`, `hora_fin`) VALUES
(1, '7:10am', '8:40am'),
(2, '8:45am', '9:10am'),
(3, '9:10am', '10:30am'),
(4, '10:30am', '11:50am'),
(5, '11:50am', '12:20pm'),
(6, '12:20pm', '1:40pm'),
(7, '1:40pm', '3:00pm');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE `horarios` (
  `dia` int(2) NOT NULL,
  `materia` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `bloque_hora` int(2) NOT NULL,
  `seccion` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `profesor` int(11) NOT NULL,
  `fecha` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `nombre` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `ano` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`nombre`, `ano`) VALUES
('CIENCIAS NATURALES 1', 1),
('CIENCIAS NATURALES 2', 2),
('BIOLOGIA 3', 3),
('BIOLOGIA 4', 4),
('BIOLOGIA 5', 5),
('QUIMICA 3', 3),
('QUIMICA 4', 4),
('QUIMICA 5', 5),
('FISICA 3', 3),
('FISICA 4', 4),
('FISICA 5', 5),
('CIENCIAS DE LA TIERRA 5', 5),
('EDUCACIÓN FISICA 1', 1),
('EDUCACIÓN FISICA 2', 2),
('EDUCACIÓN FISICA 3', 3),
('EDUCACIÓN FISICA 4', 4),
('EDUCACIÓN FISICA 5', 5),
('CASTELLANO 1', 1),
('CASTELLANO 2', 2),
('CASTELLANO 3', 3),
('CASTELLANO 4', 4),
('CASTELLANO 5', 5),
('INGLES Y OTRAS LENGUAS EXTRANJERAS 1', 1),
('INGLES Y OTRAS LENGUAS EXTRANJERAS 2', 2),
('INGLES Y OTRAS LENGUAS EXTRANJERAS 3', 3),
('INGLES Y OTRAS LENGUAS EXTRANJERAS 4', 4),
('INGLES Y OTRAS LENGUAS EXTRANJERAS 5', 5),
('MATEMATICA 1', 1),
('MATEMATICA 2', 2),
('MATEMATICA 3', 3),
('MATEMATICA 4', 4),
('MATEMATICA 5', 5),
('GEOGRAFIA, HISTORIA Y CIUDADANIA 1', 1),
('GEOGRAFIA, HISTORIA Y CIUDADANIA 2', 2),
('GEOGRAFIA, HISTORIA Y CIUDADANIA 3', 3),
('GEOGRAFIA, HISTORIA Y CIUDADANIA 4', 4),
('GEOGRAFIA, HISTORIA Y CIUDADANIA 5', 5),
('ARTE Y PATRIMONIO 1', 1),
('ARTE Y PATRIMONIO 2', 2),
('FORMACION EN SOBERANIA NACIONAL 4', 4),
('FORMACION EN SOBERANIA NACIONAL 5', 5),
('ORIENTACION Y CONVIVENCIA 1', 1),
('ORIENTACION Y CONVIVENCIA 2', 2),
('ORIENTACION Y CONVIVENCIA 3', 3),
('ORIENTACION Y CONVIVENCIA 4', 4),
('ORIENTACION Y CONVIVENCIA 5', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prof`
--

CREATE TABLE `prof` (
  `id_us` int(11) NOT NULL,
  `nombre` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `cedula` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `horas_laborales` int(3) NOT NULL,
  `seccion_guia` varchar(2) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secciones`
--

CREATE TABLE `secciones` (
  `ano` int(2) NOT NULL,
  `seccion` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `prof_guia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `us`
--

CREATE TABLE `us` (
  `cedula` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `pas` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `nivel` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ano`
--
ALTER TABLE `ano`
  ADD PRIMARY KEY (`ano`),
  ADD UNIQUE KEY `ano` (`ano`);

--
-- Indices de la tabla `bloque_hora`
--
ALTER TABLE `bloque_hora`
  ADD PRIMARY KEY (`id_bloque`),
  ADD UNIQUE KEY `id_bloque` (`id_bloque`);

--
-- Indices de la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD KEY `bloque_hora` (`bloque_hora`),
  ADD KEY `profesor` (`profesor`),
  ADD KEY `seccion` (`seccion`),
  ADD KEY `materia` (`materia`),
  ADD KEY `dia` (`dia`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD KEY `ano` (`ano`),
  ADD KEY `nombre` (`nombre`);

--
-- Indices de la tabla `prof`
--
ALTER TABLE `prof`
  ADD PRIMARY KEY (`id_us`),
  ADD UNIQUE KEY `id_us` (`id_us`),
  ADD UNIQUE KEY `cedula` (`cedula`),
  ADD KEY `seccion_guia` (`seccion_guia`);

--
-- Indices de la tabla `secciones`
--
ALTER TABLE `secciones`
  ADD KEY `ano` (`ano`),
  ADD KEY `seccion` (`seccion`),
  ADD KEY `prof_guia` (`prof_guia`);

--
-- Indices de la tabla `us`
--
ALTER TABLE `us`
  ADD PRIMARY KEY (`cedula`),
  ADD UNIQUE KEY `nivel` (`nivel`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bloque_hora`
--
ALTER TABLE `bloque_hora`
  MODIFY `id_bloque` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `prof`
--
ALTER TABLE `prof`
  MODIFY `id_us` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD CONSTRAINT `horarios_ibfk_1` FOREIGN KEY (`profesor`) REFERENCES `prof` (`id_us`),
  ADD CONSTRAINT `horarios_ibfk_2` FOREIGN KEY (`bloque_hora`) REFERENCES `bloque_hora` (`id_bloque`),
  ADD CONSTRAINT `horarios_ibfk_5` FOREIGN KEY (`materia`) REFERENCES `materias` (`nombre`),
  ADD CONSTRAINT `horarios_ibfk_6` FOREIGN KEY (`seccion`) REFERENCES `secciones` (`seccion`);

--
-- Filtros para la tabla `materias`
--
ALTER TABLE `materias`
  ADD CONSTRAINT `materias_ibfk_1` FOREIGN KEY (`ano`) REFERENCES `ano` (`ano`);

--
-- Filtros para la tabla `secciones`
--
ALTER TABLE `secciones`
  ADD CONSTRAINT `secciones_ibfk_1` FOREIGN KEY (`prof_guia`) REFERENCES `prof` (`id_us`),
  ADD CONSTRAINT `secciones_ibfk_2` FOREIGN KEY (`ano`) REFERENCES `ano` (`ano`);

--
-- Filtros para la tabla `us`
--
ALTER TABLE `us`
  ADD CONSTRAINT `us_ibfk_1` FOREIGN KEY (`cedula`) REFERENCES `prof` (`cedula`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
