-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2019 at 08:32 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

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
  `postcode` varchar(256) DEFAULT NULL,
  `gebruiker_id` int(11) DEFAULT NULL,
  `provincie_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bioscopen`
--

INSERT INTO `bioscopen` (`bioscoop_id`, `naam`, `info`, `adres`, `postcode`, `gebruiker_id`, `provincie_id`) VALUES
(1, 'Kinepolis Jaarbeurs', 'Met Kinepolis Jaarbeurs (14 zalen, 3.010 stoelen) heeft Utrecht eindelijk een moderne megabioscoop in de binnenstad: de grootste bioscoop van Utrecht, en een van de grootste bioscopen van Nederland. Kinepolis Jaarbeurs biedt elke filmbezoeker the ultimate cinema experience: ruime en comfortabele stoelen, royale beenruimte, en beeld en geluid van het allerhoogste niveau. Alle zalen zijn voorzien van laserprojectie. Voor een nog intensere bioscoopervaring kijk je een film in Laser ULTRA, met haarscherp laserbeeld en het ruimtelijke geluid van Dolby Atmos. Kinepolis Jaarbeurs ligt op slechts een paar minuten loopafstand van het Centraal Station van Utrecht, tegen de Jaarbeurshallen aan. Een hapje eten of borrelen voor of na de film? Dat kan bij de naastgelegen foodcourt Speys.', 'Jaarbeursboulevard 300', '3521 BC', 3, 7),
(2, 'Kinepolis Almere', 'Kinepolis Almere is sinds 2004 gevestigd in het levendige centrum van Almere. Het ontwerp van het imposante gebouw is van de bekroonde architect Rem Koolhaas. De megabioscoop telt 8 zalen met in totaal 2137 comfortabele stoelen. Bij binnenkomst is de trap die diagonaal door het gebouw loopt, de eerste blikvanger. Kinepolis Almere is sinds november 2017 verbouwd om meer aan te sluiten bij de look-and-feel van Kinepolis. Dit betekent dat alle zetels zijn vernieuwd,  dat er automatische ticket machines (ATMs) op de trap zijn geplaatst en er een volledige nieuwe shop met een ruimer assortiment is gekomen.', 'Forum 16', '1315 TH', 4, 5),
(3, 'Kinepolis Den helder', 'Kinepolis Den Helder opende in 2003 haar deuren in gebouw 51 op Willemsoord, de voormalige scheeps- en onderhoudswerf voor de Koninklijke Marine. Verschillende details van de Oude Rijkswerf zijn intact gelaten; twee van de zalen zijn nieuw tegen de Scheepswerkerplaats aangebouwd. De bioscoop in de kop van Noord-Holland heeft in totaal 6 moderne bioscoopzalen en 776 stoelen.', 'Willemsoord 51', '1781 AS', 5, 8);

-- --------------------------------------------------------

--
-- Table structure for table `diensten`
--

