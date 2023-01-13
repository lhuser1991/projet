<?php
$bdd = new PDO('mysql:host=localhost;dbname=projet', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/article.css" />
    <link rel="stylesheet" href="../assets/bootstrap.css" />
    <title>Document</title>
</head>
<body>
<section>

<!--Barre de navigation en bootstrap-->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
    <a href="../accueil.php">
    <img src="../img/logo2.png" alt="" class="logo" />
  </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Rechercher un article" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Acceder</button>
      </form>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../connexion.php">Se connecter</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../inscription.php">S'inscrire</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="panier.php"></a>
            <img
                    src="../img/icone/icons8-cart-64.png"
                    alt="shopping basket"
                    class="icone_basket"
                /></a>
          </li>

        </ul>

      </div>
    </div>
  </nav>


  <?php
  $resultat = $bdd->query('SELECT * FROM ARTICLE where sexe ="enfant"');
  $html =' <div class ="d-flex flex-wrap">';
    while ($ligne = $resultat->fetch(PDO::FETCH_ASSOC)){
  
    $html .=
      '<div class ="card m-3 " style="width :18rem;">
      <img src="./' .$ligne['lien_img'] .'" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">' .$ligne['titre'] .'</h5>
        <p class=card-text">' . $ligne['taille'] .'</p>
        <p class=card-text">' . $ligne['prix'] .'</p>
        <a href="#" class="btn btn-primary">Acheter</a>
      </div>
    </div>';
  }
  $html .='</div>';
 echo $html
  
?>
       
         