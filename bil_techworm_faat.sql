-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2019 at 10:57 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bil_techworm_faat`
--

-- --------------------------------------------------------

--
-- Table structure for table `bil_client_mw_generate_qrcode`
--

CREATE TABLE `bil_client_mw_generate_qrcode` (
  `id` int(15) NOT NULL,
  `username_bil` varchar(50) NOT NULL,
  `username_pcb` varchar(255) DEFAULT NULL,
  `qr_color` varchar(50) DEFAULT NULL,
  `color_qr_count` varchar(50) DEFAULT NULL,
  `generate_date` varchar(50) DEFAULT NULL,
  `generate_time` varchar(50) DEFAULT NULL,
  `sequence_no` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bil_client_mw_generate_qrcode`
--

INSERT INTO `bil_client_mw_generate_qrcode` (`id`, `username_bil`, `username_pcb`, `qr_color`, `color_qr_count`, `generate_date`, `generate_time`, `sequence_no`, `created_at`, `update_at`) VALUES
(1, '12345', NULL, 'YELLOW', 'null', '18/01/2019', '02:01:09 AM', 'BIL0000001', '2019-01-17 21:17:09', '0000-00-00 00:00:00'),
(2, '12345', '', 'YELLOW', 'null', '18/01/2019', '02:01:19 AM', 'BIL0000002', '2019-01-17 21:29:19', '0000-00-00 00:00:00'),
(3, '12345', '', 'YELLOW', 'null', '18/01/2019', '02:01:19 AM', 'BIL0000003', '2019-01-17 21:29:19', '0000-00-00 00:00:00'),
(4, '12345', '', 'RED', 'null', '18/01/2019', '02:01:19 AM', 'BIL0000004', '2019-01-17 21:29:19', '0000-00-00 00:00:00'),
(5, '12345', '', 'RED', 'null', '18/01/2019', '02:01:19 AM', 'BIL0000005', '2019-01-17 21:29:19', '0000-00-00 00:00:00'),
(6, '12345', '', 'YELLOW', 'null', '18/01/2019', '02:01:47 AM', 'BIL0000006', '2019-01-17 21:29:47', '0000-00-00 00:00:00'),
(7, '12345', '', 'YELLOW', 'null', '18/01/2019', '02:01:47 AM', 'BIL0000007', '2019-01-17 21:29:47', '0000-00-00 00:00:00'),
(8, '12345', '', 'RED', 'null', '18/01/2019', '02:01:47 AM', 'BIL0000008', '2019-01-17 21:29:47', '0000-00-00 00:00:00'),
(9, '12345', '', 'RED', 'null', '18/01/2019', '02:01:47 AM', 'BIL0000009', '2019-01-17 21:29:47', '0000-00-00 00:00:00'),
(10, '12345', '', 'YELLOW', 'null', '18/01/2019', '03:01:39 AM', 'BIL0000010', '2019-01-17 21:30:39', '0000-00-00 00:00:00'),
(11, '12345', '', 'BLUE', 'null', '18/01/2019', '03:01:39 AM', 'BIL0000011', '2019-01-17 21:30:39', '0000-00-00 00:00:00'),
(12, '12345', '', 'RED', 'null', '18/01/2019', '03:01:39 AM', 'BIL0000012', '2019-01-17 21:30:39', '0000-00-00 00:00:00'),
(13, '12345', '', 'WHITE', 'null', '18/01/2019', '03:01:39 AM', 'BIL0000013', '2019-01-17 21:30:39', '0000-00-00 00:00:00'),
(14, '12345', '', 'WHITE', 'null', '18/01/2019', '03:01:39 AM', 'BIL0000014', '2019-01-17 21:30:39', '0000-00-00 00:00:00'),
(15, '12345', '', 'WHITE', 'null', '18/01/2019', '03:01:39 AM', 'BIL0000015', '2019-01-17 21:30:39', '0000-00-00 00:00:00'),
(16, '12345', '', 'YELLOW', 'null', '18/01/2019', '03:01:22 AM', 'BIL0000016', '2019-01-17 21:32:22', '0000-00-00 00:00:00'),
(17, '12345', '', 'YELLOW', 'null', '18/01/2019', '03:01:02 AM', 'BIL0000017', '2019-01-17 21:33:02', '0000-00-00 00:00:00'),
(18, '12345', '', 'RED', 'null', '18/01/2019', '03:01:02 AM', 'BIL0000018', '2019-01-17 21:33:02', '0000-00-00 00:00:00'),
(19, '12345', '', 'RED', 'null', '18/01/2019', '03:01:02 AM', 'BIL0000019', '2019-01-17 21:33:02', '0000-00-00 00:00:00'),
(20, '12345', '', 'YELLOW', 'null', '18/01/2019', '03:01:16 AM', 'BIL0000020', '2019-01-17 21:33:16', '0000-00-00 00:00:00'),
(21, '12345', '', 'BLUE', 'null', '18/01/2019', '03:01:16 AM', 'BIL0000021', '2019-01-17 21:33:16', '0000-00-00 00:00:00'),
(22, '12345', '', 'BLUE', 'null', '18/01/2019', '03:01:16 AM', 'BIL0000022', '2019-01-17 21:33:16', '0000-00-00 00:00:00'),
(23, '12345', '', 'RED', 'null', '18/01/2019', '03:01:16 AM', 'BIL0000023', '2019-01-17 21:33:16', '0000-00-00 00:00:00'),
(24, '12345', '', 'RED', 'null', '18/01/2019', '03:01:16 AM', 'BIL0000024', '2019-01-17 21:33:16', '0000-00-00 00:00:00'),
(25, '12345', '', 'YELLOW', 'null', '18/01/2019', '03:01:37 AM', 'BIL0000025', '2019-01-17 21:33:37', '0000-00-00 00:00:00'),
(26, '12345', '', 'BLUE', 'null', '18/01/2019', '03:01:37 AM', 'BIL0000026', '2019-01-17 21:33:37', '0000-00-00 00:00:00'),
(27, '12345', '', 'BLUE', 'null', '18/01/2019', '03:01:37 AM', 'BIL0000027', '2019-01-17 21:33:37', '0000-00-00 00:00:00'),
(28, '12345', '', 'RED', 'null', '18/01/2019', '03:01:37 AM', 'BIL0000028', '2019-01-17 21:33:37', '0000-00-00 00:00:00'),
(29, '12345', '', 'RED', 'null', '18/01/2019', '03:01:37 AM', 'BIL0000029', '2019-01-17 21:33:37', '0000-00-00 00:00:00'),
(30, '12345', '', 'WHITE', 'null', '18/01/2019', '03:01:37 AM', 'BIL0000030', '2019-01-17 21:33:37', '0000-00-00 00:00:00'),
(31, '12345', '', 'WHITE', 'null', '18/01/2019', '03:01:37 AM', 'BIL0000031', '2019-01-17 21:33:37', '0000-00-00 00:00:00'),
(32, '12345', '', 'YELLOW', 'null', '18/01/2019', '03:01:33 AM', 'BIL0000032', '2019-01-17 21:34:33', '0000-00-00 00:00:00'),
(33, '12345', '', 'YELLOW', 'null', '18/01/2019', '03:01:33 AM', 'BIL0000033', '2019-01-17 21:34:33', '0000-00-00 00:00:00'),
(34, '12345', '', 'YELLOW', 'null', '18/01/2019', '03:01:33 AM', 'BIL0000034', '2019-01-17 21:34:33', '0000-00-00 00:00:00'),
(35, '12345', '', 'BLUE', 'null', '18/01/2019', '03:01:33 AM', 'BIL0000035', '2019-01-17 21:34:33', '0000-00-00 00:00:00'),
(36, '12345', '', 'RED', 'null', '18/01/2019', '03:01:33 AM', 'BIL0000036', '2019-01-17 21:34:33', '0000-00-00 00:00:00'),
(37, '12345', '', 'WHITE', 'null', '18/01/2019', '03:01:33 AM', 'BIL0000037', '2019-01-17 21:34:33', '0000-00-00 00:00:00'),
(38, '12345', '', 'WHITE', 'null', '18/01/2019', '03:01:33 AM', 'BIL0000038', '2019-01-17 21:34:33', '0000-00-00 00:00:00'),
(39, '12345', '', 'WHITE', 'null', '18/01/2019', '03:01:33 AM', 'BIL0000039', '2019-01-17 21:34:33', '0000-00-00 00:00:00'),
(40, '12345', '', 'YELLOW', 'null', '18/01/2019', '03:01:52 AM', 'BIL0000040', '2019-01-17 21:35:52', '0000-00-00 00:00:00'),
(41, '12345', '', 'YELLOW', 'null', '18/01/2019', '03:01:52 AM', 'BIL0000041', '2019-01-17 21:35:52', '0000-00-00 00:00:00'),
(42, '12345', '', 'YELLOW', 'null', '18/01/2019', '03:01:52 AM', 'BIL0000042', '2019-01-17 21:35:52', '0000-00-00 00:00:00'),
(43, '12345', '', 'BLUE', 'null', '18/01/2019', '03:01:53 AM', 'BIL0000043', '2019-01-17 21:35:53', '0000-00-00 00:00:00'),
(44, '12345', '', 'RED', 'null', '18/01/2019', '03:01:53 AM', 'BIL0000044', '2019-01-17 21:35:53', '0000-00-00 00:00:00'),
(45, '12345', '', 'WHITE', 'null', '18/01/2019', '03:01:53 AM', 'BIL0000045', '2019-01-17 21:35:53', '0000-00-00 00:00:00'),
(46, '12345', '', 'WHITE', 'null', '18/01/2019', '03:01:53 AM', 'BIL0000046', '2019-01-17 21:35:53', '0000-00-00 00:00:00'),
(47, '12345', '', 'WHITE', 'null', '18/01/2019', '03:01:53 AM', 'BIL0000047', '2019-01-17 21:35:53', '0000-00-00 00:00:00'),
(48, '12345', '', 'YELLOW', 'null', '18/01/2019', '03:01:55 AM', 'BIL0000048', '2019-01-17 21:46:55', '0000-00-00 00:00:00'),
(49, '12345', '', 'YELLOW', 'null', '18/01/2019', '03:01:51 AM', 'BIL0000049', '2019-01-17 21:48:51', '0000-00-00 00:00:00'),
(50, '12345', '', 'YELLOW', 'null', '18/01/2019', '03:01:03 AM', 'BIL0000050', '2019-01-17 21:51:03', '0000-00-00 00:00:00'),
(51, '12345', '', 'BLUE', 'null', '18/01/2019', '03:01:37 AM', 'BIL0000051', '2019-01-17 21:51:37', '0000-00-00 00:00:00'),
(52, '12345', '', 'YELLOW', 'null', '18/01/2019', '03:01:02 AM', 'BIL0000052', '2019-01-17 21:52:02', '0000-00-00 00:00:00'),
(53, '12345', '', 'YELLOW', 'null', '18/01/2019', '03:01:27 AM', 'BIL0000053', '2019-01-17 21:52:27', '0000-00-00 00:00:00'),
(54, '12345', '', 'YELLOW', 'null', '18/01/2019', '03:01:23 AM', 'BIL0000054', '2019-01-17 21:53:23', '0000-00-00 00:00:00'),
(55, '12345', '', 'YELLOW', 'null', '18/01/2019', '03:01:39 AM', 'BIL0000055', '2019-01-17 21:53:39', '0000-00-00 00:00:00'),
(56, '12345', '', 'RED', 'null', '18/01/2019', '03:01:39 AM', 'BIL0000056', '2019-01-17 21:53:39', '0000-00-00 00:00:00'),
(57, '12345', '', 'RED', 'null', '18/01/2019', '03:01:39 AM', 'BIL0000057', '2019-01-17 21:53:39', '0000-00-00 00:00:00'),
(58, '12345', '', 'YELLOW', 'null', '18/01/2019', '03:01:27 AM', 'BIL0000058', '2019-01-17 21:54:27', '0000-00-00 00:00:00'),
(59, '12345', '', 'RED', 'null', '18/01/2019', '03:01:27 AM', 'BIL0000059', '2019-01-17 21:54:27', '0000-00-00 00:00:00'),
(60, '12345', '', 'RED', 'null', '18/01/2019', '03:01:27 AM', 'BIL0000060', '2019-01-17 21:54:27', '0000-00-00 00:00:00'),
(61, '12345', '', 'YELLOW', 'null', '18/01/2019', '03:01:46 AM', 'BIL0000061', '2019-01-17 21:54:46', '0000-00-00 00:00:00'),
(62, '12345', '', 'RED', 'null', '18/01/2019', '03:01:46 AM', 'BIL0000062', '2019-01-17 21:54:46', '0000-00-00 00:00:00'),
(63, '12345', '', 'RED', 'null', '18/01/2019', '03:01:46 AM', 'BIL0000063', '2019-01-17 21:54:46', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `bil_client_mw_info`
--

CREATE TABLE `bil_client_mw_info` (
  `sno` int(11) DEFAULT NULL,
  `organization_name` varchar(150) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `ownership` varchar(50) DEFAULT NULL,
  `ownership_other` varchar(50) DEFAULT NULL,
  `dse` varchar(50) DEFAULT NULL,
  `dse_date` varchar(10) DEFAULT NULL,
  `authorized_person` varchar(50) DEFAULT NULL,
  `ap_designation` varchar(50) DEFAULT NULL,
  `ap_contact` varchar(15) DEFAULT NULL,
  `beds_icp` int(15) DEFAULT NULL,
  `beds_ot` int(15) DEFAULT NULL,
  `beds_other` int(15) DEFAULT NULL,
  `total_beds` int(15) DEFAULT NULL,
  `flat_no` varchar(10) DEFAULT NULL,
  `street` varchar(50) DEFAULT NULL,
  `area` varchar(50) DEFAULT NULL,
  `pincode` int(10) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `collection_supervisor_a` varchar(50) DEFAULT NULL,
  `collection_supervisor_b` varchar(50) DEFAULT NULL,
  `cs_a_contact` varchar(15) DEFAULT NULL,
  `cs_b_contact` varchar(15) DEFAULT NULL,
  `collection_incharge_a` varchar(50) DEFAULT NULL,
  `ci_a_designation` varchar(50) DEFAULT NULL,
  `ci_a_contact` varchar(15) DEFAULT NULL,
  `collection_incharge_b` varchar(50) DEFAULT NULL,
  `ci_b_designation` varchar(50) DEFAULT NULL,
  `ci_b_contact` varchar(15) DEFAULT NULL,
  `declartion_status` varchar(15) DEFAULT NULL,
  `username_bil` varchar(50) NOT NULL,
  `email_id` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `registration_date` varchar(30) DEFAULT NULL,
  `profile_update_date` varchar(50) DEFAULT NULL,
  `username_pcb` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bil_client_mw_info`
--

INSERT INTO `bil_client_mw_info` (`sno`, `organization_name`, `category`, `ownership`, `ownership_other`, `dse`, `dse_date`, `authorized_person`, `ap_designation`, `ap_contact`, `beds_icp`, `beds_ot`, `beds_other`, `total_beds`, `flat_no`, `street`, `area`, `pincode`, `city`, `district`, `state`, `country`, `collection_supervisor_a`, `collection_supervisor_b`, `cs_a_contact`, `cs_b_contact`, `collection_incharge_a`, `ci_a_designation`, `ci_a_contact`, `collection_incharge_b`, `ci_b_designation`, `ci_b_contact`, `declartion_status`, `username_bil`, `email_id`, `password`, `registration_date`, `profile_update_date`, `username_pcb`) VALUES
(1, 'new ABX', 'Veterinary Hospital', 'Private Company', '', 'To be started on', '15/01/2019', 'Ashutosh Dubey Ji', 'main head', '9999888877', 5, 10, 2, 20, '25', '80 feet rood, ', 'Ashoka ', 462001, 'Bhopal', 'Bhopal', 'Madhya Pradesh', 'India', 'collector 1', 'collector two', '1111122222', '2222211111', 'Incharger a', 'desiganation A', '3332225555', '3332225555', 'desiganation B', '6655221133', '1', '12345', 'abc@info.com', '12345', '', '15, 1, 2019', '123');

-- --------------------------------------------------------

--
-- Table structure for table `bil_client_mw_notify`
--

CREATE TABLE `bil_client_mw_notify` (
  `s.no` int(15) NOT NULL,
  `username_bil` varchar(50) NOT NULL,
  `username_pcb` varchar(50) NOT NULL,
  `notification_date` varchar(30) DEFAULT NULL,
  `issued_by` varchar(50) DEFAULT NULL,
  `display_on` varchar(50) DEFAULT NULL,
  `notification_category` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bil_client_mw_payment`
--

CREATE TABLE `bil_client_mw_payment` (
  `s.no` int(15) NOT NULL,
  `username_bil` varchar(50) NOT NULL,
  `username_pcb` varchar(50) NOT NULL,
  `record_up_date` varchar(30) DEFAULT NULL,
  `starting_date` varchar(30) DEFAULT NULL,
  `ending_date` varchar(30) DEFAULT NULL,
  `vehicle_status` varchar(30) DEFAULT NULL,
  `payment_status` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bil_client_mw_payment`
--

INSERT INTO `bil_client_mw_payment` (`s.no`, `username_bil`, `username_pcb`, `record_up_date`, `starting_date`, `ending_date`, `vehicle_status`, `payment_status`) VALUES
(1, '12345', '12345', '10/08/2019', '10/08/2019', '15/08/2019', 'Running', 'Completed'),
(2, '12346', '12346', '10/08/2019', '11/08/2019', '15/08/2019', 'Running', 'Completed'),
(3, '12347', '12347', '15/08/2019', '15/08/2019', '15/08/2019', 'Running', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `bil_client_mw_report_bil`
--

CREATE TABLE `bil_client_mw_report_bil` (
  `s.no` int(15) NOT NULL,
  `username_bil` varchar(50) NOT NULL,
  `username_pcb` varchar(50) NOT NULL,
  `hcf_name` varchar(50) NOT NULL,
  `hcf_number` varchar(50) NOT NULL,
  `hcf_number_number` varchar(50) NOT NULL,
  `hcf_type` varchar(50) NOT NULL,
  `hcf_address` varchar(100) NOT NULL,
  `qr_generate_date` varchar(30) NOT NULL,
  `qr_sequence_number` varchar(100) NOT NULL,
  `entry_date` varchar(30) NOT NULL,
  `entry_time` varchar(30) NOT NULL,
  `bag_weight` varchar(50) NOT NULL,
  `gps_coordinate` varchar(50) NOT NULL,
  `pickup_fleet_id` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bil_client_mw_report_fleet`
--

CREATE TABLE `bil_client_mw_report_fleet` (
  `s.no` int(15) NOT NULL,
  `username_bil` varchar(50) NOT NULL,
  `username_pcb` varchar(50) NOT NULL,
  `hcf_name` varchar(50) NOT NULL,
  `hcf_number` varchar(50) NOT NULL,
  `hcf_number_number` varchar(50) NOT NULL,
  `hcf_type` varchar(50) NOT NULL,
  `hcf_address` varchar(100) NOT NULL,
  `qr_generate_date` varchar(30) NOT NULL,
  `qr_sequence_number` varchar(100) NOT NULL,
  `entry_date` varchar(30) NOT NULL,
  `entry_time` varchar(30) NOT NULL,
  `bag_weight` varchar(50) NOT NULL,
  `gps_coordinate` varchar(50) NOT NULL,
  `pickup_fleet_id` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bil_client_mw_report_hcf`
--

CREATE TABLE `bil_client_mw_report_hcf` (
  `s.no` int(15) NOT NULL,
  `username_bil` varchar(50) NOT NULL,
  `username_pcb` varchar(50) NOT NULL,
  `hcf_name` varchar(50) NOT NULL,
  `hcf_number` varchar(50) NOT NULL,
  `hcf_number_number` varchar(50) NOT NULL,
  `hcf_type` varchar(50) NOT NULL,
  `hcf_address` varchar(100) NOT NULL,
  `qr_generate_date` varchar(30) NOT NULL,
  `qr_sequence_number` varchar(100) NOT NULL,
  `entry_date` varchar(30) NOT NULL,
  `entry_time` varchar(30) NOT NULL,
  `bag_weight` varchar(50) NOT NULL,
  `bag_color` varchar(255) NOT NULL,
  `gps_coordinate` varchar(50) NOT NULL,
  `pickup_fleet_id` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bil_details`
--

CREATE TABLE `bil_details` (
  `s.no` int(15) NOT NULL,
  `id` varchar(50) NOT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `authorized_person` varchar(50) DEFAULT NULL,
  `registered_date` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bil_details`
--

INSERT INTO `bil_details` (`s.no`, `id`, `user_name`, `password`, `authorized_person`, `registered_date`) VALUES
(1, '1', '12345', '12345', 'abc', '01/02/2019');

-- --------------------------------------------------------

--
-- Table structure for table `pcb_details`
--

CREATE TABLE `pcb_details` (
  `s.no` int(15) NOT NULL,
  `id` varchar(50) NOT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `authorized_person` varchar(50) DEFAULT NULL,
  `registered_date` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pcb_details`
--

INSERT INTO `pcb_details` (`s.no`, `id`, `user_name`, `password`, `authorized_person`, `registered_date`) VALUES
(1, '1', '12345', '12345', 'abc', '01/02/2019');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bil_client_mw_generate_qrcode`
--
ALTER TABLE `bil_client_mw_generate_qrcode`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `s.no` (`id`);

--
-- Indexes for table `bil_client_mw_info`
--
ALTER TABLE `bil_client_mw_info`
  ADD PRIMARY KEY (`username_bil`),
  ADD UNIQUE KEY `username_pcb` (`username_pcb`),
  ADD UNIQUE KEY `email_id` (`email_id`);

--
-- Indexes for table `bil_client_mw_notify`
--
ALTER TABLE `bil_client_mw_notify`
  ADD PRIMARY KEY (`username_bil`),
  ADD UNIQUE KEY `s.no` (`s.no`),
  ADD UNIQUE KEY `username_pcb` (`username_pcb`);

--
-- Indexes for table `bil_client_mw_payment`
--
ALTER TABLE `bil_client_mw_payment`
  ADD PRIMARY KEY (`username_bil`),
  ADD UNIQUE KEY `s.no` (`s.no`),
  ADD UNIQUE KEY `username_pcb` (`username_pcb`);

--
-- Indexes for table `bil_client_mw_report_bil`
--
ALTER TABLE `bil_client_mw_report_bil`
  ADD PRIMARY KEY (`username_bil`),
  ADD UNIQUE KEY `s.no` (`s.no`),
  ADD UNIQUE KEY `username_pcb` (`username_pcb`);

--
-- Indexes for table `bil_client_mw_report_fleet`
--
ALTER TABLE `bil_client_mw_report_fleet`
  ADD PRIMARY KEY (`username_bil`),
  ADD UNIQUE KEY `s.no` (`s.no`),
  ADD UNIQUE KEY `username_pcb` (`username_pcb`);

--
-- Indexes for table `bil_client_mw_report_hcf`
--
ALTER TABLE `bil_client_mw_report_hcf`
  ADD PRIMARY KEY (`username_bil`),
  ADD UNIQUE KEY `s.no` (`s.no`),
  ADD UNIQUE KEY `username_pcb` (`username_pcb`);

--
-- Indexes for table `bil_details`
--
ALTER TABLE `bil_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `s.no` (`s.no`);

--
-- Indexes for table `pcb_details`
--
ALTER TABLE `pcb_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `s.no` (`s.no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bil_client_mw_generate_qrcode`
--
ALTER TABLE `bil_client_mw_generate_qrcode`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
