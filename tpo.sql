-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2014 at 10:51 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tpo`
--
CREATE DATABASE IF NOT EXISTS `tpo` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tpo`;

-- --------------------------------------------------------

--
-- Table structure for table `finalmba`
--

CREATE TABLE IF NOT EXISTS `finalmba` (
  `id` int(3) NOT NULL DEFAULT '0',
  `name` varchar(25) NOT NULL,
  `regno` varchar(15) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `mail` varchar(25) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `land` varchar(15) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `rank` varchar(7) NOT NULL,
  `xth` varchar(5) NOT NULL,
  `xthyop` varchar(4) NOT NULL,
  `inter` varchar(5) NOT NULL,
  `interyop` varchar(4) NOT NULL,
  `degree` varchar(5) NOT NULL,
  `degreeyop` varchar(4) NOT NULL,
  `icet` varchar(7) NOT NULL,
  `sem1` varchar(5) NOT NULL,
  `sem2` varchar(5) NOT NULL,
  `sem3` varchar(5) NOT NULL,
  `sem4` varchar(5) NOT NULL,
  `agg` varchar(5) NOT NULL,
  `blogs` varchar(3) NOT NULL,
  `hob` varchar(4) NOT NULL,
  `focc` varchar(15) NOT NULL,
  `address` varchar(40) NOT NULL,
  `pab` varchar(10) NOT NULL,
  `height` varchar(6) NOT NULL,
  `weight` varchar(6) NOT NULL,
  `sight` varchar(15) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `mname` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `dept` varchar(4) NOT NULL,
  `comone` varchar(15) NOT NULL,
  `comtwo` varchar(15) NOT NULL,
  `numcom` varchar(5) NOT NULL,
  `submit` varchar(5) NOT NULL,
  PRIMARY KEY (`regno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `finalmba`
--

INSERT INTO `finalmba` (`id`, `name`, `regno`, `gender`, `mail`, `mobile`, `land`, `dob`, `rank`, `xth`, `xthyop`, `inter`, `interyop`, `degree`, `degreeyop`, `icet`, `sem1`, `sem2`, `sem3`, `sem4`, `agg`, `blogs`, `hob`, `focc`, `address`, `pab`, `height`, `weight`, `sight`, `fname`, `mname`, `password`, `dept`, `comone`, `comtwo`, `numcom`, `submit`) VALUES
(1, '', '118w5a1204', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '80', '', '', '', '', '', '', '', '', '', '', 'hemanth', 'mba', '', '', '', ''),
(0, '', '128W1E0056', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'asdfgh', 'MBA', '', '', '', ''),
(0, '', 'mba', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'asdfgh', 'mba', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `finalmca`
--

CREATE TABLE IF NOT EXISTS `finalmca` (
  `id` int(3) NOT NULL DEFAULT '0',
  `name` varchar(25) NOT NULL,
  `regno` varchar(15) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `mail` varchar(25) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `land` varchar(15) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `rank` varchar(7) NOT NULL,
  `xth` varchar(5) NOT NULL,
  `xthyop` varchar(4) NOT NULL,
  `inter` varchar(5) NOT NULL,
  `interyop` varchar(4) NOT NULL,
  `degree` varchar(5) NOT NULL,
  `degreeyop` varchar(4) NOT NULL,
  `icet` varchar(7) NOT NULL,
  `sem1` varchar(5) NOT NULL,
  `sem2` varchar(5) NOT NULL,
  `sem3` varchar(5) NOT NULL,
  `sem4` varchar(5) NOT NULL,
  `sem5` varchar(5) NOT NULL,
  `sem6` varchar(5) NOT NULL,
  `agg` varchar(5) NOT NULL,
  `blogs` varchar(3) NOT NULL,
  `hob` varchar(4) NOT NULL,
  `focc` varchar(15) NOT NULL,
  `address` varchar(40) NOT NULL,
  `pab` varchar(10) NOT NULL,
  `height` varchar(6) NOT NULL,
  `weight` varchar(6) NOT NULL,
  `sight` varchar(15) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `mname` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `dept` varchar(4) NOT NULL,
  `comone` varchar(15) NOT NULL,
  `comtwo` varchar(15) NOT NULL,
  `numcom` varchar(5) NOT NULL,
  `submit` varchar(5) NOT NULL,
  PRIMARY KEY (`regno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `finalmca`
--

INSERT INTO `finalmca` (`id`, `name`, `regno`, `gender`, `mail`, `mobile`, `land`, `dob`, `rank`, `xth`, `xthyop`, `inter`, `interyop`, `degree`, `degreeyop`, `icet`, `sem1`, `sem2`, `sem3`, `sem4`, `sem5`, `sem6`, `agg`, `blogs`, `hob`, `focc`, `address`, `pab`, `height`, `weight`, `sight`, `fname`, `mname`, `password`, `dept`, `comone`, `comtwo`, `numcom`, `submit`) VALUES
(0, '', '118W1F0034', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'asdfggh', 'MCA', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `finalpg`
--

CREATE TABLE IF NOT EXISTS `finalpg` (
  `id` int(3) NOT NULL DEFAULT '0',
  `name` varchar(25) NOT NULL,
  `regno` varchar(15) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `mail` varchar(25) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `land` varchar(15) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `rank` varchar(7) NOT NULL,
  `xth` varchar(5) NOT NULL,
  `xthyop` varchar(4) NOT NULL,
  `inter` varchar(5) NOT NULL,
  `interyop` varchar(4) NOT NULL,
  `degree` varchar(5) NOT NULL,
  `degreeyop` varchar(4) NOT NULL,
  `pgcet` varchar(7) NOT NULL,
  `sem1` varchar(5) NOT NULL,
  `sem2` varchar(5) NOT NULL,
  `sem3` varchar(5) NOT NULL,
  `sem4` varchar(5) NOT NULL,
  `agg` varchar(5) NOT NULL,
  `blogs` varchar(3) NOT NULL,
  `hob` varchar(4) NOT NULL,
  `focc` varchar(15) NOT NULL,
  `address` varchar(40) NOT NULL,
  `pab` varchar(10) NOT NULL,
  `height` varchar(6) NOT NULL,
  `weight` varchar(6) NOT NULL,
  `sight` varchar(15) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `mname` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `dept` varchar(4) NOT NULL,
  `comone` varchar(15) NOT NULL,
  `comtwo` varchar(15) NOT NULL,
  `numcom` varchar(5) NOT NULL,
  `submit` varchar(5) NOT NULL,
  PRIMARY KEY (`regno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `finalpg`
--

INSERT INTO `finalpg` (`id`, `name`, `regno`, `gender`, `mail`, `mobile`, `land`, `dob`, `rank`, `xth`, `xthyop`, `inter`, `interyop`, `degree`, `degreeyop`, `pgcet`, `sem1`, `sem2`, `sem3`, `sem4`, `agg`, `blogs`, `hob`, `focc`, `address`, `pab`, `height`, `weight`, `sight`, `fname`, `mname`, `password`, `dept`, `comone`, `comtwo`, `numcom`, `submit`) VALUES
(0, '', '108w1a1204', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'asdfgh', 'MCST', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `finalug`
--

CREATE TABLE IF NOT EXISTS `finalug` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `regno` varchar(15) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `land` varchar(15) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `rank` varchar(7) NOT NULL,
  `xth` varchar(5) NOT NULL,
  `xthyop` varchar(4) NOT NULL,
  `inter` varchar(5) NOT NULL,
  `interyop` varchar(4) NOT NULL,
  `sem1` varchar(5) NOT NULL,
  `sem2` varchar(5) NOT NULL,
  `sem3` varchar(5) NOT NULL,
  `sem4` varchar(5) NOT NULL,
  `sem5` varchar(5) NOT NULL,
  `sem6` varchar(5) NOT NULL,
  `sem7` varchar(5) NOT NULL,
  `sem8` varchar(5) NOT NULL,
  `agg` varchar(5) NOT NULL,
  `blogs` varchar(3) NOT NULL,
  `hob` varchar(4) NOT NULL,
  `focc` varchar(15) NOT NULL,
  `address` varchar(40) NOT NULL,
  `pab` varchar(10) NOT NULL,
  `height` varchar(6) NOT NULL,
  `weight` varchar(6) NOT NULL,
  `sight` varchar(15) NOT NULL,
  `category` varchar(7) NOT NULL,
  `subcat` varchar(5) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `mname` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `dept` varchar(4) NOT NULL,
  `comone` varchar(15) NOT NULL,
  `comtwo` varchar(15) NOT NULL,
  `numcom` varchar(5) NOT NULL DEFAULT '0',
  `submit` varchar(5) NOT NULL,
  PRIMARY KEY (`regno`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69 ;

--
-- Dumping data for table `finalug`
--

INSERT INTO `finalug` (`id`, `name`, `regno`, `gender`, `mail`, `mobile`, `land`, `dob`, `rank`, `xth`, `xthyop`, `inter`, `interyop`, `sem1`, `sem2`, `sem3`, `sem4`, `sem5`, `sem6`, `sem7`, `sem8`, `agg`, `blogs`, `hob`, `focc`, `address`, `pab`, `height`, `weight`, `sight`, `category`, `subcat`, `fname`, `mname`, `password`, `dept`, `comone`, `comtwo`, `numcom`, `submit`) VALUES
(24, '', '108W1A0120', '', '', '', '', '', '', '', '', '', '', '71.5', '72.6', '73.8', '71.9', '78', '76.5', '75.4', '73.2', '72', '5', 'Yes', '', '', '', '', '', '', '', '', '', '', 'abcdef', 'ce', '', '', '0', ''),
(23, '', '108W1A0122', '', '', '', '', '', '', '', '', '', '', '79.5', '78.3', '75.4', '79', '74', '76', '71', '72', '70', '2', 'Yes', '', '', '', '', '', '', '', '', '', '', 'abcdef', 'ce', '', '', '0', ''),
(25, '', '108W1A0124', '', '', '', '', '', '', '', '', '', '', '69', '67', '65', '62', '61', '69.2', '68.1', '61.4', '61', '1', 'Yes', '', '', '', '', '', '', '', '', '', '', 'abcdef', 'ce', '', '', '0', ''),
(26, '', '108W1A0129', '', '', '', '', '', '', '', '', '', '', '79.4', '76.5', '73.4', '75.3', '78.2', '76.3', '71.6', '79.3', '72', '1', 'Yes', '', '', '', '', '', '', '', '', '', '', 'abcdef', 'ce', '', '', '0', ''),
(27, '', '108W1A0131', '', '', '', '', '', '', '', '', '', '', '90.3', '90.6', '90.8', '91.4', '91.7', '92.5', '91.5', '93.6', '93', '2', 'Yes', '', '', '', '', '', '', '', '', '', '', 'abcdef', 'ce', '', '', '0', ''),
(28, '', '108W1A0151', '', '', '', '', '', '', '', '', '', '', '79', '73.6', '78.4', '71.5', '71', '72.5', '70.5', '73.5', '73.6', '1', 'Yes', '', '', '', '', '', '', '', '', '', '', 'abcdef', 'ce', '', '', '0', ''),
(42, '', '108W1A0210', '', '', '', '', '', '', '', '', '', '', '81', '89.2', '89.3', '88', '78', '59', '58', '79', '60', '2', 'Yes', '', '', '', '', '', '', '', '', '', '', 'abcdef', 'eee', '', '', '0', ''),
(40, '', '108W1A0233', '', '', '', '', '', '', '', '', '', '', '71', '72', '73', '69', '59', '58', '86', '89', '72', '0', 'No', '', '', '', '', '', '', '', '', '', '', 'abcdef', 'eee', '', '', '0', ''),
(45, '', '108W1A0237', '', '', '', '', '', '', '', '', '', '', '79.2', '59.4', '88.3', '85.2', '85.4', '87.2', '82.5', '88.3', '85', '0', 'No', '', '', '', '', '', '', '', '', '', '', 'abcdef', 'eee', '', '', '0', ''),
(39, '', '108W1A0251', '', '', '', '', '', '', '', '', '', '', '75', '59', '79', '49', '92', '79', '68', '79', '73', '0', 'No', '', '', '', '', '', '', '', '', '', '', 'abcdef', 'eee', '', '', '0', ''),
(44, '', '108W1A0280', '', '', '', '', '', '', '', '', '', '', '68', '62', '63', '68', '69', '61', '69', '70', '65', '2', 'Yes', '', '', '', '', '', '', '', '', '', '', 'abcdef', 'eee', '', '', '0', ''),
(46, '', '108W1A0294', '', '', '', '', '', '', '', '', '', '', '73', '71', '76', '77', '79', '72', '71', '75', '70', '0', 'No', '', '', '', '', '', '', '', '', '', '', 'abcdef', 'eee', '', '', '0', ''),
(48, '', '108W1A0301', '', '', '', '', '', '', '', '', '', '', '89.1', '87.2', '86.5', '85.4', '82.1', '85.4', '87.2', '84.1', '84', '1', 'No', '', '', '', '', '', '', '', '', '', '', 'abcdef', 'me', '', '', '0', ''),
(54, '', '108W1A0312', '', '', '', '', '', '', '', '', '', '', '59.3', '58.4', '68.3', '67.5', '69.2', '68', '64', '62', '80', '1', 'Yes', '', '', '', '', '', '', '', '', '', '', 'abcdef', 'me', '', '', '0', ''),
(53, '', '108W1A0313', '', '', '', '', '', '', '', '', '', '', '69.2', '63.8', '61.8', '63.2', '63.4', '61.7', '67.5', '69.5', '67', '1', 'No', '', '', '', '', '', '', '', '', '', '', 'abcdef', 'me', '', '', '0', ''),
(52, '', '108W1A0338', '', '', '', '', '', '', '', '', '', '', '69.2', '67.2', '65.3', '68.1', '65.4', '67.4', '64.3', '69.2', '68', '0', 'No', '', '', '', '', '', '', '', '', '', '', 'abcdef', 'me', '', '', '0', ''),
(51, '', '108W1A0388', '', '', '', '', '', '', '', '', '', '', '69.2', '68.4', '60', '65.3', '64.1', '61.5', '62.4', '68.9', '65', '1', 'Yes', '', '', '', '', '', '', '', '', '', '', 'abcdef', 'me', '', '', '0', ''),
(50, '', '108W1A0389', '', '', '', '', '', '', '', '', '', '', '67.5', '63.2', '69.4', '65', '67', '60', '62', '63', '61', '1', 'Yes', '', '', '', '', '', '', '', '', '', '', 'abcdef', 'me', '', '', '0', ''),
(22, 'kishore', '108w1a0424', 'male', 'kishore@gmail.com', '1234546545', '0866435665', '12041995', '34534', '45', '2005', '67', '5666', '67', '78', '89', '76', '65', '54', '90', '100', '87', '0', '0', 'job', 'kanuru', 'job', '657', '679', '0', 'bc', 'd', 'dfhjh', 'ndfngjb', 'kishore', 'ece', '', '', '0', ''),
(38, '', '108W1A0477', '', '', '', '', '', '', '', '', '', '', '80', '69', '79', '58', '79', '69', '67', '62', '60', '4', 'Yes', '', '', '', '', '', '', '', '', '', '', 'abcdef', 'ece', '', '', '0', ''),
(34, '', '108W1A0486', '', '', '', '', '', '', '', '', '', '', '92.4', '91', '93', '94', '90', '58', '89', '79', '80', '0', 'No', '', '', '', '', '', '', '', '', '', '', 'abcdef', 'ece', '', '', '0', ''),
(37, '', '108W1A04A1', '', '', '', '', '', '', '', '', '', '', '90', '89', '59', '69', '79', '68', '80', '59', '60', '3', 'Yes', '', '', '', '', '', '', '', '', '', '', 'abcdef', 'ece', '', '', '0', ''),
(35, '', '108W1A04B1', '', '', '', '', '', '', '', '', '', '', '79', '98', '78', '60', '90', '80', '82', '88', '80', '0', 'No', '', '', '', '', '', '', '', '', '', '', 'abcdef', 'ece', '', '', '0', ''),
(36, '', '108W1A04B2', '', '', '', '', '', '', '', '', '', '', '98', '89.6', '89.2', '88.4', '87.2', '79.5', '89', '79', '75', '2', 'Yes', '', '', '', '', '', '', '', '', '', '', 'abcdef', 'ece', '', '', '0', ''),
(16, '', '108w1a0501', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'abcdef', 'cse', '', '', '0', ''),
(32, '', '108W1A0534', '', '', '', '', '', '', '', '', '', '', '69.5', '68.1', '67.4', '69.2', '68.4', '65.9', '61.7', '62.4', '62', '2', 'No', '', '', '', '', '', '', '', '', '', '', 'abcdef', 'cse', '', '', '0', ''),
(29, '', '108W1A0567', '', '', '', '', '', '', '', '', '', '', '78', '87', '69', '79', '90', '78', '68', '75', '70', '3', 'Yes', '', '', '', '', '', '', '', '', '', '', 'abcdef', 'cse', '', '', '0', ''),
(31, '', '108W1A0578', '', '', '', '', '', '', '', '', '', '', '54.5', '57.2', '59.4', '58.6', '56.4', '58.2', '59.2', '55.4', '55', '1', 'No', '', '', '', '', '', '', '', '', '', '', 'abcdef', 'cse', '', '', '0', ''),
(30, '', '108W1A0598', '', '', '', '', '', '', '', '', '', '', '91.5', '91.2', '92.3', '98.3', '94', '92.5', '92.7', '92.4', '92', '1', 'Yes', '', '', '', '', '', '', '', '', '', '', 'abcdef', 'cse', '', '', '0', ''),
(55, '', '108W1A1001', '', '', '', '', '', '', '', '', '', '', '68', '79', '76', '72', '75', '71', '78', '77', '75', '0', 'No', '', '', '', '', '', '', '', '', '', '', 'abcdef', 'eie', '', '', '0', ''),
(56, '', '108W1A1002', '', '', '', '', '', '', '', '', '', '', '79', '75', '76', '77', '78.4', '76.2', '70.3', '71.3', '72', '1', 'Yes', '', '', '', '', '', '', '', '', '', '', 'abcdef', 'eie', '', '', '0', ''),
(57, '', '108W1A1021', '', '', '', '', '', '', '', '', '', '', '68.9', '78.2', '77.6', '73.4', '74.3', '76.2', '75.4', '73.1', '72', '5', 'Yes', '', '', '', '', '', '', '', '', '', '', 'abcdef', 'eie', '', '', '0', ''),
(58, '', '108W1A1025', '', '', '', '', '', '', '', '', '', '', '59', '57', '56', '55', '51', '59', '57', '53', '52', '1', 'Yes', '', '', '', '', '', '', '', '', '', '', 'abcdef', 'eie', '', '', '0', ''),
(59, '', '108W1A1067', '', '', '', '', '', '', '', '', '', '', '67', '81', '87', '88', '82', '83', '81', '82', '80', '1', 'No', '', '', '', '', '', '', '', '', '', '', 'abcdef', 'eie', '', '', '0', ''),
(15, 'Ankitha', '108w1a1204', 'female', 'ankitha5493@gmail.com', '8121003461', '08592227899', '1993-05-04', '10000', '85', '2008', '91', '2010', '92.4', '89.6', '89.5', '90.8', '91.5', '78', '94.6', '100', '92', '0', 'No', '---', 'ongole', 'job', '165', '55', '2.5', '', '', 'sai prasad', 'padma', 'ankitha', 'it', 'tcs', 'google', '2', 'yes'),
(64, '', '108w1a1205', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'abcdef', 'IT', '', '', '0', ''),
(18, 'hiathi', '108w1a1212', 'female', 'hiathi123@gmail.com', '9876543210', '0866221133', '10-8-1993', '12000', '90', '2008', '92', '2010', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'abcdefgh', 'it', '', '', '0', ''),
(3, 'sobha', '108w1a1234', 'female', 'sobha@gmail.com', '9876543210', '0866342134', '15-08-1992', '15000', '88', '2008', '90', '2010', '76', '78', '89', '88', '90', '87', '68', '79', '85', '0', '0', 'business', 'vijayawada', 'job', '5.5', '60', '0', 'oc', 'a', 'surendra', 'lakshmi', 'sobha', 'it', '', '', '', ''),
(62, '', '108w1a1236', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'abcdef', 'it', '', '', '0', ''),
(17, 'sadwi', '108w1a1251', 'female', 'sadwi1992@gmail.com', '9603722204', '08662561010', '22091992', '150000', '89', '2008', '88', '2010', '88', '89', '87', '89', '80', '88', '86', '98', '90', 'NO', 'NO', 'job', 'vijayawada', 'job', '165', '65', '0', 'oc', '---', '', '', 'sadwi', 'it', '', '', '0', 'yes'),
(47, '', '108W1A1272', '', '', '', '', '', '', '', '', '', '', '83', '82', '81', '87', '81.9', '82.4', '83.5', '87.1', '85.5', '0', 'No', '', '', '', '', '', '', '', '', '', '', 'abcdef', 'it', '', '', '0', ''),
(49, '', '118W5A0317', '', '', '', '', '', '', '', '', '', '', '87.4', '86.3', '81.3', '83.5', '81.4', '84.3', '88', '81', '82', '2', 'Yes', '', '', '', '', '', '', '', '', '', '', 'abcdef', 'me', '', '', '0', ''),
(65, '', '118w5a1203', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'asdfgh', 'IT', '', '', '0', ''),
(2, 'Hemanth', '118w5a1204', 'male', 'satya023.hemanth@gmail.com', '7799551182', '08662533444', '11041992', '500', '69.3', '2007', '66', '2010', '89', '89', '89', '89', '89', '89', '89', '89', '89', '0', 'No', 'job', 'vijayawada', 'job', '174', '55', '0', 'bc', 'b', 'nageswara rao', 'parameswari', 'hemanth', 'it', 'tcs', '', '1', 'yes'),
(20, '', '118w5a1207', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'balaji', 'it', '', '', '0', ''),
(68, '', '128W1E0056', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'asdfgh', 'MCST', '', '', '0', ''),
(21, 'ece', 'ece', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ecehod', 'ece', '', '', '0', ''),
(63, '', 'eee', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'asdfgh', 'eee', '', '', '0', ''),
(1, 'it', 'it', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ashoksir', 'it', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `itdb`
--

CREATE TABLE IF NOT EXISTS `itdb` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `regno` varchar(10) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `mail` varchar(25) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `land` varchar(15) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `rank` varchar(7) NOT NULL,
  `xth` varchar(5) NOT NULL,
  `xthyop` varchar(4) NOT NULL,
  `inter` varchar(5) NOT NULL,
  `interyop` varchar(4) NOT NULL,
  `first` varchar(9) NOT NULL,
  `twoone` varchar(5) NOT NULL,
  `twotwo` varchar(5) NOT NULL,
  `threeone` varchar(5) NOT NULL,
  `threetwo` varchar(5) NOT NULL,
  `fourone` varchar(5) NOT NULL,
  `agg` varchar(5) NOT NULL,
  `blogs` varchar(3) NOT NULL,
  `hob` varchar(4) NOT NULL,
  `focc` varchar(15) NOT NULL,
  `address` varchar(40) NOT NULL,
  `pab` varchar(10) NOT NULL,
  `height` varchar(6) NOT NULL,
  `weight` varchar(6) NOT NULL,
  `sight` varchar(15) NOT NULL,
  `religion` varchar(12) NOT NULL,
  `category` varchar(4) NOT NULL,
  `subcat` varchar(3) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `mname` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `dept` varchar(4) NOT NULL,
  `comone` varchar(15) NOT NULL,
  `comtwo` varchar(15) NOT NULL,
  `numcom` varchar(5) NOT NULL,
  `submit` varchar(5) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `regno` (`regno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `itdb`
--

INSERT INTO `itdb` (`id`, `name`, `regno`, `gender`, `mail`, `mobile`, `land`, `dob`, `rank`, `xth`, `xthyop`, `inter`, `interyop`, `first`, `twoone`, `twotwo`, `threeone`, `threetwo`, `fourone`, `agg`, `blogs`, `hob`, `focc`, `address`, `pab`, `height`, `weight`, `sight`, `religion`, `category`, `subcat`, `fname`, `mname`, `password`, `dept`, `comone`, `comtwo`, `numcom`, `submit`) VALUES
(1, 'Hemanth', '118W5A1204', 'male', 'satya023.hemanth@gmail.co', '9296106770', '08662533444', '11/04/1992', '500', '89', '2007', '89', '2010', '85', '89', '89', '89', '89', '89', '89', '89', 'No', 'XCV', 'BJ', 'B B ', 'BJ', 'JBJ', 'JJB', 'JBJK', 'KJK', 'UII', 'HB', 'VG', 'hemanth', 'it', 'TCS', 'HCL', '2', 'yes'),
(2, 'admin', 'admin', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'admins', '', '', '', '', ''),
(3, 'sravan', 'y09it038', 'male', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'asdfgh', 'it', '', '', '', 'yes'),
(4, 'it', 'it', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'asdfgh', 'it', '', '', '', ''),
(5, 'cse', 'cse', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'asdfgh', 'cse', '', '', '', ''),
(6, 'ece', 'ece', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'asdfgh', 'ece', '', '', '', ''),
(7, 'krishna murthy', 'y09it078', 'male', '', '8885928018', '', '', '', '', '', '', '', '', '', '', '', '', '', '74', '', '', '', '', '', '', '', '', '', '', '', '', '', 'asdfgh', 'it', '', '', '', 'yes'),
(8, '', 'y09it048', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'asdfgh', 'it', '', '', '', ''),
(9, 'ranjani', 'y09it083', 'female', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '67', '', '', '', '', '', '', '', '', '', '', '', '', '', 'asdfgh', 'it', '', '', '', ''),
(10, '', 'y09cs098', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'asdfgh', 'cse', '', '', '', ''),
(11, '', 'y09it081', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'asdfgh', 'it', '', '', '', ''),
(12, '', 'y09it073', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'asdfgh', 'it', '', '', '', ''),
(13, '', 'y09ce075', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'asdfgh', 'ce', '', '', '', ''),
(14, 'sneha', 'y09it090', 'female', 'sneha@gmail.com', '9876543219', '', '29/09/1992', '16742', '89', '2007', '89', '2009', '89', '', '', '', '', '', '89', '', 'Sele', '', '', '', '', '', '', '', '', '', '', '', 'asdfgh', 'it', '', '', '', 'yes'),
(15, '', 'y09it018', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'asdfgh', 'it', '', '', '', ''),
(16, '', 'y09it021', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'asdfgh', 'it', '', '', '', ''),
(19, '', 'y09it074', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'asdfgh', 'it', '', '', '', ''),
(20, '', 'y09cs009', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'asdfgh', 'CE', '', '', '', ''),
(21, '', 'y09ce001', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'asdfgh', 'CE', '', '', '', ''),
(22, '', '108w1a1204', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ankitha', 'MCA', '', '', '', ''),
(23, '', 'mba', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'asdfgh', 'MBA', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pm`
--

CREATE TABLE IF NOT EXISTS `pm` (
  `id` bigint(20) NOT NULL,
  `id2` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `user1` bigint(20) NOT NULL,
  `user2` bigint(20) NOT NULL,
  `message` text NOT NULL,
  `timestamp` int(10) NOT NULL,
  `user1read` varchar(3) NOT NULL,
  `user2read` varchar(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pm`
--

INSERT INTO `pm` (`id`, `id2`, `title`, `user1`, `user2`, `message`, `timestamp`, `user1read`, `user2read`) VALUES
(1, 2, '', 2, 0, 'hello', 1354801273, '', ''),
(1, 1, 'hi', 1, 2, 'hiiii', 1354800690, 'yes', 'yes'),
(3, 1, 'ALLERT!!!', 0, 1, 'v fkhhgiejfnvjrugoekv nbruufodkm vnefbuouf0e<br />\r\ncd', 1394618444, 'yes', 'no'),
(4, 1, 'hi', 0, 1, 'u are selected for all companies', 1394956362, 'yes', 'no'),
(5, 1, 'hiiiii', 0, 1, 'asdfghjkloiu', 1394956526, 'yes', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `premba`
--

CREATE TABLE IF NOT EXISTS `premba` (
  `id` int(3) NOT NULL DEFAULT '0',
  `name` varchar(25) NOT NULL,
  `regno` varchar(15) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `mail` varchar(25) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `land` varchar(15) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `rank` varchar(7) NOT NULL,
  `xth` varchar(5) NOT NULL,
  `xthyop` varchar(4) NOT NULL,
  `inter` varchar(5) NOT NULL,
  `interyop` varchar(4) NOT NULL,
  `degree` varchar(5) NOT NULL,
  `degreeyop` varchar(4) NOT NULL,
  `icet` varchar(7) NOT NULL,
  `sem1` varchar(5) NOT NULL,
  `sem2` varchar(5) NOT NULL,
  `sem3` varchar(5) NOT NULL,
  `sem4` varchar(5) NOT NULL,
  `agg` varchar(5) NOT NULL,
  `blogs` varchar(3) NOT NULL,
  `hob` varchar(4) NOT NULL,
  `focc` varchar(15) NOT NULL,
  `address` varchar(40) NOT NULL,
  `pab` varchar(10) NOT NULL,
  `height` varchar(6) NOT NULL,
  `weight` varchar(6) NOT NULL,
  `sight` varchar(15) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `mname` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `dept` varchar(4) NOT NULL,
  `comone` varchar(15) NOT NULL,
  `comtwo` varchar(15) NOT NULL,
  `numcom` varchar(5) NOT NULL,
  `submit` varchar(5) NOT NULL,
  PRIMARY KEY (`regno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `premba`
--

INSERT INTO `premba` (`id`, `name`, `regno`, `gender`, `mail`, `mobile`, `land`, `dob`, `rank`, `xth`, `xthyop`, `inter`, `interyop`, `degree`, `degreeyop`, `icet`, `sem1`, `sem2`, `sem3`, `sem4`, `agg`, `blogs`, `hob`, `focc`, `address`, `pab`, `height`, `weight`, `sight`, `fname`, `mname`, `password`, `dept`, `comone`, `comtwo`, `numcom`, `submit`) VALUES
(0, '', '118W5A0317', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'asdfgh', 'mba', '', '', '', ''),
(1, 'Hemanth', '118w5a1204', 'male', 'sekhar@gmail.com', '9700335925', '08662533444', '29091991', '159', '88', '2007', '89', '2010', '89', '2012', '123', '89', '89', '89', '89', '89', '2', 'No', 'farmer', 'vijayawada', 'job', '174', '55', '0', 'krishna', 'padma', 'hemanth', 'mba', '', '', '', ''),
(2, '', 'l10it129', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'asdfggh', 'mba', '', '', '', ''),
(0, '', 'mba', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'asdfgh', 'mba', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `premca`
--

CREATE TABLE IF NOT EXISTS `premca` (
  `id` int(3) NOT NULL DEFAULT '0',
  `name` varchar(25) NOT NULL,
  `regno` varchar(15) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `mail` varchar(25) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `land` varchar(15) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `rank` varchar(7) NOT NULL,
  `xth` varchar(5) NOT NULL,
  `xthyop` varchar(4) NOT NULL,
  `inter` varchar(5) NOT NULL,
  `interyop` varchar(4) NOT NULL,
  `degree` varchar(5) NOT NULL,
  `degreeyop` varchar(4) NOT NULL,
  `icet` varchar(7) NOT NULL,
  `sem1` varchar(5) NOT NULL,
  `sem2` varchar(5) NOT NULL,
  `sem3` varchar(5) NOT NULL,
  `sem4` varchar(5) NOT NULL,
  `sem5` varchar(5) NOT NULL,
  `sem6` varchar(5) NOT NULL,
  `agg` varchar(5) NOT NULL,
  `blogs` varchar(3) NOT NULL,
  `hob` varchar(4) NOT NULL,
  `focc` varchar(15) NOT NULL,
  `address` varchar(40) NOT NULL,
  `pab` varchar(10) NOT NULL,
  `height` varchar(6) NOT NULL,
  `weight` varchar(6) NOT NULL,
  `sight` varchar(15) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `mname` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `dept` varchar(4) NOT NULL,
  `comone` varchar(15) NOT NULL,
  `comtwo` varchar(15) NOT NULL,
  `numcom` varchar(5) NOT NULL,
  `submit` varchar(5) NOT NULL,
  PRIMARY KEY (`regno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `premca`
--

INSERT INTO `premca` (`id`, `name`, `regno`, `gender`, `mail`, `mobile`, `land`, `dob`, `rank`, `xth`, `xthyop`, `inter`, `interyop`, `degree`, `degreeyop`, `icet`, `sem1`, `sem2`, `sem3`, `sem4`, `sem5`, `sem6`, `agg`, `blogs`, `hob`, `focc`, `address`, `pab`, `height`, `weight`, `sight`, `fname`, `mname`, `password`, `dept`, `comone`, `comtwo`, `numcom`, `submit`) VALUES
(0, '', '108w1a0424', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'asdfgh', 'mca', '', '', '', ''),
(1, 'Hemanth', '118w5a1204', 'male', 'vsekhar@gmail.com', '9700335925', '08662533444', '29091991', '159', '88', '2007', '89', '2010', '89', '2012', '123', '89', '89', '89', '89', '89', '89', '89', '1', 'No', 'farmer', 'vijayawada', 'job', '174', '55', '0', 'krishna', 'padma', 'hemanth', 'mca', '', '', '', ''),
(2, '', 'l10it129', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'asdfgh', 'mca', '', '', '', ''),
(0, '', 'mca', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'asdfgh', 'mca', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `prepg`
--

CREATE TABLE IF NOT EXISTS `prepg` (
  `id` int(3) NOT NULL DEFAULT '0',
  `name` varchar(25) NOT NULL,
  `regno` varchar(15) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `mail` varchar(25) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `land` varchar(15) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `rank` varchar(7) NOT NULL,
  `xth` varchar(5) NOT NULL,
  `xthyop` varchar(4) NOT NULL,
  `inter` varchar(5) NOT NULL,
  `interyop` varchar(4) NOT NULL,
  `degree` varchar(5) NOT NULL,
  `degreeyop` varchar(4) NOT NULL,
  `pgcet` varchar(7) NOT NULL,
  `sem1` varchar(5) NOT NULL,
  `sem2` varchar(5) NOT NULL,
  `sem3` varchar(5) NOT NULL,
  `sem4` varchar(5) NOT NULL,
  `agg` varchar(5) NOT NULL,
  `blogs` varchar(3) NOT NULL,
  `hob` varchar(4) NOT NULL,
  `focc` varchar(15) NOT NULL,
  `address` varchar(40) NOT NULL,
  `pab` varchar(10) NOT NULL,
  `height` varchar(6) NOT NULL,
  `weight` varchar(6) NOT NULL,
  `sight` varchar(15) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `mname` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `dept` varchar(4) NOT NULL,
  `comone` varchar(15) NOT NULL,
  `comtwo` varchar(15) NOT NULL,
  `numcom` varchar(5) NOT NULL,
  `submit` varchar(5) NOT NULL,
  PRIMARY KEY (`regno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prepg`
--

INSERT INTO `prepg` (`id`, `name`, `regno`, `gender`, `mail`, `mobile`, `land`, `dob`, `rank`, `xth`, `xthyop`, `inter`, `interyop`, `degree`, `degreeyop`, `pgcet`, `sem1`, `sem2`, `sem3`, `sem4`, `agg`, `blogs`, `hob`, `focc`, `address`, `pab`, `height`, `weight`, `sight`, `fname`, `mname`, `password`, `dept`, `comone`, `comtwo`, `numcom`, `submit`) VALUES
(1, 'Hemanth', '118w5a1204', 'male', 'sekhar@gmail.com', '9700335925', '0862533444', '29091991', '159', '89', '2007', '89', '2012', '89', '2012', '189', '89', '89', '89', '89', '89', '1', 'Yes', 'farmer', 'nnnvijayawaada, 520011', 'job', '172', '55', '0', 'krishna', 'padma', 'hemanth', 'mcst', 'tcs', '', '1', 'yes'),
(0, '', '128W1E0056', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'asdfgh', 'mpse', '', '', '', ''),
(2, '', 'l10it129', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'asdfgh', 'mcst', '', '', '', ''),
(0, '', 'mcst', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'asdfgh', 'MCST', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `preug`
--

CREATE TABLE IF NOT EXISTS `preug` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `regno` varchar(15) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `mail` varchar(25) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `land` varchar(15) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `rank` varchar(7) NOT NULL,
  `xth` varchar(5) NOT NULL,
  `xthyop` varchar(4) NOT NULL,
  `inter` varchar(5) NOT NULL,
  `interyop` varchar(4) NOT NULL,
  `sem1` varchar(5) NOT NULL,
  `sem2` varchar(5) NOT NULL,
  `sem3` varchar(5) NOT NULL,
  `sem4` varchar(5) NOT NULL,
  `sem5` varchar(5) NOT NULL,
  `sem6` varchar(5) NOT NULL,
  `sem7` varchar(5) NOT NULL,
  `sem8` varchar(5) NOT NULL,
  `agg` varchar(5) NOT NULL,
  `blogs` varchar(3) NOT NULL,
  `hob` varchar(4) NOT NULL,
  `focc` varchar(15) NOT NULL,
  `address` varchar(150) NOT NULL,
  `pab` varchar(10) NOT NULL,
  `height` varchar(6) NOT NULL,
  `weight` varchar(6) NOT NULL,
  `sight` varchar(15) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `mname` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `dept` varchar(4) NOT NULL,
  `comone` varchar(15) NOT NULL,
  `comtwo` varchar(15) NOT NULL,
  `numcom` varchar(5) NOT NULL,
  `submit` varchar(5) NOT NULL,
  PRIMARY KEY (`regno`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `preug`
--

INSERT INTO `preug` (`id`, `name`, `regno`, `gender`, `mail`, `mobile`, `land`, `dob`, `rank`, `xth`, `xthyop`, `inter`, `interyop`, `sem1`, `sem2`, `sem3`, `sem4`, `sem5`, `sem6`, `sem7`, `sem8`, `agg`, `blogs`, `hob`, `focc`, `address`, `pab`, `height`, `weight`, `sight`, `fname`, `mname`, `password`, `dept`, `comone`, `comtwo`, `numcom`, `submit`) VALUES
(7, '', '108w1a0424', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'asdfgh', 'ece', '', '', '', ''),
(6, '', '108w1a1204', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ankitha', 'it', '', '', '', ''),
(1, 'Hemanth', '118w5a1204', 'male', 'sekhar@gmail.com', '9700335925', '8662533444', '29091991', '159', '89', '2007', '89', '2010', '89', '89', '89', '89', '89', '89', '89', '89', '89', '1', 'Yes', 'farmer', 'dno:23-35-40/a,\r\nAdavisesha giri rao street,\r\nmuthyalampadu,\r\nvijayawada.\r\npin-520011', 'job', '172', '55', '0', 'krishna', 'padma', 'hemanth', 'it', 'tcs', '', '1', 'yes'),
(3, '', 'it', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ashoksir', 'IT', '', '', '', ''),
(2, '', 'l10cs127', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'asdfgh', 'CSE', '', '', '', ''),
(4, '', 'l10it128', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'asdfgh', 'it', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `regno` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `regno`, `password`) VALUES
(1, 'admin', 'admintpo');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
