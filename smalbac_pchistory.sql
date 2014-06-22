-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 22-06-2014 a las 17:22:33
-- Versión del servidor: 5.5.34-MariaDB-cll-lve
-- Versión de PHP: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `smalbac_pchistory`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accesories`
--

CREATE TABLE IF NOT EXISTS `accesories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `capacity` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `unity` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=40 ;

--
-- Volcado de datos para la tabla `accesories`
--

INSERT INTO `accesories` (`id`, `name`, `description`, `capacity`, `photo`, `unity`, `state`, `created_at`, `updated_at`) VALUES
(1, 'Disco duro', 'none', '500', NULL, 'GB', 'active', '2014-05-26 05:44:15', '2014-05-26 05:44:15'),
(2, 'Procesador intel i3', 'none', '2.5', NULL, 'MgH', 'active', '2014-05-26 05:44:15', '2014-05-26 05:44:15'),
(3, 'Board Asrock', 'none', '3000', NULL, 'MgH', 'active', '2014-05-26 05:44:15', '2014-05-26 05:44:15'),
(4, 'Memoria DDR 1', 'none', '1', NULL, 'GB', 'active', '2014-05-26 05:44:15', '2014-05-26 05:44:15'),
(5, 'Memoria DDR 2', 'none', '1', NULL, 'Gb', 'active', '2014-05-26 05:44:15', '2014-05-26 05:44:15'),
(6, 'Board Foxccon', 'none', '3000', NULL, 'MgH', 'active', '2014-05-26 05:44:15', '2014-05-26 05:44:15'),
(7, 'Memoria DDR 2', '', '2', NULL, 'GB', 'active', '2014-05-29 09:00:00', '2014-05-29 09:00:00'),
(8, 'Memoria DDR 3', '', '1', NULL, 'GB', 'active', '2014-05-29 09:00:00', '2014-05-29 09:00:00'),
(9, 'Memoria DDR 3', '', '2', NULL, 'GB', 'active', '2014-05-29 09:00:00', '2014-05-29 09:00:00'),
(10, 'Memoria DDR 3', '', '4', NULL, 'GB', 'active', '2014-05-29 09:00:00', '2014-05-29 09:00:00'),
(11, 'Disco duro', 'none', '250', NULL, 'GB', 'active', '2014-05-26 05:44:15', '2014-05-26 05:44:15'),
(12, 'Procesador intel pentium 4', 'none', '0', NULL, 'MgH', 'active', '2014-05-26 05:44:15', '2014-05-26 05:44:15'),
(13, 'Monitor', '', '-', NULL, 'u', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Mouse', '', '-', NULL, 'u', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Teclado', '', '-', NULL, 'u', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Pad Mouse', '', '-', NULL, 'u', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'Estabilizador', '', '-', NULL, 'u', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'UPS', '', '-', NULL, 'u', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'Procesador Intel Dual Core', 'none', '0', NULL, 'MgH', 'active', '2014-05-26 05:44:15', '2014-05-26 05:44:15'),
(20, 'Board MSI', 'none', '0', NULL, 'MgH', 'active', '2014-05-26 05:44:15', '2014-05-26 05:44:15'),
(21, 'Board Intel', 'none', '0', NULL, 'MgH', 'active', '2014-05-26 05:44:15', '2014-05-26 05:44:15'),
(22, 'Board HP', 'none', '0', NULL, 'MgH', 'active', '2014-05-26 05:44:15', '2014-05-26 05:44:15'),
(23, 'Procesador AMD', 'none', '2.5', NULL, 'MgH', 'active', '2014-05-26 05:44:15', '2014-05-26 05:44:15'),
(24, 'Procesador intel Pentium', 'none', '2.5', NULL, 'MgH', 'active', '2014-05-26 05:44:15', '2014-05-26 05:44:15'),
(25, 'Disco duro', 'none', '1', NULL, 'TB', 'active', '2014-05-26 05:44:15', '2014-05-26 05:44:15'),
(26, 'Board Lenovo', 'none', '0', NULL, 'MgH', 'active', '2014-05-26 05:44:15', '2014-05-26 05:44:15'),
(27, 'Camara web', 'none', 'o', NULL, 'u', 'active', '2014-05-26 05:44:15', '2014-05-26 05:44:15'),
(28, 'Procesador intel Celeron', 'none', '0', NULL, 'MgH', 'active', '2014-05-26 05:44:15', '2014-05-26 05:44:15'),
(29, 'Board Biostar', 'none', '0', NULL, 'MgH', 'active', '2014-05-26 05:44:15', '2014-05-26 05:44:15'),
(30, 'Disco duro', 'none', '750', NULL, 'GB', 'active', '2014-05-26 05:44:15', '2014-05-26 05:44:15'),
(31, 'Board ECS', 'none', '0', NULL, 'MgH', 'active', '2014-05-26 05:44:15', '2014-05-26 05:44:15'),
(32, 'Procesador intel i5', 'none', '', NULL, 'MgH', 'active', '2014-05-26 05:44:15', '2014-05-26 05:44:15'),
(33, 'Board Dell Vostro', 'none', '470', NULL, 'MgH', 'active', '2014-05-26 05:44:15', '2014-05-26 05:44:15'),
(34, 'Procesador Intel 2 Duo', 'none', '0', NULL, 'MgH', 'active', '2014-05-26 05:44:15', '2014-05-26 05:44:15'),
(35, 'Disco duro', 'none', '320', NULL, 'GB', 'active', '2014-05-26 05:44:15', '2014-05-26 05:44:15'),
(36, 'Cargador de portatil', 'none', '', NULL, '', 'active', '2014-05-26 05:44:15', '2014-05-26 05:44:15'),
(37, 'Disco duro', 'none', '160', NULL, 'GB', 'active', '2014-05-26 05:44:15', '2014-05-26 05:44:15'),
(38, 'Disco Duro ', '-', '2Tb', NULL, 'u', '', '2014-06-16 16:40:49', '2014-06-16 16:40:49'),
(39, 'Procesadir inten atom', '-', '-', NULL, 'u', '', '2014-06-16 14:59:42', '2014-06-16 14:59:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accesory_pcs`
--

CREATE TABLE IF NOT EXISTS `accesory_pcs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `accesory_id` int(10) unsigned NOT NULL,
  `pc_id` int(10) unsigned NOT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `serial` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=186 ;

--
-- Volcado de datos para la tabla `accesory_pcs`
--

INSERT INTO `accesory_pcs` (`id`, `accesory_id`, `pc_id`, `value`, `description`, `state`, `serial`, `created_at`, `updated_at`) VALUES
(40, 7, 21, '1', '', 'active', NULL, '2014-05-30 00:02:53', '2014-05-30 00:02:53'),
(41, 6, 21, '1', '945GZ7MC (Lucknow)', 'active', NULL, '2014-05-30 00:03:41', '2014-05-30 00:03:41'),
(42, 11, 21, '1', 'Hitachi', 'active', NULL, '2014-05-30 00:06:39', '2014-05-30 00:06:39'),
(43, 12, 21, '1', '641', 'active', NULL, '2014-05-30 00:10:59', '2014-05-30 00:10:59'),
(44, 13, 21, '1', 'Compaq fp 1707', 'active', NULL, '2014-05-30 00:13:15', '2014-05-30 00:13:15'),
(45, 14, 21, '1', 'Mega', 'active', NULL, '2014-05-30 00:16:02', '2014-05-30 00:16:02'),
(46, 15, 21, '1', 'Genius', 'active', NULL, '2014-05-30 00:16:19', '2014-05-30 00:16:19'),
(47, 16, 21, '1', '', 'active', NULL, '2014-05-30 00:16:42', '2014-05-30 00:16:42'),
(48, 17, 21, '1', '', 'active', NULL, '2014-05-30 00:16:58', '2014-05-30 00:16:58'),
(49, 18, 21, '1', '', 'active', NULL, '2014-05-30 00:17:07', '2014-05-30 00:17:07'),
(50, 1, 22, '1', '', 'active', NULL, '2014-05-30 00:25:38', '2014-05-30 00:25:38'),
(51, 9, 22, '1', '', 'active', NULL, '2014-05-30 00:26:23', '2014-05-30 00:26:23'),
(52, 19, 22, '1', 'E5700', 'active', NULL, '2014-05-30 00:27:56', '2014-05-30 00:27:56'),
(53, 20, 22, '1', 'msig41', 'active', NULL, '2014-05-30 00:28:41', '2014-05-30 00:28:41'),
(54, 13, 22, '1', 'Samsumg 19"', 'active', NULL, '2014-05-30 00:29:11', '2014-05-30 00:29:11'),
(55, 15, 22, '1', 'Compaq', 'active', NULL, '2014-05-30 00:29:53', '2014-05-30 00:29:53'),
(56, 14, 22, '1', 'Genius', 'active', NULL, '2014-05-30 00:30:09', '2014-05-30 00:30:09'),
(57, 17, 22, '1', '', 'active', NULL, '2014-05-30 00:30:37', '2014-05-30 00:30:37'),
(58, 1, 23, '1', 'Hitachi', 'active', NULL, '2014-05-30 00:35:53', '2014-05-30 00:35:53'),
(59, 9, 23, '1', '', 'active', NULL, '2014-05-30 00:36:17', '2014-05-30 00:36:17'),
(60, 21, 23, '1', 'AGTL', 'active', NULL, '2014-05-30 00:37:08', '2014-05-30 00:37:08'),
(61, 19, 23, '1', 'E5300', 'active', NULL, '2014-05-30 00:37:58', '2014-05-30 00:37:58'),
(62, 13, 23, '1', 'Compaq 19"', 'active', NULL, '2014-05-30 00:38:28', '2014-05-30 00:38:28'),
(63, 14, 23, '1', '', 'active', NULL, '2014-05-30 00:39:07', '2014-05-30 00:39:07'),
(64, 15, 23, '1', 'Genius', 'active', NULL, '2014-05-30 00:39:25', '2014-05-30 00:39:25'),
(65, 18, 23, '1', '', 'active', NULL, '2014-05-30 00:39:45', '2014-05-30 00:39:45'),
(66, 22, 24, '1', '2b00', 'active', NULL, '2014-05-30 00:55:50', '2014-05-30 00:55:50'),
(67, 10, 24, '1', '', 'active', NULL, '2014-05-30 00:56:15', '2014-05-30 00:56:15'),
(68, 1, 24, '1', '', 'active', NULL, '2014-05-30 00:58:16', '2014-05-30 00:58:16'),
(69, 23, 24, '1', 'K140', 'active', NULL, '2014-05-30 00:59:18', '2014-05-30 00:59:18'),
(70, 13, 24, '1', 'HP 18" all in one', 'active', NULL, '2014-05-30 01:00:09', '2014-05-30 01:00:09'),
(71, 15, 24, '1', 'HP ', 'active', NULL, '2014-05-30 01:00:36', '2014-05-30 01:00:36'),
(72, 14, 24, '1', 'HP ', 'active', NULL, '2014-05-30 01:00:51', '2014-05-30 01:00:51'),
(73, 16, 24, '1', '', 'active', NULL, '2014-05-30 01:01:03', '2014-05-30 01:01:03'),
(74, 18, 24, '1', 'Inventario: 132', 'active', NULL, '2014-05-30 01:01:32', '2014-05-30 01:01:32'),
(75, 10, 25, '1', '', 'active', NULL, '2014-05-30 01:12:43', '2014-05-30 01:12:43'),
(76, 25, 25, '1', '', 'active', NULL, '2014-05-30 01:17:11', '2014-05-30 01:17:11'),
(77, 26, 25, '1', 'sharkbay', 'active', NULL, '2014-05-30 01:19:07', '2014-05-30 01:19:07'),
(78, 13, 25, '1', 'Lenovo All in One 21.5#', 'active', NULL, '2014-05-30 01:19:57', '2014-05-30 01:19:57'),
(79, 27, 25, '1', 'Integrada All in One', 'active', NULL, '2014-05-30 01:20:43', '2014-05-30 01:20:43'),
(80, 15, 25, '1', 'Lenovo Original', 'active', NULL, '2014-05-30 01:21:06', '2014-05-30 01:21:06'),
(81, 14, 25, '1', 'Lenovo Original', 'active', NULL, '2014-05-30 01:21:18', '2014-05-30 01:21:18'),
(82, 16, 25, '1', '', 'active', NULL, '2014-05-30 01:21:28', '2014-05-30 01:21:28'),
(83, 18, 25, '1', '', 'active', NULL, '2014-05-30 01:21:45', '2014-05-30 01:21:45'),
(84, 1, 26, '1', '', 'active', NULL, '2014-05-30 01:32:55', '2014-05-30 01:32:55'),
(85, 9, 26, '1', '', 'active', NULL, '2014-05-30 01:33:34', '2014-05-30 01:33:34'),
(86, 28, 26, '1', '', 'active', NULL, '2014-05-30 01:34:52', '2014-05-30 01:34:52'),
(87, 29, 26, '1', 'g41d3c', 'active', NULL, '2014-05-30 01:35:53', '2014-05-30 01:35:53'),
(88, 13, 26, '1', 'Samsumg 19"', 'active', NULL, '2014-05-30 01:36:20', '2014-05-30 01:36:20'),
(89, 15, 26, '1', 'Genius', 'active', NULL, '2014-05-30 01:36:36', '2014-05-30 01:36:36'),
(90, 14, 26, '1', 'Genius', 'trash', NULL, '2014-05-30 01:36:51', '2014-05-30 01:37:01'),
(91, 14, 26, '1', 'Lenovo', 'active', NULL, '2014-05-30 01:37:09', '2014-05-30 01:37:09'),
(92, 30, 27, '1', '', 'active', NULL, '2014-05-30 01:44:47', '2014-05-30 01:44:47'),
(93, 9, 27, '1', '', 'active', NULL, '2014-05-30 01:45:14', '2014-05-30 01:45:14'),
(94, 28, 27, '1', 'g450', 'active', NULL, '2014-05-30 01:45:41', '2014-05-30 01:45:41'),
(95, 31, 27, '1', 'H61H2-M12', 'active', NULL, '2014-05-30 01:51:54', '2014-05-30 01:51:54'),
(96, 13, 27, '1', 'LG 19"', 'active', NULL, '2014-05-30 01:52:22', '2014-05-30 01:52:22'),
(97, 14, 27, '1', 'Genius', 'active', NULL, '2014-05-30 01:52:41', '2014-05-30 01:52:41'),
(98, 16, 27, '1', '', 'active', NULL, '2014-05-30 01:52:48', '2014-05-30 01:52:48'),
(99, 15, 27, '1', 'Genius', 'active', NULL, '2014-05-30 01:53:03', '2014-05-30 01:53:03'),
(100, 18, 27, '1', '', 'active', NULL, '2014-05-30 01:53:18', '2014-05-30 01:53:18'),
(101, 25, 28, '1', 'wenster digital', 'active', NULL, '2014-06-10 22:32:33', '2014-06-10 22:32:33'),
(102, 25, 28, '1', 'wenster digital--Insertado por segundaves por error', 'trash', NULL, '2014-06-10 22:32:40', '2014-06-10 22:34:09'),
(103, 10, 28, '1', '', 'active', NULL, '2014-06-11 19:35:59', '2014-06-11 19:35:59'),
(104, 32, 28, '1', '4350', 'active', NULL, '2014-06-11 19:36:53', '2014-06-11 19:36:53'),
(105, 33, 28, '1', '', 'active', NULL, '2014-06-11 19:37:49', '2014-06-11 19:37:49'),
(106, 11, 29, '1', '', 'active', NULL, '2014-06-11 19:41:30', '2014-06-11 19:41:30'),
(107, 7, 29, '1', '', 'active', NULL, '2014-06-11 19:41:44', '2014-06-11 19:41:44'),
(108, 34, 29, '1', '', 'active', NULL, '2014-06-11 19:42:34', '2014-06-11 19:42:34'),
(109, 26, 29, '1', 'MAHOBAY', 'active', NULL, '2014-06-11 19:42:58', '2014-06-11 19:42:58'),
(110, 13, 29, '1', 'LG 14"', 'active', NULL, '2014-06-11 19:43:25', '2014-06-11 19:43:25'),
(111, 14, 29, '1', '', 'active', NULL, '2014-06-11 19:43:36', '2014-06-11 19:43:36'),
(112, 15, 29, '1', '', 'active', NULL, '2014-06-11 19:43:46', '2014-06-11 19:43:46'),
(113, 1, 30, '1', 'Hitachi', 'active', NULL, '2014-06-11 19:46:07', '2014-06-11 19:46:07'),
(114, 9, 30, '1', '', 'active', NULL, '2014-06-11 19:46:29', '2014-06-11 19:46:29'),
(115, 23, 30, '1', 'E-450', 'active', NULL, '2014-06-11 19:47:33', '2014-06-11 19:47:33'),
(116, 6, 30, '1', '2ACA', 'active', NULL, '2014-06-11 19:47:56', '2014-06-11 19:47:56'),
(117, 13, 30, '1', 'BENQ 14"', 'active', NULL, '2014-06-11 19:48:14', '2014-06-11 19:48:14'),
(118, 14, 30, '1', '', 'active', NULL, '2014-06-11 19:48:22', '2014-06-11 19:48:22'),
(119, 15, 30, '1', '', 'active', NULL, '2014-06-11 19:48:30', '2014-06-11 19:48:30'),
(120, 1, 31, '1', 'hitachi', 'active', NULL, '2014-06-11 19:52:22', '2014-06-11 19:52:22'),
(121, 9, 31, '1', 'hitachi', 'active', NULL, '2014-06-11 19:52:41', '2014-06-11 19:52:41'),
(122, 23, 31, '1', 'E-450', 'active', NULL, '2014-06-11 19:53:02', '2014-06-11 19:53:02'),
(123, 6, 31, '1', '2ACA', 'active', NULL, '2014-06-11 19:53:17', '2014-06-11 19:53:17'),
(124, 13, 31, '1', 'BENQ 14"', 'active', NULL, '2014-06-11 19:53:32', '2014-06-11 19:53:32'),
(125, 14, 31, '1', '', 'active', NULL, '2014-06-11 19:53:45', '2014-06-11 19:53:45'),
(126, 15, 31, '1', '', 'active', NULL, '2014-06-11 19:53:53', '2014-06-11 19:53:53'),
(127, 1, 32, '1', 'Segeate', 'active', NULL, '2014-06-11 19:56:08', '2014-06-11 19:56:08'),
(128, 9, 32, '1', '', 'active', NULL, '2014-06-11 19:56:22', '2014-06-11 19:56:22'),
(129, 23, 32, '1', 'E-450', 'active', NULL, '2014-06-11 19:56:45', '2014-06-11 19:56:45'),
(130, 6, 32, '1', '2ACA', 'active', NULL, '2014-06-11 19:56:58', '2014-06-11 19:56:58'),
(131, 13, 32, '1', '14" all in one', 'active', NULL, '2014-06-11 19:57:20', '2014-06-11 19:57:20'),
(132, 15, 32, '1', '', 'active', NULL, '2014-06-11 19:57:34', '2014-06-11 19:57:34'),
(133, 14, 32, '1', '', 'active', NULL, '2014-06-11 19:57:42', '2014-06-11 19:57:42'),
(134, 1, 33, '1', 'Toshiba', 'active', NULL, '2014-06-12 19:02:44', '2014-06-12 19:02:44'),
(135, 5, 33, '1', '', 'active', NULL, '2014-06-12 19:03:04', '2014-06-12 19:03:04'),
(136, 24, 33, '1', '', 'active', NULL, '2014-06-12 19:03:18', '2014-06-12 19:03:18'),
(137, 6, 33, '1', '', 'active', NULL, '2014-06-12 19:03:31', '2014-06-12 19:03:31'),
(138, 13, 33, '1', 'BENQ 14"', 'active', NULL, '2014-06-12 19:03:50', '2014-06-12 19:03:50'),
(139, 14, 33, '1', '', 'active', NULL, '2014-06-12 19:04:02', '2014-06-12 19:04:02'),
(140, 15, 33, '1', '', 'active', NULL, '2014-06-12 19:04:21', '2014-06-12 19:04:21'),
(141, 1, 34, '1', 'SEAGATE', 'active', NULL, '2014-06-12 19:07:02', '2014-06-12 19:07:02'),
(142, 9, 34, '1', '', 'active', NULL, '2014-06-12 19:07:15', '2014-06-12 19:07:15'),
(143, 23, 34, '1', 'E-450', 'active', NULL, '2014-06-12 19:07:30', '2014-06-12 19:07:30'),
(144, 6, 34, '1', '2ACA', 'active', NULL, '2014-06-12 19:07:52', '2014-06-12 19:07:52'),
(145, 13, 34, '1', 'BENQ 14"', 'active', NULL, '2014-06-12 19:08:08', '2014-06-12 19:08:08'),
(146, 14, 34, '1', '', 'active', NULL, '2014-06-12 19:08:13', '2014-06-12 19:08:13'),
(147, 15, 34, '1', '', 'active', NULL, '2014-06-12 19:08:27', '2014-06-12 19:08:27'),
(148, 35, 35, '1', '', 'active', NULL, '2014-06-12 19:12:41', '2014-06-12 19:12:41'),
(149, 9, 35, '1', '', 'active', NULL, '2014-06-12 19:12:54', '2014-06-12 19:12:54'),
(150, 2, 35, '1', ' 3210', 'active', NULL, '2014-06-12 19:13:57', '2014-06-12 19:13:57'),
(151, 13, 35, '1', '14"', 'active', NULL, '2014-06-12 19:14:22', '2014-06-12 19:14:22'),
(152, 14, 35, '1', '', 'active', NULL, '2014-06-12 19:14:29', '2014-06-12 19:14:29'),
(153, 15, 35, '1', '', 'active', NULL, '2014-06-12 19:14:41', '2014-06-12 19:14:41'),
(154, 36, 35, '1', '', 'active', NULL, '2014-06-12 19:16:56', '2014-06-12 19:16:56'),
(155, 37, 36, '1', 'SEAGATE', 'active', NULL, '2014-06-12 19:22:06', '2014-06-12 19:22:06'),
(156, 23, 36, '1', ' E-450', 'active', NULL, '2014-06-12 19:22:29', '2014-06-12 19:22:29'),
(157, 13, 36, '1', 'SAMSUMG 14"', 'active', NULL, '2014-06-12 19:22:46', '2014-06-12 19:22:46'),
(158, 14, 36, '1', '', 'active', NULL, '2014-06-12 19:22:58', '2014-06-12 19:22:58'),
(159, 15, 36, '1', '', 'active', NULL, '2014-06-12 19:23:10', '2014-06-12 19:23:10'),
(160, 1, 37, '1', 'Hitachi', 'active', NULL, '2014-06-16 16:16:41', '2014-06-16 16:16:41'),
(161, 9, 37, '1', '', 'active', NULL, '2014-06-16 16:17:02', '2014-06-16 16:17:02'),
(162, 23, 37, '1', 'E-450', 'active', NULL, '2014-06-16 16:17:23', '2014-06-16 16:17:23'),
(163, 13, 37, '1', 'COMPAQ 14"', 'active', NULL, '2014-06-16 16:17:49', '2014-06-16 16:17:49'),
(164, 14, 37, '1', '', 'active', NULL, '2014-06-16 16:18:00', '2014-06-16 16:18:00'),
(165, 15, 37, '1', '', 'active', NULL, '2014-06-16 16:18:12', '2014-06-16 16:18:12'),
(166, 38, 38, '1', '', 'active', NULL, '2014-06-16 16:40:54', '2014-06-16 16:40:54'),
(167, 2, 38, '1', '', 'active', NULL, '2014-06-16 16:41:12', '2014-06-16 16:41:12'),
(168, 26, 38, '1', 'h250s', 'active', NULL, '2014-06-16 16:41:45', '2014-06-16 16:41:45'),
(169, 9, 38, '1', '', 'active', NULL, '2014-06-16 16:42:02', '2014-06-16 16:42:02'),
(170, 13, 38, '1', '', 'active', NULL, '2014-06-16 16:42:34', '2014-06-16 16:42:34'),
(171, 14, 38, '1', '', 'active', NULL, '2014-06-16 16:44:03', '2014-06-16 16:44:03'),
(172, 15, 38, '1', '', 'active', NULL, '2014-06-16 16:44:15', '2014-06-16 16:44:15'),
(173, 1, 39, '1', 'Hitachi', 'active', NULL, '2014-06-16 14:58:27', '2014-06-16 14:58:27'),
(174, 8, 39, '1', '', 'active', NULL, '2014-06-16 14:58:44', '2014-06-16 14:58:44'),
(175, 39, 39, '1', ' D525', 'active', NULL, '2014-06-16 14:59:53', '2014-06-16 14:59:53'),
(176, 26, 39, '1', ' MAHOBAY', 'active', NULL, '2014-06-16 15:00:11', '2014-06-16 15:00:11'),
(177, 13, 39, '1', 'COMPAQ 14"', 'active', NULL, '2014-06-16 15:00:26', '2014-06-16 15:00:26'),
(178, 14, 39, '1', '', 'active', NULL, '2014-06-16 15:00:38', '2014-06-16 15:00:38'),
(179, 15, 39, '1', '', 'active', NULL, '2014-06-16 15:00:51', '2014-06-16 15:00:51'),
(180, 38, 40, '1', '', 'active', NULL, '2014-06-16 15:05:28', '2014-06-16 15:05:28'),
(181, 9, 40, '1', '', 'active', NULL, '2014-06-16 15:05:46', '2014-06-16 15:05:46'),
(182, 2, 40, '1', '', 'active', NULL, '2014-06-16 15:05:57', '2014-06-16 15:05:57'),
(183, 13, 40, '1', '19"', 'active', NULL, '2014-06-16 15:06:23', '2014-06-16 15:06:23'),
(184, 14, 40, '1', '', 'active', NULL, '2014-06-16 15:06:33', '2014-06-16 15:06:33'),
(185, 15, 40, '1', '', 'active', NULL, '2014-06-16 15:06:43', '2014-06-16 15:06:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `candidates`
--

CREATE TABLE IF NOT EXISTS `candidates` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `website_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `job_type` enum('full','partial','freelance') COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avalible` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `candidates_category_id_foreign` (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `companies`
--

CREATE TABLE IF NOT EXISTS `companies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `direction` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `companies`
--

INSERT INTO `companies` (`id`, `name`, `company_id`, `direction`, `phone`, `contact`, `state`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Clinica Oftalmologica de Sincelejo', '621914483', 'Calle 7 de Agosto', '2222222', 'Evelyn Hernandez', 'active', 'demetrius-mcdermott', '2014-05-26 01:44:15', '2014-05-26 01:44:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maintenances`
--

CREATE TABLE IF NOT EXISTS `maintenances` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pc_id` int(10) unsigned NOT NULL,
  `support_id` int(10) unsigned NOT NULL,
  `issues` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `priority` enum('high','medium','low') COLLATE utf8_unicode_ci NOT NULL,
  `observation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` enum('waiting','fix','processing') COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `maintenances`
--

INSERT INTO `maintenances` (`id`, `pc_id`, `support_id`, `issues`, `priority`, `observation`, `state`, `created_at`, `updated_at`) VALUES
(1, 21, 1, 'No prende', 'medium', 'Observando', 'fix', '2014-06-17 00:26:44', '2014-06-17 00:48:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_05_16_221418_create_users_table', 1),
('2014_05_16_222817_create_categories_table', 1),
('2014_05_16_235148_create_candidates_table', 1),
('2014_05_24_152516_create_accesory_table', 1),
('2014_05_24_152546_create_company_table', 1),
('2014_05_24_152613_create_so_table', 1),
('2014_05_24_152634_create_trademark_table', 1),
('2014_05_24_152654_create_accesoryxpc_table', 1),
('2014_05_24_152600_create_pc_table', 2),
('2014_05_24_152654_create_accesorypc_table', 3),
('2014_05_28_181003_create_table_suport_table', 3),
('2014_05_28_181056_create_table_maintenance_table', 3),
('2014_05_28_181244_create_table_report_table', 4),
('2014_06_06_232316_create_user_company_table', 5),
('2014_06_07_131545_create_pchistory_table', 6),
('2014_06_07_142131_create_user_support_table', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pchistories`
--

CREATE TABLE IF NOT EXISTS `pchistories` (
  `pc_id` int(10) unsigned NOT NULL,
  `company_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `trademark_id` int(10) unsigned NOT NULL,
  `so_id` int(10) unsigned NOT NULL,
  `type` enum('Support','Assistance') COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `internal_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `owner` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `serial` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `voltage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `maintenance_day` date NOT NULL,
  `buy_date` date NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `observation` text COLLATE utf8_unicode_ci,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `motive` text COLLATE utf8_unicode_ci NOT NULL,
  `type_pc` enum('desktop','all in one','laptop') COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pchistories`
--

INSERT INTO `pchistories` (`pc_id`, `company_id`, `user_id`, `trademark_id`, `so_id`, `type`, `name`, `internal_id`, `location`, `owner`, `model`, `serial`, `voltage`, `maintenance_day`, `buy_date`, `password`, `observation`, `photo`, `state`, `order`, `motive`, `type_pc`, `created_at`, `updated_at`) VALUES
(18, 1, 20, 5, 2, 'Support', 'Smalbach pc', '00001', 'Home', 'yo', '112154', '', '', '0000-00-00', '0000-00-00', '', '', '', 'active', 10, 'test', 'desktop', '2014-06-07 18:50:10', '2014-06-07 18:50:10'),
(18, 1, 20, 5, 2, 'Support', 'Smalbach pc', '00001', 'Home', 'yo', '112154', 'sn1111', '110', '2014-06-01', '2014-06-07', '------', 'none', 'ffff', 'active', 10, 'test', 'desktop', '2014-06-07 18:53:53', '2014-06-07 18:53:53'),
(18, 1, 20, 5, 5, 'Support', 'Smalbach pc', '00001', 'Home', 'yo', '112154', 'sn1111', '110', '2014-06-01', '2014-06-07', '------', 'none', 'ffff', 'active', 10, 'test', 'desktop', '2014-06-07 18:54:19', '2014-06-07 18:54:19'),
(18, 1, 20, 5, 2, 'Support', 'Smalbach pc', '00001', 'Home', 'yo', '112154', 'sn1111', '110', '2014-06-01', '2014-06-07', '------', 'none', 'ffff', 'active', 10, 'Probando', 'desktop', '2014-06-07 22:37:10', '2014-06-07 22:37:10'),
(32, 1, 43, 1, 1, 'Assistance', 'CONSULTORIO 2', '214', 'CONSULTORIO 2', 'DR RUIZ', 'CQ1 3007LA', 'QS289AA#ABM', '110', '0000-00-00', '0000-00-00', '18', '', '', 'active', 10, 'Error en el nombre del computador', 'all in one', '2014-06-12 18:40:03', '2014-06-12 18:40:03'),
(25, 1, 43, 8, 7, 'Assistance', 'Evelyn Anderson', '', 'Gerencia', 'Evelyn Anderson', 'c460-VS1402p0xg', 'vs81189282', '19.5v --- 6.15a', '2014-12-31', '0000-00-00', '', '', '', 'active', 10, 'Cambio de gerancia a Admisiones, el equipo de admisiones esta ba lento y no funcionaba adecuadamente', 'all in one', '2014-06-15 00:35:10', '2014-06-15 00:35:10'),
(26, 1, 20, 9, 1, 'Assistance', 'Evelyn Anderson Desktop', '82', 'Gerencia', 'Evelyn Anderson', 'sdk cd1902s', 'scd2s11120097', '110', '2014-06-30', '0000-00-00', 'evelink', 'Equipo para Trasferencia ', '', 'active', 10, 'Cambio de la contraseña', 'desktop', '2014-06-17 00:19:58', '2014-06-17 00:19:58'),
(31, 1, 20, 1, 1, 'Assistance', 'CONSULTORIO 2', '145', 'CONSULTORIO 2', 'DR RUIZ', 'CQ1110LA', '4CE14016R', '110', '0000-00-00', '0000-00-00', 'cos2030', '', '', 'active', 10, 'test', 'desktop', '2014-06-17 00:20:51', '2014-06-17 00:20:51'),
(32, 1, 20, 1, 1, 'Assistance', 'CONSULTORIO 1', '214', 'CONSULTORIO 1', 'DR RUIZ', 'CQ1 3007LA', 'QS289AA#ABM', '110', '0000-00-00', '0000-00-00', '18', '', '', 'active', 10, '-----hgjghj', 'all in one', '2014-06-17 00:21:21', '2014-06-17 00:21:21'),
(26, 1, 20, 9, 1, 'Assistance', 'Evelyn Anderson Desktop', '82', 'Gerencia', 'Evelyn Anderson', 'sdk cd1902s', 'scd2s11120097', '110', '2014-06-30', '0000-00-00', '', 'Equipo para Trasferencia ', '', 'active', 10, 'Cambio de nombre', 'desktop', '2014-06-17 00:22:22', '2014-06-17 00:22:22'),
(21, 1, 20, 1, 5, 'Assistance', 'Auxiliar Administrativo', '52', 'Administracion', 'Katia Centenaro', 'sr5117la', '--', '110', '2014-06-07', '0000-00-00', '', 'Equipo para Depreciar', '', 'active', 10, 'actualizacion', 'desktop', '2014-06-17 00:23:21', '2014-06-17 00:23:21'),
(22, 1, 20, 3, 2, 'Assistance', 'Servidor Contable ', '', 'Administracion', 'Medardo', '', '--', '110', '2014-06-13', '0000-00-00', 'En administrador', 'Computador para el Software Contable con dos usuarios', '', 'active', 10, 'Una actualizacion', 'desktop', '2014-06-17 00:24:02', '2014-06-17 00:24:02'),
(25, 1, 20, 8, 7, 'Assistance', 'Admisiones 2', '', 'Admisiones', 'Shirley', 'c460-VS1402p0xg', 'vs81189282', '19.5v --- 6.15a', '2014-12-31', '0000-00-00', '', '', '', 'active', 10, 'Update', 'all in one', '2014-06-17 00:24:34', '2014-06-17 00:24:34'),
(27, 1, 20, 10, 7, 'Assistance', 'Citas Telefonicas', '', 'Administracion', 'Esmeralda Arciniegas', 'twin 3800', 'b151112321645', '110', '2014-12-31', '0000-00-00', '', '', '', 'active', 10, 'una actualizacion', 'desktop', '2014-06-17 00:25:16', '2014-06-17 00:25:16'),
(39, 1, 20, 2, 1, 'Assistance', 'AUXILIAR ADMINIDONES', '', 'ADMINIDONES', 'SHYRLEY', 'ATOM D525', '', '', '0000-00-00', '0000-00-00', '', '', '', 'active', 10, 'Admi', 'desktop', '2014-06-17 00:26:06', '2014-06-17 00:26:06'),
(31, 1, 20, 1, 1, 'Assistance', 'CONSULTORIO 2', '145', 'CONSULTORIO 2', 'DR RUIZ', 'CQ1110LA', '4CE14016R', '110', '0000-00-00', '0000-00-00', '', '', '', 'active', 10, 'Actualización de datos', 'desktop', '2014-06-17 00:54:27', '2014-06-17 00:54:27'),
(32, 1, 20, 1, 1, 'Assistance', 'CONSULTORIO 1', '214', 'CONSULTORIO 1', 'DR RUIZ', 'CQ1 3007LA', 'QS289AA#ABM', '110', '0000-00-00', '0000-00-00', '', '', '', 'active', 10, 'aaaa', 'all in one', '2014-06-17 00:55:11', '2014-06-17 00:55:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pcs`
--

CREATE TABLE IF NOT EXISTS `pcs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `company_id` int(10) unsigned NOT NULL,
  `trademark_id` int(10) unsigned NOT NULL,
  `so_id` int(10) unsigned NOT NULL,
  `type` enum('Support','Assistance') COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `internal_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `owner` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `serial` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `voltage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `maintenance_day` date NOT NULL,
  `buy_date` date NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `observation` text COLLATE utf8_unicode_ci,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `type_pc` enum('desktop','all in one','laptop') COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=41 ;

--
-- Volcado de datos para la tabla `pcs`
--

INSERT INTO `pcs` (`id`, `company_id`, `trademark_id`, `so_id`, `type`, `name`, `internal_id`, `location`, `owner`, `model`, `serial`, `voltage`, `maintenance_day`, `buy_date`, `password`, `observation`, `photo`, `state`, `order`, `created_at`, `updated_at`, `type_pc`) VALUES
(21, 1, 1, 5, 'Assistance', 'Auxiliar Administrativo', '52', 'Administracion', 'Maria ', 'sr5117la', '--', '110', '2014-06-07', '0000-00-00', '', 'Equipo para Depreciar', '', 'active', 10, '2014-05-29 23:58:23', '2014-06-17 00:23:21', 'desktop'),
(22, 1, 3, 2, 'Assistance', 'Servidor Contable ', '', 'Administracion', 'El contador', '', '--', '110', '2014-06-13', '0000-00-00', 'En administrador', 'Computador para el Software Contable con dos usuarios', '', 'active', 10, '2014-05-30 00:22:25', '2014-06-17 00:24:02', 'desktop'),
(23, 1, 3, 6, 'Assistance', 'Copias de Seguridad', '19', 'Administracion', 'Administracion', '', '', '110', '2014-06-13', '0000-00-00', '', 'Equipo para las copias de seguridad del siscolsi', '', 'active', 10, '2014-05-30 00:34:34', '2014-05-30 00:34:34', 'desktop'),
(24, 1, 2, 7, 'Assistance', 'Talento', '', 'Gerencia', 'Gerencia', '18-1209la', '5cm3280ff2', '110', '2014-12-31', '0000-00-00', 'melissamejia', '', '', 'active', 10, '2014-05-30 00:54:56', '2014-05-30 00:54:56', 'all in one'),
(25, 1, 8, 7, 'Assistance', 'Admisiones 2', '', 'Admisiones', 'Shakira', 'c460-VS1402p0xg', 'vs811g8924422822', '19.5v --- 6.15a', '2014-12-31', '0000-00-00', '', '', '', 'active', 10, '2014-05-30 01:12:25', '2014-06-17 00:24:34', 'all in one'),
(26, 1, 9, 1, 'Assistance', 'Juanita perez', '82', 'Gerencia', 'Juanita perez', 'sdk cd1902s', 'scd2s11120097', '110', '2014-06-30', '0000-00-00', '', 'Equipo para Trasferencia ', '', 'active', 10, '2014-05-30 01:29:24', '2014-06-17 00:22:22', 'desktop'),
(27, 1, 10, 7, 'Assistance', 'Citas Telefonicas', '', 'Administracion', 'Consuelo', 'twin 3800', 'ffrrreee', '110', '2014-12-31', '0000-00-00', '', '', '', 'active', 10, '2014-05-30 01:43:33', '2014-06-17 00:25:16', 'desktop'),
(28, 1, 4, 7, 'Assistance', 'Servidor', '', 'Cuarto de redes', 'Administracion', 'vostro 470', '', '110', '2014-07-31', '0000-00-00', '', '', '', 'active', 10, '2014-06-10 22:31:58', '2014-06-10 22:31:58', 'desktop'),
(29, 1, 9, 5, 'Assistance', 'Consultorio 4', '', 'Consultorio 4', '', '', '', '110', '0000-00-00', '0000-00-00', 'cos2030', '', '', 'active', 10, '2014-06-11 19:41:03', '2014-06-11 19:41:03', 'desktop'),
(30, 1, 1, 1, 'Assistance', 'CONSULTORIO 3', '104', 'Consultorio 3', '', 'CQ1110LA', '', '110', '0000-00-00', '0000-00-00', '', '', '', 'active', 10, '2014-06-11 19:45:54', '2014-06-11 19:45:54', 'desktop'),
(31, 1, 1, 1, 'Assistance', 'CONSULTORIO 2', '145', 'CONSULTORIO 2', 'Dr Matasanos', 'CQ1110LA', '', '110', '2014-06-16', '2014-06-30', '', '', '', 'active', 10, '2014-06-11 19:52:02', '2014-06-17 00:54:27', 'desktop'),
(32, 1, 1, 1, 'Assistance', 'CONSULTORIO 1', '214', 'CONSULTORIO 1', 'DR House', 'CQ1 3007LA', '', '110', '2014-06-16', '2014-06-23', '', '', '', 'active', 10, '2014-06-11 19:55:51', '2014-06-17 00:55:11', 'all in one'),
(33, 1, 11, 2, 'Assistance', 'Campimetro', '', '', 'MAIRA', '', '', '110', '0000-00-00', '0000-00-00', '', '', '', 'active', 10, '2014-06-12 19:02:26', '2014-06-12 19:02:26', 'desktop'),
(34, 1, 1, 1, 'Assistance', 'Jefe marta 1', '', '', 'Jefe marta', 'CQ1 3007LA', '4CE2081CV8', '110', '0000-00-00', '0000-00-00', 'PROGRAMACION', '', '', 'active', 10, '2014-06-12 19:06:18', '2014-06-12 19:06:18', 'desktop'),
(35, 1, 2, 2, 'Assistance', 'JEFE MARTHA 2', '', '', 'JEFE MARTHA', 'G4 1064LA NOTEBOOK PC', '', '110', '0000-00-00', '0000-00-00', '', '', '', 'active', 10, '2014-06-12 19:11:32', '2014-06-12 19:11:32', 'laptop'),
(36, 1, 8, 5, 'Assistance', 'JEFE MARTA ANGEO', '', '', 'JEFE MARTA ', '', '', '110', '0000-00-00', '0000-00-00', '', '', '', 'active', 10, '2014-06-12 19:20:40', '2014-06-12 19:20:40', 'desktop'),
(37, 1, 1, 1, 'Assistance', 'QUIROFANO', '125', 'QUIROFANO', 'MARTHA BITAR', 'CQ1110LA', '4CE2081CV8', '110', '0000-00-00', '2012-06-29', '', '', '', 'active', 10, '2014-06-16 16:16:23', '2014-06-16 16:16:23', 'desktop'),
(38, 1, 8, 7, 'Assistance', 'Shirley', '', 'Admisiones', 'Shirley', 'r39023119113', 'es10957889', '110', '0000-00-00', '0000-00-00', '', '', '', 'active', 10, '2014-06-16 16:23:10', '2014-06-16 16:23:10', 'desktop'),
(39, 1, 2, 1, 'Assistance', 'AUXILIAR ADMINIDONES', '', 'ADMISIONES', 'Juana de arco', 'ATOM D525', '', '', '0000-00-00', '0000-00-00', '', '', '', 'active', 10, '2014-06-16 14:58:08', '2014-06-17 00:26:06', 'desktop'),
(40, 1, 8, 7, 'Assistance', 'Facturacion', '', 'facturacion', 'Carmen Malo soli', 'h520s', 'es10957940', '110', '0000-00-00', '0000-00-00', '', '', '', 'active', 10, '2014-06-16 15:05:00', '2014-06-16 15:05:00', 'desktop');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reports`
--

CREATE TABLE IF NOT EXISTS `reports` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `maintenance_id` int(10) unsigned NOT NULL,
  `find` text COLLATE utf8_unicode_ci NOT NULL,
  `tecnical_report` text COLLATE utf8_unicode_ci NOT NULL,
  `recommendations` text COLLATE utf8_unicode_ci,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=26 ;

--
-- Volcado de datos para la tabla `reports`
--

INSERT INTO `reports` (`id`, `maintenance_id`, `find`, `tecnical_report`, `recommendations`, `state`, `created_at`, `updated_at`) VALUES
(20, 8, 'Todo bien', 'todo bien', 'bien', 'fix', '2014-06-07 22:22:04', '2014-06-07 22:22:04'),
(22, 10, 'No habia energia', 'se conecto y ya', 'Revisar si esta conectado y ya', 'fix', '2014-06-07 22:25:30', '2014-06-07 22:25:30'),
(23, 9, 'Memoria esa dañada', 'Se necesita el cambio de memoria', 'Regular la luz', 'processing', '2014-06-07 22:29:50', '2014-06-07 22:29:50'),
(24, 9, 'Cambio de memori', 'Se cambio la memoria y esta funcinando correctamente', '', 'fix', '2014-06-07 22:31:15', '2014-06-07 22:31:15'),
(25, 1, 'Todo bien', 'todo excelente', 'recomendar algo', 'fix', '2014-06-17 00:48:33', '2014-06-17 00:48:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sos`
--

CREATE TABLE IF NOT EXISTS `sos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `sos`
--

INSERT INTO `sos` (`id`, `name`, `version`, `created_at`, `updated_at`) VALUES
(1, 'Windows Seven', 'Starter', '2014-05-26 05:45:17', '2014-05-26 05:45:17'),
(2, 'Windows Seven', 'Ultimate', '2014-05-26 05:45:17', '2014-05-26 05:45:17'),
(3, 'Windows Seven', 'Home', '2014-05-26 05:45:17', '2014-05-26 05:45:17'),
(4, 'Windows Seven', 'Enterprise', '2014-05-26 05:45:17', '2014-05-26 05:45:17'),
(5, 'Windows Xp', 'sp3', '2014-05-26 05:45:17', '2014-05-26 05:45:17'),
(6, 'Windows Seven', 'Profesional', '2014-05-26 05:45:17', '2014-05-26 05:45:17'),
(7, 'Windows 8', 'Single Language', '2014-05-26 05:45:17', '2014-05-26 05:45:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suports`
--

CREATE TABLE IF NOT EXISTS `suports` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company_id` int(10) unsigned NOT NULL,
  `direction` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cell` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `suports`
--

INSERT INTO `suports` (`id`, `name`, `company_id`, `direction`, `phone`, `cell`, `email`, `contact`, `state`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Aikon', 1, 'dir ', '111', 'active', '--', '--', 'active', '--', '2014-05-29 04:18:17', '2014-05-29 04:18:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trademarks`
--

CREATE TABLE IF NOT EXISTS `trademarks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `trademarks`
--

INSERT INTO `trademarks` (`id`, `name`, `description`, `state`, `created_at`, `updated_at`) VALUES
(1, 'Compaq', 'none', 'active', '2014-05-26 05:48:12', '2014-05-26 05:48:12'),
(2, 'HP', '', 'active', '2014-05-26 05:48:13', '2014-05-26 05:48:13'),
(3, 'Clon', '', 'active', '2014-05-26 05:48:13', '2014-05-26 05:48:13'),
(4, 'Dell', '', 'active', '2014-05-26 05:48:13', '2014-05-26 05:48:13'),
(5, 'Toshiba', '', 'active', '2014-05-26 05:48:13', '2014-05-26 05:48:13'),
(6, 'Acer', NULL, 'active', '2014-05-27 09:00:00', '2014-05-27 09:00:00'),
(7, 'BenQ', NULL, 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Lenovo', '', 'active', '2014-05-26 05:48:13', '2014-05-26 05:48:13'),
(9, 'Simply', '', 'active', '2014-05-26 05:48:13', '2014-05-26 05:48:13'),
(10, 'Qbex', '', 'active', '2014-05-26 05:48:13', '2014-05-26 05:48:13'),
(11, 'Janus', '', 'active', '2014-05-26 05:48:13', '2014-05-26 05:48:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` enum('admin','company','user_company','technical') COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=46 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `type`, `avatar`, `state`, `remember_token`, `created_at`, `updated_at`) VALUES
(20, 'Snheidert Smalbach', 'admin@admin.com', '$2y$10$wXSVcq/Ll5908hf4UD44k.Qqfh74tIO43UZk2na1WRF18V/PbDCBq', 'company', 'default.png', 'active', 'EdcwsWzr0CC9c7lH9f0pzfm8p2SNrzTx9DFqBLxmhtc0YpZEw7rbB6UOPQQO', '2014-05-26 01:48:19', '2014-06-17 12:04:47'),
(44, 'Snheidert Smalbach Tech', 'admin1@admin.com', '$2y$10$wXSVcq/Ll5908hf4UD44k.Qqfh74tIO43UZk2na1WRF18V/PbDCBq', 'technical', 'default.png', 'active', 'nebHoaZjkqMbuBHAt0OYYLztsgjfFba769JfjIxuGPJTprdIXliGLXeQSlFj', '2014-05-26 01:48:19', '2014-06-17 00:48:51'),
(45, 'admin2', 'admin2@admin.com', '$2y$10$VLr9mpk9l/.HcYPwg6EYJuXGTfQHP3XHgFWEYSOUKGHm2.wNWhBWW', 'user_company', '', 'active', 'aR4Pi7DiH5fRbwxpFIDaHC1uvfPfyey4gUfPDWNmfsLqsdZbqRQVpQx72irK', '2014-06-17 00:56:43', '2014-06-17 00:57:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_companys`
--

CREATE TABLE IF NOT EXISTS `user_companys` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `company_id` int(10) unsigned NOT NULL,
  `state` enum('active','inactive') COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `user_companys`
--

INSERT INTO `user_companys` (`id`, `user_id`, `company_id`, `state`, `created_at`, `updated_at`) VALUES
(9, 20, 1, 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 45, 1, 'active', '2014-06-17 00:56:43', '2014-06-17 00:56:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_supports`
--

CREATE TABLE IF NOT EXISTS `user_supports` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `support_id` int(10) unsigned NOT NULL,
  `state` enum('active','inactive') COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `user_supports`
--

INSERT INTO `user_supports` (`id`, `user_id`, `support_id`, `state`, `created_at`, `updated_at`) VALUES
(1, 44, 1, 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `candidates`
--
ALTER TABLE `candidates`
  ADD CONSTRAINT `candidates_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
