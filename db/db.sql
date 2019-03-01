-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 23, 2019 at 12:23 AM
-- Server version: 5.6.41-84.1
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resulclw_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `tc`
--

CREATE TABLE `tc` (
  `mem_id` int(11) NOT NULL,
  `reg` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tc`
--

INSERT INTO `tc` (`mem_id`, `reg`, `name`, `fname`, `mname`, `dob`) VALUES
(3, 'RH2016447', 'RAJU PANDEY', 'Mahendra Pratap', 'MANTA DEVI', '1999-07-12'),
(4, 'RH2016448', 'Jayesh Kumar', 'Mintu Kumar', 'Rita Kumari', '2001-05-26'),
(8, 'RH2016446', 'SUDHANSHU PANDEY', 'ANAND KUMAR PANDEY', 'MAYA LATA PANDEY', '1994-05-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tc`
--
ALTER TABLE `tc`
  ADD PRIMARY KEY (`mem_id`),
  ADD UNIQUE KEY `mem_id` (`mem_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tc`
--
ALTER TABLE `tc`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
