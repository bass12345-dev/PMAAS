-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2023 at 10:01 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_monitoring`
--

-- --------------------------------------------------------

--
-- Table structure for table `responsibility_center`
--

CREATE TABLE `responsibility_center` (
  `res_center_id` int(20) NOT NULL,
  `res_center_code` int(20) NOT NULL,
  `res_center_name` varchar(100) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `type_of_activity`
--

CREATE TABLE `type_of_activity` (
  `type_act_id` int(20) NOT NULL,
  `type_act_name` varchar(100) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `type_of_monitoring`
--

CREATE TABLE `type_of_monitoring` (
  `type_mon_id` int(20) NOT NULL,
  `type_mon_name` varchar(100) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `responsibility_center`
--
ALTER TABLE `responsibility_center`
  ADD PRIMARY KEY (`res_center_id`);

--
-- Indexes for table `type_of_activity`
--
ALTER TABLE `type_of_activity`
  ADD PRIMARY KEY (`type_act_id`);

--
-- Indexes for table `type_of_monitoring`
--
ALTER TABLE `type_of_monitoring`
  ADD PRIMARY KEY (`type_mon_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `responsibility_center`
--
ALTER TABLE `responsibility_center`
  MODIFY `res_center_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `type_of_activity`
--
ALTER TABLE `type_of_activity`
  MODIFY `type_act_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `type_of_monitoring`
--
ALTER TABLE `type_of_monitoring`
  MODIFY `type_mon_id` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
