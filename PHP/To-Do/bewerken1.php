<?php 
	require 'info.php';
	$id = $_POST['id'];
	$text = $_POST['omschrijving'];
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "UPDATE activiteiten SET omschrijving='$text' WHERE id = $id";

	if (mysqli_query($conn, $sql)) {
	    header('Location: update1.php');
	} else {
	    echo "Error updating record: " . mysqli_error($conn);
	}
	mysqli_close($conn);
	header('Location: index.php');
 ?>