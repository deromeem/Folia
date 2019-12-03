-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 28 nov. 2019 à 12:16
-- Version du serveur :  10.3.15-MariaDB
-- Version de PHP :  7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `pref`
--

-- --------------------------------------------------------

--
-- Structure de la table `#__folia_activites`
--

CREATE TABLE `#__folia_activites` (
  `id` int(11) NOT NULL,
  `referentiels_id` int(11) NOT NULL,
  `nom` varchar(11) NOT NULL,
  `alias` varchar(255) NOT NULL DEFAULT '',
  `description` varchar(255) NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT 0,
  `created` datetime NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `modified` datetime NOT NULL,
  `modified_by` varchar(255) NOT NULL,
  `hits` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `#__folia_activites`
--

INSERT INTO `#__folia_activites` (`id`, `referentiels_id`, `nom`, `alias`, `description`, `published`, `created`, `created_by`, `modified`, `modified_by`, `hits`) VALUES
(1, 1, 'A1.1.1', '1a1.1.1', 'Analyse du cahier des charges d\'un service à produire', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(2, 1, 'A1.1.2', '1a1.1.2', 'Étude de l\'impact de l\'intégration d\'un service sur le système', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(3, 1, 'A1.1.3', '1a1.1.3', 'Étude des exigences liées à la qualité attendue d\'un service', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(4, 1, 'A1.2.1', '1a1.2.1', 'Élaboration et présentation d\'un dossier de choix de solution', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(5, 1, 'A1.2.2', '1a1.2.2', 'Rédaction des spécifications techniques de la solution', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(6, 1, 'A1.2.3', '1a1.2.3', 'Évaluation des risques liés à l\'utilisation d\'un service', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(7, 1, 'A1.2.4', '1a1.2.4', 'Détermination des tests nécessaires à la validation d\'un service', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(8, 1, 'A1.2.5', '1a1.2.5', 'Définition des niveaux d\'habilitation associés à un service', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(9, 1, 'A1.3.1', '1a1.3.1', 'Test d\'intégration et d\'acceptation d\'un service', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(10, 1, 'A1.3.2', '1a1.3.2', 'Définition des éléments nécessaires à la continuité d\'un service', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(11, 1, 'A1.3.3', '1a1.3.3', 'Accompagnement de la mise en place d\'un nouveau service', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(12, 1, 'A1.3.4', '1a1.3.4', 'Déploiement d\'un service', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(13, 1, 'A1.4.1', '1a1.4.1', 'Participation à un projet', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(14, 1, 'A1.4.2', '1a1.4.2', 'Évaluation des indicateurs de suivi d\'un projet et justification', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(15, 1, 'A1.4.3', '1a1.4.3', 'Gestion des ressources', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(16, 1, 'A2.1.1', '1a2.1.1', 'Accompagnement des utilisateurs dans la prise en main d\'un service', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(17, 1, 'A2.1.2', '1a2.1.2', 'Évaluation et maintien de la qualité d\'un service', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(18, 1, 'A2.2.1', '1a2.2.1', 'Suivi et résolution d\'incidents', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(19, 1, 'A2.2.2', '1a2.2.2', 'Suivi et réponse à des demandes d\'assistance', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(20, 1, 'A2.2.3', '1a2.2.3', 'Réponse à une interruption de service', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(21, 1, 'A2.3.1', '1a2.3.1', 'Identification, qualification et évaluation d\'un problème', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(22, 1, 'A2.3.2', '1a2.3.2', 'Proposition d\'amélioration d\'un service', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(23, 1, 'A3.1.1', '1a3.1.1', 'Proposition d\'une solution d\'infrastructure', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(24, 1, 'A3.1.2', '1a3.1.2', 'Maquettage et prototypage d\'une solution d\'infrastructure', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(25, 1, 'A3.2.1', '1a3.2.1', 'Installation et configuration d\'éléments d\'infrastructure', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(26, 1, 'A3.3.2', '1a3.3.2', 'Planification des sauvegardes et gestion des restaurations', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(27, 1, 'A4.1.1', '1a4.1.1', 'Proposition d\'une solution applicative', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(28, 1, 'A4.1.2', '1a4.1.2', 'Conception ou adaptation de l\'interface utilisateur d\'une solution', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(29, 1, 'A4.1.3', '1a4.1.3', 'Conception ou adaptation d\'une base de données', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(30, 1, 'A4.1.4', '1a4.1.4', 'Définition des caractéristiques d\'une solution applicative', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(31, 1, 'A4.1.5', '1a4.1.5', 'Prototypage de composants logiciels', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(32, 1, 'A4.1.6', '1a4.1.6', 'Gestion d\'environnements de développement et de test', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(33, 1, 'A4.1.7', '1a4.1.7', 'Développement, utilisation ou adaptation de composants logiciels', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(34, 1, 'A4.1.8', '1a4.1.8', 'Réalisation des tests nécessaires à la validation d\'éléments', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(35, 1, 'A4.1.9', '1a4.1.9', 'Rédaction d\'une documentation technique', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(36, 1, 'A4.1.10', '1a4.1.10', 'Rédaction d\'une documentation d\'utilisation', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(37, 1, 'A4.2.1', '1a4.2.1', 'Analyse et correction d\'un dysfonctionnement, d\'un problème', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(38, 1, 'A4.2.2', '1a4.2.2', 'Adaptation d\'une solution applicative aux évolutions', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(39, 1, 'A4.2.3', '1a4.2.3', 'Réalisation des tests nécessaires à la mise en production', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(40, 1, 'A4.2.4', '1a4.2.4', 'Mise à jour d\'une documentation technique', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(41, 1, 'A5.1.1', '1a5.1.1', 'Mise en place d\'une gestion de configuration', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(42, 1, 'A5.1.2', '1a5.1.2', 'Recueil d\'informations sur une configuration et ses élément', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(43, 1, 'A5.1.3', '1a5.1.3', 'Suivi d\'une configuration et de ses éléments', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(44, 1, 'A5.1.4', '1a5.1.4', 'Étude de propositions de contrat de service (client, fournisseur)', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(45, 1, 'A5.1.5', '1a5.1.5', 'Évaluation d\'un élément de configuration ou d\'une configuration', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(46, 1, 'A5.1.6', '1a5.1.6', 'Évaluation d\'un investissement informatique', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(47, 1, 'A5.2.1', '1a5.2.1', 'Exploitation des référentiels, normes et standards', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(48, 1, 'A5.2.2', '1a5.2.2', 'Veille technologique', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(49, 1, 'A5.2.3', '1a5.2.3', 'Repérage des compléments de formation ou d\'auto-formation', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(50, 1, 'A5.2.4', '1a5.2.4', 'Étude d‘une technologie, d\'un composant, d\'un outil', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `#__folia_bibliotheques`
--

CREATE TABLE `#__folia_bibliotheques` (
  `id` int(11) NOT NULL,
  `etudiant_id` int(11) NOT NULL,
  `nom` int(11) NOT NULL,
  `apercu` varchar(255) NOT NULL,
  `avance` tinyint(1) NOT NULL DEFAULT 0,
  `alias` varchar(255) NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT 0,
  `created` datetime NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `modified` datetime NOT NULL,
  `modified_by` varchar(255) NOT NULL,
  `hits` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `#__folia_blocs`
--

CREATE TABLE `#__folia_blocs` (
  `id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `activite_id` int(11) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `texte` varchar(255) NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT 0,
  `created` datetime NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `modified` datetime NOT NULL,
  `modified_by` varchar(255) NOT NULL,
  `hits` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `#__folia_blocs_documents`
--

CREATE TABLE `#__folia_blocs_documents` (
  `id` int(11) NOT NULL,
  `blocs_id` int(11) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT 0,
  `created` datetime NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `modified` datetime NOT NULL,
  `modified_by` varchar(255) NOT NULL,
  `hits` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `#__folia_classes`
--

CREATE TABLE `#__folia_classes` (
  `id` int(11) NOT NULL,
  `libelle` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `referentiel_id` int(11) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT 0,
  `created` datetime NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `modified` datetime NOT NULL,
  `modified_by` varchar(255) NOT NULL,
  `hits` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `#__folia_classes`
--

INSERT INTO `#__folia_classes` (`id`, `libelle`, `alias`, `published`, `created`, `created_by`, `modified`, `modified_by`, `hits`) VALUES
(1, '-', '', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(2, 'BTS2 SIO', 1, '', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `#__folia_commentaires`
--

CREATE TABLE `#__folia_commentaires` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `professeurs_id` int(11) NOT NULL,
  `tuteurs_id` int(11) NOT NULL,
  `portfolios_id` int(11) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT 0,
  `created` datetime NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `modified` datetime NOT NULL,
  `modified_by` varchar(255) NOT NULL,
  `hits` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `#__folia_documents`
--

CREATE TABLE `#__folia_documents` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `format` varchar(255) NOT NULL,
  `blocs_documents_id` int(11) NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT 0,
  `created` datetime NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `modified` datetime NOT NULL,
  `modified_by` varchar(255) NOT NULL,
  `hits` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `#__folia_etudiants`
--

CREATE TABLE `#__folia_etudiants` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `avance` tinyint(1) NOT NULL DEFAULT 0,
  `classes_id` int(11) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT 0,
  `created` datetime NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `modified` datetime NOT NULL,
  `modified_by` varchar(255) NOT NULL,
  `hits` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `#__folia_etudiants`
--

INSERT INTO `#__folia_etudiants` (`id`, `email`, `avance`, `classes_id`, `alias`, `published`, `created`, `created_by`, `modified`, `modified_by`, `hits`) VALUES
(1, '-', 0, 1, '', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(2, 'jemima.abeki@etudiants.louis-armand.paris', 0, 2, '', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(3, 'elyes.ayari@etudiants.louis-armand.paris', 0, 2, '', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(4, 'etienne.bourdin@etudiants.louis-armand.paris', 0, 2, '', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(5, 'sabri.chahed@etudiants.louis-armand.paris', 0, 2, '', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(6, 'rafhael.chavez-ramirez@etudiants.louis-armand.paris', 0, 2, '', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(7, 'tracy.domingos-daupin@etudiants.louis-armand.paris', 0, 2, '', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(8, 'anis.el-guabdaoui@etudiants.louis-armand.paris', 0, 2, '', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(9, 'olivier.etienne@etudiants.louis-armand.paris', 0, 2, '', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(10, 'jordan.etinault@etudiants.louis-armand.paris', 0, 2, '', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(11, 'zineddine.guerroumi@etudiants.louis-armand.paris', 0, 2, '', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(12, 'ruben.hubert@etudiants.louis-armand.paris', 0, 2, '', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(13, 'yannis.kadhi@etudiants.louis-armand.paris', 0, 2, '', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(14, 'hamza.khannoussi@etudiants.louis-armand.paris', 0, 2, '', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(15, 'caroline.leclerc@etudiants.louis-armand.paris', 0, 2, '', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(16, 'david.lencrerot@etudiants.louis-armand.paris', 0, 2, '', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(17, 'iannis.limbrey@etudiants.louis-armand.paris', 0, 2, '', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(18, 'adrien.marques@etudiants.louis-armand.paris', 0, 2, '', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(19, 'akram.mehor@etudiants.louis-armand.paris', 0, 2, '', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(20, 'julien.meritte@etudiants.louis-armand.paris', 0, 2, '', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(21, 'ahmed-reda.mokhtari@etudiants.louis-armand.paris', 0, 2, '', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(22, 'sylvain.ndjip@etudiants.louis-armand.paris', 0, 2, '', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(23, 'thomas.rampnoux@etudiants.louis-armand.paris', 0, 2, '', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(24, 'christian.ung@etudiants.louis-armand.paris', 0, 2, '', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(25, 'william.wan@etudiants.louis-armand.paris', 0, 2, '', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(26, 'michel.yam@etudiants.louis-armand.paris', 0, 2, '', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `#__folia_groupes`
--

CREATE TABLE `#__folia_groupes` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `alias` varchar(255) NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT 0,
  `created` datetime NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `modified` datetime NOT NULL,
  `modified_by` varchar(255) NOT NULL,
  `hits` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `#__folia_groupes`
--

INSERT INTO `#__folia_groupes` (`id`, `nom`, `alias`, `published`, `created`, `created_by`, `modified`, `modified_by`, `hits`) VALUES
(1, '-', '', 0, '2018-09-26 15:00:00', '', '2018-09-26 15:01:00', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `#__folia_groupes_partages`
--

CREATE TABLE `#__folia_groupes_partages` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `groupes_id` int(11) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT 0,
  `created` datetime NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `modified` datetime NOT NULL,
  `modified_by` varchar(255) NOT NULL,
  `hits` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `#__folia_groupes_partages`
--

INSERT INTO `#__folia_groupes_partages` (`id`, `nom`, `groupes_id`, `alias`, `published`, `created`, `created_by`, `modified`, `modified_by`, `hits`) VALUES
(1, '-', 1, '', 0, '2018-09-26 15:00:00', '', '2018-09-26 15:01:00', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `#__folia_pages`
--

CREATE TABLE `#__folia_pages` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `portfolios_id` int(11) NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT 0,
  `created` datetime NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `modified` datetime NOT NULL,
  `modified_by` varchar(255) NOT NULL,
  `hits` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `#__folia_portfolios`
--

CREATE TABLE `#__folia_portfolios` (
  `id` int(11) NOT NULL,
  `libelle` text NOT NULL,
  `etudiant_id` int(11) NOT NULL,
  `themes_id` int(11) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT 0,
  `created` datetime NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `modified` datetime NOT NULL,
  `modified_by` varchar(255) NOT NULL,
  `hits` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `#__folia_professeurs`
--

CREATE TABLE `#__folia_professeurs` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `matiere` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT 0,
  `created` datetime NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `modified` datetime NOT NULL,
  `modified_by` int(11) NOT NULL,
  `hits` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `#__folia_professeurs`
--

INSERT INTO `#__folia_professeurs` (`id`, `email`, `matiere`, `alias`, `published`, `created`, `created_by`, `modified`, `modified_by`, `hits`) VALUES
(1, '-', '', '', 0, '2018-09-26 15:00:00', '', '2018-09-26 15:00:00', 0, 0),
(2, 'emmanuel.derome@louis-armand.paris', 'Informatique', '', 0, '2018-09-26 15:00:00', '', '2018-09-26 15:00:00', 0, 0),
(3, 'marie-lise.simon@louis-armand.paris', 'Informatique', '', 0, '2018-09-26 15:00:00', '', '2018-09-26 15:00:00', 0, 0),
(4, 'claude.roos@louis-armand.paris', 'Informatique', '', 0, '2018-09-26 15:00:00', '', '2018-09-26 15:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `#__folia_professeurs_classes`
--

CREATE TABLE `#__folia_professeurs_classes` (
  `professeurs_id` int(11) NOT NULL,
  `classes_id` int(11) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT 0,
  `created` datetime NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `modified` datetime NOT NULL,
  `modified_by` int(11) NOT NULL,
  `hits` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `folia_folia_referentiels`
--

CREATE TABLE `folia_folia_referentiels` (
  `id` int(11) NOT NULL,
  `nom` varchar(128) NOT NULL,
  `description` TEXT NOT NULL,
  `alias` varchar(255) NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT 0,
  `created` datetime NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `modified` datetime NOT NULL,
  `modified_by` varchar(255) NOT NULL,
  `hits` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `#__folia_referentiels`
--

INSERT INTO `folia_folia_referentiels` (`id`, `nom`, `description`, `alias`, `published`, `created`, `created_by`, `modified`, `modified_by`, `hits`) VALUES
(1, 'BTS SIO v1', '1ere version du BTS SIO', 'btssiov1', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '0', 0);

-- --------------------------------------------------------

--
-- Structure de la table `#__folia_themes`
--

CREATE TABLE `#__folia_themes` (
  `id` int(11) NOT NULL,
  `lib_id` int(11) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT 0,
  `created` datetime NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `modified` datetime NOT NULL,
  `modified_by` varchar(255) NOT NULL,
  `hits` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `#__folia_tuteurs`
--

CREATE TABLE `#__folia_tuteurs` (
  `id` int(11) NOT NULL,
  `societe` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT 0,
  `created` datetime NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `modified` datetime NOT NULL,
  `modified_by` int(11) NOT NULL,
  `hits` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `#__folia_tuteurs_etudiants`
--

CREATE TABLE `#__folia_tuteurs_etudiants` (
  `tuteurs_id` int(11) NOT NULL,
  `etudiants_id` int(11) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT 0,
  `created` datetime NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `modified` datetime NOT NULL,
  `modified_by` int(11) NOT NULL,
  `hits` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `#__folia_utilisateurs`
--

CREATE TABLE `#__folia_utilisateurs` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `prenom` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT '',
  `groupes_partages_id` int(11) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT 0,
  `created` datetime NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `modified` datetime NOT NULL,
  `modified_by` varchar(255) NOT NULL,
  `hits` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `#__folia_utilisateurs`
--

INSERT INTO `#__folia_utilisateurs` (`id`, `nom`, `prenom`, `email`, `groupes_partages_id`, `alias`, `published`, `created`, `created_by`, `modified`, `modified_by`, `hits`) VALUES
(1, '-', '', '', 1, '', 0, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(2, 'ABEKI', 'Jemima Sofia', 'jemima.abeki@etudiants.louis-armand.paris', 1, '', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(3, 'AYARI', 'Elyes', 'elyes.ayari@etudiants.louis-armand.paris', 1, '', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(4, 'BOURDIN', 'Etienne', 'etienne.bourdin@etudiants.louis-armand.paris', 1, '', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(5, 'CHAHED', 'Sabri', 'sabri.chahed@etudiants.louis-armand.paris', 1, '', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(6, 'CHAVEZ RAMIREZ', 'Rafhael', 'rafhael.chavez-ramirez@etudiants.louis-armand.paris', 1, '', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(7, 'DOMINGOS DAUPIN', 'Tracy', 'tracy.domingos-daupin@etudiants.louis-armand.paris', 1, '', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(8, 'EL GUABDAOUI', 'Anis', 'anis.el-guabdaoui@etudiants.louis-armand.paris', 1, '', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(9, 'ETIENNE', 'Olivier', 'olivier.etienne@etudiants.louis-armand.paris', 1, '', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(10, 'ETINAULT', 'Jordan', 'jordan.etinault@etudiants.louis-armand.paris', 1, '', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(11, 'GUERROUMI', 'Zineddine', 'zineddine.guerroumi@etudiants.louis-armand.paris', 1, '', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(12, 'HUBERT', 'Ruben', 'ruben.hubert@etudiants.louis-armand.paris', 1, '', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(13, 'KADHI', 'Yannis', 'yannis.kadhi@etudiants.louis-armand.paris', 1, '', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(14, 'KHANNOUSSI', 'Hamza', 'hamza.khannoussi@etudiants.louis-armand.paris', 1, '', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(15, 'LECLERC', 'Caroline', 'caroline.leclerc@etudiants.louis-armand.paris', 1, '', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(16, 'LECREROT', 'David', 'david.lencrerot@etudiants.louis-armand.paris', 1, '', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(17, 'LIMBREY', 'Iannis', 'iannis.limbrey@etudiants.louis-armand.paris', 1, '', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(18, 'MARQUES', 'Adrien', 'adrien.marques@etudiants.louis-armand.paris', 1, '', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(19, 'MEHOR', 'Akram', 'akram.mehor@etudiants.louis-armand.paris', 1, '', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(20, 'MERITTE', 'Julien', 'julien.meritte@etudiants.louis-armand.paris', 1, '', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(21, 'MOKHTARI', 'Ahmed-Reda', 'ahmed-reda.mokhtari@etudiants.louis-armand.paris', 1, '', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(22, 'NDJIP', 'Sylvain', 'sylvain.ndjip@etudiants.louis-armand.paris', 1, '', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(23, 'RAMPNOUX', 'Thomas', 'thomas.rampnoux@etudiants.louis-armand.paris', 1, '', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(24, 'UNG', 'Christian Hugo', 'christian.ung@etudiants.louis-armand.paris', 1, '', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(25, 'WAN', 'William', 'william.wan@etudiants.louis-armand.paris', 1, '', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(26, 'YAM', 'Michel', 'michel.yam@etudiants.louis-armand.paris', 1, '', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(27, 'DEROME', 'Emmanuel', 'emmanuel.derome@louis-armand.paris', 1, '', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(28, 'SIMON', 'Marie-Lise', 'marie-lise.simon@louis-armand.paris', 1, '', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0),
(29, 'ROOS', 'Claude', 'claude.roos@louis-armand.paris', 1, '', 1, '2018-09-26 15:00:00', '0', '2018-09-26 15:01:00', '', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `#__folia_activites`
--
ALTER TABLE `#__folia_activites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idReferentiels` (`referentiels_id`);

--
-- Index pour la table `#__folia_bibliotheques`
--
ALTER TABLE `#__folia_bibliotheques`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idetudiant` (`etudiant_id`);

--
-- Index pour la table `#__folia_blocs`
--
ALTER TABLE `#__folia_blocs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idPage` (`page_id`),
  ADD KEY `idActivite` (`activite_id`);

--
-- Index pour la table `#__folia_blocs_documents`
--
ALTER TABLE `#__folia_blocs_documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idBloc` (`blocs_id`);

--
-- Index pour la table `#__folia_classes`
--
ALTER TABLE `#__folia_classes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `#__folia_commentaires`
--
ALTER TABLE `#__folia_commentaires`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_commentaires_auteurs_profs` (`professeurs_id`),
  ADD KEY `fk_commentaires_auteurs_tuteurs` (`tuteurs_id`),
  ADD KEY `fk_commentaires_portfolios` (`portfolios_id`);

--
-- Index pour la table `#__folia_documents`
--
ALTER TABLE `#__folia_documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idBlocDoc` (`blocs_documents_id`);

--
-- Index pour la table `#__folia_etudiants`
--
ALTER TABLE `#__folia_etudiants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idclasses` (`classes_id`);

--
-- Index pour la table `#__folia_groupes`
--
ALTER TABLE `#__folia_groupes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `#__folia_groupes_partages`
--
ALTER TABLE `#__folia_groupes_partages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_groupes_partages_groupes` (`groupes_id`);

--
-- Index pour la table `#__folia_pages`
--
ALTER TABLE `#__folia_pages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `#__folia_portfolios`
--
ALTER TABLE `#__folia_portfolios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idthemes` (`themes_id`),
  ADD KEY `idetudiant` (`etudiant_id`);

--
-- Index pour la table `#__folia_professeurs`
--
ALTER TABLE `#__folia_professeurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `#__folia_professeurs_classes`
--
ALTER TABLE `#__folia_professeurs_classes`
  ADD PRIMARY KEY (`professeurs_id`,`classes_id`),
  ADD KEY `fk_professeurs_classes_classes` (`classes_id`);
  
--
-- Index pour la table `#__folia_themes`
--
ALTER TABLE `#__folia_themes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idlib` (`lib_id`);

--
-- Index pour la table `#__folia_tuteurs`
--
ALTER TABLE `#__folia_tuteurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `#__folia_tuteurs_etudiants`
--
ALTER TABLE `#__folia_tuteurs_etudiants`
  ADD PRIMARY KEY (`tuteurs_id`,`etudiants_id`),
  ADD KEY `fk_tuteurs_etudiants_etudiants` (`etudiants_id`);

--
-- Index pour la table `#__folia_utilisateurs`
--
ALTER TABLE `#__folia_utilisateurs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_utilisateurs_groupes_partages` (`groupes_partages_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `#__folia_activites`
--
ALTER TABLE `#__folia_activites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT pour la table `#__folia_bibliotheques`
--
ALTER TABLE `#__folia_bibliotheques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `#__folia_blocs`
--
ALTER TABLE `#__folia_blocs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `#__folia_blocs_documents`
--
ALTER TABLE `#__folia_blocs_documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `#__folia_classes`
--
ALTER TABLE `#__folia_classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `#__folia_commentaires`
--
ALTER TABLE `#__folia_commentaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `#__folia_documents`
--
ALTER TABLE `#__folia_documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `#__folia_etudiants`
--
ALTER TABLE `#__folia_etudiants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `#__folia_groupes`
--
ALTER TABLE `#__folia_groupes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `#__folia_groupes_partages`
--
ALTER TABLE `#__folia_groupes_partages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `#__folia_pages`
--
ALTER TABLE `#__folia_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `#__folia_portfolios`
--
ALTER TABLE `#__folia_portfolios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `#__folia_professeurs`
--
ALTER TABLE `#__folia_professeurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `#__folia_referentiels`
--
ALTER TABLE `#__folia_referentiels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `#__folia_themes`
--
ALTER TABLE `#__folia_themes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `#__folia_tuteurs`
--
ALTER TABLE `#__folia_tuteurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `#__folia_utilisateurs`
--
ALTER TABLE `#__folia_utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `#__folia_activites`
--
ALTER TABLE `#__folia_activites`
  ADD CONSTRAINT `fk_activites_referentiels` FOREIGN KEY (`referentiels_id`) REFERENCES `#__folia_referentiels` (`id`);

--
-- Contraintes pour la table `#__folia_bibliotheques`
--
ALTER TABLE `#__folia_bibliotheques`
  ADD CONSTRAINT `fk_bibliotheques_etudiant` FOREIGN KEY (`etudiant_id`) REFERENCES `#__folia_etudiants` (`id`);

--
-- Contraintes pour la table `#__folia_blocs`
--
ALTER TABLE `#__folia_blocs`
  ADD CONSTRAINT `fk_blocs_activites` FOREIGN KEY (`activite_id`) REFERENCES `#__folia_activites` (`id`),
  ADD CONSTRAINT `fk_blocs_page` FOREIGN KEY (`page_id`) REFERENCES `#__folia_pages` (`id`);

--
-- Contraintes pour la table `#__folia_blocs_documents`
--
ALTER TABLE `#__folia_blocs_documents`
  ADD CONSTRAINT `fk_blocdoc_bloc` FOREIGN KEY (`blocs_id`) REFERENCES `#__folia_blocs` (`id`);

--
-- Contraintes pour la table `#__folia_commentaires`
--
ALTER TABLE `#__folia_commentaires`
  ADD CONSTRAINT `fk_commentaires_auteurs_profs` FOREIGN KEY (`professeurs_id`) REFERENCES `#__folia_professeurs` (`id`),
  ADD CONSTRAINT `fk_commentaires_auteurs_tuteurs` FOREIGN KEY (`tuteurs_id`) REFERENCES `#__folia_tuteurs` (`id`),
  ADD CONSTRAINT `fk_commentaires_portfolios` FOREIGN KEY (`portfolios_id`) REFERENCES `#__folia_portfolios` (`id`);

--
-- Contraintes pour la table `#__folia_documents`
--
ALTER TABLE `#__folia_documents`
  ADD CONSTRAINT `fk_doc_blocdoc` FOREIGN KEY (`blocs_documents_id`) REFERENCES `#__folia_blocs_documents` (`id`);

--
-- Contraintes pour la table `#__folia_etudiants`
--
ALTER TABLE `#__folia_etudiants`
  ADD CONSTRAINT `fk_etudiants_classes` FOREIGN KEY (`classes_id`) REFERENCES `#__folia_classes` (`id`);

--
-- Contraintes pour la table `#__folia_groupes_partages`
--
ALTER TABLE `#__folia_groupes_partages`
  ADD CONSTRAINT `fk_groupes_partages_groupes` FOREIGN KEY (`groupes_id`) REFERENCES `#__folia_groupes` (`id`);

--
-- Contraintes pour la table `#__folia_portfolios`
--
ALTER TABLE `#__folia_portfolios`
  ADD CONSTRAINT `fk_portfolios_etudiant` FOREIGN KEY (`etudiant_id`) REFERENCES `#__folia_etudiants` (`id`),
  ADD CONSTRAINT `fk_portfolios_themes` FOREIGN KEY (`themes_id`) REFERENCES `#__folia_themes` (`id`);

--
-- Contraintes pour la table `#__folia_professeurs_classes`
--
ALTER TABLE `#__folia_professeurs_classes`
  ADD CONSTRAINT `fk_professeurs_classes_classes` FOREIGN KEY (`classes_id`) REFERENCES `#__folia_classes` (`id`),
  ADD CONSTRAINT `fk_professeurs_classes_professeurs` FOREIGN KEY (`professeurs_id`) REFERENCES `#__folia_professeurs` (`id`);

--
-- Contraintes pour la table `#__folia_referentiels`
--
ALTER TABLE `#__folia_referentiels`
  ADD CONSTRAINT `fk_referentiels_classes` FOREIGN KEY (`classes_id`) REFERENCES `#__folia_classes` (`id`);

--
-- Contraintes pour la table `#__folia_themes`
--
ALTER TABLE `#__folia_themes`
  ADD CONSTRAINT `fk_themes_bibliotheques` FOREIGN KEY (`lib_id`) REFERENCES `#__folia_bibliotheques` (`id`);

--
-- Contraintes pour la table `#__folia_tuteurs_etudiants`
--
ALTER TABLE `#__folia_tuteurs_etudiants`
  ADD CONSTRAINT `fk_tuteurs_etudiants_etudiants` FOREIGN KEY (`etudiants_id`) REFERENCES `#__folia_etudiants` (`id`),
  ADD CONSTRAINT `fk_tuteurs_etudiants_tuteurs` FOREIGN KEY (`tuteurs_id`) REFERENCES `#__folia_tuteurs` (`id`);

--
-- Contraintes pour la table `#__folia_utilisateurs`
--
ALTER TABLE `#__folia_utilisateurs`
  ADD CONSTRAINT `fk_utilisateurs_groupes_partages` FOREIGN KEY (`groupes_partages_id`) REFERENCES `#__folia_groupes_partages` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
