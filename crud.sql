-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 26 sep 2023 om 02:14
-- Serverversie: 10.4.24-MariaDB
-- PHP-versie: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `te_laat_meldingen`
--

CREATE TABLE `te_laat_meldingen` (
  `id` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `klas` varchar(50) NOT NULL,
  `minuten_te_laat` int(11) NOT NULL,
  `reden` text DEFAULT NULL,
  `meldings_tijd` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `te_laat_meldingen`
--

INSERT INTO `te_laat_meldingen` (`id`, `naam`, `klas`, `minuten_te_laat`, `reden`, `meldings_tijd`) VALUES
(3, 'Hamza', '2C', 6, 'geen idee', '2023-09-25 17:50:27'),
(6, 'Johannes', '2C', 44, 'Afspraak bij de huisarts\r\n', '2023-09-26 00:11:56');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `te_laat_meldingen`
--
ALTER TABLE `te_laat_meldingen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `te_laat_meldingen`
--
ALTER TABLE `te_laat_meldingen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
