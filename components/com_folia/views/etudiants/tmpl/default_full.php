<?php
defined('_JEXEC') or die('Restricted access');
?>

<h1>Etudiants de Folia</h1>

<form action="<?php echo htmlspecialchars(JFactory::getURI()->toString()); ?>" method="post" name="adminForm" id="adminForm">

	<table class="category">
		<thead>
			<tr>
			<th class="title">Nom</th>
			<th class="title">Prénom</th>
			<th class="title">Email</th>
			<th class="title">Classe</th>
		</tr>
		</thead>

		<tbody>
			<?php foreach($this->tickets as $i => $item) : ?>
			<tr>
				<td><?php echo $item->nom ?></td>
				<td><?php echo $item->prenom ?></td>
				<td><?php echo $item->email ?></td>
				<td><?php echo $item->classe ?></td>
			</tr>			
			<?php endforeach; ?>
		</tbody>
	</table>

</form>

<?php echo $this->pagination->getListFooter(); ?>