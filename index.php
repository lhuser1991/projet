<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <h1> TP1 </h1>

    <h2> Exercice 1 </h2>

    <p> Saisissez vos données : </p>

    <form class="formulaire" action="./index.php" method="post">

        <input class="input" type="text" name="name" placeholder="Nom">
        <input class="input" type="text" name="color" placeholder="Couleur">
        <input class="input" type="text" name="size" placeholder="Taille">
        <input class="input" type="text" name="weight" placeholder="Poids">
        <input class="input" type="text" name="price" placeholder="Prix">
        <input class="input" type="text" name="description" placeholder="Description">
        <input class="input" type="text" name="stock" placeholder="Stock">
        <input class="input" type="text" name="vendor" placeholder="Fournisseur">
        <input class="valid" type="submit" value="Valider">

    </form>

    <?php

    

    echo "<br> Nom du produit : " . $_POST['name'] . "<br/>";
    echo "<br> Couleur du produit : " . $_POST['color'] . "<br/>";
    echo "<br> Taille du produit : " . $_POST['size'] . "<br/>";
    echo "<br> Poids du produit : " . $_POST['weight'] . "<br/>";
    echo "<br> Prix du produit : " . $_POST['price'] . "<br/>";
    echo "<br> Description du produit : " . $_POST['description'] . "<br/>";
    echo "<br> Qté en stock du produit : " . $_POST['stock'] . "<br/>";
    echo "<br> Fournisseur du produit : " . $_POST['vendor'] . "<br/>";

    ?>

    <h2> Exercice 2 </h2>

    <p> Saisissez vos données : </p>

    <form class="formulaire" action="./index2.php" method="post">

        <input class="input" type="text" name="brand" placeholder="Marque">
        <input class="input" type="text" name="model" placeholder="Modele">
        <input class="input" type="text" name="color" placeholder="Couleur">
        <input class="input" type="text" name="km" placeholder="Kilometres">
        <input class="input" type="text" name="fuel" placeholder="Carburant">
        <input class="input" type="text" name="year" placeholder="Année">
        <input class="input" type="text" name="price" placeholder="Prix">
        <input class="input" type="text" name="power" placeholder="Puissance">
        <input class="input" type="text" name="options" placeholder="Options">
        <input class="valid" type="submit" value="Valider">

    </form>

    <h2> Exercice 3 </h2>

    <p> Saisissez vos données : </p>

    <form class="formulaire" action="./index.php" method="post">

        <input class="input" type="text" name="id" placeholder="Pseudo">
        <input class="input" type="password" name="mdp" placeholder="Mot de passe">
        <input class="input" type="mail" name="mail" placeholder="Email">
        <input class="valid" type="submit" value="Valider">

    </form>

    <?php

    $caractereMin = 3;
    $caractereMax = 10;
    $contenuPseudo = $_POST["id"];
    $taillePseudo = strlen($contenuPseudo);

    if (($taillePseudo < $caractereMin) || ($taillePseudo > $caractereMax)) {
        echo "Veuller saisir un nouveau pseudo compris entre 3 et 10 caractere";
    } else {
        echo "<br> Votre pseudo : " . $_POST['id'] . "<br/>";
        echo "<br> Votre mdp : " . $_POST['mdp'] . "<br/>";
        echo "<br> Votre mail : " . $_POST['mail'] . "<br/>";
    }

    ?>

    <h2> Exercice 4 </h2>

    <form class="formulaire" action="./index.php" method="get">

        <input class="valid" type="submit" name="man" value="Vous êtes un homme">
        <input class="valid" type="submit" name="woman" value="Vous êtes une femme">

    </form>

    <h2> Exercie 5 </h2>

    <h2> Exercice 6 </h2>

    <?php
    
    for ($a = 1; $a < 101; $a++) {
        if($a==50) {
            echo "<h3 style='color:red;'> ".$a." </h3>";
        } else {
            echo "<h3> ".$a." </h3>";
        }
    }

    ?>

    <h2> Exercice 7 </h2>

    <?php
    

    
    ?>

    <h2> Exercice 8 </h2>

    <?php

    echo "<ul>";
    for ($i = 1; $i < 101; $i++) {
        echo "<li>" . $i . "</li>";
    }
    echo "</ul>";

    ?>

    <h2> Exercice 9 </h2>

    <?php

    for ($i = 1; $i < 101; $i++) {
        echo "<h3> Titre à afficher 100 fois </h3>";
    }

    ?>

    <h2> Exercice 10 </h2>

    <?php

    for ($i = 1; $i < 101; $i++) {
        echo "<h3> Titre à afficher " . $i . " fois </h3>";
    }

    ?>




</body>

</html>