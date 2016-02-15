<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
	<?php 
	require 'info.php';
	$sql = "SELECT id, omschrijving FROM activiteiten";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>omschrijving</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["omschrijving"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
 ?>
					 <form action="insert.php" method="post">
						  Activiteit toevoegen:<br>
						  <input type="text" name="omschrijving1">
						  <input type="submit" value="Activiteit bijwerken">
					</form>
					<form method="get" action="index.php">
					   	 <button type="submit">Terug naar het hoofdmenu</button>
					</form>
	</body>
</html>