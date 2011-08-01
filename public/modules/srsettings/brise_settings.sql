-- phpMyAdmin SQL Dump
-- version 3.1.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 30, 2011 at 01:37 PM
-- Server version: 5.5.14
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `brise`
--

-- --------------------------------------------------------

--
-- Table structure for table `brise_settings`
--

DROP TABLE IF EXISTS `brise_settings`;
CREATE TABLE IF NOT EXISTS `brise_settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `index` varchar(100) NOT NULL,
  `value` varchar(255) DEFAULT NULL,
  `value_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `index` (`index`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `brise_settings`
--

INSERT INTO `brise_settings` (`id`, `index`, `value`, `value_id`) VALUES
(1, 'site_name', NULL, NULL),
(2, 'site_description', NULL, NULL),
(3, 'home_page_id', NULL, NULL);
