-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 03, 2015 at 12:21 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `karya`
--
CREATE DATABASE IF NOT EXISTS `karya` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `karya`;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

DROP TABLE IF EXISTS `company`;
CREATE TABLE IF NOT EXISTS `company` (
  `name` varchar(100) NOT NULL,
  `sector` varchar(50) DEFAULT NULL,
  `address1` varchar(500) DEFAULT NULL,
  `address2` varchar(500) DEFAULT NULL,
  `address3` varchar(500) DEFAULT NULL,
  `skill1` varchar(100) DEFAULT NULL,
  `skill2` varchar(100) DEFAULT NULL,
  `skill3` varchar(100) DEFAULT NULL,
  `minsalary` int(11) DEFAULT NULL,
  `maxsalary` int(11) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `location1` varchar(50) NOT NULL,
  `location2` varchar(50) DEFAULT NULL,
  `location3` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `nation` varchar(50) NOT NULL,
  `MinQual` varchar(50) DEFAULT NULL,
  `JobType` varchar(50) DEFAULT NULL,
  `desc` text,
  `PhNo` int(10) NOT NULL,
  PRIMARY KEY (`name`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`name`, `sector`, `address1`, `address2`, `address3`, `skill1`, `skill2`, `skill3`, `minsalary`, `maxsalary`, `username`, `password`, `location1`, `location2`, `location3`, `email`, `nation`, `MinQual`, `JobType`, `desc`, `PhNo`) VALUES
('asd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'asd', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', '', NULL, NULL, NULL, 0),
('company', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'compuser', '3cf13cee1345702bc316ccbdb6e42167', 'Vijayawada', 'India', 'None', 'email@server.com', 'India', NULL, NULL, NULL, 2147483647),
('company1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'company1user', '78065f9ef8346a93ef81176ad14ab2ad', 'India', 'Vijayawada', 'Chennai', 'comp@gmail.com', 'India', NULL, NULL, NULL, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

DROP TABLE IF EXISTS `data`;
CREATE TABLE IF NOT EXISTS `data` (
  `locations` varchar(100) NOT NULL,
  `skills` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`locations`, `skills`) VALUES
('Hyderabad', 'PHP'),
('Vijayawada', 'Web design'),
('Bangalore', 'DB admin');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

DROP TABLE IF EXISTS `job`;
CREATE TABLE IF NOT EXISTS `job` (
  `company` varchar(100) NOT NULL,
  `JD` text NOT NULL,
  `location` varchar(100) NOT NULL,
  `WorkingDays` int(11) NOT NULL,
  `package` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `skill1` varchar(50) NOT NULL,
  `skill2` varchar(50) NOT NULL,
  `skill3` varchar(50) NOT NULL,
  `experience` varchar(11) NOT NULL,
  `WorkingHours` int(11) NOT NULL,
  `sector` varchar(100) NOT NULL,
  `keywords` text,
  KEY `company` (`company`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`company`, `JD`, `location`, `WorkingDays`, `package`, `title`, `skill1`, `skill2`, `skill3`, `experience`, `WorkingHours`, `sector`, `keywords`) VALUES
('company', 'test', 'Hyd', 5, 123, 'asg', 'PHP', 'Web', 'DB', '1', 12, 'wrg', 'wrbhwr');

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker`
--

DROP TABLE IF EXISTS `jobseeker`;
CREATE TABLE IF NOT EXISTS `jobseeker` (
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `dob` date DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `number` int(11) NOT NULL,
  `nationality` varchar(100) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `address` text,
  `JobType` varchar(100) DEFAULT NULL,
  `experience` int(11) DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `designation` varchar(50) DEFAULT NULL,
  `sector` varchar(50) DEFAULT NULL,
  `photo` longblob,
  `lang1` varchar(50) DEFAULT NULL,
  `lang2` varchar(50) DEFAULT NULL,
  `lang3` varchar(50) DEFAULT NULL,
  `skill1` varchar(50) DEFAULT NULL,
  `skill2` varchar(50) DEFAULT NULL,
  `skill3` varchar(50) DEFAULT NULL,
  `qual1` varchar(100) DEFAULT NULL,
  `qual2` varchar(100) DEFAULT NULL,
  `spec1` varchar(100) DEFAULT NULL,
  `spec2` varchar(100) DEFAULT NULL,
  `yop1` int(11) DEFAULT NULL,
  `yop2` int(11) DEFAULT NULL,
  `inst1` varchar(100) DEFAULT NULL,
  `inst2` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `FirstName` (`FirstName`),
  UNIQUE KEY `Email` (`Email`),
  UNIQUE KEY `number` (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobseeker`
--

INSERT INTO `jobseeker` (`FirstName`, `LastName`, `Email`, `username`, `password`, `dob`, `location`, `number`, `nationality`, `gender`, `address`, `JobType`, `experience`, `salary`, `designation`, `sector`, `photo`, `lang1`, `lang2`, `lang3`, `skill1`, `skill2`, `skill3`, `qual1`, `qual2`, `spec1`, `spec2`, `yop1`, `yop2`, `inst1`, `inst2`) VALUES
('Surya', 'Prasad', 'surya.prasad.7500@gmail.com', 'suryaprasad7500', '1b9cccdc13ceac5aa6e65ff0999cfc3a', '1992-10-12', 'Vijayawada', 2147483647, 'India', 'male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Fname', 'Lname', 'email@gmail.com', 'userone', 'a7689071ed44d52b6ee48923f2d2854e', '1992-10-12', 'India', 1234567890, 'India', 'male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `job`
--
ALTER TABLE `job`
  ADD CONSTRAINT `job_ibfk_1` FOREIGN KEY (`company`) REFERENCES `company` (`name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
