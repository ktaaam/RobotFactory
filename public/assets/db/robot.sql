-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2017 at 02:22 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `robot`
--

-- --------------------------------------------------------

--
-- Table structure for table `apikeys`
--

CREATE TABLE IF NOT EXISTS `apikeys` (
  `keyId` int(32) NOT NULL DEFAULT '1',
  `apikey` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apikeys`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE IF NOT EXISTS `history` (
  `transID` int(11) NOT NULL,
  `purchaseType` varchar(10) NOT NULL,
  `robotId` int(11) DEFAULT NULL,
  `partsId` int(11) DEFAULT NULL,
  `shipmentId` int(11) NOT NULL,
  `shipmentDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`transID`, `purchaseType`, `robotId`, `partsId`, `shipmentId`, `shipmentDate`) VALUES
(1, 'buy', NULL, 1, 1, '2016-02-09 06:19:00'),
(2, 'sell', 1, NULL, 2, '2016-02-09 06:19:00'),
(3, 'return', NULL, 2, 3, '2016-02-09 06:19:00'),
(4, 'return', 3, NULL, 5, '2016-02-09 06:19:00'),
(5, 'buy', NULL, 4, 7, '2016-02-09 06:19:00'),
(6, 'sell', 4, NULL, 12, '2016-02-09 06:19:00');

-- --------------------------------------------------------

--
-- Table structure for table `parts`
--

CREATE TABLE IF NOT EXISTS `parts` (
  `part_id` int(11) NOT NULL,
  `part_code` char(2) NOT NULL,
  `part_ca` varchar(20) NOT NULL,
  `built_at` varchar(20) NOT NULL,
  `date_built` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parts`
--

INSERT INTO `parts` (`part_id`, `part_code`, `part_ca`, `built_at`, `date_built`) VALUES
(1, 'a1', 'MIICXAIBAAKBgQCqGK', 'umbrella_f1', '2017-02-10 13:43:19'),
(2, 'a2', 'MIICXAIBAAKBgQCqGK', 'umbrella_f1', '2017-02-10 13:43:19'),
(3, 'a3', 'MIICXAIBAAKBgQCqGK', 'umbrella_f1', '2017-02-10 13:43:19'),
(4, 'b1', 'MIICXAIBAAKBgQCqGK', 'umbrella_f1', '2017-02-10 13:43:19'),
(5, 'c2', 'MIICXAIBAAKBgQCqGK', 'umbrella_f1', '2017-02-10 13:43:19'),
(6, 'r3', 'MIICXAIBAAKBgQCqGK', 'umbrella_f1', '2017-02-10 13:43:19');

-- --------------------------------------------------------

--
-- Table structure for table `robots`
--

CREATE TABLE IF NOT EXISTS `robots` (
  `robot_id` int(11) NOT NULL,
  `top` char(2) NOT NULL,
  `torso` char(2) NOT NULL,
  `bottom` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `robots`
--

INSERT INTO `robots` (`robot_id`, `top`, `torso`, `bottom`) VALUES
(1, 'a1', 'a2', 'a3'),
(2, 'b1', 'b2', 'b3'),
(3, 'a1', 'b2', 'c3'),
(4, 'a1', 'r2', 'w3'),
(5, 'b1', 'w2', 'c3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apikeys`
--
ALTER TABLE `apikeys`
  ADD PRIMARY KEY (`keyId`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`transID`);

--
-- Indexes for table `parts`
--
ALTER TABLE `parts`
  ADD PRIMARY KEY (`part_id`);

--
-- Indexes for table `robots`
--
ALTER TABLE `robots`
  ADD PRIMARY KEY (`robot_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apikeys`
--
ALTER TABLE `apikeys`
  MODIFY `keyId` int(32) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `transID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `parts`
--
ALTER TABLE `parts`
  MODIFY `part_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `robots`
--
ALTER TABLE `robots`
  MODIFY `robot_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
