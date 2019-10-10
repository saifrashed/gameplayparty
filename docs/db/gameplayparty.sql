-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 20 sep 2019 om 10:13
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_cici;

--
-- Gegevens worden geëxporteerd voor tabel `bioscopen`
--

INSERT INTO `bioscopen` (`bioscoop_id`, `naam`, `info`, `adres`, `postcode`, `gebruiker_id`, `provincie_id`) VALUES
(1, 'Kinepolis Jaarbeurs', 'Met Kinepolis Jaarbeurs (14 zalen, 3.010 stoelen) heeft Utrecht eindelijk een moderne megabioscoop in de binnenstad: de grootste bioscoop van Utrecht, en een van de grootste bioscopen van Nederland. Kinepolis Jaarbeurs biedt elke filmbezoeker ‘the ultimate cinema experience’: ruime en comfortabele stoelen, royale beenruimte, en beeld en geluid van het allerhoogste niveau. Alle zalen zijn voorzien van laserprojectie. Voor een nog intensere bioscoopervaring kijk je een film in Laser ULTRA, met haarscherp laserbeeld én het ruimtelijke geluid van Dolby Atmos. Kinepolis Jaarbeurs ligt op slechts een paar minuten loopafstand van het Centraal Station van Utrecht, tegen de Jaarbeurshallen aan. Een hapje eten of borrelen voor of na de film? Dat kan bij de naastgelegen foodcourt Speys.', 'Jaarbeursboulevard 300', '3521 BC', 3, 7),
(2, 'Kinepolis Almere', 'Kinepolis Almere is sinds 2004 gevestigd in het levendige centrum van Almere. Het ontwerp van het imposante gebouw is van de bekroonde architect Rem Koolhaas. De megabioscoop telt 8 zalen met in totaal 2137 comfortabele stoelen. Bij binnenkomst is de trap die diagonaal door het gebouw loopt, de eerste blikvanger. Kinepolis Almere is sinds november 2017 verbouwd om meer aan te sluiten bij de look-and-feel van Kinepolis. Dit betekent dat alle zetels zijn vernieuwd,  dat er automatische ticket machines (ATM’s) op de trap zijn geplaatst en er een volledige nieuwe shop met een ruimer assortiment is gekomen.', 'Forum 16', '1315 TH', 4, 5),
(3, 'Kinepolis Den helder', 'Kinepolis Den Helder opende in 2003 haar deuren in gebouw 51 op Willemsoord, de voormalige scheeps- en onderhoudswerf voor de Koninklijke Marine. Verschillende details van de Oude Rijkswerf zijn intact gelaten; twee van de zalen zijn nieuw tegen de Scheepswerkerplaats aangebouwd. De bioscoop in de kop van Noord-Holland heeft in totaal 6 moderne bioscoopzalen en 776 stoelen.', 'Willemsoord 51', '1781 AS', 5, 8);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `diensten`
--

CREATE TABLE `diensten` (
  `dienst_id` int(11) NOT NULL,
  `zaal_id` int(11) NOT NULL,
  `omschrijving` text NOT NULL,
  `tarief` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_cici;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_cici;

--
-- Gegevens worden geëxporteerd voor tabel `gebruikers`
--

INSERT INTO `gebruikers` (`gebruiker_id`, `voornaam`, `achternaam`, `email`, `password`, `rollen_id`) VALUES
(1, 'Saif', 'Rashed', 'saifeddinerashed@icloud.com', '$2y$10$wxbC8dl7KGNQTRmZs21zYednTdA9hWtchb6yvaAQyM8.8dRyYqB5m', 1),
(2, 'Rauf', 'Turay', 'rauf@live.nl', '$2y$10$lgEQIdIJM41qxJgw9IrE/.tZDEal6vUNv4M1irOrjuq00iXQkqPTi', 3),
(3, 'Richard', 'de Haas', 'bioscoop1@gmail.com', '$2y$10$S4XreKdj8lG1BA/hZM4YS.qihO3R9gYpDmb4Zw2SfTN6KlbzsQZce', 3),
(4, 'Henk', 'Ganzeman', 'bioscoop2@gmail.com', '$2y$10$05s21zfyfLq6Ihun3JQN3evfget/LiALVDyMYNNlaXKGMXD/VoJBK', 3),
(5, 'Jan', 'Dino', 'bioscoop3@gmail.com', '$2y$10$0poZ.WXQBpSrebU9HhhhReVplzp461CHgkPMa.o823n7L8Mju3hcO', 3);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `provincies`
--

CREATE TABLE `provincies` (
  `provincie_id` int(11) NOT NULL,
  `omschrijving` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_cici;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_cici;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reservering_diensten`
--

CREATE TABLE `reservering_diensten` (
  `reservering_id` int(11) NOT NULL,
  `dienst_id` int(11) NOT NULL,
  `aantal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_cici;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `rollen`
--

CREATE TABLE `rollen` (
  `rollen_id` int(11) NOT NULL,
  `omschrijving` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_cici;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_cici;

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
  MODIFY `bioscoop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT voor een tabel `diensten`
--
ALTER TABLE `diensten`
  MODIFY `dienst_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `gebruikers`
--
ALTER TABLE `gebruikers`
  MODIFY `gebruiker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
