<?php
	require_once "delete.logic.php";
?>
<h1>Delete Birthday</h1>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$data['id']?>">
			<label for="person"></label>
			<a>Weet je zeker dat je de verjaardag van</a>
			<span><?=$data['person']?></span>
			op
			<span><?=$data['day']?></span>
			<span><?=$data['monthname']?></span>
			<span><?=$data['year']?></span>
			wilt verwijderen?
		</div>
		<div>
			<label></label>
			<input type="submit" name="confirmed" value="Jazeker">
			<input type="submit" name="canceled" value="Nee">
		</div>
	</form>