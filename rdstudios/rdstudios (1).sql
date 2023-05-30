-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2023 at 09:14 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rdstudios`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_info`
--

CREATE TABLE IF NOT EXISTS `cart_info` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `item_rate` float NOT NULL,
  `item_quantity` int(11) NOT NULL,
  `username` text NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `cart_info`
--

INSERT INTO `cart_info` (`cart_id`, `item_id`, `item_rate`, `item_quantity`, `username`) VALUES
(1, 10, 39999.2, 2, 'r');

-- --------------------------------------------------------

--
-- Table structure for table `category_info`
--

CREATE TABLE IF NOT EXISTS `category_info` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(55) NOT NULL,
  `cat_dname` varchar(55) NOT NULL,
  `image_path` text NOT NULL,
  `cat_type` varchar(20) NOT NULL,
  `cat_parent_id` int(11) NOT NULL,
  `reg_date` datetime NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `category_info`
--

INSERT INTO `category_info` (`cat_id`, `cat_name`, `cat_dname`, `image_path`, `cat_type`, `cat_parent_id`, `reg_date`) VALUES
(3, 'Electronics', 'Electronics', 'Hydrangeas_1685191579.jpg', 'Primary', 0, '2023-05-23 06:02:26'),
(4, 'Mobiles', 'Smartphones', '_1685178222.', 'Secondary', 3, '2023-05-27 14:33:42');

-- --------------------------------------------------------

--
-- Table structure for table `complain_info`
--

