-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2020 at 06:39 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `ctid` int(11) NOT NULL,
  `sid` int(11) DEFAULT NULL,
  `ctname` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`ctid`, `sid`, `ctname`) VALUES
(1, 1, 'Rajkot'),
(2, 1, 'Ahemdabad'),
(3, 1, 'Porbanadar'),
(4, 1, 'Surat'),
(5, 2, 'Bhopal'),
(6, 2, 'Indore'),
(7, 3, 'Varansi'),
(8, 3, 'Lucknow'),
(9, 3, 'Gaziabad'),
(10, 3, 'Bareli'),
(11, 4, 'Mumbai'),
(12, 4, 'Nagpur');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `cid` int(11) NOT NULL,
  `cname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`cid`, `cname`) VALUES
(1, 'India'),
(2, 'USA'),
(3, 'Srilanka'),
(4, 'Australia');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `empid` int(11) NOT NULL,
  `empname` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `address` text,
  `mobile` bigint(20) DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `departmenyt` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`empid`, `empname`, `password`, `username`, `address`, `mobile`, `salary`, `departmenyt`) VALUES
(1, 'sagar', 's12345', 'sagar', 'rajkot', 915412121, 45000, 'IT'),
(2, 'Mohit', 'm213121', 'mohit', 'rajkot', 912121221, 46000, 'CSE'),
(3, 'maulik', 'm12121', 'maulik01', 'rajkot', 9121212121, 47000, 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `laravel_user`
--

CREATE TABLE `laravel_user` (
  `uid` int(11) NOT NULL,
  `username` varchar(155) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` text,
  `salary` float DEFAULT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `upload_pgoto` blob,
  `country` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laravel_user`
--

INSERT INTO `laravel_user` (`uid`, `username`, `firstname`, `password`, `email`, `address`, `salary`, `mobile`, `upload_pgoto`, `country`) VALUES
(2, 'mrunal', 'mrunal007', 'm95612121', 'm@gmail.com', 'near CG road navargpura tanishq ke baju ma', 98000, 9223372036854775807, 0x6d6f6869742e706e67, 'india'),
(4, 'sagar007', 'sagar', 's6454545', 'sagar007@gmail.com', 'near navargpura tanishq showroom ke baju ma ahemdabad', 650000, 9121212121, 0x73616761722e706e67, 'india'),
(7, 'brijesh007', 'brijesh', 'b95612121', 'bkl@gmail.com', 'near CG road navargpura tanishq ke baju ma', 98000, 9223372036854775807, 0x6d6f6869742e706e67, 'usa'),
(8, 'mrunal', 'mrunal007', 'm95612121', 'mpk@gmail.com', 'near CG road navargpura tanishq ke baju ma', 980000, 9223372036854775807, 0x6d6f6869742e706e67, 'usa');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `sid` int(11) NOT NULL,
  `cid` int(11) DEFAULT NULL,
  `sname` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`sid`, `cid`, `sname`) VALUES
(1, 1, 'Gujrat'),
(2, 1, 'Madhya pradesh'),
(3, 1, 'Uttar Pradesh'),
(4, 1, 'Mahrstra'),
(5, 2, 'California'),
(6, 2, 'Florida');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `uname` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `address` text,
  `mobile` bigint(20) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL,
  `sid` int(11) DEFAULT NULL,
  `ctid` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `password`, `address`, `mobile`, `cid`, `sid`, `ctid`) VALUES
(1, 'brijesh', 'b22121', 'varansi near harishchandra ghat', 91212121, 1, 3, 7),
(2, 'Mohit', 'm22121', 'rajkot', 84122121212, 1, 2, 5),
(3, 'sagar', 's22121', '150 feet ring road rajkot', 9121212121, 1, 1, 1),
(4, 'maulik', 'm512121', 'ahemdabad cg road', 912121, 1, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`ctid`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`empid`);

--
-- Indexes for table `laravel_user`
--
ALTER TABLE `laravel_user`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `ctid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `empid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `laravel_user`
--
ALTER TABLE `laravel_user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
