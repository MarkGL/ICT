	<?php 
			$id = $_GET['id'];
		require 'info.php';

			if (!$conn) {
			    die("Connection failed: " . mysqli_connect_error());
			}

		$sql = "SELECT id, omschrijving FROM activiteiten WHERE id = $id";
		$result = mysqli_query($conn, $sql);
		$todoitem = $result->fetch_assoc();
		mysqli_close($conn);
		echo $todoitem['id'];
		echo $todoitem['omschrijving'];
	?>

<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
</head>
<body>

	<form method="post" action="bewerken1.php">
	  <input type="hidden" name="id" value="<?php echo $todoitem['id']; ?>">
	  <br>
	  Omschrijving:<br>
	  <input type="text" name="omschrijving" value="<?php echo $todoitem['omschrijving']; ?>">
	  <input type="submit" value="Activiteit bijwerken">
	</form>
		<form method="get" action="index.php">
				<button type="submit">Terug naar het hoofdmenu</button>
		</form>

</body>
</html>