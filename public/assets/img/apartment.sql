-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2023 at 08:33 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apartment`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2013_02_09_103115_create_roles_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_03_12_070029_create_tenants_table', 1),
(7, '2023_03_12_080339_create_rooms_table', 1),
(8, '2023_03_12_080831_create_room_tenants_table', 1),
(9, '2023_03_13_100317_create_tenant_billings_table', 1),
(10, '2023_05_29_073438_create_room_rates_table', 1),
(11, '2023_06_01_062724_create_tenant_rentals_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2023-06-11 23:34:48', '2023-06-11 23:34:48'),
(2, 'User', '2023-06-11 23:34:48', '2023-06-11 23:34:48');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `bed_no` varchar(255) NOT NULL,
  `bed_available` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `name`, `type`, `bed_no`, `bed_available`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Room Et.', 'premium', '5', '5', 1, '2023-06-11 23:34:49', '2023-06-11 23:34:49'),
(2, 'Room Vel.', 'premium', '5', '3', 1, '2023-06-11 23:34:49', '2023-06-11 23:42:09'),
(3, 'Room Nam.', 'premium', '3', '3', 1, '2023-06-11 23:34:49', '2023-06-11 23:34:49'),
(4, 'Room Quis.', 'standard', '3', '0', 0, '2023-06-11 23:34:49', '2023-06-13 19:42:21'),
(5, 'Room In.', 'premium', '4', '4', 1, '2023-06-11 23:34:49', '2023-06-11 23:34:49'),
(6, 'Room Quis.', 'standard', '5', '5', 1, '2023-06-11 23:34:49', '2023-06-11 23:34:49'),
(7, 'Room Fuga.', 'standard', '5', '5', 1, '2023-06-11 23:34:49', '2023-06-11 23:34:49'),
(8, 'Room Sed.', 'standard', '3', '3', 1, '2023-06-11 23:34:49', '2023-06-11 23:34:49'),
(9, 'Room Aut.', 'premium', '3', '3', 1, '2023-06-11 23:34:49', '2023-06-11 23:34:49'),
(10, 'Room Eum.', 'standard', '3', '3', 1, '2023-06-11 23:34:49', '2023-06-11 23:34:49'),
(11, 'Room Aut.', 'standard', '5', '5', 1, '2023-06-11 23:34:49', '2023-06-11 23:34:49'),
(12, 'Room Et.', 'premium', '5', '5', 1, '2023-06-11 23:34:49', '2023-06-11 23:34:49'),
(13, 'Room Ea.', 'premium', '5', '5', 1, '2023-06-11 23:34:49', '2023-06-11 23:34:49'),
(14, 'Room Est.', 'standard', '4', '4', 1, '2023-06-11 23:34:49', '2023-06-11 23:34:49'),
(15, 'Room Quas.', 'premium', '4', '4', 1, '2023-06-11 23:34:49', '2023-06-11 23:34:49'),
(16, 'Room Quod.', 'standard', '3', '3', 1, '2023-06-11 23:34:49', '2023-06-11 23:34:49'),
(17, 'Room Quia.', 'premium', '5', '5', 1, '2023-06-11 23:34:49', '2023-06-11 23:34:49'),
(18, 'Room Et.', 'standard', '4', '4', 1, '2023-06-11 23:34:49', '2023-06-11 23:34:49'),
(19, 'Room Quis.', 'premium', '4', '4', 1, '2023-06-11 23:34:49', '2023-06-11 23:34:49'),
(20, 'Room Vero.', 'standard', '3', '3', 1, '2023-06-11 23:34:49', '2023-06-11 23:34:49'),
(21, 'Room Modi.', 'standard', '3', '3', 1, '2023-06-11 23:34:49', '2023-06-11 23:34:49'),
(22, 'Room In.', 'premium', '3', '3', 1, '2023-06-11 23:34:49', '2023-06-11 23:34:49'),
(23, 'Room Est.', 'standard', '3', '3', 1, '2023-06-11 23:34:49', '2023-06-11 23:34:49'),
(24, 'Room Aut.', 'standard', '3', '3', 1, '2023-06-11 23:34:49', '2023-06-11 23:34:49'),
(25, 'Room In.', 'premium', '5', '5', 1, '2023-06-11 23:34:49', '2023-06-11 23:34:49'),
(26, 'Room Quam.', 'standard', '4', '4', 1, '2023-06-11 23:34:49', '2023-06-11 23:34:49'),
(27, 'Room Et.', 'premium', '4', '4', 1, '2023-06-11 23:34:49', '2023-06-11 23:34:49'),
(28, 'Room Sunt.', 'standard', '4', '4', 1, '2023-06-11 23:34:49', '2023-06-11 23:34:49'),
(29, 'Room Iste.', 'standard', '4', '4', 1, '2023-06-11 23:34:49', '2023-06-11 23:34:49'),
(30, 'Room Vel.', 'premium', '3', '3', 1, '2023-06-11 23:34:49', '2023-06-11 23:34:49'),
(31, 'Room Eos.', 'premium', '3', '3', 1, '2023-06-11 23:34:49', '2023-06-11 23:34:49'),
(32, 'Room Ut.', 'standard', '5', '5', 1, '2023-06-11 23:34:49', '2023-06-11 23:34:49'),
(33, 'Room Ut.', 'standard', '4', '4', 1, '2023-06-11 23:34:49', '2023-06-11 23:34:49'),
(34, 'Room Enim.', 'premium', '5', '5', 1, '2023-06-11 23:34:49', '2023-06-11 23:34:49'),
(35, 'Room Illo.', 'standard', '5', '5', 1, '2023-06-11 23:34:49', '2023-06-11 23:34:49'),
(36, 'Room Sed.', 'standard', '5', '5', 1, '2023-06-11 23:34:49', '2023-06-11 23:34:49'),
(37, 'Room Qui.', 'standard', '4', '4', 1, '2023-06-11 23:34:49', '2023-06-11 23:34:49'),
(38, 'Room Quod.', 'premium', '5', '5', 1, '2023-06-11 23:34:49', '2023-06-11 23:34:49'),
(39, 'Room Ex.', 'premium', '4', '4', 1, '2023-06-11 23:34:49', '2023-06-11 23:34:49'),
(40, 'Room Aut.', 'premium', '3', '3', 1, '2023-06-11 23:34:49', '2023-06-11 23:34:49'),
(41, 'Room Quia.', 'standard', '3', '3', 1, '2023-06-11 23:34:49', '2023-06-11 23:34:49'),
(42, 'Room Eos.', 'premium', '5', '5', 1, '2023-06-11 23:34:49', '2023-06-11 23:34:49'),
(43, 'Room Et.', 'standard', '3', '3', 1, '2023-06-11 23:34:49', '2023-06-11 23:34:49'),
(44, 'Room Id.', 'standard', '5', '5', 1, '2023-06-11 23:34:49', '2023-06-11 23:34:49'),
(45, 'Room Ab.', 'premium', '5', '5', 1, '2023-06-11 23:34:49', '2023-06-11 23:34:49'),
(46, 'Room A.', 'premium', '4', '4', 1, '2023-06-11 23:34:49', '2023-06-11 23:34:49'),
(47, 'Room Et.', 'premium', '5', '5', 1, '2023-06-11 23:34:49', '2023-06-11 23:34:49'),
(48, 'Room Enim.', 'standard', '5', '5', 1, '2023-06-11 23:34:49', '2023-06-11 23:34:49'),
(49, 'Room Qui.', 'standard', '3', '3', 1, '2023-06-11 23:34:49', '2023-06-11 23:34:49'),
(50, 'Room At.', 'premium', '5', '5', 1, '2023-06-11 23:34:49', '2023-06-11 23:34:49');

-- --------------------------------------------------------

--
-- Table structure for table `room_rates`
--

CREATE TABLE `room_rates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `room_rates`
--

