-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 16-06-2022 a las 22:51:25
-- Versión del servidor: 8.0.27
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `workflowf`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `cod` varchar(5) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nombre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `correo` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ci` varchar(2) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `cnacimiento` varchar(2) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`cod`, `nombre`, `correo`, `ci`, `cnacimiento`) VALUES
('001','usuario1','usuario1@info.com','si','si'),
('002','usuario2','usuario2@info.com','si','no'),
('003','usuario3','usuario3@info.com','no','si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `flujoproceso`
--

CREATE TABLE `flujoproceso` (
  `Flujo` varchar(3) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Proceso` varchar(3) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ProcesoSiguiente` varchar(3) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Tipo` varchar(1) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Pantalla` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Rol` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `flujoproceso`
--

INSERT INTO `flujoproceso` (`Flujo`, `Proceso`, `ProcesoSiguiente`, `Tipo`, `Pantalla`, `Rol`) VALUES
('F1', 'P1', 'P2', 'I', 'Inicio', 'Alumno'),
('F1', 'P2', 'P3', 'P', 'Documentos', 'Alumno'),
('F1', 'P3', 'P4', 'P', 'Presentar', 'Alumno'),
('F1', 'P4', 'P5', 'P', 'Recepcion', 'Kardex'),
('F1', 'P5', 'P6', 'P', 'Inscripcion', 'Kardex'),
('F1', 'P6', NULL, 'F', 'PrepararClase', 'Alumno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `flujoprocesocondicionante`
--

CREATE TABLE `flujoprocesocondicionante` (
  `Flujo` varchar(3) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Proceso` varchar(3) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ProcesoSI` varchar(3) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ProcesoNO` varchar(3) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `flujoprocesocondicionante`
--

INSERT INTO `flujoprocesocondicionante` (`Flujo`, `Proceso`, `ProcesoSI`, `ProcesoNO`) VALUES
('F1', 'P4', 'P6', 'P5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `flujoprocesoseguimiento`
--

CREATE TABLE `flujoprocesoseguimiento` (
  `Flujo` varchar(3) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Proceso` varchar(3) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `NumeroTramite` int DEFAULT NULL,
  `Usuario` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `FechaInicio` date DEFAULT NULL,
  `HoraInicio` time DEFAULT NULL,
  `FechaFin` date DEFAULT NULL,
  `HoraFin` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `flujoprocesoseguimiento`
--

INSERT INTO `flujoprocesoseguimiento` (`Flujo`, `Proceso`, `NumeroTramite`, `Usuario`, `FechaInicio`, `HoraInicio`, `FechaFin`, `HoraFin`) VALUES
('F1','P1',1000,'usuario1@info.com','2021-09-22','10:10:10','2021-09-22','10:13:00'),
('F1','P2',1000,'usuario1@info.com','2021-09-22','10:14:10','2021-09-22','10:20:00'),
('F1','P3',1000,'usuario1@info.com','2021-09-22','10:25:10','2021-09-22','10:30:00'),
('F1','P4',1000,'usuario1@info.com','2021-09-22','10:36:10','2021-09-22','10:40:00'),
('F1','P5',1000,'usuario1@info.com','2021-09-22','11:00:10','2021-09-22','11:02:00'),
('F1','P6',1000,'usuario1@info.com','2021-09-22','11:10:10','2021-09-22','11:13:00'),
('F1','P1',1010,'usuario2@info.com','2021-10-22','10:10:10','2021-10-22','10:13:00'),
('F1','P2',1010,'usuario2@info.com','2021-10-22','10:14:10','2021-10-22','10:20:00'),
('F1','P3',1010,'usuario2@info.com','2021-10-22','10:25:10','2021-10-22','10:30:00'),
('F1','P4',1010,'usuario2@info.com','2021-10-22','10:36:10','2021-10-22',null),
('F1','P1',2100,'usuario3@info.com','2022-07-22','10:10:10','2022-07-22','10:13:00'),
('F1','P2',2100,'usuario3@info.com','2022-07-22','10:14:10','2022-07-22','10:20:00'),
('F1','P3',2100,'usuario3@info.com','2022-07-22','10:25:10','2022-07-22','10:30:00'),
('F1','P4',2100,'usuario3@info.com','2022-07-22','10:36:10','2022-07-22','10:40:00'),
('F1','P5',2100,'usuario3@info.com','2022-07-22','11:00:10','2022-07-22',null);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
