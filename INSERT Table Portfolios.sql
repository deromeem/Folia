-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 23 mars 2020 à 15:24
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE
= "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT
= 0;
START TRANSACTION;
SET time_zone
= "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `folia`
--

-- --------------------------------------------------------

--
-- Structure de la table `folia_folia_portfolios`
--

CREATE TABLE `folia_folia_portfolios`
(
  `id` int
(11) NOT NULL,
  `libelle` text NOT NULL,
  `etudiant_id` int
(11) NOT NULL,
  `themes_id` int
(11) NOT NULL,
  `alias` varchar
(255) NOT NULL,
  `published` tinyint
(1) NOT NULL DEFAULT 0,
  `created` datetime NOT NULL,
  `created_by` varchar
(255) NOT NULL,
  `modified` datetime NOT NULL,
  `modified_by` varchar
(255) NOT NULL,
  `hits` int
(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `folia_folia_portfolios`
--

INSERT INTO `folia_folia_portfolios` (`
titre`,
`texte`,
`etudiants_id
`, `themes_id`, `alias`, `published`, `created`, `created_by`, `modified`, `modified_by`, `hits`)
VALUES
('Portfolios M Dupond', 'Text', 28, 1, '', 0, '2020-03-17 00:00:00', '', '2020-03-17 00:00:00', '', 0),
('Portfolios M Ahmed-Reda', 'Text', 21, 1, '', 0, '2020-03-23 00:00:00', '', '2020-03-23 00:00:00', '', 0),
('Portfolios U Christian', 'Text', 24, 1, '', 0, '2020-03-23 00:00:00', '', '2020-03-23 00:00:00', '', 0),
('Portfolios L Caroline', 'Text', 15, 1, '', 0, '2020-03-23 00:00:00', '', '2020-03-23 00:00:00', '', 0),
('Portfolios E Jordan', 'Text', 10, 1, '', 0, '2020-03-23 00:00:00', '', '2020-03-23 00:00:00', '', 0),
('Portfolios M Julien', 'Text', 20, 1, '', 0, '2020-03-23 00:00:00', '', '2020-03-23 00:00:00', '', 0),
('Portfolios Y Michel', 'Text', 26, 1, '', 0, '2020-03-23 00:00:00', '', '2020-03-23 00:00:00', '', 0),
('Portfolios C-R Rafhael', 'Text', 6, 1, '', 0, '2020-03-23 00:00:00', '', '2020-03-23 00:00:00', '', 0),
('Portfolios R Thomas', 'Text', 23, 1, '', 0, '2020-03-23 00:00:00', '', '2020-03-23 00:00:00', '', 0),
('Portfolios D-D Tracy', 'Text', 7, 1, '', 0, '2020-03-23 00:00:00', '', '2020-03-23 00:00:00', '', 0),
('Portfolios D-D Tracy', 'Text', 7, 1, '', 0, '2020-03-23 00:00:00', '', '2020-03-23 00:00:00', '', 0),
('Portfolios W William', 'Text', 25, 1, '', 0, '2020-03-23 00:00:00', '', '2020-03-23 00:00:00', '', 0),
('Portfolios W William', 'Text', 25, 1, '', 0, '2020-03-23 00:00:00', '', '2020-03-23 00:00:00', '', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `folia_folia_portfolios`
--
ALTER TABLE `folia_folia_portfolios`
ADD PRIMARY KEY
(`id`),
ADD KEY `idthemes`
(`themes_id`),
ADD KEY `idetudiant`
(`etudiant_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `folia_folia_portfolios`
--
ALTER TABLE `folia_folia_portfolios`
  MODIFY `id` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `folia_folia_portfolios`
--
ALTER TABLE `folia_folia_portfolios`
ADD CONSTRAINT `fk_portfolios_etudiant` FOREIGN KEY
(`etudiant_id`) REFERENCES `folia_folia_etudiants`
(`id`),
ADD CONSTRAINT `fk_portfolios_themes` FOREIGN KEY
(`themes_id`) REFERENCES `folia_folia_themes`
(`id`);
COMMIT;


SET SQL_MODE
= "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT
= 0;
START TRANSACTION;
SET time_zone
= "+00:00";


CREATE TABLE `folia_folia_pages`
(
  `id` int
(11) NOT NULL,
  `nom` varchar
(255) NOT NULL,
  `alias` varchar
(255) NOT NULL,
  `portfolios_id` int
(11) NOT NULL,
  `published` tinyint
(1) NOT NULL DEFAULT 0,
  `created` datetime NOT NULL,
  `created_by` varchar
(255) NOT NULL,
  `modified` datetime NOT NULL,
  `modified_by` varchar
(255) NOT NULL,
  `hits` int
(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `folia_folia_pages`
--
ALTER TABLE `folia_folia_pages`
ADD PRIMARY KEY
(`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `folia_folia_pages`
--
ALTER TABLE `folia_folia_pages`
  MODIFY `id` int
(11) NOT NULL AUTO_INCREMENT;
COMMIT;

SET SQL_MODE
= "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT
= 0;
START TRANSACTION;
SET time_zone
= "+00:00";



CREATE TABLE `folia_folia_pages`
(
  `id` int
(11) NOT NULL,
  `nom` varchar
(255) NOT NULL,
  `alias` varchar
(255) NOT NULL,
  `portfolios_id` int
(11) NOT NULL,
  `published` tinyint
(1) NOT NULL DEFAULT 0,
  `created` datetime NOT NULL,
  `created_by` varchar
(255) NOT NULL,
  `modified` datetime NOT NULL,
  `modified_by` varchar
(255) NOT NULL,
  `hits` int
(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `folia_folia_pages`
--

INSERT INTO `folia_folia_pages` (`
id`,
`nom
`, `alias`, `portfolios_id`, `published`, `created`, `created_by`, `modified`, `modified_by`, `hits`) VALUES
(1, 'page 1 ahmed', '', 8, 0, '2020-03-23 00:00:00', '', '2020-03-23 00:00:00', '', 0),
(2, 'page 2 ahmed', '', 8, 0, '2020-03-23 00:00:00', '', '2020-03-23 00:00:00', '', 0),
(3, 'page Dupond', '', 1, 0, '2020-03-23 00:00:00', '', '2020-03-23 00:00:00', '', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `folia_folia_pages`
--
ALTER TABLE `folia_folia_pages`
ADD PRIMARY KEY
(`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `folia_folia_pages`
--
ALTER TABLE `folia_folia_pages`
  MODIFY `id` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;
