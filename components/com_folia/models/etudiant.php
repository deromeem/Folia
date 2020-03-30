<?php
defined('_JEXEC') or die('Restricted access');
 
class FoliaModelEtudiant extends JModelItem
{
	protected $_item = null;
	protected $_context = 'com_folia.etudiant';

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
			$query->select('e.id, e.nom, e.prenom, e.civilites_id, e.typescontacts_id, e.entreprises_id, e.fonction, e.email, e.mobile, e.tel, e.commentaire');
			$query->from('#__folia_etudiants AS e');

			// joint la table classes
			$query->select('c.libelle')->join('LEFT', '#__folia_classes AS c ON c.id=e.classes_id');

			//joint la table utilisateur
			$query->select('u.nom, u.prenom')->join('LEFT', '#__folia_utilisateurs AS u ON u.email=e.email');	
					
			$query->where('e.id = ' . (int) $pk);
			$db->setQuery($query);
			$data = $db->loadObject();
			$this->_item[$pk] = $data;
		}
  		return $this->_item[$pk];
	}
}
