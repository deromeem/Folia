<?php
defined('_JEXEC') or die('Restricted access');

$uriCompoDetail = JURI::base(true)."/index.php?option=com_folia&view=mbloc&id=";
$user = JFactory::getUser();               		// gets current user object
$isFolia = ((bool)array_intersect(array('12', '13', '14', '15'), $user->groups));

$url = JUri::getInstance();
$explode = explode("=", $url);
$number = $explode[3];
$model = $this->getModel();

$this->return = $model->getReturn($number);
?>

<?php if (!$isFolia) : ?>
	<?php echo JError::raiseWarning( 100, JText::_('COM_FOLIA_RESTRICTED_ACCESS') ); ?>
<?php else : ?>
	<div class="form-inline form-inline-header">
		<div class="btn-group pull-left">
			<h2><?php echo JText::_('COM_FOLIA_PAGE'); ?></h2>
		</div>
		<div class="btn-group pull-right">
			<a href="<?php echo JURI::base(true).'/index.php?option=com_folia&view=mportfolio&id='.$this->return->portfolios_id ?>" class="btn" role="button">
				<span class="icon-cancel"></span></a>
		</div>
		<div class="btn-group pull-right">
			<a href="<?php echo JRoute::_('index.php?option=com_folia&view=form_page&layout=edit&id='.$this->item->id); ?>" class="btn" role="button"><span class="icon-edit"></span></a>
		</div>
	</div>
	<div>
		<table class="table">
			<tbody>
				<tr>
					<td width="20%" class="nowrap right">
						<span class="label"><?php echo JText::_('COM_FOLIA_PAGES_PORTFOLIO'); ?></span>
					</td>
					<td width="80%">
						<?php echo $this->item->portfolio ?>
					</td>
				</tr>
				<tr>
					<td width="20%" class="nowrap right">
						<span class="label"><?php echo JText::_('COM_FOLIA_PAGES_TITRE'); ?></span>
					</td>
					<td width="80%">
						<h4><?php echo $this->item->titre ?></h4>
					</td>
				</tr>
				<tr>
					<td width="20%" class="nowrap right">
						<span class="label"><?php echo JText::_('COM_FOLIA_PAGES_TEXTE'); ?></span>
					</td>
					<td width="80%">
						<?php echo $this->item->texte ?>
					</td>
				</tr>
				<tr>
					<td width="20%" class="nowrap right">
						<span class="label"><?php echo JText::_('JGLOBAL_FIELD_CREATED_LABEL'); ?></span>
					</td>
					<td width="80%">
						<?php echo $this->item->created ?>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<?php
	$this->blocs = $model->getBlocs($number);
	$max = count($this->blocs);
	?>
		<h2>Blocs de la Page</h2>
			<div class="btn-group pull-right">
			<a href="<?php
			$url = JUri::getInstance();
			$explode = explode("=", $url);
			$numberid = $explode[3];
			echo JRoute::_('index.php?option=com_folia&view=form_bloc&layout=edit&idpage='.$numberid); ?>" class="btn" role="button"><span class="icon-plus"></span></a>
		</div>
	<table class="category table table-striped">
		<thead>
			<tr>
			<th class="title">Titre du bloc</th>
			<th class="title">Texte du bloc</th>
			<th class="title">Nom de l'activité</th>
			<th class="title">Description de l'activité</th>
			<th class="title">Date de création</th>
		</tr>
		</thead>
		<tbody>
			<?php for($counter = 0; $counter < $max; $counter++): ?>
			<tr>
				<td><a href="<?php echo $uriCompoDetail.$this->blocs[$counter]->id ?>"><?php echo $this->blocs[$counter]->titre ?></a></td>
				<td>
					<?php
						$sub_texte = $this->blocs[$counter]->texte;
						if(strlen($this->blocs[$counter]->texte) >= 30)
							$sub_texte = substr($this->blocs[$counter]->texte, 0, 27)."...";
						echo $sub_texte
					?>
				</td>
				<td><?php echo $this->blocs[$counter]->activites_nom ?></td>
				<td>
					<?php
						$sub_description = $this->blocs[$counter]->activites_description;
						if(strlen($this->blocs[$counter]->activites_description) >= 30)
							$sub_description = substr($this->blocs[$counter]->activites_description, 0, 27)."...";
						echo $sub_description
					?>
				</td>
				<td><?php echo $this->blocs[$counter]->created ?></td>
			</tr>
			<?php endfor ?>
		</tbody>
	</table>
<?php endif; ?>
