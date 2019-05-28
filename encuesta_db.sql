-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-05-2019 a las 06:58:37
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `encuesta_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE `registros` (
  `id_cuestionario` int(5) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `app` varchar(20) NOT NULL,
  `apm` varchar(20) NOT NULL,
  `edad` int(2) NOT NULL,
  `sexo` int(2) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `gradoEst` int(2) NOT NULL,
  `gustoEst` int(2) NOT NULL,
  `ocupacion` int(2) NOT NULL,
  `gustoOcupacion` int(2) NOT NULL,
  `g1` int(1) NOT NULL,
  `g2` int(1) NOT NULL,
  `g3` int(1) NOT NULL,
  `g4` int(1) NOT NULL,
  `g5` int(1) NOT NULL,
  `g6` int(1) NOT NULL,
  `g7` int(1) NOT NULL,
  `gustoTXT` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registros`
--

INSERT INTO `registros` (`id_cuestionario`, `nombre`, `app`, `apm`, `edad`, `sexo`, `telefono`, `correo`, `gradoEst`, `gustoEst`, `ocupacion`, `gustoOcupacion`, `g1`, `g2`, `g3`, `g4`, `g5`, `g6`, `g7`, `gustoTXT`) VALUES
(2, 'JENNIFER', 'MORALES', 'ROSAS', 2, 2, '256265', 'bebe@correo.com', 1, 5, 11, 4, 1, 1, 1, 0, 0, 0, 0, 'OTRO REGISTRO'),
(3, 'MIRIAM', 'PIOQUINTO', 'HERNANDEZ', 1, 2, '256265', 'miriam@correo.com', 2, 1, 6, 4, 1, 1, 1, 0, 0, 0, 0, 'OTRO REGISTRO'),
(4, 'EDUARDO', 'PIOQUINTO', 'HERNANDEZ', 4, 1, '256265', 'miriam@correo.com', 5, 4, 5, 4, 1, 1, 1, 0, 0, 0, 0, 'OTRO REGISTRO'),
(5, 'CHRISTIAN', 'RCGS', 'RCSG', 4, 1, '256265', 'christian@correo.com', 3, 2, 1, 1, 1, 1, 1, 1, 0, 0, 0, 'TEXTO'),
(6, 'CAROLINA', 'ALVAREZ', 'PEREZ', 5, 2, '55555555', 'caro@correo.com', 4, 3, 1, 2, 0, 0, 0, 0, 1, 1, 1, 'TEXTO '),
(7, 'JOSE', 'ALVAREZ', 'PEREZ', 3, 1, '55555555', 'JOSE@correo.com', 4, 3, 9, 5, 1, 1, 1, 1, 1, 1, 1, 'PRUEBA ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`id_cuestionario`),
  ADD UNIQUE KEY `id_cuestionario` (`id_cuestionario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registros`
--
ALTER TABLE `registros`
  MODIFY `id_cuestionario` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
