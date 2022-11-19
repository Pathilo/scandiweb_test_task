-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 19 Lis 2022, 19:14
-- Wersja serwera: 10.4.22-MariaDB
-- Wersja PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `products`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `product_main_information`
--

CREATE TABLE `product_main_information` (
  `SKU` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Price` varchar(255) NOT NULL DEFAULT '$',
  `specific_attribute` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `product_main_information`
--

INSERT INTO `product_main_information` (`SKU`, `Name`, `Price`, `specific_attribute`) VALUES
('gfdd', 'Patryk Staniszewski', '3', 'Size: 21 MB'),
('roboy', 'a', '1', 'Size: 1'),
('s', 's', '2', 'Size: 2'),
('sdaasdsdfa', 'P S', '12', 'Size: 1'),
('test', 'jhb', '22', 'Size: '),
('test12', 's', '3', 'Size: '),
('test2', '456', '456', 'Weight: 45 KG'),
('test44', 'fgh', '45', 'Size: 435 MB'),
('testnowy', 'edws', '23', 'Size: 3');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `product_main_information`
--
ALTER TABLE `product_main_information`
  ADD PRIMARY KEY (`SKU`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
