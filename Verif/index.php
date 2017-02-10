<!-- PHP -->
<?php
$titre = "Check Age";
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
  <form action="check.php" method="get" id="formulaire">
    <p class="check">
      <label for="age">Etes vous majeur ?</</label></br>
      <select name="annee" id="annee">
        <?php
            for($i= 2017; $i >= 1900; $i--){
              echo "<option value= '$i' >$i</options>";
            }
        ?>
      </select>
      <select name="age" id="age">
        <?php
            for($i = 16; $i <= 99; $i++){
              echo "<option value= '$i'>$i</option>";
            }
        ?>
      </select></br>
      <input type="submit" name="" value="Envoyer" id="button">
    </p>
  </form>
  <h3 class="checkage">
    <?php
      if(isset($_GET["result"])){
        echo $_GET["result"]."<br>";
      }
    ?>
  </h3>
<footer>
</footer>
</body>
</html>
