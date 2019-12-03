<?php
defined('_JEXEC') or die('Restricted access');
 
class FoliaControllerBlocs_document extends JControllerForm
{
		function display($cachable = false, $urlparams = false) 
        {
                $input = JFactory::getApplication()->input;
                $input->set('view', $input->getCmd('view', 'Blocs_document'));
 
                parent::display($cachable, $urlparams);
        }
}