-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2018 at 07:16 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sims`
--

-- --------------------------------------------------------

--
-- Table structure for table `board_member_information`
--

CREATE TABLE `board_member_information` (
  `email` varchar(40) NOT NULL,
  `name` varchar(30) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `department` varchar(40) NOT NULL,
  `hall_designation` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `board_member_information`
--

INSERT INTO `board_member_information` (`email`, `name`, `designation`, `department`, `hall_designation`) VALUES
('sabita@yahoo.com', 'Sabita Rahman', 'Professor', 'Microbiology And Microbiology', 'Provost'),
('sumayashammee@yahoo.com', 'Sumaya ', 'Professor', 'IIT', 'Provost');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `notice_id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `filePath` varchar(400) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`notice_id`, `name`, `filePath`, `file`) VALUES
(28, 'UploadCheck', '../notice/sumaya.pdf', ''),
(29, 'UploadCheck', 'sumaya.pdf', ''),
(30, 'UploadCheck2', '../notice/DesignPatterns.pdf', ''),
(31, 'bssesyllabusforjdsakjmfs', '1-s2.0-S1877050917328673-main.pdf', '');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(11) NOT NULL,
  `file` varchar(100) NOT NULL,
  `title` varchar(256) NOT NULL,
  `filepath` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `name` varchar(40) NOT NULL,
  `regNo` varchar(20) NOT NULL,
  `department` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `userId` varchar(20) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `regNo`, `department`, `email`, `userId`, `password`) VALUES
('Sumaya ', '2015718015', 'Pharmacy', 'sumayashammee@yahoo.com', 'Shammy', 'sims123'),
('Imam', '201571801522', 'Software Engineering', 'imam@yahoo.com', 'Imam', '$2y$10$D0Q3OSF/doT.Qs3CjG59VOK4i9ZFxP4HRMXsvzQD.VvEdIZDSGpQO'),
('Afia', '2015718016', 'Pharmacy', 'afia@yahoo.com', 'Sajeeda', '$2y$10$KP3sWEOHXM.YH.D5m2zXCeMAfauoS/ZkLmmOSj9C4Y.MpAk/zM/Ku'),
('Rasna', '2015718017', 'Software Engineering', 'aka@yahoo.com', 'Aka', '$2y$10$mHFc1fOYCIxlAbudPlYR4Osd0FQnUMJ3r71ydIr3cxr.diX2mHOku'),
('Suravi', '2015718018', 'Genetic Engineering', 'nipa@yahoo.com', 'Nipa', '$2y$10$j38WUfJpigOxXpKbABy8/eAR9vU7xhA4yiXKHXpXmeVSP0yEM6pbm'),
('Shihab', '2015718019', 'Genetic Engineering', 'shihab@yahoo.com', 'Shayakh', '$2y$10$3KcXUoFdIsdMM2vsNBIYNeMUyoww6AZmK521m48Ja/RVlmW8EbpUO'),
('Nahiyan', '2015814658', '', 'nehan@yahoo.com', 'Nehan', '$2y$10$Bdwaq373C7XEz5FZ.ZmUDuaqkx3d3ZprylJS/Z6KFIN0UL.sYppDi');

-- --------------------------------------------------------

--
-- Table structure for table `studentfullinformation`
--

CREATE TABLE `studentfullinformation` (
  `id` int(5) NOT NULL,
  `regNo` varchar(20) NOT NULL,
  `name` varchar(40) NOT NULL,
  `session` varchar(10) NOT NULL,
  `dept` varchar(40) NOT NULL,
  `classRoll` varchar(10) NOT NULL,
  `status` varchar(15) NOT NULL,
  `presentAddress` varchar(100) NOT NULL,
  `permanentAddress` varchar(100) NOT NULL,
  `l_contactNumber` varchar(15) NOT NULL,
  `bloodGroup` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentfullinformation`
--

INSERT INTO `studentfullinformation` (`id`, `regNo`, `name`, `session`, `dept`, `classRoll`, `status`, `presentAddress`, `permanentAddress`, `l_contactNumber`, `bloodGroup`) VALUES
(12, '2015718015', 'Sumaya Akther Shammy', '2015-2016', 'IIT', '0821', 'Resident', 'Kabi Sufia Kamal Hall, University of Dhaka, Dhaka-1000', 'Vill: GobindaNagar Post: Thakurgaon District: Thakurgaon', '', 'B(+ve)');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(8) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` enum('admin','board_member','student') NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `user_type`) VALUES
(1, 'Shammy', '$2y$10$KatuAFZo2aU4Kz9QYGhcxerPIK4/YEXNMOAoPL6mvUKgMBNBS7DDe', 'admin'),
(2, 'Sumaya', '$2y$10$kVDIQnRL0U7jySMPMvSlbOqBO0/FiU6g8jacDnwqEzeM7UWCrkXUm', 'board_member'),
(6, 'sabita', '$2y$10$p5oA.PdUEUdp6yhdYALbrO.fD7AE5QL2qQmJETEkds3cenxss/dCq', 'board_member'),
(7, 'Aka', '$2y$10$/wuQU4iZQJehc4TV72RhAOlo7Llo7D47gQQ8aJJH6MmMx9m8Qdjbm', 'board_member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `board_member_information`
--
ALTER TABLE `board_member_information`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`regNo`),
  ADD UNIQUE KEY `userId` (`userId`);

--
-- Indexes for table `studentfullinformation`
--
ALTER TABLE `studentfullinformation`
  ADD PRIMARY KEY (`regNo`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `notice_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `studentfullinformation`
--
ALTER TABLE `studentfullinformation`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
