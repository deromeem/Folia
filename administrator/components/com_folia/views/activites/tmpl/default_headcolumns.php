<?php
defined('_JEXEC') or die('Restricted Access');

$listOrder	= $this->escape($this->state->get('list.ordering'));
$listDirn	= $this->escape($this->state->get('list.direction'));
?>

	<tr>
        <th width="20" class="hidden-phone">
                <?php echo JHtml::_('grid.checkall'); ?>
        </th>
        <th class="nowrap center hidden-tablet hidden-phone">
                <?php echo JHtml::_('grid.sort', 'COM_FOLIA_ACTIVITES_REFERENTIEL', 'referentiels_id', $listDirn, $listOrder) ?>
        </th>                   
        <th width="7%">
                <?php echo JHtml::_('grid.sort', 'COM_FOLIA_ACTIVITES_NOM', 'a.nom', $listDirn, $listOrder) ?>
        </th>
        <th width="5%" class="nowrap hidden-phone">
                <?php echo JHtml::_('grid.sort', 'COM_FOLIA_ACTIVITES_DESCRIPTION', 'a.description', $listDirn, $listOrder) ?>
        </th>
        <th width="1%" style="min-width:55px" class="nowrap center ">
                <?php echo JHtml::_('grid.sort', 'Publié', 'a.published', $listDirn, $listOrder) ?>
        </th>
        <th width="1%" style="min-width:120px" class="nowrap center">
                <?php echo JHtml::_('grid.sort', 'Date', 'a.modified', $listDirn, $listOrder) ?>
        </th>
		<th width="10%">
			<?php echo JHtml::_('grid.sort', 'JGLOBAL_HITS', 'a.hits', $listDirn, $listOrder); ?>
		</th>
		<th width="1%" class="nowrap center hidden-phone">
			<?php echo JHtml::_('grid.sort', 'JGRID_HEADING_ID', 'a.id', $listDirn, $listOrder); ?>
		</th>
	</tr>

