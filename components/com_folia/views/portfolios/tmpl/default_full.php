<?php
defined('_JEXEC') or die('Restricted access');
?>

<h1>Portfolios de Folia</h1>

<form action="<?php echo htmlspecialchars(JFactory::getURI()->toString()); ?>" method="post" name="adminForm" id="adminForm">

	<table class="category">
		<thead>
			<tr>
			<th class="title">Titre</th>
			<th class="title">Texte</th>
			<th class="title">Utilisateur</th>
			<th class="title">Thème</th>
		</tr>
		</thead>

		<tbody>
			<?php foreach($this->tickets as $i => $item) : ?>
			<tr>
				<td><?php echo $item->titre ?></td>
				<td><?php echo $item->texte ?></td>
				<td><?php echo $item->utilisateur ?></td>
				<td><?php echo $item->theme ?></td>
			</tr>			
			<?php endforeach; ?>
		</tbody>
	</table>

</form>

<?php echo $this->pagination->getListFooter(); ?>
