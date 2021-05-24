-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2021 at 09:25 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project21`
--
CREATE DATABASE IF NOT EXISTS `project21` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `project21`;

-- --------------------------------------------------------

--
-- Table structure for table `animation`
--

DROP TABLE IF EXISTS `animation`;
CREATE TABLE `animation` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `Location` text NOT NULL,
  `Duration` text NOT NULL,
  `Contact` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `animation`
--

INSERT INTO `animation` (`id`, `title`, `content`, `Location`, `Duration`, `Contact`) VALUES
(19, '3D Short Film ', 'This film is about ... ', 'Pune ', '1 month ', '8850818771'),
(20, '2D-ANIMATION ', 'This film is going to be about .... description of the project ', 'Pune ', '22 days ', 'Contact');

-- --------------------------------------------------------

--
-- Table structure for table `digital art`
--

DROP TABLE IF EXISTS `digital art`;
CREATE TABLE `digital art` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `Location` text NOT NULL,
  `Duration` text NOT NULL,
  `Contact` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `films`
--

DROP TABLE IF EXISTS `films`;
CREATE TABLE `films` (
  `id` int(11) NOT NULL,
  `title` varchar(11) NOT NULL,
  `content` text NOT NULL,
  `Location` int(11) NOT NULL,
  `Duration` int(11) NOT NULL,
  `Contact` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `image_text` text NOT NULL,
  `Posted_name` varchar(100) NOT NULL,
  `Email` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `image_text`, `Posted_name`, `Email`) VALUES
(110, 'ART1.jpg', '', '', ' '),
(114, '', 'This is a sample post ', 'Jayam ', 'jayam@yahoo.com  '),
(115, 'samp3.jpg', 'This is a sample post ', 'Jayam ', 'jayam@yahoo.com  ');

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

DROP TABLE IF EXISTS `music`;
CREATE TABLE `music` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `Location` text NOT NULL,
  `Duration` text NOT NULL,
  `Contact` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `user_name`, `email`, `password`, `date`) VALUES
(1, 9223372036854775807, 'Sai Rishik ', 'sairamrishik@gmail.com', '123', '2021-05-14 10:38:13'),
(2, 86108239055, 'Kshitij ', 'kshitij@yahoo.com', '123', '2021-05-14 19:04:38'),
(3, 201896801626949236, 'Jayam ', 'jayam@yahoo.com', 'q123', '2021-05-14 19:05:22');

-- --------------------------------------------------------

--
-- Table structure for table `voice`
--

DROP TABLE IF EXISTS `voice`;
CREATE TABLE `voice` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `Location` text NOT NULL,
  `Duration` text NOT NULL,
  `Contact` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `voice`
--

INSERT INTO `voice` (`id`, `title`, `content`, `Location`, `Duration`, `Contact`) VALUES
(0, 'Movie Dubbing ', 'We have an opening for movie dubbing ', 'Pune ', '12days ', '8850818771 ');

-- --------------------------------------------------------

--
-- Table structure for table `writer`
--

DROP TABLE IF EXISTS `writer`;
CREATE TABLE `writer` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `Location` text NOT NULL,
  `Duration` text NOT NULL,
  `Contact` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animation`
--
ALTER TABLE `animation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `title` (`title`);

--
-- Indexes for table `digital art`
--
ALTER TABLE `digital art`
  ADD PRIMARY KEY (`id`),
  ADD KEY `title` (`title`);

--
-- Indexes for table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`),
  ADD KEY `title` (`title`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image` (`image`);

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`id`),
  ADD KEY `title` (`title`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_name` (`user_name`),
  ADD KEY `email` (`email`),
  ADD KEY `date` (`date`);

--
-- Indexes for table `voice`
--
ALTER TABLE `voice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `title` (`title`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animation`
--
ALTER TABLE `animation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `films`
--
ALTER TABLE `films`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
