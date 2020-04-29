<?php
defined('_JEXEC') or die('Restricted access');

JHtml::_('behavior.framework'); 				// javascript Joomla object for grid.sort !

$user = JFactory::getUser();               		// gets current user object
$isFolia = ((bool)array_intersect(array('12', '13', '14', '15'), $user->groups));		// sets flag when user group is '2' that is 'Enregistré' 
?>

<?php if (!$isFolia) : ?>
	<?php echo JError::raiseWarning( 100, JText::_('COM_FOLIA_RESTRICTED_ACCESS') ); ?>
<?php else : ?>

	<h2><?php echo JText::_('COM_FOLIA_OPTIONS')." : ".JText::_('COM_FOLIA_PORTFOLIOS')." - "; ?>
		<a href="<?php echo JRoute::_('index.php?option=com_folia&view=portfolios'); ?>">
			<?php echo JText::_('COM_FOLIA_PORTFOLIOS'); ?>
		</a>
	</h2>

	<?php echo $this->loadTemplate('items'); ?>

	<?php echo $this->pagination->getListFooter(); ?>

<?php endif; ?>
