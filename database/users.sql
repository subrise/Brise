-- phpMyAdmin SQL Dump
-- version 3.1.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 29, 2011 at 07:07 AM
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
-- Table structure for table `brise_roles`
--

DROP TABLE IF EXISTS `brise_roles`;
CREATE TABLE IF NOT EXISTS `brise_roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `brise_roles`
--

INSERT INTO `brise_roles` (`id`, `name`, `description`) VALUES
(1, 'login', 'Login privileges, granted after account confirmation'),
(2, 'admin', 'Administrative user, has access to everything.'),
(3, 'superadmin', 'Really has access to everything.');

-- --------------------------------------------------------

--
-- Table structure for table `brise_roles_users`
--

DROP TABLE IF EXISTS `brise_roles_users`;
CREATE TABLE IF NOT EXISTS `brise_roles_users` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `fk_role_id` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brise_roles_users`
--

INSERT INTO `brise_roles_users` (`user_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `brise_users`
--

DROP TABLE IF EXISTS `brise_users`;
CREATE TABLE IF NOT EXISTS `brise_users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(254) NOT NULL,
  `username` varchar(32) NOT NULL DEFAULT '',
  `password` varchar(64) NOT NULL,
  `logins` int(10) unsigned NOT NULL DEFAULT '0',
  `last_login` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_username` (`username`),
  UNIQUE KEY `uniq_email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `brise_users`
--

INSERT INTO `brise_users` (`id`, `email`, `username`, `password`, `logins`, `last_login`) VALUES
(1, 'sammy@subrise.com', 'admin', '8202276256023ead81f4ec809cee54fe5e633963270389f2826ac925c6dae872', 3, 1311891732);

-- --------------------------------------------------------

--
-- Table structure for table `brise_user_tokens`
--

DROP TABLE IF EXISTS `brise_user_tokens`;
CREATE TABLE IF NOT EXISTS `brise_user_tokens` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `user_agent` varchar(40) NOT NULL,
  `token` varchar(40) NOT NULL,
  `type` varchar(100) NOT NULL,
  `created` int(10) unsigned NOT NULL,
  `expires` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_token` (`token`),
  KEY `fk_user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `brise_user_tokens`
--


--
-- Constraints for dumped tables
--

--
-- Constraints for table `brise_roles_users`
--
ALTER TABLE `brise_roles_users`
  ADD CONSTRAINT `brise_roles_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `brise_users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `brise_roles_users_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `brise_roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `brise_user_tokens`
--
ALTER TABLE `brise_user_tokens`
  ADD CONSTRAINT `brise_user_tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `brise_users` (`id`) ON DELETE CASCADE;
