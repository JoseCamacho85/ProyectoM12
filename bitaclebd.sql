-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-05-2016 a las 14:12:13
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `anuncio`
--

INSERT INTO `anuncio` (`id`, `titulo`, `descripcion`, `imagen`, `id_poi`, `id_usuario`) VALUES
(1, 'Bar Kabuki', 'Ven a visitar el Bar Kabuki a solo 100 metros del castillo Himeji. Si dices que has visto este mensaje te invitamos a una cerveza Sapporo.', 'anuncioHimeji.png', 1, 5),
(2, 'Oferta Mañanas', 'Te descontamos un Euro si compras tus tickets antes de las 11:00h', 'anuncioEiffel', 2, 5);

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
(3, 'Mataro', 1),
(4, 'Madrid', 1),
(5, 'Bilbao', 1),
(6, 'Carcassonne', 2),
(7, 'Paris', 2),
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `diario`
--

INSERT INTO `diario` (`id`, `nombre`, `descripcion`, `id_usuario`) VALUES
(1, 'Mi Diario 1', 'Este es mi primer diario', 5),
(2, 'Mi Diario 2', 'Mi segundo diario', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entorno`
--

CREATE TABLE IF NOT EXISTS `entorno` (
  `id` int(11) NOT NULL,
  `nombre` char(25) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `entorno`
--

INSERT INTO `entorno` (`id`, `nombre`) VALUES
(1, 'Montana'),
(2, 'Mar'),
(3, 'Rural'),
(4, 'Urbano'),
(5, 'rustico');

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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `foro`
--

INSERT INTO `foro` (`ID`, `autor`, `fecha`, `identificador`, `mensaje`, `respuestas`, `titulo`, `ult_respuesta`) VALUES
(1, 'Jose', '2020-05-16', 0, 'pues eso chavales', 3, 'habemus foro', '2020-05-16'),
(2, 'Maze', '2020-05-16', 0, 'reportado', 0, 'telafo? [+18]', '2020-05-16'),
(3, 'joan', '2020-05-16', 1, 'te lo has currao', 0, 'mola', '2020-05-16'),
(4, 'joan', '2020-05-16', 0, 'y me presento', 0, 'hola soy nuebo', '2020-05-16'),
(5, 'joan', '2020-05-16', 0, 'y me presento', 0, 'hola soy nuebo', '2020-05-16'),
(6, 'joan', '2020-05-16', 0, 'y me presento', 0, 'hola soy nuevo', '2020-05-16'),
(7, 'toni', '2020-05-16', 0, '... soy gay', 0, 'lo confieso....', '2020-05-16'),
(8, 'jose', '2020-05-16', 0, 'dasdsad', 0, 'sdasd', '2020-05-16'),
(9, 'valeri', '2020-05-16', 0, 'dasdasdsad', 1, 'hola ', '2020-05-16'),
(10, 'joan', '2020-05-16', 9, 'jejejje', 0, 'no me gusta', '2020-05-16'),
(11, 'fdsfsd', '2020-05-16', 0, 'fsdfsdfs', 0, 'rffsdf', '2020-05-16'),
(12, 'dasdasd', '2020-05-16', 1, 'dasdsad', 0, 'dasdas', '2020-05-16'),
(13, 'dasdsad', '2020-05-16', 1, 'dsadasdasdasdas', 0, 'dasdas', '2020-05-16'),
(14, 'dsadas', '2020-05-16', 0, 'sdasadasd', 0, 'dasdasd', '2020-05-16'),
(15, 'dsadsa', '0000-00-00', 0, 'dsadsad', 0, 'dsadsa', '0000-00-00'),
(16, 'dddddd', '2016-05-20', 0, 'dddd', 0, 'dddd', '2016-05-20');

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
(1, 1, '2016-05-03', 0, 'Espero que me guste', '', '');

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
) ENGINE=InnoDB AUTO_INCREMENT=241 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`id`, `nombre`) VALUES
(1, 'Espana'),
(2, 'Francia'),
(3, 'Japon'),
(4, 'Afganistán'),
(5, 'Islas Gland'),
(6, 'Albania'),
(7, 'Alemania'),
(8, 'Andorra'),
(9, 'Angola'),
(10, 'Anguilla'),
(11, 'Antártida'),
(12, 'Antigua y Barbuda'),
(13, 'Antillas Holandesas'),
(14, 'Arabia Saudí'),
(15, 'Argelia'),
(16, 'Argentina'),
(17, 'Armenia'),
(18, 'Aruba'),
(19, 'Australia'),
(20, 'Austria'),
(21, 'Azerbaiyán'),
(22, 'Bahamas'),
(23, 'Bahréin'),
(24, 'Bangladesh'),
(25, 'Barbados'),
(26, 'Bielorrusia'),
(27, 'Bélgica'),
(28, 'Belice'),
(29, 'Benin'),
(30, 'Bermudas'),
(31, 'Bhután'),
(32, 'Bolivia'),
(33, 'Bosnia y Herzegovina'),
(34, 'Botsuana'),
(35, 'Isla Bouvet'),
(36, 'Brasil'),
(37, 'Brunéi'),
(38, 'Bulgaria'),
(39, 'Burkina Faso'),
(40, 'Burundi'),
(41, 'Cabo Verde'),
(42, 'Islas Caimán'),
(43, 'Camboya'),
(44, 'Camerún'),
(45, 'Canadá'),
(46, 'República Centroafricana'),
(47, 'Chad'),
(48, 'República Checa'),
(49, 'Chile'),
(50, 'China'),
(51, 'Chipre'),
(52, 'Isla de Navidad'),
(53, 'Ciudad del Vaticano'),
(54, 'Islas Cocos'),
(55, 'Colombia'),
(56, 'Comoras'),
(57, 'República Democrática del'),
(58, 'Congo'),
(59, 'Islas Cook'),
(60, 'Corea del Norte'),
(61, 'Corea del Sur'),
(62, 'Costa de Marfil'),
(63, 'Costa Rica'),
(64, 'Croacia'),
(65, 'Cuba'),
(66, 'Dinamarca'),
(67, 'Dominica'),
(68, 'República Dominicana'),
(69, 'Ecuador'),
(70, 'Egipto'),
(71, 'El Salvador'),
(72, 'Emiratos Árabes Unidos'),
(73, 'Eritrea'),
(74, 'Eslovaquia'),
(75, 'Eslovenia'),
(76, 'Islas ultramarinas de Est'),
(77, 'Estados Unidos'),
(78, 'Estonia'),
(79, 'Etiopía'),
(80, 'Islas Feroe'),
(81, 'Filipinas'),
(82, 'Finlandia'),
(83, 'Fiyi'),
(84, 'Gabón'),
(85, 'Gambia'),
(86, 'Georgia'),
(87, 'Islas Georgias del Sur y'),
(88, 'Ghana'),
(89, 'Gibraltar'),
(90, 'Granada'),
(91, 'Grecia'),
(92, 'Groenlandia'),
(93, 'Guadalupe'),
(94, 'Guam'),
(95, 'Guatemala'),
(96, 'Guayana Francesa'),
(97, 'Guinea'),
(98, 'Guinea Ecuatorial'),
(99, 'Guinea-Bissau'),
(100, 'Guyana'),
(101, 'Haití'),
(102, 'Islas Heard y McDonald'),
(103, 'Honduras'),
(104, 'Hong Kong'),
(105, 'Hungría'),
(106, 'India'),
(107, 'Indonesia'),
(108, 'Irán'),
(109, 'Iraq'),
(110, 'Irlanda'),
(111, 'Islandia'),
(112, 'Israel'),
(113, 'Italia'),
(114, 'Jamaica'),
(115, 'Jordania'),
(116, 'Kazajstán'),
(117, 'Kenia'),
(118, 'Kirguistán'),
(119, 'Kiribati'),
(120, 'Kuwait'),
(121, 'Laos'),
(122, 'Lesotho'),
(123, 'Letonia'),
(124, 'Líbano'),
(125, 'Liberia'),
(126, 'Libia'),
(127, 'Liechtenstein'),
(128, 'Lituania'),
(129, 'Luxemburgo'),
(130, 'Macao'),
(131, 'ARY Macedonia'),
(132, 'Madagascar'),
(133, 'Malasia'),
(134, 'Malawi'),
(135, 'Maldivas'),
(136, 'Malí'),
(137, 'Malta'),
(138, 'Islas Malvinas'),
(139, 'Islas Marianas del Norte'),
(140, 'Marruecos'),
(141, 'Islas Marshall'),
(142, 'Martinica'),
(143, 'Mauricio'),
(144, 'Mauritania'),
(145, 'Mayotte'),
(146, 'México'),
(147, 'Micronesia'),
(148, 'Moldavia'),
(149, 'Mónaco'),
(150, 'Mongolia'),
(151, 'Montserrat'),
(152, 'Mozambique'),
(153, 'Myanmar'),
(154, 'Namibia'),
(155, 'Nauru'),
(156, 'Nepal'),
(157, 'Nicaragua'),
(158, 'Níger'),
(159, 'Nigeria'),
(160, 'Niue'),
(161, 'Isla Norfolk'),
(162, 'Noruega'),
(163, 'Nueva Caledonia'),
(164, 'Nueva Zelanda'),
(165, 'Omán'),
(166, 'Países Bajos'),
(167, 'Pakistán'),
(168, 'Palau'),
(169, 'Palestina'),
(170, 'Panamá'),
(171, 'Papúa Nueva Guinea'),
(172, 'Paraguay'),
(173, 'Perú'),
(174, 'Islas Pitcairn'),
(175, 'Polinesia Francesa'),
(176, 'Polonia'),
(177, 'Portugal'),
(178, 'Puerto Rico'),
(179, 'Qatar'),
(180, 'Reino Unido'),
(181, 'Reunión'),
(182, 'Ruanda'),
(183, 'Rumania'),
(184, 'Rusia'),
(185, 'Sahara Occidental'),
(186, 'Islas Salomón'),
(187, 'Samoa'),
(188, 'Samoa Americana'),
(189, 'San Cristóbal y Nevis'),
(190, 'San Marino'),
(191, 'San Pedro y Miquelón'),
(192, 'San Vicente y las Granadi'),
(193, 'Santa Helena'),
(194, 'Santa Lucía'),
(195, 'Santo Tomé y Príncipe'),
(196, 'Senegal'),
(197, 'Serbia y Montenegro'),
(198, 'Seychelles'),
(199, 'Sierra Leona'),
(200, 'Singapur'),
(201, 'Siria'),
(202, 'Somalia'),
(203, 'Sri Lanka'),
(204, 'Suazilandia'),
(205, 'Sudáfrica'),
(206, 'Sudán'),
(207, 'Suecia'),
(208, 'Suiza'),
(209, 'Surinam'),
(210, 'Svalbard y Jan Mayen'),
(211, 'Tailandia'),
(212, 'Taiwán'),
(213, 'Tanzania'),
(214, 'Tayikistán'),
(215, 'Territorio Británico del'),
(216, 'Territorios Australes Fra'),
(217, 'Timor Oriental'),
(218, 'Togo'),
(219, 'Tokelau'),
(220, 'Tonga'),
(221, 'Trinidad y Tobago'),
(222, 'Túnez'),
(223, 'Islas Turcas y Caicos'),
(224, 'Turkmenistán'),
(225, 'Turquía'),
(226, 'Tuvalu'),
(227, 'Ucrania'),
(228, 'Uganda'),
(229, 'Uruguay'),
(230, 'Uzbekistán'),
(231, 'Vanuatu'),
(232, 'Venezuela'),
(233, 'Vietnam'),
(234, 'Islas Vírgenes Británicas'),
(235, 'Islas Vírgenes de los Est'),
(236, 'Wallis y Futuna'),
(237, 'Yemen'),
(238, 'Yibuti'),
(239, 'Zambia'),
(240, 'Zimbabue');

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
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `poi`
--

INSERT INTO `poi` (`id`, `nombre`, `foto`, `descripcion`, `url`, `precio`, `horario`, `id_tipo`, `id_transporte`, `id_entorno`, `id_ciudad`, `id_pais`, `id_usuario`) VALUES
(1, 'Castillo Himeji', NULL, 'El Castillo Himeji es un castillo japonés localizado en la ciudad costera de Himeji en la prefectura de Hyōgo (antiguo distrito de Shikito en la provincia de Harima), a unos 47 km al oeste de Kōbe. Es una de las estructuras más antiguas del Japón medieval que aún sobrevive en buenas condiciones; fue designado como Patrimonio de la Humanidad1 por la Unesco en 1993, también es un sitio histórico especial de Japón2 y un Tesoro Nacional. Junto con el Castillo Matsumoto y el Castillo Kumamoto, es uno de los "Tres Famosos Castillos" de Japón, y es el más visitado del país. Se le conoce a veces con el nombre de Hakuro-jō o Shirasagi-jō ("Castillo de la garza blanca") debido al color blanco brillante de su exterior.', '', '1000 yen (castillo)\r\n1040 yen (castillo y jardín Kokoen)', 'De 9:00 a 17:00\r\nCerrado 29 y 30 de Diciembre', 4, 3, 4, 11, 3, 5),
(2, 'Torre Eiffel', NULL, 'La torre Eiffel3 (tour Eiffel, en francés), inicialmente nombrada tour de 300 mètres (torre de 300 metros), es una estructura de hierro pudelado diseñada por Maurice Koechlin y Émile Nouguier, y construida por el ingeniero francés Alexandre Gustave Eiffel y sus colaboradores para la Exposición universal de 1889 en París.4\r\n\r\nSituada en el extremo del Campo de Marte a la orilla del río Sena, este monumento parisino, símbolo de Francia y su capital, es la estructura más alta de la ciudad y el monumento que cobra entrada más visitado del mundo, con 7,1 millones de turistas cada año.5 Con una altura de 300 metros, prolongada más tarde con una antena a 324 metros, la torre Eiffel fue la estructura más elevada del mundo durante 41 años.', '', 'Ticket de entrada ascensor hasta la segunda planta: (11,00€/8,50€/4,00€)* 	\r\n\r\nTicket de entrada ascensor con cima: 	(17,00€/14,50€/8,00€)* 	\r\n\r\nTicket de entrada escalera hasta la segunda planta:(7,00€/5,00€/3,00€)* 	\r\n\r\n*Adulto/Joven/Reducida', 'De 9.30h a 23.45h', 4, 3, 4, 7, 2, 5),
(21, 'Poinuevo', 'explosion.png', 'retretert', 'http://www.g.com', 'asdasd', 'asdasdasd', 1, 2, 1, 4, 1, 5);

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
(1, 'Ruta del moli de vent', 'La mejor', 5);

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
(2, 'Restauracion'),
(3, 'Ocio Nocturno'),
(4, 'Historico');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `diario`
--
ALTER TABLE `diario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `entorno`
--
ALTER TABLE `entorno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `foro`
--
ALTER TABLE `foro`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=241;
--
-- AUTO_INCREMENT de la tabla `poi`
--
ALTER TABLE `poi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
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
  ADD CONSTRAINT `diario_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

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
