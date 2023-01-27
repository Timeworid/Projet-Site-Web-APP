-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 25 jan. 2023 à 16:36
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `site web app`
--

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

DROP TABLE IF EXISTS `avis`;
CREATE TABLE IF NOT EXISTS `avis` (
  `idAvis` int NOT NULL AUTO_INCREMENT,
  `titreAvis` varchar(50) DEFAULT NULL,
  `commentaire` varchar(1000) DEFAULT NULL,
  `note` int DEFAULT NULL,
  `mail` varchar(50) NOT NULL,
  `dateAvis` datetime NOT NULL,
  PRIMARY KEY (`idAvis`),
  KEY `mail` (`mail`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `avis`
--

INSERT INTO `avis` (`idAvis`, `titreAvis`, `commentaire`, `note`, `mail`, `dateAvis`) VALUES
(12, 'random', 'zsdzdz&quot;zz', 5, 'corentin.campano@gmail.com', '2023-01-19 19:56:37'),
(13, 'random', 'Suuu', 5, 'corentin.campano@gmail.com', '2023-01-19 20:49:53'),
(14, 'random', 'sah', 5, 'corentin.campano@gmail.com', '2023-01-19 20:50:29'),
(15, 'random', 'Suuu', 4, 'corentin.campano@gmail.com', '2023-01-19 21:04:43'),
(16, 'random', 'zfefefeef', 4, 'corentin.campano@gmail.com', '2023-01-19 21:07:48'),
(17, 'random', 'trhgtyhth', 5, 'corentin.campano@gmail.com', '2023-01-19 21:08:09'),
(18, 'random', 'zdzdzzd', 0, 'corentin.campano@gmail.com', '2023-01-19 21:08:44'),
(19, 'random', 'effefe', 0, 'corentin.campano@gmail.com', '2023-01-19 21:10:04'),
(20, 'random', 'asasaa', 0, 'corentin.campano@gmail.com', '2023-01-19 21:10:17'),
(21, 'random', 'asasaaffrv', 5, 'corentin.campano@gmail.com', '2023-01-19 21:10:30'),
(22, 'random', 'asasaaffrv', 5, 'corentin.campano@gmail.com', '2023-01-19 21:10:33');

-- --------------------------------------------------------

--
-- Structure de la table `conversation`
--

DROP TABLE IF EXISTS `conversation`;
CREATE TABLE IF NOT EXISTS `conversation` (
  `idConversation` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idConversation`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `conversation`
--

INSERT INTO `conversation` (`idConversation`) VALUES
(1);

-- --------------------------------------------------------

--
-- Structure de la table `envoiemsg`
--

DROP TABLE IF EXISTS `envoiemsg`;
CREATE TABLE IF NOT EXISTS `envoiemsg` (
  `mail` varchar(50) NOT NULL,
  `idConversation` varchar(50) NOT NULL,
  `idmessage` varchar(50) NOT NULL,
  PRIMARY KEY (`mail`,`idConversation`,`idmessage`),
  KEY `idConversation` (`idConversation`,`idmessage`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `idConversation` int NOT NULL,
  `dateMessage` datetime NOT NULL,
  `contenuMessage` varchar(2000) DEFAULT NULL,
  `idMessage` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idMessage`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`idConversation`, `dateMessage`, `contenuMessage`, `idMessage`) VALUES
(1, '2023-01-19 18:32:33', 'undefined', 1),
(1, '2023-01-19 18:32:35', 'undefined', 2),
(1, '2023-01-19 21:35:14', 'undefined', 3),
(1, '2023-01-19 21:38:57', 'zdzz', 4);

-- --------------------------------------------------------

--
-- Structure de la table `parametreutilisateur`
--

DROP TABLE IF EXISTS `parametreutilisateur`;
CREATE TABLE IF NOT EXISTS `parametreutilisateur` (
  `mail` varchar(50) NOT NULL,
  `idParametre` int NOT NULL,
  `nomParametre` varchar(50) DEFAULT NULL,
  `valParametre` tinyint DEFAULT NULL,
  PRIMARY KEY (`mail`,`idParametre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `participeconversation`
--

DROP TABLE IF EXISTS `participeconversation`;
CREATE TABLE IF NOT EXISTS `participeconversation` (
  `mail` varchar(50) NOT NULL,
  `idConversation` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`mail`,`idConversation`),
  KEY `idConversation` (`idConversation`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `participeticket`
--

DROP TABLE IF EXISTS `participeticket`;
CREATE TABLE IF NOT EXISTS `participeticket` (
  `mail` varchar(50) NOT NULL,
  `idTicket` int NOT NULL,
  PRIMARY KEY (`mail`,`idTicket`),
  KEY `idTicket` (`idTicket`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `reponse`
--

DROP TABLE IF EXISTS `reponse`;
CREATE TABLE IF NOT EXISTS `reponse` (
  `idTopic` int NOT NULL,
  `mail` varchar(50) NOT NULL,
  `idReponse` int NOT NULL,
  `contenuReponse` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`idTopic`,`mail`,`idReponse`),
  KEY `mail` (`mail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `statistiques`
--

DROP TABLE IF EXISTS `statistiques`;
CREATE TABLE IF NOT EXISTS `statistiques` (
  `mail` varchar(50) NOT NULL,
  `dateStat` datetime NOT NULL,
  `typeStat` varchar(50) DEFAULT NULL,
  `valStat` varchar(5000) NOT NULL,
  PRIMARY KEY (`mail`,`dateStat`),
  KEY `dateStat` (`dateStat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `ticket`
--

DROP TABLE IF EXISTS `ticket`;
CREATE TABLE IF NOT EXISTS `ticket` (
  `idTicket` int NOT NULL,
  `titreTicket` varchar(50) DEFAULT NULL,
  `catTicket` varchar(50) DEFAULT NULL,
  `descTciket` varchar(500) DEFAULT NULL,
  `prioTicket` varchar(50) DEFAULT NULL,
  `dateTicket` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idTicket`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `topic`
--

DROP TABLE IF EXISTS `topic`;
CREATE TABLE IF NOT EXISTS `topic` (
  `idTopic` int NOT NULL,
  `nomTopic` varchar(50) DEFAULT NULL,
  `mail` varchar(50) NOT NULL,
  PRIMARY KEY (`idTopic`),
  KEY `mail` (`mail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `mail` varchar(50) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `dateNaissance` varchar(50) DEFAULT NULL,
  `Adresse` varchar(50) DEFAULT NULL,
  `aboutme` varchar(300) DEFAULT NULL,
  `langage` varchar(50) DEFAULT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `motDePasse` varchar(50) DEFAULT NULL,
  `type` tinyint DEFAULT NULL,
  PRIMARY KEY (`mail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`mail`, `nom`, `prenom`, `dateNaissance`, `Adresse`, `aboutme`, `langage`, `photo`, `motDePasse`, `type`) VALUES
('coco.michoumineur@gmail.com', 'Campano', 'Corentin', '2002-09-06', NULL, NULL, NULL, NULL, '$2y$10$OhHcPYWmhL3ZP8zPYknSLuwFopcXjPklOnmaSyTFuTU', 0),
('corentin.campano@gmail.com', 'Campano', 'Corentin', '2002-09-06', NULL, NULL, NULL, NULL, 'test', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
