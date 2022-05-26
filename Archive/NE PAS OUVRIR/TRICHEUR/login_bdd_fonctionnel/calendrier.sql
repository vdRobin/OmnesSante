-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 26 mai 2022 à 17:02
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
-- Base de données : `testing`
--

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `start_event` datetime NOT NULL,
  `end_event` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `events`
--

INSERT INTO `events` (`id`, `title`, `start_event`, `end_event`) VALUES
(1, 'disponible', '2022-05-22 01:00:00', '2022-05-22 20:00:00'),
(7, 'occupÃ©', '2022-05-23 10:30:00', '2022-05-23 15:30:00'),
(8, 'occupÃ©', '2022-05-24 00:00:00', '2022-05-25 00:00:00'),
(9, 'occupÃ©', '2022-05-25 00:00:00', '2022-05-26 00:00:00'),
(10, 'occupÃ©', '2022-05-26 00:00:00', '2022-05-27 00:00:00'),
(11, 'occupÃ©', '2022-05-27 00:00:00', '2022-05-27 07:00:00'),
(12, 'occupÃ©', '2022-05-27 17:00:00', '2022-05-28 00:00:00'),
(13, 'occupÃ©', '2022-05-28 00:00:00', '2022-05-28 06:30:00'),
(14, 'occupÃ©', '2022-05-23 00:00:00', '2022-05-23 07:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
