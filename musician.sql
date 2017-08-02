-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2017 at 07:32 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `musician`
--

-- --------------------------------------------------------

--
-- Table structure for table `musician`
--

CREATE TABLE `musician` (
  `musianid` varchar(10) NOT NULL,
  `name` varchar(32) DEFAULT NULL,
  `genre` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `musician`
--

INSERT INTO `musician` (`musianid`, `name`, `genre`) VALUES
('M1', 'Sonu Nigam', 'Bollywood'),
('M2', 'Mozart', 'Classical'),
('M3', 'Dave Brubeck', 'Jazz'),
('M4', 'Chuck Berry', 'Rock'),
('M5', 'The Chainsmokers', 'Pop');

-- --------------------------------------------------------

--
-- Table structure for table `performance`
--

CREATE TABLE `performance` (
  `perfomanceId` varchar(13) NOT NULL,
  `monthyear` date DEFAULT NULL,
  `musicianid` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `performance`
--

INSERT INTO `performance` (`perfomanceId`, `monthyear`, `musicianid`) VALUES
('P1', '2017-05-02', 'M3'),
('P2', '2017-03-17', 'M5'),
('P3', '2017-04-23', 'M1'),
('P4', '2016-03-22', 'M4'),
('P5', '2017-04-29', 'M2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `musician`
--
ALTER TABLE `musician`
  ADD PRIMARY KEY (`musianid`);

--
-- Indexes for table `performance`
--
ALTER TABLE `performance`
  ADD PRIMARY KEY (`perfomanceId`),
  ADD KEY `musicianid` (`musicianid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `performance`
--
ALTER TABLE `performance`
  ADD CONSTRAINT `performance_ibfk_1` FOREIGN KEY (`musicianid`) REFERENCES `musician` (`musianid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
