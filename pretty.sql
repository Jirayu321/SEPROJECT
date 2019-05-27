-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2019 at 11:20 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pretty`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(5) UNSIGNED NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `p_Like1` int(5) NOT NULL DEFAULT '0',
  `p_Like2` int(5) NOT NULL DEFAULT '0',
  `p_Like3` int(5) NOT NULL DEFAULT '0',
  `p_Like4` int(5) NOT NULL DEFAULT '0',
  `View1` int(5) NOT NULL DEFAULT '0',
  `View2` int(5) NOT NULL DEFAULT '0',
  `View3` int(5) NOT NULL DEFAULT '0',
  `View4` int(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `Username`, `Password`, `p_Like1`, `p_Like2`, `p_Like3`, `p_Like4`, `View1`, `View2`, `View3`, `View4`) VALUES
(1, 'admin', '123456', 1, 3, 4, 3, 0, 0, 0, 0),
(2, 'root', '1234', 1, 1, 0, 0, 0, 0, 0, 0),
(3, 'pond', '123456', 1, 1, 0, 0, 5, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pretty`
--

CREATE TABLE `pretty` (
  `id` int(5) UNSIGNED NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Profile` varchar(255) NOT NULL,
  `View` int(5) NOT NULL DEFAULT '0',
  `p_Like1` int(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pretty`
--

INSERT INTO `pretty` (`id`, `Name`, `Profile`, `View`, `p_Like1`) VALUES
(1, 'กิ่งไผ่', '', 178, 2),
(2, 'พิชานา อยู่สุข', '', 32, 2),
(3, 'โบวี่', '', 9, 5),
(4, 'เบสท์', '', 11, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pretty`
--
ALTER TABLE `pretty`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pretty`
--
ALTER TABLE `pretty`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
