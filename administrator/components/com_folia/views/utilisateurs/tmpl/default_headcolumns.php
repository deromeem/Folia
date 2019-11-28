<?php
defined('_JEXEC') or die('Restricted Access');

$listOrder	= $this->escape($this->state->get('list.ordering'));
$listDirn	= $this->escape($this->state->get('list.direction'));
?>

	<tr>
        <th width="5%" class="hidden-phone">
			<?php echo JHtml::_('grid.checkall'); ?>
        </th>                   
        <th width="30%">
			<?php echo JHtml::_('grid.sort', 'COM_FOLIA_UTILISATEURS_NOM', 'u.nom', $listDirn, $listOrder) ?>
        </th>
        <th width="30%" class="nowrap">
			<?php echo JHtml::_('grid.sort', 'COM_FOLIA_UTILISATEURS_PRENOM', 'u.prenom', $listDirn, $listOrder) ?>
        </th>
        <th width="20%" class="nowrap">
			<?php echo JHtml::_('grid.sort', 'COM_FOLIA_UTILISATEURS_EMAIL', 'u.email', $listDirn, $listOrder) ?>
        </th>
		<th width="15%" class="nowrap center hidden-phone">
			<?php echo JHtml::_('grid.sort', 'JGRID_HEADING_ID', 'u.id', $listDirn, $listOrder); ?>
		</th>
	</tr>

