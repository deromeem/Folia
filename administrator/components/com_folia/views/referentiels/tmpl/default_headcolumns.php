<?php
defined('_JEXEC') or die('Restricted Access');

$listOrder	= $this->escape($this->state->get('list.ordering'));
$listDirn	= $this->escape($this->state->get('list.direction'));
?>

	<tr>
        <th width="1%" class="center hidden-phone">
                <?php echo JHtml::_('grid.checkall'); ?>
        </th>                   
        <th width="15%">
                <?php echo JHtml::_('grid.sort', 'COM_FOLIA_REFERENTIELS_NOM', 'r.nom', $listDirn, $listOrder) ?>
        </th>
        <th width="20%" class="nowrap pull-left">
                <?php echo JHtml::_('grid.sort', 'COM_FOLIA_REFERENTIELS_DESCRIPTION', 'r.description', $listDirn, $listOrder) ?>
        </th>
        <th width="1%" style="min-width:55px" class="nowrap center ">
                <?php echo JHtml::_('grid.sort', 'Publié', 'r.published', $listDirn, $listOrder) ?>
        </th>
        <th width="1%" style="min-width:120px" class="nowrap center">
                <?php echo JHtml::_('grid.sort', 'Date', 'r.modified', $listDirn, $listOrder) ?>
        </th>
		<th width="10%">
			<?php echo JHtml::_('grid.sort', 'JGLOBAL_HITS', 'r.hits', $listDirn, $listOrder); ?>
		</th>
		<th width="1%" class="nowrap center hidden-phone">
			<?php echo JHtml::_('grid.sort', 'JGRID_HEADING_ID', 'r.id', $listDirn, $listOrder); ?>
		</th>
	</tr>

