<html>
 	<head>
  		<link rel="stylesheet" type="text/css" href="style.css" />
 	</head>
 		<div>
	 		<?php
				  $date = date("H:i:s");

				  if ($date >= 0 && $date <= 6) {
				   echo "Goede Nacht! ";
				   echo '<body style="background-image:url(night.png)">';
				   echo '<title>' . "Goede Nacht!" . '</title>';
				  } else if ($date >= 12 && $date <= 18) {
				   echo "Goede Middag! ";
				   echo '<body style="background-image:url(afternoon.png)">';
				   echo '<title>' . "Goede Middag!" . '</title>';
				  } else if ($date >= 18 && $date <= 23) {
				   echo "Goede Avond! ";
				   echo '<body style="background-image:url(evening.png)">';
				   echo '<title>' . "Goede Avond!" . '</title>';  
				  } else {
				   echo "Goede Morgen! ";
				   echo '<body style="background-image:url(morning.png)">';
				   echo '<title>' . "Goede Morgen!" . '</title>';
				  }
				   echo '<p>' . "Het is nu " .$date.'</p>';
			?>
 		</div>
	</body>
</html>