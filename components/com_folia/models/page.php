<?php
defined('_JEXEC') or die('Restricted access');
 
class FoliaModelPage extends JModelItem
{
	protected $_item = null;
	protected $_context = 'com_folia.page';

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
			$query->select('pg.id, pg.titre, pg.texte, pg.portfolios_id, pg.created');
			$query->from('#__folia_pages AS pg');
			$query->select('pf.titre portfolio')->join('LEFT', '#__folia_portfolios pf ON pg.portfolios_id = pf.id');
			$query->where('pg.id = ' . (int) $pk);
			$db->setQuery($query);
			$data = $db->loadObject();
			$this->_item[$pk] = $data;
		}
  		return $this->_item[$pk];
	}
	public function getBlocs($x)
	{
		// Initialise l'id
		// $pk = (!empty($pk)) ? $pk : (int) $this->getState($this->_context.'.id');

		// Si pas de données chargées pour cet id
		// if (!isset($this->_item[$pk])) {
		$db = $this->getDbo();
		$query = $db->getQuery(true);
		$query->select('b.id, b.titre, b.texte, b.pages_id, b.created');
		$query->from('#__folia_blocs AS b');
		$query->select('a.nom activites_nom, a.description activites_description')->join('LEFT', '#__folia_activites a ON b.activites_id = a.id');
		$query->select('pg.titre pages_titre')->join('LEFT', '#__folia_pages pg ON b.pages_id = pg.id');
		$query->where('b.pages_id = '.$x);
				
		//$query->where('c.id = ' . (int) $pk);
		$db->setQuery($query);
		$data = $db->loadObjectList();
		$this->_pages = $data;
		// }
  		return $this->_pages;
	}
	public function getReturn($x)
	{
		// Initialise l'id
		// $pk = (!empty($pk)) ? $pk : (int) $this->getState($this->_context.'.id');

		// Si pas de données chargées pour cet id
		// if (!isset($this->_item[$pk])) {
		$db = $this->getDbo();
		$query = $db->getQuery(true);
		$query->select('pg.portfolios_id');
		$query->from('#__folia_pages AS pg');
		// $query->select('b.id, b.titre, b.texte, b.pages_id, b.created');
		// $query->from('#__folia_blocs AS b');
		// $query->select('a.nom activites_nom, a.description activites_description')->join('LEFT', '#__folia_activites a ON b.activites_id = a.id');
		// $query->select('pg.titre pages_titre')->join('LEFT', '#__folia_pages pg ON b.pages_id = pg.id');
		$query->where('pg.id = '.$x);
				
		//$query->where('c.id = ' . (int) $pk);
		$db->setQuery($query);
		$data = $db->loadObject();
		$this->_return = $data;
		// }
  		return $this->_return;
	}
}
