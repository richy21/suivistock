-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 24 fév. 2021 à 18:20
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `suivistock`
--

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `ref` varchar(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `qteStock` int(11) NOT NULL,
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`ref`, `nom`, `qteStock`, `idUser`) VALUES
('SS_24022021_PRO1', 'Lait', 1000, 1),
('SS_24022021_PRO10', 'Coca', 150, 2),
('SS_24022021_PRO11', 'Chargeur', 922, 2),
('SS_24022021_PRO2', 'Cafe', 500, 1),
('SS_24022021_PRO3', 'Presssea', 545, 2),
('SS_24022021_PRO4', 'PAIN', 250, 2),
('SS_24022021_PRO5', 'Sucre', 46, 2),
('SS_24022021_PRO6', 'Telephone', 233, 2),
('SS_24022021_PRO7', 'Ordinateur', 560, 2),
('SS_24022021_PRO8', 'Dsique dur', 75, 2),
('SS_24022021_PRO9', 'Lampe', 34, 2);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `etat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `email`, `password`, `etat`) VALUES
(1, 'AMAH', 'Meheza Ulrich', 'amah@codify-sn.com', '$2y$10$XzZs/ZN4xXUjcoRoptLa/.lpZK4uic.HcMvlSi8s1zhX3zzkK8ELq', 1),
(2, 'BENGUI', 'Emerencia', 'emerencia@gmail.com', '$2y$10$XzZs/ZN4xXUjcoRoptLa/.lpZK4uic.HcMvlSi8s1zhX3zzkK8ELq', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`ref`),
  ADD KEY `idUser` (`idUser`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
