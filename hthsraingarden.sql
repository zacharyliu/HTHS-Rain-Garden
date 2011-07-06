-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 06, 2011 at 06:54 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hthsraingarden`
--

-- --------------------------------------------------------

--
-- Table structure for table `garden`
--

CREATE TABLE IF NOT EXISTS `garden` (
  `id` int(11) NOT NULL,
  `plant_type_id` int(11) NOT NULL,
  `adopter_name` varchar(100) NOT NULL,
  `adopter_email` varchar(100) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `garden`
--

INSERT INTO `garden` (`id`, `plant_type_id`, `adopter_name`, `adopter_email`) VALUES
(0, 8, '', ''),
(1, 8, '', ''),
(4, 8, '', ''),
(9, 8, 'person', 'test@example.com'),
(12, 8, '', ''),
(14, 8, '', ''),
(15, 8, '', ''),
(17, 8, '', ''),
(20, 8, '', ''),
(24, 8, '', ''),
(28, 8, '', ''),
(30, 8, '', ''),
(31, 8, '', ''),
(32, 7, '', ''),
(33, 7, '', ''),
(34, 7, '', ''),
(35, 6, '', ''),
(36, 6, '', ''),
(37, 6, '', ''),
(38, 5, '', ''),
(39, 5, '', ''),
(40, 5, '', ''),
(45, 4, '', ''),
(46, 4, '', ''),
(47, 4, '', ''),
(48, 4, '', ''),
(49, 4, '', ''),
(50, 4, '', ''),
(51, 2, '', ''),
(52, 1, '', ''),
(53, 1, '', ''),
(54, 4, '', ''),
(55, 4, 'test', ''),
(56, 4, '', ''),
(57, 5, '', ''),
(58, 5, '', ''),
(59, 5, '', ''),
(63, 7, '', ''),
(64, 7, '', ''),
(65, 7, '', ''),
(74, 3, '', ''),
(75, 3, '', ''),
(76, 3, '', ''),
(77, 3, '', ''),
(78, 3, '', ''),
(79, 3, '', ''),
(80, 3, '', ''),
(81, 3, '', ''),
(110, 4, '', ''),
(111, 4, '', ''),
(112, 4, '', ''),
(113, 2, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `slug`, `name`, `content`) VALUES
(1, 'home', 'Home', 'You''re looking at the Home Page.'),
(3, 'plants', 'Plants', ''),
(8, 'adopt', 'Adopt', '');

-- --------------------------------------------------------

--
-- Table structure for table `plants`
--

CREATE TABLE IF NOT EXISTS `plants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `links` text NOT NULL,
  `image` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `plants`
--

INSERT INTO `plants` (`id`, `title`, `content`, `links`, `image`) VALUES
(1, 'River Birch', '', '', 'river_birch.jpg'),
(2, 'American Holly', '', '', 'american_holly.jpg'),
(3, 'Winterberry Holly', '', '', 'winterberry_holly.jpg'),
(4, 'Compact Japanese Holly', '', '', 'compact_japanese_holly.jpg'),
(5, 'Chokeberry', '', '', 'chokeberry.jpg'),
(6, 'Highbush Blueberry', '', '', 'highbush_blueberry.jpg'),
(7, 'Red Twig Dogwood', '', '', 'red_twig_dogwood.jpg'),
(8, 'Blue Rug Junipers', '', '', 'blue_rug_junipers.jpg'),
(9, 'Cranberry Viburnum', '', '', 'cranberry_viburnum.jpg'),
(10, 'Liriope', '', '', 'liriope.jpg'),
(11, 'Black-eye Susans', '', '', 'black-eye_susans.jpg'),
(12, 'Purple Coneflower', '', '', 'purple_coneflower.jpg'),
(13, 'Sensitive Fern', '', '', 'sensitive_fern.jpg'),
(14, 'Cinnamon (Royal) Fern', '', '', 'cinnamon_(royal)_fern.jpg'),
(15, 'Indiangrass', '', '', 'indiangrass.jpg'),
(16, 'Blue Flag Iris', '', '', 'blue_flag_iris.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `queue`
--

CREATE TABLE IF NOT EXISTS `queue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plant_id` int(2) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `code` varchar(100) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `queue`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'test', '1a1dc91c907325c69271ddf0c944bc72');
