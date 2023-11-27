-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 17, 2023 at 07:55 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `food_menu`
--

CREATE TABLE `food_menu` (
  `ID` int(12) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Price` varchar(255) NOT NULL,
  `Img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food_menu`
--

INSERT INTO `food_menu` (`ID`, `Name`, `Description`, `Type`, `Price`, `Img`) VALUES
(1, 'Sabji Paratha', 'Vegetable-Paratha', 'Breakfast', '30', 'img/sabji-paratha.png'),
(2, 'Dim Paratha', 'Egg omlette paratha', 'Breakfast', '50', 'img/dim-paratha.png'),
(3, 'Dal Paratha', 'Dal with Paratha', 'Breakfast', '30', 'img/dal-paratha.png'),
(4, 'Vaat', 'White plain rice', 'Lunch', '10', 'img/vaat.png'),
(5, 'Chicken Curry', 'Chicken Jhaal Curry', 'Lunch', '50', 'img/chicken.png'),
(6, 'Dim Bhuna', 'Egg Vhuna with Onion', 'Dinner', '30', 'img/dim vuna.png'),
(7, 'Beef', 'Beef Curry [6 pieces]', 'Lunch', '100', 'img/beef.png'),
(8, 'MuriGhanta', 'Fish Head & Daal', 'Lunch', '30', 'img/murighanta.png'),
(9, 'Khichuri', 'Rice and Daal Mixed  ', 'Dinner', '30', 'img/khichuri.png'),
(10, 'Fish Curry', 'Rui Mach Curry', 'Dinner', '40', 'img/fish.png');

-- --------------------------------------------------------

--
-- Table structure for table `order_list`
--

CREATE TABLE `order_list` (
  `id` int(12) NOT NULL,
  `food_name` varchar(255) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `menu_id` varchar(100) NOT NULL,
  `price` varchar(255) NOT NULL,
  `addres` varchar(255) NOT NULL,
  `quantity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_list`
--

INSERT INTO `order_list` (`id`, `food_name`, `user_id`, `user_name`, `menu_id`, `price`, `addres`, `quantity`) VALUES
(33, 'MuriGhanta', '4', 'Almas02', '8 ', '1020', 'ashuliya', '34'),
(34, 'Rice', '4', 'sinthia', '8 ', '390', 'pabna', '13'),
(42, 'Dim Paratha', '4', 'Almas02', '2 ', '100', 'Ashuliya', '2');

-- --------------------------------------------------------

--
-- Table structure for table `user_signup`
--

CREATE TABLE `user_signup` (
  `ID` int(12) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(60) NOT NULL,
  `sub_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_signup`
--

INSERT INTO `user_signup` (`ID`, `name`, `email`, `password`, `user_type`, `sub_type`) VALUES
(3, 'Admin_1', 'admin0@gmail.com', '1234', 'Admin', ''),
(4, 'Almas02', 'almas12@gmail.com', '1234', 'User', 'Daily'),
(5, 'abc', 'abc@gmail.com', '1234', 'User', 'Daily');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food_menu`
--
ALTER TABLE `food_menu`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `order_list`
--
ALTER TABLE `order_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_signup`
--
ALTER TABLE `user_signup`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food_menu`
--
ALTER TABLE `food_menu`
  MODIFY `ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `order_list`
--
ALTER TABLE `order_list`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `user_signup`
--
ALTER TABLE `user_signup`
  MODIFY `ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
