<?php
defined('_JEXEC') or die('Restricted access');
 
class FoliaControllerTuteur extends JControllerForm
{
		function display($cachable = false, $urlparams = false) 
        {
                $input = JFactory::getApplication()->input;
                $input->set('view', $input->getCmd('view', 'Tuteur'));
 
                parent::display($cachable, $urlparams);
        }
}