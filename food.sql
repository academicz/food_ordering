-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2018 at 02:20 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `food_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `food_category_id` int(10) UNSIGNED NOT NULL,
  `unit_price` int(11) NOT NULL,
  `quantity_per_order` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_path` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`id`, `created_at`, `updated_at`, `name`, `food_category_id`, `unit_price`, `quantity_per_order`, `image_path`, `status`, `description`) VALUES
(1, '2018-04-01 12:46:02', '2018-04-01 12:46:02', 'Chilly Chicken', 1, 120, '200gm', 'uploads/products/item-9069732.png', 1, 'sbfjhsbdfhjsd'),
(2, '2018-04-01 13:18:22', '2018-04-01 13:18:22', 'Thandhori', 1, 250, '1/2', 'uploads/products/item-2400756.png', 1, 'sbfjhsbdfhjsd'),
(3, '2018-04-01 13:18:39', '2018-04-01 13:18:39', 'Shavai', 2, 240, '1/2', 'uploads/products/item-2400756.png', 1, 'sbfjhsbdfhjsd'),
(4, '2018-04-01 13:55:31', '2018-04-01 13:55:31', 'sasda', 1, 2342, 'sdfs', 'uploads/products/item-9983520.jpeg', 1, 'sbfjhsbdfhjsd'),
(5, '2018-04-04 13:16:10', '2018-04-04 13:16:10', 'Chicken Ticka', 1, 120, '300', 'uploads/products/item-3852600.jpeg', 1, 'sbfjhsbdfhjsd'),
(6, '2018-04-08 07:40:02', '2018-04-08 07:40:02', 'sdasd', 1, 43545345, '234', 'uploads/products/item-9720947.jpeg', 1, 'sadasd'),
(7, '2018-04-23 22:58:39', '2018-04-23 22:58:39', 'dfg', 1, 3, '3', 'uploads/products/item-5754882.jpeg', 1, 'sdsff');

-- --------------------------------------------------------

--
-- Table structure for table `food_categories`
--

CREATE TABLE `food_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `food_categories`
--

INSERT INTO `food_categories` (`id`, `created_at`, `updated_at`, `category_name`) VALUES
(1, '2018-04-01 12:33:33', '2018-04-01 12:33:33', 'Fried'),
(2, '2018-04-01 12:33:33', '2018-04-01 12:33:33', 'Roasted'),
(3, NULL, NULL, 'sdfsd'),
(4, '2018-07-01 01:30:29', '2018-07-01 01:30:29', 'Ice Creem');

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type_id` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`id`, `created_at`, `updated_at`, `user_id`, `email`, `password`, `user_type_id`, `remember_token`) VALUES
(1, '2018-04-01 12:33:33', '2018-04-01 12:33:33', 1, 'admin', '$2y$10$vJvJtZY5nlgrYaM123NbhO3NWnQssiAAWjGsFU2R3mjaoqibb6Daq', 0, '8mcF758eYLqdQl3sdoLKy0xqfKq1VGA46t5xBP73JfAjRnaSKT7FdjnZmSy2'),
(2, '2018-04-06 10:07:55', '2018-04-06 10:07:55', 7, 'rahulreghunath11@gmail.com', '$2y$10$9lX9TNKBzrSq38jUPLY5u.XiMV3BuMbUXe.KVVTAHCfaPaX5LQHce', 1, 'J5zwKPq5qPLSMZm0m5vjUmgpBrpvXAYUKXx6tMb5yIuNMaf9zavEqph6x7q4'),
(3, '2018-04-06 11:51:36', '2018-04-06 11:51:36', 8, 'rahulreghunath@gmail.com', '$2y$10$AScB2RZ6.JZoYVVYiNppHO9NOoEFGj1aKgD9uvmiTT9MWtpzzVNiS', 1, NULL),
(4, '2018-04-08 06:41:26', '2018-04-08 06:41:26', 9, 'manu@gmail.com', '$2y$10$UsZuZDn0edCd.GvtcDW9/OgA7UWMVM.yJxwPLH1bmKXCNndI/79qC', 1, '8UcOtwsPdbtyYc2nDztxAPt6EAjish1s92H8jwoiyw0yVUPeq0ybMZzOnvZh');

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2018_03_11_161904_create_logins_table', 1),
(3, '2018_03_11_172818_create_users_table', 1),
(4, '2018_03_11_173606_add_foreign_keys', 1),
(5, '2018_04_01_062921_create_food_categories_table', 1),
(6, '2018_04_01_063210_create_foods_table', 1),
(8, '2018_04_24_052620_create_carts_table', 2),
(10, '2018_04_01_073502_create_orders_table', 3),
(11, '2018_06_26_170422_create_order_details_table', 3),
(12, '2018_07_01_094607_create_reviews_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `landmark` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `created_at`, `updated_at`, `user_id`, `address`, `city`, `landmark`, `pin`, `status`) VALUES
(2, '2018-06-26 11:46:23', '2018-06-30 23:50:07', 7, 'wqw', 'qwq', 'qwe', '21212', -1),
(3, '2018-06-30 23:10:38', '2018-07-01 02:01:06', 7, 'qwqw', '1qweq', 'qweq', '232', 2);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `food_id` int(10) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `created_at`, `updated_at`, `order_id`, `food_id`, `quantity`) VALUES
(1, '2018-06-26 11:46:23', '2018-06-26 11:46:23', 2, 1, 1),
(2, '2018-06-26 11:46:23', '2018-06-26 11:46:23', 2, 1, 1),
(3, '2018-06-26 11:46:23', '2018-06-26 11:46:23', 2, 3, 1),
(4, '2018-06-30 23:10:38', '2018-06-30 23:10:38', 3, 2, 1),
(5, '2018-06-30 23:10:39', '2018-06-30 23:10:39', 3, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `review` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `star` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_town` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `created_at`, `updated_at`, `name`, `email`, `phone`, `home_town`, `user_type`, `status`) VALUES
(1, '2018-04-01 12:33:32', '2018-04-01 12:33:32', 'Admin', 'admin', '9685457895', '', 0, 1),
(7, '2018-04-06 10:07:55', '2018-04-06 10:07:55', 'RAhul', 'rahulreghunath11@gmail.com', '9658745478', 'sdsd', 1, 1),
(8, '2018-04-06 11:51:36', '2018-04-06 11:51:36', 'Rghfhg', 'rahulreghunath@gmail.com', '9645632145', 'dgfhd', 1, 1),
(9, '2018-04-08 06:41:26', '2018-04-08 06:41:26', 'MAnu', 'manu@gmail.com', '9685741245', 'adoor', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_food_id_foreign` (`food_id`),
  ADD KEY `carts_user_id_foreign` (`user_id`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foods_food_category_id_foreign` (`food_category_id`);

--
-- Indexes for table `food_categories`
--
ALTER TABLE `food_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `logins_email_unique` (`email`),
  ADD KEY `logins_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `food_categories`
--
ALTER TABLE `food_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `logins`
--
ALTER TABLE `logins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_food_id_foreign` FOREIGN KEY (`food_id`) REFERENCES `foods` (`id`),
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `foods`
--
ALTER TABLE `foods`
  ADD CONSTRAINT `foods_food_category_id_foreign` FOREIGN KEY (`food_category_id`) REFERENCES `food_categories` (`id`);

--
-- Constraints for table `logins`
--
ALTER TABLE `logins`
  ADD CONSTRAINT `logins_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
