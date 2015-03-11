-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 05, 2014 at 07:43 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `students`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `somaiya_id` bigint(11) NOT NULL,
  `name` varchar(35) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `address` text NOT NULL,
  `password` varchar(100) NOT NULL,
  `dob` date NOT NULL DEFAULT '1995-01-01',
  `year` int(1) NOT NULL,
  `division` varchar(1) NOT NULL DEFAULT 'A',
  PRIMARY KEY (`id`),
  UNIQUE KEY `somaiya_id` (`somaiya_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `somaiya_id`, `name`, `email`, `mobile`, `address`, `password`, `dob`, `year`, `division`) VALUES
(1, 123456, 'utkarsh', 'dhawan.utkarsh@gmail.com', 12889, '12312', 'asdasd', '2014-07-12', 2, 'C'),
(2, 12234, 'utkarsh', 'ud_thewon@yahoo.co.in', 8879963918, '', '1404490124', '0000-00-00', 2, ''),
(4, 122333, 'utkarsh', 'ud_thewon@yahoo.co.in', 8879963918, '', '1404490332', '0000-00-00', 3, ''),
(5, 13124, 'UTKARSH', 'dhawan.utkarsh@gmail.com', 8879963918, '', '1404492099', '0000-00-00', 4, ''),
(7, 11111, 'ruchi', 'rd_dhawan@yahoo.co.uk', 9999999999, '', '1404492320', '0000-00-00', 2, ''),
(8, 111112, 'ruchi', 'rd_dhawan@yahoo.co.uk', 9999999999, '', '1404492658', '0000-00-00', 2, ''),
(10, 1111112, 'ruchi', 'rd_dhawan@yahoo.co.uk', 9999999999, '', '1404492708', '0000-00-00', 2, ''),
(12, 21380, 'UTKARSH', 'dhawan.utkarsh@gmail.com', 8879963918, '', '1404492759', '0000-00-00', 2, ''),
(15, 213801, 'UTKARSH', 'dhawan.utkarsh@gmail.com', 8879963918, '', '1404492789', '0000-00-00', 2, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
