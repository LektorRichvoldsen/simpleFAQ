<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<title>Registrer spørsmål</title>
</head>

<body>
	<?php
	if (isset($_POST['submit'])) {
		//Gjøre om POST-data til variabler
		$brukernavn = $_POST['brukernavn'];
		$sporsmaal = $_POST['sporsmaal'];
		$dato = date('Y-m-d H:i:s'); //henter tidspunktet akkurat nå

		include('connection-info.php');
		//Koble til databasen
		$dbc = mysqli_connect($tjener, $brukernavn, $passord, $database)
			or die('Error connecting to MySQL server.');

		//Gjøre klar SQL-strengen
		$query = "INSERT INTO question (username, question, date_asked) VALUES ('$brukernavn','$sporsmaal', '$dato')";

		echo $query;
		//Utføre spørringen
		$result = mysqli_query($dbc, $query)
			or die('Error querying database.');

		//Koble fra databasen
		mysqli_close($dbc);

		//Sjekke om spørringen gir resultater
		if ($result) {
			header('Location: ' . 'se-sak.php');
			die();
		} else {
			//Ugyldig login
			echo "Noe gikk galt, prøv igjen!";
		}
	}
	?>
</body>

</html>