<?php
// Définitions des constantes
include 'constantes_test.php';


// Connexion à la Base de Données
try{
  $connexion = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
}
catch(Exception $e){
  die('MySql Erreur : '.$e->getMessage());
}

// Vérif si connexion OK
if($connexion){
  // Création de la requête
  $requete = "CREATE TABLE users(
              id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
              prenom VARCHAR(255) NOT NULL ,
              nom VARCHAR(255) NOT NULL ,
              ville VARCHAR(255) NOT NULL ,
              email VARCHAR(255) NOT NULL UNIQUE
              )";
  // Préparation et éxecution de la requête
  $connexion->prepare($requete)->execute();
  echo "Table créee avec succèes \n";
}
else{
  echo "Connexion Base de Données échoué \n";
}

?>
