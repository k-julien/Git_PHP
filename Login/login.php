<!-- PHP -->
<?php
$titre = "Login";
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
  <form action="checklogin.php" method="post">
    Login : <input type="text" name="login" >
    Password :  <input type="password" name="password">
                <input type="submit" name="" value="Envoyer">
  </form>
  <div id="Registre">
    <form action="checkregistre.php" method="post">
      <label>Veuillez vous enregistrer :</label>
      <input type="text" placeholder="user" name="log">
      <input type="password" placeholder="password" name="mdp">
      <input type="submit" name="" value="Envoyer">
    </form>
  </div>
<footer>
</footer>
</body>
</html>
