-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-05-2017 a las 07:28:08
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dogsyvet`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `appointment`
--

CREATE TABLE `appointment` (
  `familia` int(11) DEFAULT NULL,
  `veterinario` int(11) DEFAULT NULL,
  `cliente` int(11) DEFAULT NULL,
  `enfermedad` int(11) DEFAULT NULL,
  `mascota` int(11) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `appointment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `appointment`
--

INSERT INTO `appointment` (`familia`, `veterinario`, `cliente`, `enfermedad`, `mascota`, `descripcion`, `appointment_id`) VALUES
(2, 1, 1, 4, 1, 'El perrito sufre de una enfermedad llamada ternura, cuando uno lo ve, quiere cogerlo a picos, es un amor, no sirve para espantar ladrones porque les bate la cola, pero si a los clientes, apenas los ve, les ladra', 1),
(3, 1, 3, 2, 2, 'La perrita es una hermosa chocolate que ha tenido episodios de poca comida, algo de malgenio y quiere mantener dormida', 2),
(2, 1, 1, 1, 1, 'Descripcion de prueba', 5),
(3, 5, 4, 1, 10, 'Otra descripcion de prueba', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `client`
--

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `nombre_cliente` varchar(50) DEFAULT NULL,
  `dni` varchar(50) DEFAULT NULL,
  `familia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `client`
--

INSERT INTO `client` (`client_id`, `nombre_cliente`, `dni`, `familia`) VALUES
(1, 'Cristian', '654354354', 2),
(3, 'Sarita', '654654564', 2),
(4, 'Maria', '574654', 3),
(5, 'Albert', '25435432', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `family`
--

CREATE TABLE `family` (
  `family_id` int(11) NOT NULL,
  `apellido_familia` varchar(50) DEFAULT NULL,
  `numero_cuenta` int(11) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `nombres` varchar(50) DEFAULT NULL,
  `dni_personas` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `family`
--

INSERT INTO `family` (`family_id`, `apellido_familia`, `numero_cuenta`, `telefono`, `direccion`, `nombres`, `dni_personas`) VALUES
(2, 'GutiÃ©rrez GonzÃ¡lez', 32135454, '353574354', 'Calle 58 No 39a 25', 'Alexander Martin Yayo', '35353654'),
(3, 'Portillo Carmona', 2147483647, '385354121', 'Cra 38 No 54 52', 'Alexander Martin Yayo', '8576587 75 7658 765 87');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `illness`
--

CREATE TABLE `illness` (
  `illness_id` int(11) NOT NULL,
  `nombre_enfermedad` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `illness`
--

INSERT INTO `illness` (`illness_id`, `nombre_enfermedad`) VALUES
(1, 'Rabia'),
(2, 'Tetano'),
(3, 'Piojos'),
(4, 'Fiebre'),
(5, 'Mal genio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pet`
--

CREATE TABLE `pet` (
  `pet_id` int(11) NOT NULL,
  `alias` varchar(50) NOT NULL,
  `especie` varchar(50) NOT NULL,
  `raza` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `peso_medio` int(11) NOT NULL,
  `peso_actual` int(11) NOT NULL,
  `familia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pet`
--

INSERT INTO `pet` (`pet_id`, `alias`, `especie`, `raza`, `color`, `fecha_nacimiento`, `peso_medio`, `peso_actual`, `familia`) VALUES
(1, 'dyler', 'perro', 'labrador', 'cafe', '2016-09-02', 20, 22, 3),
(2, 'kasy', 'perro', 'labrador', 'chocolate', '2015-09-09', 15, 15, 2),
(3, 'Ginebra', 'Perro', 'salchicha', 'cafe', '2017-05-03', 10, 12, 3),
(6, 'toby', 'tortuga', '', 'verde', '2017-05-03', 5, 7, 2),
(7, 'Bruno', 'Perro', 'Labrador', 'Negro', '2015-01-28', 15, 16, 3),
(8, 'Dyler', 'Perro', 'Labrador', 'cafe', '2017-05-07', 12, 13, 2),
(9, 'Kasy', 'Perro', 'Labrador', 'Chocolate', '2017-05-07', 12, 13, 2),
(10, 'Ginebra', 'Perro', 'Salchicha', 'cafe', '2012-01-04', 12, 13, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vet`
--

CREATE TABLE `vet` (
  `vet_id` int(11) NOT NULL,
  `nombre_veterinario` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vet`
--

INSERT INTO `vet` (`vet_id`, `nombre_veterinario`) VALUES
(1, 'David Rodriguez'),
(3, 'Isaac newton'),
(4, 'Karl Gauss'),
(5, 'Galileo Galilei');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indices de la tabla `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indices de la tabla `family`
--
ALTER TABLE `family`
  ADD PRIMARY KEY (`family_id`);

--
-- Indices de la tabla `illness`
--
ALTER TABLE `illness`
  ADD PRIMARY KEY (`illness_id`);

--
-- Indices de la tabla `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`pet_id`);

--
-- Indices de la tabla `vet`
--
ALTER TABLE `vet`
  ADD PRIMARY KEY (`vet_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `family`
--
ALTER TABLE `family`
  MODIFY `family_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `illness`
--
ALTER TABLE `illness`
  MODIFY `illness_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `pet`
--
ALTER TABLE `pet`
  MODIFY `pet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `vet`
--
ALTER TABLE `vet`
  MODIFY `vet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
