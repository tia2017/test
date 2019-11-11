-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2019 at 06:33 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sc_inovasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `innovations`
--

CREATE TABLE `innovations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute_id` bigint(20) UNSIGNED NOT NULL,
  `innovation_type_id` bigint(20) UNSIGNED NOT NULL,
  `pilar_id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `benefit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unique_creativity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `potency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `strategy` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `risk_analysis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resource` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `verification_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `innovations`
--

INSERT INTO `innovations` (`id`, `name`, `institute_id`, `innovation_type_id`, `pilar_id`, `created_by`, `description`, `benefit`, `unique_creativity`, `potency`, `strategy`, `risk_analysis`, `resource`, `date`, `verification_status`, `created_at`, `updated_at`) VALUES
(95, 'Test Sari Murni', 1, 1, 1, 1, 'Penjelasan Singkat Inovasi', 'Manfaat Inovasi', 'Keunikan/Kreativitas Inovasi', 'Potensi Pengembangan Inovasi', 'Strategi Menjaga Keberlangsungan', 'Analisis Risiko', 'Sumber Daya yang Digunakan', '2019-10-18', 'True', '2019-10-18 04:43:48', '2019-10-18 04:43:48'),
(96, 'Test Sari Murni', 1, 1, 1, 1, 'Penjelasan Singkat Inovasi', 'Manfaat Inovasi', 'Keunikan/Kreativitas Inovasi', 'Potensi Pengembangan Inovasi', 'Strategi Menjaga Keberlangsungan', 'Analisis Risiko', 'Sumber Daya yang Digunakan', '2019-10-18', 'True', '2019-10-18 04:44:06', '2019-10-18 04:44:06'),
(97, 'Test Sari Murni', 1, 1, 1, 1, 'Penjelasan Singkat Inovasi', 'Manfaat Inovasi', 'Keunikan/Kreativitas Inovasi', 'Potensi Pengembangan Inovasi', 'Strategi Menjaga Keberlangsungan', 'Analisis Risiko', 'Sumber Daya yang Digunakan', '2019-10-18', 'True', '2019-10-18 04:45:28', '2019-10-18 04:45:28'),
(131, 'Inovasi Baru Gan', 2, 3, 1, 1, 'Penjelasan Singkat Inovasi', 'Manfaat Inovasi', 'Keunikan/Kreativitas Inovasi', 'Potensi Pengembangan Inovasi', 'Strategi Menjaga Keberlangsungan', 'Analisis Risiko', 'Sumber Daya yang Digunakan', '2019-11-04', 'True', '2019-11-04 08:16:54', '2019-11-04 08:16:54'),
(133, 'Nama Singkat Inovasi', 1, 1, 1, 1, 'Penjelasan Singkat Inovasi', 'Manfaat Inovasi', 'Keunikan/Kreativitas Inova', 'tensi Pengembangan Inovasi', 'Menjaga Keberlangsungan', 'Analisis Risiko', 'ber Daya yang Digunakan', '2019-11-06', 'True', '2019-11-06 12:56:12', '2019-11-06 12:56:12'),
(134, 'Tes Ipi 1', 5, 3, 4, 1, 'Tes Ipi 1', 'Tes Ipi 1', 'Tes Ipi 1', 'Tes Ipi 1', 'Tes Ipi 1', 'Tes Ipi 1', 'Tes Ipi 1', '2019-11-08', 'True', '2019-11-08 01:11:44', '2019-11-08 01:11:44'),
(135, 'Tes Ipi 3', 6, 5, 3, 1, 'Tes Ipi 3 Penjelasan', 'Tes Ipi 3 Manfaat', 'Tes Ipi 3 Keunikan', 'Tes Ipi 3 Potensi', 'Tes Ipi 3 Strategi', 'Tes Ipi 3 Risiko', 'Tes Ipi 3 Sumber Daya', '2019-11-08', 'True', '2019-11-08 09:36:45', '2019-11-08 09:36:45');

