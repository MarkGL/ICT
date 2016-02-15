<?php
	require_once "delete.logic.php";
	include "../common/header.php";
?>
	<h1>Delete patiënt</h1>
	<p>Are you sure you want to delete:</p>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$data['id']?>">
			<label for="name">Name:</label>
			<span><?=$data['name']?></span>
		</div>
		<div>
			<label for="name">Species:</label>
			<span><?=$data['species_names']?></span>
		</div>
		<div>
			<label for="name">Status:</label>
			<span><?=$data['status_name']?></span>
		</div>
		<div>
			<label for="name">Client:</label>
			<span><?=$data['clients_name']?></span>
		</div>
		<div>
			<label for="name">Gender:</label>
			<span><?=$data['gender_name']?></span>
		</div>
		<div>
			<label></label>
			<input type="submit" name="confirmed" value="Yes">
			<input type="submit" name="canceled" value="No">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>