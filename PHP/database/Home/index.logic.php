<?php
	$db = new mysqli('localhost','root','','calendar');

	$query = "SELECT birthdays.*, month1.name as month1_name
	FROM birthdays
	LEFT JOIN month1
    ON month1.id = birthdays.month_id
	ORDER BY month1.id, day, person ASC";
	$result = $db->query($query);
	
	$persons = $result->fetch_all(MYSQLI_ASSOC);

?>
