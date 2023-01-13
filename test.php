<?php
    $host     = 'localhost';
    $username = 'root';
    $password = '';
    $db     = 'projet';
    
    //Créer une connexion et sélectionner la base de données
    $db = new mysqli($host, $username, $password, $db);
    
    //Récupérer l'image à partir du base de données
    $res = $db->query("SELECT image FROM article WHERE id_article =7");
    
 
?>
