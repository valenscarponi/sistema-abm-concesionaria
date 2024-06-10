-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-06-2024 a las 20:58:37
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agenciaautomoviles2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `dni_cliente` int(11) NOT NULL,
  `apell_cliente` varchar(20) NOT NULL,
  `nomb_cliente` varchar(20) NOT NULL,
  `dom_cliente` varchar(20) NOT NULL,
  `local_cliente` varchar(20) NOT NULL,
  `ciut_cliente` varchar(20) NOT NULL,
  `telef_cliente` varchar(20) NOT NULL,
  `fec_ult_venta` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`dni_cliente`, `apell_cliente`, `nomb_cliente`, `dom_cliente`, `local_cliente`, `ciut_cliente`, `telef_cliente`, `fec_ult_venta`) VALUES
(23876459, 'Hardy', 'Jorge Luis', 'Arenales 1450', 'Totoras', '23-23876459-7', '(3476)557853', '0000-00-00'),
(30326448, 'Ibañez', 'Gabriel Emiliano', '25 de Mayo1407', 'Salto Grande', '20-30326448-6', '(3476)696437', '0000-00-00'),
(32449876, 'Ramirez', 'Ernesto Ramon', 'Uruiza 456', 'Rosario', '20-32449876-6', '(3476)694576', '0000-00-00'),
(35985123, 'Rodenas', 'Maria Eugenia', 'Las Heras 786', 'San Genaro', '23-35985123-7', '(3401)569823', '0000-00-00'),
(37987463, 'Da Silva', 'Mariana Daian', 'Urquiza 693', 'Rosario', '24-37987463-6', '(3476)606045', '0000-00-00'),
(45986213, 'Benitez', 'Cecilia Andrea', 'Pascal 483', 'Clason', '20-45986213-6', '(3476)522115', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rubros`
--

CREATE TABLE `rubros` (
  `cod_rubro` varchar(10) NOT NULL,
  `rubro` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rubros`
--

INSERT INTO `rubros` (`cod_rubro`, `rubro`) VALUES
('auto_02', '0km'),
('auto_05', 'usados'),
('chata_03', '0km'),
('chata_07', 'usados'),
('moto_04', '0km'),
('moto_08', 'usados');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `cod_vehiculo` int(11) NOT NULL,
  `desc_vehiculo` varchar(100) NOT NULL,
  `patente_vehiculo` varchar(20) NOT NULL,
  `modelo_vehiculo` int(4) NOT NULL,
  `km_vehiculo` int(11) NOT NULL,
  `fec_ing_vehiculo` date NOT NULL,
  `estado_vehiculo` varchar(10) NOT NULL,
  `precio_vehiculo` decimal(12,2) NOT NULL,
  `cod_rubro` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`cod_vehiculo`, `desc_vehiculo`, `patente_vehiculo`, `modelo_vehiculo`, `km_vehiculo`, `fec_ing_vehiculo`, `estado_vehiculo`, `precio_vehiculo`, `cod_rubro`) VALUES
(1, 'Auto Sedan', 'AA 889 KI', 2024, 0, '2018-07-22', '0 km', 22000000.00, 'auto_02'),
(2, 'Fiat Duna', 'AC 045 FR', 2017, 60000, '2018-07-22', 'usado', 15000000.00, 'auto_05'),
(3, 'Camaro', '0', 2024, 0, '2018-07-22', '0 km', 21000000.00, 'auto_02'),
(4, 'auto familiar usado', 'AE 097 HN', 2020, 40000, '2023-06-15', 'usado', 18500000.00, 'auto_05'),
(5, 'camioneta doble cabina', 'AA 070 HG', 2015, 80000, '2022-05-05', 'usado', 23000000.00, 'chata_07'),
(6, 'camioneta cabina simple', 'GBA 768', 2008, 150000, '2021-12-16', 'usado', 13000000.00, 'chata_07'),
(7, 'camioneta cabina doble', '0', 2024, 0, '2024-04-23', '0 km', 30000000.00, 'chata_03'),
(8, 'camioneta cabina simple', '0', 2024, 0, '2024-05-03', '0 KM', 26000000.00, 'chata_03'),
(9, '250cc Honda', '0', 2024, 0, '2024-02-28', '0 km', 9000000.00, 'moto_04'),
(10, '125cc Yamaha', 'AD 234 ED', 2024, 5000, '2023-07-07', 'usado', 3000000.00, 'moto_08'),
(11, '500cc Kawasaki', 'AF 789 KN', 2023, 1000000, '2024-04-23', 'usado', 15000000.00, 'moto_08'),
(12, '100cc Zanella', '0', 2024, 0, '2024-05-02', '0 KM', 8000000.00, 'moto_04'),
(29, 'Ferrari', 'AG 789 FR', 2024, 0, '2024-06-08', '0 km', 400000000.00, 'auto_02'),
(32, 'Tornado', 'AAE 789', 2024, 0, '2024-06-07', '0 km', 16000000.00, 'moto_04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `num_factura_venta` int(11) NOT NULL,
  `fecha_venta` date NOT NULL,
  `dni_cliente` int(11) NOT NULL,
  `cod_vehiculo` int(11) NOT NULL,
  `cod_rubro` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`num_factura_venta`, `fecha_venta`, `dni_cliente`, `cod_vehiculo`, `cod_rubro`) VALUES
(1001, '2022-09-15', 35985123, 8, 'chata_03'),
(1002, '2024-02-22', 32449876, 1, 'auto_02'),
(1003, '2024-03-29', 30326448, 4, 'auto_05'),
(1004, '2024-05-01', 23876459, 7, 'chata_03'),
(1005, '2024-05-01', 37987463, 10, 'moto_08'),
(1006, '2024-05-03', 45986213, 3, 'auto_02');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`dni_cliente`);

--
-- Indices de la tabla `rubros`
--
ALTER TABLE `rubros`
  ADD PRIMARY KEY (`cod_rubro`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`cod_vehiculo`),
  ADD KEY `cod_rubro` (`cod_rubro`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`num_factura_venta`),
  ADD KEY `dni_cliente` (`dni_cliente`),
  ADD KEY `cod_vehiculo` (`cod_vehiculo`),
  ADD KEY `cod_rubro` (`cod_rubro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  MODIFY `cod_vehiculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD CONSTRAINT `vehiculos_ibfk_1` FOREIGN KEY (`cod_rubro`) REFERENCES `rubros` (`cod_rubro`);

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`cod_vehiculo`) REFERENCES `vehiculos` (`cod_vehiculo`),
  ADD CONSTRAINT `ventas_ibfk_2` FOREIGN KEY (`dni_cliente`) REFERENCES `clientes` (`dni_cliente`),
  ADD CONSTRAINT `ventas_ibfk_3` FOREIGN KEY (`cod_rubro`) REFERENCES `rubros` (`cod_rubro`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
