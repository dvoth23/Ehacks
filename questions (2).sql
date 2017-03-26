-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2017 at 05:51 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thestimulusproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(10) NOT NULL,
  `question` varchar(500) NOT NULL,
  `answers` longtext NOT NULL,
  `gotCorrect` int(10) NOT NULL,
  `correctAnswer` text,
  `imageName` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `answers`, `gotCorrect`, `correctAnswer`, `imageName`) VALUES
(19, 'What day is Christmas on?', 'a:4:{i:0;s:13:"December 13th";i:1;s:13:"December 29th";i:2;s:13:"December 25th";i:3;s:12:"December 7th";}', 0, 'December 25th', NULL),
(20, 'What is 3 * 8?', 'a:4:{i:0;s:2:"32";i:1;s:1:"5";i:2;s:2:"16";i:3;s:2:"24";}', 0, '24', NULL),
(21, 'Who is the current President of the United States?', 'a:4:{i:0;s:12:"Barack Obama";i:1;s:12:"Donald Trump";i:2;s:12:"Harry Truman";i:3;s:17:"George Washington";}', 0, 'Donald Trump', NULL),
(40, 'What is the location pictured?', 'a:4:{i:0;s:8:"The city";i:1;s:9:"The beach";i:2;s:15:"The rain forest";i:3;s:11:"The prairie";}', 0, 'The beach', 'beach.jpg'),
(42, 'What animal is pictured?', 'a:4:{i:0;s:4:"Deer";i:1;s:3:"Dog";i:2;s:3:"Cat";i:3;s:5:"Mouse";}', 0, 'Cat', 'CL0101_HERO-Cat-20160818.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
