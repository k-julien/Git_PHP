<?php
session_start();

if(isset($_POST["vie"]) && isset($_POST["mini"]) && isset($_POST["max"])){
  $_SESSION["vie"] = $_POST["vie"];
  $_SESSION["mini"] = $_POST["mini"];
  $_SESSION["max"] = $_POST["max"];
  $_SESSION["game"] = false;
  $_SESSION["rand"] = rand($_SESSION["mini"], $_SESSION["max"]);
  header("Location:play.php");
}
else{
  return "Veuillez remplir tout les champs";
  header("Location:index.php");
}
 ?>
