<?php
defined('_JEXEC') or die('Restricted access');

JHtml::_('behavior.keepalive');
JHtml::_('behavior.calendar');
JHtml::_('behavior.formvalidation');
JHtml::_('formbehavior.chosen', 'select');

$user = JFactory::getUser();               		// gets current user object
$isProfesseur = (in_array('12', $user->groups));		// sets flag when user group is '12' that is 'MRH FOLIA Etudiant
$isTuteur = (in_array('12', $user->groups));
?>
<?php if (!$isProfesseur or !$isTuteur)  : ?>
	<?php echo JError::raiseWarning( 100, JText::_('COM_FOLIA_RESTRICTED_ACCESS') ); ?>
<?php else : ?>

	<script type="text/javascript">
		// fonction javascript pour gérer les actions sur les boutons
		Joomla.submitbutton = function(task)
		{
			// si bouton 'Annuler' ou si les champs du formulaire sont valides alors on envoie le formulaire
			if (task == 'mpage.cancel' || document.formvalidator.isValid(document.getElementById('adminForm')))
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
						<button type="button" class="btn" onclick="Joomla.submitbutton('mpage.cancel')">
							<span class="icon-cancel"></span>
						</button>
					</div>
					<div class="btn-group pull-right">
						<button type="button" class="btn btn-primary validate" onclick="Joomla.submitbutton('mpage.save')">
							<span class="icon-ok"></span>
						</button>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>

			<fieldset>
				<ul class="nav nav-tabs">
					<li><a href="#mpage" data-toggle="tab"><?php echo JText::_('COM_FOLIA_PORTFOLIO'); ?></a></li>
					<li><a href="#avance" data-toggle="tab"><?php echo JText::_('COM_FOLIA_ADVANCED'); ?></a></li>
					<li><a href="#commentaire" data-toggle="tab"><?php echo JText::_('COM_FOLIA_COMMENT'); ?></a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="mpage">
						<table class="table">
							<tbody>
								<tr>
									<!-- il prend le "titre" du BE -->
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
										<div class="control-label"><?php echo $this->form->getLabel('themes_id'); ?></div>
									</td>
									<td width="80%">
										<div class="controls"><?php echo $this->form->getInput('themes_id'); ?></div>
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
										<div class="control-label"><?php echo $this->form->getLabel('email'); ?></div>
									</td>
									<td width="80%">
										<div class="controls"><?php echo $this->form->getInput('email'); ?></div>
									</td>
								</tr>
								<tr>
									<td width="20%" class="nowrap right">
										<div class="control-label"><?php echo $this->form->getLabel('mobile'); ?></div>
									</td>
									<td width="80%">
										<div class="controls"><?php echo $this->form->getInput('mobile'); ?></div>
									</td>
								</tr>
								<tr>
									<td width="20%" class="nowrap right">
										<div class="control-label"><?php echo $this->form->getLabel('tel'); ?></div>
									</td>
									<td width="80%">
										<div class="controls"><?php echo $this->form->getInput('tel'); ?></div>
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
