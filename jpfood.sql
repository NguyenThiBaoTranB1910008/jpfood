-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2022 at 10:39 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jpfood`
--

-- --------------------------------------------------------

--
-- Table structure for table `booktable`
--

CREATE TABLE `booktable` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `seating` varchar(50) NOT NULL,
  `occasion` varchar(50) NOT NULL,
  `note` varchar(200) NOT NULL,
  `datebook` date NOT NULL,
  `timebook` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booktable`
--

INSERT INTO `booktable` (`id`, `user`, `fullname`, `seating`, `occasion`, `note`, `datebook`, `timebook`) VALUES
(1, 'Bảo Trân', 'Bảo Trân', 'đơn', 'sinh nhật', '', '2022-05-20', '20:11:00'),
(2, 'Thanh Trúc', 'Nguyễn Thanh Trúc', 'gia đình', 'kỉ niệm', '', '2022-08-12', '20:23:00');
-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `name_food` varchar(100) NOT NULL,
  `image_food` varchar(100) NOT NULL,
  `price_food` int(20) NOT NULL DEFAULT 0,
  `count_food` int(10) NOT NULL DEFAULT 0,
  `money_food` int(20) NOT NULL DEFAULT 0,
  `order_address` varchar(100) NOT NULL DEFAULT '0',
  `id_bill` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name_food`, `image_food`, `price_food`, `count_food`, `money_food`, `order_address`, `id_bill`) VALUES
(1, 'Cơm lươn Nhật', 'css/images/comluon.jpg', 150000, 1, 150000, 'Ninh Kiều', 1),
(2, 'Salad cá hồi', 'css/images/saladcahoi.jpg', 100000, 1, 100000, 'Ninh Kiều', 1),
(3, 'Sashimi Cá Hồi', 'css/images/sashimicahoi.jpg', 200000, 1, 200000, 'Cái Răng', 2),
(4, 'Cơm lươn Nhật', 'css/images/comluon.jpg', 150000, 1, 150000, 'Cái Răng', 2);
-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` int(20) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `image`, `price`) VALUES
(1, 'Salad cá hồi', 'css/images/saladcahoi.jpg', 100000),
(2, 'Cơm lươn Nhật', 'css/images/comluon.jpg', 150000),
(3, 'Sashimi Cá Hồi', 'css/images/sashimicahoi.jpg', 200000),
(4, 'Cá hồi chiên xù', 'css/images/cahoichien.jpg', 105000),
(5, 'Sushi Trứng', 'css/images/sushitrung.jpg', 90000),
(6, 'Sò Đỏ', 'css/images/sodo1.jpg', 280000),
(7, 'Soup Rong Biển', 'css/images/souprongbien.jpg', 55000),
(8, 'Wasabi', 'css/images/mutat.jpg', 30000),
(9, 'Rong Nho', 'css/images/rongnho.jpg', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `ipname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `SDT` int(11) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ipname`, `email`, `SDT`, `password`) VALUES
(2, 'Bảo Trân', 'btran@gmail.com', 966155885, '1234'),
(3, 'Thanh Trúc', 'truc@gmail.com', 0329626723, '1111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booktable`
--
ALTER TABLE `booktable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booktable`
--
ALTER TABLE `booktable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
