-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2019 at 07:48 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `company_details`
--

CREATE TABLE `company_details` (
  `id` int(20) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(30) NOT NULL,
  `domain` varchar(50) NOT NULL,
  `no_of_employee` varchar(10) NOT NULL,
  `company_esta_date` date NOT NULL,
  `password` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_details`
--

INSERT INTO `company_details` (`id`, `company_name`, `city`, `state`, `address`, `email`, `domain`, `no_of_employee`, `company_esta_date`, `password`, `status`) VALUES
(123, 'abc', 'dfergtrhrd', 'ahmedabad', 'Gujarat', 'abc@gmail.com', 'it', '400', '2019-03-05', 'a49bdd69f0', '1');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `name` varchar(10) NOT NULL,
  `path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`name`, `path`) VALUES
('a', 'C:xampp	mpphp7698.tmp'),
('b', 'C:xampp	mpphp5E1B.tmp'),
('b', 'C:xampp	mpphp2583.tmp'),
('image/25-0', '2018-09-25'),
('image/18-0', '2019-02-18');

-- --------------------------------------------------------

--
-- Table structure for table `institute_details`
--

CREATE TABLE `institute_details` (
  `id` int(11) NOT NULL,
  `institute_name` varchar(50) NOT NULL,
  `type` varchar(15) NOT NULL,
  `principle_name` varchar(50) NOT NULL,
  `address` varchar(300) NOT NULL,
  `city` varchar(20) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `state` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `interview_updates`
--

CREATE TABLE `interview_updates` (
  `company_name` varchar(50) NOT NULL,
  `interview_date` date NOT NULL,
  `time` varchar(25) NOT NULL,
  `location` varchar(100) NOT NULL,
  `required_post` varchar(50) NOT NULL,
  `no_of_vacancy` varchar(5) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interview_updates`
--

INSERT INTO `interview_updates` (`company_name`, `interview_date`, `time`, `location`, `required_post`, `no_of_vacancy`, `description`) VALUES
('abc', '2019-03-21', '10 am', 'gnfejghiesn', 'vfkre', '10', 'fnkldnfer');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `company_name` varchar(50) NOT NULL,
  `required_post` varchar(50) NOT NULL,
  `description` varchar(300) NOT NULL,
  `no_of_vacancy` bigint(5) NOT NULL,
  `salary` varchar(15) NOT NULL,
  `location` varchar(100) NOT NULL,
  `key_skills` varchar(200) NOT NULL,
  `period` varchar(20) NOT NULL,
  `starting_date` date NOT NULL,
  `ending_date` date NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`company_name`, `required_post`, `description`, `no_of_vacancy`, `salary`, `location`, `key_skills`, `period`, `starting_date`, `ending_date`, `status`) VALUES
('abc', 'abc', 'gsaufewuifewi', 10, '10000', 'nsajjsa', 'dbuhdqw', '6 month', '2019-01-01', '2019-01-07', 0),
('deidoj', 'fjesfe', 'bjksb', 10, '10000', 'sbdiuwqwd', ' sjfwjk', '6 month', '1111-11-11', '1211-02-12', 0),
('deidoj', 'fjesfe', 'bjksb', 10, '10000', 'sbdiuwqwd', ' sjfwjk', '6 month', '1111-11-11', '1211-02-12', 0);

-- --------------------------------------------------------

--
-- Table structure for table `studentactivity`
--

CREATE TABLE `studentactivity` (
  `id` int(10) NOT NULL,
  `p_projectname` varchar(20) NOT NULL,
  `p_description` varchar(1000) NOT NULL,
  `p_frontend` varchar(100) NOT NULL,
  `p_backend` varchar(100) NOT NULL,
  `p_duration` varchar(30) NOT NULL,
  `p_members` varchar(5) NOT NULL,
  `t_eventname` varchar(20) NOT NULL,
  `t_description` varchar(500) NOT NULL,
  `t_certificate` varchar(200) NOT NULL,
  `n_eventname` varchar(20) NOT NULL,
  `n_description` varchar(500) NOT NULL,
  `n_certificate` varchar(200) NOT NULL,
  `c_eventname` varchar(20) NOT NULL,
  `c_description` varchar(500) NOT NULL,
  `c_certificate` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentactivity`
--

INSERT INTO `studentactivity` (`id`, `p_projectname`, `p_description`, `p_frontend`, `p_backend`, `p_duration`, `p_members`, `t_eventname`, `t_description`, `t_certificate`, `n_eventname`, `n_description`, `n_certificate`, `c_eventname`, `c_description`, `c_certificate`) VALUES
(0, 'csnah', ', /dsv', 'bcjsc', 'cjaskc', 'bcjsc', 'bcvjk', 'c,dsc ', ', /dsv', 'toc assignment.pdf', 'c,dsc ', ', /dsv', 'toc assignment.pdf', 'c,dsc ', ', /dsv', 'toc assignment.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `student_name` varchar(50) NOT NULL,
  `en_no` bigint(12) NOT NULL,
  `branch` varchar(25) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `medium` varchar(10) NOT NULL,
  `college` varchar(50) NOT NULL,
  `cpi` varchar(5) NOT NULL,
  `mobile_no` bigint(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`student_name`, `en_no`, `branch`, `semester`, `medium`, `college`, `cpi`, `mobile_no`, `email`, `password`, `status`) VALUES
('xyz', 480, 'Computer', '6', 'Gujarati', 'GEC', '7.8', 9484616141, 'abc@gmail.com', '202cb962ac', '1'),
('foran', 160210107033, 'Computer', '05', 'Gujarati', 'GEC', '7.8', 9484616141, 'foran.modi@gmail.com', 'frn1299', '1'),
('foran', 160210107040, 'Computer', '6', 'Gujarati', 'GEC', '7.8', 9484616141, 'foran.modi@gmail.com', 'a49bdd69f0', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `institute_details`
--
ALTER TABLE `institute_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`en_no`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
