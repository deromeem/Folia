<?php
defined('_JEXEC') or die;

class FoliaControllerMpage extends JControllerForm
{
	// précise la vue (formulaire de saisie) à afficher
	protected $view_item = 'form_page';

	// précise la variable d'édition URL
	protected $urlVar = 'a.id';
	protected $id;

	public function add()
	{
		if (!parent::add())
		{
			// redirige à la page de retour
			$this->setRedirect($this->getReturnPage());
		}
	}

	public function edit($key = null, $urlVar = 'a_id')
	{
		$result = parent::edit($key, $urlVar);
		if (!$result)
		{
			$this->setRedirect($this->getReturnPage());
		}
		return $result;
	}

	public function save($key = null, $urlVar = 'a_id')
	{
		$result = parent::save($key, $urlVar);
		if ($result)
		{
			$this->setRedirect($this->getReturnPage());
		}
		return $result;
	}

	public function cancel($key = 'a_id')
	{
		$id = $key;
		parent::cancel($key);
		$this->setRedirect($this->getReturnPage());
	}

	protected function getReturnPage()
	{
		// $return = $this->input->get('return', null, 'base64');

		// if (empty($return) || !JUri::isInternal(base64_decode($return)))
		// {
			// return JUri::base();
		// }
		// else
		// {
			// return base64_decode($return);
		// }
// 		$app    = JFactory::getApplication();
			// $model = parent::getModel($name = 'form_page', $prefix = '', $config = array('ignore_request' => true));
			// $id=$model->getItem($itemId = null);
			// $voir = parent::getRedirectToItemAppend(integer $recordId = null, string $urlVar = 'a_id');

		// return JURI::base().'/index.php?option=com_folia&view=mportfolio&id='.$id;
		return JURI::base().'/index.php?option=com_folia&view=mportfolios';

	}

	public function getModel($name = 'form_page', $prefix = '', $config = array('ignore_request' => true))
	{
		$model = parent::getModel($name, $prefix, $config);
		return $model;
	}
}
