-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 29, 2018 at 04:02 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medinfo`
--
CREATE DATABASE IF NOT EXISTS `medinfo` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `medinfo`;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email_address`, `phone_number`, `message`) VALUES
(1, 'mudit', 'mudit@gmail.com', '9013319958', 'aaa'),
(2, 'mudit', 'mudit@gmail.com', '9013319958', 'bbb'),
(3, 'aa', 'ram@gmail.com', '12345', ''),
(4, 'aa', 'ram@gmail.com', '12345', ''),
(5, 'aa', 'ram@gmail.com', '12345', ''),
(6, 'muidt', 'mfwhiu@GMAIL.COM', '8454757', ''),
(7, 'muidt', 'mfwhiu@GMAIL.COM', '12345', 'sdsdsadsa'),
(8, 'aa', 'ram@gmail.com', '8454757', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

CREATE TABLE `disease` (
  `patientID` int(10) UNSIGNED NOT NULL,
  `disease` varchar(30) NOT NULL DEFAULT '',
  `treatment` varchar(30) NOT NULL DEFAULT '',
  `doctorID` int(10) UNSIGNED NOT NULL,
  `appdate` date NOT NULL,
  `updateddate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disease`
--

INSERT INTO `disease` (`patientID`, `disease`, `treatment`, `doctorID`, `appdate`, `updateddate`) VALUES
(1000, 'viral', 'crocin', 1, '0000-00-00', '2018-04-18 22:16:35'),
(1000, 'cough', 'honey', 11, '0000-00-00', '2018-04-18 22:16:35'),
(1001, 'headache', 'disprin', 7, '0000-00-00', '2018-04-18 22:16:35'),
(1001, 'dengue', 'papaya leaf', 4, '0000-00-00', '2018-04-18 22:16:35'),
(1001, 'bodypain', 'combiflame', 1, '0000-00-00', '2018-04-18 22:16:35'),
(1002, 'viral ', 'conbiflame ', 10, '0000-00-00', '2018-04-18 22:16:35'),
(1002, 'headace', 'desprin', 10, '0000-00-00', '2018-04-18 22:16:35'),
(1004, 'dengue', 'coconut water', 4, '0000-00-00', '2018-04-18 22:16:35'),
(1005, 'skin problem', 'cream', 2, '0000-00-00', '2018-04-18 22:16:35'),
(1000, 'viral', 'crocin', 1, '0000-00-00', '2018-04-18 22:16:35'),
(1000, 'cough', 'honey', 11, '0000-00-00', '2018-04-18 22:16:35'),
(1001, 'headache', 'disprin', 7, '0000-00-00', '2018-04-18 22:16:35'),
(1001, 'dengue', 'papaya leaf', 4, '0000-00-00', '2018-04-18 22:16:35'),
(1001, 'bodypain', 'combiflame', 1, '0000-00-00', '2018-04-18 22:16:35'),
(1002, 'viral ', 'conbiflame ', 10, '0000-00-00', '2018-04-18 22:16:35'),
(1002, 'headace', 'desprin', 10, '0000-00-00', '2018-04-18 22:16:35'),
(1004, 'dengue', 'coconut water', 4, '0000-00-00', '2018-04-18 22:16:35'),
(1005, 'skin problem', 'cream', 2, '0000-00-00', '2018-04-18 22:16:35'),
(1000, 'viral', 'crocin', 1, '0000-00-00', '2018-04-18 22:16:35'),
(1000, 'cough', 'honey', 11, '0000-00-00', '2018-04-18 22:16:35'),
(1001, 'headache', 'disprin', 7, '0000-00-00', '2018-04-18 22:16:35'),
(1001, 'dengue', 'papaya leaf', 4, '0000-00-00', '2018-04-18 22:16:35'),
(1001, 'bodypain', 'combiflame', 1, '0000-00-00', '2018-04-18 22:16:35'),
(1002, 'viral ', 'conbiflame ', 10, '0000-00-00', '2018-04-18 22:16:35'),
(1002, 'headace', 'desprin', 10, '0000-00-00', '2018-04-18 22:16:35'),
(1004, 'dengue', 'coconut water', 4, '0000-00-00', '2018-04-18 22:16:35'),
(1005, 'skin problem', 'cream', 2, '0000-00-00', '2018-04-18 22:16:35'),
(1000, 'viral', 'crocin', 1, '0000-00-00', '2018-04-18 22:16:35'),
(1000, 'cough', 'honey', 11, '0000-00-00', '2018-04-18 22:16:35'),
(1001, 'headache', 'disprin', 7, '0000-00-00', '2018-04-18 22:16:35'),
(1001, 'dengue', 'papaya leaf', 4, '0000-00-00', '2018-04-18 22:16:35'),
(1001, 'bodypain', 'combiflame', 1, '0000-00-00', '2018-04-18 22:16:35'),
(1002, 'viral ', 'conbiflame ', 10, '0000-00-00', '2018-04-18 22:16:35'),
(1002, 'headace', 'desprin', 10, '0000-00-00', '2018-04-18 22:16:35'),
(1004, 'dengue', 'coconut water', 4, '0000-00-00', '2018-04-18 22:16:35'),
(1005, 'skin problem', 'cream', 2, '0000-00-00', '2018-04-18 22:16:35');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `doctorID` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL DEFAULT '',
  `email` varchar(30) NOT NULL DEFAULT '',
  `password` varchar(100) NOT NULL,
  `doctorRefNumber` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `specialization` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`doctorID`, `name`, `email`, `password`, `doctorRefNumber`, `address`, `specialization`) VALUES
(1, 'xyz', 'xyz@gmail.com', '4V\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '3456345', '657 gurgaon', 'viral '),
(2, 'vbn', 'vbn@gmail.com', '123456\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '3456345', '657 gurgaon', 'skin specialist '),
(3, 'ded', 'ded@gmail.com', '123456\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '3456345', '657 gurgaon', 'viral'),
(4, 'anb', 'anb@gmail.com', '123456\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '3456345', '657 gurgaon', 'dengue'),
(6, 'mit', 'mit@gmail.com', '123456\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '3456345', '657 gurgaon', 'dengue'),
(7, 'bcd', 'bcd@gmail.com', '123456\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '3456345', '657 gurgaon', 'headache'),
(8, 'mnb', 'mnb@gmail.com', '123456\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '3456345', '657 gurgaon', 'bodypain'),
(9, 'vbc', 'vbc@gmail.com', '123456\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '3456345', '657 gurgaon', 'bodypain'),
(10, 'mjn', 'mjn@gmail.com', '123456\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '3456345', '657 gurgaon', 'headache'),
(11, 'hgj', 'hgj@gmail.com', '123456\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '3456345', '657 gurgaon', 'ent'),
(12, 'dd', 'dd@gmail.com', 'DD', 'DD', 'DD', ''),
(13, 'muidt', 'mfwhiu@GMAIL.COM', '111', '123456', '143 deepali pitam pura', 'heart specialization');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `hospitalID` int(10) UNSIGNED NOT NULL,
  `hospitalName` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hospitalID`, `hospitalName`, `address`) VALUES
(1, 'max', 'shalimar bagh delhi'),
(1, 'max', 'shalimar bagh delhi'),
(2, 'medanta', 'gurgaon'),
(0, '', ''),
(2, 'medanta', 'gurgaon');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`id`, `name`, `address`) VALUES
(1, 'government jain medical store', 'deepali pitam pura '),
(2, 'gupta generic medical store', 'harinagar  , '),
(3, 'krish generic medical store ', 'rohini sector 11 , new delhi '),
(4, 'hariom generic medical store', 'rohini 12 , new delhi '),
(3, 'krish generic medical store ', 'rohini sector 11 , new delhi '),
(4, 'hariom generic medical store', 'rohini 12 , new delhi ');

-- --------------------------------------------------------

--
-- Table structure for table `patientid`
--

CREATE TABLE `patientid` (
  `PatientID` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientid`
--

INSERT INTO `patientid` (`PatientID`) VALUES
(1000),
(1001),
(1002),
(1004),
(1005);

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `patientID` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL DEFAULT '',
  `email` varchar(30) NOT NULL DEFAULT '',
  `password` varchar(100) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `bloodGroup` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`patientID`, `name`, `email`, `password`, `dateOfBirth`, `address`, `bloodGroup`) VALUES
(1000, 'qwe', 'qwe@gmail.com', '4V\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '1995-04-04', '143 deepali pitam pura ', 'ab+'),
(1001, 'asd', 'asd@gmail.com', 'Eg\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '1996-04-03', '546 pitampura new delhi', 'a+'),
(1002, 'rty', 'rty@gmail.com', '#E\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '1996-07-08', '5789 pitampura new delhi', 'b+'),
(1004, 'yut', 'yut@gmail.com', '456\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '1996-07-08', '123456 pitampura new delhi', 'b+'),
(1005, 'bnm', 'bnm@gmail.com', '456\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '1996-07-08', '123456 pitampura new delhi', 'b+'),
(1006, 'pp', 'pp@gmail.com', 'pp', '0000-00-00', 'pp', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`doctorID`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`patientID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `doctorID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `patientID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1007;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
