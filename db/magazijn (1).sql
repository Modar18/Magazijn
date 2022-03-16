-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 16 mrt 2022 om 12:59
-- Serverversie: 5.7.31
-- PHP-versie: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magazijn`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `aanvragen`
--

DROP TABLE IF EXISTS `aanvragen`;
CREATE TABLE IF NOT EXISTS `aanvragen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naam_aanvrager` varchar(255) NOT NULL,
  `user_id` int(30) DEFAULT NULL,
  `naam_artikel` varchar(255) NOT NULL,
  `uitgeleend` datetime NOT NULL,
  `opbrengst` datetime NOT NULL,
  `status` tinyint(1) DEFAULT NULL COMMENT '0 = not verified,1= verified	',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `aanvragen`
--

INSERT INTO `aanvragen` (`id`, `naam_aanvrager`, `user_id`, `naam_artikel`, `uitgeleend`, `opbrengst`, `status`) VALUES
(1, 'Mohamed Loul', 1, 'Laptop', '2022-03-01 19:07:06', '2022-03-01 19:07:06', 1),
(3, 'Bader', 2, 'Muis', '2022-03-26 16:29:33', '2022-03-28 16:29:33', 0),
(4, 'Adam', NULL, 'Laptop', '2022-03-12 12:47:08', '2022-03-18 12:47:08', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `artikelen`
--

DROP TABLE IF EXISTS `artikelen`;
CREATE TABLE IF NOT EXISTS `artikelen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(255) NOT NULL,
  `omschrijving` varchar(255) NOT NULL,
  `prijs` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `artikelen`
--

INSERT INTO `artikelen` (`id`, `naam`, `omschrijving`, `prijs`) VALUES
(1, 'Laptop', 'Msi 3450bbs', '233 € '),
(2, 'pen', 'pen onder water ', '23 € ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
