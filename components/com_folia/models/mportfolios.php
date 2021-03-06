<?php
defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.modellist');

class FoliaModelMPortfolios extends JModelList
{
	public function __construct($config = array())
	{
		// pr�cise les colonnes activant le tri
		if (empty($config['filter_fields']))
		{
			$config['filter_fields'] = array(
				'id', 'p.id',
				'titrep', 'p.titre',
				'theme', 't.titre',
				'texte', 'p.texte',
				'etudiants_id', 'p.etudiants_id',
				'themes_id', 'p.themes_id',
				'created','p.created',
				'published', 'p.published',
				'hits', 'p.hits',
				'modified', 'p.modified'
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

		parent::populateState('titrep', 'ASC');
	}

	protected function _getListQuery()
	{
		// construit la requ�te d'affichage de la liste
		$query	= $this->_db->getQuery(true);
    $query->select('p.id,p.titre as titrep ,p.texte, p.etudiants_id ,p.themes_id,p.published,p.created, p.hits, p.modified');
    $query->from('#__folia_portfolios AS p');


		//joint la table utilisateurs
		$query->select('t.titre as theme')->join('LEFT', '#__folia_themes AS t ON p.themes_id=t.id');
    //
		// // joint la table classes
		// $query->select('c.libelle')->join('LEFT', '#__folia_classes AS c ON c.id=e.classes_id');


		$user = JFactory::getUser();               		// gets current user objecte
		$isEtudiant = ((bool)array_intersect(array('12'), $user->groups));
		// $isEtud_avance = ((bool)array_intersect(array('15'), $user->groups));

    //checar esto rafhael nmms////////////////////////////////////////////////////////////////////////////////

		if($isEtudiant){
			$query->join('LEFT', '#__folia_etudiants AS e ON p.etudiants_id=e.id ');
			$query->join('LEFT', '#__folia_utilisateurs AS u ON e.email=u.email');
			$query->where('e.email = "'.$user->email.'"');
		}
		// else if($isEtud_avance){
		// 	$query->join('LEFT', '#__folia_tuteurs_etudiants AS te ON te.etudiants_id=e.id ');
		// 	$query->join('LEFT', '#__folia_tuteurs AS t ON te.tuteurs_id=t.id');
		// 	$query->where('t.email = "'.$user->email.'"');
		// }

		// filtre de recherche rapide textuelle
		$search = $this->getState('filter.search');
		if (!empty($search)) {
			// recherche prefix�e par 'id:'
			if (stripos($search, 'id:') === 0) {
				$query->where('p.id = '.(int) substr($search, 3));
			}
			else {
				// recherche textuelle classique (sans pr�fixe)
				$search = $this->_db->Quote('%'.$this->_db->escape($search, true).'%');
				// Compile les clauses de recherche
				$searches	= array();
				$searches[]	= 'p.titre LIKE '.$search;
				// $searches[]	= 'u.prenom LIKE '.$search;
				// $searches[]	= 'c.libelle LIKE '.$search;
				// $searches[]	= 'e.nom LIKE '.$search;
				// Ajoute les clauses � la requ�te
				$query->where('('.implode(' OR ', $searches).')');
			}
		}

		// filtre les �l�ments publi�s
		$query->where('p.published=1');

		// tri des colonnes
		$orderCol = $this->getState('list.ordering', 'p.titre');
		$orderDirn = $this->getState('list.direction', 'ASC');
		$query->order($this->_db->escape($orderCol.' '.$orderDirn));

		 // echo nl2br(str_replace('#__','folia_',$query));			// TEST/DEBUG
		return $query;
	}
	public function getIdtable(){
		$user = JFactory::getUser();
		$db = $this->getDbo();
		$query = $db->getQuery(true);
		$query->select('e.id');
		$query->from('#__folia_etudiants AS e');
		$query->where('e.email = "'.$user->email.'"');

		$db->setQuery($query);
		$data = $db->loadObjectList();

		$this->_idtable = $data;
		// }
		return $this->_idtable;
	}
}
