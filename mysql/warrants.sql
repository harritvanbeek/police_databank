-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 11 nov 2022 om 08:17
-- Serverversie: 10.3.24-MariaDB-cll-lve
-- PHP-versie: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u45525p41851_databank`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `warrants`
--

CREATE TABLE `warrants` (
  `id` int(11) NOT NULL,
  `citizenid` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `warrants`
--

INSERT INTO `warrants` (`id`, `citizenid`, `description`, `title`, `author`, `created`) VALUES
(34, 'OJH87129', 'Dossiernr:#1207<br />\r\nbsn:ojh87129<br />\r\nNaam persoon: Exx gijs<br />\r\nReden bevel:moord collega buiten dienst[Boa Cheng] ontvoering collega buiten dienst[ian houwen] moord burger [Kees Milf]<br />\r\n<br />\r\nDatum Bevel: 20/02/2022 tijd:21:47', 'arrestatie bevel Exx gijs', 'John van Vliet', '2022-02-20 21:50:53');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `warrants`
--
ALTER TABLE `warrants`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `warrants`
--
ALTER TABLE `warrants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
