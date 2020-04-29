-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 29 avr. 2020 à 10:46
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP :  7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet_moto`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `identifiant` varchar(255) DEFAULT NULL,
  `mot_de_passe` varchar(255) DEFAULT NULL,
  `Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`nom`, `prenom`, `identifiant`, `mot_de_passe`, `Id`) VALUES
('bado', 'zagre', 'groupe13', 'd45336512578698404939dd35c2965e5baa88b3b', 0);

-- --------------------------------------------------------

--
-- Structure de la table `moto`
--

CREATE TABLE `moto` (
  `marque` varchar(255) DEFAULT NULL,
  `modele` varchar(255) DEFAULT NULL,
  `cylindre` varchar(255) DEFAULT NULL,
  `numero_de_serie` varchar(255) NOT NULL,
  `prix` varchar(255) DEFAULT NULL,
  `couleur` varchar(255) DEFAULT NULL,
  `disponibilite` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `moto`
--

INSERT INTO `moto` (`marque`, `modele`, `cylindre`, `numero_de_serie`, `prix`, `couleur`, `disponibilite`) VALUES
('yamaha', 'crypton', '4', '450895', '395000', 'noir', 'stock'),
('triwin', 'forcex', '4', '456m645', '510000', 'noir', 'stock'),
('yamaha', 'sirus', '9', '685645nh', '780000', 'blanc', 'stock'),
('sanili', 'sniya', '8', '84m44545', '90000', 'rouge', 'stock'),
('kaizer', 'f12', '4', 'kjd56662', '375000', 'blanc', 'stock');

-- --------------------------------------------------------

--
-- Structure de la table `vente`
--

CREATE TABLE `vente` (
  `numero_de_serie` varchar(255) NOT NULL,
  `Id` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `somme` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `moto`
--
ALTER TABLE `moto`
  ADD PRIMARY KEY (`numero_de_serie`);

--
-- Index pour la table `vente`
--
ALTER TABLE `vente`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_Generalisation_1` (`numero_de_serie`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `vente`
--
ALTER TABLE `vente`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `vente`
--
ALTER TABLE `vente`
  ADD CONSTRAINT `FK_Generalisation_1` FOREIGN KEY (`numero_de_serie`) REFERENCES `moto` (`numero_de_serie`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
