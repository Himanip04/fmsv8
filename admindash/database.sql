 Server: localhost -  Database: fms
-- phpMyAdmin SQL Dump
-- version 3.1.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 23, 2020 at 12:19 PM
-- Server version: 5.1.32
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `fms`
--

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE IF NOT EXISTS `personal` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `mnane` varchar(15) NOT NULL,
  `dob` varchar(8) NOT NULL,
  `aname` int(12) NOT NULL,
  `parents_con` int(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `category` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `standard` int(10) NOT NULL,
  `roll_no` int(10) NOT NULL,
  `rnumber` varchar(10) NOT NULL,
  `marks` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`id`, `name`, `fname`, `mnane`, `dob`, `aname`, `parents_con`, `address`, `category`, `gender`, `standard`, `roll_no`, `rnumber`, `marks`) VALUES
(3, 'HIMANI PANT  ', 'jagdish chandra', 'deepa pant', '4-10-200', 2147483647, 2147483647, 'sugar mill bazar doiwala dehradun-248140  ', 'on  ', 'on  ', 8, 0, '3454676786', 78);

