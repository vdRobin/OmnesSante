-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 29 mai 2022 à 13:24
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bddsante`
--

-- --------------------------------------------------------

--
-- Structure de la table `disponibilites`
--

DROP TABLE IF EXISTS `disponibilites`;
CREATE TABLE IF NOT EXISTS `disponibilites` (
  `disponibiliteID` int(11) NOT NULL AUTO_INCREMENT,
  `medecinID` int(11) DEFAULT NULL,
  `heureDebut` datetime DEFAULT NULL,
  `heureFin` datetime DEFAULT NULL,
  `titre` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`disponibiliteID`),
  KEY `medecin2` (`medecinID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `disponibilites`
--
ALTER TABLE `disponibilites`
  ADD CONSTRAINT `medecin2` FOREIGN KEY (`medecinID`) REFERENCES `utilisateur` (`utilisateurID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
