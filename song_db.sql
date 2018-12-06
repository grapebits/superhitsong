-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 11, 2018 at 06:17 AM
-- Server version: 5.6.13
-- PHP Version: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `song_db`
--
CREATE DATABASE IF NOT EXISTS `song_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `song_db`;

-- --------------------------------------------------------

--
-- Table structure for table `adds`
--

CREATE TABLE IF NOT EXISTS `adds` (
  `id` int(11) NOT NULL,
  `add1` longtext NOT NULL,
  `add2` longtext NOT NULL,
  `add3` longtext NOT NULL,
  `add4` longtext NOT NULL,
  `add5` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adds`
--

INSERT INTO `adds` (`id`, `add1`, `add2`, `add3`, `add4`, `add5`) VALUES
(1, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `cat_name` longtext NOT NULL,
  `date_time` datetime NOT NULL,
  UNIQUE KEY `cat_id` (`cat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `date_time`) VALUES
(29, 'test', '2018-08-11 11:28:00');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `id` int(11) NOT NULL,
  `name` longtext NOT NULL,
  `url` longtext NOT NULL,
  `text` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `name`, `url`, `text`) VALUES
(1, 'main', 'image/logo.jpg', 'GrapeBits SuperHit Song Store is developed by Harsh Mishra and Licensed under MIT.');

-- --------------------------------------------------------

--
-- Table structure for table `song`
--

CREATE TABLE IF NOT EXISTS `song` (
  `song_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `song_dj` longtext NOT NULL,
  `song_name` longtext NOT NULL,
  `song_url` text NOT NULL,
  `song_type` text NOT NULL,
  `song_date` date NOT NULL,
  `tags` longtext NOT NULL,
  `page_url` longtext NOT NULL,
  `song_date_time` datetime NOT NULL,
  UNIQUE KEY `song_id` (`song_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69 ;

--
-- Dumping data for table `song`
--

INSERT INTO `song` (`song_id`, `user_id`, `song_dj`, `song_name`, `song_url`, `song_type`, `song_date`, `tags`, `page_url`, `song_date_time`) VALUES
(68, 1, 'admin', '01 chand sitare .mp3', '01 chand sitare .mp3', 'test', '2018-08-11', '01 chand sitare .mp3', 'category/test/01 chand sitare .mp3.php', '2018-08-11 11:30:42');

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE IF NOT EXISTS `support` (
  `support_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  UNIQUE KEY `support_id` (`support_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `support`
--

INSERT INTO `support` (`support_id`, `question`, `answer`) VALUES
(1, 'When to Renew my website?', 'Next Renewable date is : 2019. Renew your website before the date.'),
(2, 'What is the renewable cost?', 'Renewable cost is only Rs. 2500 for one year.'),
(3, 'What to do if i have problem?', 'Call @ 9504244977'),
(4, 'What is GrapeBits?', 'GrapeBits is Content Management System created by Harsh Mishra on behalf of GrapeBits. Find more interesting projects at http://www.github.com/grapebits');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` mediumtext NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` tinytext NOT NULL,
  `activation` tinyint(1) NOT NULL,
  `registerdate` datetime NOT NULL,
  `registerip` text NOT NULL,
  `lastvisit` datetime NOT NULL,
  `type` text NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `activation`, `registerdate`, `registerip`, `lastvisit`, `type`) VALUES
(1, 'ADMIN', 'admin', 'ADMIN@ADMIN.COM', 'admin', 0, '2017-08-13 12:07:45', '::1', '2018-08-11 11:46:41', 'general');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
