<html>

<head>
    <link rel="stylesheet" href="css\style.css">
    <meta charset="utf-8">
    <title>Lag FAQ</title>
</head>

<body>
    <form method="post" action="registrer-sak.php">
        <div id="userName">
            <label for="brukernavn">Brukernavn:</label>
            <input type="text" name="brukernavn" /><br />
        </div>
        <div id="question">
            <textarea id="sporsmaal" name="sporsmaal" rows="4" cols="50">Skriv inn spørsmålet ditt her.</textarea>
        </div>
        <input type="submit" value="Legg til spørsmål" name="submit" />
    </form>
    <p>Eller klikk <a href="se-sak.php">her</a> for å se registrerte spørsmål.
</body>

</html>