<?php
defined('_JEXEC') or die('Restricted access');

$user = JFactory::getUser();               		// gets current user object
$isAdmin = (in_array('10', $user->groups));		// sets flag when user group is '10' that is 'MRH Administrateur 
?>

<?php if ($user) : ?>
		<table class="table">
			<tbody>
				<h4><?php echo $this->item->nom ?></h4>
				<h4><?php echo $this->item->prenom ?></h4>
				<h4><?php echo $this->item->email ?></h4>
				<h4><?php echo $this->item->hits ?></h4>
			</tbody>
		</table>
	</div>
<?php endif; ?>
