-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2025 at 02:45 PM
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
-- Database: `tsa2`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` int(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `consent` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `name`, `email`, `phone`, `password`, `consent`, `created_at`) VALUES
(6, 'Aaron', '202312675@fit.edu.ph', 2147483647, '$2y$10$2GIU1YQdSm89fH9N3dKFIeNGulDrG7ahh4BQW.ltU6l23T0j2jwBK', 1, '2025-09-19 15:36:57'),
(7, 'Julia Base', 'giver@airiws.live', 2147483647, '$2y$10$VwYS6ikG14VLNqbWwt88keKx8RUxjhXfLvGMVv8GYmpcs69/n41oC', 1, '2025-09-19 15:42:26'),
(8, 'Milo', 'astriellezadula@gmail.com', 2147483647, '$2y$10$URvLGRUrNGmg7ZMrKAqipeqz7AqW5EP1HGfizQ2ET8XwiHEBshnje', 1, '2025-09-20 08:43:09'),
(9, 'Ron', 'santillanezhcdadlanihc104@hotmail.com', 2147483647, '$2y$10$1mkFrXGUk1kSwj/lwEjDQ.LxaTY.dLhwM1F6Y6wTV.a5hh25K7Rne', 1, '2025-09-20 09:58:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
