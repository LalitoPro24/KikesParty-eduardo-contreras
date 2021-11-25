-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 25-11-2021 a las 01:21:44
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agencia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `idCliente` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apPaterno` varchar(50) DEFAULT NULL,
  `apMaterno` varchar(50) DEFAULT NULL,
  `calle` varchar(30) DEFAULT NULL,
  `colonia` varchar(25) DEFAULT NULL,
  `exterior` varchar(10) DEFAULT NULL,
  `interior` varchar(10) DEFAULT NULL,
  `municipio` varchar(30) DEFAULT NULL,
  `estado` varchar(30) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`idCliente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idCliente`, `nombre`, `apPaterno`, `apMaterno`, `calle`, `colonia`, `exterior`, `interior`, `municipio`, `estado`, `telefono`, `email`) VALUES
(10010, 'Marcos', 'Almeida', 'Rosas', 'Lago demerara', 'Rinconada de la laguna', '24', '21', 'Zumpango', 'Mexico', '5544142564', 'mARC@gmail.com'),
(100113, 'Angel Israel', 'Rodriguez', 'Hernandez', '5 de mayo', 'Los olmos', '45', '44', 'Tultepec', 'Mexico', '5545789512', 'isra@gmail.com'),
(100114, 'Eduardo', 'Lopezz', 'Nava', 'Izc', 'Cofradia2', '21', '43', 'Cuatitlan ', 'Mexico', '5564389800', 'nava@gmail.com'),
(100115, 'Araceli ', 'Martnez', 'Barrera', 'San Martin', 'La trinidad', '12', '34', 'Zumpango', 'Mexico', '5587146578', 'barreras@gmail.com'),
(100245, 'Luis', 'Perez', 'Gonzales', 'Roma', 'Atzcapotzalco', '23', '67', 'Atzcapotzalco', 'CDMX', '5541236987', 'perecito@gmail,com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuadrilla`
--

