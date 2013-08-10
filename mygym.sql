-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 08, 2013 at 08:48 PM
-- Server version: 5.5.24
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


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

--
-- Dumping data for table `admin`
--


-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `clt_id` int(10) NOT NULL AUTO_INCREMENT,
  `clt_card_id` int(10) NOT NULL,
  `clt_Fname` varchar(20) NOT NULL,
  `clt_Lname` varchar(20) NOT NULL,
  `clt_email` varchar(50) NOT NULL,
  `clt_adresse` varchar(50) NOT NULL,
  `clt_weight` int(11) NOT NULL,
  `clt_gender` bit(11) NOT NULL,
  `clt_country` varchar(20) NOT NULL,
  `clt_city` varchar(50) NOT NULL,
  `clt_datesubsc` date NOT NULL,
  `clt_trng` tinyint(1) NOT NULL COMMENT 'clt training with or with out supervision of a trainer ',
  `clt_pwd` varchar(10) NOT NULL,
  PRIMARY KEY (`clt_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `clients`
--


-- --------------------------------------------------------

--
-- Table structure for table `clt_subscription`
--

CREATE TABLE IF NOT EXISTS `clt_subscription` (
  `card_id` int(10) NOT NULL,
  `clt_join_date` date NOT NULL,
  `clt_days` int(10) NOT NULL,
  `clt_subscriptionType_id` int(10) NOT NULL,
  PRIMARY KEY (`card_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clt_subscription`
--


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

--
-- Dumping data for table `exercises`
--

INSERT INTO `exercises` (`exercise_id`, `shoulder`, `chest`, `bic_tric`, `under-arm`, `legs`, `back`) VALUES
(1, 1, 1, 1, 1, 0, 0),
(2, 0, 0, 0, 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `subscription_type`
--

CREATE TABLE IF NOT EXISTS `subscription_type` (
  `Subscription_type` int(11) NOT NULL,
  `Subscription_name` int(11) NOT NULL COMMENT 'its about the package wish the clt choose for trng'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscription_type`
--

INSERT INTO `subscription_type` (`Subscription_type`, `Subscription_name`) VALUES
(1, 10),
(2, 30),
(3, 90);

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE IF NOT EXISTS `trainer` (
  `tr_id` int(11) NOT NULL,
  `tr_name` int(11) NOT NULL,
  `tr_Lname` int(11) NOT NULL,
  `tr_pwd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainer`
--


-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_name` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--


-- --------------------------------------------------------

--
-- Table structure for table `workout`
--

CREATE TABLE IF NOT EXISTS `workout` (
  `workout_id` int(10) NOT NULL,
  `id_clt` int(11) NOT NULL,
  `clt_card_id` int(11) NOT NULL,
  `1st_exercise` varchar(50) NOT NULL,
  `2nd_exercise` varchar(50) NOT NULL,
  `3rd_exercise` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workout`
--


-- --------------------------------------------------------

--
-- Table structure for table `workout_type`
--

CREATE TABLE IF NOT EXISTS `workout_type` (
  `workout_id_ex` int(11) NOT NULL COMMENT 'workout id to define type for worout',
  `workout_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workout_type`
--

INSERT INTO `workout_type` (`workout_id_ex`, `workout_type`) VALUES
(1, 'upper_body'),
(2, 'lower_body');
