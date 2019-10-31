-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 24, 2019 at 03:23 PM
-- Server version: 8.0.15
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gameplayparty`
--

-- --------------------------------------------------------

--
-- Table structure for table `bioscopen`
--

CREATE TABLE `bioscopen` (
  `bioscoop_id` int(11) NOT NULL,
  `naam` varchar(256) DEFAULT NULL,
  `info` text,
  `adres` varchar(256) DEFAULT NULL,
  `bios_postcode` varchar(256) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `gebruiker_id` int(11) DEFAULT NULL,
  `provincie_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bioscopen`
--

INSERT INTO `bioscopen` (`bioscoop_id`, `naam`, `info`, `adres`, `bios_postcode`, `gebruiker_id`, `provincie_id`) VALUES
(1, 'Kinepolis Jaarbeurs', 'Met Kinepolis Jaarbeurs (14 zalen, 3.010 stoelen) heeft Utrecht eindelijk een moderne megabioscoop in de binnenstad: de grootste bioscoop van Utrecht, en een van de grootste bioscopen van Nederland. Kinepolis Jaarbeurs biedt elke filmbezoeker the ultimate cinema experience: ruime en comfortabele stoelen, royale beenruimte, en beeld en geluid van het allerhoogste niveau. Alle zalen zijn voorzien van laserprojectie. Voor een nog intensere bioscoopervaring kijk je een film in Laser ULTRA, met haarscherp laserbeeld en het ruimtelijke geluid van Dolby Atmos. Kinepolis Jaarbeurs ligt op slechts een paar minuten loopafstand van het Centraal Station van Utrecht, tegen de Jaarbeurshallen aan. Een hapje eten of borrelen voor of na de film? Dat kan bij de naastgelegen foodcourt Speys.', 'Jaarbeursboulevard 300', '3521 BC', 3, 7),
(2, 'Kinepolis Almere', 'Kinepolis Almere is sinds 2004 gevestigd in het levendige centrum van Almere. Het ontwerp van het imposante gebouw is van de bekroonde architect Rem Koolhaas. De megabioscoop telt 8 zalen met in totaal 2137 comfortabele stoelen. Bij binnenkomst is de trap die diagonaal door het gebouw loopt, de eerste blikvanger. Kinepolis Almere is sinds november 2017 verbouwd om meer aan te sluiten bij de look-and-feel van Kinepolis. Dit betekent dat alle zetels zijn vernieuwd,  dat er automatische ticket machines (ATMs) op de trap zijn geplaatst en er een volledige nieuwe shop met een ruimer assortiment is gekomen.', 'Forum 16', '1315 TH', 4, 5),
(3, 'Kinepolis Den helder', 'Kinepolis Den Helder opende in 2003 haar deuren in gebouw 51 op Willemsoord, de voormalige scheeps- en onderhoudswerf voor de Koninklijke Marine. Verschillende details van de Oude Rijkswerf zijn intact gelaten; twee van de zalen zijn nieuw tegen de Scheepswerkerplaats aangebouwd. De bioscoop in de kop van Noord-Holland heeft in totaal 6 moderne bioscoopzalen en 776 stoelen.', 'Willemsoord 51', '1781 AS', 5, 8);

-- --------------------------------------------------------

--
-- Table structure for table `diensten`
--

CREATE TABLE `diensten` (
  `dienst_id` int(11) NOT NULL,
  `omschrijving` text NOT NULL,
  `tarief_volwassenen` int(11) NOT NULL,
  `tarief_tieners` int(11) NOT NULL,
  `tarief_kinderen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `diensten`
--

INSERT INTO `diensten` (`dienst_id`, `omschrijving`, `tarief_volwassenen`, `tarief_tieners`, `tarief_kinderen`) VALUES
(1, 'Kids GamePlayParty', 55, 25, 10),
(2, 'Laser ULTRA', 120, 50, 15);

-- --------------------------------------------------------

--
-- Table structure for table `gebruikers`
--

