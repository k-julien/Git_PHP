<?php


function login(){
  if(isset($_POST["login"]) && isset($_POST["password"])){
    $login = $_POST["login"]." ".$_POST["password"];
    if($login == file_get_contents("registre.txt")){
      header("Location:home.php");
    }
    else{
      header("Location:error.php");
    }
  }
}

login();



 ?>
