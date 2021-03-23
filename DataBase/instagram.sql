-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 18, 2021 at 07:54 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `instagram`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `ID` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `caption` varchar(1000) NOT NULL,
  `time` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `likes` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`ID`, `image`, `caption`, `time`, `email`, `likes`) VALUES
(6, 'images/noman1611927800.jpg', 'haider ali', '18:43:20', 'nomanali2727@gmail.com', 0),
(7, 'images/noman1611927833.jpg', 'ahmad ali awan', '18:43:53', 'nomanali2727@gmail.com', 0),
(8, 'images/noman1611931389.jpg', 'kia haal hai bhai jan', '19:43:09', 'nomanali2727@gmail.com', 0),
(9, 'images/haide1611934636.jpg', 'kia haal hai bhai jan', '20:37:16', 'haider@abc.com', 0),
(10, 'images/asifa1611941125.jpg', 'kia haal hai sabka', '22:25:25', 'asifali@gmail.com', 0),
(11, 'images/zain@1612008944.jpg', 'mein pagal hun', '17:15:44', 'zain@apple.com', 0),
(12, 'images/zain@1612014422.jpg', 'Aaam khayega aaam?', '18:47:02', 'zain@apple.com', 0),
(23, 'images/khali1612038754.jpg', 'dada here...! ', '01:32:34', 'khalid@dada.com', 0),
(25, 'images/touse1612624128.jpg', 'hello bhai', '20:08:48', 'touseef@88.com', 0),
(26, 'images/azhar1612762257.jpg', 'Hello Coders!', '10:30:57', 'azhardurani@gmail.com', 0),
(27, 'images/Mohsi1613636004.jpg', 'Insta', '13:13:24', 'Mohsin@bhatti.com', 0),
(28, 'images/noman1615752945.jpg', 'registan', '01:15:45', 'nomanali2727@gmail.com', 0),
(32, 'images/haide1615876956.jpg', 'khana khaa lo', '11:42:36', 'haider@abc.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `UserInfo`
--

CREATE TABLE `UserInfo` (
  `UID` int(255) NOT NULL,
  `User` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `firsr_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `UserInfo`
--

INSERT INTO `UserInfo` (`UID`, `User`, `Password`, `firsr_name`, `last_name`) VALUES
(1, 'nomanali2727@gmail.com', 'haiderali', 'haider', 'ali'),
(3, 'haider@abc.com', 'haiderali', 'ali', 'ahmad'),
(4, 'asifali@gmail.com', 'haider', 'asif', 'ali'),
(5, 'zain@apple.com', '323334', 'zain', 'ali'),
(6, 'khalid@dada.com', 'dada123', 'khalid', 'siddiqui'),
(7, 'touseef@88.com', 'touseef', 'touseef', 'ali'),
(8, 'azhardurani@gmail.com', 'azhar123', 'azhar', 'durrani'),
(9, 'sana@abc.com', 'apple', 'haider', 'ali'),
(10, 'Mohsin@bhatti.com', '12345', 'Mohsin', 'Bhatti'),
(14, 'amy@new.com', 'haiderali', 'amy', 'ali');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `UserInfo`
--
ALTER TABLE `UserInfo`
  ADD PRIMARY KEY (`UID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `UserInfo`
--
ALTER TABLE `UserInfo`
  MODIFY `UID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
