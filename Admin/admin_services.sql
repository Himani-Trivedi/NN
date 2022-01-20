-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2022 at 08:12 AM
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
-- Database: `nn`
--

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `admin_services` (
  `sid` int(11) NOT NULL,
  `service_name` varchar(30) NOT NULL,
  `s_charge` decimal(5,2) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `Added_by` varchar(255) DEFAULT NULL,
  `Added_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `Modified_Time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `admin_services` (`sid`, `service_name`, `s_charge`, `description`, `photo`, `Added_by`, `Added_time`, `Modified_Time`) VALUES
(1, 'Dressing', '100.00', 'add', '3.jpg', '6ea83028fb463deb27e47a4d85e9b025', '2022-01-03 13:28:22', NULL),
(2, 'Injection', '200.00', 'abb', '2.jpg', '6ea83028fb463deb27e47a4d85e9b025', '2022-01-04 07:48:16', NULL),
(3, 'Wound Care', '200.00', 'zd', '5.jpg', '6ea83028fb463deb27e47a4d85e9b025', '2022-01-04 15:09:30', NULL),
(4, 'Vital Checks', '150.00', 'aaa', '5.jpg', '6ea83028fb463deb27e47a4d85e9b025', '2022-01-04 15:17:27', NULL),
(5, 'Catheterization', '155.00', 'xyz', 'pic-5.jpg', '6ea83028fb463deb27e47a4d85e9b025', '2022-01-05 16:12:05', NULL),
(8, 'aaa', '50.00', 'xxx', 'Screenshot (1).png', '6ea83028fb463deb27e47a4d85e9b025', '2022-01-18 08:50:29', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `services`
--
ALTER TABLE `admin_services`
  ADD PRIMARY KEY (`sid`),
  ADD UNIQUE KEY `service_name` (`service_name`),
  ADD KEY `Admin_Name` (`Added_by`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `admin_services`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `services`
--
-- ALTER TABLE `admin_services`
--   ADD CONSTRAINT `Admin_Name` FOREIGN KEY (`Added_by`) REFERENCES `admin` (`Admin_email`) ON DELETE NO ACTION ON UPDATE CASCADE;
-- COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
