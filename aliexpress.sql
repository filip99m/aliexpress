-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2021 at 06:00 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aliexpress`
--

-- --------------------------------------------------------

--
-- Table structure for table `proizvod`
--

CREATE TABLE `proizvod` (
  `id` int(11) NOT NULL,
  `naziv` varchar(50) NOT NULL,
  `vrsta_id` int(11) NOT NULL,
  `cijena` varchar(20) NOT NULL,
  `godina_proizvodnje` varchar(10) NOT NULL,
  `opis` varchar(255) NOT NULL,
  `Fotografija` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proizvod`
--

INSERT INTO `proizvod` (`id`, `naziv`, `vrsta_id`, `cijena`, `godina_proizvodnje`, `opis`, `Fotografija`) VALUES
(21, 'LAPTOP ACER', 1, '569.7', '2019', 'Aspire 5 ima kuÄ‡iÅ¡te u koje je smeÅ¡teno puno snage, nudeÄ‡i izbor izmeÄ‘u IntelÂ® i AMD procesora, kao i NVIDIAÂ® ili AMD grafiÄkih kartica 1. Sa memorijom do 2TB, imaÄ‡ete sve Å¡to vam je potrebno da zadovoljite svoje potrebe za izvrÅ¡avanjem viÅ¡e z', './slike/60df2d367fa8e.jpg'),
(22, 'HP Omen 15-en0007nm', 1, '1429', '2021', 'Procesor:	AMD Ryzen 7, RAM Memorija: 16 GB DDR4, HDD SSD: 512GB, Grafika: NVIDIA GeForce RTX 2060 VGA Memorija 6GB', './slike/60df2e0578247.jpg'),
(23, 'DESKTOP RACUNAR NITRO (AM4) RYSEN 3', 12, '566', '2020', 'Maticna ploca:A320M PRO-VH PLUS\r\nProcesor: Ryzen 3 1300X (3.5 GHz)\r\nMemorija: 8GB DDR4 2400MHz\r\nHard DD: SSD 240GB\r\nGrafika: Radeon RX 560 4GB DDR5 128bit\r\nMreÅ¾a: 10/100/1000 Ethernet LAN\r\nKuciÅ¡te: RIOTORO CR488\r\nNapajanje: 600W\r\nOperativni sistem: Nema', './slike/60df2e7b94e9a.jpg'),
(24, ' XIAOMI MI 10T', 2, '549', '2021', 'Displej: 6.67â€³ (2400Ã—1080 piksela)  IPS, Procesor:        Qualcomm Snapdragon 865, Memorija: 8GB RAM;128GB, Kamera: Zadnja: 64 + 13 + 5 MP;Prednja: 20 MP, Baterija: 5000 mAh\r\n                                 ', './slike/60df2f0c5d4a8.jpg'),
(25, 'SAMSUNG A52 ', 2, '349', '2021', 'Dijagonala ekrana: 6.5â€³,\r\nRAM memorija: 6 GB,\r\nInterna memorija: 128 GB,\r\nZadnja kamera: 64MP + 12MP + 5MP + 5MP', './slike/60df2f8309e62.png'),
(26, 'KLIMA BERGEN PINE', 4, '346', '2018', 'Energetska klasa: A++,\r\nKapacitet klima ureÃ°aja: 12000 BTU', './slike/60df2fc33e7bb.jpg'),
(27, 'Lego, Captain America and Hydra', 6, '16', '2017', 'Lego kocke, Captain America and Hydra Face-Off, Ninjago,4+\r\nLego kocke serije Ninjago inspirisane su istoimenom popularnom serijom.\r\nSet se sastoji od 49 djelova I sadrÅ¾i 2 mini figurice Ninjago ratnika i to fantastiÄnog Kapetana Ameriku. Kreni sa njim ', './slike/60df303278678.jpg'),
(28, 'TV LG 43', 3, '414', '2021', 'Aplikacije : Netflix, Amazon , Google Assistent\r\nUlazi : HDMI (3) USB (2)', './slike/60df3076a1c50.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `vrsta`
--

CREATE TABLE `vrsta` (
  `id` int(11) NOT NULL,
  `naziv_vrste` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vrsta`
--

INSERT INTO `vrsta` (`id`, `naziv_vrste`) VALUES
(1, 'Laptop racunari'),
(2, 'Telefoni'),
(3, 'TV'),
(4, 'Bijela tehnika'),
(5, 'Odjeca'),
(6, 'Igracke'),
(7, 'Ostalo'),
(12, 'Desktop racunari');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `proizvod`
--
ALTER TABLE `proizvod`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vrsta_proizvoda` (`vrsta_id`);

--
-- Indexes for table `vrsta`
--
ALTER TABLE `vrsta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `proizvod`
--
ALTER TABLE `proizvod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `vrsta`
--
ALTER TABLE `vrsta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
