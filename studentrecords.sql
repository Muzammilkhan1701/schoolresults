-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2024 at 10:25 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentrecords`
--

-- --------------------------------------------------------

--
-- Table structure for table `finalresults`
--

CREATE TABLE `finalresults` (
  `id` int(11) NOT NULL,
  `term1_id` int(11) NOT NULL,
  `term2_id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `Percentage` double(11,2) NOT NULL,
  `Grade` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `rollno` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `MothersName` varchar(255) NOT NULL,
  `class` varchar(5) NOT NULL,
  `year` varchar(10) NOT NULL DEFAULT '2024-25'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `term1`
--

CREATE TABLE `term1` (
  `id` int(11) NOT NULL,
  `Student_id` int(11) NOT NULL,
  `English` int(11) NOT NULL,
  `Hindi` int(11) NOT NULL,
  `Marathi` int(11) NOT NULL,
  `Maths` int(11) NOT NULL,
  `EVS` int(11) NOT NULL,
  `Total` int(11) NOT NULL,
  `Percentage` double(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `term2`
--

CREATE TABLE `term2` (
  `id` int(11) NOT NULL,
  `Student_id` int(11) NOT NULL,
  `term1_id` int(11) NOT NULL,
  `English` int(11) NOT NULL,
  `Hindi` int(11) NOT NULL,
  `Marathi` int(11) NOT NULL,
  `Maths` int(11) NOT NULL,
  `EVS` int(11) NOT NULL,
  `Total` int(11) NOT NULL,
  `Percentage` double(11,2) NOT NULL,
  `Grade` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `finalresults`
--
ALTER TABLE `finalresults`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Uni` (`rollno`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `term1`
--
ALTER TABLE `term1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `term2`
--
ALTER TABLE `term2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `finalresults`
--
ALTER TABLE `finalresults`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `term1`
--
ALTER TABLE `term1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `term2`
--
ALTER TABLE `term2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
