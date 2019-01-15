<?php
session_start();

// verification que l'utilisateur est co */
if(empty($_SESSION['id'])) {
    $_SESSION['message'] = "Attention vous n'etes pas co";
    header('location: login.php');
}
?>

<?php include("include/navbar2.php"); ?>


      <div class="container">


              <div class="row">
                <img class="mx-auto d-block" src="images/index2.png" height="130px" width="250px" />

                  <div class="col-md-3">


                      <a href="grostest.php"><button type="submit" id="submit" name="submit" class="btn btn-purple">Rechercher un film</button></a>
                  </div>
              </div>


      </div>


    <div class="row">


        <?php

        include('traitement/pdo.php');

        $query = $bdd->prepare("SELECT * FROM film");
        $query->execute();
        $films = $query->fetchAll();

        foreach($films as $film) { ?>

            <div class="col-md-4" style="padding-top: 10px;">
                <div class="card text-center">
                  <center>
                    <img class="card-img-top" width="100%" height="500" src="images/<?php echo $film['photo']; ?>.jpg" alt="Card image cap">
                  </center>
                    <div class="card-body">
                        <h5 class="card-title"><a style="text-decoration: none; color: #88446b;" href=""><?php echo $film['nom']; ?></a></h5>
                        <div class="card-body">
                            <span>Réalisateur: <?php echo $film['realisateur']; ?> </span><br>
                            <span>Durée : <?php echo $film['duree']; ?></span><br>
                            <span>Résumé : <?php echo $film['resume']; ?> | </span>
                            <span>Catégorie : <?php echo $film['categorie']; ?></span><br>

                        </div>
                    </div>

                </div>
            </div>

        <?php } ?>


            </div>
</div>

</div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/font.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body></html>
