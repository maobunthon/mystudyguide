-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 22, 2015 at 03:55 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mystudyguide_db`
--
CREATE DATABASE IF NOT EXISTS `mystudyguide_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `mystudyguide_db`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adm_fullName` varchar(200) NOT NULL,
  `adm_gender` varchar(20) NOT NULL,
  `adm_userName` varchar(200) NOT NULL,
  `adm_password` varchar(200) NOT NULL,
  `adm_status` int(11) NOT NULL,
  `adm_photo` varchar(200) NOT NULL,
  `adm_addDate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adm_fullName`, `adm_gender`, `adm_userName`, `adm_password`, `adm_status`, `adm_photo`, `adm_addDate`) VALUES
(1, 'MAO BUNTHON', 'Male', 'bunthon', '202cb962ac59075b964b07152d234b70', 1, 'bunthon.jpg', '2014-09-23 13:24:35'),
(2, 'Administrator', 'Male', 'admin', '202cb962ac59075b964b07152d234b70', 1, 'bunthon.jpg', '2014-09-23 13:24:35');

-- --------------------------------------------------------

--
-- Table structure for table `adm_user`
--

CREATE TABLE IF NOT EXISTS `adm_user` (
  `adm_id` int(11) NOT NULL AUTO_INCREMENT,
  `adm_fullName` varchar(100) DEFAULT NULL,
  `adm_email` varchar(100) DEFAULT NULL,
  `adm_gender` varchar(45) DEFAULT NULL,
  `adm_pass` varchar(100) DEFAULT NULL,
  `adm_dob` date DEFAULT NULL,
  `adm_address` varchar(100) DEFAULT NULL,
  `adm_phone` varchar(100) DEFAULT NULL,
  `adm_status` varchar(100) DEFAULT NULL,
  `adm_activate` varchar(100) DEFAULT NULL,
  `adm_dateTime` datetime DEFAULT NULL,
  PRIMARY KEY (`adm_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `adm_user`
--

