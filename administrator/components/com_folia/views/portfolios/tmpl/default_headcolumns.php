<?php
defined('_JEXEC') or die('Restricted Access');

$listOrder	= $this->escape($this->state->get('list.ordering'));
$listDirn	= $this->escape($this->state->get('list.direction'));
?>

	<tr>
		<th width="5%" class="hidden-phone">
			<?php echo JHtml::_('grid.checkall'); ?>
        </th>                 
        <th width="55%">
			<?php echo JHtml::_('grid.sort', 'COM_FOLIA_PORTFOLIOS_LIBELLE', 'p.libelle', $listDirn, $listOrder) ?>
        </th>
        <th width="10%" class="nowrap">
			<?php echo JHtml::_('grid.sort', 'COM_FOLIA_PORTFOLIOS_PRENOM', 'p.etudiant_id', $listDirn, $listOrder) ?>
        </th>
		<th width="10%" style="min-width:55px" class="nowrap center hidden-phone">
			<?php echo JHtml::_('grid.sort', 'Publié', 'u.published', $listDirn, $listOrder) ?>
        </th>
        <th width="10%" style="min-width:120px" class="nowrap center hidden-tablet hidden-phone">
			<?php echo JHtml::_('grid.sort', 'Date', 'u.modified', $listDirn, $listOrder) ?>
        </th>
		<th width="5%" class="nowrap center hidden-tablet hidden-phone">
			<?php echo JHtml::_('grid.sort', 'JGLOBAL_HITS', 'u.hits', $listDirn, $listOrder); ?>
		</th>
		<th width="5%" class="nowrap center hidden-phone">
			<?php echo JHtml::_('grid.sort', 'JGRID_HEADING_ID', 'u.id', $listDirn, $listOrder); ?>
		</th>
	</tr>

