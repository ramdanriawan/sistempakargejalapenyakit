-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2019 at 03:06 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistempakargejalapenyakit`
--

-- --------------------------------------------------------

--
-- Table structure for table `gejalas`
--

CREATE TABLE `gejalas` (
  `id` int(10) UNSIGNED NOT NULL,
  `penyakit_id` int(10) UNSIGNED NOT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gejalas`
--

INSERT INTO `gejalas` (`id`, `penyakit_id`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 1, 'kepala anda merasakan panas?', '2019-02-17 00:27:34', '2019-02-17 00:27:34'),
(2, 1, 'Kepala anda merasakan pusing?', '2019-02-17 00:27:34', '2019-02-17 00:27:34'),
(3, 1, 'Anda merasakan batuk batuk?', '2019-02-17 00:27:34', '2019-02-17 00:27:34'),
(4, 1, 'Anda merasakan flue?', '2019-02-17 00:27:34', '2019-02-17 00:27:34'),
(5, 1, 'Anda nafsu makan saat ini?', '2019-02-17 00:27:35', '2019-02-17 00:27:35'),
(6, 2, 'Anda terkena gigitan nyamuk?', '2019-02-17 00:27:34', '2019-02-17 00:27:34'),
(7, 2, 'Anda merasakan gatal gatal?', '2019-02-17 00:27:34', '2019-02-17 00:27:34'),
(8, 2, 'Anda merasakan batuk batuk?', '2019-02-17 00:27:34', '2019-02-17 00:27:34'),
(9, 2, 'Anda merasakan keringant dingin?', '2019-02-17 00:27:34', '2019-02-17 00:27:34'),
(10, 2, 'Anda nafsu makan saat ini?', '2019-02-17 00:27:35', '2019-02-17 00:27:35');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_02_17_055751_create_testers_table', 1),
(4, '2019_02_17_055810_create_penyakits_table', 1),
(5, '2019_02_17_055917_create_obats_table', 1),
(6, '2019_02_17_060010_create_gejalas_table', 1),
(7, '2019_02_17_060024_create_results_table', 1),
(8, '2019_02_17_065047_create_testeds_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `obats`
--

CREATE TABLE `obats` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `penyakit_id` int(10) UNSIGNED NOT NULL,
  `range` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `obats`
--

INSERT INTO `obats` (`id`, `nama`, `penyakit_id`, `range`, `created_at`, `updated_at`) VALUES
(1, 'Paracetamol', 1, 50.00, '2019-02-17 00:27:34', '2019-02-17 00:27:34'),
(2, 'Influenza', 1, 75.00, '2019-02-17 00:27:34', '2019-02-17 00:27:34');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penyakits`
--

CREATE TABLE `penyakits` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `penyakits`
--

INSERT INTO `penyakits` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'demam', '2019-02-17 00:27:34', '2019-02-17 00:27:34'),
(2, 'malaria', '2019-02-17 00:27:34', '2019-02-17 00:27:34');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(10) UNSIGNED NOT NULL,
  `tester_id` int(10) UNSIGNED NOT NULL,
  `gejala_id` int(10) UNSIGNED NOT NULL,
  `jawaban` enum('tidak','tidak lagi','sedikit','sedang','parah') COLLATE utf8_unicode_ci NOT NULL,
  `hasil` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `tester_id`, `gejala_id`, `jawaban`, `hasil`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'tidak', 0.00, '2019-02-17 00:27:35', '2019-02-17 00:27:35'),
(2, 1, 2, 'tidak lagi', 0.25, '2019-02-17 00:27:35', '2019-02-17 00:27:35'),
(3, 1, 3, 'sedikit', 50.00, '2019-02-17 00:27:35', '2019-02-17 00:27:35'),
(4, 1, 4, 'sedang', 75.00, '2019-02-17 00:27:35', '2019-02-17 00:27:35'),
(5, 1, 5, 'parah', 100.00, '2019-02-17 00:27:35', '2019-02-17 00:27:35'),
(28, 19, 1, 'tidak lagi', 0.25, '2019-02-18 01:27:00', '2019-02-18 01:27:00'),
(29, 19, 2, 'tidak lagi', 0.25, '2019-02-18 01:27:00', '2019-02-18 01:27:00'),
(30, 19, 3, 'tidak lagi', 0.25, '2019-02-18 01:27:00', '2019-02-18 01:27:00'),
(31, 19, 4, 'tidak lagi', 0.25, '2019-02-18 01:27:00', '2019-02-18 01:27:00'),
(32, 19, 5, 'tidak lagi', 0.25, '2019-02-18 01:27:00', '2019-02-18 01:27:00'),
(33, 19, 1, 'tidak lagi', 0.25, '2019-02-18 01:27:01', '2019-02-18 01:27:01'),
(34, 19, 2, 'tidak lagi', 0.25, '2019-02-18 01:27:01', '2019-02-18 01:27:01'),
(35, 19, 3, 'tidak lagi', 0.25, '2019-02-18 01:27:01', '2019-02-18 01:27:01'),
(36, 19, 4, 'tidak lagi', 0.25, '2019-02-18 01:27:01', '2019-02-18 01:27:01'),
(37, 19, 5, 'tidak lagi', 0.25, '2019-02-18 01:27:01', '2019-02-18 01:27:01'),
(48, 41, 1, 'tidak', 0.00, '2019-02-18 03:06:46', '2019-02-18 03:06:46'),
(49, 41, 2, 'tidak lagi', 0.25, '2019-02-18 03:06:46', '2019-02-18 03:06:46'),
(50, 41, 3, 'sedikit', 0.50, '2019-02-18 03:06:46', '2019-02-18 03:06:46'),
(51, 41, 4, 'parah', 1.00, '2019-02-18 03:06:46', '2019-02-18 03:06:46'),
(52, 41, 5, 'parah', 1.00, '2019-02-18 03:06:46', '2019-02-18 03:06:46'),
(53, 41, 1, 'tidak', 0.00, '2019-02-18 03:06:47', '2019-02-18 03:06:47'),
(54, 41, 2, 'tidak lagi', 0.25, '2019-02-18 03:06:47', '2019-02-18 03:06:47'),
(55, 41, 3, 'sedikit', 0.50, '2019-02-18 03:06:47', '2019-02-18 03:06:47'),
(56, 41, 4, 'parah', 1.00, '2019-02-18 03:06:47', '2019-02-18 03:06:47'),
(57, 41, 5, 'parah', 1.00, '2019-02-18 03:06:47', '2019-02-18 03:06:47');

-- --------------------------------------------------------

--
-- Table structure for table `testeds`
--

CREATE TABLE `testeds` (
  `id` int(10) UNSIGNED NOT NULL,
  `tester_id` int(10) UNSIGNED NOT NULL,
  `hasil` double(8,2) NOT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `testeds`
--

INSERT INTO `testeds` (`id`, `tester_id`, `hasil`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 1, 90.00, 'Parah', '2019-02-17 00:27:35', '2019-02-17 00:27:35'),
(3, 6, 54.17, 'Sedang', '2019-02-18 00:34:52', '2019-02-18 00:34:52'),
(4, 7, 83.33, 'Parah', '2019-02-18 00:35:34', '2019-02-18 00:35:34'),
(16, 19, 62.50, 'Sedang', '2019-02-18 01:26:59', '2019-02-18 01:26:59'),
(20, 30, 62.50, 'Sedang', '2019-02-18 02:45:28', '2019-02-18 02:45:28'),
(22, 41, 31.25, 'Kecil', '2019-02-18 03:03:59', '2019-02-18 03:03:59');

-- --------------------------------------------------------

--
-- Table structure for table `testers`
--

CREATE TABLE `testers` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `umur` int(11) NOT NULL,
  `jenis_kelamin` enum('l','p') COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `testers`
--

INSERT INTO `testers` (`id`, `nama`, `umur`, `jenis_kelamin`, `created_at`, `updated_at`) VALUES
(1, 'Halim', 21, 'l', '2019-02-17 00:27:34', '2019-02-17 00:27:34'),
(6, 'gak jelas', 45, 'p', '2019-02-18 00:34:52', '2019-02-18 00:34:52'),
(7, 'siapapun', 24, 'l', '2019-02-18 00:35:34', '2019-02-18 00:35:34'),
(19, 'gak jelas', 35, 'l', '2019-02-18 01:26:59', '2019-02-18 01:26:59'),
(27, 'apalah apalah', 23, 'l', '2019-02-18 02:38:13', '2019-02-18 02:38:13'),
(29, 'gak jelas', 33, 'l', '2019-02-18 02:43:54', '2019-02-18 02:43:54'),
(30, 'gak jelas556', 10, 'l', '2019-02-18 02:45:27', '2019-02-18 02:45:27'),
(38, 'gak jelas2342342', 23, 'l', '2019-02-18 02:56:35', '2019-02-18 02:56:35'),
(39, 'gak jelas5555', 32, 'l', '2019-02-18 03:00:31', '2019-02-18 03:00:31'),
(41, 'gak jelas44', 35, 'l', '2019-02-18 03:03:59', '2019-02-18 03:03:59'),
(52, 'angga trisnanda', 21, 'l', '2019-02-19 06:20:11', '2019-02-19 06:20:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'anggatrisnanda', 'anggatrisnanda@gmail.com', NULL, '$2y$10$5IXMA3vQqSRU35r00L5TSeVtJr92nm/Pdp/Se9hjuCI/qqtrjr1Ui', NULL, '2019-02-17 00:27:34', '2019-02-17 00:27:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gejalas`
--
ALTER TABLE `gejalas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gejalas_penyakit_id_foreign` (`penyakit_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obats`
--
ALTER TABLE `obats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `obats_penyakit_id_foreign` (`penyakit_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `penyakits`
--
ALTER TABLE `penyakits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `results_gejala_id_foreign` (`gejala_id`),
  ADD KEY `results_tester_id_foreign` (`tester_id`);

--
-- Indexes for table `testeds`
--
ALTER TABLE `testeds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `testeds_tester_id_foreign` (`tester_id`);

--
-- Indexes for table `testers`
--
ALTER TABLE `testers`
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
-- AUTO_INCREMENT for table `gejalas`
--
ALTER TABLE `gejalas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `obats`
--
ALTER TABLE `obats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `penyakits`
--
ALTER TABLE `penyakits`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `testeds`
--
ALTER TABLE `testeds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `testers`
--
ALTER TABLE `testers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gejalas`
--
ALTER TABLE `gejalas`
  ADD CONSTRAINT `gejalas_penyakit_id_foreign` FOREIGN KEY (`penyakit_id`) REFERENCES `penyakits` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `obats`
--
ALTER TABLE `obats`
  ADD CONSTRAINT `obats_penyakit_id_foreign` FOREIGN KEY (`penyakit_id`) REFERENCES `penyakits` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_gejala_id_foreign` FOREIGN KEY (`gejala_id`) REFERENCES `gejalas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `results_tester_id_foreign` FOREIGN KEY (`tester_id`) REFERENCES `testers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `testeds`
--
ALTER TABLE `testeds`
  ADD CONSTRAINT `testeds_tester_id_foreign` FOREIGN KEY (`tester_id`) REFERENCES `testers` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
