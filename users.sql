-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 30, 2017 at 03:08 PM
-- Server version: 5.5.49-0ubuntu0.14.04.1-log
-- PHP Version: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sample`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `age`, `email`, `password`) VALUES
(1, 'Mahesh', 'Perla', 23, 'mahesh@gmail.com', 'mahesh213'),
(2, 'Ramesh', 'Reddy', 2, 'ramehs@gmail.com', 'ramehs143'),
(3, 'Krishan', 'koundanyia', 20, 'kkr@gmail.com', 'kk3213'),
(4, 'Umang', 'tripathi', 23, 'tumang@gmail.com', 'tumang3613'),
(5, 'Mukesh', 'Ambani', 45, 'amaniM@gmail.com', 'amaniM213'),
(6, 'Kailesh', 'yadav', 56, 'kailash@gmail.com', 'kailash@#'),
(7, 'Girish', 'kulkarni', 92, 'giriesh@gmail.com', 'kulkarni098'),
(8, 'amit', 'tripathi', 53, 'amit@gmail.com', 'amit12'),
(9, 'sandep', 'boyina', 17, 'boyinaS@gmail.com', 'bbbs9643'),
(10, 'lalit', 'kumar', 22, 'lalit@gmail.com', 'lalit45');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
