-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 13, 2019 at 12:17 AM
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
