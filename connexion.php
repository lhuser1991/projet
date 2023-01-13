<?php
$bdd = new PDO('mysql:host=localhost;dbname=projet', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

if(isset($_POST['connexion'])){
$email = trim(htmlspecialchars($_POST['email']));
$mot_de_passe= trim(htmlspecialchars($_POST['mot_de_passe']));

if($email == "ilyas5@hotmail.fr" && $mot_de_passe== "khelfaoui")
{
  echo ('<meta http-equiv="refresh" content="1; URL=accueilconnecte.php">');
}

else
{
  echo ('<meta http-equiv="refresh" content="1; URL=accueil.php">');
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets\connexion.css">
    <link rel="stylesheet" href="assets\bootstrap.css" />
    <title></title>
</head>
<body>
<section> 
<a href="./accueil.php">
<img src="img\logo.png" alt="" class="logo"/>
</a>


<form action="" method="POST">

<div class="texte1">
          <div class="texte2">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                id=""
                placeholder="email"
                name="email"
              />
            </div>
  
            <div class="form-group">
              <input
                type="password"
                class="form-control"
                id=""
                placeholder="mot de passe"
                name="mot_de_passe"
              />
            </div>
        
            <div class="button">
          <button type="submit" class="btn btn-primary" value="connexion" name="connexion">Se connecter</button>
        </div>

</section> 
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