<?php
defined('_JEXEC') or die('Restricted access');
 
class FoliaControllerPage extends JControllerForm
{
		function display($cachable = false, $urlparams = false) 
        {
                $input = JFactory::getApplication()->input;
                $input->set('view', $input->getCmd('view', 'Page'));
 
                parent::display($cachable, $urlparams);
        }
}