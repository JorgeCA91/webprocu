-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 06-04-2014 a las 20:37:59
-- Versión del servidor: 5.5.36-MariaDB
-- Versión de PHP: 5.5.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `procu`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `pass` varchar(45) DEFAULT NULL,
  `usuario_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `denunciante`
--

CREATE TABLE IF NOT EXISTS `denunciante` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) NOT NULL,
  `domicilio` text,
  `tel` varchar(45) DEFAULT NULL,
  `localidad_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `denunciante`
--

INSERT INTO `denunciante` (`id`, `usuario_id`, `domicilio`, `tel`, `localidad_id`) VALUES
(1, 0, 'ñlkñlkñlkñ', '234234', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `extraviado`
--

CREATE TABLE IF NOT EXISTS `extraviado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fechaNac` date NOT NULL,
  `edad` int(11) DEFAULT NULL,
  `genero` varchar(45) DEFAULT NULL,
  `originario` varchar(45) DEFAULT NULL,
  `nacionalidad` varchar(45) DEFAULT NULL,
  `domicilio` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `observaciones` text,
  `redSocial` varchar(45) DEFAULT NULL,
  `usuario_id` int(11) NOT NULL,
  `localidad_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `extraviado`
--

INSERT INTO `extraviado` (`id`, `fechaNac`, `edad`, `genero`, `originario`, `nacionalidad`, `domicilio`, `telefono`, `observaciones`, `redSocial`, `usuario_id`, `localidad_id`) VALUES
(1, '2011-07-10', 56, NULL, NULL, NULL, 'asadsf', NULL, 'klkhkh', NULL, 0, 0),
(2, '2009-06-09', 23, NULL, NULL, NULL, 'sasad', NULL, 'asdasdasd', NULL, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `identificacion`
--

CREATE TABLE IF NOT EXISTS `identificacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) DEFAULT NULL,
  `denunciante_id` int(11) NOT NULL,
  `extraviado_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidad`
--

CREATE TABLE IF NOT EXISTS `localidad` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `municipio_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mp`
--

CREATE TABLE IF NOT EXISTS `mp` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `region_id` int(11) NOT NULL,
  `longitud` varchar(45) DEFAULT NULL,
  `latitud` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE IF NOT EXISTS `municipio` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `region_id` int(11) NOT NULL,
  `codigo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parentesco`
--

CREATE TABLE IF NOT EXISTS `parentesco` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parentesco` varchar(45) DEFAULT NULL,
  `denunciante_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `parentesco`
--

INSERT INTO `parentesco` (`id`, `parentesco`, `denunciante_id`) VALUES
(1, 'asdadfsdfs', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `region`
--

CREATE TABLE IF NOT EXISTS `region` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `municipio` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte`
--

CREATE TABLE IF NOT EXISTS `reporte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` int(11) DEFAULT NULL,
  `tgenero` int(11) DEFAULT NULL,
  `mayMen` int(11) DEFAULT NULL,
  `grupo` int(11) DEFAULT NULL,
  `fechaReporte` date DEFAULT NULL,
  `fechaConclusion` date NOT NULL,
  `motivo` text,
  `admin_id` int(11) NOT NULL,
  `denunciante_id` int(11) NOT NULL,
  `extraviado_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `reporte`
--

INSERT INTO `reporte` (`id`, `status`, `tgenero`, `mayMen`, `grupo`, `fechaReporte`, `fechaConclusion`, `motivo`, `admin_id`, `denunciante_id`, `extraviado_id`) VALUES
(1, 1, 2, NULL, 4, NULL, '0000-00-00', 'alskjdalj', 0, 0, 0),
(2, 1, 1, NULL, 3, NULL, '0000-00-00', 'asdadsad', 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) NOT NULL,
  `role` varchar(15) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(15) NOT NULL DEFAULT 'CIUDADANO',
  `nombre` varchar(25) DEFAULT NULL,
  `apellido_paterno` varchar(25) DEFAULT NULL,
  `apellido_materno` varchar(25) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `role`, `nombre`, `apellido_paterno`, `apellido_materno`, `email`) VALUES
(1, 'CIUDADANO', 'Diony', 'askjhdakdh', 'alskdjdalj', ''),
(2, 'CIUDADANO', 'Lucho', 'alkjhdalsj', 'alksjalskj', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
