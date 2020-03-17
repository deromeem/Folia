<?php
defined('_JEXEC') or die('Restricted access');

JHtml::_('behavior.framework'); 				// javascript Joomla object for grid.sort !

$user = JFactory::getUser();               		// gets current user object
$isAdmin = (in_array('12', $user->groups));		// sets flag when user group is '10' that is 'MRH Administrateur 
?>

<?php if (!$isAdmin) : ?>
	<?php echo JError::raiseWarning( 100, JText::_('COM_ANNUAIRE_RESTRICTED_ACCESS') ); ?>
<?php else : ?>

	<h2><?php echo JText::_('COM_FOLIA')." : ".JText::_('COM_FOLIA_CLASSES')." - "; ?>
		<a href="<?php echo JRoute::_('index.php?option=com_folia&view=maclasse'); ?>">
			<?php echo JText::_('COM_FOLIA_MACLASSE'); ?>
		</a>
	</h2>

	<!--Message à l'attention des autres développeurs -->
	<div id="system-message-container">
		<div id="system-message">
			<div class="alert alert-error">
				<h4 class="alert-heading">// Développement cours</h4>
				<div class="alert-message">// Impossible de récupérer l'id de la classe de l'étudiant et d'afficher ses camarades. Tous les étudiants sont alors affichés.</div>
			</div>
		</div>
	</div>

	<?php echo $this->loadTemplate('items'); ?>

	<?php echo $this->pagination->getListFooter(); ?>

<?php endif; ?>
