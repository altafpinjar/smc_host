-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2018 at 12:59 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sellmyclick`
--

-- --------------------------------------------------------

--
-- Table structure for table `smc_signup`
--

CREATE TABLE IF NOT EXISTS `smc_signup` (
  `id` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `displayName` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `smc_signup`
--

INSERT INTO `smc_signup` (`id`, `userName`, `displayName`, `email`) VALUES
(1, 'altafgmailcom', 'altaf', 'altaf@gmail.com'),
(2, 'altafp', 'altafp', 'altafp@gmail.com'),
(3, 'aaa', 'aaaa', 'aaaa@gmail.com'),
(4, 'aaa', 'aaaa', 'aaaaa@gmail.com'),
(5, 'aaa', 'aaaa', 'aaaaaa@gmail.com'),
(6, 'aaaa', 'aaaaaa', 'altafaa@gmail.com'),
(7, 'maktum', 'maktum', 'maktum1@gmail.com'),
(8, 'maktum95', 'maktum', 'maktum95@gmail.com'),
(9, 'maktum123', 'maktum123', 'maktum123@gmail.com'),
(10, 'altafp', 'altafp', 'altafp@gmail.com'),
(11, 'sumaiya', 'sumaiya', 'sumaiya@gmail.com'),
(12, 'sumaiya', 'sumaiya', 'sumaiya123@gmail.com'),
(13, 'altaf', 'altaf', 'altaf123@gmail.com'),
(14, 'altaf1', 'altaf1', 'altaf1@gmail.com'),
(15, 'shweta143', 'shweta', 'shweta.ss299@gmail.com'),
(16, 'sms111', 'sumaiya', 'sumaiya@gmail.comm'),
(17, 'sumaiya1', 'sumaiya', 'sumaiya1234@gmail.com'),
(18, 'Altaf', 'altaf', 'altaf@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `smc_signup`
--
ALTER TABLE `smc_signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `smc_signup`
--
ALTER TABLE `smc_signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
