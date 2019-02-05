-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 05 Février 2019 à 19:24
-- Version du serveur :  10.1.9-MariaDB
-- Version de PHP :  5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `miage1`
--

-- --------------------------------------------------------

--
-- Structure de la table `comptes`
--

CREATE TABLE `comptes` (
  `id` int(11) NOT NULL,
  `login` varchar(50) COLLATE utf8_bin NOT NULL,
  `mdp` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `comptes`
--

INSERT INTO `comptes` (`id`, `login`, `mdp`) VALUES
(3, 'admin', '202cb962ac59075b964b07152d234b70'),
(4, 'user', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `code` varchar(10) COLLATE utf8_bin NOT NULL,
  `nom` varchar(25) COLLATE utf8_bin NOT NULL,
  `email` varchar(25) COLLATE utf8_bin NOT NULL,
  `photo` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `etudiant`
--

INSERT INTO `etudiant` (`code`, `nom`, `email`, `photo`) VALUES
('557', 'ahmed', 'ahmed@hh.com', '47390.png'),
('576', 'tilimsani', 'ahmed@hh.com', 'images.jpg'),
('5874', 'tilimsani', 'baderdine@hggjh', '47390.png'),
('58877', 'user10', 'ali@ali', '1238395.png');

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE `personne` (
  `id` int(11) NOT NULL,
  `nom` varchar(25) CHARACTER SET latin1 NOT NULL,
  `prenom` varchar(25) CHARACTER SET latin1 NOT NULL,
  `adresse` varchar(25) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `personne`
--

INSERT INTO `personne` (`id`, `nom`, `prenom`, `adresse`) VALUES
(1, 'alami', 'ali', 'rabat'),
(2, 'majih', 'kamal', 'casa'),
(8, 'isamili', 'khalid', 'france'),
(9, 'jalal', 'jilali', 'MARRAKECH');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `comptes`
--
ALTER TABLE `comptes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`code`);

--
-- Index pour la table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `comptes`
--
ALTER TABLE `comptes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `personne`
--
ALTER TABLE `personne`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
