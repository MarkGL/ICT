<?php 
	require 'info.php';
	$text = $_POST ['omschrijving1'];
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "INSERT INTO activiteiten (omschrijving)
	VALUES ('$text')";

	if (mysqli_query($conn, $sql)) {
	    header('Location: toevoegen.php');
	} else {
 ?>
<!DOCTYPE html>
<html>
	<head>
		<title>ToDo</title>
	</head>
<body>
<?php 
	echo "Error: " . $sql . "<br>" . mysqli_error($conn); 
?>
</body>
</html>
<?php
	}
?>