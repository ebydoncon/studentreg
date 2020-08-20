-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2020 at 12:14 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentregassigment`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `stid` int(11) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `othername` varchar(100) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `country` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `lga` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `class` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dateofbirth` date NOT NULL,
  `username` varchar(50) NOT NULL,
  `passport` varchar(50) NOT NULL,
  `udate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `odate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`stid`, `surname`, `othername`, `sex`, `country`, `state`, `lga`, `address`, `class`, `email`, `dateofbirth`, `username`, `passport`, `udate`, `odate`) VALUES
(7, 'ckc,mcm,', 'm,mm,,mcxmc', 'Male', 'hjhhhhhh', 'kkjkjkjkj', 'mnhhgghh', 'kkkjjkjkjkjk', 'Nursery 1', 'swiftotech@yahoo.com', '2020-05-21', 'header', '', '2020-05-20 21:08:32', '2020-05-20'),
(8, 'ckc,mcm,', 'm,mm,,mcxmc', 'Male', 'hjhhhhhh', 'kkjkjkjkj', 'mnhhgghh', 'kkkjjkjkjkjk', 'Nursery 1', 'swiftotech@yahoo.com', '2020-05-21', 'header', '', '2020-05-20 21:09:16', '2020-05-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`stid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `stid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
