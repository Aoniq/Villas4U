<?php
session_start();
if(!isset($_SESSION['email'])){
  $_SESSION['email'] = NULL;
}
 ?>

<!doctype html>
<html lang="en">

<head>
  <title>Luxury</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/css/style.css">
  <script src="https://kit.fontawesome.com/23451d210d.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
</head>

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
          } else {
            ?>
         <a href="logout.php" class="px-4 py-2 btn btn-outline-warning text-bright border-warning border-5 rounded-4 shadow">Log uit</a> 
         <?php }
          ?>
          </div>
      </div>
    </div>

  </header>
  <main>
    <div class="container-fluid pb-5 mb-5 px-0">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
          <?php
          $length = count($fotos);

          for ($i = 0; $i < $length; $i++) {
            // Voer hier je code uit voor elke iteratie van de loop
            $isActive = ($i === 0) ? 'active' : ''; // Controleert of het de eerste button is

          ?>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $i ?>" class="<?= $isActive ?>" aria-current="<?= $isActive === 'active' ? 'true' : 'false' ?>" aria-label="Slide <?= $fotos[$i]['id'] ?>">
            </button>
          <?php
          }
          ?>

        </div>
        <div class="carousel-inner">
          <?php
          $length = count($fotos);

          for ($i = 0; $i < $length; $i++) {
            // Voer hier je code uit voor elke iteratie van de loop
            $isActive = ($i === 0) ? 'active' : ''; // Controleert of het de eerste foto is
            $bestandsnaam = $fotos[$i]['naam']; // Bestandsnaam van de foto

          ?>
            <div class="carousel-item <?= $isActive ?>">
              <img src="./assets/img/<?= $bestandsnaam ?>" class="d-block img-fluid w-100" alt="...">
            </div>
          <?php
          }
          ?>


        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <div class="container mt-5">
        <div class="row gx-5">
          <div class="col-md-6">
            <!-- Informatie -->
            <div class="pb-5">
              <h2><?= $villaData['naam'] ?></h2>
            </div>


            <div class="pb-5">
              <p class="fw-bold">Inleiding </p>
              <p><?= $villaData['inleiding'] ?></p>
            </div>

            <p class="fw-bold">Locatie </p>
            <iframe class="map" src="<?= $villaData['map'] ?>"></iframe>
          </div>


          <div class="col-md-6">
            <!-- Biedingen -->
            <h5 class="fw-bolder">Hoogste biedingen</h5>
            <ul class="list-unstyled">
              <?php
              $lengte = count($biedingen);
              if ($lengte >= 1) {
                for ($i = 0; $i < $lengte; $i++) {
                  ?>
    
                    <li><span <?php if(!isset($_SESSION['loggedin']))?>><?= $biedingen[$i]['naam'] ?></span> - €<?= $biedingen[$i]['prijs'] ?> - <?= $biedingen[$i]['datum'] ?> <?php
                    if($biedingen[$i]['email'] == $_SESSION['email']){
                      //Dit is zn eigen bod
                      ?>
                      <a style="color: black!important;" href ="bod-del.php?m=<?=$biedingen[$i]['email']?>&id=<?=$biedingen[$i]['id']?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
                      <?php
                    }
                  ?></li>
    
                  <?php }
                  }
                  ?>  
              

              
            </ul>
            <div class="mt-3">
              <h5 class="fw-bolder">Doe een bod</h5>

              <?php
              if(isset($_SESSION['loggedin'])){
              for ($i = 0; $i < 1; $i++) {
                if ($lengte >= 1) {
                if ($biedingen[$i]['prijs'] == null) {
                  $biedingen[$i]['prijs'] = 1000000;
                }
              } else {
                $biedingen[$i]['prijs'] = 1000000;
              }
              ?>
                <p> <strong style="color: red;">Let op:</strong> bod moet hoger zijn dan <?=$biedingen[$i]['prijs']?></p>

              <?php }


                ?>
                <form action="detail.php?villa=<?php echo $villaId; ?>" method="POST">
                  <div class="row mb-3">
                    <label for="voornaam" class="col-sm-3 col-form-label">Voornaam</label>
                    <div class="col-sm-7">
                      <input required readonly type="text" class="form-control" id="voornaam" name="voornaam" value="<?=$_SESSION['voornaam']?>" readonly>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="achternaam" class="col-sm-3 col-form-label">Achternaam</label>
                    <div class="col-sm-7">
                      <input required readonly type="text" class="form-control" id="achternaam" name="achternaam" value="<?=$_SESSION['achternaam']?>" readonly>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="telefoonnummer" class="col-sm-3 col-form-label">Telefoonnummer</label>
                    <div class="col-sm-7">
                      <input required readonly type="tel" class="form-control" id="telefoonnummer" name="telefoonnummer" value="<?=$_SESSION['telefoon']?>">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-7">
                      <input required readonly type="email" class="form-control" id="email" name="email" value="<?=$_SESSION['email']?>">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="bod" class="col-sm-3 col-form-label">Bod</label>
                    <div class="col-sm-7">
                      <input required type="number" class="form-control" id="bod" min="1000000" name="bod">
                    </div>
                  </div>
                  <button type="submit" name="submit" class="px-3 py-2 btn btn-warning text-white rounded-2 shadow">Opslaan</button>
                </form>
                <?php
              }else{
                ?>
              <p>U dient ingelogd te zijn voordat u kunt bieden</p>
              <?php
              }
              ?>

            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid row justify-content-center bg-light mt-5">
        <div class="col-md-6 py-3">
          <ul class="list-group list-group-flush bg-light">
            <li class="list-group-item bg-light">Energie: <?= $villaData['energie'] ?></li>
            <li class="list-group-item bg-light">Slaapkamers: <?= $villaData['slaapkamers'] ?></li>
            <li class="list-group-item bg-light">Badkamers: <?= $villaData['badkamers'] ?></li>
            <li class="list-group-item bg-light">Verdiepingen: <?= $villaData['verdiepingen'] ?></li>
            <li class="list-group-item bg-light">Oppervlakte: <?= $villaData['oppervlakte'] ?>m2</li>
            <li class="list-group-item bg-light">Bouwjaar: <?= $villaData['bouwjaar'] ?></li>
          </ul>
        </div>
      </div>
    </div>

  </main>
  <!-- place footer here -->
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 mt-4 footer bottom-0">
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
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>