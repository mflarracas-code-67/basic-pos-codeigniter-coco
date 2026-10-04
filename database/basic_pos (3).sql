-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2026 at 09:44 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basic_pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `full_name`, `email`, `phone`, `created_at`) VALUES
(2, 'Maria Sants', 'maria@example.com', '09181234567', '2026-09-15 02:55:40'),
(3, 'Pedro Reyes', 'pedro@example.com', '09191234567', '2026-09-15 02:55:40'),
(4, 'Ana Garcia', 'ana@example.com', '09201234567', '2026-09-15 02:55:40'),
(5, 'Carlos Mendoza', 'carlos@example.com', '09211234567', '2026-09-15 02:55:40'),
(7, 'Jame Jame', 'jamejame@example.com', '09651230587', '2026-09-28 08:12:09');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'pending',
  `task_date` date NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `title`, `status`, `task_date`, `created_at`) VALUES
(1, 'Review project requirements', 'pending', '2026-09-21', '2026-09-21 22:49:10'),
(2, 'Complete PHP coding', 'pending', '2026-09-21', '2026-09-21 22:49:10'),
(3, 'Test database connection', 'completed', '2026-09-21', '2026-09-21 22:49:10'),
(4, 'Update project documentation', 'pending', '2026-09-21', '2026-09-21 22:49:10'),
(5, 'Review yesterday\'s work', 'completed', '2026-09-20', '2026-09-21 22:49:10'),
(6, 'Backup project files', 'completed', '2026-09-20', '2026-09-21 22:49:10'),
(7, 'Prepare presentation slides', 'pending', '2026-09-22', '2026-09-21 22:49:10'),
(8, 'Submit project requirements', 'pending', '2026-09-22', '2026-09-21 22:49:10'),
(10, 'hello', 'pending', '2026-09-28', '2026-09-28 07:27:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `avatar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `full_name`, `email`, `password`, `created_at`, `avatar`) VALUES
(1, 'admin', 'John Admin', '', '$2y$10$RM.0BJ67sfylBRzG7KMQTuvYSkkhRlmc6dUNVodHOmkjW6aHOfLEq', '2026-09-15 02:56:58', 'avatar_1_1790587746.jpg'),
(2, 'cashier01', 'Sarah Lopez', '', '$2y$10$xulwRogkMxkaUgEUKcDUvelNYxqVUWRQooSqWuInn57SRKB.rPDZm', '2026-09-15 02:56:58', 'avatar_2_1790588077.jpg'),
(3, 'cashier02', 'Mark Cruz', '', '$2y$10$5toi0euxxdZaXa2IsvwUuu.0quVSHsg/Fl7lgp.Xnrnn/aaTp8zXS', '2026-09-15 02:56:58', NULL),
(4, 'manager01', 'Daniel Santos', '', '$2y$10$sro4uNkue8WvRRH9vhaRx.sTj3sERutqFU8Z0EKuMUgA06UYkT/SC', '2026-09-15 02:56:58', NULL),
(5, 'staff01', 'Angela Reyes', '', '$2y$10$UTNTjxKJsU//pqJ386yBiuEMpaVU.KDEYHZNFitvF4km6kegReYW.', '2026-09-15 02:56:58', NULL),
(6, 'demo_user', 'Demo User', 'demo@example.com', '$2y$10$LqkWWjxXL9F6Nmt2bELpiOEZIHVBha57kdGbkyYjyksIjCSAv5h9a', '2026-09-21 22:53:33', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
