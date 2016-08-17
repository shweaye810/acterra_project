-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 17, 2016 at 07:23 PM
-- Server version: 5.1.57
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `a5833562_grass`
--

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` text NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `location`
--

INSERT INTO `location` VALUES(1, 'Arastradero');
INSERT INTO `location` VALUES(2, 'Bay Trail/Cooley Landing');
INSERT INTO `location` VALUES(3, 'East Palo Alto Baylands');
INSERT INTO `location` VALUES(4, 'Foothills');
INSERT INTO `location` VALUES(5, 'Hawthorns - MROSD Site');
INSERT INTO `location` VALUES(6, 'Los Altos Hills:Bryne, Juan Prado Mesa, O''Keefe');
INSERT INTO `location` VALUES(7, 'McClellan/Blackberry');
INSERT INTO `location` VALUES(8, 'Nursery');
INSERT INTO `location` VALUES(9, 'Permanente Creek');
INSERT INTO `location` VALUES(10, 'Redwood Grove');
INSERT INTO `location` VALUES(11, 'Russian Ridge - MROSD Site');
INSERT INTO `location` VALUES(12, 'San Francisquito/ Matadero Creek');
INSERT INTO `location` VALUES(13, 'Stulsaft Park');
INSERT INTO `location` VALUES(14, 'Watershed Education');

-- --------------------------------------------------------

--
-- Table structure for table `PhotoURLs`
--

CREATE TABLE `PhotoURLs` (
  `PhotoId` int(11) NOT NULL AUTO_INCREMENT,
  `EventId` int(11) NOT NULL,
  `URL` text NOT NULL,
  `Data` int(11) NOT NULL,
  `LocationCoordinates` int(11) NOT NULL,
  `Tag1` text NOT NULL,
  `Tag2` text NOT NULL,
  `Tag3` text NOT NULL,
  PRIMARY KEY (`PhotoId`,`EventId`),
  UNIQUE KEY `EventId` (`EventId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `PhotoURLs`
--


-- --------------------------------------------------------

--
-- Table structure for table `site_data`
--

CREATE TABLE `site_data` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `location` varchar(128) NOT NULL,
  `event_type` varchar(128) NOT NULL,
  `event_name` varchar(128) NOT NULL,
  `organization_name` varchar(128) DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `youth` int(11) DEFAULT NULL,
  `adult` int(11) DEFAULT NULL,
  `total_volunteers` int(11) DEFAULT NULL,
  `plants_installed` int(11) DEFAULT NULL,
  `area_weeded` int(11) DEFAULT NULL,
  `creek_cleared` int(11) DEFAULT NULL,
  `trash_removed` int(11) DEFAULT NULL,
  `recycled` int(11) DEFAULT NULL,
  `comment` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `site_data`
--

INSERT INTO `site_data` VALUES(30, '2016-08-17', 'Bay Trail/Cooley Landing', 'educational', 'Werk werk', 'Sfsuu', 8, 0, 1, 1, 0, 0, 0, 0, 0, '');
INSERT INTO `site_data` VALUES(29, '2016-08-03', 'Hawthorns - MROSD Site', 'citizen science', 'tht', 'tnhtns', 0, 2, 2, 4, 0, 0, 0, 0, 0, 'tnshtnhtn thtnshtnsh');
INSERT INTO `site_data` VALUES(27, '2016-08-18', 'Bay Trail/Cooley Landing', 'workday', 'Qwe', 'Qwe', 3, 0, 0, 0, 0, 0, 0, 0, 0, '');
INSERT INTO `site_data` VALUES(28, '2016-08-03', 'Hawthorns - MROSD Site', 'citizen science', 'tht', 'tnhtns', 0, 2, 2, 4, 0, 0, 0, 0, 0, 'tnshtnhtn thtnshtnsh');
INSERT INTO `site_data` VALUES(26, '2016-08-02', 'Bay Trail/Cooley Landing', 'educational', 'asd', 'asd', 1, 0, 0, 0, 0, 0, 0, 0, 0, '');
INSERT INTO `site_data` VALUES(25, '2016-08-18', 'Foothills', 'educational', 'Lawn ', 'Sfsu', 100, 0, 1, 1, 0, 0, 0, 0, 0, 'Grass everywhere');
INSERT INTO `site_data` VALUES(24, '2016-08-18', 'Arastradero', 'workday', 'does this work', 'yes', 1, 2, 0, 2, 0, 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `TypeOfEvent`
--

CREATE TABLE `TypeOfEvent` (
  `typeID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` text NOT NULL,
  PRIMARY KEY (`typeID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `TypeOfEvent`
--

INSERT INTO `TypeOfEvent` VALUES(1, 'workday');
INSERT INTO `TypeOfEvent` VALUES(2, 'educational');
INSERT INTO `TypeOfEvent` VALUES(3, 'citizen science');

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `username` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `User`
--

INSERT INTO `User` VALUES(1, 'mrrobot', 'canttouchthis');
INSERT INTO `User` VALUES(2, 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `VolunteerEvent`
--

CREATE TABLE `VolunteerEvent` (
  `EventID` int(11) NOT NULL AUTO_INCREMENT,
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
  `Note` text,
  PRIMARY KEY (`EventID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `VolunteerEvent`
--