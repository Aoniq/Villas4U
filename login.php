<?php
session_start();
if(isset($_POST["submit"])){
  include("config.php");
  $email = $_POST['email'];
  $wachtwoord = md5($_POST['wachtwoord']);

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
}
 ?>
   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/css/style.css">
  <script src="https://kit.fontawesome.com/23451d210d.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
</head>
<body>
<header class="header">
    <div class="container-fluid">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="./index.php" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <img src="./assets/img/logo.png" alt="" height = "110" class="">
        </a>
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="./index.php" class="nav-link px-2 text-black fw-bold">Home</a></li>
          <li><a href="./villas.php" class="nav-link px-2 text-black fw-bold">Villa's</a></li>
          <li><a href="./contact.php" class="nav-link px-2 text-black fw-bold">Contact</a></li>
        </ul>

        <div class="text-end">
          <!-- <button type="button" class= "px-4 py-2 btn btn-outline-warning text-bright border-warning border-5 rounded-4 shadow">Login</button> -->
          <?php
          if(!isset($_SESSION['loggedin'])){
            ?>
                      <a href="login.php" class="px-4 py-2 btn btn-outline-warning text-bright border-warning border-5 rounded-4 shadow">Login</a>
          <a href="register.php" class="px-4 py-2 btn btn-warning text-white rounded-4 shadow">Registeren</a>
<?php
          }
          ?>

          <!-- <button type="button" class="px-4 py-2 btn btn-warning text-white rounded-4 shadow">Registeren</button> -->
        </div>
      </div>
    </div>

  </header>
    <div class="container mt-5 py-5">
       
        <div class="w-75 mx-auto mt-3">
            <h5 class="fw-bolder">Login</h5>
            <form method="post" action="contact.php" class="w-75 mx-auto">
                <div class="row mb-3">
                    <label for="gebruikersnaam" class="col-sm-3 col-form-label">Gebruikersnaam <i class="text-danger fw-bold fs-5">*</i></label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="gebruikersnaam" name="gebruikersnaam">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="email" class="col-sm-3 col-form-label">Email <i class="text-danger fw-bold fs-5">*</i></label>
                    <div class="col-sm-7">
                        <input type="email" class="form-control" id="email" name="email">
                        <div id="passwordHelpBlock" class="form-text"></div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-7">
                        <button type="submit" name="submit" class="px-3 py-2 btn btn-warning text-white rounded-2 shadow">Opslaan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <footer class="fixed-bottom d-flex flex-wrap justify-content-between align-items-center py-3 mt-4 footer">
  <ul class="nav col-md-4 justify-content-start">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Mobile App</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Community</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Company</a></li>
    </ul>

    <a href="#" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <img src="./assets/img/logo.png" class="img-fluid" alt="">
    </a>

    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Help Desk</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Blog</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Resources</a></li>
    </ul>
    <div class="row justify-content-center align-items-center text-center gx-5 w-100">
        <div class="col-1"><i class="fa-brands fa-github fs-1"></i></div>
        <div class="col-1"><i class="fa-brands fa-instagram fs-1"></i></div>
        <div class="col-1"><i class="fa-brands fa-facebook fs-1"></i></div>
</div>


  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
  </body>
</html>