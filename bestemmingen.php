<?php
require_once('databaseConn.php');
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
            <a href="">Registreer</a> |
            <a href="">Inloggen</a>
        </nav>
    </header>
    <div id="overzichtHouder">
        <h3>KKAlternative</h3>
        <?php
        //Display the data in a table
        $test = $conn->query("SELECT Bestemmingcode, Plaats, Land, Werelddeel FROM bestemmingen");
        print "<table class ='overzicht'>";
        print "<tr><th>Code</th><th>Plaats</th><th>Land</th><th>Werelddeel</th></tr>";
        foreach ($test as $row) {
            print "<tr>";
            print "<td>" . $row['Bestemmingcode'] . "</td>";
            print "<td>" . $row['Plaats'] . "</td>";
            print "<td>" . $row['Land'] . "</td>";
            print "<td>" . $row['Werelddeel'] . "</td>";
            print "</tr>";
        }
        print "</table>";
        ?>
    </div>
    <footer>
        <p>&copy; Dehortop 2019</p>
    </footer>
</div>
</body>
</html>

<?php

?>