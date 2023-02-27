-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 17, 2021 at 03:53 PM
-- Server version: 5.7.33-log
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `c2140972_basket`
--

-- --------------------------------------------------------

--
-- Table structure for table `carrito`
--

CREATE TABLE `carrito` (
  `id` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` double NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(400) NOT NULL,
  `imagen` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `descripcion`, `imagen`) VALUES
(1, 'Mujeres', 'Ropar para dama', 'women.jpg'),
(2, 'Hombres', 'Ropa para hombre', 'men.jpg'),
(3, 'Niños', 'Ropa para niños', 'children.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(300) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` double NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `inventario` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `talla` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `imagen`, `inventario`, `id_categoria`, `talla`, `color`) VALUES
(1, 'Tank Top', 'Finding perfect t-shirt', 60, 'cloth_1.jpg', 21, 3, 'XL', 'white'),
(2, 'Corater', 'Finding perfect products', 20, 'shoe_1.jpg', -21, 2, '25.5', 'blue'),
(3, 'producto 0', 'esta es la descripcion', 2023, 'cintas.png', 78, 1, 'XL', 'blue'),
(4, 'producto 1', 'esta es la descripcion', 667, 'cintas.png', 81, 1, 'XL', 'blue'),
(5, 'producto 2', 'esta es la descripcion', 778, 'cintas.png', 14, 1, 'XL', 'blue'),
(6, 'producto 3', 'esta es la descripcion', 1139, 'cintas.png', 64, 1, 'XL', 'blue'),
(7, 'producto 4', 'esta es la descripcion', 1717, 'cintas.png', 82, 1, 'XL', 'blue'),
(8, 'producto 5', 'esta es la descripcion', 961, 'cintas.png', 86, 1, 'XL', 'blue'),
(9, 'producto 6', 'esta es la descripcion', 404, 'cintas.png', 74, 1, 'XL', 'blue'),
(10, 'producto 7', 'esta es la descripcion', 1790, 'cintas.png', 30, 1, 'XL', 'blue'),
(11, 'producto 8', 'esta es la descripcion', 814, 'cintas.png', 4, 1, 'XL', 'blue'),
(12, 'producto 9', 'esta es la descripcion', 1283, 'cintas.png', 17, 1, 'XL', 'blue'),
(13, 'producto 10', 'esta es la descripcion', 1598, 'cintas.png', 1, 1, 'XL', 'blue'),
(14, 'producto 11', 'esta es la descripcion', 706, 'cintas.png', 56, 1, 'XL', 'blue'),
(15, 'producto 12', 'esta es la descripcion', 1167, 'cintas.png', 31, 1, 'XL', 'blue'),
(16, 'producto 13', 'esta es la descripcion', 1175, 'cintas.png', 9, 1, 'XL', 'blue'),
(17, 'producto 14', 'esta es la descripcion', 2965, 'cintas.png', 56, 1, 'XL', 'blue'),
(18, 'producto 15', 'esta es la descripcion', 320, 'cintas.png', 37, 1, 'XL', 'blue'),
(19, 'producto 16', 'esta es la descripcion', 369, 'cintas.png', 36, 1, 'XL', 'blue'),
(20, 'producto 17', 'esta es la descripcion', 1520, 'cintas.png', 92, 1, 'XL', 'blue'),
(21, 'producto 18', 'esta es la descripcion', 1659, 'cintas.png', 52, 1, 'XL', 'blue'),
(22, 'producto 19', 'esta es la descripcion', 300, 'cintas.png', 67, 1, 'XL', 'blue'),
(23, 'producto 20', 'esta es la descripcion', 944, 'cintas.png', 22, 1, 'XL', 'blue'),
(24, 'producto 21', 'esta es la descripcion', 1489, 'cintas.png', 49, 1, 'XL', 'blue'),
(25, 'producto 22', 'esta es la descripcion', 1106, 'cintas.png', 5, 1, 'XL', 'blue'),
(26, 'producto 23', 'esta es la descripcion', 361, 'cintas.png', 68, 1, 'XL', 'blue'),
(27, 'producto 24', 'esta es la descripcion', 964, 'cintas.png', 31, 1, 'XL', 'blue'),
(28, 'producto 25', 'esta es la descripcion', 2202, 'cintas.png', 94, 1, 'XL', 'blue'),
(29, 'producto 26', 'esta es la descripcion', 2746, 'cintas.png', 48, 1, 'XL', 'blue'),
(30, 'producto 27', 'esta es la descripcion', 877, 'cintas.png', 45, 1, 'XL', 'blue'),
(31, 'producto 28', 'esta es la descripcion', 455, 'cintas.png', 72, 1, 'XL', 'blue'),
(32, 'producto 29', 'esta es la descripcion', 1947, 'cintas.png', 86, 1, 'XL', 'blue'),
(33, 'producto 30', 'esta es la descripcion', 1372, 'cintas.png', 85, 1, 'XL', 'blue'),
(34, 'producto 31', 'esta es la descripcion', 1137, 'cintas.png', 93, 1, 'XL', 'blue'),
(35, 'producto 32', 'esta es la descripcion', 620, 'cintas.png', 38, 1, 'XL', 'blue'),
(36, 'producto 33', 'esta es la descripcion', 2673, 'cintas.png', 71, 1, 'XL', 'blue'),
(37, 'producto 34', 'esta es la descripcion', 194, 'cintas.png', 36, 1, 'XL', 'blue'),
(38, 'producto 35', 'esta es la descripcion', 2889, 'cintas.png', 43, 1, 'XL', 'blue'),
(39, 'producto 36', 'esta es la descripcion', 1851, 'cintas.png', 81, 1, 'XL', 'blue'),
(40, 'producto 37', 'esta es la descripcion', 2677, 'cintas.png', 60, 1, 'XL', 'blue'),
(41, 'producto 38', 'esta es la descripcion', 2358, 'cintas.png', 46, 1, 'XL', 'blue'),
(42, 'producto 39', 'esta es la descripcion', 2283, 'cintas.png', 47, 1, 'XL', 'blue'),
(43, 'producto 40', 'esta es la descripcion', 2560, 'cintas.png', 46, 1, 'XL', 'blue'),
(44, 'producto 41', 'esta es la descripcion', 202, 'cintas.png', 68, 1, 'XL', 'blue'),
(45, 'producto 42', 'esta es la descripcion', 2967, 'cintas.png', 33, 1, 'XL', 'blue'),
(46, 'producto 43', 'esta es la descripcion', 2636, 'cintas.png', 10, 1, 'XL', 'blue'),
(47, 'producto 44', 'esta es la descripcion', 138, 'cintas.png', 89, 1, 'XL', 'blue'),
(48, 'producto 45', 'esta es la descripcion', 2164, 'cintas.png', 68, 1, 'XL', 'blue'),
(49, 'producto 46', 'esta es la descripcion', 1829, 'cintas.png', 12, 1, 'XL', 'blue'),
(50, 'producto 47', 'esta es la descripcion', 509, 'cintas.png', 1, 1, 'XL', 'blue'),
(201, 'producto 48', 'esta es la descripcion', 2966, 'cintas.png', 42, 1, 'XL', 'blue'),
(202, 'producto 49', 'esta es la descripcion', 1329, 'cintas.png', 20, 1, 'XL', 'blue');

