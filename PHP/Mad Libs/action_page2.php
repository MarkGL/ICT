<html>
	<head>
    	<title>Mad Libs</title>
    	<link rel="stylesheet" type="text/css" href="style.css" />
    </head>
		<body>
			<h1> Mad Libs </h1>
			<div class="Menu">
				<li><a href="index.php">Er heerst paniek...</a></li>
				<li><a href="Onkunde.php">Onkunde</a></li>
			</div>
			<div class="Text">
					Er zijn veel mensen die niet kunnen
			<b><?php 
			echo $_GET["een"]; 
			?></b>
					.
					Neem nou
			<b><?php 
			echo $_GET["twee"]; 
			?></b>
					.
			Zelfs met hulp van een 
			<b><?php 
			echo $_GET["vier"]; 
			?></b>
					of zelfs
			<b><?php 
			echo $_GET["drie"]; 
			?></b>
					kan
			<b><?php 
			echo $_GET["twee"]; 
			?></b>
					niet
			<b><?php 
			echo $_GET["een"]; 
			?></b>
					.
					Dat heeft niet te maken met een gebrek aan 
			<b><?php 
			echo $_GET["vijf"]; 
			?></b>
					, maar met een te veel aan
			<b><?php 
			echo $_GET["zes"]; 
			?></b>
					.
					Te veel
			<b><?php 
			echo $_GET["zes"]; 
			?></b>
					leid
			<b><?php 
			echo $_GET["zeven"]; 
			?></b>
					en dat is niet goed als je wilt
			<b><?php 
			echo $_GET["twee"]; 
			?></b>
					.
					Helaas voor
			<b><?php 
			echo $_GET["een"]; 
			?></b>
					.

			</div>
			</body>
</html>