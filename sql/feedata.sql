-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 12, 2019 at 06:36 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `feedata`
--

-- --------------------------------------------------------

--
-- Table structure for table `addnotice`
--

CREATE TABLE IF NOT EXISTS `addnotice` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `cls` varchar(200) NOT NULL,
  `notice` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `addnotice`
--

INSERT INTO `addnotice` (`id`, `title`, `date`, `cls`, `notice`) VALUES
(4, 'exam start', '2018-11-29', 'it', 'dsalkdjaks dasldkals askdl;as dasldklas dasldkas dalsdklas dasldklas dhags dsalkdjaks dasldkals askdl;as dasldklas dasldkas dalsdklas dasldklas dhags dsalkdjaks dasldkals askdl;as dasldklas dasldkas dalsdklas dasldklas dhags dsalkdjaks dasldkals askdl;as dasldklas dasldkas dalsdklas dasldklas dhags ');

-- --------------------------------------------------------

--
-- Table structure for table `addrequest`
--

CREATE TABLE IF NOT EXISTS `addrequest` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `cls` varchar(200) NOT NULL,
  `dept` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `request1` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `addrequest`
--

INSERT INTO `addrequest` (`id`, `name`, `email`, `cls`, `dept`, `date`, `request1`, `status`) VALUES
(2, 'kartik', 'aggarwalkartik002@gmail.com', 'b.tech', 'cse', '2019-04-19', 'dasdasdasd', 'ajdjahsjkd daksjd dakls'),
(3, 'kartik', 'aggarwalkartik002@gmail.com', 'b.tech', 'cse', '2019-04-15', 'chandigarh\r\nchandigarh ', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `pwd` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `pwd`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `coursesfee`
--

CREATE TABLE IF NOT EXISTS `coursesfee` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `cat` varchar(200) NOT NULL,
  `cls` varchar(200) NOT NULL,
  `dept` varchar(200) NOT NULL,
  `sem` varchar(200) NOT NULL,
  `s1` varchar(200) NOT NULL,
  `s2` varchar(200) NOT NULL,
  `s3` varchar(200) NOT NULL,
  `s4` varchar(200) NOT NULL,
  `s5` varchar(200) NOT NULL,
  `s6` varchar(200) NOT NULL,
  `s7` varchar(200) NOT NULL,
  `s8` varchar(200) NOT NULL,
  `total` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `coursesfee`
--

INSERT INTO `coursesfee` (`id`, `cat`, `cls`, `dept`, `sem`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `s7`, `s8`, `total`) VALUES
(2, 'sc', 'b.tech', 'it', '8', '34000', '34000', '34000', '34000', '34000', '34000', '34000', '34000', '272000');

-- --------------------------------------------------------

--
-- Table structure for table `examfee`
--

CREATE TABLE IF NOT EXISTS `examfee` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `cat` varchar(200) NOT NULL,
  `cls` varchar(200) NOT NULL,
  `dept` varchar(200) NOT NULL,
  `sem` varchar(200) NOT NULL,
  `fee` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `examfee`
--

INSERT INTO `examfee` (`id`, `cat`, `cls`, `dept`, `sem`, `fee`) VALUES
(1, 'sc', 'b.tech', 'ece', '5', '200'),
(2, 'sc', 'm.tech', 'cse', '4', '250');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `cls` varchar(200) NOT NULL,
  `img` varchar(200) NOT NULL,
  `dept` varchar(200) NOT NULL,
  `msg` varchar(2000) NOT NULL,
  `type` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `cls`, `img`, `dept`, `msg`, `type`) VALUES
(1, 'kartik', 'aggarwalkartik002@gmail.com', 'b.tech', 'upload/Lighthouse.jpg', 'cse', 'kamal  is aaaa ghg jhj kjjkl klkj ljhjh jhjh kjkj kljkj kljkj  kamal  is aaaa ghg jhj kjjkl klkj ljhjh jhjh kjkj kljkj kljkj  kamal  is aaaa ghg jhj kjjkl klkj ljhjh jhjh kjkj kljkj kljkj  kamal  is aaaa ghg jhj kjjkl klkj ljhjh jhjh kjkj kljkj kljkj  ', 'Suggestion'),
(2, 'kartik', 'aggarwalkartik002@gmail.com', 'b.tech', 'upload/Lighthouse.jpg', 'cse', 'dasdasda dasda', 'Feedback'),
(3, 'kartik', 'aggarwalkartik002@gmail.com', 'b.tech', 'upload/Lighthouse.jpg', 'cse', 'dasd dasdas  fsdf', 'Suggestion'),
(4, 'kartik', 'aggarwalkartik002@gmail.com', 'b.tech', 'upload/Lighthouse.jpg', 'cse', 'lll jashd JHASDJHDSJK AJHSDJKHdjkashd daskdjaks daskldjaklsj', 'Suggestion');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `date` varchar(200) NOT NULL,
  `place` varchar(200) NOT NULL,
  `img` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `date`, `place`, `img`, `title`) VALUES
