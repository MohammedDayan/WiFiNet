-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2021 at 04:32 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wifinet`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `mobile` varchar(70) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(9) NOT NULL,
  `password` varchar(100) NOT NULL,
  `currentPackage` varchar(25) NOT NULL,
  `walletBal` int(10) DEFAULT NULL,
  `date` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `Data` int(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `mobile`, `email`, `address`, `password`, `currentPackage`, `walletBal`, `date`, `Data`) VALUES
(1, 'rahim', '233541070745', 'alhassan@gmail.com', 'NT-0118-7', 'ee9350b4775e00ca2b97511bb3dcc4c685df10bb', '', NULL, '2021-08-01 11:13:04.222315', NULL),
(2, 'sufi', '233541070745', 'aar@gmail.com', 'NT-6353-5', '8cb2237d0679ca88db6464eac60da96345513964', '', NULL, '2021-08-01 16:01:24.910923', NULL),
(3, 'abduldayan', '0240527371', 'abduldayan29@gmail.com', 'A8 kt', '2591e5f46f28d303f9dc027d475a5c60d8dea17a', '2 Cedis 400 Mb', 8, '2021-08-31 12:16:19.512752', 8544),
(4, 'Hairia', '+233240527371', 'mohammeddayan29@gmail.com', 'NS 283643', 'dbac6675108d70d0407c5d7a39fc9c19ca5669ad', '', NULL, '2021-09-01 02:27:13.625235', NULL),
(5, 'Sadia', '0249910438', 'sadia28@gmail.com', 'NS 283643', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2 Cedis 400 Mb', NULL, '2021-09-01 09:02:51.601711', 800);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
