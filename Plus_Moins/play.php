<!-- PHP -->
<?php
session_start();
$titre = "Plus ou Moins";
?>

<!--HTMl -->
<!DOCTYPE HTML>
<html lang="fr">

<head>
    <!--En-tête de la page-->
    <?php include("../BasePHP/head.php");?>
</head>
<body>
  <!--Zone Haut Menu + Images-->
        <?php include("../BasePHP/body.php");?>
  <!--First Section-->
  <h4>
    <?php
      echo "Nombre de vie :".$_SESSION["vie"]."<br>";
      echo "Choisir un chiffre entre :".$_SESSION["mini"]." et ".$_SESSION["max"]."<br>";
      if(isset($_GET["result"])){
        echo $_GET["result"]."<br>";
      }
    ?>
  </h4>
  <?php
    if(isset($_GET["result"])){
      if($_SESSION["game"] == true){
  ?>
        <a href="http://localhost/Tp_Php/Plus_Moins/index.php">Click to replay</a>;
  <?php
      }
    }
  ?>
  <form action="check.php" method="post">
    <input type="int" placeholder="Entrer un chiffre" name="user">
    <input type="submit" name="" value="Envoyer">
  </form>
<footer>
</footer>
</body>
</html>
