-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2018 at 07:34 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `divyeshtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL,
  `authkey` varchar(255) NOT NULL,
  `task_id` int(11) NOT NULL,
  `task_authkey` varchar(55) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_authkey` varchar(55) NOT NULL,
  `comment` varchar(55) NOT NULL,
  `createddate` bigint(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `authkey`, `task_id`, `task_authkey`, `user_id`, `user_authkey`, `comment`, `createddate`) VALUES
(1, 'V4IB4OGy7pV3kv5xg0RJZ2WBLIkJVJcb', 8, 'Cz59wl-Hk8pg-txntwA8TPVgOz8MF032', 0, '', 'asd', 1528461625);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL,
  `authkey` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_authkey` varchar(55) NOT NULL,
  `name` varchar(55) NOT NULL,
  `createddate` bigint(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `authkey`, `user_id`, `user_authkey`, `name`, `createddate`) VALUES
(3, '1yAieKW4QB5gMRcxZ2qxLcadDm04RcfN', 0, '', 'Project1', 1528461648),
(4, 'hbbfLMOw4w4g9ka2zf1ZqTOcYymagzQw', 0, '', 'Project2', 1528461653),
(5, '4CSxSNZq7O6NFQLSLo3PGTcIRbVlKh3T', 0, '', 'Project3', 1528462263),
(6, 'cajKia2aorcGyzR74pVO1PWocgQNW12w', 0, '', 'Project4', 1528479194);

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(11) NOT NULL,
  `authkey` varchar(255) NOT NULL,
  `project_id` int(11) NOT NULL,
  `project_authkey` varchar(55) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_authkey` varchar(55) NOT NULL,
  `name` varchar(55) NOT NULL,
  `createddate` bigint(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `authkey`, `project_id`, `project_authkey`, `user_id`, `user_authkey`, `name`, `createddate`) VALUES
(9, 'ftXjKiBdhZe46OLuwnZPop6UK-Jn-2EA', 4, 'hbbfLMOw4w4g9ka2zf1ZqTOcYymagzQw', 0, '', 'task3', 1528461665),
(10, 'CsW_EFgRG7aEQepRIbHhKyE_u71nBPoz', 4, 'hbbfLMOw4w4g9ka2zf1ZqTOcYymagzQw', 0, '', 'task4', 1528461671),
(11, 'bGOTlWke6L3yNqS9EoxWO4KrLMmtwFAB', 3, '1yAieKW4QB5gMRcxZ2qxLcadDm04RcfN', 0, '', 'task1', 1528461686),
(12, 'Hk4oJfrKy0frrVNuUzqI_A53UfkJYBWA', 3, '1yAieKW4QB5gMRcxZ2qxLcadDm04RcfN', 0, '', 'task2', 1528461690),
(13, 'm-l59sjrgvqo0tHx4rrpb3pnCwSS-wM3', 4, 'hbbfLMOw4w4g9ka2zf1ZqTOcYymagzQw', 0, '', 'Task5', 1528462213);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `authkey` varchar(255) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `createddate` bigint(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `authkey`, `email`, `password`, `first_name`, `last_name`, `createddate`) VALUES
(1, 'asdasdewrwedfgdfggghjgghj', 'test@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Test', 'User', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
