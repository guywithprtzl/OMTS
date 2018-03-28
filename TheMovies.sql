-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2018 at 01:15 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `themovies`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `accountNumber` char(10) NOT NULL,
  `loginID` varchar(25) NOT NULL,
  `streetNum` int(11) DEFAULT NULL,
  `streetName` varchar(100) DEFAULT NULL,
  `town` varchar(100) DEFAULT NULL,
  `postalCode` char(6) DEFAULT NULL,
  `email` varchar(254) DEFAULT NULL,
  `fName` varchar(50) DEFAULT NULL,
  `lName` varchar(50) DEFAULT NULL,
  `creditCardNumber` char(16) DEFAULT NULL,
  `creditCardExpiryDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`accountNumber`, `loginID`, `streetNum`, `streetName`, `town`, `postalCode`, `email`, `fName`, `lName`, `creditCardNumber`, `creditCardExpiryDate`) VALUES
('0000000000', 'Reid', 1, 'FriendlyCrescent', 'Toronto', 'K2S911', 'Reid@cus.com', 'Reid', 'Harvey', '1231231231231231', '2020-02-20'),
('1111111111', 'Brayden', 2, 'MeanCrescent', 'Ottawa', 'K2S921', 'Brayden@cus.com', 'Brayden', 'Jerkson', '9999999999999999', '2020-02-20'),
('2222222222', 'Sean', 3, 'HappyCrescent', 'NewYork', 'K7L943', 'Sean@cus.com', 'Sean', 'Thelma', '1010101010101010', '2020-02-20');

-- --------------------------------------------------------

--
-- Table structure for table `customerphonenumbers`
--

CREATE TABLE `customerphonenumbers` (
  `accountNumber` char(10) NOT NULL,
  `phoneNumber` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customerphonenumbers`
--

INSERT INTO `customerphonenumbers` (`accountNumber`, `phoneNumber`) VALUES
('0000000000', '123123123'),
('1111111111', '234234234'),
('2222222222', '456456456');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `title` varchar(100) NOT NULL,
  `runningTime` int(11) DEFAULT NULL,
  `rating` varchar(5) DEFAULT NULL,
  `synopsis` varchar(2048) DEFAULT NULL,
  `directorFName` varchar(50) DEFAULT NULL,
  `directorLName` varchar(50) DEFAULT NULL,
  `productionCompany` varchar(100) DEFAULT NULL,
  `supplierName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`title`, `runningTime`, `rating`, `synopsis`, `directorFName`, `directorLName`, `productionCompany`, `supplierName`) VALUES
('Phil 3: Still Thrillin', 125, 'R', 'The Hero Returns', 'John', 'Gibson', 'GibsonFilms', 'A-Listers-Maximum'),
('Phil The Thrill And The Great Big Hill', 120, 'R', 'A story of Perseverence', 'Mel', 'Gibson', 'GibsonFilms', 'OscarWinners'),
('Phil The Thrill And The Reckless Kill', 120, 'PG', 'When Things Go Wrong', 'Jim', 'Carry', 'JimFilms', 'MovieMakers');

-- --------------------------------------------------------

--
-- Table structure for table `moviecast`
--

CREATE TABLE `moviecast` (
  `title` varchar(50) NOT NULL,
  `fName` varchar(50) NOT NULL,
  `lName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `moviecast`
--

INSERT INTO `moviecast` (`title`, `fName`, `lName`) VALUES
('Phil 3: Still Thrillin', 'Kessel', 'Phil'),
('Phil 3: Still Thrillin', 'Tippett', 'Sean'),
('Phil The Thrill And The Great Big Hill', 'Kessel', 'Phil'),
('Phil The Thrill And The Great Big Hill', 'Lawrence', 'Jennifer'),
('Phil The Thrill And The Reckless Kill', 'Clinton', 'Hillary'),
('Phil The Thrill And The Reckless Kill', 'Kessel', 'Phil');

-- --------------------------------------------------------

--
-- Table structure for table `playingin`
--

