-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2016 at 07:34 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_news`
--

CREATE TABLE IF NOT EXISTS `ci_news` (
  `ne_id` int(11) NOT NULL AUTO_INCREMENT,
  `ne_title` varchar(300) NOT NULL,
  `ne_desc` text NOT NULL COMMENT 'نص الخبر',
  `ne_img` varchar(255) NOT NULL,
  `ne_created` varchar(50) NOT NULL,
  PRIMARY KEY (`ne_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `ci_news`
--

INSERT INTO `ci_news` (`ne_id`, `ne_title`, `ne_desc`, `ne_img`, `ne_created`) VALUES
(38, 'Climate predicts bird populations\n', 'Populations of the most common bird species in Europe', 'bird.jpg', '1459435234'),
(39, 'Google April Fool Gmail button sparks backlash', 'Google has removed an April Fool''s Gmail button, which sent a comical animation to recipients, after reports of people getting into trouble at work.\n', 'google_splash.jpg', '1459435249');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
