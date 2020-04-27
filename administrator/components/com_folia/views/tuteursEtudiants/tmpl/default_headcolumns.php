<?php
defined('_JEXEC') or die('Restricted Access');

$listOrder	= $this->escape($this->state->get('list.ordering'));
$listDirn	= $this->escape($this->state->get('list.direction'));
?>

	<tr>
        <th width="1%" class="hidden-phone center">
                <?php echo JHtml::_('grid.checkall'); ?>
        </th>
				<th width="8%" class="nowrap">
								<?php echo JHtml::_('grid.sort', 'TUTEURS_NOM', 'ut.nom', $listDirn, $listOrder) ?>
				</th>
				<th width="8%" class="nowrap">
								<?php echo JHtml::_('grid.sort', 'TUTEURS_PRENOM', 'ut.prenom', $listDirn, $listOrder) ?>
				</th>
				<th width="8%" class="nowrap">
								<?php echo JHtml::_('grid.sort', 'ETUDIANTS_NOM', 'ue.nom', $listDirn, $listOrder) ?>
				</th>
				<th width="8%" class="nowrap">
								<?php echo JHtml::_('grid.sort', 'ETUDIANTS_PRENOM', 'ue.prenom', $listDirn, $listOrder) ?>
				</th>
			
        <th width="1%" style="min-width:55px" class="nowrap center ">
                <?php echo JHtml::_('grid.sort', 'Publié', 'te.published', $listDirn, $listOrder) ?>
        </th>
        <th width="1%" style="min-width:120px" class="nowrap center">
                <?php echo JHtml::_('grid.sort', 'Date', 'te.modified', $listDirn, $listOrder) ?>
        </th>
		<th width="10%">
			<?php echo JHtml::_('grid.sort', 'JGLOBAL_HITS', 'te.hits', $listDirn, $listOrder); ?>
		</th>
		<th width="1%" class="nowrap center hidden-phone">
			<?php echo JHtml::_('grid.sort', 'JGRID_HEADING_ID', 'te.id', $listDirn, $listOrder); ?>
		</th>
	</tr>
