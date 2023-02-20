-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2023 at 08:24 AM
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

--
-- Dumping data for table `responsibility_center`
--

INSERT INTO `responsibility_center` (`res_center_id`, `res_center_code`, `res_center_name`, `created`) VALUES
(11, 123213, 'Sample2', '2023-02-15 01:58:36'),
(15, 123123, 'ssadsad', '2023-02-15 03:23:38'),
(17, 3123213, 'asdas', '2023-02-15 06:55:48'),
(18, 12321, 'qedwqe', '2023-02-15 06:56:09'),
(21, 21321, 'asdsad', '2023-02-15 07:35:48'),
(23, 234324, 'asdsad', '2023-02-15 07:37:06'),
(27, 32123, 'asdsa', '2023-02-15 07:40:43'),
(28, 13212312, 'sadsad', '2023-02-15 07:40:48'),
(29, 213213, 'asdsad', '2023-02-15 07:40:51');

-- --------------------------------------------------------

--
-- Table structure for table `type_of_activity`
--

CREATE TABLE `type_of_activity` (
  `type_act_id` int(20) NOT NULL,
  `type_act_name` varchar(100) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `type_of_activity`
--

INSERT INTO `type_of_activity` (`type_act_id`, `type_act_name`, `created`) VALUES
(17, 'Regular Monthly Meeting', '2023-02-16 01:28:18'),
(18, 'Regular Monthly COOP Visit', '2023-02-16 01:28:41'),
(19, 'Job Vacancy Solicitation', '2023-02-16 01:29:08'),
(20, 'Regular Monthly Project Monitoring', '2023-02-16 01:29:29'),
(21, 'Training', '2023-02-16 01:29:37');

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
-- Dumping data for table `type_of_monitoring`
--

INSERT INTO `type_of_monitoring` (`type_mon_id`, `type_mon_name`, `created`) VALUES
(7, 'Cooperative & Livelihood', '2023-02-16 06:48:24'),
(8, 'Employment', '2023-02-16 06:48:35'),
(9, 'Manpower Dev\'t', '2023-02-16 06:48:50');

-- --------------------------------------------------------

--
-- Table structure for table `under_type_of_activity`
--

CREATE TABLE `under_type_of_activity` (
  `under_type_act_id` int(20) NOT NULL,
  `typ_ac_id` int(25) NOT NULL,
  `under_type_act_name` varchar(50) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `under_type_of_activity`
--

INSERT INTO `under_type_of_activity` (`under_type_act_id`, `typ_ac_id`, `under_type_act_name`, `created`) VALUES
(23, 21, 'Skill', '2023-02-16 04:12:06'),
(24, 21, 'MDT', '2023-02-16 04:12:11'),
(25, 21, 'CD', '2023-02-16 04:12:16'),
(26, 21, 'PRS', '2023-02-16 04:12:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(25) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `created`) VALUES
(1, 'sample', '$2y$10$UWICLmgH/NNYuILOCxa4.ewoeZYuzvSyBgYKAJN.xISSF4/WcigEO', '2023-02-15 09:34:25');

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
-- Indexes for table `under_type_of_activity`
--
ALTER TABLE `under_type_of_activity`
  ADD PRIMARY KEY (`under_type_act_id`),
  ADD KEY `typ_ac_id` (`typ_ac_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `responsibility_center`
--
ALTER TABLE `responsibility_center`
  MODIFY `res_center_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `type_of_activity`
--
ALTER TABLE `type_of_activity`
  MODIFY `type_act_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `type_of_monitoring`
--
ALTER TABLE `type_of_monitoring`
  MODIFY `type_mon_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `under_type_of_activity`
--
ALTER TABLE `under_type_of_activity`
  MODIFY `under_type_act_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `under_type_of_activity`
--
ALTER TABLE `under_type_of_activity`
  ADD CONSTRAINT `under_type_of_activity_ibfk_1` FOREIGN KEY (`typ_ac_id`) REFERENCES `type_of_activity` (`type_act_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
