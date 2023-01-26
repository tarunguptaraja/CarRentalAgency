-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2023 at 11:55 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carrentalagency`
--

-- --------------------------------------------------------

--
-- Table structure for table `agencies`
--

CREATE TABLE `agencies` (
  `slno` int(255) NOT NULL,
  `agencyname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agencies`
--

INSERT INTO `agencies` (`slno`, `agencyname`, `username`, `password`) VALUES
(1, 'Maruti Suzuki', 'maruti', 'maruti'),
(2, 'Tata Motors', 'tata', 'tata'),
(3, 'Honda ', 'honda', 'honda'),
(4, 'Kia', 'kia', 'kia'),
(5, 'Tarun gupta', 'tarunguptaraja', '0467021');

-- --------------------------------------------------------

--
-- Table structure for table `bookedcars`
--

CREATE TABLE `bookedcars` (
  `slno` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `number` varchar(100) NOT NULL,
  `seat` int(100) NOT NULL,
  `rent` int(100) NOT NULL,
  `days` int(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookedcars`
--

INSERT INTO `bookedcars` (`slno`, `username`, `model`, `number`, `seat`, `rent`, `days`, `date`) VALUES
(5, 'tarunguptaraja', 'Honda Jazz', '0', 5, 200, 1, '0000-00-00'),
(6, 'tarunguptaraja', 'Honda Jazz', '0', 5, 200, 1, '0000-00-00'),
(7, 'tarunguptaraja', 'Honda Jazz', '0', 5, 200, 1, '0000-00-00'),
(8, 'tarunguptaraja', 'Honda Jazz', '0', 5, 200, 1, '0000-00-00'),
(9, 'tarunguptaraja', 'Honda Jazz', '0', 5, 200, 1, '0000-00-00'),
(10, 'tarunguptaraja', 'Honda Jazz', '0', 5, 200, 1, '0000-00-00'),
(11, 'tarunguptaraja', 'Honda Jazz', '0', 5, 200, 1, '0000-00-00'),
(12, 'tarunguptaraja', 'Honda Jazz', '0', 5, 200, 1, '0000-00-00'),
(13, 'tarunguptaraja', 'Honda', '0007', 5, 2000, 16, '0000-00-00'),
(14, 'tarunguptaraja', 'Honda', '0007', 5, 2000, 20, '2023-01-20');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `slno` int(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `number` varchar(10) NOT NULL,
  `seat` int(100) NOT NULL,
  `rent` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`slno`, `model`, `number`, `seat`, `rent`) VALUES
(2, 'Creta', '9887', 6, 400),
(3, 'Tata Tiago', '8747', 7, 400),
(4, 'Datsun', '1007', 7, 5000),
(5, 'Honda', '0007', 5, 2000),
(6, 'TATA AVINYA', 'UP87TG0007', 7, 350),
(7, 'NEXA', 'DL11BW7886', 5, 300);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `slno` int(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`slno`, `fullname`, `username`, `password`) VALUES
(1, 'Tarun Gupta', 'tarunguptaraja', '0467021');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agencies`
--
ALTER TABLE `agencies`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `bookedcars`
--
ALTER TABLE `bookedcars`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`slno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agencies`
--
ALTER TABLE `agencies`
  MODIFY `slno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bookedcars`
--
ALTER TABLE `bookedcars`
  MODIFY `slno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `slno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `slno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
