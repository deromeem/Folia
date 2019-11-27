--
-- Structure de la table `#__folia_utilisateurs`
--
CREATE TABLE IF NOT EXISTS `#__folia_utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `prenom` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `#__folia_utilisateurs`
--
INSERT INTO `#__folia_utilisateurs` (`id`, `nom`, `prenom`,`email`) VALUES
(1, '-', '', '');