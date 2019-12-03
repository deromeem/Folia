<?php
defined('_JEXEC') or die('Restricted access');
 
class FoliaControllerBloc extends JControllerForm
{
		function display($cachable = false, $urlparams = false) 
        {
                $input = JFactory::getApplication()->input;
                $input->set('view', $input->getCmd('view', 'Bloc'));
 
                parent::display($cachable, $urlparams);
        }
}