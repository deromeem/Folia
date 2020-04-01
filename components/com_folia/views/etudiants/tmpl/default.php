<?php
defined('_JEXEC') or die('Restricted access');

JHtml::_('behavior.framework'); 				// javascript Joomla object for grid.sort !

$user = JFactory::getUser();               		// gets current user object
$isEtudiant = (in_array('12', $user->groups));		// sets flag when user group is '12' that is 'FOLIA Etudiant 
?>

<?php if (!$isEtudiant) : ?>
	<?php echo JError::raiseWarning( 100, JText::_('COM_FOLIA_RESTRICTED_ACCESS') ); ?>
<?php else : ?>

	<h2><?php echo JText::_('COM_FOLIA_OPTIONS')." : ".JText::_('COM_FOLIA_ETUDIANTS')." - "; ?>
		<a href="<?php echo JRoute::_('index.php?option=com_folia&view=etudiants'); ?>">
			<?php echo JText::_('COM_FOLIA_ETUDIANTS'); ?>
		</a>
	</h2>

	<?php echo $this->loadTemplate('items'); ?>

	<?php echo $this->pagination->getListFooter(); ?>

<?php endif; ?>
