-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2019 at 06:39 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `secauthsys`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(10) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `passwd` varchar(70) NOT NULL,
  `role` varchar(10) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `hash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `fname`, `sname`, `email`, `passwd`, `role`, `status`, `hash`) VALUES
(6, 'kevin', 'clinton', 'kevinclint06@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'level1', 0, ''),
(9, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'level1', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `root`
--

CREATE TABLE `root` (
  `email` varchar(50) NOT NULL,
  `pass` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `root`
--

INSERT INTO `root` (`email`, `pass`) VALUES
('kevinclint06@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `root`
--
ALTER TABLE `root`
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
