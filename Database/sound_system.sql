-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 12, 2018 at 01:26 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sound_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
CREATE TABLE IF NOT EXISTS `accounts` (
  `accID` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `accType` enum('admin','client','serviceProvider') NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'inactive',
  PRIMARY KEY (`accID`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`accID`, `name`, `username`, `password`, `accType`, `status`) VALUES
(27, 'reg', 'reg', '33c0ee425e2c0efe834afc1aa1e33a4c', 'admin', 'inactive'),
(28, 're', 're', '12eccbdd9b32918131341f38907cbbb5', 'admin', 'inactive'),
(21, 'cj', 'cj', '28198b369067e88dab9fefe85484dbf4', 'admin', 'inactive'),
(20, 'pwed', 'pwede', '7815696ecbf1c96e6894b779456d330e', 'serviceProvider', 'inactive'),
(19, 'sana', 'sana', 'b8873a156dc35dc99b69d0f93ebe22fc', 'client', 'inactive'),
(18, 'hello', 'hello', '5d41402abc4b2a76b9719d911017c592', 'serviceProvider', 'inactive'),
(17, 'nice', 'nice', '7c6483ddcd99eb112c060ecbe0543e86', 'admin', 'inactive'),
(29, 'Christian', 'cjj', 'cjj', 'serviceProvider', 'inactive'),
(30, 'cjay', 'cjay', 'cjay', 'admin', 'inactive'),
(31, 'Jan', 'Pat', '123', 'serviceProvider', 'active'),
(32, 'Tori', 'Tk', 'Tk', 'serviceProvider', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

DROP TABLE IF EXISTS `packages`;
CREATE TABLE IF NOT EXISTS `packages` (
  `packageID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `price` double NOT NULL,
  `status` enum('not available','available') NOT NULL,
  `spID` int(11) NOT NULL,
  `packImage` longblob NOT NULL,
  PRIMARY KEY (`packageID`),
  UNIQUE KEY `packageID_UNIQUE` (`packageID`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `spID_idx` (`spID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`packageID`, `name`, `price`, `status`, `spID`, `packImage`) VALUES
(1, 'Package A from Bose', 5000, 'not available', 1, ''),
(2, 'Package B from Bose', 3000, 'not available', 2, ''),
(3, 'Mic Package', 4999, 'available', 3, ''),
(4, 'KEF Q550 Floor-Standing speaker', 10000, 'available', 1, ''),
(5, 'Mini Concert', 25000, 'available', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `transID` int(11) NOT NULL AUTO_INCREMENT,
  `custID` int(11) NOT NULL,
  `packID` int(11) NOT NULL,
  `status` enum('cancelled','successful','in progress') NOT NULL,
  `transDate` datetime(6) NOT NULL,
  `spID` int(11) DEFAULT NULL,
  PRIMARY KEY (`transID`),
  UNIQUE KEY `transID_UNIQUE` (`transID`),
  KEY `packID_idx` (`packID`),
  KEY `custID` (`custID`),
  KEY `spID_idx` (`spID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `packages`
--
ALTER TABLE `packages`
  ADD CONSTRAINT `spID` FOREIGN KEY (`spID`) REFERENCES `accounts` (`acctID`) ON UPDATE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `custID` FOREIGN KEY (`custID`) REFERENCES `accounts` (`acctID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `packID` FOREIGN KEY (`packID`) REFERENCES `packages` (`packageID`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
