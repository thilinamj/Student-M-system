-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2018 at 04:30 PM
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
-- Database: `smsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `class_code` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `classname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day` date NOT NULL,
  `start_time` time(6) NOT NULL,
  `end_time` time(6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `class_code`, `classname`, `section`, `day`, `start_time`, `end_time`, `created_at`, `updated_at`) VALUES
(5, '12', 'sinhala', 'C', '2018-08-14', '05:30:00.000000', '21:03:00.000000', '2018-08-19 22:31:15', '2018-09-01 23:27:43'),
(15, '1233', 'English', 'A', '2018-08-08', '18:06:00.000000', '16:06:00.000000', '2018-08-30 12:36:53', '2018-09-01 23:26:20'),
(6, 'Ab1', 'Tamil', 'A', '2018-10-11', '02:00:00.000000', '08:00:00.000000', '2018-08-19 22:47:22', '2018-09-01 23:26:41'),
(7, 'Ab2', 'IT', 'B', '2018-08-08', '05:05:00.000000', '06:00:00.000000', '2018-08-19 22:48:45', '2018-09-01 23:26:49'),
(16, 'h1', 'hindi', '1', '2018-10-04', '10:48:00.000000', '00:48:00.000000', '2018-10-04 05:18:42', '2018-10-04 05:18:42');

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
(1, '2018_07_29_033721_create_students_table', 1),
(2, '2018_07_30_184405_create_courses_table', 2);

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
-- Table structure for table `rfid`
--

CREATE TABLE `rfid` (
  `id` int(11) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rfid`
--

INSERT INTO `rfid` (`id`, `tag`, `date`) VALUES
(4, '1234567', '0000-00-00 00:00:00'),
(10, '1234568', '2018-10-14 13:29:28'),
(5, '1234569', '0000-00-00 00:00:00'),
(1, '2345666', '0000-00-00 00:00:00'),
(2, '766767889', '0000-00-00 00:00:00'),
(9, '7777', '2018-10-14 11:42:58');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `rnumber` int(10) NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caddress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parentname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paddress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bday` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mnumber` int(10) DEFAULT NULL,
  `lnumber` int(10) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rdate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `classname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sectionname` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `rnumber`, `fullname`, `caddress`, `parentname`, `paddress`, `bday`, `mnumber`, `lnumber`, `email`, `rdate`, `classname`, `sectionname`, `created_at`, `updated_at`) VALUES
