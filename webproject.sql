-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2016 at 02:58 AM
-- Server version: 5.6.15-log
-- PHP Version: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE IF NOT EXISTS `quotes` (
  `content` text NOT NULL,
  `author` varchar(20) NOT NULL,
  `idq` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idq`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`content`, `author`, `idq`) VALUES
('" when there is light and Not(you.blind()) you.seeIt() "', 'touhemi Gates', 1),
('"happiness is getting ur f***** ass out of ISSATSO" ', 'Mouldi Banney', 2),
('The price of anything is the amount of life you exchange for it. ', 'Billy Cox', 4),
('The price of anything is the amount of life you exchange for it. \r\n\r\n', 'Henry David Thoreau', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `name` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `photo` varchar(255) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `lastname`, `username`, `password`, `photo`) VALUES
('aaa', 'aaa', 'aaa', 'aaa', ''),
('baha', 'ferchichi', 'baha', 'baha', ''),
('jichan', 'jichan', 'jichan', 'jichan', 'photo.jpg'),
('imen', 'latif', 'imen', 'imen', ''),
('monji', 'Romdhane', 'monji', 'monji', ''),
('ggaha', 'gcjkcg', 'bbb', 'bbb', ''),
('baha', 'ferchichi', 'rrr', 'rrr', ''),
('hhh', 'hhh', ' nbvc,hjnbv', 'kjhgfj', 'LogoTU-ENG-blue.gif'),
('baha', 'Ferchichi', 'ryuzaki', 'ryuzaki', '221961_1826904396001_3996882_n.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
