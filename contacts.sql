-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 23. Mai 2021 um 15:07
-- Server-Version: 10.4.18-MariaDB
-- PHP-Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `adressebuch`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vorname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nachname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `strasse` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hausnummer` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ort` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plz` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `contacts`
--

INSERT INTO `contacts` (`id`, `vorname`, `nachname`, `email`, `phone`, `strasse`, `hausnummer`, `ort`, `plz`) VALUES
(23, 'a', 'a', 'ariyan@gmail.com', '78678', 'jhg', '876', 'jhgjh', 7),
(28, '321', '123', '213@e.com', '123', 'sdfghjg', '123', '123', 32),
(29, 'devierte', 'neovic', 'neovic@gmail.com', '87945612', 'silay', '45', 'Manheim', 45679),
(30, 'tolentino', 'dee', 'dee@gmail.com', '1345648', 'bacolod', '232', 'City', 45678);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
