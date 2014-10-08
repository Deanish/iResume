-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2014 at 01:52 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cake`
--
CREATE DATABASE IF NOT EXISTS `cake` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cake`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `applied`
--

DROP TABLE IF EXISTS `applied`;
CREATE TABLE IF NOT EXISTS `applied` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `recruiter_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

DROP TABLE IF EXISTS `companies`;
CREATE TABLE IF NOT EXISTS `companies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recruiter_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `profile` varchar(250) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `person` varchar(50) NOT NULL,
  `contact` int(15) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `desires`
--

DROP TABLE IF EXISTS `desires`;
CREATE TABLE IF NOT EXISTS `desires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `location` varchar(100) NOT NULL,
  `skills` varchar(100) NOT NULL,
  `industry_type` varchar(100) NOT NULL,
  `job_type` varchar(50) NOT NULL,
  `shift_type` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `educations`
--

DROP TABLE IF EXISTS `educations`;
CREATE TABLE IF NOT EXISTS `educations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `specialization` varchar(50) NOT NULL,
  `institute` varchar(100) NOT NULL,
  `university` varchar(100) NOT NULL,
  `marks` varchar(10) NOT NULL,
  `yop` int(10) NOT NULL,
  `course_type` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `featured_companies`
--

DROP TABLE IF EXISTS `featured_companies`;
CREATE TABLE IF NOT EXISTS `featured_companies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(50) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `duration` date NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `featured_jobs`
--

DROP TABLE IF EXISTS `featured_jobs`;
CREATE TABLE IF NOT EXISTS `featured_jobs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job_id` int(11) NOT NULL,
  `duration` date NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `personals`
--

DROP TABLE IF EXISTS `personals`;
CREATE TABLE IF NOT EXISTS `personals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `mobile` int(15) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `resume` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recruiter_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `skills` varchar(50) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `vacancies` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `experience` varchar(50) NOT NULL,
  `salary` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `industry_type` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `recruiter_id`, `title`, `skills`, `qualification`, `vacancies`, `description`, `experience`, `salary`, `location`, `industry_type`, `created`, `modified`) VALUES
(8, 0, '', '', '', '', '', '2-5 Years', '', 'Delhi', 'Bank Jobs', '2014-10-08 08:38:45', '2014-10-08 08:38:45'),
(9, 0, 'PHP Developer', 'PHP, CakePHP', 'BCA, BSc, MCA', '2', 'Should able to develop website using caakephp', '0-2 Years', '150000 per year', 'Bangalore', 'IT Jobs', '2014-10-08 08:41:45', '2014-10-08 08:41:45'),
(10, 0, 'dasd', 'dsadas', 'sadas', 'dsadas', 'sadasd', 'Null', '', 'Null', 'Null', '2014-10-08 12:27:15', '2014-10-08 12:27:15');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `user_id`, `name`, `created`, `modified`) VALUES
(1, 0, 'New', '2014-09-19 12:31:51', '2014-09-19 12:31:51'),
(2, 7, 'New1', '2014-09-19 12:47:51', '2014-09-19 12:47:51'),
(3, 3, '1234', '2014-09-19 14:11:10', '2014-09-19 14:11:10'),
(4, 3, '', '2014-09-22 12:34:42', '2014-09-22 12:34:42'),
(5, 1, '', '2014-09-30 07:13:33', '2014-09-30 07:13:33'),
(6, 3, '', '2014-09-30 07:15:02', '2014-09-30 07:15:02'),
(7, 3, '', '2014-09-30 07:20:55', '2014-09-30 07:20:55');

-- --------------------------------------------------------

--
-- Table structure for table `professionals`
--

DROP TABLE IF EXISTS `professionals`;
CREATE TABLE IF NOT EXISTS `professionals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `years` int(11) NOT NULL,
  `months` int(11) NOT NULL,
  `salary` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `skills` varchar(50) NOT NULL,
  `notice` varchar(100) NOT NULL,
  `prev_companies` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `recruiters`
--

DROP TABLE IF EXISTS `recruiters`;
CREATE TABLE IF NOT EXISTS `recruiters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL DEFAULT 'default-img.jpg',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `email_2` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `recruiters`
--

INSERT INTO `recruiters` (`id`, `firstname`, `lastname`, `email`, `password`, `image`, `created`, `modified`) VALUES
(3, 'dasd', 'dasd', 'das@dasd.dsa', 'das', 'default-img.jpg', '2014-09-23 07:58:27', '2014-09-23 07:58:27'),
(5, '123', '123', '123@123.123', '123456789', 'default-img.jpg', '2014-09-23 08:02:42', '2014-09-23 08:02:42'),
(6, '', '', '', '', 'default-img.jpg', '2014-09-23 08:13:01', '2014-09-23 08:13:01'),
(8, 'abcd', 'bacd', 'abcd@abcd.com', 'f81b16b3454ece959aae72f683449e09d135cc5b', 'default-img.jpg', '2014-09-23 08:20:23', '2014-09-23 08:20:23'),
(9, 'gdg', 'fdgfg', 'dgd@fdsf.jhjh', '155061b1d842cf3c25274cdc00a52e9df5b14478', 'default-img.jpg', '2014-09-24 12:11:03', '2014-09-24 12:11:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL DEFAULT 'default-img.jpg',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `image`, `created`, `modified`) VALUES
(1, 'Deanish', 'M A', 'm.a.deanish@gmail.com', '123456789', 'default-img.jpg', '2014-09-19 12:47:00', '2014-09-19 12:47:00'),
(2, 'SkyLabs', 'Inc', 'skylabs@gmail.com', '123456789', 'default-img.jpg', '2014-09-19 12:47:00', '2014-09-19 12:47:00'),
(3, 'Sky', 'Labs', 'sky@labs.com', '123456789', 'default-img.jpg', '2014-09-19 10:07:11', '2014-09-19 10:07:11'),
(21, 'czx', 'cxcx', 'xzczx@aew.ew', '7ea1ac0b7ab732a8bf0997ca50728ee213bca528', 'default-img.jpg', '2014-09-22 09:59:36', '2014-09-22 09:59:36'),
(22, 'asd', 'a', 'dsa@sds.ds', 'e5440bf7740ce8d786a1e9ab3bacc0bdb5741ae0', 'default-img.jpg', '2014-09-22 10:08:04', '2014-09-22 10:08:04'),
(23, 'sdjfhsdkj', 'sfhajk', 'sky@lan.in', '0f26477808b235dd089ad3d6cb00a936be42a03d', 'default-img.jpg', '2014-09-22 10:43:31', '2014-09-22 10:43:31'),
(24, 'deanish', 'm a', 'deani@gmail.com', 'c15f24bbe5fbcf3c459156081d3f6dc3ac39bb10', 'default-img.jpg', '2014-10-06 07:54:56', '2014-10-06 07:54:56');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
