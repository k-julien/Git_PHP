<!-- PHP -->
<?php
$titre = "$ _GET";
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
<div id="GET">
  <h2>
    <?php
    if(isset($_GET["langue"])){
        switch ($_GET["langue"]){
          case "en":
                    echo "Hello";
                    break;

          case "es":
                    echo "Hola";
                    break;
          case "jp":
                    echo "Üsss";
                    break;
          case "fr":
                    echo "Bonjour";
                    break;
          default:
                  echo "Veuillez choisir une langue ";
                  break;
          }
    }
    ?>
  </h2>
</div>
<footer>
</footer>
</body>
</html>
