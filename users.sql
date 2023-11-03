-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-11-2023 a las 23:29:43
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
-- Base de datos: `geshorario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `perfil_id` varchar(4) NOT NULL,
  `apellidonombre` varchar(60) NOT NULL,
  `estado_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `perfil_id`, `apellidonombre`, `estado_id`, `created_at`, `updated_at`) VALUES
(1, 'ran', 'r_niella@hotmail.com', NULL, '$2y$10$FXumDjtozyIMimQ6gIUpTuXU7vs65ZN6l6LAoLNmyH6NKmYtP1Mq.', NULL, 'ADM', 'niella rogelio', 1, '2023-08-31 04:50:53', '2023-09-01 18:49:29'),
(4, 'walter1', 'w_ramoss@gmail.com', NULL, '$2y$10$zegRQ51xIYHqe7oThNvMkePtt8MoLW0QKdGNfOF8nPOTOVI40snHi', NULL, 'PRO', 'ramos walter', 1, '2023-09-01 18:17:25', '2023-10-30 22:50:34'),
(7, 'graciela01', 'gracielarita@gmil.com', NULL, '$2y$10$e8VLBtUlRE4PURuJkt4HAeEyh5AOihjDjK9f7dUcicLyJycVZb8Gi', NULL, 'PRO', 'graciela siviero', 1, '2023-10-31 00:26:51', '2023-10-31 00:26:51');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `Name` (`name`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
