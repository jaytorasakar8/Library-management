-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2016 at 04:46 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

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
('CHETALI', 'chetu@gmail.com', '123456', 2147483647, 'borivali'),
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
('B0011', 'microprocessor and i', 'Microprocessor', 'Douglas Hall', 'false'),
('B0012', 'linux Command Line &', 'Operatind System', 'Richard Blum & Chris', 'false'),
('B0013', 'Unix & Shell Program', 'Operating system', 'B.M. Harwani Oxford', 'true'),
('B0014', 'System Anaysis & Des', 'SOAD', 'Satzinger,Jackson & ', 'true'),
('B0015', 'Computer Networks', 'Computer Network', 'A.S.Tanenbaum', 'true'),
('B0016', 'Systems Programming', 'SPCC', 'D.M. Dhamdhere', 'false'),
('B0017', 'Software Engineering', 'SE', 'Ali Behforooz Fredri', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `bookhf_1`
--

CREATE TABLE IF NOT EXISTS `bookhf_1` (
  `Bid` varchar(10) NOT NULL,
  `Bname` varchar(20) NOT NULL,
  `Subject` varchar(20) NOT NULL,
  `Author` varchar(20) NOT NULL,
  `Availability` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookhf_1`
--

INSERT INTO `bookhf_1` (`Bid`, `Bname`, `Subject`, `Author`, `Availability`) VALUES
('B0011', 'microprocessor and i', 'Microprocessor', 'Douglas Hall', 'false'),
('B0012', 'linux Command Line &', 'Operatind System', 'Richard Blum & Chris', 'false'),
('B0016', 'Systems Programming', 'SPCC', 'D.M. Dhamdhere', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `bookhf_2`
--

CREATE TABLE IF NOT EXISTS `bookhf_2` (
  `Bid` varchar(10) NOT NULL,
  `Bname` varchar(20) NOT NULL,
  `Subject` varchar(20) NOT NULL,
  `Author` varchar(20) NOT NULL,
  `Availability` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookhf_2`
--

INSERT INTO `bookhf_2` (`Bid`, `Bname`, `Subject`, `Author`, `Availability`) VALUES
('B0013', 'Unix & Shell Program', 'Operating system', 'B.M. Harwani Oxford', 'true'),
('B0014', 'System Anaysis & Des', 'SOAD', 'Satzinger,Jackson & ', 'true'),
('B0015', 'Computer Networks', 'Computer Network', 'A.S.Tanenbaum', 'true'),
('B0017', 'Software Engineering', 'SE', 'Ali Behforooz Fredri', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `bookvf_1`
--

CREATE TABLE IF NOT EXISTS `bookvf_1` (
  `Bid` varchar(10) NOT NULL,
  `Bname` varchar(20) NOT NULL,
  `Subject` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookvf_1`
--

INSERT INTO `bookvf_1` (`Bid`, `Bname`, `Subject`) VALUES
('B0011', 'microprocessor and i', 'Microprocessor'),
('B0012', 'linux Command Line &', 'Operatind System'),
('B0013', 'Unix & Shell Program', 'Operating system'),
('B0014', 'System Anaysis & Des', 'SOAD'),
('B0015', 'Computer Networks', 'Computer Network'),
('B0016', 'Systems Programming', 'SPCC'),
('B0017', 'Software Engineering', 'SE');

-- --------------------------------------------------------

--
-- Table structure for table `bookvf_2`
--

CREATE TABLE IF NOT EXISTS `bookvf_2` (
  `Bid` varchar(10) NOT NULL,
  `Author` varchar(20) NOT NULL,
  `Availability` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookvf_2`
--

INSERT INTO `bookvf_2` (`Bid`, `Author`, `Availability`) VALUES
('B0011', 'Douglas Hall', 'true'),
('B0012', 'Richard Blum & Chris', 'true'),
('B0013', 'B.M. Harwani Oxford', 'true'),
('B0014', 'Satzinger,Jackson & ', 'true'),
('B0015', 'A.S.Tanenbaum', 'true'),
('B0016', 'D.M. Dhamdhere', 'true'),
('B0017', 'Ali Behforooz Fredri', 'true');

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
) ENGINE=InnoDB AUTO_INCREMENT=142 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fine_unpaid`
--

INSERT INTO `fine_unpaid` (`Fine_id`, `Issue_id`, `Return_id`, `Bid`, `Mid`, `Name`, `Issue_date`, `Return_date`, `diff`, `Amount`) VALUES
(128, 2, 1, 'B006', '12', 'abc', '2016-04-10', '2016-04-12', '2', '100'),
(137, 52, 14, 'B0010', '12IT1023', 'savita', '2015-04-28', '2015-04-20', '8', '100'),
(138, 52, 14, 'B0010', '12IT1023', 'savita', '2015-04-28', '2015-04-20', '8', '100'),
(139, 53, 15, 'B0010', '12IT1022', 'prajakta', '2015-04-29', '2015-04-21', '8', '100'),
(140, 1, 1, 'B0010', '12IT1016', 'anjalee', '2015-10-12', '2015-10-04', '8', '100'),
(141, 2, 1, 'B006', '12', 'abc', '2016-04-10', '2016-04-12', '2', '100');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

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
('geeta', '1', 'geeta@yahoo.com', 'geeta12304', 'computer', 'IV', 2147483647, 'bandra', '', '', 0),
('abc', '12', 'abc@gmail.com', '123456', 'dfd', 'dv', 0, 'dfd', 'B009', '89', 0),
('rita', '20', 'ritz@yahoo.co.in', '7410235698', 'computer', 'III', 2147483647, 'nallasopara', '', '', 0),
('chetna', '30', 'chetna@yahoo.com', 'qwerty', 'computer', 'II', 2147483647, 'kandivi', '', '', 0),
('deepika', '45', 'deepu@gmail.com', 'deepika10', 'it', 'I', 2147483647, 'malad', '', '', 0),
('DEEPALI', '5', 'deepali@gmail.com', 'deepali0123', 'it', 'III', 2147483647, 'borivali', '', '', 0);

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
  `requestexpirydays` date NOT NULL
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  ADD PRIMARY KEY (`claim_return_id`),
  ADD KEY `Bid` (`Bid`);

--
-- Indexes for table `finepaid`
--
ALTER TABLE `finepaid`
  ADD PRIMARY KEY (`Fine_pay_id`),
  ADD UNIQUE KEY `Fine_id` (`Fine_id`);

--
-- Indexes for table `fine_unpaid`
--
ALTER TABLE `fine_unpaid`
  ADD PRIMARY KEY (`Fine_id`);

--
-- Indexes for table `issuebook`
--
ALTER TABLE `issuebook`
  ADD PRIMARY KEY (`Issue_id`),
  ADD KEY `issuebook_ibfk_1` (`Bid`);

--
-- Indexes for table `issuestore`
--
ALTER TABLE `issuestore`
  ADD KEY `issuestore_ibfk_1` (`Bid`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`Mid`),
  ADD KEY `RollNo` (`Mid`);

--
-- Indexes for table `requestbook`
--
ALTER TABLE `requestbook`
  ADD PRIMARY KEY (`Request_id`),
  ADD KEY `requestbook_ibfk_1` (`Bid`);

--
-- Indexes for table `returnbook`
--
ALTER TABLE `returnbook`
  ADD PRIMARY KEY (`Return_id`),
  ADD KEY `returnbook_ibfk_1` (`Bid`);

--
-- Indexes for table `returnstore`
--
ALTER TABLE `returnstore`
  ADD KEY `returnstore_ibfk_1` (`Bid`);

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
  MODIFY `Fine_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=142;
--
-- AUTO_INCREMENT for table `issuebook`
--
ALTER TABLE `issuebook`
  MODIFY `Issue_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `requestbook`
--
ALTER TABLE `requestbook`
  MODIFY `Request_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `returnbook`
--
ALTER TABLE `returnbook`
  MODIFY `Return_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `claimreturn`
--
ALTER TABLE `claimreturn`
  ADD CONSTRAINT `claimreturn_ibfk_1` FOREIGN KEY (`Bid`) REFERENCES `book` (`Bid`);

--
-- Constraints for table `issuebook`
--
ALTER TABLE `issuebook`
  ADD CONSTRAINT `issuebook_ibfk_1` FOREIGN KEY (`Bid`) REFERENCES `book` (`Bid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `issuestore`
--
ALTER TABLE `issuestore`
  ADD CONSTRAINT `issuestore_ibfk_1` FOREIGN KEY (`Bid`) REFERENCES `book` (`Bid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `requestbook`
--
ALTER TABLE `requestbook`
  ADD CONSTRAINT `requestbook_ibfk_1` FOREIGN KEY (`Bid`) REFERENCES `book` (`Bid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `returnbook`
--
ALTER TABLE `returnbook`
  ADD CONSTRAINT `returnbook_ibfk_1` FOREIGN KEY (`Bid`) REFERENCES `book` (`Bid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `returnstore`
--
ALTER TABLE `returnstore`
  ADD CONSTRAINT `returnstore_ibfk_1` FOREIGN KEY (`Bid`) REFERENCES `book` (`Bid`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
