-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2022 at 05:47 PM
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
-- Database: `nn_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `request_form`
--

CREATE TABLE `request_form` (
  `Request_id` int(20) NOT NULL,
  `User_Email` varchar(255) NOT NULL,
  `service_name` varchar(30) NOT NULL,
  `Service_Date_Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Address` text NOT NULL,
  `Pincode` varchar(6) NOT NULL,
  `Prescription` varchar(255) NOT NULL,
  `Created_Req_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `nurse_email` varchar(255) NOT NULL,
  `Landmark` varchar(255) NOT NULL,
  `Block_Number` varchar(10) NOT NULL,
  `Status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request_form`
--

INSERT INTO `request_form` (`Request_id`, `User_Email`, `service_name`, `Service_Date_Time`, `Address`, `Pincode`, `Prescription`, `Created_Req_time`, `nurse_email`, `Landmark`, `Block_Number`, `Status`) VALUES
(1, 'c990bbd37fed8a8f30955598f50ca114', 'Intravenous Fluids', '2022-02-26 10:55:00', 'A 101 Mahdev Residency 2, Nr. Matru 88', '380008', '../Nurse/Nurse_signup/upload/689Cryptography_and_Network_Security.pdf', '2022-02-10 10:36:38', '089dce42accf7f97c328399910ddabe8', 'New Maninagr', '1', 0),
(8, '44da8393548e6ac1fbcd76bb05e83104', 'Elder Care', '2022-02-19 16:25:00', 'ewf gwregwg', '380008', '../Nurse/Nurse_signup/upload/285Data structures using C ( PDFDrive.com ).pdf', '2022-02-10 16:12:38', '123c6397c59202460688f71d071221d7', 'ewf', '3 ', 0),
(10, 'xyz@123;', 'aaa', '2022-02-11 09:58:17', 'zxsdsd', '380004', 'sdse', '2022-02-11 09:58:17', 'Diya@5', 'sdsd', '5', 999);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `request_form`
--
ALTER TABLE `request_form`
  ADD PRIMARY KEY (`Request_id`),
  ADD KEY `PatientName` (`User_Email`),
  ADD KEY `nurse_email` (`nurse_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `request_form`
--
ALTER TABLE `request_form`
  MODIFY `Request_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
