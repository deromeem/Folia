<?php
defined('_JEXEC') or die('Restricted access');

$user = JFactory::getUser();               		// gets current user object
$isFolia = (in_array('14', $user->groups));		// sets flag when user group is '14' that is 'MRH Folia Professeurs, Folia Tuteurs
?>

<?php if (!$isFolia) : ?>
	<?php echo JError::raiseWarning( 100, JText::_('COM_FOLIA_RESTRICTED_ACCESS') ); ?>
<?php else : ?>
	<div class="form-inline form-inline-header">
		<div class="btn-group pull-left">
			<h2><?php echo JText::_('COM_FOLIA_ETUDIANT'); ?></h2>
		</div>
		<div class="btn-group pull-right">
			<a href="<?php echo JRoute::_('index.php?option=com_folia&view=etudiants'); ?>" class="btn" role="button">
				<span class="icon-cancel"></span></a>
		</div>	
		<!-- <div class="btn-group pull-right">
			<a href="<?php// echo JRoute::_('index.php?option=com_folia&view=form_e&layout=edit&id='.$this->item->id); ?>" class="btn" role="button"><span class="icon-edit"></span></a>
		</div>	 -->
	</div>
	<div>
		<table class="table">
			<tbody>
				<tr>
					<td width="20%" class="nowrap right">
						<span class="label"><?php echo JText::_('COM_FOLIA_ETUDIANTS_NOM'); ?></span>
					</td>
					<td width="80%">
						<h4><?php echo $this->item->nom ?></h4>
					</td>
				</tr>
				<tr>
					<td width="20%" class="nowrap right">
						<span class="label"><?php echo JText::_('COM_FOLIA_ETUDIANTS_PRENOM'); ?></span>
					</td>
					<td width="80%">
						<?php echo $this->item->prenom ?>
					</td>
				</tr>
				<tr>
					<td width="20%" class="nowrap right">
						<span class="label"><?php echo JText::_('COM_FOLIA_ETUDIANTS_EMAIL'); ?></span>
					</td>
					<td width="80%">
						<?php echo $this->item->email ?>
					</td>
				</tr>
				<tr>
					<td width="20%" class="nowrap right">
						<span class="label"><?php echo JText::_('COM_FOLIA_ETUDIANTS_CLASSE'); ?></span>
					</td>
					<td width="80%">
						<?php echo $this->item->libelle ?>
					</td>
				</tr>
				<!-- <tr>
					<td width="20%" class="nowrap right">
						<span class="label"><?php// echo JText::_('COM_ANNUAIRE_ETUDIANTS_ENTREPRISE'); ?></span>
					</td>
					<td width="80%">
						<a href="<?php //echo JRoute::_('index.php?option=com_folia&view=entreprise&id='.(int) $this->item->entreprises_id); ?>"><?php echo $this->item->entreprise ?></a>
					</td>
				</tr> -->
				<!-- <tr>
					<td width="20%" class="nowrap right">
						<span class="label"><?php// echo JText::_('COM_FOLIA_COMMENT'); ?></span>
					</td>
					<td width="80%">
						<?php //echo $this->item->commentaire ?>
					</td>
				</tr> -->
			</tbody>
		</table>
	</div>
<?php endif; ?>
