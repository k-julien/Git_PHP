<?php
// Constantes
include("constantes_test.php");

// Connection base de données
try{
  $bdd = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
}
catch(Exception $e){
  die('MySql Erreur : '.$e->getMessage());
}

$prenom   = readline("prenom    :");
$nom      = readline("nom       :");
$ville    = readline("ville     :");
$email    = readline("email     :");
//$password = readline("password  :");

// Insertion base de données
$bdd -> exec("INSERT INTO users (prenom, nom, ville, email) VALUES ('$prenom', '$nom', '$ville', '$email')");


?>
