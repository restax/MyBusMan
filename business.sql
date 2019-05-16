-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2019 at 04:51 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `business`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Product_Name` varchar(20) NOT NULL,
  `Cost` int(11) NOT NULL,
  `Stock` int(11) NOT NULL,
  `Description` int(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Product_Name`, `Cost`, `Stock`, `Description`) VALUES
('Tablets', 10, 1000, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `month` varchar(10) NOT NULL,
  `year` int(4) NOT NULL,
  `n_cust` int(11) NOT NULL,
  `n_trans` int(11) NOT NULL,
  `t_revenue` int(11) NOT NULL,
  `t_profit` int(11) NOT NULL,
  `tax` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`month`, `year`, `n_cust`, `n_trans`, `t_revenue`, `t_profit`, `tax`) VALUES
('February', 2019, 2, 3, 2400, 800, 120);

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `Task_ID` int(11) NOT NULL,
  `Task_Name` varchar(32) NOT NULL,
  `Date_Time` datetime NOT NULL,
  `Priority` int(11) NOT NULL,
  `Reminder` tinyint(1) DEFAULT NULL,
  `Details` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`Task_ID`, `Task_Name`, `Date_Time`, `Priority`, `Reminder`, `Details`) VALUES
(5, 'Meet X', '2019-04-12 16:00:00', 2, 0, 'Must be done');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `Transaction_ID` varchar(32) NOT NULL,
  `Customer_Name` varchar(20) NOT NULL,
  `Date_Time` datetime NOT NULL,
  `Product` varchar(20) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `Profit` int(11) NOT NULL,
  `Notes` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`Transaction_ID`, `Customer_Name`, `Date_Time`, `Product`, `Quantity`, `Price`, `Profit`, `Notes`) VALUES
('2051260245eeacb4635e12147c8c9b9e', 'Alex', '2019-02-11 12:00:00', 'Tablets', 10, 100, 0, 'Paid'),
('453ed5999a25c976845b36cce605d8e1', 'Custom', '2019-04-09 13:01:00', 'Tablets', 10, 150, 50, 'Hi'),
('509c9c2b1845ee6d1760dcadd18016c1', 'PharMedicals', '2019-03-24 16:00:00', 'Tablets', 50, 450, -50, 'Paid'),
('543b1be78c954fc57adfd119680a57f1', 'Phoenix Medicals', '2019-02-21 10:30:00', 'Tablets', 100, 1500, 500, 'Paid'),
('64c3359619fa393ca1d8ce54ad149983', 'Phoenix Medicals', '2019-02-13 10:30:00', 'Tablets', 50, 800, 300, 'Paid'),
('8bd41abe57439d6cf2a87170f16d78b1', 'R Kumar', '2019-03-12 18:00:00', 'Tablets', 10, 150, 50, 'Paid'),
('99da0928b29c33e4c2c5d46a43b7c630', 'PharMedicals', '2019-03-03 12:30:00', 'Tablets', 120, 1200, 0, 'Paid'),
('9c6617fa41d6a962046117f6953b2b0e', 'Phoenix Medicals', '2019-03-17 12:00:00', 'Tablets', 200, 2500, 500, 'Paid');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `password`) VALUES
('alekhya2511@live.com', '1f2bf487cb9ee06a2837b5ee9214bcee'),
('satwik.aari@gmail.com', '95dce9eadf78f66036edc6577bf8760d');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Product_Name`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`Task_ID`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`Transaction_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
