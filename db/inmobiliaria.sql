-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2024 a las 21:23:53
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inmobiliaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casa`
--

CREATE TABLE `casa` (
  `id` int(11) NOT NULL,
  `tipo` varchar(40) NOT NULL,
  `venta` varchar(50) NOT NULL,
  `barrio` varchar(50) NOT NULL,
  `calle` varchar(50) NOT NULL,
  `ambientes` varchar(20) NOT NULL,
  `condicion` varchar(30) NOT NULL,
  `orientacion` varchar(30) NOT NULL,
  `terraza` varchar(80) NOT NULL,
  `cochera` varchar(20) NOT NULL,
  `espacios` text NOT NULL,
  `imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `casa`
--

INSERT INTO `casa` (`id`, `tipo`, `venta`, `barrio`, `calle`, `ambientes`, `condicion`, `orientacion`, `terraza`, `cochera`, `espacios`, `imagen`) VALUES
(1, 'Casa', '2.000.000.000', 'Belgrano', 'La Pampa 1200 ', '3', 'Excelente', 'Sudeste', 'Sin Terraza', '2', 'Con balcone 2 Espacios:  jardin con pileta, sala de juegos, quincho, hall de recepcion, deposito, cancha de        futbol', 'casa1.jpg'),
(2, 'Casa', '150.045.080', 'Colegiales', 'Conde 3432', '7', 'Muy Buena', 'Noreste', 'Sin terrza pero con ', '3', 'Seguridad por garita de Policía y sistema de video vigilancia, jardin con pileta,             entrada de servicio, sotano, baulera, galeria', 'casa2.jpg'),
(3, 'Casa', '4.600.300', 'Nordelta, Las Glorietas, Tigre', 'Cabo las Lavandas al 657', '4', 'Excelente', 'Sureste', 'Cuenta con balcon te', '2', 'Quincho, jardin con pileta, parrilla, seguridad.', 'casa3.jpg'),
(4, 'Casa', '3.200.700', 'Belgrano r', 'Superi al 3450', '4', 'Excelente', 'Noreste', 'Con terraza (segundo', '2', 'Sala de juegos, cochera cubierta, jardin con pileta, hall, parrilla', 'casa4.jpg'),
(5, 'Casa', '57.001.005', 'Villa Urquiza', 'Bucarelli al 3590', '5', 'Muy Bueno', 'Suroeste', 'No pero si con 3 bal', '2', 'Cochera cubierta, jardin con pileta y quincho, sin hall, espacio de juego exterior', 'casa5.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `id` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `venta` varchar(50) NOT NULL,
  `barrio` varchar(50) NOT NULL,
  `calle` varchar(50) NOT NULL,
  `ambientes` varchar(40) NOT NULL,
  `condicion` varchar(30) NOT NULL,
  `orientacion` varchar(40) NOT NULL,
  `terraza` varchar(100) NOT NULL,
  `cochera` varchar(100) NOT NULL,
  `espacios` text NOT NULL,
  `imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`id`, `tipo`, `venta`, `barrio`, `calle`, `ambientes`, `condicion`, `orientacion`, `terraza`, `cochera`, `espacios`, `imagen`) VALUES
(6, 'Departamento', '3.900.200', 'Palermo Chico al 670', 'Cabello al 3800 - Piso 4', '4', 'Excelente', 'Noroeste', 'En la terraza encontramos: rooftop, sum, solarium ', 'En planta baja para cada departamento', 'Seguridad, jardín con pileta en planta baja, balcones terrazas, parrilla ', 'departamento1.jpg'),
(7, 'Departamento ', '2.100.200', 'Belgrano Torres', 'Arcos al 7892 - Piso 2', '3', ' Muy Buena', 'Sudeste', 'Tenemos terraza con piscina y sum, sin jardín. ', 'En planta baja cocheras para cada departamento', 'Sum, sauna, solarium, baulera, suite, parrilla ', 'departamento2.jpg'),
(8, 'departamento      ', '1900350', 'Palermo Soho', 'Av. Córdoba 4300-Piso 5', '4 ', 'Excelente', 'Suroeste', 'Amplia terraza y cada departamento con balcones la', 'Cochera en subsuelo', 'Sauna, sum, piscina, solarium, sala de juego, gimnasio, sala de juegos, suit, ascensor. ', 'departamento3.jpg'),
(9, 'departamento       ', '300.000.100', 'Saavedraa', 'Gar.del Río 3075-piso 14', '3', 'Muy Buena', 'Suroeste', 'Terraza verde con piscina descubierta, sum y solar', 'Cochera en subsuelo', 'Espacios para cada departamento piscina descubierta en terraza, sum, solarium.', 'departamento4.jpg'),
(10, 'Departamento    ', ' 200.500.100', ' Las Cañitas', 'Chenaut al 1700 - Piso 20', '3', 'Excelente', 'Sudeste', ' terraza verde sin piscina', 'cochera en subsuelo con espacio para cada departam', 'Gimnasio con sauna y toilette             SUM completo con office y toilette, Sector parrilla, Solárium, Laundry, En su Planta Baja, importante local para gastronomia boutique', 'departamento5.jpg'),
(11, 'Departamento   ', '100.200.333', 'Belgrano', 'Godoy Cruz 2300-Piso 17', '5, 4, 3', ' Buena', 'Sur, Sureste', 'no', 'cochera para 200', ' En la planta baja y en el entrepiso se ha previsto una galería comercial; los dos subsuelos están destinados a servicios generales y garages con capacidad para 200 automóviles. grandes jardins, sin piscina, solarium, gimnasio', 'departamento6.jpg'),
(12, 'Departamento    ', '100.200.333', 'Caballito', 'Av Acoyte 1200-Piso 5', '4', 'Buena', 'Noreste', 'no', 'no', 'En la planta baja hall de entrada mas departamentos y ascensor, cuenta con jardin, sin piscina, sin solarium, sin gimnasio.', 'departamento7.jpg'),
(13, 'Departamento', '2.300.567', 'Monserrat', 'Av Belgrano 270 - piso 2', '3', 'Buena', 'Norte', 'Sin Terraza', 'Sin Cochera', 'En planta baja locales Comerciales, sin cochera, hall, ascensor, sin departamentos en planta baja, departamento muy antiguo.', 'departamento8.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ph`
--

CREATE TABLE `ph` (
  `id` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `venta` varchar(50) NOT NULL,
  `barrio` varchar(50) NOT NULL,
  `calle` varchar(50) NOT NULL,
  `ambientes` varchar(20) NOT NULL,
  `condicion` varchar(30) NOT NULL,
  `orientacion` varchar(30) NOT NULL,
  `terraza` varchar(100) NOT NULL,
  `cochera` varchar(20) NOT NULL,
  `espacios` text NOT NULL,
  `imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ph`
--

INSERT INTO `ph` (`id`, `tipo`, `venta`, `barrio`, `calle`, `ambientes`, `condicion`, `orientacion`, `terraza`, `cochera`, `espacios`, `imagen`) VALUES
(14, ' ph    ', '1.300.200', 'Belgrano R', 'Tronador al 1500 - Piso 1', '5', 'Excelente', ' Noreste', 'Con terraza', '1', 'Sotano, comedor, parrilla, vestidor', 'ph1.jpg'),
(15, 'ph   ', '2.000.000', 'Belgrano C', ' Mendoza al 2700 - piso 1', '4', 'Excelente', 'Norte', 'Sin acceso a la terr', 'no', 'Biblioteca, patio, lavadero, suite', 'ph2.jpg'),
(16, 'ph       ', ' 2.400.600', 'Nuñez', 'Conde 2200-Planta Baja', '4', 'Buena', 'Este', 'Si y cuenta con balc', 'si, 10 cocheras', 'cuenta también con parrilla, terraza, baulera', 'ph3.jpeg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `casa`
--
ALTER TABLE `casa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ph`
--
ALTER TABLE `ph`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `casa`
--
ALTER TABLE `casa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `ph`
--
ALTER TABLE `ph`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
