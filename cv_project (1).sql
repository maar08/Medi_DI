-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2023 at 09:11 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv_project`
--
CREATE DATABASE IF NOT EXISTS `cv_project` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cv_project`;

-- --------------------------------------------------------

--
-- Table structure for table `cv_info`
--

CREATE TABLE `cv_info` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `birthday` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `language` varchar(50) DEFAULT NULL,
  `skill` varchar(500) DEFAULT NULL,
  `companyname` varchar(100) NOT NULL,
  `cposition` varchar(100) DEFAULT NULL,
  `cstartdate` date DEFAULT NULL,
  `cenddate` date DEFAULT NULL,
  `collegename` varchar(100) NOT NULL,
  `schoolname` varchar(100) NOT NULL,
  `volunteering` varchar(500) DEFAULT NULL,
  `training` varchar(500) DEFAULT NULL,
  `image` varchar(500) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cv_info`
--

INSERT INTO `cv_info` (`id`, `name`, `address`, `phone`, `email`, `birthday`, `gender`, `language`, `skill`, `companyname`, `cposition`, `cstartdate`, `cenddate`, `collegename`, `schoolname`, `volunteering`, `training`, `image`, `username`) VALUES
(1, 'Madina', 'Yakkasaray, Tashkent, Uzbekistan', 974400530, 'mukimova01@gmail.com', '2001-02-08', 'female', 'Russian, English, Uzbek, French', 'responsible', 'MDIST', 'Assistant manager', '2022-04-20', '0000-00-00', 'ALUWED', 'Academy', 'Active volunteer', '', 'images/m.jpg', 'Medi_'),
(2, '', NULL, NULL, 'zoo@mdis.uz', '2001-06-18', 'female', NULL, NULL, '', NULL, NULL, NULL, '', '', '', '', '', 'Zukhra'),
(3, 'Maxbuba', 'Яккасарай', 946649788, 'max@gmail.com', '1963-11-09', 'female', '', 'communication', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', 'Maxbuba'),
(4, 'Ruslan', 'Chilanzar', 2147483647, 'careercentre@mdis.uz', '1992-09-02', 'male', 'rus eng', 'intelligent', 'mdis', '', '2021-12-20', '0000-00-00', '', '', '', '', '', 'Ruslan'),
(5, '', NULL, NULL, 'careercentre@mdis.uz', '1996-12-24', 'female', NULL, NULL, '', NULL, NULL, NULL, '', '', NULL, NULL, '', 'Gulsanam'),
(6, '', NULL, NULL, 'admin', '2023-05-13', 'female', NULL, NULL, '', NULL, NULL, NULL, '', '', NULL, NULL, '', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `is_admin` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `email`, `password`, `is_admin`) VALUES
(1, 'Medi_', 'mukimova01@gmail.com', '123', 0),
(2, 'Rashid', 'b2005003@mdis.uz', '456', 0),
(3, 'Zukhra', 'zoo@mdis.uz', 'zoo', 0),
(4, 'Maxbuba', 'max@gmail.com', 'mama', 0),
(5, 'Ruslan', 'careercentre@mdis.uz', '789', 0),
(6, 'Gulsanam', 'careercentre@mdis.uz', 'pdc', 0),
(17, 'admin', '', 'm123admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `content` text DEFAULT NULL,
  `date_posted` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `content`, `date_posted`) VALUES
(1, 'Dear All!\r\n\r\nYou are cordially invited to the mnemonics training with Mr Shokhrukh. \r\n\r\n‼️IMPORTANT for those who struggle to memorize essential information for final examinations‼️\r\n\r\nTopic:\r\n1️⃣ - How to train memory;\r\n2️⃣ - How to read more and not be lazy;\r\n3️⃣ - Methods of fast and long-term memorization with mnemonics.\r\n\r\nDate: May 18, 2023\r\nTime: 12:00\r\nVenue: 110B', '2023-05-17 17:03:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cv_info`
--
ALTER TABLE `cv_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cv_info`
--
ALTER TABLE `cv_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
