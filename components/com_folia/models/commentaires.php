<?php
defined('_JEXEC') or die('Restricted access');
 
jimport('joomla.application.component.modellist');
 
class FoliaModelCommentaires extends JModelList
{
	public function __construct($config = array())
	{
		// précise les colonnes activant le tri
		if (empty($config['filter_fields']))
		{
			$config['filter_fields'] = array(
				'id', 'c.id',
				'texte', 'c.texte',
				'utilisateur', 'CONCAT(u.nom, " ", u.prenom)',
				'portfolio', 'pf.titre',
				'created', 'c.created'
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

		parent::populateState('texte', 'ASC');
	}

	protected function _getListQuery()
	{
		// construit la requête d'affichage de la liste
		$query	= $this->_db->getQuery(true);
		$query->select('com.id, com.texte, com.utilisateurs_id, com.portfolios_id, com.created');
		$query->from('#__folia_commentaires com');

		// joint la table civilites
		$query->select('CONCAT(u.nom, " ", u.prenom) utilisateur')->join('LEFT', '#__folia_utilisateurs u ON u.id = com.utilisateurs_id');

		// joint la table typescontacts
		$query->select('pf.titre portfolio')->join('LEFT', '#__folia_portfolios pf ON pf.id = com.portfolios_id');

		$user = JFactory::getUser();               		// gets current user object
		$isEtudiant = ((bool)array_intersect(array('12', '13'), $user->groups));
		$isProfesseur = ((bool)array_intersect(array('14'), $user->groups));
		$isTuteur = ((bool)array_intersect(array('15'), $user->groups));
		if($isEtudiant)
		{
			$query->where('
				pf.id IN (
				    SELECT pf.id
				    FROM folia_folia_portfolios pf
				    LEFT JOIN folia_folia_etudiants etu ON etu.id = pf.etudiants_id
				    LEFT JOIN folia_folia_utilisateurs u ON u.email = etu.email
				    LEFT JOIN folia_users users ON users.email = u.email
				    WHERE users.id = '.$user->id.'
				)
			');
		}
		else if($isProfesseur)
		{
			$query->where('
				pf.id IN (
    				SELECT pf.id
    				FROM folia_folia_portfolios pf
					LEFT JOIN folia_folia_etudiants etu ON etu.id = pf.etudiants_id
					WHERE etu.classes_id IN (
        				SELECT prof_cla.classes_id
        				FROM folia_folia_professeurs_classes prof_cla
        				LEFT JOIN folia_folia_professeurs prof ON prof.id = prof_cla.professeurs_id
        				LEFT JOIN folia_folia_utilisateurs u ON u.email = prof.email
        				LEFT JOIN folia_users users ON users.email = u.email
        				WHERE users.id = '.$user->id.'
    				)
				)
			');
		}
		else if($isTuteur)
		{
			$query->where('
				pf.id IN (
	    			SELECT pf.id
    				FROM folia_folia_portfolios pf
					LEFT JOIN folia_folia_etudiants etu ON etu.id = pf.etudiants_id
					WHERE etu.id IN (
				        SELECT tut_etu.etudiants_id
				    	FROM folia_folia_tuteurs_etudiants tut_etu
				    	LEFT JOIN folia_folia_tuteurs tut ON tut.id = tut_etu.tuteurs_id
				    	LEFT JOIN folia_folia_utilisateurs u ON u.email = tut.email
				    	LEFT JOIN folia_users users ON users.email = u.email
				    	WHERE users.id = '.$user->id.'
				    )
				)
			');
		}

		// filtre de recherche rapide textuelle
		$search = $this->getState('filter.search');
		if (!empty($search)) {
			// recherche prefixée par 'id:'
			if (stripos($search, 'id:') === 0) {
				$query->where('com.id = '.(int) substr($search, 3));
			}
			else {
				// recherche textuelle classique (sans préfixe)
				$search = $this->_db->Quote('%'.$this->_db->escape($search, true).'%');
				// Compile les clauses de recherche
				$searches	= array();
				$searches[]	= 'com.texte LIKE '.$search;
				$searches[]	= 'utilisateur LIKE '.$search;
				$searches[]	= 'portfolio LIKE '.$search;
				// Ajoute les clauses à la requête
				$query->where('('.implode(' OR ', $searches).')');
			}
		}
		
		// filtre les éléments publiés
		$query->where('com.published=1');
		
		// tri des colonnes
		$orderCol = $this->getState('list.ordering', 'texte');
		$orderDirn = $this->getState('list.direction', 'ASC');
		$query->order($this->_db->escape($orderCol.' '.$orderDirn));

		// echo nl2br(str_replace('#__','egs_',$query));			// TEST/DEBUG
		return $query;
	}
}
