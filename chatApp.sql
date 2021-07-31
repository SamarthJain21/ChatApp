-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 01, 2021 at 03:11 AM
-- Server version: 8.0.26-0ubuntu0.20.04.2
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatApp`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `messageID` int NOT NULL,
  `incomingMessageID` int NOT NULL,
  `outgoingMessageID` int NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`messageID`, `incomingMessageID`, `outgoingMessageID`, `message`) VALUES
(1, 1406699395, 1120117020, 'hey'),
(2, 1406699395, 1120117020, 'hello'),
(3, 1406699395, 1120117020, 'one'),
(4, 1406699395, 1120117020, 'two'),
(5, 1009503882, 1120117020, 'hey also sam'),
(6, 1009503882, 1120117020, 'hey'),
(7, 1009503882, 1120117020, 'hi'),
(8, 1009503882, 1120117020, 'fff'),
(9, 837407912, 1120117020, 'hi'),
(10, 1406699395, 1120117020, 'hey samarth jain from me again'),
(11, 1120117020, 1406699395, 'hey'),
(12, 1406699395, 1120117020, '14 to 11 sam agian to samarth'),
(13, 1406699395, 1120117020, '14 to 11 agian'),
(14, 1120117020, 1406699395, ' to 1406 by sam again'),
(15, 1406699395, 1120117020, 'to 1406 by sam again 1'),
(16, 1120117020, 1406699395, 'to 1102 by Samarth Jain'),
(17, 1120117020, 1406699395, 'now sending to samarth'),
(18, 1406699395, 1120117020, 'sending to me again'),
(19, 1120117020, 1406699395, 'heheye\\'),
(20, 1120117020, 1406699395, 'hey man'),
(21, 1120117020, 1120117020, 'heyy'),
(22, 1406699395, 1406699395, 'hey'),
(23, 1406699395, 1406699395, 'ehyeyye'),
(24, 837407912, 1406699395, '12345jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj3333333333333444444444444444'),
(25, 1009503882, 1406699395, 'ffufhffffffff'),
(26, 837407912, 1406699395, 'ehyey heheh heehhe h ehe eh ehe eh ehe ehe he ehe he '),
(27, 1120117020, 1406699395, 'qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq'),
(28, 1406699395, 1406699395, 'hfhfhf'),
(29, 1120117020, 1406699395, 'hey'),
(30, 1120117020, 1406699395, 'hi'),
(31, 1120117020, 1406699395, 'hi'),
(32, 1120117020, 1406699395, 'hey'),
(33, 1120117020, 1406699395, 'jj'),
(34, 1120117020, 1406699395, 'hh'),
(35, 1120117020, 1406699395, 'hey'),
(36, 1120117020, 1406699395, 'fkfk'),
(37, 1120117020, 1406699395, 'hfhfh');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `unique_id` int NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(400) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `firstName`, `lastName`, `email`, `password`, `img`, `status`) VALUES
(29, 1406699395, 'Samarth ', 'Jain', 'jainsamarth786@gmail.com', 'sam', '1627754253headshot.jpeg', 'Active now'),
(30, 837407912, 'sam', 'j', 'sam@123.com', 'sam', '1627754282profile.jpeg', 'Active now'),
(31, 1009503882, 'also ', 'sam', 'alsosam@123.com', 'sam', '1627754319profile.jpeg', 'Active now'),
(32, 1120117020, 'me', 'again', 'meagain@123.com', 'sam', '1627754347profile.jpeg', 'Active now'),
(33, 752785379, 'SamArTh', 'JaIN', 'samarth@123.com', 'sam', '1627767107headshot.jpeg', 'Active now');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`messageID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `messageID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
