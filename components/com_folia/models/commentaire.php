<?php
defined('_JEXEC') or die('Restricted access');
 
class FoliaModelCommentaire extends JModelItem
{
	protected $_item = null;
	protected $_context = 'com_folia.commentaire';

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
			$query->select('com.id, com.texte, com.utilisateurs_id, com.portfolios_id, com.created');
			$query->from('#__folia_commentaires com');

			// joint la table civilites
			$query->select('CONCAT(u.nom, " ", u.prenom) utilisateur')->join('LEFT', '#__folia_utilisateurs u ON u.id = com.utilisateurs_id');

			// joint la table typescontacts
			$query->select('pf.libelle portfolio')->join('LEFT', '#__folia_portfolios pf ON pf.id = com.portfolios_id');	
					
			$query->where('com.id = ' . (int) $pk);
			$db->setQuery($query);
			$data = $db->loadObject();
			$this->_item[$pk] = $data;
		}
  		return $this->_item[$pk];
	}
}
