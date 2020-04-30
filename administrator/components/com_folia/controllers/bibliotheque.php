<?php
defined('_JEXEC') or die('Restricted access');
 
class FoliaControllerBibliotheque extends JControllerForm
{
	function display($cachable = false, $urlparams = false) 
	{
		$input = JFactory::getApplication()->input;
		$input->set('view', $input->getCmd('view', 'bibliotheque'));

		parent::display($cachable, $urlparams);
	}
}
