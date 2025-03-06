-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-03-2025 a las 20:51:12
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `musica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instrumento`
--
create database musica;
use musica;

CREATE TABLE `instrumento` (
  `Codigo` int(11) NOT NULL,
  `Nombre` varchar(255) DEFAULT NULL,
  `Tipo` enum('viento','cuerda','percusion','electrico') DEFAULT NULL,
  `Origen` enum('Aborigen','Cubano','Europeo','Mexicano','Guatemalteco') DEFAULT NULL,
  `Modelo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `instrumento`
--

INSERT INTO `instrumento` (`Codigo`, `Nombre`, `Tipo`, `Origen`, `Modelo`) VALUES
(3, 'Flauta', 'cuerda', 'Europeo', 'Estandar'),
(4, 'Flautin', 'electrico', 'Europeo', 'Madera');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `interpretacion`
--

CREATE TABLE `interpretacion` (
  `id_interpretacion` int(11) NOT NULL,
  `Codigo_instrumento` int(11) DEFAULT NULL,
  `id_obra` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `interpretacion`
--

INSERT INTO `interpretacion` (`id_interpretacion`, `Codigo_instrumento`, `id_obra`) VALUES
(2, 3, 1),
(5, 3, 1),
(6, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obras`
--

CREATE TABLE `obras` (
  `id` int(11) NOT NULL,
  `Nombre_obra` varchar(255) DEFAULT NULL,
  `Autor` varchar(255) DEFAULT NULL,
  `Ano_creacion` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `obras`
--

INSERT INTO `obras` (`id`, `Nombre_obra`, `Autor`, `Ano_creacion`) VALUES
(1, 'OBRA', 'MOZART', 2004),
(2, 'm', 'o', 2),
(3, 'm', 'o', 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `instrumento`
--
ALTER TABLE `instrumento`
  ADD PRIMARY KEY (`Codigo`);

--
-- Indices de la tabla `interpretacion`
--
ALTER TABLE `interpretacion`
  ADD PRIMARY KEY (`id_interpretacion`),
  ADD KEY `Codigo` (`Codigo_instrumento`),
  ADD KEY `id` (`id_obra`);

--
-- Indices de la tabla `obras`
--
ALTER TABLE `obras`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `instrumento`
--
ALTER TABLE `instrumento`
  MODIFY `Codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `interpretacion`
--
ALTER TABLE `interpretacion`
  MODIFY `id_interpretacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `obras`
--
ALTER TABLE `obras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `interpretacion`
--
ALTER TABLE `interpretacion`
  ADD CONSTRAINT `interpretacion_ibfk_1` FOREIGN KEY (`Codigo_instrumento`) REFERENCES `instrumento` (`Codigo`),
  ADD CONSTRAINT `interpretacion_ibfk_2` FOREIGN KEY (`id_obra`) REFERENCES `obras` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
