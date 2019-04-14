-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2019 at 03:04 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoptech`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `productID` int(11) NOT NULL,
  `productQuantity` int(11) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`productID`, `productQuantity`, `userID`) VALUES
(3, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `featureproduct`
--

CREATE TABLE `featureproduct` (
  `featureID` int(11) NOT NULL,
  `productID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `featureproduct`
--

INSERT INTO `featureproduct` (`featureID`, `productID`) VALUES
(1, 3),
(2, 31),
(3, 32),
(4, 33),
(5, 29),
(6, 15);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `messageID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`messageID`, `name`, `email`, `subject`, `description`) VALUES
(1, 'Jabir', 'jabir@gmail.com', 'Cant sign up', 'Please help');

-- --------------------------------------------------------

--
-- Table structure for table `ordertable`
--

CREATE TABLE `ordertable` (
  `orderID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `productQuantity` int(11) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordertable`
--

INSERT INTO `ordertable` (`orderID`, `userID`, `productID`, `productQuantity`, `datetime`) VALUES
(1, 3, 2, 3, '2019-04-12 09:15:34'),
(2, 3, 11, 1, '2019-04-12 09:15:34'),
(3, 3, 9, 2, '2019-04-12 09:15:34'),
(4, 3, 2, 3, '2019-04-12 09:20:02'),
(5, 3, 11, 1, '2019-04-12 09:20:02'),
(6, 3, 9, 2, '2019-04-12 09:20:02'),
(7, 1, 2, 1, '2019-04-13 20:35:54');

-- --------------------------------------------------------

--
-- Table structure for table `policy`
--

CREATE TABLE `policy` (
  `pilocyID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `policy`
--

