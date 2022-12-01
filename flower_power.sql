-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2022 at 02:09 AM
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
-- Database: `flower_power`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `artikelcode` int(255) NOT NULL,
  `artikel` varchar(255) NOT NULL,
  `prijs` decimal(10,0) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `omschrijving` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bestelling`
--

CREATE TABLE `bestelling` (
  `artikelcode` int(255) NOT NULL,
  `winkelcode` int(255) NOT NULL,
  `aantal` int(255) NOT NULL,
  `klantcode` int(255) NOT NULL,
  `medewerkerscode` int(255) NOT NULL,
  `afgehaald` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `factuur`
--

CREATE TABLE `factuur` (
  `factuurnummer` int(11) NOT NULL,
  `factuurdatum` date NOT NULL,
  `klantcode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `factuurregel`
--

CREATE TABLE `factuurregel` (
  `factuurnummer` int(11) NOT NULL,
  `artikelcode` int(255) NOT NULL,
  `aantal` int(11) NOT NULL,
  `prijs` decimal(11,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `klanten`
--

CREATE TABLE `klanten` (
  `klantcode` int(11) NOT NULL,
  `voornaam` varchar(255) NOT NULL,
  `tussenvoegsels` varchar(20) NOT NULL,
  `achternaam` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adres` varchar(255) NOT NULL,
  `postcode` varchar(255) NOT NULL,
  `woonplaats` varchar(255) NOT NULL,
  `geboortedatum` date NOT NULL,
  `gebruikersnaam` varchar(255) NOT NULL,
  `wachtwoord` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `medewerker`
--

CREATE TABLE `medewerker` (
  `Medewerkerscode` int(255) NOT NULL,
  `voorletters` varchar(255) NOT NULL,
  `voorvoegsels` varchar(10) NOT NULL,
  `achternaam` varchar(255) NOT NULL,
  `gebruikersnaam` varchar(36) NOT NULL,
  `wachtwoord` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `winkel`
--

CREATE TABLE `winkel` (
  `winkelcode` int(255) NOT NULL,
  `winkelnaam` varchar(255) NOT NULL,
  `winkeladres` varchar(255) NOT NULL,
  `winkelpostcode` varchar(7) NOT NULL,
  `vestigingsplaats` varchar(255) NOT NULL,
  `telefoonnummer` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`artikelcode`);

--
-- Indexes for table `factuur`
--
ALTER TABLE `factuur`
  ADD PRIMARY KEY (`factuurnummer`);

--
-- Indexes for table `medewerker`
--
ALTER TABLE `medewerker`
  ADD PRIMARY KEY (`Medewerkerscode`);

--
-- Indexes for table `winkel`
--
ALTER TABLE `winkel`
  ADD PRIMARY KEY (`winkelcode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `artikelcode` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `factuur`
--
ALTER TABLE `factuur`
  MODIFY `factuurnummer` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medewerker`
--
ALTER TABLE `medewerker`
  MODIFY `Medewerkerscode` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `winkel`
--
ALTER TABLE `winkel`
  MODIFY `winkelcode` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
