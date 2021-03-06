<?php
defined('_JEXEC') or die('Restricted access');
 
jimport('joomla.application.component.modellist');
 
class FoliaModelEtudiants extends JModelList
{
	public function __construct($config = array())
	{
		// pr�cise les colonnes activant le tri
		if (empty($config['filter_fields']))
		{
			$config['filter_fields'] = array(
				'id', 'c.id',
				'email', 'c.email',
				'published', 'c.published',
				'hits', 'c.hits',
				'modified', 'c.modified'
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
		// construit la requ�te d'affichage de la liste
		$query	= $this->_db->getQuery(true);
		$query->select('e.id, e.classes_id, e.email, e.published, e.hits, e.modified');
		$query->from('#__folia_etudiants e');

		//joint la table utilisateurs
		$query->select('u.nom, u.prenom')->join('LEFT', '#__folia_utilisateurs AS u ON u.email=e.email');	

		// joint la table classes
		$query->select('c.libelle')->join('LEFT', '#__folia_classes AS c ON c.id=e.classes_id');


		$user = JFactory::getUser();               		// gets current user objecte
		$isProfesseur = ((bool)array_intersect(array('14'), $user->groups));
		$isTuteur = ((bool)array_intersect(array('15'), $user->groups));

		if($isProfesseur){
			$query->join('LEFT', '#__folia_professeurs_classes AS pc ON pc.classes_id=c.id ');
			$query->join('LEFT', '#__folia_professeurs AS p ON pc.professeurs_id=p.id');
			$query->where('p.email = "'.$user->email.'"');
		}else if($isTuteur){
			$query->join('LEFT', '#__folia_tuteurs_etudiants AS te ON te.etudiants_id=e.id ');
			$query->join('LEFT', '#__folia_tuteurs AS t ON te.tuteurs_id=t.id');
			$query->where('t.email = "'.$user->email.'"');
		}
		
		// filtre de recherche rapide textuelle
		$search = $this->getState('filter.search');
		if (!empty($search)) {
			// recherche prefix�e par 'id:'
			if (stripos($search, 'id:') === 0) {
				$query->where('e.id = '.(int) substr($search, 3));
			}
			else {
				// recherche textuelle classique (sans pr�fixe)
				$search = $this->_db->Quote('%'.$this->_db->escape($search, true).'%');
				// Compile les clauses de recherche
				$searches	= array();
				$searches[]	= 'u.nom LIKE '.$search;
				$searches[]	= 'u.prenom LIKE '.$search;
				$searches[]	= 'c.libelle LIKE '.$search;
				// $searches[]	= 'e.nom LIKE '.$search;
				// Ajoute les clauses � la requ�te
				$query->where('('.implode(' OR ', $searches).')');
			}
		}
		
		// filtre les �l�ments publi�s
		$query->where('c.published=1');
		
		// tri des colonnes
		$orderCol = $this->getState('list.ordering', 'u.nom');
		$orderDirn = $this->getState('list.direction', 'ASC');
		$query->order($this->_db->escape($orderCol.' '.$orderDirn));

		 //echo nl2br(str_replace('#__','folia_',$query));			// TEST/DEBUG
		return $query;
	}
}
