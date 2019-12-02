<?php
defined('_JEXEC') or die('Restricted access');

class FoliaModelUtilisateur extends JModelAdmin
{
	protected $_compo = 'com_utilisateur';
	protected $_context = 'utilisateur';
	public $typeAlias = 'com_folia.utilisateur';
	
	// Surcharges des m�thodes de la classe m�re pour :
	
	// 1) d�finir la table de soutien � utiliser
	public function getTable($type = 'Utilisateur', $prefix = 'FoliaTable', $config = array()) 
	{
		return JTable::getInstance($type, $prefix, $config);
	}

	// 2) pr�ciser le chemin du contexte � utiliser pour charger le fichier XML d�crivant les champs de saisie
	public function getForm($data = array(), $loadData = true) 
	{
		$form = $this->loadForm($this->typeAlias, $this->_context,
			array('control'=>'jform', 'load_data'=>$loadData));
		if (empty($form)) 
		{
			return false;
		}
		
		$jinput = JFactory::getApplication()->input;

		// le frontend appelle ce mod�le et utilise a_id (initialis� � 0 by par d�faut) pour �viter la collision avec id
		if ($jinput->get('u_id'))
		{
			$id = $jinput->get('u_id', 0);
		}
		// le backend utilise id (initialis� � 0 by par d�faut)
		else
		{
			$id = $jinput->get('id', 0);
		}		
		// echo "Backend : id=".$id;   // TEST/DEBUG
		
		return $form;
	}

	// 3) contr�ler qu'un tableau de donn�es n'est pas d�j� initialis� dans la session
	protected function loadFormData() 
	{
		$data = JFactory::getApplication()->getUserState($this->_compo.'.edit.'.$this->_context.'.data', array());
		if (empty($data)) 
		{
			$data = $this->getItem();
		}
		return $data;
	}

	// 4) pr�parer les donn�es avant la sauvegarde en base de donn�es par l'objet JTable
	protected function prepareTable($table)
	{
		$table->alias = JApplication::stringURLSafe($table->alias);
		if (empty($table->alias))
		{
			$table->alias = JApplication::stringURLSafe($table->nom);
		}
	}
}
