-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2023 at 04:15 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homeverse`
--

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `backgroundName` varchar(255) NOT NULL,
  `pictureName` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `bedrooms` int(11) NOT NULL,
  `bathrooms` int(11) NOT NULL,
  `squareFt` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `whatsapp` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `blog` varchar(10) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `featured_blog` varchar(10) NOT NULL,
  `active_blog` varchar(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `name`, `type`, `status`, `city`, `backgroundName`, `pictureName`, `price`, `bedrooms`, `bathrooms`, `squareFt`, `description`, `featured`, `active`, `owner`, `phone`, `whatsapp`, `email`, `blog`, `comment`, `featured_blog`, `active_blog`, `date`) VALUES
(1, 'New Flat Nice View', 'flat', 'FOR SALE', '27 Ingram Street, Nairobi', 'Background-Name-4030.jpg', 'Picture-Name-1763.jpg', 5400000, 6, 4, 5040, 'Beautiful Huge 1 Family House in Heart Of Westburry Newly Renovated With New Wood', 'Yes', 'Yes', 'Artkins', 757451020, 757451020, 'bellachao@hotmail.com', 'Yes', 'Most Famous Flat in 2023', 'No', 'Yes', '2023-01-01'),
(2, 'Modern Office', 'office', 'FOR SALE', '27 Ingram Street, Nairobi', 'Background-Name-6700.jpeg', 'Picture-Name-6379.jpg', 54500000, 0, 100, 5428, 'Beautiful Huge 1 Family House in Heart Of Westburry Newly Renovated With New Wood', 'No', 'Yes', 'Angel', 710235468, 710235468, 'angel254@hotmail.com', 'Yes', 'Most Luxurious Office in 2022', 'Yes', 'Yes', '2022-12-20'),
(4, 'Comfortable House', 'house', 'FOR RENT', '27 Ingram Street, Nairobi', 'Background-Name-1086.jpg', 'Picture-Name-6898.jpg', 985145, 7, 5, 8545, 'Beautiful Huge 1 Family House in Heart Of Westburry Newly Renovated With New Wood', 'No', 'Yes', 'jhtrfd', 757451020, 452321, 'gfyt@gmail.com', '', '', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `full_name`, `username`, `email`, `phone`, `password`, `admin`) VALUES
(1, 'Don Artkins', 'Artkins', 'bellachao@hotmail.com', 757451020, '21232f297a57a5a743894a0e4a801fc3', 'Yes'),
(2, 'Gift Artkins', 'Angel', 'angel254@hotmail.com', 710235468, '21232f297a57a5a743894a0e4a801fc3', 'Yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
