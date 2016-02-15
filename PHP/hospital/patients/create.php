<?php
	require_once "create.logic.php";
	include "../common/header.php";
?>
	<h1>New patiënt</h1>
	<form method="post">
		<div>
			<label for="name">Name:</label>
			<input type="text" id="name" name="name">
		</div>
		<div>
			<label for="name">Status:</label>
			<textarea id="status" name="status"></textarea>
		</div>
		<div>
			<label for="name">Clients:</label>
			  <select name="clients_id">
				<?php
					foreach($client_list as $client){
				?>
			    <option value="<?=$client['id']?>"> <?=$client['name']?> </option>
			    <?php
			    	}
			    ?>
			  </select>
		</div>
		<div>
			<label for="name">Specie:</label>
			  <select name="species_id">
				<?php
					foreach($species_list as $specie){
				?>
			    <option value="<?=$specie['id']?>"> <?=$specie['species_names']?> </option>
			    <?php
			    	}
			    ?>
			  </select>
		</div>
		<div>
			<label for="name">Gender:</label>
			  <select name="gender_id">
				<?php
					foreach($gender_list as $gender){
				?>
			    <option value="<?=$gender['id']?>"> <?=$gender['gender_names']?> </option>
			    <?php
			    	}
			    ?>
			  </select>
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>