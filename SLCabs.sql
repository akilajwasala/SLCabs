-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2015 at 07:08 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sl`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `contactID` int(20) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `message` varchar(30) NOT NULL,
  PRIMARY KEY (`contactID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `customerdetails`
--

CREATE TABLE IF NOT EXISTS `customerdetails` (
  `customerID` int(20) NOT NULL AUTO_INCREMENT,
  `fullName` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `passportNo` varchar(20) NOT NULL,
  `contactNo` int(20) NOT NULL,
  `fax` int(20) NOT NULL,
  `comments` varchar(20) NOT NULL,
  PRIMARY KEY (`customerID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `customerdetails`
--

INSERT INTO `customerdetails` (`customerID`, `fullName`, `email`, `country`, `passportNo`, `contactNo`, `fax`, `comments`) VALUES
(25, 'Akila wasala', 'akilajwasala@gmail.c', 'Sri Lanka', '922884056', 713943434, 2345678, 'Samaple'),
(26, 'Sumith Kumara', 'sumi@gmail.com', 'Sri Lanka', '3456789', 34567890, 799778, 'Fast'),
(27, 'Mihiran', 'mihira@yahoo.com', 'England', '4567', 34567, 33566, 'Final'),
(28, 'Chamod', 'chamod@gmail.com', 'Pakistan', '8898547', 8554335, 2147483647, 'Awesome');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `PaymentId` int(11) NOT NULL AUTO_INCREMENT,
  `ReservationID` int(11) NOT NULL,
  `DropOffDate` date NOT NULL,
  `DropOffTime` time NOT NULL,
  `GrossCost` float NOT NULL,
  `AdditionalCost` float DEFAULT NULL,
  `NetCost` float NOT NULL,
  PRIMARY KEY (`PaymentId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `registered_customer`
--

CREATE TABLE IF NOT EXISTS `registered_customer` (
  `CustomerID` int(11) NOT NULL,
  `CustomerEmail` varchar(60) NOT NULL,
  `CustomerPassword` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `reservationID` int(20) NOT NULL AUTO_INCREMENT,
  `customerID` int(20) NOT NULL,
  `vehicleID` int(20) NOT NULL,
  `pickUpDate` date NOT NULL,
  `pickUpTime` time NOT NULL,
  `dropOffDate` date NOT NULL,
  `dropOffTime` time NOT NULL,
  `noOfPassengers` int(10) NOT NULL,
  `needADriver` tinyint(1) NOT NULL,
  `pickupLocation` varchar(20) NOT NULL,
  `dropOffLocation` varchar(20) NOT NULL,
  PRIMARY KEY (`reservationID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `vehicledetails`
--

CREATE TABLE IF NOT EXISTS `vehicledetails` (
  `vehicleID` int(20) NOT NULL AUTO_INCREMENT,
  `vehicleName` varchar(20) NOT NULL,
  `vehicleType` varchar(20) NOT NULL,
  `registrationNo` varchar(20) NOT NULL,
  `seatingCapacity` int(10) NOT NULL,
  `engineCapacity` varchar(10) NOT NULL,
  `vehicleOptions` varchar(10) NOT NULL,
  `for1Week` int(10) NOT NULL,
  `for2WeeksOrMore` int(10) NOT NULL,
  `mileageLimitaion` int(10) NOT NULL,
  `excessMileage` int(10) NOT NULL,
  PRIMARY KEY (`vehicleID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
