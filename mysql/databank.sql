-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 11 nov 2022 om 08:15
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
-- Tabelstructuur voor tabel `documenten`
--

CREATE TABLE `documenten` (
  `ruuid` char(36) NOT NULL,
  `puuid` char(36) DEFAULT NULL,
  `UserUuid` char(36) NOT NULL,
  `title` varchar(255) NOT NULL,
  `raport` longtext NOT NULL,
  `postdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexen voor tabel `documenten`
--
ALTER TABLE `documenten`
  ADD PRIMARY KEY (`ruuid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
