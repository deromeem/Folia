<?php
defined('_JEXEC') or die('Restricted access');

JHtml::_('behavior.formvalidation');
JHtml::_('formbehavior.chosen', 'select');
?>

<script type="text/javascript">
	Joomla.submitbutton = function(task)
	{
		if (task == 'utilisateur.cancel' || document.formvalidator.isValid(document.id('folia-form')))
		{
			<?php //echo $this->form->getField('commentaire')->save(); ?>
			Joomla.submitform(task, document.getElementById('folia-form'));
		}
	}
</script>

<form action="<?php echo JRoute::_('index.php?option=com_folia&layout=edit&id='.(int) $this->item->id); ?>"
      method="post" name="adminForm" id="folia-form" class="form-validate">

	<div class="form-inline form-inline-header">
		<div class="control-group">
			<div class="control-label"><?php echo $this->form->getLabel('nom'); ?></div>
			<div class="controls"><?php echo $this->form->getInput('nom'); ?></div>
		</div>					
		<div class="control-group">
			<div class="control-label"><?php echo $this->form->getLabel('prenom'); ?></div>
			<div class="controls"><?php echo $this->form->getInput('prenom'); ?></div>
		</div>		
		<div class="control-group">
			<div class="control-label"><?php echo $this->form->getLabel('email'); ?></div>
			<div class="controls"><?php echo $this->form->getInput('email'); ?></div>
		</div>					
		<div class="control-group">
			<div class="control-label"><?php echo $this->form->getLabel('alias'); ?></div>
			<div class="controls"><?php echo $this->form->getInput('alias'); ?></div>
		</div>					
	</div>					

	<div class="form-horizontal">
		<?php echo JHtml::_('bootstrap.startTabSet', 'myTab', array('active' => 'infos')); ?>

		<?php echo JHtml::_('bootstrap.addTab', 'myTab', 'infos', JText::_('COM_FOLIA_ADVANCED')); ?>
		
		<div class="row-fluid ">
			<div class="span9">
				<div class="form-vertical">			
					<div class="control-group">
						<div class="row-fluid form-horizontal-desktop">
							<div class="span6">
							<?php echo JLayoutHelper::render('joomla.edit.publishingdata', $this); ?>
							</div>
							<div class="span6">
								<?php echo JLayoutHelper::render('joomla.edit.metadata', $this); ?>
							</div>
							<div class="span3">
							<?php echo JLayoutHelper::render('joomla.edit.global', $this); ?>
							</div>
						</div>
	
						<?php echo JHtml::_('bootstrap.endTab'); ?>

						<?php echo JLayoutHelper::render('joomla.edit.params', $this); ?>

						<?php echo JHtml::_('bootstrap.endTabSet'); ?>
					</div>
					<input type="hidden" name="task" value="" />
					<?php echo JHtml::_('form.token'); ?>			
				</div>								
			</div>
		</div>
	</div>
	<?php echo JHtml::_('bootstrap.endTab'); ?>
		
		
</form>
