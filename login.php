<?php
session_start();
if(isset($_POST["submit"])){
  include("config.php");
  $email           = $_POST['email'];
  $wachtwoord      = md5($_POST['wachtwoord']);

  $stmt = $connection -> prepare('SELECT id, voornaam, achternaam, email, telefoonnummer, password, role FROM users WHERE email=? AND password=?');
  $stmt -> bind_param('ss', $email, $wachtwoord);
  $stmt -> execute();
  $stmt -> store_result();
  $stmt -> bind_result($id, $voornaam, $achternaam, $email, $telefoon, $password, $role);
  $stmt -> fetch();
  if($stmt -> num_rows > 0){
  $_SESSION['userid']  = $id;
  $_SESSION['voornaam']        = $voornaam;
  $_SESSION['achternaam']      = $achternaam;
  $_SESSION['email']           = $email;
  $_SESSION['telefoon']        = $telefoon;
  $_SESSION['role']            = $role;
  $_SESSION['loggedin']        = true;
header("location: index.php");
}else{
  header("location: index.php?e=10043");
}
}else{
  $foutmelding = $_GET['e'];

  if ($foutmelding == 10043){
    $foutmelding = "Email of wachtwoord onjuist";
  }
 ?>
         <!DOCTYPE html>
         <html lang="en">
         <head>
             <meta charset="UTF-8">
             <title>Login</title>
             <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
             <link rel="stylesheet" href="assets/css/login.css">
             <style type="text/css">
                 body{ font: 14px sans-serif; }
                 .wrapper{ width: 350px; padding: 20px; }
             </style>
         </head>
         <body>
         <center>
         <div class="contact-us">
             <h2>Login</h2>
             <p>Vul aub je inloggegevens in.</p>
            <?php if(isset($foutmelding)){
              echo "<p style='color: red;'>$foutmelding</p>";
            }?>
             <form method="post">
                 <div class="form-group">
                     <label>E-mail</label>
                     <input type="email" name="email" class="form-control" placeholder="email..." required>
                 </div>
                 <div class="form-group">
                     <label>Password</label>
                     <input type="password" name="wachtwoord" class="form-control" placeholder="wachtwoord...">
                 </div>
                 <div class="form-group">
                     <input type="submit" class="btn btn-primary"value="submit" name="submit">
                 </div>
             </form>
         </div>
         </center>
         </body>
         </html>
         <?php
       }
         ?>
