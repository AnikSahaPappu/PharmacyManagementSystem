-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2016 at 10:28 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`fname`, `lname`, `email`, `gender`, `address`, `phone`, `username`, `password`) VALUES
('a', 'a', 'a@a.com', 'Female', 'a', '00', 'a', 'a'),
('ashik', 'dude', 'ashik@a.com', 'Male', 'nikunja2', '09028274847', 'admin', 'a'),
('ahona', 'sifat', 'ahona@gmail.com', 'Female', 'mohammadpur', '01999101', 'ahona', 'ahona'),
('anik', 'saha', 'p000000@gmail.com', 'Male', 'mohammadpur', '909090909', 'ak', 'anik'),
('aks', 'aks', 'pappubd007@hgmail.com', 'Male', 'mdp', '001901901912848', 'AKS', 'aks'),
('alip', 'saha', 'anik@gmail.com', 'Female', 'm', '0000', 'alip009', 'ap'),
('anik', 'saha', 'pappu_bd_007@webtech.com', 'Male', 'mohammadpur', '01672919211', 'anik', 'anik'),
('obama', 'barak', 'saha_alip2004@gmail.com', 'Male', 'mohammadpur', '01618181218', 'ap', '1212'),
('baba', 'baba', 'baba@baba.com', 'Male', 'baba', '467', 'baba', 'baba'),
('bab', 'bab', 'apu@gmail.com', 'Male', 'boromirjapur', '09', 'babu', 'babu'),
('c', 'c', 'c@c.com', 'Female', 'c', '6677', 'c', 'c'),
('fj', 'j', 'jj@jz.com', 'Female', 'j', '66', 'g', 'g'),
('j', 'j', 'jj@j.com', 'Female', 'dhaka medical', '90909787', 'j', 'j'),
('j', 'j', 'jj@jza.com', 'Female', 'j', '88', 'ja', 'ja'),
('jaja', 'ja', 'jjaajja@jj.com', 'Female', 'ja', '00000000000000000000', 'jkk', 'jkk'),
('k', 'k', 'kai@gmail.com', 'Female', 'k', '0099887766', 'k', 'k'),
('Trishna', 'saha mom', 'trishna@gmail.com', 'Female', 'khulna', '01710261421', 'ma', 'ma'),
('manoshi', 'saha', 'manoshisaha2@gmail.com', 'Female', 'dhaka medical college', '01682001321', 'mi', 'mi'),
('manas', 'datta', 'manas.aiub.cse@gmail.com', 'Male', 'nikunja2', '01681999891', 'ms', 'ms'),
('o', 'o', 'anik.saha1@k.com', 'Others', 'o', '09221', 'o', 'o'),
('pk', 'pk', 'pk@pk.com', 'Female', 'pk', '0090909011111111', 'PK', 'PK'),
('xozo', 'kozo', 'waliur@gmail.com', 'Female', 'we', '34578', 'xo', 'xo');

-- --------------------------------------------------------

--
-- Table structure for table `minfo`
--

CREATE TABLE `minfo` (
  `uname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `catagory` varchar(20) NOT NULL,
  `id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `minfo`
--

INSERT INTO `minfo` (`uname`, `mname`, `unit`, `catagory`, `id`) VALUES
('pappu', 'ha', 'h', 'h', 4),
('sabid', 'sabid', 'sabid', 's', 1),
('sabid', 's', 's', 's', 2),
('tuli009', 'norma H', 'square', 'GASPOPOP', 2),
('tuli009', 'norma H', 'square', 'GASPOPOP', 2),
('tuli009', 'norma H', 'square', 'GASPOPOP', 2),
('tuli009', 'pappu', 'papap', 'papap', 4),
('anik', 'civita', 'reneta', 'vitamin ciiooo', 11),
('anik', 'civita', 'reneta', 'vitamin ciiooo', 11),
('ma', 'napakk', 'kk', 'kk', 1),
('ma', 'i', 'k', 'k', 1),
('ak', 'pa', 'pa', 'pa', 99),
('mi', 'kk', 'kk', 'kk', 99),
('mi', 'mi', 'mi', 'mi', 99),
('ms', 'ms', 'ms', 'ms', 99),
('ms', 'ms', 'ms', 'md', 88),
('ms', 'kk', 'k', 'k', 1),
('ap', 'al', 'al', 'al', 1),
('xo', 's', 'sq', 'd', 2),
('AKS', 'aks', 'aks', 'aks', 1),
('k', 'o', 'o', 'o', 1),
('j', 'p', 'p', 'p', 1),
('o', 'kintu', 'kintu', 'kintu', 1),
('o', 'kintu', 'kintu', 'kintu', 1),
('baba', 'bob', 'bob', 'bob', 6),
('baba', 'b', 'b', 'b', 9),
('baba', 'k', 'j', 'j', 9),
('jkk', 'k', 'k', 'k', 1),
('jkk', 'j', 'j', 'j', 1),
('PK', 'PK', 'PK', 'PK', 1),
('g', 'fu', 'gu', 'gu', 2),
('g', 'GU', 'U', 'U', 1),
('g', 'FU', 'U', 'U', 1),
('g', 'g', 'g', 'g', 1),
('ja', 'ja', 'ja', 'ja', 1),
('ma', 'ma', 'ma', 'ma', 1),
('admin', 'a', 'a', 'a', 1),
('babu', 'na', 'nana', 'ana', 2),
('anik', 'napa', 'beximco', 'fever', 1),
('anik', 'evo', 'reneta', 'antibiotic fever', 1),
('anik', 'norma h', 'square', 'gastric problem', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `email` (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
