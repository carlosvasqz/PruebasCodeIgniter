-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 10-05-2019 a las 06:45:50
-- Versión del servidor: 10.3.14-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de datos: `partidos`
--
CREATE DATABASE IF NOT EXISTS `partidos` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `partidos`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `votos`
--

CREATE TABLE `votos` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Cedula` varchar(30) NOT NULL,
  `Direccion` varchar(200) NOT NULL,
  `Partido` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `votos`
--

INSERT INTO `votos` (`ID`, `Nombre`, `Apellido`, `Cedula`, `Direccion`, `Partido`) VALUES
(1, 'Marcos Jose', 'Pineda', '0321-1999-00054', 'Siguatepeque', 'Nacional'),
(2, 'Maria', 'Perez Lopez', '123', 'Lejos', 'Liberal');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `votos`
--
ALTER TABLE `votos`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `votos`
--
ALTER TABLE `votos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;
