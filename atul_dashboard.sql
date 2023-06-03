-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 28, 2023 at 08:20 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES latin1 */;

--
-- Database: `atul_dashboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `database_accounts`
--

DROP TABLE IF EXISTS `database_accounts`;
CREATE TABLE IF NOT EXISTS `database_accounts` (
  `Sno` int NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`Sno`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `database_accounts`
--

INSERT INTO `database_accounts` (`Sno`, `firstName`, `lastName`, `userName`, `email`, `password`) VALUES
(1, 'atul', 'Goyal', 'Atul22g', 'atul22g2468@gmail.com', '$2y$10$eqP4o0mVqzRDkj0.WPuF/ek96PEsqVh4Ort5HsqtW9HpjTb2IpUFK');

-- --------------------------------------------------------

--
-- Table structure for table `database_customers`
--

DROP TABLE IF EXISTS `database_customers`;
CREATE TABLE IF NOT EXISTS `database_customers` (
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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `database_customers`
--

INSERT INTO `database_customers` (`customers_id`, `customerType`, `salutation`, `fName`, `lName`, `companyName`, `customerDisplayName`, `customerEmail`, `workPhone`, `mobile`, `Skype`, `Designation`, `Department`, `website`, `create_customer`, `update_customer`) VALUES
(1, 'business', 'Mr', 'Atul', 'goyal', 'sjfn', 'dkcKCMD', 'dmv@gmail.com', '23r', 'cmdck', 'ddm', 'dmv', 'cklem', 'dvm', '2023-05-28 03:15:24', '2023-05-28 03:15:24'),
(2, 'individual', 'Mr', 'Atul', 'goyal', 'sjfn', 'as', 'dmv@gmail.com', '23r', 'cmdck', 'ddm', 'dmv', 'cklem', 'dvm', '2023-05-28 03:20:52', '2023-05-28 03:20:52');

-- --------------------------------------------------------

--
-- Table structure for table `database_items`
--

DROP TABLE IF EXISTS `database_items`;
CREATE TABLE IF NOT EXISTS `database_items` (
  `itemId` int NOT NULL AUTO_INCREMENT,
  `productType` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `sellingPrice` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  PRIMARY KEY (`itemId`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `database_items`
--

INSERT INTO `database_items` (`itemId`, `productType`, `Name`, `unit`, `sellingPrice`, `Description`) VALUES
(1, 'goods', 'a', 'box', '1', 'a');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
