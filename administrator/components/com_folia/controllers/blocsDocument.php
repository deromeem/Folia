<?php
defined('_JEXEC') or die('Restricted access');
 
class FoliaControllerBlocsDocument extends JControllerForm
{
		function display($cachable = false, $urlparams = false) 
        {
                $input = JFactory::getApplication()->input;
                $input->set('view', $input->getCmd('view', 'BlocsDocument'));
 
                parent::display($cachable, $urlparams);
        }
}