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
					Er heerst paniek in het koningkrijk
			<b><?php 
			echo $_GET["een"]; 
			?></b>
					.
			<br>
					"Koning
			<b><?php 
			echo $_GET["twee"];
			?></b>
					is ten einde raad en als koning
			<b><?php 
			echo $_GET["twee"];
			?></b>
					ten einde raad is, dan roept hij zijn ten-einde-raadsheer
			<b><?php 
			echo $_GET["zes"];
			?></b>
					."
			<br>
				"<b><?php 
			echo $_GET["zes"];
			?></b>
					, het is een ramp! Het is een schande!""
			<br>
					"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"
			<br>
					"Mijn
			<b><?php 
			echo $_GET["een"];
			?></b>
					is verdwenen! Zo maar, zonder waarschuwing.""
			<br>
					"En ik had net 
			<b><?php 
			echo $_GET["vijf"];
			?></b>
					voor hem gekocht!"
			<br>
					"Majesteit, uw
			<b><?php 
			echo $_GET["een"];
			?></b>
					komt vast vanzelf weer terug?"
			<br>
					"Ja da's leuk en aardig, maar hoe moet ik in de tussentijd 
			<b><?php 
			echo $_GET["acht"];
			?></b>
					leren?""
			<br>
					"Maar Sire, daar kunt u toch uw
			<b><?php 
			echo $_GET["zeven"];
			?></b>
					voor gebruiken."
			<br>
			"<b><?php 
			echo $_GET["zes"];
			?></b>
					, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."
			"<b><?php 
			echo $_GET["acht"];
			?></b>
					, Sire"
			</div>
			</body>
</html>