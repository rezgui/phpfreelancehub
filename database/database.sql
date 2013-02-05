-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 03, 2013 at 07:06 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `phpfh`
--

-- --------------------------------------------------------

--
-- Table structure for table `phpfh_clients`
--

CREATE TABLE IF NOT EXISTS `phpfh_clients` (
  `user_id` int(10) NOT NULL,
  `company_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `client_id` int(100) NOT NULL AUTO_INCREMENT,
  `reference` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(1) NOT NULL DEFAULT '0',
  UNIQUE KEY `client_id` (`client_id`),
  KEY `user_id` (`user_id`),
  KEY `deleted` (`deleted`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `phpfh_modules`
--

CREATE TABLE IF NOT EXISTS `phpfh_modules` (
  `name_lang_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `desc_lang_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sort` int(10) NOT NULL,
  `module_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`module_id`),
  UNIQUE KEY `desc_lang_key` (`desc_lang_key`),
  UNIQUE KEY `name_lang_key` (`name_lang_key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phpfh_modules`
--

INSERT INTO `phpfh_modules` (`name_lang_key`, `desc_lang_key`, `sort`, `module_id`) VALUES
('module_clients', 'module_clients_desc', 20, 'clients'),
('module_files', 'module_files_desc', 60, 'files'),
('module_inventory', 'module_inventory_desc', 50, 'inventory'),
('module_invoices', 'module_invoices_desc', 30, 'invoices'),
('module_messages', 'module_messages_desc', 40, 'messages'),
('module_projects', 'module_projects_desc', 10, 'projects'),
('module_settings', 'module_settings_desc', 70, 'settings');

-- --------------------------------------------------------

--
-- Table structure for table `phpfh_people`
--

CREATE TABLE IF NOT EXISTS `phpfh_people` (
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zipcode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`user_id`),
  KEY `full_name` (`full_name`),
  KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `phpfh_users`
--

CREATE TABLE IF NOT EXISTS `phpfh_users` (
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) NOT NULL,
  `deleted` int(1) NOT NULL DEFAULT '0',
  UNIQUE KEY `username` (`username`),
  KEY `user_id` (`user_id`),
  KEY `deleted` (`deleted`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `phpfh_clients`
--
ALTER TABLE `phpfh_clients`
  ADD CONSTRAINT `phppos_clients_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `phpfh_people` (`user_id`);

--
-- Constraints for table `phpfh_users`
--
ALTER TABLE `phpfh_users`
  ADD CONSTRAINT `phppos_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `phpfh_people` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
