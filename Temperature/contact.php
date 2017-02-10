<!-- PHP -->
<?php
$titre = "Temperature";
$temperature = $_GET["temperature"];


function temperature($chiffre){
  if(isset($_GET["temperature"])) {
    if(is_numeric($_GET["temperature"])){
       if($_GET["temperature"] <= 0) {
          return "Il fait très froid";
        }
        elseif($_GET["temperature"] <= 10){
          return "Il fait froid";
        }
        elseif($_GET["temperature"] <= 20){
          return "Temperature normal";
        }
        elseif($_GET["temperature"] <= 30){
          return "Il fait chaud";
        }
        elseif($_GET["temperature"] > 30){
          return "Il fait très chaud";
        }
    }
      else{
        echo "Veuillez entrer un chiffre";
      }
  }
}
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
    <h2 class="text">
      <?php
         echo temperature($_GET["temperature"])." : ".$temperature."°";
      ?>
    </h2>

<footer>
</footer>
</body>
</html>
