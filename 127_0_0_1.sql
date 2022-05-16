-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2022 at 07:16 PM
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
-- Table structure for table `semester_11`
--

CREATE TABLE `semester_11` (
  `roll` int(25) NOT NULL,
  `ece_1101_ct1` int(25) NOT NULL,
  `ece_1101_ct2` int(25) NOT NULL,
  `ece_1101_ct3` int(25) NOT NULL,
  `ece_1101_ct4` int(25) NOT NULL,
  `ece_1101_att` int(25) NOT NULL,
  `ece_1101_exam` int(25) NOT NULL,
  `ece_1103_ct1` int(25) NOT NULL,
  `ece_1103_ct2` int(25) NOT NULL,
  `ece_1103_ct3` int(25) NOT NULL,
  `ece_1103_ct4` int(25) NOT NULL,
  `ece_1103_att` int(25) NOT NULL,
  `ece_1103_exam` int(25) NOT NULL,
  `math_1117_ct1` int(25) NOT NULL,
  `math_1117_ct2` int(25) NOT NULL,
  `math_1117_ct3` int(25) NOT NULL,
  `math_1117_ct4` int(25) NOT NULL,
  `math_1117_att` int(25) NOT NULL,
  `math_1117_exam` int(25) NOT NULL,
  `phy_1117_ct1` int(25) NOT NULL,
  `phy_1117_ct2` int(25) NOT NULL,
  `phy_1117_ct3` int(25) NOT NULL,
  `phy_1117_ct4` int(25) NOT NULL,
  `phy_1117_att` int(25) NOT NULL,
  `phy_1117_exam` int(25) NOT NULL,
  `hum_1117_ct1` int(25) NOT NULL,
  `hum_1117_ct2` int(25) NOT NULL,
  `hum_1117_ct3` int(25) NOT NULL,
  `hum_1117_ct4` int(25) NOT NULL,
  `hum_1117_att` int(25) NOT NULL,
  `hum_1117_exam` int(25) NOT NULL,
  `ece_1102_re` int(25) NOT NULL,
  `ece_1102_att` int(25) NOT NULL,
  `ece_1102_quiz` int(25) NOT NULL,
  `ece_1102_bv` int(25) NOT NULL,
  `ece_1104_re` int(25) NOT NULL,
  `ece_1104_att` int(25) NOT NULL,
  `ece_1104_quiz` int(25) NOT NULL,
  `ece_1104_bv` int(25) NOT NULL,
  `phy_1118_re` int(25) NOT NULL,
  `phy_1118_att` int(25) NOT NULL,
  `phy_1118_quiz` int(25) NOT NULL,
  `phy_1118_bv` int(25) NOT NULL,
  `hum_1118_re` int(25) NOT NULL,
  `hum_1118_att` int(25) NOT NULL,
  `hum_1118_quiz` int(25) NOT NULL,
  `hum_1118_bv` int(25) NOT NULL,
  `ece_1100_score` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `semester_11`
--

INSERT INTO `semester_11` (`roll`, `ece_1101_ct1`, `ece_1101_ct2`, `ece_1101_ct3`, `ece_1101_ct4`, `ece_1101_att`, `ece_1101_exam`, `ece_1103_ct1`, `ece_1103_ct2`, `ece_1103_ct3`, `ece_1103_ct4`, `ece_1103_att`, `ece_1103_exam`, `math_1117_ct1`, `math_1117_ct2`, `math_1117_ct3`, `math_1117_ct4`, `math_1117_att`, `math_1117_exam`, `phy_1117_ct1`, `phy_1117_ct2`, `phy_1117_ct3`, `phy_1117_ct4`, `phy_1117_att`, `phy_1117_exam`, `hum_1117_ct1`, `hum_1117_ct2`, `hum_1117_ct3`, `hum_1117_ct4`, `hum_1117_att`, `hum_1117_exam`, `ece_1102_re`, `ece_1102_att`, `ece_1102_quiz`, `ece_1102_bv`, `ece_1104_re`, `ece_1104_att`, `ece_1104_quiz`, `ece_1104_bv`, `phy_1118_re`, `phy_1118_att`, `phy_1118_quiz`, `phy_1118_bv`, `hum_1118_re`, `hum_1118_att`, `hum_1118_quiz`, `hum_1118_bv`, `ece_1100_score`) VALUES
(1810020, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10),
(1810021, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `semester_12`
--

CREATE TABLE `semester_12` (
  `roll` int(25) NOT NULL,
  `ece_1201_ct1` int(25) NOT NULL,
  `ece_1201_ct2` int(25) NOT NULL,
  `ece_1201_ct3` int(25) NOT NULL,
  `ece_1201_ct4` int(25) NOT NULL,
  `ece_1201_att` int(25) NOT NULL,
  `ece_1201_exam` int(25) NOT NULL,
  `ece_1203_ct1` int(25) NOT NULL,
  `ece_1203_ct2` int(25) NOT NULL,
  `ece_1203_ct3` int(25) NOT NULL,
  `ece_1203_ct4` int(25) NOT NULL,
  `ece_1203_att` int(25) NOT NULL,
  `ece_1203_exam` int(25) NOT NULL,
  `ece_1205_ct1` int(25) NOT NULL,
  `ece_1205_ct2` int(25) NOT NULL,
  `ece_1205_ct3` int(25) NOT NULL,
  `ece_1205_ct4` int(25) NOT NULL,
  `ece_1205_att` int(25) NOT NULL,
  `ece_1205_exam` int(25) NOT NULL,
  `math_1217_ct1` int(25) NOT NULL,
  `math_1217_ct2` int(25) NOT NULL,
  `math_1217_ct3` int(25) NOT NULL,
  `math_1217_ct4` int(25) NOT NULL,
  `math_1217_att` int(25) NOT NULL,
  `math_1217_exam` int(25) NOT NULL,
  `hum_1217_ct1` int(25) NOT NULL,
  `hum_1217_ct2` int(25) NOT NULL,
  `hum_1217_ct3` int(25) NOT NULL,
  `hum_1217_ct4` int(25) NOT NULL,
  `hum_1217_att` int(25) NOT NULL,
  `hum_1217_exam` int(25) NOT NULL,
  `ece_1202_re` int(25) NOT NULL,
  `ece_1202_att` int(25) NOT NULL,
  `ece_1202_quiz` int(25) NOT NULL,
  `ece_1202_bv` int(25) NOT NULL,
  `ece_1204_re` int(25) NOT NULL,
  `ece_1204_att` int(25) NOT NULL,
  `ece_1204_quiz` int(25) NOT NULL,
  `ece_1204_bv` int(25) NOT NULL,
  `ece_1206_re` int(25) NOT NULL,
  `ece_1206_att` int(25) NOT NULL,
  `ece_1206_quiz` int(25) NOT NULL,
  `ece_1206_bv` int(25) NOT NULL,
  `ece_1200_score` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `semester_12`
--

INSERT INTO `semester_12` (`roll`, `ece_1201_ct1`, `ece_1201_ct2`, `ece_1201_ct3`, `ece_1201_ct4`, `ece_1201_att`, `ece_1201_exam`, `ece_1203_ct1`, `ece_1203_ct2`, `ece_1203_ct3`, `ece_1203_ct4`, `ece_1203_att`, `ece_1203_exam`, `ece_1205_ct1`, `ece_1205_ct2`, `ece_1205_ct3`, `ece_1205_ct4`, `ece_1205_att`, `ece_1205_exam`, `math_1217_ct1`, `math_1217_ct2`, `math_1217_ct3`, `math_1217_ct4`, `math_1217_att`, `math_1217_exam`, `hum_1217_ct1`, `hum_1217_ct2`, `hum_1217_ct3`, `hum_1217_ct4`, `hum_1217_att`, `hum_1217_exam`, `ece_1202_re`, `ece_1202_att`, `ece_1202_quiz`, `ece_1202_bv`, `ece_1204_re`, `ece_1204_att`, `ece_1204_quiz`, `ece_1204_bv`, `ece_1206_re`, `ece_1206_att`, `ece_1206_quiz`, `ece_1206_bv`, `ece_1200_score`) VALUES
(1810020, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10),
(1810021, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `semester_21`
--

CREATE TABLE `semester_21` (
  `roll` int(25) NOT NULL,
  `ece_2103_ct1` int(25) NOT NULL,
  `ece_2103_ct2` int(25) NOT NULL,
  `ece_2103_ct3` int(25) NOT NULL,
  `ece_2103_ct4` int(25) NOT NULL,
  `ece_2103_att` int(25) NOT NULL,
  `ece_2103_exam` int(25) NOT NULL,
  `ece_2107_ct1` int(25) NOT NULL,
  `ece_2107_ct2` int(25) NOT NULL,
  `ece_2107_ct3` int(25) NOT NULL,
  `ece_2107_ct4` int(25) NOT NULL,
  `ece_2107_att` int(25) NOT NULL,
  `ece_2107_exam` int(25) NOT NULL,
  `ece_2111_ct1` int(25) NOT NULL,
  `ece_2111_ct2` int(25) NOT NULL,
  `ece_2111_ct3` int(25) NOT NULL,
  `ece_2111_ct4` int(25) NOT NULL,
  `ece_2111_att` int(25) NOT NULL,
  `ece_2111_exam` int(25) NOT NULL,
  `math_2117_ct1` int(25) NOT NULL,
  `math_2117_ct2` int(25) NOT NULL,
  `math_2117_ct3` int(25) NOT NULL,
  `math_2117_ct4` int(25) NOT NULL,
  `math_2117_att` int(25) NOT NULL,
  `math_2117_exam` int(25) NOT NULL,
  `chem_2117_ct1` int(25) NOT NULL,
  `chem_2117_ct2` int(25) NOT NULL,
  `chem_2117_ct3` int(25) NOT NULL,
  `chem_2117_ct4` int(25) NOT NULL,
  `chem_2117_att` int(25) NOT NULL,
  `chem_2117_exam` int(25) NOT NULL,
  `ece_2104_re` int(25) NOT NULL,
  `ece_2104_att` int(25) NOT NULL,
  `ece_2104_quiz` int(25) NOT NULL,
  `ece_2104_bv` int(25) NOT NULL,
  `ece_2108_re` int(25) NOT NULL,
  `ece_2108_att` int(25) NOT NULL,
  `ece_2108_quiz` int(25) NOT NULL,
  `ece_2108_bv` int(25) NOT NULL,
  `chem_2118_re` int(25) NOT NULL,
  `chem_2118_att` int(25) NOT NULL,
  `chem_2118_quiz` int(25) NOT NULL,
  `chem_2118_bv` int(25) NOT NULL,
  `ece_2100_score` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `semester_21`
--

INSERT INTO `semester_21` (`roll`, `ece_2103_ct1`, `ece_2103_ct2`, `ece_2103_ct3`, `ece_2103_ct4`, `ece_2103_att`, `ece_2103_exam`, `ece_2107_ct1`, `ece_2107_ct2`, `ece_2107_ct3`, `ece_2107_ct4`, `ece_2107_att`, `ece_2107_exam`, `ece_2111_ct1`, `ece_2111_ct2`, `ece_2111_ct3`, `ece_2111_ct4`, `ece_2111_att`, `ece_2111_exam`, `math_2117_ct1`, `math_2117_ct2`, `math_2117_ct3`, `math_2117_ct4`, `math_2117_att`, `math_2117_exam`, `chem_2117_ct1`, `chem_2117_ct2`, `chem_2117_ct3`, `chem_2117_ct4`, `chem_2117_att`, `chem_2117_exam`, `ece_2104_re`, `ece_2104_att`, `ece_2104_quiz`, `ece_2104_bv`, `ece_2108_re`, `ece_2108_att`, `ece_2108_quiz`, `ece_2108_bv`, `chem_2118_re`, `chem_2118_att`, `chem_2118_quiz`, `chem_2118_bv`, `ece_2100_score`) VALUES
(1810021, 18, 12, 14, 16, 7, 50, 12, 10, 10, 10, 7, 50, 10, 10, 10, 10, 7, 50, 0, 10, 10, 10, 7, 50, 10, 10, 10, 10, 7, 55, 35, 7, 15, 18, 37, 7, 10, 18, 45, 7, 15, 16, 80),
(1810022, 14, 10, 10, 12, 7, 45, 14, 10, 10, 12, 7, 45, 15, 15, 15, 15, 15, 15, 0, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 80);

-- --------------------------------------------------------

--
-- Table structure for table `semester_22`
--

CREATE TABLE `semester_22` (
  `roll` int(25) NOT NULL,
  `ece_2205_ct1` int(25) NOT NULL,
  `ece_2205_ct2` int(25) NOT NULL,
  `ece_2205_ct3` int(25) NOT NULL,
  `ece_2205_ct4` int(25) NOT NULL,
  `ece_2205_att` int(25) NOT NULL,
  `ece_2205_exam` int(25) NOT NULL,
  `ece_2213_ct1` int(25) NOT NULL,
  `ece_2213_ct2` int(25) NOT NULL,
  `ece_2213_ct3` int(25) NOT NULL,
  `ece_2213_ct4` int(25) NOT NULL,
  `ece_2213_att` int(25) NOT NULL,
  `ece_2213_exam` int(25) NOT NULL,
  `ece_2215_ct1` int(25) NOT NULL,
  `ece_2215_ct2` int(25) NOT NULL,
  `ece_2215_ct3` int(25) NOT NULL,
  `ece_2215_ct4` int(25) NOT NULL,
  `ece_2215_att` int(25) NOT NULL,
  `ece_2215_exam` int(25) NOT NULL,
  `math_2217_ct1` int(25) NOT NULL,
  `math_2217_ct2` int(25) NOT NULL,
  `math_2217_ct3` int(25) NOT NULL,
  `math_2217_ct4` int(25) NOT NULL,
  `math_2217_att` int(25) NOT NULL,
  `math_2217_exam` int(25) NOT NULL,
  `hum_2217_ct1` int(25) NOT NULL,
  `hum_2217_ct2` int(25) NOT NULL,
  `hum_2217_ct3` int(25) NOT NULL,
  `hum_2217_ct4` int(25) NOT NULL,
  `hum_2217_att` int(25) NOT NULL,
  `hum_2217_exam` int(25) NOT NULL,
  `ece_2206_re` int(25) NOT NULL,
  `ece_2206_att` int(25) NOT NULL,
  `ece_2206_quiz` int(25) NOT NULL,
  `ece_2206_bv` int(25) NOT NULL,
  `ece_2214_re` int(25) NOT NULL,
  `ece_2214_att` int(25) NOT NULL,
  `ece_2214_quiz` int(25) NOT NULL,
  `ece_2214_bv` int(25) NOT NULL,
  `ece_2216_re` int(25) NOT NULL,
  `ece_2216_att` int(25) NOT NULL,
  `ece_2216_quiz` int(25) NOT NULL,
  `ece_2216_bv` int(25) NOT NULL,
  `ece_2200_score` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `semester_22`
--

INSERT INTO `semester_22` (`roll`, `ece_2205_ct1`, `ece_2205_ct2`, `ece_2205_ct3`, `ece_2205_ct4`, `ece_2205_att`, `ece_2205_exam`, `ece_2213_ct1`, `ece_2213_ct2`, `ece_2213_ct3`, `ece_2213_ct4`, `ece_2213_att`, `ece_2213_exam`, `ece_2215_ct1`, `ece_2215_ct2`, `ece_2215_ct3`, `ece_2215_ct4`, `ece_2215_att`, `ece_2215_exam`, `math_2217_ct1`, `math_2217_ct2`, `math_2217_ct3`, `math_2217_ct4`, `math_2217_att`, `math_2217_exam`, `hum_2217_ct1`, `hum_2217_ct2`, `hum_2217_ct3`, `hum_2217_ct4`, `hum_2217_att`, `hum_2217_exam`, `ece_2206_re`, `ece_2206_att`, `ece_2206_quiz`, `ece_2206_bv`, `ece_2214_re`, `ece_2214_att`, `ece_2214_quiz`, `ece_2214_bv`, `ece_2216_re`, `ece_2216_att`, `ece_2216_quiz`, `ece_2216_bv`, `ece_2200_score`) VALUES
(1810020, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10),
(1810021, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `semester_31`
--

CREATE TABLE `semester_31` (
  `roll` int(25) NOT NULL,
  `ece_3107_ct1` int(25) NOT NULL,
  `ece_3107_ct2` int(25) NOT NULL,
  `ece_3107_ct3` int(25) NOT NULL,
  `ece_3107_ct4` int(25) NOT NULL,
  `ece_3107_att` int(25) NOT NULL,
  `ece_3107_exam` int(25) NOT NULL,
  `ece_3109_ct1` int(25) NOT NULL,
  `ece_3109_ct2` int(25) NOT NULL,
  `ece_3109_ct3` int(25) NOT NULL,
  `ece_3109_ct4` int(25) NOT NULL,
  `ece_3109_att` int(25) NOT NULL,
  `ece_3109_exam` int(25) NOT NULL,
  `ece_3111_ct1` int(25) NOT NULL,
  `ece_3111_ct2` int(25) NOT NULL,
  `ece_3111_ct3` int(25) NOT NULL,
  `ece_3111_ct4` int(25) NOT NULL,
  `ece_3111_att` int(25) NOT NULL,
  `ece_3111_exam` int(25) NOT NULL,
  `ece_3117_ct1` int(25) NOT NULL,
  `ece_3117_ct2` int(25) NOT NULL,
  `ece_3117_ct3` int(25) NOT NULL,
  `ece_3117_ct4` int(25) NOT NULL,
  `ece_3117_att` int(25) NOT NULL,
  `ece_3117_exam` int(25) NOT NULL,
  `ece_3119_ct1` int(25) NOT NULL,
  `ece_3119_ct2` int(25) NOT NULL,
  `ece_3119_ct3` int(25) NOT NULL,
  `ece_3119_ct4` int(25) NOT NULL,
  `ece_3119_att` int(25) NOT NULL,
  `ece_3119_exam` int(25) NOT NULL,
  `ece_3108_re` int(25) NOT NULL,
  `ece_3108_att` int(25) NOT NULL,
  `ece_3108_quiz` int(25) NOT NULL,
  `ece_3108_bv` int(25) NOT NULL,
  `ece_3112_re` int(25) NOT NULL,
  `ece_3112_att` int(25) NOT NULL,
  `ece_3112_quiz` int(25) NOT NULL,
  `ece_3112_bv` int(25) NOT NULL,
  `ece_3118_re` int(25) NOT NULL,
  `ece_3118_att` int(25) NOT NULL,
  `ece_3118_quiz` int(25) NOT NULL,
  `ece_3118_bv` int(25) NOT NULL,
  `ece_3100_score` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `semester_31`
--

INSERT INTO `semester_31` (`roll`, `ece_3107_ct1`, `ece_3107_ct2`, `ece_3107_ct3`, `ece_3107_ct4`, `ece_3107_att`, `ece_3107_exam`, `ece_3109_ct1`, `ece_3109_ct2`, `ece_3109_ct3`, `ece_3109_ct4`, `ece_3109_att`, `ece_3109_exam`, `ece_3111_ct1`, `ece_3111_ct2`, `ece_3111_ct3`, `ece_3111_ct4`, `ece_3111_att`, `ece_3111_exam`, `ece_3117_ct1`, `ece_3117_ct2`, `ece_3117_ct3`, `ece_3117_ct4`, `ece_3117_att`, `ece_3117_exam`, `ece_3119_ct1`, `ece_3119_ct2`, `ece_3119_ct3`, `ece_3119_ct4`, `ece_3119_att`, `ece_3119_exam`, `ece_3108_re`, `ece_3108_att`, `ece_3108_quiz`, `ece_3108_bv`, `ece_3112_re`, `ece_3112_att`, `ece_3112_quiz`, `ece_3112_bv`, `ece_3118_re`, `ece_3118_att`, `ece_3118_quiz`, `ece_3118_bv`, `ece_3100_score`) VALUES
(1810021, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `semester_32`
--

CREATE TABLE `semester_32` (
  `roll` int(25) NOT NULL,
  `ece_3205_ct1` int(25) NOT NULL,
  `ece_3205_ct2` int(25) NOT NULL,
  `ece_3205_ct3` int(25) NOT NULL,
  `ece_3205_ct4` int(25) NOT NULL,
  `ece_3205_att` int(25) NOT NULL,
  `ece_3205_exam` int(25) NOT NULL,
  `ece_3211_ct1` int(25) NOT NULL,
  `ece_3211_ct2` int(25) NOT NULL,
  `ece_3211_ct3` int(25) NOT NULL,
  `ece_3211_ct4` int(25) NOT NULL,
  `ece_3211_att` int(25) NOT NULL,
  `ece_3211_exam` int(25) NOT NULL,
  `ece_3221_ct1` int(25) NOT NULL,
  `ece_3221_ct2` int(25) NOT NULL,
  `ece_3221_ct3` int(25) NOT NULL,
  `ece_3221_ct4` int(25) NOT NULL,
  `ece_3221_att` int(25) NOT NULL,
  `ece_3221_exam` int(25) NOT NULL,
  `ece_3207_ct1` int(25) NOT NULL,
  `ece_3207_ct2` int(25) NOT NULL,
  `ece_3207_ct3` int(25) NOT NULL,
  `ece_3207_ct4` int(25) NOT NULL,
  `ece_3207_att` int(25) NOT NULL,
  `ece_3207_exam` int(25) NOT NULL,
  `ece_3219_ct1` int(25) NOT NULL,
  `ece_3219_ct2` int(25) NOT NULL,
  `ece_3219_ct3` int(25) NOT NULL,
  `ece_3219_ct4` int(25) NOT NULL,
  `ece_3219_att` int(25) NOT NULL,
  `ece_3219_exam` int(25) NOT NULL,
  `ece_3206_re` int(25) NOT NULL,
  `ece_3206_att` int(25) NOT NULL,
  `ece_3206_quiz` int(25) NOT NULL,
  `ece_3206_bv` int(25) NOT NULL,
  `ece_3212_re` int(25) NOT NULL,
  `ece_3212_att` int(25) NOT NULL,
  `ece_3212_quiz` int(25) NOT NULL,
  `ece_3212_bv` int(25) NOT NULL,
  `ece_3222_re` int(25) NOT NULL,
  `ece_3222_att` int(25) NOT NULL,
  `ece_3222_quiz` int(25) NOT NULL,
  `ece_3222_bv` int(25) NOT NULL,
  `ece_3208_re` int(25) NOT NULL,
  `ece_3208_att` int(25) NOT NULL,
  `ece_3208_quiz` int(25) NOT NULL,
  `ece_3208_bv` int(25) NOT NULL,
  `ece_3220_re` int(25) NOT NULL,
  `ece_3220_att` int(25) NOT NULL,
  `ece_3220_quiz` int(25) NOT NULL,
  `ece_3220_bv` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `semester_32`
--

INSERT INTO `semester_32` (`roll`, `ece_3205_ct1`, `ece_3205_ct2`, `ece_3205_ct3`, `ece_3205_ct4`, `ece_3205_att`, `ece_3205_exam`, `ece_3211_ct1`, `ece_3211_ct2`, `ece_3211_ct3`, `ece_3211_ct4`, `ece_3211_att`, `ece_3211_exam`, `ece_3221_ct1`, `ece_3221_ct2`, `ece_3221_ct3`, `ece_3221_ct4`, `ece_3221_att`, `ece_3221_exam`, `ece_3207_ct1`, `ece_3207_ct2`, `ece_3207_ct3`, `ece_3207_ct4`, `ece_3207_att`, `ece_3207_exam`, `ece_3219_ct1`, `ece_3219_ct2`, `ece_3219_ct3`, `ece_3219_ct4`, `ece_3219_att`, `ece_3219_exam`, `ece_3206_re`, `ece_3206_att`, `ece_3206_quiz`, `ece_3206_bv`, `ece_3212_re`, `ece_3212_att`, `ece_3212_quiz`, `ece_3212_bv`, `ece_3222_re`, `ece_3222_att`, `ece_3222_quiz`, `ece_3222_bv`, `ece_3208_re`, `ece_3208_att`, `ece_3208_quiz`, `ece_3208_bv`, `ece_3220_re`, `ece_3220_att`, `ece_3220_quiz`, `ece_3220_bv`) VALUES
(1810021, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `semester_41`
--

CREATE TABLE `semester_41` (
  `roll` int(25) NOT NULL,
  `ece_4109_ct1` int(25) NOT NULL,
  `ece_4109_ct2` int(25) NOT NULL,
  `ece_4109_ct3` int(25) NOT NULL,
  `ece_4109_ct4` int(25) NOT NULL,
  `ece_4109_att` int(25) NOT NULL,
  `ece_4109_exam` int(25) NOT NULL,
  `ece_4123_ct1` int(25) NOT NULL,
  `ece_4123_ct2` int(25) NOT NULL,
  `ece_4123_ct3` int(25) NOT NULL,
  `ece_4123_ct4` int(25) NOT NULL,
  `ece_4123_att` int(25) NOT NULL,
  `ece_4123_exam` int(25) NOT NULL,
  `ece_4121_ct1` int(25) NOT NULL,
  `ece_4121_ct2` int(25) NOT NULL,
  `ece_4121_ct3` int(25) NOT NULL,
  `ece_4121_ct4` int(25) NOT NULL,
  `ece_4121_att` int(25) NOT NULL,
  `ece_4121_exam` int(25) NOT NULL,
  `ece_41opt1_ct1` int(25) NOT NULL,
  `ece_41opt1_ct2` int(25) NOT NULL,
  `ece_41opt1_ct3` int(25) NOT NULL,
  `ece_41opt1_ct4` int(25) NOT NULL,
  `ece_41opt1_att` int(25) NOT NULL,
  `ece_41opt1_exam` int(25) NOT NULL,
  `ece_41opt2_ct1` int(25) NOT NULL,
  `ece_41opt2_ct2` int(25) NOT NULL,
  `ece_41opt2_ct3` int(25) NOT NULL,
  `ece_41opt2_ct4` int(25) NOT NULL,
  `ece_41opt2_att` int(25) NOT NULL,
  `ece_41opt2_exam` int(25) NOT NULL,
  `ece_4124_re` int(25) NOT NULL,
  `ece_4124_att` int(25) NOT NULL,
  `ece_4124_quiz` int(25) NOT NULL,
  `ece_4124_bv` int(25) NOT NULL,
  `ece_41opt1_re` int(25) NOT NULL,
  `ece_41opt1_attlab` int(25) NOT NULL,
  `ece_41opt1_quiz` int(25) NOT NULL,
  `ece_41opt1_bv` int(25) NOT NULL,
  `ece_41opt2_re` int(25) NOT NULL,
  `ece_41opt2_attlab` int(25) NOT NULL,
  `ece_41opt2_quiz` int(25) NOT NULL,
  `ece_41opt2_bv` int(25) NOT NULL,
  `ece_4100_ind` int(25) NOT NULL,
  `ece_4122_sem` int(25) NOT NULL,
  `ece_4000_pro1` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `semester_41`
--

INSERT INTO `semester_41` (`roll`, `ece_4109_ct1`, `ece_4109_ct2`, `ece_4109_ct3`, `ece_4109_ct4`, `ece_4109_att`, `ece_4109_exam`, `ece_4123_ct1`, `ece_4123_ct2`, `ece_4123_ct3`, `ece_4123_ct4`, `ece_4123_att`, `ece_4123_exam`, `ece_4121_ct1`, `ece_4121_ct2`, `ece_4121_ct3`, `ece_4121_ct4`, `ece_4121_att`, `ece_4121_exam`, `ece_41opt1_ct1`, `ece_41opt1_ct2`, `ece_41opt1_ct3`, `ece_41opt1_ct4`, `ece_41opt1_att`, `ece_41opt1_exam`, `ece_41opt2_ct1`, `ece_41opt2_ct2`, `ece_41opt2_ct3`, `ece_41opt2_ct4`, `ece_41opt2_att`, `ece_41opt2_exam`, `ece_4124_re`, `ece_4124_att`, `ece_4124_quiz`, `ece_4124_bv`, `ece_41opt1_re`, `ece_41opt1_attlab`, `ece_41opt1_quiz`, `ece_41opt1_bv`, `ece_41opt2_re`, `ece_41opt2_attlab`, `ece_41opt2_quiz`, `ece_41opt2_bv`, `ece_4100_ind`, `ece_4122_sem`, `ece_4000_pro1`) VALUES
(1810021, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `semester_42`
--

CREATE TABLE `semester_42` (
  `roll` int(25) NOT NULL,
  `ece_4211_ct1` int(25) NOT NULL,
  `ece_4211_ct2` int(25) NOT NULL,
  `ece_4211_ct3` int(25) NOT NULL,
  `ece_4211_ct4` int(25) NOT NULL,
  `ece_4211_att` int(25) NOT NULL,
  `ece_4211_exam` int(25) NOT NULL,
  `ece_4223_ct1` int(25) NOT NULL,
  `ece_4223_ct2` int(25) NOT NULL,
  `ece_4223_ct3` int(25) NOT NULL,
  `ece_4223_ct4` int(25) NOT NULL,
  `ece_4223_att` int(25) NOT NULL,
  `ece_4223_exam` int(25) NOT NULL,
  `ece_4217_ct1` int(25) NOT NULL,
  `ece_4217_ct2` int(25) NOT NULL,
  `ece_4217_ct3` int(25) NOT NULL,
  `ece_4217_ct4` int(25) NOT NULL,
  `ece_4217_att` int(25) NOT NULL,
  `ece_4217_exam` int(25) NOT NULL,
  `ece_42opt3_ct1` int(25) NOT NULL,
  `ece_42opt3_ct2` int(25) NOT NULL,
  `ece_42opt3_ct3` int(25) NOT NULL,
  `ece_42opt3_ct4` int(25) NOT NULL,
  `ece_42opt3_att` int(25) NOT NULL,
  `ece_42opt3_exam` int(25) NOT NULL,
  `ece_42opt4_ct1` int(25) NOT NULL,
  `ece_42opt4_ct2` int(25) NOT NULL,
  `ece_42opt4_ct3` int(25) NOT NULL,
  `ece_42opt4_ct4` int(25) NOT NULL,
  `ece_42opt4_att` int(25) NOT NULL,
  `ece_42opt4_exam` int(25) NOT NULL,
  `ece_4224_re` int(25) NOT NULL,
  `ece_4224_att` int(25) NOT NULL,
  `ece_4224_quiz` int(25) NOT NULL,
  `ece_4224_bv` int(25) NOT NULL,
  `ece_4218_re` int(25) NOT NULL,
  `ece_4218_att` int(25) NOT NULL,
  `ece_4218_quiz` int(25) NOT NULL,
  `ece_4218_bv` int(25) NOT NULL,
  `ece_42opt3_re` int(25) NOT NULL,
  `ece_42opt3_attlab` int(25) NOT NULL,
  `ece_42opt3_quiz` int(25) NOT NULL,
  `ece_42opt3_bv` int(25) NOT NULL,
  `ece_42opt4_re` int(25) NOT NULL,
  `ece_42opt4_attlab` int(25) NOT NULL,
  `ece_42opt4_quiz` int(25) NOT NULL,
  `ece_42opt4_bv` int(25) NOT NULL,
  `ece_4000_pro2` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `semester_42`
--

INSERT INTO `semester_42` (`roll`, `ece_4211_ct1`, `ece_4211_ct2`, `ece_4211_ct3`, `ece_4211_ct4`, `ece_4211_att`, `ece_4211_exam`, `ece_4223_ct1`, `ece_4223_ct2`, `ece_4223_ct3`, `ece_4223_ct4`, `ece_4223_att`, `ece_4223_exam`, `ece_4217_ct1`, `ece_4217_ct2`, `ece_4217_ct3`, `ece_4217_ct4`, `ece_4217_att`, `ece_4217_exam`, `ece_42opt3_ct1`, `ece_42opt3_ct2`, `ece_42opt3_ct3`, `ece_42opt3_ct4`, `ece_42opt3_att`, `ece_42opt3_exam`, `ece_42opt4_ct1`, `ece_42opt4_ct2`, `ece_42opt4_ct3`, `ece_42opt4_ct4`, `ece_42opt4_att`, `ece_42opt4_exam`, `ece_4224_re`, `ece_4224_att`, `ece_4224_quiz`, `ece_4224_bv`, `ece_4218_re`, `ece_4218_att`, `ece_4218_quiz`, `ece_4218_bv`, `ece_42opt3_re`, `ece_42opt3_attlab`, `ece_42opt3_quiz`, `ece_42opt3_bv`, `ece_42opt4_re`, `ece_42opt4_attlab`, `ece_42opt4_quiz`, `ece_42opt4_bv`, `ece_4000_pro2`) VALUES
(1810021, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10);

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
(28, 'masum', '1810021@student.ruet.ac.bd', 'masece18', 1810009, '673794432f0dc5e009428b4e74cf3a6c', '2nd', 'Chittagong', 'okay', '', 'inactive', '01928374111', '1810009.jfif', '2022-03-25 16:29:59');

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
(1810009, 20, 15, 15, 15, 15),
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
(1810088, 15, 14, 20, 12, 12),
(1810093, 20, 14, 20, 12, 15);

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
-- Indexes for table `semester_11`
--
ALTER TABLE `semester_11`
  ADD PRIMARY KEY (`roll`);

--
-- Indexes for table `semester_12`
--
ALTER TABLE `semester_12`
  ADD PRIMARY KEY (`roll`);

--
-- Indexes for table `semester_21`
--
ALTER TABLE `semester_21`
  ADD PRIMARY KEY (`roll`);

--
-- Indexes for table `semester_22`
--
ALTER TABLE `semester_22`
  ADD PRIMARY KEY (`roll`);

--
-- Indexes for table `semester_31`
--
ALTER TABLE `semester_31`
  ADD PRIMARY KEY (`roll`);

--
-- Indexes for table `semester_32`
--
ALTER TABLE `semester_32`
  ADD PRIMARY KEY (`roll`);

--
-- Indexes for table `semester_41`
--
ALTER TABLE `semester_41`
  ADD PRIMARY KEY (`roll`);

--
-- Indexes for table `semester_42`
--
ALTER TABLE `semester_42`
  ADD PRIMARY KEY (`roll`);

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
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
