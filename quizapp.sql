-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2019 at 01:56 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `question_bank`
--

CREATE TABLE `question_bank` (
  `question_id` varchar(3) COLLATE utf8_bin NOT NULL,
  `question` mediumtext COLLATE utf8_bin NOT NULL,
  `option_A` text COLLATE utf8_bin NOT NULL,
  `option_B` text COLLATE utf8_bin NOT NULL,
  `option_C` text COLLATE utf8_bin NOT NULL,
  `option_D` text COLLATE utf8_bin NOT NULL,
  `option_E` text COLLATE utf8_bin NOT NULL,
  `answer` varchar(1) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `question_bank`
--

INSERT INTO `question_bank` (`question_id`, `question`, `option_A`, `option_B`, `option_C`, `option_D`, `option_E`, `answer`) VALUES
('1', 'Tes123', 'aaaa', 'bbbb', 'cccc', 'dddd', 'eeee', 'a'),
('2', 'soalke2', 'aa', 'bb', 'cc', 'dd', 'ee', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `student_answer`
--

CREATE TABLE `student_answer` (
  `student_id` varchar(11) COLLATE utf8_bin NOT NULL,
  `question_id` varchar(3) COLLATE utf8_bin NOT NULL,
  `answer` varchar(1) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `student_answer`
--

INSERT INTO `student_answer` (`student_id`, `question_id`, `answer`) VALUES
('111111111', '1', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `test_history`
--

CREATE TABLE `test_history` (
  `date` date NOT NULL,
  `topic` text COLLATE utf8_bin,
  `attended` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `student_id` varchar(11) COLLATE utf8_bin NOT NULL,
  `student_name` text COLLATE utf8_bin NOT NULL,
  `pass` varchar(11) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`student_id`, `student_name`, `pass`) VALUES
('111111111', 'Hulu', 'xyzabc'),
('123456789', 'Bejo', 'abcdef');

-- --------------------------------------------------------

--
-- Table structure for table `user_score`
--

CREATE TABLE `user_score` (
  `student_id` varchar(11) COLLATE utf8_bin NOT NULL,
  `score` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question_bank`
--
ALTER TABLE `question_bank`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `student_answer`
--
ALTER TABLE `student_answer`
  ADD KEY `Question ID` (`question_id`),
  ADD KEY `Student ID` (`student_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `user_score`
--
ALTER TABLE `user_score`
  ADD PRIMARY KEY (`student_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student_answer`
--
ALTER TABLE `student_answer`
  ADD CONSTRAINT `Question ID` FOREIGN KEY (`question_id`) REFERENCES `question_bank` (`question_id`),
  ADD CONSTRAINT `Student ID` FOREIGN KEY (`student_id`) REFERENCES `user` (`student_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
