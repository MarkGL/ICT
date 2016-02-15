<?php
	require_once "edit.logic.php";
?>
	<h1>Edit birthday</h1>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$birthdays['id']?>">
			<label for="name">Name:</label>
			<input type="text" id="person" name="person" value="<?=$birthdays['person']?>">
		</div>
		<div>
			<label for="name">Day:</label>
			<input type="text" id="day" name="day" value="<?=$birthdays['day']?>">
		</div>
		<div>
			<label for="name">Month:</label>
			  <select name="month_id">
				<?php
					foreach($month_list as $monthnames){
				?>
			    <option value="<?=$monthnames['id']?>"> <?=$monthnames['name']?> </option>
			    <?php
			    	}
			    ?>
			  </select>
		</div>
		<div>
			<label for="name">Year:</label>
			<input type="text" id="year" name="year" value="<?=$birthdays['year']?>">
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>