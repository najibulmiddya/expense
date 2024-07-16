-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2024 at 03:53 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `expense`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Food'),
(12, 'Travel'),
(17, 'Shopping');

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `item` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `details` text NOT NULL,
  `expense_date` date NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `added_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`id`, `category_id`, `item`, `price`, `details`, `expense_date`, `added_on`, `update_at`, `added_by`) VALUES
(4, 1, 'Dosa', 300, 'Test', '2023-01-15', '2023-01-15 13:59:59', '0000-00-00 00:00:00', 5),
(5, 12, 'Cab', 400, 'Client', '2023-01-15', '2023-01-15 09:50:53', '0000-00-00 00:00:00', 5),
(6, 1, 'Tea', 50, 'Client Visit', '2023-01-15', '2023-01-15 01:58:16', '0000-00-00 00:00:00', 5),
(16, 1, 'Test', 50, 'test details', '2024-06-25', '2024-06-25 06:06:42', '0000-00-00 00:00:00', 15),
(17, 1, 'gh', 74, 'df', '2024-06-25', '2024-06-25 07:28:02', '0000-00-00 00:00:00', 15),
(27, 12, 'bick', 100, 'bankura', '2024-07-02', '2024-07-02 21:31:32', '0000-00-00 00:00:00', 11),
(28, 1, 'Rice', 60, 'test details', '2024-06-30', '2024-07-02 21:32:35', '0000-00-00 00:00:00', 11),
(29, 17, 'bick', 50, 'test', '2024-07-01', '2024-07-02 22:24:15', '0000-00-00 00:00:00', 11),
(31, 1, 'Rice', 180, 'test details', '2024-07-05', '2024-07-05 20:03:39', '0000-00-00 00:00:00', 14),
(32, 12, 'bus', 300, 'bankura', '2024-07-04', '2024-07-05 20:04:13', '0000-00-00 00:00:00', 14),
(33, 17, 'Online Sopping', 850, 'Sopping', '2024-07-05', '2024-07-05 20:06:00', '0000-00-00 00:00:00', 14),
(34, 1, 'Test', 100, 'test', '2024-07-09', '2024-07-09 19:54:50', '0000-00-00 00:00:00', 14),
(35, 17, 'gh', 60, 'punjab', '2024-07-08', '2024-07-09 19:55:09', '0000-00-00 00:00:00', 14),
(36, 1, 'gh', 550, 'df', '2024-07-10', '2024-07-10 20:18:39', '0000-00-00 00:00:00', 14),
(37, 1, 'gh', 60, 'df', '2024-07-12', '2024-07-12 20:38:31', '0000-00-00 00:00:00', 14),
(38, 1, 'bick', 50, 'bankura', '2024-07-11', '2024-07-12 21:41:17', '0000-00-00 00:00:00', 14),
(39, 12, 'gh', 50, 'test details', '2024-07-04', '2024-07-12 22:26:49', '0000-00-00 00:00:00', 14),
(40, 1, 'frv', 550, 'sdjk', '2024-06-11', '2024-07-12 22:29:19', '0000-00-00 00:00:00', 14),
(41, 1, 'gh', 50, 'test', '2024-07-14', '2024-07-15 12:23:01', '0000-00-00 00:00:00', 14),
(42, 1, 'gh', 50, 'df', '2024-07-15', '2024-07-15 12:23:22', '0000-00-00 00:00:00', 14),
(43, 12, 'gh', 100, 'punjab', '2024-07-15', '2024-07-15 12:24:23', '0000-00-00 00:00:00', 14);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('User','Admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`) VALUES
(10, 'Najibul', 'najibulmiddya11@gmail.com', '$2y$10$u1qvbbo04UbUj5IlIox8D.3.tAOvTlyzPM9Wnm63zd5nD8.gCezuu', 'Admin'),
(11, 'naji', 'naji@gmail.com', '$2y$10$ckRcpEp7.Z8QiFbCtOkHuOd.OIPRTtERuu1zwnrR0kPK1CRG4T5HC', 'User'),
(13, 'user', 'user1@gmail.com', '$2y$10$mAzOA8GV9LfZ8ij/1KO0zuAfPP/uH1zfErQFzoYi/csR29vPWwHFq', 'User'),
(14, 'Asikul', 'asikul141@gmail.com', '$2y$10$Uw2FpqoiWXd/LKk32V2JlOI/ljLYry6sdEg6gTfHIZ2ZSqQlA17Eu', 'User'),
(15, 'test', 'test@gmail.com', '$2y$10$F5LymGZkW6p/sV2OMSPOfeuW1qtqA1PIvhBntUhJraPal5UrMmxfa', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
