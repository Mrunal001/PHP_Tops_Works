-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2020 at 05:31 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `aid` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`aid`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'a123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_city`
--

CREATE TABLE `tbl_city` (
  `ctid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `ctname` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_city`
--

INSERT INTO `tbl_city` (`ctid`, `sid`, `ctname`) VALUES
(1, 1, 'Rajkot'),
(2, 1, 'Surat'),
(3, 1, 'Ahemdabad'),
(4, 1, 'Gandhinagar'),
(5, 2, 'Varansi'),
(6, 2, 'Mirazapur'),
(7, 2, 'Lucknow'),
(8, 3, 'Nasik'),
(9, 3, 'Mumbai'),
(10, 3, 'Pune');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_country`
--

CREATE TABLE `tbl_country` (
  `cid` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_country`
--

INSERT INTO `tbl_country` (`cid`, `cname`) VALUES
(1, 'India'),
(2, 'Usa'),
(3, 'Srilanka'),
(4, 'China'),
(5, 'Australia');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_department`
--

CREATE TABLE `tbl_department` (
  `depid` int(11) NOT NULL,
  `depname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_department`
--

INSERT INTO `tbl_department` (`depid`, `depname`) VALUES
(1, 'Information Technology'),
(2, 'Computer science'),
(3, 'Accounting Manager'),
(4, 'Finance Ministry');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `galid` int(11) NOT NULL,
  `gallery_image` varchar(255) NOT NULL,
  `registered_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`galid`, `gallery_image`, `registered_date`) VALUES
(1, 'uploads/studentimages/brijesh.jpg', '0000-00-00'),
(2, 'uploads/studentimages/back.jpg', '0000-00-00'),
(3, 'uploads/studentimages/back.jpg', '0000-00-00'),
(4, 'uploads/studentimages/brijesh.jpg', '0000-00-00'),
(5, 'uploads/studentimages/back.jpg', '0000-00-00'),
(6, 'uploads/studentimages/back.jpg', '0000-00-00'),
(7, 'uploads/studentimages/brijesh.jpg', '0000-00-00'),
(8, 'uploads/studentimages/brijesh.jpg', '0000-00-00'),
(9, 'uploads/studentimages/back.jpg', '0000-00-00'),
(10, 'uploads/studentimages/back.jpg', '0000-00-00'),
(11, 'uploads/studentimages/brijesh.jpg', '2020-11-04'),
(12, 'uploads/studentimages/back.jpg', '2020-11-04'),
(13, 'uploads/studentimages/back.jpg', '2020-11-04'),
(14, 'uploads/studentimages/brijesh.jpg', '11/04/2020'),
(15, 'uploads/studentimages/back.jpg', '11/04/2020'),
(16, 'uploads/studentimages/brijesh.jpg', '11/04/2020'),
(17, 'uploads/studentimages/brijesh.jpg', '11/04/20'),
(18, 'uploads/studentimages/brijesh.jpg', '11/04/20'),
(19, 'uploads/studentimages/brijesh.jpg', '11/06/20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

CREATE TABLE `tbl_state` (
  `sid` int(11) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `cid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_state`
--

INSERT INTO `tbl_state` (`sid`, `sname`, `cid`) VALUES
(1, 'Gujrat', 1),
(2, 'Uttar pradesh', 1),
(3, 'Mahrstra', 1),
(4, 'California', 2),
(5, 'Navada', 2),
(6, 'Colmbia', 3),
(7, 'Hongkong', 4),
(8, 'Sydney', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `emplid` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `cid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `ctid` int(11) NOT NULL,
  `registered_time_date` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`emplid`, `photo`, `firstname`, `lastname`, `email`, `password`, `address`, `mobile`, `cid`, `sid`, `ctid`, `registered_time_date`) VALUES
(1, 'uploads/adidas_EH5817_1.jpg.plp.jpg', 'ronaldo', 'pandya', 'ronaldo@gmail.com', 'MTIzNDU=', '150 fett ring road rajot', 9998003879, 1, 1, 1, '11/30/20 09:11:39'),
(2, 'uploads/adidas_EH5817_1.jpg.plp.jpg', 'mrunal', 'pandya', 'mrunal@gmail.com', 'MTIzNDU=', 'rajkot', 9998003879, 1, 1, 1, '11/30/20 09:12:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `tbl_city`
--
ALTER TABLE `tbl_city`
  ADD PRIMARY KEY (`ctid`),
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `tbl_country`
--
ALTER TABLE `tbl_country`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `tbl_department`
--
ALTER TABLE `tbl_department`
  ADD PRIMARY KEY (`depid`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`galid`);

--
-- Indexes for table `tbl_state`
--
ALTER TABLE `tbl_state`
  ADD PRIMARY KEY (`sid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`emplid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_city`
--
ALTER TABLE `tbl_city`
  MODIFY `ctid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_country`
--
ALTER TABLE `tbl_country`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_department`
--
ALTER TABLE `tbl_department`
  MODIFY `depid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `galid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_state`
--
ALTER TABLE `tbl_state`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `emplid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
