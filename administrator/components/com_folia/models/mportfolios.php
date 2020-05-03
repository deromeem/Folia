<?php
defined('_JEXEC') or die('Restricted access');

class FoliaModelMPortfolios extends JModelList
{
	public function __construct($config = array())
	{
		// précise les colonnes activant le tri
		if (empty($config['filter_fields']))
		{
			$config['filter_fields'] = array(
				'id', 'p.id',
				'titre', 'p.titre',
				'texte', 'p.texte',
				'etudiant_id', 'p.etudiants_id',
				'themes_id', 'p.themes_id',
				'alias', 'p.alias',
				'published', 'p.published',
				'hits', 'p.hits',
				'modified', 'p.modified'
			);
		}
		parent::__construct($config);
	}

	protected function populateState($ordering = null, $direction = null)
	{
		// récupère les informations de la session utilisateur nécessaires au paramétrage de l'écran
		$search = $this->getUserStateFromRequest($this->context.'.filter.search', 'filter_search');
		$this->setState('filter.search', $search);

		// parent::populateState('modified', 'desc');
		parent::populateState('p.id', 'ASC');
	}

	protected function getListQuery()
	{
		// construit la requête d'affichage de la liste
		$query = $this->_db->getQuery(true);
		$query->select('p.id, p.titre, p.texte, p.themes_id, p.alias, p.published, p.hits, p.modified');
		$query->from('#__folia_portfolios p');

		// joint la table étudiant
		$query->join('LEFT', '#__folia_etudiants AS e ON e.id = p.etudiants_id');

		// joint la table utilisateur
		$query->select('CONCAT(u.nom," ", u.prenom) AS etudiant')->join('LEFT', '#__folia_utilisateurs AS u ON u.email = e.email');

		// filtre de recherche rapide textuelle
		$search = $this->getState('filter.search');
		if (!empty($search)) {
			// recherche prefixée par 'id:'
			if (stripos($search, 'id:') === 0) {
				$query->where('p.id = '.(int) substr($search, 3));
			}
			else {
				// recherche textuelle classique (sans préfixe)
				$search = $this->_db->Quote('%'.$this->_db->escape($search, true).'%');
				// Compile les clauses de recherche
				$searches	= array();
				$searches[]	= 'p.titre LIKE '.$search;
				$searches[]	= 'p.etudiant LIKE '.$search;
				$searches[]	= 'p.themes_id LIKE '.$search;
				// Ajoute les clauses à la requête
				$query->where('('.implode(' OR ', $searches).')');
			}
		}

		// tri des colonnes
		$orderCol = $this->state->get('list.ordering', 'p.titre');
		$orderDirn = $this->state->get('list.direction', 'ASC');
		$query->order($this->_db->escape($orderCol.' '.$orderDirn));

		// echo nl2br(str_replace('#__','folia_',$query));			// TEST/DEBUG
		return $query;
	}
}
