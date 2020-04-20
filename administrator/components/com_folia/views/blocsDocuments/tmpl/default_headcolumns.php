<?php
defined('_JEXEC') or die('Restricted Access');

$listOrder	= $this->escape($this->state->get('list.ordering'));
$listDirn	= $this->escape($this->state->get('list.direction'));
?>

	<tr>
        <th width="20" class="hidden-phone">
                <?php echo JHtml::_('grid.checkall'); ?>
        </th>                             
        <th width="35%">
                <?php echo JHtml::_('grid.sort', 'COM_FOLIA_BLOCS_DOCUMENTS_BLOCS_ID', 'bd.blocs_id', $listDirn, $listOrder) ?>
        </th>
        <th width="35%">
                <?php echo JHtml::_('grid.sort', 'COM_FOLIA_BLOCS_DOCUMENTS_DOCUMENTS_ID', 'bd.documents_id', $listDirn, $listOrder) ?>
        </th>
        <th width="5%" class="nowrap hidden-phone">
                <?php echo JHtml::_('grid.sort', 'COM_FOLIA_BLOCS_DOCUMENTS_ALIAS', 'bd.alias', $listDirn, $listOrder) ?>
        </th>
        <th width="1%" style="min-width:55px" class="nowrap center ">
                <?php echo JHtml::_('grid.sort', 'Publié', 'bd.published', $listDirn, $listOrder) ?>
        </th>
        <th width="1%" style="min-width:120px" class="nowrap center">
                <?php echo JHtml::_('grid.sort', 'Date', 'bd.modified', $listDirn, $listOrder) ?>
        </th>
	<th width="10%">
		<?php echo JHtml::_('grid.sort', 'JGLOBAL_HITS', 'bd.hits', $listDirn, $listOrder); ?>
	</th>
	  <th width="30%" class= " left hidden-phone">
		<?php echo JHtml::_('grid.sort', 'JGRID_HEADING_ID', 'b.id', $listDirn, $listOrder); ?>
	</th> 
	</tr>

