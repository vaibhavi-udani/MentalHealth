-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2018 at 12:47 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mhealth`
--

-- --------------------------------------------------------

--
-- Table structure for table `dailygoals`
--

CREATE TABLE `dailygoals` (
  `user_id` int(11) NOT NULL,
  `daily_goal` varchar(256) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dailygoals`
--

INSERT INTO `dailygoals` (`user_id`, `daily_goal`, `date`) VALUES
(1, 'yayayyy', '2018-12-23'),
(1, 'yayayyyfeadaf', '2018-12-23'),
(1, 'yayayyyfeadaff', '2018-12-23'),
(1, 'yayayyyfeadaff', '2018-12-23'),
(2, 'Exercise for 20 minutes', '0000-00-00'),
(2, 'Talk to a stranger', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `longgoals`
--

CREATE TABLE `longgoals` (
  `user_id` int(11) NOT NULL,
  `long_goals` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `longgoals`
--

INSERT INTO `longgoals` (`user_id`, `long_goals`) VALUES
(1, 'be happy');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `user_id` int(11) NOT NULL,
  `compliment` text NOT NULL,
  `thankful` text NOT NULL,
  `happy` text NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`user_id`, `compliment`, `thankful`, `happy`, `date`) VALUES
(1, 'you\'re doing good', 'you got this', 'woohoo!', '2018-12-23'),
(1, '', '', '', '2018-12-23'),
(1, '', '', '', '2018-12-23'),
(2, 'You are stronger than you think', 'My mom', 'A new bagel shop opened across the street', '2018-12-20'),
(2, 'Good job on that consulting project, you crushed it', 'My supervisor\'s guidance', 'Finished the term report on schedule', '2018-12-21'),
(2, 'You are stronger than you think', 'My mom', 'A new bagel shop opened across the street', '2018-12-20'),
(2, 'Good job on that consulting project, you crushed it', 'My supervisor\'s guidance', 'Finished the term report on schedule', '2018-12-21');

-- --------------------------------------------------------

--
-- Table structure for table `scoreslumo`
--

CREATE TABLE `scoreslumo` (
  `user_id` int(11) NOT NULL,
  `mood` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `health` int(11) NOT NULL,
  `social` int(11) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scoreslumo`
--

INSERT INTO `scoreslumo` (`user_id`, `mood`, `active`, `health`, `social`, `date`) VALUES
(1, 1, 2, 3, 1, '2018-12-12'),
(1, 2, 3, 4, 4, '2018-12-13'),
(1, 3, 4, 5, 5, '2018-12-14'),
(1, 3, 5, 4, 4, '2018-12-15'),
(1, 3, 3, 2, 2, '2018-12-16'),
(1, 4, 4, 4, 4, '2018-12-17'),
(1, 4, 3, 4, 3, '2018-12-18'),
(1, 0, 0, 0, 0, '2018-12-20'),
(1, 0, 0, 0, 0, '2018-12-20'),
(1, 0, 0, 0, 0, '2018-12-20'),
(1, 0, 0, 0, 0, '2018-12-20'),
(1, 0, 0, 0, 0, '2018-12-20'),
(1, 0, 0, 0, 0, '2018-12-23'),
(2, 4, 3, 4, 5, '2018-12-20'),
(2, 3, 3, 2, 4, '2018-12-21'),
(2, 4, 3, 4, 5, '2018-12-20'),
(2, 3, 3, 2, 4, '2018-12-21');

-- --------------------------------------------------------

--
-- Table structure for table `shortgoals`
--

CREATE TABLE `shortgoals` (
  `user_id` int(11) NOT NULL,
  `short_goal` varchar(256) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shortgoals`
--

INSERT INTO `shortgoals` (`user_id`, `short_goal`, `date`) VALUES
(1, 'woohogo', '2018-12-12'),
(1, 'woohogo', '2018-12-12'),
(1, 'wsrdf', '2018-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `userslumo`
--

CREATE TABLE `userslumo` (
  `user_id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `pwd` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userslumo`
--

INSERT INTO `userslumo` (`user_id`, `name`, `username`, `pwd`) VALUES
(1, 'Ruonan', 'hey', 'hey'),
(2, 'Dan Smith', 'dan123', 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dailygoals`
--
ALTER TABLE `dailygoals`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `longgoals`
--
ALTER TABLE `longgoals`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD KEY `user_id` (`user_id`) USING BTREE;

--
-- Indexes for table `scoreslumo`
--
ALTER TABLE `scoreslumo`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `shortgoals`
--
ALTER TABLE `shortgoals`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `userslumo`
--
ALTER TABLE `userslumo`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userslumo`
--
ALTER TABLE `userslumo`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dailygoals`
--
ALTER TABLE `dailygoals`
  ADD CONSTRAINT `dailygoals_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `userslumo` (`user_id`);

--
-- Constraints for table `longgoals`
--
ALTER TABLE `longgoals`
  ADD CONSTRAINT `longgoals_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `userslumo` (`user_id`);

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `userslumo` (`user_id`);

--
-- Constraints for table `scoreslumo`
--
ALTER TABLE `scoreslumo`
  ADD CONSTRAINT `scoreslumo_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `userslumo` (`user_id`);

--
-- Constraints for table `shortgoals`
--
ALTER TABLE `shortgoals`
  ADD CONSTRAINT `shortgoals_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `userslumo` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
