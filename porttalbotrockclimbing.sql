-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 15, 2020 at 12:32 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `porttalbotrockclimbing`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `CustomerID` int(10) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(25) NOT NULL,
  `Surname` varchar(25) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `PhoneNumber` varchar(11) NOT NULL,
  `EmergancyContactName` varchar(25) NOT NULL,
  `EmergancyNumber` varchar(11) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Password` varchar(30) NOT NULL,
  PRIMARY KEY (`CustomerID`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`CustomerID`, `FirstName`, `Surname`, `Email`, `PhoneNumber`, `EmergancyContactName`, `EmergancyNumber`, `Username`, `Password`) VALUES
(1, 'Daniel', 'Newman', 'danielrhysnewman@gmail.com', '07572532716', 'Debbie', '98380270972', 'TheDanime', 'P@ssw0rd'),
(6, 'Ardy', 'Tionko', 'ArdusOurLordus@gmail.com', '', 'Julia', '97298278937', 'Tionkookie', 'P@ssw0rd'),
(5, 'James', 'Rigby', 'JamesRigby2017@hotmail.com', '', 'Bardock', '85763829111', 'JamesRigby01', 'P@ssw0rd'),
(7, 'Micheal', 'Jones', 'MJones@gmail.com', 'MJones', '83823288212', 'Lindsey', '83823288333', 'P@ssw0rd'),
(10, 'Joe', 'Bloggs', 'Admin@hotmail.com', '83798723', 'Jane', '87827987', 'Admin', 'P@ssw0rd');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `ReviewID` int(11) NOT NULL AUTO_INCREMENT,
  `Review` varchar(500) NOT NULL,
  `TimeStamp` timestamp(6) NOT NULL,
  `ScreenName` varchar(30) NOT NULL,
  PRIMARY KEY (`ReviewID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`ReviewID`, `Review`, `TimeStamp`, `ScreenName`) VALUES
(4, 'Ive been to Port Talbot Rock Climbing what can I say other than what an amazing place especially for beginners', '2020-02-12 19:59:08.000000', 'TheDanime'),
(5, 'Great Place', '2020-02-14 16:32:49.000000', 'Tionkook');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
