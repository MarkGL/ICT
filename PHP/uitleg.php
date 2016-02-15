<?php

require("config.php");

define(SERVERNAME, "localhost");
define(USERNAME, "root");
define(PASSWORD, "");
define(DBNAME, "denaamvanjoudatabase");

$con = msqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);

if (!$con)  {
	die("Connection failed: " . msqli_connect_error());
}

$sql = "SELECT * FROM `activiteiten`";

$result = mysqli_query($con, $sql);

$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

foreach ($rows as $row => $value) {
	echo $row['id'] . "<br>";
	echo $row['omschrijving'] . "<br>";
}