<?php
defined('_JEXEC') or die('Restricted access');

class FoliaControllerTuteurEtudiant extends JControllerForm
{
		function display($cachable = false, $urlparams = false)
        {
                $input = JFactory::getApplication()->input;
                $input->set('view', $input->getCmd('view', 'TuteurEtudiant'));

                parent::display($cachable, $urlparams);
        }
}