INSERT INTO `room_rates` (`id`, `type`, `name`, `rate`, `created_at`, `updated_at`) VALUES
(1, 'Premium', 'Bed Rate', '750', '2023-06-11 23:34:49', '2023-06-11 23:34:49'),
(2, 'Standard', 'Bed Rate', '500', '2023-06-11 23:34:49', '2023-06-11 23:34:49'),
(3, 'Premium', 'Hourly Rate', '200', '2023-06-11 23:34:49', '2023-06-11 23:34:49'),
(4, 'Standard', 'Hourly Rate', '150', '2023-06-11 23:34:49', '2023-06-11 23:34:49');

-- --------------------------------------------------------

--
-- Table structure for table `room_tenants`
--

CREATE TABLE `room_tenants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `room_id` bigint(20) UNSIGNED NOT NULL,
  `tenant_id` bigint(20) UNSIGNED NOT NULL,
  `rent_amount` varchar(255) NOT NULL,
  `rent_type` varchar(255) NOT NULL,
  `checkin` date DEFAULT NULL,
  `checkout` date DEFAULT NULL,
  `deposit` varchar(255) DEFAULT NULL,
  `time_in` time DEFAULT NULL,
  `time_out` time DEFAULT NULL,
  `payment` varchar(255) DEFAULT NULL,
  `advance` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `notes` text DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `room_tenants`
--

INSERT INTO `room_tenants` (`id`, `room_id`, `tenant_id`, `rent_amount`, `rent_type`, `checkin`, `checkout`, `deposit`, `time_in`, `time_out`, `payment`, `advance`, `status`, `notes`, `type`, `created_at`, `updated_at`) VALUES
(1, 2, 3, '750', 'Bed Spacer', '2023-06-12', NULL, '750', NULL, NULL, NULL, '750', 1, NULL, 'tenant', '2023-06-11 23:40:26', '2023-06-11 23:40:26'),
(2, 2, 2, '750', 'Bed Spacer', '2023-06-12', NULL, '750', NULL, NULL, NULL, '750', 1, NULL, 'tenant', '2023-06-11 23:42:09', '2023-06-11 23:42:09'),
(3, 4, 1, '1500', 'Whole Room', '2023-06-01', NULL, '1500', NULL, NULL, NULL, '1500', 1, NULL, 'tenant', '2023-06-13 19:42:21', '2023-06-13 19:42:21');

-- --------------------------------------------------------

--
-- Table structure for table `tenants`
--

CREATE TABLE `tenants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text DEFAULT NULL,
  `contact_no` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tenants`
--

INSERT INTO `tenants` (`id`, `name`, `address`, `contact_no`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Chester Nolan', '3836 Alana Isle\nKassulkemouth, NM 51166-5778', '+1 (276) 394-4287', 1, '2023-06-11 23:34:49', '2023-06-13 19:42:21'),
(2, 'Prof. Leon Mayer DVM', '51041 Dino Circles\nSchummfort, AZ 09585', '1-352-613-8305', 1, '2023-06-11 23:34:49', '2023-06-11 23:42:09'),
(3, 'Dr. Zetta Roberts', '57629 Mosciski Cliff Suite 328\nSouth Danika, HI 57847', '+1-870-355-1930', 1, '2023-06-11 23:34:49', '2023-06-11 23:40:26'),
(4, 'Cruz Cummerata', '561 Imelda Viaduct Apt. 975\nFeilmouth, NJ 48490', '+1 (509) 443-9879', 0, '2023-06-11 23:34:49', '2023-06-11 23:34:49'),
(5, 'Helmer Grimes', '2143 O\'Kon Station Apt. 436\nRosehaven, FL 20632', '915-845-6818', 0, '2023-06-11 23:34:49', '2023-06-11 23:34:49');

-- --------------------------------------------------------

--
-- Table structure for table `tenant_billings`
--

CREATE TABLE `tenant_billings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `room_id` bigint(20) UNSIGNED NOT NULL,
  `tenant_id` bigint(20) UNSIGNED NOT NULL,
  `units_consumed` varchar(255) DEFAULT NULL,
  `previous_reading` varchar(255) DEFAULT NULL,
  `present_reading` varchar(255) DEFAULT NULL,
  `amount` varchar(255) NOT NULL,
  `due_date` date NOT NULL,
  `type` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'unpaid',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tenant_billings`
--

INSERT INTO `tenant_billings` (`id`, `room_id`, `tenant_id`, `units_consumed`, `previous_reading`, `present_reading`, `amount`, `due_date`, `type`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 3, '356', NULL, NULL, '225', '2023-06-30', 'electric', 'unpaid', '2023-06-11 23:50:26', '2023-06-11 23:50:26'),
(2, 2, 2, '356', NULL, NULL, '225', '2023-06-30', 'electric', 'unpaid', '2023-06-11 23:50:26', '2023-06-11 23:50:26'),
(3, 2, 3, NULL, '65', '80', '64', '2023-06-30', 'water', 'unpaid', '2023-06-11 23:52:42', '2023-06-11 23:52:42'),
(4, 2, 2, NULL, '65', '80', '64', '2023-06-30', 'water', 'unpaid', '2023-06-11 23:52:42', '2023-06-11 23:52:42'),
(5, 4, 1, '75', NULL, NULL, '500', '2023-06-30', 'electric', 'unpaid', '2023-06-13 19:44:07', '2023-06-13 19:44:07'),
(8, 2, 3, NULL, '22', '23', '250', '2023-06-30', 'water', 'unpaid', '2023-06-13 19:58:03', '2023-06-13 19:58:03'),
(9, 2, 2, NULL, '22', '23', '250', '2023-06-30', 'water', 'unpaid', '2023-06-13 19:58:03', '2023-06-13 19:58:03');

-- --------------------------------------------------------

--
-- Table structure for table `tenant_rentals`
--

CREATE TABLE `tenant_rentals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `room_id` bigint(20) UNSIGNED NOT NULL,
  `tenant_id` bigint(20) UNSIGNED NOT NULL,
  `rent_amount` varchar(255) NOT NULL,
  `electricity` varchar(255) DEFAULT NULL,
  `water` varchar(255) DEFAULT NULL,
  `total` varchar(255) DEFAULT NULL,
  `due_date` date NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'unpaid',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tenant_rentals`
--

INSERT INTO `tenant_rentals` (`id`, `room_id`, `tenant_id`, `rent_amount`, `electricity`, `water`, `total`, `due_date`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 3, '750', NULL, NULL, NULL, '2023-07-12', 'unpaid', '2023-06-11 23:40:26', '2023-06-11 23:40:26'),
(2, 2, 2, '750', NULL, NULL, NULL, '2023-07-12', 'unpaid', '2023-06-11 23:42:09', '2023-06-11 23:42:09'),
(3, 4, 1, '1500', NULL, NULL, NULL, '2023-07-01', 'unpaid', '2023-06-13 19:42:21', '2023-06-13 19:42:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `role_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin User', 'admin', 'admin@admin.com', 1, NULL, '$2y$10$vEgTyD1vde76I4ohKnYNhejeZZBvCuV/DaBm.QfQQ8TOJz6gMEnzq', NULL, '2023-06-11 23:34:48', '2023-06-11 23:34:48'),
(2, 'User Account', 'user', 'user@user.com', 2, NULL, '$2y$10$ogxUF1rw0NdQLcR3Fqb1H.41KB/Ssub85DlZZDa51flGHeV3kOCKa', NULL, '2023-06-11 23:34:49', '2023-06-11 23:34:49'),
(3, 'Daniela Quinlog', 'Dan', 'ma@hdsgfwhgo', 2, NULL, '$2y$10$4dJ2c72LXR9HikpZiWjEXOWsNMTyFYa9eL0CuW.vBj1S7Zhbu6mLW', NULL, '2023-06-13 19:37:39', '2023-06-13 19:37:39');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_rates`
--
ALTER TABLE `room_rates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_tenants`
--
ALTER TABLE `room_tenants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `room_tenants_room_id_foreign` (`room_id`),
  ADD KEY `room_tenants_tenant_id_foreign` (`tenant_id`);

