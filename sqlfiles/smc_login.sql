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
-- Table structure for table `smc_login`
--

CREATE TABLE IF NOT EXISTS `smc_login` (
  `id` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pNumber` varchar(16) NOT NULL,
  `password` varchar(255) NOT NULL,
  `signe_up_dateTime` datetime NOT NULL,
  `loginDateTime` datetime NOT NULL,
  `tempPassword` varchar(255) NOT NULL,
  `active` varchar(50) NOT NULL,
  `ip` int(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `smc_login`
--

INSERT INTO `smc_login` (`id`, `userName`, `email`, `pNumber`, `password`, `signe_up_dateTime`, `loginDateTime`, `tempPassword`, `active`, `ip`) VALUES
(1, 'maktum111', 'maktum@gmail.com', '1234567890', '12345678', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', 0),
(17, 'sms111', 'sumaiya@gmail.comm', '', 'jkno3bthqn1nlfn0jjcv1f22f6ce6e58a7326c5b5dd197973105g7qsrvg5nbj8g3dz5xsn', '2018-02-10 15:13:14', '2018-02-21 10:39:39', '', '0', 1),
(19, 'Altaf', 'altaf@gmail.com', '9999999999', '9ob8d8tij3tc768wb6joaf1b9a30a3b83e42264cc28a952e6e138nhs43q696bav1ab1ejx', '2018-02-21 11:47:00', '2018-02-21 11:47:10', '', '0', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `smc_login`
--
ALTER TABLE `smc_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `smc_login`
--
ALTER TABLE `smc_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
