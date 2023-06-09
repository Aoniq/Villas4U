<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include de config.php
require_once 'config.php';

// Controleer of de "villa" parameter aanwezig is in de URL
if(isset($_GET['villa'])) {
    // Ontvang de waarde van de "villa" parameter
    $villaId = $_GET['villa'];

    // Gebruik de $connection-variabele voor databasebewerkingen
    $villaQuery = "SELECT * FROM villas WHERE id = $villaId";
    $villaResult = mysqli_query($connection, $villaQuery);

    // Controleer of er een resultaat is
    if(mysqli_num_rows($villaResult) > 0) {
        // Haal de gegevens op van de gevonden villa
        $villaData = mysqli_fetch_assoc($villaResult);

        // Haal de foto bestandsnamen op voor de desbetreffende villa
        $fotosQuery = "SELECT * FROM fotos WHERE villa_id = $villaId";
        $fotosResult = mysqli_query($connection, $fotosQuery);

        // Maak een array om de foto bestandsnamen op te slaan
        $fotos = array();

        // Voeg de foto bestandsnamen toe aan de array
        while($row = mysqli_fetch_assoc($fotosResult)) {
            $fotos[] = $row;
        }

        // Haal de 5 hoogste biedingen op voor de desbetreffende villa
        $biedingenQuery = "SELECT * FROM biedingen WHERE villa_id = $villaId ORDER BY prijs DESC LIMIT 5";
        $biedingenResult = mysqli_query($connection, $biedingenQuery);

        // Maak een array om de biedingen op te slaan
        $biedingen = array();

        // Voeg de biedingen toe aan de array
        while($row = mysqli_fetch_assoc($biedingenResult)) {
            $biedingen[] = $row;
        }
         
        // Controleer of er een bod is geplaatst via het formulier
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Controleer of alle velden zijn ingevuld
            if (!empty($_POST['naam']) && !empty($_POST['email']) && !empty($_POST['bedrag'])) {
                // Ontvang de ingediende gegevens van het formulier
                $naam = $_POST['naam'];
                $email = $_POST['email'];
                $bedrag = $_POST['bedrag'];

                // Ontvang de villa ID uit de querystring
                $villaId = $_GET['villa'];

                // Voeg het bod toe aan de database
                $bodQuery = "INSERT INTO biedingen (villa_id, naam, email, prijs) VALUES ($villaId, '$naam', '$email', $bedrag)";
                $result = mysqli_query($connection, $bodQuery);

                // Controleer of het bod succesvol is toegevoegd aan de database
                if ($result) {
                    echo "Bod succesvol geplaatst!";
                } else {
                    echo "Er is een fout opgetreden bij het plaatsen van het bod.";
                }
            } else {
                echo "Vul alle velden in om een bod te plaatsen.";
            }
        }
         
        // Inclusief de detail_view.php en doorgeven van de villa, foto's en biedingen
        require_once 'detail_view2.php';
    } else {
        echo "Villa niet gevonden.";
    }
} else {
    echo "Villa parameter ontbreekt.";
}

// Sluit de databaseverbinding
mysqli_close($connection);
?>
