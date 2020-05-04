<?php
defined('_JEXEC') or die('Restricted access');

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
			<h2><?php echo JText::_('COM_FOLIA_BLOC'); ?></h2>
		</div>
		<div class="btn-group pull-right">
			<a href="<?php echo JURI::base(true).'/index.php?option=com_folia&view=page&id='.$this->return->pages_id ?>" class="btn" role="button">
				<span class="icon-cancel"></span></a>
		</div>	
		<!-- <div class="btn-group pull-right">
			<a href="<?php echo JRoute::_('index.php?option=com_folia&view=form_p&layout=edit&id='.$this->item->id); ?>" class="btn" role="button"><span class="icon-edit"></span></a>
		</div>	 -->
	</div>
	<div>
		<table class="table">
			<tbody>
				<tr>
					<td width="20%" class="nowrap right">
						<span class="label"><?php echo JText::_('COM_FOLIA_BLOCS_TITRE'); ?></span>
					</td>
					<td width="80%">
						<h4><?php echo $this->item->titre ?></h4>
					</td>
				</tr>
				<tr>
					<td width="20%" class="nowrap right">
						<span class="label"><?php echo JText::_('COM_FOLIA_BLOCS_TEXTE'); ?></span>
					</td>
					<td width="80%">
						<?php echo $this->item->texte ?>
					</td>
				</tr>
				<tr>
					<td width="20%" class="nowrap right">
						<span class="label"><?php echo JText::_('COM_FOLIA_ACTIVITES_NOM'); ?></span>
					</td>
					<td width="80%">
						<?php echo $this->item->activites_nom ?>
					</td>
				</tr>
				<tr>
					<td width="20%" class="nowrap right">
						<span class="label"><?php echo JText::_('COM_FOLIA_ACTIVITES_DESCRIPTION'); ?></span>
					</td>
					<td width="80%">
						<?php echo $this->item->activites_description ?>
					</td>
				</tr>
				<tr>
					<td width="20%" class="nowrap right">
						<span class="label"><?php echo JText::_('COM_FOLIA_PORTFOLIOS_TITRE'); ?></span>
					</td>
					<td width="80%">
						<?php echo $this->item->portfolios_titre ?>
					</td>
				</tr>
				<tr>
					<td width="20%" class="nowrap right">
						<span class="label"><?php echo JText::_('COM_FOLIA_PAGES_TITRE'); ?></span>
					</td>
					<td width="80%">
						<?php echo $this->item->pages_titre ?>
					</td>
				</tr>
				<tr>
					<td width="20%" class="nowrap right">
						<span class="label"><?php echo JText::_('COM_FOLIA_BLOCS_DATE'); ?></span>
					</td>
					<td width="80%">
						<?php echo $this->item->created ?>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<?php
	$this->documents = $model->getDocuments($number);
	$max = count($this->documents);
	?>
	<h2>Documents du Bloc</h2>
	<table class="category table table-striped">
		<thead>
			<tr>
			<th class="title">Titre du fichier</th>
			<th class="title">Nom du fichier</th>
			<th class="title">URL du fichier</th>
			<th class="title">Date du fichier</th>
		</tr>
		</thead>
		<tbody>
			<?php for($counter = 0; $counter < $max; $counter++): ?>
			<tr>
				<td width="20%"><?php echo $this->documents[$counter]->titre ?></td>
				<td width="20%"><?php echo $this->documents[$counter]->nomFichier ?></td>
				<td>
					<?php
						$sub_url = $this->documents[$counter]->url;
						if(strlen($this->documents[$counter]->url) >= 25)
							$sub_url = substr($this->documents[$counter]->url, 0, 22)."...";
					?>
					<a href="<?php echo $this->documents[$counter]->url ?>" target="_blank"><?php echo $sub_url ?></a></td>
				<td><?php echo $this->documents[$counter]->created ?></td>
			</tr>
			<?php endfor ?>
		</tbody>
	</table>
<?php endif; ?>