--
-- Indexes for table `tenants`
--
ALTER TABLE `tenants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tenant_billings`
--
ALTER TABLE `tenant_billings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tenant_billings_room_id_foreign` (`room_id`),
  ADD KEY `tenant_billings_tenant_id_foreign` (`tenant_id`);

--
-- Indexes for table `tenant_rentals`
--
ALTER TABLE `tenant_rentals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tenant_rentals_room_id_foreign` (`room_id`),
  ADD KEY `tenant_rentals_tenant_id_foreign` (`tenant_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `room_rates`
--
ALTER TABLE `room_rates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `room_tenants`
--
ALTER TABLE `room_tenants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tenants`
--
ALTER TABLE `tenants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tenant_billings`
--
ALTER TABLE `tenant_billings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tenant_rentals`
--
ALTER TABLE `tenant_rentals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `room_tenants`
--
ALTER TABLE `room_tenants`
  ADD CONSTRAINT `room_tenants_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`),
  ADD CONSTRAINT `room_tenants_tenant_id_foreign` FOREIGN KEY (`tenant_id`) REFERENCES `tenants` (`id`);

--
-- Constraints for table `tenant_billings`
--
ALTER TABLE `tenant_billings`
  ADD CONSTRAINT `tenant_billings_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`),
  ADD CONSTRAINT `tenant_billings_tenant_id_foreign` FOREIGN KEY (`tenant_id`) REFERENCES `tenants` (`id`);

--
-- Constraints for table `tenant_rentals`
--
ALTER TABLE `tenant_rentals`
  ADD CONSTRAINT `tenant_rentals_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`),
  ADD CONSTRAINT `tenant_rentals_tenant_id_foreign` FOREIGN KEY (`tenant_id`) REFERENCES `tenants` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
