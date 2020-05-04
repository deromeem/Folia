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
		$pk = (!empty($pk)) ? $pk : (int) $this->getState($this->_context.'.id');
		if (!isset($this->_item[$pk])) {
			$db = $this->getDbo();
			$query = $db->getQuery(true);
			$query->select('p.id, p.titre, p.texte, p.etudiants_id, p.themes_id, p.created');
			$query->from('#__folia_portfolios AS p');
			$query->select('e.email AS email')->join('LEFT', '#__folia_etudiants AS e ON e.id=p.etudiants_id');
			$query->select('CONCAT(u.nom, " ", u.prenom) AS utilisateur')->join('LEFT', '#__folia_utilisateurs AS u ON u.email=e.email');
			$query->select('t.titre AS theme')->join('LEFT', '#__folia_themes AS t ON t.id=p.themes_id');
			$query->where('p.id = ' . (int) $pk);
			$db->setQuery($query);
			$data = $db->loadObject();
			$this->_item[$pk] = $data;
		}
  		return $this->_item[$pk];
	}
	public function getPages($portfolios_id)
	{
		$db = $this->getDbo();
		$query = $db->getQuery(true);
		$query->select('pg.id, pg.titre, pg.texte, pg.portfolios_id, pg.created');
		$query->from('#__folia_pages AS pg');
		$query->select('pf.titre portfolio')->join('LEFT', '#__folia_portfolios pf ON pg.portfolios_id = pf.id');
		$query->where('pg.portfolios_id = '.$portfolios_id);
		$db->setQuery($query);
		$data = $db->loadObjectList();
		$this->_pages = $data;
  		return $this->_pages;
	}
}
