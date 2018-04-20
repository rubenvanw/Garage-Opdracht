-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 18 apr 2018 om 11:09
-- Serverversie: 10.1.28-MariaDB
-- PHP-versie: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `garage`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `auto`
--

CREATE TABLE `auto` (
  `autokenteken` varchar(45) NOT NULL,
  `automerk` varchar(45) NOT NULL,
  `autotype` varchar(45) NOT NULL,
  `autokmstand` int(45) NOT NULL,
  `klantid` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `auto`
--

INSERT INTO `auto` (`autokenteken`, `automerk`, `autotype`, `autokmstand`, `klantid`) VALUES
('04-JDK-9', 'Volvo', 'Polo', 4087, 3),
('37-TVR-1', 'Trabant', 'Corsa', 80544, 2),
('07-BHG-7', 'Volvo', '27', 22442, 2);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `klant`
--

CREATE TABLE `klant` (
  `klantid` int(10) NOT NULL,
  `klantnaam` varchar(75) NOT NULL,
  `klantadres` varchar(75) NOT NULL,
  `klantpostcode` varchar(25) NOT NULL,
  `klantplaats` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `klant`
--

INSERT INTO `klant` (`klantid`, `klantnaam`, `klantadres`, `klantpostcode`, `klantplaats`) VALUES
(2, 'Saratlija, Bikola', 'Apenkooi 12', '4242BZ', 'Rotterdam'),
(3, 'Stoop, Sam', 'Stoopplein 45', '2023KL', 'Lekkerkerk'),
(5, 'van Woerkom, Ruben', 'Spurdostraat 45', '3536FZ', 'Vlaardingen');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `auto`
--
ALTER TABLE `auto`
  ADD KEY `fk_klantid` (`klantid`);

--
-- Indexen voor tabel `klant`
--
ALTER TABLE `klant`
  ADD PRIMARY KEY (`klantid`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `klant`
--
ALTER TABLE `klant`
  MODIFY `klantid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `auto`
--
ALTER TABLE `auto`
  ADD CONSTRAINT `fk_klantid` FOREIGN KEY (`klantid`) REFERENCES `klant` (`klantid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
