-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2022 at 11:15 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

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
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `sid` int(11) NOT NULL,
  `service_name` varchar(30) NOT NULL,
  `s_charge` decimal(5,2) NOT NULL,
  `description` text NOT NULL,
  `icons` varchar(255) NOT NULL,
  `Added_by` varchar(255) DEFAULT NULL,
  `Added_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `Modified_Time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`sid`, `service_name`, `s_charge`, `description`, `icons`, `Added_by`, `Added_time`, `Modified_Time`) VALUES
(1, 'Elder Care', '700.00', 'Administration of vaccines for all age groups as prescribed', 'fas fa-thermometer', NULL, '2022-01-03 13:28:22', NULL),
(2, 'Injections', '250.00', 'IM (Intra-muscular) or IV (Intra-venous) administration of prescribed medicines', 'fas fa-syringe', NULL, '2022-01-04 07:48:16', NULL),
(3, 'Wound Care', '200.00', 'Wound management & dressing including diabetic wound care', 'fas fa-pills', NULL, '2022-01-04 15:09:30', NULL),
(4, 'Vital Checks', '350.00', 'onitoring of vital parameters like blood pressure, pulse, oxygen saturation etc.', 'fas fa-heartbeat', NULL, '2022-01-04 15:17:27', NULL),
(5, 'Catheterization', '550.00', 'Intravenous fluid and electrolyte administration for various conditions', 'fas fa-wheelchair', NULL, '2022-01-05 16:12:05', NULL),
(6, 'Intravenous Fluids', '300.00', 'Complete catheter care: Insertion, monitoring and management', 'fas fa-notes-medical', NULL, '2022-01-28 12:53:02', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`sid`),
  ADD UNIQUE KEY `service_name` (`service_name`),
  ADD KEY `Admin_Name` (`Added_by`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
