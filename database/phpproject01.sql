-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2021 at 05:23 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpproject01`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `useruid` varchar(11) NOT NULL,
  `itemid` int(11) NOT NULL,
  `quanity` int(11) NOT NULL,
  `isActive` tinyint(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `useruid`, `itemid`, `quanity`, `isActive`) VALUES
(11, 'Absh27', 5, 1, 0),
(12, 'Absh27', 1, 5, 0),
(13, 'Absh27', 1, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `unit_price` double NOT NULL,
  `image_url` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `unit_price`, `image_url`) VALUES
(1, 'Honda Ridgeline', 6000, 'https://article.images.consumerreports.org/prod/content/dam/CRO%20Images%202017/Magazine-Articles/April/CR-Inline-top-picks-Ridgeline-02-17'),
(5, 'Tesla V800', 20800, 'https://article.images.consumerreports.org/prod/content/dam/CRO%20Images%202017/Magazine-Articles/April/CR-Inline-top-picks-Toyota-Yaris-02-17'),
(6, 'Ford F-150', 7000, 'https://article.images.consumerreports.org/prod/content/dam/CRO%20Images%202018/Magazine/04April/CRM-Cars-Inline-TopTen-Ford-F150-2018-4-18'),
(7, 'Toyota Highlander', 9000, 'https://article.images.consumerreports.org/prod/content/dam/CRO%20Images%202018/Magazine/04April/CRM-Cars-Inline-TopTen-Toyota-Highlander-2018-4-18'),
(8, 'Chevrolet Impala', 7562, 'https://article.images.consumerreports.org/prod/content/dam/CRO%20Images%202018/Magazine/04April/CRM-Cars-inline-TopTen-Chevrolet-Imapla-2018-4-18');

-- --------------------------------------------------------

--
-- Table structure for table `sellcar`
--

CREATE TABLE `sellcar` (
  `id` int(11) NOT NULL,
  `CarName` varchar(255) DEFAULT NULL,
  `CarBrand` varchar(255) DEFAULT NULL,
  `CarYear` int(11) DEFAULT NULL,
  `CarPrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `userName` varchar(128) NOT NULL,
  `userEmail` varchar(128) NOT NULL,
  `userUid` varchar(128) NOT NULL,
  `userPwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `userName`, `userEmail`, `userUid`, `userPwd`) VALUES
(1, 'Abhishek Shitole', 'abc@gmail.com', 'Absh27', '$2y$10$cLfaDzvVrRlvPJuh/Kfbge7/Iixgy2qAzklTlm.L6ua632hHeVEVu'),
(3, 'Abhishek Shitole', 'abckl@gmail.com', 'abc', '$2y$10$6lj2kCDvk.aHtoQF1kpvf.tt1ZKC1tmQbi1Mbi0TG3oGhqrje16x6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
