<?php
defined('_JEXEC') or die('Restricted access');
 
class FoliaControllerEtudiant extends JControllerForm
{
		function display($cachable = false, $urlparams = false) 
        {
                $input = JFactory::getApplication()->input;
                $input->set('view', $input->getCmd('view', 'Etudiant'));
 
                parent::display($cachable, $urlparams);
        }
}