-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2022 at 08:48 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminlte-generator`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `parent_id` int(9) DEFAULT NULL,
  `slug` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `name`, `description`, `status`, `parent_id`, `slug`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, 'Electronics', NULL, 0, NULL, 'Electronics', NULL, '2022-11-13 23:12:22', '2022-11-13 23:12:22', NULL),
(2, NULL, 'E-Cigarettes', NULL, 0, 1, 'E-Cigarettes', NULL, '2022-11-13 23:12:35', '2022-11-13 23:12:35', NULL),
(3, NULL, 'E-Cigarette Kits', NULL, 0, 2, 'E-Cigarette Kits', NULL, '2022-11-13 23:12:53', '2022-11-13 23:12:53', NULL),
(4, NULL, 'E-cig Accessories', NULL, 0, 2, 'E-cig Accessories', NULL, '2022-11-13 23:13:14', '2022-11-13 23:13:14', NULL),
(5, NULL, 'Digital Cameras', NULL, 0, 1, 'Digital Cameras', NULL, '2022-11-13 23:14:19', '2022-11-13 23:14:19', NULL),
(6, NULL, 'Action Cam Accessories', NULL, 0, 5, 'Action Cam Accessories', NULL, '2022-11-13 23:14:38', '2022-11-13 23:14:38', NULL),
(7, NULL, 'USB Flash Drives', NULL, 0, 5, 'USB Flash Drives', NULL, '2022-11-13 23:14:55', '2022-11-13 23:14:55', NULL),
(8, NULL, 'Sports & Outdoors', NULL, 0, NULL, 'Sports & Outdoors', NULL, '2022-11-13 23:15:13', '2022-11-13 23:15:13', NULL),
(9, NULL, 'Athletic & Outdoor Apparel,Shoes', NULL, 0, 8, 'Athletic & Outdoor Apparel,Shoes', NULL, '2022-11-13 23:16:21', '2022-11-13 23:16:21', NULL),
(10, NULL, 'Soccer Wear', NULL, 0, 9, 'Soccer Wear', NULL, '2022-11-13 23:16:51', '2022-11-13 23:16:51', NULL),
(11, NULL, 'Cycling', NULL, 0, 8, 'Cycling', NULL, '2022-11-13 23:17:28', '2022-11-13 23:17:28', NULL),
(12, NULL, 'Bicycle Accessories', NULL, 0, 11, 'Bicycle Accessories', NULL, '2022-11-13 23:18:35', '2022-11-13 23:18:35', NULL),
(14, NULL, 'Jewelry & Watches', NULL, 0, NULL, 'Jewelry & Watches', NULL, '2022-11-14 06:16:45', '2022-11-14 06:16:45', NULL),
(16, NULL, 'Jewelry', NULL, 0, 14, 'Jewelry', NULL, '2022-11-14 06:20:16', '2022-11-14 06:20:16', NULL),
(17, NULL, 'Bracelets', NULL, 0, 16, 'Bracelets', NULL, '2022-11-14 06:20:34', '2022-11-14 06:20:34', NULL),
(18, NULL, 'Bangles', NULL, 0, 16, 'Bangles', NULL, '2022-11-14 06:20:48', '2022-11-14 06:20:48', NULL),
(19, NULL, 'Charm Bracelets', NULL, 0, 16, 'Charm Bracelets', NULL, '2022-11-14 06:21:00', '2022-11-14 06:21:00', NULL),
(20, NULL, 'Necklaces & Pendants', NULL, 0, 14, 'Necklaces & Pendants', NULL, '2022-11-14 06:23:29', '2022-11-14 06:23:29', NULL),
(21, NULL, 'Fine Jewelry', NULL, 0, 14, 'Fine Jewelry', NULL, '2022-11-14 06:32:09', '2022-11-14 06:32:09', NULL),
(22, NULL, 'Earrings', NULL, 0, 20, 'Earrings', NULL, '2022-11-14 06:32:22', '2022-11-14 06:32:22', NULL),
(23, NULL, 'Silver Jewelry', NULL, 0, 21, 'Silver Jewelry', NULL, '2022-11-14 06:32:50', '2022-11-14 06:32:50', NULL),
(24, NULL, 'Health & Beauty', NULL, 0, NULL, 'Health & Beauty', NULL, '2022-11-20 07:52:48', '2022-11-20 07:52:48', NULL),
(25, NULL, 'Makeup', NULL, 0, 24, 'Makeup', NULL, '2022-11-20 07:53:11', '2022-11-20 07:53:11', NULL),
(26, NULL, 'Eye Shadow', NULL, 0, 25, 'Eye-Shadow', NULL, '2022-11-20 07:53:46', '2022-11-20 07:53:46', NULL),
(27, NULL, 'Mascara', NULL, 0, 25, 'Mascara', NULL, '2022-11-21 07:05:57', '2022-11-21 07:05:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `couponcode`
--

CREATE TABLE `couponcode` (
  `id` int(10) UNSIGNED NOT NULL,
  `coupon_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` datetime NOT NULL,
  `expiry_date` datetime NOT NULL,
  `coupon_count` smallint(6) NOT NULL,
  `coupon_type` smallint(6) NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `couponcode`
--

INSERT INTO `couponcode` (`id`, `coupon_code`, `start_date`, `expiry_date`, `coupon_count`, `coupon_type`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'WELCOME', '2022-11-15 12:11:35', '2022-11-30 12:11:36', 3, 1, '1', '2022-11-15 01:11:42', '2022-11-15 01:11:42', NULL),
(2, 'WELCOME2', '2022-11-15 12:29:29', '2022-11-30 12:29:31', 5, 1, '1', '2022-11-15 01:29:37', '2022-11-15 01:29:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupon_code_id` int(11) NOT NULL,
  `codes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_used` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_used` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `coupon_code_id`, `codes`, `is_used`, `status`, `user_id`, `date_used`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'WELCOME_4YE', 0, 1, 1, '2022-11-15', '2022-11-15 01:11:43', '2022-11-15 01:11:43', NULL),
(2, 1, 'WELCOME_4YE', 0, 1, 1, '2022-11-15', '2022-11-15 01:11:43', '2022-11-15 01:11:43', NULL),
(3, 1, 'WELCOME_4YE', 0, 1, 1, '2022-11-15', '2022-11-15 01:11:44', '2022-11-15 01:11:44', NULL),
(4, 2, 'WELCOME2_J5E', 0, 1, 1, '2022-11-15', '2022-11-15 01:29:37', '2022-11-15 01:29:37', NULL),
(5, 2, 'WELCOME2_J5E', 1, 1, 1, '2022-11-15', '2022-11-15 01:29:37', '2022-11-15 01:29:37', NULL),
(6, 2, 'WELCOME2_J5E', 0, 1, 1, '2022-11-15', '2022-11-15 01:29:37', '2022-11-15 01:29:37', NULL),
(7, 2, 'WELCOME2_J5E', 1, 1, 1, '2022-11-15', '2022-11-15 01:29:37', '2022-11-15 01:29:37', NULL),
(8, 2, 'WELCOME2_J5E', 0, 1, 1, '2022-11-15', '2022-11-15 01:29:37', '2022-11-15 01:29:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2022_11_04_071430_create_categories_table', 2),
(11, '2014_10_12_000000_create_users_table', 3),
(12, '2014_10_12_100000_create_password_resets_table', 3),
(13, '2019_08_19_000000_create_failed_jobs_table', 3),
(14, '2019_12_14_000001_create_personal_access_tokens_table', 3),
(15, '2022_11_04_135853_create_products_table', 4),
(16, '2022_11_05_132642_create_categories_table', 5),
(17, '2022_11_05_133742_create_categories_table', 6),
(18, '2022_11_06_082247_create_posts_table', 7),
(19, '2022_11_06_082800_create_sub_categories_table', 8),
(20, '2022_11_06_083825_create_posts_table', 9),
(21, '2022_11_08_052443_create_pictures_table', 10),
(22, '2022_11_11_110340_create_permission_tables', 11),
(23, '2022_11_11_110714_create_products_table', 12),
(27, '2022_11_14_140049_create_couponcode_table', 13),
(28, '2022_11_15_050035_create_coupons_table', 14),
(29, '2022_11_19_163030_create_employees_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(3, 'App\\Models\\User', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'web', '2022-11-11 05:55:07', '2022-11-11 05:55:07'),
(2, 'role-create', 'web', '2022-11-11 05:55:07', '2022-11-11 05:55:07'),
(3, 'role-edit', 'web', '2022-11-11 05:55:08', '2022-11-11 05:55:08'),
(4, 'role-delete', 'web', '2022-11-11 05:55:08', '2022-11-11 05:55:08'),
(5, 'product-list', 'web', '2022-11-11 05:55:08', '2022-11-11 05:55:08'),
(6, 'product-create', 'web', '2022-11-11 05:55:08', '2022-11-11 05:55:08'),
(7, 'product-edit', 'web', '2022-11-11 05:55:08', '2022-11-11 05:55:08'),
(8, 'product-delete', 'web', '2022-11-11 05:55:08', '2022-11-11 05:55:08'),
(9, 'product-delete1', 'web', '2022-11-11 05:55:08', '2022-11-11 05:55:08');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `profile_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`id`, `profile_name`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'AAAA', '636e293abd82b.png', '2022-11-11 05:21:40', '2022-11-11 05:21:40', NULL),
(3, 'BBBB', '636e3d800549e.png', '2022-11-11 06:48:10', '2022-11-11 06:48:10', NULL),
(4, 'ads Sunday', '6370f535ddf7c.png', '2022-11-13 08:16:38', '2022-11-13 08:16:38', NULL),
(5, 'adsada', '63734ee3b7e3e.png', '2022-11-15 03:03:41', '2022-11-15 03:03:41', NULL),
(6, 'asdasd', '637905d319cc8.png', '2022-11-19 11:05:32', '2022-11-19 11:05:32', NULL),
(7, 'zsdfaaaaaaaaaaa', '637b64e4569be.png', '2022-11-21 06:15:57', '2022-11-21 06:15:57', NULL),
(8, 'wwwwww2222', '637b65dc21e87.png', '2022-11-21 06:20:04', '2022-11-21 06:20:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'asdfg', '<p>You may pass a third argument to the method to change the string that will be appended to the end of the truncated string:You may pass a third argument to the method to change the string that will be appended to the end of the truncated string:You may pass a third argument to the method to change the string that will be appended to the end of the truncated string:You may pass a third argument to the method to change the string that will be appended to the end of the truncated string:You may pass a third argument to the method to change the string that will be appended to the end of the truncated string:You may pass a third argument to the method to change the string that will be appended to the end of the truncated string:</p>', '2022-11-06 04:36:59', '2022-11-07 01:25:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` int(9) NOT NULL,
  `sub_cat_id` int(9) DEFAULT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `detail`, `cat_id`, `sub_cat_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Makeup Eye shadow WILD WEST', '<p>Welcome to our fashion store, our company is mainly engaged in the sales of keychains, fashion bags, handbags, sunglasses, shoes and cosmetics. The company has been established for 5 years, mainly based on integrity management, first-class service, superior supply of goods, and fast delivery as its operating principles. If you have any questions during the purchase process, you can communicate with our customer service staff at any time, and we will answer your questions as soon as possible. You can also buy all the items of our company. Large orders have big discounts, I wish you a happy shopping, thank you!</p>', 26, NULL, '637b6f5714166.png', '2022-11-21 07:00:18', '2022-11-21 07:40:13'),
(2, 'Dual colors Eye Shadow Palette Shimmer', '<p>Dual colors Eye Shadow Palette Shimmer Gradient Makeup Waterproof Long Lasting Makeup Powerder Eyeshadow mixed Color Change glitter Matter</p>', 26, NULL, '637b6ffb6b778.png', '2022-11-21 07:03:53', '2022-11-21 07:40:02'),
(3, 'New Liquid Lash Extensions Mascara', '<p>New Liquid Lash Extensions Mascara Brynn Rich Black Mascara Lashes Brand Cosmetics Dramatic Long 0.38oz Full Size 10.7g</p>', 27, NULL, '637b712b656e9.png', '2022-11-21 07:08:06', '2022-11-21 07:39:35'),
(4, 'Newest 2 Colors Eye Shadow Platette Matte Polarized Glitter', '<p>Newest 2 Colors Eye Shadow Platette Matte Polarized GlitterNewest 2 Colors Eye Shadow Platette Matte Polarized GlitterNewest 2 Colors Eye Shadow Platette Matte Polarized GlitterNewest 2 Colors Eye Shadow Platette Matte Polarized GlitterNewest 2 Colors Eye Shadow Platette Matte Polarized GlitterNewest 2 Colors Eye Shadow Platette Matte Polarized GlitterNewest 2 Colors Eye Shadow Platette Matte Polarized GlitterNewest 2 Colors Eye Shadow Platette Matte Polarized Glitter</p>', 26, NULL, '637c48ef28ee4.png', '2022-11-21 22:30:27', '2022-11-21 22:30:27'),
(5, 'STOCK James Charles Palette Eyeshadow', '<p>STOCK James Charles Palette EyeshadowSTOCK James Charles Palette EyeshadowSTOCK James Charles Palette EyeshadowSTOCK James Charles Palette EyeshadowSTOCK James Charles Palette EyeshadowSTOCK James Charles Palette Eyeshadow</p>', 26, NULL, '637c779167544.png', '2022-11-22 01:48:03', '2022-11-22 01:48:03');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'web', '2022-11-11 05:57:37', '2022-11-11 06:46:24'),
(2, 'Admin', 'web', '2022-11-11 06:08:57', '2022-11-11 06:46:40'),
(3, 'New role', 'web', '2022-11-15 03:01:39', '2022-11-15 03:01:39');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 3),
(2, 1),
(2, 3),
(3, 1),
(4, 1),
(5, 1),
(5, 2),
(6, 1),
(7, 1),
(8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `is_hot` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `title`, `description`, `category_id`, `status`, `image`, `created_at`, `updated_at`, `deleted_at`, `is_hot`) VALUES
(1, 'ad', 'asdadsdad', 1, 1, 'E:\\xampp\\tmp\\phpFDCE.tmp', '2022-11-06 04:45:46', '2022-11-06 04:45:46', NULL, 0),
(2, 'zcxzxczc', '<p>zczxczz cczxcz</p>', 1, 1, 'E:\\xampp\\tmp\\php7486.tmp', '2022-11-11 07:01:53', '2022-11-11 07:01:53', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hardik Savani', 'admin@gmail.com', NULL, '$2y$10$gcpFbEYUwieKgMsZHW.Ja.Pvh9b4B3lqb1VqK0OVQ9..ylyGefDIy', NULL, '2022-11-11 05:57:37', '2022-11-11 05:57:37'),
(2, 'admin', 'subadmin@gmail.com', NULL, '$2y$10$Dbipdv358sAXq8KmV6ciu.EaYLuXWsGl9fwTDgIUIpqoh/efOhzzG', NULL, '2022-11-11 06:09:29', '2022-11-11 06:50:48'),
(4, 'test', 'test@gmail.com', NULL, '$2y$10$h9ggViEfrHrCbFbeTPwTWu4bX4mLJc4ap8thAC2vHsnIiH36sUJz6', NULL, '2022-11-15 03:02:04', '2022-11-15 03:02:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `couponcode`
--
ALTER TABLE `couponcode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `couponcode`
--
ALTER TABLE `couponcode`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
