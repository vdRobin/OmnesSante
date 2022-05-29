-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 29 mai 2022 à 13:27
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
) ENGINE=InnoDB AUTO_INCREMENT=4990963272538581 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cartebancaire`
--

INSERT INTO `cartebancaire` (`numCarte`, `type`, `proprietaire`, `dateExp`, `CVV`) VALUES
(255, 'on', 'gasly', '2001-01-01', 255),
(47568663, 'VISA', NULL, '2029-07-01', 192),
(356489756, 'VISA', NULL, '2029-07-01', 192),
(4264682142, 'on', 'Robin VAN DESSEL', '2029-10-01', 156),
(4272536452, 'VISA', NULL, '2029-07-01', 192),
(63642484382, 'VISA', NULL, '2029-07-01', 192),
(65486246242, 'VISA', NULL, '2029-07-01', 192),
(78422338030, 'VISA', NULL, '2029-07-01', 192),
(89654266466, 'on', 'Robin VAN DESSEL', '2029-10-01', 156),
(115833208340, 'VISA', NULL, '2029-07-01', 192),
(567641861764, 'VISA', NULL, '2029-07-01', 192),
(788426226244, 'VISA', NULL, '2029-07-01', 192),
(2541154254554, 'on', 'Robin VAN DESSEL', '2029-10-01', 156),
(4990972538570, 'VISA', NULL, '2029-07-01', 192),
(27253857772575, 'VISA', NULL, '2029-07-01', 192),
(489658976589455, 'VISA', NULL, '2029-07-01', 192),
(4975921792406175, 'VISA', NULL, '2022-05-01', 154),
(4990963272538565, 'VISA', NULL, '2029-07-01', 192),
(4990963272538566, 'VISA', NULL, '2029-07-01', 192);

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

-- --------------------------------------------------------

--
-- Structure de la table `laboratoire`
--

DROP TABLE IF EXISTS `laboratoire`;
CREATE TABLE IF NOT EXISTS `laboratoire` (
  `nom` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telephone` varchar(30) DEFAULT NULL,
  `adresse` varchar(100) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `laboratoire`
--