-- --------------------------------------------------------

--
-- Table structure for table `productos_venta`
--

CREATE TABLE `productos_venta` (
  `id` int(11) NOT NULL,
  `id_venta` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` double NOT NULL,
  `precio` double NOT NULL,
  `subtotal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productos_venta`
--

INSERT INTO `productos_venta` (`id`, `id_venta`, `id_producto`, `cantidad`, `precio`, `subtotal`) VALUES
(1, 1, 2, 3, 20, 60),
(2, 2, 2, 3, 20, 60),
(3, 2, 1, 1, 60, 60),
(4, 3, 2, 3, 20, 60),
(5, 3, 1, 1, 60, 60),
(6, 4, 2, 3, 20, 60),
(7, 4, 1, 1, 60, 60),
(8, 5, 2, 3, 20, 60),
(9, 5, 1, 1, 60, 60),
(10, 6, 2, 3, 20, 60),
(11, 6, 1, 1, 60, 60),
(12, 7, 2, 3, 20, 60),
(13, 7, 1, 1, 60, 60),
(14, 8, 2, 3, 20, 60),
(15, 8, 1, 1, 60, 60),
(16, 9, 3, 1, 2023, 2023),
(17, 10, 3, 1, 2023, 2023),
(18, 11, 3, 1, 2023, 2023),
(19, 12, 1, 1, 60, 60),
(20, 13, 3, 1, 2023, 2023),
(21, 13, 1, 1, 60, 60),
(22, 14, 3, 2, 2023, 4046),
(23, 15, 3, 1, 2023, 2023),
(24, 16, 4, 1, 667, 667),
(25, 17, 4, 1, 667, 667),
(26, 18, 3, 1, 2023, 2023),
(27, 19, 3, 1, 2023, 2023),
(28, 21, 3, 1, 2023, 2023);

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `id_ship` int(11) NOT NULL,
  `country` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `state` varchar(50) NOT NULL,
  `cp` varchar(30) NOT NULL,
  `id_venta` int(10) NOT NULL,
  `apartment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`id_ship`, `country`, `company`, `address`, `state`, `cp`, `id_venta`, `apartment`) VALUES