-- --------------------------------------------------------

--
-- Table structure for table `innovation_partners`
--

CREATE TABLE `innovation_partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `innovation_id` bigint(20) UNSIGNED NOT NULL,
  `partner_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `innovation_partners`
--

INSERT INTO `innovation_partners` (`id`, `innovation_id`, `partner_id`, `created_at`, `updated_at`) VALUES
(32, 131, 39, '2019-11-04 08:16:55', '2019-11-04 08:16:55'),
(33, 131, 40, '2019-11-04 08:16:55', '2019-11-04 08:16:55'),
(35, 133, 42, '2019-11-06 12:56:13', '2019-11-06 12:56:13'),
(36, 134, 43, '2019-11-08 01:11:44', '2019-11-08 01:11:44'),
(37, 134, 44, '2019-11-08 01:11:44', '2019-11-08 01:11:44'),
(38, 135, 45, '2019-11-08 09:36:45', '2019-11-08 09:36:45'),
(39, 135, 46, '2019-11-08 09:36:45', '2019-11-08 09:36:45');

-- --------------------------------------------------------

--
-- Table structure for table `innovation_steps`
--

CREATE TABLE `innovation_steps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `innovation_id` bigint(20) UNSIGNED NOT NULL,
  `step_id` bigint(20) UNSIGNED NOT NULL,
  `explaination` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `progress_persentage` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `innovation_steps`
--

INSERT INTO `innovation_steps` (`id`, `innovation_id`, `step_id`, `explaination`, `file`, `progress_persentage`, `created_at`, `updated_at`) VALUES
(210, 131, 1, '', NULL, 100, '2019-11-04 08:16:55', '2019-11-04 08:16:55'),
(211, 131, 2, '', NULL, 100, '2019-11-04 08:16:55', '2019-11-04 08:16:55'),
(212, 131, 3, '', NULL, 100, '2019-11-04 08:16:55', '2019-11-04 08:16:55'),
(213, 131, 4, 'Keterangan', 'images.jpg', 20, '2019-11-04 08:16:56', '2019-11-04 08:16:56'),
(214, 131, 5, '', NULL, 0, '2019-11-04 08:16:56', '2019-11-04 08:16:56'),
(215, 131, 6, '', NULL, 0, '2019-11-04 08:16:56', '2019-11-04 08:16:56'),
(222, 133, 1, 'Keterangan', 'main-qimg-22a5176122ad31b082d2dd07d8972860.png', 12, '2019-11-06 12:56:14', '2019-11-06 12:56:14'),
(223, 133, 2, '', NULL, 0, '2019-11-06 12:56:14', '2019-11-06 12:56:14'),
(224, 133, 3, '', NULL, 0, '2019-11-06 12:56:14', '2019-11-06 12:56:14'),
(225, 133, 4, '', NULL, 0, '2019-11-06 12:56:14', '2019-11-06 12:56:14'),
(226, 133, 5, '', NULL, 0, '2019-11-06 12:56:14', '2019-11-06 12:56:14'),
(227, 133, 6, '', NULL, 0, '2019-11-06 12:56:14', '2019-11-06 12:56:14'),
(228, 134, 1, '', NULL, 100, '2019-11-08 01:11:44', '2019-11-08 01:11:44'),
(229, 134, 2, '', NULL, 100, '2019-11-08 01:11:44', '2019-11-08 01:11:44'),
(230, 134, 3, '', NULL, 100, '2019-11-08 01:11:44', '2019-11-08 01:11:44'),
(231, 134, 4, 'Tes Ipi 1', NULL, 15, '2019-11-08 01:11:44', '2019-11-08 01:11:44'),
(232, 134, 5, '', NULL, 0, '2019-11-08 01:11:44', '2019-11-08 01:11:44'),
(233, 134, 6, '', NULL, 0, '2019-11-08 01:11:44', '2019-11-08 01:11:44'),
(234, 135, 1, '', NULL, 100, '2019-11-08 09:36:45', '2019-11-08 09:36:45'),
(235, 135, 2, '', NULL, 100, '2019-11-08 09:36:45', '2019-11-08 09:36:45'),
(236, 135, 3, '', NULL, 100, '2019-11-08 09:36:45', '2019-11-08 09:36:45'),
(237, 135, 4, '', NULL, 100, '2019-11-08 09:36:45', '2019-11-08 09:36:45'),
(238, 135, 5, '', NULL, 100, '2019-11-08 09:36:45', '2019-11-08 09:36:45'),
(239, 135, 6, 'Tes Ipi 3 Keterangan', 'Pintu KRL 01.jpg', 50, '2019-11-08 09:36:45', '2019-11-08 09:36:45');

-- --------------------------------------------------------

--
-- Table structure for table `institutes`
--

CREATE TABLE `institutes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `short_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `institutes`
--

INSERT INTO `institutes` (`id`, `short_name`, `name`, `address`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'DISKOMINFO', 'Dinas Komunikasi dan Informatika', 'Depok', '021222222', NULL, NULL),
(2, 'DINKES', 'Dinas  Kesehatan', 'Depok', '0213441', '2019-09-29 17:00:00', NULL),
(3, 'DISDIK', 'Dinas Pendidikan', 'depok', '1231412', '2019-09-29 17:00:00', NULL),
(4, 'DISKARPUS', 'Dinas Kearsipan dan Perpustakaan', 'Depok', '0218706076', NULL, NULL),
(5, 'DISPORYATA', 'Dinas Pemuda Olahraga Kebudayaan dan Pariwisata', 'Depok', '0218706076', NULL, NULL),
(6, 'DPMPTSP', 'Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu', 'Depok', '0218706076', NULL, NULL);

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
(1, '2019_09_25_065049_institutes', 1),
(2, '2019_09_25_065143_roles', 1),
(3, '2019_09_25_065204_pilars', 1),
(4, '2019_09_25_065215_types', 1),
(5, '2019_09_25_065238_partners', 1),
(6, '2019_09_25_065255_steps', 1),
(7, '2019_09_25_065312_users_detail', 1),
(8, '2019_09_25_065319_users', 1),
(9, '2019_09_25_065458_innovations', 1),
(10, '2019_09_25_065511_innovation_partners', 1),
(11, '2019_09_25_065533_innovation_steps', 1);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `form` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specialization` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `name`, `form`, `specialization`, `address`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Gojek', 'form', 'specialization	', 'address', 'phone', 'email', '2019-10-15 17:00:00', '2019-10-15 17:00:00'),
(7, 'Nama1', 'Bentuk1', NULL, NULL, NULL, NULL, '2019-10-18 04:48:39', '2019-10-18 04:48:39'),
(8, 'nama2', 'Bentuk2', NULL, NULL, NULL, NULL, '2019-10-18 04:48:39', '2019-10-18 04:48:39'),
(9, 'Nama Mitra 1', 'Bentuk Mitra 1', NULL, NULL, NULL, NULL, '2019-10-18 04:49:55', '2019-10-18 04:49:55'),
(10, 'Nama Mitra 2', 'Bentuk Mitra 2', NULL, NULL, NULL, NULL, '2019-10-18 04:49:55', '2019-10-18 04:49:55'),
(11, 'Nama Mitra 1', 'Bentuk 1', NULL, NULL, NULL, NULL, '2019-10-21 06:15:29', '2019-10-21 06:15:29'),
(12, 'Nama Mitra 2', 'Bentuk 2', NULL, NULL, NULL, NULL, '2019-10-21 06:15:29', '2019-10-21 06:15:29'),
(13, 'Nama 1 Baru', 'Bentuk 1 Baru', NULL, NULL, NULL, NULL, '2019-11-03 11:30:33', '2019-11-03 11:30:33'),
(14, 'Bentuk 2 baru', 'Bentuk 2 baru', NULL, NULL, NULL, NULL, '2019-11-03 11:30:33', '2019-11-03 11:30:33'),
(15, 'Nama Mitra', 'Bentuk Mitra', NULL, NULL, NULL, NULL, '2019-11-04 00:14:58', '2019-11-04 00:14:58'),
(16, 'Nama Mitra', 'Bentuk Mitra', NULL, NULL, NULL, NULL, '2019-11-04 00:16:09', '2019-11-04 00:16:09'),
(17, 'Nama Mitra', 'Bentuk Mitra', NULL, NULL, NULL, NULL, '2019-11-04 00:22:01', '2019-11-04 00:22:01'),
(18, 'Nama Mitra', 'Bentuk Mitra', NULL, NULL, NULL, NULL, '2019-11-04 00:22:35', '2019-11-04 00:22:35'),
(19, 'Nama Mitra', 'Bentuk Mitra', NULL, NULL, NULL, NULL, '2019-11-04 00:23:55', '2019-11-04 00:23:55'),
(20, 'Nama Mitra', 'Bentuk Mitra', NULL, NULL, NULL, NULL, '2019-11-04 00:24:16', '2019-11-04 00:24:16'),
(21, 'Nama Mitra', 'Bentuk Mitra', NULL, NULL, NULL, NULL, '2019-11-04 00:24:40', '2019-11-04 00:24:40'),
(22, 'Nama Mitra', 'Bentuk Mitra', NULL, NULL, NULL, NULL, '2019-11-04 00:29:31', '2019-11-04 00:29:31'),
(23, 'Nama Mitra', 'Bentuk Mitra', NULL, NULL, NULL, NULL, '2019-11-04 00:31:30', '2019-11-04 00:31:30'),
(24, 'Nama Mitra', 'Bentuk Mitra', NULL, NULL, NULL, NULL, '2019-11-04 00:38:28', '2019-11-04 00:38:28'),
(25, 'Nama Mitra', 'Bentuk Mitra', NULL, NULL, NULL, NULL, '2019-11-04 00:39:33', '2019-11-04 00:39:33'),
(26, 'Nama Mitra', 'Bentuk Mitra', NULL, NULL, NULL, NULL, '2019-11-04 00:40:06', '2019-11-04 00:40:06'),
(27, 'Nama Mitra', 'Bentuk Mitra', NULL, NULL, NULL, NULL, '2019-11-04 00:42:54', '2019-11-04 00:42:54'),
(28, 'Nama Mitra', 'Bentuk Mitra', NULL, NULL, NULL, NULL, '2019-11-04 00:43:18', '2019-11-04 00:43:18'),
(29, 'Nama Mitra', 'Bentuk Mitra', NULL, NULL, NULL, NULL, '2019-11-04 02:33:37', '2019-11-04 02:33:37'),
(30, 'Nama Mitra', 'Bentuk Mitra', NULL, NULL, NULL, NULL, '2019-11-04 02:37:01', '2019-11-04 02:37:01'),
(31, 'Nama Mitra', 'Bentuk Mitra', NULL, NULL, NULL, NULL, '2019-11-04 02:38:10', '2019-11-04 02:38:10'),
(32, 'Nama Mitra', 'Bentuk Mitra', NULL, NULL, NULL, NULL, '2019-11-04 02:39:30', '2019-11-04 02:39:30'),
(33, 'Nama Mitra', 'Bentuk Mitra', NULL, NULL, NULL, NULL, '2019-11-04 02:42:06', '2019-11-04 02:42:06'),
(34, 'Nama Mitra', 'Bentuk Mitra', NULL, NULL, NULL, NULL, '2019-11-04 02:48:57', '2019-11-04 02:48:57'),
(35, 'ama Mitra', 'Bentuk Mitra', NULL, NULL, NULL, NULL, '2019-11-04 02:49:23', '2019-11-04 02:49:23'),
(36, 'ama Mitra', 'Bentuk Mitra', NULL, NULL, NULL, NULL, '2019-11-04 02:51:34', '2019-11-04 02:51:34'),
(37, 'ama Mitra', 'Bentuk Mitra', NULL, NULL, NULL, NULL, '2019-11-04 02:52:21', '2019-11-04 02:52:21'),
(38, 'ama Mitra', 'Bentuk Mitra', NULL, NULL, NULL, NULL, '2019-11-04 02:52:31', '2019-11-04 02:52:31'),
(39, 'Nama Mitra 1', 'Bentuk Mitra 1', NULL, NULL, NULL, NULL, '2019-11-04 08:16:55', '2019-11-04 08:16:55'),
(40, 'Nama Mitra 2', 'Bentuk Mitra 2', NULL, NULL, NULL, NULL, '2019-11-04 08:16:55', '2019-11-04 08:16:55'),
(41, 'asd', 'asd', NULL, NULL, NULL, NULL, '2019-11-06 12:53:35', '2019-11-06 12:53:35'),
(42, 'Nama Mitra', 'Bentuk Mitra', NULL, NULL, NULL, NULL, '2019-11-06 12:56:13', '2019-11-06 12:56:13'),
(43, 'Tes Ipi 1_1', 'Tes Ipi 1_1', NULL, NULL, NULL, NULL, '2019-11-08 01:11:44', '2019-11-08 01:11:44'),
(44, 'Tes Ipi 1_2', 'Tes Ipi 1_2', NULL, NULL, NULL, NULL, '2019-11-08 01:11:44', '2019-11-08 01:11:44'),
(45, 'Mantis', 'Perusahaan', NULL, NULL, NULL, NULL, '2019-11-08 09:36:45', '2019-11-08 09:36:45'),
(46, 'Jas Putih', 'Komunitas', NULL, NULL, NULL, NULL, '2019-11-08 09:36:45', '2019-11-08 09:36:45');

