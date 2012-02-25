-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 25, 2012 at 08:04 PM
-- Server version: 5.5.9
-- PHP Version: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `agitcraft`
--

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `path` varchar(250) NOT NULL,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=120 ;

--
-- Dumping data for table `assets`
--


-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT 'Unique ID',
  `date_added` date NOT NULL,
  `date_modified` date NOT NULL,
  `title` varchar(50) NOT NULL,
  `label` varchar(50) NOT NULL,
  `category` enum('Photo','Flash','Video','Digital Art','Website','Library','Resource') NOT NULL,
  `job_type` enum('Personal','Client','Student','Experimental','Open Source') NOT NULL,
  `description` text NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  UNIQUE KEY `uid` (`id`),
  KEY `job_type` (`job_type`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Works used on agitcraft.com' AUTO_INCREMENT=27 ;

--
-- Dumping data for table `media`
--


-- --------------------------------------------------------

--
-- Table structure for table `relationships_assets`
--

CREATE TABLE `relationships_assets` (
  `media_id` int(10) unsigned zerofill NOT NULL,
  `asset_id` int(10) unsigned zerofill NOT NULL,
  KEY `media_id` (`media_id`),
  KEY `asset_id` (`asset_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `relationships_assets`
--


-- --------------------------------------------------------

--
-- Table structure for table `relationships_tags`
--

CREATE TABLE `relationships_tags` (
  `media_id` int(10) unsigned zerofill NOT NULL,
  `tag_id` int(10) unsigned zerofill NOT NULL,
  KEY `media_id` (`media_id`),
  KEY `tag_id` (`tag_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Lists relationships between tags and media';

--
-- Dumping data for table `relationships_tags`
--


-- --------------------------------------------------------

--
-- Table structure for table `shared_users`
--

CREATE TABLE `shared_users` (
  `id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `address` varchar(80) NOT NULL,
  `date` date NOT NULL,
  `referrer` int(10) unsigned zerofill NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `shared_users`
--


-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT 'Unique ID',
  `name` varchar(20) NOT NULL COMMENT 'Tag Name',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Table of Tags for Media' AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tags`
--


-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `address` varchar(80) NOT NULL,
  `date` date NOT NULL,
  `registered` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `address` (`address`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `visitors`
--