(1, 'Algeria', 'carmen comercio', '64 agamenon road', 'england', 'nw61eh', 10, ''),
(2, 'bangladesh', 'carmen comercio', '64 agamenon road', 'england', 'nw61eh', 11, ''),
(3, 'bangladesh', 'carmen comercio', '64 agamenon road', 'england', 'nw61eh', 12, ''),
(4, 'bangladesh', 'carmen comercio', '64 agamenon road', 'england', 'nw61eh', 13, ''),
(5, 'bangladesh', 'carmen comercio', '64 agamenon road', 'london', 'nw61eh', 14, ''),
(6, 'bangladesh', 'carmen comercio', '64 agamenon road', 'england', 'nw61eh', 15, ''),
(7, 'bangladesh', 'carmen comercio', '64 agamenon road', 'england', 'nw61eh', 16, ''),
(8, 'bangladesh', 'carmen comercio', '64 agamenon road', 'england', 'nw61eh', 17, ''),
(9, 'bangladesh', 'carmen comercio', '64 agamenon road', 'england', 'nw61eh', 18, ''),
(10, 'bangladesh', 'carmen comercio', '64 agamenon road', 'england', 'nw61eh', 19, ''),
(11, 'bangladesh', 'carmen comercio', '64 agamenon road', 'england', 'nw61eh', 20, ''),
(12, 'bangladesh', 'carmen comercio', '64 agamenon road', 'england', 'nw61eh', 21, '');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `telefono` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `img_perfil` varchar(300) NOT NULL,
  `nivel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `telefono`, `email`, `password`, `img_perfil`, `nivel`) VALUES
(1, 'winnie alessandra', '07378553493', 'fax_38@hotmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '1.jpg', 'admin'),
(2, 'winnie alessandra', '07378553493', 'fax_38@hotmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '1.jpg', 'admin'),
(3, 'winnie alessandra', '07378553493', 'fax_38@hotmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '1.jpg', 'admin'),
(4, 'winnie alessandra', '07378553493', 'fax_38@hotmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '1.jpg', 'admin'),
(5, 'winnie alessandra', '07378553493', 'fax_38@hotmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '1.jpg', 'admin'),
(6, 'winnie alessandra', '07378553493', 'fax_38@hotmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '1.jpg', 'admin'),
(7, 'winnie alessandra', '07378553493', 'fax_38@hotmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '1.jpg', 'admin'),
(8, 'winnie alessandra', '07378553493', 'fax_38@hotmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '1.jpg', 'admin'),
(9, 'winnie alessandra', '07378553493', 'fax_38@hotmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '1.jpg', 'admin'),
(10, 'winnie alessandra', '07378553493', 'fax_38@hotmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '1.jpg', 'admin'),
(11, 'winnie alessandra', '07378553493', 'fax_38@hotmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '1.jpg', 'admin'),
(12, 'winnie alessandra', '07378553493', 'fax_38@hotmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '1.jpg', 'admin'),
(13, 'winnie alessandra', '07378553493', 'fax_38@hotmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '1.jpg', 'admin'),
(14, 'winnie alessandra', '07378553493', 'fax_38@hotmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '1.jpg', 'admin'),
(15, 'winnie alessandra', '07378553493', 'fax_38@hotmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '1.jpg', 'admin'),
(16, 'winnie alessandra', '07378553493', 'fax_38@hotmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '1.jpg', 'admin'),
(17, 'winnie alessandra', '07378553493', 'fax_38@hotmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '1.jpg', 'admin'),
(18, 'winnie alessandra', '07378553493', 'fax_38@hotmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '1.jpg', 'admin'),
(19, 'winnie alessandra', '07378553493', 'fax_38@hotmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '1.jpg', 'admin'),
(20, 'winnie alessandra', '07378553493', 'fax_38@hotmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '1.jpg', 'admin'),
(21, 'winnie alessandra', '07378553493', 'fax_38@hotmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '1.jpg', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `total` double NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ventas`
--

INSERT INTO `ventas` (`id`, `id_usuario`, `total`, `fecha`) VALUES
(1, 1, 60, '2021-02-19 04:02:46'),
(2, 2, 120, '2021-02-22 11:02:39'),
(3, 3, 120, '2021-02-22 11:02:09'),
(4, 4, 120, '2021-02-22 11:02:07'),
(5, 5, 120, '2021-02-22 11:02:12'),
(6, 6, 120, '2021-02-22 11:02:27'),
(7, 7, 120, '2021-02-22 11:02:30'),
(8, 8, 120, '2021-02-22 12:02:40'),
(9, 9, 2023, '2021-02-22 12:02:47'),
(10, 10, 2023, '2021-02-22 12:02:04'),
(11, 11, 2023, '2021-02-22 12:02:24'),
(12, 12, 60, '2021-02-22 12:02:35'),
(13, 13, 2083, '2021-02-22 12:02:56'),
(14, 14, 4046, '2021-02-24 13:02:37'),
(15, 15, 2023, '2021-02-24 13:02:00'),
(16, 16, 667, '2021-02-24 13:02:04'),
(17, 17, 667, '2021-02-24 13:02:25'),
(18, 18, 2023, '2021-02-24 14:02:58'),
(19, 19, 2023, '2021-02-24 14:02:08'),
(20, 20, 0, '2021-02-24 14:02:03'),
(21, 21, 2023, '2021-02-24 14:02:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productos_venta`
--
ALTER TABLE `productos_venta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`id_ship`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- AUTO_INCREMENT for table `productos_venta`
--
ALTER TABLE `productos_venta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `id_ship` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
