-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-06-2023 a las 19:58:41
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbshu2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_productos`
--

CREATE TABLE `tabla_productos` (
  `id_producto` int(11) NOT NULL,
  `codigo` varchar(4) NOT NULL,
  `descripcion` varchar(60) NOT NULL,
  `precio` varchar(10) NOT NULL,
  `stock` varchar(10) NOT NULL,
  `fecha_registro` date NOT NULL,
  `imagen` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tabla_productos`
--

INSERT INTO `tabla_productos` (`id_producto`, `codigo`, `descripcion`, `precio`, `stock`, `fecha_registro`, `imagen`) VALUES
(1, '230', 'Laptop Asus 14', '$7,199', '20', '2023-06-21', 0x6c6170746f702d617375732d31342e6a7067),
(2, '235', 'HP Pavilion X360 Convertible 14', '$12,189.60', '25', '2023-06-21', 0x68702d706176696c696f6e2d31342e77656270),
(3, '240', 'Laptop Gamer Acer Nitro 5 15.6', '$23,779.99', '30', '2023-06-21', 0x616365722d6e6974726f2d352d67616d65722e77656270),
(4, '245', 'Laptop Lenovo Ideapad 3', '$9,999.00', '35', '2023-06-21', 0x6c6170746f702d6c656e6f766f2d69646561706164332e6a7067);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_users`
--

CREATE TABLE `tabla_users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pswd` varchar(40) NOT NULL,
  `estatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tabla_users`
--

INSERT INTO `tabla_users` (`id_user`, `username`, `email`, `pswd`, `estatus`) VALUES
(1, 'gdelgado', 'gerxim7865@gmail.com', '12345', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tabla_productos`
--
ALTER TABLE `tabla_productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `tabla_users`
--
ALTER TABLE `tabla_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tabla_productos`
--
ALTER TABLE `tabla_productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tabla_users`
--
ALTER TABLE `tabla_users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
