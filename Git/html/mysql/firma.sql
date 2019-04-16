-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 24 Lut 2019, 15:49
-- Wersja serwera: 10.1.28-MariaDB
-- Wersja PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `firma`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `marka`
--

CREATE TABLE `marka` (
  `idmarka` int(10) UNSIGNED NOT NULL,
  `nazwa` varchar(20) NOT NULL,
  `markaid` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `marka`
--

INSERT INTO `marka` (`idmarka`, `nazwa`, `markaid`) VALUES
(1, 'Ferrari', 0),
(2, 'Opel', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `model`
--

CREATE TABLE `model` (
  `modelid` int(11) NOT NULL,
  `model` int(10) UNSIGNED NOT NULL,
  `idmarka` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pracownik`
--

CREATE TABLE `pracownik` (
  `id` int(10) UNSIGNED NOT NULL,
  `imie` varchar(20) NOT NULL,
  `nazwisko` varchar(30) NOT NULL,
  `miasto` varchar(30) NOT NULL,
  `wiek` date NOT NULL,
  `umiejetnosci` varchar(20) NOT NULL,
  `aktywny` enum('aktywny','zablokowany','usuniety') NOT NULL DEFAULT 'zablokowany'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `pracownik`
--

INSERT INTO `pracownik` (`id`, `imie`, `nazwisko`, `miasto`, `wiek`, `umiejetnosci`, `aktywny`) VALUES
(1, 'Janusz', 'Kowalski', 'Poznań', '1990-02-24', 'Senior', ''),
(2, 'Julia', 'Kowal', 'Poznań', '1987-04-15', 'Junior', ''),
(4, 'Anna', 'Nowak', 'Konin', '1995-04-03', 'Senior', ''),
(5, 'Jan', 'Adamowicz', 'Gniezno', '1994-03-21', 'Junior', 'zablokowany');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `samochody`
--

CREATE TABLE `samochody` (
  `rejestracja` varchar(10) NOT NULL,
  `idPracownika` int(10) UNSIGNED NOT NULL,
  `idMarki` int(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `samochody`
--

INSERT INTO `samochody` (`rejestracja`, `idPracownika`, `idMarki`) VALUES
('PO1234', 4, 1),
('PZ321321', 1, 2);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `marka`
--
ALTER TABLE `marka`
  ADD PRIMARY KEY (`idmarka`),
  ADD KEY `markaid` (`markaid`);

--
-- Indexes for table `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`modelid`),
  ADD KEY `idmarka` (`idmarka`);

--
-- Indexes for table `pracownik`
--
ALTER TABLE `pracownik`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Aktywny` (`aktywny`);

--
-- Indexes for table `samochody`
--
ALTER TABLE `samochody`
  ADD PRIMARY KEY (`rejestracja`),
  ADD KEY `idPracownika` (`idPracownika`),
  ADD KEY `idMarki` (`idMarki`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `pracownik`
--
ALTER TABLE `pracownik`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `model`
--
ALTER TABLE `model`
  ADD CONSTRAINT `model_ibfk_1` FOREIGN KEY (`idmarka`) REFERENCES `marka` (`idmarka`);

--
-- Ograniczenia dla tabeli `samochody`
--
ALTER TABLE `samochody`
  ADD CONSTRAINT `samochody_ibfk_1` FOREIGN KEY (`idMarki`) REFERENCES `marka` (`idmarka`),
  ADD CONSTRAINT `samochody_ibfk_2` FOREIGN KEY (`idPracownika`) REFERENCES `pracownik` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
