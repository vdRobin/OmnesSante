-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 29 mai 2022 à 13:23
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
-- Structure de la table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `end_event` datetime NOT NULL,
  `start_event` datetime NOT NULL,
  `medecinID` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `medecin3` (`medecinID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `events`
--

INSERT INTO `events` (`id`, `title`, `end_event`, `start_event`, `medecinID`) VALUES
(2, 'test', '2022-05-24 10:00:00', '2022-05-24 06:00:00', 1),
(3, 'test2', '2022-05-25 09:00:00', '2022-05-25 06:30:00', 2),
(4, 'post', '2022-05-25 10:30:00', '2022-05-25 06:00:00', 6),
(5, 'test', '2022-06-01 22:00:00', '2022-06-01 18:00:00', 6),
(6, 'getid', '2022-05-31 22:00:00', '2022-05-31 18:00:00', 7),
(7, 'baltha', '2022-05-31 22:30:00', '2022-05-31 17:30:00', 5);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `medecin3` FOREIGN KEY (`medecinID`) REFERENCES `utilisateur` (`utilisateurID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
