-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 21, 2015 at 08:12 PM
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
-- Table structure for table `tbl_menuinfo`
--

CREATE TABLE IF NOT EXISTS `tbl_menuinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(100) NOT NULL,
  `menu_link` varchar(200) NOT NULL,
  `ordering` int(11) NOT NULL,
  `usertype` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_menuinfo`
--

INSERT INTO `tbl_menuinfo` (`id`, `menu_name`, `menu_link`, `ordering`, `usertype`) VALUES
(1, 'Lodge Job', 'lodge_migrants.php', 1, 'migrant'),
(2, 'Job Status', 'status_migrants.php', 2, 'migrant'),
(3, 'Give Ratings ', 'ratings.php', 3, 'migrant'),
(4, 'View Volunteers', 'view_volunteers.php', 4, 'migrant'),
(5, 'Approve Volunteer', 'approve.php', 1, 'manager'),
(6, 'My Jobs', 'myjobs.php', 1, 'volunteer');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userinfo`
--

CREATE TABLE IF NOT EXISTS `tbl_userinfo` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) CHARACTER SET cp1250 COLLATE cp1250_czech_cs NOT NULL,
  `usertype` varchar(20) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `postcode` varchar(20) NOT NULL,
  `jobpostcode` varchar(20) DEFAULT NULL,
  `ispending` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `id_2` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_userinfo`
--

INSERT INTO `tbl_userinfo` (`id`, `email`, `password`, `usertype`, `fullname`, `contact`, `address`, `postcode`, `jobpostcode`, `ispending`) VALUES
(1, 'team5@qut.edu.au', '123456', 'manager', 'Team5 Admin', '0000000000', 'QUT', '4001', NULL, 0),
(2, 'ibrahim@migrant.com', '123456', 'migrant', 'ibrahim ALharbi', '0478195140', '204 alice street', '4000', NULL, 0),
(3, 'ibrahim@volunteer.com', '123456', 'volunteer', 'ibrahim ALharbi', '0478195140', '204 alice street', '4000', '4000', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