CREATE TABLE `playingin` (
  `theaterName` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `startDate` date DEFAULT NULL,
  `endDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `playingin`
--

INSERT INTO `playingin` (`theaterName`, `title`, `startDate`, `endDate`) VALUES
('CinemaPlex', 'Phil 3: Still Thrillin', '0000-00-00', '0000-00-00'),
('CinemaPlex', 'Phil The Thrill And The Great Big Hill', '0000-00-00', '0000-00-00'),
('CinemaPlex', 'Phil The Thrill And The Reckless Kill', '0000-00-00', '0000-00-00'),
('Landmarl', 'Phil 3: Still Thrillin', '0000-00-00', '0000-00-00'),
('Landmarl', 'Phil The Thrill And The Great Big Hill', '0000-00-00', '0000-00-00'),
('Landmarl', 'Phil The Thrill And The Reckless Kill', '0000-00-00', '0000-00-00'),
('SilverCity', 'Phil 3: Still Thrillin', '0000-00-00', '0000-00-00'),
('SilverCity', 'Phil The Thrill And The Great Big Hill', '0000-00-00', '0000-00-00'),
('SilverCity', 'Phil The Thrill And The Reckless Kill', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `ticketsReserved` int(11) DEFAULT NULL,
  `startTime` time NOT NULL,
  `theaterNumber` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `theaterName` varchar(100) NOT NULL,
  `accountNumber` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`ticketsReserved`, `startTime`, `theaterNumber`, `title`, `theaterName`, `accountNumber`) VALUES
(2, '02:00:00', 10, 'Phil 3: Still Thrillin', 'CinemaPlex', '0000000000'),
(1, '03:00:00', 21, 'Phil The Thrill And The Reckless Kill', 'Landmarl', '1111111111'),
(2, '04:00:00', 32, 'Phil 3: Still Thrillin', 'SilverCity', '2222222222');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `movieTitle` varchar(100) NOT NULL,
  `content` varchar(2048) DEFAULT NULL,
  `accountNumber` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`movieTitle`, `content`, `accountNumber`) VALUES
('Phil 3: Still Thrillin', 'Phil gets down and dirty in this thrilling conclusion to the greatest romance/action trilogy of all time! 5/7', '2222222222'),
('Phil The Thrill And The Great Big Hill', 'That was a really BIG hill!', '0000000000'),
('Phil The Thrill And The Reckless Kill', 'That was not as reckless as advertised', '1111111111');

-- --------------------------------------------------------

--
-- Table structure for table `showing`
--

CREATE TABLE `showing` (
  `startTime` time NOT NULL,
  `seatsAvailable` int(11) DEFAULT NULL,
  `theaterNumber` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `theaterName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `showing`
--

INSERT INTO `showing` (`startTime`, `seatsAvailable`, `theaterNumber`, `title`, `theaterName`) VALUES
('01:00:00', 100, 10, 'Phil 3: Still Thrillin', 'CinemaPlex'),
('02:00:00', 100, 10, 'Phil 3: Still Thrillin', 'CinemaPlex'),
('02:00:00', 100, 10, 'Phil The Thrill And The Great Big Hill', 'CinemaPlex'),
('02:00:00', 100, 20, 'Phil The Thrill And The Great Big Hill', 'Landmarl'),
('02:00:00', 100, 30, 'Phil The Thrill And The Great Big Hill', 'SilverCity'),
('03:00:00', 100, 11, 'Phil The Thrill And The Reckless Kill', 'CinemaPlex'),
('03:00:00', 100, 21, 'Phil The Thrill And The Reckless Kill', 'Landmarl'),
('03:00:00', 100, 31, 'Phil The Thrill And The Reckless Kill', 'SilverCity'),
('04:00:00', 100, 12, 'Phil 3: Still Thrillin', 'CinemaPlex'),
('04:00:00', 100, 22, 'Phil 3: Still Thrillin', 'Landmarl'),
('04:00:00', 100, 32, 'Phil 3: Still Thrillin', 'SilverCity');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplierName` varchar(100) NOT NULL,
  `streetNum` int(11) DEFAULT NULL,
  `streetName` varchar(100) DEFAULT NULL,
  `town` varchar(100) DEFAULT NULL,
  `postalCode` char(6) DEFAULT NULL,
  `phoneNumber` char(10) DEFAULT NULL,
  `contactFName` varchar(50) DEFAULT NULL,
  `contactLName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplierName`, `streetNum`, `streetName`, `town`, `postalCode`, `phoneNumber`, `contactFName`, `contactLName`) VALUES
('A-Listers-Maximum', 333, 'StarStruck Street', 'HollyWood', 'j4j4j4', '234234234', 'William', 'Sanchez'),
('MovieMakers', 111, 'HollyWood Avenue', 'HollyWood', 'c0c4l4', '911911911', 'John', 'Travolta'),
('OscarWinners', 222, 'Beverly Hills Street', 'Beverly Hills', '90210', '613222222', 'Mike', 'Babcock');

-- --------------------------------------------------------

--
-- Table structure for table `systemuser`
--

CREATE TABLE `systemuser` (
  `loginID` varchar(25) NOT NULL,
  `passwordHash` varchar(32) DEFAULT NULL,
  `userType` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `systemuser`
--

INSERT INTO `systemuser` (`loginID`, `passwordHash`, `userType`) VALUES
('Brayden', 'kjkjkjkjkjfdfdfdfdfdklklklklkg61', 'c'),
('Reid', 'kjkjkjkjkjfdfdfdfdfdklklklklkg69', 'c'),
('Sean', 'kjkjkjkjkjfdfdfdfdfdklklklklkg62', 'c'),
('admin', 'adminadminadminadminadminadminpw', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `theatercomplex`
--

CREATE TABLE `theatercomplex` (
  `theaterName` varchar(100) NOT NULL,
  `streetNum` int(11) DEFAULT NULL,
  `streetName` varchar(100) DEFAULT NULL,
  `town` varchar(100) DEFAULT NULL,
  `postalCode` char(6) DEFAULT NULL,
  `phoneNumber` char(10) DEFAULT NULL,
  `numberOfScreens` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `theatercomplex`
--

INSERT INTO `theatercomplex` (`theaterName`, `streetNum`, `streetName`, `town`, `postalCode`, `phoneNumber`, `numberOfScreens`) VALUES
('CinemaPlex', 0, 'Sesame Street', 'Ottawa', 'a1b2c3', '1234567890', 10),
('Landmarl', 22, 'Electric Avenue', 'Sydney', '7k5h3k', '1029384756', 5),
('SilverCity', 11, 'Elm Street', 'Kingston', 'n1n1n1', '0987654321', 2);

-- --------------------------------------------------------

--
-- Table structure for table `theaterroom`
--

CREATE TABLE `theaterroom` (
  `theaterNumber` int(11) NOT NULL,
  `maxCapacity` int(11) DEFAULT NULL,
  `screenSize` varchar(10) DEFAULT NULL,
  `theaterName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `theaterroom`
--

INSERT INTO `theaterroom` (`theaterNumber`, `maxCapacity`, `screenSize`, `theaterName`) VALUES
(10, 300, '500', 'CinemaPlex'),
(11, 300, '500', 'CinemaPlex'),
(12, 300, '500', 'CinemaPlex'),
(20, 400, '500', 'Landmarl'),
(21, 400, '500', 'Landmarl'),
(22, 400, '500', 'Landmarl'),
(30, 1000, '800', 'SilverCity'),
(31, 1000, '800', 'SilverCity'),
(32, 1000, '800', 'SilverCity');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`accountNumber`),
  ADD KEY `loginID` (`loginID`);

