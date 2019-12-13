-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2019 at 04:51 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homedecor`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productid` int(20) NOT NULL,
  `productname` varchar(30) NOT NULL,
  `productprice` varchar(30) NOT NULL,
  `productdetails` varchar(1000) NOT NULL,
  `productimage` varchar(30) NOT NULL,
  `productcatagory` varchar(40) NOT NULL,
  `arrivedat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productid`, `productname`, `productprice`, `productdetails`, `productimage`, `productcatagory`, `arrivedat`) VALUES
(13, 'curtain 1', '100', 'New Beautiful curtains Height 214 Cm(7 ft) and width is 122 Cm(4 ft) for each curtain $50 for a pair.\r\nâ—ï¸Free postage over $100 order Australia wideâ—ï¸\r\nFor more information or any queries please feel free to contact me ( Leena-0470337366) You can Call or message me. Payment options- Cash,Card,bank transfer or EFTPOS .', 'b42.jpg', 'Curtain', ''),
(14, 'Kig size bedsheet 1', '100', 'New Beautiful king/queen size bedsheets.\r\nðŸŽ„Great idea for Christmas presentðŸŽ„\r\n$35 for a set. Set includes one bedsheet and two pillow case. For more information or any queries please feel free to contact me Leena-0470337366.\r\nâ—ï¸Free postage over $100 order Australia wideâ—ï¸', 'b9.jpg', 'Bedsheet', ''),
(15, 'Cushion Cover 1', '6', 'Beautiful cushion covers $6 each Size-40*40cm\r\nIn beautiful colours and designs. For more information or any queries please feel free to contact me. Payment Options-Cash,Eftpos,Bank transfer,Paypal. Postage is available on customer expense. And you are more than welcome to come and have a look. We are located in Brisbane (collingwood park 4301)', 'b54.jpg', 'Pillow', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_administrator`
--

CREATE TABLE `tbl_administrator` (
  `admin_id` int(20) NOT NULL,
  `admin_name` varchar(30) NOT NULL,
  `admin_email` varchar(30) NOT NULL,
  `admin_pasword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_administrator`
--

INSERT INTO `tbl_administrator` (`admin_id`, `admin_name`, `admin_email`, `admin_pasword`) VALUES
(1, 'admin', 'homedecor@gmail.com', 'homedecor123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `contact_id` int(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `message` varchar(30) NOT NULL,
  `contactnumber` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `image_id` int(20) NOT NULL,
  `image_name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `user_Firstname` varchar(30) NOT NULL,
  `user_lastName` varchar(30) NOT NULL,
  `user_gender` varchar(10) NOT NULL,
  `user_dob` varchar(20) NOT NULL,
  `user_contact` varchar(12) NOT NULL,
  `user_address` varchar(100) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_Firstname`, `user_lastName`, `user_gender`, `user_dob`, `user_contact`, `user_address`, `user_email`, `user_password`) VALUES
(12, 'abc', 'xyz', 'Male', '10/10/2019', '9898989898', 'asdas', 'abc@ymail.com', 'abc123'),
(13, 'laura', 'antochi', 'Female', '10/02/2019', '8787878787', 'sdfdsf', 'laura@gmail.com', 'laura123');

-- --------------------------------------------------------

--
-- Table structure for table `watchlist`
--

CREATE TABLE `watchlist` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_category` varchar(40) NOT NULL,
  `product_description` varchar(1000) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `watchlist`
--

INSERT INTO `watchlist` (`product_id`, `product_name`, `product_category`, `product_description`, `user_id`) VALUES
(1, 'sad', 'asd', 'asd', 0),
(2, 'dsf', 'asd', 'asd', 0),
(3, 'sd', 'ds', 'd', 0),
(4, 'd', 'f', 'f', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `tbl_administrator`
--
ALTER TABLE `tbl_administrator`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `watchlist`
--
ALTER TABLE `watchlist`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_administrator`
--
ALTER TABLE `tbl_administrator`
  MODIFY `admin_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `contact_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `image_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `watchlist`
--
ALTER TABLE `watchlist`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
