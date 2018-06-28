-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2017 at 10:21 AM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `tester`
--

CREATE TABLE IF NOT EXISTS `tester` (
  `first` varchar(30) NOT NULL,
  `last` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `q1` varchar(2) NOT NULL,
  `q2` varchar(2) NOT NULL,
  `q3` varchar(2) NOT NULL,
  `q4` varchar(2) NOT NULL,
  `q5` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tester`
--

INSERT INTO `tester` (`first`, `last`, `email`, `password`, `phone`, `q1`, `q2`, `q3`, `q4`, `q5`) VALUES
('akshay', 'chauhan', 'akshaychauhan0601@gmail.com', 'akshay123', '8755753681', '6', '36', '15', 'Co', 'Ju'),
('PARUL', 'KAUSHIK', 'parulkaushik58@gmail.com', 'parul1997', '9811019366', '14', '36', '60', 'St', 'Ju'),
('manishika', 'sinha', 'manishikasinha@gmail.com', '12345', '8979601366', '6', '36', '15', 'An', 'Ba');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
