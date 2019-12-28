-- Adminer 4.7.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `ecafe_arkademy` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `ecafe_arkademy`;

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `cashiers`;
CREATE TABLE `cashiers` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `cashiers` (`id`, `name`, `created_at`, `updated_at`) VALUES
('f087e38c-7e63-48f7-b56d-8476715600dd',	'Pevita Pearce',	'2019-12-28 10:02:21',	'2019-12-28 10:02:21'),
('0c73f191-8303-4384-a58e-83e46a3aca89',	'Raisa Andriani',	'2019-12-28 10:02:37',	'2019-12-28 10:02:37'),
('290a0aed-c8a7-467d-a136-e672f8dadc65',	'Joko Purwadhi',	'2019-12-28 10:03:13',	'2019-12-28 10:03:13'),
('059dfbb1-5660-4375-aca6-a46654dac22b',	'Lambda Sangkala',	'2019-12-28 10:03:28',	'2019-12-28 10:03:28');

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
('f6a0e676-faee-48d7-a166-7cc3fb1e7cad',	'Food',	'2019-12-28 10:03:53',	'2019-12-28 10:03:53'),
('e735c387-4d80-4340-806f-b75bb16bc3c4',	'Drink',	'2019-12-28 10:04:05',	'2019-12-28 10:04:05');

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'2019_12_28_072253_create_products_table',	1),
(2,	'2019_12_28_072325_create_categories_table',	1),
(3,	'2019_12_28_072348_create_cashiers_table',	1);

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoryID` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cashierID` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


-- 2019-12-28 10:12:54
