-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-11-2017 a las 17:05:51
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `colegio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `grado` varchar(7) NOT NULL,
  `telefonof` int(7) NOT NULL,
  `sexo` set('Masculino','Femenino','Otro/No me gusta defenirlo') NOT NULL,
  `telefonom` int(10) NOT NULL,
  `contrasena` varchar(30) NOT NULL,
  `fecha` date NOT NULL,
  `foto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `nombre`, `correo`, `grado`, `telefonof`, `sexo`, `telefonom`, `contrasena`, `fecha`, `foto`) VALUES
(1, 'MateoAlonsoPabonGarcia', 'matepabon@gmail.com', '11Â°1', 5847658, '', 2147483647, 'c1-2017', '2017-11-01', 'gokulimit.jpg'),
(2, 'JuanDavidCorreaGarcia', 'juandacoga12@gmail.com', '11Â°1', 5052239, '', 2147483647, '2573952juancg', '1999-07-30', 'gokulimit.jpg'),
(4, 'DannaMMontoya', 'dannamontoyaserna@gmail.com', '11Â°1', 2334455, '', 2134567896, '12345678', '2000-09-25', 'larva-de-mariposa-300x225.jpg'),
(5, 'isaac', 'isaacsuarez@gmail.com', '11Â°1', 5804738, '', 2147483647, '5804738isaac', '2001-01-08', ''),
(6, 'IsabelaSantana', 'isabbela15@gmail.com', '11Â°1', 5043793, '', 2147483647, 'isabela123', '2000-08-14', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `padres`
--

CREATE TABLE `padres` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `grado` int(7) NOT NULL,
  `telefonof` int(7) NOT NULL,
  `telefonom` int(10) NOT NULL,
  `sexo` set('Masculino','Femenino') NOT NULL,
  `contrasena` varchar(30) NOT NULL,
  `nombreestudiante` varchar(30) NOT NULL,
  `foto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL COMMENT ' ',
  `area` text NOT NULL,
  `correo` varchar(50) NOT NULL,
  `sexo` set('Masculino','Femenino','Otro/No me gusta definirlo') NOT NULL,
  `telefonof` int(7) NOT NULL,
  `telefonom` int(10) NOT NULL,
  `contrasena` varchar(30) NOT NULL,
  `fecha` date NOT NULL,
  `foto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `padres`
--
ALTER TABLE `padres`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `padres`
--
ALTER TABLE `padres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
