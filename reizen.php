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
            <a href="reizen.php">Reizen</a> |
            <a href="registreer.php">Registreer</a> |
            <a href="login.php">Inloggen</a>
        </nav>
    </header>
    <?php
    //Display the data in a table
    $test = $conn->query("SELECT reisnaam, reissoort, begindatum, einddatum FROM reizen");

    print "<table class ='overzicht'>";
    print "<tr><th>Naam</th><th>Soort</th><th>Begindatum</th><th>Einddatum</th><th></th></tr>";
    foreach ($test as $row) {
        print "<tr>";
        print "<td>" . $row['reisnaam'] . "</td>";
        print "<td>" . $row['reissoort'] . "</td>";
        print "<td>" . $row['begindatum'] . "</td>";
        print "<td>" . $row['einddatum'] . "</td>";
        print "<td>" . '<a href="reisboeken.php">Boeken</a>' . "</td>";
        print "</tr>";
    }
    print "</table>";
    ?>
    <footer>
        <p>&copy; Dehortop 2019</p>
    </footer>
</div>
</body>
</html>
