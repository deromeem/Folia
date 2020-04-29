<?php
defined('_JEXEC') or die('Restricted access');
 
class FoliaModelPortfolio extends JModelItem
{
	protected $_item = null;
	protected $_context = 'com_folia.portfolio';

	protected function populateState()
	{
		$app = JFactory::getApplication('site');
		
		// Charge et mémorise l'état (state) de l'id depuis le contexte
		$pk = $app->input->getInt('id');
		$this->setState($this->_context.'.id', $pk);
		// $this->setState('contact.id', $pk);
	}

	public function getItem($pk = null)
	{
		// Initialise l'id
		$pk = (!empty($pk)) ? $pk : (int) $this->getState($this->_context.'.id');

		// Si pas de données chargées pour cet id
		if (!isset($this->_item[$pk])) {
			$db = $this->getDbo();
			$query = $db->getQuery(true);
			$query->select('p.id, p.titre, p.texte, p.etudiants_id, p.themes_id, p.created');
			$query->from('#__folia_portfolio AS p');

			// joint la table civilites
			$query->select('e.email AS email')->join('LEFT', '#__folia_etudiants AS e ON e.id=p.etudiants_id');

			// joint la table typescontacts
			$query->select('CONCAT(u.nom, " ", u.prenom) AS utilisateur')->join('LEFT', '#__folia_utilisateurs AS u ON u.email=e.email');

			// joint la table entreprises
			$query->select('t.titre AS theme')->join('LEFT', '#__folia_themes AS t ON t.id=p.themes_id');		
					
			//$query->where('c.id = ' . (int) $pk);
			$db->setQuery($query);
			$data = $db->loadObject();
			$this->_item[$pk] = $data;
		}
  		return $this->_item[$pk];
	}
}
