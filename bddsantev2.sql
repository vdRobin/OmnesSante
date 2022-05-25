-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 25 mai 2022 à 09:27
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
-- Structure de la table `cartebancaire`
--

DROP TABLE IF EXISTS `cartebancaire`;
CREATE TABLE IF NOT EXISTS `cartebancaire` (
  `numCarte` bigint(20) NOT NULL AUTO_INCREMENT,
  `type` varchar(30) DEFAULT NULL,
  `proprietaire` varchar(30) DEFAULT NULL,
  `dateExp` date DEFAULT NULL,
  `CVV` int(3) DEFAULT NULL,
  PRIMARY KEY (`numCarte`)
) ENGINE=InnoDB AUTO_INCREMENT=4990963272538566 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cartebancaire`
--

INSERT INTO `cartebancaire` (`numCarte`, `type`, `proprietaire`, `dateExp`, `CVV`) VALUES
(4975921792406175, 'VISA', NULL, '2022-05-01', 154),
(4990963272538565, 'VISA', NULL, '2029-07-01', 192);

-- --------------------------------------------------------

--
-- Structure de la table `consultation`
--

DROP TABLE IF EXISTS `consultation`;
CREATE TABLE IF NOT EXISTS `consultation` (
  `consultationID` int(11) NOT NULL AUTO_INCREMENT,
  `clientID` int(11) NOT NULL,
  `medecinID` int(11) NOT NULL,
  `heure` timestamp NOT NULL,
  PRIMARY KEY (`consultationID`),
  KEY `utilisateur` (`clientID`),
  KEY `medecin` (`medecinID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `utilisateurID` int(11) NOT NULL AUTO_INCREMENT,
  `numCarte` bigint(20) NOT NULL,
  `typeUtilisateur` int(11) DEFAULT NULL,
  `nom` varchar(30) DEFAULT NULL,
  `prenom` varchar(30) DEFAULT NULL,
  `photo` longblob,
  `specialite` varchar(30) DEFAULT NULL,
  `CV` longblob,
  `ville` varchar(30) DEFAULT NULL,
  `codePostal` int(11) DEFAULT NULL,
  `pays` varchar(30) DEFAULT NULL,
  `telephone` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `disponibilite` text,
  `carteVitale` int(15) DEFAULT NULL,
  `motDePasse` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`utilisateurID`),
  KEY `numCarte` (`numCarte`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`utilisateurID`, `numCarte`, `typeUtilisateur`, `nom`, `prenom`, `photo`, `specialite`, `CV`, `ville`, `codePostal`, `pays`, `telephone`, `email`, `disponibilite`, `carteVitale`, `motDePasse`) VALUES
(1, 4975921792406175, 1, 'Albert', 'Camus', NULL, NULL, NULL, 'Cherbourg', NULL, 'France', '+330768704677', 'albert.camus@gmail.com', NULL, NULL, 'test');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `consultation`
--
ALTER TABLE `consultation`
  ADD CONSTRAINT `medecin` FOREIGN KEY (`medecinID`) REFERENCES `utilisateur` (`utilisateurID`),
  ADD CONSTRAINT `utilisateur` FOREIGN KEY (`clientID`) REFERENCES `utilisateur` (`utilisateurID`);

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `numCarte` FOREIGN KEY (`numCarte`) REFERENCES `cartebancaire` (`numCarte`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;