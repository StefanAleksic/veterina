-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2018 at 01:51 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webvet`
--

-- --------------------------------------------------------

--
-- Table structure for table `lista2`
--

CREATE TABLE `pregled` (
  `id` int(11) NOT NULL,
  `br_leg` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ime` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prezime` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jmbg` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pol` int(3) NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prebivaliste` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rang` int(3) NOT NULL,
  `sud_lista` tinyint(3) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pregled`
--

INSERT INTO `pregled` (`id`, `br_leg`, `ime`, `prezime`, `jmbg`, `pol`, `state`, `prebivaliste`, `rang`, `sud_lista`, `description`) VALUES
(1, 'I-028', 'Đorđe', 'Stevanović', '1611978710258', 1, 'Aktivan', 'Beograd', 4, 5, ''),
(2, 'I-078', 'Jovan', 'Jovanović', '0909987712345', 1, 'Aktivan', 'Beograd', 4, 5, ''),
(3, 'II-015', 'Petar', 'Petrović', '0912985523374', 1, 'Aktivan', 'Novi Sad', 1, 1, ''),
(4, 'VIII-013', 'Milena', 'Pavlović', '0511990345678', 2, 'Aktivan', 'Užice', 2, 2, ''),
(5, 'I-099', 'Bojan', 'Bijelić', '1612987234567', 1, 'Aktivan', 'Beograd', 3, 3, ''),
(6, 'I-015', 'Vladimir', 'Milić', '3101987345678', 1, 'Aktivan', 'Beograd', 1, 2, ''),
(9, 'II-099', 'Maja', 'Jovanović', '1612978234543', 2, 'Aktivan', 'Sremska Kamenica', 3, 5, ''),
(10, 'V-089', 'Đorđe', 'Zelenović', '1203988611234', 1, 'Aktivan', 'Kraljevo', 3, 5, ''),
(11, 'I-098', 'Djordje', 'Djordjevic', '16576545433567', 1, 'Aktivan', 'Beograd', 1, 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lista2`
--
ALTER TABLE `pregled`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lista2`
--
ALTER TABLE `pregled`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
