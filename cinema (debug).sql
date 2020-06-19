-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2020 at 07:58 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinema`
--

-- --------------------------------------------------------

--
-- Table structure for table `kedudukan`
--

CREATE TABLE `kedudukan` (
  `idDuduk` varchar(10) NOT NULL,
  `bilik` int(11) NOT NULL,
  `idKedudukan` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kedudukan`
--

INSERT INTO `kedudukan` (`idDuduk`, `bilik`, `idKedudukan`) VALUES
('A1', 1, 1),
('A2', 1, 2),
('A3', 1, 3),
('A4', 1, 4),
('A5', 1, 5),
('A6', 1, 6),
('A7', 1, 7),
('A8', 1, 8),
('A9', 1, 9),
('A10', 1, 10),
('A11', 1, 11),
('A12', 1, 12),
('A13', 1, 13),
('A14', 1, 14),
('A15', 1, 15),
('A16', 1, 16),
('A17', 1, 17),
('A18', 1, 18),
('A19', 1, 19),
('A20', 1, 20),
('A21', 1, 21),
('A22', 1, 22),
('A23', 1, 23),
('A24', 1, 24),
('A25', 1, 25),
('A26', 1, 26),
('A27', 1, 27),
('A28', 1, 28),
('A29', 1, 29),
('A30', 1, 30),
('A31', 1, 31),
('A32', 1, 32),
('A33', 1, 33),
('A34', 1, 34),
('A35', 1, 35),
('A36', 1, 36),
('A37', 1, 37),
('A38', 1, 38),
('A39', 1, 39),
('A40', 1, 40),
('A41', 1, 41),
('A42', 1, 42),
('A1', 2, 43),
('A2', 2, 44),
('A3', 2, 45),
('A4', 2, 46),
('A5', 2, 47),
('A6', 2, 48),
('A7', 2, 49),
('A8', 2, 50),
('A9', 2, 51),
('A10', 2, 52),
('A11', 2, 53),
('A12', 2, 54),
('A13', 2, 55),
('A14', 2, 56),
('A15', 2, 57),
('A16', 2, 58),
('A17', 2, 59),
('A18', 2, 60),
('A19', 2, 61),
('A20', 2, 62),
('A21', 2, 63),
('A22', 2, 64),
('A23', 2, 65),
('A24', 2, 66),
('A25', 2, 67),
('A26', 2, 68),
('A27', 2, 69),
('A28', 2, 70),
('A29', 2, 71),
('A30', 2, 72),
('A31', 2, 73),
('A32', 2, 74),
('A33', 2, 75),
('A34', 2, 76),
('A35', 2, 77),
('A36', 2, 78),
('A37', 2, 79),
('A38', 2, 80),
('A39', 2, 81),
('A40', 2, 82),
('A41', 2, 83),
('A42', 2, 84),
('A1', 3, 85),
('A2', 3, 86),
('A3', 3, 87),
('A4', 3, 88),
('A5', 3, 89),
('A6', 3, 90),
('A7', 3, 91),
('A8', 3, 92),
('A9', 3, 93),
('A10', 3, 94),
('A11', 3, 95),
('A12', 3, 96),
('A13', 3, 97),
('A14', 3, 98),
('A15', 3, 99),
('A16', 3, 100),
('A17', 3, 101),
('A18', 3, 102),
('A19', 3, 103),
('A20', 3, 104),
('A21', 3, 105),
('A22', 3, 106),
('A23', 3, 107),
('A24', 3, 108),
('A25', 3, 109),
('A26', 3, 110),
('A27', 3, 111),
('A28', 3, 112),
('A29', 3, 113),
('A30', 3, 114),
('A31', 3, 115),
('A32', 3, 116),
('A33', 3, 117),
('A34', 3, 118),
('A35', 3, 119),
('A36', 3, 120),
('A37', 3, 121),
('A38', 3, 122),
('A39', 3, 123),
('A40', 3, 124),
('A41', 3, 125),
('A42', 3, 126),
('A1', 4, 127),
('A2', 4, 128),
('A3', 4, 129),
('A4', 4, 130),
('A5', 4, 131),
('A6', 4, 132),
('A7', 4, 133),
('A8', 4, 134),
('A9', 4, 135),
('A10', 4, 136),
('A11', 4, 137),
('A12', 4, 138),
('A13', 4, 139),
('A14', 4, 140),
('A15', 4, 141),
('A16', 4, 142),
('A17', 4, 143),
('A18', 4, 144),
('A19', 4, 145),
('A20', 4, 146),
('A21', 4, 147),
('A22', 4, 148),
('A23', 4, 149),
('A24', 4, 150),
('A25', 4, 151),
('A26', 4, 152),
('A27', 4, 153),
('A28', 4, 154),
('A29', 4, 155),
('A30', 4, 156),
('A31', 4, 157),
('A32', 4, 158),
('A33', 4, 159),
('A34', 4, 160),
('A35', 4, 161),
('A36', 4, 162),
('A37', 4, 163),
('A38', 4, 164),
('A39', 4, 165),
('A40', 4, 166),
('A41', 4, 167),
('A42', 4, 168),
('12', 1, 169),
('', 1, 170),
('', 1, 171),
('', 1, 172),
('', 1, 173),
('A5', 1, 174),
('A7', 1, 175),
('A8', 1, 176),
('A6A7', 1, 177);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `idPengguna` varchar(20) NOT NULL,
  `namaPengguna` varchar(20) NOT NULL,
  `jenisPengguna` varchar(20) NOT NULL,
  `kataLaluan` varchar(10) NOT NULL,
  `telefonPengguna` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`idPengguna`, `namaPengguna`, `jenisPengguna`, `kataLaluan`, `telefonPengguna`) VALUES
