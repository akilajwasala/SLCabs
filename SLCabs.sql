-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 19, 2015 at 08:22 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `SLCabs`
--

-- --------------------------------------------------------

--
-- Table structure for table `CustomerDetails`
--

CREATE TABLE IF NOT EXISTS `CustomerDetails` (
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
-- Dumping data for table `CustomerDetails`
--

INSERT INTO `CustomerDetails` (`customerID`, `fullName`, `email`, `country`, `passportNo`, `contactNo`, `fax`, `comments`) VALUES
(25, 'Akila wasala', 'akilajwasala@gmail.c', 'Sri Lanka', '922884056', 713943434, 2345678, 'Samaple'),
(26, 'Sumith Kumara', 'sumi@gmail.com', 'Sri Lanka', '3456789', 34567890, 799778, 'Fast'),
(27, 'Mihiran', 'mihira@yahoo.com', 'England', '4567', 34567, 33566, 'Final'),
(28, 'Chamod', 'chamod@gmail.com', 'Pakistan', '8898547', 8554335, 2147483647, 'Awesome');

-- --------------------------------------------------------

--
-- Table structure for table `Reservation`
--

CREATE TABLE IF NOT EXISTS `Reservation` (
  `reservationID` int(10) NOT NULL,
  `vehicleID` int(10) NOT NULL,
  `pickUpDate` date NOT NULL,
  `pickUpTime` int(10) NOT NULL,
  `dropOffDate` date NOT NULL,
  `dropOffTime` int(10) NOT NULL,
  `noOfPassengers` int(10) NOT NULL,
  `needADriver` tinyint(1) NOT NULL,
  `pickupLocation` varchar(20) NOT NULL,
  `dropOffLocation` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `VehicleDetails`
--

CREATE TABLE IF NOT EXISTS `VehicleDetails` (
  `vehicleID` int(20) NOT NULL,
  `vehicleName` varchar(20) NOT NULL,
  `vehicleType` varchar(20) NOT NULL,
  `seatingCapacity` int(10) NOT NULL,
  `engineCapacity` varchar(10) NOT NULL,
  `vehicleOptions` varchar(10) NOT NULL,
  `for1Week` int(10) NOT NULL,
  `for2WeeksOrMore` int(10) NOT NULL,
  `mileageLimitaion` int(10) NOT NULL,
  `excessMileage` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `CustomerDetails`
--
ALTER TABLE `CustomerDetails`
 ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `VehicleDetails`
--
ALTER TABLE `VehicleDetails`
 ADD PRIMARY KEY (`vehicleID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `CustomerDetails`
--
ALTER TABLE `CustomerDetails`
MODIFY `customerID` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
