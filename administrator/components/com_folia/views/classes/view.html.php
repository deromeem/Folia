<?php
defined('_JEXEC') or die('Restricted access');
 
class FoliaViewClasses extends JViewLegacy
{
	function display($tpl = null) 
	{
		// récupère la liste des items à afficher
		$this->items = $this->get('Items');
		// récupère l'objet jPagination correspondant à la liste
		$this->pagination = $this->get('Pagination');

		// récupère l'état des information de tri des colonnes
		$this->state = $this->get('State');
		$this->listOrder = $this->escape($this->state->get('list.ordering'));
		$this->listDirn	= $this->escape($this->state->get('list.direction'));			

		// récupère les paramêtres du fichier de configuration config.xml
		$params = JComponentHelper::getParams('com_folia');
		$this->paramDescShow = $params->get('jfolia_show_desc', 0);
		$this->paramDescSize = $params->get('jfolia_size_desc', 70);
		$this->paramDateFmt = $params->get('jfolia_date_fmt', "d F Y");

		// affiche les erreurs éventuellement retournées
		if (count($errors = $this->get('Errors'))) 
		{
			JError::raiseError(500, implode('<br />', $errors));
			return false;
		}

		// ajoute la toolbar contenant les boutons d'actions
		$this->addToolBar();
		// invoque la méthode addSubmenu du fichier de soutien (helper)
		utilisateurHelper::addSubmenu('Etudiants');
		// prépare et affiche la sidebar à gauche de la liste
		$this->prepareSideBar();
		$this->sidebar = JHtmlSidebar::render();

		// affiche les calques par appel de la méthode display() de la classe parente
		parent::display($tpl);
	}
 
	protected function addToolBar() 
	{
		// affiche le titre de la page
		JToolBarHelper::title(JText::_('COM_FOLIA_OPTIONS')." : ".JText::_('COM_FOLIA_CLASSES'));
		
		// affiche les boutons d'action
		JToolBarHelper::addNew('classe.add');
		JToolBarHelper::editList('classe.edit');
		JToolBarHelper::deleteList('Etes vous sur ?', 'classes.delete');		
		// JToolbarHelper::publish('classes.publish', 'JTOOLBAR_PUBLISH', true);
		// JToolbarHelper::unpublish('classes.unpublish', 'JTOOLBAR_UNPUBLISH', true);
		// JToolbarHelper::archiveList('classes.archive');
		// JToolbarHelper::checkin('classes.checkin');
		// JToolbarHelper::trash('classes.trash');
		JToolbarHelper::preferences('com_folia');
	}

	protected function prepareSideBar()
	{
		// definit l'action du formulaire sidebar
		JHtmlSidebar::setAction('index.php?option=com_folia&view=classes');
		
		// ajoute le filtre standard des statuts dans le bloc des sous-menus
		// JHtmlSidebar::addFilter( JText::_('JOPTION_SELECT_PUBLISHED'), 'filter_published',
		// 	JHtml::_('select.options', JHtml::_('jgrid.publishedOptions'),
		// 	'value', 'text', $this->state->get('filter.published'),true)
		// );
	}

 	protected function getSortFields()
	{
		// prépare l'affichage des colonnes de tri du calque
		return array(
			'c.libelle' => JText::_('COM_FOLIA_CLASSES_LIBELLE'),
			'c.id' => "Id"
		);
	}  
	
}
