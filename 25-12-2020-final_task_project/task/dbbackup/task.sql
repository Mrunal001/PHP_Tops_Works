-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2020 at 05:36 AM
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
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cartid` int(11) NOT NULL,
  `courseid` int(11) NOT NULL,
  `stdid` int(11) NOT NULL,
  `coursename` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` float NOT NULL,
  `subtotal` float NOT NULL,
  `added_date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cartid`, `courseid`, `stdid`, `coursename`, `qty`, `price`, `subtotal`, `added_date`, `status`) VALUES
(6, 1, 5, 'PHP', 1, 85000, 85000, '12/18/20 09:55:44', 'pending'),
(5, 1, 3, 'PHP', 1, 85000, 85000, '12/18/20 08:53:04', 'pending');

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
-- Table structure for table `tbl_course`
--

CREATE TABLE `tbl_course` (
  `courseid` int(11) NOT NULL,
  `subjid` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `coursecode` varchar(255) NOT NULL,
  `Fees` float NOT NULL,
  `mode` varchar(255) NOT NULL,
  `teacherid` int(11) NOT NULL,
  `addedd_date` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`courseid`, `subjid`, `photo`, `coursecode`, `Fees`, `mode`, `teacherid`, `addedd_date`) VALUES
(1, 1, 'uploads/subject_photo/php.png', 'php001', 85000, '1', 1, '12/04/20'),
(2, 2, 'uploads/subject_photo/aspnet.jpg', 'asp002', 45000, '1', 2, '12/04/20'),
(3, 3, 'uploads/subject_photo/angularjs.jpg', 'angularjs003', 78000, '1', 5, '12/04/20'),
(4, 3, 'uploads/subject_photo/reactjs.png', 'reactjs005', 88000, '1', 4, '12/04/20'),
(5, 5, 'uploads/subject_photo/web_design.png', 'webdesigning006', 58000, '1', 6, '12/04/20');

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
(6, 'Colmbia', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `stdid` int(11) NOT NULL,
  `student_photo` varchar(255) NOT NULL,
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

INSERT INTO `tbl_student` (`stdid`, `student_photo`, `firstname`, `lastname`, `email`, `password`, `address`, `mobile`, `cid`, `sid`, `ctid`, `registered_time_date`) VALUES
(1, 'uploads/adidas_EH5817_1.jpg.plp.jpg', 'ronaldo', 'pandya', 'ronaldo@gmail.com', 'MTIzNDU=', '150 fett ring road rajot', 9998003879, 1, 1, 1, '11/30/20 09:11:39'),
(2, 'uploads/adidas_EH5817_1.jpg.plp.jpg', 'mrunal', 'pandya', 'mrunal@gmail.com', 'MTIzNDU=', 'rajkot', 9998003879, 1, 1, 1, '11/30/20 09:12:27'),
(7, 'uploads/', '', '', '', '', '', 0, 0, 0, 0, '12/21/20 10:05:59'),
(5, 'uploads/content_img2.gif', 'maulik', 'pandya', 'maulik@gmail.com', 'MTIzNDU=', '150 fett ring road rajkot', 9173357217, 1, 1, 1, '12/18/20 09:53:07'),
(6, 'uploads/content_img4.gif', 'damini', 'pandya', 'damini007@gmail.com', 'MTIzNDU=', '  near harishchandra ghat gali number 102  near bhagavn pokoda  150 feet ring road', 9998003879, 1, 2, 5, '12/21/20 09:43:58');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subject`
--

CREATE TABLE `tbl_subject` (
  `subjid` int(11) NOT NULL,
  `subjectname` varchar(255) NOT NULL,
  `added_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_subject`
--

INSERT INTO `tbl_subject` (`subjid`, `subjectname`, `added_date`) VALUES
(1, 'PHP', '2020-12-04'),
(2, 'ASP.Net', '2020-12-03'),
(3, 'ReatJs', '2020-12-04'),
(4, 'AngularJs', '2020-12-04'),
(5, 'WeDesigning', '2020-12-04'),
(6, 'Python', '2020-12-04'),
(7, 'MongoDB', '2020-12-04'),
(8, 'SQLLite3', '2020-12-04'),
(9, 'Mysql', '2020-12-04'),
(10, 'C/C++', '2020-12-04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teacher`
--

CREATE TABLE `tbl_teacher` (
  `teacherid` int(11) NOT NULL,
  `subjid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `addrerss` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_teacher`
--

INSERT INTO `tbl_teacher` (`teacherid`, `subjid`, `name`, `mobile`, `addrerss`) VALUES
(1, 1, 'Maulik Vadaliya', 9173357217, '150 feet ring road'),
(2, 6, 'Mohit', 9998003879, '150 feet ring road near cg highway ahemdabad'),
(3, 1, 'Maulik Vadaliya', 9173357217, '150 feet ring road'),
(4, 6, 'Brijesh Pandey', 9998003879, '150 feet ring road near cg highway ahemdabad'),
(5, 4, 'Mrunal', 8989786548, 'near gurunanak chowk surat'),
(6, 5, 'Zeel Patel', 7854857889, '150 feet ring road Gandhinagar'),
(7, 7, 'Damini parmar', 7981212112, 'near chandrika dairy Rajkot'),
(8, 10, 'Rashmin', 844545452121, '150 feet ring road Rajkot'),
(9, 9, 'Sanjay sindhav', 7211215875, 'near PJ jwellers Rajkot'),
(10, 3, 'Brijesh Pandey', 9115545454, 'guruprasd chowk rajkot');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cartid`),
  ADD KEY `courseid` (`courseid`),
  ADD KEY `emplid` (`stdid`);

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
-- Indexes for table `tbl_course`
--
ALTER TABLE `tbl_course`
  ADD PRIMARY KEY (`courseid`),
  ADD KEY `subjid` (`subjid`),
  ADD KEY `teacherid` (`teacherid`);

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
  ADD PRIMARY KEY (`stdid`);

--
-- Indexes for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  ADD PRIMARY KEY (`subjid`);

--
-- Indexes for table `tbl_teacher`
--
ALTER TABLE `tbl_teacher`
  ADD PRIMARY KEY (`teacherid`),
  ADD KEY `subjid` (`subjid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cartid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
-- AUTO_INCREMENT for table `tbl_course`
--
ALTER TABLE `tbl_course`
  MODIFY `courseid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `stdid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  MODIFY `subjid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_teacher`
--
ALTER TABLE `tbl_teacher`
  MODIFY `teacherid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
