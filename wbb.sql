-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 27, 2014 at 09:55 PM
-- Server version: 5.5.32-MariaDB
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wbb`
--
CREATE DATABASE IF NOT EXISTS `wbb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `wbb`;

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE IF NOT EXISTS `catagory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `topic` varchar(45) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`id`, `topic`, `description`, `image`) VALUES
(1, 'ศูนย์ข้อมูลมหาวิทยาลัยพะเยา', 'ศูนย์รวมการสื่อสารต่างๆ ภายในมหาวิทยาลัยพะเยา', 'uplogo.png'),
(2, 'แหล่งซื้อขายสินค้ามือสอง', NULL, 'Second_Hand_Logo_invert.jpg'),
(3, 'ศูนย์ข้อมูลจังหวัดพะเยา', NULL, 'phayaologo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `comment` text,
  `member_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`,`post_id`,`member_id`),
  KEY `fk_comment_post1_idx` (`post_id`),
  KEY `fk_comment_member1_idx` (`member_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(45) DEFAULT NULL,
  `lname` varchar(45) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `tell` varchar(10) DEFAULT NULL,
  `SEX_id` int(11) NOT NULL,
  `enabled` tinyint(1) DEFAULT '0',
  `registerdate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `privilege_id` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `confirmmember` varchar(45) DEFAULT NULL,
  `profile` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`,`SEX_id`,`privilege_id`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  KEY `fk_member_SEX_idx` (`SEX_id`),
  KEY `fk_member_privilege1_idx` (`privilege_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `member_has_group`
--

CREATE TABLE IF NOT EXISTS `member_has_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`member_id`,`group_id`),
  KEY `fk_member_has_group_group1_idx` (`group_id`),
  KEY `fk_member_has_group_member1_idx` (`member_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `topic` varchar(45) DEFAULT NULL,
  `content` text,
  `created` timestamp NULL DEFAULT NULL,
  `updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `member_id` int(11) NOT NULL,
  `supgroup_id` int(11) NOT NULL,
  `supgroup_group_id` int(11) NOT NULL,
  `editabled` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`,`member_id`,`supgroup_id`,`supgroup_group_id`),
  KEY `fk_post_member1_idx` (`member_id`),
  KEY `fk_post_supgroup1_idx` (`supgroup_id`,`supgroup_group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `privilege`
--

CREATE TABLE IF NOT EXISTS `privilege` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sex`
--

CREATE TABLE IF NOT EXISTS `sex` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `subcatagory`
--

CREATE TABLE IF NOT EXISTS `subcatagory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(45) DEFAULT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`group_id`),
  KEY `fk_supgroup_group1_idx` (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_comment_post1` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_comment_member1` FOREIGN KEY (`member_id`) REFERENCES `member` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `fk_member_SEX` FOREIGN KEY (`SEX_id`) REFERENCES `sex` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_member_privilege1` FOREIGN KEY (`privilege_id`) REFERENCES `privilege` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `member_has_group`
--
ALTER TABLE `member_has_group`
  ADD CONSTRAINT `fk_member_has_group_group1` FOREIGN KEY (`group_id`) REFERENCES `catagory` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_member_has_group_member1` FOREIGN KEY (`member_id`) REFERENCES `member` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `fk_post_member1` FOREIGN KEY (`member_id`) REFERENCES `member` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_post_supgroup1` FOREIGN KEY (`supgroup_id`, `supgroup_group_id`) REFERENCES `subcatagory` (`id`, `group_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `subcatagory`
--
ALTER TABLE `subcatagory`
  ADD CONSTRAINT `fk_supgroup_group1` FOREIGN KEY (`group_id`) REFERENCES `catagory` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
