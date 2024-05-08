-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2024 at 08:01 PM
-- Server version: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shaorma_mister`
--

-- --------------------------------------------------------

--
-- Table structure for table `ingrediente`
--

CREATE TABLE `ingrediente` (
  `id` int(11) NOT NULL,
  `nume_ing` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ingrediente`
--

INSERT INTO `ingrediente` (`id`, `nume_ing`) VALUES
(1, 'carne'),
(2, 'falafel'),
(3, 'cartofi'),
(4, 'varza'),
(5, 'ceapa'),
(6, 'castraveti'),
(7, 'rosii'),
(8, 'ketchup'),
(9, 'maioneza'),
(10, 'tzatziki'),
(11, 'sos iute');

-- --------------------------------------------------------

--
-- Table structure for table `produse`
--

CREATE TABLE `produse` (
  `id_produs` int(11) NOT NULL,
  `nume_produs` text NOT NULL,
  `pret` int(11) NOT NULL,
  `imagine` varchar(29) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produse`
--

INSERT INTO `produse` (`id_produs`, `nume_produs`, `pret`, `imagine`) VALUES
(1, 'shaorma mare', 20, 'lipie.jpg'),
(2, 'shaorma mica', 15, 'mica.png'),
(3, 'kebab mare', 18, 'kebab.jpg'),
(4, 'kebab mic', 12, 'mare.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `vanzare`
--

CREATE TABLE `vanzare` (
  `id_comanda` int(11) NOT NULL,
  `id_produs` int(11) DEFAULT NULL,
  `nume_client` varchar(255) DEFAULT NULL,
  `telefon` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `adresa` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vanzare`
--

INSERT INTO `vanzare` (`id_comanda`, `id_produs`, `nume_client`, `telefon`, `email`, `adresa`) VALUES
(20, 1, 'mirel', 735161383, 'iulianvilceanu9@gmail.com', 'shot'),
(22, 2, 'ana', 743345426, 'a@gmail.com', 'bacles'),
(16, 1, 'what', 743345426, 'impacare@gmail.co', 'prunelor 20'),
(17, 1, 'mirel', 743345426, 'iubire@gmail.co', 'eminescu 64'),
(18, 1, 'mirel', 743345426, 'iubire@gmail.co', 'eminescu 64'),
(19, 1, 'mirel', 743345426, 'iubire@gmail.co', 'eminescu 64');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ingrediente`
--
ALTER TABLE `ingrediente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produse`
--
ALTER TABLE `produse`
  ADD PRIMARY KEY (`id_produs`);

--
-- Indexes for table `vanzare`
--
ALTER TABLE `vanzare`
  ADD PRIMARY KEY (`id_comanda`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vanzare`
--
ALTER TABLE `vanzare`
  MODIFY `id_comanda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
