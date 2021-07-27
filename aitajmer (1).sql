-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2021 at 04:10 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aitajmer`
--

-- --------------------------------------------------------

--
-- Table structure for table `ainfo`
--

CREATE TABLE `ainfo` (
  `aid` int(10) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `upass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ainfo`
--

INSERT INTO `ainfo` (`aid`, `uname`, `upass`) VALUES
(1, 'sumit', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `atimetable`
--

CREATE TABLE `atimetable` (
  `aid` int(10) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `lab_room` varchar(50) NOT NULL,
  `instructor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `atimetable`
--

INSERT INTO `atimetable` (`aid`, `uname`, `day`, `time`, `semester`, `subject`, `lab_room`, `instructor`) VALUES
(1, 'deepak', 'FRIDAY', '9 to 11', '1st sem', 'C language', '', ''),
(2, 'sumit ubaa', 'FRIDAY', '10 to 12', '2nd', 'c++ lang', '', ''),
(3, '', '', '', '', '', '', ''),
(5, 'kesgh', 'WEDNESDAY', '2 to 4', '4th', 'DAA LAB', '', ''),
(7, 'meenakshi', 'TUESDAY', '9 to 12', '6th', 'DAA LAB', '', ''),
(9, 'xyz', 'THURSDAY', '9 to 11', '6th', 'ECA', '', ''),
(10, 'Science', 'MONDAY', '12 noon', '2nd semester', 'CSC 101', '', ''),
(11, 'Technology', 'WEDNESDAY', '2 pm', '2nd semester', 'CSC 201', '', ''),
(16, 'Education', 'THURSDAY', '5 pm', '2nd semester', 'CSC301', '', ''),
(18, 'Administration', 'FRIDAY', '8 pm', '1st semester', 'csc102', 'Room 3', 'Mr Walid'),
(19, 'Arts', 'TUESDAY', '3pm', '2nd semester', 'CSC201', 'Room 3', 'Mr Muhammed'),
(20, 'Agriculture ', 'MONDAY', '1pm', '1st semester', 'CSC 105', 'Room 6', 'Mr Martins');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `usernme` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `sex` varchar(250) NOT NULL,
  `tempadd` text NOT NULL,
  `padd` text NOT NULL,
  `post` text NOT NULL,
  `jdate` date NOT NULL,
  `image` varchar(250) NOT NULL,
  `mno` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `fname`, `usernme`, `password`, `email`, `sex`, `tempadd`, `padd`, `post`, `jdate`, `image`, `mno`) VALUES
(1, 'sumit', 'mr. suniil kumar ubana', 'sumit', 'sumit', 'sumit.ubana77@gmail.com', 'M', 'gulab bari ajmer', 'ashasdsdasndja asjbdjabsdasd asdkjaio', 'asjdausdbasd', '2013-08-31', 'upload/Untitled-2 copy.jpg', 2147483647),
(2, 'manish', 'mlasas', 'Manish', 'manish', 'asjdnas@gmail.com', 'M', 'askjdnas', 'jsnfjabsh', 'basbdb', '2013-08-31', 'upload/1233416_413944548709531_2002459701_a.jpg', 0),
(3, 'mayank', 'may', 'mayank', 'mayank', 'asdjn@ymail.com', 'M', 'jsdfh', 'kjds', 'sdfheudy', '2013-08-31', 'upload/images.jpg', 866346346),
(4, '', '', '', '', '', 'M', '', '', '', '2013-09-01', 'upload/', 0),
(5, 'meenakshi', 'h.mahawar', 'meenu', 'meenu', 'meenua@gmail.com', 'F', 'gasdj', 'kasjdf', 'gaa', '2013-09-01', 'upload/beforeiwasamom9.jpg', 765678877);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fid` int(10) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `departments` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `uname`, `comment`, `departments`) VALUES
(1, ' dasd ', 'sdas', ''),
(2, ' sasas ', 'sdasdasd', ''),
(3, ' dasdas ', 'asdas', ''),
(4, '  ', '', ''),
(5, 'Walid', 'Room 5 needs a new UPS.', ''),
(6, 'Daniel', 'Need the installation for Visual studio code', 'Computer Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `finfo`
--

CREATE TABLE `finfo` (
  `fid` int(10) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `upass` varchar(255) NOT NULL,
  `gender` enum('m','f') NOT NULL,
  `dob` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `mobno` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `finfo`
--

INSERT INTO `finfo` (`fid`, `uname`, `upass`, `gender`, `dob`, `city`, `address`, `emailid`, `mobno`) VALUES
(1, ' sumit ', 'sumit', 'm', '28may 2011', 'Delhi', 'smdsj', 'kjd@ymaillcom', 2147483647),
(2, 'sa', 'sa', 'm', '', '', '', '', 0),
(3, ' hi ', 'hi', 'm', '23232', 'Jaipur', 'dfd', 'jdf@ymail.vom', 2147483647),
(4, 'meenuu', 'meenu', 'f', '28 amay ', 'Delhi', 'sjdh', 'dfkjh', 2147483647),
(8, ' monday ', 'monday', 'm', '28 may 1990', 'Delhi', 'jsandjas', 'jncfcud@ymail.com', 989383393),
(10, 'sumit', 'sumit', 'm', '28 may 1992', 'Delhi', 'gulab bari ajmer', 'sumit.ubana77@gmail.com', 2147483647),
(11, 'pawan', 'pawan', 'm', '25-05-1992', 'Delhi', 'akdsjh', 'pawan@gmail.com', 2147483647),
(12, 'xyyz', 'xyyz', 'm', '5676', 'Jaipur', 'mgh', 'jyjgh', 76898);

-- --------------------------------------------------------

--
-- Table structure for table `flabitems`
--

CREATE TABLE `flabitems` (
  `fid` int(10) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `roomno` int(200) NOT NULL,
  `desktop` int(200) NOT NULL,
  `keyboard` int(200) NOT NULL,
  `mouse` int(200) NOT NULL,
  `headphone` int(200) NOT NULL,
  `lancable` enum('y','n') NOT NULL,
  `os` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flabitems`
