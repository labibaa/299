-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2022 at 08:28 PM
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
-- Database: `chatapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 1311133324, 1573889124, 'Hello'),
(2, 744915201, 516147718, 'hello'),
(3, 516147718, 800266522, 'Hi I am facing a problem'),
(4, 141395352, 662972674, 'yo'),
(5, 141395352, 662972674, 'sup'),
(6, 141395352, 662972674, 'all goood>?'),
(7, 141395352, 173935658, 'yo '),
(8, 141395352, 173935658, 'sup '),
(9, 141395352, 173935658, 'bro'),
(10, 800266522, 173935658, 'nope'),
(11, 173935658, 141395352, 'What do ya need'),
(12, 173935658, 141395352, 'All good?'),
(13, 1302603600, 141395352, 'WHy'),
(14, 173935658, 141395352, 'hhjhj'),
(15, 173935658, 141395352, 'hhjhj');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(5, 1302603600, 'suhita', 'hoque', 'suhita@gmail.com', '079972196e88cf29ffe1f8086a0bbf5f', '1648618623IMG_20210108_192827_699.jpg', 'Offline now'),
(6, 800266522, 'Plabon', 'Islam', 'plabon@gmail.com', '202cb962ac59075b964b07152d234b70', '1648619527IMG_20210108_192827_699.jpg', 'Offline now'),
(8, 141395352, 'Moon', 'Knight', 'os@gmail.com', '202cb962ac59075b964b07152d234b70', '1648925928IMG_20210108_192827_699.jpg', 'Active now'),
(10, 173935658, 'Lab', 'iba', 'la@yahoo.com', '3f0572d051aecb7fbce5c309c5c2b113', '1648927578World-Health-Organization-WHO-Emblem.png', 'Offline now'),
(11, 1529631845, 'Marc', 'Spector', 'mrc@hotmail.com', '97e1e59c0375e0f55c10d4314db20466', '1649529405IMG_20210108_192827_699.jpg', 'Active now');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
