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
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden`
--

DROP TABLE IF EXISTS `orden`;
CREATE TABLE IF NOT EXISTS `orden` (
  `id` int(255) NOT NULL,
  `producto` int(255) NOT NULL,
  KEY `orden_ibfk_1` (`id`),
  KEY `orden_ibfk_2` (`producto`)
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
--
-- Restricciones para tablas volcadas
--

--
--
-- Filtros para la tabla `orden`
--
ALTER TABLE `orden`
  ADD CONSTRAINT `orden_ibfk_1` FOREIGN KEY (`id`) REFERENCES `pedido` (`id`),
  ADD CONSTRAINT `orden_ibfk_2` FOREIGN KEY (`producto`) REFERENCES `producto` (`id`);


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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- Ingresar datos

INSERT INTO categorias (id, nombre, descripcion, categoria) VALUES (1, 'Originals', ' ', 0);
INSERT INTO categorias (id, nombre, descripcion, categoria) VALUES (2, 'Novedades', ' ', 0);
INSERT INTO categorias (id, nombre, descripcion, categoria) VALUES (3, 'Menu Parrilla', ' ', 0);
INSERT INTO categorias (id, nombre, descripcion, categoria) VALUES (4, 'Menu Pollo', ' ', 0);
INSERT INTO categorias (id, nombre, descripcion, categoria) VALUES (5, '100% Vegetal', ' ', 0);
INSERT INTO categorias (id, nombre, descripcion, categoria) VALUES (6, 'Snacks', ' ', 0);
INSERT INTO categorias (id, nombre, descripcion, categoria) VALUES (7, 'Postres', ' ', 0);
INSERT INTO categorias (id, nombre, descripcion, categoria) VALUES (8, 'Hamburguesas', ' ', 0);
INSERT INTO categorias (id, nombre, descripcion, categoria) VALUES (9, 'Salsas', ' ', 0);
INSERT INTO categorias (id, nombre, descripcion, categoria) VALUES (10, 'Sin gluten', ' ', 0);
INSERT INTO categorias (id, nombre, descripcion, categoria) VALUES (11, 'Ensaladas', ' ', 0);
INSERT INTO categorias (id, nombre, descripcion, categoria) VALUES (12, 'Bebidas', ' ', 0);
INSERT INTO categorias (id, nombre, descripcion, categoria) VALUES (13, 'Cafe', ' ', 0);

INSERT INTO estado (id, descripcion) VALUES (4, 'Disponible');
INSERT INTO estado (id, descripcion) VALUES (5, 'No Disponible');

/* Categoria Originals*/
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (1, 'Campesina','',13.00,1,4);
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (2, 'Iberica','',12.00,1,4);
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (3, 'Iberica Doble','',14.00,1,4);
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (4, 'Manchega','',13.00,1,4);

/* Categoria Novedades*/
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (5, 'Doble Crispy','',9.70,2,4);
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (6, 'Big vegetal','',10.70,2,4);
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (7, 'Cheese','',10.00,2,4);
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (8, 'Gouda Ring','',2.70,2,4);

/* Categoria Menu Parrilla*/
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (9, 'Doble BBQ','',7.60,3,4);
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (10, 'Steakhouse','',11.60,3,4);
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (11, 'Triple Carne','',14.00,3,4);
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (12, 'Cheese BBQ','',9.40,3,4);

/* Categoria Menu Pollo*/
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (13, 'Crispy Chicken','',7.90,4,4);
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (14, 'Tendercrisp','',10.60,4,4);
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (15, 'Wrap','',12.10,4,4);
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (16, 'Nuggets','',11.50,4,4);

/* Categoria 100% Vegetal*/
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (17, 'Long Vegetal','',5.30,5,4);
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (18, 'King vegetal','',9.30,5,4);
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (19, 'Big vegetal','',10.30,5,4);
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (20, 'Nugget veg','',6.30,5,4);

/* Categoria Snacks*/
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (21, 'Dots gouda','',2.95,6,4);
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (22, 'Chili bites','',3.95,6,4);
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (23, 'Patatas','',2.90,6,4);
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (24, 'King fries','',4.00,6,4);

/* Categoria Postres*/
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (25, 'Tarta Oreo','',2.80,7,4);
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (26, 'Gofre','',2.10,7,4);
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (27, 'Brownie','',3.80,7,4);
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (28, 'Helado','',0.80,7,4);

/* Categoria Hamburguesas*/
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (29, 'Long Chicken','',5.30,8,4);
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (30, 'Bacon XL','',10.30,8,4);
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (31, 'King huevo','',12.40,8,4);
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (32, 'Triple king','',14.30,8,4);

/* Categoria Salsas*/
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (33, 'Mostaza','',0.60,9,4);
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (34, 'Barbacoa','',0.60,9,4);
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (35, 'Queso','',0.60,9,4);
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (36, 'Tomate','',0.60,9,4);

/* Categoria Sin gluten*/
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (37, 'Sin gluten','',3.10,10,4);
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (38, 'Completa','',9.10,10,4);
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (39, 'Patatas','',2.10,10,4);
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (40, 'Cheese','',3.00,10,4);

/* Categoria Ensaldas*/
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (41, 'Ensalada','',5.30,11,4);
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (42, 'Con pollo','',6.10,11,4);
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (43, 'Delight','',6.50,11,4);


/* Categoria Bebidas*/
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (44, 'Coca-Cola','',2.30,12,4);
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (45, 'Fanta zero','',2.30,12,4);
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (46, 'Agua','',1.10,12,4);
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (47, 'Nestea','',3.20,12,4);


/* Categoria Cafe*/
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (48, 'Expresso','',1.30,13,4);
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (49, 'Americano','',1.10,13,4);
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (50, 'Capuccino','',2.30,13,4);
INSERT INTO PRODUCTO (id, nombre, descripcion, precio, categoria, estado) VALUES (51, 'Latte','',1.80,13,4);




