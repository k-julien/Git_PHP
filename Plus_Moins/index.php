<!-- PHP -->
<?php
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
  <form action="reglage.php" method="post">
    Nombre de vie :<input type="int" placeholder="Entrer un chiffre" name="vie">
    Nombre minimum :<input type="int" placeholder="Entrer le chiffre minimum" name="mini">
    Nombre maximum :<input type="int" placeholder="Entrer le chiffre maximum" name="max">
    <input type="submit" name="" value="Envoyer">
  </form>
<footer>
</footer>
</body>
</html>