--
-- Indexes for table `customerphonenumbers`
--
ALTER TABLE `customerphonenumbers`
  ADD PRIMARY KEY (`accountNumber`,`phoneNumber`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`title`),
  ADD KEY `supplierName` (`supplierName`);

--
-- Indexes for table `moviecast`
--
ALTER TABLE `moviecast`
  ADD PRIMARY KEY (`title`,`fName`,`lName`);

--
-- Indexes for table `playingin`
--
ALTER TABLE `playingin`
  ADD PRIMARY KEY (`theaterName`,`title`),
  ADD KEY `title` (`title`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`accountNumber`,`startTime`,`theaterNumber`,`title`,`theaterName`),
  ADD KEY `startTime` (`startTime`),
  ADD KEY `theaterNumber` (`theaterNumber`),
  ADD KEY `title` (`title`),
  ADD KEY `theaterName` (`theaterName`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`movieTitle`,`accountNumber`),
  ADD KEY `accountNumber` (`accountNumber`);

--
-- Indexes for table `showing`
--
ALTER TABLE `showing`
  ADD PRIMARY KEY (`startTime`,`theaterNumber`,`title`,`theaterName`),
  ADD KEY `theaterNumber` (`theaterNumber`),
  ADD KEY `title` (`title`),
  ADD KEY `theaterName` (`theaterName`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplierName`);

--
-- Indexes for table `systemuser`
--
ALTER TABLE `systemuser`
  ADD PRIMARY KEY (`loginID`);

--
-- Indexes for table `theatercomplex`
--
ALTER TABLE `theatercomplex`
  ADD PRIMARY KEY (`theaterName`);

--
-- Indexes for table `theaterroom`
--
ALTER TABLE `theaterroom`
  ADD PRIMARY KEY (`theaterNumber`,`theaterName`),
  ADD KEY `theaterName` (`theaterName`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`loginID`) REFERENCES `systemuser` (`loginID`);

--
-- Constraints for table `customerphonenumbers`
--
ALTER TABLE `customerphonenumbers`
  ADD CONSTRAINT `customerphonenumbers_ibfk_1` FOREIGN KEY (`accountNumber`) REFERENCES `customer` (`accountNumber`);

--
-- Constraints for table `movie`
--
ALTER TABLE `movie`
  ADD CONSTRAINT `movie_ibfk_1` FOREIGN KEY (`supplierName`) REFERENCES `supplier` (`supplierName`);

--
-- Constraints for table `moviecast`
--
ALTER TABLE `moviecast`
  ADD CONSTRAINT `moviecast_ibfk_1` FOREIGN KEY (`title`) REFERENCES `movie` (`title`);

--
-- Constraints for table `playingin`
--
ALTER TABLE `playingin`
  ADD CONSTRAINT `playingin_ibfk_1` FOREIGN KEY (`theaterName`) REFERENCES `theatercomplex` (`theaterName`),
  ADD CONSTRAINT `playingin_ibfk_2` FOREIGN KEY (`title`) REFERENCES `movie` (`title`);

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`accountNumber`) REFERENCES `customer` (`accountNumber`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`startTime`) REFERENCES `showing` (`startTime`),
  ADD CONSTRAINT `reservation_ibfk_3` FOREIGN KEY (`theaterNumber`) REFERENCES `theaterroom` (`theaterNumber`),
  ADD CONSTRAINT `reservation_ibfk_4` FOREIGN KEY (`title`) REFERENCES `movie` (`title`),
  ADD CONSTRAINT `reservation_ibfk_5` FOREIGN KEY (`theaterName`) REFERENCES `theatercomplex` (`theaterName`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`accountNumber`) REFERENCES `customer` (`accountNumber`);

--
-- Constraints for table `showing`
--
ALTER TABLE `showing`
  ADD CONSTRAINT `showing_ibfk_1` FOREIGN KEY (`theaterNumber`) REFERENCES `theaterroom` (`theaterNumber`),
  ADD CONSTRAINT `showing_ibfk_2` FOREIGN KEY (`title`) REFERENCES `movie` (`title`),
  ADD CONSTRAINT `showing_ibfk_3` FOREIGN KEY (`theaterName`) REFERENCES `theatercomplex` (`theaterName`);

--
-- Constraints for table `theaterroom`
--
ALTER TABLE `theaterroom`
  ADD CONSTRAINT `theaterroom_ibfk_1` FOREIGN KEY (`theaterName`) REFERENCES `theatercomplex` (`theaterName`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
