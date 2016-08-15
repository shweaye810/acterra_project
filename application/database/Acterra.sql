-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2016 at 07:08 PM
-- Server version: 5.6.30
-- PHP Version: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Acterra`
--

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `Name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`Name`) VALUES
('	Foothills'),
('	Nursery'),
('	Stulsaft'),
('Arastradero'),
('Bay Trail/Cooley Landing'),
('Los Altos Hills: Byrne, Juan Prado Mesa, O''Keefe'),
('McClellan/Blackberry'),
('MROSD Sites: Hawthorns, Russian Ridge'),
('Permanente Creek'),
('Redwood Grove'),
('SF'),
('Watershed Education');

-- --------------------------------------------------------

--
-- Table structure for table `PhotoURLs`
--

CREATE TABLE IF NOT EXISTS `PhotoURLs` (
  `PhotoId` int(11) NOT NULL,
  `EventId` int(11) NOT NULL,
  `URL` text NOT NULL,
  `Data` int(11) NOT NULL,
  `LocationCoordinates` int(11) NOT NULL,
  `Tag1` text NOT NULL,
  `Tag2` text NOT NULL,
  `Tag3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `site_data`
--

CREATE TABLE IF NOT EXISTS `site_data` (
  `date` date NOT NULL,
  `location` varchar(128) NOT NULL,
  `event_type` varchar(128) NOT NULL,
  `event_name` varchar(128) NOT NULL,
  `organization_name` varchar(128) DEFAULT NULL,
  `youth` int(11) DEFAULT NULL,
  `adult` int(11) DEFAULT NULL,
  `duration` int(11) NOT NULL,
  `area_weeded` int(11) DEFAULT NULL,
  `creek_cleared` int(11) DEFAULT NULL,
  `trash_removed` int(11) DEFAULT NULL,
  `recycled` int(11) DEFAULT NULL,
  `comment` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_data`
--

INSERT INTO `site_data` (`date`, `location`, `event_type`, `event_name`, `organization_name`, `youth`, `adult`, `duration`, `area_weeded`, `creek_cleared`, `trash_removed`, `recycled`, `comment`) VALUES
('0000-00-00', '	Stulsaft', 'educational', 'htsh', 'htsh', NULL, 2, 2, 0, 0, 0, 0, ''),
('0000-00-00', 'Bay Trail/Cooley Landing', 'citizen science', 'thsn', 'thtns', NULL, 3, 4, 0, 0, 0, 0, ''),
('0000-00-00', 'Bay Trail/Cooley Landing', 'citizen science', 'thsn', 'thtns', NULL, 3, 4, 0, 0, 0, 0, ''),
('2016-08-03', 'Arastradero', 'educational', 'thht', 'nsh', NULL, 3, 15, 0, 0, 0, 0, ''),
('2016-08-02', '	Nursery', 'citizen science', 'tnhn', 'th', NULL, 3, 2, 3, 3, 0, 0, ''),
('2016-08-02', '	Nursery', 'citizen science', 'tnhn', 'th', 2, 3, 2, 3, 3, 0, 0, ''),
('2016-08-02', '	Nursery', 'citizen science', 'tnhn', 'th', 2, 3, 2, 3, 3, 0, 0, ''),
('2016-08-02', '	Nursery', 'citizen science', 'tnhn', 'th', 2, 3, 2, 3, 3, 0, 0, ''),
('2016-08-03', '	Stulsaft', 'workday', 'htnsh', 'htns', 2, 2, 2, 0, 0, 0, 0, 'htnshtn');

-- --------------------------------------------------------

--
-- Table structure for table `TypeOfEvent`
--

CREATE TABLE IF NOT EXISTS `TypeOfEvent` (
  `Name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `TypeOfEvent`
--

INSERT INTO `TypeOfEvent` (`Name`) VALUES
('citizen science'),
('educational'),
('workday');

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE IF NOT EXISTS `User` (
  `id` int(2) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`id`, `username`, `password`) VALUES
(1, 'mrrobot', 'canttouchthis'),
(2, 'test', 'test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`Name`),
  ADD UNIQUE KEY `Name` (`Name`);

--
-- Indexes for table `PhotoURLs`
--
ALTER TABLE `PhotoURLs`
  ADD PRIMARY KEY (`PhotoId`,`EventId`),
  ADD UNIQUE KEY `EventId` (`EventId`);

--
-- Indexes for table `site_data`
--
ALTER TABLE `site_data`
  ADD KEY `date` (`date`);

--
-- Indexes for table `TypeOfEvent`
--
ALTER TABLE `TypeOfEvent`
  ADD PRIMARY KEY (`Name`),
  ADD UNIQUE KEY `Name` (`Name`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
