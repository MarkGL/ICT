<?php
	require_once "create.logic.php";
?>
	<h1>New birthday</h1>
	<form method="post">
		<div>
			<label for="name">Name:</label>
			<input type="text" id="person" name="person">
		</div>
		<div>
			<label for="name">Day:</label>
			<textarea id="day" name="day"></textarea>
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
			<input type="text" id="year" name="year">
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>