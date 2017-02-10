<!-- PHP -->
<?php
$titre = "Manche Open School";
$user = array(
   1 => array("prenom : " => "Julien","nom : " => "Clouet","age : " => 24),
   2 => array("prenom : " => "Julien","nom : " => "Kabeche","age : " => 26),
   3 => array("prenom : " => "Mike","nom : " => "Rego","age : " => 92),
   4 => array("prenom : " => "Wendy","nom : " => "Piot", "age : " => 21)
);

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
  <h2>
    <?php
    foreach($user as $cle1 => $valeur1){
      echo "personne n° : ".$cle1."<br>";
      foreach ($valeur1 as $cle2 => $valeur2){
        echo $cle2.$valeur2." "."<br>";
      }
    }
    ?>
  </h2>
<footer>
</footer>
</body>
</html>
