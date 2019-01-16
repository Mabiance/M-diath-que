<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="04454bcf68d297a27d760c4d9e68ff30.png">

    <title>Panel Administration - Menu - CostumTech</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<!-- BODY -->
<body>

<nav class="navbar navbar-dark bg-dark fixed-top navbar-expand-lg">

    <div class="container">

        <a class="navbar-brand" href="index2.php">
            <img src="./images/play.png" width="40" height="40" class="d-inline-block align-top" alt="">
            <img src="./images/monster.png" width="40" height="40" class="d-inline-block align-top" alt="">
        </a>
        <a class="navbar-brand" href="index2.php">Mabidéo</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index2.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="panel.php">Gestion</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="commentaire2.php">Commentaires</a>
</li>
            </ul>


                        <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="traitement/logout.php">Deconnexion</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

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
</div>
