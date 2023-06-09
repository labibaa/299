-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2022 at 08:27 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `complaint_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaint_against_person`
--

CREATE TABLE `complaint_against_person` (
  `s_no` int(10) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `parent_name` varchar(255) DEFAULT NULL,
  `age` int(10) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `gender` enum('male','female') DEFAULT NULL,
  `inc_datetime` datetime(6) DEFAULT NULL,
  `reg_datetime` datetime(6) DEFAULT NULL,
  `complaint` varchar(255) DEFAULT NULL,
  `section` int(20) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `qid2` int(10) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `information` text DEFAULT NULL,
  `feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaint_against_person`
--

INSERT INTO `complaint_against_person` (`s_no`, `name`, `parent_name`, `age`, `address`, `gender`, `inc_datetime`, `reg_datetime`, `complaint`, `section`, `category`, `qid2`, `status`, `information`, `feedback`) VALUES
(1, 'Labiba', 'Ismail', 19, 'Uttara', 'female', '2022-03-07 13:08:00.000000', '2022-04-03 13:09:00.000000', 'Bullying', 2, 'Misbehavior', 13244, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `complaint_against_university`
--

CREATE TABLE `complaint_against_university` (
  `s_no` int(10) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `parent_name` varchar(255) DEFAULT NULL,
  `age` int(10) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `gender` enum('male','female') DEFAULT NULL,
  `inc_datetime` datetime(6) DEFAULT NULL,
  `reg_datetime` datetime(6) DEFAULT NULL,
  `complaint` varchar(255) DEFAULT NULL,
  `section` int(20) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `qid2` int(10) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `information` text DEFAULT NULL,
  `feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaint_against_university`
--

INSERT INTO `complaint_against_university` (`s_no`, `name`, `parent_name`, `age`, `address`, `gender`, `inc_datetime`, `reg_datetime`, `complaint`, `section`, `category`, `qid2`, `status`, `information`, `feedback`) VALUES
(1, 'Labiba', 'Ismail', 22, 'NHQ, Banani', 'female', '2022-03-07 11:39:00.000000', '2022-03-23 11:40:00.000000', 'Broken Chair', 8, 'New furniture', 37713, NULL, NULL, ''),
(13, 'Matt', 'Murdock', 34, 'MCU', 'male', '2022-03-01 18:57:00.000000', '2022-04-10 18:53:00.000000', 'Cannot see', 7, 'Others', 48784, NULL, NULL, ''),
(14, 'Monoshita', 'Khondoker', 22, 'Narayanganj', 'female', '2022-04-12 11:41:00.000000', '2022-04-13 11:42:00.000000', 'No dustbin in classroom Nac406', 9, 'Others', 30053, NULL, NULL, ''),
(16, 'Tahira', 'Kabir', 22, 'Bashundhara', 'female', '2022-04-12 11:45:00.000000', '2022-04-13 11:46:00.000000', 'DMM not working', 9, 'Others', 16135, NULL, NULL, ''),
(19, 'Abir', 'Osama Islam', 23, 'Mirpur 10', 'male', '2022-04-11 11:49:00.000000', '2022-04-13 11:49:00.000000', 'Duster is missing in classroom SAC 504', 4, 'Others', 16595, NULL, NULL, ''),
(20, 'Matt', 'LeBlanc', 14, 'Banani', 'female', '2022-04-16 11:52:00.000000', '2022-04-22 11:52:00.000000', 'Broken Table', 12, 'New furniture', 39322, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `qid2` int(100) NOT NULL,
  `feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`qid2`, `feedback`) VALUES
(37713, 'Contact administration'),
(21981, 'Write an application to the authority'),
(48784, 'Contact Storage'),
(10437, 'Done');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `uid` int(10) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `userpassword` varchar(255) DEFAULT NULL,
  `type` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uid`, `username`, `userpassword`, `type`) VALUES
(1, 'suho', 'suho123', 0),
(2, 'lab1ba', 'lab1ba', 0),
(3, 'daredevil', 'daredevil', 0),
(4, 'admin', 'admin', 1),
(5, 'elektra', 'elektra', 0);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `uid` int(10) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` enum('male','female') DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobileno` varchar(255) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `repeatpassword` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`uid`, `firstname`, `lastname`, `username`, `dob`, `gender`, `email`, `mobileno`, `password`, `repeatpassword`) VALUES
(1, 'suhita', 'hoque', 'suho', '0000-00-00', 'female', 'suhitahoque5@gmail.com', '01938390282', 'suho123', 'suho123'),
(2, 'Labiba', 'Ismail', 'lab1ba', '1515-07-15', 'female', 'fweww@gmail.com', '015544666666', 'lab1ba', 'lab1ba'),
(3, 'Matt', 'Murdock', 'daredevil', '1980-02-02', 'male', 'daredevil@gmail.com', '0153444888', 'daredevil', 'daredevil'),
(4, 'Admin', 'Admin', 'admin', '1980-02-02', 'male', 'admin@gmail.com', '01555555', 'admin', 'admin'),
(5, 'Elektra', 'MCU', 'elektra', '1983-07-15', 'female', 'elektra@gmail.com', '011551312151', 'elektra', 'elektra');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaint_against_person`
--
ALTER TABLE `complaint_against_person`
  ADD PRIMARY KEY (`s_no`),
  ADD UNIQUE KEY `qid2` (`qid2`);

--
-- Indexes for table `complaint_against_university`
--
ALTER TABLE `complaint_against_university`
  ADD PRIMARY KEY (`s_no`),
  ADD UNIQUE KEY `qid2` (`qid2`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaint_against_person`
--
ALTER TABLE `complaint_against_person`
  MODIFY `s_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `complaint_against_university`
--
ALTER TABLE `complaint_against_university`
  MODIFY `s_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `uid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `uid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