(76, 1234568, 'thilina', 'abc', 'zzZ', 'zZ', '2018-10-08', 714716491, 714716491, 'www.thilina705@gmail.com', '2018-10-02', 'English', 'A', '2018-10-15 08:54:29', '2018-10-15 08:54:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'John Smith', 'john_smith@gmail.com', '$2y$10$oX0531knHsHLNZiSFw83bO1OVitSI8n7CohjHyBz/tuzOiiJueKMG', 'h6nDqxKXcR', '2018-07-26 01:12:54', '2018-07-26 01:12:54'),
(2, 'new sigm', 'newsigma@gmail.com', '$2y$10$BWjbnXT6FNY8qaTuKAQsCeKZNx1IAoQFBrKA30wytdR9RhfPXfpIa', 'c6LdDOw10sqSkI67HZH3NhSKQwzlzOFbfKNiS0YlN49NjZlrtRXLjG2kzFCN', '2018-07-27 00:45:07', '2018-07-27 00:45:07'),
(3, 'Admin', 'abc@gmail.com', '$2y$10$JuGE.i8nBHjrXwGKyyniq.1GedPO3MkFEYDG3.9MDG.4yv9DHAu52', 'Y0wuRqjqlYi0vWKf1fSWSF6Xo07W7MR8m1hvPsSAzrujCtRYzAhZAwvvhkKi', '2018-07-28 10:53:38', '2018-07-28 10:53:38'),
(4, 'Prof. Tatum Stracke DVM', 'ceasar11@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 's0B60oMyDI', '2018-08-09 06:26:01', '2018-08-09 06:26:01'),
(5, 'Caitlyn Pfannerstill', 'ewell15@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'or6fjTnaE6', '2018-08-09 06:26:01', '2018-08-09 06:26:01'),
(6, 'Carole Schaden', 'smosciski@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'MyQx0y0cJ6', '2018-08-09 06:26:01', '2018-08-09 06:26:01'),
(7, 'Mrs. Bert Vandervort Jr.', 'usanford@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'mnNti5yuMa', '2018-08-09 06:26:01', '2018-08-09 06:26:01'),
(8, 'Jordan Upton Jr.', 'mgleason@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'CCIaSxIGMZ', '2018-08-09 06:26:01', '2018-08-09 06:26:01'),
(9, 'Marie Zieme DDS', 'erowe@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'R5x2W6eT5N', '2018-08-09 06:26:01', '2018-08-09 06:26:01'),
(10, 'Foster Leffler', 'fhansen@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'VQAIK4xC2E', '2018-08-09 06:26:01', '2018-08-09 06:26:01'),
(11, 'Shanna Carroll', 'jennifer.runolfsdottir@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'UjRr1MueRR', '2018-08-09 06:26:01', '2018-08-09 06:26:01'),
(12, 'Mr. Dorthy Bernhard DVM', 'okuneva.garry@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'J2h0RBzeeh', '2018-08-09 06:26:01', '2018-08-09 06:26:01'),
(13, 'Jasen Feil', 'pasquale76@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'krL6ayEVas', '2018-08-09 06:26:01', '2018-08-09 06:26:01'),
(14, 'Sean Klocko', 'creola.kuphal@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'oNodUiIxvX', '2018-08-09 06:26:01', '2018-08-09 06:26:01'),
(15, 'Eleonore Mante I', 'brandyn.okon@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'GEsIK9BKSC', '2018-08-09 06:26:01', '2018-08-09 06:26:01'),
(16, 'Wade Upton MD', 'ajohnson@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'bDmXMozQn5', '2018-08-09 06:26:01', '2018-08-09 06:26:01'),
(17, 'Lindsay Greenfelder', 'schumm.kattie@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'eMiFENMX7e', '2018-08-09 06:26:01', '2018-08-09 06:26:01'),
(18, 'Reymundo Torp', 'jadyn.torphy@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'UlMXZACxqk', '2018-08-09 06:26:02', '2018-08-09 06:26:02'),
(19, 'Shania Mueller', 'murphy.karli@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'tcfekMbmsd', '2018-08-09 06:26:02', '2018-08-09 06:26:02'),
(20, 'Macey Reichel Jr.', 'estel33@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', '2QlHune735', '2018-08-09 06:26:02', '2018-08-09 06:26:02'),
(21, 'Dr. Aubrey Donnelly IV', 'terrence08@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'yGQrQuaCM3', '2018-08-09 06:26:02', '2018-08-09 06:26:02'),
(22, 'Ms. Zita Cruickshank', 'jbrown@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'iKdJ3LBDGe', '2018-08-09 06:26:02', '2018-08-09 06:26:02'),
(23, 'Electa Hand', 'yberge@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', '1CpPD9qVVi', '2018-08-09 06:26:02', '2018-08-09 06:26:02'),
(24, 'thilina', 'www.thilina705@gmail.com', '$2y$10$2fTGSztHHZRDWyp7bRcdrePc4jNQi7bfLVlXM2zMfvHE0HVcfAeH2', 'HpwebQNi74KJB3UPKAsJZcWOsx4RNVsYHDwwS3vN1c5OYMCjeb6WylJo6Euy', '2018-08-11 15:59:49', '2018-08-11 15:59:49'),
(25, 'admin', 'admin123@gmail.com', '$2y$10$2UeezZUd8JB9JxAq2RKxwer7cBXTFLbhPfHBZGaPaFxraMKngdw9K', 'Im0xCR2G8UnnmodcN5vlihmN7iYkgT3VCiI4cnnbPfciBBwxAOFXICMx7Jn1', '2018-08-14 05:03:40', '2018-08-14 05:03:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`class_code`),
  ADD UNIQUE KEY `class_code` (`class_code`),
  ADD KEY `course_id` (`id`) USING BTREE;

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rfid`
--
ALTER TABLE `rfid`
  ADD PRIMARY KEY (`tag`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`rnumber`),
  ADD KEY `sid` (`id`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rfid`
--
ALTER TABLE `rfid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
