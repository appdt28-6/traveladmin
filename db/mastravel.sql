-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 13-04-2016 a las 21:20:25
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `mastravel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id_admin` int(11) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `user` varchar(8) NOT NULL,
  `pass` varchar(8) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id_admin`, `nombre`, `user`, `pass`) VALUES
(1, 'Sergio', 'sergio', 'sergio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apartado`
--

CREATE TABLE IF NOT EXISTS `apartado` (
`id_apartado` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_contrato` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `pagode` double NOT NULL,
  `pagado` double NOT NULL,
  `recargo` double NOT NULL,
  `mes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `barra`
--

CREATE TABLE IF NOT EXISTS `barra` (
`id_barra` int(11) NOT NULL,
  `id_evento` int(11) NOT NULL,
  `desc` varchar(50) NOT NULL,
  `costo` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `barra`
--

INSERT INTO `barra` (`id_barra`, `id_evento`, `desc`, `costo`) VALUES
(1, 1, '3 Barras libres', 500),
(2, 2, '4 barras libres', 1550),
(3, 2, '3 barras libres', 1170),
(4, 2, '2 barras libres', 800),
(5, 2, '1 barra libre', 450);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Clientes`
--

CREATE TABLE IF NOT EXISTS `Clientes` (
`id_cliente` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `ap` varchar(20) NOT NULL,
  `am` varchar(20) NOT NULL,
  `fn` varchar(10) NOT NULL,
  `edad` int(11) NOT NULL,
  `gen` varchar(1) NOT NULL,
  `calle` varchar(50) NOT NULL,
  `numero` int(11) NOT NULL,
  `col` varchar(50) NOT NULL,
  `mun` varchar(50) NOT NULL,
  `cp` varchar(10) NOT NULL,
  `estado` varchar(15) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `cel` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `id_coord` int(11) NOT NULL,
  `id_evento` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Clientes`
--

INSERT INTO `Clientes` (`id_cliente`, `nombre`, `ap`, `am`, `fn`, `edad`, `gen`, `calle`, `numero`, `col`, `mun`, `cp`, `estado`, `tel`, `cel`, `email`, `id_coord`, `id_evento`) VALUES
(1, 'Miguel', 'Mendez', 'Sanchez', '1988-12-16', 27, 'h', 'Casar', 105, 'Real Toledo', 'Pachuca', '42119', 'Hidalgo', '2127629', '7711862211', 'is_mike@outlook.com', 1, 1),
(12, 'karla', 'torres', 'fonseca', '', 19, 'm', 'salvador uribe', 111, 'ENSUEÃ‘O', 'QUERETARO', '76160', 'QuerÃ©taro', '', '4422838223', 'karlaatorres229@gmail.com', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `congreso`
--

CREATE TABLE IF NOT EXISTS `congreso` (
`id_congreso` int(11) NOT NULL,
  `id_evento` int(11) NOT NULL,
  `desc` varchar(150) NOT NULL,
  `costo` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `congreso`
--

INSERT INTO `congreso` (`id_congreso`, `id_evento`, `desc`, `costo`) VALUES
(1, 1, '', 0),
(2, 2, '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contrato`
--

CREATE TABLE IF NOT EXISTS `contrato` (
`id_contrato` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_evento` int(11) NOT NULL,
  `id_paquete` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contrato`
--

INSERT INTO `contrato` (`id_contrato`, `id_cliente`, `id_evento`, `id_paquete`, `fecha`) VALUES
(1, 1, 2, 1, '2016-03-31 20:42:34'),
(2, 1, 2, 0, '2016-04-01 00:11:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coordinador`
--

CREATE TABLE IF NOT EXISTS `coordinador` (
`id_coord` int(11) NOT NULL,
  `nombre` varchar(35) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `user` varchar(10) NOT NULL,
  `pass` varchar(8) NOT NULL,
  `area` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `coordinador`
--

INSERT INTO `coordinador` (`id_coord`, `nombre`, `telefono`, `email`, `user`, `pass`, `area`) VALUES
(1, 'Nombre coordinador', '7711862211', 'is_mike@outlook.com', 'mike', 'mike', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_emergencia`
--

CREATE TABLE IF NOT EXISTS `datos_emergencia` (
`id_emer` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `contactname` varchar(40) NOT NULL,
  `contactap` varchar(30) NOT NULL,
  `contactam` varchar(30) NOT NULL,
  `contacttel` varchar(15) NOT NULL,
  `contactcel` varchar(15) NOT NULL,
  `contactmail` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos_emergencia`
--

INSERT INTO `datos_emergencia` (`id_emer`, `id_cliente`, `contactname`, `contactap`, `contactam`, `contacttel`, `contactcel`, `contactmail`) VALUES
(1, 1, 'July Nayeli', 'Diaz', 'Montiel', '1234567890', '1234567890', 'najulliet@hotmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_medicos`
--

CREATE TABLE IF NOT EXISTS `datos_medicos` (
`id_dato` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `t_sangre` varchar(10) NOT NULL,
  `alergico` varchar(150) NOT NULL,
  `enfermedad` varchar(150) NOT NULL,
  `hospital` int(11) NOT NULL,
  `posibleemb` int(11) NOT NULL,
  `emb` int(11) NOT NULL,
  `medicamentos` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos_medicos`
--

INSERT INTO `datos_medicos` (`id_dato`, `id_cliente`, `t_sangre`, `alergico`, `enfermedad`, `hospital`, `posibleemb`, `emb`, `medicamentos`) VALUES
(1, 1, 'OH+', 'No', 'Ninguna', 0, 3, 3, 'Ninguno'),
(2, 1, 'OH+', 'No', 'Ninguna', 0, 3, 3, 'Ninguna');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE IF NOT EXISTS `evento` (
`id_evento` int(11) NOT NULL,
  `nombre` varchar(35) NOT NULL,
  `fecha` varchar(30) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `estado` varchar(15) NOT NULL,
  `desde` double NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `evento`
--

INSERT INTO `evento` (`id_evento`, `nombre`, `fecha`, `direccion`, `estado`, `desde`, `photo`) VALUES
(1, 'Mazatlán', '1 al 5 de Junio', 'dirección de campus', 'Queretaro', 3485, ''),
(2, '¡Verano MásTravel Puerto Vallarta!', '15 al 19 de Junio', 'Hotel Plaza Pelícanos Club Beach Resort', 'Jalisco', 4795, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE IF NOT EXISTS `eventos` (
`id_event` int(11) NOT NULL,
  `id_coord` int(11) NOT NULL,
  `reservaciones` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `id_evento` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id_event`, `id_coord`, `reservaciones`, `status`, `id_evento`) VALUES
(1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `extrapaq`
--

CREATE TABLE IF NOT EXISTS `extrapaq` (
`id_extra` int(11) NOT NULL,
  `id_evento` int(11) NOT NULL,
  `desc` varchar(50) NOT NULL,
  `costo` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `extrapaq`
--

INSERT INTO `extrapaq` (`id_extra`, `id_evento`, `desc`, `costo`) VALUES
(1, 2, 'Islas Maristas', 1200),
(2, 2, 'Recorrido en Limosina', 600),
(3, 2, 'Salto en Paracaídas', 3800),
(4, 2, 'No gracias', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitacion`
--

CREATE TABLE IF NOT EXISTS `habitacion` (
`id_hab` int(11) NOT NULL,
  `id_evento` int(11) NOT NULL,
  `desc` varchar(50) NOT NULL,
  `costo` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `habitacion`
--

INSERT INTO `habitacion` (`id_hab`, `id_evento`, `desc`, `costo`) VALUES
(1, 1, 'Habitación sencilla', 450),
(2, 2, 'Cuadruple', 0),
(3, 2, 'Triple', 250),
(4, 2, 'Doble', 500),
(7, 2, 'Sencilla', 2000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opcionespaquete`
--

CREATE TABLE IF NOT EXISTS `opcionespaquete` (
`id_opcion` int(11) NOT NULL,
  `id_evento` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `costo` double NOT NULL,
  `numero` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `opcionespaquete`
--

INSERT INTO `opcionespaquete` (`id_opcion`, `id_evento`, `descripcion`, `costo`, `numero`) VALUES
(1, 1, 'Con Desayuno', 3500, 40),
(2, 2, 'Transporte únicamente en autobus', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE IF NOT EXISTS `pagos` (
`id_pago` int(11) NOT NULL,
  `t_pago` int(11) NOT NULL,
  `id_evento` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_paquete` int(11) NOT NULL,
  `suc` varchar(15) NOT NULL,
  `folio` varchar(15) NOT NULL,
  `pago` double NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `archivo` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`id_pago`, `t_pago`, `id_evento`, `id_cliente`, `id_paquete`, `suc`, `folio`, `pago`, `fecha`, `archivo`, `status`) VALUES
(1, 1, 1, 1, 1, '', '', 4450, '2016-04-12 21:53:58', 'Banamex.pdf', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paquete`
--

CREATE TABLE IF NOT EXISTS `paquete` (
`id_paquete` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_evento` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_opcion` int(11) NOT NULL,
  `id_congreso` int(11) NOT NULL,
  `id_barra` int(11) NOT NULL,
  `id_hab` int(11) NOT NULL,
  `id_coord` int(11) NOT NULL,
  `id_extra` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `paquete`
--

INSERT INTO `paquete` (`id_paquete`, `fecha`, `id_evento`, `id_cliente`, `id_opcion`, `id_congreso`, `id_barra`, `id_hab`, `id_coord`, `id_extra`) VALUES
(1, '2016-03-31 18:59:24', 2, 1, 2, 0, 5, 2, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prereg`
--

CREATE TABLE IF NOT EXISTS `prereg` (
`id_reg` int(11) NOT NULL,
  `howto` varchar(10) NOT NULL,
  `party` int(1) NOT NULL,
  `habitacion` int(1) NOT NULL,
  `ts` int(2) NOT NULL,
  `nadar` int(11) NOT NULL,
  `music` varchar(15) NOT NULL,
  `op` text NOT NULL,
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `apartado`
--
ALTER TABLE `apartado`
 ADD PRIMARY KEY (`id_apartado`);

--
-- Indices de la tabla `barra`
--
ALTER TABLE `barra`
 ADD PRIMARY KEY (`id_barra`);

--
-- Indices de la tabla `Clientes`
--
ALTER TABLE `Clientes`
 ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `congreso`
--
ALTER TABLE `congreso`
 ADD PRIMARY KEY (`id_congreso`);

--
-- Indices de la tabla `contrato`
--
ALTER TABLE `contrato`
 ADD PRIMARY KEY (`id_contrato`);

--
-- Indices de la tabla `coordinador`
--
ALTER TABLE `coordinador`
 ADD PRIMARY KEY (`id_coord`);

--
-- Indices de la tabla `datos_emergencia`
--
ALTER TABLE `datos_emergencia`
 ADD PRIMARY KEY (`id_emer`);

--
-- Indices de la tabla `datos_medicos`
--
ALTER TABLE `datos_medicos`
 ADD PRIMARY KEY (`id_dato`);

--
-- Indices de la tabla `evento`
--
ALTER TABLE `evento`
 ADD PRIMARY KEY (`id_evento`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
 ADD PRIMARY KEY (`id_event`);

--
-- Indices de la tabla `extrapaq`
--
ALTER TABLE `extrapaq`
 ADD PRIMARY KEY (`id_extra`);

--
-- Indices de la tabla `habitacion`
--
ALTER TABLE `habitacion`
 ADD PRIMARY KEY (`id_hab`);

--
-- Indices de la tabla `opcionespaquete`
--
ALTER TABLE `opcionespaquete`
 ADD PRIMARY KEY (`id_opcion`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
 ADD PRIMARY KEY (`id_pago`);

--
-- Indices de la tabla `paquete`
--
ALTER TABLE `paquete`
 ADD PRIMARY KEY (`id_paquete`);

--
-- Indices de la tabla `prereg`
--
ALTER TABLE `prereg`
 ADD PRIMARY KEY (`id_reg`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `apartado`
--
ALTER TABLE `apartado`
MODIFY `id_apartado` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `barra`
--
ALTER TABLE `barra`
MODIFY `id_barra` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `Clientes`
--
ALTER TABLE `Clientes`
MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `congreso`
--
ALTER TABLE `congreso`
MODIFY `id_congreso` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `contrato`
--
ALTER TABLE `contrato`
MODIFY `id_contrato` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `coordinador`
--
ALTER TABLE `coordinador`
MODIFY `id_coord` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `datos_emergencia`
--
ALTER TABLE `datos_emergencia`
MODIFY `id_emer` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `datos_medicos`
--
ALTER TABLE `datos_medicos`
MODIFY `id_dato` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `evento`
--
ALTER TABLE `evento`
MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `extrapaq`
--
ALTER TABLE `extrapaq`
MODIFY `id_extra` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `habitacion`
--
ALTER TABLE `habitacion`
MODIFY `id_hab` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `opcionespaquete`
--
ALTER TABLE `opcionespaquete`
MODIFY `id_opcion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
MODIFY `id_pago` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `paquete`
--
ALTER TABLE `paquete`
MODIFY `id_paquete` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `prereg`
--
ALTER TABLE `prereg`
MODIFY `id_reg` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