-- --------------------------------------------------------

--
-- Table structure for table `pilars`
--

CREATE TABLE `pilars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desciption` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pilars`
--

INSERT INTO `pilars` (`id`, `name`, `desciption`, `created_at`, `updated_at`) VALUES
(1, 'Smart Governance', '123', NULL, NULL),
(2, 'Smart Branding', 'branding', NULL, NULL),
(3, 'Smart Economy', 'economy', NULL, NULL),
(4, 'Smart Living', 'living', NULL, NULL),
(5, 'Smart Society', 'society', NULL, NULL),
(6, 'Smart Environment', 'environment', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'Super Admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `steps`
--

CREATE TABLE `steps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desciption` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `steps`
--

INSERT INTO `steps` (`id`, `name`, `desciption`, `created_at`, `updated_at`) VALUES
(1, 'Perumusan Masalah atau Kebutuhan', 'perumusan masalah', NULL, NULL),
(2, 'Perumusan Ide', 'merumuskan ide', NULL, NULL),
(3, 'Perencanaan Pembangunan', 'Ngerencanain pembangunan', NULL, NULL),
(4, 'Pembangunan', 'bangun', NULL, NULL),
(5, 'Implementasi', 'implemen', NULL, NULL),
(6, 'Evaluasi', 'eval', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Program', 'coba desc Type', NULL, NULL),
(2, 'Produk', 'Produk descrip', NULL, NULL),
(3, 'Metode', 'metode descrip', NULL, NULL),
(4, 'Konseptual', 'Konseptual descrip', NULL, NULL),
(5, 'Teknologi', 'Teknologi descrip', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `remember_token` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role_id`, `user_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mahdiw', 'mahdiw@gmail.com', 'mahdi123', 1, 1, '', NULL, NULL),
(2, 'mahdi', 'mahdi@gmail.com', '$2y$12$9bvTf4iyjuCb.pJeZz7Ix.y7ta3YfTYf/dIwtZX2ByixpIkD6YWpe', 2, 2, '', '2019-11-06 23:42:53', '2019-11-06 23:42:53');

-- --------------------------------------------------------

--
-- Table structure for table `users_detail`
--

CREATE TABLE `users_detail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nik` int(11) NOT NULL,
  `nip` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_detail`
