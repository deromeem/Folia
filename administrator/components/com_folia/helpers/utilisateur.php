<?php
defined('_JEXEC') or die;

class UtilisateurHelper extends JHelperContent
{
	public static function addSubmenu($vName)
	{
		JHtmlSidebar::addEntry(
			JText::_('Activités'),
			'index.php?option=com_folia&view=activites',
			$vName == 'activites'
		);
		JHtmlSidebar::addEntry(
			JText::_('Blocs'),
			'index.php?option=com_folia&view=blocs',
			$vName == 'blocs'
		);
		JHtmlSidebar::addEntry(
			JText::_('Thèmes'),
			'index.php?option=com_folia&view=Themes',
			$vName == 'Themes'
		);
		JHtmlSidebar::addEntry(
			JText::_('Bibliothèques de thèmes'),
			'index.php?option=com_folia&view=bibliotheques',
			$vName == 'bibliotheques'
		);
		JHtmlSidebar::addEntry(
			JText::_('Blocs documents'),
			'index.php?option=com_folia&view=blocsDocuments',
			$vName == 'blocsDocuments'
		);
		JHtmlSidebar::addEntry(
			JText::_('Classes'),
			'index.php?option=com_folia&view=classes',
			$vName == 'classes'
		);
		JHtmlSidebar::addEntry(
			JText::_('Commentaires'),
			'index.php?option=com_folia&view=commentaires',
			$vName == 'commentaires'
		);
		JHtmlSidebar::addEntry(
			JText::_('Documents'),
			'index.php?option=com_folia&view=Documents',
			$vName == 'documents'
		);
		JHtmlSidebar::addEntry(
			JText::_('Etudiants'),
			'index.php?option=com_folia&view=etudiants',
			$vName == 'etudiants'
		);
		JHtmlSidebar::addEntry(
			JText::_('Groupes'),
			'index.php?option=com_folia&view=groupes',
			$vName == 'groupes'
		);
		JHtmlSidebar::addEntry(
			JText::_('Groupes de partages'),
			'index.php?option=com_folia&view=groupesPartages',
			$vName == 'groupesPartages'
		);
		JHtmlSidebar::addEntry(
			JText::_('Pages'),
			'index.php?option=com_folia&view=pages',
			$vName == 'pages'
		);
		JHtmlSidebar::addEntry(
			JText::_('Portfolios'),
			'index.php?option=com_folia&view=portfolios',
			$vName == 'portfolios'
		);
		JHtmlSidebar::addEntry(
			JText::_('Professeurs'),
			'index.php?option=com_folia&view=professeurs',
			$vName == 'professeurs'
		);
		JHtmlSidebar::addEntry(
			JText::_('Professeurs classes'),
			'index.php?option=com_folia&view=professeursClasses',
			$vName == 'professeursClasses'
		);
		JHtmlSidebar::addEntry(
			JText::_('Référentiels'),
			'index.php?option=com_folia&view=referentiels',
			$vName == 'referentiels'
		);
		JHtmlSidebar::addEntry(
			JText::_('Thèmes'),
			'index.php?option=com_folia&view=themes',
			$vName == 'themes'
		);
		JHtmlSidebar::addEntry(
			JText::_('Tuteurs'),
			'index.php?option=com_folia&view=tuteurs',
			$vName == 'tuteurs'
		);
		JHtmlSidebar::addEntry(
			JText::_('Tuteurs etudiants'),
			'index.php?option=com_folia&view=tuteursEtudiants',
			$vName == 'tuteursEtudiants'
		);
		JHtmlSidebar::addEntry(
			JText::_('Utilisateurs'),
			'index.php?option=com_folia&view=utilisateurs',
			$vName == 'utilisateurs'
		);
	}
}
