

<?php
session_start();
 include("include/navbar2.php"); ?>

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
<form class="" action="traitement/traidrop.php" method="get">


        <div class="col-10">
            <table class="table table-bordered">
                <thead>
                <tr class="table-danger">
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>

                    <th scope="col">Action</th>
                </tr>
                </thead>
<?php foreach($films as $film) { ?>
                <tbody>
                                    <tr>
                        <th scope="row"><?php echo $film['id']; ?></th>
                        <td><?php echo $film['nom']; ?> </td>

                        <td>
                          <a href="traitement/traidrop.php?id=<?php echo $film['id']; ?>"><button type="button" class="btn btn-sm btn-white"><i style="color: 	darkorchid" class="fas fa-trash"></i></button></a>

                        </td>
                    </tr>
                  </tbody><?php } ?>
            </table>
            </form>



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
