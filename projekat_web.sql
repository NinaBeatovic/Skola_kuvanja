-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2023 at 11:38 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekat_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `IDKorisnika` int(11) NOT NULL,
  `ime` varchar(30) NOT NULL,
  `prezime` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`IDKorisnika`, `ime`, `prezime`, `username`, `password`, `admin`) VALUES
(7, 'admin', 'admin', 'admin', 'admin', 1),
(10, 'Pera', 'Peric', 'peraperic1', 'peraperic', 0),
(11, 'marko ', 'divac', 'markodivac', 'markodivac', 0),
(13, 'Milica', 'Milic', 'Milica123', 'milica123', 0),
(14, 'Ilija', 'Babic', 'ika123', 'ika', 0),
(16, 'Ilija', 'Babic', 'ika123', 'ika', 0),
(19, 'petar', 'petrovic', 'petar123', 'petar', 0),
(20, 'Jovana', 'Jovanovic', 'jovana1', 'jovana', 0),
(21, 'Marko', 'Markovic', 'Marko1', 'marko', 0),
(22, 'Marija', 'Maric', 'marija12', 'marija12', 0),
(23, 'Ljuba', 'Smiljanic', 'ljuba123', 'ljuba123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kurs`
--

CREATE TABLE `kurs` (
  `IDKursa` int(11) NOT NULL,
  `naziv` varchar(50) NOT NULL,
  `brojprijavljenih` int(11) NOT NULL,
  `predvac` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kurs`
--

INSERT INTO `kurs` (`IDKursa`, `naziv`, `brojprijavljenih`, `predvac`) VALUES
(1, 'Mediteranska idila', 7, 'Marko Markovic'),
(2, 'Azijske tajne ', 7, 'Aleksandar Aleksandric'),
(5, 'Dani francuske kuhinje', 3, 'Milica Jovanovic'),
(6, 'Obilazimo Tajland!', 9, 'Mario Maric'),
(7, 'Domace je najbolje!', 15, 'Branko Petrovic');

-- --------------------------------------------------------

--
-- Table structure for table `messaging`
--

CREATE TABLE `messaging` (
  `messageID` bigint(20) NOT NULL,
  `userID` int(11) NOT NULL,
  `toUserID` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `prijava`
--

CREATE TABLE `prijava` (
  `IDPrijave` int(11) NOT NULL,
  `IDKursa` int(11) NOT NULL,
  `IDKorisnika` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prijava`
--

INSERT INTO `prijava` (`IDPrijave`, `IDKursa`, `IDKorisnika`) VALUES
(14, 1, 13),
(15, 1, 13),
(16, 1, 13),
(17, 7, 13),
(18, 1, 13),
(19, 1, 14),
(20, 5, 14),
(21, 5, 14),
(22, 1, 11),
(27, 1, 16),
(28, 6, 16),
(29, 1, 21),
(30, 1, 10),
(31, 2, 10),
(32, 2, 10),
(33, 1, 23),
(34, 5, 23);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(255) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` enum('admin','sub') NOT NULL DEFAULT 'sub',
  `activity` bit(1) DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `firstName`, `lastName`, `username`, `email`, `password`, `role`, `activity`) VALUES
(37, 'Teodora', 'Djeric', 'teadj234', 'teodora6520@its.edu.rs', 'Teodora!123', 'admin', b'0'),
(39, 'Marko', 'Markovic', 'mare123', 'markovicmarko@gmail.com', 'Kraljevic!123', 'sub', b'0'),
(41, 'Marija', 'Marijanovic', 'maki456', 'marijamarijanovic21@gmail.com', 'Marija!123', 'sub', b'0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`IDKorisnika`);

--
-- Indexes for table `kurs`
--
ALTER TABLE `kurs`
  ADD PRIMARY KEY (`IDKursa`);

--
-- Indexes for table `messaging`
--
ALTER TABLE `messaging`
  ADD PRIMARY KEY (`messageID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `prijava`
--
ALTER TABLE `prijava`
  ADD PRIMARY KEY (`IDPrijave`),
  ADD KEY `IDKursa` (`IDKursa`),
  ADD KEY `IDKorsnika` (`IDKorisnika`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `IDKorisnika` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `kurs`
--
ALTER TABLE `kurs`
  MODIFY `IDKursa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `messaging`
--
ALTER TABLE `messaging`
  MODIFY `messageID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `prijava`
--
ALTER TABLE `prijava`
  MODIFY `IDPrijave` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `messaging`
--
ALTER TABLE `messaging`
  ADD CONSTRAINT `userID` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`);

--
-- Constraints for table `prijava`
--
ALTER TABLE `prijava`
  ADD CONSTRAINT `prijava_ibfk_1` FOREIGN KEY (`IDKursa`) REFERENCES `kurs` (`IDKursa`),
  ADD CONSTRAINT `prijava_ibfk_2` FOREIGN KEY (`IDKorisnika`) REFERENCES `korisnik` (`IDKorisnika`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
