<?php
defined('_JEXEC') or die('Restricted access');
 
class FoliaControllerTheme extends JControllerForm
{
	function display($cachable = false, $urlparams = false) 
	{
		$input = JFactory::getApplication()->input;
		$input->set('view', $input->getCmd('view', 'themes'));

		parent::display($cachable, $urlparams);
	}
}
