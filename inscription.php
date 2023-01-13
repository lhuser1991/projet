<?php
$bdd = new PDO('mysql:host=localhost;dbname=projet', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

if(isset($_POST['enregistrer'])){

    //enregistrement des entrée utilisateur
    $nom = trim(htmlspecialchars($_POST['nom'])) ;
    $prenom = trim(htmlspecialchars($_POST['prenom']));
    $num_tel = trim(htmlspecialchars($_POST['num_tel']));
    $date_naissance = trim(htmlspecialchars($_POST['date_naissance']));
    $email = trim(htmlspecialchars($_POST['email']));
    $mot_de_passe= sha1($_POST['mot_de_passe']);

// on prepare la requete pour envoyer les informations dans la bdd
$req = $bdd->prepare('INSERT INTO client(nom,prenom,num_tel,date_naissance,email,mot_de_passe)
VALUES(:nom, :prenom, :num_tel, :date_naissance, :email, :mot_de_passe)');

// on execute la requete

    $req->execute(array(
        'nom'=>$nom,
        'prenom'=>$prenom,
        'num_tel'=>$num_tel,
        'date_naissance'=>$date_naissance,
        'email'=>$email,
        'mot_de_passe'=>$mot_de_passe
    ));
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets\inscription.css">
    <link rel="stylesheet" href="assets\bootstrap.css" />
    <title>Document</title>
</head>
<body>
<section> 
<a href="accueil.php">
<img src="img\logo.png" alt="" class="logo"/>
</a>


<form action="inscription.php" method="POST">

<div class="texte1">
          <div class="texte2">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                id=""
                placeholder="Nom"
                name="nom"
              />
            </div>
  
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                id=""
                placeholder="Prenom"
                name="prenom"
              />
            </div>
            
            <div class="form-group">
              <input
                type="number"
                class="form-control"
                id=""
                placeholder="Numero de tel"
                name="num_tel"
              />
            </div>
            
            <div class="form-group">
              <input
                type="date"
                class="form-control"
                id=""
                placeholder="Date de naissance"
                name="date_naissance"
              />
            </div>
            
            <div class="form-group">
              <input
                type="email"
                class="form-control"
                id=""
                placeholder="Adresse e-mail"
                name="email"
              />
            </div>
            
            <div class="form-group">
              <input
                type="password"
                class="form-control"
                id=""
                placeholder="Mot de passe"
                name="mot_de_passe"
              />
            </div>


        <div class="button">
          <button type="submit" class="btn btn-primary" value="enregistrer" name="enregistrer">S'enregistrer</button>
        </div>
</form>
</section> 
<footer>

<div id="colonne1">
  
  <ul>
    <li>
      <a href="contact.html">Contact</a>
    </li>
    <li>
      <a href="">Recrutement</a>
    </li>
  <li>
      <a href="">FAQ</a>
    </li>
  <li>
      <a href="">Moyens de paiement</a>
    </li>
  <li>
      <a href="">Mode et delai de livraison</a>
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