INSERT INTO `laboratoire` (`nom`, `email`, `telephone`, `adresse`, `id`) VALUES
('OMNES SANTE', 'omnes@example.com', '0122334455', '37 quai de Grenelle 75015', 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`utilisateurID`, `numCarte`, `typeUtilisateur`, `nom`, `prenom`, `photo`, `specialite`, `CV`, `ville`, `codePostal`, `pays`, `telephone`, `email`, `disponibilite`, `carteVitale`, `motDePasse`) VALUES
(1, 4975921792406175, 1, 'Camus', 'Albert', NULL, NULL, NULL, 'Cherbourg', 56230, 'France', '+330768704677', 'albert.camus@gmail.com', NULL, '65454680346', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08'),
(2, 4990963272538565, 2, 'Kangoo', 'Pascal', NULL, 'Dermatologue', NULL, 'Cherbourg', 78563, NULL, NULL, 'robin.vd@laposte.net', NULL, '566878246', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08'),
(3, 4990963272538565, 1, 'Segado', 'JP', NULL, NULL, NULL, 'Paris', 75004, 'France', '06 02 23 26 25', 'test@gmail.com', NULL, '787845623', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08'),
(4, 4975921792406175, 2, 'Nicollin', 'Loulou', 0x89504e470d0a1a0a0000000d494844520000016f0000004b0806000000bf760680000000097048597300000b1300000b1301009a9c18000000017352474200aece1ce90000000467414d410000b18f0bfc61050000089f494441547801eddd3d6c1bf719c7f1e78ea4654ad08b61a388912865d241b06320f452c7add35043da2e455c3869870c96900e9dec3205da258024a053d09876f640d290026d6a4019d31410ddd8b1ddc5ea1007ce9032b1830a859a48722cca9278d7ff438af41ddf24513a9ab4be1f80e2ddf14868fae1c173ff7bce926d484dbb7d125e8ebb9675d2b2adef8aebc6c5953eb1cc0b0050e0cabc5856c66ccc3b8e7bc91649279f8fa6651b2c6940eaa36c426c6bc4fc4371821a001a654d88e34c3612e45b0aeff5d04e99cdb80000764ac6b5edd1d78fef99dcec173615dea9e96c4cf658e3663351efbcceb0259d219168a8a1821e001e39abaec89ae3ca8a23b2a83b75994a7cc5194b0e4633b2d1991b9d70eecaf259cb95d16aed110debfe2e5bf677d8d21bb1246213da0050cfdc7d4766b339995d7265295735cc3392b392c91f754cd5fb9dba697beecafd114bdcd1f2e3fb3b2c19e80dcb0113da0080c67c792f279f2de4aa86b86b5ba68dd23156ebbb35c3bb5a706b3be4c8be901c8c860400b0336a8578bd00af1aded5825babedef1f88d01a0180002cadb9f2cfb9d58abe78ad00af48e27c8f5be4bcf7d8d3dd2139d217160040b06e7cbd26b74d25eee3b883e5cb097de19d5f5512b16e782f4e0ef4844d7f9b360900344b95009f9715f7a877158aff8aa32e07f404f763519be0068026d34e474fc4575bf7ad2fd72e2985f75b97b343e259c79dbf3849ab04009a2e629259af31862d5f8027f2374aae2b85b76d5923deb3b4e2d675dc0080e6d3fc1de82d5b8e6d3fc8e9fc277ffcc7bd93e62d563ca837dd3cd945bb04001ea6ef75ebfd34d5abef7c788742e1d3de4fe97303406b78aadbdfbed629aefa6ea7a6bf311728dd93c50fb4d7cd9d9300d01a0e466d5fefdb6ce68b6d3b17da93f09dd8497003402b79b2cb97cb7dda3ab1cd85ca84f7a82e0f0400b48e037bfdb9ec5856dc64b7fdacef245a2600d052f697e5b209ee676def4d393d11821b005a8d46b37fcdb71bd7cb9831ef09415b5c9c979b9fccc8dfff3625776e7f219fde9c91c79f88494f4f9f1c7a262e2ffef82539fc0c0fea0100af2e93d60baba5dd3e2b7565b934c24afbdd7a574f502ea4c664e29df3f900afe7d8730979633425870f13e200a03efeef8accdd2fc575c6576b4702baa1f2ce9d8cfceca747e5edd4e886c1adae5f4be7cfd7b00700540abc51a2c1fdea2f06e5a6698f94d356c913a665a2af6a34ec7ff7fab00000fc029d3c550c6e7df73af5ca909c7af9b41c3b9e281dd38afcc30fa64c608ff9cebff8d709e9e9ed9337465202002808b4f2d6cad91bc45a69ffe9cfd3f2e65be3bee02e7ea6a17ee9e37fcbd9a46f46968c9b3ef9b5ab690100140416de1ada17df9bf41d7bd704777968577326392ac3affdc677ec6dfadf00501258786bd5ed75c654d35b5902a86d92439ed5267a1193ea1b000a020bef9b9ffcabb4ad2d91b3a69ade2a6da3785dbf764900000185b75e7cfcd4b3ba6433ad926a4ebde29b54ebfb4d00d8cd0209ef3bb733befd430dde6c935f4ad81f2bed7f55b66a0500762b869900401b0a24bc755db6d7dd4ddc5559cbc2c283ef7677f7090020a0f0d63b26bb7b1e04adde7cd388eb57d3bee0676015001404d636f10e95d235df8d2cf3d3bb2bbd8e3df7820000020ceff2bb247fffdbe14d0da52ad2b0f7dee4a3d5fc8b3f3929008000c35b9707ea68d722adbe7ffdab9f6f2ac075deb786bdd79906d68903c0a32ad0d526e5d57771d46bad168a06bb8e817df59783153351cad77c03c06ee67b18437fa72d47f7efecc31874a8d41fc69215c70b6d9097cc85cd7df97d5d1bae4fd7a955999f7a7948de3c372e00b01b953f8c21d091b04a074cdd5dafa8bdb4b21e7fe7c2a67fa778f19200078026dda4a3fd6a1df55aeba10bd50cbf76b6a2eda201cec3190020e087317869706b805f7c6f423efce0fd7cffbbbc45526ca50c996add1bf4deaa9d0a1c009ad0f3ae475b275f995ef7e3fd85a7c7f7f454bf8352c7cb96b75de88103d84d9adef3aea7def32bbd8acb04a9c001a0a06d06536980d303078082b69a2a4880034041db8d8425c001a04de77913e00076bbb67d1843b500d7c7a42d6e63763800b48bb67e928e37c07504edbb7f99aeb9dc10001e250f75a9e04ed000efce0fae1a22b801ec1a6d1fde4ae7a700c06ec2038801a00df9c27b2927008036a0e19d29eeac3a0200684165c575c684b73553dccbe6486f0068355a582fad95865289d95ab05d27f785f7848515570000ad63a1ac2de23aee8cedba0f2a6ff5bffb54df00d04a6697fcb96c5a2669dbce2d4f790ffe274b7803402b995df6e772f2f968da4e0eee9b370d9474f1a056de7354df00d012348fbdfd6e739d7242ff16960a3a39df93806f2db06610005ac1670b6bfe038e33a96f85f0ceada4cddfd24427aa6f0078f86edfcb791f7da632da32d18d7c78afb74e7c0f899cf97a4d561d569e00c0c3b09473e5d6a2bf0b62dbf66871dbf27e90bab27cc3bcc58bfb4f7787e5485f480000cd75c314d05a797b64923fdcfb5471c73fdbc47193deddcfefaed1ff068026bbb55811dc26addd41dfae7727df4b71dcb1f21f21c001a039aa66ae2bc9e4f168c67bc8aaf6e57397b31396659df61e1be809cb402f2d140008825e63d4d0fefcdb8ae0be903cb1b762eeb555eb87cafbdfaa336cc90fbe1391ce50cdaf0100b6686ed991996fd6cad6731bae3b993c111daaf69dba295cad0257fd5da17c154e880340e374969456da15fd6d5527b8d586e99bfa283b2ab63552edb3c7a2b61c342f7d8fd80439006c44db23b35947bebce7d49e25a53dee137bcfd7fb9d4d25ae09f08409f071b319ab754eef1e4ba2a612d7d64a841c07809255b730d275d16c54b446fc32e2b8c3c51b71ead952ccae57e1da468909006067b8326fda24174c688f6ef62b5bae915357b331c94942ac7c2b25260080c6b892361de729a7b3633279d49adfca57b7d5e0485dfe366e5be1174cd72661fe8998f9b5b800006ac998d78ccee3766cf7fdf2b5db5bb1e3dde97c650e00f0d94e5057f37ff48020689e23f1720000000049454e44ae426082, 'cardiologue', '', 'Montpellier', 34820, 'France', '07 83 46 00 84 ', 'balthazar.augier@gmail.com', NULL, '46641423', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08'),
(5, 2541154254554, 2, 'Van Dessel', 'Robin', NULL, 'Addictologie', 0x63765f70617363616c5f6b616e676f6f2e706e67, 'Assas', 78563, 'France', '0783460084', 'hubert51@gmail.com', NULL, '4566655255', 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'),
(6, 2541154254554, 2, 'Van Dessel', 'jeanlain', NULL, 'cardiologue', NULL, 'Jacou', 34963, 'France', '0783460084', '51@gmail.com', NULL, '4566655255', 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'),
(7, 2541154254554, 1, 'Nicollin', 'robin', NULL, NULL, NULL, 'Jacou', 34820, 'France', '0783467884', 'nico@gmail.com', NULL, '4566655255', 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'),
(8, 4975921792406175, 3, 'Albert', 'jeanlain', NULL, 'admin', NULL, 'Cherbourg', NULL, 'France', '+330768704677', 'al.cam@gmail.com', NULL, '7287268668', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08'),
(9, 4975921792406175, 1, 'superman', 'jeanlain', NULL, NULL, NULL, 'Nice', 45000, 'France', '+330768704677', 'spm@gmail.com', NULL, '7896598687', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08'),
(10, 4990963272538566, 2, 'Boul', 'Emma', NULL, 'Generaliste', NULL, 'Assas', 34820, 'France', '0783460084', 'E@boul', NULL, '25252556', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08'),
(11, 255, 1, 'Augier', 'Fab', NULL, NULL, NULL, 'Assas', 34820, 'France', '0783460084', 'E@assas', NULL, '25252556', 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'),
(12, 4990963272538565, 2, 'Quardiak', 'Chris', NULL, 'Dermatologue', NULL, 'Nice', 83000, 'France', '07 87 86 00 84 ', 'keur@lapost', NULL, '566874589628', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08'),
(13, 115833208340, 2, 'Dibule', 'Clement', NULL, 'Osteopathe', NULL, 'Paris', 75005, 'France', '07 87 86 00 84 ', 'clem@paris', NULL, '896574589628', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08'),
(14, 27253857772575, 2, 'Saint Thomas', 'Isabelle', NULL, 'IST', NULL, 'Paris', 75010, 'France', '07 87 86 00 84 ', 'rachelle@paris', NULL, '878974589628', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08'),
(15, 4264682142, 2, 'Kulpa', 'Jean', NULL, 'Andrologue', NULL, 'Paris', 75006, 'France', '07 87 40 00 84 ', 'andrologue@paris', NULL, '123474589628', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08'),
(16, 4264682142, 2, 'Terrusse', 'Manu', NULL, 'Gynecologue', NULL, 'Montpellier', 34000, 'France', '06 97 40 00 84 ', 'immeuble@mtp', NULL, '863474589628', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08'),
(17, 4264682142, 2, 'Coupee', 'Megane', NULL, 'Generaliste', NULL, 'Nice', 44000, 'France', '01 27 40 00 84 ', 'Nicoise@ece', NULL, '997474589628', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08'),
(18, 4990963272538565, 2, 'Arhee', 'Melodie', NULL, 'Gastro-Hepato-Enterologue', NULL, 'Paris', 75000, 'France', '01 27 40 00 84 ', 'PascalBlaise@ece.fr', NULL, '897474589628', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08'),
(19, 4264682142, 2, 'Maurice', 'Philippe', NULL, 'Addictologue', NULL, 'Perpignan', 6589, 'France', '07 47 40 50 84 ', 'perpignanaisPourToujours@leSud', NULL, '56745856', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08'),
(20, 4975921792406175, 3, 'Stephan', 'Francois', NULL, 'Admin', NULL, 'Saint-Denis', 93000, 'France', '+337 88 70 46 47', 'ece@gmail.com', NULL, '526866856462', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08'),
(21, 115833208340, 2, 'Van Persie', 'Auguste', NULL, 'Generaliste', NULL, 'Cherbourg', 78005, 'France', '07 87 86 00 84 ', 'vanPersie@paris', NULL, '896574589628', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08'),
(22, 4990963272538565, 2, 'Nolan', 'Som', NULL, 'Dermatologue', NULL, 'Perpignan', 45000, 'France', '07 89 86 00 84 ', 'perpi@lapost', NULL, '566874589628', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08'),
(23, 4264682142, 2, 'Jean', 'Jeanne', NULL, 'Gynecologue', NULL, 'Cherbourg', 78000, 'France', '07 47 48 00 84 ', 'gynus@chb', NULL, '863474589628', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08'),
(24, 4990963272538565, 2, 'Sympatik', 'Josette', NULL, 'Gastro-Hepato-Enterologue', NULL, 'Nice', 75000, 'France', '04 67 40 00 84 ', 'niNice@ece.it', NULL, '897474589628', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08');

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
-- Contraintes pour la table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `medecin3` FOREIGN KEY (`medecinID`) REFERENCES `utilisateur` (`utilisateurID`);

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `numCarte` FOREIGN KEY (`numCarte`) REFERENCES `cartebancaire` (`numCarte`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
