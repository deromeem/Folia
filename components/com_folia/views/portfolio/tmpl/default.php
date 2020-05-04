<?php
defined('_JEXEC') or die('Restricted access');

$uriCompoDetail = JURI::base(true)."/index.php?option=com_folia&view=page&id=";
$user = JFactory::getUser();               		// gets current user object
$isFolia = ((bool)array_intersect(array('12', '13', '14', '15'), $user->groups));
?>

<?php if (!$isFolia) : ?>
	<?php echo JError::raiseWarning( 100, JText::_('COM_FOLIA_RESTRICTED_ACCESS') ); ?>
<?php else : ?>
	<div class="form-inline form-inline-header">
		<div class="btn-group pull-left">
			<h2><?php echo JText::_('COM_FOLIA_PORTFOLIO'); ?></h2>
		</div>
		<div class="btn-group pull-right">
			<a href="<?php echo JRoute::_('index.php?option=com_folia&view=portfolios'); ?>" class="btn" role="button">
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
						<span class="label"><?php echo JText::_('COM_FOLIA_PORTFOLIOS_TITRE'); ?></span>
					</td>
					<td width="80%">
						<h4><?php echo $this->item->titre ?></h4>
					</td>
				</tr>
				<tr>
					<td width="20%" class="nowrap right">
						<span class="label"><?php echo JText::_('COM_FOLIA_PORTFOLIOS_TEXTE'); ?></span>
					</td>
					<td width="80%">
						<?php echo $this->item->texte ?>
					</td>
				</tr>
				<tr>
					<td width="20%" class="nowrap right">
						<span class="label"><?php echo JText::_('COM_FOLIA_PORTFOLIOS_ETUDIANT'); ?></span>
					</td>
					<td width="80%">
						<?php echo $this->item->utilisateur ?>
					</td>
				</tr>
				<tr>
					<td width="20%" class="nowrap right">
						<span class="label"><?php echo JText::_('COM_FOLIA_PORTFOLIOS_THEME'); ?></span>
					</td>
					<td width="80%">
						<?php echo $this->item->theme ?>
					</td>
				</tr>
				<tr>
					<td width="20%" class="nowrap right">
						<span class="label"><?php echo JText::_('COM_FOLIA_PORTFOLIOS_DATE'); ?></span>
					</td>
					<td width="80%">
						<?php echo $this->item->created ?>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<?php
	$url = JUri::getInstance();
	$explode = explode("=", $url);
	$number = $explode[3];
	$model = $this->getModel();
	$this->pages = $model->getPages($number);
	$max = count($this->pages);
	if($max != 0) :
	?>
	<table class="category table table-striped">
		<thead>
			<tr>
			<th class="title">Titre de la page</th>
			<th class="title">Texte de la page</th>
			<th class="title">Date de création</th>
		</tr>
		</thead>
		<tbody>
			<?php for($counter = 0; $counter < $max; $counter++): ?>
			<tr>
				<td><a href="<?php echo $uriCompoDetail.$this->pages[$counter]->id ?>"><?php echo $this->pages[$counter]->titre ?></a></td>
				<td>
					<?php
						$sub_texte = $this->pages[$counter]->texte;
						if(strlen($this->pages[$counter]->texte) >= 25)
							$sub_texte = substr($this->pages[$counter]->texte, 0, 22)."...";
						echo $sub_texte
					?>	
				</td>
				<td><?php echo $this->pages[$counter]->created ?></td>
			</tr>
			<?php endfor ?>
		</tbody>
	</table>
<?php else : ?>
	<h4 align="center">Aucune page</h4>
<?php endif; endif ?>
