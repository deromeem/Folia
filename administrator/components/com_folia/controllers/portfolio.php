<?php
defined('_JEXEC') or die('Restricted access');
 
class FoliaControllerPortfolio extends JControllerForm
{
	function display($cachable = false, $urlparams = false) 
	{
		$input = JFactory::getApplication()->input;
		$input->set('view', $input->getCmd('view', 'portfolios'));

		parent::display($cachable, $urlparams);
	}
}