CREATE TABLE `gebruikers` (
  `gebruiker_id` int(11) NOT NULL,
  `voornaam` varchar(256) NOT NULL,
  `achternaam` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `rollen_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gebruikers`
--

INSERT INTO `gebruikers` (`gebruiker_id`, `voornaam`, `achternaam`, `email`, `password`, `rollen_id`) VALUES
(1, 'Saif', 'Rashed', 'saifeddinerashed@icloud.com', '$2y$10$wxbC8dl7KGNQTRmZs21zYednTdA9hWtchb6yvaAQyM8.8dRyYqB5m', 1),
(2, 'Rauf', 'Turay', 'rauf@live.nl', '$2y$10$lgEQIdIJM41qxJgw9IrE/.tZDEal6vUNv4M1irOrjuq00iXQkqPTi', 3),
(3, 'Richard', 'de Haas', 'bioscoop1@gmail.com', '$2y$10$S4XreKdj8lG1BA/hZM4YS.qihO3R9gYpDmb4Zw2SfTN6KlbzsQZce', 3),
(4, 'Henk', 'Ganzeman', 'bioscoop2@gmail.com', '$2y$10$05s21zfyfLq6Ihun3JQN3evfget/LiALVDyMYNNlaXKGMXD/VoJBK', 3),
(5, 'Jan', 'Dino', 'bioscoop3@gmail.com', '$2y$10$0poZ.WXQBpSrebU9HhhhReVplzp461CHgkPMa.o823n7L8Mju3hcO', 3),
(6, 'emiel', 'middeldorp', 'emielmiddeldorp@gmail.com', '$2y$10$Hef/X2wutxjyX265ZBGD0eoHd2lzaCEK1oI8WlEQsmZc.4NA1rqzC', 1),
(7, 'brandon', 'klikjes', 'brandon@klikk.nl', '$2y$10$.BqONzzoAiP.PwwAAnZ8b.5HPr4bwNmtdkN.JIZsRTpUYuwn.GSAC', 2),
(8, 'Hanneke', 'Jones', 'redacteur@gmail.com', '$2y$10$AvQ411H3OLl68ocGf0QXSu3VNsAv6AMFS.iDdNj54e4IpcPzYRSaG', 2),
(9, 'jack', 'jones', 'jack.jones@gameplayparty.nl', '$2y$10$kZMbogDldNmljIw.T2.Fkeok0/J3Zy6.IZ8HbYv5auC.roeGTPJ5.', 1),
(10, 'ewa', 'dggd', 'bioscooptest@gmail.com', '$2y$10$tZjWMTMTNZzPs.7aE5AW2eUtNVmu9ExV/Yg5A3qLXlsHkJ.Zgzkm2', 3);

-- --------------------------------------------------------

--
-- Table structure for table `paginas`
--

CREATE TABLE `paginas` (
  `pagina_id` int(11) NOT NULL,
  `pagina_titel` varchar(256) NOT NULL,
  `pagina_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `paginas`
--

INSERT INTO `paginas` (`pagina_id`, `pagina_titel`, `pagina_content`) VALUES
(1, 'home', '<h1>GamePlayParty</h1><p><br></p><p>Breng jouw spel naar het volgende niveau op het grote scherm! Met een prive-theater dat speciaal voor jou en je crew is gereserveerd, heb je nog nooit eerder zo gespeeld. Maak er een toernooi van!</p><p>Voel je vrij om je eigen Xbox-spel mee te nemen om te spelen (persoonlijke spelconsoles of spellen voor andere spelconsoles zijn niet toegestaan).</p><p>Er is geen leeftijdsgrens voor videospelletjes op Xbox, maar de ouders moeten wel zelf kunnen beslissen over de spelbeoordeling van oudere gamers (d.w.z., titels met een \'M\'-rating).</p>'),
(2, 'reserveren', '<p>Al onze locaties!</p>'),
(3, 'contact', '<h1>Contact informatie</h1><ul><li>maasdriel</li><li>zeeland</li><li>69217</li><li>jack.jones@gameplayparty.nl</li><li>(656)-976-4980</li></ul><p><br></p>'),
(4, 'faq', '<h1>Veelgestelde vragen:&nbsp;&nbsp;</h1><p><br></p><p>Er is geen minimum voor groepen, maar het wordt aanbevolen dat de groepsgrootte tussen de 8 en 12 personen is. Dit zal de speeltijd voor elke speler maximaliseren.</p><p>Voel je vrij om je eigen Xbox-spel mee te nemen om te spelen (persoonlijke spelconsoles of spellen voor andere spelconsoles zijn niet toegestaan).</p><p>Er is geen leeftijdsgrens voor videospelletjes op Xbox, maar de ouders moeten wel zelf kunnen beslissen over de spelbeoordeling van oudere gamers (d.w.z., titels met een \'M\'-rating).</p><p>Feesten kunnen maximaal 6 weken voor de datum van uw voorkeur worden aangevraagd en zijn niet gegarandeerd tot de datum is bevestigd en geboekt door het theater.</p><p>Voor elke partij kan een aanbetaling van $50 worden gevraagd en kan op elk moment voor de partij aan de kassa worden betaald. De boeking kan pas worden gereserveerd na ontvangst van de aanbetaling.</p><p>Annuleringen met een opzegtermijn van minder dan 24 uur kunnen leiden tot een niet-terugvorderbare aanbetaling.</p><p>Buiten eten en drinken is niet toegestaan in de theatercomplexen, maar als u een verjaardag viert, kunt u uw eigen verjaardagstaart meenemen! Wij zorgen voor de borden, servetten en bestek.</p><p>Feesten kunnen op elk moment buiten de openingsuren geboekt worden. Een voorbeeldboeking is zaterdag 10.00 - 12.00 uur of eender welke nacht na 22.30 uur, in afwachting van beschikbaarheid in bepaalde theaters en kan rechtstreeks bij het theater worden bevestigd.</p><p>Cadeaubonnen, alle belangrijke creditcards en debetkaarten worden geaccepteerd als betaalmiddel.</p><p>Het is mogelijk dat er op sommige locaties doordeweeks geen partyboekingen beschikbaar zijn.</p><p><br></p><p>* Xbox Live kan afhankelijk van de huidige internetconnectiviteit en internetsnelheden variÃ«ren tussen de deelnemende locaties.</p><p>* De vereisten en beschikbare functies voor Xbox Live-gameplay voor meerdere spelers verschillen per systeem en speltitel.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `provincies`
--

CREATE TABLE `provincies` (
  `provincie_id` int(11) NOT NULL,
  `omschrijving` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `provincies`
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
-- Table structure for table `reserveringen`
--

CREATE TABLE `reserveringen` (
  `reservering_id` int(11) NOT NULL,
  `voornaam` varchar(256) DEFAULT NULL,
  `achternaam` varchar(256) DEFAULT NULL,
  `geslacht` varchar(256) DEFAULT NULL,
  `telefoonnummer` int(11) DEFAULT NULL,
  `geplande_datum` date DEFAULT NULL,
  `zaal_id` int(11) NOT NULL,
  `aantal_kinderen` int(11) NOT NULL,
  `aantal_volwassenen` int(11) NOT NULL,
  `straat` varchar(256) NOT NULL,
  `postcode` varchar(6) NOT NULL,
  `provincie` varchar(100) NOT NULL,
  `stad` varchar(256) NOT NULL,
  `aantal_tieners` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reserveringen`
--

INSERT INTO `reserveringen` (`reservering_id`, `voornaam`, `achternaam`, `geslacht`, `telefoonnummer`, `geplande_datum`, `zaal_id`, `aantal_kinderen`, `aantal_volwassenen`, `straat`, `postcode`, `provincie`, `stad`, `aantal_tieners`) VALUES
(7, 'piemel', 'in ', 'man', 9, '0001-01-01', 2, 12, 9876543, 'jou', 'mond', 'Drenthe', 'hahaha', 12),
(36, 'richard', 'van dijk', 'man', 64738493, '2019-10-08', 1, 5, 3, 'thuisbasis 23', '3920CV', 'Drenthe', 'Wijk aan zee', 6),
(37, 'richard', 'van dijk', 'man', 64738493, '2019-10-08', 1, 5, 3, 'thuisbasis 23', '3920CV', 'Drenthe', 'Wijk aan zee', 6),
(38, 'richard', 'van dijk', 'man', 64738493, '2019-10-08', 1, 5, 3, 'thuisbasis 23', '3920CV', 'Drenthe', 'Wijk aan zee', 6),
(39, 'richard', 'van dijk', 'man', 64738493, '2019-10-08', 1, 5, 3, 'thuisbasis 23', '3920CV', 'Drenthe', 'Wijk aan zee', 6),
(40, 'richard', 'van dijk', 'man', 64738493, '2019-10-08', 1, 5, 3, 'thuisbasis 23', '3920CV', 'Drenthe', 'Wijk aan zee', 6),
(41, 'richard', 'van dijk', 'man', 64738493, '2019-10-08', 1, 5, 3, 'thuisbasis 23', '3920CV', 'Drenthe', 'Wijk aan zee', 6),
(42, 'richard', 'van dijk', 'man', 64738493, '2019-10-08', 1, 5, 3, 'thuisbasis 23', '3920CV', 'Drenthe', 'Wijk aan zee', 6);

-- --------------------------------------------------------

--
-- Table structure for table `reservering_diensten`
--

CREATE TABLE `reservering_diensten` (
  `reservering_id` int(11) NOT NULL,
  `dienst_id` int(11) NOT NULL,
  `aantal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `rollen`
--

CREATE TABLE `rollen` (
  `rollen_id` int(11) NOT NULL,
  `omschrijving` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rollen`
--

INSERT INTO `rollen` (`rollen_id`, `omschrijving`) VALUES
(1, 'Beheerder'),
(2, 'Redacteur'),
(3, 'Bioscoop medewerker');

-- --------------------------------------------------------

--
-- Table structure for table `zalen`
--

CREATE TABLE `zalen` (
  `zaal_id` int(11) NOT NULL,
  `bioscoop_id` int(11) NOT NULL,
  `zaal_nummer` int(11) NOT NULL,
  `rolstoel_plaatsen` int(11) NOT NULL,
  `schermgrootte` varchar(256) NOT NULL,
  `faciliteiten` varchar(256) NOT NULL,
  `versies` varchar(256) NOT NULL,
  `begintijd` varchar(256) NOT NULL,
  `eindtijd` varchar(256) NOT NULL,
  `aantal_plaatsen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zalen`
--

INSERT INTO `zalen` (`zaal_id`, `bioscoop_id`, `zaal_nummer`, `rolstoel_plaatsen`, `schermgrootte`, `faciliteiten`, `versies`, `begintijd`, `eindtijd`, `aantal_plaatsen`) VALUES
(1, 1, 1, 2, '11.20m x 4.68m', 'Toegankelijk voor andersvaliden', 'Laser Dolby 7.1', '9:30', '11:00', 102),
(2, 1, 2, 2, '11.50m x 4.81m', 'Toegankelijk voor andersvaliden, Cosy zone', 'Laser Dolby 7.1', '9:00', '11:00', 99),
(14, 2, 2, 2, '17.20m x 7.30m', 'Toegankelijk voor andersvaliden Cosy zone', 'Dolby 5.1 3D', '7:45', '9:45', 369),
(15, 3, 1, 1, '15.70m x 6.80m', 'Toegankelijk voor andersvaliden', 'Dolby 5.1 3D', '11:00', '13:00', 291),
(16, 3, 2, 0, '11.00m x 4.90m', '-', 'Dolby 5.1 3D', '11:00', '13:00', 121);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bioscopen`
--
ALTER TABLE `bioscopen`
  ADD PRIMARY KEY (`bioscoop_id`);

--
-- Indexes for table `diensten`
--
ALTER TABLE `diensten`
  ADD PRIMARY KEY (`dienst_id`);

--
-- Indexes for table `gebruikers`
--
ALTER TABLE `gebruikers`
  ADD PRIMARY KEY (`gebruiker_id`);

--
-- Indexes for table `paginas`
--
ALTER TABLE `paginas`
  ADD PRIMARY KEY (`pagina_id`);

--
-- Indexes for table `provincies`
--
ALTER TABLE `provincies`
  ADD PRIMARY KEY (`provincie_id`);

--
-- Indexes for table `reserveringen`
--
ALTER TABLE `reserveringen`
  ADD PRIMARY KEY (`reservering_id`);

--
-- Indexes for table `rollen`
--
ALTER TABLE `rollen`
  ADD PRIMARY KEY (`rollen_id`);

--
-- Indexes for table `zalen`
--
ALTER TABLE `zalen`
  ADD PRIMARY KEY (`zaal_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bioscopen`
--
ALTER TABLE `bioscopen`
  MODIFY `bioscoop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `diensten`
--
ALTER TABLE `diensten`
  MODIFY `dienst_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gebruikers`
--
ALTER TABLE `gebruikers`
  MODIFY `gebruiker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `paginas`
--
ALTER TABLE `paginas`
  MODIFY `pagina_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `provincies`
--
ALTER TABLE `provincies`
  MODIFY `provincie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `reserveringen`
--
ALTER TABLE `reserveringen`
  MODIFY `reservering_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `rollen`
--
ALTER TABLE `rollen`
  MODIFY `rollen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `zalen`
--
ALTER TABLE `zalen`
  MODIFY `zaal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
