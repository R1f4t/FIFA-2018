-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2018 at 12:57 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fifa2`
--

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE IF NOT EXISTS `matches` (
  `id` int(10) unsigned NOT NULL,
  `team1` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `team2` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `goal1` int(11) NOT NULL,
  `goal2` int(11) NOT NULL,
  `winner` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `stadium` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `stadium_id` int(11) NOT NULL,
  `match_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `match_date` date NOT NULL,
  `match_time` time NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`id`, `team1`, `team2`, `goal1`, `goal2`, `winner`, `stadium`, `stadium_id`, `match_type`, `match_date`, `match_time`, `slug`, `updated_at`, `created_at`) VALUES
(1, 'Russia', 'Saudi Arabia', 5, 0, 'Russia', 'Luzhniki Stadium', 1, 'Group', '2018-06-14', '18:00:00', '5b660ea296f8d', '2018-08-24 16:52:17', '2018-08-04 14:37:54'),
(2, 'Egypt', 'Uruguay', 0, 1, 'Uruguay', 'Ekaterinburg Arena', 4, 'Group', '2018-06-15', '17:00:00', '5b66129bdee16', '2018-08-24 16:52:33', '2018-08-04 14:54:51'),
(3, 'Morocco', 'IR Iran', 0, 1, 'IR Iran', 'Saint Petersburg Stadium', 2, 'Group', '2018-06-15', '18:00:00', '5b6685a59daa3', '2018-08-24 16:52:43', '2018-08-04 23:05:41'),
(4, 'France', 'Argentina', 4, 3, 'France', 'Kazan Arena', 5, 'Knockout', '2018-06-30', '17:00:00', '5b7b2621bf651', '2018-08-24 16:53:09', '2018-08-20 14:35:45'),
(5, 'Brazil', 'Mexico', 2, 0, 'Brazil', 'Samara Arena', 8, 'Knockout', '2018-07-02', '18:00:00', '5b7b288a83baf', '2018-08-24 16:53:22', '2018-08-20 14:46:02'),
(6, 'Uruguay', 'France', 0, 2, 'France', 'Nizhny Novgorod Stadium', 6, 'Quarter-final', '2018-07-06', '17:00:00', '5b7b2bcc6746a', '2018-08-24 16:53:43', '2018-08-20 14:59:56'),
(7, 'Brazil', 'Belgium', 1, 2, 'Belgium', 'Kazan Arena', 5, 'Quarter-final', '2018-07-06', '21:00:00', '5b7b2cdf4f4c6', '2018-08-24 20:09:33', '2018-08-20 15:04:31'),
(8, 'France', 'Belgium', 1, 0, 'France', 'Saint Petersburg Stadium', 2, 'Semifinal', '2018-07-10', '21:00:00', '5b7b2f1bd9da8', '2018-08-24 20:09:52', '2018-08-20 15:14:03'),
(9, 'Croatia', 'England', 2, 1, 'Croatia', 'Luzhniki Stadium', 1, 'Semifinal', '2018-07-11', '21:00:00', '5b7b32b65a48b', '2018-08-24 20:44:18', '2018-08-20 15:29:26'),
(10, 'Belgium', 'England', 2, 0, 'Belgium', 'Saint Petersburg Stadium', 2, 'Play-off for third place', '2018-07-14', '17:00:00', '5b7b33951ea23', '2018-08-24 20:12:41', '2018-08-20 15:33:09'),
(11, 'France', 'Croatia', 4, 2, 'France', 'Luzhniki Stadium', 1, 'Final', '2018-07-15', '18:00:00', '5b7b345c1dcc1', '2018-08-24 20:44:33', '2018-08-20 15:36:28');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_08_03_180257_create_matches_table', 1),
(4, '2018_08_05_052915_create_teams_table', 2),
(5, '2018_08_05_093911_create_players_table', 3),
(6, '2018_08_05_130340_create_stadiums_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE IF NOT EXISTS `players` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `team` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `goal` int(11) NOT NULL,
  `assist` int(11) NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `team_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `name`, `age`, `height`, `team`, `position`, `goal`, `assist`, `slug`, `team_id`, `created_at`, `updated_at`) VALUES
(1, 'Lionel Messi', 31, 170, 'Argentina', 'Forward', 1, 2, '5b66d1930cf51', 0, '2018-08-05 04:29:39', '2018-08-05 04:29:39'),
(2, 'Kylian Mbappe', 19, 178, 'France', 'Forward', 4, 0, '5b66d37e22e5c', 1, '2018-08-05 04:37:50', '2018-08-05 04:37:50'),
(3, 'Neymar', 26, 175, 'Brazil', 'Forward', 2, 1, '5b66d8778ebd9', 2, '2018-08-05 04:59:03', '2018-08-05 04:59:03'),
(4, 'Cristiano Ronaldo', 33, 187, 'Portugal', 'Forward', 4, 0, '5b806c9710a34', 8, '2018-08-24 14:37:43', '2018-08-24 14:37:43'),
(5, 'Harry Kane', 25, 188, 'England', 'Forward', 6, 0, '5b806d53a59e1', 5, '2018-08-24 14:40:51', '2018-08-24 14:40:51'),
(6, 'Renato Augusto', 30, 186, 'Brazil', 'Midfielder', 1, 0, '5b806e0446efa', 2, '2018-08-24 14:43:48', '2018-08-24 14:43:48'),
(7, 'Guillermo Ochoa', 33, 183, 'Mexico', 'Goalkeeper', 0, 0, '5b8070f5127c3', 7, '2018-08-24 14:56:21', '2018-08-24 14:56:21'),
(8, 'Thomas Mueller', 28, 186, 'Germany', 'Midfielder', 0, 0, '5b807395f2453', 4, '2018-08-24 15:07:34', '2018-08-24 15:07:34'),
(9, 'Romelu Lukaku', 25, 193, 'Belgium', 'Forward', 4, 1, '5b8076e0d9680', 6, '2018-08-24 15:21:36', '2018-08-24 15:21:36'),
(10, 'Wilfredo Caballero', 36, 186, 'Argentina', 'Goalkeeper', 0, 0, '5b808a625631f', 3, '2018-08-24 16:44:50', '2018-08-24 16:44:50'),
(11, 'Benjamin Mendy', 24, 185, 'France', 'Defender', 0, 0, '5b808ac46416c', 1, '2018-08-24 16:46:28', '2018-08-24 16:46:28'),
(12, 'Dele Alli', 22, 188, 'England', 'Midfielder', 1, 0, '5b808c0e9f129', 5, '2018-08-24 16:51:58', '2018-08-24 16:51:58'),
(13, 'Thibaut Courtois', 26, 199, 'Belgium', 'Goalkeeper', 0, 0, '5b808c8216d70', 6, '2018-08-24 16:53:54', '2018-08-24 16:53:54');

-- --------------------------------------------------------

--
-- Table structure for table `stadiums`
--

CREATE TABLE IF NOT EXISTS `stadiums` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `capacity` int(11) NOT NULL,
  `match_played` int(11) NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stadiums`
--

INSERT INTO `stadiums` (`id`, `name`, `city`, `capacity`, `match_played`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Luzhniki Stadium', 'Moscow', 80000, 7, '5b66ff1d347ed', '2018-08-05 07:43:57', '2018-08-05 07:43:57'),
(2, 'Saint Petersburg Stadium', 'Saint Petersburg', 67000, 7, '5b7b024f9b14b', '2018-08-20 12:02:55', '2018-08-20 12:02:55'),
(3, 'Fisht Stadium', 'Sochi', 48000, 6, '5b7b02c2e8e71', '2018-08-20 12:04:50', '2018-08-20 12:04:50'),
(4, 'Ekaterinburg Arena', 'Ekaterinburg', 45000, 4, '5b7b02ef302fe', '2018-08-20 12:05:35', '2018-08-20 12:05:35'),
(5, 'Kazan Arena', 'Kazan', 45000, 6, '5b7b0869080b0', '2018-08-20 12:28:57', '2018-08-20 12:28:57'),
(6, 'Nizhny Novgorod Stadium', 'Nizhny Novgorod ', 45000, 6, '5b7b08b22e98c', '2018-08-20 12:30:10', '2018-08-20 12:30:10'),
(7, 'Rostov Arena', 'Rostov-on-Don', 45000, 5, '5b7b10917f975', '2018-08-20 13:03:45', '2018-08-20 13:03:45'),
(8, 'Samara Arena', 'Samara', 45000, 6, '5b7b10f396160', '2018-08-20 13:05:23', '2018-08-20 13:05:23'),
(9, 'Mordovia Arena', 'Saransk', 45000, 4, '5b7b116320dfd', '2018-08-20 13:07:15', '2018-08-20 13:07:15'),
(10, 'Volgograd Stadium', 'Volgograd', 45000, 4, '5b7b12175e084', '2018-08-20 13:10:15', '2018-08-20 13:10:15'),
(11, 'Spartak Stadium', 'Moscow', 42000, 5, '5b7b12403d697', '2018-08-20 13:10:56', '2018-08-20 13:10:56'),
(12, 'Kaliningrad Stadium', 'Kaliningrad', 35212, 4, '5b7b130b277d4', '2018-08-20 13:14:19', '2018-08-20 13:14:19');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE IF NOT EXISTS `teams` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ranking` int(11) NOT NULL,
  `group_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `coach` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cup_win` int(11) NOT NULL,
  `match_played` int(11) NOT NULL,
  `goals` int(11) NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `ranking`, `group_no`, `coach`, `cup_win`, `match_played`, `goals`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'France', 1, 'C', 'Deschamps Didier', 2, 7, 14, '5b66b5fcdcc98', '2018-08-05 02:31:56', '2018-08-05 02:31:56'),
(2, 'Brazil', 3, 'E', 'Tite', 5, 5, 8, '5b66d7d40a166', '2018-08-05 04:56:20', '2018-08-05 04:56:20'),
(3, 'Argentina', 11, 'D', 'Sampaoli Jorge', 2, 4, 6, '5b7ffd7f3585a', '2018-08-24 06:43:43', '2018-08-24 06:43:43'),
(4, 'Germany', 15, 'F', 'Low Joachim', 4, 3, 2, '5b7ffe16269f5', '2018-08-24 06:46:14', '2018-08-24 06:46:14'),
(5, 'England', 6, 'G', 'Southgate Gareth', 1, 7, 12, '5b8012446472a', '2018-08-24 08:12:20', '2018-08-24 08:12:20'),
(6, 'Belgium', 2, 'G', 'Martinez Roberto', 0, 7, 16, '5b80133cbde44', '2018-08-24 08:16:28', '2018-08-24 08:16:28'),
(7, 'Mexico', 16, 'F', 'Osorio Juan Carlos', 0, 4, 3, '5b8014936b3d1', '2018-08-24 08:22:11', '2018-08-24 08:22:11'),
(8, 'Portugal', 7, 'B', 'Santos Fernando', 0, 4, 6, '5b806bffafbdd', '2018-08-24 14:35:11', '2018-08-24 14:35:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
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
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stadiums`
--
ALTER TABLE `stadiums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
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
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `stadiums`
--
ALTER TABLE `stadiums`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
