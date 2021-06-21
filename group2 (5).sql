-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2019 at 11:46 AM
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
-- Database: `group2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `Id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`Id`, `name`) VALUES
(72, 'fruits'),
(73, 'drinks'),
(75, 'supper'),
(77, 'Beverages'),
(80, 'special dishes'),
(81, 'dinner'),
(83, 'main dishes'),
(84, 'hard drinks'),
(85, 'Snacks'),
(86, 'meal y');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `Id` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Price` float(10,2) NOT NULL,
  `category` varchar(255) NOT NULL,
  `available` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`Id`, `Title`, `Image`, `Description`, `Price`, `category`, `available`) VALUES
(33, 'plums', 'thinkstock_rf_photo_of_bowl_of_blackberries.jpg', 'fresh', 55.00, 'fruits', 0),
(46, 'water melon', 'images-1.jpg', 'Control chart: A graph used to study how a process changes over time. Comparing current data to historical control limits leads to conclusions about whether the process variation is consistent (in control) or is unpredictable (out of control, affected by ', 40.00, 'fruits', 0),
(48, 'Ugali fish', 'images-3.jpg', 'Control chart: A graph used to study how a process changes over time. Comparing current data to historical control limits leads to conclusions about whether the process variation is consistent (in control) or is unpredictable (out of control, affected by ', 60.00, 'main dishes', 0),
(49, 'Matoke', 'images-11.jpg', 'Control chart: A graph used to study how a process changes over time. Comparing current data to historical control limits leads to conclusions about whether the process variation is consistent (in control) or is unpredictable (out of control, affected by ', 100.00, 'main dishes', 0),
(50, 'Banana', 'images.jpg', 'Control chart: A graph used to study how a process changes over time. Comparing current data to historical control limits leads to conclusions about whether the process variation is consistent (in control) or is unpredictable (out of control, affected by ', 20.00, 'fruits', 0),
(51, 'Soda', 'images-15.jpg', 'Control chart: A graph used to study how a process changes over time. Comparing current data to historical control limits leads to conclusions about whether the process variation is consistent (in control) or is unpredictable (out of control, affected by ', 40.00, 'Beverages', 0),
(52, 'burger', 'images-18.jpg', 'Control chart: A graph used to study how a process changes over time. Comparing current data to historical control limits leads to conclusions about whether the process variation is consistent (in control) or is unpredictable (out of control, affected by ', 300.00, 'special dishes', 0),
(53, 'Pizza', 'images-20.jpg', 'Control chart: A graph used to study how a process changes over time. Comparing current data to historical control limits leads to conclusions about whether the process variation is consistent (in control) or is unpredictable (out of control, affected by ', 1000.00, 'special dishes', 0),
(54, 'Water', 'images-17.jpg', 'Control chart: A graph used to study how a process changes over time. Comparing current data to historical control limits leads to conclusions about whether the process variation is consistent (in control) or is unpredictable (out of control, affected by ', 50.00, 'drinks', 0),
(55, 'cofee', 'images-25.jpg', ' As  stated earlier; synthetic substances having dominated in the industry, has really led to the decline of the sisal products; of which in our research study, we are on the look on how to revive the sisal production firms so as to make their products do', 15.00, 'Beverages', 0),
(56, 'wine', 'images-30.jpg', ' As  stated earlier; synthetic substances having dominated in the industry, has really led to the decline of the sisal products; of which in our research study, we are on the look on how to revive the sisal production firms so as to make their products do', 2000.00, 'hard drinks', 0),
(57, 'Tea', 'images-24.jpg', ' As  stated earlier; synthetic substances having dominated in the industry, has really led to the decline of the sisal products; of which in our research study, we are on the look on how to revive the sisal production firms so as to make their products do', 60.00, 'Beverages', 0),
(58, 'Blended juice', 'images-9.jpg', ' As  stated earlier; synthetic substances having dominated in the industry, has really led to the decline of the sisal products; of which in our research study, we are on the look on how to revive the sisal production firms so as to make their products do', 70.00, 'drinks', 0),
(59, 'Maandazi', 'images-28.jpg', ' As  stated earlier; synthetic substances having dominated in the industry, has really led to the decline of the sisal products; of which in our research study, we are on the look on how to revive the sisal production firms so as to make their products do', 15.00, 'Snacks', 0),
(60, 'Jameson whiskey', 'jameson-bottle-800x800.jpg', ' As  stated earlier; synthetic substances having dominated in the industry, has really led to the decline of the sisal products; of which in our research study, we are on the look on how to revive the sisal production firms so as to make their products do', 2500.00, 'hard drinks', 0),
(61, 'Red/black label', 'images-31.jpg', ' As  stated earlier; synthetic substances having dominated in the industry, has really led to the decline of the sisal products; of which in our research study, we are on the look on how to revive the sisal production firms so as to make their products do', 3000.00, 'hard drinks', 0),
(62, 'ugali veg', 'download (4).jpg', 'ubyubygyuh8yhuin0,ub68h8uj0i', 87.00, 'supper', 0),
(63, 'cabbage', 'images-13.jpg', 'fresh', 50.00, 'main dishes', 0),
(64, 'beans', '5aa081edaae57c25008b4613.png', 'mlmkndmkvkdjkjkdjskdksssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', 789.00, 'Beverages', 0);

-- --------------------------------------------------------

--
-- Table structure for table `motherfucker`
--

CREATE TABLE `motherfucker` (
  `Id` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `Price` float(10,6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `table1` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` double(10,2) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `title`, `table1`, `description`, `price`, `time`) VALUES