DROP TABLE IF EXISTS `cuadrilla`;
CREATE TABLE IF NOT EXISTS `cuadrilla` (
  `idCuadrilla` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `cantidadPersona` int(11) DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `idJornada` int(11) DEFAULT NULL,
  `idEmpleado` int(11) DEFAULT NULL,
  PRIMARY KEY (`idCuadrilla`),
  KEY `idJornada` (`idJornada`),
  KEY `idEmpleado` (`idEmpleado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cuadrilla`
--

INSERT INTO `cuadrilla` (`idCuadrilla`, `nombre`, `cantidadPersona`, `precio`, `idJornada`, `idEmpleado`) VALUES
(1, 'Planta', 45, 550, NULL, NULL),
(2, 'Planta', 10, 5000, 3, 2025519),
(3, 'Eduardo', 5, 2500, 3, 202517),
(4, 'Escuadron', 10, 5000, 2, 2025519);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

DROP TABLE IF EXISTS `empleado`;
CREATE TABLE IF NOT EXISTS `empleado` (
  `idEmpleado` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apPaterno` varchar(50) DEFAULT NULL,
  `apMaterno` varchar(50) DEFAULT NULL,
  `curp` varchar(18) DEFAULT NULL,
  `rfc` varchar(18) DEFAULT NULL,
  `calle` varchar(30) DEFAULT NULL,
  `colonia` varchar(25) DEFAULT NULL,
  `exterior` varchar(10) DEFAULT NULL,
  `interior` varchar(10) DEFAULT NULL,
  `municipio` varchar(30) DEFAULT NULL,
  `estado` varchar(30) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`idEmpleado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`idEmpleado`, `nombre`, `apPaterno`, `apMaterno`, `curp`, `rfc`, `calle`, `colonia`, `exterior`, `interior`, `municipio`, `estado`, `telefono`, `email`) VALUES
(2, 'Angeles', '', 'Martinez', 'COMC991225MDFNRY06', 'come24hdfrnda0', 'Santa irene', 'Zumpangos', '33', '12', 'ZUMPANGO', 'Mexico', '5573000716', 'edy153988@gmail.com'),
(202517, 'Angeles', 'Contreras', 'Salazar', 'COMC991225MDFNRY06', 'come24hdfrnda0000', 'romeros', 'nido', '12', '76', 'ZUMPANGO', 'MEXICO', '4541545', 'joseeduardocontrerasmartinez8@gmail.com'),
(2025516, ' Jose Eduardo', 'Contreras', 'Martinez', 'COMC991225MDFNRY06', 'come24hdfrnda0', 'Santa irene', 'La trinidad', '23', '5', 'ZUMPANGO', 'MEXICO', '5544142564', 'edy@gmail.com'),
(2025518, 'Eduardo', 'Lopez', 'Nava', 'come34578454', 'come24hdfrnda0000', 'Linda vista', 'Rinconada de la laguna', '22', '11', 'zumpango', 'Michoacan', '5512814847', 'marti@gmail.com'),
(2025519, 'Maximo', 'Abelardo', 'Torres', 'ABMT4362980976', 'ABMT4327FRDH', 'Dember', 'Paseos del lago II', '23', '24', 'ZUmpango', 'Mexico', '5545986532', 'Abelart@gmai.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

DROP TABLE IF EXISTS `evento`;
CREATE TABLE IF NOT EXISTS `evento` (
  `idEvento` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `idCuadrilla` int(11) DEFAULT NULL,
  `idCliente` int(11) DEFAULT NULL,
  `idPaquete` int(11) DEFAULT NULL,
  `idSalon` int(11) DEFAULT NULL,
  `total` double DEFAULT NULL,
  PRIMARY KEY (`idEvento`),
  KEY `idCuadrilla` (`idCuadrilla`),
  KEY `idCliente` (`idCliente`),
  KEY `idPaquete` (`idPaquete`),
  KEY `idSalon` (`idSalon`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `evento`
--

INSERT INTO `evento` (`idEvento`, `fecha`, `idCuadrilla`, `idCliente`, `idPaquete`, `idSalon`, `total`) VALUES
(1, '2011-12-22', 2, 100113, 103, 107, 45600),
(2, '2022-02-22', 2, 100245, 105, 109, 50000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jornada`
--

DROP TABLE IF EXISTS `jornada`;
CREATE TABLE IF NOT EXISTS `jornada` (
  `idJornada` int(11) NOT NULL,
  `horaEntrada` time DEFAULT NULL,
  `horaSalida` time DEFAULT NULL,
  `turno` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`idJornada`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `jornada`
--

INSERT INTO `jornada` (`idJornada`, `horaEntrada`, `horaSalida`, `turno`) VALUES
(1, '08:00:00', '10:00:00', 'maÃ±ana'),
(2, '10:00:00', '08:05:00', 'noche'),
(3, '04:00:00', '10:00:00', 'Nocturno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paquete`
--

DROP TABLE IF EXISTS `paquete`;
CREATE TABLE IF NOT EXISTS `paquete` (
  `idPaquete` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `cantidadSillas` int(11) DEFAULT NULL,
  `cantidadMesas` int(11) DEFAULT NULL,
  `platillosdTiempos` varchar(100) DEFAULT NULL,
  `tipoManteleria` varchar(100) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  PRIMARY KEY (`idPaquete`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `paquete`
--

INSERT INTO `paquete` (`idPaquete`, `nombre`, `cantidadSillas`, `cantidadMesas`, `platillosdTiempos`, `tipoManteleria`, `precio`) VALUES
(101, 'Paquete basico', 50, 5, 'carnitas', 'normal', 350),
(102, 'Paquete Pro', 200, 20, 'carnitas arroz y agua ', 'De gala', 3500),
(103, 'Luck', 300, 30, 'arroz, sopes, carnitas, agua y postre', 'De gala', 5600),
(104, 'Paquete premier', 400, 40, 'crema de zanahoria, pechugas rellenas, agua o refresco y postre', 'Gala de seda', 10000),
(105, 'luxurius', 500, 50, 'crema de zanahoria, pechugas rellenas, agua o refresco y postre', 'De gala', 20000),
(106, 'Paqueterias', 30, 3, 'arroz con milanesa', 'nor', 140);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salon`
--

DROP TABLE IF EXISTS `salon`;
CREATE TABLE IF NOT EXISTS `salon` (
  `idSalon` int(11) NOT NULL,
  `nombre` varchar(17) DEFAULT NULL,
  `calle` varchar(50) DEFAULT NULL,
  `exterior` varchar(10) DEFAULT NULL,
  `interior` varchar(10) DEFAULT NULL,
  `colonia` varchar(50) DEFAULT NULL,
  `municipio` varchar(50) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `capacidad` int(11) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `paginaWeb` varchar(100) DEFAULT NULL,
  `contactoFacebook` varchar(100) DEFAULT NULL,
  `cajonEstacionamiento` int(11) DEFAULT NULL,
  `precio` double DEFAULT NULL,
  PRIMARY KEY (`idSalon`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `salon`
--

INSERT INTO `salon` (`idSalon`, `nombre`, `calle`, `exterior`, `interior`, `colonia`, `municipio`, `estado`, `capacidad`, `telefono`, `paginaWeb`, `contactoFacebook`, `cajonEstacionamiento`, `precio`) VALUES
(1, 'q', '1', '1', '1', '1', '1', '1', 1, '1', '1', '1', 100, 1111),
(107, 'Angeles', 'San roberto', '12', '12', 'Zumpango', 'zumpango', 'mexico', 200, '44547874', 'pore.ww', 'halcones far', 50, 500),
(108, 'Salon Arrayanes', 'Arrayanes', '45', '22', 'San pedro', 'Zumpango', 'Mexico', 300, '5573000716', 'www.Arrayanes.com', 'ArrayanesFB', 50, 40000),
(109, 'Orion', 'San roberto', '40', '7', 'La trinidad', 'Zumpango', 'Mexico', 250, '5518457569', 'Orion.com', 'OrionFB', 60, 30000),
(110, 'Diamante', '5 de mayo', '45', '11', 'La quebrada', 'Acapulco', 'Guerrero', 500, '5512364541', 'Diamond.com.mx', 'Diamond', 150, 100000);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cuadrilla`
--
ALTER TABLE `cuadrilla`
  ADD CONSTRAINT `cuadrilla_ibfk_1` FOREIGN KEY (`idJornada`) REFERENCES `jornada` (`idJornada`),
  ADD CONSTRAINT `cuadrilla_ibfk_2` FOREIGN KEY (`idEmpleado`) REFERENCES `empleado` (`idEmpleado`);

--
-- Filtros para la tabla `evento`
--
ALTER TABLE `evento`
  ADD CONSTRAINT `evento_ibfk_1` FOREIGN KEY (`idCuadrilla`) REFERENCES `cuadrilla` (`idCuadrilla`),
  ADD CONSTRAINT `evento_ibfk_2` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`idCliente`),
  ADD CONSTRAINT `evento_ibfk_3` FOREIGN KEY (`idPaquete`) REFERENCES `paquete` (`idPaquete`),
  ADD CONSTRAINT `evento_ibfk_4` FOREIGN KEY (`idSalon`) REFERENCES `salon` (`idSalon`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
