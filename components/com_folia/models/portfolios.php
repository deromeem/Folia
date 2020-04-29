<?php
defined('_JEXEC') or die('Restricted access');
 
jimport('joomla.application.component.modellist');
 
class FoliaModelPortfolios extends JModelList
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
				'utilisateur', 'CONCAT(u.nom, " ", u.prenom)',
				'theme', 't.titre',
				'created', 'p.created'
			);
		}
		parent::__construct($config);
	}

	protected function populateState($ordering = null, $direction = null)
	{
		$app = JFactory::getApplication();

		// informations de pagination de la liste
		$limit = $app->getUserStateFromRequest('global.list.limit', 'limit', $app->getCfg('list_limit'), 'uint');
		$this->setState('list.limit', $limit);

		$limitstart = $app->input->get('limitstart', 0, 'uint');
		$this->setState('list.start', $limitstart);

		// informations du tri de la liste
		$orderCol = $app->input->get('filter_order', $ordering);
		$this->setState('list.ordering', $orderCol);

		$listOrder = $app->input->get('filter_order_Dir', $direction);
		$this->setState('list.direction', $listOrder); 

		$search = $this->getUserStateFromRequest($this->context.'.filter.search', 'filter_search');
		$this->setState('filter.search', $search);

		parent::populateState('nom', 'ASC');
	}

	protected function _getListQuery()
	{
		// construit la requête d'affichage de la liste
		$query	= $this->_db->getQuery(true);
		$query->select('p.id, p.titre, p.texte, p.etudiants_id, p.themes_id, p.created');
		$query->from('#__folia_portfolio AS p');

		// joint la table civilites
		$query->select('e.email AS email')->join('LEFT', '#__folia_etudiants AS e ON e.id=p.etudiants_id');

		// joint la table typescontacts
		$query->select('CONCAT(u.nom, " ", u.prenom) AS utilisateur')->join('LEFT', '#__folia_utilisateurs AS u ON u.email=e.email');

		// joint la table entreprises
		$query->select('t.titre AS titre')->join('LEFT', '#__folia_themes AS t ON t.id=p.themes_id');		
		
		// filtre de recherche rapide textuelle
		$search = $this->getState('filter.search');
		if (!empty($search)) {
			// recherche prefixée par 'id:'
			if (stripos($search, 'id:') === 0) {
				$query->where('c.id = '.(int) substr($search, 3));
			}
			else {
				// recherche textuelle classique (sans préfixe)
				$search = $this->_db->Quote('%'.$this->_db->escape($search, true).'%');
				// Compile les clauses de recherche
				$searches	= array();
				$searches[]	= 'u.nom LIKE '.$search;
				$searches[]	= 'u.prenom LIKE '.$search;
				$searches[]	= 'CONCAT(u.nom, " ", u.prenom) LIKE '.$search;
				$searches[]	= 'p.titre LIKE '.$search;
				// Ajoute les clauses à la requête
				$query->where('('.implode(' OR ', $searches).')');
			}
		}
		
		// filtre les éléments publiés
		$query->where('c.published=1');
		
		// tri des colonnes
		$orderCol = $this->getState('list.ordering', 'u.nom');
		$orderDirn = $this->getState('list.direction', 'ASC');
		$query->order($this->_db->escape($orderCol.' '.$orderDirn));

		// echo nl2br(str_replace('#__','egs_',$query));			// TEST/DEBUG
		return $query;
	}
}
