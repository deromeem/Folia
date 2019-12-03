<?php
defined('_JEXEC') or die('Restricted access');
 
class FoliaControllerDocument extends JControllerForm
{
		function display($cachable = false, $urlparams = false) 
        {
                $input = JFactory::getApplication()->input;
                $input->set('view', $input->getCmd('view', 'Document'));
 
                parent::display($cachable, $urlparams);
        }
}