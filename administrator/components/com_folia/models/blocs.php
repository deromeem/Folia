<?php
defined('_JEXEC') or die('Restricted access');

class FoliaModelBlocs extends JModelList
{
	public function __construct($config = array())
	{
		// précise les colonnes activant le tri
		if (empty($config['filter_fields']))
		{
			$config['filter_fields'] = array(
				'id', 'b.id',
				'page_id', 'b.pages_id',
				'activite_id', 'b.activites_id',
				'titre', 'b.titre',
				'texte', 'b.texte',
				'alias', 'b.alias',
				'published', 'b.published',
				'hits', 'b.hits',
				'modified', 'b.modified'
			);
		}
		parent::__construct($config);
	}

	protected function populateState($ordering = null, $direction = null)
	{
		// récupère les informations de la session utilisateur nécessaires au paramétrage de l'écran
		$search = $this->getUserStateFromRequest($this->context.'.filter.search', 'filter_search');
		$this->setState('filter.search', $search);

		// $pay = $this->getUserStateFromRequest($this->context.'.filter.pay', 'filter_pay', '');
		// $this->setState('filter.pay', $pay);

		$published = $this->getUserStateFromRequest($this->context.'.filter.published', 'filter_published', '');
		$this->setState('filter.published', $published);

		parent::populateState('modified', 'desc');
	}
	
	protected function getListQuery()
	{
		// construit la requête d'affichage de la liste
		$query = $this->_db->getQuery(true);
		$query->select('b.id, b.pages_id, b.activites_id, b.titre, b.texte, b.alias, b.published, b.hits, b.modified');
		$query->from('#__folia_blocs b');

		// joint la table activites
		$query->select('a.nom')->join('LEFT', '#__folia_activites AS a ON a.id=b.activites_id');

		// joint la table pages
		$query->select('p.titre AS titreP')->join('LEFT', '#__folia_pages AS p ON p.id=b.pages_id');

		// filtre de recherche rapide textuel
		$search = $this->getState('filter.search');
		if (!empty($search)) {
			// recherche prefixée par 'id:'
			if (stripos($search, 'id:') === 0) {
				$query->where('b.id = '.(int) substr($search, 3));
			}
			else {
				// recherche textuelle classique (sans préfixe)
				$search = $this->_db->Quote('%'.$this->_db->escape($search, true).'%');
				// Compile les clauses de recherche
				$searches	= array();
				$searches[]	= 'alias LIKE '.$search;
				$searches[]	= 'pages_id LIKE '.$search;
				// Ajoute les clauses à la requête
				$query->where('('.implode(' OR ', $searches).')');
			}
		}

		// filtre selon l'état du filtre 'filter_activities'
		 $nom = $this->getState('filter.nom');
		 if (is_numeric($nom)) {
		 	$query->where('b.activites_id=' . (int) $nom);
		 }
		// filtre selon l'état du filtre 'filter_published'
		$published = $this->getState('filter.published');
		if (is_numeric($published)) {
			$query->where('b.published=' . (int) $published);
		}
		elseif ($published === '') {
			// si aucune sélection, on n'affiche que les publiés et dépubliés
			$query->where('(b.published=0 OR b.published=1)');
		}

		// tri des colonnes
		$orderCol = $this->state->get('list.ordering', 'b.alias');
		$orderDirn = $this->state->get('list.direction', 'ASC');
		$query->order($this->_db->escape($orderCol.' '.$orderDirn));

		// echo nl2br(str_replace('#__','folia_',$query));			// TEST/DEBUG
		return $query;
	}

	public function getActivites()
	{
		$query = $this->_db->getQuery(true);
		$query->select('id, nom');
		$query->from('#__folia_activites');
		$query->where('published=1');
		$query->order('nom ASC');
		$this->_db->setQuery($query);
		$activities = $this->_db->loadObjectList();
		return $activities;
	}	
}
