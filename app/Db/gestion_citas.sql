-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2021 a las 13:41:19
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gestion_citas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `numero_cita` int(100) NOT NULL,
  `fecha_cita` date NOT NULL,
  `estado` varchar(30) NOT NULL,
  `id_especialidad` int(11) NOT NULL,
  `id_policlinica` int(11) NOT NULL,
  `cedula_paciente` varchar(11) NOT NULL,
  `id_medico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`numero_cita`, `fecha_cita`, `estado`, `id_especialidad`, `id_policlinica`, `cedula_paciente`, `id_medico`) VALUES
(1, '2022-01-06', 'Por asistir', 2, 4, '20-24-4691', 2),
(2, '2021-12-22', 'Por asistir', 1, 1, '20-24-4691', 1),
(3, '2021-12-28', 'Por asistir', 3, 2, '20-70-4776', 3),
(4, '2021-12-27', 'Por asistir', 2, 4, '8-958-1993', 2),
(5, '2022-01-06', 'Por asistir', 2, 2, '8-958-1993', 2),
(6, '2021-12-20', 'Por asistir', 1, 1, '20-24-4691', 1),
(7, '2022-01-04', 'Por asistir', 1, 1, '8-958-1993', 1),
(8, '2021-12-21', 'Por asistir', 2, 3, '8-958-1993', 2),
(9, '2021-12-24', 'Por asistir', 2, 1, '20-24-4691', 2),
(10, '2021-12-28', 'Por asistir', 1, 4, '8-958-1993', 1),
(11, '2021-12-29', 'Por asistir', 1, 1, '8-958-1993', 1),
(12, '2022-01-05', 'Por asistir', 1, 1, '25-000-0000', 1),
(13, '2021-12-28', 'Por asistir', 4, 1, '20-24-4691', 4),
(14, '2021-12-28', 'Por asistir', 1, 1, '20-24-4691', 1),
(15, '2022-01-04', 'Por asistir', 2, 2, '20-24-4691', 2),
(16, '2022-01-06', 'Por asistir', 3, 1, '20-24-4691', 3),
(17, '2022-01-03', 'Por asistir', 3, 3, '20-24-4691', 3),
(18, '2021-12-20', 'Cancelada', 1, 1, '20-24-4691', 1),
(19, '2022-01-06', 'Por asistir', 1, 1, '20-24-4691', 1),
(20, '2021-12-29', 'Por asistir', 1, 1, '20-24-4691', 1),
(21, '2021-12-22', 'Por asistir', 1, 2, '8-958-1993', 1),
(22, '2021-12-20', 'Por asistir', 4, 2, '20-24-4691', 4),
(23, '2021-12-31', 'Por asistir', 1, 1, '20-24-4691', 1),
(24, '2022-01-06', 'Por asistir', 1, 1, '20-24-4691', 1),
(25, '2022-01-03', 'Por asistir', 1, 1, '20-24-4691', 1),
(26, '2021-12-24', 'Por asistir', 2, 3, '20-24-4691', 2),
(27, '2022-01-01', 'Por asistir', 1, 1, '20-24-4691', 1),
(28, '2021-12-30', 'Por asistir', 1, 1, '20-24-4691', 1),
(29, '2022-01-07', 'Por asistir', 1, 1, '20-24-4691', 1),
(30, '2021-12-24', 'Por asistir', 1, 1, '20-24-4691', 1),
(31, '2021-12-20', 'Por asistir', 1, 1, '20-24-4691', 1),
(32, '2021-12-21', 'Por asistir', 1, 1, '20-24-4691', 1),
(33, '2021-12-27', 'Por asistir', 1, 1, '20-24-4691', 1),
(34, '2021-12-18', 'Por asistir', 1, 1, '20-24-4691', 1),
(35, '2021-12-27', 'Por asistir', 1, 1, '20-24-4691', 1),
(36, '2022-01-01', 'Por asistir', 1, 1, '20-24-4691', 1),
(37, '2021-12-26', 'Por asistir', 1, 1, '20-24-4691', 1),
(38, '2021-12-25', 'Por asistir', 1, 1, '20-24-4691', 1),
(39, '2021-12-22', 'Por asistir', 1, 1, '20-24-4691', 1),
(40, '2021-12-20', 'Cancelada', 1, 1, '20-24-4691', 1),
(41, '2021-12-25', 'Por asistir', 1, 1, '20-70-4776', 1),
(42, '2021-12-21', 'Cancelada', 1, 1, '20-24-4691', 1),
(43, '2021-12-30', 'Por asistir', 1, 1, '20-24-4691', 1),
(44, '2022-01-07', 'Por asistir', 1, 1, '20-24-4691', 1),
(45, '2021-12-27', 'Por asistir', 1, 1, '20-24-4691', 1),
(46, '2022-01-03', 'Por asistir', 1, 1, '20-24-4691', 1),
(47, '2022-01-07', 'Por asistir', 1, 1, '20-24-4691', 1),
(48, '2022-01-03', 'Por asistir', 1, 1, '20-24-4691', 1),
(49, '2021-12-22', 'Por asistir', 1, 1, '20-24-4691', 1),
(50, '2021-12-24', 'Por asistir', 1, 1, '20-24-4691', 1),
(51, '2021-12-21', 'Por asistir', 1, 1, '20-24-4691', 1),
(52, '2021-12-23', 'Por asistir', 1, 1, '20-24-4691', 1),
(53, '2021-12-28', 'Por asistir', 1, 1, '20-24-4691', 1),
(54, '2022-01-05', 'Cancelada', 1, 1, '20-24-4691', 1),
(55, '2021-12-24', 'Por asistir', 1, 1, '20-24-4691', 1),
(56, '2021-12-27', 'Por asistir', 1, 1, '20-24-4691', 1),
(57, '2021-12-25', 'Por asistir', 1, 1, '20-24-4691', 1),
(58, '2021-12-19', 'Por asistir', 1, 1, '20-24-4691', 1),
(59, '2021-12-29', 'Por asistir', 1, 1, '20-24-4691', 1),
(60, '2021-12-24', 'Por asistir', 4, 2, '20-24-4691', 4),
(61, '2021-12-27', 'Por asistir', 2, 2, '20-24-4691', 2),
(62, '2021-12-19', 'Por asistir', 2, 2, '20-24-4691', 2),
(63, '2022-01-05', 'Por asistir', 2, 2, '20-24-4691', 2),
(64, '2021-12-24', 'Por asistir', 2, 2, '20-24-4691', 2),
(65, '2022-01-02', 'Por asistir', 1, 3, '20-24-4691', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `numero_cita` int(100) NOT NULL,
  `cedula_paciente` varchar(11) NOT NULL,
  `telefono` int(11) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`numero_cita`, `cedula_paciente`, `telefono`, `email`) VALUES
(1, '20-24-4691', 63091049, 'gerardofumero14@gmail.com'),
(2, '20-24-4691', 63091049, 'gerardofumero14@criptext.com'),
(3, '20-70-4776', 66089918, 'sebastianjuradoo@hotmail.com'),
(4, '8-958-1993', 63550389, 'manipla06@gmail.com'),
(5, '8-958-1993', 63000560, 'manipla06@gmail.com'),
(6, '20-24-4691', 63091049, 'gerardofumero14@gmail.com'),
(7, '8-958-1993', 68959685, 'manipla06@gmail.com'),
(8, '8-958-1993', 6986957, 'manipla06@gmail.com'),
(9, '20-24-4691', 63091049, 'gerardofumero14@gmail.com'),
(10, '8-958-1993', 65659568, 'gerardofumero@criptext.com'),
(11, '8-958-1993', 57863824, 'enmanuelgalvis8@protonmail.com'),
(12, '25-000-0000', 424000000, 'enmanuelgalvis8@protonmail.com'),
(13, '20-24-4691', 65658686, 'gerardofumero14@gmail.com'),
(14, '20-24-4691', 600000, 'gerardofumero14@gmail.com'),
(15, '20-24-4691', 600000, 'gerardofumero14@gmail.com'),
(16, '20-24-4691', 600000, 'gerardofumero@criptext.com'),
(17, '20-24-4691', 60000, 'gerardofumero14@gmail.com'),
(18, '20-24-4691', 60000, 'gerardofumero14@gmail.com'),
(19, '20-24-4691', 6000000, 'gerardofumero14@gmail.com'),
(20, '20-24-4691', 600000, 'gerardofumero14@gmail.com'),
(21, '8-958-1993', 6000000, 'gerardofumero14@gmail.com'),
(22, '20-24-4691', 6000, 'gerardofumero@criptext.com'),
(23, '20-24-4691', 60000, 'gerardofumero14@gmail.com'),
(24, '20-24-4691', 60000, 'gerardofumero@criptext.com'),
(25, '20-24-4691', 60000, 'gerardofumero14@gmail.com'),
(26, '20-24-4691', 600000, 'gerardofumero14@gmail.com'),
(27, '20-24-4691', 63091049, 'gerardofumero14@gmail.com'),
(28, '20-24-4691', 63091049, 'gerardofumero14@gmail.com'),
(29, '20-24-4691', 63091049, 'gerardofumero14@gmail.com'),
(30, '20-24-4691', 63091049, 'gerardofumero14@gmail.com'),
(31, '20-24-4691', 63091049, 'gerardofumero14@gmail.com'),
(32, '20-24-4691', 63091049, 'gerardofumero14@gmail.com'),
(33, '20-24-4691', 63091049, 'gerardofumero14@gmail.com'),
(34, '20-24-4691', 63091049, 'gerardofumero14@gmail.com'),
(35, '20-24-4691', 63091049, 'gerardofumero14@gmail.com'),
(36, '20-24-4691', 63091049, 'gerardofumero14@gmail.com'),
(37, '20-24-4691', 63091049, 'gerardofumero14@gmail.com'),
(38, '20-24-4691', 63091049, 'gerardofumero14@gmail.com'),
(39, '20-24-4691', 63091049, 'gerardofumero14@gmail.com'),
(40, '20-24-4691', 63091049, 'gerardofumero14@gmail.com'),
(41, '20-70-4776', 555555, 'enmanuelgalvis8@protonmail.com'),
(42, '20-24-4691', 2147483647, 'gerardofumero14@gmail.com'),
(43, '20-24-4691', 2147483647, 'gerardofumero14@gmail.com'),
(44, '20-24-4691', 2147483647, 'gerardofumero14@gmail.com'),
(45, '20-24-4691', 2147483647, 'gerardofumero14@gmail.com'),
(46, '20-24-4691', 2147483647, 'gerardofumero14@gmail.com'),
(47, '20-24-4691', 2147483647, 'gerardofumero14@gmail.com'),
(48, '20-24-4691', 2147483647, 'gerardofumero14@gmail.com'),
(49, '20-24-4691', 2147483647, 'gerardofumero14@gmail.com'),
(50, '20-24-4691', 2147483647, 'gerardofumero14@gmail.com'),
(51, '20-24-4691', 2147483647, 'gerardofumero14@gmail.com'),
(52, '20-24-4691', 2147483647, 'gerardofumero14@gmail.com'),
(53, '20-24-4691', 2147483647, 'gerardofumero14@gmail.com'),
(54, '20-24-4691', 2147483647, 'gerardofumero14@gmail.com'),
(55, '20-24-4691', 2147483647, 'gerardofumero14@gmail.com'),
(56, '20-24-4691', 2147483647, 'gerardofumero14@gmail.com'),
(57, '20-24-4691', 2147483647, 'gerardofumero14@gmail.com'),
(58, '20-24-4691', 2147483647, 'gerardofumero14@gmail.com'),
(59, '20-24-4691', 63091049, 'gerardofumero14@gmail.com'),
(60, '20-24-4691', 63091049, 'gerardofumero14@gmail.com'),
(61, '20-24-4691', 63091049, 'gerardofumero14@gmail.com'),
(62, '20-24-4691', 63091049, 'gerardofumero14@gmail.com'),
(63, '20-24-4691', 63091049, 'gerardofumero14@gmail.com'),
(64, '20-24-4691', 63091049, 'gerardofumero14@gmail.com'),
(65, '20-24-4691', 63091049, 'gerardofumero14@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad`
--

