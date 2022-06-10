-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2022 at 10:03 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zorg_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `ID_account` int(100) NOT NULL,
  `Naam_account` varchar(255) NOT NULL,
  `Achternaam_account` varchar(255) NOT NULL,
  `Wachtwoord_account` varchar(255) NOT NULL,
  `Geboortedatum_account` varchar(255) NOT NULL,
  `Postcode_account` varchar(255) NOT NULL,
  `Straat_account` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`ID_account`, `Naam_account`, `Achternaam_account`, `Wachtwoord_account`, `Geboortedatum_account`, `Postcode_account`, `Straat_account`) VALUES
(27, 'sander', 'broekhof', '$2y$10$ewi09xtY5DhtzLeCcIXt8O84N8B8p7YhF8s2lQYleLba/NKdfiIfe', '2022-06-16', '8304dc', 'ijselmeerlaan 102'),
(28, 'jesse', 'kwakernaak', '$2y$10$fsEVpSp48Ko4L/dlQjtape6oCYI2X0AZYPWQ9hYVbub3PWFpi8gIG', '2022-06-17', '8304dc', 'ijselmeerlaan 102'),
(29, 'sandje', 'Broek', '$2y$10$C8m3v5ol5vAJgdNkRvpUxOY2hrJlrN6E8aSZoyVkqHeii57Q0yfui', '2022-06-09', '8303rd', 'lemsterweg');

-- --------------------------------------------------------

--
-- Table structure for table `verzoek`
--

CREATE TABLE `verzoek` (
  `ID_verzoek` int(100) NOT NULL,
  `ID_medewerker` int(11) NOT NULL,
  `Activiteit_verzoek` varchar(255) NOT NULL,
  `Tijd_verzoek` int(100) NOT NULL,
  `Level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `verzoek`
--

INSERT INTO `verzoek` (`ID_verzoek`, `ID_medewerker`, `Activiteit_verzoek`, `Tijd_verzoek`, `Level`) VALUES
(2, 29, 'sander', 23, 'ouder');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`ID_account`);

--
-- Indexes for table `verzoek`
--
ALTER TABLE `verzoek`
  ADD PRIMARY KEY (`ID_verzoek`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `ID_account` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `verzoek`
--
ALTER TABLE `verzoek`
  MODIFY `ID_verzoek` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
