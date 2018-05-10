-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 10, 2018 at 05:16 PM
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
-- Database: `accounts`
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
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

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
(17, 'nice', 'nice', '7c6483ddcd99eb112c060ecbe0543e86', 'admin', 'inactive');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
