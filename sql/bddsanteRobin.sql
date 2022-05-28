-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 28 mai 2022 à 09:42
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
) ENGINE=InnoDB AUTO_INCREMENT=15425154845485546 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cartebancaire`
--

INSERT INTO `cartebancaire` (`numCarte`, `type`, `proprietaire`, `dateExp`, `CVV`) VALUES
(1651695161691, 'on', 'testouille', '2029-12-01', 152),
(1452562455511651, 'on', 'Robin VAN DESSEL', '2029-05-01', 125),
(4975921792406175, 'VISA', NULL, '2022-05-01', 154),
(4990963272538565, 'VISA', NULL, '2029-07-01', 192),
(15425154845485545, 'on', 'testouille', '2029-05-01', 156);

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
  `carteVitale` varchar(20) DEFAULT NULL,
  `motDePasse` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`utilisateurID`),
  KEY `numCarte` (`numCarte`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`utilisateurID`, `numCarte`, `typeUtilisateur`, `nom`, `prenom`, `photo`, `specialite`, `CV`, `ville`, `codePostal`, `pays`, `telephone`, `email`, `disponibilite`, `carteVitale`, `motDePasse`) VALUES
(1, 4975921792406175, 1, 'Albert', 'Camus', NULL, NULL, NULL, 'Cherbourg', NULL, 'France', '+330768704677', 'albert.camus@gmail.com', NULL, NULL, 'test'),
(2, 4990963272538565, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'robin.vd@laposte.net', NULL, NULL, '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08'),
(3, 4990963272538565, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'test@gmail.com', NULL, NULL, '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08'),
(4, 1651695161691, 2, 'glandu', 'testouille', NULL, 'Gynecologie', NULL, 'Lille', 76230, 'France', '45159165651', 'galndu.mes@gmail.com', NULL, '515991195191951', 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'),
(5, 1651695161691, 2, 'glandu', 'testouille', NULL, 'Gynecologie', NULL, 'Lille', 76230, 'France', '45159165651', 'galndu.mes@gmail.com', NULL, '515991195191951', 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'),
(6, 1651695161691, 2, 'glandu', 'testouille', NULL, 'Gynecologie', NULL, 'Lille', 76230, 'France', '45159165651', 'galndu.mes@gmail.com', NULL, '515991195191951', 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'),
(7, 1651695161691, 2, 'glandu', 'testouille', NULL, 'Gynecologie', NULL, 'Lille', 76230, 'France', '45159165651', 'galndu.mes@gmail.com', NULL, '515991195191951', 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'),
(8, 1452562455511651, 2, 'VAN DESSEL', 'Robin', NULL, 'Gynecologie', NULL, 'Bois-Guillaume', 76230, 'France', '0768704677', 'robin.vandessel@edu.ece.fr', NULL, '0785458558456885', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08');

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
-- Contraintes pour la table `disponibilites`
--
ALTER TABLE `disponibilites`
  ADD CONSTRAINT `medecin2` FOREIGN KEY (`medecinID`) REFERENCES `utilisateur` (`utilisateurID`);

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `numCarte` FOREIGN KEY (`numCarte`) REFERENCES `cartebancaire` (`numCarte`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
