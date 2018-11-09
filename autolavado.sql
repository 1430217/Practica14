-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2018 a las 23:05:11
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `autolavado`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `get_promociones` ()  NO SQL
SELECT usuarios.nombre_usuario, promociones.nombre_promocion 
FROM promociones
INNER JOIN usuarios_promociones on 
usuarios.idUsuario= usuarios_promociones.idUsuario AND
promociones.idPromocion= usuarios_promociones.idPromocion$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `premios`
--

CREATE TABLE `premios` (
  `idPremio` int(11) NOT NULL,
  `nombre_premio` varchar(128) DEFAULT NULL,
  `descripcion` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promociones`
--

CREATE TABLE `promociones` (
  `idPromocion` int(11) NOT NULL,
  `nombre_promocion` varchar(128) DEFAULT NULL,
  `descripcion` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `promociones`
--

INSERT INTO `promociones` (`idPromocion`, `nombre_promocion`, `descripcion`) VALUES
(1, 'Descuento 10%', ''),
(2, 'Descuento 20$', ''),
(3, 'Descuento 50%', ''),
(4, 'Lavado Gratis', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nombre_usuario` varchar(128) DEFAULT NULL,
  `username` varchar(128) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nombre_usuario`, `username`, `password`) VALUES
(1, 'Jesus Vega', 'jesusvega', '1234'),
(2, 'Gonzalo Martinez', 'gonzalomtz', '1234'),
(3, 'Gustavo Villanueva', 'tabinho94', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_premios`
--

CREATE TABLE `usuarios_premios` (
  `idUsuario` int(11) DEFAULT NULL,
  `idPremio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_promociones`
--

CREATE TABLE `usuarios_promociones` (
  `idUsuario` int(11) DEFAULT NULL,
  `idPromocion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios_promociones`
--

INSERT INTO `usuarios_promociones` (`idUsuario`, `idPromocion`) VALUES
(1, 2),
(2, 4),
(3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_visitas`
--

CREATE TABLE `usuarios_visitas` (
  `idUsuario` int(11) DEFAULT NULL,
  `idVisita` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visitas`
--

CREATE TABLE `visitas` (
  `idVisita` int(11) NOT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `premios`
--
ALTER TABLE `premios`
  ADD PRIMARY KEY (`idPremio`);

--
-- Indices de la tabla `promociones`
--
ALTER TABLE `promociones`
  ADD PRIMARY KEY (`idPromocion`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- Indices de la tabla `usuarios_premios`
--
ALTER TABLE `usuarios_premios`
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idPremio` (`idPremio`);

--
-- Indices de la tabla `usuarios_promociones`
--
ALTER TABLE `usuarios_promociones`
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idPromocion` (`idPromocion`);

--
-- Indices de la tabla `usuarios_visitas`
--
ALTER TABLE `usuarios_visitas`
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idVisita` (`idVisita`);

--
-- Indices de la tabla `visitas`
--
ALTER TABLE `visitas`
  ADD PRIMARY KEY (`idVisita`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `premios`
--
ALTER TABLE `premios`
  MODIFY `idPremio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `promociones`
--
ALTER TABLE `promociones`
  MODIFY `idPromocion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `visitas`
--
ALTER TABLE `visitas`
  MODIFY `idVisita` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios_premios`
--
ALTER TABLE `usuarios_premios`
  ADD CONSTRAINT `usuarios_premios_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`),
  ADD CONSTRAINT `usuarios_premios_ibfk_2` FOREIGN KEY (`idPremio`) REFERENCES `premios` (`idPremio`);

--
-- Filtros para la tabla `usuarios_promociones`
--
ALTER TABLE `usuarios_promociones`
  ADD CONSTRAINT `usuarios_promociones_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`),
  ADD CONSTRAINT `usuarios_promociones_ibfk_2` FOREIGN KEY (`idPromocion`) REFERENCES `promociones` (`idPromocion`);

--
-- Filtros para la tabla `usuarios_visitas`
--
ALTER TABLE `usuarios_visitas`
  ADD CONSTRAINT `usuarios_visitas_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`),
  ADD CONSTRAINT `usuarios_visitas_ibfk_2` FOREIGN KEY (`idVisita`) REFERENCES `visitas` (`idVisita`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
