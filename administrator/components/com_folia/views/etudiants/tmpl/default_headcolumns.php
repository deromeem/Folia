<?php
defined('_JEXEC') or die('Restricted Access');

$listOrder	= $this->escape($this->state->get('list.ordering'));
$listDirn	= $this->escape($this->state->get('list.direction'));
?>

	<tr>
        <th width="5%" class="hidden-phone">
			<?php echo JHtml::_('grid.checkall'); ?>
        </th>         
        <th width="30%" class="nowrap">
			<?php echo JHtml::_('grid.sort', 'COM_FOLIA_ETUDIANTS_EMAIL', 'e.email', $listDirn, $listOrder) ?>
        </th>      
        <th width="20%" class="nowrap">
			<?php echo JHtml::_('grid.sort', 'COM_FOLIA_ETUDIANTS_NOM', 'u.,nom', $listDirn, $listOrder) ?>
        </th>      
        <th width="20%" class="nowrap">
			<?php echo JHtml::_('grid.sort', 'COM_FOLIA_ETUDIANTS_PRENOM', 'u.prenom', $listDirn, $listOrder) ?>
        </th>
        <th width="15%" class="nowrap">
			<?php echo JHtml::_('grid.sort', 'COM_FOLIA_ETUDIANTS_CLASSE', 'c.libelle', $listDirn, $listOrder) ?>
        </th>
		<th width="5%" style="min-width:55px" class="nowrap center hidden-phone">
			<?php echo JHtml::_('grid.sort', 'Publié', 'e.published', $listDirn, $listOrder) ?>
        </th>
        <th width="10%" style="min-width:120px" class="nowrap center hidden-tablet hidden-phone">
			<?php echo JHtml::_('grid.sort', 'Date', 'e.modified', $listDirn, $listOrder) ?>
        </th>
		<th width="5%" class="nowrap center hidden-tablet hidden-phone">
			<?php echo JHtml::_('grid.sort', 'JGLOBAL_HITS', 'e.hits', $listDirn, $listOrder); ?>
		</th>
		<th width="5%" class="nowrap center hidden-phone">
			<?php echo JHtml::_('grid.sort', 'JGRID_HEADING_ID', 'e.id', $listDirn, $listOrder); ?>
		</th>
	</tr>

