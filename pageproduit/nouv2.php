<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/nouv.css">
    <link rel="stylesheet" href="../assets/bootstrap.css" />
    <title></title>
   
</head>
<body>
<section>      
<!--Barre de navigation en bootstrap-->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
  <a href="../accueil.php">
        <img src="../img/logo2.png" alt="" />
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
          <a class="nav-link active" aria-current="page" href="connexion.php">Se connecter</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="inscription.php">S'inscrire</a>
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
<div>
    <h3>Polo blanc homme à motif</h3></br>
      <h4>12.99e</h4>
    </div>
      
      <img src="../img/card2nouv.png" alt="" class="nouv2"/>  
      <a href="#" class="btn btn-primary">Ajoutez au panier</a></br>
  
</section> 
     <!--footer!-->
  <footer class="bas">

    <div id="colonne1">

        <ul>
            <li>
              <a href="../contact.html">Contact</a>
            </li>
            <li>
              <a href="../recrutement.html">Recrutement</a>
            </li>
            <li>
              <a href="../faq.html">FAQ</a>
            </li>
            <li>
              <a href="../moyenpaiement.html">Moyens de paiement</a>
            </li>
            <li>
              <a href="../modedelailivraison.html">Mode et delai de livraison</a>
            </li>
          </ul>
    </div>

    <div id="colonne2">
      <h6>Infos pratiques</h6>
      <h6>Horaires d'ouverture</h6>
      <h6>Du lundi au vendredi de 9h à 20h</h6>
      <h6>Localisation</h6>
      <h6>Boulevard de l'hopital</h6>
      <h6>75011 Paris</h6>
    </div>
    <div id="colonne3">
      <h6>Réseaux sociaux</h6>
    </div>
    <div id="colonne4">
      <ul>
        <li>
          <a href="">CGV</a>
        </li>
        <li>
          <a href="">Rédiger un avis</a>
        </li>
        <li>
          <a href="">Mentions Légales</a>
        </li>
      </ul>
    </div>
  </footer>
</body>
</html>