(18, '2019-04-20', 'fsdfsdfs', 'upload/Koala.jpg', 'fsdfsd'),
(19, '2019-04-20', 'fsdfsdfs', 'upload/Lighthouse.jpg', 'fsdfsd'),
(20, '2019-04-20', 'fsdfsdfs', 'upload/Penguins.jpg', 'fsdfsd'),
(21, '2019-04-20', 'fsdfsdfs', 'upload/Tulips.jpg', 'fsdfsd'),
(22, '2019-04-20', 'fsdfsdfs', 'upload/Koala.jpg', 'fsdfsd'),
(23, '2019-04-20', 'fsdfsdfs', 'upload/Lighthouse.jpg', 'fsdfsd'),
(24, '2019-04-20', 'fsdfsdfs', 'upload/Penguins.jpg', 'fsdfsd'),
(25, '2019-04-20', 'fsdfsdfs', 'upload/Tulips.jpg', 'fsdfsd'),
(26, '2019-04-20', 'fsdfsdfs', 'upload/Koala.jpg', 'fsdfsd'),
(27, '2019-04-20', 'fsdfsdfs', 'upload/Lighthouse.jpg', 'fsdfsd'),
(28, '2019-04-20', 'fsdfsdfs', 'upload/Penguins.jpg', 'fsdfsd'),
(29, '2019-04-20', 'fsdfsdfs', 'upload/Tulips.jpg', 'fsdfsd'),
(30, '2019-04-20', 'fsdfsdfs', 'upload/Koala.jpg', 'fsdfsd'),
(31, '2019-04-20', 'fsdfsdfs', 'upload/Lighthouse.jpg', 'fsdfsd'),
(32, '2019-04-20', 'fsdfsdfs', 'upload/Penguins.jpg', 'fsdfsd'),
(33, '2019-04-20', 'fsdfsdfs', 'upload/Tulips.jpg', 'fsdfsd'),
(34, '2019-04-27', 'chandigarh', 'upload/2.jpg', 'event Images'),
(35, '2019-04-27', 'chandigarh', 'upload/3.jpg', 'event Images'),
(36, '2019-04-27', 'chandigarh', 'upload/4.jpg', 'event Images'),
(37, '2019-04-27', 'chandigarh', 'upload/5.jpg', 'event Images');

-- --------------------------------------------------------

--
-- Table structure for table `hostelfee`
--

CREATE TABLE IF NOT EXISTS `hostelfee` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `r_cat` varchar(200) NOT NULL,
  `r_type` varchar(200) NOT NULL,
  `r_price` varchar(200) NOT NULL,
  `sec_price` varchar(200) NOT NULL,
  `main_price` varchar(200) NOT NULL,
  `ele_price` varchar(200) NOT NULL,
  `total` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `hostelfee`
--

INSERT INTO `hostelfee` (`id`, `r_cat`, `r_type`, `r_price`, `sec_price`, `main_price`, `ele_price`, `total`) VALUES
(1, 'sc', 'ac', '2000', '500', '200', '200', '2900');

-- --------------------------------------------------------

--
-- Table structure for table `newuser`
--

CREATE TABLE IF NOT EXISTS `newuser` (
  `name` varchar(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `mname` varchar(200) NOT NULL,
  `no` varchar(200) NOT NULL,
  `img` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pwd` varchar(200) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `cls` varchar(200) NOT NULL,
  `dept` varchar(200) NOT NULL,
  `cat` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `status` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `newuser`
--

INSERT INTO `newuser` (`name`, `fname`, `mname`, `no`, `img`, `email`, `pwd`, `dob`, `cls`, `dept`, `cat`, `gender`, `id`, `status`) VALUES
('kartik', 'kamal', 'kiran', '08570801555', 'upload/Lighthouse.jpg', 'aggarwalkartik002@gmail.com', 'kamal', '2019-04-18', 'b.tech', 'cse', 'sc', 'male', 2, 'Active');
