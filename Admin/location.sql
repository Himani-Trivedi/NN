-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2022 at 09:58 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nn_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `Pincode` int(6) NOT NULL,
  `area_name` varchar(40) NOT NULL,
  `district` varchar(45) NOT NULL,
  `state` varchar(45) NOT NULL,
  `addedby` varchar(255) NOT NULL,
  `added_time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`Pincode`, `area_name`, `district`, `state`, `addedby`, `added_time`) VALUES
(380002, 'N C Market', 'Ahmedabad', 'Gujarat', 'HT', '2022-01-08 08:03:43.000000'),
(380050, 'Ghodasar (Ahmedabad)', 'Ahmedabad', 'Gujarat', 'HT', '2022-01-08 08:04:32.000000'),
(382418, 'Vastral', 'Ahmedabad', 'Gujarat', 'HT', '2022-01-08 08:01:19.000000'),
(382463, 'Ambli', 'Ahmedabad', 'Gujarat', 'ht', '2022-01-08 08:05:17.000000'),
(391310, 'Bajwa', 'Vadodara', 'Gujarat', 'HT', '2022-01-08 08:08:30.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`Pincode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
