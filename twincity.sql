-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2023 at 01:17 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `twincity`
--

-- --------------------------------------------------------

--
-- Table structure for table `liverpool`
--

CREATE TABLE `liverpool` (
  `Royal Albert Dock` varchar(1000) NOT NULL,
  `Liverpool Cathedral` varchar(1000) NOT NULL,
  `Beatles Story Museum` varchar(1000) NOT NULL,
  `Sefton Park` varchar(1000) NOT NULL,
  `Anfield` varchar(1000) NOT NULL,
  `St Georges Hall Liverpool` varchar(1000) NOT NULL,
  `Contemporary` varchar(1000) NOT NULL,
  `Tate Liverpool` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `new orleans`
--

CREATE TABLE `new orleans` (
  `National WWII Museum` varchar(1000) NOT NULL,
  `Jackson Square` varchar(1000) NOT NULL,
  `New Orleans City Park` varchar(1000) NOT NULL,
  `St.Louis Cathedral` varchar(1000) NOT NULL,
  `Audubon Zoo` varchar(1000) NOT NULL,
  `Mardi Gras World` varchar(1000) NOT NULL,
  `Museum of Art` varchar(1000) NOT NULL,
  `Preservation` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