('A0004', 'wh', 'Admin', '1234', '0182614238'),
('A0005', 'sk', 'Pekerja', '1234', '0164116380');

-- --------------------------------------------------------

--
-- Table structure for table `telefon`
--

CREATE TABLE `telefon` (
  `telefonPengguna` varchar(20) NOT NULL,
  `namaPengguna` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `telefon`
--

INSERT INTO `telefon` (`telefonPengguna`, `namaPengguna`) VALUES
('0182614238', 'wh');

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `idTiket` varchar(10) NOT NULL,
  `tarikhJualan` date NOT NULL,
  `jumlahHarga` varchar(10) NOT NULL,
  `idWayang` varchar(20) NOT NULL,
  `bilTiket` varchar(10) NOT NULL,
  `idKedudukan` int(10) NOT NULL,
  `idPengguna` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `wayang`
--

CREATE TABLE `wayang` (
  `idWayang` varchar(20) NOT NULL,
  `namaWayang` varchar(20) NOT NULL,
  `tempohWayang` varchar(20) NOT NULL,
  `masaTontonan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wayang`
--

INSERT INTO `wayang` (`idWayang`, `namaWayang`, `tempohWayang`, `masaTontonan`) VALUES
('B01', 'Ip Man 4', '2 hrs', '8.15 a.m. , 10.15 a.m. , 12.45 p.m. , 4.15 p.m. '),
('B02', 'ironman', '2hrs', '8.15a.m., 10.15a.m., 3.15a.m., 8.15p.m.'),
('B03', 'Ghostbusters', '2hrs', '8.15a.m., 10.15a.m., 1.15p.m., 4.45a.m.'),
('B04', 'Godzilla', '2hrs', '8.15a.m., 10.15a.m., 5.30p.m., 7.45p.m.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kedudukan`
--
ALTER TABLE `kedudukan`
  ADD PRIMARY KEY (`idKedudukan`),
  ADD KEY `bilik` (`bilik`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`idPengguna`),
  ADD KEY `telefonPengguna` (`telefonPengguna`);

--
-- Indexes for table `telefon`
--
ALTER TABLE `telefon`
  ADD PRIMARY KEY (`telefonPengguna`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`idTiket`),
  ADD KEY `idWayang` (`idWayang`),
  ADD KEY `idKedudukan` (`idKedudukan`),
  ADD KEY `idPengguna` (`idPengguna`);

--
-- Indexes for table `wayang`
--
ALTER TABLE `wayang`
  ADD PRIMARY KEY (`idWayang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kedudukan`
--
ALTER TABLE `kedudukan`
  MODIFY `idKedudukan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tiket`
--
ALTER TABLE `tiket`
  ADD CONSTRAINT `tiket_ibfk_1` FOREIGN KEY (`idWayang`) REFERENCES `wayang` (`idWayang`),
  ADD CONSTRAINT `tiket_ibfk_2` FOREIGN KEY (`idKedudukan`) REFERENCES `kedudukan` (`idKedudukan`),
  ADD CONSTRAINT `tiket_ibfk_3` FOREIGN KEY (`idPengguna`) REFERENCES `pengguna` (`idPengguna`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
