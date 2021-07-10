-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 07 juil. 2021 à 23:53
-- Version du serveur :  5.7.17
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdvoyages`
--
CREATE DATABASE IF NOT EXISTS `bdvoyages` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `bdvoyages`;

-- --------------------------------------------------------

--
-- Structure de la table `voyages`
--

CREATE TABLE `voyages` (
  `code` int(4) NOT NULL,
  `depart` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `destination` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `transporteur` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `voyages`
--

INSERT INTO `voyages` (`code`, `depart`, `destination`, `transporteur`) VALUES
(1, 'Montreal', 'Quebec', 'Limocar Laurentides'),
(2, 'Montreal', 'Paris', 'Air France'),
(3, 'Montreal', 'New York', 'Air Canada'),
(4, 'Varsovie', 'Montreal', 'LOT'),
(5, 'Montreal', 'New York', 'Air Canada'),
(6, 'Montreal', 'Paris', 'Air Canada'),
(7, 'Montreal', 'New York', 'Air Canada'),
(8, 'Montreal', 'New York', 'Pan Am'),
(8, 'New York', 'Montreal', 'Voyageur'),
(8, 'Montreal', 'Bruxelles', 'Nationair'),
(9, 'Montreal', 'Ottawa', 'Limocar Laurentides'),
(10, 'Montreal', 'Paris', 'Air France');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