CREATE TABLE IF NOT EXISTS `complain_info` (
  `complain_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(55) NOT NULL,
  `complain_subject` varchar(100) NOT NULL,
  `complain_descriptin` text NOT NULL,
  `complain_date` datetime NOT NULL,
  `receiver_name` varchar(55) NOT NULL DEFAULT 'admin',
  PRIMARY KEY (`complain_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `complain_info`
--

INSERT INTO `complain_info` (`complain_id`, `user_name`, `complain_subject`, `complain_descriptin`, `complain_date`, `receiver_name`) VALUES
(1, 'raja', 'movie', 'jhgjh', '2023-05-29 20:44:33', 'admin'),
(2, 'r', 'website does not work properly', 'this website is not working properly i dont know why ???\r\nthis websi', '2023-05-30 19:58:00', 'admin'),
(3, 'r', 'yes we reached you', 'we will solve your problem withing 3 days ', '2023-05-30 23:24:25', 'r'),
(4, 'r', 'yes we reached you', 'we will work here', '2023-05-30 23:40:33', 'raja');

-- --------------------------------------------------------

--
-- Table structure for table `item_info`
--

CREATE TABLE IF NOT EXISTS `item_info` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(55) NOT NULL,
  `item_dname` varchar(55) NOT NULL,
  `item_price` float NOT NULL,
  `item_description` text NOT NULL,
  `item_discount` float NOT NULL,
  `item_img` text NOT NULL,
  `item_category` varchar(20) NOT NULL,
  `reg_date` datetime NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `item_info`
--

INSERT INTO `item_info` (`item_id`, `item_name`, `item_dname`, `item_price`, `item_description`, `item_discount`, `item_img`, `item_category`, `reg_date`) VALUES
(10, 'samsung tv', 'samsung j2hf', 49999, 'it is a 45 inch smart tv.', 10, 'Desert_1684844834.jpg', '3', '2023-05-23 17:57:14'),
(11, 'samsung smartphone galaxy j27', 'samsung galaxy j7', 50000, 'it is a good smartphone', 0, 'Tulips_1685178288.jpg', '4', '2023-05-27 14:34:49'),
(12, 'fridge', 'samsung fridge ultra', 25000, 'bla bla bla', 0, 'Jellyfish_1685178978.jpg', '3', '2023-05-27 14:46:18');

-- --------------------------------------------------------

--
-- Table structure for table `news_info`
--

CREATE TABLE IF NOT EXISTS `news_info` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `news_name` varchar(80) NOT NULL,
  `news_description` text NOT NULL,
  `news_publication_date` date NOT NULL,
  `news_registration_date` date NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `news_info`
--

INSERT INTO `news_info` (`news_id`, `news_name`, `news_description`, `news_publication_date`, `news_registration_date`) VALUES
(2, 'big billion days', 'falana dekhana', '2023-05-26', '2023-05-26');

-- --------------------------------------------------------

--
-- Table structure for table `offer_info`
--

CREATE TABLE IF NOT EXISTS `offer_info` (
  `offer_id` int(11) NOT NULL AUTO_INCREMENT,
  `offer_name` text NOT NULL,
  `offer_discount` float NOT NULL,
  `offer_start_date` date NOT NULL,
  `offer_end_date` date NOT NULL,
  `offer_category_ids` text NOT NULL,
  `offer_registration_date` date NOT NULL,
  PRIMARY KEY (`offer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `offer_info`
--

INSERT INTO `offer_info` (`offer_id`, `offer_name`, `offer_discount`, `offer_start_date`, `offer_end_date`, `offer_category_ids`, `offer_registration_date`) VALUES
(3, 'big billion days', 10, '2023-05-25', '2023-06-01', '3', '2023-05-25');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE IF NOT EXISTS `order_detail` (
  `order_detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `item_rate` float NOT NULL,
  `item_quantity` int(11) NOT NULL,
  `order_main_id` int(11) NOT NULL,
  PRIMARY KEY (`order_detail_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`order_detail_id`, `item_id`, `item_rate`, `item_quantity`, `order_main_id`) VALUES
(14, 10, 44999.1, 1, 19),
(15, 10, 44999.1, 1, 20),
(16, 10, 39999.2, 2, 21);

-- --------------------------------------------------------

--
-- Table structure for table `order_main`
--

CREATE TABLE IF NOT EXISTS `order_main` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(30) NOT NULL,
  `shipping_address` text NOT NULL,
  `total_amount` float NOT NULL,
  `order_date` date NOT NULL,
  `order_status` varchar(30) NOT NULL,
  `last_update_date` date NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `order_main`
--

INSERT INTO `order_main` (`order_id`, `user_name`, `shipping_address`, `total_amount`, `order_date`, `order_status`, `last_update_date`) VALUES
(14, 't', 'rd', 179996, '2023-05-25', 'Shipped', '2023-05-25'),
(15, 't', 'shiv nagar', 179996, '2023-05-25', 'Pending', '2023-05-25'),
(16, 't', 'shiv nagar', 179996, '2023-05-25', 'Pending', '2023-05-25'),
(17, 't', 'shiv nagar', 179996, '2023-05-25', 'Pending', '2023-05-25'),
(18, 't', 'shiv nagar', 179996, '2023-05-25', 'Pending', '2023-05-25'),
(19, 't', 'shiv nagar', 44999.1, '2023-05-25', 'Returned', '2023-05-25'),
(20, 't', 'shiv nagar', 44999.1, '2023-05-25', 'Pending', '2023-05-25'),
(21, 'raja', 'kumhari', 79998.4, '2023-05-31', 'Shipped', '2023-05-31');

-- --------------------------------------------------------

--
-- Table structure for table `reply_info`
--

CREATE TABLE IF NOT EXISTS `reply_info` (
  `reply_id` int(11) NOT NULL AUTO_INCREMENT,
  `reply_subject` varchar(100) NOT NULL,
  `reply_description` text NOT NULL,
  `reply_date` datetime NOT NULL,
  `complain_id` int(11) NOT NULL,
  PRIMARY KEY (`reply_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `cust_id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_name` varchar(55) NOT NULL,
  `cust_email` varchar(20) NOT NULL,
  `cust_mobile` varchar(55) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_pass` varchar(20) NOT NULL,
  `user_type` varchar(5) NOT NULL DEFAULT 'user',
  `reg_date` datetime NOT NULL,
  PRIMARY KEY (`cust_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`cust_id`, `cust_name`, `cust_email`, `cust_mobile`, `user_name`, `user_pass`, `user_type`, `reg_date`) VALUES
(1, 'raja', 'ra', 'a', 'a', '', 'user', '0000-00-00 00:00:00'),
(2, 'raja', 'raja@gmail.com', '435345', 'raja', 'r', 'user', '2023-05-19 21:39:40'),
(3, 'raja', '', '', 'r', 'r', 'admin', '0000-00-00 00:00:00'),
(4, 'Raja Dewangan', 'raja@gmail.com', '435345', 't', 't', 'user', '2023-05-24 23:42:57');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
