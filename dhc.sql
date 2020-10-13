-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2019 at 06:06 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dhc`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_doc`
--

CREATE TABLE `add_doc` (
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `contact` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_doc`
--

INSERT INTO `add_doc` (`fname`, `lname`, `gender`, `email`, `qualification`, `contact`) VALUES
('Taiyebah', 'Hoque', 'Female', 'th@gmail.com', 'MBBS', '01521444444');

-- --------------------------------------------------------

--
-- Table structure for table `add_pat`
--

CREATE TABLE `add_pat` (
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_pat`
--

INSERT INTO `add_pat` (`fname`, `lname`, `gender`, `email`, `contact`) VALUES
('Wasim', 'Akram', 'Male', 'shuvo@gmail.com', '01521308777');

-- --------------------------------------------------------

--
-- Table structure for table `add_payment`
--

CREATE TABLE `add_payment` (
  `p_name` varchar(40) NOT NULL,
  `med_name` varchar(40) NOT NULL,
  `quan` varchar(40) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `payment` varchar(30) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `add_phar`
--

CREATE TABLE `add_phar` (
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_phar`
--

INSERT INTO `add_phar` (`fname`, `lname`, `gender`, `email`, `contact`) VALUES
('Ashik', 'Zaman', 'Male', 'az@gmail.com', '01521445466');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`username`, `password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `doc_feedback`
--

CREATE TABLE `doc_feedback` (
  `feedback` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `d_appoin`
--

CREATE TABLE `d_appoin` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `disease` varchar(20) NOT NULL,
  `symp` varchar(200) NOT NULL,
  `docname` varchar(20) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `d_reg`
--

CREATE TABLE `d_reg` (
  `username` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `d_reg`
--

INSERT INTO `d_reg` (`username`, `email`, `password`) VALUES
('Taiyebah', 'th@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `make_bill`
--

CREATE TABLE `make_bill` (
  `p_name` varchar(40) NOT NULL,
  `med_name` varchar(40) NOT NULL,
  `quan` varchar(40) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_med`
--

CREATE TABLE `order_med` (
  `p_name` varchar(40) NOT NULL,
  `d_name` varchar(40) NOT NULL,
  `med_name` varchar(40) NOT NULL,
  `quan` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact` varchar(40) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pat_feedback`
--

CREATE TABLE `pat_feedback` (
  `feedback` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `phar_feedback`
--

CREATE TABLE `phar_feedback` (
  `feedback` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `phr_reg`
--

CREATE TABLE `phr_reg` (
  `username` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phr_reg`
--

INSERT INTO `phr_reg` (`username`, `email`, `password`) VALUES
('Ashik', 'az@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `disease` varchar(40) NOT NULL,
  `med_name` varchar(40) NOT NULL,
  `mor` varchar(10) NOT NULL,
  `aft` varchar(10) NOT NULL,
  `nigh` varchar(10) NOT NULL,
  `a_food` varchar(20) NOT NULL,
  `b_food` varchar(20) NOT NULL,
  `docname` varchar(40) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `date` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `p_login`
--

CREATE TABLE `p_login` (
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `p_reg`
--

CREATE TABLE `p_reg` (
  `username` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_reg`
--

INSERT INTO `p_reg` (`username`, `email`, `password`) VALUES
('Wasim', 'shuvo@gmail.com', '12345');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
