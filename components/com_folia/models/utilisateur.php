<?php
defined('_JEXEC') or die('Restricted access');

class FoliaModelUtilisateur extends JModelItem
{
	protected $_item = null;
	protected $_context = 'com_folia.utilisateur';

	protected function populateState()
	{
		$app = JFactory::getApplication('site');

		// Charge et mémorise l'état (state) de l'id depuis le contexte
		$pk = $app->input->getInt('id');
		$this->setState($this->_context.'.id', $pk);
		// $this->setState('utilisateur.id', $pk);
	}

	public function getItem($pk = null)
	{
		// Initialise l'id
		// $pk = (!empty($pk)) ? $pk : (int) $this->getState($this->_context.'.id');
		$user = JFactory::getUser();               		// gets current user object
		$id = $user->id;
		// Si pas de données chargées pour cet id
		if (!isset($this->_item[$pk])) {
			$db = $this->getDbo();
			$query = $db->getQuery(true);
			$query->select('u.id, u.nom, u.prenom, uf.email, u.hits, u.modified');
			$query->from('#__folia_utilisateurs AS u');
			$query->select('uf.email AS email')->join('LEFT', '#__users AS uf ON uf.email = u.email');
			$query->where('uf.id = ' . (int) $id);
			$db->setQuery($query);
			$data = $db->loadObject();
			$this->_item[$pk] = $data;
		}
		// echo nl2br(str_replace('#__','folia_',$query));			// TEST/DEBUG
  		return $this->_item[$pk];
	}
}
