
<?php

/* Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta */

$randomNumber = [];
$nItem = 15;
while (count($randomNumber) <= $nItem){
  $num= rand(0, 15);

  if (!in_array($num, $randomNumber)){
    $randomNumber[] = $num;
  }
}



?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack-4</title>
</head>
<body>

<h1>Ecco i tuoi numeri fortunati: &#127808; </h1>



  <ul>

  <?php
        for($i = 0; $i < count($randomNumber) -1; $i++):
          echo "<li>$randomNumber[$i]</li>";
        endfor;
      ?>
  </ul>
</body>
</html>