-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Maj 28, 2026 at 09:16 AM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_practice_v2`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klasy`
--

CREATE TABLE `klasy` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(20) NOT NULL,
  `wychowawca` varchar(100) NOT NULL,
  `sala` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `klasy`
--

INSERT INTO `klasy` (`id`, `nazwa`, `wychowawca`, `sala`) VALUES
(1, '1A', 'Anna Kowalska', '12'),
(2, '2B', 'Piotr Nowak', '24'),
(3, '3C', 'Magdalena Wiśniewska', '31');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `oceny`
--

CREATE TABLE `oceny` (
  `id` int(11) NOT NULL,
  `id_ucznia` int(11) NOT NULL,
  `przedmiot` varchar(50) NOT NULL,
  `ocena` int(11) NOT NULL,
  `data_wpisu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `oceny`
--

INSERT INTO `oceny` (`id`, `id_ucznia`, `przedmiot`, `ocena`, `data_wpisu`) VALUES
(1, 1, 'Matematyka', 5, '2026-03-10'),
(2, 1, 'Informatyka', 6, '2026-03-12'),
(3, 2, 'Język polski', 4, '2026-03-14'),
(4, 3, 'Matematyka', 3, '2026-03-15'),
(5, 4, 'Biologia', 5, '2026-03-18'),
(6, 5, 'Historia', 4, '2026-03-20'),
(7, 2, 'Informatyka', 5, '2026-03-22'),
(8, 3, 'Fizyka', 4, '2026-03-25');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uczniowie`
--

CREATE TABLE `uczniowie` (
  `id` int(11) NOT NULL,
  `imie` varchar(50) NOT NULL,
  `nazwisko` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `wiek` int(11) NOT NULL,
  `id_klasy` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uczniowie`
--

INSERT INTO `uczniowie` (`id`, `imie`, `nazwisko`, `email`, `wiek`, `id_klasy`) VALUES
(1, 'Jan', 'Nowicki', 'jan.nowicki@example.com', 17, 1),
(2, 'Katarzyna', 'Mazur', 'k.mazur@example.com', 18, 2),
(3, 'Michał', 'Zieliński', 'm.zielinski@example.com', 17, 1),
(4, 'Oliwia', 'Krawczyk', 'oliwia.k@example.com', 19, 3),
(5, 'Paweł', 'Lewandowski', 'pawel.l@example.com', 18, 2);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `klasy`
--
ALTER TABLE `klasy`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `oceny`
--
ALTER TABLE `oceny`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_ucznia` (`id_ucznia`);

--
-- Indeksy dla tabeli `uczniowie`
--
ALTER TABLE `uczniowie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_klasy` (`id_klasy`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `klasy`
--
ALTER TABLE `klasy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `oceny`
--
ALTER TABLE `oceny`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `uczniowie`
--
ALTER TABLE `uczniowie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `oceny`
--
ALTER TABLE `oceny`
  ADD CONSTRAINT `oceny_ibfk_1` FOREIGN KEY (`id_ucznia`) REFERENCES `uczniowie` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `uczniowie`
--
ALTER TABLE `uczniowie`
  ADD CONSTRAINT `uczniowie_ibfk_1` FOREIGN KEY (`id_klasy`) REFERENCES `klasy` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