CREATE TABLE `diensten` (
  `dienst_id` int(11) NOT NULL,
  `zaal_id` int(11) NOT NULL,
  `omschrijving` text NOT NULL,
  `tarief` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(3, 'contact', '<h1>Contacten informatie</h1><ul><li>maasdriel</li><li>zeeland</li><li>69217</li><li>jack.jones@gameplayparty.nl</li><li>(656)-976-4980</li></ul><p><br></p>'),
(4, 'faq', '<h1>Veelgestelde vragen:&nbsp;&nbsp;</h1><p><br></p><p>Er is geen minimum voor groepen, maar het wordt aanbevolen dat de groepsgrootte tussen de 8 en 12 personen is. Dit zal de speeltijd voor elke speler maximaliseren.</p><p>Voel je vrij om je eigen Xbox-spel mee te nemen om te spelen (persoonlijke spelconsoles of spellen voor andere spelconsoles zijn niet toegestaan).</p><p>Er is geen leeftijdsgrens voor videospelletjes op Xbox, maar de ouders moeten wel zelf kunnen beslissen over de spelbeoordeling van oudere gamers (d.w.z., titels met een \'M\'-rating).</p><p>Feesten kunnen maximaal 6 weken voor de datum van uw voorkeur worden aangevraagd en zijn niet gegarandeerd tot de datum is bevestigd en geboekt door het theater.</p><p>Voor elke partij kan een aanbetaling van $50 worden gevraagd en kan op elk moment voor de partij aan de kassa worden betaald. De boeking kan pas worden gereserveerd na ontvangst van de aanbetaling.</p><p>Annuleringen met een opzegtermijn van minder dan 24 uur kunnen leiden tot een niet-terugvorderbare aanbetaling.</p><p>Buiten eten en drinken is niet toegestaan in de theatercomplexen, maar als u een verjaardag viert, kunt u uw eigen verjaardagstaart meenemen! Wij zorgen voor de borden, servetten en bestek.</p><p>Feesten kunnen op elk moment buiten de openingsuren geboekt worden. Een voorbeeldboeking is zaterdag 10.00 - 12.00 uur of eender welke nacht na 22.30 uur, in afwachting van beschikbaarheid in bepaalde theaters en kan rechtstreeks bij het theater worden bevestigd.</p><p>Cadeaubonnen, alle belangrijke creditcards en debetkaarten worden geaccepteerd als betaalmiddel.</p><p>Het is mogelijk dat er op sommige locaties doordeweeks geen partyboekingen beschikbaar zijn.</p><p><br></p><p>* Xbox Live kan afhankelijk van de huidige internetconnectiviteit en internetsnelheden variÃ«ren tussen de deelnemende locaties.</p><p>* De vereisten en beschikbare functies voor Xbox Live-gameplay voor meerdere spelers verschillen per systeem en speltitel.</p>'),
(5, 'cookies', '<h1>Cookies Policy</h1>\r\n<br>\r\n<p>Last updated: October 02, 2019</p>\r\n<br>\r\n<p>GamePlayParty (\"us\", \"we\", or \"our\") uses cookies on the www.gameplayparty.nl website (the \"Service\"). By using the Service, you consent to the use of cookies.</p>\r\n<br>\r\n<p>Our Cookies Policy explains what cookies are, how we use cookies, how third-parties we may partner with may use cookies on the Service, your choices regarding cookies and further information about cookies. This Cookies Policy  for GamePlayParty has been created with the help of <a href=\"https://www.termsfeed.com/\">TermsFeed</a>.</p>\r\n<br>\r\n<h2>What are cookies</h2>\r\n<br>\r\n<p>Cookies are small pieces of text sent by your web browser by a website you visit. A cookie file is stored in your web browser and allows the Service or a third-party to recognize you and make your next visit easier and the Service more useful to you.</p>\r\n<br>\r\n<p>Cookies can be \"persistent\" or \"session\" cookies. Persistent cookies remain on your personal computer or mobile device when you go offline, while session cookies are deleted as soon as you close your web browser.</p>\r\n<br>\r\n<h2>How GamePlayParty uses cookies</h2>\r\n<br>\r\n<p>When you use and access the Service, we may place a number of cookies files in your web browser.</p>\r\n<br>\r\n<p>We use cookies for the following purposes:</p>\r\n<br>\r\n<ul>\r\n    <li>\r\n        <p>To enable certain functions of the Service</p>\r\n\r\n        <p>We use both session and persistent cookies on the Service and we use different types of cookies to run the Service:</p>\r\n\r\n        <p>Essential cookies. We may use essential cookies to authenticate users and prevent fraudulent use of user accounts.</p>\r\n    </li>\r\n</ul>\r\n<br>\r\n<h2>What are your choices regarding cookies</h2>\r\n<br>\r\n<p>If you\'d like to delete cookies or instruct your web browser to delete or refuse cookies, please visit the help pages of your web browser. As an European citizen, under GDPR, you have certain individual rights. You can learn more about these rights in the <a href=\"https://termsfeed.com/blog/gdpr/#Individual_Rights_Under_the_GDPR\">GDPR Guide</a>.</p>\r\n<br>\r\n<p>Please note, however, that if you delete cookies or refuse to accept them, you might not be able to use all of the features we offer, you may not be able to store your preferences, and some of our pages might not display properly.</p>\r\n<br>\r\n<ul>\r\n    <li>\r\n        <p>For the Chrome web browser, please visit this page from Google: <a href=\"https://support.google.com/accounts/answer/32050\">https://support.google.com/accounts/answer/32050</a></p>\r\n    </li>\r\n    <li>\r\n        <p>For the Internet Explorer web browser, please visit this page from Microsoft: <a href=\"http://support.microsoft.com/kb/278835\">http://support.microsoft.com/kb/278835</a></p>\r\n    </li>\r\n    <li>\r\n        <p>For the Firefox web browser, please visit this page from Mozilla: <a href=\"https://support.mozilla.org/en-US/kb/delete-cookies-remove-info-websites-stored\">https://support.mozilla.org/en-US/kb/delete-cookies-remove-info-websites-stored</a></p>\r\n    </li>\r\n    <li>\r\n        <p>For the Safari web browser, please visit this page from Apple: <a href=\"https://support.apple.com/kb/PH21411?locale=en_US\">https://support.apple.com/kb/PH21411?locale=en_US</a></p>\r\n    </li>\r\n    <li>\r\n        <p>For any other web browser, please visit your web browser\'s official web pages.</p>\r\n    </li>\r\n</ul>\r\n<br>\r\n<h2>Where can you find more information about cookies</h2>\r\n<br>\r\n<p>You can learn more about cookies and the following third-party websites:</p>\r\n<br>\r\n<ul>\r\n    <li>\r\n        <p>AllAboutCookies: <a href=\"http://www.allaboutcookies.org/\">http://www.allaboutcookies.org/</a></p>\r\n    </li>\r\n    <li>\r\n        <p>Network Advertising Initiative: <a href=\"http://www.networkadvertising.org/\">http://www.networkadvertising.org/</a></p>\r\n    </li>\r\n</ul>'),
(6, 'Privacy', '<h1>Privacybeleid</h1>\r\n<br>\r\n<p>Ingangsdatum: October 02, 2019</p>\r\n<br>\r\n<p>GamePlayParty (\"ons\", \"wij\" of \"onze\") beheert de http://www.gameplayparty.nl website (\"hierna genoemd Dienst\").</p>\r\n<br>\r\n<p>Deze pagina bevat informatie over ons beleid met betrekking tot de verzameling, het gebruik en de openbaarmaking van uw persoonsgegevens wanneer u onze Dienst gebruikt en de keuzes die u hebt met betrekking tot die gegevens. The Privacy Policy  for GamePlayParty has been created with the help of <a href=\"https://termsfeed.com/privacy-policy-generator/\">TermsFeed Privacy Policy Generator</a>.</p>\r\n<br>\r\n<p>Wij gebruiken uw gegevens om de Dienst te leveren en te verbeteren. Wanneer u de Dienst gebruikt, gaat u akkoord met de verzameling en het gebruik van informatie in overeenstemming met dit beleid. Tenzij anders bepaald in dit Privacybeleid heeft de terminologie die wordt gebruikt in dit Privacybeleid dezelfde betekenis als in onze Algemene voorwaarden, beschikbaar op http://www.gameplayparty.nl</p>\r\n<br>\r\n<h2>Definities</h2>\r\n<ul>\r\n    <li>\r\n        <p><strong>Dienst</strong></p>\r\n        <p>Onder dienst verstaan wij de http://www.gameplayparty.nl website beheerd door GamePlayParty</p>\r\n    </li>\r\n    <li>\r\n        <p><strong>Gebruiksgegevens</strong></p>\r\n        <p>Onder gebruiksgegevens verstaan wij automatisch verzamelde gegevens die worden gegenereerd door het gebruik van de Dienst of van de infrastructuur van de Dienst zelf (bijvoorbeeld, de duur van het bezoek aan een pagina).</p>\r\n    </li>\r\n    <li>\r\n        <p><strong>Gebruiksgegevens</strong></p>\r\n        <p>Onder gebruiksgegevens verstaan wij automatisch verzamelde gegevens die worden gegenereerd door het gebruik van de Dienst of van de infrastructuur van de Dienst zelf (bijvoorbeeld, de duur van het bezoek aan een pagina).</p>\r\n    </li>\r\n    <li>\r\n        <p><strong>Cookies</strong></p>\r\n        <p>Cookies zijn informatiebestandjes die worden opgeslagen op uw apparaat (computer of mobiele apparaat).</p>\r\n    </li>\r\n</ul>\r\n<br>\r\n<h2>Gegevensverzameling en gebruik</h2>\r\n<p>Wij verzamelen verschillende soorten gegevens voor uiteenlopende doeleinden om onze Dienst aan u te kunnen leveren en om hem te verbeteren.</p>\r\n<br>\r\n<h3>Soorten gegevens die worden verzameld</h3>\r\n<br>\r\n<h4>Persoonsgegevens</h4>\r\n<p>Wanneer u onze Dienst gebruikt, kunnen wij u vragen ons bepaalde persoonlijk identificeerbare informatie te verstrekken die kan worden gebruikt om contact op te nemen met u of om u te identificeren (\"Persoonsgegevens\"). Deze persoonlijk identificeerbare informatie kan omvatten maar is niet beperkt tot:</p>\r\n<br>\r\n<ul>\r\n    <li>E-mailadres</li>    <li>Voor- en achternaam</li>    <li>Telefoonnummer</li>    <li>Adres, provincie, postcode, stad</li>    <li>Cookies en Gebruiksgegevens</li>\r\n</ul>\r\n<br>\r\n<h4>Gebruiksgegevens</h4>\r\n<br>\r\n<p>Wij kunnen ook gegevens verzamelen over de wijze waarop de gebruiker toegang krijgt tot de Dienst en hoe deze wordt gebruikt (\"Gebruiksgegevens\") Deze Gebruiksgegevens kunnen informatie bevatten zoals het Internet Protocol adres (IP-adres) van uw computer, het type browser, de versie van de browser, de pagina\'s die u hebt bezocht op onze Dienst, het tijdstip en de datum van uw bezoek, de tijd die u hebt doorgebracht op die pagina\'s, unieke apparaat-ID\'s en andere diagnostische gegevens.</p>\r\n<br>\r\n<h4>Tracking &amp; cookiegegevens</h4>\r\n<p>Wij gebruiken cookies en soortgelijke volgtechnologieën om de activiteit op onze Dienst te volgen en we bewaren bepaalde informatie.</p>\r\n<p>Cookies zijn bestanden met een kleine hoeveelheid gegevens die een anonieme unieke ID kunnen bevatten. Cookies worden van een website verzonden naar uw browser en opgeslagen op uw apparaat. Er worden ook andere volgtechnologieën gebruikt zoals beacons, tags en scripts om gegevens te verzamelen en te volgen en om onze Dienst te verbeteren en te analyseren.</p>\r\n<p>U kunt uw browser instellen om alle cookies te weigeren of om aan te geven wanneer een cookie wordt verzonden. Maar als u geen cookies aanvaardt, kunt u mogelijk niet alle functies van onze Dienst gebruiken.</p>\r\n<p>Voorbeelden van cookies die wij gebruiken:</p>\r\n<ul>\r\n    <li><strong>Sessiecookies.</strong> Wij gebruiken Sessiecookies om onze Dienst te beheren.</li>\r\n    <li><strong>Voorkeurcookies.</strong>  Wij gebruiken Voorkeurcookies om uw voorkeuren en uiteenlopende instellingen bij te houden.</li>\r\n    <li><strong>Veiligheidscookies.</strong> Wij gebruiken Veiligheidscookies voor veiligheidsdoeleinden.</li>\r\n</ul>\r\n<br>\r\n<h2>Gebruik van gegevens</h2>\r\n<p>GamePlayParty gebruikt de verzamelde gegevens voor uiteenlopende doeleinden:</p>\r\n<ul>\r\n    <li>Om onze Dienst te leveren en te onderhouden</li>\r\n    <li>Om u wijzigingen in onze Dienst te melden</li>\r\n    <li>Om u de mogelijkheid te bieden om, indien gewenst, deel te nemen aan de interactieve functies van onze Dienst</li>\r\n    <li>Om onze klanten steun te verlenen</li>\r\n    <li>Om analyse- of waardevolle gegevens te verzamelen die we kunnen toepassen om onze Dienst te verbeteren</li>\r\n    <li>Om toezicht te houden op het gebruik van onze Dienst</li>\r\n    <li>Om technische problemen te detecteren, te voorkomen en te behandelen</li>\r\n    <li>Om u nieuws, speciale aanbiedingen en algemene informatie te bieden over onze goederen, diensten en evenementen die gelijkaardig zijn aan wat u in het verleden al gekocht hebt of waar u informatie over hebt gevraagd, tenzij u hebt aangegeven dat u dergelijke informatie niet wenst te ontvangen.</li>\r\n</ul>\r\n<br>\r\n<h2>Overdracht van gegevens</h2>\r\n<p>Uw gegevens, inclusief Persoonsgegevens, kunnen worden overgedragen naar - en bewaard op - computers die zich buiten het rechtsgebied van uw provincie, land of een andere overheidsinstantie bevinden waar de wetgeving inzake gegevensbescherming kan verschillen van de wetgeving in uw rechtsgebied.</p>\r\n<p>Let erop dat, als u zich buiten Netherlands bevindt en u ons gegevens verstrekt, wij deze gegevens, inclusief Persoonsgegevens, overdragen naar Netherlands en ze daar verwerken.</p>\r\n<p>Uw instemming met dit Privacybeleid gevolgd door uw indiening van dergelijke gegevens geven aan dat u akkoord gaat met die overdracht.</p>\r\n<p>GamePlayParty zal alle redelijkerwijs noodzakelijke stappen ondernemen om ervoor te zorgen dat uw gegevens veilig en in overeenstemming met dit Privacybeleid worden behandeld en dat uw Persoonsgegevens nooit worden overgedragen aan een organisatie of een land als er geen gepaste controles zijn ingesteld, inclusief de veiligheid van uw gegevens en andere persoonsgegevens.</p>\r\n<br>\r\n<h2>Openbaarmaking van gegevens</h2>\r\n<br>\r\n<h3>Wettelijke vereisten</h3>\r\n<p>GamePlayParty kan uw Persoonsgegevens openbaar maken als het te goeder trouw de mening is toegedaan dat een dergelijke handeling noodzakelijk is:</p>\r\n<ul>\r\n    <li>Om te voldoen aan een wettelijke verplichting</li>\r\n    <li>Om de rechten en eigendom van GamePlayParty te beschermen en te verdedigen</li>\r\n    <li>Om mogelijke misstanden te voorkomen of te onderzoeken in verband met de Dienst</li>\r\n    <li>Om de persoonlijke veiligheid van gebruikers van de Dienst of het publiek te beschermen</li>\r\n    <li>Als bescherming tegen juridische aansprakelijkheid</li>\r\n</ul>\r\n<br>\r\n<p>Als Europees staatsburger hebt u volgens GDPR bepaalde individuele rechten. U kunt meer over deze rechten lezen in de <a href=\"https://termsfeed.com/blog/gdpr/#Individual_Rights_Under_the_GDPR\">GDPR-handleiding</a>.</p>\r\n<br>\r\n<h2>Veiligheid van gegevens</h2>\r\n<p>De veiligheid van uw gegevens is belangrijk voor ons, maar vergeet niet dat geen enkele methode van verzending via het internet of elektronische methode van opslag 100% veilig is. Hoewel wij ernaar streven commercieel aanvaardbare middelen toe te passen om uw Persoonsgegevens te beschermen, kunnen wij de absolute veiligheid niet waarborgen.</p>\r\n<br>\r\n<h2>Dienstverleners</h2>\r\n<p>Wij kunnen externe bedrijven en personen aanstellen om onze Dienst (\"Dienstverleners\") te vereenvoudigen, om de Dienst te leveren in onze naam, om diensten uit te voeren in het kader van onze Dienst of om ons te helpen bij de analyse van hoe onze Dienst wordt gebruikt.</p>\r\n<p>Deze externe partijen hebben enkel toegang tot uw Persoonsgegevens om deze taken uit te voeren in onze naam en zij mogen deze niet openbaar maken aan anderen of ze gebruiken voor andere doeleinden.</p>\r\n\r\n<br>\r\n\r\n<h2>Links naar andere sites</h2>\r\n<p>Onze Dienst kan links bevatten naar andere sites die niet door ons worden beheerd. Als u klikt op een link van een externe partij wordt u naar de site van die externe partij gebracht. Wij raden u sterk aan het Privacybeleid te verifiëren van elke site die u bezoekt.</p>\r\n<p>Wij hebben geen controle over en aanvaarden geen aansprakelijkheid met betrekking tot de inhoud, het privacybeleid of de privacypraktijken van de sites of diensten van een externe partij.</p>\r\n<br>\r\n\r\n<h2>Privacy van kinderen</h2>\r\n<p>Onze dienst richt zich niet op personen die jonger zijn dan 18 (\"Kinderen\").</p>\r\n<p>Wij verzamelen nooit bewust persoonlijk identificeerbare informatie van iemand die jonger is dan 18 jaar oud. Als u een ouder of voogd bent en u stelt vast dat uw kind ons persoonsgegevens heeft geleverd, vragen wij u contact op te nemen met ons. Als u vaststelt dat wij persoonsgegevens hebben verzameld van kinderen zonder de verificatie van ouderlijk toezicht zullen wij de nodige stappen ondernemen om die informatie te verwijderen van onze servers.</p>\r\n<br>\r\n\r\n<h2>Wijzigingen aan dit Privacybeleid</h2>\r\n<p>Wij kunnen ons Privacybeleid op gezette tijden bijwerken. Wij zullen u op de hoogte brengen van eventuele wijzigingen door het nieuwe Privacybeleid te publiceren op deze pagina.</p>\r\n<p>Wij zullen u op de hoogte brengen via e-mail en/of een duidelijke melding op onze Dienst voor de wijzigingen van kracht gaan en wij zullen de \"aanvangsdatum\" bijwerken die vermeld staat bovenaan in dit Privacybeleid.</p>\r\n<p>Wij raden u aan dit Privacybeleid regelmatig te controleren op eventuele wijzigingen. Wijzigingen aan dit Privacybeleid gaan van kracht op het moment dat ze worden gepubliceerd op deze pagina.</p>\r\n<br>\r\n\r\n<h2>Contact opnemen</h2>\r\n<p>Als u vragen hebt over dit Privacybeleid kunt u contact opnemen met ons:</p>\r\n<ul>\r\n    <li>Via email: info@gameplayparty.nl</li>\r\n\r\n</ul>'),
(7, 'refund', '<h1>Returns and Refunds Policy</h1>\r\n<br>\r\n\r\n<p>Thank you for shopping at GamePlayParty.</p>\r\n<br>\r\n<p>Please read this policy carefully. This is the Return and Refund Policy of GamePlayParty. The Return and Refund Policy  for GamePlayParty has been created with the help of <a href=\"https://www.termsfeed.com/\">TermsFeed</a>.</p>\r\n<br>\r\n<h2>Digital products</h2>\r\n<br>\r\n<p>We do not issue refunds for digital products once the order is confirmed and the product is sent.</p>\r\n<br>\r\n<p>We recommend contacting us for assistance if you experience any issues receiving or downloading our products.</p>\r\n<br>\r\n<h2>Contact us</h2>\r\n<br>\r\n<p>If you have any questions about our Returns and Refunds Policy, please contact us:</p>\r\n<br>\r\n<ul>\r\n    <li>\r\n        <p>By email: annuleer@gameplayparty.nl</p>\r\n    </li>\r\n</ul>'),
(8, 'terms', '<h1>Terms and Conditions (\"Terms\")</h1>\r\n<br>\r\n<p>Last updated: October 02, 2019</p>\r\n<br>\r\n<p>Please read these Terms and Conditions (\"Terms\", \"Terms and Conditions\") carefully before using the http://www.gameplayparty.nl website (the \"Service\") operated by GamePlayParty (\"us\", \"we\", or \"our\").</p>\r\n<br>\r\n<p>Your access to and use of the Service is conditioned on your acceptance of and compliance with these Terms. These Terms apply to all visitors, users and others who access or use the Service.</p>\r\n<br>\r\n<p>By accessing or using the Service you agree to be bound by these Terms. If you disagree with any part of the terms then you may not access the Service. The Terms and Conditions agreement  for GamePlayParty has been created with the help of <a href=\"https://www.termsfeed.com/\">TermsFeed</a>.</p>\r\n<br>\r\n<h2>Links To Other Web Sites</h2>\r\n<br>\r\n<p>Our Service may contain links to third-party web sites or services that are not owned or controlled by GamePlayParty.</p>\r\n<br>\r\n<p>GamePlayParty has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third party web sites or services. You further acknowledge and agree that GamePlayParty shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with use of or reliance on any such content, goods or services available on or through any such web sites or services.</p>\r\n<br>\r\n<p>We strongly advise you to read the terms and conditions and privacy policies of any third-party web sites or services that you visit.</p>\r\n<br>\r\n<h2>Termination</h2>\r\n<br>\r\n<p>We may terminate or suspend access to our Service immediately, without prior notice or liability, for any reason whatsoever, including without limitation if you breach the Terms.</p>\r\n<br>\r\n<p>All provisions of the Terms which by their nature should survive termination shall survive termination, including, without limitation, ownership provisions, warranty disclaimers, indemnity and limitations of liability.</p>\r\n<br>\r\n<h2>Governing Law</h2>\r\n<br>\r\n<p>These Terms shall be governed and construed in accordance with the laws of Netherlands, without regard to its conflict of law provisions.</p>\r\n<br>\r\n<p>Our failure to enforce any right or provision of these Terms will not be considered a waiver of those rights. If any provision of these Terms is held to be invalid or unenforceable by a court, the remaining provisions of these Terms will remain in effect. These Terms constitute the entire agreement between us regarding our Service, and supersede and replace any prior agreements we might have between us regarding the Service.</p>\r\n<br>\r\n<h2>Changes</h2>\r\n<br>\r\n<p>We reserve the right, at our sole discretion, to modify or replace these Terms at any time. If a revision is material we will try to provide at least 15 days notice prior to any new terms taking effect. What constitutes a material change will be determined at our sole discretion.</p>\r\n<br>\r\n<p>By continuing to access or use our Service after those revisions become effective, you agree to be bound by the revised terms. If you do not agree to the new terms, please stop using the Service.</p>\r\n<br>\r\n<h2>Contact Us</h2>\r\n<br>\r\n<p>If you have any questions about these Terms, please contact us.</p>');

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
  `bioscoop_id` int(11) DEFAULT NULL,
  `voornaam` varchar(256) DEFAULT NULL,
  `achternaam` varchar(256) DEFAULT NULL,
  `geslacht` varchar(256) DEFAULT NULL,
  `telefoonnummer` int(11) DEFAULT NULL,
  `geplande_datum` date DEFAULT NULL,
  `begintijd` varchar(256) DEFAULT NULL,
  `eindtijd` varchar(256) DEFAULT NULL,
  `zaal_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(3, 1, 3, 2, '12.00m x 5.02m', 'Toegankelijk voor andersvaliden, Cosy zone', 'Laser Dolby 7.1\r\n', '9:00', '11:00', 166),
(13, 2, 1, 2, '21.00m x 9.00m', 'Toegankelijk voor andersvalidenCosy zone', 'Dolby 7.1 3D ', '7:45', '9:45', 517),
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
  MODIFY `dienst_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gebruikers`
--
ALTER TABLE `gebruikers`
  MODIFY `gebruiker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `paginas`
--
ALTER TABLE `paginas`
  MODIFY `pagina_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `provincies`
--
ALTER TABLE `provincies`
  MODIFY `provincie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `reserveringen`
--
ALTER TABLE `reserveringen`
  MODIFY `reservering_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rollen`
--
ALTER TABLE `rollen`
  MODIFY `rollen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `zalen`
--
ALTER TABLE `zalen`
  MODIFY `zaal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
