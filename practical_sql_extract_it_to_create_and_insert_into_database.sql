-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2020 at 11:45 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `university`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(50) NOT NULL,
  `pin` int(7) NOT NULL,
  `district` varchar(35) NOT NULL,
  `state` varchar(15) NOT NULL,
  `phone` bigint(13) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `course` varchar(15) NOT NULL,
  `branch` varchar(35) NOT NULL,
  `school` varchar(35) NOT NULL,
  `pic` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `fname`, `dob`, `address`, `pin`, `district`, `state`, `phone`, `email`, `password`, `course`, `branch`, `school`, `pic`) VALUES
(12, 'Rajan Kumar Gupta', 'Yogendra Prasad gupta', '2000-01-01', 'laxmi Marble House', 797112, 'Dimapur', 'Nagaland', 6395302931, 'rajan4398@gmail.com', '5d41402abc4b2a76b9719d911017c592', 'BCA', 'Computer Science', 'School of Technology', 'Images\\rajan.jpg'),
(14, 'Vasi  Khan', 'Shani ur Rehman Khan', '2020-12-02', '75/101 shekhpuri   Roshan Traders Civil lines (nea', 845432, 'Roorkee', 'Uttrakhand', 8755146169, 'vasikhan@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'BCA', 'Computer Science', 'School of Technology', 'Images\\logo.png'),
(15, 'jyoti Kumari ', 'Nageshwar Shah', '2004-08-11', 'Bajhiya Bazzar Jyoti Jwellers', 845432, 'East Champaran', 'Bihar', 8755146169, 'jyotikumari@gmail.com', '5d41402abc4b2a76b9719d911017c592', 'B.tech', 'Computer Science', 'School of Technology', 'Images/rajan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(5) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `password`, `email`) VALUES
('admin', 'admin', 'admin@123'),
('jyoti', '5d41402abc4b2a76b9719d911017c592', 'jyotikumari@gmail.com'),
('Rajan', '5d41402abc4b2a76b9719d911017c592', 'rajan4398@gmail.com'),
('Vasi ', '827ccb0eea8a706c4c34a16891f84e7b', 'vasikhan@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
