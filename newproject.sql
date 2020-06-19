-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2020 at 11:45 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `customers_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE IF NOT EXISTS `districts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `division_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `districts_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `division_id`, `name`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 1, 'Bogura', 1, 1, NULL, '2020-06-18 08:05:51', '2020-06-18 08:05:51'),
(2, 1, 'Pabna', 1, 1, NULL, '2020-06-18 08:06:14', '2020-06-18 08:06:14'),
(3, 1, 'Gaibhanda', 1, 1, NULL, '2020-06-18 08:06:39', '2020-06-18 08:06:39');

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE IF NOT EXISTS `divisions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `divisions_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `name`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Rajshahi', 1, 1, NULL, '2020-06-18 08:03:41', '2020-06-18 08:03:41'),
(2, 'Dhaka', 1, 1, NULL, '2020-06-18 08:03:57', '2020-06-18 08:03:57'),
(3, 'Barishal', 1, 1, NULL, '2020-06-18 08:04:08', '2020-06-18 08:04:08'),
(4, 'Seleyt', 1, 1, NULL, '2020-06-18 08:05:28', '2020-06-18 08:05:28');

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
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(29, '2014_10_12_000000_create_users_table', 1),
(30, '2014_10_12_100000_create_password_resets_table', 1),
(31, '2019_08_19_000000_create_failed_jobs_table', 1),
(32, '2020_05_16_032756_create_suppliers_table', 1),
(33, '2020_05_16_054816_create_customers_table', 1),
(34, '2020_05_16_082146_create_units_table', 1),
(35, '2020_05_16_091755_create_categories_table', 1),
(36, '2020_05_16_102357_create_products_table', 1),
(37, '2020_05_16_142554_create_purchases_table', 1),
(38, '2020_06_03_151341_create_divisions_table', 1),
(39, '2020_06_03_164244_create_districts_table', 1),
(40, '2020_06_05_011006_create_upazilas_table', 1),
(41, '2020_06_17_151847_create_unions_table', 1),
(43, '2020_06_18_170422_create_wards_table', 2),
(44, '2020_06_19_023605_create_ward_nos_table', 3),
(46, '2020_06_19_052539_create_villages_table', 4);

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
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `supplier_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_id` int(11) DEFAULT NULL,
  `quantity` double NOT NULL DEFAULT '0',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE IF NOT EXISTS `purchases` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `supplier_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `purchase_no` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `buying_qty` double DEFAULT NULL,
  `unit_price` double DEFAULT NULL,
  `buying_price` double DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=Pending,1=Approved',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE IF NOT EXISTS `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `suppliers_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `unions`
--

CREATE TABLE IF NOT EXISTS `unions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `division_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `upazila_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unions_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `unions`
--

INSERT INTO `unions` (`id`, `division_id`, `district_id`, `upazila_id`, `name`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 4, 'Gabtoli Union', 1, 1, NULL, '2020-06-18 09:37:14', '2020-06-18 20:20:46'),
(3, 1, 1, 4, 'naruyamala', 1, 1, NULL, '2020-06-18 09:55:13', '2020-06-18 09:55:13');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE IF NOT EXISTS `units` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `units_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `upazilas`
--

CREATE TABLE IF NOT EXISTS `upazilas` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `division_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `upazilas_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `upazilas`
--

INSERT INTO `upazilas` (`id`, `division_id`, `district_id`, `name`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Bogura', 1, 1, NULL, '2020-06-18 08:07:16', '2020-06-18 08:08:22'),
(2, 1, 1, 'Nandigram', 1, 1, NULL, '2020-06-18 08:07:38', '2020-06-18 08:07:38'),
(3, 1, 1, 'Sonatola', 1, 1, NULL, '2020-06-18 08:08:00', '2020-06-18 08:08:00'),
(4, 1, 1, 'Gabtoli', 1, 1, NULL, '2020-06-18 09:15:16', '2020-06-18 09:15:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `usertype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `usertype`, `name`, `email`, `mobile`, `address`, `gender`, `email_verified_at`, `password`, `status`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'Md Lutfor Rahman', 'webatozexpert@gmail.com', '+8801958499092', 'Bugura Gabtoli', 'Male', NULL, '$2y$10$UZlNJDETnnBGJvg7ay6GdeyNUlOWMxhu2I5U/cA8F.PB085/33NhG', 1, NULL, NULL, '2020-06-18 08:03:10', '2020-06-18 08:03:10');

-- --------------------------------------------------------

--
-- Table structure for table `villages`
--

CREATE TABLE IF NOT EXISTS `villages` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `division_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `upazila_id` int(11) NOT NULL,
  `union_id` int(11) NOT NULL,
  `ward_no_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `villages_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `villages`
--

INSERT INTO `villages` (`id`, `division_id`, `district_id`, `upazila_id`, `union_id`, `ward_no_id`, `name`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 4, 2, 2, 'Khidropery', 1, 1, 1, '2020-06-19 01:01:45', '2020-06-19 01:05:06'),
(3, 1, 1, 4, 2, 3, 'Unchurki', 1, 1, NULL, '2020-06-19 03:42:30', '2020-06-19 03:42:30');

-- --------------------------------------------------------

--
-- Table structure for table `wards`
--

CREATE TABLE IF NOT EXISTS `wards` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `division_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `upazila_id` int(11) NOT NULL,
  `union_id` int(11) NOT NULL,
  `ward_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `wards_ward_no_unique` (`ward_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ward_nos`
--

CREATE TABLE IF NOT EXISTS `ward_nos` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `division_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `upazila_id` int(11) NOT NULL,
  `union_id` int(11) NOT NULL,
  `ward_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ward_nos_ward_no_unique` (`ward_no`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ward_nos`
--

INSERT INTO `ward_nos` (`id`, `division_id`, `district_id`, `upazila_id`, `union_id`, `ward_no`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 4, 2, '8', 1, 1, 1, '2020-06-18 22:29:56', '2020-06-18 22:48:49'),
(3, 1, 1, 4, 2, '9', 1, 1, NULL, '2020-06-18 22:50:05', '2020-06-18 22:50:05'),
(4, 1, 1, 4, 2, '10', 1, 1, NULL, '2020-06-18 22:50:20', '2020-06-18 22:50:20');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
