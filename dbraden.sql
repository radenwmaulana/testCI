-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2018 at 06:54 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbraden`
--
CREATE DATABASE IF NOT EXISTS `dbraden` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dbraden`;

-- --------------------------------------------------------

--
-- Table structure for table `tbcontact`
--

CREATE TABLE `tbcontact` (
  `contactID` int(100) NOT NULL,
  `contactDate` datetime NOT NULL,
  `contactName` varchar(100) NOT NULL,
  `contactEmail` varchar(100) NOT NULL,
  `contactSubject` varchar(100) NOT NULL,
  `contactMessage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbcontact`
--

INSERT INTO `tbcontact` (`contactID`, `contactDate`, `contactName`, `contactEmail`, `contactSubject`, `contactMessage`) VALUES
(2, '2018-03-29 06:55:24', 'adha', 'adha@daeng.com', 'me me', 'kunci rumah mana me'),
(3, '2018-03-29 08:29:35', 'raden', 'raden@gmail.com', 'lel', 'lel'),
(4, '2018-04-05 19:44:15', 'HARDWELL', 'robbert@djhardwell.com', 'Collab', 'Let\'s do some collab for a track, shall we? :)');

-- --------------------------------------------------------

--
-- Table structure for table `tbsecure`
--

CREATE TABLE `tbsecure` (
  `mycode` int(1) NOT NULL,
  `myname` varchar(50) NOT NULL,
  `myusername` varchar(50) NOT NULL,
  `mypassword` varchar(50) NOT NULL,
  `mywho` enum('Raden','Bukan Raden') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbsecure`
--

INSERT INTO `tbsecure` (`mycode`, `myname`, `myusername`, `mypassword`, `mywho`) VALUES
(1, 'Raden', 'admin', 'raden420', 'Raden');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbcontact`
--
ALTER TABLE `tbcontact`
  ADD PRIMARY KEY (`contactID`);

--
-- Indexes for table `tbsecure`
--
ALTER TABLE `tbsecure`
  ADD PRIMARY KEY (`mycode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbcontact`
--
ALTER TABLE `tbcontact`
  MODIFY `contactID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbsecure`
--
ALTER TABLE `tbsecure`
  MODIFY `mycode` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
