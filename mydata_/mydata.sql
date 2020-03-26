-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2020 at 03:29 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(6) UNSIGNED NOT NULL,
  `Title` varchar(30) NOT NULL,
  `Date` date NOT NULL,
  `Type` varchar(30) NOT NULL,
  `Photo` varchar(50) NOT NULL,
  `Text` text NOT NULL,
  `Author` varchar(30) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Meta_k` varchar(200) NOT NULL,
  `Meta_d` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `Title`, `Date`, `Type`, `Photo`, `Text`, `Author`, `Description`, `Meta_k`, `Meta_d`) VALUES
(1, 'title1', '2020-03-26', 'type_smth', 'true', 'some text', 'me', 'description text', 'text, title', 'description text'),
(2, 'title2', '2020-03-26', 'type4', 'false', 'some text here', 'me', 'desc_text', 'text, title', 'desc_text2'),
(3, 'title3', '2020-03-26', 'type_smth', 'true', 'text here', 'me', 'desc_text', 'text, key, title', 'desc_text');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(6) UNSIGNED NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Meta_k` varchar(200) NOT NULL,
  `Meta_d` varchar(200) NOT NULL,
  `Text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `Title`, `Meta_k`, `Meta_d`, `Text`) VALUES
(1, 'Html', 'Html, programming, language', 'Hypertext Markup Language (HTML) is the standard markup language for documents designed to be displayed in a web browser.', 'In just 3 hours, learn basic HTML, the skeleton of all web pages, and place text on a page, add images & videos, and share data in HTML tables.'),
(2, 'Php', 'php, programming, language', 'PHP is a popular general-purpose scripting language that is especially suited to web ... All PHP 7.2 users are encouraged to upgrade to this version.', 'Learn the fundamentals of PHP, one of the most popular languages of modern web development.'),
(3, 'JavaScript', 'javascript, programming, language', 'JavaScript.com is a resource for the JavaScript community. You will find resources and examples for JavaScript beginners as well as support for JavaScript', 'Well organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) UNSIGNED NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Lastname` varchar(30) NOT NULL,
  `Age` int(11) NOT NULL,
  `BirthDay` date NOT NULL,
  `Reg_Date` date NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Name`, `Lastname`, `Age`, `BirthDay`, `Reg_Date`, `Password`, `Gender`) VALUES
(1, 'Tekla', 'Aivazashvili', 19, '2019-04-15', '2020-03-26', '123456', 'female'),
(2, 'Lazare', 'Zodelava', 19, '2018-12-11', '2020-03-26', '435436436', 'male'),
(3, 'Davit', 'Gochiashvili', 19, '2019-08-15', '2020-03-26', 'hdfsdhd', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
