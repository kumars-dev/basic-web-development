-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2022 at 11:58 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mehndiart`
--

-- --------------------------------------------------------

--
-- Table structure for table `postdetail`
--

CREATE TABLE `postdetail` (
  `pno` int(255) NOT NULL,
  `postname` varchar(255) NOT NULL,
  `dates` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `postdetail`
--

INSERT INTO `postdetail` (`pno`, `postname`, `dates`, `images`) VALUES
(1, 'mehndi1', 'Tue,May 31,2022', 'accessories-5271140__340.jpg'),
(2, 'mehndi2', 'Tue,May 31,2022', 'applying-5122402__340.jpg'),
(3, 'mehndi3', 'Tue,May 31,2022', 'arabic-5177209__340.jpg'),
(4, 'mehndi4', 'Tue,May 31,2022', 'arabic-5249256__340.jpg'),
(5, 'mehndi5', 'Tue,May 31,2022', 'art-5243381__340.jpg'),
(6, 'mehndi6', 'Tue,May 31,2022', 'art-5535384__340.jpg'),
(7, 'mehndi7', 'Tue,May 31,2022', 'background-5346315__340.jpg'),
(8, 'mehndi8', 'Tue,May 31,2022', 'background-5346315__340.jpg'),
(9, 'mehndi9', 'Tue,May 31,2022', 'background-5346318__340.jpg'),
(10, 'mehndi10', 'Tue,May 31,2022', 'background-5346319__340.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `userdetail`
--

CREATE TABLE `userdetail` (
  `userid` int(255) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdetail`
--

INSERT INTO `userdetail` (`userid`, `firstname`, `lastname`, `username`, `password`, `role`) VALUES
(1, 'montu', 'kumar', 'montu', 'da10b3d3244d33e3d43d8aa90c1c4ee9', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `postdetail`
--
ALTER TABLE `postdetail`
  ADD PRIMARY KEY (`pno`);

--
-- Indexes for table `userdetail`
--
ALTER TABLE `userdetail`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `postdetail`
--
ALTER TABLE `postdetail`
  MODIFY `pno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `userdetail`
--
ALTER TABLE `userdetail`
  MODIFY `userid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
