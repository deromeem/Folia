--
-- Structure de la table `#__folia_activites`
--

CREATE TABLE `#__folia_activites` (
  `id` int(11) NOT NULL,
  `referentiels_id` int(11) NOT NULL DEFAULT 1,
  `nom` varchar(11) NOT NULL,
  `alias` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `description` varchar(255) NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT 1,
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT 0,
  `modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT 0,
  `hits` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `#__folia_activites`
--

INSERT INTO `#__folia_activites` (`id`, `referentiels_id`, `nom`, `alias`, `description`, `published`, `created`, `created_by`, `modified`, `modified_by`, `hits`) VALUES
(1, 1, '-', '', '', 1, '2018-09-26 15:00:00', 0, '2018-09-26 15:01:00', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `#__folia_bibliotheques`
--

CREATE TABLE `#__folia_bibliotheques` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `apercu` varchar(255) NOT NULL,
  `avance` tinyint(1) NOT NULL DEFAULT 0,
  `alias` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `published` tinyint(1) NOT NULL DEFAULT 1,
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT 0,
  `modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT 0,
  `hits` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `#__folia_bibliotheques`
--

INSERT INTO `#__folia_bibliotheques` (`id`, `nom`, `apercu`, `avance`, `alias`, `published`, `created`, `created_by`, `modified`, `modified_by`, `hits`) VALUES
(1, '-', '', 0, '', 1, '2020-04-03 17:00:00', 0, '2020-04-03 17:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `#__folia_blocs`
--

CREATE TABLE `#__folia_blocs` (
  `id` int(11) NOT NULL,
  `pages_id` int(11) NOT NULL DEFAULT 1,
  `activites_id` int(11) NOT NULL DEFAULT 1,
  `texte` varchar(255) NOT NULL,
  `texteLong` longtext NOT NULL,
  `alias` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `published` tinyint(1) NOT NULL DEFAULT 1,
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT 0,
  `modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT 0,
  `hits` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `#__folia_blocs`
--

INSERT INTO `#__folia_blocs` (`id`, `pages_id`, `activites_id`, `texte`, `texteLong`, `alias`, `published`, `created`, `created_by`, `modified`, `modified_by`, `hits`) VALUES
(1, 1, 1, '', '', '', 1, '2020-04-03 17:00:00', 0, '2020-04-03 17:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `#__folia_blocs_documents`
--

CREATE TABLE `#__folia_blocs_documents` (
  `id` int(11) NOT NULL,
  `blocs_id` int(11) NOT NULL DEFAULT 1,
  `documents_id` int(11) NOT NULL DEFAULT 1,
  `alias` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `published` tinyint(1) NOT NULL DEFAULT 1,
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT 0,
  `modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT 0,
  `hits` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `#__folia_blocs_documents`
--

INSERT INTO `#__folia_blocs_documents` (`id`, `blocs_id`, `documents_id`, `alias`, `published`, `created`, `created_by`, `modified`, `modified_by`, `hits`) VALUES
(1, 1, 1, '', 1, '2020-04-03 17:00:00', 0, '2020-04-03 17:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `#__folia_classes`
--

CREATE TABLE `#__folia_classes` (
  `id` int(11) NOT NULL,
  `libelle` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `referentiels_id` int(11) NOT NULL DEFAULT 1,
  `alias` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `published` tinyint(1) NOT NULL DEFAULT 1,
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT 0,
  `modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT 0,
  `hits` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `#__folia_classes`
--

INSERT INTO `#__folia_classes` (`id`, `libelle`, `referentiels_id`, `alias`, `published`, `created`, `created_by`, `modified`, `modified_by`, `hits`) VALUES
(1, '-', 1, '', 1, '2018-09-26 15:00:00', 0, '2018-09-26 15:01:00', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `#__folia_commentaires`
--

CREATE TABLE `#__folia_commentaires` (
  `id` int(11) NOT NULL,
  `texte` text NOT NULL,
  `utilisateurs_id` int(11) NOT NULL DEFAULT 1,
  `portfolios_id` int(11) NOT NULL DEFAULT 1,
  `alias` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `published` tinyint(1) NOT NULL DEFAULT 1,
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT 0,
  `modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT 0,
  `hits` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `#__folia_commentaires`
--

INSERT INTO `#__folia_commentaires` (`id`, `texte`, `utilisateurs_id`, `portfolios_id`, `alias`, `published`, `created`, `created_by`, `modified`, `modified_by`, `hits`) VALUES
(1, '-', 1, 1, '', 1, '2020-04-03 17:00:00', 0, '2020-04-03 17:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `#__folia_documents`
--

CREATE TABLE `#__folia_documents` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `nomFichier` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `alias` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `published` tinyint(1) NOT NULL DEFAULT 1,
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT 0,
  `modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT 0,
  `hits` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `#__folia_documents`
--

INSERT INTO `#__folia_documents` (`id`, `titre`, `nomFichier`, `url`, `alias`, `published`, `created`, `created_by`, `modified`, `modified_by`, `hits`) VALUES
(1, '-', '', '', '', 1, '2020-04-03 17:00:00', 0, '2020-04-03 17:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `#__folia_etudiants`
--

CREATE TABLE `#__folia_etudiants` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `avance` tinyint(1) NOT NULL DEFAULT 0,
  `classes_id` int(11) NOT NULL DEFAULT 1,
  `alias` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `published` tinyint(1) NOT NULL DEFAULT 1,
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT 0,
  `modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT 0,
  `hits` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `#__folia_etudiants`
--

INSERT INTO `#__folia_etudiants` (`id`, `email`, `avance`, `classes_id`, `alias`, `published`, `created`, `created_by`, `modified`, `modified_by`, `hits`) VALUES
(1, '-', 0, 1, '', 1, '2018-09-26 15:00:00', 0, '2018-09-26 15:01:00', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `#__folia_groupes`
--

CREATE TABLE `#__folia_groupes` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `etudiants_id` int(11) NOT NULL DEFAULT 1,
  `alias` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `published` tinyint(1) NOT NULL DEFAULT 1,
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT 0,
  `modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT 0,
  `hits` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `#__folia_groupes`
--

INSERT INTO `#__folia_groupes` (`id`, `nom`, `etudiants_id`, `alias`, `published`, `created`, `created_by`, `modified`, `modified_by`, `hits`) VALUES
(1, '-', 1, '', 0, '2018-09-26 15:00:00', 0, '2018-09-26 15:01:00', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `#__folia_groupes_partages`
--

CREATE TABLE `#__folia_groupes_partages` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `groupes_id` int(11) NOT NULL DEFAULT 1,
  `utilisateurs_id` int(11) NOT NULL DEFAULT 1,
  `alias` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `published` tinyint(1) NOT NULL DEFAULT 1,
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT 0,
  `modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT 0,
  `hits` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `#__folia_groupes_partages`
--

INSERT INTO `#__folia_groupes_partages` (`id`, `nom`, `groupes_id`, `utilisateurs_id`, `alias`, `published`, `created`, `created_by`, `modified`, `modified_by`, `hits`) VALUES
(1, '-', 1, 1, '', 0, '2018-09-26 15:00:00', 0, '2018-09-26 15:01:00', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `#__folia_pages`
--

CREATE TABLE `#__folia_pages` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `texte` text NOT NULL,
  `portfolios_id` int(11) NOT NULL DEFAULT 1,
  `alias` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `published` tinyint(1) NOT NULL DEFAULT 1,
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT 0,
  `modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT 0,
  `hits` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `#__folia_pages`
--

INSERT INTO `#__folia_pages` (`id`, `titre`, `texte`, `portfolios_id`, `alias`, `published`, `created`, `created_by`, `modified`, `modified_by`, `hits`) VALUES
(1, '-', '', 1, '', 1, '2020-04-03 17:00:00', 0, '2020-04-03 17:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `#__folia_portfolios`
--

CREATE TABLE `#__folia_portfolios` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `texte` text NOT NULL,
  `etudiants_id` int(11) NOT NULL DEFAULT 1,
  `themes_id` int(11) NOT NULL DEFAULT 1,
  `alias` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `published` tinyint(1) NOT NULL DEFAULT 1,
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT 0,
  `modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT 0,
  `hits` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `#__folia_portfolios`
--

INSERT INTO `#__folia_portfolios` (`id`, `titre`, `texte`, `etudiants_id`, `themes_id`, `alias`, `published`, `created`, `created_by`, `modified`, `modified_by`, `hits`) VALUES
(1, '-', '', 1, 1, '', 1, '2020-04-03 17:00:00', 0, '2020-04-03 17:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `#__folia_professeurs`
--

CREATE TABLE `#__folia_professeurs` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `matiere` varchar(255) NOT NULL,
  `alias` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `published` tinyint(1) NOT NULL DEFAULT 1,
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT 0,
  `modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT 0,
  `hits` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `#__folia_professeurs`
--

INSERT INTO `#__folia_professeurs` (`id`, `email`, `matiere`, `alias`, `published`, `created`, `created_by`, `modified`, `modified_by`, `hits`) VALUES
(1, '-', '', '', 0, '2018-09-26 15:00:00', 0, '2018-09-26 15:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `#__folia_professeurs_classes`
--

CREATE TABLE `#__folia_professeurs_classes` (
  `id` int(11) NOT NULL,
  `professeurs_id` int(11) NOT NULL DEFAULT 1,
  `classes_id` int(11) NOT NULL DEFAULT 1,
  `alias` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `published` tinyint(1) NOT NULL DEFAULT 1,
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT 0,
  `modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT 0,
  `hits` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `#__folia_professeurs_classes`
--

INSERT INTO `#__folia_professeurs_classes` (`id`, `professeurs_id`, `classes_id`, `alias`, `published`, `created`, `created_by`, `modified`, `modified_by`, `hits`) VALUES
(1, 1, 1, '', 1, '2020-04-03 17:00:00', 0, '2020-04-03 17:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `#__folia_referentiels`
--

CREATE TABLE `#__folia_referentiels` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `alias` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `published` tinyint(1) NOT NULL DEFAULT 1,
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT 0,
  `modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT 0,
  `hits` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `#__folia_referentiels`
--

INSERT INTO `#__folia_referentiels` (`id`, `nom`, `description`, `alias`, `published`, `created`, `created_by`, `modified`, `modified_by`, `hits`) VALUES
(1, '-', '', '', 0, '2018-09-26 15:00:00', 0, '2018-09-26 15:01:00', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `#__folia_themes`
--

CREATE TABLE `#__folia_themes` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `bibliotheques_id` int(11) NOT NULL DEFAULT 1,
  `alias` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `published` tinyint(1) NOT NULL DEFAULT 1,
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT 0,
  `modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT 0,
  `hits` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `#__folia_themes`
--

INSERT INTO `#__folia_themes` (`id`, `titre`, `description`, `bibliotheques_id`, `alias`, `published`, `created`, `created_by`, `modified`, `modified_by`, `hits`) VALUES
(1, '-', '', 1, '', 1, '2020-04-03 17:00:00', 0, '2020-04-03 17:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `#__folia_tuteurs`
--

CREATE TABLE `#__folia_tuteurs` (
  `id` int(11) NOT NULL,
  `societe` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alias` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `published` tinyint(1) NOT NULL DEFAULT 1,
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT 0,
  `modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT 0,
  `hits` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `#__folia_tuteurs`
--

INSERT INTO `#__folia_tuteurs` (`id`, `societe`, `service`, `email`, `alias`, `published`, `created`, `created_by`, `modified`, `modified_by`, `hits`) VALUES
(1, '-', '-', '', '', 1, '2020-04-07 12:22:06', 0, '2020-04-07 12:22:06', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `#__folia_tuteurs_etudiants`
--

CREATE TABLE `#__folia_tuteurs_etudiants` (
  `id` int(11) NOT NULL,
  `tuteurs_id` int(11) NOT NULL DEFAULT 1,
  `etudiants_id` int(11) NOT NULL DEFAULT 1,
  `alias` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `published` tinyint(1) NOT NULL DEFAULT 1,
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT 0,
  `modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT 0,
  `hits` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `#__folia_tuteurs_etudiants`
--

INSERT INTO `#__folia_tuteurs_etudiants` (`id`, `tuteurs_id`, `etudiants_id`, `alias`, `published`, `created`, `created_by`, `modified`, `modified_by`, `hits`) VALUES
(1, 1, 1, '', 1, '2020-04-03 17:00:00', 0, '2020-04-03 17:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `#__folia_utilisateurs`
--

CREATE TABLE `#__folia_utilisateurs` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `prenom` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT '',
  `alias` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `published` tinyint(1) NOT NULL DEFAULT 1,
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT 0,
  `modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT 0,
  `hits` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `#__folia_utilisateurs`
--

INSERT INTO `#__folia_utilisateurs` (`id`, `nom`, `prenom`, `email`, `alias`, `published`, `created`, `created_by`, `modified`, `modified_by`, `hits`) VALUES
(1, '-', '', '', '', 0, '2018-09-26 15:00:00', 0, '2018-09-26 15:01:00', 0, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `#__folia_activites`
--
ALTER TABLE `#__folia_activites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_#__folia_activites_referentiels_id` (`referentiels_id`);

--
-- Index pour la table `#__folia_bibliotheques`
--
ALTER TABLE `#__folia_bibliotheques`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `#__folia_blocs`
--
ALTER TABLE `#__folia_blocs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_#__folia_blocs_pages_id` (`pages_id`),
  ADD KEY `fk_#__folia_blocs_activites_id` (`activites_id`);

--
-- Index pour la table `#__folia_blocs_documents`
--
ALTER TABLE `#__folia_blocs_documents`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `fk_#__folia_blocs_documents_blocs_id` (`blocs_id`),
  ADD KEY `fk_#__folia_blocs_documents_documents_id` (`documents_id`);

--
-- Index pour la table `#__folia_classes`
--
ALTER TABLE `#__folia_classes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_#__folia_classes_referentiels_id` (`referentiels_id`);

--
-- Index pour la table `#__folia_commentaires`
--
ALTER TABLE `#__folia_commentaires`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_#__folia_commentaires_utilisateurs_id` (`utilisateurs_id`),
  ADD KEY `fk_#__folia_commentaires_portfolios_id` (`portfolios_id`);

--
-- Index pour la table `#__folia_documents`
--
ALTER TABLE `#__folia_documents`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_#__folia_groupes_etudiants_id` (`etudiants_id`) USING BTREE;

--
-- Index pour la table `#__folia_groupes_partages`
--
ALTER TABLE `#__folia_groupes_partages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_#__folia_groupes_partages_groupes_id` (`groupes_id`),
  ADD KEY `fk_#__folia_groupes_partages_utilisateurs_id` (`utilisateurs_id`) USING BTREE;

--
-- Index pour la table `#__folia_pages`
--
ALTER TABLE `#__folia_pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_#__folia_pages_portfolios_id` (`portfolios_id`);

--
-- Index pour la table `#__folia_portfolios`
--
ALTER TABLE `#__folia_portfolios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_#__folia_portfolios_themes_id` (`themes_id`),
  ADD KEY `fk_#__folia_portfolios_etudiants_id` (`etudiants_id`);

--
-- Index pour la table `#__folia_professeurs`
--
ALTER TABLE `#__folia_professeurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `#__folia_professeurs_classes`
--
ALTER TABLE `#__folia_professeurs_classes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_#__folia_professeurs_classes_professeurs_id` (`professeurs_id`),
  ADD KEY `fk_#__folia_professeurs_classes_classes_id` (`classes_id`);

--
-- Index pour la table `#__folia_referentiels`
--
ALTER TABLE `#__folia_referentiels`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `#__folia_themes`
--
ALTER TABLE `#__folia_themes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_#__folia_themes_bibliotheques_id` (`bibliotheques_id`) USING BTREE;

--
-- Index pour la table `#__folia_tuteurs`
--
ALTER TABLE `#__folia_tuteurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `#__folia_tuteurs_etudiants`
--
ALTER TABLE `#__folia_tuteurs_etudiants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_#__folia_tuteurs_etudiants_etudiants_id` (`etudiants_id`),
  ADD KEY `fk_#__folia_tuteurs_etudiants_tuteurs_id` (`tuteurs_id`);

--
-- Index pour la table `#__folia_utilisateurs`
--
ALTER TABLE `#__folia_utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `#__folia_activites`
--
ALTER TABLE `#__folia_activites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `#__folia_bibliotheques`
--
ALTER TABLE `#__folia_bibliotheques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `#__folia_blocs`
--
ALTER TABLE `#__folia_blocs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `#__folia_blocs_documents`
--
ALTER TABLE `#__folia_blocs_documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `#__folia_classes`
--
ALTER TABLE `#__folia_classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `#__folia_commentaires`
--
ALTER TABLE `#__folia_commentaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `#__folia_documents`
--
ALTER TABLE `#__folia_documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `#__folia_etudiants`
--
ALTER TABLE `#__folia_etudiants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `#__folia_groupes`
--
ALTER TABLE `#__folia_groupes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `#__folia_groupes_partages`
--
ALTER TABLE `#__folia_groupes_partages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `#__folia_pages`
--
ALTER TABLE `#__folia_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `#__folia_portfolios`
--
ALTER TABLE `#__folia_portfolios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `#__folia_professeurs`
--
ALTER TABLE `#__folia_professeurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `#__folia_professeurs_classes`
--
ALTER TABLE `#__folia_professeurs_classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `#__folia_referentiels`
--
ALTER TABLE `#__folia_referentiels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `#__folia_themes`
--
ALTER TABLE `#__folia_themes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `#__folia_tuteurs`
--
ALTER TABLE `#__folia_tuteurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `#__folia_tuteurs_etudiants`
--
ALTER TABLE `#__folia_tuteurs_etudiants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `#__folia_utilisateurs`
--
ALTER TABLE `#__folia_utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `#__folia_activites`
--
ALTER TABLE `#__folia_activites`
  ADD CONSTRAINT `fk_#__folia_activites_referentiels_id` FOREIGN KEY (`referentiels_id`) REFERENCES `#__folia_referentiels` (`id`);

--
-- Contraintes pour la table `#__folia_blocs`
--
ALTER TABLE `#__folia_blocs`
  ADD CONSTRAINT `fk_#__folia_blocs_activites_id` FOREIGN KEY (`activites_id`) REFERENCES `#__folia_activites` (`id`),
  ADD CONSTRAINT `fk_#__folia_blocs_pages_id` FOREIGN KEY (`pages_id`) REFERENCES `#__folia_pages` (`id`);

--
-- Contraintes pour la table `#__folia_blocs_documents`
--
ALTER TABLE `#__folia_blocs_documents`
  ADD CONSTRAINT `fk_#__folia_blocs_documents_blocs_id` FOREIGN KEY (`blocs_id`) REFERENCES `#__folia_blocs` (`id`),
  ADD CONSTRAINT `fk_#__folia_blocs_documents_documents_id` FOREIGN KEY (`documents_id`) REFERENCES `#__folia_documents` (`id`);

--
-- Contraintes pour la table `#__folia_classes`
--
ALTER TABLE `#__folia_classes`
  ADD CONSTRAINT `fk_#__folia_classes_referentiels_id` FOREIGN KEY (`referentiels_id`) REFERENCES `#__folia_referentiels` (`id`);

--
-- Contraintes pour la table `#__folia_commentaires`
--
ALTER TABLE `#__folia_commentaires`
  ADD CONSTRAINT `fk_#__folia_commentaires_portfolios_id` FOREIGN KEY (`portfolios_id`) REFERENCES `#__folia_portfolios` (`id`),
  ADD CONSTRAINT `fk_#__folia_commentaires_utilisateurs_id` FOREIGN KEY (`utilisateurs_id`) REFERENCES `#__folia_utilisateurs` (`id`);

--
-- Contraintes pour la table `#__folia_etudiants`
--
ALTER TABLE `#__folia_etudiants`
  ADD CONSTRAINT `fk_#__folia_etudiants_classes_id` FOREIGN KEY (`classes_id`) REFERENCES `#__folia_classes` (`id`);

--
-- Contraintes pour la table `#__folia_groupes`
--
ALTER TABLE `#__folia_groupes`
  ADD CONSTRAINT `fk_#__folia_groupes_etudiants_id` FOREIGN KEY (`etudiants_id`) REFERENCES `#__folia_etudiants` (`id`);

--
-- Contraintes pour la table `#__folia_groupes_partages`
--
ALTER TABLE `#__folia_groupes_partages`
  ADD CONSTRAINT `fk_#__folia_groupes_partages_groupes_id` FOREIGN KEY (`groupes_id`) REFERENCES `#__folia_groupes` (`id`),
  ADD CONSTRAINT `fl_#__folia_groupes_partages_utilisateurs_id` FOREIGN KEY (`utilisateurs_id`) REFERENCES `#__folia_utilisateurs` (`id`);

--
-- Contraintes pour la table `#__folia_pages`
--
ALTER TABLE `#__folia_pages`
  ADD CONSTRAINT `fk_#__folia_pages_portfolios_id` FOREIGN KEY (`portfolios_id`) REFERENCES `#__folia_portfolios` (`id`);

--
-- Contraintes pour la table `#__folia_portfolios`
--
ALTER TABLE `#__folia_portfolios`
  ADD CONSTRAINT `fk_#__folia_portfolios_etudiants_id` FOREIGN KEY (`etudiants_id`) REFERENCES `#__folia_etudiants` (`id`),
  ADD CONSTRAINT `fk_#__folia_portfolios_themes_id` FOREIGN KEY (`themes_id`) REFERENCES `#__folia_themes` (`id`);

--
-- Contraintes pour la table `#__folia_professeurs_classes`
--
ALTER TABLE `#__folia_professeurs_classes`
  ADD CONSTRAINT `fk_#__folia_professeurs_classes_classes_id` FOREIGN KEY (`classes_id`) REFERENCES `#__folia_classes` (`id`),
  ADD CONSTRAINT `fk_#__folia_professeurs_classes_professeurs_id` FOREIGN KEY (`professeurs_id`) REFERENCES `#__folia_professeurs` (`id`);

--
-- Contraintes pour la table `#__folia_themes`
--
ALTER TABLE `#__folia_themes`
  ADD CONSTRAINT `fk_#__folia_themes_bibliotheques_id` FOREIGN KEY (`bibliotheques_id`) REFERENCES `#__folia_bibliotheques` (`id`);

--
-- Contraintes pour la table `#__folia_tuteurs_etudiants`
--
ALTER TABLE `#__folia_tuteurs_etudiants`
  ADD CONSTRAINT `fk_#__folia_tuteurs_etudiants_etudiants_id` FOREIGN KEY (`etudiants_id`) REFERENCES `#__folia_etudiants` (`id`),
  ADD CONSTRAINT `fk_#__folia_tuteurs_etudiants_tuteurs_id` FOREIGN KEY (`tuteurs_id`) REFERENCES `#__folia_tuteurs` (`id`);
COMMIT;
