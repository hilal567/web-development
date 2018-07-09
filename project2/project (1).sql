-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 06, 2018 at 03:09 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `card_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `balance` int(11) NOT NULL,
  `isActive` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`card_id`, `user_id`, `balance`, `isActive`) VALUES
(2, 1, 1000, 1),
(3, 2, 1000, 1),
(4, 3, 1000, 1),
(5, 4, 1000, 1),
(6, 5, 1000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `staff_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `sacco_id` int(11) NOT NULL,
  `vehicle` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`staff_id`, `name`, `sacco_id`, `vehicle`) VALUES
(1, 'Mike Kamau', 8, 'KAV 111O'),
(2, 'John Wafula', 1, 'KBV 233E'),
(3, 'Ron Brian', 5, 'KBN 809R'),
(4, 'Michelle Juma', 9, 'KCK 370M'),
(5, 'George Mwangi', 1, 'KBX 456');

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `route_id` int(11) NOT NULL,
  `route_name` varchar(45) NOT NULL,
  `description` varchar(45) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sacco`
--

CREATE TABLE `sacco` (
  `sacco_id` int(11) NOT NULL,
  `sacco_name` varchar(45) NOT NULL,
  `description` text NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sacco`
--

INSERT INTO `sacco` (`sacco_id`, `sacco_name`, `description`, `isActive`) VALUES
(1, 'Killeton Sacco', 'Kileleshwa , Town', 1),
(2, 'Eastern Sacco', 'Eastern Bypass, Town', 1),
(5, 'East Madaraka Sacco ', 'Madaraka, Strathmore, South C , Town', 1),
(7, 'Embassava Sacco', 'Town, Embakasi, Tassia, South B, C, Bellevue', 1),
(8, 'Umat Kenya Limited', 'Embakasi, Tassia, South B, C, Bellevue', 1),
(9, 'Blaze Sacco', 'Town, Unknown ?', 1),
(10, ' Washiriki Sacco', ' CBD, Westlands, ', 1),
(12, ' Xyz', ' Ruiru, CBD', 1);

-- --------------------------------------------------------

--
-- Table structure for table `stages`
--

CREATE TABLE `stages` (
  `id` int(11) NOT NULL,
  `stage_name` varchar(45) NOT NULL,
  `latitude` int(11) NOT NULL,
  `longtitude` int(11) NOT NULL,
  `isActive` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

CREATE TABLE `trips` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `start` text NOT NULL,
  `time` varchar(50) NOT NULL,
  `end` text NOT NULL,
  `vehicle` varchar(9) NOT NULL,
  `fare` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`id`, `username`, `start`, `time`, `end`, `vehicle`, `fare`) VALUES
(1, '1', 'CBD', '4:00', 'Embakasi', 'KBV 233E', 100),
(2, '3', 'Nairobi', '5:00', 'Kitisuru', 'KBN 809R', 200),
(3, '4', 'Nairobi', '2:00', 'RidgeWays', 'KCK 370M', 200);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `card_id` int(11) NOT NULL,
  `firstname` varchar(60) NOT NULL,
  `lastname` varchar(60) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `national_id` varchar(15) NOT NULL,
  `address` varchar(30) NOT NULL,
  `gender` text NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(50) NOT NULL,
  `dob` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `card_id`, `firstname`, `lastname`, `telephone`, `national_id`, `address`, `gender`, `email`, `password`, `dob`, `status`) VALUES
(1, 1, 'John', 'Doe', '0704814222', '55746385', 'Nairobi, Westlands, Woodvale G', 'M', 'john@gmail.com', '1234', '2018-07-05 14:04:21', 1),
(2, 2, 'stacy', 'Wanjiku', '0444234222', '52323263341', 'Madaraka, Siwaka', 'F', 'john@gmail.com', '1234', '2018-07-05 14:05:52', 1),
(3, 3, 'Janet', 'Mw', '0922928490', '22343212', 'Nairobi, Highrise', 'F', 'janet@gmai.com', '1234', '2018-07-05 18:06:34', 1),
(5, 4, 'James', 'Bond', '898989893', '33443432', 'Ridgeways, Nairobi', 'M', 'jbond@hotmail.com', '1234', '2018-07-05 18:07:49', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usertypes`
--

CREATE TABLE `usertypes` (
  `id` int(11) NOT NULL,
  `description` varchar(40) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`card_id`),
  ADD UNIQUE KEY `card_id_2` (`card_id`),
  ADD KEY `card_id` (`card_id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`staff_id`),
  ADD UNIQUE KEY `vehicle` (`vehicle`),
  ADD KEY `sacco_id` (`sacco_id`),
  ADD KEY `vehicle_2` (`vehicle`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`route_id`);

--
-- Indexes for table `sacco`
--
ALTER TABLE `sacco`
  ADD PRIMARY KEY (`sacco_id`),
  ADD UNIQUE KEY `sacco_id_2` (`sacco_id`),
  ADD KEY `sacco_id` (`sacco_id`);

--
-- Indexes for table `stages`
--
ALTER TABLE `stages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trips`
--
ALTER TABLE `trips`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`username`),
  ADD KEY `vehicle` (`vehicle`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`card_id`),
  ADD KEY `card_id` (`card_id`),
  ADD KEY `firstname` (`firstname`);

--
-- Indexes for table `usertypes`
--
ALTER TABLE `usertypes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `card_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `route_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sacco`
--
ALTER TABLE `sacco`
  MODIFY `sacco_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `stages`
--
ALTER TABLE `stages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trips`
--
ALTER TABLE `trips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `usertypes`
--
ALTER TABLE `usertypes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `drivers`
--
ALTER TABLE `drivers`
  ADD CONSTRAINT `drivers_ibfk_1` FOREIGN KEY (`sacco_id`) REFERENCES `sacco` (`sacco_id`);

--
-- Constraints for table `trips`
--
ALTER TABLE `trips`
  ADD CONSTRAINT `trips_ibfk_2` FOREIGN KEY (`vehicle`) REFERENCES `drivers` (`vehicle`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
