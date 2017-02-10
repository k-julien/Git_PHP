<?php

$annee = 2017;

function check($annee,$chiffre2){
  $result = $annee - $_GET["annee"];
    if($result > $_GET["age"]){
      return "Vous etes majeur";
    }
    else{
      return "Vous etes mineur";
    }
}

check($annee,$_GET["annee"]);
header("Location:index.php?result=".check($annee,$_GET["annee"]));





 ?>
