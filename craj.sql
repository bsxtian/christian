-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2013 at 01:28 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `craj`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblforum`
--

CREATE TABLE IF NOT EXISTS `tblforum` (
  `ID` int(50) NOT NULL AUTO_INCREMENT,
  `userid` varchar(100) NOT NULL,
  `users` varchar(50) NOT NULL,
  `userfullname` varchar(100) NOT NULL,
  `userspic` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `date1` varchar(100) NOT NULL,
  `time1` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tblforum`
--

INSERT INTO `tblforum` (`ID`, `userid`, `users`, `userfullname`, `userspic`, `content`, `date1`, `time1`) VALUES
(3, '2', 'pangan', 'jaycee', 'images/akin.jpg', 'asa', '', '1377147894'),
(4, '2', 'pangan', 'jaycee', 'images/akin.jpg', 'qweqweasdaasd', '', '1377148045'),
(5, '1', 'xtian', 'christian', 'images/haha.jpg', 'qweqweqweqqweqweasdasd', '', '1377148131'),
(6, '1', 'xtian', 'christian', 'images/haha.jpg', 'amp', '', '1377148188'),
(7, '1', 'xtian', 'christian', 'images/1011139_522179657837108_56952265_n.jpg', 'ang panget mo!', '', '1377155133');

-- --------------------------------------------------------

--
-- Table structure for table `tbllogin`
--

