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
				'id', 'pf.id',
				'titre', 'pf.titre',
				'texte', 'pf.texte',
				'published', 'pf.published',
				'etudiant', 'etudiant',
				'theme', 'theme',
				'created', 'pf.created'
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
		$query	= $this->_db->getQuery(true);
		$query->select('pf.id, pf.titre, pf.texte, pf.etudiants_id, pf.themes_id, pf.created');
		$query->from('#__folia_portfolios pf');
		$query->select('etu.email AS email')->join('LEFT', '#__folia_etudiants etu ON etu.id = pf.etudiants_id');
		$query->select('CONCAT(uti.nom, " ", uti.prenom) etudiant')->join('LEFT', '#__folia_utilisateurs uti ON uti.email = etu.email');
		$query->select('th.titre theme')->join('LEFT', '#__folia_themes th ON th.id = pf.themes_id');
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
				$searches[]	= 'pf.titre LIKE '.$search;
				$searches[]	= 'etudiant LIKE '.$search;
				$searches[]	= 'theme LIKE '.$search;
				$searches[]	= 'pf.created LIKE '.$search;
				// Ajoute les clauses à la requête
				$query->where('('.implode(' OR ', $searches).')');
			}
		}
		
		// filtre les éléments publiés
		$query->where('pf.published=1');
		
		// tri des colonnes
		$orderCol = $this->getState('list.ordering', 'pf.titre');
		$orderDirn = $this->getState('list.direction', 'ASC');
		$query->order($this->_db->escape($orderCol.' '.$orderDirn));

		// echo nl2br(str_replace('#__','egs_',$query));			// TEST/DEBUG
		return $query;
	}
}
