<?php include("include/navbar2.php"); ?>

    <div class="container">
        <div class="row">

              <div class="col-md-2">
                  <div class="list-group" id="list-tab" role="tablist">
                      <a class="list-group-item list-group-item-action" href="ajouter.php" role="tab" aria-controls="costumes">Ajouter un film </a>
                      <a class="list-group-item list-group-item-action" href="modifier.php" role="tab" aria-controls="profile">Modifier un film</a>

                      <a class="list-group-item list-group-item-action" href="supprimer.php" role="tab" aria-controls="support">Supprimer un film</a>
                  </div>
              </div>

            <div class="col-md-10">
                <div class="form-area text-center">
                    <form id="form-contact" role="form" method="POST" action="traitement/traiadd.php">

                        <br style="clear:both">
                        <h3 style="margin-bottom: 25px; text-align: center;">Ajouter un film</h3>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Nom du Film:</span>
                            </div>
                            <input type="text" class="form-control" id="text" name="nom" value="" placeholder="" required>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Réalisateur:</span>
                            </div>
                            <input type="text" class="form-control" id="text" name="realisateur" value="" placeholder="" required>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Durée:</span>
                            </div>
                            <input type="text" class="form-control" id="text" name="duree" value="" placeholder="" required>
                        </div>
                        <div class="input-group mb-3">

                            <div class="input-group-prepend">
                                <span class="input-group-text">Résumé:</span>
                            </div>
                            <input type="text" class="form-control" id="text" name="resume" value="" placeholder="" required>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Catégorie :</span>
                            </div>
                            <input type="text" class="form-control" id="text" name="categorie" value="" placeholder="Drame,Romance,Fantastique.." required>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Photo :</span>
                            </div>
                            <input type="text" class="form-control" id="text" name="photo" value="" placeholder="nom sans le point jpg" required>
                        </div>



                      <a href="index2.php"><button type="submit" id="submit" name="submit" class="btn btn-purple">Ajouter</button></a>
                    </form>
                </div>
            </div>
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
