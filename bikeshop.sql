-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2022 at 11:23 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bikeshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `fiets_tour`
--

CREATE TABLE `fiets_tour` (
  `id` int(10) NOT NULL,
  `omschrijving` varchar(255) NOT NULL,
  `isRented` tinyint(1) NOT NULL DEFAULT 0,
  `prijs` decimal(10,0) DEFAULT NULL,
  `begintijd` time DEFAULT NULL,
  `eindtijd` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fiets_tour`
--

INSERT INTO `fiets_tour` (`id`, `omschrijving`, `isRented`, `prijs`, `begintijd`, `eindtijd`) VALUES
(1, 'Fiets tour om 10 uur', 0, '10', '10:00:00', '12:30:00'),
(2, 'Fiets tour om 15 uur', 0, '10', '15:00:00', '17:30:00'),
(3, 'Fiets tour om 10 uur', 0, '10', '10:00:00', '12:30:00'),
(4, 'Fiets tour om 15 uur', 0, '10', '15:00:00', '17:30:00'),
(5, 'Fiets tour om 10 uur', 0, '10', '10:00:00', '12:30:00'),
(6, 'Fiets tour om 15 uur', 0, '10', '15:00:00', '17:30:00'),
(7, 'Fiets tour om 10 uur', 0, '10', '10:00:00', '12:30:00'),
(8, 'Fiets tour om 15 uur', 0, '10', '15:00:00', '17:30:00'),
(9, 'Fiets tour om 10 uur', 0, '10', '10:00:00', '12:30:00'),
(10, 'Fiets tour om 15 uur', 0, '10', '15:00:00', '17:30:00'),
(11, 'Fiets tour om 10 uur', 0, '10', '10:00:00', '12:30:00'),
(12, 'Fiets tour om 15 uur', 0, '10', '15:00:00', '17:30:00'),
(13, 'Fiets tour om 10 uur', 0, '10', '10:00:00', '12:30:00'),
(14, 'Fiets tour om 15 uur', 0, '10', '15:00:00', '17:30:00'),
(15, 'Fiets tour om 10 uur', 0, '10', '10:00:00', '12:30:00'),
(16, 'Fiets tour om 15 uur', 0, '10', '15:00:00', '17:30:00'),
(17, 'Fiets tour om 10 uur', 0, '10', '10:00:00', '12:30:00'),
(18, 'Fiets tour om 15 uur', 0, '10', '15:00:00', '17:30:00'),
(19, 'Fiets tour om 10 uur', 0, '10', '10:00:00', '12:30:00'),
(20, 'Fiets tour om 15 uur', 0, '10', '15:00:00', '17:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `fiets_verhuur`
--

CREATE TABLE `fiets_verhuur` (
  `id` int(10) NOT NULL,
  `omschrijving` varchar(255) NOT NULL,
  `isRented` tinyint(1) NOT NULL DEFAULT 0,
  `prijs` decimal(10,0) DEFAULT NULL,
  `begintijd` time(5) DEFAULT NULL,
  `eindtijd` time(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fiets_verhuur`
--

INSERT INTO `fiets_verhuur` (`id`, `omschrijving`, `isRented`, `prijs`, `begintijd`, `eindtijd`) VALUES
(1, 'Fiets (Cortina)', 0, '15', NULL, NULL),
(2, 'Fiets (Cortina)', 0, '15', NULL, NULL),
(3, 'Fiets (Cortina)', 0, '15', NULL, NULL),
(4, 'Fiets (Cortina)', 0, '15', NULL, NULL),
(5, 'Fiets (Cortina)', 0, '15', NULL, NULL),
(6, 'Fiets (Cortina)', 0, '15', NULL, NULL),
(7, 'Fiets (Cortina)', 0, '15', NULL, NULL),
(8, 'Fiets (Cortina)', 0, '15', NULL, NULL),
(9, 'Fiets (Cortina)', 0, '15', NULL, NULL),
(10, 'Fiets (Cortina)', 0, '15', NULL, NULL),
(11, 'Fiets (Cortina)', 0, '15', NULL, NULL),
(12, 'Fiets (Cortina)', 0, '15', NULL, NULL),
(13, 'Fiets (Cortina)', 0, '15', NULL, NULL),
(14, 'Fiets (Cortina)', 0, '15', NULL, NULL),
(15, 'Fiets (Cortina)', 0, '15', NULL, NULL),
(16, 'Fiets (Cortina)', 0, '15', NULL, NULL),
(17, 'Fiets (Cortina)', 0, '15', NULL, NULL),
(18, 'Fiets (Cortina)', 0, '15', NULL, NULL),
(19, 'Fiets (Cortina)', 0, '15', NULL, NULL),
(20, 'Fiets (Cortina)', 0, '15', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `klantinfo`
--

CREATE TABLE `klantinfo` (
  `ID` int(255) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefoonnummer` int(11) NOT NULL,
  `volwassenen` int(45) NOT NULL,
  `kinderen` int(45) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `fietsreservering` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `klantinfo`
--

INSERT INTO `klantinfo` (`ID`, `naam`, `email`, `telefoonnummer`, `volwassenen`, `kinderen`, `checkin`, `checkout`, `fietsreservering`) VALUES
(28, 'Jan Pieter', 'randomiets@hotmail.com', 612345678, 1, 3, '2022-11-03', '2022-11-04', 1),
(29, 'Jan Pieter', 'randomiets1234@hotmail.com', 612345678, 5, 5, '2022-11-02', '2022-11-02', 1),
(30, 'sgfngsdndfg', 'wrbdfheth@hotmail.com', 612345678, 1, 0, '2022-11-22', '2022-11-25', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`) VALUES
(1, 'elias', '123', 'Elias'),
(2, 'john', 'abc', 'John'),
(3, 'hoi', '123', 'hoi'),
(4, 'test', '1', 'test'),
(5, 'test2', '321', 'testvanuitdemooiesite'),
(6, 'hoi5', '1', 'hoi5(green color test)'),
(7, 'hoi8', '1', 'hoi(green test)'),
(8, 'youssef1', '1', 'youssef'),
(9, 'tanya', '123', 'tanya'),
(10, 'Mikeybikey', '123', 'Mike Bike');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fiets_tour`
--
ALTER TABLE `fiets_tour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fiets_verhuur`
--
ALTER TABLE `fiets_verhuur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `klantinfo`
--
ALTER TABLE `klantinfo`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fiets_tour`
--
ALTER TABLE `fiets_tour`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `fiets_verhuur`
--
ALTER TABLE `fiets_verhuur`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `klantinfo`
--
ALTER TABLE `klantinfo`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
