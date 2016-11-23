-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 23 Novembre 2016 à 17:32
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `lanparty`
--

-- --------------------------------------------------------

--
-- Structure de la table `lieu`
--

CREATE TABLE `lieu` (
  `id_lieu` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `lien` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `lieu`
--

INSERT INTO `lieu` (`id_lieu`, `nom`, `lien`) VALUES
(1, 'Matane', '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `lieu`
--
ALTER TABLE `lieu`
  ADD KEY `id_lieu` (`id_lieu`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `lieu`
--
ALTER TABLE `lieu`
  MODIFY `id_lieu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