CREATE TABLE IF NOT EXISTS `tbllogin` (
  `ID` int(50) NOT NULL AUTO_INCREMENT,
  `Fullname` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Cell` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `LaunchCode` int(50) NOT NULL,
  `Longitude` varchar(50) NOT NULL,
  `Latitude` varchar(50) NOT NULL,
  `IMEI` varchar(50) NOT NULL,
  `OwnNumber` varchar(50) NOT NULL,
  `simInformation` varchar(100) NOT NULL,
  `serialnumber` varchar(100) NOT NULL,
  `phoneModel` varchar(50) NOT NULL,
  `macAddress` varchar(50) NOT NULL,
  `profilepic` varchar(100) NOT NULL,
  `newNumber` varchar(15) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `tbllogin`
--

INSERT INTO `tbllogin` (`ID`, `Fullname`, `Email`, `Cell`, `Username`, `Password`, `LaunchCode`, `Longitude`, `Latitude`, `IMEI`, `OwnNumber`, `simInformation`, `serialnumber`, `phoneModel`, `macAddress`, `profilepic`, `newNumber`) VALUES
(1, 'christian', '', '12345', 'xtian', 'apriljoy', 0, '12', '15', '0987654321', '2147483647', '', '3234423', 'asdsd', '34223432', 'images/Copy of 13813_552743908086870_2081300373_n.jpg', ''),
(2, 'jaycee', '', '67890', 'pangan', 'rachel', 0, '21', '24', '1234567890', '2147483647', '', '', '', '', 'images/akin.jpg', ''),
(3, 'Jaycee Fernandez', '', '2147483647', 'shoutscream.ace08@gmail.com', 'jaycee', 0, '', '', '', '0', '', '', '', '', '', ''),
(4, 'xtian beltran', '', '09485953777', 'xtian@gmail.com', 'ggggggg', 0, '', '', '', '0', '', '', '', '', '', ''),
(5, 'cggg', '', '6766777', 'fgggg@yahoo.com', 'ghhhjj', 0, '', '', '', '0', '', '', '', '', '', ''),
(6, 'yest', '', '08765544333', 'tesf', 'fhhjjj', 0, '', '', '', '9327231587', '', '', '', '', 'images/1011139_522179657837108_56952265_n.jpg', ''),
(7, 'hjjnj', '', 'gbnnnj', 'ghhhjj', '.hjjnn', 0, '', '', '', '639327231587', '', '', '', '', '', ''),
(8, 'fghh', '', 'fgggh', 'fggg', 'cvbbb', 0, '', '', '09327231587', '862045019101437', '', '', '', '', '', ''),
(9, 'tesgh', '', 'fghhhh', 'dg@yahoo.com', 'fhjjj', 0, '', '', '862045019101437', '09327231587', '', '', 'LENOVOLenovo S720', '', '', ''),
(10, 'hhhh', '', '99988777', 'ghhj@yahoo.com', 'bnmmmm', 0, '', '', '862045019101437', '09327231587', '', '', 'LENOVO Lenovo S720', '80:cf:41:a4:e3:40', '', ''),
(11, 'gghj', '', 'fghjjj', 'huhu@gmail.com', 'fghhjj', 0, '', '', '862045019101437', '09327231587', '', '862045019101437', 'LENOVO Lenovo S720', '80:cf:41:a4:e3:40', '', ''),
(12, 'vbhju', '', 'ghjjkk', 'fghh@yahoo.com', 'fghhj', 0, '', '', '862045019101437', '09327231587', '', 'IMM76D', 'LENOVO Lenovo S720', '80:cf:41:a4:e3:40', '', ''),
(13, 'fhhh', '', 'fghhhj', 'dggh', 'cghjn', 0, '', '', '862045019101437', '09327231587', '', '0123456789ABCDEF', 'LENOVO Lenovo S720', '80:cf:41:a4:e3:40', '', ''),
(14, 'fhhh', '', 'fghhhj', 'dggh', 'cghjn', 0, '', '', '862045019101437', '09327231587', '', '0123456789ABCDEF', 'LENOVO Lenovo S720', '80:cf:41:a4:e3:40', '', ''),
(15, 'vhhh', '', 'fghhh', 'ghhh', 'cvhhj', 0, '', '', '862045019101437', '09327231587', '', 'buildslave', 'LENOVO Lenovo S720', '80:cf:41:a4:e3:40', '', ''),
(16, 'vghhfggb', '', 'fghhhhh', 'fgghn', 'fhjjjj', 0, '', '', '862045019101437', '09327231587', '', '0123456789ABCDEF', 'LENOVO Lenovo S720', '80:cf:41:a4:e3:40', '', ''),
(17, 'ff', '', 'fghh', 'fgg', 'ccvb bun', 0, '', '', '862045019101437', '09327231587', '', '0123456789ABCDEF', 'LENOVO Lenovo S720', '80:cf:41:a4:e3:40', '', ''),
(18, 'vbjj', '', 'ghhjn', 'ghhjj', 'fbbnnn', 0, '', '', '862045019101437', '09327231587', '', '0123456789ABCDEF', 'LENOVO Lenovo S720', '80:cf:41:a4:e3:40', '', ''),
(19, ' .znsdjd', '', 'gghbbbb', 'bbnnnh', 'bbbnn', 0, '', '', '862045019101437', '09327231587', '', '0123456789ABCDEF', 'LENOVO Lenovo S720', '80:cf:41:a4:e3:40', '', ''),
(20, '', '', '', '', '', 0, '', '', '862045019101437', '09327231587', '', '51505', 'LENOVO Lenovo S720', '80:cf:41:a4:e3:40', '', ''),
(21, '', '', '', '', '', 0, '', '', '862045019101437', '09327231587', '', 'SUN', 'LENOVO Lenovo S720', '80:cf:41:a4:e3:40', '', ''),
(22, '', '', '', '', '', 0, '', '', '862045019101437', '09327231587', '', '515050966579399', 'LENOVO Lenovo S720', '80:cf:41:a4:e3:40', '', ''),
(23, '', '', '', '', '', 0, '', '', '862045019101437', '09327231587', '', 'ph', 'LENOVO Lenovo S720', '80:cf:41:a4:e3:40', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubcomment`
--

CREATE TABLE IF NOT EXISTS `tblsubcomment` (
  `ID` int(50) NOT NULL AUTO_INCREMENT,
  `userid` varchar(50) NOT NULL,
  `usersfullname` varchar(100) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tblsubcomment`
--

INSERT INTO `tblsubcomment` (`ID`, `userid`, `usersfullname`, `content`) VALUES
(1, '2', 'christian', 'wenks'),
(2, '2', 'christian', 'wenks'),
(3, '2', 'christian', 'wenks'),
(4, '1', 'christian', 'wenks'),
(5, '2', 'christian', 'qweqweqwe'),
(6, '1', 'christian', 'xtian'),
(7, '1', 'christian', 'awts'),
(8, '2', 'christian', 'eww'),
(9, '2', 'christian', 'qweqwe'),
(10, '2', 'christian', 'rtertert'),
(11, '2', 'christian', 'fgfgdfdfg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
