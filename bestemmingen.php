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
    <form action="bestemmingen.php" method="get" enctype="multipart/form-data">
        <div id="overzichtHouder">
            <?php

            //Display the data in a table
            $orderBy = array('Bestemmingcode', 'Plaats', 'Land', 'Werelddeel');

            $order = 'Bestemmingcode';
            if (isset($_GET['sort']) && in_array($_GET['sort'], $orderBy)) {
                $order = $_GET['sort'];
            }

            $test = $conn->query('SELECT * FROM bestemmingen ORDER BY ' . $order);

            print "<table class ='overzicht'>";
            print "<tr>
                       <th><a href=\"bestemmingen.php?sort=Bestemmingcode\" id='code'>Code</a></th>
                       <th><a href=\"bestemmingen.php?sort=Plaats\" id='plaats'>Plaats</a></th>
                       <th><a href=\"bestemmingen.php?sort=Land\" id='land'>Land</a></th>
                       <th><a href=\"bestemmingen.php?sort=Werelddeel\" id='werelddeel'>Werelddeel</a></th>
                       </tr>";

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
    </form>
    <footer>
        <p>&copy; Dehortop 2019</p>
    </footer>
</div>
</body>
</html>