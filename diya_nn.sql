-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2022 at 09:50 AM
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
-- Table structure for table `accepted_request_form`
--

CREATE TABLE `accepted_request_form` (
  `Acc_Ser_form` int(20) NOT NULL,
  `Request_id` int(20) NOT NULL,
  `N_id` int(10) NOT NULL,
  `Status` int(3) NOT NULL,
  `Payment Amount` decimal(5,2) NOT NULL,
  `Accepted_Req_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_email` varchar(255) NOT NULL,
  `email2` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Phone_no` int(10) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Created_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Modified_Time` timestamp NULL DEFAULT NULL,
  `Verified` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_email`, `email2`, `Password`, `Phone_no`, `Name`, `Created_time`, `Modified_Time`, `Verified`) VALUES
('2baceab4fc702521a9148693868bbe48', '', '67689db14dda74f617f91130dccec100', 57586, 'Diya', '2022-01-28 08:02:15', '2022-01-28 06:40:10', 0),
('42eed55809d379351caff9b6c11fdebc', '', '900150983cd24fb0d6963f7d28e17f72', 2122334455, 'Admin2', '2022-01-19 09:25:45', NULL, 0),
('cb5eb1954ac50a91477933241ae9e577', 'Joe@gmail.com', '202cb962ac59075b964b07152d234b70', 914747777, 'Joe', '2022-01-29 05:50:56', '2022-01-28 17:22:31', 0);

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `Email` varchar(255) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `IP_address` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `appnurses`
--

CREATE TABLE `appnurses` (
  `Nid` int(10) NOT NULL,
  `nurseMail` varchar(255) NOT NULL,
  `balance` decimal(5,2) NOT NULL COMMENT 'It''s value will be derived from approval_status relation using email of nurse when admin approves the nurse.',
  `profilePhoto` varchar(255) NOT NULL,
  `joiningTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `modifiedTime` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `approval_status`
--

CREATE TABLE `approval_status` (
  `Email` varchar(255) NOT NULL,
  `Admin_email` varchar(255) NOT NULL,
  `Approval _Status` varchar(100) NOT NULL,
  `Reason` text NOT NULL,
  `Approval_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `backup_scheduling`
--

CREATE TABLE `backup_scheduling` (
  `N_id` int(10) NOT NULL,
  `Day` varchar(10) NOT NULL,
  `Free_hours` int(10) NOT NULL,
  `Update_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `course` varchar(100) NOT NULL,
  `certificate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`id`, `email`, `course`, `certificate`) VALUES
(12, '6ea83028fb463deb27e47a4d85e9b025', 'C++', 'upload/781C++ by E Balagurusamy.pdf'),
(28, 'c990bbd37fed8a8f30955598f50ca114', 'Resume', 'upload/591Himani Trivedi.pdf'),
(29, 'c990bbd37fed8a8f30955598f50ca114', 'Front End', 'upload/827Front End-converted.pdf'),
(30, '089dce42accf7f97c328399910ddabe8', 'Digital Marketing', 'upload/430Jargon Buster - Digital Marketing.pdf'),
(31, '089dce42accf7f97c328399910ddabe8', 'CMTS', 'upload/5263350701_unit-5-troubleshooting-and-preventive-maintenance.pdf'),
(32, '089dce42accf7f97c328399910ddabe8', 'JAVA Prac', 'upload/3913350703_Practical_index_2019batch.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `Exp_ID` int(20) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `hospital_name` varchar(30) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `Exp_letter` varchar(255) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `hos_address` text NOT NULL,
  `exp_yrs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`Exp_ID`, `Email`, `hospital_name`, `from_date`, `to_date`, `Exp_letter`, `designation`, `hos_address`, `exp_yrs`) VALUES
(12, '6ea83028fb463deb27e47a4d85e9b025', 'Clear Vision', '2015-01-09', '2019-01-10', 'upload/358Cryptography_and_Network_Security.pdf', 'ANM', 'Ghodasar, Nr Comfiy restaurant.', 4),
(20, 'c990bbd37fed8a8f30955598f50ca114', 'SVVP', '2015-01-09', '2016-12-20', 'upload/49407149_PPUD_6.pdf', 'ANM', 'Nr Paldi, Twon hall, Ahmedabad.', 1),
(21, 'c990bbd37fed8a8f30955598f50ca114', 'U N Mehta', '2017-01-20', '2021-01-07', 'upload/90107149_PPUD_1.pdf', 'Assistant Nurse', 'Nr. Ramdev Nagar, Ahmedabad', 3),
(22, '089dce42accf7f97c328399910ddabe8', 'Shalby Hospitals', '2015-01-01', '2022-01-14', 'upload/345Data_Dic.pdf', 'ANM', 'Kathwada Rd, New India Colony, Naroda, Ahmedabad, Gujarat 382325', 7);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `Pincode` int(6) NOT NULL,
  `area_name` varchar(40) NOT NULL,
  `district` varchar(45) NOT NULL,
  `state` varchar(45) NOT NULL,
  `addedby` varchar(255) DEFAULT NULL,
  `added_time` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `Modified_By` varchar(100) DEFAULT NULL,
  `Modified_time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`Pincode`, `area_name`, `district`, `state`, `addedby`, `added_time`, `Modified_By`, `Modified_time`) VALUES
(380002, 'N C Market', 'Ahmedabad', 'Gujarat', 'HT', '2022-01-08 08:03:43.000000', '', '2022-01-30 07:53:42'),
(380007, 'Paldi ', 'Ahmedabad', 'Gujarat', 'ADMINxyz', '2022-01-29 06:36:39.426313', 'cb5eb1954ac50a91477933241ae9e577', '2022-01-30 08:47:06'),
(380050, 'Ghodasar (Ahmedabad)', 'Ahmedabad', 'Gujarat', 'HT', '2022-01-08 08:04:32.000000', '', '2022-01-30 07:53:42'),
(382418, 'Vastral', 'Ahmedabad', 'Gujarat', 'HT', '2022-01-08 08:01:19.000000', '', '2022-01-30 07:53:42'),
(382463, 'Ambli', 'Ahmedabad', 'Gujarat', 'ht', '2022-01-08 08:05:17.000000', '', '2022-01-30 07:53:42'),
(391310, 'Bajwa', 'Vadodara', 'Gujarat', 'HT', '2022-01-08 08:08:30.000000', '', '2022-01-30 07:53:42'),
(400003, 'Mandvi', 'Mumbai', 'Maharashtra', 'cb5eb1954ac50a91477933241ae9e577', '2022-01-30 08:46:31.000000', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nurselogin`
--

CREATE TABLE `nurselogin` (
  `Email` varchar(255) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `IP_address` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nurse_selected_areas`
--

CREATE TABLE `nurse_selected_areas` (
  `N_id` int(10) NOT NULL,
  `Pin code` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nurse_selected_services`
--

CREATE TABLE `nurse_selected_services` (
  `Nid` int(10) NOT NULL,
  `Sid` int(10) NOT NULL,
  `S_charge` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nurse_transaction`
--

CREATE TABLE `nurse_transaction` (
  `T_id` int(20) NOT NULL,
  `N_id` int(10) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp(),
  `Type` varchar(50) NOT NULL,
  `Tran_amount` varchar(50) NOT NULL,
  `Amount` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `Email` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Ph No` int(10) NOT NULL,
  `Created_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Modified_Time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `patient2`
--

CREATE TABLE `patient2` (
  `Email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Ph No` int(10) NOT NULL,
  `Created_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Modified_Time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient2`
--

INSERT INTO `patient2` (`Email`, `password`, `Name`, `Ph No`, `Created_time`, `Modified_Time`) VALUES
('089dce42accf7f97c328399910ddabe8', '202cb962ac59075b964b07152d234b70', '', 0, '2021-12-13 10:46:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `patientlogin`
--

CREATE TABLE `patientlogin` (
  `Email` varchar(255) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `IP_address` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Pay_id` int(20) NOT NULL,
  `Pay_time` timestamp NULL DEFAULT current_timestamp(),
  `Pay_type` varchar(20) NOT NULL,
  `Patient_Nurse` int(20) NOT NULL,
  `Pay_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `request_form`
--

CREATE TABLE `request_form` (
  `Request_id` int(20) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Service_Time` time NOT NULL,
  `Service_Date` date NOT NULL,
  `Address` text NOT NULL,
  `Pincode` int(6) NOT NULL,
  `Prescription` varchar(255) NOT NULL,
  `Created_Req_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `sid` int(11) NOT NULL,
  `service_name` varchar(30) NOT NULL,
  `s_charge` decimal(5,2) NOT NULL,
  `description` text NOT NULL,
  `Added_by` varchar(255) DEFAULT NULL,
  `Added_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `Modified_Time` timestamp NULL DEFAULT NULL,
  `Modified_By` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`sid`, `service_name`, `s_charge`, `description`, `Added_by`, `Added_time`, `Modified_Time`, `Modified_By`) VALUES
(1, 'Dressing', '100.00', 'add', NULL, '2022-01-03 13:28:22', NULL, NULL),
(2, 'Injection', '200.00', 'abb', NULL, '2022-01-04 07:48:16', NULL, NULL),
(3, 'Wound Care', '200.00', 'zd', NULL, '2022-01-04 15:09:30', NULL, NULL),
(4, 'Vital Checks', '150.00', '                    aav               ', NULL, '2022-01-04 15:17:27', NULL, NULL),
(9, 'Catheterization', '100.00', 'cat', NULL, '2022-01-24 17:05:20', NULL, NULL),
(20, 'Elderly Care', '100.00', 'abc', NULL, '2022-01-29 05:09:38', NULL, NULL),
(21, 'Intravenous Fluids', '230.00', 'xyz', NULL, '2022-01-29 05:10:46', NULL, NULL),
(27, 'Catt', '100.00', ' catheterization               ', 'cb5eb1954ac50a91477933241ae9e577', '2022-01-30 08:38:50', '2022-01-30 08:39:21', 'cb5eb1954ac50a91477933241ae9e577');

-- --------------------------------------------------------

--
-- Table structure for table `timming`
--

CREATE TABLE `timming` (
  `Nid` int(10) NOT NULL,
  `Day` varchar(20) NOT NULL,
  `FreeHours` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accepted_request_form`
--
ALTER TABLE `accepted_request_form`
  ADD PRIMARY KEY (`Acc_Ser_form`),
  ADD KEY `Request_form` (`Request_id`),
  ADD KEY `SelectedNurse` (`N_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_email`);

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD KEY `Admin` (`Email`);

--
-- Indexes for table `appnurses`
--
ALTER TABLE `appnurses`
  ADD PRIMARY KEY (`Nid`),
  ADD KEY `ApprovedNurses` (`nurseMail`);

--
-- Indexes for table `approval_status`
--
ALTER TABLE `approval_status`
  ADD KEY `admin_app_mail` (`Admin_email`),
  ADD KEY `req_nurse_app` (`Email`);

--
-- Indexes for table `backup_scheduling`
--
ALTER TABLE `backup_scheduling`
  ADD KEY `Backup` (`Day`);

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`,`certificate`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`Exp_ID`),
  ADD UNIQUE KEY `Email_2` (`Email`,`hospital_name`,`designation`),
  ADD KEY `Nurse_Exp` (`Email`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`Pincode`);

--
-- Indexes for table `nurselogin`
--
ALTER TABLE `nurselogin`
  ADD KEY `Nurse` (`Email`);

--
-- Indexes for table `nurse_selected_areas`
--
ALTER TABLE `nurse_selected_areas`
  ADD KEY `NurseAreas` (`N_id`);

--
-- Indexes for table `nurse_selected_services`
--
ALTER TABLE `nurse_selected_services`
  ADD KEY `Services` (`Sid`),
  ADD KEY `NurseServices` (`Nid`);

--
-- Indexes for table `nurse_transaction`
--
ALTER TABLE `nurse_transaction`
  ADD PRIMARY KEY (`T_id`),
  ADD KEY `Nurse_Name` (`N_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `patient2`
--
ALTER TABLE `patient2`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `patientlogin`
--
ALTER TABLE `patientlogin`
  ADD KEY `Patient` (`Email`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Pay_id`),
  ADD KEY `Pay_time` (`Pay_time`),
  ADD KEY `PatientNurseCon` (`Patient_Nurse`);

--
-- Indexes for table `request_form`
--
ALTER TABLE `request_form`
  ADD PRIMARY KEY (`Request_id`),
  ADD KEY `PatientName` (`Email`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`sid`) USING BTREE,
  ADD UNIQUE KEY `Modified_time` (`sid`),
  ADD UNIQUE KEY `service_name` (`service_name`) USING BTREE,
  ADD KEY `Admin_Name` (`Added_by`);

--
-- Indexes for table `timming`
--
ALTER TABLE `timming`
  ADD PRIMARY KEY (`Day`),
  ADD KEY `Nurse_timimg` (`Nid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accepted_request_form`
--
ALTER TABLE `accepted_request_form`
  MODIFY `Acc_Ser_form` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `appnurses`
--
ALTER TABLE `appnurses`
  MODIFY `Nid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `Exp_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `nurse_transaction`
--
ALTER TABLE `nurse_transaction`
  MODIFY `T_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `Pay_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `request_form`
--
ALTER TABLE `request_form`
  MODIFY `Request_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accepted_request_form`
--
ALTER TABLE `accepted_request_form`
  ADD CONSTRAINT `Request_form` FOREIGN KEY (`Request_id`) REFERENCES `request_form` (`Request_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `SelectedNurse` FOREIGN KEY (`N_id`) REFERENCES `appnurses` (`Nid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD CONSTRAINT `Admin` FOREIGN KEY (`Email`) REFERENCES `admin` (`Admin_email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `appnurses`
--
ALTER TABLE `appnurses`
  ADD CONSTRAINT `ApprovedNurses` FOREIGN KEY (`nurseMail`) REFERENCES `requested_nurse` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `approval_status`
--
ALTER TABLE `approval_status`
  ADD CONSTRAINT `admin_app_mail` FOREIGN KEY (`Admin_email`) REFERENCES `admin` (`Admin_email`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `req_nurse_app` FOREIGN KEY (`Email`) REFERENCES `requested_nurse` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `backup_scheduling`
--
ALTER TABLE `backup_scheduling`
  ADD CONSTRAINT `Backup` FOREIGN KEY (`Day`) REFERENCES `timming` (`Day`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nurselogin`
--
ALTER TABLE `nurselogin`
  ADD CONSTRAINT `Nurse` FOREIGN KEY (`Email`) REFERENCES `appnurses` (`nurseMail`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nurse_selected_areas`
--
ALTER TABLE `nurse_selected_areas`
  ADD CONSTRAINT `NurseAreas` FOREIGN KEY (`N_id`) REFERENCES `appnurses` (`Nid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nurse_selected_services`
--
ALTER TABLE `nurse_selected_services`
  ADD CONSTRAINT `NurseServices` FOREIGN KEY (`Nid`) REFERENCES `appnurses` (`Nid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Services` FOREIGN KEY (`Sid`) REFERENCES `services` (`sid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nurse_transaction`
--
ALTER TABLE `nurse_transaction`
  ADD CONSTRAINT `Nurse_Name` FOREIGN KEY (`N_id`) REFERENCES `appnurses` (`Nid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patientlogin`
--
ALTER TABLE `patientlogin`
  ADD CONSTRAINT `Patient` FOREIGN KEY (`Email`) REFERENCES `patient` (`Email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `PatientNurseCon` FOREIGN KEY (`Patient_Nurse`) REFERENCES `accepted_request_form` (`Acc_Ser_form`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `request_form`
--
ALTER TABLE `request_form`
  ADD CONSTRAINT `PatientName` FOREIGN KEY (`Email`) REFERENCES `patient` (`Email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `Admin_Name` FOREIGN KEY (`Added_by`) REFERENCES `admin` (`Admin_email`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `timming`
--
ALTER TABLE `timming`
  ADD CONSTRAINT `Nurse_timimg` FOREIGN KEY (`Nid`) REFERENCES `appnurses` (`Nid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
