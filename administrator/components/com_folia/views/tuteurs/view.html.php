<?php
defined('_JEXEC') or die('Restricted access');
 
class FoliaViewTuteurs extends JViewLegacy
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
		UtilisateurHelper::addSubmenu('tuteurs');
		// prépare et affuche la sidebar à gauche de la liste
		$this->prepareSideBar();
		$this->sidebar = JHtmlSidebar::render();

		// affiche les calques par appel de la méthode display() de la classe parente
		parent::display($tpl);
	}
 
	protected function addToolBar() 
	{
		// affiche le titre de la page
		JToolBarHelper::title(JText::_('COM_FOLIA_OPTIONS')." : ".JText::_('COM_FOLIA_TUTEURS'));
		
		// affiche les boutons d'action
		JToolBarHelper::addNew('tuteur.add');
		JToolBarHelper::editList('tuteur.edit');
		JToolBarHelper::deleteList('Etes vous sur ?', 'tuteurs.delete');
		JToolbarHelper::publish('tuteurs.publish', 'JTOOLBAR_PUBLISH', true);
		JToolbarHelper::unpublish('tuteurs.unpublish', 'JTOOLBAR_UNPUBLISH', true);
		JToolbarHelper::archiveList('tuteurs.archive');
		JToolbarHelper::checkin('tuteurs.checkin');
		JToolbarHelper::trash('tuteurs.trash');
		JToolbarHelper::preferences('com_folia');
	}

	protected function prepareSideBar()
	{
		// definit l'action du formulaire sidebar
		JHtmlSidebar::setAction('index.php?option=com_folia');
		
		// ajoute le filtre standard des statuts dans le bloc des sous-menus
		JHtmlSidebar::addFilter( JText::_('JOPTION_SELECT_PUBLISHED'), 'filter_published',
			JHtml::_('select.options', JHtml::_('jgrid.publishedOptions'),
			'value', 'text', $this->state->get('filter.published'),true)
		);

		// ajoute le filtre spécifique pour les pays
		// $this->pays = $this->get('Pays');
		// $options3	= array();
		// foreach ($this->pays as $pay) {
		// 	$options3[]	= JHtml::_('select.option', $pay->id,  $pay->pays);
		// }
		// $this->pay = $options3;
		// JHtmlSidebar::addFilter("- ".JText::_('COM_ANNUAIRE_SELECT_PAYS')." -", 'filter_pay',
		// 	JHtml::_('select.options', $this->pay,
		// 	'value', 'text', $this->state->get('filter.pay'))
		// );
	}

 	protected function getSortFields()
	{
		// prépare l'affichage des colonnes de tri du calque
		return array(
			't.email' => JText::_('COM_FOLIA_TUTEURS_EMAIL'),
			't.societe' => JText::_('COM_FOLIA_TUTEURS_SOCIETE'),
			't.service' => JText::_('COM_FOLIA_TUTEURS_SERVICE'),
			't.published' => JText::_('JSTATUS'),
			't.modified' => JText::_('JDATE'),
			't.id' => "Id"
		);
	}  
	
}
