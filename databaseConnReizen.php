<?php

try {
    //Connect to database
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";

    $conn = new PDO("mysql:host=$servername;dbname=2119173_namara_kerkenaar;port=3306", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Registreren
    if (isset($_POST["submit"])) {
        $voorletters = $_POST['voorletters'];
        $achternaam = $_POST['achternaam'];
        $adres = $_POST['adres'];
        $postcode = $_POST['postcode'];
        $plaats = $_POST['plaats'];
        $telefoonnummer = $_POST['telefoonnummer'];

        $conn->query("INSERT INTO klanten (voorletters, achternaam, adres, postcode, plaats, telefoonnummer) VALUES ('$voorletters','$achternaam','$adres','$postcode','$plaats','$telefoonnummer')");
        echo "Account aangemaakt!";
    }

    //Inloggen
    if (isset($_POST['login'])
        && isset ($_POST['gebruikersnaamInlog'])
        && isset ($_POST["wachtwoordInlog"])) {

        $gebruikersnaam = $_POST['gebruikersnaamInlog'];
        $wachtwoord = $_POST['wachtwoordInlog'];

        $query = "SELECT * FROM klanten WHERE gebruikersnaam='$gebruikersnaam' AND wachtwoord='$wachtwoord'";

        $count = $conn->query($query);
        if($count->rowCount() > 0) {
            header('location: index.html');
            die();
        }
        else {
            echo 'Onjuist wachtwoord of gebruikersnaam';
        }
    }

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
