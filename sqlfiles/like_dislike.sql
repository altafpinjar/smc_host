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
-- Table structure for table `like_dislike`
--

CREATE TABLE IF NOT EXISTS `like_dislike` (
  `id` int(11) NOT NULL,
  `imageId` int(11) NOT NULL,
  `userName` varchar(20) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `like_dislike`
--

INSERT INTO `like_dislike` (`id`, `imageId`, `userName`, `date_time`) VALUES
(2, 13, 'sms111', '2018-02-14 17:12:57'),
(5, 1, 'sms111', '2018-02-14 17:17:50'),
(18, 25, 'sms111', '2018-02-16 17:11:54'),
(19, 23, 'sms111', '2018-02-16 17:12:06'),
(29, 2, '', '2018-02-19 15:22:56'),
(30, 3, '', '2018-02-19 15:23:04'),
(31, 5, '', '2018-02-19 15:23:11'),
(35, 7, '', '2018-02-19 15:39:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `like_dislike`
--
ALTER TABLE `like_dislike`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `like_dislike`
--
ALTER TABLE `like_dislike`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
