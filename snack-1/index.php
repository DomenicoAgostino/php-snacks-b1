<?php

/* ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, 
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 */

$lbaCalendario = [
  [  'casa'=> 'VIRTUS SEGAFREDO BOLOGNA',
  'ospite'=> 'GERMANI BRESCIA',
  'puntCasa'=> 79,
  'puntOspite'=> 57,],

[
  'casa'=> 'VANOLI BASKET CREMONA',
  'ospite'=> 'DOLOMITI ENERGIA TRENTINO',
  'puntCasa'=> 112,
  'puntOspite'=> 105,
],

[
  'casa'=> 'UMANA REYER VENEZIA',
  'ospite'=> 'ARMANI EXCHANGE MILANO',
  'puntCasa'=> 69,
  'puntOspite'=> 74,
],

[
  'casa'=> 'OPENJOBMETIS VARESE',
  'ospite'=> 'BANCO DI SARDEGNA SASSARI',
  'puntCasa'=> 96,
  'puntOspite'=> 110,
],

[
  'casa'=> 'HAPPY CASA BRINDISI',
  'ospite'=> 'BERTRAM DERTHONA BASKET TORTONA',
  'puntCasa'=> 82,
  'puntOspite'=> 99,
],

[
  'casa'=> 'GEVI NAPOLI BASKET',
  'ospite'=> 'CARPEGNA PROSCIUTTO PESARO',
  'puntCasa'=> 84,
  'puntOspite'=> 85,
],

[
  'casa'=> 'UNAHOTELS REGGIO EMILIA',
  'ospite'=> 'FORTITUDO KIGILI BOLOGNA',
  'puntCasa'=> 88,
  'puntOspite'=> 77,
],

[
  'casa'=> 'ALLIANZ PALLACANESTRO TRIESTE',
  'ospite'=> 'NUTRIBULLET TREVISO BASKET',
  'puntCasa'=> 84,
  'puntOspite'=> 83,
],

];

// var_dump($lbaCalendario);


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack-1</title>
</head>
<body>
<h1>
30° GIORNATA 08/05/2022
</h1>

<ul>
 <?php for( $i=0; $i < count($lbaCalendario); $i++): ?>
  <li>
  <?php echo $lbaCalendario[$i]['casa'].'-'. $lbaCalendario[$i]['ospite'].' | '. $lbaCalendario[$i]['puntCasa']. '-'.$lbaCalendario[$i]['puntOspite'] ?>
</li>
<?php endfor; ?>
</ul>

  
</body>
</html>