-- phpMyAdmin SQL Dump
-- version 4.0.6deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 01, 2014 at 02:26 PM
-- Server version: 5.5.37-0ubuntu0.13.10.1
-- PHP Version: 5.5.3-1ubuntu2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `add_drop`
--

-- --------------------------------------------------------

--
-- Table structure for table `addanddrop`
--

CREATE TABLE IF NOT EXISTS `addanddrop` (
  `Entryno` varchar(15) NOT NULL DEFAULT '',
  `Firstname` varchar(20) DEFAULT NULL,
  `Middlename` varchar(20) DEFAULT NULL,
  `Lastname` varchar(20) DEFAULT NULL,
  `Department` varchar(5) DEFAULT NULL,
  `Email` varchar(40) DEFAULT NULL,
  `Hash` varchar(35) DEFAULT NULL,
  PRIMARY KEY (`Entryno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addanddrop`
--

INSERT INTO `addanddrop` (`Entryno`, `Firstname`, `Middlename`, `Lastname`, `Department`, `Email`, `Hash`) VALUES
('2012csb1001', 'Abhishek', NULL, NULL, 'CSE', 'abhishekrm@iitrpr.ac.in', 'askdhiaslhdkagskdhk2h3h23l');

-- --------------------------------------------------------

--
-- Table structure for table `addsubjects`
--

CREATE TABLE IF NOT EXISTS `addsubjects` (
  `Sno` int(5) NOT NULL AUTO_INCREMENT,
  `Entryno` varchar(15) DEFAULT NULL,
  `Credit` float DEFAULT NULL,
  `Current_semester` int(2) DEFAULT NULL,
  `Subjects` varchar(8) DEFAULT NULL,
  `Status` varchar(30) DEFAULT NULL,
  `Request_type` varchar(4) DEFAULT NULL,
  `Time_in` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Time_approved` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`Sno`),
  UNIQUE KEY `prevent_dup` (`Entryno`,`Subjects`,`Request_type`,`Current_semester`),
  KEY `Entryno` (`Entryno`),
  KEY `Status` (`Status`,`Request_type`),
  KEY `Status_2` (`Status`),
  KEY `Request_type` (`Request_type`),
  KEY `Request_type_2` (`Request_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `addsubjects`
--

INSERT INTO `addsubjects` (`Sno`, `Entryno`, `Credit`, `Current_semester`, `Subjects`, `Status`, `Request_type`, `Time_in`, `Time_approved`) VALUES
(18, '2012csb1001', 5, 4, 'CSL202', 'Applied', 'ADD', '2014-05-01 14:23:51', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `advisors`
--

CREATE TABLE IF NOT EXISTS `advisors` (
  `Department` varchar(5) NOT NULL,
  `Name` varchar(40) DEFAULT NULL,
  `Email` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`Department`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advisors`
--

INSERT INTO `advisors` (`Department`, `Name`, `Email`) VALUES
('CSE', 'Balwinder Sodhi', 'sodhi@iitrpr.ac.in');

-- --------------------------------------------------------

--
-- Table structure for table `instructors`
--

CREATE TABLE IF NOT EXISTS `instructors` (
  `Subjects` varchar(7) NOT NULL DEFAULT '',
  `Name` varchar(40) DEFAULT NULL,
  `Email` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`Subjects`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructors`
--

INSERT INTO `instructors` (`Subjects`, `Name`, `Email`) VALUES
('CSL202', 'Balwinder Sodhi', 'sodhi@iitrpr.ac.in'),
('CSL458', 'Balwinder Sodhi', 'sodhi@iitrpr.ac.in');

-- --------------------------------------------------------

--
-- Table structure for table `previousgrades`
--

CREATE TABLE IF NOT EXISTS `previousgrades` (
  `SNo` int(11) NOT NULL AUTO_INCREMENT,
  `Entryno` varchar(15) DEFAULT NULL,
  `Current_Semester` int(2) DEFAULT NULL,
  `previous_sg` float DEFAULT NULL,
  `previous_previous_sg` float DEFAULT NULL,
  `previous_cg` float DEFAULT NULL,
  `previous_previous_cg` float NOT NULL,
  PRIMARY KEY (`SNo`),
  UNIQUE KEY `prevent_cg_dup` (`Entryno`,`Current_Semester`),
  KEY `Entryno` (`Entryno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

-- --------------------------------------------------------

--
-- Table structure for table `Subjects`
--

CREATE TABLE IF NOT EXISTS `Subjects` (
  `SNo.` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Code` varchar(7) NOT NULL,
  `Credits` int(2) NOT NULL,
  `Instructors` varchar(100) NOT NULL,
  PRIMARY KEY (`SNo.`),
  UNIQUE KEY `Code` (`Code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `Subjects`
--

INSERT INTO `Subjects` (`SNo.`, `Name`, `Code`, `Credits`, `Instructors`) VALUES
(1, 'Programming Paradigms', 'CSL202', 5, 'Sodhi'),
(2, 'Special topics', 'CSL458', 4, 'Sodhi');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addsubjects`
--
ALTER TABLE `addsubjects`
  ADD CONSTRAINT `addsubjects_ibfk_1` FOREIGN KEY (`Entryno`) REFERENCES `addanddrop` (`Entryno`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
