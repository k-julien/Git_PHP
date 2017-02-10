<!-- PHP -->
<?php
$titre = "Text-Color";
$phrase = "MancheOpenSchool";
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
      <?php
            for($i = 0; $i < strlen($phrase); $i++){
                if($i%2 == 0){
                  echo "<p class='text-red'>$phrase[$i]</p>";
                }
                else{
                  echo "<p class=''>$phrase[$i]</p>";
                }
            }
      ?>
<footer>
</footer>
</body>
</html>
