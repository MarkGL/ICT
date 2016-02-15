<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET"):
		$birthdays = NULL;
		if (isset($_GET['id'])):
			// Get Patient for id
			$db = new mysqli('localhost','root','','calendar');
			$id = $db->escape_string($_GET["id"]);
			
			$query = "SELECT * from birthdays where id=$id";
			$result = $db->query($query);
		
			$birthdays = $result->fetch_assoc();

			$query = "SELECT * from month1";
			$result = $db->query($query);
		
			$month_list = $result->fetch_all(MYSQLI_ASSOC);

		endif;
		if ($birthdays == NULL):
			// No patient foundq
			http_response_code(404);
			include("../common/not_found.php");
			exit();
		endif;
	elseif ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','calendar');
		
		// Prepare data for update
		$id = $db->escape_string($_POST["id"]);
		$person = $db->escape_string($_POST["person"]);
		$month_id = $db->escape_string($_POST["month_id"]);
		$day = $db->escape_string($_POST["day"]);		
		$year = $db->escape_string($_POST["year"]);	
		// Prepare query and execute
		$query = "UPDATE birthdays SET year=$year, day=$day, person='$person', month_id=$month_id WHERE id=$id";
		$result = $db->query($query);
    // Tell the browser to go back to the index page.
    header("Location: ./");
    exit();
	endif;

?>