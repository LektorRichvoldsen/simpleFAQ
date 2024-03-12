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
//Opprette kobling
		include('connection-info.php');
		$kobling = new mysqli($tjener, $brukernavn, $passord, $database);
		
		//Sjekk om kobling virker
		if($kobling->connect_error) {
			die("Noe gikk galt: " . $kobling->connect_error);
		}
		
		//Angi UTF-8 som tegnsett
		$kobling->set_charset("utf8");
		
		$sql = "SELECT * FROM question";
		$resultat = $kobling->query($sql);
        
        echo "<div class='container'>";
		//Skriver ut innholdet i tabellen
		while($rad = $resultat->fetch_assoc()) {
    
			$user = $rad["username"];
			$question = $rad["question"];
            
            echo "<div class='questionArea'>";
            echo "<h4>$user</h4>";
            echo "<textarea id='sporsmaal' name='sporsmaal' rows='4' cols='50' disabled>$question</textarea>";
            echo "</div>";

		}
        echo "</div>";
	?>
</body>
</html>