INSERT INTO `policy` (`pilocyID`, `name`, `detail`, `image`) VALUES
(1, 'Free Shipping bro', 'Free shipping on all us order', 'image/icon/shipped.png'),
(2, 'Support 24/7', 'Contact us 24 hours a day', 'image/icon/support.png'),
(3, '90 Days Return', 'If goods have problems', 'image/icon/return.png'),
(4, 'Payment Secure', 'We ensure secure payment', 'image/icon/credit-card.png');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productID`, `name`, `price`, `description`, `category`, `image`) VALUES
(1, 'ASUS Blackboard', 30000, 'Intel Celeron Processor 1.10 GHz up to 2.4 GHz\r\n4GB DDR3 SDRAM\r\n500GB 5 HDD\r\n11.6\" (1366x768) LED backlit', 'laptop', 'image/laptop1.jpg'),
(2, 'Asus Laptop 301', 60000, 'Intel Celeron N3450 (2M Cache, 1.10 GHz up to 2.2 GHz)\r\n8GB DDR4 Ram\r\n128GB + M.2 Expansion\r\nGenuine Windows 10 Home', 'laptop', 'image/laptop2.png'),
(3, 'Walton W-Silver', 45000, 'Intel Celeron Processor 1.10 GHz up to 2.4 GHz\r\n4GB DDR3 SDRAM\r\n500GB 5 HDD\r\n11.6\" (1366x768) LED backlit', 'laptop', 'image/laptop3.jpg'),
(4, 'HP N-910 Silver', 29000, 'Intel Celeron Processor N3350 (1.10 GHz up to 2.4 GHz))\r\n4GB DDR3 RAM\r\n500GB SATA HDD\r\n14\" HD Led Display', 'laptop', 'image/laptop4.jpg'),
(5, 'Apple Macbook Pro', 65000, 'Intel Core i5-7300HQ (2.50 GHz up to 3.50 GHz)\r\n1TB HDD\r\n8GB DDR4 Ram\r\nMX150, 2GB GDDR5 Graphics', 'laptop', 'image/laptop5.jpg'),
(6, 'Apple Mac Prime', 100000, 'Upcomming', 'laptop', 'image/laptop6.jpg'),
(7, 'Piraso 201', 5000, 'Type: Analog\r\nWatch Type: Wrist watch', 'watch', 'image/watch1.jpg'),
(8, 'Vincero', 4500, 'Type: Analog\r\nWatch Type: Wrist watch', 'watch', 'image/watch2.jpg'),
(9, 'Weiss', 2500, 'Type: Analog\r\nWatch Type: Wrist watch', 'watch', 'image/watch3.jpg'),
(10, 'G - Shock', 2300, 'Type: Analog & Digital\r\nWatch Type: Wrist watch', 'watch', 'image/watch5.jpg'),
(11, 'DB', 7000, 'Type: Analog\r\nWatch Type: Wrist watch', 'watch', 'image/watch6.jpg'),
(12, 'Onire', 1200, 'Type: Analog\r\nWatch Type: Wrist watch', 'watch', 'image/watch7.jpg'),
(13, 'Samsung 20KL', 1000, 'Type: Analog\r\nWatch Type: Wrist watch', 'watch', 'image/watch8.jpg'),
(14, 'Samsung 40TV', 70000, 'Wifi TV\r\nCurve ', 'smarttelevision', 'image/tv1.jpg'),
(15, 'Sony bravia 40', 44000, 'Smart TV', 'smarttelevision', 'image/tv4.jpg'),
(16, 'Walton', 25000, 'Smart TV', 'smarttelevision', 'image/tv2.jpg'),
(17, 'Sony 1101', 20000, 'LED TV', 'smarttelevision', 'image/tv3.jpg'),
(18, 'Beats 2020', 2500, 'Exclusive headphone', 'headphone', 'image/headphone1.jpg'),
(19, 'Beats jazzy', 5000, 'Walkman', 'headphone', 'image/headphone2.jpg'),
(20, 'Kitty Cat', 2222, 'Girl\'s choice', 'headphone', 'image/headphone3.jpg'),
(21, 'Beats by dre', 5500, 'Wireless', 'headphone', 'image/headphone4.jpg'),
(22, 'Skull candy', 5200, 'Wireless', 'headphone', 'image/headphone5.jpeg'),
(23, ' Plantronics ', 7000, 'Bluetooth', 'headphone', 'image/headphone6.jpg'),
(24, 'Gionee 6', 15000, 'Android kitkat', 'androidmobile', 'image/mobile1.jpg'),
(25, 'One Plus 6T', 50000, 'Android jelly bean', 'androidmobile', 'image/mobile2.jpg'),
(26, 'Samsung S7', 52000, 'Metal body', 'androidmobile', 'image/mobile3.jpg'),
(27, 'Samsung S10', 80000, 'Android lolly pop', 'androidmobile', 'image/mobile4.jpg'),
(28, 'MI Redmi ', 22000, 'Smart phone', 'androidmobile', 'image/mobile5.jpg'),
(29, 'HTC Desire 820', 25000, 'Smart phone', 'androidmobile', 'image/mobile6.jpg'),
(30, 'Huawei NOVA 3i', 30500, 'Very Very Smart ', 'androidmobile', 'image/mobile7.jpg'),
(31, 'MI Router', 2650, 'High speed and frequency\r\nMobile contril system\r\nWater proof', 'others', 'image/others3.jpg'),
(32, 'Bose Red', 2500, 'Wireless Soundbox\r\n120DB frequency', 'others', 'image/others5.jpg'),
(33, 'VR Z-70', 5000, 'VR with HD quality.\r\nWireless connectivity.', 'others', 'image/others6.jpg'),
(34, 'Mouse R15', 1200, 'Wireless gaming mouse', 'others', 'image/others2.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `sliderbottom`
--

CREATE TABLE `sliderbottom` (
  `sliderID` int(11) NOT NULL,
  `productID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sliderbottom`
--

INSERT INTO `sliderbottom` (`sliderID`, `productID`) VALUES
(1, 1),
(2, 7),
(3, 6),
(4, 18),
(5, 27),
(6, 14),
(7, 34);

-- --------------------------------------------------------

--
-- Table structure for table `slidertop`
--

CREATE TABLE `slidertop` (
  `imageID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `img_dir` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slidertop`
--

INSERT INTO `slidertop` (`imageID`, `name`, `img_dir`) VALUES
(1, 'slider1', 'image/background/slider1.jpeg'),
(2, 'slider2', 'image/background/slider2.jpeg'),
(3, 'slider4', 'image/background/slider4.jpeg'),
(4, 'slider5', 'image/background/slider5.jpeg'),
(5, 'slider6', 'image/background/slider6.jpeg'),
(6, 'slider7', 'image/background/slider7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `name`, `email`, `phone`, `password`, `type`) VALUES
(1, 'Mir arif Hasan', 'arif@gmail.com', '01996846517', '1234', 'admin'),
(2, 'Ashraf Ayon', 'ayon@gmail.com', '01534312346', '1234', 'client'),
(3, 'Md. Zahid Fesabelilla', 'zahid@gmail.com', '01996846517', '1234', 'client');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `featureproduct`
--
ALTER TABLE `featureproduct`
  ADD PRIMARY KEY (`featureID`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`messageID`);

--
-- Indexes for table `ordertable`
--
ALTER TABLE `ordertable`
  ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `policy`
--
ALTER TABLE `policy`
  ADD PRIMARY KEY (`pilocyID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `sliderbottom`
--
ALTER TABLE `sliderbottom`
  ADD PRIMARY KEY (`sliderID`);

--
-- Indexes for table `slidertop`
--
ALTER TABLE `slidertop`
  ADD PRIMARY KEY (`imageID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `featureproduct`
--
ALTER TABLE `featureproduct`
  MODIFY `featureID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `messageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ordertable`
--
ALTER TABLE `ordertable`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `policy`
--
ALTER TABLE `policy`
  MODIFY `pilocyID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `sliderbottom`
--
ALTER TABLE `sliderbottom`
  MODIFY `sliderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `slidertop`
--
ALTER TABLE `slidertop`
  MODIFY `imageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
