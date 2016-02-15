<?php
		require 'info.php';

			if (!$conn) {
			    die("Connection failed: " . mysqli_connect_error());
			}

		$id = $_POST['id'];
		$sql = "DELETE FROM activiteiten WHERE id = $id";
		$result = mysqli_query($conn, $sql);

		mysqli_close($conn);

		header("location:index.php");
		?>