-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2019 at 11:45 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `first` varchar(255) NOT NULL,
  `sec` varchar(255) NOT NULL,
  `sur` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `dob` date NOT NULL,
  `pass1` varchar(255) NOT NULL,
  `pass2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `first`, `sec`, `sur`, `email`, `phone`, `dob`, `pass1`, `pass2`) VALUES
(1, 'bon', 'tish', 'nkilah', 'bonte@gmail.com', '0712120817', '1997-02-07', 'Boniface1', 'Boniface1'),
(3, 'bkavon', 'tosh', 'nkilah', 'bon@gmail.com', '0718920817', '1997-12-09', 'Boniface1', 'Boniface1');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Id`, `category`) VALUES
(10, 'Fruits'),
(11, 'Vegetables'),
(12, 'Snacks'),
(14, 'soft drinks'),
(15, 'Dinner'),
(16, 'Special Dishes'),
(19, 'Cars'),
(21, 'Junk foods'),
(22, 'Beverages'),
(23, 'Category yy'),
(30, 'Category');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `com_id` int(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `time_c` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`com_id`, `uname`, `message`, `time_c`) VALUES
(1, 'bonte', 'this is an awesome website buddy, keep up with the same spirit', '2019-02-05 17:29:03'),
(2, 'bon', 'good one', '2019-02-05 17:29:03'),
(3, 'Elvo', 'nice one', '2019-02-05 17:29:03'),
(4, 'dee', 'your services are incredible\r\n', '2019-02-05 17:29:03'),
(5, 'Denno karani', 'hey guys, I just like what you are doing!', '2019-02-05 17:53:38');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` decimal(50,2) NOT NULL,
  `quant` int(100) NOT NULL,
  `tot_cost` decimal(50,2) NOT NULL,
  `customer` varchar(100) NOT NULL,
  `address` varchar(250) NOT NULL,
  `tabl` varchar(100) NOT NULL,
  `time_order` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `price`, `quant`, `tot_cost`, `customer`, `address`, `tabl`, `time_order`) VALUES
(61, 'pizza', '500.00', 21, '10500.00', 'Bonteh', '90141-69, masinga', 'table 78', '2019-01-31 14:51:40'),
(62, 'pizza', '500.00', 345, '172500.00', 'Boniface', '3457-voi', 'Table B', '2019-01-31 17:31:09'),
(63, 'Bananas', '20.00', 1, '20.00', 'ojioqjfnwfhwiu', '5677 NY city', 'Table 50', '2019-01-31 17:33:05'),
(67, 'pizza', '500.00', 2, '1000.00', 'elvo', '', 'Table 50', '2019-02-01 07:17:34'),
(68, 'range rover sport', '30.00', 6, '180.00', '', '', '', '2019-02-01 08:03:27'),
(69, 'Matoke', '135.00', 3, '405.00', 'Mwangi', '', 'Table C', '2019-02-01 08:54:01'),
(70, 'Tea', '15.00', 8, '120.00', 'duncan', '90543-wudanyi', '', '2019-02-01 14:30:11'),
(71, 'Bananas', '20.00', 1, '20.00', 'ken', '', 'table xx', '2019-02-03 14:39:10'),
(72, 'Tea', '15.00', 1, '15.00', '', '', '', '2019-02-03 14:47:33'),
(73, 'Plums', '340.00', 1, '340.00', 'Bonteh', '', '', '2019-02-03 20:16:40'),
(74, 'Ugali Fish', '70.00', 7, '490.00', 'El', '', '', '2019-02-04 11:16:43'),
(75, 'Jameson Whiskey', '2500.00', 11, '27500.00', 'Elvis', '', 'table xx', '2019-02-04 11:18:02'),
(76, 'Pilau', '180.00', 1, '180.00', 'krypto', '90543-wudanyi', 'table 78', '2019-02-05 19:33:10');

-- --------------------------------------------------------

--
-- Table structure for table `prod`
--

CREATE TABLE `prod` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `price` float(10,2) NOT NULL,
  `category` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `availability` varchar(100) NOT NULL DEFAULT 'available'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prod`
--

