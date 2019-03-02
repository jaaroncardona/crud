-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2019 at 10:13 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `adressid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `address` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`adressid`, `userid`, `address`) VALUES
(7, 4, '12'),
(8, 4, '13'),
(9, 5, '123 St., address 1'),
(10, 6, '111'),
(11, 7, '124  St., address 1'),
(12, 8, '2222'),
(13, 9, '123 St,. Address 1'),
(14, 10, '123 St,. Address 1'),
(15, 11, '126 St., Address 1'),
(16, 12, '123 St., Address 1'),
(17, 7, 'asd'),
(18, 5, 'qweqe'),
(26, 13, '2'),
(28, 12, '3'),
(29, 22, '2'),
(31, 24, '2'),
(37, 12, '2'),
(39, 31, '2'),
(40, 12, '2'),
(41, 34, '2'),
(42, 35, '2'),
(44, 11, '2'),
(45, 37, '2'),
(46, 38, '2'),
(47, 39, '2'),
(48, 40, '2'),
(49, 41, '2'),
(50, 42, '2'),
(51, 43, '2'),
(52, 44, '2'),
(53, 45, '2'),
(54, 1, '123 St,. Address 1'),
(55, 47, '2'),
(56, 1, '123 St., address 1'),
(57, 49, '123 St., address 1'),
(58, 50, '123 St., address 1'),
(59, 51, '123 St., address 1'),
(60, 52, '123 St., address 1'),
(61, 53, '123 St., address 1'),
(62, 54, '123 St., address 1');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contactid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `contact` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contactid`, `userid`, `contact`) VALUES
(7, 4, '12'),
(8, 4, 'qeqwe'),
(9, 5, '123-4507'),
(10, 6, '11'),
(11, 7, '123-4508'),
(12, 8, '2222'),
(13, 9, '123-4509'),
(14, 10, '123-4509'),
(15, 11, '123-4509'),
(16, 12, '123-4510'),
(17, 7, '11'),
(18, 7, '11'),
(19, 7, '11'),
(20, 7, '11'),
(21, 7, '2'),
(22, 7, 'qwe'),
(37, 13, '2'),
(39, 12, '3'),
(40, 22, '2'),
(42, 24, '2'),
(48, 12, '2'),
(50, 31, '2'),
(51, 12, '2'),
(52, 34, '2'),
(53, 35, '2'),
(56, 35, '123'),
(58, 35, '123'),
(59, 11, '2'),
(60, 37, '2'),
(61, 38, '2'),
(62, 39, '2'),
(63, 40, '2'),
(64, 41, '2'),
(68, 42, '2'),
(69, 43, '2'),
(70, 44, '2'),
(71, 45, '2'),
(76, 1, '123-4506'),
(77, 47, '2'),
(78, 1, '123-4506'),
(79, 49, '123-4506'),
(80, 50, '123-4506'),
(81, 51, '123-4506'),
(82, 52, '123-4506'),
(83, 53, '123-4506'),
(84, 54, '123-4506');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` char(1) NOT NULL,
  `mstatus` varchar(20) NOT NULL,
  `pos` varchar(20) NOT NULL,
  `hireddate` date NOT NULL,
  `contact` int(11) NOT NULL,
  `address` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `fname`, `mname`, `lname`, `birthdate`, `gender`, `mstatus`, `pos`, `hireddate`, `contact`, `address`) VALUES
(49, 'John', 'Wes', 'Doa', '1995-02-22', 'm', 'Single', 'Staff', '1999-11-11', 79, 57),
(50, 'John', 'lee', 'Doe', '1992-02-22', 'm', 'Single', 'Staff', '1998-11-11', 80, 58),
(51, 'John', 'Ken', 'Doi', '1998-02-22', 'm', 'Single', 'Staff', '2001-11-11', 81, 59),
(52, 'John', 'Dee', 'Doo', '1993-02-22', 'm', 'Single', 'Staff', '1998-11-11', 82, 60),
(53, 'John', 'We', 'Doa', '1991-02-22', 'm', 'Single', 'Staff', '2012-11-11', 83, 61),
(54, 'John', 'Mike', 'Dou', '1993-02-22', 'm', 'Single', 'Staff', '1998-11-11', 84, 62);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`adressid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contactid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `adressid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contactid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