INSERT INTO `adm_user` (`adm_id`, `adm_fullName`, `adm_email`, `adm_gender`, `adm_pass`, `adm_dob`, `adm_address`, `adm_phone`, `adm_status`, `adm_activate`, `adm_dateTime`) VALUES
(1, 'Mao Bunthon', 'maobunthon168@gmail.com', 'M', '202cb962ac59075b964b07152d234b70', '1993-10-18', 'Phnom Penh', '0963333095', '1', '', '2015-07-15 00:00:00'),
(2, 'Hort Sorphea', 'hort.sorphea@gmail.com', 'F', '202cb962ac59075b964b07152d234b70', '1993-10-18', 'Phnom Penh', '0968595547', '1', '', '2015-07-15 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `allowip`
--

CREATE TABLE IF NOT EXISTS `allowip` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(50) NOT NULL,
  `note` varchar(500) NOT NULL,
  `other` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `allowip`
--

INSERT INTO `allowip` (`id`, `ip`, `note`, `other`) VALUES
(1, '192.168.1.5', '', ''),
(2, '192.168.1.7', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE IF NOT EXISTS `branch` (
  `br_id` int(11) NOT NULL AUTO_INCREMENT,
  `uni_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `us_type_id` int(11) NOT NULL,
  `br_name` varchar(100) DEFAULT NULL,
  `br_isHeadOffice` int(11) DEFAULT NULL,
  `br_isFeature` int(11) NOT NULL,
  `br_address` text NOT NULL,
  `br_google_map` varchar(100) NOT NULL,
  `br_phone` varchar(100) NOT NULL,
  `br_email` varchar(100) NOT NULL,
  `br_fax` varchar(100) NOT NULL,
  `br_website` varchar(100) NOT NULL,
  `br_facebook` varchar(100) NOT NULL,
  `br_status` int(11) NOT NULL,
  `br_addBy` int(11) NOT NULL,
  `br_addDate` datetime DEFAULT NULL,
  `br_delete` int(11) DEFAULT NULL,
  `br_deleteDate` datetime DEFAULT NULL,
  `note` text,
  PRIMARY KEY (`br_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`br_id`, `uni_id`, `pro_id`, `us_type_id`, `br_name`, `br_isHeadOffice`, `br_isFeature`, `br_address`, `br_google_map`, `br_phone`, `br_email`, `br_fax`, `br_website`, `br_facebook`, `br_status`, `br_addBy`, `br_addDate`, `br_delete`, `br_deleteDate`, `note`) VALUES
(1, 1, 1, 1, 'Cambodian Mekong University (PP)', 1, 1, '', '', '', '', '', '', '', 1, 1, '2015-07-16 00:00:00', 0, '0000-00-00 00:00:00', NULL),
(2, 1, 2, 1, 'Cambodian Mekong University (SR)', 0, 0, '', '', '', '', '', '', '', 1, 1, '2015-07-16 00:00:00', 0, '0000-00-00 00:00:00', NULL),
(3, 3, 1, 2, 'SETEC (PP)', 1, 1, '', '', '', '', '', '', '', 1, 1, '2015-07-16 00:00:00', 0, '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(100) DEFAULT NULL,
  `cat_status` int(11) DEFAULT NULL,
  `cat_addDate` varchar(100) DEFAULT NULL,
  `cat_isDelete` int(11) DEFAULT NULL,
  `cat_deleteDate` datetime DEFAULT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_status`, `cat_addDate`, `cat_isDelete`, `cat_deleteDate`) VALUES
(1, 'IT', 1, '2015-07-15 00:00:00', 0, '0000-00-00 00:00:00'),
(2, 'Marketing', 1, '2015-07-15 00:00:00', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `cont_id` int(11) NOT NULL AUTO_INCREMENT,
  `cont_zipCode` varchar(45) DEFAULT NULL,
  `cont_name` varchar(100) DEFAULT NULL,
  `cont_status` int(11) DEFAULT NULL,
  `cont_addDate` datetime DEFAULT NULL,
  PRIMARY KEY (`cont_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`cont_id`, `cont_zipCode`, `cont_name`, `cont_status`, `cont_addDate`) VALUES
(1, '12000', 'Cambodia', 1, '2015-07-21 00:00:00'),
(2, '43224', 'Korea', 1, '2015-07-15 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(200) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`) VALUES
(1, 'Information Technology'),
(2, 'Marketing');

-- --------------------------------------------------------

--
-- Table structure for table `course_detail`
--

CREATE TABLE IF NOT EXISTS `course_detail` (
  `co_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `br_id` int(11) NOT NULL,
  `qu_id` int(11) NOT NULL,
  `co_des` text,
  `fee` varchar(100) DEFAULT NULL,
  `co_requirement` text,
  `co_duration` varchar(100) DEFAULT NULL,
  `co_startDate` date DEFAULT NULL,
  `co_status` int(11) NOT NULL,
  `co_endDate` date DEFAULT NULL,
  `co_closeDate` date DEFAULT NULL,
  `co_tag` text,
  PRIMARY KEY (`co_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `course_detail`
--

INSERT INTO `course_detail` (`co_id`, `course_id`, `cat_id`, `br_id`, `qu_id`, `co_des`, `fee`, `co_requirement`, `co_duration`, `co_startDate`, `co_status`, `co_endDate`, `co_closeDate`, `co_tag`) VALUES
(1, 1, 1, 1, 1, 'IT Description', '350$', NULL, '3 months', '2015-07-20', 1, '2015-10-18', '2015-07-15', 'IT, InformationTechnology'),
(2, 2, 2, 1, 1, 'Marketing Description', '400$', NULL, '3 months', '2015-07-20', 1, '2015-10-18', '2015-07-15', 'Marketing, MK');

-- --------------------------------------------------------

--
-- Table structure for table `event_training`
--

CREATE TABLE IF NOT EXISTS `event_training` (
  `et_id` int(11) NOT NULL AUTO_INCREMENT,
  `qu_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `et_title` varchar(100) DEFAULT NULL,
  `et_publishDate` date DEFAULT NULL,
  `et_des` text,
  `br_id` int(11) DEFAULT NULL,
  `et_address` varchar(100) DEFAULT NULL,
  `et_startDate` date DEFAULT NULL,
  `et_endDate` date DEFAULT NULL,
  `et_status` int(11) NOT NULL,
  `et_tag` text,
  `et_isDelete` int(11) DEFAULT NULL,
  `et_deleteDate` datetime DEFAULT NULL,
  PRIMARY KEY (`et_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `event_training`
--

INSERT INTO `event_training` (`et_id`, `qu_id`, `cat_id`, `pro_id`, `et_title`, `et_publishDate`, `et_des`, `br_id`, `et_address`, `et_startDate`, `et_endDate`, `et_status`, `et_tag`, `et_isDelete`, `et_deleteDate`) VALUES
(1, 1, 1, 1, 'Short Course (Mind set)', '2015-07-15', 'short description', 1, 'Phnom Penh', '2015-07-22', '2015-07-21', 1, NULL, 0, '0000-00-00 00:00:00'),
(2, 1, 2, 2, 'new', '2015-07-15', 'short description', 1, 'Phnom Penh', '2015-07-22', '2015-07-21', 1, NULL, 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `ga_id` int(11) NOT NULL AUTO_INCREMENT,
  `br_id` int(11) NOT NULL,
  `ga_title` varchar(100) DEFAULT NULL,
  `ga_name` varchar(100) DEFAULT NULL,
  `ga_des` text,
  `ga_status` int(11) DEFAULT NULL,
  `ga_isDelete` int(11) DEFAULT NULL,
  `ga_deleteDate` datetime DEFAULT NULL,
  PRIMARY KEY (`ga_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `online_contact`
--

CREATE TABLE IF NOT EXISTS `online_contact` (
  `oc_id` int(11) NOT NULL,
  `address` text,
  `google_map` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `fax` varchar(100) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`oc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE IF NOT EXISTS `promotion` (
  `promo_id` int(11) NOT NULL AUTO_INCREMENT,
  `br_id` int(11) NOT NULL,
  `promo_name` varchar(100) DEFAULT NULL,
  `promo_image` varchar(100) DEFAULT NULL,
  `promo_des` text,
  `promo_status` int(11) DEFAULT NULL,
  `promo_addDate` datetime DEFAULT NULL,
  `promo_expiredDate` date DEFAULT NULL,
  `promo_isDelete` int(11) DEFAULT NULL,
  `promo_deleteDate` datetime DEFAULT NULL,
  PRIMARY KEY (`promo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE IF NOT EXISTS `province` (
  `pro_id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_name` varchar(100) DEFAULT NULL,
  `pro_status` int(11) DEFAULT NULL,
  `pro_addDate` datetime DEFAULT NULL,
  `pro_isDelete` int(11) DEFAULT NULL,
  `pro_deleteDate` datetime DEFAULT NULL,
  `note` text,
  PRIMARY KEY (`pro_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`pro_id`, `pro_name`, `pro_status`, `pro_addDate`, `pro_isDelete`, `pro_deleteDate`, `note`) VALUES
(1, 'Phnom Penh', 1, '2015-07-16 00:00:00', 0, '0000-00-00 00:00:00', NULL),
(2, 'Siem Reap', 1, '2015-07-16 00:00:00', 0, '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `qualification_level`
--

CREATE TABLE IF NOT EXISTS `qualification_level` (
  `qu_id` int(11) NOT NULL AUTO_INCREMENT,
  `qu_name` varchar(100) DEFAULT NULL,
  `qu_status` int(11) DEFAULT NULL,
  PRIMARY KEY (`qu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `qualification_level`
--

INSERT INTO `qualification_level` (`qu_id`, `qu_name`, `qu_status`) VALUES
(1, 'Bachelure', NULL),
(2, 'Master', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `save`
--

CREATE TABLE IF NOT EXISTS `save` (
  `save_id` int(11) NOT NULL,
  `adm_id` int(11) NOT NULL,
  `save_content` varchar(100) DEFAULT NULL,
  `save_date` date DEFAULT NULL,
  `save_status` int(11) DEFAULT NULL,
  PRIMARY KEY (`save_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `scholarship`
--

CREATE TABLE IF NOT EXISTS `scholarship` (
  `sl_id` int(11) NOT NULL AUTO_INCREMENT,
  `br_id` int(11) NOT NULL,
  `qu_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `cont_id` int(11) NOT NULL,
  `sl_title` varchar(100) DEFAULT NULL,
  `sl_expiredDate` datetime DEFAULT NULL,
  `sl_des` text,
  `sl_status` int(11) DEFAULT NULL,
  `sl_note` text,
  `sl_studyIn` varchar(100) DEFAULT NULL,
  `sl_sponsor` text,
  `sl_requirement` text,
  `sl_duration` varchar(100) DEFAULT NULL,
  `sl_addDate` datetime DEFAULT NULL,
  `sl_startDate` date DEFAULT NULL,
  `sl_tag` text,
  `sl_isDelete` int(11) DEFAULT NULL,
  `sl_deleteDate` datetime DEFAULT NULL,
  PRIMARY KEY (`sl_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `scholarship`
--

INSERT INTO `scholarship` (`sl_id`, `br_id`, `qu_id`, `cat_id`, `cont_id`, `sl_title`, `sl_expiredDate`, `sl_des`, `sl_status`, `sl_note`, `sl_studyIn`, `sl_sponsor`, `sl_requirement`, `sl_duration`, `sl_addDate`, `sl_startDate`, `sl_tag`, `sl_isDelete`, `sl_deleteDate`) VALUES
(1, 1, 1, 1, 1, 'Study abroad', '2015-07-31 00:00:00', 'description', 1, NULL, NULL, 'Cambodian Mekong University', 'many requirement', '2 year', '2015-07-21 00:00:00', '2015-08-18', 'IT,Cambodian,Mekong,University', 0, '0000-00-00 00:00:00'),
(2, 2, 2, 1, 2, 'korean ', '2015-07-18 00:00:00', 'description', 1, NULL, NULL, 'Cambodian Mekong University', 'many requirement yes', '4 year', '2015-07-21 00:00:00', '2015-08-18', 'IT,Cambodian,Mekong,University', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE IF NOT EXISTS `university` (
  `uni_id` int(11) NOT NULL AUTO_INCREMENT,
  `adm_id` int(11) NOT NULL,
  `uni_logo` varchar(100) DEFAULT NULL,
  `uni_full_name` varchar(100) DEFAULT NULL,
  `uni_short_name` varchar(100) DEFAULT NULL,
  `uni_slogan` varchar(100) DEFAULT NULL,
  `uni_rank` varchar(100) DEFAULT NULL,
  `uni_isFeature` int(11) DEFAULT NULL,
  `uni_isPrivate` int(11) DEFAULT NULL,
  `uni_status` int(11) DEFAULT NULL,
  `uni_addDate` datetime DEFAULT NULL,
  `uni_description` text,
  PRIMARY KEY (`uni_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`uni_id`, `adm_id`, `uni_logo`, `uni_full_name`, `uni_short_name`, `uni_slogan`, `uni_rank`, `uni_isFeature`, `uni_isPrivate`, `uni_status`, `uni_addDate`, `uni_description`) VALUES
(1, 1, 'cmu.jpg', 'Cambodian Mekong University', 'CMU', 'is the university that care about value of education ', '1', 1, 1, 1, '2015-07-15 00:00:00', NULL),
(3, 2, 'setec', 'SETEC', 'ST', 'is the university ...', '2', NULL, 1, 1, '2015-07-16 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `university_school_type`
--

CREATE TABLE IF NOT EXISTS `university_school_type` (
  `us_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `us_type` varchar(100) NOT NULL,
  PRIMARY KEY (`us_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `university_school_type`
--

INSERT INTO `university_school_type` (`us_type_id`, `us_type`) VALUES
(1, 'University'),
(2, 'Institute'),
(3, 'Center');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
