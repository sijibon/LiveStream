-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2021 at 06:19 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `livestream`
--

-- --------------------------------------------------------

--
-- Table structure for table `channel_categories`
--

CREATE TABLE `channel_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `channel_categories`
--

INSERT INTO `channel_categories` (`id`, `category_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Sports', '1', NULL, NULL),
(2, 'Investigations', '1', NULL, NULL),
(3, 'Cartoon', '1', NULL, NULL),
(4, 'News', '1', NULL, NULL),
(5, 'Entetaintenment', '1', NULL, NULL),
(6, 'caregory inserted', '1', NULL, NULL),
(7, 'sadfsadsad', '1', NULL, NULL),
(8, 'sdafsadfasdfsa', '1', NULL, NULL),
(9, 'Child', '1', NULL, NULL),
(10, 'aaaa', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `channel_manages`
--

CREATE TABLE `channel_manages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `frontend_users`
--

CREATE TABLE `frontend_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `frontend_users`
--

INSERT INTO `frontend_users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Anik Anwar hossain', 'admin@gmail.com', '$2y$10$I5M2uEt/KXVOxLw1TXVRUelaEUhixJdhPKE6x1rL//7KP4KOw3ORu', NULL, NULL, NULL),
(2, 'Anik Anwar hossain', 'admin@gmail.com', 'fdgsdfg', NULL, NULL, NULL),
(3, 'Anik Anwar hossain', 'admin@gmail.com', 'fdgsdfg', NULL, NULL, NULL),
(4, 'Anik Anwar hossain', 'admin@gmail.com', '$2y$10$eApI/kDTbFwshS2OynhJv.QkbFM2MlbcVPtLTGFah1wNytNjhPdDK', NULL, NULL, NULL),
(5, 'Anik Anwar hossain', 'shohidulislam382298@gmail.com', '$2y$10$P8g1kaRS95l2zpqvfkf67.Nmt3FbEPUNcdVl2agrDgOGPHt8ggzze', NULL, NULL, NULL),
(6, 'Jibon Shohidul', 'nakibsir@gmail.com', '$2y$10$XgZmZjBxxIExi2mcFsJuf.LIspbYmEoBijCcmVF4LY.kBlC94SVsW', NULL, NULL, NULL),
(7, 'Anik Anwar', 'admin@gmail.com', '$2y$10$5gT98Rol0CNs5Oso7YtU4.0mc2G6fqyEgFlWYTLAM4xpW90qvE.Vm', NULL, NULL, NULL),
(8, 'Jibon Shohidul', 'admin@gmail.com', '$2y$10$XK84ytwW6d3j5TStlY9Nv.mKzawImMPjhzxwkItn6R0zobBwo0Dza', NULL, NULL, NULL),
(9, 'Jibon Shohidul', 'admin@gmail.com', '$2y$10$jVeaWfO4SXThO2.xuZKF1e/DFMK/q6gV.enI8Y3taPr/JblyCgHWG', NULL, NULL, NULL),
(10, 'Anik Anwar hossain', 'admin@gmail.com', '$2y$10$BW4zeuCOy9Rcnwukp/fPWOLAbbKipamXrEZOj8uQNLNV082HGkHg.', NULL, NULL, NULL),
(11, 'পারভেজ রাহমান', 'admin@gmail.com', '$2y$10$7lWaw9YlygXmdaAY2KCqTuoGvjJsZP/gJHBCv6XBu3K92aVUFwNBa', NULL, NULL, NULL),
(12, 'Anik Anwar hossain', 'admin@gmail.com', '$2y$10$5QIkK.FzU8dQwo10eLF5LOzjc4xnJMhjkg/9mPTIY6WsVoA1n.rPO', NULL, NULL, NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_04_10_045357_create_frontend_users_table', 2),
(5, '2021_04_10_091055_create_channel_manages_table', 3),
(7, '2021_04_10_100740_create_channel_categories_table', 4);

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
(1, 'Jibon Shohidul', 'admin@gmail.com', NULL, '$2y$12$abgtYewXmYz5bxzaFTvNseVQCAjnaK.2Hu7XI2b/14U86.pAVMzeK', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `channel_categories`
--
ALTER TABLE `channel_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `channel_manages`
--
ALTER TABLE `channel_manages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `frontend_users`
--
ALTER TABLE `frontend_users`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `channel_categories`
--
ALTER TABLE `channel_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `channel_manages`
--
ALTER TABLE `channel_manages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `frontend_users`
--
ALTER TABLE `frontend_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
