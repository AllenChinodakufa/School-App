-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2020 at 06:58 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `4.1`
--

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `SUBJECT_ID` int(11) NOT NULL,
  `SUBJECT_CODE` varchar(30) NOT NULL,
  `SUBJECT_DESCRIPTION` varchar(255) NOT NULL,
  `COURSE_ID` int(11) NOT NULL,
  `LEVEL` text NOT NULL,
  `SECTIONID` int(11) NOT NULL,
  `TERM` varchar(20) NOT NULL,
  `CURRICULUM` varchar(90) NOT NULL DEFAULT 'New Curriculum'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`SUBJECT_ID`, `SUBJECT_CODE`, `SUBJECT_DESCRIPTION`, `COURSE_ID`, `LEVEL`, `SECTIONID`, `TERM`, `CURRICULUM`) VALUES
(1, '9188', 'PHYSICS', 1, 'A LEVEL', 1, '1', 'New Curriculum'),
(2, '9195', 'COMPUTER SCIENCE', 2, 'A LEVEL', 2, '1', 'New Curriculum');

-- --------------------------------------------------------

--
-- Table structure for table `tblannouncements`
--

CREATE TABLE `tblannouncements` (
  `ANNOUNCEMENT_ID` int(11) NOT NULL,
  `ANNOUNCEMENT_TEXT` varchar(255) DEFAULT NULL,
  `ANNOUNCEMENT_WHAT` text,
  `DATEPOSTED` datetime DEFAULT NULL,
  `AUTHOR` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblchats`
--

CREATE TABLE `tblchats` (
  `ID` int(11) NOT NULL,
  `AUTHOR` varchar(255) DEFAULT NULL,
  `RECEIPIENT` varchar(255) NOT NULL DEFAULT 'Admin',
  `MESSAGE` text,
  `DATESENT` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblcontact`
--

CREATE TABLE `tblcontact` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `subject` varchar(20) DEFAULT NULL,
  `message` text,
  `datesent` int(11) NOT NULL,
  `markAsread` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcontact`
--

INSERT INTO `tblcontact` (`id`, `fname`, `lname`, `email`, `subject`, `message`, `datesent`, `markAsread`) VALUES
(6, 'Allen', 'Chinodakufa', 'allenchinodakufa7@gmail.com', 'Thanks', 'Well received thanks', 1587969597, 'read'),
(7, 'Allen', 'Chinodakufa', 'allenchinodakufa7@gmail.com', 'Thanks', 'Well received thanks', 1587969657, 'unread'),
(8, 'Allen', 'Chinodakufa', 'allenchinodakufa7@gmail.com', 'Thanks', 'Well received thanks', 1587972193, 'read'),
(9, 'Allen', 'Chinodakufa', 'allenchinodakufa7@gmail.com', 'Thanks', 'Well received thanks', 1587972250, NULL),
(10, 'Allen', 'Chinodakufa', 'allenchinodakufa7@gmail.com', 'Thanks', 'Well received thanks', 1587972297, NULL),
(11, 'Allen', 'Chinodakufa', 'allenchinodakufa7@gmail.com', 'Thanks', 'Well received thanks', 1587972309, NULL),
(12, 'Allen', 'Chinodakufa', 'allenchinodakufa7@gmail.com', 'Thanks', 'Well received thanks', 1587972359, NULL),
(13, 'Allen', 'Chinodakufa', 'allenchinodakufa7@gmail.com', 'Thanks', 'Well received thanks', 1587972405, NULL),
(14, 'Allen', 'Chinodakufa', 'allenchinodakufa7@gmail.com', 'Thanks', 'Well received thanks', 1587972413, NULL),
(15, 'Allen', 'Chinodakufa', 'allenchinodakufa7@gmail.com', 'Thanks', 'Well received thanks', 1587972439, NULL),
(16, 'Allen', 'Chinodakufa', 'allenchinodakufa7@gmail.com', 'Thanks', 'Well received thanks', 1587972458, NULL),
(17, 'Allen', 'Chinodakufa', 'allenchinodakufa7@gmail.com', 'Thanks', 'Well received thanks', 1587972479, NULL),
(18, 'Allen', 'Chinodakufa', 'allenchinodakufa7@gmail.com', 'Thanks', 'Well received thanks', 1587972497, NULL),
(19, 'Allen', 'Chinodakufa', 'allenchinodakufa7@gmail.com', 'Thanks', 'Well received thanks', 1587972525, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbllogs`
--

CREATE TABLE `tbllogs` (
  `logID` int(11) NOT NULL,
  `userID` int(11) DEFAULT NULL,
  `loggedTime` int(11) DEFAULT NULL,
  `userName` varchar(255) DEFAULT NULL,
  `logRole` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbllogs`
--

INSERT INTO `tbllogs` (`logID`, `userID`, `loggedTime`, `userName`, `logRole`) VALUES
(1, 1, 1589221937, 'Allen Chinodakufa', 'Logged In');

-- --------------------------------------------------------

--
-- Table structure for table `tblpayemets`
--

CREATE TABLE `tblpayemets` (
  `id` int(11) NOT NULL,
  `students_name` varchar(50) DEFAULT NULL,
  `parents_name` varchar(50) DEFAULT NULL,
  `parents_phone` int(11) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `currency` varchar(100) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `datePayed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpayemets`
--

INSERT INTO `tblpayemets` (`id`, `students_name`, `parents_name`, `parents_phone`, `address`, `country`, `currency`, `amount`, `datePayed`) VALUES
(1, 'Allen Chinodakufa', 'Onesimo Chinodakufa', 774016947, 'Plot 45 Glenlivet', 'Zimbabwe', 'rtgs', 89, 1587993522),
(2, 'Allen Chinodakufa', 'Onesimo Chinodakufa', 774016947, 'Plot 45 Glenlivet', 'Zimbabwe', 'rtgs', 89, 1587993541);

-- --------------------------------------------------------

--
-- Table structure for table `tblstudents`
--

CREATE TABLE `tblstudents` (
  `STUDENT_ID` int(11) NOT NULL,
  `FIRSTNAME` varchar(255) DEFAULT NULL,
  `LASTNAME` varchar(255) DEFAULT NULL,
  `USERNAME` varchar(255) DEFAULT NULL,
  `SEX` varchar(8) DEFAULT NULL,
  `BDAY` date DEFAULT NULL,
  `AGE` int(11) DEFAULT NULL,
  `NATIONALITY` text,
  `RELIGION` text,
  `HOME_ADDRESS` text,
  `ACCOUNT_TYPE` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstudents`
--

INSERT INTO `tblstudents` (`STUDENT_ID`, `FIRSTNAME`, `LASTNAME`, `USERNAME`, `SEX`, `BDAY`, `AGE`, `NATIONALITY`, `RELIGION`, `HOME_ADDRESS`, `ACCOUNT_TYPE`) VALUES
(1, 'Allen', 'Chinodakufa', 'Allen Chinodakufa', 'Male', '2002-06-17', 17, 'Zimbabwe', 'Christian', 'Plot 45 Glenlivet', 'Student'),
(3, 'Allen', 'Chinodakufa', 'Allen Chinodakufa', 'male', '2002-06-17', 18, 'Zimbabwe', 'Christianity', 'Plot 45 Glenlivet', 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `tblstudentsubjects`
--

CREATE TABLE `tblstudentsubjects` (
  `STUDENT_ID` int(11) NOT NULL,
  `SUBJECT_ID` int(11) DEFAULT NULL,
  `SUBJECT_NAME` varchar(255) DEFAULT NULL,
  `STUDENTS_NAME` varchar(255) NOT NULL,
  `SUBJECT_IMAGE_URL` text,
  `SUBJECT_ICON` varchar(30) DEFAULT NULL,
  `CURRICULUM` varchar(255) DEFAULT NULL,
  `DATEPOSTED` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstudentsubjects`
--

INSERT INTO `tblstudentsubjects` (`STUDENT_ID`, `SUBJECT_ID`, `SUBJECT_NAME`, `STUDENTS_NAME`, `SUBJECT_IMAGE_URL`, `SUBJECT_ICON`, `CURRICULUM`, `DATEPOSTED`) VALUES
(1, 1, 'PHYSICS', 'Allen Chinodakufa', NULL, 'icon-grav', 'New Curriculum', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblteachers`
--

CREATE TABLE `tblteachers` (
  `TEACHERS_ID` int(11) NOT NULL,
  `FIRSTNAME` varchar(255) DEFAULT NULL,
  `LASTNAME` varchar(255) DEFAULT NULL,
  `USERNAME` varchar(255) DEFAULT NULL,
  `IMAGEURL` text,
  `PHONE` varchar(255) DEFAULT NULL,
  `SEX` varchar(10) DEFAULT NULL,
  `DEPARTMENT` text NOT NULL,
  `PASSWORD` varchar(16) DEFAULT NULL,
  `ACCOUNT_TYPE` varchar(255) DEFAULT NULL,
  `DATEADDED` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `useraccounts`
--

CREATE TABLE `useraccounts` (
  `ACCOUNT_ID` int(11) NOT NULL,
  `ACCOUNT_NAME` varchar(255) NOT NULL,
  `ACCOUNT_USERNAME` varchar(255) NOT NULL,
  `ACCOUNT_PASSWORD` text NOT NULL,
  `ACCOUNT_TYPE` varchar(30) NOT NULL,
  `POSITION` varchar(90) NOT NULL,
  `USERIMAGE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useraccounts`
--

INSERT INTO `useraccounts` (`ACCOUNT_ID`, `ACCOUNT_NAME`, `ACCOUNT_USERNAME`, `ACCOUNT_PASSWORD`, `ACCOUNT_TYPE`, `POSITION`, `USERIMAGE`) VALUES
(1, 'Allen Chinodakufa', 'Allen Chinodakufa', 'zkpb59131', 'Student', '', ''),
(2, 'admin', 'admin', 'Test@12345', 'Admin', 'Admin', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`SUBJECT_ID`);

--
-- Indexes for table `tblannouncements`
--
ALTER TABLE `tblannouncements`
  ADD PRIMARY KEY (`ANNOUNCEMENT_ID`);

--
-- Indexes for table `tblchats`
--
ALTER TABLE `tblchats`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcontact`
--
ALTER TABLE `tblcontact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbllogs`
--
ALTER TABLE `tbllogs`
  ADD PRIMARY KEY (`logID`);

--
-- Indexes for table `tblpayemets`
--
ALTER TABLE `tblpayemets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblstudents`
--
ALTER TABLE `tblstudents`
  ADD PRIMARY KEY (`STUDENT_ID`);

--
-- Indexes for table `tblstudentsubjects`
--
ALTER TABLE `tblstudentsubjects`
  ADD PRIMARY KEY (`STUDENT_ID`);

--
-- Indexes for table `tblteachers`
--
ALTER TABLE `tblteachers`
  ADD PRIMARY KEY (`TEACHERS_ID`);

--
-- Indexes for table `useraccounts`
--
ALTER TABLE `useraccounts`
  ADD PRIMARY KEY (`ACCOUNT_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `SUBJECT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblannouncements`
--
ALTER TABLE `tblannouncements`
  MODIFY `ANNOUNCEMENT_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblchats`
--
ALTER TABLE `tblchats`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblcontact`
--
ALTER TABLE `tblcontact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbllogs`
--
ALTER TABLE `tbllogs`
  MODIFY `logID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblpayemets`
--
ALTER TABLE `tblpayemets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblstudents`
--
ALTER TABLE `tblstudents`
  MODIFY `STUDENT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblstudentsubjects`
--
ALTER TABLE `tblstudentsubjects`
  MODIFY `STUDENT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblteachers`
--
ALTER TABLE `tblteachers`
  MODIFY `TEACHERS_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `useraccounts`
--
ALTER TABLE `useraccounts`
  MODIFY `ACCOUNT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
