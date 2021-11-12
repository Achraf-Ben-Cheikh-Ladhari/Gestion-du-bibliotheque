-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2021 at 10:19 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bibliotheque`
--

-- --------------------------------------------------------

--
-- Table structure for table `abonne`
--

CREATE TABLE IF NOT EXISTS `abonne` (
  `id_abonne` int(3) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(25) NOT NULL,
  PRIMARY KEY (`id_abonne`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `abonne`
--

INSERT INTO `abonne` (`id_abonne`, `prenom`) VALUES
(1, 'Guillaume'),
(2, 'Benoit'),
(3, 'Chloe'),
(4, 'Laura');

-- --------------------------------------------------------

--
-- Table structure for table `emprunt`
--

CREATE TABLE IF NOT EXISTS `emprunt` (
  `id_emprunt` int(3) NOT NULL AUTO_INCREMENT,
  `id_livre` int(3) NOT NULL,
  `id_abonne` int(3) NOT NULL,
  `date_sortie` date NOT NULL,
  `date_rendu` date DEFAULT NULL,
  PRIMARY KEY (`id_emprunt`),
  KEY `id_livre` (`id_livre`),
  KEY `id_abonne` (`id_abonne`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `emprunt`
--

INSERT INTO `emprunt` (`id_emprunt`, `id_livre`, `id_abonne`, `date_sortie`, `date_rendu`) VALUES
(1, 100, 1, '2011-12-17', '2011-12-18'),
(2, 101, 2, '2011-12-18', '2011-12-20'),
(3, 100, 3, '2011-12-19', '2011-12-22'),
(4, 103, 4, '2011-12-19', '2011-12-22'),
(5, 103, 1, '2011-12-19', '2011-12-28'),
(6, 105, 2, '2012-03-20', '2012-03-26'),
(7, 105, 3, '2013-06-13', NULL),
(8, 100, 2, '2013-06-15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `livre`
--

CREATE TABLE IF NOT EXISTS `livre` (
  `id_livre` int(3) NOT NULL AUTO_INCREMENT,
  `auteur` varchar(25) NOT NULL,
  `titre` varchar(50) NOT NULL,
  PRIMARY KEY (`id_livre`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=110 ;

--
-- Dumping data for table `livre`
--

INSERT INTO `livre` (`id_livre`, `auteur`, `titre`) VALUES
(100, 'GUY DE MAUPASSANT', 'Une vie'),
(101, 'GUY DE MAUPASSANT', 'Bel-Ami'),
(102, 'HONORE DE BALZAC', 'Le pere Goriot'),
(103, 'ALPHONSE DAUDET', 'Le Petit chose'),
(104, 'ALEXANDRE DUMAS', 'Le Riene Margot'),
(105, 'ALEXANDRE DUMAS', 'Les Trois Mousquetaires');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `emprunt`
--
ALTER TABLE `emprunt`
  ADD CONSTRAINT `emprunt_ibfk_1` FOREIGN KEY (`id_livre`) REFERENCES `livre` (`id_livre`),
  ADD CONSTRAINT `emprunt_ibfk_2` FOREIGN KEY (`id_abonne`) REFERENCES `abonne` (`id_abonne`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
