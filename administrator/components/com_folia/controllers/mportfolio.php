<?php
defined('_JEXEC') or die('Restricted access');

class FoliaControllerMPortfolio extends JControllerForm
{
	function display($cachable = false, $urlparams = false)
	{
		$input = JFactory::getApplication()->input;
		$input->set('view', $input->getCmd('view', 'mportfolios'));

		parent::display($cachable, $urlparams);
	}
}
