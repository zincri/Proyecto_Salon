-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 17, 2019 at 07:36 PM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.3.8-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbproyecto_eventos`
--
CREATE DATABASE IF NOT EXISTS `dbproyecto_eventos` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `dbproyecto_eventos`;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_imagen_principal` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirmado` int(1) NOT NULL,
  `numero_invitados` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `anfitrion` bigint(20) UNSIGNED DEFAULT NULL,
  `hora` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cliente_id` bigint(20) UNSIGNED DEFAULT NULL,
  `contratador_id` bigint(20) UNSIGNED DEFAULT NULL,
  `activo` int(1) DEFAULT NULL,
  `paquete_id` bigint(20) DEFAULT NULL,
  `precio` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_paquete_id_idx` (`paquete_id`),
  KEY `fk_contratador_id_idx` (`contratador_id`),
  KEY `fk_cliente_id_idx` (`cliente_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `nombre`, `descripcion`, `url_imagen_principal`, `fecha`, `confirmado`, `numero_invitados`, `created_at`, `updated_at`, `anfitrion`, `hora`, `cliente_id`, `contratador_id`, `activo`, `paquete_id`, `precio`) VALUES
(1, 'Boda de raquel', 'Será la mejor boda del mundo.', 'http://proyecto.test/imgupload/paquetes/fvi67ve68RBtMuCcI6DToYBmCiPHa2J02o9zwJ4E.png', '2019-10-10', 1, 566, '2019-10-29 09:08:58', '2019-11-19 09:03:58', 2, '3:45 PM', 4, 3, 1, 5, '88'),
(2, 'XV años de Romina', 'ewrwerwer', 'http://proyecto.test/imgupload/paquetes/fvi67ve68RBtMuCcI6DToYBmCiPHa2J02o9zwJ4E.png', '2019-12-20', 1, 455, '2019-10-29 20:58:21', '2019-11-19 08:58:49', 2, '3:45 PM', 2, 3, 1, 5, '88'),
(3, 'Bautizo de Jesus', 'este es el nuevo ejemplo', 'http://proyecto.test/imgupload/paquetes/fvi67ve68RBtMuCcI6DToYBmCiPHa2J02o9zwJ4E.png', '2019-11-19', 1, 455, '2019-11-06 00:00:00', '2019-11-13 00:00:00', 2, '3:45 PM', 2, NULL, 0, 5, NULL),
(4, 'adsasdads', 'asdasda', 'http://proyecto.test/imgupload/paquetes/fvi67ve68RBtMuCcI6DToYBmCiPHa2J02o9zwJ4E.png', '2014-11-01', 0, 33, '2019-11-21 21:35:35', '2019-11-21 21:35:35', NULL, '3:45 PM', 2, NULL, 1, 5, NULL),
(5, 'Nombre del evento', 'descripcion 3', 'http://proyecto.test/imgupload/paquetes/fRjrR1qwGz5wVeaUpilOa5PUU4pndFnJ3g1ya28D.png', '2014-11-01', 1, 222, '2019-11-21 21:58:07', '2019-11-21 23:13:37', NULL, '4:00 PM', 2, 4, 1, 5, '86'),
(7, 'e', 'fiesta', 'http://proyecto.test/imgupload/paquetes/fRjrR1qwGz5wVeaUpilOa5PUU4pndFnJ3g1ya28D.png', '2014-11-01', 1, 34, '2019-11-21 22:54:31', '2019-11-21 23:13:21', 4, '5:00 PM', 4, 4, 1, 5, '880'),
(8, 'cumpleañois juan', 'Descripcion juan', 'http://proyecto.test/imgupload/paquetes/fRjrR1qwGz5wVeaUpilOa5PUU4pndFnJ3g1ya28D.png', '2019-12-01', 0, 66, '2019-11-22 22:52:47', '2019-11-22 23:15:33', 5, '5:00 PM', 5, NULL, 0, 5, NULL),
(9, 'Posada juan', 'Posada juan des', 'http://proyecto.test/imgupload/paquetes/fRjrR1qwGz5wVeaUpilOa5PUU4pndFnJ3g1ya28D.png', '2019-11-01', 1, 77, '2019-11-22 22:53:27', '2019-11-22 22:54:50', 5, '5:00 PM', 5, 3, 1, 5, '886'),
(10, 'Cualquier Cosa', 'Este es una prueba', 'http://proyecto.test/imgupload/paquetes/fRjrR1qwGz5wVeaUpilOa5PUU4pndFnJ3g1ya28D.png', '2020-01-02', 0, 33, '2019-11-28 07:49:58', '2019-12-17 19:15:36', 4, '2:00 AM', 4, NULL, 1, 5, NULL),
(11, 'Evento nuevo', 'Descripcion', 'http://proyecto.test/imgupload/paquetes/fRjrR1qwGz5wVeaUpilOa5PUU4pndFnJ3g1ya28D.png', '2019-12-10', 0, 33, '2019-12-16 07:07:39', '2019-12-16 07:09:40', 7, '8:00 PM', 7, NULL, 1, 5, NULL),
(12, 'Cumpleaños de Jhoana', 'Descripcion', 'http://proyecto.test/imgupload/paquetes/fRjrR1qwGz5wVeaUpilOa5PUU4pndFnJ3g1ya28D.png', '2019-12-25', 0, 55, '2019-12-17 18:09:54', '2019-12-17 18:21:10', 4, '8:00 PM', 4, NULL, 1, 5, NULL),
(13, 'Posada', 'Posada en la montada', 'http://proyecto.test/imgupload/paquetes/fRjrR1qwGz5wVeaUpilOa5PUU4pndFnJ3g1ya28D.png', '2019-12-20', 0, 50, '2019-12-17 19:13:09', '2019-12-17 19:13:09', 4, '8:00 PM', 4, NULL, 1, 5, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE IF NOT EXISTS `expenses` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `concepto` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `monto` double DEFAULT NULL,
  `causa` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `nombre` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activo` int(1) DEFAULT NULL,
  `gastador_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_gastador_id_idx` (`gastador_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `concepto`, `monto`, `causa`, `fecha`, `nombre`, `activo`, `gastador_id`, `created_at`, `updated_at`) VALUES
