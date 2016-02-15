<?php
		$db = new mysqli('localhost','root','','calendar');
		$id = $db->escape_string($_GET["id"]);	
		
		$query = "SELECT birthdays.*, 
				month1.name as monthname,
				birthdays.day as day
				FROM birthdays 
				LEFT JOIN month1 ON month1.id = birthdays.month_id
				WHERE birthdays.id=$id";

		$result = $db->query($query);
		$data = $result->fetch_assoc();

	if ($_SERVER["REQUEST_METHOD"] == "GET"):
		$person = NULL;
		if (isset($_GET['id'])):
			// Get Patient for id
			
			$query = "select * from birthdays where id=$id";
			$result = $db->query($query);
		
			$person = $result->fetch_assoc();		
		endif;
		if ($person == NULL):
			// No patient found
			http_response_code(404);
			include("../common/not_found.php");
			exit();
		endif;
	elseif ($_SERVER["REQUEST_METHOD"] == "POST"):
		if (isset($_POST['confirmed'])):
			$db = new mysqli('localhost','root','','calendar');
		
			// Prepare data for delete
			$id = $db->escape_string($_POST['id']);
	
			// Prepare query and execute
			$query = "DELETE from birthdays where id=$id";
			$result = $db->query($query);
		endif;
		
		// Tell the browser to go back to the index page.
		header("Location: ./");
		exit();
	endif;

?>