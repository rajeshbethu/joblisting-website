-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2021 at 02:03 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `jid` int(11) NOT NULL,
  `uid` int(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `job_desc` mediumtext NOT NULL,
  `company` varchar(255) NOT NULL,
  `salary` int(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`jid`, `uid`, `job_title`, `job_desc`, `company`, `salary`, `category`, `location`, `contact_email`, `date`) VALUES
(2, 2, 'ssssssssssssssssssssss', 'ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', 'sdsdsd', 12121, 'HR jobs', 'hyderabad', 'dddd@dmdm.copm', ''),
(3, 1, 'PHP WEB development', 'syfkjsfhkjd ksjdfl syfkjsfhkjd ksjdfl syfkjsfhkjd ksjdfl syfkjsfhkjd ksjdfl syfkjsfhkjd ksjdfl syfkjsfhkjd ksjdfl syfkjsfhkjd ksjdfl syfkjsfhkjd ksjdfl syfkjsfhkjd ksjdfl syfkjsfhkjd ksjdfl syfkjsfhkjd ksjdfl syfkjsfhkjd ksjdfl syfkjsfhkjd ksjdfl syfkjsfhkjd ksjdfl syfkjsfhkjd ksjdfl ', 'Infosys', 45445, 'IT', 'hyderabad', 'rajeshbethu508@gmail.com', '4, March 2021');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `email`, `name`, `password`) VALUES
(1, 'rajeshb877@gmail.com', 'Rajesh Bethu', 'rajeshadmin'),
(3, 'bethurajesh1515@gmail.com', 'Rajesh', 'rajeshadmin'),
(4, 'rajeshbethu013@gmail.com', 'rajeshb877@gmail.com', 'rajeshadmin'),
(5, 'rajeshbethu508@gmail.com', 'rajeshb877@gmail.com', 'rajeshadmin'),
(6, 'dddd@dmdm.copm', 'rajeshb877@gmail.com', 'rajeshadmin'),
(7, 'dddd@dmdm.copms', 'rajeshb877@gmail.com', 'rajeshadmin'),
(8, 'sss@ss.ss', 'rajeshb877@gmail.com', 'rajeshadmin'),
(9, 'sss@ss.ssa', 'rajeshb877@gmail.com', 'rajeshadmin'),
(10, '8329371408@ss.ss', 'rajeshb877@gmail.com', 'rajeshadmin'),
(11, 'rajeshb877@gmail.coma', 'rajeshb877@gmail.com', 'rajeshadmin'),
(12, 'bethurajesh1515@gmail.comsas', 'rajeshb877@gmail.com', 'rajeshadmin'),
(13, 'rajeshb877@gmail.comhgd', 'rajeshb877@gmail.com', 'rajeshadmin'),
(14, 'rajesjhgdhb877@gmail.com', 'rajeshb877@gmail.com', 'rajeshadmin'),
(15, 'rajeshb877@gmail.comasasas', 'rajeshb877@gmail.com', 'rajeshadmin'),
(16, 'new@www.ddd', 'rajeshb877@gmail.com', 'rajeshadmin'),
(17, 'bethurajesdssh1515@gmail.com', 'rajeshb877@gmail.com', 'rajeshadmin'),
(18, 'kjhdf@ddd.dd', 'rajeshb877@gmail.com', 'rajeshadmin'),
(19, 'ajhd@sdhgs.com', 'wqw', 'qwqwqwwqwq'),
(20, 'newemail@new.com', 'Rajeshnew', 'rajeshadmin'),
(21, 'dddd@dmdm.copmwww', 'rajeshb877@gmail.com', 'rajeshadmin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`jid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `jid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
