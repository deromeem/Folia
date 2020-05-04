<?php
defined('_JEXEC') or die('Restricted access');

class FoliaControllerMbloc extends JControllerForm
{
		function display($cachable = false, $urlparams = false)
        {
                $input = JFactory::getApplication()->input;
                $input->set('view', $input->getCmd('view', 'Mbloc'));

                parent::display($cachable, $urlparams);
        }
}
