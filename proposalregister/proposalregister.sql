-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2015 at 01:57 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `proposalregister`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `A_ID` varchar(10) NOT NULL,
  `A_Password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

CREATE TABLE IF NOT EXISTS `club` (
  `C_ID` varchar(10) NOT NULL,
  `C_Name` varchar(50) NOT NULL,
  `C_Desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `proposal`
--

CREATE TABLE IF NOT EXISTS `proposal` (
  `P_ID` varchar(10) NOT NULL,
  `P_Name` varchar(50) NOT NULL,
  `P_Location` text NOT NULL,
  `P_Date` date NOT NULL,
  `P_Budget` float NOT NULL,
  `P_Participant` int(11) NOT NULL,
  `P_Description` text NOT NULL,
  `P_Status` enum('KIV','PASS','FAIL','') NOT NULL,
  `P_ProjectLeader` varchar(50) NOT NULL,
  `Stu_ID` varchar(10) NOT NULL,
  `A_ID` varchar(10) NOT NULL,
  `C_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `Sta_ID` varchar(10) NOT NULL,
  `Sta_Name` varchar(50) NOT NULL,
  `Sta_Department` varchar(50) NOT NULL,
  `Sta_Position` varchar(50) NOT NULL,
  `Sta_Password` varchar(16) NOT NULL,
  `C_ID` varchar(10) NOT NULL,
  `P_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `Stu_ID` varchar(10) NOT NULL COMMENT 'student''s matric number',
  `Stu_Name` varchar(50) NOT NULL,
  `Stu_Course` varchar(5) NOT NULL,
  `Stu_Part` int(11) NOT NULL,
  `Stu_PhoneNo` int(11) NOT NULL,
  `Stu_Password` varchar(16) NOT NULL,
  `Stu_Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_club`
--

CREATE TABLE IF NOT EXISTS `student_club` (
  `Stu_ID` varchar(10) NOT NULL,
  `C_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`A_ID`), ADD UNIQUE KEY `A_ID` (`A_ID`,`A_Password`);

--
-- Indexes for table `club`
--
ALTER TABLE `club`
 ADD PRIMARY KEY (`C_ID`);

--
-- Indexes for table `proposal`
--
ALTER TABLE `proposal`
 ADD PRIMARY KEY (`P_ID`,`Stu_ID`,`A_ID`,`C_ID`), ADD UNIQUE KEY `P_ID` (`P_ID`,`Stu_ID`,`A_ID`,`C_ID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
 ADD PRIMARY KEY (`Sta_ID`,`C_ID`,`P_ID`), ADD UNIQUE KEY `Sta_ID` (`Sta_ID`,`C_ID`,`P_ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
 ADD PRIMARY KEY (`Stu_ID`);

--
-- Indexes for table `student_club`
--
ALTER TABLE `student_club`
 ADD PRIMARY KEY (`Stu_ID`,`C_ID`), ADD UNIQUE KEY `Stu_ID` (`Stu_ID`), ADD UNIQUE KEY `C_ID` (`C_ID`), ADD UNIQUE KEY `Stu_ID_2` (`Stu_ID`,`C_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
