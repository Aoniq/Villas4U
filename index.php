<?php
session_start();

 ?>
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
          <!-- <button type="button" class= "px-4 py-2 btn btn-outline-warning text-bright border-warning border-5 rounded-4 shadow">Login</button> -->
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

          <!-- <button type="button" class="px-4 py-2 btn btn-warning text-white rounded-4 shadow">Registeren</button> -->
        </div>
      </div>
    </div>

  </header>
  <main>
    <div class="container mt-5 pb-5 mb-5">
        <div class="row justify-content-center text-center items-center">
            <h1 class="fw-bolder">Villa te koop</h1>
            <h5>Where luxury needs exclusivity</h5>
        </div>
        <div class="row gy-5">
            <div class="col-md-4">
                <div class="card p-0 shadow">
                    <img src="./assets/img/huis8.jpeg" alt="" class="card-img-top">
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="fs-5 fw-semibold"><i class="fa-solid fa-check"></i> 4990m² Oppervlakte</li>
                            <li class="fs-5 fw-semibold"><i class="fa-solid fa-check"></i> 312m² Woonruimte</li>
                            <li class="fs-5 fw-semibold"><i class="fa-solid fa-check"></i> 5 Slaapkamers</li>
                            <li class="fs-5 fw-semibold"><i class="fa-solid fa-check"></i> 3 Badkamers</li>
                        </ul>
                    </div>
                    <a href="./detail.php?villa=1" class="btn btn-warning w-100">Bekijk meer</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-0 shadow">
                    <img src="./assets/img/huis2.1.jpeg" alt="" class="card-img-top">
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="fs-5 fw-semibold"><i class="fa-solid fa-check"></i> 9600m² Oppervlakte</li>
                            <li class="fs-5 fw-semibold"><i class="fa-solid fa-check"></i> 4 Slaapkamers</li>
                            <li class="fs-5 fw-semibold"><i class="fa-solid fa-check"></i> 2 Badkamers</li>
                            <li class="fs-5 fw-semibold"><i class="fa-solid fa-check"></i> In 1974 gebouwd</li>
                        </ul>
                    </div>
                    <a href="./detail.php?villa=2" class="btn btn-warning w-100">Bekijk meer</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-0 shadow">
                    <img src="./assets/img/huis3.5.jpeg" alt="" class="card-img-top">
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="fs-5 fw-semibold"><i class="fa-solid fa-check"></i> 7450m² Oppervlakte</li>
                            <li class="fs-5 fw-semibold"><i class="fa-solid fa-check"></i> 5 Slaapkamers</li>
                            <li class="fs-5 fw-semibold"><i class="fa-solid fa-check"></i> 2 Badkamers</li>
                            <li class="fs-5 fw-semibold"><i class="fa-solid fa-check"></i> 3 Verdiepingen</li>
                        </ul>
                    </div>
                    <a href="./detail.php?villa=3" class="btn btn-warning w-100">Bekijk meer</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-0 shadow">
                    <img src="./assets/img/villa4-banner.png" alt="" class="card-img-top">
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="fs-5 fw-semibold"><i class="fa-solid fa-check"></i> 100m² Achtertuin</li>
                            <li class="fs-5 fw-semibold"><i class="fa-solid fa-check"></i> 5 Slaapkamers</li>
                            <li class="fs-5 fw-semibold"><i class="fa-solid fa-check"></i> Binnen garage</li>
                        </ul>
                    </div>
                    <a href="#" class="btn btn-warning w-100">Bekijk meer</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-0 shadow">
                    <img src="./assets/img/villa5-banner.png" alt="" class="card-img-top">
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="fs-5 fw-semibold"><i class="fa-solid fa-check"></i> 100m² Achtertuin</li>
                            <li class="fs-5 fw-semibold"><i class="fa-solid fa-check"></i> 5 Slaapkamers</li>
                            <li class="fs-5 fw-semibold"><i class="fa-solid fa-check"></i> Binnen garage</li>
                        </ul>
                    </div>
                    <a href="#" class="btn btn-warning w-100">Bekijk meer</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-0 shadow">
                    <img src="./assets/img/villa6-banner.png" alt="" class="card-img-top">
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="fs-5 fw-semibold"><i class="fa-solid fa-check"></i> 100m² Achtertuin</li>
                            <li class="fs-5 fw-semibold"><i class="fa-solid fa-check"></i> 5 Slaapkamers</li>
                            <li class="fs-5 fw-semibold"><i class="fa-solid fa-check"></i> Binnen garage</li>
                        </ul>
                    </div>
                    <a href="#" class="btn btn-warning w-100">Bekijk meer</a>
                </div>
            </div>
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
