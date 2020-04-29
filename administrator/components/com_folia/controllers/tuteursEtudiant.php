<?php
defined('_JEXEC') or die('Restricted access');

class FoliaControllerTuteursEtudiant extends JControllerForm
{
		function display($cachable = false, $urlparams = false)
        {
                $input = JFactory::getApplication()->input;
                $input->set('view', $input->getCmd('view', 'TuteursEtudiant'));

                parent::display($cachable, $urlparams);
        }
}
