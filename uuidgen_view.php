<!doctype html>
<html lang="en">

<head>
  <title>UUID4 Generator</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body style="background-color: #0c0a09;">
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    <div class="container justify-content-center mt-5">
        <div class="row justify-content-center">
        <div class="col-6">
            <div class="card justify-content-center text-center p-5" style="background-color: #1c1917; color: white;">
                <h5>Generate UUID4 voor ID</h5>
                <form action="uuidgen.php" method="POST" class="justify-content-center align-items-center text-center">
                    <div class="mb-3">
                      <label for="" class="form-label">UUID</label>
                      <input type="text"
                        class="form-control" name="" id="uuid" aria-describedby="helpId" placeholder="" value="<?= $uuid ?>" readonly>
                    </div>
                    <button type="submit" class="btn" style="background-color: #facc15; border-color: #facc15;">Submit</button>
                </form>
            </div>
        </div>
        </div>
    </div>
  </main>
  <footer>
    <!-- place footer here -->
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