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

        <!--Créez deux variables contenant chacune une string. Créez une fonction qui retourne le contenu de ces deux variable. -->
        <div class="col-12 col-md-4 border border-dark">
          <h2 class="text-center">Exo2</h2>
          <div class=" d-flex justify-content-between">
            <div class="">
              <p>For</p>
              <?php
                $text1 = 'Hello';
                $text2 = 'Abigail';
                $text3 = 'ça va ?';
                function concatString($string1, $string2){
                    $concatText = $string1 . ' ' . string2;
                  return $concatText;
                }
                echo concatString($text1, $text2 , $text3);
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