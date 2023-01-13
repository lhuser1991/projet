<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets\accueil.css">
  <link rel="stylesheet" href="assets\bootstrap.css" />
    <title>Document</title>
</head>
<body>
<section> 
<a href="accueilconnecte.php">
    <img src="./img/logo.png" alt="" class="logo" />
  </a>

<!--Barre de navigation en bootstrap-->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
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
                    src="./img/icone/icons8-cart-64.png"
                    alt="shopping basket"
                    class="icone_basket"
                /></a>
          </li>

        </ul>

      </div>
    </div>
  </nav>

 <!--Caroussel-->


 <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">


        <img src="img\carroussel.jpg" class="center-block" alt="..." />
      </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

<!--Cards-->

<div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col">
      <div class="card" style="width: 12rem;">
        <img src="./img/venteprivee/vp1.webp" class="card-img-top" alt="...">
        <div class="card-body">

          <p class="card-text">US. POLO Assn. </br>Polo - blau</br>Taille L</br>12.99e</p>
          <a href="pageproduit\nouv1.php" class="btn btn-primary">J'achete</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 12rem;">
        <img src="./img/venteprivee/vp2.webp" class="card-img-top" alt="...">
        <div class="card-body">

          <p class="card-text">TIPPED SLIM FIT - Polo - blue</br>Taille M</br>9.99e</p>
          <a href="pageproduit\nouv2.html" class="btn btn-primary">J'achete</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 12rem;">
        <img src="./img/venteprivee/vp3.webp" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">SMALL LOGO PRINT - Polo - dark sapphire</br>Taille S</br>12.99e</p>
          <a href="pageproduit\nouv3.html" class="btn btn-primary">J'achete</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 12rem;">
        <img src="./img/venteprivee/vp4.webp" class="card-img-top" alt="...">
        <div class="card-body">

          <p class="card-text">Pier One </br>Polo - dark green</br>Taille L</br>14.99e</p>
          <a href="pageproduit\nouv4.html" class="btn btn-primary">J'achete</a>
        </div>
      </div>
    </div>
  </div>
</section> 
<!--footer!-->
<footer>

<div id="colonne1">

  <ul>
    <li>
      <a href="contact.html">Contact</a>
    </li>
    <li>
      <a href="recrutement.html">Recrutement</a>
    </li>
    <li>
      <a href="faq.html">FAQ</a>
    </li>
    <li>
      <a href="moyenpaiement.html">Moyens de paiement</a>
    </li>
    <li>
      <a href="modedelailivraison.html">Mode et delai de livraison</a>
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