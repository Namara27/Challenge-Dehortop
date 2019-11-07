<?php
try {
    //Connect to database
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";

    $conn = new PDO("mysql:host=$servername;dbname=2119173_namara_kerkenaar;port=3306", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Database klant toevoegen
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


} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
