-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2023 at 08:57 AM
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
-- Database: `registration_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT curtime(),
  `first_name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `birthdate` date NOT NULL,
  `phonenum` int(11) NOT NULL,
  `region` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `barangay` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `pwd`, `created_at`, `first_name`, `surname`, `gender`, `birthdate`, `phonenum`, `region`, `city`, `barangay`) VALUES
(2, 'aira', 'aira@email.com', '$2y$12$qHQ2.pojOi2RX0aoPiTkiO9', '2023-11-05 10:04:23', 'aira', 'estur', 'female', '2023-11-07', 2147483647, 'ncr', 'caloocan', 'cattleya'),
(4, 'Harold', 'harold.amad@gmail.com', '$2y$12$8I6ahN80MiICkeB2gaex4e5', '2023-11-05 12:20:56', 'Harold', 'Amad', 'male', '2023-12-16', 2147483647, 'NCR', 'Malabon', 'Maysilo'),
(5, 'Sig', 'sig@gmail.com', '$2y$12$ZkJX4HR160yDKHNCRxxrHuA', '2023-11-05 13:38:43', 'sig', 'mina', 'male', '2023-11-08', 2147483647, 'ncr', 'Malabon', 'Maysilo'),
(6, 'Jason', 'jason@email.com', '$2y$12$EnuA/Dkh7sKR2uRn.rObW.o', '2023-11-05 13:58:41', 'jason', 'buhain', 'male', '2023-10-31', 2147483647, 'NCR', 'Malabon', 'Maysilo'),
(7, 'Ace', 'ace@gmail.com', '$2y$12$K8WAEr7vUO2DNI2.YMxFw.m', '2023-11-05 14:41:55', 'ace', 'clavano', 'female', '2023-11-07', 2147483647, 'NCR', 'Malabon', 'Maysilo'),
(8, 'nins', 'nins@gmail.com', '$2y$12$EeBbUywflQdcm1Cc2fyqWOCby8wvsAqZge1m5zTOiWIqLY.xlC1Yi', '2023-11-05 14:51:03', 'nins', 'punzalan', 'lgbtqia+', '2023-11-21', 2147483647, 'NCR', 'Malabon', 'Maysilo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
