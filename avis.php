<?php
$bdd = new PDO('mysql:host=localhost;dbname=projet', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

if(isset($_POST['enregistrer'])){
    //enregistrement des entrée utilisateur
    $prenom = trim(htmlspecialchars($_POST['prenom'])) ;
    $date_avis = trim(htmlspecialchars($_POST['date_avis'])) ;
    $nom_article = trim(htmlspecialchars($_POST['nom_article']));
    $avis = trim(htmlspecialchars($_POST['avis']));

// on prepare la requete pour envoyer les informations dans la bdd
$req = $bdd->prepare('INSERT INTO avis(prenom, date_avis,nom_article,avis)
VALUES(:prenom, :date_avis, :nom_article, :avis)');
   
// on execute la requete
    $req->execute(array(
        'prenom'=>$prenom,
        'date_avis'=>$date_avis,
        'nom_article'=>$nom_article,
        'avis'=>$avis,
    ));   
}    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
    <link rel="stylesheet" href="assets\avis.css" />
    <link rel="stylesheet" href="assets\bootstrap.css" />
    <title>Document</title>
</head>

<body>
<section> 
<a href="accueil.php">
<img src="img\logo.png" alt="" class="logo"/>
</a>

<form action="avis.php" method="POST">

<div class="texte1">

<div class="texte2">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                id=""
                placeholder="prenom"
                name="prenom"
              />
            </div>

          <div class="texte2">
            <div class="form-group">
              <input
                type="date"
                class="form-control"
                id=""
                placeholder=""
                name="date_avis"
              />
            </div>
  
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                id=""
                placeholder="Nom de l'article"
                name="nom_article"
              />
            </div>
            <div id="message">
            <div class="form-group">
              <textarea
                class="form-control"
                id="avis"
                rows="7"
                name="avis"
                placeholder="Avis"
              ></textarea>
            </div>
            
            <div class="button">
          <button type="submit" class="btn btn-primary" value="enregistrer" name="enregistrer">Enregistrer l'avis</button>
        </div>
        </form>
 </div>
 
 <br>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Prenom</th>
                <th>Date de l'avis</th>
                <th>Nom de l'article</th>
                <th>Avis</th>
           </tr>
        </thead>

        <tbody>
            <?php
            $sql = "SELECT * FROM avis";
            $result = $bdd->query($sql);
            while($row = $result->fetch()){
                echo "<tr>
                <td>" .$row["id_avis"] . "</td>
                <td>" .$row["prenom"]."</td>
                <td>" .$row["date_avis"]."</td>
                <td>" .$row["nom_article"]."</td>
                <td>" .$row["avis"]."</td>
            </tr>";
            }      
            ?>
        </tbody>

    </table>
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