--

INSERT INTO `users_detail` (`id`, `nik`, `nip`, `name`, `address`, `gender`, `phone`, `institute_id`, `created_at`, `updated_at`) VALUES
(1, 461701000, 461701000, 'mahdi', 'Bekasi', 'Laki-Laki', '0213333', 1, NULL, NULL),
(2, 123213, 1232, 'mahdi', 'PNJ', 'laki-laki', '12312312', 2, '2019-11-06 23:42:53', '2019-11-06 23:42:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `innovations`
--
ALTER TABLE `innovations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `innovations_institute_id_foreign` (`institute_id`),
  ADD KEY `innovations_innovation_type_id_foreign` (`innovation_type_id`),
  ADD KEY `innovations_pilar_id_foreign` (`pilar_id`),
  ADD KEY `innovations_created_by_foreign` (`created_by`);

--
-- Indexes for table `innovation_partners`
--
ALTER TABLE `innovation_partners`
  ADD PRIMARY KEY (`id`),
  ADD KEY `innovation_partners_innovation_id_foreign` (`innovation_id`),
  ADD KEY `innovation_partners_partner_id_foreign` (`partner_id`);

--
-- Indexes for table `innovation_steps`
--
ALTER TABLE `innovation_steps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `innovation_steps_innovation_id_foreign` (`innovation_id`),
  ADD KEY `innovation_steps_step_id_foreign` (`step_id`);

--
-- Indexes for table `institutes`
--
ALTER TABLE `institutes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pilars`
--
ALTER TABLE `pilars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `steps`
--
ALTER TABLE `steps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_role_id_foreign` (`role_id`),
  ADD KEY `users_user_id_foreign` (`user_id`);

--
-- Indexes for table `users_detail`
--
ALTER TABLE `users_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_detail_institute_id_foreign` (`institute_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `innovations`
--
ALTER TABLE `innovations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `innovation_partners`
--
ALTER TABLE `innovation_partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `innovation_steps`
--
ALTER TABLE `innovation_steps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `institutes`
--
ALTER TABLE `institutes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `pilars`
--
ALTER TABLE `pilars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `steps`
--
ALTER TABLE `steps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users_detail`
--
ALTER TABLE `users_detail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `innovations`
--
ALTER TABLE `innovations`
  ADD CONSTRAINT `innovations_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `innovations_innovation_type_id_foreign` FOREIGN KEY (`innovation_type_id`) REFERENCES `types` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `innovations_institute_id_foreign` FOREIGN KEY (`institute_id`) REFERENCES `institutes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `innovations_pilar_id_foreign` FOREIGN KEY (`pilar_id`) REFERENCES `pilars` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `innovation_partners`
--
ALTER TABLE `innovation_partners`
  ADD CONSTRAINT `innovation_partners_innovation_id_foreign` FOREIGN KEY (`innovation_id`) REFERENCES `innovations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `innovation_partners_partner_id_foreign` FOREIGN KEY (`partner_id`) REFERENCES `partners` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `innovation_steps`
--
ALTER TABLE `innovation_steps`
  ADD CONSTRAINT `innovation_steps_innovation_id_foreign` FOREIGN KEY (`innovation_id`) REFERENCES `innovations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `innovation_steps_step_id_foreign` FOREIGN KEY (`step_id`) REFERENCES `steps` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users_detail` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users_detail`
--
ALTER TABLE `users_detail`
  ADD CONSTRAINT `users_detail_institute_id_foreign` FOREIGN KEY (`institute_id`) REFERENCES `institutes` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
