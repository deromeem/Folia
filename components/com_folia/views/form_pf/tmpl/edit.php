<?php
defined('_JEXEC') or die('Restricted access');

JHtml::_('behavior.keepalive');
JHtml::_('behavior.calendar');
JHtml::_('behavior.formvalidation');
JHtml::_('formbehavior.chosen', 'select');

$user = JFactory::getUser();               		// gets current user object
$isFolia = ((bool)array_intersect(array('12', '13', '14', '15'), $user->groups));		// sets flag when user group is '2' that is 'Enregistré' 
?>

<?php if (!$isFolia) : ?>
	<?php echo JError::raiseWarning( 100, JText::_('COM_FOLIA_RESTRICTED_ACCESS') ); ?>
<?php else : ?>

	<script type="text/javascript">
		// fonction javascript pour gérer les actions sur les boutons
		Joomla.submitbutton = function(task)
		{
			// si bouton 'Annuler' ou si les champs du formulaire sont valides alors on envoie le formulaire
			if (task == 'portfolio.cancel' || document.formvalidator.isValid(document.getElementById('adminForm')))
			{
				Joomla.submitform(task);
			}
		}
	</script>

	<div class="edit item-page">
		<form action="<?php echo JRoute::_('index.php?option=com_folia&a_id=' . (int) $this->item->id); ?>" method="post" name="adminForm" id="adminForm" class="form-validate form-vertical">
			
			<div class="form-inline form-inline-header">
				<div class="btn-group pull-left">
					<?php $isNew = ($this->item->id == 0); ?>
					<h2><?php echo JText::_('COM_FOLIA_PORTFOLIO')." ".($isNew ? JText::_('COM_FOLIA_ADD_PAR'): JText::_('COM_FOLIA_MODIF_PAR')); ?></h2>
				</div>
				<div class="btn-toolbar">
					<div class="btn-group pull-right">
						<button type="button" class="btn" onclick="Joomla.submitbutton('portfolio.cancel')">
							<span class="icon-cancel"></span>
						</button>
					</div>
					<div class="btn-group pull-right">
						<button type="button" class="btn btn-primary validate" onclick="Joomla.submitbutton('portfolio.save')">
							<span class="icon-ok"></span>
						</button>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>

			<fieldset>
				<ul class="nav nav-tabs">
					<li><a href="#portfolio" data-toggle="tab"><?php echo JText::_('COM_FOLIA_PORTFOLIO'); ?></a></li>
					<li><a href="#avance" data-toggle="tab"><?php echo JText::_('COM_FOLIA_ADVANCED'); ?></a></li>
					<li><a href="#commentaire" data-toggle="tab"><?php echo JText::_('COM_FOLIA_COMMENT'); ?></a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="portfolio">
						<table class="table">
							<tbody>
								<tr>
									<td width="20%" class="nowrap right">
										<div class="control-label"><?php echo $this->form->getLabel('titre'); ?></div>
									</td>
									<td width="80%">
										<div class="controls"><?php echo $this->form->getInput('titre'); ?></div>
									</td>
								</tr>
								<tr>
									<td width="20%" class="nowrap right">
										<div class="control-label"><?php echo $this->form->getLabel('texte'); ?></div>
									</td>
									<td width="80%">
										<div class="controls"><?php echo $this->form->getInput('texte'); ?></div>
									</td>
								</tr>
								<tr>
									<td width="20%" class="nowrap right">
										<div class="control-label"><?php echo $this->form->getLabel('utilisateur'); ?></div>
									</td>
									<td width="80%">
										<div class="controls"><?php echo $this->form->getInput('utilisateur'); ?></div>
									</td>
								</tr>
								<tr>
									<td width="20%" class="nowrap right">
										<div class="control-label"><?php echo $this->form->getLabel('theme'); ?></div>
									</td>
									<td width="80%">
										<div class="controls"><?php echo $this->form->getInput('theme'); ?></div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					
					<div class="tab-pane" id="avance">
						<table class="table">
							<tbody>
								<tr>
									<td width="20%" class="nowrap right">
										<div class="control-label"><?php echo $this->form->getLabel('created'); ?></div>
									</td>
									<td width="80%">
										<div class="controls"><?php echo $this->form->getInput('created'); ?></div>
									</td>
								</tr>
							</tbody>
						</table>				

						<input type="hidden" name="task" value="" />
						<input type="hidden" name="return" value="<?php echo $this->return_page; ?>" />
					</div>
					<div class="tab-pane" id="commentaire">
						<?php echo $this->form->getControlGroup('commentaire'); ?>
					</div>
					</div>
				<?php echo JHtml::_('form.token'); ?>
			</fieldset>
		</form>
	</div>

<?php endif; ?>
