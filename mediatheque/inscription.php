<?php session_start(); ?>

<?php include("include/navbar.php"); ?>


<div class="d-block mx-auto col-md-4 col-xs-2">

    <div class="form-area text-center">
        <form id="form-contact" role="form" method="POST" action="traitement/traiinscription.php">
            <br style="clear:both">
            <h3 style="margin-bottom: 25px; text-align: center;">Formulaire d'Inscription</h3>

            <div class="form-group">
                <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom (*5 caracteres)" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="identifiant" name="identifiant" placeholder="Identifiant" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe" required>
            </div>
              <a href="index2.php"><button type="submit" id="submit" name="submit" class="btn btn-purple">Inscription</button><br><br></a>
        <img class="mx-auto d-block" src="images/ins.png" height="130px" width="250px" />
        </form>
    </div>
</div>


</div>

<script src="js/snow.js"></script>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/font.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body></html>
