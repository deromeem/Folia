<?php
defined('_JEXEC') or die('Restricted access');

class FoliaControllerMpage extends JControllerForm
{
		function display($cachable = false, $urlparams = false)
        {
                $input = JFactory::getApplication()->input;
                $input->set('view', $input->getCmd('view', 'Mpage'));

                parent::display($cachable, $urlparams);
        }
}
