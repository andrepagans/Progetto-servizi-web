-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Lug 12, 2024 alle 15:52
-- Versione del server: 10.4.32-MariaDB
-- Versione PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biblioteca`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `libri`
--

CREATE TABLE `libri` (
  `id` int(11) NOT NULL,
  `titolo` varchar(255) NOT NULL,
  `autore` varchar(255) NOT NULL,
  `genere` varchar(100) DEFAULT NULL,
  `data_di_pubblicazione` date DEFAULT NULL,
  `copie_disponibili` int(11) DEFAULT NULL
) ;

--
-- Dump dei dati per la tabella `libri`
--

INSERT INTO `libri` (`id`, `titolo`, `autore`, `genere`, `data_di_pubblicazione`, `copie_disponibili`) VALUES
(1, 'Il Signore degli Anelli', 'J.R.R. Tolkien', 'Fantasy', '1954-07-29', 10),
(2, '1984', 'George Orwell', 'Distopia', '1949-06-08', 100),
(3, 'Se questo è un uomo', 'Primo Levi', 'memorialistico', '1947-10-14', 49),
(4, 'Il buio oltre la siepe', 'Harper Lee', 'Narrativa', '1960-07-11', 5),
(5, 'Orgoglio e pregiudizio', 'Jane Austen', 'Romantico', '1813-01-28', 3),
(6, 'Il grande Gatsby', 'F. Scott Fitzgerald', 'Narrativa', '1925-04-10', 7),
(7, 'Moby Dick', 'Herman Melville', 'Avventura', '1851-11-14', 4),
(8, 'Guerra e pace', 'Lev Tolstoj', 'Storico', '1869-01-01', 2),
(9, 'Il giovane Holden', 'J.D. Salinger', 'Narrativa', '1951-07-16', 6),
(10, 'Lo Hobbit', 'J.R.R. Tolkien', 'Fantasy', '1937-09-21', 8),
(11, 'Ulisse', 'James Joyce', 'Modernista', '1922-02-02', 1),
(12, 'La Divina Commedia', 'Dante Alighieri', 'Poesia epica', '1320-01-01', 5),
(13, 'Delitto e castigo', 'Fëdor Dostoevskij', 'Filosofico', '1866-01-01', 4),
(14, 'I fratelli Karamazov', 'Fëdor Dostoevskij', 'Filosofico', '1880-01-01', 3),
(15, 'Cent\'anni di solitudine', 'Gabriel Garcia Marquez', 'Realismo magico', '1967-06-05', 7),
(16, 'Il mondo nuovo', 'Aldous Huxley', 'Distopico', '1932-08-30', 5),
(17, 'Fahrenheit 451', 'Ray Bradbury', 'Distopico', '1953-10-19', 6),
(18, 'Jane Eyre', 'Charlotte Brontë', 'Gotico', '1847-10-16', 4),
(19, 'Cime tempestose', 'Emily Brontë', 'Gotico', '1847-12-01', 3),
(20, 'Odissea', 'Omero', 'Epico', '0800-01-01', 10),
(21, 'Meditazioni', 'Marco Aurelio', 'Filosofia', '0180-01-01', 8),
(22, 'L\'arte della guerra', 'Sun Tzu', 'Strategia', '0500-01-01', 6),
(23, 'Amleto', 'William Shakespeare', 'Tragedia', '1600-01-01', 7),
(24, 'Iliade', 'Omero', 'Epico', '0750-01-01', 9),
(25, 'Don Chisciotte della Mancia', 'Miguel de Cervantes', 'Romanzo', '1605-01-16', 5),
(26, 'Il vecchio e il mare', 'Ernest Hemingway', 'Narrativa', '1952-09-01', 6),
(27, 'Frankenstein', 'Mary Shelley', 'Horror', '1818-01-01', 7),
(28, 'Dracula', 'Bram Stoker', 'Horror', '1897-05-26', 5),
(29, 'La metamorfosi', 'Franz Kafka', 'Assurdo', '1915-01-01', 8),
(30, 'Il processo', 'Franz Kafka', 'Assurdo', '1925-01-01', 6);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indici per le tabelle `libri`
--
ALTER TABLE `libri`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `libri`
--
ALTER TABLE `libri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
