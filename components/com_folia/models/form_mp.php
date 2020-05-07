<?php
defined('_JEXEC') or die;

// use Joomla\Registry\Registry;

// Base ce modèle sur celui du backend.
require_once JPATH_COMPONENT_ADMINISTRATOR.'/models/mportfolio.php';

class FoliaModelForm_mp extends FoliaModelMPortfolio
{
	protected $_context = 'mportfolio';

	protected function populateState()
	{
 		$app = JFactory::getApplication();

		// Charge l'état depuis l'URL
		$pk = $app->input->getInt('id');
		$this->setState('mportfolio.id', $pk);
		$pketu = $app->input->getInt('etudiants_id');
		$this->setState('mportfolio.etudiants_id', $pketu);

		$this->setState($this->_context.'id', $pk);
		$this->setState($this->_context.'etudiants_id', $pketu);

		$return = $app->input->get('return', null, 'base64');
		$this->setState('return_page', base64_decode($return));

		$this->setState('layout', $app->input->getString('layout'));
	}

	public function getItem($itemId = null)
	{
		$itemId = (int) (!empty($itemId)) ? $itemId : $this->getState('mportfolio.id');
		 echo "Frontend itemId=".$itemId;   // TEST/DEBUG

		// Obtient une instance de la ligne
		$table = $this->getTable();
		// $table->etudiants_id = getState('mportfolio.etudiants_id');

		// Charge la ligne, si possible
		$return = $table->load($itemId);

		// Test une éventuelle erreur sur l'objet table
		if ($return === false && $table->getError())
		{
			$this->setError($table->getError());

			return false;
		}

		$properties = $table->getProperties(1);
		$value = JArrayHelper::toObject($properties, 'JObject');

		return $value;
	}
}
