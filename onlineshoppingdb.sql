-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2022 at 12:44 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineshoppingdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintable`
--

CREATE TABLE `admintable` (
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`email`, `password`, `fullname`, `type`) VALUES
('admin@gmail.com', '123', 'Monika', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `categorytable`
--

CREATE TABLE `categorytable` (
  `categoryid` int(11) NOT NULL,
  `categoryname` varchar(100) NOT NULL,
  `descp` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categorytable`
--

INSERT INTO `categorytable` (`categoryid`, `categoryname`, `descp`) VALUES
(6, 'Furniture', 'All Furniture'),
(8, 'Shoes', 'Shoes');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `id` int(11) NOT NULL,
  `orderid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `price` float NOT NULL,
  `qty` int(11) NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`id`, `orderid`, `productid`, `price`, `qty`, `total`) VALUES
(1, 2, 8, 2685, 1, 2685),
(2, 2, 7, 882, 2, 1764),
(3, 2, 9, 600, 1, 600),
(4, 2, 4, 1200, 1, 1200),
(5, 3, 6, 1235, 1, 1235),
(6, 3, 9, 600, 1, 600),
(7, 4, 7, 882, 1, 882),
(8, 4, 8, 2685, 1, 2685),
(9, 4, 6, 1235, 1, 1235),
(10, 5, 7, 882, 1, 882),
(11, 6, 7, 882, 1, 882),
(12, 7, 3, 900, 1, 900),
(13, 8, 4, 1200, 1, 1200);

-- --------------------------------------------------------

--
-- Table structure for table `ordertable`
--

CREATE TABLE `ordertable` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `mobileno` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `paymentmethod` varchar(50) NOT NULL,
  `grandtotal` float NOT NULL,
  `orderdate` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `useremail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordertable`
--

INSERT INTO `ordertable` (`id`, `fullname`, `mobileno`, `address`, `city`, `state`, `paymentmethod`, `grandtotal`, `orderdate`, `status`, `useremail`) VALUES
(2, 'Monika', '7508397712', 'Khalsa College', 'Amritsar', 'Punjab', 'Card', 6249, '2022-02-23', 'Pending', 'monika@gmail.com'),
(3, 'Kiran', '7508397712', 'Amritsar', 'Amritsar', 'Punjab', 'COD', 1835, '2022-02-24', 'Pending', 'kiran@gmail.com'),
(4, 'Kiran', '7347522472', 'Amritsar', 'Amritsar', 'Punjab', 'COD', 4802, '2022-02-24', 'Pending', 'kiran@gmail.com'),
(5, 'Kiran', '8288013733', 'Amritsar', 'Amritsar', 'Punjab', 'COD', 882, '2022-02-24', 'Pending', 'kiran@gmail.com'),
(6, 'Kiran', '7009825609', 'Amritsar', 'Amritsar', 'Punjab', 'COD', 882, '2022-02-24', 'Pending', 'kiran@gmail.com'),
(7, 'Kiran', '7508397712', 'Amritsar', 'Amritsar', 'Punjab', 'Card', 900, '2022-02-24', 'Shipped', 'kiran@gmail.com'),
(8, 'Kiran', '7508397712', 'Amritsar', 'Amritsar', 'Punjab', 'Card', 1200, '2022-02-24', 'Delivered', 'kiran@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `producttable`
--

CREATE TABLE `producttable` (
  `productid` int(11) NOT NULL,
  `productname` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `mrp` float NOT NULL,
  `discount` float NOT NULL,
  `price` float NOT NULL,
  `subcatid` int(11) NOT NULL,
  `descp` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `producttable`
--

INSERT INTO `producttable` (`productid`, `productname`, `photo`, `mrp`, `discount`, `price`, `subcatid`, `descp`) VALUES
(3, 'Bata Black Heels', 'sandal1.jpeg', 1000, 10, 900, 3, 'Bata Women Black Heels'),
(4, 'Heels', 'heels.jpg', 1500, 20, 1200, 3, 'Women Heels'),
(5, 'Kids Study Table', 'table.jpg', 5100, 10, 4590, 1, 'Multi-Functional Kids Study Table K80 Adjustable Height with Book Holder, Drawer, Extra Large Desktop with an Option of LED Light'),
(6, 'MEDUSA CHAIN NAPPA LEATHER SANDALS', 'san1.jpg', 1300, 5, 1235, 3, 'MEDUSA CHAIN NAPPA LEATHER SANDALS\r\nSALE PRICE₹ 137,600\r\nall taxes and duties included\r\nColour: Black\r\nblackColour black\r\nSize  (IT) : 38\r\nSize Guide\r\n3535 Out of stock 35.535.5 Out of stock 3636 In stock 36.536.5 Out of stock 3737 In stock 37.537.5 Out of stock 3838 In stock 38.538.5 Out of stock 3939 Out of stock 39.539.5 Out of stock 4040 Out of stock 40.540.5 Out of stock 4141 Out of stock\r\nADD TO BAG\r\nSocial share\r\nAdd to Wish List\r\nElegant with a Versace edge, these high-heel ankle sandals'),
(7, 'Block Heel', 'san2.jpg', 900, 2, 882, 3, 'Sole: Polyvinyl Chloride\r\nClosure: Turn Lock\r\nShoe Width: Medium\r\nCOMFORTABLE SOLE:EXTREMLY SOLE AND UPPER MATERIAL FOR ALL DAY COMFORT AND SHOCK PROOF\r\nOCCASION TYPE:PARTY,CASUAL,WEDDING; Durable Soft Leather High Quality, Fashionable & Comfortable high heels.\r\nsoles,suppleness and long-lasting comfort.; Realizing the high elasticity\r\nOuter Material Type: Velvet; Toe Style: Open Toe\r\nColor Name: Black'),
(8, 'Leather Kolhapuri Wedges', 'san3.jpg', 3580, 25, 2685, 3, 'This product has been crafted by hand and may have slight irregularities or imperfections in color or embellishment. These irregularities are the result of the human involvement in the process and add to the finished products charm while ensuring you have a one-of-a-kind piece.'),
(9, 'Pollachief Black Sandals', 'san4.jpg', 600, 0, 600, 3, 'Closure Is Velcro. Secondary Color Is White. Type For Flats Is Sandal. Color Is Black.');

-- --------------------------------------------------------

--
-- Table structure for table `shippingtable`
--

CREATE TABLE `shippingtable` (
  `id` int(11) NOT NULL,
  `trackingno` varchar(20) NOT NULL,
  `companyname` varchar(200) NOT NULL,
  `shippingdate` date NOT NULL,
  `remarks` varchar(200) NOT NULL,
  `personrecieved` varchar(50) DEFAULT NULL,
  `deliveryremarks` varchar(200) DEFAULT NULL,
  `status` varchar(20) NOT NULL,
  `orderid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shippingtable`
--

INSERT INTO `shippingtable` (`id`, `trackingno`, `companyname`, `shippingdate`, `remarks`, `personrecieved`, `deliveryremarks`, `status`, `orderid`) VALUES
(1, '124585', 'bluedart', '2022-02-25', '2 Heels', 'Karan', 'Perfect Product', 'Delivered', 8),
(2, '748596', 'fedex', '2022-02-25', '', NULL, NULL, 'Shipped', 7);

-- --------------------------------------------------------

--
-- Table structure for table `subcategorytable`
--

CREATE TABLE `subcategorytable` (
  `subcatid` int(11) NOT NULL,
  `subcatname` varchar(100) NOT NULL,
  `descp` varchar(500) NOT NULL,
  `categoryid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcategorytable`
--

INSERT INTO `subcategorytable` (`subcatid`, `subcatname`, `descp`, `categoryid`) VALUES
(1, 'Table', 'Table', 6),
(3, 'Sandals', 'Sandals', 8);

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `email` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `mobileno` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`email`, `fullname`, `mobileno`, `address`, `city`, `state`, `password`, `photo`) VALUES
('kiran@gmail.com', 'Kiran', '7508397712', 'Amritsar', 'Amritsar', 'Punjab', '111', 'aa.png'),
('monika@gmail.com', 'Monika', '7508397712', 'Khalsa College', 'Amritsar', 'Punjab', '123', 'aa.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintable`
--
ALTER TABLE `admintable`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `categorytable`
--
ALTER TABLE `categorytable`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordertable`
--
ALTER TABLE `ordertable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `producttable`
--
ALTER TABLE `producttable`
  ADD PRIMARY KEY (`productid`),
  ADD KEY `subcatid` (`subcatid`);

--
-- Indexes for table `shippingtable`
--
ALTER TABLE `shippingtable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategorytable`
--
ALTER TABLE `subcategorytable`
  ADD PRIMARY KEY (`subcatid`),
  ADD KEY `catid` (`categoryid`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorytable`
--
ALTER TABLE `categorytable`
  MODIFY `categoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `ordertable`
--
ALTER TABLE `ordertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `producttable`
--
ALTER TABLE `producttable`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `shippingtable`
--
ALTER TABLE `shippingtable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subcategorytable`
--
ALTER TABLE `subcategorytable`
  MODIFY `subcatid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `producttable`
--
ALTER TABLE `producttable`
  ADD CONSTRAINT `producttable_ibfk_1` FOREIGN KEY (`subcatid`) REFERENCES `subcategorytable` (`subcatid`);

--
-- Constraints for table `subcategorytable`
--
ALTER TABLE `subcategorytable`
  ADD CONSTRAINT `subcategorytable_ibfk_1` FOREIGN KEY (`categoryid`) REFERENCES `categorytable` (`categoryid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
