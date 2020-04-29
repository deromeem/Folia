<?php
defined('_JEXEC') or die('Restricted access');

$user = JFactory::getUser();               		// gets current user object
$isFolia = ((bool)array_intersect(array('12', '13', '14', '15'), $user->groups));
?>

<?php if (!$isFolia) : ?>
	<?php echo JError::raiseWarning( 100, JText::_('COM_FOLIA_RESTRICTED_ACCESS') ); ?>
<?php else : ?>
	<div class="form-inline form-inline-header">
		<div class="btn-group pull-left">
			<h2><?php echo JText::_('COM_FOLIA_PORTFOLIO'); ?></h2>
		</div>
		<div class="btn-group pull-right">
			<a href="<?php echo JRoute::_('index.php?option=com_folia&view=portfolios'); ?>" class="btn" role="button">
				<span class="icon-cancel"></span></a>
		</div>	
		<div class="btn-group pull-right">
			<a href="<?php echo JRoute::_('index.php?option=com_folia&view=form_p&layout=edit&id='.$this->item->id); ?>" class="btn" role="button"><span class="icon-edit"></span></a>
		</div>	
	</div>
	<div>
		<table class="table">
			<tbody>
				<tr>
					<td width="20%" class="nowrap right">
						<span class="label"><?php echo JText::_('COM_FOLIA_PORTFOLIOS_TITRE'); ?></span>
					</td>
					<td width="80%">
						<h4><?php echo $this->item->titre ?></h4>
					</td>
				</tr>
				<tr>
					<td width="20%" class="nowrap right">
						<span class="label"><?php echo JText::_('COM_FOLIA_PORTFOLIOS_TEXTE'); ?></span>
					</td>
					<td width="80%">
						<?php echo $this->item->texte ?>
					</td>
				</tr>
				<tr>
					<td width="20%" class="nowrap right">
						<span class="label"><?php echo JText::_('COM_FOLIA_PORTFOLIOS_UTILISATEUR'); ?></span>
					</td>
					<td width="80%">
						<?php echo $this->item->utilisateur ?>
					</td>
				</tr>
				<tr>
					<td width="20%" class="nowrap right">
						<span class="label"><?php echo JText::_('COM_FOLIA_PORTFOLIOS_THEME'); ?></span>
					</td>
					<td width="80%">
						<?php echo $this->item->theme ?>
					</td>
				</tr>
				<tr>
					<td width="20%" class="nowrap right">
						<span class="label"><?php echo JText::_('COM_FOLIA_PORTFOLIOS_DATE'); ?></span>
					</td>
					<td width="80%">
						<?php echo $this->item->created ?>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
<?php endif; ?>
