-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2019 at 10:02 AM
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
(11, 'Vegetables'),
(15, 'Dinner'),
(16, 'Special Dishes'),
(21, 'Junk foods'),
(32, 'Lunch');

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
(5, 'Denno karani', 'hey guys, I just like what you are doing!', '2019-02-05 17:53:38'),
(6, 'boniface', 'awesome', '2019-02-11 13:23:47'),
(7, 'Dr Bonte', 'awesome ', '2019-03-28 09:03:29'),
(8, 'Joe', 'Awesome website', '2019-05-21 07:02:22');

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
  `time_order` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `archive` tinyint(4) NOT NULL DEFAULT '1',
  `delivery` tinyint(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `price`, `quant`, `tot_cost`, `customer`, `address`, `tabl`, `time_order`, `archive`, `delivery`) VALUES
(130, 'Beef', '2000.00', 1, '2000.00', 'lucy nganga', '', 'table xx', '2019-04-04 15:27:26', 1, 1),
(131, 'Beef', '2000.00', 6, '12000.00', 'Boniface Mutisya ngila', '', 'table a', '2019-03-27 14:36:32', 1, 1),
(132, 'Jamaican itals', '2500.00', 6, '15000.00', 'Chemutai Sambai', '', 'table a', '2019-03-27 14:36:25', 1, 1),
(133, 'Japanese noddles', '4000.00', 6, '24000.00', 'Boniface Mutisya ngila', '', 'table a', '2019-03-27 14:37:54', 1, 1),
(134, 'Matoke', '4000.00', 1, '4000.00', 'Boniface Mutisya ngila', '', 'blkkl', '2019-03-27 14:42:57', 1, 1),
(135, 'Matoke', '4000.00', 1, '4000.00', 'elvis okiru', '', 'table 9', '2019-03-28 10:53:39', 1, 1),
(136, 'Germany Burger', '5000.00', 1, '5000.00', 'Chemutai Sambai', '', 'Table C', '2019-04-02 11:02:28', 1, 1),
(137, 'Pishori', '3500.00', 1, '3500.00', '33809683', '', 'table xx', '2019-03-28 22:05:37', 1, 1),
(138, 'Matoke', '4000.00', 1, '4000.00', '33464539', '', 'table 9', '2019-03-28 22:05:32', 1, 1),
(139, 'Macoroni cheese', '1000.00', 1, '1000.00', '33519045', '', 'Table B', '2019-03-28 22:05:21', 1, 1),
(140, 'Germany Burger', '5000.00', 1, '5000.00', '33457803', 'ommm', '', '2019-04-02 11:02:21', 1, 1),
(141, 'Beef', '2000.00', 7, '14000.00', '33565511', 'TALA MACHAKOS', '', '2019-04-04 15:27:35', 1, 1),
(142, 'Germany Burger', '5000.00', 6, '30000.00', '33565511', '', 'Table z', '2019-04-04 15:24:41', 1, 1),
(143, 'KenyanUgali Beef', '3000.00', 1, '3000.00', '33457803', '', 'table 9', '2019-04-04 14:44:40', 1, 1),
(144, 'Jamaican itals', '2500.00', 1, '2500.00', '33457803', 'voi,mariwenyi', '', '2019-04-04 14:42:28', 1, 1),
(145, 'Japanese noddles', '4000.00', 6, '24000.00', '32066187', '', 'Table B', '2019-04-04 11:12:10', 1, 1),
(146, 'Germany Burger', '5000.00', 6, '30000.00', '33457803', '', 'table xx', '2019-04-04 11:05:33', 1, 1),
(147, 'Jamaican itals', '2500.00', 1, '2500.00', '33809683', '', 'table a', '2019-04-04 14:45:56', 1, 1),
(148, 'Matoke', '4000.00', 5, '20000.00', '33809683', '', 'Table z', '2019-04-11 16:06:19', 1, 0),
(149, 'Matoke', '4000.00', 8, '32000.00', '33457803', '', 'Table z', '2019-04-11 16:06:20', 1, 0),
(150, 'Macoroni cheese', '1000.00', 9, '9000.00', '33457803', '', 'table xx', '2019-04-11 16:06:21', 1, 0),
(151, 'Mapple duck', '5000.00', 51, '255000.00', '33457803', '', 'Table B', '2019-04-11 16:06:22', 1, 0),
(152, 'Macoroni cheese', '1000.00', 447, '447000.00', '33457803', '', 'table xx', '2019-04-11 17:37:31', 1, 1),
(153, 'Marinated chicken', '4000.00', 1000000, '4000000000.00', '33457803', 'Masinga, kenya', '', '2019-04-04 22:47:04', 1, 1),
(154, 'Beef', '2000.00', 23, '46000.00', '33457803', '', 'Table z', '2019-04-11 16:05:32', 0, 0),
(155, 'Jamaican itals', '2500.00', 19, '47500.00', '33457803', 'voi,mariwenyi', '', '2019-04-11 16:05:31', 0, 0),
(156, 'Beef', '2000.00', 15, '30000.00', '33457803', '', 'Table z', '2019-04-11 16:05:30', 0, 0),
(157, 'Japanese noddles', '4000.00', 9, '36000.00', '33457803', '', 'Table C', '2019-04-11 16:05:28', 0, 0),
(158, 'Japanese noddles', '4000.00', 11, '44000.00', '33457803', 'Masinga, kenya', '', '2019-04-11 16:05:26', 0, 0),
(159, 'KenyanUgali Beef', '3000.00', 100, '300000.00', '33457803', '', 'table a', '2019-04-11 16:05:24', 0, 0),
(160, 'Matoke', '4000.00', 1, '4000.00', '33457803', '', 'Table 5', '2019-04-26 20:31:15', 1, 0),
(161, 'Germany Burger', '5000.00', 1, '5000.00', '33457803', '', 'blkkl', '2019-05-14 16:41:39', 1, 0),
(162, 'Germany Burger', '5000.00', 1, '5000.00', '33457803', '', 'blkkl', '2019-05-17 10:34:10', 1, 1),
(163, 'Macoroni cheese', '1000.00', 1, '1000.00', '33457803', ' nnonoijoijiopjojuyh', '', '2019-05-17 10:33:10', 1, 0),
(164, 'Matoke', '4000.00', 5, '20000.00', '33457803', 'Gitaru', '', '2019-05-17 16:23:56', 1, 0),
(165, 'Macoroni cheese', '1000.00', 5, '5000.00', '33428213', '', 'table a', '2019-05-28 11:45:48', 1, 0);

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
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prod`
--

INSERT INTO `prod` (`id`, `name`, `img`, `price`, `category`, `description`) VALUES
(49, 'Beef', '3182425.jpg', 2000.00, 'Special Dishes', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.\r\n			         .'),
(51, 'Matoke', 'images-12.jpg', 4000.00, 'Dinner', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.\r\n			         .'),
(52, 'Pishori', 'images (7).jpeg', 3500.00, 'Dinner', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.\r\n			         .'),
(54, 'Jamaican itals', 'images (27).jpeg', 2500.00, 'Special Dishes', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.\r\n			         .'),
(55, 'Japanese noddles', 'images (9).jpeg', 4000.00, 'Category yy', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.\r\n			         .'),
(56, 'Germany Burger', 'images (43).jpeg', 5000.00, 'Junk foods', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.\r\n			         .'),
(57, 'KenyanUgali Beef', 'images-3 - Copy.jpg', 3000.00, 'Dinner', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.\r\n			         .'),
(58, 'Mapple duck', 'Capture3.PNG', 5000.00, 'Special Dishes', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.'),
(59, 'Marinated chicken', 'Capture2.PNG', 4000.00, 'Special Dishes', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. .'),
(60, 'Macoroni cheese', 'Capture1.PNG', 1000.00, 'Special Dishes', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. .');

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
(10, 'dianapkem@gmail.com'),
(11, 'dianapkem@gmail.com'),
(12, 'joe@gmail.com');

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
(7, 'table a'),
(8, 'Table B'),
(9, 'Table C'),
(10, 'table 9'),
(11, 'Table z'),
(13, 'table xx'),
(14, 'blkkl');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_id` varchar(15) NOT NULL,
  `names` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `pic` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_id`, `names`, `email`, `phone`, `gender`, `pass`, `pic`) VALUES
(1, '98338309', 'Bonte nkilah tish', 'bonienkilah@gmail.com', '0792950817', 'male', 'Boniface1', '3fd3ddd9db81bb52379893eef839c170.jpg'),
(2, '98489570', 'vickie Denver billy', 'vic@gmail.com', '0720173948', 'Female', 'Boniface1', '3fd3ddd9db81bb52379893eef839c170.jpg'),
(3, '33809683', 'Chemutai Diana Sambai', 'dianapkem@gmail.com', '0723788357', 'female', '@diana33809683', 'IMG_20180515_080747.jpg'),
(4, '33464539', 'elvis okiru  ejoi', 'elviseokiru@gmail.com', '0720159253', 'Male', 'ejoiejoi', 'IMG_20180514_212258.jpg'),
(5, '33457803', 'Boniface mutisya', 'bonienkilah@gmail.com', '0712120987', 'male', 'Boniface1', 'IMG_20180606_085244.jpg'),
(6, '33519045', 'nganga Lucy Wambui', 'lucy@gmail.com', '0719816728', 'Female', '33519561', 'IMG_20180602_113010.jpg'),
(7, '34314452', 'Job Ontita', 'ontitatheking@yahoo.com', '0711563594', 'Male', '20192020', ''),
(8, '33565511', 'Margaret Wanjiru Kimanzi', 'maggiekimanzi@gmail.com', '0706742247', 'female', '0706742247', 'IMG_20180602_112235.jpg'),
(9, '32066187', 'Antoney nyaga', 'antoneynyaga01@gmail.com', '0702782000', 'Male', '123456A', 'IMG_20180515_080737.jpg'),
(10, '33519561', 'lucyen', 'lucyenstasha@gmail.com', '0706424347', 'Female', '33519561', ''),
(11, '33428213', 'BRIAN MAKAU MUTUA', 'mutuabrian09@gmail.com', '0702030129', 'Male', '33428213', 'IMG_20180514_212258.jpg');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `com_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT for table `prod`
--
ALTER TABLE `prod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `regist`
--
ALTER TABLE `regist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `subscriber_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tables`
--
ALTER TABLE `tables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
