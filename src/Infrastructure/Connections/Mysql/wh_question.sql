-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-01-2023 a las 17:08:21
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `grammar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wh_question`
--

CREATE TABLE `wh_question` (
  `id` int(10) NOT NULL,
  `question_type` varchar(200) NOT NULL,
  `name_in_english` varchar(200) NOT NULL,
  `name_in_spanish` varchar(200) NOT NULL,
  `success` int(10) NOT NULL,
  `failures` int(10) NOT NULL,
  `average` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `what`
--

INSERT INTO `wh_question` (`id`, `question_type`, `name_in_english`, `name_in_spanish`, `success`, `failures`, `average`) VALUES
(1, 'What', 'What am I going to do?', '¿Qué voy a hacer?', 0, 0, '0'),
(2, 'What', 'What are you having for dinner?', '¿Qué vas a tener para cena?', 0, 0, '0'),
(3, 'What', 'What is he/she looking for?', '¿Qué está buscando él/ella?', 0, 0, '0'),
(4, 'What', 'What is it made of?', '¿De qué está hecho?', 0, 0, '0'),
(5, 'What', 'What are we going to do today?', '¿Qué vamos a hacer hoy?', 0, 0, '0'),
(6, 'What', 'What are they planning to do?', '¿Qué planean hacer ellos?', 0, 0, '0'),
(7, 'What', 'What is this/that going to be used for?', '¿Para qué se va a usar esto/ese?', 0, 0, '0'),
(8, 'What', 'What were you thinking of?', '¿En qué estabas pensando?', 0, 0, '0'),
(9, 'What', 'What was he/she talking about?', '¿De qué estaba hablando él/ella?', 0, 0, '0'),
(10, 'What', 'What have you been thinking of doing?', '¿En qué has estado pensando de hacer?', 0, 0, '0');
--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `wh_question`
--
ALTER TABLE `wh_question`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