INSERT INTO `prod` (`id`, `name`, `img`, `price`, `category`, `description`, `availability`) VALUES
(18, 'Ugali Fish', 'images-3.jpg', 70.00, 'Dinner', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.\r\n			         .', 'available'),
(19, 'pizza', 'images-19.jpg', 500.00, 'Snacks', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.\r\n			         .', 'available'),
(20, 'Bananas', 'images.jpg', 20.00, 'braek fast', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.\r\n			         .', 'available'),
(21, 'Water melon', 'images-1 - Copy.jpg', 38.00, 'appetizer', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.\r\n			         .', 'available'),
(22, 'Fruits', 'images (4).jpg', 75.00, 'Snacks', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.\r\n			         .', 'available'),
(23, 'Tea', 'images-24.jpg', 15.00, 'braek fast', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.\r\n			         .', 'available'),
(24, 'Matoke', 'images-12.jpg', 135.00, 'stew', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.\r\n			         .', 'available'),
(25, 'Pilau', 'Traditional-African-Jollof-rice-in-a-pot-recipe.jpg', 180.00, 'appetizer', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.\r\n			         .', 'available'),
(26, 'Jameson Whiskey', 'jameson-bottle-800x800.jpg', 2500.00, 'Hard Drinks', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.\r\n			         .', 'available'),
(27, 'Red and Black labels', 'images-31.jpg', 3500.00, 'Hard Drinks', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.\r\n			         .', 'available'),
(28, 'Plums', 'thinkstock_rf_photo_of_bowl_of_blackberries.jpg', 340.00, 'Fruits', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.\r\n			         .', 'available'),
(29, 'Yoghurt-500ml', 'yummy-foods-and-drinks-14-background-wallpaper.jpg', 170.00, 'soft drinks', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.\r\n			         .', 'available'),
(30, 'Soda', 'images-15.jpg', 100.00, 'Beverages', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.\r\n			         .', 'available'),
(32, 'Audi', '5aa081edaae57c25008b4613.png', 80.00, 'Snacks', 'sectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 'available'),
(33, 'BMW phantom', '5aabc9dc89188d2c008b46b3.png', 10000.00, 'Cars', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.\r\n			         .', 'available'),
(34, 'range rover sport', '5aabcd650bbf1c2c008b4674.jpg', 30.00, 'Cars', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.\r\n			         .', 'available'),
(35, 'super car', '5aabd50a873dc69d118b45ea.jpg', 50.00, 'Cars', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.\r\n			         .', 'available'),
(36, 'Ganja', 'IMG_226680.jpg', 500.00, 'Category yy', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.\r\n			         .', 'available'),
(37, 'Low Ride', '38d0127726d36a104ab637a7f4774f33.jpg', 345800.00, 'Cars', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.\r\n			         .', 'available'),
(38, 'hsashjaj', '2iIPx6K.png', 857848.00, 'Vegetables', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.\r\n			         .', 'available'),
(39, 'Crabs', '_net_wallpaper_by_carlesreig.png', 7500.00, 'Special Dishes', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.\r\n			         .', 'available'),
(40, 'Lobsters', '3fd3ddd9db81bb52379893eef839c170.jpg', 11500.00, 'Special Dishes', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.\r\n			         .', 'available'),
(41, 'Scorpion', '7bba6144ff17877f3fcc0c55b62855cf.jpg', 23000.00, 'Special Dishes', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.\r\n			         .', 'available'),
(42, 'Fish fingers', '552d57f026f25.jpg', 1000.00, 'Special Dishes', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.\r\n			         .', 'available'),
(43, 'Cocoa', '1920x1080-minimalism_quote_typography-17878.jpg', 13000.00, 'Beverages', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.\r\n			         .', 'available'),
(44, 'kuku', '65f9ce4032a6faf86cfa5ae21f7604e1.jpg', 23000.00, 'Special Dishes', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.\r\n			         .', 'available');

-- --------------------------------------------------------

--
-- Table structure for table `regist`
--

CREATE TABLE `regist` (
  `id` int(11) NOT NULL,
  `fname` varchar(56) NOT NULL,
  `sname` varchar(98) NOT NULL,
  `surname` varchar(123) NOT NULL,
  `email` varchar(78) NOT NULL,
  `country` varchar(56) NOT NULL,
  `street` varchar(78) NOT NULL,
  `phone` varchar(90) NOT NULL,
  `pass1` varchar(100) NOT NULL,
  `pass2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regist`
--

INSERT INTO `regist` (`id`, `fname`, `sname`, `surname`, `email`, `country`, `street`, `phone`, `pass1`, `pass2`) VALUES
(9, 'Boniface', 'Mutisya', 'Ngila', 'bonienkilah@gmail.com', 'solomon island', 'texans', '0792950816', 'boniface19972558', 'boniface19972558'),
(10, 'Bonte', 'nkilah', 'Tish', 'bonte@yahoo.com', 'mozambique', 'jkbjkbhj', '0792950816', 'Boniface', 'Boniface');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `subscriber_id` int(100) NOT NULL,
  `subscriber_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`subscriber_id`, `subscriber_name`) VALUES
(1, 'bonienkilah@gmail.com'),
(2, 'bonte@gmail.com'),
(3, 'saa@gmail.com'),
(4, 'ken@yahoo.com'),
(5, 'bon@hotmail.com'),
(6, 'denno@gmail.com'),
(7, 'james@gmail.com'),
(8, 'bon@gmail.com'),
(9, 'elvis@gmail.com'),
(10, 'dianapkem@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`id`, `name`) VALUES
(1, 'Table 5'),
(6, 'Table 6'),
(7, 'table a'),
(8, 'Table B'),
(9, 'Table C'),
(10, 'table 9'),
(11, 'Table z'),
(13, 'table xx'),
(14, 'table y'),
(15, 'Table 50'),
(16, 'table 78');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`com_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prod`
--
ALTER TABLE `prod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regist`
--
ALTER TABLE `regist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`subscriber_id`);

--
-- Indexes for table `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `com_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `prod`
--
ALTER TABLE `prod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `regist`
--
ALTER TABLE `regist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `subscriber_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tables`
--
ALTER TABLE `tables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