(1, 'bon', 'water melon', 'Table 2', 'Control chart: A graph used to study how a process changes over time. Comparing current data to historical control limits leads to conclusions about whether the process variation is consistent (in control) or is unpredictable (out of control, affected by ', 40.00, '2018-10-22 09:44:39'),
(2, 'Tish', 'wine', 'Table x', ' As  stated earlier; synthetic substances having dominated in the industry, has really led to the decline of the sisal products; of which in our research study, we are on the look on how to revive the sisal production firms so as to make their products do', 2000.00, '2018-10-22 09:51:37'),
(3, 'Pastor', 'Pizza', 'Table 4', 'Control chart: A graph used to study how a process changes over time. Comparing current data to historical control limits leads to conclusions about whether the process variation is consistent (in control) or is unpredictable (out of control, affected by ', 1000.00, '2018-10-22 11:28:39'),
(4, 'engineer', 'Soda', 'Table 2', 'Control chart: A graph used to study how a process changes over time. Comparing current data to historical control limits leads to conclusions about whether the process variation is consistent (in control) or is unpredictable (out of control, affected by ', 40.00, '2018-10-22 11:32:10'),
(5, 'Bonte', 'burger', ' selected', 'Control chart: A graph used to study how a process changes over time. Comparing current data to historical control limits leads to conclusions about whether the process variation is consistent (in control) or is unpredictable (out of control, affected by ', 300.00, '2019-01-27 11:01:31'),
(6, 'dj', 'Blended juice', 'Table 4', ' As  stated earlier; synthetic substances having dominated in the industry, has really led to the decline of the sisal products; of which in our research study, we are on the look on how to revive the sisal production firms so as to make their products do', 70.00, '2019-02-01 09:00:45');

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `id` int(11) NOT NULL,
  `table` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabs`
--

CREATE TABLE `tabs` (
  `id` int(11) NOT NULL,
  `tab_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabs`
--

INSERT INTO `tabs` (`id`, `tab_name`) VALUES
(2, 'Table 2'),
(3, 'Table 4'),
(30, 'Table x');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `motherfucker`
--
ALTER TABLE `motherfucker`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabs`
--
ALTER TABLE `tabs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `motherfucker`
--
ALTER TABLE `motherfucker`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tabs`
--
ALTER TABLE `tabs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
