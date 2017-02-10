<!-- PHP -->
<?php
$titre = "Lotterie";
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
  <form action="lotterie.php" method="post" id="lotterie">
    <p class="titre">Entrer les participants :</p>
    <input type="text" name="lotterie" id="participants">
    <input type="submit" name="envoyer" id="button2">
  </form>
  <!--Lotterie PHP-->
  <p class="lotterie">
    <?php
      if(isset($_POST["lotterie"])){
        $lotterie = $_POST["lotterie"];
        $tableau = explode(" ",$lotterie);
        $rand = array_rand($tableau);
        echo "Le gagnant est : ".$tableau[$rand]."\n";
      }
    ?>
  </p>
<footer>
</footer>
</body>
</html>
