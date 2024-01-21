-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 04, 2023 at 08:08 AM
-- Server version: 10.6.5-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `destination`
--

-- --------------------------------------------------------

--
-- Table structure for table `role_control`
--

DROP TABLE IF EXISTS `role_control`;
CREATE TABLE IF NOT EXISTS `role_control` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role` text DEFAULT NULL,
  `notification_send` text DEFAULT NULL,
  `balance_drives` text DEFAULT NULL,
  `my_account` text DEFAULT NULL,
  `drivers` text DEFAULT NULL,
  `manage_ride` text DEFAULT NULL,
  `pickup_user` text DEFAULT NULL,
  `destination_users` text DEFAULT NULL,
  `price_rate` text DEFAULT NULL,
  `reffrel_amount_notification` text DEFAULT NULL,
  `bank_setting` text DEFAULT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role_control`
--

INSERT INTO `role_control` (`role_id`, `role`, `notification_send`, `balance_drives`, `my_account`, `drivers`, `manage_ride`, `pickup_user`, `destination_users`, `price_rate`, `reffrel_amount_notification`, `bank_setting`) VALUES
(8, 'admin', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
