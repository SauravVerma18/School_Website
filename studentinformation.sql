-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2020 at 11:16 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentinformation`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `studreg`
--

CREATE TABLE `studreg` (
  `firstname` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `prn` varchar(20) NOT NULL,
  `rno` int(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `mobile` varchar(10) DEFAULT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `resume` varchar(50) NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studreg`
--

INSERT INTO `studreg` (`firstname`, `lastname`, `prn`, `rno`, `password`, `mobile`, `address`, `gender`, `dob`, `city`, `email`, `branch`, `year`, `resume`, `photo`) VALUES
('Priya', 'Patil', '1234567', 113, '9999992234', '9999992234', 'rajarmpuri', 'female', '2000-04-11', 'kolhapur', 'priya@gmail.com', 'computer science', 'FE', 'facial_stress.pdf', 'black-black-watch-cellphone-1841841.jpg'),
('rajveer', 'chavan', '1234567891', 11, '2233445566', '2233445566', 'morewadi', 'male', '2000-01-10', 'kolhapur', 'abc@gmail.com', 'computer science', 'FE', 'Resume.pdf', 'AA5459D9-9D09-4236-A722-F6A7EF320479.jpg'),
('viraj', 'chavan', '1234567892', 10, '6677889900', '6677889900', 'Samrat Nagar', 'male', '1998-10-22', 'kolhapur', 'virajchavan2210@gmai', 'computer science', 'BE', '', ''),
('aruna', 'chavan', '1234567893', 12, '8899776655', '1234567893', 'nagla park', 'female', '1900-09-15', 'kolhapur', 'arunachavan.kop@gmai', 'computer science', 'SE', 'facial_stress.pdf', 'christian-wiediger-1XGlbRjt92Q-unsplash.jpg'),
('sunita', 'shinde', '5656', 14, '1234', '676767676', 'Samrat Nagar', 'male', '2000-02-11', 'kolhapur', 'sunita@gmail.com', 'computer science', 'SE', 'BillPayReceiptTatatele.pdf', 'AA5459D9-9D09-4236-A722-F6A7EF320479.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studreg`
--
ALTER TABLE `studreg`
  ADD PRIMARY KEY (`prn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
