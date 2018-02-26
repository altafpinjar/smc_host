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
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `imageCategory` varchar(15) NOT NULL,
  `description` varchar(200) NOT NULL,
  `imagePrice` varchar(10) NOT NULL,
  `image` varchar(200) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `userName`, `name`, `imageCategory`, `description`, `imagePrice`, `image`, `date_time`) VALUES
(1, 'altaf1', 'img', 'Nature', 'aaaaaa', '123', 'upload/art1.jpg', '2018-02-10 10:53:27'),
(2, 'altaf1', '12', 'Nature', 'asdsfda', '1111', 'upload/Hrithik-Roshan-In-Black-Suit-.jpg', '2018-02-10 10:56:44'),
(3, 'shweta143', 'sss', 'Education', 'sss', '12312', 'upload/hrithik-roshan-3.jpg', '2018-02-10 11:23:30'),
(4, 'shweta143', 'eee', 'Nature', 'eee', '22344', 'upload/sudeep-story_647_102715063144_0.jpg', '2018-02-10 11:23:44'),
(5, 'altaf1', 'qqq', 'Architecture', 'qqqqqqqqqqqqqqqqqq', '123', 'upload/sudeep-story_647_102715063144_0.jpg', '2018-02-10 15:01:10'),
(6, 'sms111', 'ttttt', 'Nature', 'ttttttt', '5346354', 'upload/tattoo-simple-style-19-48a6c1979fe585e160c869d7511d300b-music-heart-tattoo-jpg.jpg', '2018-02-10 15:13:48'),
(7, 'altaf1', 'aaaaa', 'Technology', '', '', 'upload/hrx.jpg', '2018-02-10 16:32:21'),
(8, 'altaf1', 'qwer', 'Photgraphy', '', '', 'upload/Camera-L.png', '2018-02-10 16:36:02'),
(9, 'altaf1', 'qwer', 'Photgraphy', '', '', 'upload/Camera-L.png', '2018-02-10 16:37:58'),
(10, 'altaf1', 'qwer', 'Photgraphy', '', '', 'upload/Camera-L.png', '2018-02-10 16:38:45'),
(11, 'altaf1', 'wwwwwwwwwww', 'Technology', '', '', 'upload/1.jpeg', '2018-02-10 16:45:50'),
(12, 'altaf1', 'yyyyyyyyyyy', 'Architecture', 'yyyyyyyyyyy', '', 'upload/APJ-Abdul-Kalam.jpg', '2018-02-10 16:49:47'),
(13, 'altaf1', 'yyyyyyyyyyy', 'Architecture', 'yyyyyyyyyyy', '', 'upload/APJ-Abdul-Kalam.jpg', '2018-02-10 16:50:18'),
(14, 'altaf1', 'yyyyyyyyyyy', 'Architecture', 'yyyyyyyyyyy', '', 'upload/APJ-Abdul-Kalam.jpg', '2018-02-10 16:51:12'),
(15, 'altaf1', 'yyyyyyyyyyy', 'Architecture', 'yyyyyyyyyyy', '', 'upload/APJ-Abdul-Kalam.jpg', '2018-02-10 16:52:33'),
(16, 'altaf1', '', 'Architecture', 'eeeeeeeeeeeeeee', '', 'upload/7.jpg', '2018-02-10 17:13:27'),
(17, 'altaf1', '', 'Education', '', '', 'upload/5.jpg', '2018-02-10 17:13:46'),
(18, 'sms111', 'fdgfhgfh', 'Interior', 'fhhhhhhhhhhhhgf', '', 'upload/7.jpg', '2018-02-10 17:26:13'),
(19, 'sms111', 'fdgfhgfh', 'Interior', 'fhhhhhhhhhhhhgf', '', 'upload/7.jpg', '2018-02-10 17:27:13'),
(20, 'sms111', 'yyyyyyyyyyy', 'Architecture', 'yyyyyyyyyyy', '', 'upload/APJ-Abdul-Kalam.jpg', '2018-02-10 17:28:42'),
(21, 'sms111', 'yyyyyyyyyyy', 'Architecture', 'yyyyyyyyyyy', '', 'upload/APJ-Abdul-Kalam.jpg', '2018-02-10 17:29:52'),
(22, 'sms111', 'weeeeee', 'Nature', 'eeeeeeeeeeeeeee', '', 'upload/10.jpg', '2018-02-10 17:32:51'),
(23, 'sms111', 'pppppppppppppppppp', 'Monuments', 'ppppppppppppppp', '', 'upload/cam.jpeg', '2018-02-10 17:33:47'),
(24, 'sms111', 'pppppppppppppppppp', 'Monuments', 'ppppppppppppppp', '', 'upload/cam.jpeg', '2018-02-10 17:42:38'),
(25, 'sms111', 'aaaaaa', 'Adventure', 'asdfghjkl', '', 'upload/Matrix-World-Map-HD-Wallpaper.jpg', '2018-02-15 12:43:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
