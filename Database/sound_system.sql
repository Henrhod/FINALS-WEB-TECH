-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: sound_system
-- ------------------------------------------------------
-- Server version	5.7.14

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `accounts` (
  `acctID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `firstName` varchar(45) NOT NULL,
  `lastName` varchar(45) NOT NULL,
  `acctType` enum('service_provider','admin','customer') NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`acctID`),
  UNIQUE KEY `acctID_UNIQUE` (`acctID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accounts`
--

LOCK TABLES `accounts` WRITE;
/*!40000 ALTER TABLE `accounts` DISABLE KEYS */;
INSERT INTO `accounts` VALUES (1,'sampleAdmin','Sample','Admin','admin','admin'),(2,'sampleServiceProvider','Sample','Service Provider','service_provider','serviceprovider'),(3,'sampleCustomer','Sample','Customer','customer','customer');
/*!40000 ALTER TABLE `accounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `item`
--

DROP TABLE IF EXISTS `item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `item` (
  `itemID` int(11) NOT NULL AUTO_INCREMENT,
  `itemname` varchar(45) NOT NULL,
  `qty` int(11) NOT NULL,
  `belongsTo` int(11) NOT NULL,
  `imagePath` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`itemID`),
  UNIQUE KEY `itemID_UNIQUE` (`itemID`),
  KEY `belongsTo` (`belongsTo`),
  CONSTRAINT `belongsTo` FOREIGN KEY (`belongsTo`) REFERENCES `packages` (`packageID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item`
--

LOCK TABLES `item` WRITE;
/*!40000 ALTER TABLE `item` DISABLE KEYS */;
INSERT INTO `item` VALUES (1,'Sample Speaker',2,1,NULL),(2,'Sample Microphone',1,1,NULL),(3,'Sample Smoke Machine',1,1,NULL);
/*!40000 ALTER TABLE `item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `packages`
--

DROP TABLE IF EXISTS `packages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `packages` (
  `packageID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `price` double NOT NULL,
  `status` enum('not available','available') NOT NULL,
  `spID` int(11) NOT NULL,
  `imagePath` varchar(45) NOT NULL,
  PRIMARY KEY (`packageID`),
  UNIQUE KEY `packageID_UNIQUE` (`packageID`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `spID` (`spID`),
  CONSTRAINT `spID` FOREIGN KEY (`spID`) REFERENCES `accounts` (`acctID`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `packages`
--

LOCK TABLES `packages` WRITE;
/*!40000 ALTER TABLE `packages` DISABLE KEYS */;
INSERT INTO `packages` VALUES (1,'Sample Package A',5000,'not available',1,''),(2,'Sample Package B',3000,'not available',2,'');
/*!40000 ALTER TABLE `packages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transactions` (
  `transID` int(11) NOT NULL AUTO_INCREMENT,
  `custID` int(11) NOT NULL,
  `packID` int(11) NOT NULL,
  `status` enum('cancelled','successful','in progress') NOT NULL,
  `transDate` datetime(6) NOT NULL,
  PRIMARY KEY (`transID`),
  UNIQUE KEY `transID_UNIQUE` (`transID`),
  KEY `packID_idx` (`packID`),
  KEY `custID` (`custID`),
  CONSTRAINT `custID` FOREIGN KEY (`custID`) REFERENCES `accounts` (`acctID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `packID` FOREIGN KEY (`packID`) REFERENCES `packages` (`packageID`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transactions`
--

LOCK TABLES `transactions` WRITE;
/*!40000 ALTER TABLE `transactions` DISABLE KEYS */;
/*!40000 ALTER TABLE `transactions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `validatedpackages`
--

DROP TABLE IF EXISTS `validatedpackages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `validatedpackages` (
  `adminID` int(11) NOT NULL,
  `pID` int(11) NOT NULL,
  `status` enum('pending','rejected','approved') NOT NULL,
  PRIMARY KEY (`adminID`,`pID`),
  KEY `adminID` (`adminID`),
  KEY `pID` (`pID`),
  KEY `pID_idx` (`pID`),
  CONSTRAINT `adminID` FOREIGN KEY (`adminID`) REFERENCES `accounts` (`acctID`) ON UPDATE CASCADE,
  CONSTRAINT `pID` FOREIGN KEY (`pID`) REFERENCES `packages` (`packageID`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `validatedpackages`
--

LOCK TABLES `validatedpackages` WRITE;
/*!40000 ALTER TABLE `validatedpackages` DISABLE KEYS */;
/*!40000 ALTER TABLE `validatedpackages` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-28 16:45:13
