-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 10 Mar 2019, 15:47
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
-- Baza danych: `logowanie`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(40) NOT NULL,
  `haslo` text NOT NULL,
  `miasto` varchar(30) NOT NULL,
  `data_urodzenia` date NOT NULL,
  `pierwsze_logowanie` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `user`
--

INSERT INTO `user` (`id`, `login`, `haslo`, `miasto`, `data_urodzenia`, `pierwsze_logowanie`) VALUES
(20, 'TEST', '$2y$10$BVvfrlIXKtntmQBxxgXCRO3pu4BqdIwCYfr0jOp0qIpqp.jCfmVUu', '123231', '0000-00-00', '2019-03-10 13:37:39'),
(21, '1233trewqewqewq', '$2y$10$Tk2Q/UaSIZx0Az8iDE/JUu15Cfno2mxQxMlZ3zRWagL.ZlqdGurz.', '123312', '0000-00-00', '2019-03-10 13:37:46'),
(22, '123', '$2y$10$lzuJnbiHWQwRhOAOkXWzuuqnhn8htssFMgeYrEKwE/I.EHWXTZQdi', '123', '0321-03-12', '2019-03-10 13:43:24'),
(23, 'XXX', '$2y$10$p69Ir7lGa9cnsYIxVWOnFO5ZXXNt9bFhheFgxfZhnImj3xEdN1xK.', '123', '0321-03-12', '2019-03-10 13:56:29');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
