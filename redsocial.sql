-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-10-2017 a las 15:14:50
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `redsocial`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `Nombre Completo` varchar(30) NOT NULL,
  `ID` int(12) NOT NULL,
  `Correo Electronico` varchar(50) NOT NULL,
  `Grado que cursa` varchar(7) NOT NULL,
  `Teléfono Fijo` int(7) NOT NULL,
  `Sexo` set('Masculino','Femenino','Otro/No me gusta defenirlo') NOT NULL,
  `Teléfono  Movil` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `padres`
--

CREATE TABLE `padres` (
  `Nombre Completo` varchar(30) NOT NULL,
  `ID` int(12) NOT NULL,
  `Grado que cursa el estudiante` int(7) NOT NULL,
  `Teléfono Fijo` int(7) NOT NULL,
  `Teléfono Movil` int(10) NOT NULL,
  `Sexo` set('Masculino','Femenino','Otro/No me gusta definirlo') NOT NULL,
  `Nombre del Estudiante` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `Nombre Completo` varchar(30) NOT NULL COMMENT ' ',
  `ID` int(12) NOT NULL,
  `Area que enseña` text NOT NULL,
  `Correo Electronico` varchar(50) NOT NULL,
  `Sexo` set('Masculino','Femenino','Otro/No me gusta definirlo') NOT NULL,
  `Teléfono Fijo` int(7) NOT NULL,
  `Teléfono Movil` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
