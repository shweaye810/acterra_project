-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 07, 2016 at 01:27 AM
-- Server version: 5.5.42
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Acterra`
--

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `ID` int(11) NOT NULL,
  `Name` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`ID`, `Name`) VALUES
(1, 'Arastradero'),
(2, 'Bay Trail/Cooley Landing'),
(3, '	Foothills'),
(4, 'Los Altos Hills: Byrne, Juan Prado Mesa, O''Keefe'),
(5, 'MROSD Sites: Hawthorns, Russian Ridge'),
(6, 'McClellan/Blackberry'),
(7, '	Nursery'),
(8, 'Permanente Creek'),
(9, 'Redwood Grove'),
(10, 'SF'),
(11, '	Stulsaft'),
(12, 'Watershed Education');

-- --------------------------------------------------------

--
-- Table structure for table `PhotoURLs`
--

CREATE TABLE `PhotoURLs` (
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
-- Table structure for table `TypeOfEvent`
--

CREATE TABLE `TypeOfEvent` (
  `typeID` int(11) NOT NULL,
  `Name` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `TypeOfEvent`
--

INSERT INTO `TypeOfEvent` (`typeID`, `Name`) VALUES
(1, 'workday'),
(2, 'educational'),
(3, 'citizen science');

-- --------------------------------------------------------

--
-- Table structure for table `VolunteerEvent`
--

CREATE TABLE `VolunteerEvent` (
  `EventID` int(11) NOT NULL,
  `YVolunteer no` int(11) DEFAULT NULL,
  `AVolunteer no` int(11) DEFAULT NULL,
  `Sq feet` int(11) DEFAULT NULL,
  `Plants planted` int(11) DEFAULT NULL,
  `Volume of Trash picked up` int(11) DEFAULT NULL,
  `Date` date NOT NULL,
  `EventTypeID` text NOT NULL,
  `LocationID` int(11) NOT NULL,
  `EventName` text,
  `Activity` text,
  `Note` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `PhotoURLs`
--
ALTER TABLE `PhotoURLs`
  ADD PRIMARY KEY (`PhotoId`,`EventId`),
  ADD UNIQUE KEY `EventId` (`EventId`);

--
-- Indexes for table `TypeOfEvent`
--
ALTER TABLE `TypeOfEvent`
  ADD PRIMARY KEY (`typeID`);

--
-- Indexes for table `VolunteerEvent`
--
ALTER TABLE `VolunteerEvent`
  ADD PRIMARY KEY (`EventID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `PhotoURLs`
--
ALTER TABLE `PhotoURLs`
  MODIFY `PhotoId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `TypeOfEvent`
--
ALTER TABLE `TypeOfEvent`
  MODIFY `typeID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `VolunteerEvent`
--
ALTER TABLE `VolunteerEvent`
  MODIFY `EventID` int(11) NOT NULL AUTO_INCREMENT;

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `id` int(2) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`id`, `username`, `password`) VALUES
(1, 'mrrobot', 'canttouchthis');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;