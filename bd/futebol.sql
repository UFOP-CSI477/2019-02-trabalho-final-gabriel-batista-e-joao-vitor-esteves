-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 14-Dez-2019 às 09:56
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `futebol`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

DROP TABLE IF EXISTS `eventos`;
CREATE TABLE IF NOT EXISTS `eventos` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `data` date NOT NULL,
  `estadio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idtime1` int(10) UNSIGNED NOT NULL,
  `idtime2` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `eventos_idtime1_foreign` (`idtime1`),
  KEY `eventos_idtime2_foreign` (`idtime2`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `eventos`
--

INSERT INTO `eventos` (`id`, `data`, `estadio`, `idtime1`, `idtime2`, `created_at`, `updated_at`) VALUES
(1, '2019-12-11', 'Arena do Jacaré', 1, 1, '2019-12-12 23:26:48', '2019-12-12 23:26:48'),
(2, '2019-12-17', 'Mineirão', 3, 2, '2019-12-12 23:47:58', '2019-12-12 23:47:58'),
(3, '2021-12-30', 'Testeee', 2, 1, '2019-12-13 03:53:57', '2019-12-13 03:53:57'),
(4, '2020-05-22', 'Arena do Jacaré', 11, 19, '2019-12-13 04:16:48', '2019-12-13 04:16:48'),
(5, '2019-12-24', 'Independência', 4, 11, '2019-12-13 19:05:00', '2019-12-13 19:05:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2019_12_11_165601_create_times_table', 1),
(11, '2019_12_11_165630_create_eventos_table', 1),
(12, '2019_12_11_203942_create_sumulas_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sumulas`
--

DROP TABLE IF EXISTS `sumulas`;
CREATE TABLE IF NOT EXISTS `sumulas` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `placar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `melhor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faltas` int(10) UNSIGNED NOT NULL,
  `impedimentos` int(10) UNSIGNED NOT NULL,
  `idevento` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sumulas_idevento_foreign` (`idevento`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `sumulas`
--

INSERT INTO `sumulas` (`id`, `placar`, `melhor`, `faltas`, `impedimentos`, `idevento`, `created_at`, `updated_at`) VALUES
(6, '22x19', 'Thiago Neves', 5, 7, 2, '2019-12-13 00:33:30', '2019-12-13 00:33:30'),
(7, '10x0', 'Eu', 3, 3, 1, '2019-12-13 00:41:10', '2019-12-13 00:41:10'),
(8, '1x0', 'dasdsa', 3, 2, 3, '2019-12-13 03:54:13', '2019-12-13 03:54:13'),
(9, '1x0', 'Maurício', 53, 10, 4, '2019-12-13 04:17:28', '2019-12-13 04:17:28'),
(10, '2x3', 'Fábio', 25, 5, 5, '2019-12-13 19:05:32', '2019-12-13 19:05:32');

-- --------------------------------------------------------

--
-- Estrutura da tabela `times`
--

DROP TABLE IF EXISTS `times`;
CREATE TABLE IF NOT EXISTS `times` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estadio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `times`
--

INSERT INTO `times` (`id`, `nome`, `estadio`, `created_at`, `updated_at`) VALUES
(5, 'Avaí', 'Ressacada', '2019-12-13 04:08:15', '2019-12-13 04:08:15'),
(4, 'Ámerica-MG', 'Independência', '2019-12-13 04:08:07', '2019-12-13 04:08:07'),
(7, 'Brasil de Pelotas', 'Bento Freitas', '2019-12-13 04:09:34', '2019-12-13 04:09:34'),
(8, 'Chapecoense', 'Arena Condá', '2019-12-13 04:09:49', '2019-12-13 04:09:49'),
(10, 'CRB', 'Rei Pelé', '2019-12-13 04:10:42', '2019-12-13 04:10:42'),
(11, 'Cruzeiro', 'Mineirão', '2019-12-13 04:10:52', '2019-12-13 04:10:52'),
(17, 'Náutico', 'Estádio dos Aflitos', '2019-12-13 04:13:35', '2019-12-13 04:13:35'),
(19, 'Operário', 'Germano Krüger', '2019-12-13 04:14:28', '2019-12-13 04:14:28');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Biel', 'biel@gmail.com', NULL, '$2y$10$OzwQonZUSrZddvF3v7HuleTcxpxd1EyjofnwTYAxIS7DX2DjBjo1C', NULL, '2019-12-12 23:25:10', '2019-12-12 23:25:10'),
(2, 'João Vitor', 'joao@gmail.com', NULL, '$2y$10$9Nff8/Rz3BuF2MZ4tdGDA.giGApL3g1ox.ahj0krIsMCmAlaRUEGu', NULL, '2019-12-13 20:13:53', '2019-12-13 20:13:53');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
