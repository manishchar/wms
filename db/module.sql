-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2019 at 01:52 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `module`
--

-- --------------------------------------------------------

--
-- Table structure for table `bil`
--

CREATE TABLE `bil` (
  `s_no` int(11) NOT NULL,
  `user_id` varchar(200) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `authorized_person` varchar(255) NOT NULL,
  `register_date` varchar(255) NOT NULL,
  `modified_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bil`
--

INSERT INTO `bil` (`s_no`, `user_id`, `user_name`, `password`, `authorized_person`, `register_date`, `modified_date`) VALUES
(1, '1111', 'test', '1234', 'ttt', '28-06-2019', '28-06-2019'),
(2, '1112', 'test1', '1234', 'tt', '28-06-2019', '28-06-2019');

-- --------------------------------------------------------

--
-- Table structure for table `bpl_hamidia_info`
--

CREATE TABLE `bpl_hamidia_info` (
  `id` int(11) NOT NULL,
  `userid` varchar(200) DEFAULT NULL,
  `userPassword` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bpl_hamidia_info`
--

INSERT INTO `bpl_hamidia_info` (`id`, `userid`, `userPassword`, `type`) VALUES
(1, 'admin@gmail.com', '12345', 'HCF'),
(2, 'user@gmail.com', '12345', 'PCB'),
(3, 'bil@gmail.com', '12345', 'BIL');

-- --------------------------------------------------------

--
-- Table structure for table `hcf_mw_client`
--

CREATE TABLE `hcf_mw_client` (
  `id` int(11) NOT NULL,
  `user_id` varchar(200) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `account_type` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `PCB_ID` varchar(255) NOT NULL,
  `HCF_NAME` varchar(255) NOT NULL,
  `authorized_person` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `register_date` varchar(255) NOT NULL,
  `modified_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hcf_mw_client`
--

INSERT INTO `hcf_mw_client` (`id`, `user_id`, `user_name`, `password`, `account_type`, `status`, `PCB_ID`, `HCF_NAME`, `authorized_person`, `payment_status`, `register_date`, `modified_date`) VALUES
(1, '123', 'abc', '123', '', 'active', '12345', 'abc', 'abc', 'payment due', '28-06-2019', '28-06-2019');

-- --------------------------------------------------------

--
-- Table structure for table `pcb`
--

CREATE TABLE `pcb` (
  `s_no` int(11) NOT NULL,
  `user_id` varchar(200) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `authorized_person` varchar(255) NOT NULL,
  `register_date` varchar(255) NOT NULL,
  `modified_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pcb`
--

INSERT INTO `pcb` (`s_no`, `user_id`, `user_name`, `password`, `authorized_person`, `register_date`, `modified_date`) VALUES
(1, '123', 'test', '123', 'ttt', '28-06-2019', '28-06-2019'),
(2, '1112', 'test1', '1234', 'tt', '28-06-2019', '28-06-2019');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bil`
--
ALTER TABLE `bil`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `bpl_hamidia_info`
--
ALTER TABLE `bpl_hamidia_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hcf_mw_client`
--
ALTER TABLE `hcf_mw_client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pcb`
--
ALTER TABLE `pcb`
  ADD PRIMARY KEY (`s_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bil`
--
ALTER TABLE `bil`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bpl_hamidia_info`
--
ALTER TABLE `bpl_hamidia_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hcf_mw_client`
--
ALTER TABLE `hcf_mw_client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pcb`
--
ALTER TABLE `pcb`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
