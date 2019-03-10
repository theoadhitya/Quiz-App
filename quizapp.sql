-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2019 at 12:50 PM
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
  `topic` text COLLATE utf8_bin NOT NULL,
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

INSERT INTO `question_bank` (`topic`, `question_id`, `question`, `option_A`, `option_B`, `option_C`, `option_D`, `option_E`, `answer`) VALUES
('x', '1', 'Tes123', 'aaaa', 'bbbb', 'cccc', 'dddd', 'eeee', 'a'),
('x', '2', 'soalke2', 'aa', 'bb', 'cc', 'dd', 'ee', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `student_answer`
--

CREATE TABLE `student_answer` (
  `test_id` varchar(3) COLLATE utf8_bin NOT NULL,
  `student_id` varchar(11) COLLATE utf8_bin NOT NULL,
  `question_id` varchar(3) COLLATE utf8_bin NOT NULL,
  `answer` varchar(1) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `student_answer`
--

INSERT INTO `student_answer` (`test_id`, `student_id`, `question_id`, `answer`) VALUES
('1', '111111111', '1', 'a'),
('1', '111111111', '1', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `test_history`
--

CREATE TABLE `test_history` (
  `date` date NOT NULL,
  `test_id` text COLLATE utf8_bin NOT NULL,
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
  `test_id` varchar(3) COLLATE utf8_bin NOT NULL,
  `student_id` varchar(11) COLLATE utf8_bin NOT NULL,
  `total_question` int(3) NOT NULL,
  `correct_answer` int(3) NOT NULL,
  `score` float(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user_score`
--

INSERT INTO `user_score` (`test_id`, `student_id`, `total_question`, `correct_answer`, `score`) VALUES
('1', '111111111', 50, 37, 74.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`student_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
