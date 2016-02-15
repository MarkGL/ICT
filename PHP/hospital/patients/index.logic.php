<?php
	
	$db = new mysqli('localhost','root','','hospital');

	$query = "SELECT patient.*, clients.name as clients_name, 
				species.species_names as species_names,
				gender.gender_names as gender_name
				FROM patient 
				LEFT JOIN clients ON clients.id  = patient.clients_id 
				LEFT JOIN species ON species.id  = patient.species_id
				LEFT JOIN gender ON gender.id = patient.gender_id" ;
	$result = $db->query($query);
	
	$patients = $result->fetch_all(MYSQLI_ASSOC);

?>
