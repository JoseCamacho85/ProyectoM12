-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-05-2016 a las 19:03:03
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `anuncio`
--

INSERT INTO `anuncio` (`id`, `titulo`, `descripcion`, `imagen`, `id_poi`, `id_usuario`) VALUES
(1, 'Bar Kabuki', 'Ven a visitar el Bar Kabuki a solo 100 metros del castillo Himeji. Si dices que has visto este mensaje te invitamos a una cerveza Sapporo.', 'anuncioHimeji.png', 1, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE IF NOT EXISTS `ciudad` (
  `id` int(11) NOT NULL,
  `nombre` char(25) COLLATE utf8_spanish2_ci NOT NULL,
  `id_pais` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`id`, `nombre`, `id_pais`) VALUES
(2, 'Barcelona', 1),
(4, 'Madrid', 1),
(5, 'Bilbao', 1),
(6, 'Carcassonne', 2),
(7, 'París', 2),
(8, 'Tokio', 3),
(9, 'Nara', 3),
(10, 'Kioto', 3),
(11, 'Himeji', 3),
(22, 'Tarragona', 1),
(23, 'Granada', 1),
(24, 'Marsella', 2),
(25, 'Versalles', 2),
(26, 'Toulouse', 2),
(27, 'Osaka', 3),
(28, 'El Cairo', 70),
(29, 'Alejandría', 70),
(30, 'Asuán', 70),
(31, 'Lúxor', 70),
(32, 'Sharm el-Sheij', 70),
(33, 'Agra', 106),
(34, 'Hyderabad', 106),
(35, 'Bombay', 106),
(36, 'Chennai', 106),
(37, 'Mathura', 106),
(38, 'Antananarivo', 132),
(39, 'Morondava', 132),
(40, 'Ankazobe', 132),
(41, 'Antsirabe', 132),
(42, 'Fianarantsoa', 132),
(43, 'Nueva York', 77),
(44, 'Los Ángeles', 77),
(45, 'San Francisco', 77),
(46, 'Las Vegas', 77),
(47, 'Chicago', 77),
(48, 'Mendoza', 16),
(49, 'Misiones', 16),
(50, 'Córdoba', 16),
(51, 'La Plata', 16),
(52, 'Buenos Aires', 16),
(53, 'Gold Coast', 19),
(54, 'Adelaida', 19),
(55, 'Perth', 19),
(56, 'Brisbane', 19),
(57, 'Sydney', 19),
(58, 'Rotorua', 164),
(59, 'Chistchurch', 164),
(60, 'Bay of Plenty', 164),
(61, 'Queenstown', 164),
(62, 'Auckland', 164);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diario`
--

CREATE TABLE IF NOT EXISTS `diario` (
  `id` int(11) NOT NULL,
  `nombre` char(25) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish2_ci NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `diario`
--

INSERT INTO `diario` (`id`, `nombre`, `descripcion`, `id_usuario`) VALUES
(1, 'Mi diario de viaje', 'Experiencias', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entorno`
--

CREATE TABLE IF NOT EXISTS `entorno` (
  `id` int(11) NOT NULL,
  `nombre` char(25) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `entorno`
--

INSERT INTO `entorno` (`id`, `nombre`) VALUES
(1, 'Montaña'),
(2, 'Mar'),
(3, 'Rural'),
(4, 'Urbano'),
(5, 'Rústico'),
(6, 'Desierto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foro`
--

CREATE TABLE IF NOT EXISTS `foro` (
  `ID` int(11) NOT NULL,
  `autor` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` date NOT NULL,
  `identificador` int(7) NOT NULL DEFAULT '0',
  `mensaje` text COLLATE utf8_spanish2_ci NOT NULL,
  `respuestas` int(11) NOT NULL DEFAULT '0',
  `titulo` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `ult_respuesta` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `foro`
--

INSERT INTO `foro` (`ID`, `autor`, `fecha`, `identificador`, `mensaje`, `respuestas`, `titulo`, `ult_respuesta`) VALUES
(17, 'admin', '2028-05-16', 0, 'En este foro pod&eacute;is crear nuevos temas para exponer las dudas o informaci&oacute;n que teng&aacute;is sobre el contenido de la web, sobre todo de los puntos de inter&eacute;s.', 1, 'Consultas', '2028-05-16'),
(18, 'userRegistrado', '2028-05-16', 17, 'Ok, muchas gracias.', 0, '', '2028-05-16'),
(19, 'userRegistrado', '2028-05-16', 0, 'Hola, soy nuevo en la p&aacute;gina y me gustar&iacute;a saber c&oacute;mo puedo crear un diario. Gracias.', 1, 'Diarios', '2028-05-16'),
(20, 'userProfesional', '2028-05-16', 19, 'Buenas,\r\nCuando est&aacute;s logueado se muestra autom&aacute;ticamente tu perfil. Ah&iacute; hay un submen&uacute; en el cual aparece el apartado &quot;Diarios&quot;, clicas en &eacute;l y puedes a&ntilde;adirlo.', 0, '', '2028-05-16');

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

--
-- Volcado de datos para la tabla `historial`
--

INSERT INTO `historial` (`id_diario`, `id_poi`, `fechaVisitaPoi`, `estaEnPoi`, `texto`, `foto`, `video`) VALUES
(1, 2, '2016-05-01', 1, 'Encantador', '', '');

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
) ENGINE=InnoDB AUTO_INCREMENT=165 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`id`, `nombre`) VALUES
(1, 'España'),
(2, 'Francia'),
(3, 'Japón'),
(16, 'Argentina'),
(19, 'Australia'),
(70, 'Egipto'),
(77, 'Estados Unidos'),
(106, 'India'),
(132, 'Madagascar'),
(164, 'Nueva Zelanda');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `poi`
--

CREATE TABLE IF NOT EXISTS `poi` (
  `id` int(11) NOT NULL,
  `nombre` char(50) COLLATE utf8_spanish2_ci NOT NULL,
  `foto` char(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8_spanish2_ci NOT NULL,
  `url` char(100) COLLATE utf8_spanish2_ci NOT NULL,
  `precio` text COLLATE utf8_spanish2_ci,
  `horario` text COLLATE utf8_spanish2_ci,
  `id_tipo` int(11) NOT NULL,
  `id_transporte` int(11) NOT NULL,
  `id_entorno` int(11) NOT NULL,
  `id_ciudad` int(11) NOT NULL,
  `id_pais` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `poi`
--

INSERT INTO `poi` (`id`, `nombre`, `foto`, `descripcion`, `url`, `precio`, `horario`, `id_tipo`, `id_transporte`, `id_entorno`, `id_ciudad`, `id_pais`, `id_usuario`) VALUES
(1, 'Castillo Himeji', 'himeji.jpg', 'El Castillo Himeji es un castillo japonés localizado en la ciudad costera de Himeji en la prefectura de Hyōgo (antiguo distrito de Shikito en la provincia de Harima), a unos 47 km al oeste de Kōbe. Es una de las estructuras más antiguas del Japón medieval que aún sobrevive en buenas condiciones; fue designado como Patrimonio de la Humanidad1 por la Unesco en 1993, también es un sitio histórico especial de Japón2 y un Tesoro Nacional. Junto con el Castillo Matsumoto y el Castillo Kumamoto, es uno de los "Tres Famosos Castillos" de Japón, y es el más visitado del país. Se le conoce a veces con el nombre de Hakuro-jō o Shirasagi-jō ("Castillo de la garza blanca") debido al color blanco brillante de su exterior.', 'http://www.himeji-kanko.jp/es/', '1000 yen (castillo)1040 yen (castillo y jardín Kokoen)', 'De 9:00 a 17:00. Cerrado 29 y 30 de Diciembre', 4, 3, 4, 11, 3, 5),
(2, 'Acueducto romano', 'acueducto_romano.jpg', 'Se le denomina Puente del Diablo ya que una leyenda cuenta que fue construido por el Diablo tras ganar una apuesta donde una doncella se jugaba el alma.', 'https://es.wikipedia.org/wiki/Acueducto_de_les_Ferreres', 'Visita gratuita', 'Siempre se puede visitar', 4, 6, 1, 22, 1, 6),
(3, 'Musée des beaux arts de Carcassonne', 'musee_carcassonne.jpg', 'Las pinturas y cerámicas hacen de este museo una bonita síntesis del arte europeo desde el siglo XVII hasta nuestros días. Visita guiada con previa cita. Presentación de tres exposiciones al año.', 'http://www.carcassonne.org/fr/le-mus%C3%A9e-des-beaux-arts-de-carcassonne', 'Entrada gratuita', 'De martes a sábado, de 10 a 12 y de 14 a 18 y el primer domingo del mes de 14:30 a 17:30', 1, 4, 1, 6, 2, 6),
(4, 'Hakushu', 'hakushu.jpg', 'Recomiendo no perderse esta joya en Tokyo, el filet de kobe es una maravilla. Se disfruta de principio a fin y el ambiente familiar completa la experiencia.', 'https://www.facebook.com/hakusyu#_=_', 'Entre 65 € y 123 €', 'De lunes a sábado de 17:30 a 23:00', 2, 3, 4, 8, 3, 7),
(5, 'Pirámide de Keops', 'keops.jpg', 'La pirámide de Keops es la más grande de las tres pirámides de la meseta de Giza, a las afueras de El Cairo (Egipto), es la única de las Siete Maravillas del Mundo antiguo que aún sigue en pie.', 'https://es.wikipedia.org/wiki/Gran_Pir%C3%A1mide_de_Guiza', 'Visita gratuita', 'De lunes a domingo de 8:00 a 17:00', 4, 4, 6, 28, 70, 5),
(6, 'O by Cirque du Soleil', 'cirque_du_soleil.jpg', '"O" desafía cualquier descripción: es uno de los espectáculos en vivo más increíbles y creativos que encontrarás en el mundo.', 'https://www.vegas.com/shows/cirque-du-soleil/o-las-vegas/', 'Desde 121,32 $', 'Miércoles y sábado a las 19:00 o 21:30', 3, 5, 4, 46, 77, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ruta`
--

CREATE TABLE IF NOT EXISTS `ruta` (
  `id` int(11) NOT NULL,
  `nombre` char(25) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish2_ci NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `ruta`
--

INSERT INTO `ruta` (`id`, `nombre`, `descripcion`, `id_usuario`) VALUES
(1, 'Ruta de Japón', '祝祷 - Shukutō', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutapoi`
--

CREATE TABLE IF NOT EXISTS `rutapoi` (
  `id_ruta` int(11) NOT NULL,
  `id_poi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `rutapoi`
--

INSERT INTO `rutapoi` (`id_ruta`, `id_poi`) VALUES
(1, 1),
(1, 4);

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
  `nombre` char(25) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

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
  `url` char(100) COLLATE utf8_spanish2_ci NOT NULL,
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
(5, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'admin@bitacle.es', 'Granollers', 'Català', '6403212', 'www.bitacle.es', 'admin.png', '', 1, 1, 1),
(6, 'userRegistrado', '81dc9bdb52d04dc20036dbd8313ed055', 'userRegistrado@bitacle.es', 'Granollers', 'Català', '4402212', '', 'user.png', '', 0, 1, 0),
(7, 'userProfesional', '81dc9bdb52d04dc20036dbd8313ed055', 'userProfesional', 'Parets', 'Català', '6473652', '', 'wally.PNG', '', 0, 1, 1);

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
-- Indices de la tabla `entorno`
--
ALTER TABLE `entorno`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `foro`
--
ALTER TABLE `foro`
  ADD PRIMARY KEY (`ID`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT de la tabla `diario`
--
ALTER TABLE `diario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `entorno`
--
ALTER TABLE `entorno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `foro`
--
ALTER TABLE `foro`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=165;
--
-- AUTO_INCREMENT de la tabla `poi`
--
ALTER TABLE `poi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `ruta`
--
ALTER TABLE `ruta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
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
  ADD CONSTRAINT `anuncio_ibfk_1` FOREIGN KEY (`id_poi`) REFERENCES `poi` (`id`) ON DELETE CASCADE,
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
  ADD CONSTRAINT `diario_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `historial`
--
ALTER TABLE `historial`
  ADD CONSTRAINT `historial_ibfk_1` FOREIGN KEY (`id_diario`) REFERENCES `diario` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `historial_ibfk_2` FOREIGN KEY (`id_poi`) REFERENCES `poi` (`id`) ON DELETE CASCADE;

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
  ADD CONSTRAINT `poi_ibfk_5` FOREIGN KEY (`id_pais`) REFERENCES `pais` (`id`);

--
-- Filtros para la tabla `ruta`
--
ALTER TABLE `ruta`
  ADD CONSTRAINT `ruta_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `rutapoi`
--
ALTER TABLE `rutapoi`
  ADD CONSTRAINT `rutapoi_ibfk_1` FOREIGN KEY (`id_ruta`) REFERENCES `ruta` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `rutapoi_ibfk_2` FOREIGN KEY (`id_poi`) REFERENCES `poi` (`id`) ON DELETE CASCADE;

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
