<?php
		$db = new mysqli('localhost','root','','hospital');
		$query = "select * from species";
		$result = $db->query($query);

		$species = $result->fetch_all(MYSQLI_ASSOC);

	if ($_SERVER["REQUEST_METHOD"] == "POST"):

		// Prepare data for insertion
		$species = $db->escape_string($_POST["species"]);
		// Prepare query and execute
		$query = "insert into species (species_names) values ('$species')";
		$result = $db->query($query);
	
    // Tell the browser to go back to the index page.
    header("Location: ./");
    exit();
	endif;

?>