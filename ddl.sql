-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2021 at 09:39 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatroom`
--
CREATE DATABASE IF NOT EXISTS `chatroom` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `chatroom`;

-- --------------------------------------------------------

--
-- Table structure for table `chatrooms`
--

CREATE TABLE `chatrooms` (
  `chatroom_id` varchar(8) NOT NULL,
  `chatroom_name` varchar(40) NOT NULL,
  `chatroom_description` varchar(50) NOT NULL,
  `setup_date` datetime NOT NULL DEFAULT current_timestamp(),
  `chatroom_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `group_meetings`
--

CREATE TABLE `group_meetings` (
  `group_meeting_id` varchar(8) NOT NULL,
  `group_meeting_name` varchar(25) NOT NULL,
  `group_meeting_start_date` date NOT NULL,
  `group_meeting_end_date` date NOT NULL,
  `group_meeting_start_time` time NOT NULL,
  `group_meeting_end_time` time NOT NULL,
  `group_meeting_chair_person` varchar(25) NOT NULL,
  `chatroom_id` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` varchar(8) NOT NULL,
  `student_name` varchar(25) NOT NULL,
  `student_email` varchar(25) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `program_enrolled` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `students_chatrooms`
--

CREATE TABLE `students_chatrooms` (
  `student_id` varchar(8) NOT NULL,
  `chatroom_id` varchar(8) NOT NULL,
  `date_joined` datetime NOT NULL DEFAULT current_timestamp(),
  `roles` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `students_group_meetings`
--

CREATE TABLE `students_group_meetings` (
  `student_id` varchar(8) NOT NULL,
  `group_meeting_id` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatrooms`
--
ALTER TABLE `chatrooms`
  ADD PRIMARY KEY (`chatroom_id`);

--
-- Indexes for table `group_meetings`
--
ALTER TABLE `group_meetings`
  ADD PRIMARY KEY (`group_meeting_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `students_chatrooms`
--
ALTER TABLE `students_chatrooms`
  ADD PRIMARY KEY (`student_id`,`chatroom_id`);

--
-- Indexes for table `students_group_meetings`
--
ALTER TABLE `students_group_meetings`
  ADD PRIMARY KEY (`student_id`,`group_meeting_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
