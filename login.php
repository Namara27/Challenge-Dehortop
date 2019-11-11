<?php
require_once('databaseConnReizen.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Orbitron|Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>Dehortop Trips and Travels</title>
</head>
<body>
<div id="wrapper">
    <header>
        <h4>Dehortop Reizen</h4>
        <nav>
            <a href="index.html">Home</a> |
            <a href="bestemmingen.php">Bestemmingen</a> |
            <a href="">Reizen</a> |
            <a href="registreer.php">Registreer</a> |
            <a href="login.php">Inloggen</a>
        </nav>
    </header>
    <h2>Inloggen</h2>
    <form action="login.php" method="post" enctype="multipart/form-data">
        <p>Gebruikersnaam</p>
        <input type="text" name="gebruikersnaamInlog">
        <p>Wachtwoord</p>
        <input type="password" name="wachtwoordInlog">
        <p></p>
        <input type="submit" name="login" value="Inloggen">
        <footer>
            <p>&copy; Dehortop 2019</p>
        </footer>
</div>
</body>
</html>
