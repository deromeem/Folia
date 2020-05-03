<?php
defined('_JEXEC') or die('Restricted access');

class FoliaModelMPortfolio extends JModelItem
{
	protected $_item = null;
	protected $_context = 'com_folia.mportfolio';

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
			$query->select('p.id,p.titre as titrep ,p.texte, p.etudiants_id ,p.themes_id,p.published, p.hits, p.modified');
			$query->from('#__folia_portfolios AS p');


			//joint la table utilisateurs
			$query->select('t.titre as theme')->join('LEFT', '#__folia_themes AS t ON p.themes_id=t.id');
			//joint la table utilisateur
			// $query->select('u.nom, u.prenom')->join('LEFT', '#__folia_utilisateurs AS u ON u.email=e.email');

			$query->where('p.id = ' . (int) $pk);
			$db->setQuery($query);
			$data = $db->loadObject();
			$this->_item[$pk] = $data;
		}
  		return $this->_item[$pk];
	}
		public function getMpages($x)
	{
		// Initialise l'id
		// $pk = (!empty($pk)) ? $pk : (int) $this->getState($this->_context.'.id');

		// Si pas de données chargées pour cet id
		// if (!isset($this->_item[$pk])) {
		$db = $this->getDbo();
		$query = $db->getQuery(true);
		$query->select('pg.id, pg.titre, pg.texte, pg.portfolios_id, pg.created');
		$query->from('#__folia_pages AS pg');
		$query->select('pf.titre portfolio')->join('LEFT', '#__folia_portfolios pf ON pg.portfolios_id = pf.id');
		$query->where('pg.portfolios_id = '.$x);

		//$query->where('c.id = ' . (int) $pk);
		$db->setQuery($query);
		$data = $db->loadObjectList();
		$this->_mpages = $data;
		// }
  		return $this->_mpages;
	}
}
