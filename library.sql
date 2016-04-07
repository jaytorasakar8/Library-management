-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2015 at 04:34 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `Name` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `contactno` int(10) NOT NULL,
  `Address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Name`, `Email`, `Password`, `contactno`, `Address`) VALUES
('abc', 'abc@gmail.com', 'abc123', 1234567890, 'thane'),
('anjalee', 'anjaleesingh01@gmail', 'anjalee', 762346187, 'mulund'),
('neha', 'nehasanaye@gmail.com', 'neha123', 25454542, 'dombivali'),
('savita', 'savita131294@gmail.c', 'savita', 55875421, 'kalyan'),
('xyz', 'xyz@yahoo.com', 'xyz123', 45754121, 'nerul');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `Bid` varchar(10) NOT NULL,
  `Bname` varchar(20) NOT NULL,
  `Subject` varchar(20) NOT NULL,
  `Author` varchar(20) NOT NULL,
  `Availability` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`Bid`, `Bname`, `Subject`, `Author`, `Availability`) VALUES
('B001', 'Data Structure', '', 'J.M', 'no'),
('B0010', 'Data Base', 'DB', 'A.S.Patil', 'yes'),
('B002', 'Data Structure', 'DS', 'J.M', 'yes'),
('B003', 'Software Engineering', 'SE', 'M.A. Ansari', 'yes'),
('B004', 'Software Engineering', 'SE', 'M.A. Ansari', 'yes'),
('B006', 'Data mining', 'DMBI', 'S.K. Shinde', 'yes'),
('B009', 'Security', 'SWS', 'S.N.', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `claimreturn`
--

CREATE TABLE IF NOT EXISTS `claimreturn` (
`claim_return_id` int(10) NOT NULL,
  `Issue_id` int(10) NOT NULL,
  `Mid` varchar(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Bid` varchar(10) NOT NULL,
  `Bname` varchar(20) NOT NULL,
  `validreturndate` date NOT NULL,
  `returnclaim_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `finepaid`
--

CREATE TABLE IF NOT EXISTS `finepaid` (
  `Fine_pay_id` int(11) NOT NULL,
  `Fine_id` int(11) NOT NULL,
  `Issue_id` int(11) NOT NULL,
  `Return_id` int(11) NOT NULL,
  `Bid` varchar(10) NOT NULL,
  `Mid` varchar(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Amount` int(10) NOT NULL,
  `payment_date` timestamp(1) NOT NULL DEFAULT CURRENT_TIMESTAMP(1) ON UPDATE CURRENT_TIMESTAMP(1)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fine_unpaid`
--

CREATE TABLE IF NOT EXISTS `fine_unpaid` (
`Fine_id` int(10) NOT NULL,
  `Issue_id` int(10) NOT NULL,
  `Return_id` int(10) NOT NULL,
  `Bid` varchar(10) NOT NULL,
  `Mid` varchar(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Issue_date` date NOT NULL,
  `Return_date` date NOT NULL,
  `diff` varchar(10) NOT NULL,
  `Amount` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `issuebook`
--

CREATE TABLE IF NOT EXISTS `issuebook` (
`Issue_id` int(10) NOT NULL,
  `Request_id` int(10) NOT NULL,
  `Mid` varchar(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Bid` varchar(10) NOT NULL,
  `Bname` varchar(20) NOT NULL,
  `Issue_date` date NOT NULL,
  `validreturndate` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `issuestore`
--

CREATE TABLE IF NOT EXISTS `issuestore` (
  `Issue_id` int(10) NOT NULL,
  `Mid` int(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Bid` varchar(10) NOT NULL,
  `Bname` varchar(20) NOT NULL,
  `Issue_date` date NOT NULL,
  `validreturndate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issuestore`
--

INSERT INTO `issuestore` (`Issue_id`, `Mid`, `Name`, `Bid`, `Bname`, `Issue_date`, `validreturndate`) VALUES
(52, 12, 'savita', 'B0010', 'Data Base', '2015-04-20', '2015-04-28'),
(53, 12, 'prajakta', 'B0010', 'Data Base', '2015-04-21', '2015-04-29'),
(1, 12, 'anjalee', 'B0010', 'Data Base', '2015-10-04', '2015-10-12');

-- --------------------------------------------------------

--
-- Table structure for table `library_code`
--

CREATE TABLE IF NOT EXISTS `library_code` (
  `code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `library_code`
--

INSERT INTO `library_code` (`code`) VALUES
('OLMS');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `Name` varchar(20) NOT NULL,
  `Mid` varchar(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Branch` varchar(10) NOT NULL,
  `Year` varchar(4) NOT NULL,
  `ContactNo` int(10) NOT NULL,
  `Address` varchar(70) NOT NULL,
  `Book1` varchar(10) NOT NULL,
  `Book2` varchar(10) NOT NULL,
  `days` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`Name`, `Mid`, `Email`, `Password`, `Branch`, `Year`, `ContactNo`, `Address`, `Book1`, `Book2`, `days`) VALUES
('anjalee', '12IT1016', 'aaa@gmail.com', '123456', 'cs', 'TE', 1245642, 'dombivali', '', '', 0),
('savita', '12IT1023', 'xyz@yahoo.com', '123456', 'CS', 'TE', 123456, 'kalyan', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `requestbook`
--

CREATE TABLE IF NOT EXISTS `requestbook` (
`Request_id` int(10) NOT NULL,
  `Mid` varchar(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Bid` varchar(10) NOT NULL,
  `Bname` varchar(20) NOT NULL,
  `requestdate` date NOT NULL,
  `requestexpirydays` varchar(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `returnbook`
--

CREATE TABLE IF NOT EXISTS `returnbook` (
`Return_id` int(10) NOT NULL,
  `Issue_id` int(10) NOT NULL,
  `claim_return_id` int(10) NOT NULL,
  `Bid` varchar(10) NOT NULL,
  `Bname` varchar(20) NOT NULL,
  `Mid` varchar(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `validreturndate` date NOT NULL,
  `Return_date` date NOT NULL,
  `diff` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `returnstore`
--

CREATE TABLE IF NOT EXISTS `returnstore` (
  `Return_id` int(10) NOT NULL,
  `Issue_id` int(10) NOT NULL,
  `Bid` varchar(10) NOT NULL,
  `Bname` varchar(20) NOT NULL,
  `Mid` varchar(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `validreturndate` date NOT NULL,
  `Return_date` date NOT NULL,
  `diff` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `returnstore`
--

INSERT INTO `returnstore` (`Return_id`, `Issue_id`, `Bid`, `Bname`, `Mid`, `Name`, `validreturndate`, `Return_date`, `diff`) VALUES
(14, 52, 'B0010', 'Data Base', '12IT1023', 'savita', '2015-04-28', '2015-04-20', '8'),
(15, 53, 'B0010', 'Data Base', '12IT1022', 'prajakta', '2015-04-29', '2015-04-21', '8'),
(1, 1, 'B0010', 'Data Base', '12IT1016', 'anjalee', '2015-10-12', '2015-10-04', '8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
 ADD PRIMARY KEY (`Bid`);

--
-- Indexes for table `claimreturn`
--
ALTER TABLE `claimreturn`
 ADD PRIMARY KEY (`claim_return_id`);

--
-- Indexes for table `finepaid`
--
ALTER TABLE `finepaid`
 ADD PRIMARY KEY (`Fine_pay_id`), ADD UNIQUE KEY `Fine_id` (`Fine_id`);

--
-- Indexes for table `fine_unpaid`
--
ALTER TABLE `fine_unpaid`
 ADD PRIMARY KEY (`Fine_id`);

--
-- Indexes for table `issuebook`
--
ALTER TABLE `issuebook`
 ADD PRIMARY KEY (`Issue_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
 ADD PRIMARY KEY (`Mid`), ADD KEY `RollNo` (`Mid`);

--
-- Indexes for table `requestbook`
--
ALTER TABLE `requestbook`
 ADD PRIMARY KEY (`Request_id`);

--
-- Indexes for table `returnbook`
--
ALTER TABLE `returnbook`
 ADD PRIMARY KEY (`Return_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `claimreturn`
--
ALTER TABLE `claimreturn`
MODIFY `claim_return_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `fine_unpaid`
--
ALTER TABLE `fine_unpaid`
MODIFY `Fine_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `issuebook`
--
ALTER TABLE `issuebook`
MODIFY `Issue_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `requestbook`
--
ALTER TABLE `requestbook`
MODIFY `Request_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `returnbook`
--
ALTER TABLE `returnbook`
MODIFY `Return_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
