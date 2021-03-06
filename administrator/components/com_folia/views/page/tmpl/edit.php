<?php
defined('_JEXEC') or die('Restricted access');

JHtml::_('behavior.formvalidation');
JHtml::_('formbehavior.chosen', 'select');
?>

<script type="text/javascript">
	Joomla.submitbutton = function(task)
	{
		if (task == 'page.cancel' || document.formvalidator.isValid(document.id('folia-form')))
		{
			<?php //echo $this->form->getField('nom')->save(); ?>
			Joomla.submitform(task, document.getElementById('folia-form'));
		}
	}
</script>

<form action="<?php echo JRoute::_('index.php?option=com_folia&layout=edit&id='.(int) $this->item->id); ?>"
      method="post" name="adminForm" id="folia-form" class="form-validate">

	<div class="form-inline form-inline-header">			
		<div class="control-group">
			<div class="control-label"><?php echo $this->form->getLabel('titre'); ?></div>
			<div class="controls"><?php echo $this->form->getInput('titre'); ?></div>
		</div>
		<div class="control-group">
			<div class="control-label"><?php echo $this->form->getLabel('alias'); ?></div>
			<div class="controls"><?php echo $this->form->getInput('alias'); ?></div>
		</div>
							
	</div>								


	<div class="form-horizontal">
		<?php echo JHtml::_('bootstrap.startTabSet', 'myTab', array('active' => 'details')); ?>

		<?php echo JHtml::_('bootstrap.addTab', 'myTab', 'details', JText::_('COM_FOLIA_DOCUMENT')); ?>
		<div class="row-fluid ">
			<div class="span9">
				<div class="form-vertical">
				<div class="control-group">				
					</div>
					<div class="control-group">
						<div class="span2">
							<div class="control-label"><?php echo $this->form->getLabel('portfolios_id'); ?></div>
						</div>					
						<div class="span7">
							<div class="controls"><?php echo $this->form->getInput('portfolios_id'); ?></div>
						</div>					
					</div>																
				</div>
				<div class="form-vertical">
					<?php echo $this->form->getControlGroup('texte'); ?>
				</div>
			</div>
			<div class="span3">
				<?php echo JLayoutHelper::render('joomla.edit.global', $this); ?>
			</div>
		</div>
		<?php echo JHtml::_('bootstrap.endTab'); ?>

		<?php echo JHtml::_('bootstrap.addTab', 'myTab', 'publishing', JText::_('JGLOBAL_FIELDSET_PUBLISHING', true)); ?>
		<div class="row-fluid form-horizontal-desktop">
			<div class="span6">
				<?php echo JLayoutHelper::render('joomla.edit.publishingdata', $this); ?>
			</div>
			<div class="span6">
				<?php echo JLayoutHelper::render('joomla.edit.metadata', $this); ?>
			</div>
		</div>
	
		<?php echo JHtml::_('bootstrap.endTab'); ?>

		<?php echo JLayoutHelper::render('joomla.edit.params', $this); ?>

		<?php echo JHtml::_('bootstrap.endTabSet'); ?>
	</div>
	<input type="hidden" name="task" value="" />
	<?php echo JHtml::_('form.token'); ?>
</form>
