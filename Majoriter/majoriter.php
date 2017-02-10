<!-- PHP -->
<?php
$titre = "Majeur/Mineur";
$age = 19;
$agelimit = 21;
function check($age,$agelimit){

  if ($age < $agelimit){
    return " Vous etes mineur au États-Unis ";
  }
  if($age >= $agelimit){
    return "Vous etes majeur en France";
  }
};
function pariter($age){
  if($age %2 == 1){
    return  "text-red";
  }
  else{
    return "text-blue";
  }
};
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
    <p class= <?php echo pariter($age) ?> ><?php echo "Vous avez $age "."ans <br>".check($age, $agelimit);?></p>
    <p class= <?php echo pariter(18) ?> ><?php echo "Vous avez 18 "."ans <br>".check($age, 18); ?></p>
<footer>
</footer>
</body>
</html>
