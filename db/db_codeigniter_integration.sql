-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 13, 2025 at 07:26 AM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_codeigniter_integration`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_meta`
--

CREATE TABLE `tb_meta` (
  `meta_id` int(1) NOT NULL,
  `robots` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `refresh` int(4) DEFAULT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `theme_color` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `domain_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_url` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `og_image` varchar(8) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_image` varchar(8) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_account` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(4) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` datetime(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_meta`
--

INSERT INTO `tb_meta` (`meta_id`, `robots`, `refresh`, `title`, `description`, `keywords`, `author`, `copyright`, `theme_color`, `domain_name`, `site_name`, `site_url`, `og_image`, `twitter_image`, `twitter_account`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(1, 'index, follow', 1200, 'Codeigniter Integration Template Project Website', 'Codeigniter Integration Template Project Website', 'Codeigniter Integration Template Project Website', 'Alpin', 'Copyright © 2024 Codeigniter Integration Template Project Website. All Rights Reserved', '#d49925', 'tes.com', 'Codeigniter Integration Template Project Website', 'https://www.tes.com', '1.jpg', '1.jpg', '-', 1, '2021-12-03 19:35:04', 1, '2024-11-21 07:57:16.0000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `user_id` int(4) NOT NULL,
  `photo` varchar(9) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mid_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` int(1) DEFAULT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_by` int(4) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_by` int(4) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`user_id`, `photo`, `first_name`, `mid_name`, `last_name`, `username`, `password`, `role`, `status`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(1, '1.jpg', 'Nuansa', 'Serpong', 'Administrator', 'admin', '$2y$10$.RGge/OG2tFB98WIcFOXv.V10.xWa5ReCVGc24Vn/v8hC63nmw1pG', 1, '1', 1, '2021-10-13 22:37:57', 1, '2024-11-13 08:23:05');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users_log`
--

CREATE TABLE `tb_users_log` (
  `log_id` bigint(20) NOT NULL,
  `user_id` int(4) DEFAULT NULL,
  `date_log` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(1) DEFAULT '0',
  `user_ip` char(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_meta`
--
ALTER TABLE `tb_meta`
  ADD PRIMARY KEY (`meta_id`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tb_users_log`
--
ALTER TABLE `tb_users_log`
  ADD PRIMARY KEY (`log_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_meta`
--
ALTER TABLE `tb_meta`
  MODIFY `meta_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `user_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_users_log`
--
ALTER TABLE `tb_users_log`
  MODIFY `log_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
