<?php
session_start();

if($_SESSION["game"] == false){
  if($_SESSION["vie"] == 0){
    header("Location:index.php");
  }
  elseif($_POST["user"] < $_SESSION["rand"]){
    $_SESSION["vie"]--;
    header("Location:play.php?result=Plus");
  }
  elseif($_POST["user"] > $_SESSION["rand"]){
    $_SESSION["vie"]--;
    header("Location:play.php?result=Moins");
  }
  else{
    $_SESSION["game"] = true;
    header("Location:play.php?result=Gagner");
  }
}
 ?>
