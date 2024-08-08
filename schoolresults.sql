-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2024 at 10:32 AM
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
-- Database: `schoolresults`
--

-- --------------------------------------------------------

--
-- Table structure for table `finalresults`
--

CREATE TABLE `finalresults` (
  `id` int(11) NOT NULL,
  `Student_id` int(11) NOT NULL,
  `term1_total` int(11) NOT NULL,
  `term2_total` int(11) NOT NULL,
  `final_total` int(11) NOT NULL,
  `final_percentage` decimal(11,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `finalresults`
--

INSERT INTO `finalresults` (`id`, `Student_id`, `term1_total`, `term2_total`, `final_total`, `final_percentage`) VALUES
(1, 0, 99, 225, 324, 162),
(2, 0, 99, 225, 324, 162),
(3, 0, 99, 225, 324, 162),
(4, 0, 99, 225, 324, 162);

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

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `rollno`, `name`, `MothersName`, `class`, `year`) VALUES
(1, 101, 'riya', 'k', '4', '2024'),
(2, 102, 'asim', 'm', '4', '2024'),
(3, 105, 'Rukshar khan', 'k', '4', '2024');

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
  `total` int(11) NOT NULL,
  `percentage` decimal(11,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `term1`
--

INSERT INTO `term1` (`id`, `Student_id`, `English`, `Hindi`, `Marathi`, `Maths`, `EVS`, `total`, `percentage`) VALUES
(4, 1, 20, 19, 20, 20, 20, 99, 20),
(5, 2, 45, 45, 10, 50, 60, 210, 42),
(6, 3, 30, 30, 30, 30, 29, 149, 30),
(7, 1, 30, 35, 20, 80, 60, 225, 45);

-- --------------------------------------------------------

--
-- Table structure for table `term2`
--

CREATE TABLE `term2` (
  `id` int(11) NOT NULL,
  `Student_id` int(11) NOT NULL,
  `English` varchar(255) NOT NULL,
  `Hindi` varchar(255) NOT NULL,
  `Marathi` varchar(225) NOT NULL,
  `Maths` varchar(255) NOT NULL,
  `EVS` varchar(255) NOT NULL,
  `total` int(11) NOT NULL,
  `percentage` decimal(11,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `term2`
--

INSERT INTO `term2` (`id`, `Student_id`, `English`, `Hindi`, `Marathi`, `Maths`, `EVS`, `total`, `percentage`) VALUES
(1, 1, '30', '35', '20', '80', '60', 225, 45),
(2, 2, '10', '20', '30', '40', '50', 150, 30);

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
  ADD UNIQUE KEY `rollno` (`rollno`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `term1`
--
ALTER TABLE `term1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `term2`
--
ALTER TABLE `term2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