--

INSERT INTO `flabitems` (`fid`, `fname`, `roomno`, `desktop`, `keyboard`, `mouse`, `headphone`, `lancable`, `os`, `date`) VALUES
(1, ' Manish ', 200, 23, 24, 25, 26, 'y', 'Window 8', '2013-03-09'),
(2, '  ', 0, 0, 0, 0, 0, '', '--Select O.S.--', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE `reply` (
  `id` int(11) NOT NULL,
  `fid` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `departments` varchar(50) NOT NULL,
  `reply` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`id`, `fid`, `uname`, `comment`, `departments`, `reply`) VALUES
(17, 5, ' Walid', ' Room 5 needs a new UPS.', '', 'Working'),
(18, 2, '  sasas ', ' sdasdasd', '', 'Will get back to you.'),
(19, 5, ' Walid', ' Room 5 needs a new UPS.', ' Computer Science', 'Working.');

-- --------------------------------------------------------

--
-- Table structure for table `software`
--

CREATE TABLE `software` (
  `id` int(11) NOT NULL,
  `filename` varchar(250) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `software`
--

INSERT INTO `software` (`id`, `filename`, `created`) VALUES
(1, '1-Learning PHP, MySQL, JavaScript, CSS & HTML5_ A Step-by-Step Guide to Creating Dynamic Websites ( PDFDrive ).pdf', '2021-07-01 14:32:50');

-- --------------------------------------------------------

--
-- Table structure for table `uptest`
--

CREATE TABLE `uptest` (
  `upid` int(10) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `newsname` varchar(255) NOT NULL,
  `location` varchar(50) NOT NULL,
  `opentype` enum('_parent','_blank') NOT NULL,
  `status` enum('A','I') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uptest`
--

INSERT INTO `uptest` (`upid`, `filename`, `path`, `newsname`, `location`, `opentype`, `status`) VALUES
(1, 'My_CV.pdf', 'data/', 'CV', '1', '_parent', 'A'),
(2, 'dota2wallpaper_Lina_by_2befine.jpg', 'data/', 'Today Is SUNDAY', '1', '_parent', 'A'),
(3, 'LUMIERES_no3-1600.jpg', 'data/', 'Result', '1', '_parent', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` int(11) NOT NULL COMMENT '1=instructor, 2=student, 3=HOD',
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=active, 2=inactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `type`, `status`) VALUES
(4, 'Walid', 'w123', '', 1, 1),
(6, 'Dare', 'd123', '12345', 1, 1),
(7, 'Bolu', 'b123', '12345', 2, 1),
(16, 'Dave', 'dave123', '12345', 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ainfo`
--
ALTER TABLE `ainfo`
  ADD PRIMARY KEY (`aid`),
  ADD UNIQUE KEY `uname` (`uname`,`upass`);

--
-- Indexes for table `atimetable`
--
ALTER TABLE `atimetable`
  ADD PRIMARY KEY (`aid`),
  ADD UNIQUE KEY `uname` (`uname`,`day`,`time`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`,`usernme`,`password`,`email`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `finfo`
--
ALTER TABLE `finfo`
  ADD PRIMARY KEY (`fid`),
  ADD UNIQUE KEY `emailid` (`emailid`,`mobno`);

--
-- Indexes for table `flabitems`
--
ALTER TABLE `flabitems`
  ADD PRIMARY KEY (`fid`),
  ADD UNIQUE KEY `fid` (`fid`),
  ADD UNIQUE KEY `roomno` (`roomno`),
  ADD UNIQUE KEY `roomno_2` (`roomno`,`desktop`,`keyboard`,`mouse`,`headphone`,`lancable`,`os`,`date`);

--
-- Indexes for table `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_fid` (`fid`);

--
-- Indexes for table `software`
--
ALTER TABLE `software`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uptest`
--
ALTER TABLE `uptest`
  ADD PRIMARY KEY (`upid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ainfo`
--
ALTER TABLE `ainfo`
  MODIFY `aid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `atimetable`
--
ALTER TABLE `atimetable`
  MODIFY `aid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `finfo`
--
ALTER TABLE `finfo`
  MODIFY `fid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `flabitems`
--
ALTER TABLE `flabitems`
  MODIFY `fid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reply`
--
ALTER TABLE `reply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `software`
--
ALTER TABLE `software`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `uptest`
--
ALTER TABLE `uptest`
  MODIFY `upid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reply`
--
ALTER TABLE `reply`
  ADD CONSTRAINT `fk_fid` FOREIGN KEY (`fid`) REFERENCES `feedback` (`fid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
