<!doctype html>
<html>
<head>
	<title>calculator</title>
	<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
	<div class="frame">
		<h1>Calculator</h1>
	<?php 
		$_GET['getal1'];
		$getal1 = $_GET['getal1']; 
			if (is_numeric ($_GET['getal1']))  
			{ echo $getal1; 
			} 

			else 
			{ echo "Vul een geldig nummer in bij getal 1.
					Dit getal is niet geldig: $getal1";
				echo "<br>";
			}
		echo "". $_GET['operator'];
		$_GET['getal2'];
		$getal2 = $_GET['getal2'];
			if (is_numeric ($_GET['getal2']))  
			{ echo $getal2; 
			} 

			else 
			{ echo "Vul een geldig nummer in bij getal 1.
					Dit getal is niet geldig: $getal1";
				die;
			}

		{
			$operator=$_GET['operator'];
			if($operator=="+")
		{
			$res = $getal1+$getal2;
		}
			if($operator=="-")
		{
			$res = $getal1-$getal2;
		}
			if($operator=="*")
		{
			$res = $getal1*$getal2;
		}
			if($operator=="/")
		{
			$res = $getal1/$getal2;
		}
		}
		echo "="; 
		echo $res;

	?>
	<form action="index.php">
	<label></label>
	<input type="submit" value="Go Back">
	</form>
	</div>
