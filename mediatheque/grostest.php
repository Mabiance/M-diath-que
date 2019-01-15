<!DOCTYPE html>
<html lang="en" dir="ltr">

    <meta charset="utf-8">

  <body>
      <img class="mx-auto d-block" src="./images/curiosite.png" height="130px" width="250px" />
      <hr></hr>
  </body>
</html>


<?php
session_start();

// verification que l'utilisateur est co */
if(empty($_SESSION['id'])) {
    $_SESSION['message'] = "Attention vous n'etes pas co";
    header('location: login.php');
}
?>

<?php include("include/navbar2.php"); ?>




<meta charset="utf-8" />
<?php



 include('traitement/pdo.php');




$articles = $bdd->query('SELECT * FROM film ORDER BY id DESC');
if(isset($_GET['search']) AND !empty($_GET['search'])) {
   $q = htmlspecialchars($_GET['search']);
   $articles = $bdd->query("SELECT * FROM film WHERE nom LIKE \"%$q%\" ORDER BY id DESC");
   if($articles->rowCount() == 0) {
      $articles = $bdd->query("SELECT * FROM film WHERE CONCAT(nom, resume) LIKE \"%$q%\" ORDER BY id DESC");
   }
}
?>
<form method="GET">
  <center>
   <input type="search" name="search" placeholder="Nom du film" />
     <button type="submit" id="submit" name="submit" class="btn btn-purple">Rechercher</button>
   </center>
</form>
<?php if($articles->rowCount() > 0) { ?>
   <ul>
   <?php while($a = $articles->fetch()) { ?>
      <br><br><br><br><li>Nom :&nbsp;<?= $a['nom'] ?></li>
        <li>Réalisateur :&nbsp;<?= $a['realisateur'] ?></li>
          <li>Durée :&nbsp;<?= $a['duree'] ?></li>
            <li>Résumé :&nbsp;<?= $a['resume'] ?></li>
              <li>Catégorie :&nbsp;<?= $a['categorie'] ?></li>

   <?php } ?>
   </ul>
<?php } else { ?>
Aucun résultat pour: <?= $q ?>...
<?php } ?>


<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/font.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body></html>
