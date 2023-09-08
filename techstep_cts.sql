-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2023 at 12:02 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techstep_cts`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pswd` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `lname`, `email`, `address`, `pswd`, `number`) VALUES
(5, 'admin', 'admin', 'admin@gmail.com', 'sahiwal', 'admin123', '03058989856');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `info` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `name`, `info`, `image`) VALUES
(2, 'Rida', ' Assalamualikum', 'w22.jpg'),
(3, ' rida', ' Assalamualikum', 'christopher-campbell-rDEOVtE7vOs-unsplash.jpg'),
(5, ' Ayesha', ' Hello', 'c4.png'),
(6, ' Iqra', ' Assalamualikum', 'Home Img.jpg'),
(7, 'Ali', 'assalamualikum', 'Home Img.jpg'),
(8, '', '', 'Home Img.jpg'),
(9, '', '', 'Home Img.jpg'),
(10, ' Ayesha', ' Hello', 'Home Img.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'Ali', 'Ali@gmail.com', '03057574125', 'Assalamualikum'),
(3, 'Biya', 'Biya@gmail.com', '03057574125', 'Hello'),
(6, 'Castor', 'castor@gmail.com', '03054545859', 'Lorem Ipsum');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(255) NOT NULL,
  `newstitle` varchar(255) NOT NULL,
  `newsdetail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `newstitle`, `newsdetail`) VALUES
(1, ' Techstep IT Training Center Sahiwal', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `info` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `info`, `image`) VALUES
(1, ' Rida Tahir', ' Lorem Ipsum  Lorem Ipsum ', 'cups.jpg'),
(2, ' Biya', ' Lorem Ipsum', 'cups.jpg'),
(3, 'hello', ' Lorem Ipsum', 'download.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `pswd` varchar(255) NOT NULL,
  `photos` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `phone`, `pswd`, `photos`, `address`) VALUES
(1, 'Ali', 'ali@gmail.com', '03057574125', '123', '7th.png', 'sahiwal'),
(3, 'Ali', 'rida@gmail.com', '03057574125', '123', 'air_buds.jpg', 'sahiwal'),
(4, 'Rida', 'rida@gmail.com', '03057574125', '123', 'appgallery.png', 'sahiwal'),
(5, 'Biya', 'biya@gmail.com', '03086065865', '123', 'w22.jpg', 'sahiwal'),
(6, 'Ahmad', 'ahmad@gmail.com', '03094545745', '12345', 'm3.jpg', 'Lahore'),
(7, 'hamza', 'hamzaali@gmail.com', '03058574859', '123', 'm3.jpg', 'Sahiwal'),
(8, 'Ali', 'Ali@gmail.com', '03057574125', '123', 'm3.jpg', 'sahiwal'),
(9, 'Ali', 'Ali@gmail.com', '03057574125', '123', 'm3.jpg', 'sahiwal'),
(10, 'Ali', 'Ali@gmail.com', '03057574125', '123', 'm3.jpg', 'sahiwal'),
(11, 'Ayesha', 'ayesha@gmail.com', '03054545456', '123', 'w22.jpg', 'sahiwal'),
(12, 'Ali', 'rida@gmail.com', '03057574125', '123', 'c2.jpg', 'sahiwal'),
(13, 'Ali', 'ali@gmail.com', '03057574125', '123', 'bowl.jpg', '123\r\n123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
