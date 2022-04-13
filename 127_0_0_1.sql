-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2022 at 07:17 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_3`
--
CREATE DATABASE IF NOT EXISTS `student_3` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `student_3`;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `Roll` int(11) NOT NULL,
  `Course` text NOT NULL,
  `d_one` int(11) NOT NULL,
  `d_two` int(11) NOT NULL,
  `d_three` int(11) NOT NULL,
  `d_four` int(11) NOT NULL,
  `d_five` int(11) NOT NULL,
  `d_six` int(11) NOT NULL,
  `d_seven` int(11) NOT NULL,
  `d_eight` int(11) NOT NULL,
  `d_nine` int(11) NOT NULL,
  `d_ten` int(11) NOT NULL,
  `d_eleven` int(11) NOT NULL,
  `d_twelve` int(11) NOT NULL,
  `d_thirteen` int(11) NOT NULL,
  `d_fourteen` int(11) NOT NULL,
  `d_fifteen` int(11) NOT NULL,
  `d_sixteen` int(11) NOT NULL,
  `d_seventeen` int(11) NOT NULL,
  `d_eighteen` int(11) NOT NULL,
  `d_nineteen` int(11) NOT NULL,
  `d_twenty` int(11) NOT NULL,
  `d_twentyone` int(11) NOT NULL,
  `d_twentytwo` int(11) NOT NULL,
  `d_twentythree` int(11) NOT NULL,
  `d_twentyfour` int(11) NOT NULL,
  `d_twentyfive` int(11) NOT NULL,
  `d_twentysix` int(11) NOT NULL,
  `d_twentyseven` int(11) NOT NULL,
  `d_twentyeight` int(11) NOT NULL,
  `d_twentynine` int(11) NOT NULL,
  `d_thirty` int(11) NOT NULL,
  `d_thirtyone` int(11) NOT NULL,
  `d_thirtytwo` int(11) NOT NULL,
  `d_thirtythree` int(11) NOT NULL,
  `d_thirtyfour` int(11) NOT NULL,
  `d_thirtyfive` int(11) NOT NULL,
  `d_thirtysix` int(11) NOT NULL,
  `d_thirtyseven` int(11) NOT NULL,
  `d_thirtyeight` int(11) NOT NULL,
  `d_thirtynine` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`Roll`, `Course`, `d_one`, `d_two`, `d_three`, `d_four`, `d_five`, `d_six`, `d_seven`, `d_eight`, `d_nine`, `d_ten`, `d_eleven`, `d_twelve`, `d_thirteen`, `d_fourteen`, `d_fifteen`, `d_sixteen`, `d_seventeen`, `d_eighteen`, `d_nineteen`, `d_twenty`, `d_twentyone`, `d_twentytwo`, `d_twentythree`, `d_twentyfour`, `d_twentyfive`, `d_twentysix`, `d_twentyseven`, `d_twentyeight`, `d_twentynine`, `d_thirty`, `d_thirtyone`, `d_thirtytwo`, `d_thirtythree`, `d_thirtyfour`, `d_thirtyfive`, `d_thirtysix`, `d_thirtyseven`, `d_thirtyeight`, `d_thirtynine`) VALUES
(1810009, 'ECE-2103', 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(1810020, 'ECE-2103', 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1810021, 'ECE-2103', 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(1810022, 'ECE-2103', 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1810040, 'ECE-2103', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1810041, 'ECE-2103', 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1810059, 'ECE-2111', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(1810060, 'ECE-2103', 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `Roll` int(11) NOT NULL,
  `CGPA` decimal(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`Roll`, `CGPA`) VALUES
(1810009, '3.55'),
(1810020, '3.35'),
(1810021, '2.96'),
(1810022, '3.55'),
(1810059, '3.55'),
(1810079, '3.32');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(5) NOT NULL,
  `Roll` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `studentname` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `Roll`, `name`, `email`, `studentname`, `password`, `photo`, `status`, `datetime`) VALUES
(1, 1810021, 'S.M. Faizul Islam Fair', 'faizul@gmail.com', 'faizulece18', 'f638f4354ff089323d1a5f78fd8f63ca', '', 'active', '2020-11-11 15:55:04'),
(2, 1810022, 'Md. Shahriar Sajid', 'sajid@gmail.com', 'sajid', '30220cfd902d347400efcfef5ca9d655', '', 'active', '2020-11-24 13:26:48');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `roll` int(7) NOT NULL,
  `password` varchar(50) NOT NULL,
  `class` varchar(8) NOT NULL,
  `city` varchar(20) NOT NULL,
  `otp` varchar(6) NOT NULL,
  `forgot` varchar(50) NOT NULL,
  `status` varchar(25) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `name`, `email`, `username`, `roll`, `password`, `class`, `city`, `otp`, `forgot`, `status`, `contact`, `photo`, `datetime`) VALUES
(1, 'S.M. Faizul Islam Fair', 'faizulislamfair@gmail.com', 'faizulece18', 1810021, 'f638f4354ff089323d1a5f78fd8f63ca', '2nd', 'Rajshahi', 'okay', '', 'active', '01715577668', '1810021.jpeg', '2020-10-01 00:13:06'),
(2, 'MD. Turag Islam', 'turag@gmail.com', 'turagece18', 1810020, 'f86c4ce60f642619c1fe204940998334', '2nd', 'Dhaka', 'okay', '', 'active', '01556418446', '1810020.jpg', '2020-10-01 00:14:32'),
(12, 'M. Morsed Emon', 'emon@gmail.com', 'emonece18', 1810059, '8d1d6d132c46c44609e7e5462b4d69c7', '2nd', 'Rajshahi', 'okay', '', 'active', '01715869321', '1810059.jpg', '2021-01-04 18:22:08'),
(24, 'something', '1810021@student.ruet.ac.bd', 'somethingece18', 1810075, 'af3d9cd5fa0e5af01ff3b7726370405e', '2nd', 'Chittagong', 'okay', '', 'active', '01918273641', '1810075.jfif', '2021-12-29 07:53:26');

-- --------------------------------------------------------

--
-- Table structure for table `student_marks1`
--

CREATE TABLE `student_marks1` (
  `Roll` int(11) NOT NULL,
  `Electrical_Machines` int(11) NOT NULL,
  `Data_Structure_&_Algorithms` int(11) NOT NULL,
  `Digital_Techniques` int(11) NOT NULL,
  `Mathematics` int(11) NOT NULL,
  `Chemistry` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_marks1`
