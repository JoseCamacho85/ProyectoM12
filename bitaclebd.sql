-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-05-2016 a las 13:59:02
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bitaclebd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anuncio`
--

CREATE TABLE IF NOT EXISTS `anuncio` (
  `id` int(11) NOT NULL,
  `titulo` char(25) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish2_ci NOT NULL,
  `imagen` char(50) COLLATE utf8_spanish2_ci NOT NULL,
  `id_poi` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE IF NOT EXISTS `ciudad` (
  `id` int(11) NOT NULL,
  `nombre` char(25) COLLATE utf8_spanish2_ci NOT NULL,
  `id_pais` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`id`, `nombre`, `id_pais`) VALUES
(1, 'Granollers', 1),
(2, 'Barcelona', 1),
(3, 'Mataró', 1),
(4, 'Madrid', 1),
(5, 'Bilbao', 1),
(6, 'Carcassonne', 2),
(7, 'París', 2),
(8, 'Tokio', 3),
(9, 'Nara', 3),
(10, 'Kioto', 3),
(11, 'Himeji', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diario`
--

CREATE TABLE IF NOT EXISTS `diario` (
  `id` int(11) NOT NULL,
  `nombre` char(25) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish2_ci NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diariopoi`
--

CREATE TABLE IF NOT EXISTS `diariopoi` (
  `id_diario` int(11) NOT NULL,
  `id_poi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entorno`
--

CREATE TABLE IF NOT EXISTS `entorno` (
  `id` int(11) NOT NULL,
  `nombre` char(25) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `entorno`
--

INSERT INTO `entorno` (`id`, `nombre`) VALUES
(1, 'Montaña'),
(2, 'Mar'),
(3, 'Rural'),
(4, 'Urbano');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foro`
--

CREATE TABLE IF NOT EXISTS `foro` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE IF NOT EXISTS `historial` (
  `id_diario` int(11) NOT NULL,
  `id_poi` int(11) NOT NULL,
  `fechaVisitaPoi` date NOT NULL,
  `estaEnPoi` tinyint(1) NOT NULL,
  `texto` text COLLATE utf32_spanish2_ci NOT NULL,
  `foto` char(50) COLLATE utf32_spanish2_ci NOT NULL,
  `video` char(50) COLLATE utf32_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajeforo`
--

CREATE TABLE IF NOT EXISTS `mensajeforo` (
  `id` int(11) NOT NULL,
  `texto` text COLLATE utf8_spanish2_ci NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_temaForo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajeprivado`
--

CREATE TABLE IF NOT EXISTS `mensajeprivado` (
  `id` int(11) NOT NULL,
  `titulo` char(25) COLLATE utf8_spanish2_ci NOT NULL,
  `texto` text COLLATE utf8_spanish2_ci NOT NULL,
  `destinatario` char(25) COLLATE utf8_spanish2_ci NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE IF NOT EXISTS `pais` (
  `id` int(11) NOT NULL,
  `nombre` char(25) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`id`, `nombre`) VALUES
(1, 'España'),
(2, 'Francia'),
(3, 'Japón');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `poi`
--

CREATE TABLE IF NOT EXISTS `poi` (
  `id` int(11) NOT NULL,
  `nombre` char(25) COLLATE utf8_spanish2_ci NOT NULL,
  `foto` char(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8_spanish2_ci NOT NULL,
  `url` char(50) COLLATE utf8_spanish2_ci NOT NULL,
  `precio` text COLLATE utf8_spanish2_ci,
  `horario` text COLLATE utf8_spanish2_ci,
  `id_tipo` int(11) NOT NULL,
  `id_transporte` int(11) NOT NULL,
  `id_entorno` int(11) NOT NULL,
  `id_ciudad` int(11) NOT NULL,
  `id_pais` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `poi`
--

INSERT INTO `poi` (`id`, `nombre`, `foto`, `descripcion`, `url`, `precio`, `horario`, `id_tipo`, `id_transporte`, `id_entorno`, `id_ciudad`, `id_pais`, `id_usuario`) VALUES
(1, 'Castillo Himeji', NULL, 'El Castillo Himeji es un castillo japonés localizado en la ciudad costera de Himeji en la prefectura de Hyōgo (antiguo distrito de Shikito en la provincia de Harima), a unos 47 km al oeste de Kōbe. Es una de las estructuras más antiguas del Japón medieval que aún sobrevive en buenas condiciones; fue designado como Patrimonio de la Humanidad1 por la Unesco en 1993, también es un sitio histórico especial de Japón2 y un Tesoro Nacional. Junto con el Castillo Matsumoto y el Castillo Kumamoto, es uno de los "Tres Famosos Castillos" de Japón, y es el más visitado del país. Se le conoce a veces con el nombre de Hakuro-jō o Shirasagi-jō ("Castillo de la garza blanca") debido al color blanco brillante de su exterior.', '', '1000 yen (castillo)\r\n1040 yen (castillo y jardín Kokoen)', 'De 9:00 a 17:00\r\nCerrado 29 y 30 de Diciembre', 4, 3, 4, 11, 3, 5),
(2, 'Torre Eiffel', NULL, 'La torre Eiffel3 (tour Eiffel, en francés), inicialmente nombrada tour de 300 mètres (torre de 300 metros), es una estructura de hierro pudelado diseñada por Maurice Koechlin y Émile Nouguier, y construida por el ingeniero francés Alexandre Gustave Eiffel y sus colaboradores para la Exposición universal de 1889 en París.4\r\n\r\nSituada en el extremo del Campo de Marte a la orilla del río Sena, este monumento parisino, símbolo de Francia y su capital, es la estructura más alta de la ciudad y el monumento que cobra entrada más visitado del mundo, con 7,1 millones de turistas cada año.5 Con una altura de 300 metros, prolongada más tarde con una antena a 324 metros, la torre Eiffel fue la estructura más elevada del mundo durante 41 años.', '', 'Ticket de entrada ascensor hasta la segunda planta: (11,00€/8,50€/4,00€)* 	\r\n\r\nTicket de entrada ascensor con cima: 	(17,00€/14,50€/8,00€)* 	\r\n\r\nTicket de entrada escalera hasta la segunda planta:(7,00€/5,00€/3,00€)* 	\r\n\r\n*Adulto/Joven/Reducida', 'De 9.30h a 23.45h', 4, 3, 4, 2, 2, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ruta`
--

CREATE TABLE IF NOT EXISTS `ruta` (
  `id` int(11) NOT NULL,
  `nombre` char(25) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish2_ci NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutapoi`
--

CREATE TABLE IF NOT EXISTS `rutapoi` (
  `id_ruta` int(11) NOT NULL,
  `id_poi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temaforo`
--

CREATE TABLE IF NOT EXISTS `temaforo` (
  `id` int(11) NOT NULL,
  `titulo` char(50) COLLATE utf8_spanish2_ci NOT NULL,
  `id_foro` int(11) NOT NULL,
  `id_poi` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE IF NOT EXISTS `tipo` (
  `id` int(11) NOT NULL,
  `nombre` char(25) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`id`, `nombre`) VALUES
(1, 'Museo'),
(2, 'Restauración'),
(3, 'Ocio Nocturno'),
(4, 'Histórico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transporte`
--

CREATE TABLE IF NOT EXISTS `transporte` (
  `id` int(11) NOT NULL,
  `nombre` char(25) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `transporte`
--

INSERT INTO `transporte` (`id`, `nombre`) VALUES
(2, 'Bicicleta'),
(3, 'Ninguno'),
(4, 'Coche o moto'),
(5, 'Tren'),
(6, 'Bus');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL,
  `username` char(25) COLLATE utf8_spanish2_ci NOT NULL,
  `password` char(100) COLLATE utf8_spanish2_ci NOT NULL,
  `email` char(25) COLLATE utf8_spanish2_ci NOT NULL,
  `poblacion` char(50) COLLATE utf8_spanish2_ci NOT NULL,
  `idioma` char(25) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` char(10) COLLATE utf8_spanish2_ci NOT NULL,
  `url` char(50) COLLATE utf8_spanish2_ci NOT NULL,
  `foto` char(50) COLLATE utf8_spanish2_ci NOT NULL,
  `textoPresentacion` text COLLATE utf8_spanish2_ci NOT NULL,
  `esAdministrador` tinyint(1) NOT NULL,
  `esUsuarioRegistrado` tinyint(1) NOT NULL,
  `esUsuarioProfesional` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `username`, `password`, `email`, `poblacion`, `idioma`, `telefono`, `url`, `foto`, `textoPresentacion`, `esAdministrador`, `esUsuarioRegistrado`, `esUsuarioProfesional`) VALUES
(5, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'admin@bitacle.es', 'Granollers', 'Català', '6403212', 'www.bitacle.es', '', '', 1, 1, 1),
(6, 'userRegistrado', '81dc9bdb52d04dc20036dbd8313ed055', 'userRegistrado@bitacle.es', 'Granollers', 'Català', '4402212', '', '', '', 0, 1, 0),
(7, 'userProfesional', '81dc9bdb52d04dc20036dbd8313ed055', 'userProfesional', 'Parets', 'Català', '6473652', '', '', '', 0, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariomensajeforo`
--

CREATE TABLE IF NOT EXISTS `usuariomensajeforo` (
  `id_usuario` int(11) NOT NULL,
  `id_mensajeForo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valora`
--

CREATE TABLE IF NOT EXISTS `valora` (
  `id_usuario` int(11) NOT NULL,
  `id_mensajeForo` int(11) NOT NULL,
  `puntuacion` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `anuncio`
--
ALTER TABLE `anuncio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_poi` (`id_poi`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pais` (`id_pais`);

--
-- Indices de la tabla `diario`
--
ALTER TABLE `diario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `diariopoi`
--
ALTER TABLE `diariopoi`
  ADD PRIMARY KEY (`id_diario`,`id_poi`),
  ADD KEY `id_diario` (`id_diario`),
  ADD KEY `id_poi` (`id_poi`);

--
-- Indices de la tabla `entorno`
--
ALTER TABLE `entorno`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `foro`
--
ALTER TABLE `foro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`id_diario`,`id_poi`),
  ADD KEY `id_diario` (`id_diario`),
  ADD KEY `id_poi` (`id_poi`);

--
-- Indices de la tabla `mensajeforo`
--
ALTER TABLE `mensajeforo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_temaForo` (`id_temaForo`);

--
-- Indices de la tabla `mensajeprivado`
--
ALTER TABLE `mensajeprivado`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `poi`
--
ALTER TABLE `poi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tipo` (`id_tipo`),
  ADD KEY `id_transporte` (`id_transporte`),
  ADD KEY `id_entorno` (`id_entorno`),
  ADD KEY `id_ciudad` (`id_ciudad`),
  ADD KEY `id_pais` (`id_pais`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `ruta`
--
ALTER TABLE `ruta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `rutapoi`
--
ALTER TABLE `rutapoi`
  ADD PRIMARY KEY (`id_ruta`,`id_poi`),
  ADD KEY `id_ruta` (`id_ruta`),
  ADD KEY `id_poi` (`id_poi`);

--
-- Indices de la tabla `temaforo`
--
ALTER TABLE `temaforo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_foro` (`id_foro`),
  ADD KEY `id_poi` (`id_poi`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `transporte`
--
ALTER TABLE `transporte`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuariomensajeforo`
--
ALTER TABLE `usuariomensajeforo`
  ADD PRIMARY KEY (`id_usuario`,`id_mensajeForo`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_mensajeForo` (`id_mensajeForo`),
  ADD KEY `id_mensajeForo_2` (`id_mensajeForo`);

--
-- Indices de la tabla `valora`
--
ALTER TABLE `valora`
  ADD PRIMARY KEY (`id_usuario`,`id_mensajeForo`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_mensajeForo` (`id_mensajeForo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `anuncio`
--
ALTER TABLE `anuncio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `diario`
--
ALTER TABLE `diario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `entorno`
--
ALTER TABLE `entorno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `foro`
--
ALTER TABLE `foro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `mensajeforo`
--
ALTER TABLE `mensajeforo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `mensajeprivado`
--
ALTER TABLE `mensajeprivado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `poi`
--
ALTER TABLE `poi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `ruta`
--
ALTER TABLE `ruta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `temaforo`
--
ALTER TABLE `temaforo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `transporte`
--
ALTER TABLE `transporte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `anuncio`
--
ALTER TABLE `anuncio`
  ADD CONSTRAINT `anuncio_ibfk_1` FOREIGN KEY (`id_poi`) REFERENCES `poi` (`id`),
  ADD CONSTRAINT `anuncio_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD CONSTRAINT `ciudad_ibfk_1` FOREIGN KEY (`id_pais`) REFERENCES `pais` (`id`);

--
-- Filtros para la tabla `diario`
--
ALTER TABLE `diario`
  ADD CONSTRAINT `diario_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `diariopoi`
--
ALTER TABLE `diariopoi`
  ADD CONSTRAINT `diariopoi_ibfk_1` FOREIGN KEY (`id_diario`) REFERENCES `diario` (`id`),
  ADD CONSTRAINT `diariopoi_ibfk_2` FOREIGN KEY (`id_poi`) REFERENCES `poi` (`id`);

--
-- Filtros para la tabla `historial`
--
ALTER TABLE `historial`
  ADD CONSTRAINT `historial_ibfk_1` FOREIGN KEY (`id_diario`) REFERENCES `diario` (`id`),
  ADD CONSTRAINT `historial_ibfk_2` FOREIGN KEY (`id_poi`) REFERENCES `poi` (`id`);

--
-- Filtros para la tabla `mensajeforo`
--
ALTER TABLE `mensajeforo`
  ADD CONSTRAINT `mensajeforo_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `mensajeforo_ibfk_2` FOREIGN KEY (`id_temaForo`) REFERENCES `temaforo` (`id`);

--
-- Filtros para la tabla `mensajeprivado`
--
ALTER TABLE `mensajeprivado`
  ADD CONSTRAINT `mensajeprivado_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `poi`
--
ALTER TABLE `poi`
  ADD CONSTRAINT `poi_ibfk_1` FOREIGN KEY (`id_tipo`) REFERENCES `tipo` (`id`),
  ADD CONSTRAINT `poi_ibfk_2` FOREIGN KEY (`id_transporte`) REFERENCES `transporte` (`id`),
  ADD CONSTRAINT `poi_ibfk_3` FOREIGN KEY (`id_entorno`) REFERENCES `entorno` (`id`),
  ADD CONSTRAINT `poi_ibfk_4` FOREIGN KEY (`id_ciudad`) REFERENCES `ciudad` (`id`),
  ADD CONSTRAINT `poi_ibfk_5` FOREIGN KEY (`id_pais`) REFERENCES `pais` (`id`),
  ADD CONSTRAINT `poi_ibfk_6` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `ruta`
--
ALTER TABLE `ruta`
  ADD CONSTRAINT `ruta_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `rutapoi`
--
ALTER TABLE `rutapoi`
  ADD CONSTRAINT `rutapoi_ibfk_1` FOREIGN KEY (`id_ruta`) REFERENCES `ruta` (`id`),
  ADD CONSTRAINT `rutapoi_ibfk_2` FOREIGN KEY (`id_poi`) REFERENCES `poi` (`id`);

--
-- Filtros para la tabla `temaforo`
--
ALTER TABLE `temaforo`
  ADD CONSTRAINT `temaforo_ibfk_1` FOREIGN KEY (`id_foro`) REFERENCES `foro` (`id`),
  ADD CONSTRAINT `temaforo_ibfk_2` FOREIGN KEY (`id_poi`) REFERENCES `poi` (`id`),
  ADD CONSTRAINT `temaforo_ibfk_3` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `usuariomensajeforo`
--
ALTER TABLE `usuariomensajeforo`
  ADD CONSTRAINT `usuariomensajeforo_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `usuariomensajeforo_ibfk_2` FOREIGN KEY (`id_mensajeForo`) REFERENCES `mensajeforo` (`id`);

--
-- Filtros para la tabla `valora`
--
ALTER TABLE `valora`
  ADD CONSTRAINT `valora_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `valora_ibfk_2` FOREIGN KEY (`id_mensajeForo`) REFERENCES `mensajeforo` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
