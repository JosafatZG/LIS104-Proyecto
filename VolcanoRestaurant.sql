-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 23-02-2022 a las 07:16:00
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `volcanorestaurant`
--
DROP DATABASE IF EXISTS `volcanorestaurant`;
CREATE DATABASE IF NOT EXISTS `volcanorestaurant` DEFAULT CHARACTER SET utf16 COLLATE utf16_spanish_ci;
USE `volcanorestaurant`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `usuario` varchar(50) COLLATE utf16_spanish_ci NOT NULL,
  `password` varchar(255) COLLATE utf16_spanish_ci NOT NULL,
  PRIMARY KEY (`usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

DROP TABLE IF EXISTS `estado`;
CREATE TABLE IF NOT EXISTS `estado` (
  `id` int(255) NOT NULL,
  `descripcion` varchar(255) COLLATE utf16_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(255) NOT NULL,
  `nombre` varchar(255) COLLATE utf16_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf16_spanish_ci NOT NULL,
  `categoria` int(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `extras`
--

DROP TABLE IF EXISTS `extras`;
CREATE TABLE IF NOT EXISTS `extras` (
  `id` int(255) NOT NULL,
  `nombre` varchar(255) COLLATE utf16_spanish_ci NOT NULL,
  `precio` decimal(65,2) NOT NULL,
  `estado` int(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `estado` (`estado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden`
--

DROP TABLE IF EXISTS `orden`;
CREATE TABLE IF NOT EXISTS `orden` (
  `id` int(255) NOT NULL,
  `producto` int(255) NOT NULL,
  `extras` int(255) NOT NULL,
  KEY `orden_ibfk_1` (`id`),
  KEY `orden_ibfk_2` (`producto`),
  KEY `orden_ibfk_3` (`extras`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

DROP TABLE IF EXISTS `pedido`;
CREATE TABLE IF NOT EXISTS `pedido` (
  `id` int(255) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `precio` decimal(65,2) NOT NULL,
  `usuario` varchar(50) COLLATE utf16_spanish_ci NOT NULL,
  `estado` int(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `usuario` (`usuario`),
  KEY `estado` (`estado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

DROP TABLE IF EXISTS `producto`;
CREATE TABLE IF NOT EXISTS `producto` (
  `id` int(255) NOT NULL,
  `nombre` varchar(255) COLLATE utf16_spanish_ci NOT NULL,
  `descripcion` TEXT COLLATE utf16_spanish_ci,
  `precio` decimal(65,2) NOT NULL,  
  `categoria` INT(255) NOT NULL,	
  `estado` int(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `categoria` (`categoria`),
  KEY `estado` (`estado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productoxextras`
--

DROP TABLE IF EXISTS `productoxextras`;
CREATE TABLE IF NOT EXISTS `productoxextras` (
  `idproducto` int(255) NOT NULL,
  `idextras` int(255) NOT NULL,
  KEY `idproducto` (`idproducto`),
  KEY `idextras` (`idextras`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `extras`
--
ALTER TABLE `extras`
  ADD CONSTRAINT `extras_ibfk_1` FOREIGN KEY (`estado`) REFERENCES `estado` (`id`);

--
-- Filtros para la tabla `orden`
--
ALTER TABLE `orden`
  ADD CONSTRAINT `orden_ibfk_1` FOREIGN KEY (`id`) REFERENCES `pedido` (`id`),
  ADD CONSTRAINT `orden_ibfk_2` FOREIGN KEY (`producto`) REFERENCES `producto` (`id`),
  ADD CONSTRAINT `orden_ibfk_3` FOREIGN KEY (`extras`) REFERENCES `extras` (`id`);

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `cliente` (`usuario`),
  ADD CONSTRAINT `pedido_ibfk_2` FOREIGN KEY (`estado`) REFERENCES `estado` (`id`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`estado`) REFERENCES `estado` (`id`),
  ADD CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`categoria`) REFERENCES `categorias` (`id`);

--
-- Filtros para la tabla `productoxextras`
--
ALTER TABLE `productoxextras`
  ADD CONSTRAINT `productoxextras_ibfk_1` FOREIGN KEY (`idproducto`) REFERENCES `producto` (`id`),
  ADD CONSTRAINT `productoxextras_ibfk_2` FOREIGN KEY (`idextras`) REFERENCES `extras` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- Ingresar datos

INSERT INTO categorias (id, nombre, descripcion, categoria) VALUES (1, 'Originals', ' ', 0);
INSERT INTO categorias (id, nombre, descripcion, categoria) VALUES (2, 'Novedades', ' ', 0);
INSERT INTO categorias (id, nombre, descripcion, categoria) VALUES (3, 'Menú Parrilla', ' ', 0);
INSERT INTO categorias (id, nombre, descripcion, categoria) VALUES (4, 'Menú Pollo', ' ', 0);
INSERT INTO categorias (id, nombre, descripcion, categoria) VALUES (5, '100% Vegetal', ' ', 0);
INSERT INTO categorias (id, nombre, descripcion, categoria) VALUES (6, 'Entrantes y Snacks', ' ', 0);
INSERT INTO categorias (id, nombre, descripcion, categoria) VALUES (7, 'Postres', ' ', 0);
INSERT INTO categorias (id, nombre, descripcion, categoria) VALUES (8, 'Hamburguesas', ' ', 0);
INSERT INTO categorias (id, nombre, descripcion, categoria) VALUES (9, 'Salsas', ' ', 0);
INSERT INTO categorias (id, nombre, descripcion, categoria) VALUES (10, 'Sin gluten', ' ', 0);
INSERT INTO categorias (id, nombre, descripcion, categoria) VALUES (11, 'Ensaladas', ' ', 0);
INSERT INTO categorias (id, nombre, descripcion, categoria) VALUES (12, 'Bebidas', ' ', 0);
INSERT INTO categorias (id, nombre, descripcion, categoria) VALUES (13, 'Cafe', ' ', 0);

INSERT INTO estado (id, descripcion) VALUES (4, 'Disponible');
INSERT INTO estado (id, descripcion) VALUES (5, 'No Disponible');

INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (1, 'Menú Originals Campesina (2 carnes)','',13.00,1,4);
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (2, 'MENÚ QUEEN CHEESE DOBLE CRISPY CHICKEN','',9.70,2,4);
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (3, 'MENÚ DOBLE CHEESE BURGER BBQ','',7.60,3,4);
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (4, 'Menú Crispy Chicken','',7.60,4,4);
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (5, 'LONG VEGETAL','',5.30,5,4);
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (6, 'Dots de gouda','',2.95,6,4);
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (7, 'Tarta Oreo','',2.80,7,4);
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (8, 'LONG CHICKEN','',5.30,8,4);
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (9, 'Salsa miel y mostaza','',0.60,9,4);
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (10, 'Burger Sin Gluten','',3.10,10,4);
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (11, 'ENSALADA ORIGINAL','',5.30,11,4);
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (12, 'Coca-Cola','',2.30,12,4);
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (13, 'Cafe EXPRESSO','',1.30,13,4);