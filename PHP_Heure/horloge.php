<!-- PHP -->
<?php

$titre = "TP HEURE";
$heure = date("H:i:s");

 ?>

<!-- HTML -->
<!DOCTYPE HTML>
<html lang="fr">

<head>
    <?php include("../BasePHP/head.php"); ?>
</head>
<body>
    <?php include("../BasePHP/body.php"); ?>
    <p class="heure">
      <?php echo "Il est actuellement : ".$heure."\n";?>
    </p>
<footer>
</footer>
</body>
