-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  ven. 20 mars 2020 à 00:13
-- Version du serveur :  10.4.6-MariaDB
-- Version de PHP :  7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `testbd`
--

-- --------------------------------------------------------

--
-- Structure de la table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `n_identite` varchar(255) NOT NULL,
  `sexe` varchar(10) NOT NULL,
  `date_naissance` date NOT NULL,
  `lieu_naissance` varchar(255) NOT NULL,
  `nationalite` varchar(255) NOT NULL,
  `taille` float NOT NULL,
  `poids` float NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `date_enregistrement` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `patients`
--

INSERT INTO `patients` (`id`, `nom`, `prenom`, `n_identite`, `sexe`, `date_naissance`, `lieu_naissance`, `nationalite`, `taille`, `poids`, `adresse`, `telephone`, `date_enregistrement`) VALUES
(5, 'anaurd', 'tohbi', 'c45555555555', 'M', '1998-02-07', 'bouake', 'ivoirienne', 170, 170, 'bingerville', '77577684', '2020-03-19 22:58:12'),
(6, 'zanbi', 'mohamed tresor', 'c45555555511', 'M', '1998-02-07', 'wuhan', 'chinois', 170, 80, 'bingerville', '45030952', '2020-03-19 23:03:35');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
