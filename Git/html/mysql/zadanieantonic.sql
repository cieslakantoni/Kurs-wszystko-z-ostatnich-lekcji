-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 24 Lut 2019, 16:23
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
-- Baza danych: `zadanie`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klienci`
--

CREATE TABLE `klienci` (
  `klient_id` int(10) UNSIGNED NOT NULL,
  `nazwisko` varchar(20) NOT NULL,
  `imie` varchar(20) NOT NULL,
  `adres` varchar(30) NOT NULL,
  `miejscowosc` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `klienci`
--

INSERT INTO `klienci` (`klient_id`, `nazwisko`, `imie`, `adres`, `miejscowosc`) VALUES
(0, 'Kowalski', 'Jan', 'Rynek jezycki 10', 'Poznań');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ksiazki`
--

CREATE TABLE `ksiazki` (
  `isbn` int(10) UNSIGNED NOT NULL,
  `autor` text NOT NULL,
  `tytul` varchar(20) NOT NULL,
  `cena` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `ksiazki`
--

INSERT INTO `ksiazki` (`isbn`, `autor`, `tytul`, `cena`) VALUES
(12345, 'Jan Kowalski', 'Kowal', 80);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ksiazki_zamowione`
--

CREATE TABLE `ksiazki_zamowione` (
  `zamowienie_id` int(11) UNSIGNED NOT NULL,
  `isbn` int(11) UNSIGNED NOT NULL,
  `ilosc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `ksiazki_zamowione`
--

INSERT INTO `ksiazki_zamowione` (`zamowienie_id`, `isbn`, `ilosc`) VALUES
(213, 12345, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `recenzje_ksiazek`
--

CREATE TABLE `recenzje_ksiazek` (
  `isbn` int(10) UNSIGNED NOT NULL,
  `recenzje` enum('jest','nie ma') NOT NULL DEFAULT 'nie ma'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `recenzje_ksiazek`
--

INSERT INTO `recenzje_ksiazek` (`isbn`, `recenzje`) VALUES
(12345, 'jest');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zamowienia`
--

CREATE TABLE `zamowienia` (
  `zamowienie_id` int(10) UNSIGNED NOT NULL,
  `klient_id` int(10) UNSIGNED NOT NULL,
  `wartosc` int(11) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `zamowienia`
--

INSERT INTO `zamowienia` (`zamowienie_id`, `klient_id`, `wartosc`, `data`) VALUES
(213, 0, 12345, '2019-02-07');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `klienci`
--
ALTER TABLE `klienci`
  ADD PRIMARY KEY (`klient_id`);

--
-- Indexes for table `ksiazki`
--
ALTER TABLE `ksiazki`
  ADD PRIMARY KEY (`isbn`),
  ADD KEY `isbn` (`isbn`);

--
-- Indexes for table `ksiazki_zamowione`
--
ALTER TABLE `ksiazki_zamowione`
  ADD KEY `zamowienie_id` (`zamowienie_id`),
  ADD KEY `isbn` (`isbn`);

--
-- Indexes for table `recenzje_ksiazek`
--
ALTER TABLE `recenzje_ksiazek`
  ADD KEY `isbn` (`isbn`);

--
-- Indexes for table `zamowienia`
--
ALTER TABLE `zamowienia`
  ADD PRIMARY KEY (`zamowienie_id`),
  ADD KEY `klient_id` (`klient_id`);

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `ksiazki_zamowione`
--
ALTER TABLE `ksiazki_zamowione`
  ADD CONSTRAINT `ksiazki_zamowione_ibfk_1` FOREIGN KEY (`zamowienie_id`) REFERENCES `zamowienia` (`zamowienie_id`),
  ADD CONSTRAINT `ksiazki_zamowione_ibfk_2` FOREIGN KEY (`isbn`) REFERENCES `ksiazki` (`isbn`);

--
-- Ograniczenia dla tabeli `recenzje_ksiazek`
--
ALTER TABLE `recenzje_ksiazek`
  ADD CONSTRAINT `recenzje_ksiazek_ibfk_1` FOREIGN KEY (`isbn`) REFERENCES `ksiazki` (`isbn`);

--
-- Ograniczenia dla tabeli `zamowienia`
--
ALTER TABLE `zamowienia`
  ADD CONSTRAINT `zamowienia_ibfk_1` FOREIGN KEY (`klient_id`) REFERENCES `klienci` (`klient_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
