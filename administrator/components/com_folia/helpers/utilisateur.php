<?php
defined('_JEXEC') or die;

class UtilisateurHelper extends JHelperContent
{
	public static function addSubmenu($vName)
	{
		JHtmlSidebar::addEntry(
			JText::_('Utilisateurs'),
			'index.php?option=com_folia&view=utilisateurs',
			$vName == 'utilisateurs'
		);JHtmlSidebar::addEntry(
			JText::_('Etudiants'),
			'index.php?option=com_folia&view=etudiants',
			$vName == 'etudiants'
		);JHtmlSidebar::addEntry(
			JText::_('Professeurs'),
			'index.php?option=com_folia&view=professeurs',
			$vName == 'professeurs'
		);JHtmlSidebar::addEntry(
			JText::_('Classes'),
			'index.php?option=com_folia&view=classes',
			$vName == 'classes'
		);
	}
}
