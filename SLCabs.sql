-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2015 at 12:37 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `slcabs`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE IF NOT EXISTS `administrator` (
  `admin_email` varchar(60) NOT NULL,
  `admin_password` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`admin_email`, `admin_password`) VALUES
('admin@slcabs.lk', '$2y$10$OB.UgQHhMWkVE9qZ7MV2J.oIwY.lwkwLHh0bFUNGZRYOcOc2sHlAq');

-- --------------------------------------------------------

--
-- Table structure for table `customerdetails`
--

CREATE TABLE IF NOT EXISTS `customerdetails` (
  `customerID` int(20) NOT NULL,
  `fullName` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `passportNo` varchar(20) NOT NULL,
  `contactNo` int(20) NOT NULL,
  `fax` int(20) NOT NULL,
  `comments` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

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
  `PaymentId` int(20) NOT NULL,
  `ReservationID` int(20) NOT NULL,
  `DropOffDate` date NOT NULL,
  `DropOffTime` time NOT NULL,
  `GrossCost` float NOT NULL,
  `AdditionalCost` float DEFAULT NULL,
  `NetCost` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registered_customer`
--

CREATE TABLE IF NOT EXISTS `registered_customer` (
  `CustomerID` int(20) NOT NULL,
  `CustomerEmail` varchar(60) NOT NULL,
  `CustomerPassword` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `reservationID` int(20) NOT NULL,
  `customerID` int(20) NOT NULL,
  `vehicleID` int(20) NOT NULL,
  `pickUpDate` date NOT NULL,
  `pickUpTime` time NOT NULL,
  `dropOffDate` date NOT NULL,
  `dropOffTime` time NOT NULL,
  `noOfPassengers` int(10) NOT NULL,
  `needADriver` tinyint(1) NOT NULL,
  `pickupLocation` varchar(20) NOT NULL,
  `dropOffLocation` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vehicledetails`
--

CREATE TABLE IF NOT EXISTS `vehicledetails` (
  `vehicleID` int(20) NOT NULL,
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
  `photo` varchar(100) DEFAULT NULL,
  `phototype` varchar(10) DEFAULT NULL,
  `photosize` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`admin_email`);

--
-- Indexes for table `customerdetails`
--
ALTER TABLE `customerdetails`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`PaymentId`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservationID`);

--
-- Indexes for table `vehicledetails`
--
ALTER TABLE `vehicledetails`
  ADD PRIMARY KEY (`vehicleID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customerdetails`
--
ALTER TABLE `customerdetails`
  MODIFY `customerID` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `PaymentId` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservationID` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vehicledetails`
--
ALTER TABLE `vehicledetails`
  MODIFY `vehicleID` int(20) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
