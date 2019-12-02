<?php
defined('_JEXEC') or die('Restricted access');
 
class FoliaControllerGroupePartage extends JControllerForm
{
		function display($cachable = false, $urlparams = false) 
        {
                $input = JFactory::getApplication()->input;
                $input->set('view', $input->getCmd('view', 'GroupePartage'));
 
                parent::display($cachable, $urlparams);
        }
}