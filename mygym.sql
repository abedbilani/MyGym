-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 02, 2013 at 10:16 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mygym`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `user_name` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `clt_id` int(10) NOT NULL AUTO_INCREMENT,
  `clt_card_id` int(10) NOT NULL,
  `clt_Fname` char(20) NOT NULL,
  `clt_Lname` char(20) NOT NULL,
  `clt_email` char(50) NOT NULL,
  `clt_adresse` char(50) NOT NULL,
  `clt_weight` int(11) NOT NULL,
  `clt_gender` bit(11) NOT NULL,
  `clt_country` char(20) NOT NULL,
  `clt_city` char(50) NOT NULL,
  `clt_datesubsc` date NOT NULL,
  `clt_pwd` char(10) NOT NULL,
  PRIMARY KEY (`clt_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`clt_id`, `clt_card_id`, `clt_Fname`, `clt_Lname`, `clt_email`, `clt_adresse`, `clt_weight`, `clt_gender`, `clt_country`, `clt_city`, `clt_datesubsc`, `clt_pwd`) VALUES
(1, 123, 'abed', 'bilani', 'abed.bilani@gmail.com', 'asssssss', 62, b'01000110000', 'lb', 'brt', '2013-10-03', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `clt_subscription`
--

CREATE TABLE IF NOT EXISTS `clt_subscription` (
  `clt_id` int(10) NOT NULL AUTO_INCREMENT,
  `clt_join_date` date NOT NULL,
  `clt_days` int(10) NOT NULL,
  `clt_subscriptionType_id` int(10) NOT NULL,
  PRIMARY KEY (`clt_id`),
  UNIQUE KEY `clt_id` (`clt_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `clt_subscription`
--

INSERT INTO `clt_subscription` (`clt_id`, `clt_join_date`, `clt_days`, `clt_subscriptionType_id`) VALUES
(1, '2013-10-03', 12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `clt_wrkout`
--

CREATE TABLE IF NOT EXISTS `clt_wrkout` (
  `user_name` varchar(11) NOT NULL,
  `first` varchar(11) NOT NULL,
  `second` varchar(11) NOT NULL,
  `third` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clt_wrkout`
--

INSERT INTO `clt_wrkout` (`user_name`, `first`, `second`, `third`) VALUES
('abed', 'bla', 'bla b', 'bla3'),
('abed', '12', '123', '13'),
('abed', 'bla', '123', 'bla3'),
('abed', '12', '123', '13'),
('', '12', '123', '13'),
('abed', '12', '123', '13'),
('abed', '12', '123', '13'),
('abed', '12', '123', '13'),
('', '12', '123', '13'),
('abed', '12', '123', '13'),
('abed', '12', '123', '13'),
('abed', '12', '123', '13'),
('abed', '12', '123', '13');

-- --------------------------------------------------------

--
-- Table structure for table `days`
--

CREATE TABLE IF NOT EXISTS `days` (
  `clt_id` int(10) NOT NULL AUTO_INCREMENT,
  `clt_card_id` int(11) NOT NULL,
  `clt_days` int(11) NOT NULL,
  PRIMARY KEY (`clt_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `days`
--

INSERT INTO `days` (`clt_id`, `clt_card_id`, `clt_days`) VALUES
(1, 123, 164);

-- --------------------------------------------------------

--
-- Table structure for table `exercises`
--

CREATE TABLE IF NOT EXISTS `exercises` (
  `exercise_id` int(10) NOT NULL,
  `shoulder` tinyint(1) NOT NULL,
  `chest` tinyint(1) NOT NULL,
  `bic_tric` tinyint(1) NOT NULL,
  `under-arm` tinyint(1) NOT NULL,
  `legs` tinyint(1) NOT NULL,
  `back` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subscription_type`
--

CREATE TABLE IF NOT EXISTS `subscription_type` (
  `Subscription_type` int(50) NOT NULL,
  `Subscription_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscription_type`
--

INSERT INTO `subscription_type` (`Subscription_type`, `Subscription_name`) VALUES
(1, 'daily'),
(2, 'weekly'),
(3, 'monthly');

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE IF NOT EXISTS `trainer` (
  `tr_id` int(11) NOT NULL,
  `tr_name` varchar(11) NOT NULL,
  `tr_Lname` varchar(11) NOT NULL,
  `tr_pwd` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`tr_id`, `tr_name`, `tr_Lname`, `tr_pwd`) VALUES
(1, 'trainer ', '1', '123'),
(3, 'abed', 'bi', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_name` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_name`, `password`, `user_id`) VALUES
('abed', '12345678', 1);

-- --------------------------------------------------------

--
-- Table structure for table `workout`
--

CREATE TABLE IF NOT EXISTS `workout` (
  `workout_id` int(50) NOT NULL,
  `workout_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workout`
--

INSERT INTO `workout` (`workout_id`, `workout_name`) VALUES
(1, 'abs-workout2.jpg'),
(1, 'abs-workout1.jpg'),
(1, 'abs-workout3.jpg'),
(2, 'back-workout1.jpg'),
(2, 'back-workout2.jpg'),
(2, 'back-workout3.jpg'),
(2, 'back-workout4.jpg'),
(3, 'biceps-workout1.jpg'),
(3, 'biceps-workout2.jpg'),
(3, 'biceps-workout3.jpg'),
(3, 'biceps-workout4.jpg'),
(4, 'chest-workout1.jpg'),
(4, 'chest-workout2.jpg'),
(4, 'chest-workout3.jpg'),
(4, 'chest-workout4.jpg'),
(5, 'leg-workout1.jpg'),
(5, 'leg-workout2.jpg'),
(5, 'leg-workout3.jpg'),
(5, 'leg-workout4.jpg'),
(6, 'shoulders-workout1.jpg'),
(6, 'shoulders-workout2.jpg'),
(6, 'shoulders-workout3.jpg'),
(6, 'shoulders-workout4.jpg'),
(7, 'triceps-workout1.jpg'),
(7, 'triceps-workout2.jpg'),
(7, 'triceps-workout3.jpg'),
(7, 'triceps-workout4.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
