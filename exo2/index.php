<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="main.css"> -->
    <title>Part2</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <h1 class="col-12 text-center border border-dark">Part2</h1>

        <!--Créez une fonction qui retourne une chaîne de caractère -->
        <div class="col-12 col-md-4 border border-dark">
          <h2 class="text-center">Exo2</h2>
          <div class=" d-flex justify-content-between">
            <div class="">
              <p>For</p>
              <?php
                $text = 'Hello Abigail !!';
                function returnText($string = 'coucou'){
                  return $string;
                }
                echo returnText();
              ?>
            </div>
          </div>
        </div>
        </div>
      </div>
    <!-- <script src = "https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src= "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->
  </body>
</html>