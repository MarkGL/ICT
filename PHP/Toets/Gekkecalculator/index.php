<!doctype html>
<html>
<head>
	<title>calculator</title>
	<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
	<div class="frame">
		<h1>Calculator</h1>
		<form action="index.php">
		
			<label>Gram:</label>
			<input value="" name="getal1"><br>
			
			<label>Hoeveel mensen:</label>
			<input value="" name="getal2"><br>
			
			
			<label></label>
			<input type="submit" value="Reken uit">
		</form>
			<?php 
			if (empty($_GET)) {
    			die;
			}
		$_GET['getal1'];
		$getal1 = $_GET['getal1']; 
			if (is_numeric ($_GET['getal1'])) 
			{ echo $getal1; 
			} 

			else 
			{ echo "Vul een geldig nummer in bij getal 1.
					Dit getal is niet geldig: $getal1";
				echo "<br>";
				//Ik kreeg het niet voor elkaar om de background color te veranderen
			}
		echo "". $_GET['operator'];
		$_GET['getal2'];
		$getal2 = $_GET['getal2'];
			if (is_numeric ($_GET['getal2']))  
			{ echo $getal2; 
			} 

			else 
			{ echo "Vul een geldig nummer in bij getal 2.
					Dit getal is niet geldig: $getal2";
				die;
			}

		{
			$operator=$_GET['operator'];
			if($operator=="/")
		{
			$res = $getal1/$getal2;
		}
		}
		echo "="; 
		echo $res;
	?>
	<img src="images/snoop3.gif" class="snoop3">
	<img src="images/snoop.gif" class="snoop">

	</div>
	<img src="images/snoop3.gif" class="snoop3">
	<img src="images/snoop.gif" class="snoop">

	</div>
</body>
</html>