<!DOCTYPE HTML>
<html>
<head>
<title>Exemple</title>
</head>
<body>

  <?php
  // ---------------1---------
  $nom = "fievet";
  echo "$nom";

  // ---------------2---------
  $nom = "fievet";
  $prenom = "nicolas";
  $age = "38";
  echo "$nom"." $prenom"." $age";

  // ---------------3---------
  $km = 125;
  echo $km;

  // ---------------4---------
  $texte = "string";
  $entier = 38;
  $decimal = 12.34;
  $debutant = true;
  echo "$texte"." $entier"." $decimal"." $debutant";

  // ---------------5---------
  $texte = "quelque chose";
  echo "on a ".$texte;

  // ---------------6---------
  $nom = "nicolas";
  echo "Bonjour ".$nom.", comment va tu ?";

  // ---------------7---------
  $nom = "fievet";
  $prenom = "nicolas";
  $age = 38;
  echo "Bonjour ".$nom." $prenom".",tu as ".$age." ans.";

  // ---------------8---------
  $op1 = 3+4;
  $op2 = 5*20;
  $op3 = 45/5;
  echo $op1." $op2 ".$op3;
  ?>

</body>
</html>
