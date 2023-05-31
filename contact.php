<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['submit'])) {
  $voornaam = $_POST['voornaam'];
  $achternaam = $_POST['achternaam'];
  $email = $_POST['email'];
  $telefoonnummer = $_POST['telefoonnummer'];
  $bericht = $_POST['bericht'];

  $subject = 'Nieuwe contactaanvraag van '.$voornaam.' '.$achternaam;
  $message = '<html>
  <head>
  <title>Nieuwe contactaanvraag van '.$voornaam.' '.$achternaam.'</title>
  </head>
  <body>
  <p style="color: black;">Nieuwe contactaanvraag van '.$voornaam.' '.$achternaam.'
  <br>
  De volgende gegevens zijn achtergelaten<br>
  Naam: '.$voornaam.' '.$achternaam.'<br>
  Email: '.$email.'<br>
  Telefoonnummer: '.$telefoonnummer.'<br>
  Bericht: '.$bericht.'
  </p>
  </body>
  </html>';

  // Voeg wat headers toe
  $headers[] = 'MIME-Version: 1.0';
  $headers[] = 'Content-type: text/html; charset=iso-8859-1';
  $headers[] = 'From: Luxury <jeffrey.vanoordvandervlies@gmail.com>';

  // Verstuur de e-mail
  if (mail($email, $subject, $message, implode("\r\n", $headers))) {
    ?>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    
    <script>
        document.addEventListener("DOMContentLoaded", function() {
    // Je PHP-code die de e-mail verstuurt en de SweetAlert-melding weergeeft
    Swal.fire({
        icon: 'success',
        title: 'Verzonden',
        text: 'De e-mail is succesvol verzonden!'
      })
  });
      
    </script>
    <?php
  } else {
    ?>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
    // Je PHP-code die de e-mail verstuurt en de SweetAlert-melding weergeeft
    Swal.fire({
        icon: 'error',
        title: 'Fout',
        text: 'Er is een fout opgetreden tijdens het verzenden van de e-mail.'
      })
  });
      
    </script>
    <?php
  }
}

include_once('contact_view.php');

?>