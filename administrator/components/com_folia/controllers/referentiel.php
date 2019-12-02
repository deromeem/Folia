<?php
defined('_JEXEC') or die('Restricted access');
 
class FoliaControllerReferentiel extends JControllerForm
{
		function display($cachable = false, $urlparams = false) 
        {
                $input = JFactory::getApplication()->input;
                $input->set('view', $input->getCmd('view', 'Referentiel'));
 
                parent::display($cachable, $urlparams);
        }
}