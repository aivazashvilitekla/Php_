-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2020 at 02:57 PM
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
(3, 'title3', '2020-03-26', 'type_smth', 'true', 'text here', 'me', 'desc_text', 'text, key, title', 'desc_text'),
(4, 'AngularJS', '2020-04-09', 'js', 'pic', 'This tutorial is specially designed to help you learn AngularJS as quickly and efficiently as possible.', 'me', 'First, you will learn the basics of AngularJS: directives, expressions, filters, modules, and controllers.', 'AngularJS, js', 'Then you will learn everything else you need to know about AngularJS:'),
(5, 'JSON', '2020-04-09', 'js', 'pic', 'JSON is a syntax for storing and exchanging data.', 'me', 'JSON: JavaScript Object Notation.', 'json, js', 'JSON is text, written with JavaScript object notation.'),
(6, 'AJAX', '2020-04-09', 'js', 'pic', 'AJAX is a developer\'s dream, because you can:', 'me', 'Read data from a web server - after the page has loaded', 'ajax, js', 'Update a web page without reloading the page'),
(7, 'W3.JS', '2020-04-09', 'js', 'pic', 'W3.JS is a JavaScript library designed to simplify web development projects:', 'me', 'Easy to learn and easy to use.', 'w3, js', 'Designed for fast application development.'),
(8, 'Node.js', '2020-04-09', 'js', 'pic', 'Node.js is an open source server environment.', 'me', 'Node.js allows you to run JavaScript on the server.', 'node.js, js', 'Our \"Show Node.js\" tool makes it easy to learn Node.js, it shows both the code and the result.'),
(9, 'Python', '2020-04-09', 'programming', 'pic', 'Python is a programming language.', 'me', 'Python can be used on a server to create web applications.', 'Python, programming language', 'With our \"Try it Yourself\" editor, you can edit the code and view the result.'),
(10, 'Java', '2020-04-09', 'programming', 'pic', 'Java is a programming language.', 'me', 'Java is used to develop mobile apps, web apps, desktop apps, games and much more.', 'java', 'Our \"Show Java\" tool makes it easy to learn Java, it shows both the code and the result.'),
(11, 'C++', '2020-04-09', 'programming', 'pic', 'C++ is a popular programming language.', 'me', 'C++ is used to create computer programs.', 'C++', 'Our \"Show C++\" tool makes it easy to learn C++, it shows both the code and the result.'),
(12, 'C#', '2020-04-09', 'programming', 'pic', 'C# (C-Sharp) is a programming language developed by Microsoft that runs on the .NET Framework.', 'me', 'C# is used to develop web apps, desktop apps, mobile apps, games and much more.', 'c++', 'Our \"Show C#\" tool makes it easy to learn C#, it shows both the code and the result.');

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
(3, 'JavaScript', 'javascript, programming, language', 'JavaScript.com is a resource for the JavaScript community. You will find resources and examples for JavaScript beginners as well as support for JavaScript', 'Well organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java'),
(4, 'jQuery', 'jQuery, javascript, php', 'jQuery is a JavaScript Library.', 'jQuery greatly simplifies JavaScript programming.'),
(5, 'React', 'react, js, javascript', 'React is a JavaScript library for building user interfaces.', 'React is used to build single page applications.');

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
(3, 'Davit', 'Gochiashvili', 19, '2019-08-15', '2020-03-26', 'hdfsdhd', 'male'),
(4, 'JAMES', 'SMITH', 20, '2019-07-17', '2020-04-09', '123', 'male'),
(5, 'JOHN', 'JOHNSON', 19, '2019-09-16', '2020-04-09', '123', 'male');

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
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