(1, 'Pago de la Renta', 1000, 'xxx', '2019-11-19', 'Pago', 1, 6, '2019-12-17 01:13:15', '2019-12-17 01:13:15'),
(2, 'pedrial', 5000, 'Pago de pedrial', '2019-12-16', 'Gasto nuevo', 1, 6, '2019-12-17 02:50:10', '2019-12-17 02:50:10');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `evento_id` bigint(20) UNSIGNED DEFAULT NULL,
  `url` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usuario_id` bigint(20) UNSIGNED DEFAULT NULL,
  `activo` int(1) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_evento_id_idx` (`evento_id`),
  KEY `fk_user_id_idx` (`usuario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `evento_id`, `url`, `usuario_id`, `activo`, `updated_at`, `created_at`) VALUES
(1, 1, 'http://proyecto.test/imgupload/paquetes/fvi67ve68RBtMuCcI6DToYBmCiPHa2J02o9zwJ4E.png', 2, 0, '2019-11-21 20:56:16', NULL),
(2, 1, 'http://proyecto.test/imgupload/paquetes/fvi67ve68RBtMuCcI6DToYBmCiPHa2J02o9zwJ4E.png', 3, 0, '2019-12-17 03:04:09', NULL),
(3, 7, 'http://proyecto.test/imgupload/galerias/JjjprX71p5qPksjFcb45j4Qt6wuERVHkxWR4ouhc.png', 4, 0, '2019-11-21 22:56:13', '2019-11-21 22:55:41'),
(4, 7, 'http://proyecto.test/imgupload/galerias/5iJqhVa4xikXN8YNPbh4aff6Ktmp4ucPGCTgWgOd.png', 4, 0, '2019-11-21 22:57:36', '2019-11-21 22:57:32'),
(5, 7, 'http://proyecto.test/imgupload/galerias/2SV2qEo9AWYLMYAU6GCnnl6BzI95IAbUeYx5edXO.png', 4, 0, '2019-11-21 23:14:47', '2019-11-21 22:58:01'),
(6, 7, 'http://proyecto.test/imgupload/paquetes/yVZ1cZgxaX8iekpyOI8ScUb09yGDZ6gYAvatvMRc.png', 3, 0, '2019-11-21 23:18:20', '2019-11-21 23:18:20'),
(7, 7, 'http://proyecto.test/imgupload/paquetes/1DDhdp2dLjU7TS7RSAHTlosfFLCXI7O96aCEDcFA.png', 3, 0, '2019-11-21 23:20:09', '2019-11-21 23:20:09'),
(8, 7, 'http://proyecto.test/imgupload/paquetes/ICS40oQNHqTlOXLGFPdFa5rqY0ccHjBqS5E9sMxt.png', 3, 0, '2019-11-21 23:21:46', '2019-11-21 23:21:27'),
(9, 7, 'http://proyecto.test/imgupload/paquetes/q1V7UJ94nQQEIlmJEJWMN11ft4TYvVNNMRA38q1c.png', 3, 1, '2019-11-21 23:26:44', '2019-11-21 23:26:44'),
(10, 1, 'http://proyecto.test/imgupload/paquetes/aW8NGTOkVjl6KWfZK1lpHDpjAi89NEoZY6Ryo9ju.png', 2, 0, '2019-12-16 07:41:18', '2019-11-21 23:38:30'),
(11, 9, 'http://proyecto.test/imgupload/galerias/FgGPWH2qk5yMZZ9hoO43J9d4slCgnX1VXAHaPQV1.png', 5, 1, '2019-11-22 22:56:15', '2019-11-22 22:56:15'),
(12, 9, 'http://proyecto.test/imgupload/galerias/UIz15sa5HhHZsCpT1x5SEEBJ3AQfCnAeNDT4l22o.png', 5, 1, '2019-11-22 22:56:27', '2019-11-22 22:56:27'),
(13, 8, 'http://proyecto.test/imgupload/galerias/ReU4qlHAIgQdwmx1Cmj339jnvom05tkVEbTWoTMb.png', 5, 0, '2019-11-22 23:02:05', '2019-11-22 23:01:50'),
(14, 2, 'http://proyecto.test/imgupload/paquetes/GPhNxmQRlm4agiDhMBMXkAQ9MH8lYHRzSyc9WTkm.png', 3, 1, '2019-12-13 23:37:30', '2019-12-13 23:37:30'),
(15, 11, 'http://proyecto.test/imgupload/galerias/t7TfQi0BrUcFeoYwyreWgxVmy21icLf4SL7GCeUi.png', 7, 1, '2019-12-16 07:08:56', '2019-12-16 07:08:56'),
(16, 1, 'http://proyecto.test/imgupload/paquetes/zfFgXy32D4uOZEFbSEaIEqe3Pxyknxvg2j0eQYzQ.png', 3, 0, '2019-12-17 03:10:04', '2019-12-16 07:40:36'),
(17, 1, 'http://proyecto.test/imgupload/galerias/CGWsvHvCRwNovyIpDN5FjTgekFmVUfp19ahLUhYt.png', 4, 0, '2019-12-17 03:34:17', '2019-12-16 07:44:06'),
(18, 1, 'http://proyecto.test/imgupload/paquetes/BWs8b8JxVjJrL226cQrK8AMMCicc55BZrZRKuBVA.png', 3, 0, '2019-12-17 03:12:15', '2019-12-17 03:12:08'),
(19, 1, 'http://proyecto.test/imgupload/galerias/vMOcrhTfwCnasJ0MoLIEMo8JReVPRBXTFgsgmNlM.png', 4, 0, '2019-12-17 03:35:03', '2019-12-17 03:30:29'),
(20, 1, 'http://proyecto.test/imgupload/paquetes/npSLKFFEKwII93WYHsHoKWyzn1K6xbGDhe1s1xKY.png', 3, 1, '2019-12-17 19:26:04', '2019-12-17 19:26:04');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_10_29_051805_create_organizers_table', 1),
(5, '2019_10_29_062754_create_events_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `organizers`
--

CREATE TABLE IF NOT EXISTS `organizers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido_paterno` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido_materno` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edad` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `organizers`
--

INSERT INTO `organizers` (`id`, `nombre`, `apellido_paterno`, `apellido_materno`, `edad`, `created_at`, `updated_at`) VALUES
(1, 'Zincri', 'Mendoza', 'Lopez', 22, '2019-10-29 00:00:00', '2019-10-29 00:00:00'),
(2, 'Darwin', 'Mendoza', 'Rodriguez', 26, '2019-10-29 00:00:00', '2019-10-29 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE IF NOT EXISTS `packages` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_principal` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_secundaria` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `precio` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activo` int(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `nombre`, `descripcion`, `foto_principal`, `foto_secundaria`, `precio`, `activo`, `created_at`, `updated_at`) VALUES
(5, 'Paquete Ejemplo Editado', 'Descripcion del Paquete', 'http://proyecto.test/imgupload/paquetes/fRjrR1qwGz5wVeaUpilOa5PUU4pndFnJ3g1ya28D.png', 'http://proyecto.test/imgupload/paquetes/a05jTFW9JxL2ZUf2KCxmI0Ikni52pjsQsIw5ZgTl.png', '88', 1, '2019-11-19 02:55:52', '2019-11-21 21:47:16'),
(6, 'Paquete Navidad', 'Descripcion del paquete', 'http://proyecto.test/imgupload/paquetes/Ln2lCMrAe97d6HxmDV3AF3nQQWc9nysCTfHHxzE6.png', 'http://proyecto.test/imgupload/paquetes/bzafYpEz3oWo04QEPL2uLC2uFye39hzpA3UsXoWb.png', '1999', 0, '2019-12-16 07:23:11', '2019-12-16 07:30:05'),
(7, 'Paquete Rosca', 'Este paquete da todo lo necesario', 'http://proyecto.test/imgupload/paquetes/MwSvlMHdrVO6BPJ9mgAK0S4oTjYCXGlUlAT87m0h.png', 'http://proyecto.test/imgupload/paquetes/BRGHRyrOgwclo0bEvHV0VBYVy7BNNWzPEdDDnuy4.png', '1777', 1, '2019-12-16 07:24:06', '2019-12-16 07:24:06'),
(8, 'Paquete primavera', 'Tiene alberca', 'http://proyecto.test/imgupload/paquetes/CZfoxV5EjjoGq874JsbeeP4fSOeR97aa45PdpsXN.png', 'http://proyecto.test/imgupload/paquetes/3AFl3Q7dAdo4nNnl8fnZArIugKfLGwesm0yrf0VF.png', '5567', 0, '2019-12-16 07:28:19', '2019-12-16 07:28:19');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pays`
--

CREATE TABLE IF NOT EXISTS `pays` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `evento_id` bigint(20) UNSIGNED DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `monto` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receptor_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `activo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_evento_id_idx` (`evento_id`),
  KEY `fk_receptor_id_abono_idx` (`receptor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pays`
--

INSERT INTO `pays` (`id`, `evento_id`, `fecha`, `monto`, `receptor_id`, `created_at`, `updated_at`, `activo`) VALUES
(1, 1, '2019-11-13', '12', 3, '2019-11-19 10:38:58', '2019-11-19 10:38:58', 1),
(2, 1, '2019-11-14', '67', 3, '2019-11-19 10:59:09', '2019-11-19 10:59:09', 1),
(3, 1, '2019-11-06', '77', 2, '2019-11-21 23:39:32', '2019-11-21 23:39:32', 1),
(4, 1, '2019-12-06', 'zincri x', 3, '2019-12-10 14:46:27', '2019-12-10 14:46:27', 1),
(5, 2, '2019-12-03', '67', 3, '2019-12-13 23:38:31', '2019-12-13 23:38:31', 1),
(6, 1, '2019-12-16', '660', 3, '2019-12-16 07:35:01', '2019-12-16 07:35:01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `activo` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rol` enum('client','employee','manager','admin') COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido_paterno` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apellido_materno` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `telefono` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `activo`, `rol`, `apellido_paterno`, `apellido_materno`, `edad`, `telefono`) VALUES
(2, 'Jhoana X', 'jhoana@gmail.com', NULL, '$2y$10$uRvhxKJ01aJO0IIygxziiOV19wRGuuoR4MvA/bVsRziHjokLUbzMW', NULL, '2019-11-17 23:49:59', '2019-12-13 23:55:30', '1', 'employee', 'Dominguez A', 'Aguilar', 19, '9611509663'),
(3, 'Zincri', 'zincri@gmail.com', NULL, '$2y$10$QEthL2LseUAj.6M1Belw6u9k9gj9WaXB2twjgH8sub.UbgzF25WiG', NULL, '2019-11-18 05:49:25', '2019-11-18 19:42:48', '1', 'manager', 'Mendoza', 'Lopez', 13, '9611509663'),
(4, 'cliente', 'cliente@gmail.com', NULL, '$2y$10$VZ4nObr05ScfZIg03cY9H.AdT213JI3vUYKDnAdBHendqnlEEmL8.', NULL, '2019-11-21 22:46:39', '2019-11-21 22:46:39', '1', 'client', 'morales', 'jimenez', 56, '9614381373'),
(5, 'Juan', 'juan@gmail.com', NULL, '$2y$10$r7Ai.I2OzlgaD4i6yOzmvu0/0w.m5/X6Bqtc8WNuVfX0oYvYXLzUy', NULL, '2019-11-22 22:48:46', '2019-11-22 22:48:46', '1', 'client', 'Lopez', 'Juarez', 34, '9611509788'),
(6, 'Zincri', 'zinc@gmail.com', NULL, '$2y$10$qlJnnpLVjpmbfd94OyqKnORB9AnW5GS.P10kmV2GDbFvw1SM/QqoK', NULL, '2019-12-10 13:37:45', '2019-12-10 13:37:45', '1', 'manager', 'Medoza', 'Lopez', 55, '5555555'),
(7, 'Nuevo Usuario', 'usuario_nuevo@gmail.com', NULL, '$2y$10$QMd0RXukeE/MBsQbrxst4uUExT/LxS8XH0EWLyU7m3UOhm/hLYF4q', NULL, '2019-12-16 07:05:28', '2019-12-16 07:05:28', '1', 'client', 'Ramon', 'Gorza', 12, '9871521611'),
(8, 'Jose', 'jose@gmail.com', NULL, '$2y$10$sYi5I7CQ5dhRfV7NgiP5MeptMVzUxvwHJuWpsJDYK/KxZ.Y1rJsa6', NULL, '2019-12-16 07:20:33', '2019-12-16 07:21:58', '1', 'employee', 'Borraz', 'Juarez', 12, '917217281'),
(9, 'Zincri', 'zincrixmlz@hotmail.com', NULL, '$2y$10$vhqKYuT.lj1RBDxCnN.VwuvhUtXiRb.g.YA60Nd6zzXYrYVtnozVu', NULL, '2019-12-17 08:08:01', '2019-12-17 08:08:01', '1', 'manager', 'Mendoza Nuevo', 'Lopez Nuevo', 99, '9611509663'),
(10, 'Eldred Edit', 'eldred@gmail.com', NULL, '$2y$10$Ww7duzy6AjbQLo6lalmBZeDcMSIJ2rg.Djv.B578rrDH7aboT9u7a', NULL, '2019-12-17 14:16:15', '2019-12-17 14:16:15', '1', 'client', 'Mendoza Nuevo', 'Lopez Nuevo', 13, '9611509663'),
(11, 'Eldred Edit', 'e_edit@gmail.com', NULL, '$2y$10$m9Es7SXdgqMQriKwiE/6i.c2nO.bY02vHSDpt2.5meJzS.8jrqGA.', NULL, '2019-12-17 14:49:03', '2019-12-17 14:49:03', '1', 'employee', 'Mendoza Nuevo', 'Lopez Nuevo', 99, '9611509663'),
(12, 'Jhoan', 'jhoan@gmail.com', NULL, '$2y$10$deaoNDvLxNm7jKZXapYzmuFHupA4hz9HGmWR1rp6nsb7v1BB8hqy2', NULL, '2019-12-17 16:43:33', '2019-12-17 16:43:33', '1', 'client', 'Mendoza Nuevo', 'Lopez Nuevo', 13, '9611509663'),
(13, 'jorge', 'jorge@gmail.com', NULL, '$2y$10$J846uKeLOvhRzMP6K/hxYOB6kqUoMZsBV/ReLTgELB5pHMhh/q5TC', NULL, '2019-12-17 16:51:00', '2019-12-17 16:51:00', '1', 'client', 'Mendoza Nuevo', 'Lopez Nuevo', 99, '9611509663'),
(14, 'Zincri_Y', 'zincri_y@gmail.com', NULL, '$2y$10$73b5501eSbzfsrjukOztKOqBb/pREK1/ae2ujd9/8LdP.1VPd5oze', NULL, '2019-12-17 17:12:56', '2019-12-17 17:12:56', '1', 'employee', 'Mendoza Nuevo', 'Lopez Nuevo', 99, '9611509663'),
(16, 'Pop', 'pop@gmail.com', NULL, '$2y$10$qouoL8jRG91aNsUcVexQme.0wnxakqC9/vSZRCHEKAPoje8ezFj56', NULL, '2019-12-17 17:15:13', '2019-12-17 17:15:13', '1', 'employee', 'Mendoza Nuevo', 'Lopez Nuevo', 99, '9611509663'),
(17, 'Jorge', 'jguzman@ittg.edu.mx', NULL, '$2y$10$RQS6Ib/6A1ZmWF5pTZ7cg.Mwyx4AVTyZ70p.8wdn1LSCJ49bm7lAm', NULL, '2019-12-17 19:09:38', '2019-12-17 19:09:38', '1', 'client', 'Guzman', 'Sanchez', 42, '044'),
(18, 'Zincri Creado', 'zincri_creado@gmail.com', NULL, '$2y$10$Lg6h286E3rbTKSUU7fVOH.ZZCXCiRMeq6/.5bev8np5saKoYvJaj6', NULL, '2019-12-17 19:19:07', '2019-12-17 19:19:07', '1', 'employee', 'Mendoza Nuevo', 'Lopez Nuevo', 99, '9611509663');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `fk_cliente_id` FOREIGN KEY (`cliente_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_contratador_id` FOREIGN KEY (`contratador_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_paquete_id` FOREIGN KEY (`paquete_id`) REFERENCES `packages` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `expenses`
--
ALTER TABLE `expenses`
  ADD CONSTRAINT `fk_gastador_id` FOREIGN KEY (`gastador_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `fk_evento_id` FOREIGN KEY (`evento_id`) REFERENCES `events` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pays`
--
ALTER TABLE `pays`
  ADD CONSTRAINT `fk_evento_id_abono` FOREIGN KEY (`evento_id`) REFERENCES `events` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_receptor_id_abono` FOREIGN KEY (`receptor_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
