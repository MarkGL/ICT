<?php
		$db = new mysqli('localhost','root','','hospital');

		$query = "select * from clients";
		$result = $db->query($query);

		$client_list = $result->fetch_all(MYSQLI_ASSOC);

		$query = "select * from species";
		$result = $db->query($query);

		$species_list = $result->fetch_all(MYSQLI_ASSOC);	

		$query = "select * from gender";
		$result = $db->query($query);

		$gender_list = $result->fetch_all(MYSQLI_ASSOC);	
	if ($_SERVER["REQUEST_METHOD"] == "POST"):

		// Prepare data for insertion
		$name = $db->escape_string($_POST["name"]);
		$status = $db->escape_string($_POST["status"]);
		$clients_id = $db->escape_string($_POST["clients_id"]);
		$species_id = $db->escape_string($_POST["species_id"]);
		$gender_id = $db->escape_string($_POST["gender_id"]);
		// Prepare query and execute
		$query = "insert into patient (name, status, clients_id, species_id, gender_id) values ('$name','$status','$clients_id','$species_id','$gender_id')";
		$result = $db->query($query);
	
    // Tell the browser to go back to the index page.
    header("Location: ./");
    exit();
	endif;

?>