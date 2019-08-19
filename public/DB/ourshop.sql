-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2019 at 09:30 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ourshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customer_name`, `mobile_number`, `address`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Sajeeb', '01686421050', 'Kanabari', 'Sajeeb', '2019-05-15 12:54:51', '2019-05-15 12:54:51'),
(2, 'Sohag', '01686421050', 'Banasree', 'Sohag', '2019-06-10 15:27:13', '2019-06-10 15:27:13');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2019_05_14_194537_create_users_table', 1),
(4, '2019_05_15_082155_create_customers_table', 1),
(5, '2019_05_15_082802_create_purchases_table', 2),
(6, '2019_05_15_082510_create_products_table', 3),
(8, '2019_05_19_074322_create_sales_table', 5),
(9, '2019_05_21_190233_add_selling_ptice_to_purchases', 6),
(10, '2019_08_17_170037_create_notifications_table', 7),
(11, '2014_10_12_100000_create_password_resets_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('6a86bd34-344f-49f9-90ca-d2a3c5a9ab94', 'App\\Notifications\\QuantityAlarming', 'App\\Models\\User', 1, '[\"Alarming quantity in stock :Rice Minicate\"]', NULL, '2019-08-17 13:19:53', '2019-08-17 13:19:53'),
('8863bccb-e7b7-4e5d-a0a7-a33109288597', 'App\\Notifications\\QuantityAlarming', 'App\\Models\\User', 1, '[\"Alarming quantity in stock :Dal Indian\"]', NULL, '2019-08-17 13:28:38', '2019-08-17 13:28:38'),
('a54e2ec9-2d09-4bfe-9a03-e89b85529af9', 'App\\Notifications\\QuantityAlarming', 'App\\Models\\User', 1, '[\"Alarming quantity in stock :Dal Indian\"]', NULL, '2019-08-18 00:55:33', '2019-08-18 00:55:33'),
('e8f7fb20-c075-4a63-953d-a030813d3b22', 'App\\Notifications\\QuantityAlarming', 'App\\Models\\User', 1, '[\"Alarming quantity in stock :Dal Indian\"]', NULL, '2019-08-17 13:37:15', '2019-08-17 13:37:15');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('shohagrana102@gmail.com', '$2y$10$oY.g0JKk/hG17DAOOZHt1e0mLDbuVhqkfRN.QzPasja4XJU8VuOx.', '2019-08-19 13:16:10');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `stock_quantity` int(11) NOT NULL,
  `alarm_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_id`, `stock_quantity`, `alarm_quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 5, '2019-05-18 15:04:04', '2019-08-17 13:19:52'),
(2, 2, 8, 20, '2019-06-10 15:27:37', '2019-08-18 00:55:33');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_price` double NOT NULL,
  `selling_price_unit` int(11) NOT NULL,
  `total_amount` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id`, `product_name`, `supplier`, `unit_price`, `selling_price_unit`, `total_amount`, `created_at`, `updated_at`) VALUES
(1, 'Rice Minicate', 'Roshid', 60, 0, 100000, '2019-05-15 13:36:01', '2019-05-15 13:36:01'),
(2, 'Dal Indian', 'Sujon', 1060, 0, 20000, '2019-05-15 13:45:14', '2019-06-10 16:20:59');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_amount` int(11) NOT NULL,
  `paid_amount` int(11) NOT NULL,
  `due_amount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `customer_id`, `product_id`, `quantity`, `total_amount`, `paid_amount`, `due_amount`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 20, 100, 50, 50, '2019-05-19 02:41:58', '2019-05-19 02:41:58'),
