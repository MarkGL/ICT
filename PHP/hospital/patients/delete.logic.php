<?php
		$db = new mysqli('localhost','root','','hospital');
		$id = $db->escape_string($_GET["id"]);	
		
		$query = "SELECT patient.*, clients.name as clients_name,
				species.species_names as species_names,
				gender.gender_names as gender_name,
				patient.status as status_name
				FROM patient 
				LEFT JOIN clients ON clients.id  = patient.clients_id 
				LEFT JOIN species ON species.id  = patient.species_id
				LEFT JOIN gender ON gender.id = patient.gender_id
				WHERE patient.id=$id" ;

		$result = $db->query($query);
		$data = $result->fetch_assoc();

	if ($_SERVER["REQUEST_METHOD"] == "GET"):
		$patient = NULL;
		if (isset($_GET['id'])):
			// Get Patient for id
			
			$query = "select * from patient where id=$id";
			$result = $db->query($query);
		
			$patient = $result->fetch_assoc();		
		endif;
		if ($patient == NULL):
			// No patient found
			http_response_code(404);
			include("../common/not_found.php");
			exit();
		endif;
	elseif ($_SERVER["REQUEST_METHOD"] == "POST"):
		if (isset($_POST['confirmed'])):
			$db = new mysqli('localhost','root','','hospital');
		
			// Prepare data for delete
			$id = $db->escape_string($_POST["id"]);
	
			// Prepare query and execute
			$query = "delete from patient where id=$id";
			$result = $db->query($query);
		endif;
		
		// Tell the browser to go back to the index page.
		header("Location: ./");
		exit();
	endif;

?>