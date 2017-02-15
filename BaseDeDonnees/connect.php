<?php
// Définitions des constantes
include 'constantes_test.php';

// Connexion à Mysql sans base de données
$bdd = new PDO('mysql:host='.DB_HOST, DB_USER, DB_PASSWORD);

// Création de la base de données
$requete = "CREATE DATABASE IF NOT EXISTS `".DB_NAME."` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";

// Préparation et éxecution de la requête
$bdd -> prepare($requete) -> execute();


 ?>
