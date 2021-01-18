-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Czas generowania: 18 Sty 2021, 01:10
-- Wersja serwera: 8.0.22
-- Wersja PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `laraveldb`
--
CREATE DATABASE IF NOT EXISTS `laraveldb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `laraveldb`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ad`
--

CREATE TABLE `ad` (
  `id` int NOT NULL,
  `product_id` int UNSIGNED NOT NULL,
  `from_ad` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `ad`
--

INSERT INTO `ad` (`id`, `product_id`, `from_ad`) VALUES
(2, 33, '2021-01-17'),
(4, 1, '2021-01-17'),
(5, 31, '2021-01-17'),
(6, 34, '2021-01-17'),
(8, 22, '2021-01-17'),
(9, 18, '2021-01-17'),
(10, 26, '2021-01-17');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `content_web`
--

CREATE TABLE `content_web` (
  `id` int NOT NULL,
  `name_web` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `content_web`
--

INSERT INTO `content_web` (`id`, `name_web`, `content`) VALUES
(1, 'about', '<h3 class=\"text-center page_header\">O nas</h3>\r\n            <div class=\"text_container\">\r\n              <h4>1. Lorem ipsum</h4>\r\n              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet lorem quam, eu venenatis ipsum accumsan et. Aliquam aliquet sem et nibh lobortis, vel malesuada elit dignissim. Donec interdum nibh in mi efficitur fermentum vitae sit amet nisi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc porttitor hendrerit ipsum nec suscipit. Duis est orci, iaculis sed efficitur non, laoreet commodo massa. Sed tortor nisi, consectetur eu magna ut, finibus sodales massa. Fusce in elit molestie, tempus nisl sed, rutrum lacus. Proin a congue metus, vitae mattis neque.\r\n              Fusce fermentum dignissim ligula. Sed non lacinia purus, vitae ullamcorper velit. Morbi sed varius eros, eget malesuada purus. Fusce ultrices ipsum in quam eleifend elementum eu quis ipsum. Phasellus consectetur massa vitae varius maximus. Duis sagittis est et tellus feugiat vulputate. Etiam non varius arcu. Integer auctor quam non sapien ullamcorper, nec posuere odio efficitur.\r\n            </div>\r\n            <div class=\"text_container\">\r\n              <h4>2. Lorem ipsum</h4>\r\n              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet lorem quam, eu venenatis ipsum accumsan et. Aliquam aliquet sem et nibh lobortis, vel malesuada elit dignissim. Donec interdum nibh in mi efficitur fermentum vitae sit amet nisi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc porttitor hendrerit ipsum nec suscipit. Duis est orci, iaculis sed efficitur non, laoreet commodo massa. Sed tortor nisi, consectetur eu magna ut, finibus sodales massa. Fusce in elit molestie, tempus nisl sed, rutrum lacus. Proin a congue metus, vitae mattis neque.\r\n              Fusce fermentum dignissim ligula. Sed non lacinia purus, vitae ullamcorper velit. Morbi sed varius eros, eget malesuada purus. Fusce ultrices ipsum in quam eleifend elementum eu quis ipsum. Phasellus consectetur massa vitae varius maximus. Duis sagittis est et tellus feugiat vulputate. Etiam non varius arcu. Integer auctor quam non sapien ullamcorper, nec posuere odio efficitur.\r\n            </div>\r\n            <div class=\"text_container\">\r\n              <h4>3. Lorem ipsum</h4>\r\n              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet lorem quam, eu venenatis ipsum accumsan et. Aliquam aliquet sem et nibh lobortis, vel malesuada elit dignissim. Donec interdum nibh in mi efficitur fermentum vitae sit amet nisi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc porttitor hendrerit ipsum nec suscipit. Duis est orci, iaculis sed efficitur non, laoreet commodo massa. Sed tortor nisi, consectetur eu magna ut, finibus sodales massa. Fusce in elit molestie, tempus nisl sed, rutrum lacus. Proin a congue metus, vitae mattis neque.\r\n              Fusce fermentum dignissim ligula. Sed non lacinia purus, vitae ullamcorper velit. Morbi sed varius eros, eget malesuada purus. Fusce ultrices ipsum in quam eleifend elementum eu quis ipsum. Phasellus consectetur massa vitae varius maximus. Duis sagittis est et tellus feugiat vulputate. Etiam non varius arcu. Integer auctor quam non sapien ullamcorper, nec posuere odio efficitur.\r\n            </div>'),
(2, 'refunds', '<h3 class=\"text-center page_header\">Zasady zwrotów</h3> <div class=\"text_container\"> <h4>1. Lorem ipsum</h4> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet lorem quam, eu venenatis ipsum accumsan et. Aliquam aliquet sem et nibh lobortis, vel malesuada elit dignissim. Donec interdum nibh in mi efficitur fermentum vitae sit amet nisi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc porttitor hendrerit ipsum nec suscipit. Duis est orci, iaculis sed efficitur non, laoreet commodo massa. Sed tortor nisi, consectetur eu magna ut, finibus sodales massa. Fusce in elit molestie, tempus nisl sed, rutrum lacus. Proin a congue metus, vitae mattis neque. Fusce fermentum dignissim ligula. Sed non lacinia purus, vitae ullamcorper velit. Morbi sed varius eros, eget malesuada purus. Fusce ultrices ipsum in quam eleifend elementum eu quis ipsum. Phasellus consectetur massa vitae varius maximus. Duis sagittis est et tellus feugiat vulputate. Etiam non varius arcu. Integer auctor quam non sapien ullamcorper, nec posuere odio efficitur. </div> <div class=\"text_container\"> <h4>2. Lorem ipsum</h4> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet lorem quam, eu venenatis ipsum accumsan et. Aliquam aliquet sem et nibh lobortis, vel malesuada elit dignissim. Donec interdum nibh in mi efficitur fermentum vitae sit amet nisi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc porttitor hendrerit ipsum nec suscipit. Duis est orci, iaculis sed efficitur non, laoreet commodo massa. Sed tortor nisi, consectetur eu magna ut, finibus sodales massa. Fusce in elit molestie, tempus nisl sed, rutrum lacus. Proin a congue metus, vitae mattis neque. Fusce fermentum dignissim ligula. Sed non lacinia purus, vitae ullamcorper velit. Morbi sed varius eros, eget malesuada purus. Fusce ultrices ipsum in quam eleifend elementum eu quis ipsum. Phasellus consectetur massa vitae varius maximus. Duis sagittis est et tellus feugiat vulputate. Etiam non varius arcu. Integer auctor quam non sapien ullamcorper, nec posuere odio efficitur. </div> <div class=\"text_container\"> <h4>3. Lorem ipsum</h4> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet lorem quam, eu venenatis ipsum accumsan et. Aliquam aliquet sem et nibh lobortis, vel malesuada elit dignissim. Donec interdum nibh in mi efficitur fermentum vitae sit amet nisi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc porttitor hendrerit ipsum nec suscipit. Duis est orci, iaculis sed efficitur non, laoreet commodo massa. Sed tortor nisi, consectetur eu magna ut, finibus sodales massa. Fusce in elit molestie, tempus nisl sed, rutrum lacus. Proin a congue metus, vitae mattis neque. Fusce fermentum dignissim ligula. Sed non lacinia purus, vitae ullamcorper velit. Morbi sed varius eros, eget malesuada purus. Fusce ultrices ipsum in quam eleifend elementum eu quis ipsum. Phasellus consectetur massa vitae varius maximus. Duis sagittis est et tellus feugiat vulputate. Etiam non varius arcu. Integer auctor quam non sapien ullamcorper, nec posuere odio efficitur. </div>'),
(3, 'policy', '<h3 class=\"text-center page_header\">Polityka prywatności</h3> <div class=\"text_container\"> <h4>1. Lorem ipsum</h4> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet lorem quam, eu venenatis ipsum accumsan et. Aliquam aliquet sem et nibh lobortis, vel malesuada elit dignissim. Donec interdum nibh in mi efficitur fermentum vitae sit amet nisi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc porttitor hendrerit ipsum nec suscipit. Duis est orci, iaculis sed efficitur non, laoreet commodo massa. Sed tortor nisi, consectetur eu magna ut, finibus sodales massa. Fusce in elit molestie, tempus nisl sed, rutrum lacus. Proin a congue metus, vitae mattis neque. Fusce fermentum dignissim ligula. Sed non lacinia purus, vitae ullamcorper velit. Morbi sed varius eros, eget malesuada purus. Fusce ultrices ipsum in quam eleifend elementum eu quis ipsum. Phasellus consectetur massa vitae varius maximus. Duis sagittis est et tellus feugiat vulputate. Etiam non varius arcu. Integer auctor quam non sapien ullamcorper, nec posuere odio efficitur. </div> <div class=\"text_container\"> <h4>2. Lorem ipsum</h4> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet lorem quam, eu venenatis ipsum accumsan et. Aliquam aliquet sem et nibh lobortis, vel malesuada elit dignissim. Donec interdum nibh in mi efficitur fermentum vitae sit amet nisi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc porttitor hendrerit ipsum nec suscipit. Duis est orci, iaculis sed efficitur non, laoreet commodo massa. Sed tortor nisi, consectetur eu magna ut, finibus sodales massa. Fusce in elit molestie, tempus nisl sed, rutrum lacus. Proin a congue metus, vitae mattis neque. Fusce fermentum dignissim ligula. Sed non lacinia purus, vitae ullamcorper velit. Morbi sed varius eros, eget malesuada purus. Fusce ultrices ipsum in quam eleifend elementum eu quis ipsum. Phasellus consectetur massa vitae varius maximus. Duis sagittis est et tellus feugiat vulputate. Etiam non varius arcu. Integer auctor quam non sapien ullamcorper, nec posuere odio efficitur. </div> <div class=\"text_container\"> <h4>3. Lorem ipsum</h4> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet lorem quam, eu venenatis ipsum accumsan et. Aliquam aliquet sem et nibh lobortis, vel malesuada elit dignissim. Donec interdum nibh in mi efficitur fermentum vitae sit amet nisi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc porttitor hendrerit ipsum nec suscipit. Duis est orci, iaculis sed efficitur non, laoreet commodo massa. Sed tortor nisi, consectetur eu magna ut, finibus sodales massa. Fusce in elit molestie, tempus nisl sed, rutrum lacus. Proin a congue metus, vitae mattis neque. Fusce fermentum dignissim ligula. Sed non lacinia purus, vitae ullamcorper velit. Morbi sed varius eros, eget malesuada purus. Fusce ultrices ipsum in quam eleifend elementum eu quis ipsum. Phasellus consectetur massa vitae varius maximus. Duis sagittis est et tellus feugiat vulputate. Etiam non varius arcu. Integer auctor quam non sapien ullamcorper, nec posuere odio efficitur. </div>');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `delivery`
--

CREATE TABLE `delivery` (
  `id` int NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prepayment` double NOT NULL,
  `charging` double NOT NULL,
  `delivery_time` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `delivery`
--

INSERT INTO `delivery` (`id`, `type`, `prepayment`, `charging`, `delivery_time`) VALUES
(1, 'Poczta Polska', 12.99, 12.99, 2),
(3, 'Inpost', 8, 10, 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_01_09_133659_create_sessions_table', 1),
(5, '2021_01_09_191400_products', 2),
(6, '2021_01_09_191706_password_resets', 2),
(7, '2021_01_10_104733_create_permission_tables', 3);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(2, 'App\\Models\\User', 18),
(2, 'App\\Models\\User', 20),
(2, 'App\\Models\\User', 21);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` bigint UNSIGNED NOT NULL,
  `products_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `orders`
--

INSERT INTO `orders` (`id`, `status`, `id_user`, `products_id`, `address`, `value`) VALUES
(1, 'create', 18, '27', 'RYBNICA 58-512 Stara kamienica', '4188'),
(2, 'create', 18, '27', 'RYBNICA 58-512 Stara kamienica', '4188'),
(3, 'create', 18, '27', 'RYBNICA 58-512 Stara kamienica', '4188'),
(4, 'create', 18, '27', 'RYBNICA 58-512 Stara kamienica', '2094'),
(5, 'create', 18, '27,19', 'RYBNICA 58-512 Stara kamienica', '2593');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('mrhdolek14@gmail.com', '$2y$10$kjv/0ShaqxwxwEp5PMXmSuCNPdEEXnDf0n2GjQECiagD7VQqVHVcy', '2021-01-10 11:34:41');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'web', '2021-01-10 12:01:13', '2021-01-10 12:01:13'),
(2, 'role-create', 'web', '2021-01-10 12:01:13', '2021-01-10 12:01:13'),
(3, 'role-edit', 'web', '2021-01-10 12:01:13', '2021-01-10 12:01:13'),
(4, 'role-delete', 'web', '2021-01-10 12:01:13', '2021-01-10 12:01:13'),
(5, 'product-list', 'web', '2021-01-10 12:01:13', '2021-01-10 12:01:13'),
(6, 'product-create', 'web', '2021-01-10 12:01:13', '2021-01-10 12:01:13'),
(7, 'product-edit', 'web', '2021-01-10 12:01:13', '2021-01-10 12:01:13'),
(8, 'product-delete', 'web', '2021-01-10 12:01:13', '2021-01-10 12:01:13');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `products`
--

CREATE TABLE `products` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `id_categories` int NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `id_categories`, `image`, `created_at`, `updated_at`) VALUES
(1, 'SilentiumPC Vero L3 600W 80 Plus Bronze', 'Custom description', 220.9, 34, NULL, '2021-01-11 00:14:39', '2021-01-11 00:14:39'),
(2, 'Corsair CV 550W 80 Plus Bronze', 'Custom description', 439.25, 34, NULL, '2021-01-11 00:14:39', '2021-01-11 00:14:39'),
(3, 'be quiet! Straight Power 11 750W 80 Plus Gold', 'Custom description', 619.2, 34, NULL, '2021-01-11 00:14:39', '2021-01-11 00:14:39'),
(4, 'SilentiumPc Superemo FM2 750W Plus Gold', 'Custom description', 229, 34, NULL, '2021-01-11 00:14:39', '2021-01-11 00:14:39'),
(5, 'SilentiumPc Superemo FM2 650W Plus Gold', 'Custom description', 200, 34, NULL, '2021-01-11 00:14:39', '2021-01-11 00:14:39'),
(6, 'Seasonic Focus GX 750W 80 Plus Gold', 'Custom description', 599, 34, NULL, '2021-01-11 00:14:39', '2021-01-11 00:14:39'),
(7, 'G.SKILL 16GB (2x8GB) 3200MHz CL16 Aegis', 'Custom description', 319.5, 35, NULL, '2021-01-11 00:14:39', '2021-01-11 00:14:39'),
(8, 'GOODRAM 16GB (2x8GB) 2666MHz CL16 IRDM', 'Custom description', 274, 35, NULL, '2021-01-11 00:14:39', '2021-01-11 00:14:39'),
(9, 'HyperX 16GB (2x8GB) 3200MHz CL16 Fury RGB', 'Custom description', 365, 35, NULL, '2021-01-11 00:14:39', '2021-01-11 00:14:39'),
(10, 'G.SKILL 32GB (2x16GB) 4000MHz CL16 Ripjaws V Black', 'Custom description', 799, 35, NULL, '2021-01-11 00:14:39', '2021-01-11 00:14:39'),
(11, 'G.SKILL 16GB (2x8GB) 3600MHz CL17 Ripjaws V Black', 'Custom description', 359, 35, NULL, '2021-01-11 00:14:39', '2021-01-11 00:14:39'),
(12, 'GOODRAM 4GB (1x4GB) 1600MHz CL11', 'Custom description', 84, 35, NULL, '2021-01-11 00:14:39', '2021-01-11 00:14:39'),
(13, 'Gigabyte GeForce RTX 3070 GAMING OC 8GB GDDR6', 'Custom description', 2979, 36, NULL, '2021-01-11 00:14:39', '2021-01-11 00:14:39'),
(14, 'Zotac GeForce GTX 1650 Gaming AMP CORE GDDR6 4GB', 'Custom description', 719, 36, NULL, '2021-01-11 00:14:39', '2021-01-11 00:14:39'),
(15, 'MSI GeForce GTX 1660 VENTUS XS OC 6GB GDDR5', 'Custom description', 1249, 36, NULL, '2021-01-11 00:14:39', '2021-01-11 00:14:39'),
(16, 'Sapphire Radeon RX 5700 XT Pulse BE 8GB GDDR6', 'Custom description', 2199, 36, NULL, '2021-01-11 00:14:39', '2021-01-11 00:14:39'),
(17, 'ASUS Radeon RX 550 Phoenix EVO 4GB GDDR5', 'Custom description', 399, 36, NULL, '2021-01-11 00:14:39', '2021-01-11 00:14:39'),
(18, 'Gigabyte GeForce RTX 3080 GAMING OC 10GB GDDR6X', 'Custom description', 3749, 36, NULL, '2021-01-11 00:14:39', '2021-01-11 00:14:39'),
(19, 'Gigabyte B450M DS3H', 'Custom description', 499, 37, NULL, '2021-01-11 00:14:39', '2021-01-11 00:14:39'),
(21, 'ASRock B450M-HDV R4.0', 'Custom description', 529, 37, NULL, '2021-01-11 00:14:39', '2021-01-11 00:14:39'),
(22, 'MSI MPG Z490 GAMING PLUS', 'Custom description', 499, 37, NULL, '2021-01-11 00:14:39', '2021-01-11 00:14:39'),
(23, 'SilentiumPC Fera 3 120mm', 'Custom description', 105, 38, NULL, '2021-01-11 00:14:39', '2021-01-11 00:14:39'),
(24, 'SilentiumPC Navis RGB 240 2x120mm', 'Custom description', 319, 38, NULL, '2021-01-11 00:14:39', '2021-01-11 00:14:39'),
(25, 'SilentiumPC Spartan 4 100mm', 'Custom description', 65, 38, NULL, '2021-01-11 00:14:39', '2021-01-11 00:14:39'),
(26, 'SilentiumPC Navis Evo ARGB 240 2x120mm', 'Custom description', 379, 38, NULL, '2021-01-11 00:14:39', '2021-01-11 00:14:39'),
(27, 'WD Elements Portable 1TB USB 3.0', 'Custom description', 2094, 39, NULL, '2021-01-11 00:14:39', '2021-01-17 19:30:37'),
(28, 'Silicon Power armor A30 2TB USB 3.0', 'Custom description', 349, 39, NULL, '2021-01-11 00:14:39', '2021-01-11 00:14:39'),
(29, 'Kingston 500GB M.2 PcIe NVMe A2000', 'Custom description', 289, 40, NULL, '2021-01-11 00:14:39', '2021-01-11 00:14:39'),
(30, 'KIOXIA 480GB 2,5 SATA SSD EXCERIA BDQ', 'Custom description', 279.2, 40, NULL, '2021-01-11 00:14:39', '2021-01-11 00:14:39'),
(31, 'Intel Core i5-10400F', 'Custom description', 699, 41, NULL, '2021-01-11 00:14:39', '2021-01-11 00:14:39'),
(32, 'Intel Core i9-10850K AE', 'Custom description', 2149, 41, NULL, '2021-01-11 00:14:39', '2021-01-11 00:14:39'),
(33, 'AMD Ryzen 5 3600', 'Custom description', 1069, 41, NULL, '2021-01-11 00:14:39', '2021-01-11 00:14:39'),
(34, 'AMD Ryzen Threadripper 3990X', 'Custom description', 18400, 41, NULL, '2021-01-11 00:14:39', '2021-01-11 00:14:39'),
(173, 'test_dodania', 'test_dodania', 12, 35, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `product_categories`
--

CREATE TABLE `product_categories` (
  `id` int NOT NULL,
  `categories` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `product_categories`
--

INSERT INTO `product_categories` (`id`, `categories`) VALUES
(34, 'psu'),
(35, 'ram'),
(36, 'gpu'),
(37, 'motherboard'),
(38, 'cooler'),
(39, 'hdd'),
(40, 'ssd'),
(41, 'cpu'),
(42, 'test');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'web', '2021-01-10 12:11:11', '2021-01-10 12:11:11');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 2),
(2, 2),
(3, 2),
(4, 2),
(5, 2),
(6, 2),
(7, 2),
(8, 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('8yPoDCm8v2cWmAfCCdFoRryMpjUpIgFjvsqWxJUE', 18, '77.253.4.13', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoicWtHVUxOOG02NHNaUWg4b1JJUWw4MFBjTGJMNXBQa3VBWUxiczhydSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly85NS4xMTEuMjQyLjExMDo4MDcwIjt9czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE4O30=', 1610930988),
('t3pr3zf9VizCofP6nahqQxravFSgjxjACqvC2se7', NULL, '45.10.139.220', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiV2VzSXFYV2FnRzVneEQ2TkZCQ2Y1NUdkZExObG9IQ2s0OVZrTzNuYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly85NS4xMTEuMjQyLjExMDo4MDcwL3Nob3AvcHJvZHVjdHMvMTczIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo0OiJjYXJ0IjthOjE6e2k6MTczO2E6NDp7czo0OiJuYW1lIjtzOjEyOiJ0ZXN0X2RvZGFuaWEiO3M6ODoicXVhbnRpdHkiO2k6MTtzOjU6InByaWNlIjtkOjEyO3M6NToicGhvdG8iO047fX1zOjM6InVybCI7YToxOntzOjg6ImludGVuZGVkIjtzOjM3OiJodHRwOi8vOTUuMTExLjI0Mi4xMTA6ODA3MC9zaG9wL29yZGVyIjt9fQ==', 1610927590);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(18, 'admin', 'admin@admin.pl', '2021-01-10 19:32:40', '$2y$10$Satm2LBhhxL4P93U5ohnAe3jQjmSRPrjtQIMdZlOPpizPKnDYVvCO', NULL, '2021-01-10 12:11:11', '2021-01-10 19:32:40'),
(20, 'Aleksander Kowalski', 'mrhdolek14@gmail.com', '2021-01-10 13:05:33', '$2y$10$bk021wPO2aWVB5MR41z5M.sVvoK0eu4Iq/GJfR8jlOgUXsQqa4hVW', NULL, '2021-01-10 13:05:19', '2021-01-10 13:05:33'),
(21, 'AnnaFret', 'frettanna@gmail.com', NULL, '$2y$10$PRVM38AcbA0UQv70ORRqf.dwJyTth2z8zR.5gVtfctYY/KWQxY9s.', NULL, '2021-01-11 15:39:09', '2021-01-11 15:39:09'),
(22, 'Juzef Kowalski', 'OLEK917@interia.eu', '2021-01-17 20:58:16', '$2y$10$fhOz/20ipaiU2xsV1zfWw.DrRiGmW7wSmwX0puyZGOZTehiu78Ima', NULL, '2021-01-17 20:58:08', '2021-01-17 20:58:16');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `ad`
--
ALTER TABLE `ad`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indeksy dla tabeli `content_web`
--
ALTER TABLE `content_web`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeksy dla tabeli `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeksy dla tabeli `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeksy dla tabeli `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeksy dla tabeli `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeksy dla tabeli `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categories` (`id_categories`);

--
-- Indeksy dla tabeli `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indeksy dla tabeli `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `ad`
--
ALTER TABLE `ad`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT dla tabeli `content_web`
--
ALTER TABLE `content_web`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT dla tabeli `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT dla tabeli `products`
--
ALTER TABLE `products`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;

--
-- AUTO_INCREMENT dla tabeli `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT dla tabeli `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `ad`
--
ALTER TABLE `ad`
  ADD CONSTRAINT `ad_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ograniczenia dla tabeli `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Ograniczenia dla tabeli `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ograniczenia dla tabeli `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ograniczenia dla tabeli `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_categories`) REFERENCES `product_categories` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ograniczenia dla tabeli `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
