-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-04-2017 a las 16:40:03
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `taller`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `Matricula` int(5) NOT NULL,
  `Nombre` varchar(25) NOT NULL,
  `AP` varchar(25) NOT NULL,
  `AM` varchar(25) NOT NULL,
  `FechaNac` date NOT NULL,
  `Calle` varchar(30) NOT NULL,
  `Numero` varchar(10) NOT NULL,
  `Municipio` varchar(30) NOT NULL,
  `Estado` varchar(30) NOT NULL,
  `Correo` varchar(60) NOT NULL,
  `telefono` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`Matricula`, `Nombre`, `AP`, `AM`, `FechaNac`, `Calle`, `Numero`, `Municipio`, `Estado`, `Correo`, `telefono`) VALUES
(1331106768, 'Erick Iván', 'Vásquez', 'Cónde', '1994-12-04', 'Santacruz', '1', 'Tlaxcala', 'Tlaxcala', 'erick.conde@gmail.com', '2461354323'),
(1331106868, 'Iván', 'Yllescas', 'Lamas', '1995-05-10', 'Azabache', '45', 'Ocotlan', 'Tlaxcala', 'yllescas.l.ivan@gmail.com', '2461423206');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursa`
--

CREATE TABLE `cursa` (
  `Matricula` int(5) NOT NULL,
  `Clave` int(5) NOT NULL,
  `ParcialUno` decimal(10,2) NOT NULL,
  `ParcialDos` decimal(10,2) NOT NULL,
  `ParcialTres` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imparte`
--

CREATE TABLE `imparte` (
  `CodProfesor` int(5) NOT NULL,
  `Clave` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `Clave` int(5) NOT NULL,
  `Nombre` text NOT NULL,
  `Objetivo` text NOT NULL,
  `Cuatrimestre` varchar(20) NOT NULL,
  `Creditos` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`Clave`, `Nombre`, `Objetivo`, `Cuatrimestre`, `Creditos`) VALUES
(555, 'Matemáticas', 'Enseñar matemáticas básicas.', '4', '80 créditos'),
(666, 'Geografía', 'Enseñar geografía básica.', '7', '100 créditos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `CodProfesor` int(5) NOT NULL,
  `Nombre` varchar(25) NOT NULL,
  `AP` varchar(25) NOT NULL,
  `AM` varchar(25) NOT NULL,
  `Calle` varchar(30) NOT NULL,
  `Numero` varchar(10) NOT NULL,
  `Municipio` varchar(30) NOT NULL,
  `Estado` varchar(30) NOT NULL,
  `Correo` text NOT NULL,
  `telefono` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`CodProfesor`, `Nombre`, `AP`, `AM`, `Calle`, `Numero`, `Municipio`, `Estado`, `Correo`, `telefono`) VALUES
(1234567890, 'Romano', 'Griego', 'Alemán', 'Europa', '34', 'Italiano', 'Gringo', 'stemen@gmail.com', '5554442211');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`Matricula`);

--
-- Indices de la tabla `cursa`
--
ALTER TABLE `cursa`
  ADD PRIMARY KEY (`Matricula`,`Clave`),
  ADD KEY `Clave` (`Clave`);

--
-- Indices de la tabla `imparte`
--
ALTER TABLE `imparte`
  ADD PRIMARY KEY (`CodProfesor`,`Clave`),
  ADD KEY `Clave` (`Clave`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`Clave`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`CodProfesor`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cursa`
--
ALTER TABLE `cursa`
  ADD CONSTRAINT `cursa_ibfk_1` FOREIGN KEY (`Clave`) REFERENCES `materia` (`Clave`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cursa_ibfk_2` FOREIGN KEY (`Matricula`) REFERENCES `alumno` (`Matricula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `imparte`
--
ALTER TABLE `imparte`
  ADD CONSTRAINT `imparte_ibfk_1` FOREIGN KEY (`Clave`) REFERENCES `materia` (`Clave`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `imparte_ibfk_2` FOREIGN KEY (`CodProfesor`) REFERENCES `profesor` (`CodProfesor`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
