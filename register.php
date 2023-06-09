<html>
<head>
  <link rel="stylesheet" href="assets/css/form.css">

</head>
<?php
include("config.php");

if(isset($_POST["submit"])){

$gebruikersnaam  = $_POST['gebruikersnaam'];
$voornaam        = $_POST['voornaam'];
$achternaam      = $_POST['achternaam'];
$email           = $_POST['email'];
$telefoon        = $_POST['telefoon'];
$prehashpass     = $_POST['wachtwoord'];
$wachtwoord      = md5($_POST['wachtwoord']);

$stmt = $connection -> prepare('INSERT INTO users (voornaam, achternaam, email, telefoonnummer, password) VALUES (?,?,?,?,?)');
$stmt -> bind_param('ssss', $voornaam, $achternaam, $email,  $telefoonnummer, $wachtwoord);
$stmt -> execute();

$subject = 'Account aangemaakt op jeffrey.010devs.nl/villas4u';
      $message = '
<html>
<head>
<title>Hallo '.$voornaam.' '.$achternaam.'!</title>
</head>
<body>
<p style="color: black;">Hallo '.$voornaam.' '.$achternaam.'!<br>
<br>
Er is een account voor jou aangemaakt op <strong><a href="https://jeffrey.010devs.nl/villas4u">jeffrey.010devs.nl/villas4u</a></strong>.<br>
De volgende gegevens zijn ingevuld:<br>
Naam: '.$voornaam.' '.$achternaam.'<br>
Email: '.$email.'<br>
Wachtwoord: '.$prehashpass.'</p>
<br>
<p style="color: red;">Alle wachtwoorden zijn gehashed in de database, dit is de enige keer dat het wachtwoord "plain" te zien is. Bewaar deze dus <strong>GOED</strong></p>
<br>
<p style="color: gray;">Deze mail is automatisch gegenereerd door het jeffrey.010devs.nl/villas4u systeem, hierdoor kan je hier niet op reageren.</p>
</body>
</html>';
      //voeg wat headers toe
      $headers[] = 'MIME-Version: 1.0';
      $headers[] = 'Content-type: text/html; charset=iso-8859-1';
      $headers[] = 'To: '.$voornaam.' <'.$email.'>';
      $headers[] = 'From: villas4u <info@jeffrey.010devs.nl>';

      mail($email, $subject, $message, implode("\r\n", $headers));

echo "Account is succesvol aangemaakt";
}else{
 ?>
 <form autocomplete="off" method="post">
     <div class="container">
         <form>
             <div class="row">
                 <div class="col-25">
                     <label for="voornaam">Voornaam</label>
                 </div>
                 <div class="col-75">
                     <input type="text" id="voornaam" name="voornaam" placeholder="voornaam..." required>
                 </div>
             </div>
             <div class="row">
                 <div class="col-25">
                     <label for="achternaam">Achternaam</label>
                 </div>
                 <div class="col-75">
                    <input type="text" id="achternaam" name="achternaam" placeholder="achternaam..." required>
                 </div>
             </div>
             <div class="row">
                 <div class="col-25">
                     <label for="email">E-mail</label>
                 </div>
                 <div class="col-75">
                    <input type="email" id="email" name="email" placeholder="email..." required>
                 </div>
             </div>
             <div class="row">
                 <div class="col-25">
                     <label for="email">Telefoonnummer</label>
                 </div>
                 <div class="col-75">
                    <input type="number" id="telefoon" name="telefoon" placeholder="06..." required>
                 </div>
             </div>
             <div class="row">
                 <div class="col-25">
                     <label for="wachtwoord">Wachtwoord</label>
                 </div>
                 <div class="col-75">
                    <input type="text" id="wachtwoord" name="wachtwoord" placeholder="wachtwoord..."required>
                 </div>
             </div>
             <div class="row">
                 <input type="submit" value="submit" name="submit">
             </div>
         </form>

         <?php
}
          ?>
</html>
