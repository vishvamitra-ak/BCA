-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 09, 2019 at 03:48 AM
-- Server version: 5.7.23
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

DROP TABLE IF EXISTS `admission`;
CREATE TABLE IF NOT EXISTS `admission` (
  `adm_id` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `apply_date` varchar(50) NOT NULL,
  `upload_details` varchar(100) NOT NULL,
  PRIMARY KEY (`adm_id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`adm_id`, `stud_id`, `course_id`, `apply_date`, `upload_details`) VALUES
(3, 5, 0, '2019-02-02', '1'),
(4, 5, 0, '2019-02-06', '13'),
(5, 5, 0, '2019-02-02', '14'),
(23, 24, 1, '2019/04/09', 'Pending'),
(22, 27, 8, '2019/04/09', 'Pending'),
(15, 19, 1, '2019/04/06', 'Pending'),
(21, 19, 10, '2019/04/08', 'Approved'),
(24, 44, 1, '2019/04/09', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

DROP TABLE IF EXISTS `college`;
CREATE TABLE IF NOT EXISTS `college` (
  `clg_id` int(11) NOT NULL AUTO_INCREMENT,
  `clg_name` varchar(50) NOT NULL,
  `clg_city` varchar(50) NOT NULL,
  `clg_univ` varchar(50) NOT NULL,
  `clg_email` varchar(50) NOT NULL,
  `clg_contact` varchar(50) NOT NULL,
  `clg_website` varchar(50) NOT NULL,
  `clg_addr` varchar(100) NOT NULL,
  PRIMARY KEY (`clg_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`clg_id`, `clg_name`, `clg_city`, `clg_univ`, `clg_email`, `clg_contact`, `clg_website`, `clg_addr`) VALUES
(1, 'CSI', 'Dharwad', 'KUD', 'admin@csi.com', '9988776655', 'www.csi.com', 'Jubilee Circle Dharwad'),
(4, 'KCD', 'Dharwad', 'KUD', 'admin@kcd.com', '9988776655', 'kcd.com', 'Dharwad');

-- --------------------------------------------------------

--
-- Table structure for table `college_course`
--

DROP TABLE IF EXISTS `college_course`;
CREATE TABLE IF NOT EXISTS `college_course` (
  `clg_course_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `clg_id` int(11) NOT NULL,
  PRIMARY KEY (`clg_course_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `college_course`
--

INSERT INTO `college_course` (`clg_course_id`, `course_id`, `clg_id`) VALUES
(3, 1, 1),
(4, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `clg_id` int(11) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `course_desc` varchar(100) NOT NULL,
  `fees` int(11) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `clg_id`, `course_name`, `course_desc`, `fees`) VALUES
(1, 1, 'BCA', 'Bachelor of Computer Application', 24000),
(4, 0, 'test1', 'test1', 0),
(5, 0, 'test2', 'test2', 0),
(6, 4, 'BCom', 'Bachelor of Commerce', 250001),
(7, 1, 'BCom', 'Bachelor of Commerce', 25000),
(8, 1, 'MCom', 'Master of Commerce', 30000),
(9, 4, 'BCA', 'Bachelor of Computer Application', 25000),
(10, 4, 'BSc - CS', 'Bachelor of Science - Computer Science', 30000);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `events_id` int(11) NOT NULL AUTO_INCREMENT,
  `clg_id` int(11) NOT NULL,
  `event_name` varchar(50) NOT NULL,
  `event_date` varchar(50) NOT NULL,
  `event_details` varchar(100) NOT NULL,
  `event_contact` varchar(50) NOT NULL,
  PRIMARY KEY (`events_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`events_id`, `clg_id`, `event_name`, `event_date`, `event_details`, `event_contact`) VALUES
(4, 1, 'Aashakirana', '2019-04-05', 'AAAA', '9988776655'),
(5, 4, 'Freshers', '2019-04-12', 'wwww', '9988776655'),
(6, 4, '2', '2019-04-06', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

DROP TABLE IF EXISTS `facilities`;
CREATE TABLE IF NOT EXISTS `facilities` (
  `fac_id` int(11) NOT NULL AUTO_INCREMENT,
  `clg_id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `fdesc` varchar(100) NOT NULL,
  PRIMARY KEY (`fac_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`fac_id`, `clg_id`, `fname`, `fdesc`) VALUES
(1, 1, 'Library', 'Library');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `usertype` varchar(100) NOT NULL,
  `hintq` varchar(100) NOT NULL,
  `hinta` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `usertype`, `hintq`, `hinta`) VALUES
('ad123', 'adad', 'admin', 'My reg email id', 'admin@gmail.com'),
('col123', '123456', 'college', 'My reg email id', 'col@gmail.com'),
('stud123', '123456', 'student', 'My reg email id', 'stud@gmail.com'),
('ss@ss.com', '123456', 'student', 'quest', 'ans'),
('admin@csi.com', '1234', 'college', '', ''),
('admin@kcd.com', '123456', 'college', '', ''),
('test1', '123456', 'student', 'q', 'q'),
('prateek@gmail.com', 'asdf', 'student', 'Q', 'A'),
('aaaa', 'a', 'student', 'a', 'a'),
('anant@gmail.com', 'anant', 'student', 'Q', 'A'),
('a', 'a', 'college', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

DROP TABLE IF EXISTS `marks`;
CREATE TABLE IF NOT EXISTS `marks` (
  `marks_id` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` int(11) NOT NULL,
  `sslc_year` varchar(50) NOT NULL,
  `sslc_per` varchar(50) NOT NULL,
  `puc_year` varchar(50) NOT NULL,
  `puc_per` varchar(50) NOT NULL,
  PRIMARY KEY (`marks_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`marks_id`, `stud_id`, `sslc_year`, `sslc_per`, `puc_year`, `puc_per`) VALUES
(5, 24, '2012', '86.6', '2014', '76.6'),
(4, 19, '2014', '86.6', '2016', '74.6'),
(6, 27, '2014', '96', '2016', '85');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `stud_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`stud_id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stud_id`, `fname`, `mname`, `lname`, `email`, `contact`, `address`) VALUES
(24, 'Prateek', 'P', 'K', 'prateek@gmail.com', '9731935131', 'Malmaddi Dharwad'),
(3, 'x', 'y', 'z', 'ss@ss.com', '654654646', 'Address'),
(4, 'test', 'test', 'test', 'test1', '9731935131', 'test'),
(6, 'Prateek', 'P', 'K', 'ppp@jjj.com', '213456789', 'ajshdfkhskdjfhkj'),
(7, 'XXX', 'YYY', 'ZZZ', 'asdf@asdf.com', '97979797979', 'adfhm fghymgh jm,'),
(9, 'a', 'sdas', 'dasd', 'sadiasjod', '+8548', 'dsafAddress'),
(10, 'asd', 'dhgs', 'sfh', 'sfh', 'sfhg', 'Addsfghress'),
(11, 'adfgafdga', 'dfh', 'adfhafdh', 'dhdf', 'fhadfh', 'Addresadfhafdhs'),
(12, 'dfhsfh', 'fgjsfgj', 'sfgjsfgj', 'gfsjsjsfgj', 'sgfjsfgjs', 'Adsfgjsfgjdress'),
(13, 'afdghafh', 'afhadfh', 'adfhadfh', 'afhafdh', 'afhafhadfh', 'Addreafhafhss'),
(14, 'zfhjafdh', 'adfhadfh', 'afhafh', 'afdhadfh', 'afhadfh', 'Addrafhadfhess'),
(15, 'adfhadfh', 'adfhadfh', 'afhadfh', 'afdhafh', 'afhadfh', 'Addreafhss'),
(25, 'test', 'b', 'c', 'aaaa', '9999999999', 'a'),
(27, 'Anant', 'A', 'H', 'anant@gmail.com', '9731935131', 'Dharwad');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
