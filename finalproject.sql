-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 11, 2022 at 01:47 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'root@gmail.com', 'root123'),
(2, 'root2@gmail.cpm', 'root1234');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) CHARACTER SET ucs2 NOT NULL,
  `author` varchar(250) CHARACTER SET ucs2 NOT NULL,
  `numpages` int(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `catid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `author`, `numpages`, `image`, `catid`) VALUES
(2, 'The art of indifference', 'Mark Manson', 272, 'Ø§Ù„Ù„Ø§Ù…Ø¨Ø§Ù„Ø§Ø©.jpg', 5),
(6, 'To reassure my heart', 'Adham Sharkawy', 338, 'Ù„ÙŠØ·Ù…Ø¦Ù†_Ù‚Ù„Ø¨ÙŠ.jpg', 1),
(5, 'heba', 'Adham Sharkawy', 5, '360.jpg', 5),
(7, 'forty 40', 'Ahmed Shuqairi', 273, '40.jpg', 5),
(9, 'the one with the biggest shadow', 'Ø¬ÙŠÙ† ÙˆÙŠØ¨Ø³ØªØ±', 235, 'ØµØ§Ø­Ø¨_Ø§Ù„Ø¸Ù„.jpg', 1),
(10, 'to throb', 'Adham Sharkawy', 266, 'Ù†Ø¨Ø¶.jpg', 1),
(11, 'book thief', 'Marcus Zusak', 654, 'Ø³Ø§Ø±Ù‚Ø©_Ø§Ù„ÙƒØªØ¨.jpg', 1),
(12, 'Majid and Leen', 'Ù…ØµØ·ÙÙ‰ Ù„Ø·ÙÙŠ Ø§Ù„Ù…Ù†ÙÙ„ÙˆØ·ÙŠ', 226, 'Ù…Ø§Ø¬Ø¯.jpg', 1),
(13, 'the new house', 'Kamel Kilani', 14, 'Ø§Ù„Ø¨ÙŠØª_Ø§Ù„Ø¬Ø¯ÙŠØ¯.jpg', 2),
(14, 'smart bunny', 'Kamel Kilani', 12, 'Ø§Ù„Ø§Ø±Ù†Ø¨.jpg', 2),
(15, 'Shaima speaks', 'Shaimaa Fattah', 12, 'Ø´ÙŠÙ…Ø§Ø¡.jpg', 2),
(16, 'gold river ', 'Jacob Sharonis ', 45, 'Ù†Ù‡Ø±_Ø§Ù„Ø°Ù‡Ø¨.jpg', 2),
(17, 'the rebel ', 'Badran Abdel Halim', 166, 'Ø§Ù„Ù…ØªÙ…Ø±Ø¯.jpg', 3),
(18, 'Thoughts of a young man', ' Ahmed Shuqairi', 164, 'Ø®ÙˆØ§Ø·Ø±.jpg', 3),
(19, 'writing ', 'Ali Najem', 263, 'Ø¬Ø§Ø±ÙŠ_Ø§Ù„ÙƒØªØ§Ø¨Ø©.jpg', 3),
(20, 'female books ', 'Scheherazade', 205, 'Ø§Ù†Ø«Ù‰_Ø§Ù„ÙƒØªØ¨.jpg', 3),
(21, '365 marvels ', 'R. J. Palacio', 431, '360.jpg', 3),
(22, 'Learn programming with Python 3 ', 'swine tractor', 505, 'Ø¨Ø§ÙŠØ«ÙˆÙ†.jpg', 4),
(23, 'Introduction to Cyber Security', ' Mohamed Alaa Mohamed', 100, 'Ø³ÙƒÙŠÙˆØ±ØªÙŠ.jpg', 4),
(24, 'Programming in C# ', 'Ahmed Al Qasimi', 46, 'Ø³ÙŠ_Ø´Ø§Ø±Ø¨.jpg', 4),
(25, 'Ownership stage ', 'Khaled Saleh Al-Munif', 289, 'Ø§Ù„Ù…Ø±Ø­Ù„Ø©_Ø§Ù„Ù…Ù„ÙƒÙŠØ©.jpg', 5),
(26, 'The art of living wise ', 'Arthur Schopenhauer', 327, 'ÙÙ†_Ø§Ù„Ø¹ÙŠØ´.jpg', 6),
(27, 'the art of simplicity ', 'Dominique Lero', 257, 'ÙÙ†_Ø§Ù„Ø¨Ø³Ø§Ø·Ø©.jpg', 6),
(28, 'Courage book ', 'Osho', 120, 'Ø§Ù„Ø´Ø¬Ø§Ø¹Ø©.jpg', 6),
(29, 'the crazy ', 'Khalil Gibran', 68, 'Ø§Ù„Ù…Ø¬Ù†ÙˆÙ†.jpg', 6);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `catname` varchar(225) CHARACTER SET ucs2 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `catname`) VALUES
(1, 'noveles'),
(2, 'children'),
(3, 'Texts and thoughts'),
(4, 'computer'),
(5, 'Human development and self-development'),
(6, 'Philosophy and Logic');

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

DROP TABLE IF EXISTS `msg`;
CREATE TABLE IF NOT EXISTS `msg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `msg` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `msg`
--

INSERT INTO `msg` (`id`, `name`, `email`, `subject`, `msg`) VALUES
(1, 'test', 'heba.abutouq', 'heba', 'eeeeeeeeeeeee'),
(4, 'heba', 'kefa7.antar@gmail.com', 'heba', 'ccccccccccc'),
(5, 'heba', 'kefa7.antar@gmail.com', 'heba', 'ccccccccccc'),
(6, '', '', '', ''),
(7, 'test', 'hebaemad981@gmail.com', 'heba', 'lllllllllllllll'),
(10, 'heba', 'kefa7.antar@gmail.com', 'heba', 'jjjj'),
(11, 'test', 'kefa7.antar@gmail.com', 'heba', 'tttttttttttttt'),
(12, 'test', 'heba@gmail.com', 'heba', 'zzzzzzzzzzzzzz'),
(18, 'test', 'heba@gmail.com', 'test', 'welcome');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(250) NOT NULL,
  `username` varchar(225) NOT NULL,
  `phone` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `username`, `phone`) VALUES
(2, 'kefa7.antar@gmail.com', '123', 'heba.abutouq', '0777123456');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
