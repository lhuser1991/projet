<?php
$bdd = new PDO('mysql:host=localhost;dbname=projet_dw21', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

if(isset($_POST['acceder'])){

    //enregistrement des entrée utilisateur
$article = trim(htmlspecialchars($_POST['article'])) ;

if($article== "homme"){
  echo ('<meta http-equiv="refresh" content="1; URL=pageproduit\articlehomme.php">');
}else if($article== "femme"){
  echo ('<meta http-equiv="refresh" content="1; URL=pageproduit\articlefemme.php">');
}else if($article== "enfant"){
  echo ('<meta http-equiv="refresh" content="1; URL=pageproduit\articleenfant.php">');
}

}
?>


<!DOCTYPE html>
<html lang="fr-FR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets\accueil.css">
  <link rel="stylesheet" href="assets\bootstrap.css" />
  <title></title>
</head>

<body>
 <section> 
  <!--Barre de navigation en bootstrap-->

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
    <div class="container-fluid">
    <a href="accueil.php">
    <img src="./img/logo2.png" alt="" class="logo" />
  </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <form action="" class="d-flex" method="POST">
        <input class="form-control me-2" type="search" placeholder="Rechercher un article" name="article" aria-label="Search">
        <button class="btn btn-outline-success" type="submit" value="acceder" name="acceder">
          Acceder</button>
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
         <!-- clock widget start -->
<script type="text/javascript"> var css_file=document.createElement("link"); css_file.setAttribute("rel","stylesheet"); css_file.setAttribute("type","text/css"); css_file.setAttribute("href","https://s.bookcdn.com//css/cl/bw-cl-126el.css?v=0.0.1"); document.getElementsByTagName("head")[0].appendChild(css_file); </script> <div id="tw_7_177913164"><div style="width:126px; height:82px; margin: 0 auto;"><a href="https://hotelmix.fr/time/paris-18145">Paris</a><br/></div></div> <script type="text/javascript"> function setWidgetData_177913164(data){ if(typeof(data) != 'undefined' && data.results.length > 0) { for(var i = 0; i < data.results.length; ++i) { var objMainBlock = ''; var params = data.results[i]; objMainBlock = document.getElementById('tw_'+params.widget_type+'_'+params.widget_id); if(objMainBlock !== null) objMainBlock.innerHTML = params.html_code; } } } var clock_timer_177913164 = -1; widgetSrc = "https://widgets.booked.net/time/info?ver=2;domid=581;type=7;id=177913164;scode=29895;city_id=18145;wlangid=3;mode=0;details=0;background=ffffff;border_color=ffffff;color=08488d;add_background=ffffff;add_color=00faff;head_color=333333;border=0;transparent=0"; var widgetUrl = location.href; widgetSrc += '&ref=' + widgetUrl; var wstrackId = ""; if (wstrackId) { widgetSrc += ';wstrackId=' + wstrackId + ';' } var timeBookedScript = document.createElement("script"); timeBookedScript.setAttribute("type", "text/javascript"); timeBookedScript.src = widgetSrc; document.body.appendChild(timeBookedScript); </script>
<!-- clock widget end -->
  </nav>
  <h4>Pour accéder au vente privée </br>
      vous devez être inscrit afin d'etre</br>
    connecter sur le site</h4>
  <!--Caroussel-->


  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
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
  <h4>Nouveautés (en quantités limitée)</h4>
  <!--Cards-->

  <div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col">
      <div class="cardgauche" style="width: 12rem;">
        <img src="img\card1nouv.jpg" class="card-img-top" alt="...">
        <div class="card-body">

          <p class="card-text">Chemisier Femme</br>Taille L</br>14.99e</p>
          <a href="pageproduit\nouv1.php" class="btn btn-primary">Je découvre</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="cardgauche" style="width: 12rem;">
        <img src="img\card2nouv.png" class="card-img-top" alt="...">
        <div class="card-body">

          <p class="card-text">Polo blanc homme à motif</br>Taille M</br>12.99e</p>
          <a href="pageproduit\nouv2.php" class="btn btn-primary">Je découvre</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="carddroite" style="width: 12rem;">
        <img src="img\card3nouv.png" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Bébé Sweat- shirt a capuches et pantalon survet</br>Taille 3 ans</br>20.99e</p>
          <a href="pageproduit\nouv3.php" class="btn btn-primary">Je découvre</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="carddroite" style="width: 12rem;">
        <img src="img\card4nouv.png" class="card-img-top" alt="...">
        <div class="card-body">

          <p class="card-text">Chemise homme à bouton unicolore</br>Taille L</br>22.99e</p>
          <a href="pageproduit\nouv4.php" class="btn btn-primary">Je découvre</a>
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
      <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
  

      <img src="./img/fb.png" alt="Facebook">
    </div>
    <div id="colonne4">
      <ul>
        <li>
          <a href="">CGV</a>
        </li>
        <li>
          <a href="avis.php">Rédiger un avis</a>
        </li>
        <li>
          <a href="">Mentions Légales</a>
        </li>
      </ul>
    </div>




  </footer>
</body>

</html>