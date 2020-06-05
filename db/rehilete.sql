-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-06-2020 a las 22:56:57
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `rehilete`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paginas`
--

CREATE TABLE `paginas` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `ruta` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `paginas`
--

INSERT INTO `paginas` (`id`, `nombre`, `ruta`, `fecha`) VALUES
(1, 'Inicio', 'index', '2020-06-03 19:48:10'),
(2, ' Nosotros', 'nosotros', '2020-06-03 19:48:10'),
(3, 'Portafolio', 'portafolio', '2020-06-03 19:49:04'),
(4, 'Servicios', 'servicios', '2020-06-03 19:49:04'),
(5, 'Contacto', 'contacto', '2020-06-03 19:49:21'),
(6, 'Cimaco', 'cimaco', '2020-06-05 19:49:34'),
(7, 'Dulce Nostalgia', 'dulce-nostalgia', '2020-06-05 19:52:33'),
(8, 'GF 24', 'gf-24', '2020-06-05 19:54:54'),
(9, 'La Pampa', 'la-pampa', '2020-06-05 19:58:37'),
(10, 'Looper', 'looper', '2020-06-05 20:01:03'),
(11, 'Lúcuma', 'lucuma', '2020-06-05 20:04:32'),
(12, 'Malbicho', 'malbicho', '2020-06-05 20:06:55'),
(13, 'Nulab', 'nulab', '2020-06-05 20:09:03'),
(14, 'Oriental Grill', 'oriental-grill', '2020-06-05 20:11:47'),
(15, 'Peñoles', 'penoles', '2020-06-05 20:25:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `paginas`
--
ALTER TABLE `paginas`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
