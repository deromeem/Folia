<?php
defined('_JEXEC') or die('Restricted access');

class FoliaModelTuteursEtudiants extends JModelList
{
	public function __construct($config = array())
	{
		// précise les colonnes activant le tri
		if (empty($config['filter_fields']))
		{
			$config['filter_fields'] = array(
				'id', 'te.id',
				'tuteurs_id', 'te.tuteurs_id',
				'nomTuteur','ut.nom',
				'prenomTuteur','ut.prenom',
				'etudiants_id', 'te.etudiants_id',
				'nomEtudiant','ue.nom',
				'prenomEtudiant','ue.prenom',
				'alias', 'te.alias',
				'published', 'te.published',
				'hits', 'te.hits',
				'modified', 'te.modified'
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

		$query->select('te.id,te.etudiants_id,ue.nom as nomTuteur,ue.prenom as prenomTuteur, te.tuteurs_id, ut.nom as nomEtudiant, ut.prenom as prenomEtudiant, te.alias ,te.published, te.hits, te.modified');
		$query->from('`#__folia_tuteurs_etudiants` te');
		// joint
		$query->join('LEFT', '#__folia_tuteurs t  ON te.tuteurs_id=t.id');
		$query->join('LEFT', '#__folia_etudiants e  ON te.etudiants_id=e.id');
		$query->join('LEFT', '#__folia_utilisateurs ue  ON e.email=ue.email');
		$query->join('LEFT', '#__folia_utilisateurs ut  ON t.email=ut.email');

		// $query->select('u.nom AS nom,u.prenom AS prenom')->join('LEFT', '#__folia_utilisateurs AS u ON te.id=c.typescontacts_id');



		// $query->select('e.id')->join('LEFT', '#__folia_etudiants AS e ON te.etudiants_id=e.id');
		// $query->select('u.nom, u.prenom')->join('LEFT', '#__folia_utilisateurs AS u ON u.email=e.email');
		// $query->select('c.libelle')->join('LEFT', '#__folia_classes AS c ON c.id=e.classes_id');

		// $query->select('te.etudiants_id, u.nom, u.prenom,te.tuteurs_id, u.nom, u.prenom, te.published, te.hits, te.modified');
		// $query->from('`#__folia_tuteurs` t, `#__folia_utilisateurs` u, `#__folia_etudiants` e, `#__folia_tuteurs_etudiants` te');
		// $query->where('t.email = u.email and e.email = u.email and te.tuteurs_id = t.id and te.etudiants_id = e.id  ');

		// joint la table pays
		//$query->select('p.pays AS pays')->join('LEFT', '#__annuaire_pays AS p ON p.id=e.pays_id');

		// filtre de recherche rapide textuel
		$search = $this->getState('filter.search');
		if (!empty($search)) {
			// recherche prefixée par 'id:'
			if (stripos($search, 'id:') === 0) {
				$query->where('te.id = '.(int) substr($search, 3));
			}
			else {
				// recherche textuelle classique (sans préfixe)
				$search = $this->_db->Quote('%'.$this->_db->escape($search, true).'%');
				// Compile les clauses de recherche
				$searches	= array();
				$searches[]	= 'email LIKE '.$search;
				$searches[]	= 'societe LIKE '.$search;
				$searches[]	= 'service LIKE '.$search;
				// Ajoute les clauses à la requête
				$query->where('('.implode(' OR ', $searches).')');
			}
		}

		// filtre selon l'état du filtre 'filter_pay'
		// $pay = $this->getState('filter.pay');
		// if (is_numeric($pay)) {
		// 	$query->where('e.pays_id=' . (int) $pay);
		// }
		// filtre selon l'état du filtre 'filter_published'
		$published = $this->getState('filter.published');
		if (is_numeric($published)) {
			$query->where('te.published=' . (int) $published);
		}
		elseif ($published === '') {
			// si aucune sélection, on n'affiche que les publiés et dépubliés
			$query->where('(te.published=0 OR te.published=1)');
		}

		// tri des colonnes
		$orderCol = $this->state->get('list.ordering', 'te.tuteurs_id');
		$orderDirn = $this->state->get('list.direction', 'ASC');
		$query->order($this->_db->escape($orderCol.' '.$orderDirn));

		// echo nl2br(str_replace('#__','footregion_',$query));			// TEST/DEBUG
		return $query;
	}

	// public function getPays()
	// {
	// 	$query = $this->_db->getQuery(true);
	// 	$query->select('id, pays');
	// 	$query->from('#__annuaire_pays');
	// 	$query->where('published=1');
	// 	$query->order('pays ASC');
	// 	$this->_db->setQuery($query);
	// 	$pays = $this->_db->loadObjectList();
	// 	return $pays;
	// }
}
