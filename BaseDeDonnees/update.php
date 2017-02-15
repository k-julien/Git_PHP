<?php
// Constantes
include("constantes.php");

// Connection base de données
try{
  $bdd = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
}
catch(Exception $e){
  die('MySql Erreur : '.$e->getMessage());
}

// Demande à l'utilisateurs
$email    = readline("email a modifier  : ");


// Check $email Base de Données
$query = $bdd -> query("SELECT * FROM utilisateurs WHERE email = '$email'");
$result = count($query -> fetchAll());


// Requête dans la Base de Données Pour le changement d'email
if(filter_var($email, FILTER_VALIDATE_EMAIL)){
  if($query == true){
    if($result > 0){
      $new      = readline("Nouvelle email    : ");
      if(filter_var($new, FILTER_VALIDATE_EMAIL)){
        $deletequery = $bdd -> query("UPDATE utilisateurs SET email = '$new' WHERE email = '$email'");
        echo "Email modifier"."\n";
      }
      else{
        echo "Rentrer un véritable format d'émail.\n";
      }
    }
  }
    else {
      echo "Cette email n'existe pas "."\n";
    }
}
else {
  echo "Cette email est invalide "."\n";
}



 ?>