(3, 1, 1, 500, 100, 20, 80, '2019-05-19 12:47:02', '2019-06-10 15:04:02'),
(4, 1, 1, 50, 100, 50, 50, '2019-05-19 12:50:12', '2019-05-19 12:50:12'),
(5, 1, 1, 50, 100, 50, 50, '2019-05-19 13:01:59', '2019-05-19 13:01:59'),
(6, 1, 1, 50, 100, 50, 50, '2019-05-19 13:08:29', '2019-05-19 13:08:29'),
(7, 1, 1, 100, 100, 50, 50, '2019-05-19 13:08:51', '2019-05-19 13:08:51'),
(8, 1, 1, 50, 100, 100, 0, '2019-05-19 13:10:45', '2019-05-19 13:10:45'),
(9, 1, 1, 50, 100, 50, 50, '2019-05-19 13:27:46', '2019-05-19 13:27:46'),
(10, 1, 1, 2, 1000, 50, 100, '2019-05-19 13:33:30', '2019-05-19 13:33:30'),
(11, 1, 1, 11, 100, 50, 50, '2019-05-19 13:33:54', '2019-05-19 13:33:54'),
(12, 1, 1, 3, 1000, 100, 100, '2019-05-19 13:37:43', '2019-05-19 13:37:43'),
(13, 1, 1, 15, 100, 100, 100, '2019-05-19 13:38:54', '2019-05-19 13:38:54'),
(14, 1, 1, 12, 20, 23, 10, '2019-05-19 13:42:20', '2019-05-19 13:42:20'),
(15, 1, 1, 1, 100, 100, 100, '2019-05-19 13:44:14', '2019-05-19 13:44:14'),
(16, 1, 1, 15, 1000, 100, 1000, '2019-05-19 13:48:35', '2019-05-19 13:48:35'),
(17, 1, 1, 5, 10, 100, 100, '2019-05-19 14:05:47', '2019-05-19 14:05:47'),
(18, 1, 1, 5, 100, 100, 100, '2019-05-19 14:07:31', '2019-05-19 14:07:31'),
(19, 1, 1, 10, 100, 100, 1000, '2019-05-19 14:08:30', '2019-05-19 14:08:30'),
(20, 1, 1, 10, 100, 90, 10, '2019-05-19 14:32:39', '2019-06-10 15:29:39'),
(22, 2, 2, 2, 100, 50, 50, '2019-06-10 15:28:26', '2019-06-10 15:28:26'),
(23, 1, 1, 5, 500, 400, 100, '2019-08-17 11:59:56', '2019-08-17 11:59:56'),
(24, 1, 1, 5, 500, 400, 100, '2019-08-17 12:32:27', '2019-08-17 12:32:27'),
(25, 1, 1, 5, 500, 400, 100, '2019-08-17 12:39:55', '2019-08-17 12:39:55'),
(26, 1, 1, 5, 500, 400, 100, '2019-08-17 12:42:32', '2019-08-17 12:42:32'),
(27, 1, 1, 5, 500, 400, 100, '2019-08-17 12:43:23', '2019-08-17 12:43:23'),
(28, 1, 1, 1, 100, 100, 0, '2019-08-17 12:47:36', '2019-08-17 12:47:36'),
(29, 1, 1, 1, 100, 100, 0, '2019-08-17 13:09:47', '2019-08-17 13:09:47'),
(30, 1, 1, 1, 100, 100, 0, '2019-08-17 13:11:13', '2019-08-17 13:11:13'),
(31, 1, 1, 1, 100, 100, 0, '2019-08-17 13:15:41', '2019-08-17 13:15:41'),
(32, 1, 1, 1, 100, 100, 0, '2019-08-17 13:19:52', '2019-08-17 13:19:52'),
(33, 1, 2, 5, 500, 100, 400, '2019-08-17 13:24:25', '2019-08-17 13:24:25'),
(34, 1, 2, 25, 1000, 800, 200, '2019-08-17 13:25:47', '2019-08-17 13:25:47'),
(35, 1, 2, 2, 200, 200, 0, '2019-08-17 13:28:38', '2019-08-17 13:28:38'),
(36, 1, 2, 2, 300, 300, 0, '2019-08-17 13:37:15', '2019-08-17 13:37:15'),
(37, 1, 2, 2, 200, 200, 0, '2019-08-18 00:39:55', '2019-08-18 00:39:55'),
(38, 1, 2, 2, 200, 200, 0, '2019-08-18 00:46:11', '2019-08-18 00:46:11'),
(39, 1, 2, 2, 200, 200, 0, '2019-08-18 00:51:30', '2019-08-18 00:51:30'),
(40, 1, 2, 2, 200, 200, 0, '2019-08-18 00:55:33', '2019-08-18 00:55:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `last_login`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Orchid Sohag', 'sohagrana', 'shohagrana102@gmail.com', '$2y$10$1Az1wyqZbXOtBvDBYoZBYeN6eiKhdwA53W17xyl8epc1oRyUsCx3C', '2019-08-19 13:13:33', '5OmyroHgAwsKUZx4vMoukC5e85zcOfaUXi2pkfrSnVSf5tV0Oyj0LGzhvv7m', '2019-05-15 11:29:46', '2019-08-19 07:13:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_product_id_foreign` (`product_id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sales_customer_id_foreign` (`customer_id`),
  ADD KEY `sales_product_id_foreign` (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `purchases` (`id`);

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `sales_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
