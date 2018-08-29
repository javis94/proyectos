-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-04-2018 a las 18:51:22
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `requisicion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aprobacion`
--

CREATE TABLE `aprobacion` (
  `id_probacion` int(11) NOT NULL,
  `aprobacion` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `aprobacion`
--

INSERT INTO `aprobacion` (`id_probacion`, `aprobacion`) VALUES
(1, 'Si'),
(2, 'No'),
(3, 'Pendiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autorizacion`
--

CREATE TABLE `autorizacion` (
  `id_autorizacion` int(11) NOT NULL,
  `autorizacion` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `autorizacion`
--

INSERT INTO `autorizacion` (`id_autorizacion`, `autorizacion`) VALUES
(1, 'ALAN MANUEL CASTILLO MEDINA'),
(2, 'ALEJANDRA ESTEFANIA SOTO DIAZ'),
(4, 'ALEXIS ISRAEL SOLIS ZURITA'),
(5, 'AMINTA LILIBETH CASTANEDA ARCINIEGA '),
(6, 'ANA LORENA CAMARGO ROJAS'),
(7, 'ARA TZITZI MIRANDA GONZALEZ  '),
(8, 'BIBIANA PAOLA GALEANO RODRIGUEZ '),
(9, 'CARLOS ALBERTO SOTO BARRERA'),
(10, 'CESAR ALVIDREZ CHAVEZ  '),
(11, 'CITLALY ZAVALA ARANDA'),
(12, 'EDEN CRISTOBAL  GARCIA MAXIMILIANO'),
(13, 'EMMANUEL VILLASENOR JACUINDE  '),
(14, 'ERICK MARTINEZ MORALES '),
(15, 'ERIK MAURICIO BARRIGA BALDERAS '),
(16, 'EUGENIO CORTES TALAVERA  '),
(17, 'GABRIELA VENEGAS VEGA'),
(18, 'GUADALUPE BERNAL FERNANDEZ '),
(19, 'GUILLERMO  SOSA RAMOS  '),
(20, 'HANZI MONSERRAT MARTINEZ GONZALEZ  '),
(21, 'HERNANDO CARLOS VERGARA FERNANDEZ  '),
(22, 'ISRAEL LUNA ORTEGA '),
(23, 'JHON JAIRO MORALES VELASQUEZ  '),
(24, 'JOSE URQUIZA FLORES '),
(25, 'JULIO CESAR TREJO HERNANDEZ    '),
(26, 'KARINA SALINAS HERRERA  '),
(27, 'LEONEL JUAN GARZA AVILA '),
(28, 'LUIS CAAMANO ROSAS '),
(29, 'NAYELI NATHALI SILVA ORTIZ '),
(30, 'PEDRO ANDRES ESTRADA HUERTA'),
(31, 'SANDRA LILIANA ORJUELA TORRADO'),
(32, 'SILVANO  LOPEZ NAVA'),
(33, 'VALENTIN  VILLASENOR RAMIREZ'),
(34, 'VICTOR HUGO ARAUJO RANGEL'),
(35, 'VICTOR HUGO MEDINA SANCHEZ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `civil`
--

CREATE TABLE `civil` (
  `id_civil` int(11) NOT NULL,
  `civil` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `civil`
--

INSERT INTO `civil` (`id_civil`, `civil`) VALUES
(1, 'Indistinto'),
(2, 'Casado'),
(3, 'Soltero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `id_departamento` int(11) NOT NULL,
  `departamento` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`id_departamento`, `departamento`) VALUES
(1, 'Desarrollo'),
(2, 'Empaque'),
(3, 'Estadistica'),
(4, 'Finanzas'),
(5, 'Gestion Humana'),
(6, 'Logistica'),
(7, 'Mantenimiento'),
(8, 'Operaciones'),
(9, 'Refineria'),
(10, 'Servicios Generales'),
(11, 'SST'),
(12, 'T.I'),
(13, 'Team Solution'),
(14, 'Bakery');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudios`
--

CREATE TABLE `estudios` (
  `id_estudios` int(11) NOT NULL,
  `estudios` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estudios`
--

INSERT INTO `estudios` (`id_estudios`, `estudios`) VALUES
(1, 'Primaria'),
(2, 'Secundaria'),
(3, 'Bachillerato'),
(4, 'Tecnica'),
(5, 'Licenciatura'),
(6, 'Maestria'),
(7, 'Doctorado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `final`
--

CREATE TABLE `final` (
  `numero_requisicion` int(11) NOT NULL,
  `Nombre` text,
  `tipo_solicitud` text,
  `fecha_solicitud` date DEFAULT NULL,
  `departamento` text,
  `fecha_maxima_cubrimiento` date DEFAULT NULL,
  `vacante` text,
  `remplazo` text,
  `tipo_vacante` text,
  `autorizacion` text,
  `ubicacion` text,
  `aprobacion` text,
  `estudios` text,
  `edad` int(11) DEFAULT NULL,
  `edad2` int(11) NOT NULL,
  `sexo` text,
  `civil` text,
  `experiencia` text,
  `conocimientos` text,
  `habilidades` text,
  `competencias` text,
  `adicionales` text,
  `fecha_hora_actual` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexo`
--

CREATE TABLE `sexo` (
  `id_sexo` int(11) NOT NULL,
  `sexo` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sexo`
--

INSERT INTO `sexo` (`id_sexo`, `sexo`) VALUES
(1, 'Indistinto'),
(2, 'Femenino'),
(3, 'Masculino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitantes`
--

CREATE TABLE `solicitantes` (
  `id` int(11) NOT NULL,
  `Nombre` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `solicitantes`
--

INSERT INTO `solicitantes` (`id`, `Nombre`) VALUES
(1, 'ALAN MANUEL CASTILLO MEDINA'),
(2, 'ALEJANDRA ESTEFANIA SOTO DIAZ'),
(4, 'ALEXIS ISRAEL SOLIS ZURITA'),
(5, 'AMINTA LILIBETH CASTANEDA ARCINIEGA '),
(6, 'ANA LORENA CAMARGO ROJAS'),
(7, 'ARA TZITZI MIRANDA GONZALEZ  '),
(8, 'BIBIANA PAOLA GALEANO RODRIGUEZ '),
(9, 'CARLOS ALBERTO SOTO BARRERA'),
(10, 'CESAR ALVIDREZ CHAVEZ  '),
(11, 'CITLALY ZAVALA ARANDA'),
(12, 'EDEN CRISTOBAL  GARCIA MAXIMILIANO'),
(13, 'EMMANUEL VILLASENOR JACUINDE  '),
(14, 'ERICK MARTINEZ MORALES '),
(15, 'ERIK MAURICIO BARRIGA BALDERAS '),
(16, 'EUGENIO CORTES TALAVERA  '),
(17, 'GABRIELA VENEGAS VEGA'),
(18, 'GUADALUPE BERNAL FERNANDEZ '),
(19, 'GUILLERMO  SOSA RAMOS  '),
(20, 'HANZI MONSERRAT MARTINEZ GONZALEZ  '),
(21, 'HERNANDO CARLOS VERGARA FERNANDEZ  '),
(22, 'ISRAEL LUNA ORTEGA '),
(23, 'JHON JAIRO MORALES VELASQUEZ  '),
(24, 'JOSE URQUIZA FLORES '),
(25, 'JULIO CESAR TREJO HERNANDEZ    '),
(26, 'KARINA SALINAS HERRERA  '),
(27, 'LEONEL JUAN GARZA AVILA '),
(28, 'LUIS CAAMANO ROSAS '),
(29, 'NAYELI NATHALI SILVA ORTIZ '),
(30, 'PEDRO ANDRES ESTRADA HUERTA'),
(31, 'SANDRA LILIANA ORJUELA TORRADO'),
(32, 'SILVANO  LOPEZ NAVA'),
(33, 'VALENTIN  VILLASENOR RAMIREZ'),
(34, 'VICTOR HUGO ARAUJO RANGEL'),
(35, 'VICTOR HUGO MEDINA SANCHEZ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

CREATE TABLE `solicitud` (
  `id` int(11) NOT NULL,
  `tipo_solicitud` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `solicitud`
--

INSERT INTO `solicitud` (`id`, `tipo_solicitud`) VALUES
(1, 'Nueva Creacion'),
(2, 'Por reemplazo'),
(3, 'Reemplazo por incapacidad'),
(4, 'Reemplazo por Vacaciones'),
(5, 'Reemplazo por Baja'),
(6, 'Reemplazo por Promocion'),
(7, 'Reemplazo por Translado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_vacante`
--

CREATE TABLE `tipo_vacante` (
  `id_tipo_vacante` int(11) NOT NULL,
  `tipo_vacante` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_vacante`
--

INSERT INTO `tipo_vacante` (`id_tipo_vacante`, `tipo_vacante`) VALUES
(1, 'Practicante'),
(2, 'Becario'),
(3, 'Agencia'),
(4, 'Temporal'),
(5, 'Vinculado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicacion`
--

CREATE TABLE `ubicacion` (
  `id_ubicacion` int(11) NOT NULL,
  `ubicacion` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ubicacion`
--

INSERT INTO `ubicacion` (`id_ubicacion`, `ubicacion`) VALUES
(1, 'Morelia'),
(2, 'CDMX'),
(3, 'Estado de Mexico'),
(4, 'Guadalajara'),
(5, 'Puebla'),
(6, 'Monterrey'),
(7, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacante`
--

CREATE TABLE `vacante` (
  `id_vacante` int(11) NOT NULL,
  `vacante` text,
  `tiempo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vacante`
--

INSERT INTO `vacante` (`id_vacante`, `vacante`, `tiempo`) VALUES
(1, 'ANALISTA DE LABORATORIO', 20),
(2, 'ANALISTA ADMINISTRATIVO DE VENTAS', 20),
(4, 'ANALISTA CONTABLE\r\n', 20),
(5, 'ANALISTA DE AUDITORIA\r\n', 20),
(6, 'ANALISTA DE CALIDAD\r\n', 20),
(7, 'ANALISTA DE CARTERA\r\n', 20),
(8, 'ANALISTA DE COSTOS\r\n', 20),
(9, 'ANALISTA DE EMBARQUES\r\n', 20),
(10, 'ANALISTA DE NOMINA\r\n', 20),
(11, 'ANALISTA DE TALENTO HUMANO\r\n', 20),
(12, 'ANALISTA DE TESORERIA\r\n', 20),
(13, 'ANALISTA DE TI\r\n', 20),
(14, 'ANALISTA FINANCIERO\r\n', 20),
(15, 'ASISTENTE DE DIRECCION GENERAL\r\n', 20),
(16, 'AUXILIAR ADMINISTRATIVO\r\n', 20),
(17, 'AUXILIAR DE ALMACEN\r\n', 20),
(18, 'AUXILIAR DE EMBARQUES\r\n', 20),
(19, 'AUXILIAR DE LABORATORIO\r\n', 20),
(20, 'AUXILIAR DE PLANEACION FINANCIERA\r\n', 20),
(21, 'BASCULISTA\r\n', 20),
(22, 'COMPRADOR\r\n', 20),
(23, 'CONTADOR GENERAL\r\n', 20),
(24, 'COOR DE MANTENIMIENTO Y PROYECTOS\r\n', 20),
(25, 'COORDINADOR ADMINISTRACION VENTAS\r\n', 20),
(26, 'COORDINADOR AREAS TRANSVERSALES DE ID\r\n', 20),
(27, 'COORDINADOR DE AUDITORIA\r\n', 20),
(28, 'COORDINADOR DE CARTERA JR\r\n', 20),
(29, 'COORDINADOR DE COMPRAS\r\n', 20),
(30, 'COORDINADOR DE CONTROL DE CALIDAD\r\n', 20),
(31, 'COORDINADOR DE EMBARQUES Y ALMACEN\r\n', 20),
(32, 'COORDINADOR DE EMPAQUE\r\n', 20),
(33, 'COORDINADOR DE PLANEACION Y COSTOS\r\n', 20),
(34, 'COORDINADOR DE SEGURIDAD Y SALUD EN EL T\r\n', 20),
(35, 'COORDINADOR DE TI\r\n', 20),
(36, 'COORDINADOR ESTADISTICO\r\n', 20),
(37, 'DIRECTOR BAKERY AND FOOD SERVICE\r\n', 35),
(38, 'DIRECTOR DE DESARROLLO Y CALIDAD\r\n', 35),
(39, 'DIRECTOR DE GESTION HUMANA\r\n', 35),
(40, 'DIRECTOR DE TEAM SOLUTIONS TIER 1\r\n', 35),
(41, 'DIRECTOR DE TEAM SOLUTIONS TIER 2\r\n', 35),
(42, 'EJECUTIVO DE VENTAS\r\n', 20),
(43, 'ELECTROMECANICO\r\n', 20),
(44, 'ESTADISTICO\r\n', 20),
(45, 'ESTIBADOR\r\n', 15),
(46, 'FORMULADOR\r\n', 20),
(47, 'GERENTE DE ADMINISTRACION VENTAS\r\n', 35),
(48, 'GERENTE DE CUENTA\r\n', 35),
(49, 'GERENTE DE CUENTA SENIOR\r\n', 35),
(50, 'GERENTE DE FINANZAS\r\n', 35),
(51, 'GERENTE DE LOGISTICA\r\n', 35),
(52, 'GERENTE DE OPERACIONES\r\n', 35),
(53, 'GERENTE DE SISTEMAS DE GESTION Y CALIDAD\r\n', 35),
(54, 'GERENTE DE ZONA\r\n', 35),
(55, 'GERENTE NACIONAL DE VENTAS\r\n', 35),
(56, 'GERENTE TECNICO\r\n', 35),
(57, 'GERENTE VENTA REGIONAL\r\n', 35),
(58, 'INGENIERO DE CALIDAD\r\n', 20),
(59, 'INGENIERO DE CALIDAD MEII\r\n', 20),
(60, 'INGENIERO DE CALIDAD PT\r\n', 20),
(61, 'INGENIERO DE DESARROLLO\r\n', 20),
(62, 'INGENIERO DE DESARROLLO FLAT\r\n', 20),
(63, 'INGENIERO DE DESARROLLO JR\r\n', 20),
(64, 'INGENIERO DE ENTRENAMIENTO\r\n', 20),
(65, 'INGENIERO DE PROYECTOS\r\n', 20),
(66, 'INGENIERO DE SISTEMAS\r\n', 20),
(67, 'INGENIERO EN SERVICIOS\r\n', 20),
(68, 'INGENIERO SST\r\n', 20),
(69, 'JEFE DE REFINERIA\r\n', 20),
(70, 'JEFE DE SEGURIDAD TEAM MEXICO\r\n', 20),
(71, 'MAESTRO DE EMPAQUE\r\n', 20),
(72, 'MECANICO\r\n', 20),
(73, 'MENSAJERO\r\n', 20),
(74, 'METROLOGO\r\n', 20),
(75, 'MONTACARGUISTA\r\n', 15),
(76, 'OPERADOR DE CUARTO DE MAQUINA\r\n', 15),
(77, 'OPERADOR DE LINEA C\r\n', 15),
(78, 'OPERADOR DE LINEA C1\r\n', 15),
(79, 'OPERADOR DE PROCESO\r\n', 15),
(80, 'PLANEADOR JUNIOR\r\n', 20),
(81, 'PLANEADOR OFERTA\r\n', 20),
(82, 'RESPONSABLE DE SISTEMAS DE GESTION\r\n', 20),
(83, 'RESPONSABLE DE TESORERIA\r\n', 20),
(84, 'SERVICIOS GENERALES\r\n', 15),
(85, 'SOCIO DE GH \r\n', 20),
(86, 'SOCIO DE GH JR\r\n', 20),
(87, 'SUPERVISOR DE ALMACEN DE REFACCIONES\r\n', 20),
(88, 'SUPERVISOR DE ALMACEN MEII', 20),
(89, 'SUPERVISOR DE ALMACEN PROD TERMINADO\r\n', 20),
(90, 'SUPERVISOR DE EMPAQUE\r\n', 20),
(91, 'SUPERVISOR DE MANTENIMIENTO\r\n', 20),
(92, 'SUPERVISOR DE REFINERIA\r\n', 20),
(93, 'SUPERVISOR DE SOLIDOS\r\n', 20),
(94, 'TECNICO DE PANIFICACION\r\n', 20),
(95, 'TECNICO DE REFINACION FISICA\r\n', 20),
(96, 'OTRO\r\n', 20);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aprobacion`
--
ALTER TABLE `aprobacion`
  ADD PRIMARY KEY (`id_probacion`);

--
-- Indices de la tabla `autorizacion`
--
ALTER TABLE `autorizacion`
  ADD PRIMARY KEY (`id_autorizacion`);

--
-- Indices de la tabla `civil`
--
ALTER TABLE `civil`
  ADD PRIMARY KEY (`id_civil`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id_departamento`);

--
-- Indices de la tabla `estudios`
--
ALTER TABLE `estudios`
  ADD PRIMARY KEY (`id_estudios`);

--
-- Indices de la tabla `final`
--
ALTER TABLE `final`
  ADD PRIMARY KEY (`numero_requisicion`);

--
-- Indices de la tabla `sexo`
--
ALTER TABLE `sexo`
  ADD PRIMARY KEY (`id_sexo`);

--
-- Indices de la tabla `solicitantes`
--
ALTER TABLE `solicitantes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_vacante`
--
ALTER TABLE `tipo_vacante`
  ADD PRIMARY KEY (`id_tipo_vacante`);

--
-- Indices de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  ADD PRIMARY KEY (`id_ubicacion`);

--
-- Indices de la tabla `vacante`
--
ALTER TABLE `vacante`
  ADD PRIMARY KEY (`id_vacante`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aprobacion`
--
ALTER TABLE `aprobacion`
  MODIFY `id_probacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `autorizacion`
--
ALTER TABLE `autorizacion`
  MODIFY `id_autorizacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `civil`
--
ALTER TABLE `civil`
  MODIFY `id_civil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id_departamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `estudios`
--
ALTER TABLE `estudios`
  MODIFY `id_estudios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `final`
--
ALTER TABLE `final`
  MODIFY `numero_requisicion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sexo`
--
ALTER TABLE `sexo`
  MODIFY `id_sexo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `solicitantes`
--
ALTER TABLE `solicitantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tipo_vacante`
--
ALTER TABLE `tipo_vacante`
  MODIFY `id_tipo_vacante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  MODIFY `id_ubicacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `vacante`
--
ALTER TABLE `vacante`
  MODIFY `id_vacante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
