-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 21, 2015 at 03:07 PM
-- Server version: 5.5.44-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ifb299db`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `jobNumber` mediumint(8) NOT NULL AUTO_INCREMENT,
  `contractorID` mediumint(8) DEFAULT NULL,
  `customerID` int(11) NOT NULL,
  `jobDescription` varchar(255) NOT NULL,
  `jobType` varchar(255) NOT NULL,
  `jobStatus` varchar(255) NOT NULL,
  `lastUpdateDateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `progressNotes` text NOT NULL,
  `Rating` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`jobNumber`),
  KEY `contractorID_idx` (`contractorID`),
  KEY `userID_idx` (`customerID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=109 ;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`jobNumber`, `contractorID`, `customerID`, `jobDescription`, `jobType`, `jobStatus`, `lastUpdateDateTime`, `progressNotes`, `Rating`) VALUES
(105, 1, 230, 'Electrical Outlets Required', 'Electrical', 'Open', '2015-10-20 03:05:21', 'Customer requires 4 new electrical outlets added in her living room.', 0),
(106, 1, 230, 'Water Leaking from roof', 'Building', 'Closed', '2015-10-19 04:17:27', 'Customer has water leaking from the ceiling. Request contractor to attend to determine and correct source of leak.', 0),
(107, 1, 239, 'This is a test', 'Plumbing', 'Open', '2015-10-19 04:41:47', 'Just testing to for the rating of the contractor', 3),
(108, NULL, 244, 'shits broken', 'Building', 'Open', '2015-10-19 11:26:35', 'roof fell in', 99);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `contractorID` FOREIGN KEY (`contractorID`) REFERENCES `contractors` (`contractorID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `customerID` FOREIGN KEY (`customerID`) REFERENCES `logins` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
