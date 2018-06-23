-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2018 at 10:55 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cooproperty`
--

-- --------------------------------------------------------

--
-- Table structure for table `investments`
--

CREATE TABLE IF NOT EXISTS `investments` (
  `id` int(200) NOT NULL,
  `investmentname` varchar(200) NOT NULL,
  `targetamount` varchar(200) NOT NULL,
  `open` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
`id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phonenumber` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `investment` varchar(200) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `datetime` timestamp(2) NOT NULL DEFAULT CURRENT_TIMESTAMP(2) ON UPDATE CURRENT_TIMESTAMP(2),
  `password` varchar(200) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dateofbirth` varchar(200) NOT NULL,
  `membershipid` varchar(200) NOT NULL,
  `membershipfee` varchar(200) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `name`, `email`, `phonenumber`, `address`, `investment`, `amount`, `datetime`, `password`, `gender`, `dateofbirth`, `membershipid`, `membershipfee`) VALUES
(7, 'Morgan Victor', 'igalaworld@gmail.com', '08100853150', 'No. 4 Balogun Bustop, Eruwen, Lagos Nigeria', '', '', '2018-06-16 21:40:20.67', 'admin', 'male', '06/13/2018', '', ''),
(8, 'Morgan Victor', 'admin@gmail.com', '08100853150', 'No. 4 Balogun Bustop, Eruwen, Lagos Nigeria', '', '', '2018-06-16 21:47:54.79', 'admin', 'male', '06/27/2018', '', ''),
(9, 'Morgan Victor', 'admin1@gmail.com', '08100853150', 'No. 4 Balogun Bustop, Eruwen, Lagos Nigeria', '', '', '2018-06-17 08:31:16.84', 'admin', 'male', '06/19/2018', 'T165441095635807', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
MODIFY `id` int(200) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
