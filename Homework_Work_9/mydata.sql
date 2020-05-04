-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2020 at 02:59 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydata`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(6) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `releaseDate` date NOT NULL,
  `dueDate` date NOT NULL,
  `company` varchar(50) NOT NULL,
  `weight` float NOT NULL,
  `caloricity` float NOT NULL,
  `fatContent` float NOT NULL,
  `insertionDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `productName`, `quantity`, `releaseDate`, `dueDate`, `company`, `weight`, `caloricity`, `fatContent`, `insertionDate`) VALUES
(1, 'Natural Juice - Pomegranate', 60, '2019-05-08', '2020-07-08', 'Kampa', 0.1, 25.6, 12.3, '2020-05-03'),
(2, 'Natural Juice - Cherry', 53, '2019-05-08', '2020-07-08', 'Kampa', 0.1, 25.6, 12.3, '2020-05-03'),
(4, 'Fanta', 19, '2020-01-09', '2020-05-31', 'The Coca-Cola Company', 0.9, 16.25, 65.2, '2020-05-04'),
(5, 'Coca-Cola', 32, '2020-01-24', '2020-06-27', 'The Coca-Cola Company', 0.9, 12.3, 48.3, '2020-05-04'),
(6, 'Ice-Cream LOLO', 98, '2020-04-15', '2020-06-30', 'Tolia Company', 0.25, 89.2, 14.6, '2020-05-04'),
(7, 'Ice-Cream Tolia', 198, '2020-04-05', '2020-07-29', 'Tolia Company', 0.25, 14.8, 79.1, '2020-05-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
