<?php
defined('_JEXEC') or die('Restricted access');
 
class FoliaControllerUtilisateurs extends JControllerAdmin
{
	// surcharge pour gérer la suppression d'utilisateurs par le modèle adéquat
	public function getModel($name = 'Utilisateur', $prefix = 'FoliaModel') 
	{
		// récupère le modèle de détail ($name au sigulier) pour la suppression assistée d'un (des) enregistrement(s)
		$model = parent::getModel($name, $prefix, array('ignore_request' => true));
		return $model;
	}
}
