<?php
defined('_JEXEC') or die('Restricted Access');

$listOrder	= $this->escape($this->state->get('list.ordering'));
$listDirn	= $this->escape($this->state->get('list.direction'));
?>

	<tr>
        <th width="20" class="hidden-phone">
                <?php echo JHtml::_('grid.checkall'); ?>
        </th>
        <th width="1%" class="nowrap center hidden-phone">
		<?php echo JHtml::_('grid.sort', 'JGRID_HEADING_ID', 'b.id', $listDirn, $listOrder); ?>
	</th>                   
        <th width="35%">
                <?php echo JHtml::_('grid.sort', 'COM_FOLIA_BLOCS_PAGE_ID', 'b.page_id', $listDirn, $listOrder) ?>
        </th>
        <th width="35%">
                <?php echo JHtml::_('grid.sort', 'COM_FOLIA_BLOCS_ACTIVITE_ID', 'b.activite_id', $listDirn, $listOrder) ?>
        </th>
        <th width="5%" class="nowrap hidden-phone">
                <?php echo JHtml::_('grid.sort', 'COM_FOLIA_BLOCS_ALIAS', 'b.alias', $listDirn, $listOrder) ?>
        </th>
        <th class="nowrap center hidden-tablet hidden-phone">
                <?php echo JHtml::_('grid.sort', 'COM_FOLIA_BLOCS_TEXTE', 'b.texte', $listDirn, $listOrder) ?>
        </th>
        <th width="1%" style="min-width:55px" class="nowrap center ">
                <?php echo JHtml::_('grid.sort', 'Publié', 'b.published', $listDirn, $listOrder) ?>
        </th>
        <th width="1%" style="min-width:120px" class="nowrap center">
                <?php echo JHtml::_('grid.sort', 'Date', 'b.modified', $listDirn, $listOrder) ?>
        </th>
	<th width="10%">
		<?php echo JHtml::_('grid.sort', 'JGLOBAL_HITS', 'b.hits', $listDirn, $listOrder); ?>
	</th>
	</tr>
