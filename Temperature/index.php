<!-- PHP -->
<?php
$titre = "Temperature";
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
  <form action="contact.php" method="get">
    Temperature : <input type="int" name="temperature" value="">
    Envoyer : <input type="submit" name="" value="Envoyer">
  </form>

<footer>
</footer>
</body>
</html>
