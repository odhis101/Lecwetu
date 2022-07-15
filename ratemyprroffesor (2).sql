-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2022 at 07:47 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ratemyprroffesor`
--

-- --------------------------------------------------------

--
-- Table structure for table `professors`
--

CREATE TABLE `professors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `university` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `professors`
--

INSERT INTO `professors` (`id`, `name`, `university`) VALUES
(126, 'JOSHUA', 'USIU');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `unique_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `proff_id` int(11) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Fname` varchar(255) NOT NULL,
  `Lname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `verified` int(11) NOT NULL DEFAULT 0,
  `vkey` varchar(45) NOT NULL,
  `create_data` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Fname`, `Lname`, `username`, `password`, `Email`, `verified`, `vkey`, `create_data`) VALUES
(20, 'Inez Massey', 'Leslie Odom', 'fyzycor', 'Pa$$w0rd!', 'xajykiluci@mailinator.com', 0, '', '2022-07-03 10:12:21'),
(21, 'Stacey Kinney', 'Talon Bush', 'bugoro', 'Pa$$w0rd!', 'zuva@mailinator.com', 0, '', '2022-07-03 10:14:03'),
(22, 'MIchael', 'Odhiambo', 'michaelodhiambom@outlook.com', 'natasha12', 'michaelogango5@gmail.com', 0, '', '2022-07-03 10:41:26'),
(23, 'Joshua', 'Odhiambo', 'odhis101', 'natasha12', 'joshodhiambo5@gmail.com', 0, '', '2022-07-03 12:04:42'),
(24, 'Bevis Watson', 'Hyatt Rogers', 'zopigekig', 'Pa$$w0rd!', 'siruqego@mailinator.com', 0, '', '2022-07-03 12:08:08'),
(25, 'Cameron Huff', 'Blaine Riggs', 'putoxyxa', 'Pa$$w0rd!', 'pyco@mailinator.com', 0, '', '2022-07-03 15:11:24'),
(26, 'Norman Moses', 'Plato Randolph', 'cibucyximu', '12345', 'fymy@mailinator.com', 0, '', '2022-07-04 07:49:26'),
(27, 'joshua', 'joshua', 'joshua', 'joshua', 'joshua', 0, '', '2022-07-13 08:57:59'),
(28, 'Bree Mcintyre', 'Xavier Russell', 'xunez', 'Pa$$w0rd!', 'wyrahega@mailinator.com', 0, '', '2022-07-13 09:01:31'),
(29, 'Declan Gilliam', 'Kennedy Knapp', 'wibunimo', 'Pa$$w0rd!', 'lediq@mailinator.com', 0, '', '2022-07-13 09:02:24'),
(30, 'Simone Patterson', 'Dalton Mccormick', 'wukamazegu', 'Pa$$w0rd!', 'fefuvuqyhe@mailinator.com', 0, '', '2022-07-13 09:02:46'),
(31, 'Nora Hill', 'Gregory Gamble', 'lusydi', 'Pa$$w0rd!', 'nujizudid@mailinator.com', 0, '', '2022-07-13 09:02:59'),
(32, 'Jessica Newman', 'Allen Rutledge', 'dufyg', 'Pa$$w0rd!', 'zicely@mailinator.com', 0, '', '2022-07-13 09:03:22'),
(33, 'joshua', 'joshua', '1234', '1234', 'joshodhiambo115@gmail.com', 0, '', '2022-07-13 17:03:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `professors`
--
ALTER TABLE `professors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`unique_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `professors`
--
ALTER TABLE `professors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `unique_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
