-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2023 at 08:46 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mprj`
--

-- --------------------------------------------------------

--
-- Table structure for table `easy`
--

CREATE TABLE `easy` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `op1` text NOT NULL,
  `op2` text NOT NULL,
  `op3` text NOT NULL,
  `correct` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `easy`
--

INSERT INTO `easy` (`id`, `question`, `op1`, `op2`, `op3`, `correct`) VALUES
(1, 'What is your name?', 'Ahmed', 'Mohamed', 'nour', 'Mohamed'),
(2, 'who are you?', 'hala', 'ayo', 'kaka', 'kaka'),
(3, 'what is your color?', 'blue', 'white', 'green', 'blue'),
(4, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersUid` varchar(128) NOT NULL,
  `email` varchar(25) NOT NULL,
  `usersPd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersUid`, `email`, `usersPd`) VALUES
(26, 'rahma', 'rahma@gmail.com', '$2y$10$k0jeAd9Qb85OSECbKYKqI.2Ot/w37yInCkCnFs40/5brMKdsiRBa.'),
(27, 'jouba', 'mano500mano13@gmail.com', '$2y$10$7MUYyHN1jiM.DlNIGzeqp.lnW4CIRi17eS6X12.b5KdevHnIRVR.G'),
(28, 'maram', 'maro@gmail.com', '$2y$10$M8L90O8e2HkPu8Ot4LU/SeRMwrDK8uBXpPBnQfcbKlvOq7GSaZ6Kq'),
(29, 'maramm', 'mavro@gmail.com', '$2y$10$DantivF7ZefjLfMm6BBgyOQ.3og9.ezX15X7qjzwZiTzzRgTAGfn.'),
(30, 'ssds', 'adada@dsds.com', '$2y$10$YTBaLZFU3H78bz3760VM1Oj5Hw77Pkvxz9PSy0iFoVP8uWbWOgTI2'),
(31, 'ramaa', 'rama@gmail.com', '$2y$10$j7fTJlH5GC0qfORu8N9XhuEr5DKLX6gzCyugULxa.o97wAyTt5E5.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `easy`
--
ALTER TABLE `easy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
