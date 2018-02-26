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
-- Table structure for table `download`
--

CREATE TABLE IF NOT EXISTS `download` (
  `id` int(11) NOT NULL,
  `imageId` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `download`
--

INSERT INTO `download` (`id`, `imageId`, `userName`, `date_time`) VALUES
(1, 1, 'sms111', '2018-02-14 17:25:06'),
(2, 2, 'sms111', '2018-02-14 17:25:13'),
(3, 1, 'sms111', '2018-02-14 17:26:09'),
(4, 14, 'sms111', '2018-02-14 17:27:54'),
(5, 16, 'sms111', '2018-02-14 17:28:02'),
(6, 25, '', '2018-02-16 11:00:41'),
(7, 25, '', '2018-02-16 11:06:55'),
(8, 24, '', '2018-02-16 11:07:05'),
(9, 14, '', '2018-02-16 12:12:45'),
(10, 25, 'sms111', '2018-02-16 15:48:51'),
(11, 24, 'sms111', '2018-02-16 15:48:58'),
(12, 25, 'sms111', '2018-02-16 15:53:40'),
(13, 1, '', '2018-02-19 11:39:12'),
(14, 1, '', '2018-02-19 11:57:04'),
(15, 1, '', '2018-02-19 14:54:29'),
(16, 25, '', '2018-02-19 15:32:01'),
(17, 25, '', '2018-02-19 15:32:10'),
(18, 25, '', '2018-02-19 15:32:48'),
(19, 25, '', '2018-02-19 15:34:56'),
(20, 9, 'sms111', '2018-02-19 16:25:06'),
(21, 9, 'sms111', '2018-02-19 16:25:39'),
(22, 25, 'sms111', '2018-02-19 18:02:23'),
(23, 25, 'sms111', '2018-02-19 18:02:27'),
(24, 24, 'sms111', '2018-02-19 18:02:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
