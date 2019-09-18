-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 13 sep 2019 om 13:47
-- Serverversie: 8.0.15
-- PHP-versie: 7.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gameplayparty`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bioscopen`
--

CREATE TABLE `bioscopen` (
  `bioscoop_id` int(11) NOT NULL,
  `naam` varchar(256) DEFAULT NULL,
  `info` text,
  `adres` varchar(256) DEFAULT NULL,
  `postcode` varchar(256) DEFAULT NULL,
  `gebruiker_id` int(11) DEFAULT NULL,
  `provincie_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `diensten`
--

CREATE TABLE `diensten` (
  `dienst_id` int(11) NOT NULL,
  `zaal_id` int(11) NOT NULL,
  `omschrijving` text NOT NULL,
  `tarief` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gebruikers`
--

CREATE TABLE `gebruikers` (
  `gebruiker_id` int(11) NOT NULL,
  `voornaam` varchar(256) NOT NULL,
  `achternaam` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `rollen_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `provincies`
--

CREATE TABLE `provincies` (
  `provincie_id` int(11) NOT NULL,
  `omschrijving` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `provincies`
--

INSERT INTO `provincies` (`provincie_id`, `omschrijving`) VALUES
(1, 'Groningen'),
(2, 'Friesland'),
(3, 'Drenthe'),
(4, 'Overijssel'),
(5, 'Flevoland'),
(6, 'Gelderland'),
(7, 'Utrecht'),
(8, 'Noord-Holland'),
(9, 'Zuid-Holland'),
(10, 'Zeeland'),
(11, 'Noord-Brabant'),
(12, 'Limburg');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reserveringen`
--

CREATE TABLE `reserveringen` (
  `reservering_id` int(11) NOT NULL,
  `bioscoop_id` int(11) DEFAULT NULL,
  `voornaam` varchar(256) DEFAULT NULL,
  `achternaam` varchar(256) DEFAULT NULL,
  `geslacht` varchar(256) DEFAULT NULL,
  `adres` varchar(256) DEFAULT NULL,
  `provincie_id` int(11) DEFAULT NULL,
  `plaats` varchar(256) DEFAULT NULL,
  `postcode` varchar(256) DEFAULT NULL,
  `telefoonnummer` int(11) DEFAULT NULL,
  `geplande_datum` date DEFAULT NULL,
  `betaal_datum` date DEFAULT NULL,
  `begintijd` varchar(256) DEFAULT NULL,
  `eindtijd` varchar(256) DEFAULT NULL,
  `reeds_voldaan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reservering_diensten`
--

CREATE TABLE `reservering_diensten` (
  `reservering_id` int(11) NOT NULL,
  `dienst_id` int(11) NOT NULL,
  `aantal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `rollen`
--

CREATE TABLE `rollen` (
  `rollen_id` int(11) NOT NULL,
  `omschrijving` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `rollen`
--

INSERT INTO `rollen` (`rollen_id`, `omschrijving`) VALUES
(1, 'Beheerder'),
(2, 'Redacteur'),
(3, 'Bioscoop medewerker');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `zalen`
--

CREATE TABLE `zalen` (
  `zaal_id` int(11) NOT NULL,
  `bioscoop_id` int(11) NOT NULL,
  `zaal_nummer` int(11) NOT NULL,
  `aantal_nummer` int(11) NOT NULL,
  `rolstoel_plaatsen` int(11) NOT NULL,
  `schermgrootte` varchar(256) NOT NULL,
  `faciliteiten` varchar(256) NOT NULL,
  `versies` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `bioscopen`
--
ALTER TABLE `bioscopen`
  ADD PRIMARY KEY (`bioscoop_id`);

--
-- Indexen voor tabel `diensten`
--
ALTER TABLE `diensten`
  ADD PRIMARY KEY (`dienst_id`);

--
-- Indexen voor tabel `gebruikers`
--
ALTER TABLE `gebruikers`
  ADD PRIMARY KEY (`gebruiker_id`);

--
-- Indexen voor tabel `provincies`
--
ALTER TABLE `provincies`
  ADD PRIMARY KEY (`provincie_id`);

--
-- Indexen voor tabel `reserveringen`
--
ALTER TABLE `reserveringen`
  ADD PRIMARY KEY (`reservering_id`);

--
-- Indexen voor tabel `rollen`
--
ALTER TABLE `rollen`
  ADD PRIMARY KEY (`rollen_id`);

--
-- Indexen voor tabel `zalen`
--
ALTER TABLE `zalen`
  ADD PRIMARY KEY (`zaal_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `bioscopen`
--
ALTER TABLE `bioscopen`
  MODIFY `bioscoop_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `diensten`
--
ALTER TABLE `diensten`
  MODIFY `dienst_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `gebruikers`
--
ALTER TABLE `gebruikers`
  MODIFY `gebruiker_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `provincies`
--
ALTER TABLE `provincies`
  MODIFY `provincie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT voor een tabel `reserveringen`
--
ALTER TABLE `reserveringen`
  MODIFY `reservering_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `rollen`
--
ALTER TABLE `rollen`
  MODIFY `rollen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT voor een tabel `zalen`
--
ALTER TABLE `zalen`
  MODIFY `zaal_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
