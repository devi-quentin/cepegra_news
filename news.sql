-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 04 juil. 2022 à 16:16
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ingrwf10_php`
--

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `titre` varchar(200) NOT NULL,
  `contenu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `news`
--

INSERT INTO `news` (`id`, `titre`, `contenu`) VALUES
(1, 'Premiere news du jours', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce euismod mi tortor, at facilisis sem mattis sed. Praesent consectetur elementum imperdiet. Maecenas urna sapien, suscipit mollis risus nec, varius tempus mi. Vivamus pulvinar mauris et turpis faucibus molestie. Maecenas sodales auctor libero.'),
(2, 'Ceci est la news numéro 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce euismod mi tortor, at facilisis sem mattis sed. Praesent consectetur elementum imperdiet. Maecenas urna sapien, suscipit mollis risus nec, varius tempus mi.'),
(3, 'Lorem ipsum', 'Vivamus pulvinar mauris et turpis faucibus molestie. Maecenas sodales auctor libero.'),
(4, 'Dernière new encodée', 'Maecenas urna sapien, suscipit mollis risus nec, varius tempus mi. Vivamus pulvinar mauris et turpis faucibus molestie. Maecenas sodales auctor libero.');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
