<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET"):
		$patient = NULL;
		if (isset($_GET['id'])):
			// Get Patient for id
			$db = new mysqli('localhost','root','','hospital');
			$id = $db->escape_string($_GET["id"]);
			
			$query = "select * from patient where id=$id";
			$result = $db->query($query);
		
			$patient = $result->fetch_assoc();	

			$query = "select * from clients";
			$result = $db->query($query);
	
			$client_list = $result->fetch_all(MYSQLI_ASSOC);

			$query = "select * from species";
			$result = $db->query($query);
	
			$species_list = $result->fetch_all(MYSQLI_ASSOC);	
			
			$query = "select * from gender";
			$result = $db->query($query);
	
			$gender_list = $result->fetch_all(MYSQLI_ASSOC);
		endif;
		if ($patient == NULL):
			// No patient found
			http_response_code(404);
			include("../common/not_found.php");
			exit();
		endif;
	elseif ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','hospital');
		
		// Prepare data for update
		$id = $db->escape_string($_POST["id"]);
		$name = $db->escape_string($_POST["name"]);
		$status = $db->escape_string($_POST["status"]);
		$clients_id = $db->escape_string($_POST["clients_id"]);
		$species_id = $db->escape_string($_POST["species_id"]);
		$gender_id = $db->escape_string($_POST["gender_id"]);

		
		// Prepare query and execute
		$query = "UPDATE patient set name='$name', status='$status', clients_id=$clients_id, species_id=$species_id, gender_id=$gender_id where id=$id";
		$result = $db->query($query);

    // Tell the browser to go back to the index page.
    header("Location: ./");
    exit();
	endif;

?>