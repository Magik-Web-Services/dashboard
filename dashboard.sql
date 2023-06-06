-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 06, 2023 at 06:17 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebalafpv_dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `dashboard_accounts`
--

DROP TABLE IF EXISTS `dashboard_accounts`;
CREATE TABLE IF NOT EXISTS `dashboard_accounts` (
  `Sno` int NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`Sno`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dashboard_accounts`
--

INSERT INTO `dashboard_accounts` (`Sno`, `firstName`, `lastName`, `userName`, `email`, `password`) VALUES
(1, 'atul', 'Goyal', 'Atul22g', 'atul22g2468@gmail.com', '$2y$10$eqP4o0mVqzRDkj0.WPuF/ek96PEsqVh4Ort5HsqtW9HpjTb2IpUFK');

-- --------------------------------------------------------

--
-- Table structure for table `dashboard_customers`
--

DROP TABLE IF EXISTS `dashboard_customers`;
CREATE TABLE IF NOT EXISTS `dashboard_customers` (
  `customers_id` int NOT NULL AUTO_INCREMENT,
  `customerType` varchar(255) NOT NULL,
  `salutation` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `fName` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `lName` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `companyName` varchar(255) NOT NULL,
  `customerDisplayName` varchar(255) NOT NULL,
  `customerEmail` varchar(255) NOT NULL,
  `workPhone` varchar(255) NOT NULL,
  `mobile` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Skype` varchar(255) NOT NULL,
  `Designation` varchar(255) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `website` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `create_customer` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_customer` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`customers_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dashboard_items`
--

DROP TABLE IF EXISTS `dashboard_items`;
CREATE TABLE IF NOT EXISTS `dashboard_items` (
  `itemId` int NOT NULL AUTO_INCREMENT,
  `productType` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `sellingPrice` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  PRIMARY KEY (`itemId`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
