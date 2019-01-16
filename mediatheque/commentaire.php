<?php
session_start();
include("include/navbar.php");
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title></title>
  </head>
  <body>

        <div class="container">
          <div class="col-md-8 mx-auto">
              <?php
              if(isset($_SESSION['message'])) { ?>
                  <div class="alert alert-purple alert-dismissible fade show" role="alert" >
                      <?php
                      echo $_SESSION['message'];
                      unset($_SESSION['message']);
                      ?>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <?php
              }
              ?>
          </div>
            <div class="row">

                <div class="col-md-12">
                    <div class="form-area text-center">

                            <br style="clear:both">
                            <h3 style="margin-bottom: 25px; text-align: center;">Commentaires</h3>

                            <form class="" action="traitement/traicom.php" method="post">

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Pseudo:</span>
                                </div>
                                <input type="text" class="form-control" id="text" name="pseudo" value="" placeholder="" required>
                            </div>


                            <div class="input-group mb-3">

                                <div class="input-group-prepend">
                                    <span class="input-group-text">Commentaire:</span>
                                </div>
                                <input type="text" class="form-control" id="text" name="commentaire" value="" placeholder="" required>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Note :</span>
                                </div>
                                <input type="text" class="form-control" id="text" name="note" value="" placeholder="chiffre entre 0 et 5" required>
                            </div>

                          <a><button type="submit" id="submit" name="submit" class="btn btn-purple">Poster</button></a>
                    </form>
                    </div>
                </div>

                <?php

                $bdd = new PDO('mysql:host=localhost;dbname=commentaire;charset=utf8','root','');

                $query = $bdd->prepare("SELECT * FROM commentaire");
                $query->execute();
                $films = $query->fetchAll();

                foreach($films as $film) { ?>

                    <div class="col-md-4" style="padding-top: 10px;">
                        <div class="card text-center">

                            <div class="card-body">

                                <div class="card-body">
                                    <span>Pseudo: <?php echo $film['pseudo']; ?> </span><br>
                                    <span>Commentaires : "<?php echo $film['commentaire']; ?>"</span><br>
                                    <span>Note: <?php echo $film['note']; ?>/5 </span>

                                </div>
                            </div>

                        </div>
                    </div>

                <?php } ?>
            </div>
        </div>







    </body></html>

  </body>
</html>



<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/font.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body></html>
