-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le : mer. 19 mars 2025 à 09:03
-- Version du serveur : 10.6.5-MariaDB
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `aéroport`
--

-- --------------------------------------------------------

--
-- Structure de la table `avion`
--

DROP TABLE IF EXISTS `avion`;
CREATE TABLE IF NOT EXISTS `avion` (
  `id_avion` int(11) NOT NULL AUTO_INCREMENT,
  `Type` text NOT NULL,
  `Nb_place` int(11) NOT NULL,
  `Disponibilité` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_avion`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `Nom` text NOT NULL,
  `Prenom` text NOT NULL,
  `Date de naissance` date NOT NULL,
  `Ville de résidence` varchar(50) NOT NULL,
  `e-mail` varchar(50) NOT NULL,
  `id_client` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_client`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `pilote`
--

DROP TABLE IF EXISTS `pilote`;
CREATE TABLE IF NOT EXISTS `pilote` (
  `Nom` text NOT NULL,
  `Prenom` text NOT NULL,
  `e-mail` varchar(50) NOT NULL,
  `Disponibilité` tinyint(1) NOT NULL,
  `id_pilote` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Disponibilité`,`id_pilote`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `réservation`
--

DROP TABLE IF EXISTS `réservation`;
CREATE TABLE IF NOT EXISTS `réservation` (
  `ref_vol` int(11) NOT NULL,
  `ref_client` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `vol`
--

DROP TABLE IF EXISTS `vol`;
CREATE TABLE IF NOT EXISTS `vol` (
  `Départ` text NOT NULL,
  `Destination` text NOT NULL,
  `ref_pilote` int(11) NOT NULL,
  `Distance` int(11) NOT NULL,
  `ref_avion` int(20) NOT NULL,
  `id_vol` int(11) NOT NULL AUTO_INCREMENT,
  `Date_départ` date NOT NULL,
  `Escale` int(11) NOT NULL,
  `Prix` int(11) NOT NULL,
  PRIMARY KEY (`id_vol`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
