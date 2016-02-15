<?php
		$db = new mysqli('localhost','root','','calendar');

		$query = "SELECT * from birthdays";
		$result = $db->query($query);

		$birthdays = $result->fetch_all(MYSQLI_ASSOC);

		$query = "SELECT * from month1";
		$result = $db->query($query);
	
		$month_list = $result->fetch_all(MYSQLI_ASSOC);

	if ($_SERVER["REQUEST_METHOD"] == "POST"):

		// Prepare data for insertion
		$person = $db->escape_string($_POST["person"]);
		$day = $db->escape_string($_POST["day"]);
		$month_id = $db->escape_string($_POST["month_id"]);
		$year = $db->escape_string($_POST["year"]);
		// Prepare query and execute
		$query = "INSERT into birthdays (person, day, month_id, year) 
			values ('$person','$day','$month_id', '$year')";
		$result = $db->query($query);
	
    // Tell the browser to go back to the index page.
    header("Location: ./");
    exit();
	endif;