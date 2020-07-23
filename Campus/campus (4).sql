-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2019 at 12:52 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `campus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_register`
--

CREATE TABLE IF NOT EXISTS `admin_register` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `confirm_password` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `is_super` tinyint(1) DEFAULT NULL,
  `is_insert` tinyint(1) DEFAULT NULL,
  `is_update` tinyint(1) DEFAULT NULL,
  `is_delete` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `company_list`
--

CREATE TABLE IF NOT EXISTS `company_list` (
  `comp_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_logo` varchar(500) DEFAULT NULL,
  `company_name` varchar(50) DEFAULT NULL,
  `company_type` varchar(50) DEFAULT NULL,
  `location` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`comp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `company_list`
--

INSERT INTO `company_list` (`comp_id`, `company_logo`, `company_name`, `company_type`, `location`) VALUES
(1, 'images/resource/TCS-logo.jpg', 'Tata Consultancy Services', 'IT services, It consulting', 'Mumbai, Maharashtra, India'),
(2, 'images/resource/Infosys-logo.jpg', 'Infosys Limited', 'IT Consultancy,IT Services', 'Banglore,Karnataka,India'),
(3, 'images/resource/cognizant-logo.jpg', 'Cognizant', 'IT Consultancy,IT Services', 'Teaneck, New Jersey, U.S'),
(4, 'images/resource/wiprologo.jpg', 'Wipro', 'IT Consultancy,IT Services', 'Banglore, India');

-- --------------------------------------------------------

--
-- Table structure for table `company_register`
--

CREATE TABLE IF NOT EXISTS `company_register` (
  `company_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(50) DEFAULT NULL,
  `passwd` varchar(50) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `comp_uploadid` varchar(500) DEFAULT NULL,
  `user_type` varchar(1) NOT NULL,
  PRIMARY KEY (`company_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `company_register`
--

INSERT INTO `company_register` (`company_id`, `company_name`, `passwd`, `mobile`, `email`, `comp_uploadid`, `user_type`) VALUES
(1, 'tcs', '7869', 9740923146, 'tcs@gmail.com', NULL, ''),
(2, 'tcs', '202cb962ac59075b964b07152d234b70', 1234567890, 'tcs@gmail.com', 'comp_uploadid', ''),
(3, 'infosys', '8d5e957f297893487bd98fa830fa6413', 123456789, 'infosys@gmail.com', 'comp_uploadid', ''),
(4, 'wipro', 'Nzg5Ng==', 789456123, 'wipro@gmail.com', 'comp_uploadid', 'c'),
(5, 'hcl', 'MTIzNQ==', 7894563210, 'hcl@gmail.com', 'comp_uploadid', 'c'),
(6, 'wipro', 'MTIzNA==', 7894561230, 'wipro@gmail.com', 'comp_uploadid', 'c');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE IF NOT EXISTS `contact_us` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `message` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`c_id`, `full_name`, `email`, `subject`, `message`) VALUES
(1, 'riya jain', 'riya.jain9497@gmail.com', 'wdgfsf', 'adgsfatgwefdc'),
(2, 'riya jain', 'riya.jain9497@gmail.com', 'sfgwaedsf', 'wrgdsatewrsgd'),
(3, 'shiv', 'shiv@gmail.com', 'wetwef', 'QEGSDT');

-- --------------------------------------------------------

--
-- Table structure for table `job_requirement`
--

CREATE TABLE IF NOT EXISTS `job_requirement` (
  `job_id` int(11) NOT NULL AUTO_INCREMENT,
  `job_title` varchar(50) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `categories` varchar(50) DEFAULT NULL,
  `offered_salary` int(30) DEFAULT NULL,
  `experience` tinyint(11) DEFAULT NULL,
  `qualification` varchar(500) DEFAULT NULL,
  `app_deadline_date` datetime(6) DEFAULT NULL,
  `skills_required` varchar(500) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`job_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `job_requirement`
--

INSERT INTO `job_requirement` (`job_id`, `job_title`, `description`, `email`, `categories`, `offered_salary`, `experience`, `qualification`, `app_deadline_date`, `skills_required`, `country`, `city`, `address`) VALUES
(1, 'aaaa', ' bbbb', 'c@gmail.com', 'Web Designing', 1111, 1, 'Web Designing', '0000-00-00 00:00:00.000000', 'cSS', 'India', 'pune', ' 333333');

-- --------------------------------------------------------

--
-- Table structure for table `student_register`
--

CREATE TABLE IF NOT EXISTS `student_register` (
  `stu_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `course` varchar(50) DEFAULT NULL,
  `upload_id` varchar(500) DEFAULT NULL,
  `user_type` varchar(1) NOT NULL,
  PRIMARY KEY (`stu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `student_register`
--

INSERT INTO `student_register` (`stu_id`, `first_name`, `last_name`, `password`, `mobile`, `email`, `gender`, `course`, `upload_id`, `user_type`) VALUES
(43, 'shiv', 'patel', 'YWRtaW4xMjM=', 1234567890, 'shiv@gmail.com', 'Female ', 'mca', 'uploadimage/b2.jpg', 's');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
