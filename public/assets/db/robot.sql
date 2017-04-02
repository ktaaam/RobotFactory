-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2017 at 10:04 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

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

DROP TABLE IF EXISTS `apikeys`;
CREATE TABLE `apikeys` (
  `keyId` int(32) UNSIGNED NOT NULL,
  `apikey` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apikeys`
--

INSERT INTO `apikeys` (`keyId`, `apikey`) VALUES
(1, '323c8c');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

DROP TABLE IF EXISTS `history`;
CREATE TABLE `history` (
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
(6, 'sell', 4, NULL, 12, '2016-02-09 06:19:00'),
(7, 'sell', 5, NULL, 13, '2016-02-09 06:20:00'),
(8, 'sell', 6, NULL, 21, '2016-04-09 06:19:00'),
(9, 'sell', 7, NULL, 23, '2016-07-09 06:19:00'),
(10, 'return', NULL, 16, 3, '2016-02-09 06:19:00'),
(11, 'return', 2, NULL, 17, '2016-02-09 06:19:00'),
(12, 'buy', NULL, 4, 18, '2016-02-09 06:19:00'),
(13, 'return', NULL, 5, 3, '2016-02-09 06:19:00'),
(14, 'return', 7, NULL, 8, '2016-02-09 06:19:00'),
(15, 'buy', NULL, 12, 32, '2016-02-09 06:19:00'),
(16, 'return', NULL, 21, 3, '2016-02-09 06:19:00'),
(17, 'return', 8, NULL, 52, '2016-02-09 06:19:00'),
(18, 'buy', NULL, 4, 7, '2016-02-09 06:19:00'),
(19, 'return', NULL, 2, 3, '2016-02-09 06:19:00'),
(20, 'return', 3, NULL, 5, '2016-02-09 06:19:00'),
(21, 'buy', NULL, 4, 7, '2016-02-09 06:19:00'),
(22, 'sell', 8, NULL, 31, '2016-05-09 06:19:00');

-- --------------------------------------------------------

--
-- Table structure for table `parts`
--

DROP TABLE IF EXISTS `parts`;
CREATE TABLE `parts` (
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
(12, 'c3', '10e95c', 'papaya', '2017-04-02 21:10:41'),
(22, 'm2', '25b7f7', 'papaya', '2017-04-02 21:41:20'),
(44, 'r3', '345082', 'papaya', '2017-04-02 21:52:22'),
(46, 'r2', '475c92', 'papaya', '2017-04-02 21:52:22'),
(47, 'w3', '2cc83b', 'papaya', '2017-04-02 21:52:22'),
(48, 'b3', '1a9361', 'papaya', '2017-04-02 21:52:22'),
(50, 'w3', '31b947', 'papaya', '2017-04-02 21:52:22'),
(51, 'a2', '28b134', 'papaya', '2017-04-02 21:52:30'),
(52, 'a2', '42e1b3', 'papaya', '2017-04-02 21:52:30'),
(53, 'a2', '1b5839', 'papaya', '2017-04-02 21:52:30'),
(54, 'a2', '3b7756', 'papaya', '2017-04-02 21:52:30'),
(55, 'a2', '141ecf', 'papaya', '2017-04-02 21:52:30'),
(56, 'a2', '496ff5', 'papaya', '2017-04-02 21:52:30'),
(57, 'a2', '17e2e4', 'papaya', '2017-04-02 21:52:30'),
(58, 'a2', '3b39c7', 'papaya', '2017-04-02 21:52:30'),
(59, 'a2', '4ac738', 'papaya', '2017-04-02 21:52:30'),
(60, 'a2', '4b0794', 'papaya', '2017-04-02 21:52:30'),
(61, 'b2', '4a9278', 'papaya', '2017-04-02 21:57:54'),
(63, 'c3', '364612', 'papaya', '2017-04-02 21:57:54'),
(65, 'b3', '1df9d4', 'papaya', '2017-04-02 21:57:54'),
(66, 'c2', '40910f', 'papaya', '2017-04-02 21:57:54'),
(67, 'r3', '36bf81', 'papaya', '2017-04-02 21:57:54'),
(68, 'r1', '240569', 'papaya', '2017-04-02 21:57:54'),
(69, 'a3', '44a497', 'papaya', '2017-04-02 21:57:54'),
(71, 'r2', '43eb8e', 'papaya', '2017-04-02 21:58:19'),
(72, 'w3', '162d20', 'papaya', '2017-04-02 21:58:19'),
(74, 'c3', '2852f8', 'papaya', '2017-04-02 21:58:19'),
(75, 'm3', '2342d5', 'papaya', '2017-04-02 21:58:19'),
(76, 'b2', '105365', 'papaya', '2017-04-02 21:58:19'),
(77, 'm3', '16d5a2', 'papaya', '2017-04-02 21:58:19'),
(78, 'b2', '1042cb', 'papaya', '2017-04-02 21:58:19'),
(79, 'r2', '1caf77', 'papaya', '2017-04-02 21:58:19'),
(81, 'c1', '39eec5', 'papaya', '2017-04-02 21:58:21'),
(82, 'b3', '4065b7', 'papaya', '2017-04-02 21:58:21'),
(83, 'b1', '36081d', 'papaya', '2017-04-02 21:58:21'),
(84, 'm1', '4779c0', 'papaya', '2017-04-02 21:58:21'),
(85, 'b2', '172dc5', 'papaya', '2017-04-02 21:58:21'),
(86, 'c2', '2d1058', 'papaya', '2017-04-02 21:58:21'),
(87, 'b1', '366cba', 'papaya', '2017-04-02 21:58:21'),
(88, 'r2', '18c9af', 'papaya', '2017-04-02 21:58:21'),
(89, 'w3', '4c4597', 'papaya', '2017-04-02 21:58:21'),
(90, 'b3', '14a200', 'papaya', '2017-04-02 21:58:21');

-- --------------------------------------------------------

--
-- Table structure for table `robots`
--

DROP TABLE IF EXISTS `robots`;
CREATE TABLE `robots` (
  `robot_id` int(11) NOT NULL,
  `top` char(2) NOT NULL,
  `torso` char(2) NOT NULL,
  `bottom` char(2) NOT NULL,
  `top_ca` varchar(10) NOT NULL,
  `torso_ca` varchar(10) NOT NULL,
  `bottom_ca` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `robots`
--

INSERT INTO `robots` (`robot_id`, `top`, `torso`, `bottom`, `top_ca`, `torso_ca`, `bottom_ca`) VALUES
(14, 'a1', 'a2', 'w3', '172a2a', '3d4094', '302954'),
(15, 'b1', 'w2', 'a3', '1047ad', '389ab7', '36ff6a'),
(16, 'b1', 'r2', 'a3', '4bcf65', '125f10', '3df9e9');

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
  MODIFY `transID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `parts`
--
ALTER TABLE `parts`
  MODIFY `part_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT for table `robots`
--
ALTER TABLE `robots`
  MODIFY `robot_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
