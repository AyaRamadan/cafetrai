-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 13, 2020 at 02:51 AM
-- Server version: 5.7.29-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cafeteria`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `name`) VALUES
(1, 'hot drinks'),
(2, 'cold drinks'),
(3, 'dessert');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cost` varchar(255) NOT NULL,
  `STATUS` enum('done','processing','delivery') DEFAULT 'processing',
  `order_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `notes` varchar(500) DEFAULT NULL,
  `room_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `cost`, `STATUS`, `order_date`, `notes`, `room_no`) VALUES
(1, 2, '20 LE', 'processing', '2020-03-12 19:15:28', 'skmsdds', 3),
(2, 1, '43 LE', 'processing', '2020-03-12 19:17:51', 'cffccf', 1),
(3, 2, '6 LE', 'processing', '2020-03-12 19:18:59', 'suger free', 5),
(4, 1, '14 LE', 'processing', '2020-03-12 19:28:43', '', 1),
(5, 1, '30 LE', 'processing', '2020-03-12 21:39:41', 'cffcfcf', 3),
(6, 1, '16 LE', 'processing', '2020-03-12 21:40:07', 'suger free', 4),
(7, 1, '16 LE', 'processing', '2020-03-12 21:41:36', 'suger free', 4),
(8, 4, '30 LE', 'processing', '2020-03-12 21:43:20', 'ksxkmx', 1),
(9, 4, '30 LE', 'processing', '2020-03-12 21:44:49', 'ksxkmx', 1),
(10, 2, '25 LE', 'processing', '2020-03-12 21:45:04', 'kkk', 1),
(11, 2, '25 LE', 'processing', '2020-03-12 21:46:12', 'kkk', 1),
(12, 3, '50', 'processing', '2020-03-12 21:47:38', 'klo', 2),
(13, 2, '25 LE', 'processing', '2020-03-12 21:51:11', 'kkk', 1),
(14, 4, '18 LE', 'processing', '2020-03-12 21:52:13', 'kkk', 3),
(15, 4, '18 LE', 'processing', '2020-03-12 21:53:00', 'kkk', 3),
(16, 3, '129 LE', 'processing', '2020-03-12 22:01:58', 'suger 3 spoons', 5),
(17, 4, '40 LE', 'processing', '2020-03-12 22:03:56', 'diet', 3),
(18, 3, '120 LE', 'processing', '2020-03-12 22:04:56', 'ededdedee', 4),
(19, 3, '91 LE', 'processing', '2020-03-12 22:11:41', 'suger free', 5),
(20, 3, '91 LE', 'processing', '2020-03-12 22:12:00', 'suger free', 5),
(21, 3, '91 LE', 'processing', '2020-03-12 22:12:01', 'suger free', 5),
(22, 3, '66 LE', 'processing', '2020-03-12 22:12:22', 'cffcfcf', 3),
(23, 1, '58 LE', 'processing', '2020-03-12 23:32:20', 'nice', 1),
(24, 1, '50 LE', 'processing', '2020-03-13 01:03:17', 'new order ', 3),
(25, 1, '69 LE', 'processing', '2020-03-13 01:04:55', 'new order', 5),
(26, 1, '22 LE', 'processing', '2020-03-13 01:10:33', '', 1),
(27, 1, '16 LE', 'processing', '2020-03-13 01:11:33', '', 3),
(28, 2, '22 LE', 'processing', '2020-03-13 01:13:21', 'mmama', 1),
(29, 1, '20 LE', 'processing', '2020-03-13 01:14:49', 'mmama', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` varchar(20) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `price`, `picture`, `category_id`) VALUES
(12, 'tea', '6 LE', 'tea2.png', 1),
(13, 'coffee', '10 LE', 'coffee.png', 1),
(14, 'cola', '10 LE', 'cola.png', 2),
(15, 'nescafe', '12 LE', 'nescafe.png', 1),
(16, 'green tea', '8 LE', 'green-tea.png', 1),
(17, 'mint', '8 LE', 'mint.png', 1),
(18, 'cappuccino', '15 LE', 'cappuccino.png', 1),
(19, 'pepsi', '10 LE', 'pepsi.png', 2),
(20, 'milkshake', '15 LE', 'milkshake.png', 2),
(21, 'limon', '15 LE', 'limon.png', 2),
(22, 'strawbary', '15 LE', 'strawbary.png', 2),
(23, 'croissant', '10 LE', 'croissant.png', 3),
(24, 'donuts', '15 LE', 'donuts.png', 3);

-- --------------------------------------------------------

--
-- Table structure for table `products_items`
--

CREATE TABLE `products_items` (
  `order_id` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `amount` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products_items`
--

INSERT INTO `products_items` (`order_id`, `product_id`, `amount`) VALUES
(23, 12, 1),
(24, 12, 1),
(25, 12, 1),
(27, 12, 1),
(29, 12, 2),
(24, 13, 2),
(23, 14, 2),
(27, 14, 1),
(26, 15, 1),
(28, 15, 1),
(23, 16, 4),
(25, 16, 1),
(29, 16, 1),
(24, 17, 3),
(25, 18, 3),
(25, 19, 1),
(26, 19, 1),
(28, 19, 1);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `room_no` int(11) NOT NULL,
  `ext` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `room_no`, `ext`, `picture`) VALUES
(1, 'mahmoud', 'mahmoud94', 'mahmoudmagdy@gmail.com', '123', 2, '3231', ''),
(2, 'salah', 'salah93', 'salah@gmail.com', '123', 3, '66454', ''),
(3, 'mina', 'mina95', 'mina@gmail.com', '123', 1, '22345', ''),
(4, 'hazem', 'hazem96', 'hazem@gmail.com', '123', 4, '12234', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `orders_ibfk_1` (`user_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_category_id` (`category_id`);

--
-- Indexes for table `products_items`
--
ALTER TABLE `products_items`
  ADD PRIMARY KEY (`product_id`,`order_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);

--
-- Constraints for table `products_items`
--
ALTER TABLE `products_items`
  ADD CONSTRAINT `products_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `products_items_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