--

INSERT INTO `student_marks1` (`Roll`, `Electrical_Machines`, `Data_Structure_&_Algorithms`, `Digital_Techniques`, `Mathematics`, `Chemistry`) VALUES
(1810009, 17, 15, 15, 15, 15),
(1810013, 20, 20, 18, 18, 18),
(1810021, 10, 10, 10, 10, 15),
(1810022, 20, 20, 20, 20, 20),
(1810027, 15, 20, 20, 20, 20),
(1810049, 20, 15, 15, 15, 15),
(1810051, 20, 20, 20, 20, 20),
(1810059, 18, 18, 18, 18, 18),
(1810067, 11, 11, 11, 11, 11),
(1810076, 15, 15, 15, 15, 15),
(1810079, 12, 12, 12, 12, 12),
(1810088, 15, 14, 20, 12, 12);

-- --------------------------------------------------------

--
-- Table structure for table `student_marks2`
--

CREATE TABLE `student_marks2` (
  `Roll` int(11) NOT NULL,
  `Electrical_Machines` int(11) NOT NULL,
  `Data_Structure_&_Algorithms` int(11) NOT NULL,
  `Digital_Techniques` int(11) NOT NULL,
  `Mathematics` int(11) NOT NULL,
  `Chemistry` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_marks2`
--

INSERT INTO `student_marks2` (`Roll`, `Electrical_Machines`, `Data_Structure_&_Algorithms`, `Digital_Techniques`, `Mathematics`, `Chemistry`) VALUES
(1810013, 15, 18, 18, 18, 18),
(1810021, 10, 12, 10, 10, 10),
(1810022, 20, 15, 15, 15, 15),
(1810024, 15, 15, 15, 15, 15),
(1810025, 12, 12, 12, 12, 12),
(1810059, 18, 18, 18, 18, 18),
(1810079, 17, 17, 15, 15, 15);

-- --------------------------------------------------------

--
-- Table structure for table `student_marks3`
--

CREATE TABLE `student_marks3` (
  `Roll` int(11) NOT NULL,
  `Electrical_Machines` int(11) NOT NULL,
  `Data_Structure_&_Algorithms` int(11) NOT NULL,
  `Digital_Techniques` int(11) NOT NULL,
  `Mathematics` int(11) NOT NULL,
  `Chemistry` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_marks3`
--

INSERT INTO `student_marks3` (`Roll`, `Electrical_Machines`, `Data_Structure_&_Algorithms`, `Digital_Techniques`, `Mathematics`, `Chemistry`) VALUES
(1810013, 18, 18, 18, 18, 18),
(1810021, 10, 10, 12, 10, 10),
(1810022, 15, 15, 15, 15, 15),
(1810059, 18, 18, 18, 18, 18),
(1810079, 17, 17, 15, 15, 15);

-- --------------------------------------------------------

--
-- Table structure for table `student_marks4`
--

CREATE TABLE `student_marks4` (
  `Roll` int(11) NOT NULL,
  `Electrical_Machines` int(11) NOT NULL,
  `Data_Structure_&_Algorithms` int(11) NOT NULL,
  `Digital_Techniques` int(11) NOT NULL,
  `Mathematics` int(11) NOT NULL,
  `Chemistry` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_marks4`
--

INSERT INTO `student_marks4` (`Roll`, `Electrical_Machines`, `Data_Structure_&_Algorithms`, `Digital_Techniques`, `Mathematics`, `Chemistry`) VALUES
(1810013, 15, 18, 18, 18, 18),
(1810021, 10, 10, 10, 15, 10),
(1810022, 15, 15, 15, 15, 15),
(1810059, 18, 18, 18, 18, 18),
(1810079, 17, 17, 15, 15, 15),
(1810098, 15, 15, 15, 15, 15);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `photo`, `status`, `datetime`) VALUES
(1, 'S.M. Faizul Islam Fair', 'faizulislamfair@gmail.com', 'faizulece18', 'f638f4354ff089323d1a5f78fd8f63ca', 'faizulece18.jpeg', 'active', '2020-09-25 06:58:10'),
(20, 'Turag Islam', 'turag@gmail.com', 'turag12345', 'f86c4ce60f642619c1fe204940998334', 'turag12345.png', 'inactive', '2021-07-31 21:43:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`Roll`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`Roll`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `studentname` (`studentname`),
  ADD UNIQUE KEY `Roll` (`Roll`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`roll`);

--
-- Indexes for table `student_marks1`
--
ALTER TABLE `student_marks1`
  ADD PRIMARY KEY (`Roll`);

--
-- Indexes for table `student_marks2`
--
ALTER TABLE `student_marks2`
  ADD PRIMARY KEY (`Roll`);

--
-- Indexes for table `student_marks3`
--
ALTER TABLE `student_marks3`
  ADD PRIMARY KEY (`Roll`);

--
-- Indexes for table `student_marks4`
--
ALTER TABLE `student_marks4`
  ADD PRIMARY KEY (`Roll`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