CREATE TABLE `especialidad` (
  `id_especialidad` int(11) NOT NULL,
  `nombre_especialidad` varchar(30) NOT NULL,
  `id_medico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `especialidad`
--

INSERT INTO `especialidad` (`id_especialidad`, `nombre_especialidad`, `id_medico`) VALUES
(1, 'Neurología', 1),
(2, 'Cardiología', 2),
(3, 'Gineco Obstetricia', 3),
(4, 'Oftalmología', 4),
(5, 'Geriatría', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medico`
--

CREATE TABLE `medico` (
  `id_medico` int(11) NOT NULL,
  `cedula_medico` varchar(11) NOT NULL,
  `nombre_medico` varchar(30) NOT NULL,
  `apellido_medico` varchar(30) NOT NULL,
  `especialidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `medico`
--

INSERT INTO `medico` (`id_medico`, `cedula_medico`, `nombre_medico`, `apellido_medico`, `especialidad`) VALUES
(1, '8-000-0000', 'Lourdes ', 'Adrianza', 1),
(2, '8-000-0001', 'Joseline', 'Marval', 2),
(3, '8-000-0003', 'Humberto', 'Van Grieken', 3),
(4, '8-000-0004', 'Arianny', 'Arrieche', 4),
(5, '8-000-0005', 'Andres', 'Salamanca', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `nombres` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `cedula` varchar(11) NOT NULL,
  `fechanac` date NOT NULL,
  `tipo_sangre` varchar(2) NOT NULL,
  `direccion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`nombres`, `apellidos`, `cedula`, `fechanac`, `tipo_sangre`, `direccion`) VALUES
('Gerardo Jose', 'Fumero Fumero', '20-24-4691', '2000-10-26', 'O+', 'Vacamonte, Playa Dorada'),
('Sebastian Gerardo', 'Jurado Ocando', '20-70-4776', '2000-09-05', 'O+', 'Via Israel, San Francisco'),
('Andres', 'Salamanca', '25-000-0000', '2000-10-31', 'O+', 'Venezuela'),
('José del Carmen', 'Saavedra Perez', '8-958-1993', '2000-07-13', 'O+', 'Llanos de Curundu 2022B');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `policlinica`
--

CREATE TABLE `policlinica` (
  `id_policlinica` int(11) NOT NULL,
  `nombre_poli` varchar(50) NOT NULL,
  `direccion_poli` text NOT NULL,
  `telefono_poli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `policlinica`
--

INSERT INTO `policlinica` (`id_policlinica`, `nombre_poli`, `direccion_poli`, `telefono_poli`) VALUES
(1, 'Complejo Hospitalario Arnulfo Arias Madrid', 'Via Simon Bolivar, antes de la Universidad de Panamá.', 5036600),
(2, 'Policlínica Dr. Carlos N. Brin', 'Av. Belisario Porras, al lado de Parque Omar, Panamá', 5031100),
(3, 'Dr. Manuel Ferrer Valdés', 'Calle 25, Calidonia', 5031700),
(4, 'Policlínica Alejandro De La Guardia', 'Av. 21E Nte. Bethania, Panamá', 5031200),
(5, 'Policlínica Dr. Generoso Guardia', 'Santa Librada, 3FCV+VVQ, Panamá', 5038348);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_citas`
--

CREATE TABLE `registro_citas` (
  `id_medico` int(11) NOT NULL,
  `numero_cita` int(100) NOT NULL,
  `fecha_cita` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro_citas`
--

INSERT INTO `registro_citas` (`id_medico`, `numero_cita`, `fecha_cita`) VALUES
(2, 1, '2022-01-06'),
(1, 2, '2021-12-22'),
(3, 3, '2021-12-28'),
(2, 4, '2021-12-27'),
(2, 5, '2022-01-06'),
(1, 6, '2021-12-20'),
(1, 7, '2022-01-04'),
(2, 8, '2021-12-21'),
(2, 9, '2021-12-24'),
(1, 10, '2021-12-28'),
(1, 11, '2021-12-29'),
(1, 12, '2022-01-05'),
(4, 13, '2021-12-28'),
(1, 14, '2021-12-28'),
(2, 15, '2022-01-04'),
(3, 16, '2022-01-06'),
(3, 17, '2022-01-03'),
(1, 18, '2021-12-20'),
(1, 19, '2022-01-06'),
(1, 20, '2021-12-29'),
(1, 21, '2021-12-22'),
(4, 22, '2021-12-20'),
(1, 23, '2021-12-31'),
(1, 24, '2022-01-06'),
(1, 25, '2022-01-03'),
(2, 26, '2021-12-24'),
(1, 27, '2022-01-01'),
(1, 28, '2021-12-30'),
(1, 29, '2022-01-07'),
(1, 30, '2021-12-24'),
(1, 31, '2021-12-20'),
(1, 32, '2021-12-21'),
(1, 33, '2021-12-27'),
(1, 34, '2021-12-18'),
(1, 35, '2021-12-27'),
(1, 36, '2022-01-01'),
(1, 37, '2021-12-26'),
(1, 38, '2021-12-25'),
(1, 39, '2021-12-22'),
(1, 40, '2021-12-20'),
(1, 41, '2021-12-25'),
(1, 42, '2021-12-21'),
(1, 43, '2021-12-30'),
(1, 44, '2022-01-07'),
(1, 45, '2021-12-27'),
(1, 46, '2022-01-03'),
(1, 47, '2022-01-07'),
(1, 48, '2022-01-03'),
(1, 49, '2021-12-22'),
(1, 50, '2021-12-24'),
(1, 51, '2021-12-21'),
(1, 52, '2021-12-23'),
(1, 53, '2021-12-28'),
(1, 54, '2022-01-05'),
(1, 55, '2021-12-24'),
(1, 56, '2021-12-27'),
(1, 57, '2021-12-25'),
(1, 58, '2021-12-19'),
(1, 59, '2021-12-29'),
(4, 60, '2021-12-24'),
(2, 61, '2021-12-27'),
(2, 62, '2021-12-19'),
(2, 63, '2022-01-05'),
(2, 64, '2021-12-24'),
(1, 65, '2022-01-02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `cedula_medico` varchar(11) NOT NULL,
  `contraseña` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`cedula_medico`, `contraseña`) VALUES
('8-123-4567', 'M3d1c04dm1n');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`numero_cita`),
  ADD KEY `id_medico_fk_idx` (`id_medico`),
  ADD KEY `especialidad_id_fk_idx` (`id_especialidad`),
  ADD KEY `policlinica_id_fk_idx` (`id_policlinica`),
  ADD KEY `citas_cedula_paciente_fk_idx` (`cedula_paciente`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD UNIQUE KEY `contacto_numero_cita` (`numero_cita`),
  ADD KEY `contacto_cita_fk_idx` (`numero_cita`),
  ADD KEY `contacto_cedpaciente_fk_idx` (`cedula_paciente`);

--
-- Indices de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  ADD PRIMARY KEY (`id_especialidad`),
  ADD KEY `especialidad_fk` (`id_especialidad`),
  ADD KEY `especialidad_IDmedico_fk_idx` (`id_medico`);

--
-- Indices de la tabla `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`id_medico`),
  ADD UNIQUE KEY `id_medico` (`id_medico`,`especialidad`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`cedula`),
  ADD KEY `paciente_cedula_idx` (`cedula`);

--
-- Indices de la tabla `policlinica`
--
ALTER TABLE `policlinica`
  ADD PRIMARY KEY (`id_policlinica`);

--
-- Indices de la tabla `registro_citas`
--
ALTER TABLE `registro_citas`
  ADD UNIQUE KEY `registro_numero_cita` (`numero_cita`),
  ADD KEY `registro_IDMedico_fk_idx` (`id_medico`),
  ADD KEY `registro_fecha_fk_idx` (`fecha_cita`),
  ADD KEY `registro_numcita_indx` (`numero_cita`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `numero_cita` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `numero_cita` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  MODIFY `id_especialidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `medico`
--
ALTER TABLE `medico`
  MODIFY `id_medico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `policlinica`
--
ALTER TABLE `policlinica`
  MODIFY `id_policlinica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `registro_citas`
--
ALTER TABLE `registro_citas`
  MODIFY `numero_cita` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `citas_IDespecialidad_fk` FOREIGN KEY (`id_especialidad`) REFERENCES `especialidad` (`id_especialidad`) ON UPDATE CASCADE,
  ADD CONSTRAINT `citas_IDmedico_fk` FOREIGN KEY (`id_medico`) REFERENCES `medico` (`id_medico`) ON UPDATE CASCADE,
  ADD CONSTRAINT `citas_IDpoliclinica_fk` FOREIGN KEY (`id_policlinica`) REFERENCES `policlinica` (`id_policlinica`) ON UPDATE CASCADE,
  ADD CONSTRAINT `citas_cedulapaciente_fk` FOREIGN KEY (`cedula_paciente`) REFERENCES `paciente` (`cedula`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD CONSTRAINT `contacto_ibfk_1` FOREIGN KEY (`cedula_paciente`) REFERENCES `citas` (`cedula_paciente`) ON UPDATE CASCADE,
  ADD CONSTRAINT `contacto_numerocita_fk` FOREIGN KEY (`numero_cita`) REFERENCES `citas` (`numero_cita`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `especialidad`
--
ALTER TABLE `especialidad`
  ADD CONSTRAINT `especialidad_IDmedico_fk` FOREIGN KEY (`id_medico`) REFERENCES `medico` (`id_medico`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `registro_citas`
--
ALTER TABLE `registro_citas`
  ADD CONSTRAINT `registro_IDmedico_fk` FOREIGN KEY (`id_medico`) REFERENCES `citas` (`id_medico`) ON UPDATE CASCADE,
  ADD CONSTRAINT `registro_numcita_fk` FOREIGN KEY (`numero_cita`) REFERENCES `citas` (`numero_cita`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
