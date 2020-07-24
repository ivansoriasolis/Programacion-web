-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-06-2020 a las 16:57:39
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `publications`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `classics`
--

CREATE TABLE `classics` (
  `author` varchar(128) DEFAULT NULL,
  `title` varchar(128) DEFAULT NULL,
  `year` smallint(6) DEFAULT NULL,
  `category` varchar(16) DEFAULT NULL,
  `isbn` char(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `classics`
--

INSERT INTO `classics` (`author`, `title`, `year`, `category`, `isbn`) VALUES
('Jane Austen', 'Pride and Prejudice', 1811, 'Fiction', '9780582506206'),
('Charles Darwin', 'The Origin of Species', 1856, 'Non-Fiction', '9780517123201'),
('Charles Dickens', 'The Old Curiosity Shop', 1841, 'Fiction', '9780099533474'),
('William Shakespeare', 'Romeo and Juliet', 1594, 'Play', '9780192814968'),
('Mark Twain', 'The Adventures of Tom Sawyer', 1876, 'Classic', '9781598184891');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `classics`
--
ALTER TABLE `classics`
  ADD KEY `author` (`author`(20)),
  ADD KEY `title` (`title`(20)),
  ADD KEY `year` (`year`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
