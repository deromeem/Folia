<?php
defined('_JEXEC') or die('Restricted access');
 
class FoliaControllerActivite extends JControllerForm
{
		function display($cachable = false, $urlparams = false) 
        {
                $input = JFactory::getApplication()->input;
                $input->set('view', $input->getCmd('view', 'Activite'));
 
                parent::display($cachable, $urlparams);
        }
}