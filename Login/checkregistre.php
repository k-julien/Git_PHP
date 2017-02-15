<?php
function registre(){
  if(isset($_POST["log"]) && isset($_POST["mdp"])){
    $login = $_POST["log"]." ".$_POST["mdp"];
    file_put_contents("registre.txt",$login);
    header("Location:login.php");
  }
  else{
    return "Veuillez vous enregistrer";
  }
}

registre();

 ?>
