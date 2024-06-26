-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 04 jun 2024 om 11:33
-- Serverversie: 8.0.32
-- PHP-versie: 8.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvcframework-2309b`
--
CREATE DATABASE IF NOT EXISTS `mvcframework-2309b` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `mvcframework-2309b`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `country`
--

DROP TABLE IF EXISTS `country`;
CREATE TABLE IF NOT EXISTS `country` (
  `Id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `Name` varchar(250) NOT NULL,
  `CapitalCity` varchar(250) NOT NULL,
  `Continent` varchar(250) NOT NULL,
  `Population` int NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `country`
--

INSERT INTO `country` (`Id`, `Name`, `CapitalCity`, `Continent`, `Population`) VALUES
(1, 'China', 'Bejing', 'Azië', 1234000000),
(2, 'Tanzania', 'Dododama', 'Afrika', 59730000),
(3, 'Japan', 'Tokyo', 'Azië', 123000000),
(4, 'Senegal', 'Dakar', 'Afrika', 16740001),
(5, 'België', 'Brussel', 'Europa', 12345600),
(6, 'Duitsland', 'Berlijn', 'Europa', 120),
(7, 'Egypte', 'Caïro', 'Afrika', 34000000),
(8, 'Egypte', 'Caïro', 'Afrika', 34000000),
(9, 'Noorwegen', 'Oslo', 'Eurapo', 4500000),
(10, 'Namibië', 'Windhoek', 'Afrika', 2630073),
(11, 'Amerika', 'Washington', 'Amerika', 37000000),
(12, 'Zimbabwe', 'Harare', 'Afrika', 123000000),
(13, 'Nepal', 'Kathmandu', 'Azië', 60000000),
(14, 'Noorwegen', 'Oslo', 'Europa', 6120237);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
