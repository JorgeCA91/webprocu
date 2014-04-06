-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 05, 2014 at 07:13 PM
-- Server version: 5.5.36-MariaDB
-- PHP Version: 5.5.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `procu`
--

-- --------------------------------------------------------

--
-- Table structure for table `localidad`
--

CREATE TABLE IF NOT EXISTS `localidad` (
  `id` int(11) PRIMARY KEY NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `municipio_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mp`
--

CREATE TABLE IF NOT EXISTS `mp` (
  `id` int(11) PRIMARY KEY NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `region_id_region` int(11) NOT NULL,
  `longitud` varchar(45) DEFAULT NULL,
  `latitud` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `municipio`
--

CREATE TABLE IF NOT EXISTS `municipio` (
  `id_municipio` int(11) PRIMARY KEY NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `region_id` int(11) NOT NULL,
  `codigo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE IF NOT EXISTS `region` (
  `id` int(11) PRIMARY KEY NOT NULL,
  `nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reporte`
--

CREATE TABLE IF NOT EXISTS `reporte` (
  `id` int(11) PRIMARY KEY NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `ap_paterno` varchar(45) DEFAULT NULL,
  `ap_materno` varchar(45) DEFAULT NULL,
  `edad` varchar(45) DEFAULT NULL,
  `formulariocol` varchar(45) DEFAULT NULL,
  `municipio_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
	`id` INT (11) PRIMARY KEY NOT NULL UNIQUE AUTO_INCREMENT,
	`role` VARCHAR(15) DEFAULT  "CIUDADANO" NOT NULL,
	`nombre` VARCHAR (25) DEFAULT NULL,
	`apellido_paterno` VARCHAR (25) DEFAULT NULL,
	`apellido_materno` VARCHAR (25) DEFAULT NULL,
	`email` VARCHAR (100) NOT NULL,
	`telefono` VARCHAR (30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usuario_admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) PRIMARY KEY NOT NULL,
  `pass` varchar(45) DEFAULT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usuario_comun`
--

CREATE TABLE IF NOT EXISTS `denunciante` (
  `id` int(11) PRIMARY KEY NOT NULL,
  `reporte_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE IF NOT EXISTS `extraviado` (
  `id` int(11) PRIMARY KEY NOT NULL,
  `reporte_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
	`id` INT(11) PRIMARY KEY NOT NULL UNIQUE AUTO_INCREMENT,
	`usuario_id` INT (11) NOT NULL,
	`role` VARCHAR (15) NOT NULL,
	`created` DATETIME NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
