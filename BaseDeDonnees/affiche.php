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
// Requête base de données
$result = $bdd -> query("SELECT * FROM utilisateurs ORDER BY utilisateurs . id ASC ");

// Afficher résultat de la requete

while($data = $result -> fetch()){
  echo "Utilisateur :".$data[0]."\n";
  echo "Prenom :".ucfirst($data[1])."\n";
  echo "Nom : ".strtoupper($data[2])."\n";
  echo "Phone : ".$data[3]."\n";
  echo "Email : ".$data[4]."\n";
  echo "Password : ".$data[5]."\n"."\n";
  $data++;
}




 ?>
