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

        <!--Créez une fonction qui retourne deux nombres aléatoire allant 
        de 1 à 15. Si le premier nombre est plus grand que le deuxième affichez 
        "le premier nombre est plus grand que le deuxième" sinon si le deuxième
         nombre est plus grand affichez "le premier nombre est plus petit que le deuxième". affichez "les deux nombres sont égaux" si les deux nombres sont identiques. --> 
        <div class="col-12 col-md-4 border border-dark">
          <h2 class="text-center">Exo4</h2>
          <div class=" d-flex justify-content-between">
            <div class="">
              <p>For</p>
              <?php
                $rand1 = rand(1 ,15);
                $rand2 = rand(1 ,15);
                function number ( $a ,$b){
                    if ($a > $b){
                        echo $a . ' est plus grand que ' . $b;
                    }else if ($a < $b) {
                        echo $a . ' est plus petit que ' . $b;
                    }else{
                        echo $a. ' ' .$b. 'sont egaux.';
                    }
                }

            number($rand1 , $rand2);
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