-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Počítač: sql4.webzdarma.cz:3306
-- Vytvořeno: Čtv 15. úno 2024, 12:52
-- Verze serveru: 8.0.34-26
-- Verze PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `faroswzcz6369`
--
CREATE DATABASE IF NOT EXISTS `faroswzcz6369` DEFAULT CHARACTER SET utf8mb3 COLLATE utf8mb3_czech_ci;
USE `faroswzcz6369`;

-- --------------------------------------------------------

--
-- Struktura tabulky `formular`
--

CREATE TABLE `formular` (
  `id` smallint UNSIGNED NOT NULL,
  `ec` smallint UNSIGNED NOT NULL,
  `jmeno` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_czech_ci NOT NULL,
  `prijmeni` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_czech_ci NOT NULL,
  `rc` int UNSIGNED NOT NULL,
  `adresa` varchar(50) COLLATE utf8mb3_czech_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb3_czech_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_czech_ci;

--
-- Vypisuji data pro tabulku `formular`
--

INSERT INTO `formular` (`id`, `ec`, `jmeno`, `prijmeni`, `rc`, `adresa`, `email`) VALUES
(1, 2401, 'Klára', 'Holcová', 1155110011, 'Frýdlant 1', 'asd@asd.com'),
(2, 2402, 'Anna', 'Malá', 1236547899, 'Liberec 20', 'qwe@qwe.com'),
(3, 2403, 'Karel', 'Malý', 1118745698, 'Turnov 2', 'wert@fgh.com'),
(4, 2404, 'Jan', 'Pan', 1278965412, 'Semily', 'uio@fg.com'),
(5, 2405, 'Eliška', 'Rybička', 1425369878, 'Dub', 'iop@fgh.com');

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `formular`
--
ALTER TABLE `formular`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `formular`
--
ALTER TABLE `formular`
  MODIFY `id` smallint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
