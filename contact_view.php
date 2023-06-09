<!doctype html>
<html lang="en">

<head>
  <title>Luxury</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="https://kit.fontawesome.com/23451d210d.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<body>
  <!-- place header here -->
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
        <?php
          if(!isset($_SESSION['loggedin'])){
            ?>
                      <a href="login.php" class="px-4 py-2 btn btn-outline-warning text-bright border-warning border-5 rounded-4 shadow">Login</a>
          <a href="register.php" class="px-4 py-2 btn btn-warning text-white rounded-4 shadow">Registeren</a>
<?php
          }
          ?>        </div>
      </div>
    </div>

  </header>
  <main>
  <div class="container mt-5 py-5">
  <div class="text-center mb-4">
    <h2 class="fw-bold">Heb je vragen?</h2>
    <h5 class="fw-bolder">Neem contact met ons op</h5>
  </div>
  <div class="w-75 mx-auto mt-3">
    <h5 class="fw-bolder">Contactformulier</h5>
  <form method="post" action="contact.php" class="w-75 mx-auto">
    <div class="row mb-3">
      <label for="voornaam" class="col-sm-3 col-form-label">Voornaam <i class="text-danger fw-bold fs-5">*</i></label>
      <div class="col-sm-7">
        <input type="text" class="form-control" id="voornaam" name="voornaam">
      </div>
    </div>
    <div class="row mb-3">
      <label for="achternaam" class="col-sm-3 col-form-label">Achternaam <i class="text-danger fw-bold fs-5">*</i></label>
      <div class="col-sm-7">
        <input type="text" class="form-control" id="achternaam" name="achternaam">
      </div>
    </div>
    <div class="row mb-3">
      <label for="telefoonnummer" class="col-sm-3 col-form-label">Telefoonnummer <i class="text-danger fw-bold fs-5">*</i></label>
      <div class="col-sm-7">
        <input type="tel" class="form-control" id="telefoonnummer" name="telefoonnummer">
      </div>
    </div>
    <div class="row mb-3">
      <label for="email" class="col-sm-3 col-form-label">Email <i class="text-danger fw-bold fs-5">*</i></label>
      <div class="col-sm-7">
        <input type="email" class="form-control" id="email" name="email">
        <div id="passwordHelpBlock" class="form-text">
        Gelieven geen @glr.nl mails gebruiken, deze komen vaak niet aan.
</div>
      </div>
    </div>
    <div class="row mb-3">
      <label for="bericht" class="col-sm-3 col-form-label">Bericht <i class="text-danger fw-bold fs-5">*</i></label>
      <div class="col-sm-7">
      <textarea class="form-control shadow-sm" id="bericht" rows="3" name="bericht"></textarea>
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

  </main>

    <!-- place footer here -->
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 mt-4 footer">
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