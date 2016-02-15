<?php
	require 'info.php';

		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}

	$sql = "SELECT id, omschrijving FROM activiteiten";
	$result = mysqli_query($conn, $sql);
	$todolist = $result->fetch_all(MYSQLI_ASSOC);
	mysqli_close($conn);
?>

<!-- response -->
<html>

<?php 
	if ($result->num_rows > 0) {
?>
	<table>
		<tr>
			<th>ID</th><th>omschrijving</th>
		</tr>
<?php
	    // output data of each row
	    foreach($todolist as $row) {
?>
	    <tr>
	    	<td><?php echo $row["id"];?></td>
	    	<td><?php echo $row["omschrijving"];?></td>
	    	<td><form method="post" action="verwijderen.php"><input type="hidden" name="id" value="<?php echo $row["id"];?>"><button type="submit">Verwijderen</button></form></td>
	    	<td><form method="get" action="update1.php"><input type="hidden" name="id" value="<?php echo $row["id"];?>"><button type="submit">Bewerken</button></form></td>
	    </tr>
<?php
	    } // end foreach
?>
	</table>
<?php
	} else { 
?>
	<p>0 results</p>
<?php
	} // end if else
?>
	<form method="get" action="toevoegen.php">
	   	 <button type="submit">Toevoegen</button>
	</form>

</html>
