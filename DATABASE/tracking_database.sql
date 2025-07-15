-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2025 at 11:34 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tracking_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `distribution_table`
--

CREATE TABLE `distribution_table` (
  `tool_ID` int(55) DEFAULT NULL,
  `State` varchar(255) DEFAULT NULL,
  `Facility` varchar(255) DEFAULT NULL,
  `amount` int(55) DEFAULT NULL,
  `requested_date` date DEFAULT NULL,
  `received_date` date DEFAULT NULL,
  `Distributor` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `distribution_table`
--

INSERT INTO `distribution_table` (`tool_ID`, `State`, `Facility`, `amount`, `requested_date`, `received_date`, `Distributor`) VALUES
(3, 'Kano', 'Doguwa General Hospital', 350, '2024-04-23', '2024-06-06', 'Isa Ibrahim'),
(3, 'Bauchi', 'Bayara Infectious Diseases Hospital', 700, '2024-05-19', '2024-06-13', 'Abubakar Abubakar'),
(3, 'Jigawa', 'Birnin Kudu General Hospital', 330, '2024-02-29', '2024-05-28', 'Aisha Alhassan'),
(1, 'Kano', 'Al Noury Specialist Hospital', 600, '2024-04-25', '2024-05-30', 'Jamiu Zubayr'),
(1, 'Kano', 'Dala Maternal and Child Health Clinic', 500, '2024-05-16', '2024-07-03', 'Aliyu Gawrzo'),
(1, 'Jigawa', 'Babura General Hospital', 200, '2024-04-03', '2024-05-22', 'Naeem Bashir');

-- --------------------------------------------------------

--
-- Table structure for table `issueoption`
--

CREATE TABLE `issueoption` (
  `issue_id` int(55) NOT NULL,
  `issue_topic` varchar(256) DEFAULT NULL,
  `dept_cat` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `issueoption`
--

INSERT INTO `issueoption` (`issue_id`, `issue_topic`, `dept_cat`) VALUES
(1, 'Software Complication', 'IT'),
(2, 'Broken Office Chair', 'Procurement'),
(3, 'Company Bus Breakdown', 'Logistics'),
(4, 'Salary Not Credited', 'Accounting'),
(5, 'Out of Stationery', 'Procurement'),
(7, 'Delay in Goods Delivery', 'Logistics'),
(8, 'Incorrect vender payment', 'Accounting'),
(9, 'Fuel Request For Company Vehicle', 'Logistics'),
(10, 'Unreconciled Budget', 'Accounting');

-- --------------------------------------------------------

--
-- Table structure for table `issue_tracking`
--

CREATE TABLE `issue_tracking` (
  `Issue_No` int(255) NOT NULL,
  `Issue` varchar(255) DEFAULT NULL,
  `Department` varchar(256) DEFAULT NULL,
  `Description` varchar(1000) DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL,
  `second_stats` varchar(256) DEFAULT NULL,
  `Assigned_Staff` varchar(256) DEFAULT NULL,
  `Assigned_staff_uname` varchar(255) DEFAULT NULL,
  `reporter` varchar(255) DEFAULT NULL,
  `contact_Info` varchar(255) DEFAULT NULL,
  `reporter_state` varchar(255) DEFAULT NULL,
  `date_val` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `issue_tracking`
--

INSERT INTO `issue_tracking` (`Issue_No`, `Issue`, `Department`, `Description`, `Status`, `second_stats`, `Assigned_Staff`, `Assigned_staff_uname`, `reporter`, `contact_Info`, `reporter_state`, `date_val`) VALUES
(5, 'Lost PMTCT', '11', 'Help', 'processing', 'Open', 'jamiu zubayr', NULL, 'isa muhammad', 'isa@gmail.com', NULL, '2024-04-28'),
(6, 'Computer request', '11', 'Please', 'resolved', 'Close', 'jamiu zubayr', NULL, 'isa muhammad', 'isa@gmail.com', NULL, '2024-05-04'),
(7, 'Lost PMTCT', 'Logistics', 'I need help', 'processing', 'Open', 'isa@gmail.com', NULL, 'isa muhammad', 'isa@gmail.com', NULL, '2024-06-21'),
(9, 'new laptop request', 'IT', 'Help', 'processing', 'Open', 'isa@gmail.com', NULL, 'User User1', 'bashiramir476@gmail.com', NULL, '2025-02-09'),
(10, 'Software Complication', 'IT', 'I cannot enter the new import products in the table', 'unsolved', 'Open', 'not assigned', NULL, 'isa muhammad', 'isa@gmail.com', NULL, '2025-06-27'),
(11, 'Broken Office Chair', 'Procurement', 'My chair broke last week, please need a new one', 'unsolved', 'Open', 'not assigned', NULL, 'isa muhammad', 'isa@gmail.com', NULL, '2025-06-27'),
(12, 'Salary Not Credited', 'Accounting', 'I have not received my salary for the month of June', 'processing', 'Open', 'Amina Musa', 'amina@gmail.com', 'isa muhammad', 'isa@gmail.com', 'Jigawa', '2025-06-27'),
(13, 'Delay in Goods Delivery', 'Logistics', 'We have been waiting for a new batch of record books from the HQ and is yet to received. Need an update on that please', 'unsolved', 'Open', 'not assigned', NULL, 'isa muhammad', 'isa@gmail.com', 'Jigawa', '2025-06-27'),
(14, 'Delay in Goods Delivery', 'Logistics', 'Still waiting for the new testing tools requested from the HQ last month, we need it urgent please', 'processing', 'Open', 'Musa Ibrahim', NULL, 'Tobi Surname', 'bashiramir476@gmail.com', 'Kano', '2025-06-29'),
(15, 'Software Complication', 'IT', 'Please help me', 'unsolved', 'Open', 'not assigned', NULL, 'isa muhammad', 'isa@gmail.com', 'Jigawa', '2025-07-04'),
(17, 'Broken Office Chair', 'Procurement', 'I need a  new chair', 'processing', 'Open', 'Musa Ismail', 'musa@gmail.com', 'isa muhammad', 'isa@gmail.com', 'Jigawa', '2025-07-13');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(50) NOT NULL,
  `msg_key` varchar(500) DEFAULT NULL,
  `message` varchar(5000) DEFAULT NULL,
  `issue_reporter` varchar(256) DEFAULT NULL,
  `troubleshooter` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `msg_key`, `message`, `issue_reporter`, `troubleshooter`) VALUES
(1, '0vyprg-udqcfl', '{\n	\"ts1\" : \"Hello Isa\"\n	,\"ts2\" : \"What is the problem\",\n	\"rp3\" : \"Hi Amina\",\n	\"rp4\" : \"Ma i did not get my salary for last month\",\n	\"rp5\" : \"The month of June\",\"rp6\" : \"Thank u\",\"ts7\" : \"Okay let me check my system\",\"ts8\" : \"department?\",\"rp9\" : \"Logistic Department ma\",\"ts10\" : \"what bank please\",\"rp11\" : \"Access Bank Ma\"', 'isa', 'musa'),
(3, '0vyprg-g2hbwz', '{\"ts1\" : \"Hello\",\"rp2\" : \"Hello Sir\"', 'isa muhammad', 'Musa Ismail');

-- --------------------------------------------------------

--
-- Table structure for table `tool_list`
--

CREATE TABLE `tool_list` (
  `Tool_ID` int(255) NOT NULL,
  `Tool_Name` varchar(255) DEFAULT NULL,
  `Original_Amount` int(255) DEFAULT NULL,
  `Amount_Distributed` int(255) DEFAULT NULL,
  `entry_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tool_list`
--

INSERT INTO `tool_list` (`Tool_ID`, `Tool_Name`, `Original_Amount`, `Amount_Distributed`, `entry_date`) VALUES
(1, 'Client intake form', 3000, 1300, '2024-01-03'),
(2, 'HTS register ', 5000, 3100, '2024-01-03'),
(3, 'Pharmacy Order Sheet', 2500, 1350, '2024-01-03'),
(4, 'Record booklet', 2200, 900, '2024-03-08'),
(5, 'PMTCT Record Form', 4300, 1800, '2024-04-03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(55) NOT NULL,
  `Fullname` varchar(256) DEFAULT NULL,
  `User_Name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `Department` varchar(255) DEFAULT NULL,
  `state` varchar(256) DEFAULT NULL,
  `Position` varchar(256) DEFAULT NULL,
  `contact_info` varchar(255) DEFAULT NULL,
  `chat_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Fullname`, `User_Name`, `password`, `Department`, `state`, `Position`, `contact_info`, `chat_id`) VALUES
(1, 'Naeem Zubayr', 'zubayrnaeem6@gmail.com', 'naeem1234', 'Project Lead', 'Jigawa', 'Overhead Admin', 'bashiramir476@gmail.com', 'pz8kpo'),
(2, 'Adebola Akinjeji ', 'aakinjeji@gghnigeria.org', 'debo1234', 'Project Lead', 'Bauchi', 'Overhead Admin', 'aakinjeji@gghnigeria.org', 'i852gi'),
(3, 'Emeka Christian', 'em1425@georgetown.edu', 'emeka1234', 'Project Lead', 'Kano', 'Overhead Admin', 'em1425@georgetown.edu', 'cbsrzh'),
(4, 'Joy Shallangwa', 'jms748@ggh.georgetown.edu', 'joy1234', 'Project Lead', 'Jigawa', 'Overhead Admin', 'jms748@ggh.georgetown.edu', 'tew8v0'),
(5, 'isa muhammad', 'isa@gmail.com', 'isa1234', 'Logistic', 'Jigawa', 'Logistic Staff', 'isa@gmail.com', '0vyprg'),
(6, 'Zubayr Naeem', 'bashiramir476@gmail.com', 'zubayr1234', 'HR', 'Kano', 'State Admin', 'bashiramir476@gmail.com', '6yk256'),
(7, 'User User3', 'User3', '1234', 'IT', 'Kano', 'IT Staff', 'zubayrnaeem6@gmail.com', 'yt3a2p'),
(8, 'Muhammad Zubayr', 'mohd@gmail.com', 'mohd1234', 'HR', 'Jigawa', 'State Admin', 'zubayrnaeem6@gmail.com', 'qlv1g4'),
(40, 'Tobi Surname', 'tobi@gmail.com', 'tobi1234', 'Accounting', 'Kano', 'Accounting Clerk', 'bashiramir476@gmail.com', 'uo8w58'),
(41, 'Musa Ismail', 'musa@gmail.com', 'musa1234', 'Procurement', 'Jigawa', 'Procurement Staff', 'zubayrnaeem6@gmail.com', 'g2hbwz'),
(43, 'User User1', 'User1', '1234', 'Customer Service', 'Kano', 'Customer Support Officer', 'bashiramir476@gmail.com', '0hru62'),
(45, 'Musa Ibrahim', 'musa_ibro@gmail.com', 'musa1234', 'Logistics', 'Kano', 'Logistic Staff', 'zubayrnaeem6@gmail.com', 'wu6p6t'),
(46, 'Amina Musa', 'amina@gmail.com', 'amina1234', 'Accounting', 'Jigawa', 'Accounting Staff', 'amina@gmail.com', 'udqcfl');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `issueoption`
--
ALTER TABLE `issueoption`
  ADD PRIMARY KEY (`issue_id`);

--
-- Indexes for table `issue_tracking`
--
ALTER TABLE `issue_tracking`
  ADD PRIMARY KEY (`Issue_No`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `tool_list`
--
ALTER TABLE `tool_list`
  ADD PRIMARY KEY (`Tool_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `issueoption`
--
ALTER TABLE `issueoption`
  MODIFY `issue_id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `issue_tracking`
--
ALTER TABLE `issue_tracking`
  MODIFY `Issue_No` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tool_list`
--
ALTER TABLE `tool_list`
  MODIFY `Tool_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
