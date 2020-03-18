<?php
defined('_JEXEC') or die('Restricted Access');

$listOrder	= $this->escape($this->state->get('list.ordering'));
$listDirn	= $this->escape($this->state->get('list.direction'));

$saveOrder	= $listOrder == 'ordering';
if ($saveOrder)
{
	$saveOrderingUrl = 'index.php?option=com_folia&task=portfolios.saveOrderAjax&tmpl=component';
	JHtml::_('sortablelist.sortable', 'articleList', 'adminForm', strtolower($listDirn), $saveOrderingUrl);
}
?>

<?php foreach($this->items as $i => $item): ?>
	<tr class="row<?php echo $i % 2; ?>">
		<td class="wrap has-context">
			<div class="pull-left">
				<a href="<?php echo JRoute::_('index.php?option=com_folia&task=portfolios.edit&id='.(int) $item->id); ?>">
					<?php echo $this->escape($item->libelle); ?>
				</a>
			</div>
		</td>
		<td>
			<?php echo $item->etudiant_id; ?>
		</td>
		<td class="center hidden-phone">
			<?php echo JHtml::_('jgrid.published', $item->published, $i, 'portfolios.', true); ?>
		</td>
		<td class="center hidden-tablet hidden-phone">
			<?php echo JHtml::_('date', $item->modified, $this->paramDateFmt); ?>
		</td>
		<td class="center hidden-tablet hidden-phone">
			<?php echo (int) $item->hits; ?>
		</td>
		<td class="center hidden-phone">
			<?php echo (int) $item->id; ?>
		</td>
	</tr>
<?php endforeach; ?>