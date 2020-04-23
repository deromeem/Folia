<?php
defined('_JEXEC') or die('Restricted Access');

$listOrder	= $this->escape($this->state->get('list.ordering'));
$listDirn	= $this->escape($this->state->get('list.direction'));
?>

	<tr>
        <th width="5%" class="hidden-phone">
			<?php echo JHtml::_('grid.checkall'); ?>
        </th>         
        <!--<th width="30%" class="nowrap">
			<?php echo JHtml::_('grid.sort', 'COM_FOLIA_COMMENTAIRES_LIBELLE', 'c.texte', $listDirn, $listOrder) ?>
        </th>  -->   
		<th width="10%" style="min-width:55px" class="nowrap left hidden-phone">
			<?php echo JHtml::_('grid.sort', 'Portfolio', 'c.published', $listDirn, $listOrder) ?>
        </th> 
        <th width="30%" class="nowrap">
			<?php echo JHtml::_('grid.sort', 'COM_FOLIA_COMMENT', 'c.texte', $listDirn, $listOrder) ?>
        </th>
		<th width="5%" style="min-width:55px" class="nowrap center hidden-phone">
			<?php echo JHtml::_('grid.sort', 'Publié', 'c.published', $listDirn, $listOrder) ?>
        </th>
        <th width="10%" style="min-width:120px" class="nowrap center hidden-tablet hidden-phone">
			<?php echo JHtml::_('grid.sort', 'Date', 'c.modified', $listDirn, $listOrder) ?>
        </th>
		<th width="5%" class="nowrap center hidden-tablet hidden-phone">
			<?php echo JHtml::_('grid.sort', 'JGLOBAL_HITS', 'c.hits', $listDirn, $listOrder); ?>
		</th>
		<th width="5%" class="nowrap center hidden-phone">
			<?php echo JHtml::_('grid.sort', 'JGRID_HEADING_ID', 'c.id', $listDirn, $listOrder); ?>
		</th>
	</tr>

