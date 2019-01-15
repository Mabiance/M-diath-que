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
      <?php

      include('traitement/pdo.php');

      $query = $bdd->prepare("SELECT * FROM film");
      $query->execute();
      $films = $query->fetchAll();
?>
        <div class="col-10">
            <table class="table table-bordered">
                <thead>
                <tr class="table-danger">
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Réalisateur</th>
                    <th scope="col">Durée</th>
                    <th scope="col">Résumé</th>
                    <th scope="col">Catégorie</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>

      <?php foreach($films as $film) { ?>
                <tbody>
                                    <tr>
                        <th scope="row"><?php echo $film['id']; ?></th>
                        <td><?php echo $film['nom']; ?> </td>
                        <td><?php echo $film['realisateur']; ?> </td>
                        <td><?php echo $film['duree']; ?> </td>
                        <td><?php echo $film['resume']; ?> </td>
                        <td><?php echo $film['categorie']; ?> </td>
                        <td>  <img class="card-img-top" src="images/<?php echo $film['photo']; ?>.jpg" ></td>
                        <td>
                            <a href="modifier2.php"><button type="button" class="btn btn-sm btn-white"><i style="color : 	darkorchid" class="fas fa-edit"></i></button></a>

                        </td>
                    </tr>
                    </tbody>

                    <?php } ?>
            </table>



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
