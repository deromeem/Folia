<?php
defined('_JEXEC') or die('Restricted access');
?>

<h1>Mes Portfolios de folia</h1>

<form action="<?php echo htmlspecialchars(JFactory::getURI()->toString()); ?>" method="post" name="adminForm" id="adminForm">

	<table class="category">
		<thead>
			<tr>
			<th class="title">Titre du portfolio</th>
			<th class="title">Texte</th>
			<th class="title">Theme</th>

		</tr>
		</thead>

		<tbody>
			<?php foreach($this->tickets as $i => $item) : ?>
			<tr>
				<td><?php echo $item->titrep ?></td>
				<td><?php echo $item->texte ?></td>
				<td><?php echo $item->theme ?></td>

			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

</form>

<?php echo $this->pagination->getListFooter(); ?>
