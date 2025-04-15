-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 27 mrt 2025 om 10:50
-- Serverversie: 10.4.28-MariaDB
-- PHP-versie: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thebarbellclub`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `account`
--

CREATE TABLE `account` (
  `ID` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Wachtwoord` varchar(255) NOT NULL,
  `GebruikerID` int(11) NOT NULL,
  `Functie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `account`
--

INSERT INTO `account` (`ID`, `Email`, `Wachtwoord`, `GebruikerID`, `Functie`) VALUES
(1, 'test12@gmail.com', '$2y$10$Fsbh8Whp0UT2VkGKuCGRZOnf4wN7BFnp23JUbo6Hyf7kYJTqmRrim', 2, 'Gebruiker'),
(2, 'test1@gmail.com', '$2y$10$QPkCzgFO7664OV4AyWvzy.F/Rzgxl2rjyWy/EKDwjBOg/GkDADSkK', 3, 'Gebruiker'),
(3, 'test123@gmail.com', '$2y$10$B6agN1c8rlKQZrCupp6fZeN5RCEu/pIB1GOVIiuVP3spXd1.g73fC', 4, 'Gebruiker'),
(4, 'souf@gmail.com', '$2y$10$7ReNSKogV.5FJuNO9MvnA.VDplNIOHiJeE7f5Zl/kqEW/ZrzsjAkG', 1, 'admin'),
(5, '12@gmail.com', '$2y$10$DGgJLJiCf7nekFGUoSAQNO0Fkwy49sN6pyyQaekUx9XWYLoqWgN2q', 5, 'Gebruiker'),
(6, 'sam@gmail.com', '$2y$10$rick015icVfajEvqEa7NMezI3bNaOT3fCKgEVuTbbAq9GHTANqt7S', 6, 'Gebruiker');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bestelling`
--

CREATE TABLE `bestelling` (
  `ID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `TotalePrijs` int(11) NOT NULL,
  `Datum` date NOT NULL,
  `GebruikerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `bestelling`
--

INSERT INTO `bestelling` (`ID`, `ProductID`, `TotalePrijs`, `Datum`, `GebruikerID`) VALUES
(1, 6, 100, '2025-03-26', 6),
(2, 6, 100, '2025-03-26', 6);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gebruiker`
--

CREATE TABLE `gebruiker` (
  `ID` int(11) NOT NULL,
  `Naam` varchar(30) NOT NULL,
  `Achternaam` varchar(30) NOT NULL,
  `Adres` varchar(100) NOT NULL,
  `Postcode` varchar(10) NOT NULL,
  `Huisnummer` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `gebruiker`
--

INSERT INTO `gebruiker` (`ID`, `Naam`, `Achternaam`, `Adres`, `Postcode`, `Huisnummer`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', '1'),
(2, 'soufiane', 'kidour', 'mm', '1212hr', '12'),
(3, 'hoi', 'hoi', 'hoi', 'hoi', '12'),
(4, 'test', 'test', 'test', 'test', '12'),
(5, 'test', 'test', '12', '12', '12'),
(6, 'sam', 'sam', 'sam', 'sam123', '123');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product`
--

CREATE TABLE `product` (
  `ID` int(11) NOT NULL,
  `Naam` varchar(255) NOT NULL,
  `Foto` varchar(255) NOT NULL,
  `Omschrijving` varchar(255) NOT NULL,
  `PrijsPerStuk` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `product`
--

INSERT INTO `product` (`ID`, `Naam`, `Foto`, `Omschrijving`, `PrijsPerStuk`) VALUES
(6, 'Barbell', '../Images/Barbell.png', 'deze barbell weegt 20kg', 100.00),
(7, 'Ez-bar', '../Images/Ez Bar.png', 'deze ez-bar weegt 10kg', 75.00),
(8, 'Utillity bar', '../Images/Utility Bar.png', 'deze utillity bar weegt 10kg', 90.00),
(9, 'dumbell', '../Images/10KG Dumbell.png', 'deze dumbell weegt 10kg', 20.00),
(10, 'dumbell', '../Images/20KG Dumbell.png', 'deze dumbell weegt 20kg', 30.00),
(11, 'dumbell', '../Images/30KG Dumbell.png', 'deze dumbell weegt 30kg', 40.00),
(12, 'Wristbands', '../Images/WristBands.png', 'deze wristbands gebruik je voor het benchen', 12.00),
(13, 'Straps', '../Images/Straps.png', 'deze straps gebruik je voor pull oefeningen ', 15.00);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `GebruikerID` (`GebruikerID`);

--
-- Indexen voor tabel `bestelling`
--
ALTER TABLE `bestelling`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `GebruikerID` (`GebruikerID`),
  ADD KEY `ProductID` (`ProductID`);

--
-- Indexen voor tabel `gebruiker`
--
ALTER TABLE `gebruiker`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `account`
--
ALTER TABLE `account`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT voor een tabel `bestelling`
--
ALTER TABLE `bestelling`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `gebruiker`
--
ALTER TABLE `gebruiker`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT voor een tabel `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `account_ibfk_1` FOREIGN KEY (`GebruikerID`) REFERENCES `gebruiker` (`ID`);

--
-- Beperkingen voor tabel `bestelling`
--
ALTER TABLE `bestelling`
  ADD CONSTRAINT `bestelling_ibfk_1` FOREIGN KEY (`GebruikerID`) REFERENCES `gebruiker` (`ID`),
  ADD CONSTRAINT `bestelling_ibfk_2` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
