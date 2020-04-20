-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 01 avr. 2020 à 17:55
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `folia`
--

-- --------------------------------------------------------

--
-- Structure de la table `folia_folia_tuteurs_etudiants`
--

CREATE TABLE `folia_folia_tuteurs_etudiants` (
  `id` int(11) NOT NULL,
  `tuteurs_id` int(11) NOT NULL,
  `etudiants_id` int(11) NOT NULL,
  `alias` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `published` tinyint(1) NOT NULL DEFAULT 1,
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT 0,
  `modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT 0,
  `hits` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `folia_folia_tuteurs_etudiants`
--
ALTER TABLE `folia_folia_tuteurs_etudiants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_folia_folia_tuteurs_etudiants_etudiants_id` (`etudiants_id`),
  ADD KEY `fk_folia_folia_tuteurs_etudiants_tuteurs_id` (`tuteurs_id`);

--
-- Contraintes pour les tables déchargées
--
ALTER TABLE `folia_folia_tuteurs_etudiants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour la table `folia_folia_tuteurs_etudiants`
--
ALTER TABLE `folia_folia_tuteurs_etudiants`
  ADD CONSTRAINT `fk_folia_folia_tuteurs_etudiants_etudiants_id` FOREIGN KEY (`etudiants_id`) REFERENCES `folia_folia_etudiants` (`id`),
  ADD CONSTRAINT `fk_folia_folia_tuteurs_etudiants_tuteurs_id` FOREIGN KEY (`tuteurs_id`) REFERENCES `folia_folia_tuteurs` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
